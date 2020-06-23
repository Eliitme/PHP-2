<div class="chi-tiet">
<a href = "javascript: history.back()">Quay lại</a>
    <?php
    $ma_san_pham = $_GET['ma_san_pham'];
    $sql = "select id_chi_tiet, ten_san_pham, anh_san_pham, gia, thong_so_ki_thuat, khuyen_mai, mo_ta_chi_tiet from chitietsanpham 
    join quanlisanpham on chitietsanpham.id_san_pham = quanlisanpham.id_san_pham 
    where chitietsanpham.id_san_pham = $ma_san_pham";

    $rs = mysqli_query($conn, $sql);
    while ($each = mysqli_fetch_array($rs)) {
    ?>
        <h1><?php echo $each['ten_san_pham'] ?></h1>
        <img src="modules/quanlisanpham/<?php echo $each['anh_san_pham']?>" alt="" width="300px">
        <p><?php echo $each['gia'] ?></p>
        <p><?php echo $each['khuyen_mai']?></p>
        <p><?php echo $each['thong_so_ki_thuat']?></p>
        <p><?php echo $each['mo_ta_chi_tiet']?></p>
    </div>
    <a href="index.php?manage=chi_tiet_san_pham&action=sua&ma_chi_tiet=<?php echo $each['id_chi_tiet']?>"><img src="../images/edit.png" alt="" width="15px">Sửa Chi Tiết</a>

    <?php
    }
    ?>


