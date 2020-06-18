<h2>Thay Đổi Mật Khẩu</h2>
<form action="modules/quanliquantri/process.php" method="post" onsubmit="return valiadate2()">
    <table class="quan-li">
        <tr>
            <input type="hidden" name="ma_admin" value="<?php echo $_SESSION['id_admin'] ?>">
            <td>Mật Khẩu Cũ:</td>
            <td><input type="password" name="mat_khau_cu" id="mat_khau_cu" required></td>
        </tr>
        <tr>
            <td>Mật Khẩu Mới:</td>
            <td><input type="password" name="mat_khau_moi" id="mat_khau_moi" required></td>
        </tr>
        <tr>
            <td>Nhập Lại Mật Khẩu:</td>
            <td><input type="password" name="nhap_lai_mat_khau" id="nhap_lai_mat_khau" required></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="sua" style="width: 100%;">Đổi Mật Khẩu</button></td>
        </tr>
    </table>
</form>