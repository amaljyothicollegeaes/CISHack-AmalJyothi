<?php

header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
  
include_once './Database.php';
$data = json_decode(file_get_contents('php://input'), true); 
$k='';

$sql = "SELECT mobile,password,shopName from registration  where mobile=".$data["phone"]." AND password='".$data["password"]."'";
$result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) ==1) {
//   $row = mysqli_fetch_assoc($result);
   
// }
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)==1){
  
  $row= json_encode($row);
      echo $row;
      
}
mysqli_close($conn);

// if ($row['mobile']==$data['phone'] ){
// echo 'bigo';
// }
// else{
//   echo'lala';
// }

// if(mysqli_num_rows($result)==1){
//     $row= json_encode($row);
//     echo $row;
//     if (isset($row['shop'])){
//     $row= json_encode($row);
//     echo $row;
//     }
// }
// mysqli_close($conn);
// ?>




    
    