<h2>Quản Lí Hiệu Sản Phẩm</h2>
<form action="modules/quanlihieusanpham/process.php" method="post" onsubmit="return formHieuSP()">
<table border="1px" style="border-collapse:collapse;" class="hieu-san-pham">
    <tr>
        <td>Mã Hiệu</td>
        <td>Tên Hiệu</td>
        <td>Tình Trạng</td>
    </tr>

    <?php
    // include('../config.php');
    $ma_hieu = $_GET['ma-hieu'];
    $sql = "select * from quanlihieusanpham where id_hieu = '$ma_hieu'";
    $rs = mysqli_query($conn, $sql);

    $each = mysqli_fetch_assoc($rs);
    if($row = mysqli_num_rows($rs)){

    ?>
        <tr>
            <td><input type="text" value="<?php echo $each['id_hieu']; ?>" name="ma-hieu" readonly></td>
            <td><input type="text" value="<?php echo $each['ten_hieu']; ?>" name="hieu-san-pham"></td>
            <td>
                <select name="tinh-trang" id="tinh-trang">
                    <option value="1">Kích Hoạt</option>
                    <option value="0">Không Kích Hoạt</option>
                </select>
            </td>
        </tr>
    <?php }?>
</table>
<button type="submit" name="sua-hieu">Sửa</button>
</form>