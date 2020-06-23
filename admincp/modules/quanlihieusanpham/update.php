<h2>Quản Lí Hiệu Sản Phẩm</h2>
<form action="modules/quanlihieusanpham/process.php" method="post" onsubmit="return formHieuSP()">
<table border="1px" style="border-collapse:collapse;" class="quan-li">
    <tr>
        <td>Tên Hiệu</td>
        <td>Tình Trạng</td>
    </tr>

    <?php

    // include('../config.php');
    $ma_hieu = $_GET['ma_hieu'];
    $sql = "select * from quanlihieusanpham where id_hieu = '$ma_hieu'";
    $rs = mysqli_query($conn, $sql);

    $each = mysqli_fetch_assoc($rs);
    if($row = mysqli_num_rows($rs)){

    ?>
        <tr>
            <td>
            <input type="hidden" value="<?php echo $each['id_hieu']; ?>" name="ma_hieu">
                <input type="text" value="<?php echo $each['ten_hieu']; ?>" name="hieu_san_pham">
            </td>
            <td>
                <select name="tinh_trang" id="tinh_trang" style="width: 100%;">
                    <option value="1">Kích Hoạt</option>
                    <option value="0">Không Kích Hoạt</option>
                </select>
            </td>
        </tr>
    <?php }?>
</table>
<button type="submit" name="sua_hieu" style="width: 100px; height: 35px;">Sửa</button>
</form>