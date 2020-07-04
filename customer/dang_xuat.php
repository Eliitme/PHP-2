<?php

session_start();
session_destroy();
header('location: /PHP 2/index.php');
