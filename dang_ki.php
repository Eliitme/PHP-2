<?php
    //Xử lí đăng kí
    if(isset($_POST['dang_ki'])){
        include('modules/config.php');
    
        $ho_va_ten = $_POST['ho_va_ten'];
        $ten_dang_nhap = $_POST['ten_dang_nhap'];
        $mat_khau = md5($_POST['mat_khau']);

        //Kiểm tra tên đăng nhập đã tồn tại hay chưa
        $sql = "select ten_dang_nhap from khachhang where ten_dang_nhap = '$ten_dang_nhap'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            echo "<script>alert('Tài khoản đã tồn tại'); history.go(-1);</script>";
            exit;
        }
        //Mã hóa mật khẩu
        $mat_khau = md5($salt.$mat_khau);
        $sql = "insert into khachhang(ho_va_ten, ten_dang_nhap, mat_khau) values
            ('$ho_va_ten', '$ten_dang_nhap', '$mat_khau')
        ";
        $rs = mysqli_query($conn, $sql);

        if($rs){
            echo "<script>alert('Bạn đã tạo tài khoản thành công'); window.location.replace('index.php')</script>";
        } echo "<script>alert('Có lỗi xảy ra, vui lòng thử lại sau'); history.go(-1)</script>";
        
        
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Kí Thành Viên</title>
    <link rel="stylesheet" href="style/style-log.css">
    <script src="script/script.js"></script>
</head>
<body>
    <div class="dang-nhap">
        <div class="form">
            <h2>Đăng Kí Thành Viên</h2>
            <br>
            <form action="dang_ki.php?do=register" method="post" onsubmit="return formLogin()">
                <input type="text" name="ho_va_ten" id="ho_va_ten" placeholder="Họ và Tên">
                <br>
                <input type="text" name="ten_dang_nhap" id="ten_dang_nhap" placeholder="Tên đăng nhập">
                <br>
                <input type="password" name="mat_khau" id="mat_khau" placeholder="Mật khẩu">
                <br>
                <input type="password" name="nhap_lai_mat_khau" id="nhap_lai_mat_khau" placeholder="Nhập lại mật khẩu">
                <br>
                <button type="submit" name="dang_ki">Đăng Kí</button>
            </form>
        </div>
    </div>
</body>
</html>