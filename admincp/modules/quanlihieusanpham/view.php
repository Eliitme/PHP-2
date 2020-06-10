<h2>Quản Lí Hiệu Sản Phẩm</h2>

<table border="1px" style="border-collapse:collapse;" class="quan-li-xem-sua">
    <tr>
        <td>Mã Hiệu</td>
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
            <td><?php echo $each['id_hieu']; ?></td>
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
                <a href="index.php?quan_li=hieu_san_pham&&thao_tac=sua&&ma_hieu=<?php echo $each['id_hieu']; ?>"><img src="../images/edit.png" alt="" width="15px">Sửa</a>
            </td>
            <td>
                <a href="index.php?quan_li=hieu_san_pham&&thao_tac=xoa_hieu&&ma_hieu=<?php echo $each['id_hieu']; ?>" onclick="confirm('Bạn có muốn xóa trường hợp này không?')"><img src="../images/delete.png" alt="" width="15px">Xóa</a>
            </td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="5">
            <a href="index.php?quan_li=hieu_san_pham&&thao_tac=them_hieu"><button>Thêm Hiệu Sản Phẩm</button></a>
        </td>
    </tr>
</table>