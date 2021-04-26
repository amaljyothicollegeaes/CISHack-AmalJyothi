<?php 
  $servername = "localhost";
  $username = "intanety";
  $password = "IUxbsr?eDJ%L";
  $dbname = "c_tracker";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>