<div class="chi-tiet">
    <a href="javascript: history.back()">Quay lại</a>

    <?php
    $ma_san_pham = $_GET['ma_san_pham'];

    $sql = "select * from chitietsanpham where id_san_pham = $ma_san_pham";
    $rs = mysqli_query($conn, $sql);

    if (mysqli_num_rows($rs) == 0) {
        $sql = "select * from quanlisanpham where id_san_pham = $ma_san_pham";
        $rs = mysqli_query($conn, $sql);
        while ($each = mysqli_fetch_array($rs)) {
    ?>
            <div class="thong-tin-san-pham">
                <h1><?php echo $each['ten_san_pham']; ?></h1>
                <hr>
                <img src="/PHP 2/admincp/modules/quanlisanpham/<?php echo $each['anh_san_pham'] ?>" alt="" id="anh-san-pham">
                <h3 id="gia-san-pham">Giá: <?php echo number_format($each['gia']) . " VNĐ" ?></h3>
                <?php echo "<h3 style=\"margin-left: 5%; width: 45%; float: right; position: relative\">Chưa có thông tin thêm về sản phẩm</h3>"; ?>
            </div>
        <?php }
    } else {

        $sql = "select id_chi_tiet, quanlisanpham.id_san_pham, ten_san_pham, gia, anh_san_pham, thong_so_ki_thuat, khuyen_mai, mo_ta_chi_tiet from quanlisanpham join chitietsanpham on quanlisanpham.id_san_pham = chitietsanpham.id_san_pham where quanlisanpham.id_san_pham = $ma_san_pham";
        $rs  = mysqli_query($conn, $sql);

        while ($each = mysqli_fetch_array($rs)) {

        ?>
            <div class="thong-tin-san-pham">
                <h1><?php echo $each['ten_san_pham']; ?></h1>
                <hr>
                <img src="/PHP 2/admincp/modules/quanlisanpham/<?php echo $each['anh_san_pham'] ?>" alt="" id="anh-san-pham">
                <h3 id="gia-san-pham">Giá: <?php echo number_format($each['gia']) . " VNĐ" ?></h3>

                <div id="khuyen-mai">
                    <h3 id="khuyen-mai">KHUYẾN MÃI</h3>
                    <?php if ($each['khuyen_mai'] == null) {
                        echo "Sản sản không có khuyến mãi";
                    } else {
                        echo $each['khuyen_mai'];
                    } ?>
                </div>
                <div style="width: 100%; float: left;"></div>
                <div id="thong-so-ki-thuat">
                    <h3 id="thong-so-ki-thuat"><span>THÔNG SỐ KỸ THUẬT</span></h3>
                    <?php if ($each['thong_so_ki_thuat'] == null) {
                        echo "Đang cập nhật thông số kỹ thuật";
                    } else {
                        echo $each['thong_so_ki_thuat'];
                    } ?>
                </div>
                <div id="chi-tiet-san-pham">
                    <h3 id="chi-tiet-san-pham">CHI TIẾT SẢN PHẨM</h3>
                    <?php if ($each['mo_ta_chi_tiet'] == null) {
                        echo "Đang cập nhật mô tả";
                    } else {
                        echo $each['mo_ta_chi_tiet'];
                    } ?>
                </div>

            </div>
            <a href="index.php?manage=chi_tiet_san_pham&action=sua&ma_chi_tiet=<?php echo $each['id_chi_tiet'] ?>"><img src="../images/edit.png" alt="" width="15px">Sửa Chi Tiết</a>
    <?php }
    }
    ?>

</div>