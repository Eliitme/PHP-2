<?php

$ma_hieu = $_GET['ma_hieu'];

$sql = "delete from quanlihieusanpham where id_hieu = '$ma_hieu'";

$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo "<script>alert('Xóa hiệu sản phẩm thành công'); history.go(-1);</script>";
} else echo "<script>history.go(-1);</script>";
