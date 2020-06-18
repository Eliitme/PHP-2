<div class="chi-tiet">
<a href = "javascript:history.back()">Quay lại</a>
<a href="index.php?quan_li=tin_tuc&&thao_tac=sua&&ma_tin_tuc=<?php echo $ma_tin_tuc?>"><img src="../images/edit.png" alt="" width="15px">Sửa Chi Tiết</a>

    <?php
    $ma_tin_tuc = $_GET['ma_tin_tuc'];
    $sql = "select * from quanlitintuc where id_bai_viet = $ma_tin_tuc";
    $rs = mysqli_query($conn, $sql);
    while ($each = mysqli_fetch_array($rs)) {
    ?>
        <h1><?php echo $each['tieu_de'] ?></h1>
        <p><?php echo $each['chi_tiet'] ?></p>
    <?php
    }
    ?>
</div>