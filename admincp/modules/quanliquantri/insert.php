
    <h2>Quản Lí Quản Trị Viên</h2>

    <form action="modules/quanliquantri/process.php" method="post" onsubmit="return valiadate()">
        <table class="quan-li">
            <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="ten_dang_nhap" id="ten_dang_nhap" required></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="mat_khau" id="mat_khau" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="them_admin" style="width: 100%;">Thêm Nhân Viên</button></td>
            </tr>
        </table>
    </form>
    <a href="index.php?quan_li=quan_tri&&thao_tac=xem_tat_ca"><button style="width: 150px; height: 50px;">Xem tất Cả</button></a>