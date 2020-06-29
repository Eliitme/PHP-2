<?php
include('../modules/config.php');

session_start();
//Cập nhật thông tin khách hàng
if (isset($_POST['cap_nhat_thong_tin'])) {
    $ho_va_ten = $_POST['ho_va_ten'];
    $ma_khach_hang = $_POST['ma_khach_hang'];
    $dia_chi = $_POST['dia_chi'];
    $so_dien_thoai = $_POST['so_dien_thoai'];
    $email = $_POST['email'];

    $sql = "update khachhang set
    ho_va_ten = '$ho_va_ten',
    dia_chi = '$dia_chi',
    so_dien_thoai = '$so_dien_thoai',
    email = '$email'
    where id_khach_hang = $ma_khach_hang
    ";

    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Cập nhật thông tin thành công'); window.location.replace('/PHP 2/index.php');</script>";
    } else {
        echo "<script>alert('Cập nhật thông tin thất bại'); history.go(-1);</script>";
    }
}
//Hủy đơn hàng
if (isset($_GET['action'])) {
    $ma_khach_hang = $_SESSION['dang-nhap'];
    $ma_hoa_don = $_GET['ma_don'];

    $sql = "select * from hoadon where id_khach_hang = $ma_khach_hang and id_hoa_don = $ma_hoa_don and tinh_trang = 0";
    $rs = mysqli_query($conn, $sql);

    if (mysqli_num_rows($rs) == 1) {
        $sql = "update hoadon set tinh_trang = 2 where id_hoa_don = $ma_hoa_don";
        $rs = mysqli_query($conn, $sql);

        if ($rs) {
            echo "<script>alert('Hủy đơn hàng thành công'); history.go(-1);</script>";
        } else {
            echo "<script>alert('Hủy đơn hàng thất bại'); history.go(-1);</script>";
        }
    } else {
        echo "<script>alert('Hủy đơn hàng thất bại'); history.go(-1);</script>";
    }
}

//Xử lí đăng nhập
if (isset($_SESSION['dang-nhap'])) {
    echo "<script>alert('Bạn đã đăng nhập với tài khoản" . $_SESSION['ten-dang-nhap'] . "'); window.location.replace('/PHP 2/index.php');</script>";
} else {
    //Xử lí đăng nhập

    if (isset($_POST['dang_nhap'])) {

        $ten_dang_nhap = $_POST['ten_dang_nhap'];
        $mat_khau = md5(($_POST['mat_khau']));

        //Kiểm tra tên đăng nhập
        $sql = "select id_khach_hang, ten_dang_nhap, mat_khau from khachhang where ten_dang_nhap = '$ten_dang_nhap'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('Tài khoản không tồn tại hoặc sai'); history.go(-1);</script>";
            exit;
        }
        $row = mysqli_fetch_array($result);

        if ($row['mat_khau'] != md5($salt . $mat_khau)) {
            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không chính xác'); history.go(-1);</script>";
            exit;
        }
        $_SESSION['ten-dang-nhap'] = $ten_dang_nhap;
        $_SESSION['dang-nhap'] = $row['id_khach_hang'];
        echo "<script>alert('Bạn đã đăng nhập với tài khoản " . $ten_dang_nhap . "'); window.location.replace('/PHP 2/index.php');</script>";
    }
}
//Xử lí đăng kí
if (isset($_POST['dang_ki'])) {

    $ho_va_ten = $_POST['ho_va_ten'];
    $ten_dang_nhap = $_POST['ten_dang_nhap'];
    $mat_khau = md5($_POST['mat_khau']);

    //Kiểm tra tên đăng nhập đã tồn tại hay chưa
    $sql = "select ten_dang_nhap from khachhang where ten_dang_nhap = '$ten_dang_nhap'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "<script>alert('Tài khoản đã tồn tại'); history.go(-1);</script>";
        exit;
    }
    //Mã hóa mật khẩu
    $mat_khau = md5($salt . $mat_khau);
    $sql = "insert into khachhang(ho_va_ten, ten_dang_nhap, mat_khau) values
            ('$ho_va_ten', '$ten_dang_nhap', '$mat_khau')
        ";
    $rs = mysqli_query($conn, $sql);

    if ($rs) {
        echo "<script>alert('Bạn đã tạo tài khoản thành công'); window.location.replace('/PHP 2/index.php?manage=khach_hang&action=dang_nhap')</script>";
    }
    echo "<script>alert('Có lỗi xảy ra, vui lòng thử lại sau'); history.go(-1)</script>";
}
