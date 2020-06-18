<?php

include('../config.php');

$ten_san_pham = $_POST['ten_san_pham'];
$hieu_san_pham = $_POST['hieu_san_pham'];
$loai_san_pham = $_POST['loai_san_pham'];
$gia_san_pham = $_POST['gia_san_pham'];
$so_luong = $_POST['so_luong'];
$tinh_trang = $_POST['tinh_trang'];

$folder = "upload/";
$ten_moi = date('dmY-' . time(), time());
$duoi = explode(".", $_FILES['anh_san_pham']['name']);
$ten_duoi = end($duoi);
$ten_file = "$ten_moi.$ten_duoi";
$url = $folder . basename($ten_file);

// die($url);

if (isset($_POST['them_san_pham'])) {
    if ($_FILES["anh_san_pham"]["size"] > 500000) {
        echo "<script>alert('Vui lòng chọn ảnh nhỏ hơn 5M'); history.go(-1);</script>";
    }

    $sql = "insert into quanlisanpham(ten_san_pham, anh_san_pham, id_hieu, id_loai, gia, so_luong, tinh_trang) values
    ('$ten_san_pham', '$url', '$hieu_san_pham', '$loai_san_pham', $gia_san_pham, $so_luong, $tinh_trang)";

    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        move_uploaded_file($_FILES['anh_san_pham']['tmp_name'], $url);

        echo "<script>alert('Thêm Sản Phẩm Thành Công'); alert('Mời Thêm Chi Tiết Sản Phẩm'); window.location.replace('../../index.php?quan_li=san_pham&&thao_tac=them_chi_tiet&&ma_san_pham=$ma_san_pham');</script>";
    } else echo "<script>alert('Thêm Sản Phẩm Thất Bại'); history.go(-1);</script>";
}

if (isset($_POST['sua_san_pham'])) {
    $ma_san_pham = $_POST['ma_san_pham'];
    $anh_cu = $_POST['anh_cu'];

    if($_FILES['anh_san_pham']['size'] > 0){
        unlink($anh_cu);
        move_uploaded_file($_FILES['anh_san_pham']['tmp_name'], $url);
    } else if ($_FILES['anh_san_pham']['size'] == 0) {
        $url = $anh_cu;
    } 
    $sql = "update quanlisanpham set
        ten_san_pham = '$ten_san_pham',
        anh_san_pham = '$url',
        id_hieu = '$hieu_san_pham',
        id_loai = '$loai_san_pham',
        gia = $gia_san_pham,
        so_luong = $so_luong,
        tinh_trang = $tinh_trang     
        where id_san_pham = $ma_san_pham  
        ";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        echo "<script>alert('Sửa Sản Phẩm Thành Công'); window.location.replace('../../index.php?quan_li=san_pham&&thao_tac=xem_tat_ca');</script>";
    } else echo "<script>alert('Sửa Sản Phẩm Thất Bại'); history.go(-1);</script>";
}
