<h2>Quản Lí Hiệu Sản Phẩm</h2>
<form action="modules/quanliloaisanpham/process.php" method="post">
    <table border="1px" style="border-collapse:collapse;" class="loai-san-pham">
        <tr>
            <td>Mã Hiệu</td>
            <td>Tên Hiệu</td>
            <td>Tình Trạng</td>
        </tr>

        <?php
        // include('../config.php');
        $ma_loai = $_GET['ma-loai'];
        $sql = "select * from quanliloaisanpham where id_loai = '$ma_loai'";
        $rs = mysqli_query($conn, $sql);

        $each = mysqli_fetch_assoc($rs);
        if ($row = mysqli_num_rows($rs)) {
        ?>
            <tr>
                <td><input type="text" value="<?php echo $each['id_loai']; ?>" name="ma-loai" readonly></td>
                <td><input type="text" value="<?php echo $each['ten_loai']; ?>" name="loai-san-pham"></td>
                <td>
                    <select name="tinh-trang" id="tinh-trang">
                        <option value="1">Kích Hoạt</option>
                        <option value="0">Không Kích Hoạt</option>
                    </select>
                </td>
            </tr>
        <?php } ?>
    </table>
    <button type="submit" name="sua-loai">Sửa</button>
</form>