<h2>Quản Lí Loại Sản Phẩm</h2>

<form action="?manage=loai_san_pham&action=tim_kiem" method="post" style="float: right;">
    Tìm kiếm loại sản phẩm:
    <input type="search" name="tim_kiem" id="tim_kiem">
</form>

<table border="1px" style="border-collapse:collapse;" class="quan-li-xem-sua">
    <tr>
        <td>Tên Loại</td>
        <td>Tên Hiệu</td>
        <td colspan="2">Quản Lí</td>
    </tr>

    <?php

    $sql = "select id_loai, ten_loai, ten_hieu from quanliloaisanpham join quanlihieusanpham on quanlihieusanpham.id_hieu = quanliloaisanpham.id_hieu";
    $rs = mysqli_query($conn, $sql);

    while ($each = mysqli_fetch_assoc($rs)) {

    ?>
        <tr>
            <td><?php echo $each['ten_loai']; ?></td>
            <td><?php echo $each['ten_hieu']?></td>
            <td>
                <a href="index.php?manage=loai_san_pham&action=sua&ma_loai=<?php echo $each['id_loai']; ?>"><img src="../images/edit.png" alt="" width="15px">Sửa</a>
            </td>
            <td>
                <a href="index.php?manage=loai_san_pham&action=xoa_loai&ma_loai=<?php echo $each['id_loai']; ?>" onclick="confirm('Bạn có muốn xóa trường hợp này không?')"><img src="../images/delete.png" alt="" width="15px">Xóa</a>
            </td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="5">
            <a href="index.php?manage=loai_san_pham&action=them_loai"><button>Thêm Loại Sản Phẩm</button></a>
        </td>
    </tr>
</table>