
<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);


$sql = mysqli_query($conn, "select ho_va_ten, email, id_hoa_don, nguoi_nhan, hoadon.so_dien_thoai, hoadon.dia_chi FROM khachhang 
JOIN hoadon on hoadon.id_khach_hang = khachhang.id_khach_hang where khachhang.id_khach_hang = $id_khach_hang and id_hoa_don = $ma_hoa_don;");
while ($each = mysqli_fetch_assoc($sql)) {
    $from = "Laptop AL";

    $to = $each['email'];

    $subject = "[No Reply] THÔNG BÁO XÁC NHẬN ĐƠN HÀNG THÀNH CÔNG";
    $subject = '=?utf-8?B?' . base64_encode($subject) . '?=';
    $message = "
    Xin chào ".$each['ho_va_ten'].",
    Cảm ơn bạn đã tin dùng sản phẩm của chúng tôi
    Chi tiết hóa đơn vui lòng xem tại: Laptop AL > Lịch sử mua hàng > Mã hóa đơn: ".$each['id_hoa_don']."
    Thông tin người nhận: ".$each['nguoi_nhan']."
    Số điện thoại: ".$each['so_dien_thoai']."
    Địa chỉ: ".$each['dia_chi'];

    $headers = "From:" . $from;

    mail($to, $subject, $message, $headers);
}

?>