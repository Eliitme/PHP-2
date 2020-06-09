<?php

if(isset($_FILES['upload'])){
    $errors= array();
    $file_name = date('dmY_'.time(), time());
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $file_type = $_FILES['upload']['type'];
    $file_ext = explode('.',$_FILES['upload']['name']);
     
    $expensions= array("jpeg","jpg","png");
     
    if(in_array(end($file_ext),$expensions)=== false){
       $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
     
    if($file_size > 2097152) {
       $errors[]='Kích thước file không được lớn hơn 2MB';
    }
     
    if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"upload/.$file_name.end($file_ext)");
       echo "Tải lên ảnh thành công";
    }else{
       print_r($errors);
    }
 }