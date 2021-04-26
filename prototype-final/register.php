<?php
$fname = "";
$lname    = "";
$mobile="";
$password    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ctracker');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['fname']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

}

   // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE mobile='$mobile' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['mobile'] === $mobile) {
      array_push($errors, "Username already exists");
    }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (fname,lname, mobile, password) 
  			  VALUES('$fname', '$lname', '$mobile', '$password')";
  	mysqli_query($db, $query);
  	header('location: login.html');
  }
}

?>