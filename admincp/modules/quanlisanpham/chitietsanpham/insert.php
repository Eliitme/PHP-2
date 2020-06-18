<?php
$ma_san_pham = $_GET['ma_san_pham'];
$sql = "select ten_san_pham from quanlisanpham where id_san_pham = '$ma_san_pham'";
$rs = mysqli_query($conn, $sql);
$each = mysqli_fetch_array($rs);
?>

<h2>Chi Tiết Sản Phẩm</h2>
<form action="modules/quanlisanpham/chitietsanpham/process.php" method="post" enctype="multipart/form-data">
    <table class="quan-li">
        <tr>
            <td>Tên Sản Phẩm:</td>
            <td><?php echo $each['ten_san_pham'] ?></td>
            <td><input type="hidden" name="ma_san_pham" id="ma_san_pham" value="<?php echo $ma_san_pham ?>"></td>
        </tr>
        <tr>
            <td>Thông Số Kĩ Thuật:</td>
            <td>
                <textarea name="thong_so_ki_thuat" id="thong_so_ki_thuat"></textarea>
                <script>
                    CKEDITOR.replace('thong_so_ki_thuat',{
                        filebrowserUploadUrl: '../../images/uploads/quanlitintuc/upload.php',
                    });
                </script>
            </td>
        </tr>
        <tr>
            <td>Khuyến Mãi:</td>
            <td>
                <textarea name="khuyen_mai" id="khuyen_mai"></textarea>
                <script>
                    CKEDITOR.replace('khuyen_mai');
                </script>
            </td>
        </tr>
        <tr>
            <td>Chi Tiết Sản Phẩm:</td>
            <td>
                <textarea name="mo_ta_chi_tiet" id="mo_ta_chi_tiet"></textarea>
                <script>
                    CKEDITOR.replace('mo_ta_chi_tiet',{
                        filebrowserUploadUrl: '../../images/uploads/quanlitintuc/upload.php',
                    });
                </script>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="them_chi_tiet" style="width: 100%; height: 50px;">Thêm Chi Tiết</button></td>
        </tr>
    </table>
</form>