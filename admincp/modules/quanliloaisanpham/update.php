<h2>Quản Lí Loại Sản Phẩm</h2>
<form action="modules/quanliloaisanpham/process.php" method="post">
    <table border="1px" style="border-collapse:collapse;" class="quan-li-xem-sua">
        <tr>
            <td>Mã Loại</td>
            <td>Tên Loại</td>
            <td>Tên Hiệu</td>
            <td>Tình Trạng</td>
        </tr>

        <?php
        // include('../config.php');
        $ma_loai = $_GET['ma_loai'];
        $sql = "select * from quanliloaisanpham where id_loai = '$ma_loai'";
        $rs = mysqli_query($conn, $sql);

        $each = mysqli_fetch_assoc($rs);
        if ($row = mysqli_num_rows($rs)) {
        ?>
            <tr>
                <td><input type="text" value="<?php echo $each['id_loai']; ?>" name="ma_loai" readonly></td>
                <td><input type="text" value="<?php echo $each['ten_loai']; ?>" name="loai_san_pham"></td>
                <td>
                    <select name="ma_hieu" id="ma_hieu">
                        <?php
                        $sql = "select * from quanlihieusanpham where tinh_trang = 1";
                        $rs = mysqli_query($conn, $sql);
                        while ($each = mysqli_fetch_array($rs)) {
                        ?>
                            <option value="<?php echo $each['id_hieu']; ?>"><?php echo $each['ten_hieu']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="tinh_trang" id="tinh_trang">
                        <option value="1">Kích Hoạt</option>
                        <option value="0">Không Kích Hoạt</option>
                    </select>
                </td>
            </tr>
        <?php } ?>
    </table>
    <button type="submit" name="sua_loai">Sửa</button>
</form>