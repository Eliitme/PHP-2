<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/all.css">
    <link rel="stylesheet" href="style/style-log.css">
    <script src="script/all.js"></script>
    <script src="script/script.js"></script>
</head>

<body>
    <div class="container">
        <?php
        include('admincp/modules/config.php');
        include('modules/header.php');
        include('modules/menu.php');
        ?>
        <div class="container-content">
            <?php
            include('modules/sidebar.php');
            include('modules/content.php');
            ?>
        </div>
        <?php
        include('modules/footer.php');
        ?>
    </div>
</body>

</html>