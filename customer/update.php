<?php
    $ma_khach_hang = $_SESSION['dang-nhap'];
    $sql = "select * from khachhang where id_khach_hang = $ma_khach_hang";
    $rs = mysqli_query($conn, $sql);
?>

<div class="cap-nhat-khach-hang">
    <h3>Cập Nhật Thông Tin Cá Nhân</h3>
    <form action="/PHP 2/customer/process.php" method="post" onsubmit="return validateFormUpdate()">
        <table>
            <?php while($each = mysqli_fetch_array($rs)){ ?>
            <tr><input type="hidden" name="ma_khach_hang" value="<?php echo $each['id_khach_hang'] ?>"></tr>
            <tr>
                <td>Họ Tên: </td>
                <td><input type="text" name="ho_va_ten" id="ho_va_ten" value="<?php echo $each['ho_va_ten']?>"></td>
            </tr>
            <tr>
                <td>Địa Chỉ: </td>
                <td><input type="text" name="dia_chi" id="dia_chi" value="<?php echo $each['dia_chi']?>"></td>
            </tr>
            <tr>
                <td>Số Điện Thoại: </td>
                <td><input type="text" name="so_dien_thoai" id="so_dien_thoai" value="<?php echo $each['so_dien_thoai']?>"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" id="email" value="<?php echo $each['email']?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><button type="submit" name="cap_nhat_thong_tin">Cập Nhật</button></td>
            </tr>
            <?php } ?>
        </table>
    </form>
</div>