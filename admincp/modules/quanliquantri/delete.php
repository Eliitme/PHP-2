<?php

$ma_admin = $_GET['ma_admin'];

$sql = "delete from admin where id_admin = $ma_admin";

$rs = mysqli_query($conn, $sql);

if($rs){
    echo "<script>alert('Xóa nhân viên thành công!'); history.go(-1);</script>";
} else echo "<script>alert('Xóa nhân viên thất bại!'); history.go(-1);</script>";
