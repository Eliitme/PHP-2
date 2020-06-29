<h2>Quản Lí Hiệu Sản Phẩm</h2>
<form action="modules/quanlihieusanpham/process.php" method="post" onsubmit="return formHieuSP()">
    <table class="quan-li">
        <tr>
            <td>Hiệu Sản Phẩm:</td>
            <td><input type="text" name="hieu_san_pham" id="hieu_san_pham"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="them_hieu" style="width: 100%; height: 35px;">Thêm Hiệu Sản Phẩm</button></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?manage=hieu_san_pham&action=xem_tat_ca"><button style="width: 150px;">Xem tất Cả</button></a>
