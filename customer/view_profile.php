<?php

$ma_khach_hang = $_SESSION['dang-nhap'];

$sql = "select * from khachhang where id_khach_hang = $ma_khach_hang";

$rs = mysqli_query($conn, $sql);



while($each = mysqli_fetch_array($rs)){
    ?>
    <div class="thong-tin-ca-nhan">
        <h3 style="text-align: center;">THÔNG TIN CÁ NHÂN</h3>
        <div class="anh-dai-dien">
            <img src="/PHP 2/customer/<?php echo $each['anh_dai_dien']?>" alt="" width="150px">
            <!-- <a href="">Đổi ảnh đại diện</a> -->
        </div>
        
        <div class="thong-tin">
            <table>
                <tr>
                    <td style="width: 100px">Họ tên:</td>
                    <td><?php echo $each['ho_va_ten']?></td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td><?php echo $each['so_dien_thoai']?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $each['email'] ?></td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><?php echo $each['dia_chi'] ?></td>
                </tr>
            </table>
            <div class="cap-nhat">
                <a href="index.php?manage=khach_hang&action=cap_nhat">Cập nhật thông tin cá nhân</a>
            </div>
        </div>
    </div>
    <?php
}
?>