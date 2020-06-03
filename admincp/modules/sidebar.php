<?php
if (isset($_POST['logout'])) {
	unset($_SESSION['dang-nhap']);
	header('location: login.php');
}
?>

<div class="sidebar-nav">
	<ul class="sidebar">
		<li>
			<!-- <img src="../images/admin.png" alt="" height="100px"> -->
			Chào mừng, <?php echo $_SESSION['dang-nhap']?"admin":"employee" ?>
		</li>
		<li><a href="http://">Sửa Thông Tin Cá Nhân</a></li>
		<li><a href="http://">Tạo Tài Khoản Nhân Viên</a></li>
		<li><a href="http://">Upload Gallery</a></li>
		<li>
			<form action="" method="post">
				<button type="submit" name="logout">Đăng Xuất</button>
			</form>
		</li>
	</ul>
</div>