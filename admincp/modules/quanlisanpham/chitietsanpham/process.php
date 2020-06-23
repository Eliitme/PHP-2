<?php

include('../../config.php');

$ma_san_pham = $_POST['ma_san_pham'];
$thong_so_ki_thuat = $_POST['thong_so_ki_thuat'];
$khuyen_mai = $_POST['khuyen_mai'];
$mo_ta_chi_tiet = $_POST['mo_ta_chi_tiet'];

if(isset($_POST['them_chi_tiet'])){
    $sql = "insert into chitietsanpham(id_san_pham, thong_so_ki_thuat, khuyen_mai, mo_ta_chi_tiet) values 
    ('$ma_san_pham', '$thong_so_ki_thuat', '$khuyen_mai', '$mo_ta_chi_tiet')
    ";

    $rs = mysqli_query($conn, $sql);

    if($rs){
        echo "<script>alert('Thêm Chi Tiết Sản Phẩm Thành Công'); window.location.replace('../../../index.php?manage=san_pham&action=xem_tat_ca');</script>";
    } else echo "<script>alert('Thêm Chi Tiết Sản Phẩm Thất Bại'); history.go(-1);</script>";
}