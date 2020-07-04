<?php
$trang = 1; //khởi tạo trang ban đầu
$gioi_han = 20; //số bản ghi trên 1 trang 

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


<div class="product">
    <h3>DANH SÁCH SẢN PHẨM</h3>
    <div class="dem-trang" style="width: 100%; float: left; text-align: center;">
        <ul style="list-style-type: none;">
            <?php for ($i = 1; $i <= $tong_trang; $i++) {  ?>
                <li style="display: inline;">
                    <?php if ($i == $trang) { ?>
                        <span><?php echo $i ?></span>
                    <?php } else { ?>
                        <a href="index.php?manage=xem_san_pham&action=xem_tat_ca&trang=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
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
        $sql = "select * from quanlisanpham where tinh_trang = 1 limit $vi_tri, $gioi_han";
        $rs = mysqli_query($conn, $sql);
    }

    if (mysqli_num_rows($rs) == 0) {
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