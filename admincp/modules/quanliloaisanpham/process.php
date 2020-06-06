<?php
include('../config.php');
$ma_loai = $_POST['ma-loai'];
$ten_loai = $_POST['loai-san-pham'];
$tinh_trang = $_POST['tinh-trang'];

if (isset($_POST['them-loai'])) {
    $sql = "insert into quanliloaisanpham values
            ('$ma_loai', '$ten_loai', $tinh_trang)
        ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Thêm loại sản phẩm thành công'); history.go(-1);</script>";
    } else echo "<script>alert('Thêm loại sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
} else if (isset($_POST['sua-loai'])) {
    $sql = "update quanliloaisanpham set
        ten_loai = '$ten_loai',
        tinh_trang = $tinh_trang
        where id_loai = '$ma_loai'
    ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Sửa loại sản phẩm thành công'); window.location.replace('../../index.php?quan-li=loai-san-pham&&thao-tac=xem-tat-ca');</script>";
    } else echo "<script>alert('Sửa loại sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
}