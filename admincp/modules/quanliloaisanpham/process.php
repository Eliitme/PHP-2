<?php
include('../config.php');

$ten_loai = $_POST['loai_san_pham'];
$ma_hieu = $_POST['ma_hieu'];


if (isset($_POST['them_loai'])) {
    $sql = "insert into quanliloaisanpham(ten_loai, id_hieu) values
            ('$ten_loai', '$ma_hieu')
        ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Thêm loại sản phẩm thành công'); history.go(-1);</script>";
    } else echo "<script>alert('Thêm loại sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
} else if (isset($_POST['sua_loai'])) {
    $ma_loai = $_POST['ma_loai'];
    $sql = "update quanliloaisanpham set
        ten_loai = '$ten_loai',
        id_hieu = '$ma_hieu',
        where id_loai = '$ma_loai'
    ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Sửa loại sản phẩm thành công'); window.location.replace('../../index.php?manage=loai_san_pham&action=xem_tat_ca');</script>";
    } else echo "<script>alert('Sửa loại sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
}