<?php

session_start();
if (isset($_POST['dang_xuat'])) {
	unset($_SESSION['dang-nhap']);
	header('location: index.php');
}