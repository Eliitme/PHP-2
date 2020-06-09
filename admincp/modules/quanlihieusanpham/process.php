<?php
include('../config.php');
$ma_hieu = $_POST['ma_hieu'];
$ten_hieu = $_POST['hieu_san_pham'];
$tinh_trang = $_POST['tinh_trang'];

if (isset($_POST['them_hieu'])) {

    $sql = "insert into quanlihieusanpham values
            ('$ma_hieu', '$ten_hieu', $tinh_trang)
        ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Thêm hiệu sản phẩm thành công'); history.go(_1);</script>";
    } else echo "<script>alert('Thêm hiệu sản phẩm thất bại, mời thử lại!'); history.go(_1);</script>";
} else if (isset($_POST['sua_hieu'])) {

    $sql = "update quanlihieusanpham set
        ten_hieu = '$ten_hieu',
        tinh_trang = $tinh_trang
        where id_hieu = '$ma_hieu'
    ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Sửa hiệu sản phẩm thành công'); window.location.replace('../../index.php?quan_li=hieu_san_pham&&thao_tac=xem_tat_ca');</script>";
    } else echo "<script>alert('Sửa hiệu sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
}