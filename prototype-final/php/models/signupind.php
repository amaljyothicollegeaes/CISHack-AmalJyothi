<?php

header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
  
include_once './Database.php';
$data = json_decode(file_get_contents('php://input'), true); 

$sql = "INSERT INTO shop_users (firstName, lastName, password, phone) VALUES ('".$data["firstName"]."','".$data["lastName"]."','".$data["password"]."',".$data["phone"].")";
if (mysqli_query($conn,$sql)){
  echo "Success";
}else {
  echo 'error'.mysqli_error($conn);
}

mysqli_close($conn);
?>