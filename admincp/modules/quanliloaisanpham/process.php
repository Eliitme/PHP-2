<?php
include('../config.php');
$ma_loai = $_POST['ma_loai'];
$ten_loai = $_POST['loai_san_pham'];
$ma_hieu = $_POST['ma_hieu'];
$tinh_trang = $_POST['tinh_trang'];

if (isset($_POST['them_loai'])) {
    $sql = "insert into quanliloaisanpham values
            ('$ma_loai', '$ten_loai', '$ma_hieu', $tinh_trang)
        ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Thêm loại sản phẩm thành công'); history.go(-1);</script>";
    } else echo "<script>alert('Thêm loại sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
} else if (isset($_POST['sua_loai'])) {
    $sql = "update quanliloaisanpham set
        ten_loai = '$ten_loai',
        id_hieu = '$ma_hieu',
        tinh_trang = $tinh_trang
        where id_loai = '$ma_loai'
    ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Sửa loại sản phẩm thành công'); window.location.replace('../../index.php?quan_li=loai_san_pham&&thao_tac=xem_tat_ca');</script>";
    } else echo "<script>alert('Sửa loại sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
}