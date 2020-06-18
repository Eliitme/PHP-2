<h2>Quản Lí Sản Phẩm</h2>
<form action="modules/quanlisanpham/process.php" method="post" enctype="multipart/form-data">
    <table class="quan-li">
        <tr>
            <td>Tên Sản Phẩm:</td>
            <td><input type="text" name="ten_san_pham" id="ten_san_pham"></td>
        </tr>
        <tr>
            <td>Ảnh Sản Phẩm:</td>
            <td><input type="file" name="anh_san_pham" id="anh_san_pham"></td>
        </tr>
        <tr>
            <td>Hiệu Sản Phẩm:</td>
            <td>
                <select name="hieu_san_pham" id="hieu_san_pham" style="width: 100%;">
                    <?php
                    $sql = "select * from quanlihieusanpham where tinh_trang =1";
                    $rs = mysqli_query($conn, $sql);
                    while ($each = mysqli_fetch_array($rs)) {
                    ?>
                        <option value="<?php echo $each['id_hieu'] ?>"><?php echo $each['ten_hieu'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Loại Sản Phẩm:</td>
            <td>
                <select name="loai_san_pham" id="loai_san_pham" style="width: 100%;">
                    <?php
                    $sql = "select * from quanliloaisanpham where id_hieu in(Select id_hieu from quanlihieusanpham where tinh_trang = 1) and tinh_trang =1";
                    $rs = mysqli_query($conn, $sql);
                    while ($each = mysqli_fetch_array($rs)) {
                    ?>
                        <option value="<?php echo $each['id_loai'] ?>"><?php echo $each['ten_loai'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giá Sản Phẩm:</td>
            <td><input type="text" name="gia_san_pham" id="gia_san_pham"></td>
        </tr>
        <tr>
            <td>Số Lượng:</td>
            <td><input type="text" name="so_luong" id="so_luong"></td>
        </tr>
        <tr>
            <td>Tình Trạng:</td>
            <td>
                <select name="tinh_trang" id="tinh_trang" style="width: 100%;">
                    <option value="0">Không Kích Hoạt</option>
                    <option value="1">Kích Hoạt</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="them_san_pham" style="width: 100%;">Thêm Sản Phẩm</button></td>
        </tr>
    </table>
</form>
<a href="index.php?quan_li=san_pham&&thao_tac=xem_tat_ca"><button style="width: 150px; height: 50px;">Xem tất Cả</button></a>