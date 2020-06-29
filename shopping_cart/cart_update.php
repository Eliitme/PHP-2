<?php 

$ma_san_pham = $_GET['ma_san_pham'];

session_start();

// khi chưa có giỏ hàng
if(empty($_SESSION['gio_hang'])){
	$_SESSION['gio_hang'] = [];
	$_SESSION['so_luong'] = 0;
}

// chưa có sản phẩm trong giỏ hàng
if(empty($_SESSION['gio_hang'][$ma_san_pham])){
	include('../modules/config.php');

	$sql = "select * from quanlisanpham where id_san_pham = $ma_san_pham";
	$rs = mysqli_query($conn, $sql);
	$each = mysqli_fetch_array($rs);


	$_SESSION['gio_hang'][$ma_san_pham]['so_luong']     = 1;
	$_SESSION['gio_hang'][$ma_san_pham]['ten_san_pham'] = $each['ten_san_pham'];
	$_SESSION['gio_hang'][$ma_san_pham]['gia']          = $each['gia'];
	$_SESSION['gio_hang'][$ma_san_pham]['anh_san_pham'] = $each['anh_san_pham'];
	$_SESSION['so_luong']++;


}
// đã có sản phẩm trong giỏ hàng
else{
	$_SESSION['gio_hang'][$ma_san_pham]['so_luong']++;
	$_SESSION['so_luong']++;
}


?>

<script>
	alert('Thêm 1 sản phẩm vào giỏ hàng thành công, mời tiếp tục mua hàng!')
	history.back();
</script>
