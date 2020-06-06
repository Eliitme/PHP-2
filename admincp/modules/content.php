<div class="content">
    <div class="content-box">
        <?php
        $quan_li = $_GET['quan-li'] ?? '';
        $thao_tac = $_GET['thao-tac'] ?? '';
        switch ($quan_li) {
            case 'hieu-san-pham':
                # code...
                switch ($thao_tac) {
                    case 'them-hieu':
                        # code...
                        require_once('modules/quanlihieusanpham/insert.php');
                        break;
                    case 'xem-tat-ca':
                        require_once('modules/quanlihieusanpham/view.php');
                        break;
                    case 'sua':
                        require_once('modules/quanlihieusanpham/update.php');
                        break;
                    case 'xoa-hieu':
                        require_once('modules/quanlihieusanpham/delete.php');
                        break;

                    default:
                        # code...
                        require_once('modules/quanlihieusanpham/view.php');
                        break;
                }
                break;
            case 'loai-san-pham':
                switch ($thao_tac) {
                    case 'them-loai':
                        # code...
                        require_once('modules/quanliloaisanpham/insert.php');
                        break;
                    case 'xem-tat-ca':
                        require_once('modules/quanliloaisanpham/view.php');
                        break;
                    case 'sua':
                        require_once('modules/quanliloaisanpham/update.php');
                        break;
                    case 'xoa-loai':
                        require_once('modules/quanliloaisanpham/delete.php');
                        break;

                    default:
                        # code...
                        require_once('modules/quanliloaisanpham/view.php');
                        break;
                }
                break;
            default:
                # code...

                break;
        }
        ?>
    </div>
</div>