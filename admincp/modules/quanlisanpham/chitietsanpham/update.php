<h2>Chi Tiết Sản Phẩm</h2>
<form action="modules/quanlisanpham/chitietsanpham/process.php" method="post" enctype="multipart/form-data">
    <table class="quan-li">
        <?php
        $ma_chi_tiet = $_GET['ma_chi_tiet'];
        $sql = "select id_chi_tiet, ten_san_pham, thong_so_ki_thuat, khuyen_mai, mo_ta_chi_tiet from chitietsanpham join quanlisanpham on quanlisanpham.id_san_pham = chitietsanpham.id_san_pham where id_chi_tiet = '$ma_chi_tiet'";
        $rs = mysqli_query($conn, $sql);
        $each = mysqli_fetch_array($rs);
        ?>
        <tr>
            <td>Tên Sản Phẩm:</td>
            <td><?php echo $each['ten_san_pham'] ?></td>
            <td><input type="hidden" name="ma_chi_tiet" id="ma_chi_tiet" value="<?php echo $each['id_chi_tiet'] ?>"></td>
        </tr>
        <tr>
            <td>Thông Số Kĩ Thuật:</td>
            <td>
                <textarea name="thong_so_ki_thuat" id="thong_so_ki_thuat"><?php echo $each['thong_so_ki_thuat'] ?></textarea>
                <script>
                    CKEDITOR.replace('thong_so_ki_thuat', {
                        filebrowserUploadUrl: '../images/uploads/quanlisanpham/upload.php',
                    });
                </script>
            </td>
        </tr>
        <tr>
            <td>Khuyến Mãi:</td>
            <td>
                <textarea name="khuyen_mai" id="khuyen_mai"><?php echo $each['khuyen_mai'] ?></textarea>
                <script>
                    CKEDITOR.replace('khuyen_mai');
                </script>
            </td>
        </tr>
        <tr>
            <td>Chi Tiết Sản Phẩm:</td>
            <td>
                <textarea name="mo_ta_chi_tiet" id="mo_ta_chi_tiet"><?php echo $each['mo_ta_chi_tiet'] ?></textarea>
                <script>
                    CKEDITOR.replace('mo_ta_chi_tiet', {
                        filebrowserUploadUrl: '../images/uploads/quanlisanpham/upload.php',
                    });
                </script>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="sua_chi_tiet" style="width: 100%; height: 50px;">Sửa Chi Tiết</button></td>
        </tr>
    </table>
</form>