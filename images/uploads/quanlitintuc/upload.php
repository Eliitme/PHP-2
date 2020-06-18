<?php


$ext = explode(".", $_FILES['upload']['name']);

$type = end($ext);

$file_name = date('dmY-'.time(), time()).".$type";



$array['uploaded'] = 1;
$array['fileName'] = $file_name;
$array['url'] = "../images/uploads/quanlitintuc/" . $file_name;

// $path = '';

// $rs = mysqli_query($conn, "insert into thuvienanh(path) values ('$path')");

if (file_exists("quanlitintuc/" . $file_name))
{
  $array['error']['message'] = $file_name . " already exists. ";
}
else{
  move_uploaded_file($_FILES["upload"]["tmp_name"], $file_name);
}
echo json_encode($array);