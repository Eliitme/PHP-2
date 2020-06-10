<h2>Quản Lí Hiệu Sản Phẩm</h2>
<form action="modules/quanlihieusanpham/process.php" method="post" onsubmit="return formHieuSP()">
    <table class="quan-li">
        <tr>
            <td>Mã Hiệu:</td>
            <td><input type="text" name="ma_hieu" id="ma_hieu"></td>
        </tr>
        <tr>
            <td>Hiệu Sản Phẩm:</td>
            <td><input type="text" name="hieu_san_pham" id="hieu_san_pham"></td>
        </tr>
        <tr>
            <td>Tình trạng:</td>
            <td>
                <select name="tinh_trang" id="tinh_trang" style="width: 100%;">
                    <option value="0">Không Kích Hoạt</option>
                    <option value="1">Kích Hoạt</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="them_hieu" style="width: 100%;">Thêm Hiệu Sản Phẩm</button></td>
        </tr>
    </table>
</form>
<a href="index.php?quan_li=hieu_san_pham&&thao_tac=xem_tat_ca"><button style="width: 150px; height: 50px;">Xem tất Cả</button></a>
