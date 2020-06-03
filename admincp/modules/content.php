<div class="content">
    <div class="content-box">
        <?php
            if(isset($_GET['quan-li']) && isset($_GET['thao-tac'])){
                $quan_li = $_GET['quan-li'];
                $thao_tac = $_GET['thao-tac'];
            } else {
                $quan_li = '';
                $thao_tac = '';
            }
            if($quan_li == 'hieu-san-pham' && $thao_tac == 'them-hieu'){
                include('modules/quanlihieusanpham/insert.php');
            } else if($quan_li == 'hieu-san-pham' && $thao_tac == 'xem-tat-ca'){
                include('modules/quanlihieusanpham/view.php');
            } else if($quan_li == 'hieu-san-pham' && $thao_tac == 'xoa-hieu'){
                include('modules/quanlihieusanpham/delete.php');
            } else if($quan_li == 'hieu-san-pham' && $thao_tac == 'sua'){
                include('modules/quanlihieusanpham/update.php');
            } 
        ?>
    </div>
</div>