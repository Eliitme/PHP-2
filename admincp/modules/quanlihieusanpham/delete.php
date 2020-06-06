<?php

$ma_hieu = $_GET['ma-hieu'];

$sql = "delete from quanlihieusanpham where id_hieu = '$ma_hieu'";

$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo "<script>alert('Xóa hiệu sản phẩm thành công'); history.go(-1);</script>";
} else echo "<script>alert('Xóa hiệu sản phẩm thất bại, mời thử lại!'); history.go(-1);</script>";
