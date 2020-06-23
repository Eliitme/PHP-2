
<?php
$to      = 'levanlong220700@gmail.com';
$subject = '[No Reply] THÔNG BÁO XÁC NHẬN ĐƠN HÀNG';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 