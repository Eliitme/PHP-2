<?php
session_start();
$ma_san_pham = $_GET['ma_san_pham'];

$_SESSION['gio_hang'][$ma_san_pham]['so_luong']--;
$_SESSION['so_luong']--;

if($_SESSION['gio_hang'][$ma_san_pham]['so_luong'] == 0){
    $_SESSION['gio_hang'][$ma_san_pham]['so_luong'] = 1;
    $_SESSION['so_luong'] += 1;
}

?>

<script>
    alert("Giảm số lượng sản phẩm thành công!")
    history.back();
</script>