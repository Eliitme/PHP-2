<form action="modules/gallery/process.php" method="post" enctype="multipart/form-data">
    <h2>QUẢN LÍ BANNER GIỚI THIỆU SẢN PHẨM</h2>

    <p>Hướng dẫn: 4 hình ảnh mới nhất sẽ được chọn làm hiển thị banner ngoài trang chủ</p>
    <table class="quan-li">
        <tr>
            <td>Chọn hình ảnh (có thể chọn nhiều ảnh):</td>
            <td><input type="file" name="files[]" multiple="multiple"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="them_banner" style="width: 100%;">Thêm</button></td>
        </tr>
    </table>
</form>
<br><br>

<h4>Ảnh banner đang chạy</h4>
<table class="quan-li">

    <?php
    $sql = "select * from gallery order by id_anh desc limit 4";
    $rs = mysqli_query($conn, $sql);

    if (mysqli_num_rows($rs) == 0) {
        echo "Chưa có banner nào đang chạy";
    } else { ?>
        <tr>
            <?php while ($each = mysqli_fetch_array($rs)) { ?>
                <td><img src="/PHP 2/admincp/modules/gallery/<?php echo $each['url'] ?>" alt="" width="200px"></td>
            <?php } ?>
        </tr>
        <tr>
            <?php while ($each = mysqli_fetch_array($rs)) { ?>
                <td><?php echo $each['ten_anh'] ?></td>
            <?php } ?>
        </tr>
    <?php } ?>

</table>