<h2>Quản Lí Quản Trị Viên</h2>

<table class="quan-li-xem-sua" border="1px" style="border-collapse: collapse; ">
    <tr>
        <td>Tên Đăng Nhập</td>
        <td>Cấp Độ</td>
        <td colspan="2">Quản Lí</td>
    </tr>
    <?php
    $sql = "select * from admin";
    $rs = mysqli_query($conn, $sql);

    while ($each = mysqli_fetch_array($rs)) { ?>
        <tr>
            <td><?php echo $each['ten_dang_nhap'] ?></td>
            <td>
                <?php if ($each['cap_do'] == 1) {
                    echo "Quản Trị Viên";
                } else echo "Nhân Viên";
                ?>
            </td>
            <?php if ($_SESSION['id_admin'] == 1) {

                if ($each['ten_dang_nhap'] != $_SESSION['dang-nhap']) {
            ?>
                    <td>
                        <a href="index.php?manage=quan_tri&action=xoa_admin&ma_admin=<?php echo $each['id_admin']; ?>" onclick="confirm('Bạn có muốn xóa trường hợp này không?')"><img src="../images/delete.png" alt="" width="15px">Xóa</a>
                    </td>
                <?php
                } else { ?>
                    <td></td>
                <?php }
            } else {
                ?>
                <td></td>
            <?php
            }
            ?>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="3">
            <a href="index.php?manage=quan_tri&action=them_admin"><button>Thêm Nhân Viên</button></a>
        </td>
    </tr>
</table>