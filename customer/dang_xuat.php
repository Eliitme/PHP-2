<?php

session_start();
unset($_SESSION['dang-nhap']);
header('location: /PHP 2/index.php');
