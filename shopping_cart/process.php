<?php
session_start();
include('../modules/config.php');
if (isset($_POST['dat_hang'])) {
    $ma_khach_hang = $_SESSION['dang-nhap'];
    $gio_hang = $_SESSION['gio_hang'];

    $nguoi_nhan = $_POST['ho_va_ten'];
    $so_dien_thoai = $_POST['so_dien_thoai'];
    $dia_chi = $_POST['dia_chi'];
    $ghi_chu = $_POST['ghi_chu'];
    $ngay_dat_don = date("Y/m/d", time());


    $sql = "insert into hoadon(id_khach_hang, nguoi_nhan, so_dien_thoai, dia_chi, ngay_dat_don, ghi_chu) values
    ($ma_khach_hang, '$nguoi_nhan', '$so_dien_thoai', '$dia_chi', '$ngay_dat_don', '$ghi_chu')";

    $rs = mysqli_query($conn, $sql);

    //Chọn mã hóa đơn
    $ma_hoa_don = mysqli_query($conn, "select max(id_hoa_don) as ma_hoa_don from hoadon");
    $each = mysqli_fetch_assoc($ma_hoa_don);

    $ma_hoa_don = $each['ma_hoa_don'];

    foreach ($gio_hang as $ma_san_pham => $san_pham) :
        $gia = $san_pham['gia'];
        $so_luong = $san_pham['so_luong'];
        $sql = "insert into hoadonchitiet(id_hoa_don, id_san_pham, gia, so_luong) values ($ma_hoa_don, $ma_san_pham, $gia, $so_luong)";
        $rs = mysqli_query($conn, $sql);


        if (!$rs) {
            echo "<script>alert('Đặt hàng thất bại, vui lòng thử lại sau'); history.go(-1);</script>";
        } else {
            unset($_SESSION['gio_hang']);
            unset($_SESSION['so_luong']);
        }
    endforeach;
}
?>
<script>
    alert('Đặt hàng thành công, đơn hàng của bạn sẽ được cửa hàng xác nhận trong thời gian tới!');
    window.location.replace('/PHP 2/index.php');
</script>