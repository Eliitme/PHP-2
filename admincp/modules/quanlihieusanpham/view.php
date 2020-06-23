<h2>Quản Lí Hiệu Sản Phẩm</h2>

<form action="?manage=hieu_san_pham&action=tim_kiem" method="post" style="float: right;">
    Tìm kiếm hiệu sản phẩm:
    <input type="search" name="tim_kiem" id="tim_kiem">
</form>

<table border="1px" style="border-collapse:collapse;" class="quan-li-xem-sua">
    <tr>
        <td>Tên Hiệu</td>
        <td>Tình Trạng</td>
        <td colspan="2">Quản Lí</td>
    </tr>

    <?php

    // include('../config.php');
    $sql = "select * from quanlihieusanpham";
    $rs = mysqli_query($conn, $sql);


    // print_r($each);
    // die();

    while ($each = mysqli_fetch_assoc($rs)) {
        // echo $row;
        // die();

    ?>
        <tr>
            <td><?php echo $each['ten_hieu']; ?></td>
            <td>
                <?php
                $tinh_trang = $each['tinh_trang'];
                if ($tinh_trang) {
                    echo "Kích Hoạt";
                } else echo "Không Kích Hoạt";
                ?>
            </td>
            <td>
                <a href="index.php?manage=hieu_san_pham&action=sua&ma_hieu=<?php echo $each['id_hieu']; ?>"><img src="../images/edit.png" alt="" width="15px">Sửa</a>
            </td>
            <td>
                <a href="index.php?manage=hieu_san_pham&action=xoa_hieu&ma_hieu=<?php echo $each['id_hieu']; ?>" onclick="confirm('Bạn có muốn xóa trường hợp này không?')"><img src="../images/delete.png" alt="" width="15px">Xóa</a>
            </td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="4">
            <a href="index.php?manage=hieu_san_pham&action=them_hieu"><button>Thêm Hiệu Sản Phẩm</button></a>
        </td>
    </tr>
</table>