
<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

$ma_khach_hang = $_SESSION['dang-nhap'];
$sql = mysqli_query($conn, "select email from quanlikhachhang where id_khach_hang = $ma_khach_hang");

while ($each = mysqli_fetch_assoc($sql)) {
    $from = "Laptop AL";

    $to = $each['email'];

    $subject = "[No Reply] THÔNG BÁO XÁC NHẬN ĐƠN HÀNG THÀNH CÔNG";

    $message = "ABC";

    $headers = "From:" . $from;

    mail($to, $subject, $message, $headers);
}


echo "The email message was sent.";
?>