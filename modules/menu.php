<div id="menu-ngang">
    <ul class="menu">
        <li><a href="#">Trang Chủ</a></li>
        <li><a href="#">Giới Thiệu</a></li>
        <li><a href="#">Sản Phẩm</a></li>
        <li><a href="#">Tin Tức</a></li>
        <li><a href="#">Liên Hệ</a></li>
    </ul>
    <ul class="right">
        <?php
        session_start();
        if (!isset($_SESSION['dang-nhap'])) {
        ?>
            <li><a href="dang_ki.php">Đăng Kí</a></li>
            <li><a href="dang_nhap.php">Đăng Nhập</a></li>
        <?php } else { ?>
            <li>
                <form action="dang_xuat.php" method="post">
                    <button type="submit" name="dang_xuat">Đăng xuất</button>
                </form>
            </li>
        <?php
            if ($ma_khach_hang = isset($_SESSION['dang-nhap'])) {
                $sql = "select * from khachhang where id_khach_hang = $ma_khach_hang";
                $rs = mysqli_fetch_array(mysqli_query($conn, $sql));
                echo "<li style='color: white;'>Xin chào, " . $rs['ho_va_ten'] . "</li>";
            }
        }
        ?>

    </ul>
</div>