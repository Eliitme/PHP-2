<div id="sidebar">
    <div class="top-sidebar">
        <h4>DANH MỤC</h4>
        <ul>
            <li><a href="">Laptop Mới</a></li>
            <li><a href="">Laptop Cũ</a></li>
            <li><a href="">Linh Kiện Laptop</a></li>
            <li><a href="">Dịch Vụ Chăm Sóc Laptop</a></li>
            <li><a href="">Hướng Dẫn Mua Hàng</a></li>
        </ul>
    </div>
    <div class="mid-sidebar">
        <h4>HỖ TRỢ KỸ THUẬT</h4>
        <ul>
            <li>
                <table style="border-spacing: 2px;">
                    <tr>
                        <td rowspan="4"><img src="/PHP 2/images/hotline.png" alt="" width="50px"></td>
                    </tr>
                    <tr>
                        <th>Lê Văn Long</th>    
                    </tr>
                    <tr>
                        <td style="font-size: 12px;">0979.547.542</td>  
                    </tr>
                    <tr>
                        <td><a href=""><i class="fab fa-facebook"></i> Facebook</a></td>
                        <td><a href=""><i class="fab fa-skype"></i> Skype</a></td>  
                    </tr>
                </table>
            </li>
            <li>
            <table style="border-spacing: 2px;">
                    <tr>
                        <td rowspan="4"><img src="/PHP 2/images/hotline.png" alt="" width="50px"></td>
                    </tr>
                    <tr>
                        <th>Lê Văn Long</th>    
                    </tr>
                    <tr>
                        <td style="font-size: 12px;">0979.547.542</td>  
                    </tr>
                    <tr>
                        <td><a href=""><i class="fab fa-facebook"></i> Facebook</a></td>
                        <td><a href=""><i class="fab fa-skype"></i> Skype</a></td>  
                    </tr>
                </table>
            </li>
            <li>
            <table style="border-spacing: 2px;">
                    <tr>
                        <td rowspan="4"><img src="/PHP 2/images/hotline.png" alt="" width="50px"></td>
                    </tr>
                    <tr>
                        <th>Lê Văn Long</th>    
                    </tr>
                    <tr>
                        <td style="font-size: 12px;">0979.547.542</td>  
                    </tr>
                    <tr>
                        <td><a href=""><i class="fab fa-facebook"></i> Facebook</a></td>
                        <td><a href=""><i class="fab fa-skype"></i> Skype</a></td>  
                    </tr>
                </table>
            </li>
        </ul>
    </div>
    <div class="bottom-sidebar">
        <h4>SẢN PHẨM</h4>
        <ul>
            <?php
                $sql = "select quanlihieusanpham.id_hieu, ten_hieu, COUNT(id_san_pham) as tong_san_pham from quanlihieusanpham join quanlisanpham on quanlisanpham.id_hieu = quanlihieusanpham.id_hieu where quanlisanpham.tinh_trang = 1 GROUP by quanlihieusanpham.id_hieu";
                $rs = mysqli_query($conn, $sql);

                while($each = mysqli_fetch_array($rs)){
                    ?>
                    <li><a href="/PHP 2/index.php?manage=xem_san_pham&action=theo_hieu&hieu=<?php echo $each['id_hieu']?>"><?php echo $each['ten_hieu'] ?>(<?php echo $each['tong_san_pham'] ?>)</a></li>
                    <?php
                }
            ?>
        </ul>
    </div>
</div>