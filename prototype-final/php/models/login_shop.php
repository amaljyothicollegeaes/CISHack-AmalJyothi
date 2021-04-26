<?php

header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
  
include_once './Database.php';
$data = json_decode(file_get_contents('php://input'), true); 

$sql = "SELECT mobile,password,shopName from shops  where mobile=".$data["phone"]." AND password='".$data["password"]."'";
$result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) ==1) {
//   $row = mysqli_fetch_assoc($result);
   
// }
$row = mysqli_fetch_assoc($result);


// if ($row['mobile']==$data['phone'] ){
// echo 'bigo';
// }
// else{
//   echo'lala';
// }

if (mysqli_query($conn,$sql)&& $row['mobile']==$data['phone'] ){

echo 'sucess';
}
else {
  echo 'invalid password or ussername data doesnt found'.mysqli_error($conn);
}

mysqli_close($conn);
?>