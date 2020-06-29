<h2>Quản Lí Hiệu Sản Phẩm</h2>
<form action="?manage=hieu_san_pham&action=tim_kiem" method="post" style="float: right;">
    Tìm kiếm hiệu sản phẩm:
    <input type="search" name="tim_kiem" id="tim_kiem">
</form>
<table border="1px" style="border-collapse:collapse;" class="quan-li-xem-sua">
    <tr>
        <td>Tên Hiệu</td>
        <td colspan="2">Quản Lí</td>
    </tr>
    <?php

    $tim_kiem = $_POST['tim_kiem'];
    $sql = "select * from quanlihieusanpham where ten_hieu like '%$tim_kiem%'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);

    if ($row == 0) {
        echo "Chưa nhập hiệu sản phẩm trên";
    } else {
        while ($each = mysqli_fetch_array($rs)) { ?>
            <tr>
                <td><?php echo $each['ten_hieu']; ?></td>

                <td>
                    <a href="index.php?manage=hieu_san_pham&action=sua&ma_hieu=<?php echo $each['id_hieu']; ?>"><img src="../images/edit.png" alt="" width="15px">Sửa</a>
                </td>
                <td>
                    <a href="index.php?manage=hieu_san_pham&action=xoa_hieu&ma_hieu=<?php echo $each['id_hieu']; ?>" onclick="confirm('Bạn có muốn xóa trường hợp này không?')"><img src="../images/delete.png" alt="" width="15px">Xóa</a>
                </td>
            </tr>
    <?php
        }
    }
    ?>
    <tr>
        <td colspan="4">
            <a href="index.php?manage=hieu_san_pham&action=them_hieu"><button>Thêm Hiệu Sản Phẩm</button></a>
        </td>
    </tr>
</table>

<a href="#" onclick="history.go(-1);">Quay Lại</a>