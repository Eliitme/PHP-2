<div id="menu-ngang">
    <ul class="menu">
        <li><a href="#">Trang Chủ</a></li>
        <li><a href="#">Giới Thiệu</a></li>
        <li><a href="#">Sản Phẩm</a></li>
        <li><a href="tintuc/view.php">Tin Tức</a></li>
        <li><a href="#">Liên Hệ</a></li>
    </ul>
    <ul class="right">
        <?php
        session_start();
        if (!isset($_SESSION['dang-nhap'])) {
        ?>
            <li><a href="dang_ki.php">Đăng Kí</a></li>
            <li><a href="dang_nhap.php">Đăng Nhập</a></li>
        <?php } else {
            if ($ma_khach_hang = isset($_SESSION['dang-nhap'])) {
                $sql = "select * from khachhang where id_khach_hang = $ma_khach_hang";
                $rs = mysqli_fetch_array(mysqli_query($conn, $sql));
            } ?>
            <li style="color: white;">Xin chào, <?php echo $rs['ho_va_ten'] ?>
                <i class="fas fa-chevron-down"></i>
                <ul id="sub-menu">
                    <li><a href="">Thông Tin Cá Nhân</a></li>
                    <li><a href="">Lịch Sử Mua Hàng</a></li>
                    <li><a href="dang_xuat.php?">Đăng Xuất</a></li>
                </ul>
            </li>
        <?php } ?>
        <li>
            <a href=""><i class="fas fa-shopping-cart"></i> Giỏ hàng:</a>
        </li>
    </ul>
</div>