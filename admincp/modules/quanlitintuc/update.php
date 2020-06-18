<h2>Quản Lí Tin Tức</h2>

<form action="modules/quanlitintuc/process.php" method="post" enctype="multipart/form-data">
    <table class="quan-li-xem-sua" border="1px solid black" style="border-collapse: collapse;">
        <?php
        $ma_tin_tuc = $_GET['ma_tin_tuc'];
        $sql = "select * from quanlitintuc where id_bai_viet = $ma_tin_tuc";
        $rs  = mysqli_query($conn, $sql);

        while ($each = mysqli_fetch_array($rs)) {
        ?>
            <tr>
                <td>Tiêu Đề Tin Tức</td>
                <td>
                    <input type="hidden" name="ma_tin_tuc" value="<?php echo $each['id_bai_viet'] ?>">
                    <input type="text" name="tieu_de" id="tieu_de" value="<?php echo $each['tieu_de'] ?>">
                </td>
            </tr>
            <tr>
                <td>Ảnh Tiêu Đề</td>
                <td>
                    <input type="hidden" name="anh_cu" id="anh_cu" value="<?php echo $each['anh_bai_viet'] ?>">
                    <img src="modules/quanlitintuc/<?php echo $each['anh_bai_viet'] ?>" alt="" srcset="" width="50px">
                    Đổi ảnh mới?
                    <input type="file" name="anh_bai_viet" id="anh_bai_viet">
                </td>
            </tr>
            <tr>
                <td>Tóm Tắt</td>
                <!-- <td><input type="text" name="tom_tat" id="tom_tat" value="<?php echo $each['tom_tat'] ?>"> -->
                <td><textarea name="tom_tat" id="tom_tat" cols="120" rows="10"><?php echo $each['tom_tat'] ?></textarea></td>
            </td>
            </tr>
            <tr>
                <td>Chi Tiết</td>
                <td>
                    <textarea name="chi_tiet" id="chi_tiet" cols="30" rows="10"><?php echo $each['chi_tiet']?></textarea>
                    <script>
                        CKEDITOR.replace('chi_tiet', {
                            filebrowserUploadUrl: 'modules/quanlitintuc/upload/upload.php',
                        });
                    </script>
                </td>
            </tr>
            <tr>
                <td>Tình trạng</td>
                <td>
                    <select name="tinh_trang" id="tinh_trang">
                        <option value="1">Xuất Bản</option>
                        <option value="0">Chưa Xuất Bản</option>
                    </select>
                </td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="2"><button type="submit" name="sua_tin_tuc" style="width: 100%;">Sửa Tin</button></td>
        </tr>
    </table>
</form>