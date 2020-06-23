<?php
if (isset($_POST['logout'])) {
	unset($_SESSION['dang-nhap']);
	header('location: login.php');

	session_start();
}
?>

<div class="sidebar-nav">
	<ul class="sidebar">
		<li>
			<!-- <img src="../images/admin.png" alt="" height="100px"> -->
			Chào mừng, <?php echo $_SESSION['dang-nhap'] ?>
		</li>
		<li><a href="index.php?manage=quan_tri&action=sua&ma=<?php echo $_SESSION['id_admin']?>">Sửa Thông Tin Cá Nhân</a></li>
		<?php if ($_SESSION['cap_do'] == 1) { ?>
			<li><a href="index.php?manage=quan_tri&action=them_admin">Tạo Tài Khoản Nhân Viên</a></li>
		<?php } else { ?>
			<li><a href="index.php?manage=quan_tri&action=xem_tat_ca">Xem Nhân Viên</a></li>
		<?php
		}
		?>
		<li><a href="http://">Đổi Ảnh Banner</a></li>
		<li>
			<form action="" method="post">
				<button type="submit" name="logout">Đăng Xuất</button>
			</form>
		</li>
	</ul>
</div>