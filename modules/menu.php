<div id="menu-ngang">
    <ul class="menu">
        <li><a href="/PHP 2/index.php">Trang Chủ</a></li>
        <li><a href="#">Giới Thiệu</a></li>
        <li><a href="/PHP 2/index.php?manage=xem_san_pham&action=xem_tat_ca">Sản Phẩm</a></li>
        <li><a href="/PHP 2/tintuc/view.php">Tin Tức</a></li>
        <li><a href="#">Liên Hệ</a></li>
    </ul>
    <ul class="right">
        <?php
        session_start();
        if (!isset($_SESSION['dang-nhap'])) {
        ?>
            <li><a href="/PHP 2/index.php?manage=khach_hang&action=dang_ki">Đăng Kí</a></li>
            <li><a href="/PHP 2/index.php?manage=khach_hang&action=dang_nhap">Đăng Nhập</a></li>
        <?php } else {
            if ($ma_khach_hang = $_SESSION['dang-nhap']) {
                $sql = "select * from khachhang where id_khach_hang = $ma_khach_hang";
                $rs = mysqli_fetch_array(mysqli_query($conn, $sql));
            } ?>
            <li style="color: white; width: 200px;">Xin chào, <?php echo $rs['ho_va_ten'] ?>
                <i class="fas fa-chevron-down"></i>
                <ul id="sub-menu">
                    <li><a href="/PHP 2/index.php?manage=khach_hang&action=xem_thong_tin">Thông Tin Cá Nhân</a></li>
                    <li><a href="/PHP 2/index.php?manage=khach_hang&action=xem_lich_su_mua_hang">Lịch Sử Mua Hàng</a></li>
                    <li><a href="/PHP 2/customer/dang_xuat.php">Đăng Xuất</a></li>
                </ul>
            </li>
        <?php } ?>
        <li>
            <a href="/PHP 2/index.php?manage=gio_hang&action=xem_gio_hang"><i class="fas fa-shopping-cart"></i>Giỏ hàng:
                <?php
                if (!isset($_SESSION['so_luong'])) {
                    echo "0";
                } else {
                    echo $_SESSION['so_luong'];
                }
                ?>
            </a>
        </li>
    </ul>
</div>

