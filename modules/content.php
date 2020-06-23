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
                
                default:
                    # code...
                    break;
            }

        default:
            # code...
            break;
    }

    ?>

</div>