<div class="content-box">
    <div class="san-pham">
    <?php
        
        $sql = "select * from quanlisanpham";
        $rs = mysqli_query($conn, $sql);

        while($each = mysqli_fetch_array($rs)){ ?>
            <div class="item-san-pham">
                <img src="admincp/modules/quanlisanpham/<?php echo $each['anh_san_pham']?>" alt="" width="230px;" height="175px">
                <figcaption style="text-align: center; height: 40px"><a href="sanpham/view_all.php?ma_san_pham=<?php echo $each['id_san_pham']?>"><?php echo $each['ten_san_pham']?></a></figcaption>
                <p style="text-align: center; width: 100%;"><?php $gia = $each['gia']; echo number_format($gia) ?> VNĐ</p>
                <p style="text-align: center;"><a href="shopping_cart/cart_update.php?ma_san_pham=<?php echo $each['id_san_pham']?>" style="border: 1px solid red; border-radius: 10px; padding: 5px; text-decoration: none; color: white; background-color: red;">Thêm vào giỏ hàng</a></p>
            </div>
        <?php

        }
    ?>
    </div>
    <div class="linh-kien-laptop">
    </div>
</div>