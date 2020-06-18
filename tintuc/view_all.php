<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Tức</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div class="container">
        <?php
        include('../modules/config.php');
        include('../modules/header.php');
        include('../modules/menu.php');
        ?>
        <div class="content-box">
            <?php
            $ma_tin_tuc = $_GET['ma_tin_tuc'];

            $sql = "select * from quanlitintuc where id_bai_viet = $ma_tin_tuc";
            $rs  = mysqli_query($conn, $sql);
            while ($each = mysqli_fetch_array($rs)) {
            ?>
                <div class="news">
                    <h1><?php echo $each['tieu_de']; ?></h1>
                   <p><?php echo $each['chi_tiet'] ?></p>
                </div>
            <?php
            }
            ?>
        </div>
        <?php include('../modules/footer.php'); ?>
    </div>
</body>

</html>