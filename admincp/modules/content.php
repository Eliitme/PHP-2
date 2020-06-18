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
            case 'san_pham':
                switch ($thao_tac) {
                    case 'them_san_pham':
                        require_once('modules/quanlisanpham/insert.php');
                        break;
                    case 'xem_tat_ca':
                        require_once('modules/quanlisanpham/view.php');
                        break;
                    case 'sua':
                        require_once('modules/quanlisanpham/update.php');
                        break;
                    case 'xoa_san_pham':
                        require_once('modules/quanlisanpham/delete.php');
                        break;
                    case 'them_chi_tiet':
                        require_once('modules/quanlisanpham/chitietsanpham/insert.php');
                        break;

                    default:
                        # code...
                        require_once('modules/quanlisanpham/view.php');
                        break;
                }
                break;
            case 'tin_tuc':
                # code...
                switch ($thao_tac) {
                    case 'them_tin_tuc':
                        # code...
                        require_once('modules/quanlitintuc/insert.php');
                        break;
                    case 'xem_tat_ca':
                        # code...
                        require_once('modules/quanlitintuc/view.php');
                        break;
                    case 'xem_chi_tiet':
                        require_once('modules/quanlitintuc/view_all.php');
                        break;
                    case 'sua':
                        # code...
                        require_once('modules/quanlitintuc/update.php');
                        break;
                    case 'xoa_tin_tuc':
                        # code...
                        require_once('modules/quanlitintuc/delete.php');
                        break;

                    default:
                        # code...
                        break;
                }
                break;
            case 'quan_tri':
                # code...
                switch ($thao_tac) {
                    case 'them_admin':
                        # code...
                        require_once('modules/quanliquantri/insert.php');
                        break;
                    case 'xem_tat_ca':
                        # code...
                        require_once('modules/quanliquantri/view.php');
                        break;
                    case 'xoa_admin':
                        # code...
                        require_once('modules/quanliquantri/delete.php');
                        break;
                        case 'sua':
                            # code...
                            require_once('modules/quanliquantri/update.php');
                            break;
                    default:
                        # code...
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