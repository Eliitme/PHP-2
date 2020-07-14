<div class="content-box">
    <?php
    $trang = 1; //khởi tạo trang ban đầu
    $gioi_han = 8; //số bản ghi trên 1 trang 

    $rs = mysqli_query($conn, "select count(id_san_pham) as tong_san_pham from quanlisanpham where tinh_trang = 1");

    $tong_san_pham = mysqli_fetch_array($rs); //tính tổng số bản ghi 

    $tong_trang = ceil($tong_san_pham['tong_san_pham'] / $gioi_han); //tính tổng số trang sẽ chia

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

    ?>

    <div class="san-pham">
        <h3>SẢN PHẨM MỚI</h3>
        <?php

        $sql = "select * from quanlisanpham limit $vi_tri, $gioi_han";
        $rs = mysqli_query($conn, $sql);

        while ($each = mysqli_fetch_array($rs)) { ?>
            <div class="item-san-pham">
                <img src="admincp/modules/quanlisanpham/<?php echo $each['anh_san_pham'] ?>" alt="" width="230px;" height="175px">
                <figcaption style="text-align: center; height: 40px"><a href="sanpham/view_all.php?ma_san_pham=<?php echo $each['id_san_pham'] ?>"><?php echo $each['ten_san_pham'] ?></a></figcaption>
                <p style="text-align: center; width: 100%;"><?php $gia = $each['gia'];
                                                            echo number_format($gia) ?> VNĐ</p>
                <p style="text-align: center;"><a href="shopping_cart/cart_update.php?ma_san_pham=<?php echo $each['id_san_pham'] ?>" style="border: 1px solid red; border-radius: 10px; padding: 5px; text-decoration: none; color: white; background-color: red;">Thêm vào giỏ hàng</a></p>
            </div>
        <?php

        }
        ?>
        <div class="dem-trang" style="width: 100%; float: left; text-align: right;">
        <ul style="list-style-type: none;">
        <li style="display: inline-flex;">Xem trang:</li>
            <?php for ($i = 1; $i <= $tong_trang; $i++) {  ?>
                <li style="display: inline;">
                    <?php if ($i == $trang) { ?>
                        <span><?php echo $i ?></span>
                    <?php } else { ?>
                        <a href="index.php?trang=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    </div>
    <div class="linh-kien-laptop">
        <h3>TIN TỨC</h3>
        <?php


        $gioi_han = 2; //số bản ghi trên 1 trang (2 bản ghi trên 1 trang)

        $rs = mysqli_query($conn, "select count(id_bai_viet) as tong_bai_viet from quanlitintuc where tinh_trang = 1");

        $tong_bai_viet = mysqli_fetch_array($rs); //tính tổng số bản ghi 

        $tong_trang = ceil($tong_bai_viet['tong_bai_viet'] / $gioi_han); //tính tổng số trang sẽ chia
        $trang = random_int(1, $tong_trang); //khởi tạo trang ban đầu
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
            <div class="news-box-1" style="height: 200px; width: 49%; margin-left: 5px; border: 1px solid silver; font-size: 12px; float:left; text-align: justify; cursor: pointer;" onclick="location.href='view_all.php?ma_tin_tuc=<?php echo $each['id_bai_viet'] ?>'" style="width: 50%; float: left;">
                <h1><?php echo $each['tieu_de']; ?></h1>
                <figure>
                    <img src="/PHP 2/admincp/modules/quanlitintuc/<?php echo $each['anh_bai_viet']; ?>" alt="" width="128px">
                    <!-- <figcaption><?php echo $each['tom_tat'] ?></figcaption> -->
                </figure>
            </div>
        <?php
        }
        ?>
        <div style="width: 100%; float: left; text-align: right; margin-top: 15px;">
            <a href="/PHP 2/tintuc/view.php" style="padding: 10px; border: 1px solid red; border-radius: 15px; background-color: red; color: white;">Xem tất cả</a>
        </div>

    </div>
</div>