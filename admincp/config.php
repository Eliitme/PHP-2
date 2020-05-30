<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'trangwebbanhang';

    $conn = mysqli_connect($server, $username, $password, $dbname);

    //Kiểm tra kết nối đến cơ sở dữ liệu
    if (!$conn) {
        die('Lỗi kết nối đến CSDL');
    }

    mysqli_set_charset($conn, 'UTF-8');

?>