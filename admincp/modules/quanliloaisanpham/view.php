<h2>Quản Lí Loại Sản Phẩm</h2>

<table border="1px" style="border-collapse:collapse;" class="loai-san-pham">
    <tr>
        <td>Mã Loại</td>
        <td>Tên Loại</td>
        <td>Tên Hiệu</td>
        <td>Tình Trạng</td>
        <td colspan="2">Quản Lí</td>
    </tr>

    <?php
    // include('../config.php');
    $sql = "select id_loai, ten_loai, ten_hieu, quanliloaisanpham.tinh_trang as tinh_trang from quanliloaisanpham join quanlihieusanpham on quanlihieusanpham.id_hieu = quanliloaisanpham.id_hieu";
    $rs = mysqli_query($conn, $sql);


    // print_r($each);
    // die();

    while ($each = mysqli_fetch_assoc($rs)) {
        // echo $row;
        // die();

    ?>
        <tr>
            <td><?php echo $each['id_loai']; ?></td>
            <td><?php echo $each['ten_loai']; ?></td>
            <td><?php echo $each['ten_hieu']?></td>
            <td>
                <?php
                $tinh_trang = $each['tinh_trang'];
                if ($tinh_trang) {
                    echo "Kích Hoạt";
                } else echo "Không Kích Hoạt";
                ?>
            </td>
            <td>
                <a href="index.php?quan_li=loai_san_pham&&thao_tac=sua&&ma_loai=<?php echo $each['id_loai']; ?>"><img src="../images/edit.png" alt="" width="15px">Sửa</a>
            </td>
            <td>
                <a href="index.php?quan_li=loai_san_pham&&thao_tac=xoa_loai&&ma_loai=<?php echo $each['id_loai']; ?>" onclick="confirm('Bạn có muốn xóa trường hợp này không?')"><img src="../images/delete.png" alt="" width="15px">Xóa</a>
            </td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="6">
            <a href="index.php?quan_li=loai_san_pham&&thao_tac=them_loai"><button>Thêm Loại Sản Phẩm</button></a>
        </td>
    </tr>
</table>