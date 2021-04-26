<?php
//fetch.php
$connect = mysqli_connect("localhost", "intanety", "IUxbsr?eDJ%L", "c_tracker");
$columns = array('id', 'name', 'shopName', 'mobileNo', 'enterTime', 'exitTime');

$query = "SELECT * FROM visitor WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'Date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (id LIKE "%'.$_POST["search"]["value"].'%" 
  OR name LIKE "%'.$_POST["search"]["value"].'%" 
  OR shopName LIKE "%'.$_POST["search"]["value"].'%" 
  OR mobileNo LIKE "%'.$_POST["search"]["value"].'%" 
  OR Date LIKE "%'.$_POST["search"]["value"].'%" 
  OR enterTime LIKE "%'.$_POST["search"]["value"].'%" 
  OR exitTime LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["id"];
 $sub_array[] = $row["name"];
 $sub_array[] = $row["shopName"];
 $sub_array[] = $row["mobileNo"];
 $sub_array[] = $row["Date"];
 $sub_array[] = $row["enterTime"];
 $sub_array[] = $row["exitTime"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM visitor";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
