<div class="content">

    <?php

    $manage = $_GET['manage'] ?? '';
    $action = $_GET['action'] ?? '';
    switch ($manage) {
        case '':
            include('contents/slideshow.php');
            include('contents/content_box.php');
            break;
        case 'gio_hang':
            switch ($action) {
                case 'xem_gio_hang':
                    # code...
                    require_once('shopping_cart/view_cart.php');
                    break;
                case 'dat_hang':
                    # code...
                    require_once('shopping_cart/pay_cart.php');
                    break;
                default:
                    # code...
                    break;
            }
            # code...
            break;
        case 'xem_san_pham':
            switch ($action) {
                case 'theo_hieu':
                    # code...
                    require_once('sanpham/view.php');
                    break;
                case 'tim_kiem':
                    require_once('sanpham/view.php');
                    break;
                case 'xem_tat_ca':
                    require_once('sanpham/view.php');
                    break;
                default:
                    # code...
                    break;
            }
            break;
        case 'khach_hang':
            switch ($action) {
                case 'cap_nhat':
                    # code...
                    require_once('customer/update.php');
                    break;
                case 'dang_ki':
                    # code...
                    require_once('customer/dang_ki.php');
                    break;
                case 'dang_nhap':
                    # code...
                    require_once('customer/dang_nhap.php');
                    break;
                case 'xem_lich_su_mua_hang':
                    require_once('customer/order_history.php');
                    break;
                case 'xem_thong_tin':
                    require_once('customer/view_profile.php');
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