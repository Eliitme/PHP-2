<?php


if (!isset($_SESSION['dang-nhap'])) {
    echo "<script>alert('Bạn chưa đăng nhập! Mời đăng nhập rồi tiếp tục'); window.location.replace('/PHP 2/index.php?manage=khach_hang&action=dang_nhap')</script>";
} else {
    $ma_khach_hang = $_SESSION['dang-nhap'];
    $sql = "select * from khachhang where id_khach_hang = $ma_khach_hang";
    $rs = mysqli_query($conn, $sql);

    while ($each = mysqli_fetch_array($rs)) {
        if (!$each['dia_chi'] || !$each['so_dien_thoai'] || !$each['email']) {
            echo "<script>alert('Bạn chưa cập nhật đầy đủ thông tin, mời xác nhận thông tin'); window.location.replace('/PHP 2/index.php?manage=khach_hang&action=cap_nhat&ma_khach_hang=" . $ma_khach_hang . "')</script>";
        } else { ?>
            <div class="xac-nhan-don-hang">
                <h3>Xác Nhận Đặt Hàng</h3>
                <form action="/PHP 2/shopping_cart/process.php" method="post">
                    <div class="cart-item" style="background-color: white;">

                        <table border=1px style="justify-content: center; text-align: center; width: 100%; border: 1px solid black; border-collapse: collapse;">
                            <tr>
                                <td>STT</td>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng</th>
                            </tr>

                            <?php
                            $gio_hang = $_SESSION['gio_hang'];
                            $ma_san_pham = $_SESSION['gio_hang'];
                            $i = 1;

                            foreach ($gio_hang as $ma_san_pham => $san_pham) : ?>
                                <tr>
                                    <td><?php echo $i++ ?><input type="hidden" name="ma_san_pham" value="<?php echo $ma_san_pham ?>"></td>
                                    <td style="width: 300px;">
                                        <a href="/PHP 2/sanpham/view_all.php?ma_san_pham=<?php echo $ma_san_pham ?>"><?php echo $san_pham['ten_san_pham'] ?></a>
                                    </td>
                                    <td>
                                        <img src="/PHP 2/admincp/modules/quanlisanpham/<?php echo $san_pham['anh_san_pham'] ?>" width='200'>
                                    </td>
                                    <td>
                                        <input type="hidden" name="gia" value="<?php echo $san_pham['gia'] ?>">
                                        <?php echo number_format($san_pham['gia']) . " VNĐ" ?>
                                    </td>
                                    <td>
                                        <input type="hidden" name="so_luong" value="<?php echo $san_pham['so_luong'] ?>">
                                        <?php echo $san_pham['so_luong'] ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($san_pham['gia'] * $san_pham['so_luong']) . " VNĐ" ?>
                                    </td>
                                <?php endforeach; ?>
                                <tr>
                                    <td></td>
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
                                </tr>
                        </table>
                    </div>
                    <div class="thong-tin-nguoi-nhan">
                        <h3>Thông Tin Người Nhận</h3>
                        <table>
                        <?php 
                        $sql = "select * from khachhang where id_khach_hang = $ma_khach_hang";
                        $rs = mysqli_query($conn, $sql);

                        while($each = mysqli_fetch_array($rs)){ ?>
                            <tr>
                                <td>Họ Tên Người Nhận:</td>
                                <td><input type="text" name="ho_va_ten" id="ho_va_ten" value="<?php echo $each['ho_va_ten']?>"></td>
                            </tr>
                            <tr>
                                <td>Số Điện Thoại Người Nhận:</td>
                                <td><input type="text" name="so_dien_thoai" id="so_dien_thoai" value="<?php echo $each['so_dien_thoai']?>"></td>
                            </tr>
                            <tr>
                                <td>Địa Chỉ Người Nhận Người Nhận:</td>
                                <td><textarea name="dia_chi" id="dia_chi" cols="20" rows="10"><?php echo $each['dia_chi']?></textarea></td>
                            </tr>
                            <tr>
                                <td>Ghi Chú Người Nhận:</td>
                                <td><textarea name="ghi_chu" id="ghi_chu" cols="20" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;"><button type="submit" name="dat_hang">Xác Nhận</button></td>
                            </tr>
                        <?php }
                        ?>
                            
                        </table>
                    </div>
                </form>
            </div>
<?php }
    }
}
