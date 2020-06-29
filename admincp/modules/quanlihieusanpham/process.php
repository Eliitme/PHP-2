<?php
include('../config.php');

$ten_hieu = $_POST['hieu_san_pham'];


if (isset($_POST['them_hieu'])) {

    $sql = "insert into quanlihieusanpham(ten_hieu) values
            ('$ten_hieu')
        ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Thêm hiệu sản phẩm thành công'); history.go(-1);</script>";
    } else echo "<script>alert('Thêm hiệu sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
} else if (isset($_POST['sua_hieu'])) {
    $ma_hieu = $_POST['ma_hieu'];
    $sql = "update quanlihieusanpham set
        ten_hieu = '$ten_hieu',
        where id_hieu = $ma_hieu
    ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Sửa hiệu sản phẩm thành công'); window.location.replace('../../index.php?manage=hieu_san_pham&action=xem_tat_ca');</script>";
    } else echo "<script>alert('Sửa hiệu sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
}

