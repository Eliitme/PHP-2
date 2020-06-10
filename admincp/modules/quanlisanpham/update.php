<h2>Quán Lí Sản Phẩm</h2>
<form action="modules/quanlisanpham/process.php" method="post" enctype="multipart/form-data">
<table border="1px" style="border-collapse:collapse;" class="quan-li-xem-sua">
    <tr>
        <td>Mã Sản Phẩm</td>
        <td>Tên Sản Phẩm</td>
        <td>Ảnh Sản Phẩm</td>
        <td>Hiệu Sản Phẩm</td>
        <td>Loại Sản Phẩm</td>
        <td>Giá Sản Phẩm</td>
        <td>Số Lượng</td>
        <td>Tình Trạng</td>
    </tr>
    <?php
    $ma_san_pham = $_GET['ma_san_pham'];
    
    $sql = "select * from quanlisanpham where id_san_pham = '$ma_san_pham'";

    $rs = mysqli_query($conn, $sql);

    while ($each = mysqli_fetch_array($rs)) {
    ?>
        <tr>
            <td><input type="text" name="ma_san_pham" id="ma_san_pham" value="<?php echo $each['id_san_pham'] ?>" readonly></td>
            <td><input type="text" name="ten_san_pham" id="ten_san_pham" value="<?php echo $each['ten_san_pham'] ?>"></td>
            <td>
                <img src="modules/quanlisanpham/<?php echo $each['anh_san_pham'] ?>" alt="" height="50px">
                <input type="hidden" value="<?php echo $each['anh_san_pham'] ?>" name="anh_cu">
                <br>
                Đổi ảnh khác? <input type="file" name="anh_san_pham" id="anh_san_pham">
            </td>
            <td>
                <select name="hieu_san_pham" id="hieu_san_pham">
                <?php 
                $ma_hieu = $each['id_hieu'];
                $sql1 = "select * from quanlihieusanpham where tinh_trang = 1";
                $rs1 = mysqli_query($conn, $sql1);

                while($each1 = mysqli_fetch_array($rs1)){
                    ?>
                    <option value="<?php echo $each1['id_hieu'] ?>"><?php echo $each1['ten_hieu'] ?></option>
                    <?php
                }
                ?>

                </select>
            </td>
            <td>
                <select name="loai_san_pham" id="loai_san_pham">
                <?php 
                $ma_loai = $each['id_loai'];
                $sql2 = "select * from quanliloaisanpham where tinh_trang = 1";
                $rs2 = mysqli_query($conn, $sql2);

                while($each2 = mysqli_fetch_array($rs2)){
                    ?>
                    <option value="<?php echo $each2['id_loai'] ?>"><?php echo $each2['ten_loai'] ?></option>
                    <?php
                }
                ?>
                </select>
                
            </td>
            <td><input type="text" name="gia_san_pham" id="gia_san_pham" value="<?php echo $each['gia'] ?>"></td>
            <td><input type="text" name="so_luong" id="so_luong" value="<?php echo $each['so_luong'] ?>"></td>
            <td>
                <select name="tinh_trang" id="tinh_trang">
                    <option value="1">Kích Hoạt</option>
                    <option value="0">Không Kích Hoạt</option>
                </select>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<button type="submit" name="sua_san_pham">Sửa Sản Phẩm</button>
</form>