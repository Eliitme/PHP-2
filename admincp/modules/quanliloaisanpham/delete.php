<?php
$ma_loai = $_GET['ma_loai'];
$sql = "delete from quanliloaisanpham where id_loai = '$ma_loai'";
$rs = mysqli_query($conn, $sql);
if ($rs) {
    echo "<script>alert('Xóa loại sản phẩm thành công'); history.go(-1);</script>";
} else echo "<script>history.go(-1);</script>";
