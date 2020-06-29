    <div class="dang-nhap">
        <div class="form">
            <h2>Đăng Kí Thành Viên</h2>
            <br>
            <form action="/PHP 2/customer/process.php" method="post" onsubmit="return formLogin()">
                <input type="text" name="ho_va_ten" id="ho_va_ten" placeholder="Họ và Tên" required>
                <br>
                <input type="text" name="ten_dang_nhap" id="ten_dang_nhap" placeholder="Tên đăng nhập" required>
                <br>
                <input type="password" name="mat_khau" id="mat_khau" placeholder="Mật khẩu" required>
                <br>
                <input type="password" name="nhap_lai_mat_khau" id="nhap_lai_mat_khau" placeholder="Nhập lại mật khẩu" required>
                <br>
                <button type="submit" name="dang_ki">Đăng Kí</button>
            </form>
        </div>
    </div>
