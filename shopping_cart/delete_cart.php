<?php
session_start();

if(isset($_GET['ma_san_pham'])){
    $ma_san_pham = $_GET['ma_san_pham'];
    $_SESSION['so_luong'] -= $_SESSION['gio_hang'][$ma_san_pham]['so_luong'];
    unset($_SESSION['gio_hang'][$ma_san_pham]);
}else {
    unset($_SESSION['gio_hang']);
    unset($_SESSION['so_luong']);
}


?>

<script>
    alert("Xóa sản phẩm khỏi giỏ hàng thành công!");
    history.back();
</script>