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

            $trang = 1; //khởi tạo trang ban đầu
            $gioi_han = 6; //số bản ghi trên 1 trang 

            $rs = mysqli_query($conn, "select count(id_bai_viet) as tong_bai_viet from quanlitintuc where tinh_trang = 1");

            $tong_bai_viet = mysqli_fetch_array($rs); //tính tổng số bản ghi 

            $tong_trang = ceil($tong_bai_viet['tong_bai_viet'] / $gioi_han); //tính tổng số trang sẽ chia

            //xem trang có vượt giới hạn không:
            if (isset($_GET["trang"])) {
                $trang = $_GET["trang"]; //nếu biến $_GET["page"] tồn tại thì trang hiện tại là trang $_GET["page"]
                if ($trang < 1) {
                    $trang = 1;
                } //nếu trang hiện tại nhỏ hơn 1 thì gán bằng 1
                if ($trang > $tong_trang) {
                    $trang = $tong_trang;
                }
            } //nếu trang hiện tại vượt quá số trang được chia thì sẽ bằng trang cuối cùng

            //tính start (vị trí bản ghi sẽ bắt đầu lấy):
            $vi_tri = ($trang - 1) * $gioi_han;

            $sql = "select * from quanlitintuc where tinh_trang = 1 order by id_bai_viet desc limit $vi_tri, $gioi_han";
            $rs  = mysqli_query($conn, $sql);
            while ($each = mysqli_fetch_array($rs)) {
            ?>
                <div class="news-box" onclick="location.href='view_all.php?ma_tin_tuc=<?php echo $each['id_bai_viet'] ?>'" style="width: 47%; float: left; cursor: pointer; height: 550px; text-align: justify; margin: 15px;">
                    <h2><?php echo $each['tieu_de']; ?></h2>
                    <figure>
                        <img src="../admincp/modules/quanlitintuc/<?php echo $each['anh_bai_viet']; ?>" alt="" width="400px">
                        <figcaption style="margin: 0; width: 90%;"><?php echo $each['tom_tat'] ?></figcaption>
                    </figure>
                </div>
            <?php
            }
            ?>
            <div class="dem-trang" style="width: 100%; float: left; text-align: right;">
                <ul style="list-style-type: none;">
                    <li style="display: inline-flex;">Xem trang: </li>
                    <?php for ($i = 1; $i <= $tong_trang; $i++) {  ?>
                        <li style="display: inline;">
                            <?php if ($i == $trang) { ?>
                                <span><?php echo $i ?></span>
                            <?php } else { ?>
                                <a href="view.php?trang=<?php echo $i; ?>"><?php echo $i; ?></a>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php include('../modules/footer.php'); ?>
    </div>
</body>

</html>