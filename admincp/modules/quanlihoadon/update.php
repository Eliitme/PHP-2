<?php
include('../config.php');
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $ma_hoa_don = $_GET['ma_don'];

    if ($action == 'huy_don_hang') {
        //0 là chờ duyệt, 2 là hủy, 1 là xác nhận
        $sql = "select * from hoadon where id_hoa_don = $ma_hoa_don and tinh_trang = 0";
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
    } else if($action == 'xac_nhan_don_hang'){
        $sql = "select id_khach_hang from hoadon where id_hoa_don = $ma_hoa_don and tinh_trang = 0";
        $rs = mysqli_query($conn, $sql);
        $khach_hang = mysqli_fetch_assoc($rs); $id_khach_hang = $khach_hang['id_khach_hang'];
        if (mysqli_num_rows($rs) == 1) {
            $sql = "update hoadon set tinh_trang = 1 where id_hoa_don = $ma_hoa_don";
            $rs = mysqli_query($conn, $sql);

            if ($rs) {
                $so_luong_dat = mysqli_query($conn, "select id_san_pham, so_luong from hoadonchitiet where id_hoa_don = $ma_hoa_don");
                
                while($list = mysqli_fetch_assoc($so_luong_dat)){
                    $so_luong = $list['so_luong'];
                    $ma_san_pham = $list['id_san_pham'];
                    $update = mysqli_query($conn, "update quanlisanpham set so_luong = so_luong - $so_luong where id_san_pham = $ma_san_pham");
                }
                include('mail.php');
                echo "<script>alert('Xác nhận đơn hàng thành công'); history.go(-1);</script>";
            } else {
                echo "<script>alert('Xác nhận đơn hàng thất bại'); history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Xác nhận đơn hàng thất bại'); history.go(-1);</script>";
        }
    } else {
        echo "<script>alert('Có lỗi xảy ra, vui lòng thử lại sau'); history.go(-1)</script>";
    }
}
