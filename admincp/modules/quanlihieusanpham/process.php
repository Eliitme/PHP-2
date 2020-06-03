<?php
include('../config.php');
$ma_hieu = $_POST['ma-hieu'];
$ten_hieu = $_POST['hieu-san-pham'];
$tinh_trang = $_POST['tinh-trang'];

if (isset($_POST['them-hieu'])) {
    $sql = "insert into quanlihieusanpham values
            ('$ma_hieu', '$ten_hieu', $tinh_trang)
        ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Thêm hiệu sản phẩm thành công'); history.go(-1);</script>";
    } else echo "<script>alert('Thêm hiệu sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
} else if (isset($_POST['sua-hieu'])) {
    $sql = "update quanlihieusanpham set
        ten_hieu = '$ten_hieu',
        tinh_trang = $tinh_trang
        where id_hieu = '$ma_hieu'
    ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Sửa hiệu sản phẩm thành công'); window.location.replace('../../index.php?quan-li=hieu-san-pham&&thao-tac=xem-tat-ca');</script>";
    } else echo "<script>alert('Sửa hiệu sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
} else {
    $ma_hieu = $_GET['ma-hieu'];
    $sql = "delete from quanlihieusanpham where id_hieu = '$ma_hieu'";
    $rs = mysqli_query($conn, $sql);
    if($rs){
        echo "<script>alert('Xóa hiệu sản phẩm thành công'); history.go(-1);</script>";
    } else echo "<script>alert('Sửa hiệu sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
}
