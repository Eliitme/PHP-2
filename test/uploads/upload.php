<?php




$conn = mysqli_connect('localhost', 'root', '', 'test');


$ext = explode(".", $_FILES['upload']['name']);
$type = end($ext);
$file_name = date('dmY_'.time(), time()).".$type";

$array['uploaded'] = 1;
$array['fileName'] = $file_name;
$array['url'] = "uploads/" . $file_name;
$path = $array['url'];

$rs = mysqli_query($conn, "insert into test1(path) values ('$path')");
if (file_exists("uploads/" . $file_name))
{
  $array['error']['message'] = $file_name . " already exists. ";
}
else{
  move_uploaded_file($_FILES["upload"]["tmp_name"], $file_name);
}
echo json_encode($array);