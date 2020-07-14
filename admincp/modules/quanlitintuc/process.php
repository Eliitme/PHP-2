<?php

include('../config.php');

$tieu_de = addslashes($_POST['tieu_de']);
$tom_tat = $_POST['tom_tat'];
$chi_tiet = $_POST['chi_tiet'];
$tinh_trang = $_POST['tinh_trang'];

$folder = "upload/images/";
$ten_moi = date('dmY-' . time(), time());
$duoi = explode(".", $_FILES['anh_bai_viet']['name']);
$ten_duoi = end($duoi);
$ten_file = "$ten_moi.$ten_duoi";
$url = $folder . basename($ten_file);


if(isset($_POST['them_tin_tuc'])){
    $sql = "insert into quanlitintuc(tieu_de, anh_bai_viet, tom_tat, chi_tiet, tinh_trang) values
    ('$tieu_de', '$url', '$tom_tat', '$chi_tiet', $tinh_trang)
    ";

    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        move_uploaded_file($_FILES['anh_bai_viet']['tmp_name'], $url);
        echo "<script>alert('Thêm Sản Phẩm Thành Công'); window.location.replace('../../index.php?manage=tin_tuc&action=xem_tat_ca');</script>";
    } else echo "<script>alert('Thêm Sản Phẩm Thất Bại'); history.go(-1);</script>";
}

if(isset($_POST['sua_tin_tuc'])){
    $ma_tin_tuc = $_POST['ma_tin_tuc'];
    $anh_cu = $_POST['anh_cu'];

    if($_FILES['anh_bai_viet']['size'] > 0){
        unlink($anh_cu);
        move_uploaded_file($_FILES['anh_bai_viet']['tmp_name'], $url);
    } else if ($_FILES['anh_bai_viet']['size'] == 0) {
        $url = $anh_cu;
    } 

    $sql = "update quanlitintuc set
        tieu_de = '$tieu_de',
        anh_bai_viet = '$url',
        tom_tat = '$tom_tat',
        chi_tiet = '$chi_tiet',
        tinh_trang = $tinh_trang     
        where id_bai_viet = '$ma_tin_tuc'   
        ";
    $rs = mysqli_query($conn, $sql);
    if($rs){
        echo "<script>alert('Sửa Bài Viết Thành Công'); window.location.replace('../../index.php?manage=tin_tuc&action=xem_tat_ca');</script>";
    } else echo "<script>alert('Sửa Thất Bại'); history.go(-1);</script>";
}