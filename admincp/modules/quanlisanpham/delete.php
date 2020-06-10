<?php

$ma_san_pham = $_GET['ma_san_pham'];

$anh_san_pham = mysqli_query($conn, "select anh_san_pham from quanlisanpham where id_san_pham = '$ma_san_pham'");

$anh = mysqli_fetch_array($anh_san_pham);

unlink('modules/quanlisanpham/'.$anh['anh_san_pham']);

$sql = "delete from quanlisanpham where id_san_pham = '$ma_san_pham'";

$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo "<script>alert('Xóa sản phẩm thành công'); history.go(-1);</script>";
} else echo "<script>history.go(-1);</script>";