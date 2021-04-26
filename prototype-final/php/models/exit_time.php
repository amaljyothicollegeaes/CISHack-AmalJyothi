<?php
session_start();
header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  
include_once './Database.php';
$data = json_decode(file_get_contents('php://input'), true); 
$date=date_create(null,timezone_open("Asia/Kolkata"));
date_timestamp_set($date,time());
$time=strval(date_format($date,"H:i:s"));

$sql = "UPDATE visitor SET  exitTime='$time'  WHERE mobileNo='".$data["mobile"]."' and exitTime=''";
if (mysqli_query($conn,$sql)){
  echo "Success";
}else {
  echo 'error'.mysqli_error($conn);
}
// $sqlerror="DELETE FROM `visitor` WHERE `visitor`.`mobileNo` = 0";
// if (mysqli_query($conn,$sqlerror)){
//   echo "Success ";
// }else {
//   echo 'error'.mysqli_error($conn);
// }

mysqli_close($conn);
?>