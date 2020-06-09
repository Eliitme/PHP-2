<div class="content">
    <div class="content-box">
        <?php
        $quan_li = $_GET['quan_li'] ?? '';
        $thao_tac = $_GET['thao_tac'] ?? '';
        switch ($quan_li) {
            case 'hieu_san_pham':
                # code...
                switch ($thao_tac) {
                    case 'them_hieu':
                        # code...
                        require_once('modules/quanlihieusanpham/insert.php');
                        break;
                    case 'xem_tat_ca':
                        require_once('modules/quanlihieusanpham/view.php');
                        break;
                    case 'sua':
                        require_once('modules/quanlihieusanpham/update.php');
                        break;
                    case 'xoa_hieu':
                        require_once('modules/quanlihieusanpham/delete.php');
                        break;

                    default:
                        # code...
                        require_once('modules/quanlihieusanpham/view.php');
                        break;
                }
                break;
            case 'loai_san_pham':
                switch ($thao_tac) {
                    case 'them_loai':
                        # code...
                        require_once('modules/quanliloaisanpham/insert.php');
                        break;
                    case 'xem_tat_ca':
                        require_once('modules/quanliloaisanpham/view.php');
                        break;
                    case 'sua':
                        require_once('modules/quanliloaisanpham/update.php');
                        break;
                    case 'xoa_loai':
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