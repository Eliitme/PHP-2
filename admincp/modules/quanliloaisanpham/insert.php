<h2>Quản Lí Loại Sản Phẩm</h2>
<form action="modules/quanliloaisanpham/process.php" method="post">
    <table class="quan-li">
        <tr>
            <td>Loại Sản Phẩm:</td>
            <td><input type="text" name="loai_san_pham" id="loai_san_pham"></td>
        </tr>
        <tr>
            <td>Hiệu Sản Phẩm:</td>
            <td>
                <select name="ma_hieu" id="ma_hieu" style="width: 100%;">
                    <?php
                    $sql = "select * from quanlihieusanpham";
                    $rs = mysqli_query($conn, $sql);
                    while ($each = mysqli_fetch_array($rs)) {
                    ?>
                        <option value="<?php echo $each['id_hieu']; ?>"><?php echo $each['ten_hieu']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        
        <tr>
            <td></td>
            <td><button type="submit" name="them_loai" style="width: 100%;">Thêm Loại Sản Phẩm</button></td>
        </tr>
    </table>
</form>
<a href="index.php?manage=loai_san_pham&action=xem_tat_ca"><button style="width: 150px; height: 50px;">Xem tất Cả</button></a>