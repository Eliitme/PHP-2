<h2>Quản Lí Hiệu Sản Phẩm</h2>

<table border="1px" style="border-collapse:collapse;" class="hieu-san-pham">
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
                    if($tinh_trang){
                        echo "Kích Hoạt";
                    } else echo "Không Kích Hoạt";
                ?>
            </td>
            <td>
                <a href="index.php?quan-li=hieu-san-pham&&thao-tac=sua&&ma-hieu=<?php echo $each['id_hieu'];?>"><img src="../images/edit.png" alt="" width="15px">Sửa</a>
            </td>
            <td>
                <a href="modules/quanlihieusanpham/process.php?ma-hieu=<?php echo $each['id_hieu'];?>"><img src="../images/delete.png" alt="" width="15px">Xóa</a>
            </td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="5">
            <a href="index.php?quan-li=hieu-san-pham&&thao-tac=them-hieu"><button>Thêm Hiệu Sản Phẩm</button></a>
        </td>
    </tr>
</table>