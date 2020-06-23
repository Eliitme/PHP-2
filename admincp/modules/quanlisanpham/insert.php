<?php
function fill_brand($conn)
{
    $output = '';
    $sql = "SELECT * FROM quanlihieusanpham";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<option value="' . $row["id_hieu"] . '">' . $row["ten_hieu"] . '</option>';
    }
    return $output;
}
function fill_product($conn)
{
    $output = '';
    $sql = "SELECT * FROM quanliloaisanpham";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<option value="' . $row["id_loai"] . '">' . $row["ten_loai"] . '</option>';
    }
    return $output;
}
?>


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
                <select name="hieu_san_pham" id="hieu_san_pham" style="width: 100%;" required>
                    <option value="" disabled selected hidden>Chọn Hiệu Sản Phẩm</option>
                    <?php echo fill_brand($conn); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Loại Sản Phẩm:</td>
            <td>
                <select name="loai_san_pham" id="loai_san_pham" style="width: 100%;">
                <option value="">Chọn Loại Sản Phẩm</option>
                    <?php echo fill_product($conn); ?>
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
<a href="index.php?manage=san_pham&action=xem_tat_ca"><button style="width: 150px; height: 50px;">Xem tất Cả</button></a>

<script>
    $(document).ready(function() {
        $('#hieu_san_pham').change(function() {
            var id_hieu = $(this).val();
            $.ajax({
                url: "load_data.php",
                method: "POST",
                data: {
                    id_hieu: id_hieu
                },
                success: function(data) {
                    $('#loai_san_pham').html(data);
                }
            });
        });
    });
</script>