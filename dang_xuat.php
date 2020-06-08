<?php

session_start();
unset($_SESSION['dang-nhap']);
header('location: index.php');
