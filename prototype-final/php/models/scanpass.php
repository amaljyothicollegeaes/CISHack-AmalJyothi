<?php
session_start();
header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    
include_once './Database.php';

$scan = json_decode(file_get_contents('php://input'), true);
date_default_timezone_set("Asia/Kolkata");
$date=date_create(null,timezone_open("Asia/Kolkata"));
date_timestamp_set($date,time());
$time=strval(date_format($date,"H:i:s"));
$fname=$_SESSION['firstName'];
date_default_timezone_set('Asia/Kolkata');
$da=date('d-m-Y');


$sql = "INSERT INTO visitor (name,shopName,mobileNo,date,enterTime) VALUES ('$fname','".$scan["shopdata"]."','".$scan["mobile"]."','$da','$time')";
if (mysqli_query($conn,$sql)){
  echo "Success";
}else {
  echo 'error'.mysqli_error($conn);
}

mysqli_close($conn);
?>