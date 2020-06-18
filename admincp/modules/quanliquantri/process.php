<?php
include('../config.php');



if(isset($_POST['them_admin'])){
    $ten_dang_nhap = $_POST['ten_dang_nhap'];
    $mat_khau = $_POST['mat_khau'];
    //kiểm tra tên đăng nhập tồn tại hay chưa

    $sql = "select ten_dang_nhap from admin where ten_dang_nhap = '$ten_dang_nhap'";

    $rs = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($rs);
    if($row == 1){
        echo "<script>alert('Tên đăng nhập đã tồn tại'); history.go(-1);</script>";
    }

    $sql = "insert into admin(ten_dang_nhap, mat_khau, cap_do) values ('$ten_dang_nhap', '$mat_khau', 0)";

    $rs = mysqli_query($conn, $sql);

    if($rs) {
        echo "<script>alert('Thêm nhân viên thành công'); window.location.replace('../../index.php?quan_li=quan_tri&&thao_tac=xem_tat_ca');</script>";
    } else echo "<script>alert('Thêm nhân viên thất bại'); history.go(-1);</script>";
}
if(isset($_POST['sua'])){
    $mat_khau_cu = $_POST['mat_khau_cu'];
    $mat_khau_moi = $_POST['mat_khau_moi'];
    $ma_admin = $_POST['ma_admin'];
    $sql = "select mat_khau from admin where id_admin = $ma_admin";

    $rs = mysqli_query($conn, $sql);

    $row = mysqli_fetch_row($rs);

    if($mat_khau_cu != $row[0]){
        echo "<script>alert('Mật khẩu cũ không đúng! Vui lòng thử lại'); history.go(-1);</script>";
    }

    $sql = "update admin set mat_khau = '$mat_khau_moi' where id_admin = $ma_admin";

    $rs = mysqli_query($conn, $sql);

    if($rs){
        echo "<script>alert('Đổi mật khẩu thành công'); window.location.replace('../../index.php');</script>";
    } else echo "<script>alert('Đổi mật khẩu thất bại'); history.go(-1);</script>";

}