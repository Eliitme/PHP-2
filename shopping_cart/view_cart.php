<?php
if (!isset($_SESSION['gio_hang'])) {
    echo "Chưa có giỏ hàng, quay lại mua hàng";
?>
    <a href="#" onclick="history.go(-1)">Quay Lại</a>
<?php
} else {

?>

    <div class="cart-item" style="background-color: white;">

        <table border=1px style="justify-content: center; text-align: center; width: 100%; border: 1px solid black; border-collapse: collapse;">
            <tr>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
                <th>Xóa</th>
            </tr>
            <?php
            $gio_hang = $_SESSION['gio_hang'];
            $ma_san_pham = $_SESSION['gio_hang'];


            foreach ($gio_hang as $ma_san_pham => $san_pham) : ?>
                <tr>
                    <td style="width: 300px;">
                        <a href="/PHP 2/sanpham/view_all.php?ma_san_pham=<?php echo $ma_san_pham?>"><?php echo $san_pham['ten_san_pham'] ?></a>
                    </td>
                    <td>
                        <img src="/PHP 2/admincp/modules/quanlisanpham/<?php echo $san_pham['anh_san_pham'] ?>" width='200'>
                    </td>
                    <td>
                        <?php echo number_format($san_pham['gia']). " VNĐ" ?>
                    </td>
                    <td>
                        <a href="shopping_cart/change_cart.php?ma_san_pham=<?php echo $ma_san_pham ?>&action=giam_so_luong"><i class="fa fa-minus" aria-hidden="true"></i></a>
                        <?php echo $san_pham['so_luong'] ?>
                        <a href="shopping_cart/cart_update.php?ma_san_pham=<?php echo $ma_san_pham ?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <?php echo number_format($san_pham['gia'] * $san_pham['so_luong']). " VNĐ"?>
                    </td>
                    <td><a href="shopping_cart/delete_cart.php?ma_san_pham=<?php echo $ma_san_pham ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" style="text-align: right;">Thành tiền:</td>
                    <td>
                        <?php
                        $tong_tien = [];
                        foreach ($gio_hang as $ma_san_pham => $san_pham) :
                            $tong_tien[] = $san_pham['so_luong'] * $san_pham['gia'];
                        endforeach;
                        echo number_format(array_sum($tong_tien)) . " VNĐ";
                        ?>
                    </td>
                    <td></td>
                </tr>
        </table>
    </div>
    <br>
    <a href="shopping_cart/delete_cart.php" style="text-align: right; float: left; padding: 5px 5px 5px 5px; border: 1px solid black;">Xóa giỏ hàng</a>
    <a href="?manage=gio_hang&action=dat_hang" style="text-align: right; float: right; padding: 5px 5px 5px 5px; border: 1px solid black;">Xác nhận mua hàng</a>
<?php } ?>
