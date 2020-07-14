<h2>Quán Lí Sản Phẩm</h2>
<?php
$trang = 1; //khởi tạo trang ban đầu
$gioi_han = 6; //số bản ghi trên 1 trang 

$rs = mysqli_query($conn, "select count(id_san_pham) as tong_san_pham from quanlisanpham where tinh_trang = 1");

$tong_san_pham = mysqli_fetch_array($rs); //tính tổng số bản ghi 

$tong_trang = ceil($tong_san_pham['tong_san_pham'] / $gioi_han); //tính tổng số trang sẽ chia

//xem trang có vượt giới hạn không:
if (isset($_GET["trang"])) {
    $trang = $_GET["trang"]; //nếu biến $_GET["page"] tồn tại thì trang hiện tại là trang $_GET["page"]
    if ($trang < 1) {
        $trang = 1;
    } //nếu trang hiện tại nhỏ hơn 1 thì gán bằng 1
    if ($trang > $tong_trang) {
        $trang = $tong_trang;
    }
} //nếu trang hiện tại vượt quá số trang được chia thì sẽ bằng trang cuối cùng

//tính start (vị trí bản ghi sẽ bắt đầu lấy):
$vi_tri = ($trang - 1) * $gioi_han;

?>
<div class="dem-trang" style="width: 100%; float: left; text-align: right;">
    <ul style="list-style-type: none;">
    <li style="display: inline-flex;">Xem trang</li>
        <?php for ($i = 1; $i <= $tong_trang; $i++) {  ?>
            <li style="display: inline;">
                <?php if ($i == $trang) { ?>
                    <span><?php echo $i ?></span>
                <?php } else { ?>
                    <a href="index.php?manage=san_pham&action=xem_tat_ca&trang=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</div>

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
     join quanliloaisanpham on quanliloaisanpham.id_loai = quanlisanpham.id_loai order by id_san_pham desc limit $vi_tri, $gioi_han";

    $rs = mysqli_query($conn, $sql);

    while ($each = mysqli_fetch_array($rs)) {
    ?>
        <tr>
            <td><?php echo $each['ten_san_pham'] ?></td>
            <td><img src="modules/quanlisanpham/<?php echo $each['anh_san_pham'] ?>" alt="" height="150px"></td>
            <td><?php echo $each['ten_hieu'] . " - " . $each['ten_loai'] ?></td>
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
                <a href="index.php?manage=chi_tiet_san_pham&action=xem_chi_tiet&ma_san_pham=<?php echo $each['id_san_pham']; ?>">Xem chi tiết</a>
            </td>
            <td>
                <a href="index.php?manage=san_pham&action=sua&ma_san_pham=<?php echo $each['id_san_pham']; ?>"><img src="../images/edit.png" alt="" width="15px">Sửa</a>
            </td>
            <td>
                <a href="index.php?manage=san_pham&action=xoa_san_pham&ma_san_pham=<?php echo $each['id_san_pham']; ?>" onclick="confirm('Bạn có muốn xóa trường hợp này không?')"><img src="../images/delete.png" alt="" width="15px">Xóa</a>
            </td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="10">
            <a href="index.php?manage=san_pham&action=them_san_pham"><button>Thêm Sản Phẩm</button></a>
        </td>
    </tr>
</table>