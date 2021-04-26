<?php
session_start();

header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  
include_once './Database.php';
$data = json_decode(file_get_contents('php://input'), true); 
$k='';
$mobile=$_POST['username'];
$passwords=$_POST['password'];

$sql = "SELECT mobile,password,shopName,firstName from registration  where mobile='$mobile' AND password='$passwords'";
$result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) ==1) {
//   $row = mysqli_fetch_assoc($result);
   
// }
$row = mysqli_fetch_assoc($result);
$_SESSION['shopnames']=$row['shopName'];
$_SESSION['firstName']=$row['firstName'];
$_SESSION['mobile']=$row['mobile'];
$mobile=$_SESSION['mobile'];
if(mysqli_num_rows($result)==1){
 
 

       echo $_SESSION['mobile'];
      if($row['shopName']=="NULL"){
     
        header("location:../.././customer.php");
      }
      elseif($row['shopName']=="admin")
      {
      
        header("location:../.././admin.php");
      }
      else{
        
        header("location:../.././shopmain.php");
      }
     
    
    }
else{
  echo "Access Denied. Make sure you enter the correct username and password.";

   


}

mysqli_close($conn);