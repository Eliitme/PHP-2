
<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);


$from = "Laptop AL";

$to = "datt4bt0@gmail.com";

$subject = "[No Reply] THÔNG BÁO XÁC NHẬN ĐƠN HÀNG THÀNH CÔNG";

$message = "ABC";

$headers = "From:" . $from;

mail($to, $subject, $message, $headers);



echo "The email message was sent.";
?>