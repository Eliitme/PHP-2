<div class="product">
    <?php

    if (isset($_GET['hieu'])) {
        $hieu = $_GET['hieu'];

        $sql = "select * from quanlisanpham where id_hieu = $hieu and tinh_trang = 1";
        $rs = mysqli_query($conn, $sql);
    } else if (isset($_GET['tim'])) {
        $tim = $_GET['tim'];

        $sql = "select * from quanlisanpham where ten_san_pham like '%$tim%' and tinh_trang = 1";
        $rs = mysqli_query($conn, $sql);
    } else {
        $sql = "select * from quanlisanpham where tinh_trang = 1";
        $rs = mysqli_query($conn, $sql);
    }
    while ($each = mysqli_fetch_array($rs)) {
    ?>
        <div class="product-items">
            <img src="admincp/modules/quanlisanpham/<?php echo $each['anh_san_pham'] ?>" alt="" width="230px;">
            <figcaption style="text-align: center;"><a href="sanpham/view_all.php?ma_san_pham=<?php echo $each['id_san_pham'] ?>"><?php echo $each['ten_san_pham'] ?></a></figcaption>
            <p style="text-align: center; width: 100%;"><?php $gia = $each['gia'];
                                                        echo number_format($gia) ?> VNĐ</p>
            <p><a href="shopping_cart/cart_update.php?ma_san_pham=<?php echo $each['id_san_pham'] ?>">Thêm vào giỏ hàng</a></p>
        </div>
    <?php
    }
    ?>
</div>