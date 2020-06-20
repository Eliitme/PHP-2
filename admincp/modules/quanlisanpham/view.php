<h2>Quán Lí Sản Phẩm</h2>

<table border="1px" style="border-collapse:collapse;" class="quan-li-xem-sua">
    <tr>
        <td>Tên Sản Phẩm</td>
        <td>Ảnh Sản Phẩm</td>
        <td>Hiệu - Loại Sản Phẩm</td>
        <td>Giá Sản Phẩm</td>
        <td>Số Lượng</td>
        <td>Tình Trạng</td>
        <td colspan="3">Quản Lí</td>
    </tr>
    <?php
    $sql = "select id_san_pham, ten_san_pham, anh_san_pham, ten_hieu, ten_loai, gia, so_luong, quanlisanpham.tinh_trang
     from quanlisanpham join quanlihieusanpham on quanlihieusanpham.id_hieu = quanlisanpham.id_hieu
     join quanliloaisanpham on quanliloaisanpham.id_loai = quanlisanpham.id_loai";

    $rs = mysqli_query($conn, $sql);

    while ($each = mysqli_fetch_array($rs)) {
    ?>
        <tr>
            <td><?php echo $each['ten_san_pham'] ?></td>
            <td><img src="modules/quanlisanpham/<?php echo $each['anh_san_pham'] ?>" alt="" height="150px"></td>
            <td><?php echo $each['ten_hieu']." - ". $each['ten_loai'] ?></td>
            <td><?php echo $each['gia'] ?></td>
            <td><?php echo $each['so_luong'] ?></td>
            <td>
                <?php
                $tinh_trang = $each['tinh_trang'];
                if ($tinh_trang) {
                    echo "Kích Hoạt";
                } else echo "Không Kích Hoạt";
                ?>
            </td>
            <td>
                <a href="">Xem chi tiết</a>
            </td>
            <td>
                <a href="index.php?quan_li=san_pham&&thao_tac=sua&&ma_san_pham=<?php echo $each['id_san_pham']; ?>"><img src="../images/edit.png" alt="" width="15px">Sửa</a>
            </td>
            <td>
                <a href="index.php?quan_li=san_pham&&thao_tac=xoa_san_pham&&ma_san_pham=<?php echo $each['id_san_pham']; ?>" onclick="confirm('Bạn có muốn xóa trường hợp này không?')"><img src="../images/delete.png" alt="" width="15px">Xóa</a>
            </td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="10">
            <a href="index.php?quan_li=san_pham&&thao_tac=them_san_pham"><button>Thêm Sản Phẩm</button></a>
        </td>
    </tr>
</table>