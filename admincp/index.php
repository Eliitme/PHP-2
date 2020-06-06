<?php
    session_start();
    if(!isset($_SESSION['dang-nhap'])){
        header('location: login.php');
    }
    
	if(isset($_POST['logout'])){
		unset($_SESSION['dang-nhap']);
		header('location:login.php');
	}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
        include('modules/config.php');
        include('modules/header.php');
        include('modules/sidebar.php');
        include('modules/menu.php');
        include('modules/content.php');
        include('modules/footer.php');
    ?>
    <script src="script/script.js"></script>
</body>
</html>