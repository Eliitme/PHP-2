    <div class="dang-nhap">
        <div class="form">
            <h2>Đăng Kí Thành Viên</h2>
            <br>
            <form action="/PHP 2/customer/process.php" method="post" onsubmit="return formRegister()">
                <input type="text" name="ho_va_ten" id="ho_va_ten" placeholder="Họ và Tên">
                <br>
                <input type="text" name="ten_dang_nhap" id="ten_dang_nhap" placeholder="Tên đăng nhập">
                <br>
                <input type="password" name="mat_khau" id="mat_khau" placeholder="Mật khẩu">
                <br>
                <input type="password" name="nhap_lai_mat_khau" id="nhap_lai_mat_khau" placeholder="Nhập lại mật khẩu">
                <br>
                <button type="submit" name="dang_ki">Đăng Kí</button>
            </form>
            <br>
            <a href="/PHP%202/index.php?manage=khach_hang&action=dang_nhap">Đã có tài khoản, ĐĂNG NHÂP?</a>
        </div>
    </div>
