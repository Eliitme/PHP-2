<div class="product">
    <?php

    if (isset($_GET['hieu'])) {
        $hieu = $_GET['hieu'];

        $sql = "select * from quanlisanpham where id_hieu = $hieu and tinh_trang = 1";
        $rs = mysqli_query($conn, $sql);
    } else if (isset($_GET['gia_tri'])) {
        $gia_tri = $_GET['gia_tri'];

        $sql = "select * from quanlisanpham where ten_san_pham like '%$gia_tri%' and tinh_trang = 1";
        $rs = mysqli_query($conn, $sql);
    } else {
        $sql = "select * from quanlisanpham where tinh_trang = 1";
        $rs = mysqli_query($conn, $sql);
    }

    if(mysqli_num_rows($rs) == 0){
        echo "Không có sản phẩm nào phù hợp";
    }
    while ($each = mysqli_fetch_array($rs)) {
    ?>
        <div class="item-san-pham">
            <img src="/PHP 2/admincp/modules/quanlisanpham/<?php echo $each['anh_san_pham'] ?>" alt="" width="230px;" height="175px">
            <figcaption style="text-align: center; height: 40px;"><a href="sanpham/view_all.php?ma_san_pham=<?php echo $each['id_san_pham'] ?>"><?php echo $each['ten_san_pham'] ?></a></figcaption>
            <p style="text-align: center; width: 100%;"><?php $gia = $each['gia'];
                                                        echo number_format($gia) ?> VNĐ</p>
            <p style="text-align: center;"><a href="/PHP 2/shopping_cart/cart_update.php?ma_san_pham=<?php echo $each['id_san_pham'] ?>" style="border: 1px solid red; border-radius: 10px; color: white; background-color: red; text-decoration: none; padding: 5px;">Thêm vào giỏ hàng</a></p>
        </div>
    <?php
    }
    ?>
</div>