<h2>Quản Lí Tin Tức</h2>

<form action="modules/quanlitintuc/process.php" method="post" enctype="multipart/form-data">
    <table class="quan-li" border="1px solid black" style="border-collapse: collapse;">
        <tr>
            <td>Tiêu Đề Tin Tức</td>
            <td><input type="text" name="tieu_de" id="tieu_de"></td>
        </tr>
        <tr>
            <td>Ảnh Tiêu Đề</td>
            <td><input type="file" name="anh_bai_viet" id="anh_bai_viet"></td>
        </tr>
        <tr>
            <td>Tóm Tắt</td>
            <td><textarea name="tom_tat" id="tom_tat" cols="100" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Chi Tiết</td>
            <td>
                <textarea name="chi_tiet" id="chi_tiet" cols="30" rows="10"></textarea>
                <script>
                    CKEDITOR.replace('chi_tiet',{
                        filebrowserUploadUrl: '../images/uploads/quanlitintuc/upload.php',
                    });
                </script>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinh_trang" id="tinh_trang" style="width: 100%;">
                    <option value="1">Xuất Bản</option>
                    <option value="0">Chưa Xuất Bản</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="them_tin_tuc" style="width: 100%; height: 50px;">Thêm Tin</button></td>
        </tr>
    </table>
</form>
<a href="index.php?manage=tin_tuc&action=xem_tat_ca"><button style="width: 150px; height: 50px;">Xem tất Cả</button></a>