<?php

$ma_tin_tuc = $_GET['ma_tin_tuc'];

$anh_bai_viet = mysqli_query($conn, "select anh_bai_viet from quanlitintuc where id_bai_viet = $ma_tin_tuc");

$anh = mysqli_fetch_array($anh_bai_viet);


unlink('modules/quanlitintuc/'.$anh['anh_bai_viet']);

$sql = "delete from quanlitintuc where id_bai_viet = '$ma_tin_tuc'";

$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo "<script>alert('Xóa bài viết thành công'); history.go(-1);</script>";
} else echo "<script>history.go(-1);</script>";