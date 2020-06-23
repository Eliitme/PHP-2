<h2>Quản Lí Tin Tức</h2>

<table class="quan-li-xem-sua" border="1px solid black" style="border-collapse: collapse;">
    <tr>
        <td>Tiêu Đề</td>
        <td>Ảnh Bài Viết</td>
        <td>Tóm Tắt</td>
        <td>Chi Tiết</td>
        <td>Tình Trạng</td>
        <td colspan="2">Quản Lí</td>
    </tr>
    <?php
    $sql = "select *from quanlitintuc";
    $rs = mysqli_query($conn, $sql);

    while ($each = mysqli_fetch_array($rs)) {
    ?>
        <tr>
            <td><?php echo $each['tieu_de'] ?></td>
            <td><img src="modules/quanlitintuc/<?php echo $each['anh_bai_viet'] ?>" width="50px" alt=""></td>
            <td><?php echo $each['tom_tat'] ?></td>
            <td><a href="index.php?manage=tin_tuc&action=xem_chi_tiet&ma_tin_tuc=<?php echo $each['id_bai_viet'] ?>">Xem Chi Tiết</a></td>
            <td>
                <?php
                if ($each['tinh_trang'] == 1) {
                    echo "Xuất Bản";
                } else echo "Chưa Xuất Bản";

                ?>
            </td>
            <td>
                <a href="index.php?manage=tin_tuc&action=sua&ma_tin_tuc=<?php echo $each['id_bai_viet']; ?>"><img src="../images/edit.png" alt="" width="15px">Sửa</a>
            </td>
            <td>
                <a href="index.php?manage=tin_tuc&action=xoa_tin_tuc&ma_tin_tuc=<?php echo $each['id_bai_viet']; ?>" onclick="confirm('Bạn có muốn xóa trường hợp này không?')"><img src="../images/delete.png" alt="" width="15px">Xóa</a>
            </td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="11">
            <a href="index.php?manage=tin_tuc&action=them_tin_tuc"><button>Thêm Tin Tức</button></a>
        </td>
    </tr>
</table>