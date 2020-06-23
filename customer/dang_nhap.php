<?php
    session_start();
    header('Content-Type: text/html; charset=UTF-8');
    
    //Kiểm tra xem đã đăng nhập chưa
    if(isset($_SESSION['dang-nhap'])){
        header('location: index.php');
    }

    //Xử lí đăng nhập
    if(isset($_POST['dang_nhap'])){
        include('modules/config.php');
    
        $ten_dang_nhap = $_POST['ten_dang_nhap'];
        $mat_khau = md5(($_POST['mat_khau']));

        //Kiểm tra tên đăng nhập
        $sql = "select id_khach_hang, ten_dang_nhap, mat_khau from khachhang where ten_dang_nhap = '$ten_dang_nhap'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 0){
            echo "<script>alert('Tài khoản không tồn tại hoặc sai'); history.go(-1);</script>";
            exit;
        }
        $row = mysqli_fetch_array($result);
        
        if($row['mat_khau'] != md5($salt.$mat_khau)){
            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không chính xác'); history.go(-1);</script>";
            exit;
        }
        $_SESSION['dang-nhap'] = $ten_dang_nhap;
        $_SESSION['dang-nhap'] = $row['id_khach_hang'];
        echo "<script>alert('Bạn đã đăng nhập với tài khoản ".$ten_dang_nhap."'); window.location.replace('index.php')</script>";
        die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="style/style-log.css">
    <script src="script/script.js"></script>
</head>
<body>
    <div class="dang-nhap">
        <div class="form">
            <h2>ADMINISTRATOR MANAGEMENT</h2>
            <br>
            <form action="dang_nhap.php?do=login" method="post" onsubmit="return formLogin()">
                <input type="text" name="ten_dang_nhap" id="ten_dang_nhap" placeholder="Tên đăng nhập">
                <br>
                <input type="password" name="mat_khau" id="mat_khau" placeholder="Mật khẩu">
                <br>
                <button type="submit" name="dang_nhap">Đăng nhập</button>
            </form>
        </div>
    </div>
</body>
</html>