-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2020 lúc 04:19 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trangwebbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `mat_khau` varchar(200) NOT NULL,
  `cap_do` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `ten_dang_nhap`, `mat_khau`, `cap_do`) VALUES
(1, 'admin', '123456', 1),
(2, 'hiiamlongdz', '123456', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id_chi_tiet` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `thong_so_ki_thuat` text NOT NULL,
  `khuyen_mai` text NOT NULL,
  `mo_ta_chi_tiet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`id_chi_tiet`, `id_san_pham`, `thong_so_ki_thuat`, `khuyen_mai`, `mo_ta_chi_tiet`) VALUES
(6, 8, '<ul>\r\n	<li><strong>Bộ vi xử l&yacute;:</strong>&nbsp;Intel&nbsp;Core i7 4600U&nbsp;</li>\r\n	<li><strong>Chipset:</strong>&nbsp;intel QM87</li>\r\n	<li><strong>Bộ nhớ trong:</strong>&nbsp;8GB DDR3L 1600MHz</li>\r\n	<li><strong>Ổ đĩa cứng:</strong>&nbsp;SSD 240 GB</li>\r\n	<li><strong>Cạc m&agrave;n hinh:</strong>&nbsp;Intel HD Graphics 4400</li>\r\n	<li><strong>M&agrave;n h&igrave;nh:</strong>&nbsp;14 inch HD+&nbsp;<strong>(FullHD + 300.000đ)</strong></li>\r\n	<li><strong>Ổ đĩa quang:</strong>&nbsp;kh&ocirc;ng c&oacute;</li>\r\n	<li><strong>Webcam:</strong>&nbsp;1.3 Megapixels</li>\r\n	<li><strong>Kết nối:</strong>&nbsp;Wifi chuẩn N, LAN gigabit, USB 2.0 v&agrave; 3.0, VGA, Display Port</li>\r\n	<li><strong>PIN:</strong>&nbsp;tr&ecirc;n 3&nbsp;tiếng.</li>\r\n	<li>Trọng lượng: 1.56 kg</li>\r\n	<li>LED ph&iacute;m:&nbsp;<strong>+ 100.000đ</strong></li>\r\n</ul>\r\n', '<ul>\r\n	<li><a href=\"https://laptop88.vn/chuot-khong-day-s88-office-wireless/p4209.html\">Tặng Tặng chuột kh&ocirc;ng d&acirc;y S88 Office V1 / V2</a></li>\r\n	<li><a href=\"https://laptop88.vn/balo-laptop-chong-soc-bl88/p2491.html\">Tặng Balo laptop chống sốc BL88</a>&nbsp;hoặc T&uacute;i x&aacute;ch&nbsp;</li>\r\n	<li>Qu&agrave; tặng: Voucher giảm gi&aacute; (Thẻ qu&agrave; tặng), RAM, Ổ cứng, Chuột S88 Gaming kh&ocirc;ng &aacute;p dụng khi thanh to&aacute;n qua VISA/MASTER&nbsp;</li>\r\n</ul>\r\n', '<p>Th&acirc;n m&aacute;y của ThinkPad T440s giống hệt với mẫu ThinkPad T430s ra mắt v&agrave;o đầu năm 2013, v&agrave; cũng c&oacute; chung một ng&ocirc;n ngữ thiết kế với c&aacute;c mẫu ThinkPad kh&aacute;c. Lưng m&aacute;y c&oacute; m&agrave;u đen mịn với nắp đậy l&agrave;m bằng sợi carbon, th&acirc;n dưới của m&aacute;y c&oacute; khung ma-gi&ecirc;. Giống như T430s, ThinkPad T440s c&oacute; nắp đậy m&agrave;u đen thay v&igrave; nắp đậy mềm cao cấp như ThinkPad T430s v&agrave; T420s. Chữ &quot;I&quot; m&agrave;u đỏ tr&ecirc;n logo ThinkPad tr&ecirc;n lưng m&aacute;y sẽ nhấp nh&aacute;y khi ThinkPad T440s đang trong trạng th&aacute;i chờ (sleep)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>Video review laptop Lenovo Thinkpad T440s</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Bộ ảnh thật laptop cũ Lenovo Thinkpad T440s</h2>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/product/2393_lenovo_thinkpad_t440s_1.JPG\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/product/2393_lenovo_thinkpad_t440s_2.JPG\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/product/2393_lenovo_thinkpad_t440s_3.JPG\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/product/2393_lenovo_thinkpad_t440s_4.JPG\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/product/2393_lenovo_thinkpad_t440s_5.JPG\" /></p>\r\n'),
(7, 9, '<p>&aacute;dadasdasdasdadsa</p>\r\n', '', ''),
(8, 11, '<p>adasdasd</p>\r\n', '<p>&aacute;dasdasd</p>\r\n', '<p>&aacute;dada</p>\r\n'),
(10, 13, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>CPU</td>\r\n			<td>Intel&reg; Core&trade; i5-9300H, 2.40GHz upto 4.10GHz, 8MB cache</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM</td>\r\n			<td>8GB DDR4-2666MHz, 2 slot Ram, Max 32GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ổ cứng</td>\r\n			<td>128GB SSD M.2 PCIe + 1TB HDD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Card VGA</td>\r\n			<td>NVIDIA Geforce GTX 1650 4GB GDDR5</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;n h&igrave;nh</td>\r\n			<td>15.6 inch FHD IPS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&iacute;ch hợp</td>\r\n			<td>3x USB 3.1, 1x USB 3.1 Type-C, Mini DisplayPort, HDMI, RJ-45</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Trọng lượng</td>\r\n			<td>2.3 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pin</td>\r\n			<td>3-Cells 52.5-WHr</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh</td>\r\n			<td>Windows 10 Home</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li>Tặng Balo Gaming Lenovo Recon</li>\r\n	<li>Miễn ph&iacute; d&aacute;n skin mặt lưng Laptop</li>\r\n	<li>D&aacute;n vỏ Laptop, điện thoại theo h&igrave;nh ảnh kh&aacute;ch h&agrave;ng t&ugrave;y chọn</li>\r\n	<li><a href=\"https://laptop88.vn/chuot-gaming-s88-super-co-den-led/p4194.html\">Tặng Chuột Gaming S88 Super - C&oacute; Đ&egrave;n LED</a></li>\r\n	<li><a href=\"https://laptop88.vn/balo-laptop-chong-soc-bl88/p2491.html\">Tặng Balo laptop chống sốc BL88</a></li>\r\n	<li><a href=\"https://laptop88.vn/ban-di-chuot-gaming-kho-lon-size-xxl-80x30cm/p5179.html\">Tặng TẶNG B&Agrave;N DI CHUỘT GAMING KHỔ LỚN 80 X 30 cm</a></li>\r\n</ul>\r\n', '<p>Laptop Gaming vốn dĩ đ&atilde; nổi tiếng với c&aacute;c h&atilde;ng như MSI, Dell hay Asus Gaming nhưng <strong>Lenovo</strong> cũng l&agrave; một đối thủ đ&aacute;ng gờm tr&ecirc;n th&igrave; trường Laptop Gaming hiện nay. <strong>Legion Y540-15IRH 81SY004WVN</strong> một trong những sản phẩm nằm trong ph&acirc;n kh&uacute;c gi&aacute; tầm trung của Lenovo&nbsp; mang lại cho game thủ một trải nghiệm đặc biệt từ h&igrave;nh thức đến hiệu năng đến bất ngờ m&agrave; n&oacute; mang lại.&nbsp;</p>\r\n\r\n<p><strong><strong><img alt=\"\" src=\"https://laptop88.vn/media/lib/5266_len1.jpg\" /></strong></strong><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Thiết kế gọn nhẹ, hiện đại</strong></p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p>S&agrave;nh điệu ở b&ecirc;n ngo&agrave;i, mạnh mẽ ở b&ecirc;n trong. Với k&iacute;ch thước 26 mm x 1,02mm v&agrave; 2,3 kg / 5,1 lbs, Legion Y540-15IRH (81SY0037VN) đ&atilde; được thiết kế lại để mang lại sự c&acirc;n bằng l&yacute; tưởng giữa hiệu suất cho chơi game v&agrave; t&iacute;nh di động thực tế.</p>\r\n\r\n<p><strong><strong><img alt=\"\" src=\"https://laptop88.vn/media/lib/5266_len2.png\" /></strong></strong><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Hiệu năng mạnh mẽ, ổn định&nbsp;</strong></p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p>Laptop&nbsp;<a href=\"https://phongvu.vn/laptop-macbook-va-phu-kien/laptop-va-linh-kien-macbook/laptop-lenovo.cat?utm_source=SEO\"><strong>Lenovo</strong></a><strong> Legion Y540-15IRH (81SY0037VN)</strong> sở hữu bộ vi xử l&yacute; Intel Core i5 9300H đa nh&acirc;n mới nhất&nbsp; để hỗ trợ trải nghiệm chơi game tốt nhất, k&egrave;m theo RAM 8GB DDR4 cho khả năng xử l&yacute; c&aacute;c t&aacute;c vụ đa nhiệm mượt m&agrave;, nhẹ nh&agrave;ng. Ổ cứng SSD 128GB NVMe + HDD 1TB gi&uacute;p lưu trữ dữ liệu thoải m&aacute;i cũng như t&aacute;c vụ khởi động m&aacute;y nhanh ch&oacute;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong><img alt=\"\" src=\"https://laptop88.vn/media/lib/5266_len3.jpg\" /></strong></strong><br />\r\n&nbsp;</p>\r\n\r\n<p>Sử dụng&nbsp; Card rời GTX 1650 4GB hỗ trợ tăng tốc độ cho c&aacute;c game phổ biến nhất LOL, FO4, CS.GO ở mức FPS&nbsp; 70 maxsetting, một số game đ&ograve;i hỏi hơn về cấu h&igrave;nh như PUBG, GTA5 hay War Tank th&igrave; đều chơi được ổn định ở mức cấu h&igrave;nh trung b&igrave;nh m&agrave; kh&ocirc;ng phải lo về vấn đề giật lag hay lỗi h&igrave;nh ảnh khi chơi.</p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p><strong>M&agrave;n h&igrave;nh chơi game chuy&ecirc;n nghiệp&nbsp;</strong></p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p>Với thiết kế viền mỏng theo ng&ocirc;n ngữ thiết kế hiện nay, <strong>Laptop Lenovo Legion Y540</strong> c&oacute; hơn 2 triệu pixel ở độ ph&acirc;n giải Full HD tr&ecirc;n m&agrave;n h&igrave;nh k&iacute;ch thước 15.6 inch IPS gần như tr&agrave;n viền. Khiến cho c&aacute;c tr&ograve; chơi y&ecirc;u th&iacute;ch của bạn trở n&ecirc;n sống động với m&agrave;n h&igrave;nh chất lượng cao, tần số qu&eacute;t l&ecirc;n đến 144Hz (t&ugrave;y chọn phi&ecirc;n bản) v&agrave; độ s&aacute;ng 300 nits cho tr&ograve; chơi nhập vai ngoạn mục khi đang di chuyển.</p>\r\n\r\n<p><br />\r\n<strong><strong><img alt=\"\" src=\"https://laptop88.vn/media/lib/5266_len4.png\" /></strong></strong><br />\r\n&nbsp;</p>\r\n\r\n<h2><strong>Hệ thống tản nhiệt hiệu quả</strong></h2>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p>Nhiệt độ c&oacute; thể xem l&agrave; yếu tố quan trọng nhất m&agrave; game thủ quan t&acirc;m&nbsp; nhưng với Laptop Lenovo Legion Y540 th&igrave; n&oacute; kh&ocirc;ng c&ograve;n l&agrave; vấn đề đ&aacute;ng lo ngại nữa, khi m&aacute;y được trang bị c&ocirc;ng nghệ Legion Coldfront. Coldfront mang đến c&aacute;c t&iacute;nh năng mới nhất m&agrave; hệ thống tản nhiệt hai k&ecirc;nh c&oacute; thể cung cấp, bao gồm l&agrave;m m&aacute;t CPU v&agrave; GPU ri&ecirc;ng cho nhiệt độ hệ thống kh&ocirc;ng bị qu&aacute; tải, bốn lỗ th&ocirc;ng hơi để cải thiện luồng kh&iacute;, đồng bộ nhiệt chuy&ecirc;n dụng cho nhiệt độ b&agrave;n ph&iacute;m m&aacute;t hơn v&agrave; 70 c&aacute;nh quạt ri&ecirc;ng lẻ tr&ecirc;n mỗi k&ecirc;nh gi&uacute;p giảm tiếng ồn hệ thống.</p>\r\n\r\n<p><br />\r\n<strong><strong><img alt=\"\" src=\"https://laptop88.vn/media/lib/5266_len5.jpg\" /></strong></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>B&agrave;n ph&iacute;m&nbsp;</strong></p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p>B&agrave;n ph&iacute;m fullsize với đ&egrave;n nền m&agrave;u trắng, b&agrave;n ph&iacute;m Legion Y540-15IRH (81SY0037VN) cung cấp khả năng chống b&oacute;ng ma 100%, thời gian phản hồi dưới 1 ms v&agrave; cạnh ph&iacute;m 4 mm để bạn kh&ocirc;ng bao giờ bỏ lỡ những trận game gay cấn. Hơn nữa, <strong>Legion Y540 - 15IRH (81SY0037VN)</strong> c&oacute; c&aacute;c tr&igrave;nh điều khiển Windows Precision để điều khiển cử chỉ với đầu v&agrave;o dễ d&agrave;ng &ndash; mang lại cho bạn lợi thế hơn bất kỳ đối thủ n&agrave;o.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong><img alt=\"\" src=\"https://laptop88.vn/media/lib/5266_len6.jpg\" /></strong></strong><br />\r\n&nbsp;</p>\r\n\r\n<p>Với tổng thể về cấu h&igrave;nh cũng như thiết kế rất đẹp v&agrave; ổn định th&igrave; chiếc laptop gaming<strong> Lenovo Legion Y540-15IRH 81SY004WVN </strong>xứng đ&aacute;ng l&agrave; một trong những chiếc laptop gaming đ&aacute;ng gờm tr&ecirc;n th&igrave; trường laptop gaming hiện nay.&nbsp;</p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p><strong>Lenovo Legion Y540-15IRH 81SY004WVN </strong>đang được b&aacute;n ở Laptop88 với gi&aacute; <strong>19.990.000đ&nbsp;</strong></p>\r\n'),
(11, 14, '<table style=\"width:691px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>CPU</td>\r\n			<td>Core i5 9300HF 4 nh&acirc;n 8 luồng 2.4Ghz Up to 4.1Ghz-8Mb</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Card&nbsp;đồ họa</td>\r\n			<td>NVIDIA GTX1050 3GB DDR5</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ</td>\r\n			<td>1* 8Gb bus 2666</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ổ cứng/ Ổ đĩa quang</td>\r\n			<td>SSD NVMe 256GB/ Kh&ocirc;ng có</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;n h&igrave;nh</td>\r\n			<td>15.6Inch Full HD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kết nối</td>\r\n			<td>LAN, Wifi, Bluetooth</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng giao tiếp</td>\r\n			<td>2 x USB 3.0 1 x USB 2.0 1 x HDMI Card Reader</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Webcam</td>\r\n			<td>C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&acirc;̣n dạng v&acirc;n tay</td>\r\n			<td>Kh&ocirc;ng c&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tính năng khác</td>\r\n			<td>M&agrave;n hình Full HD Mỏng, nhẹ, Bảo hành tại NSD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh</td>\r\n			<td>Win10</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pin</td>\r\n			<td>3 cell</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kích thước</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Trọng lượng</td>\r\n			<td>2 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Màu sắc/ Ch&acirc;́t li&ecirc;̣u</td>\r\n			<td>Black</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li>Tặng Balo Gaming Lenovo Recon</li>\r\n	<li>Miễn ph&iacute; d&aacute;n skin mặt lưng Laptop</li>\r\n	<li>D&aacute;n vỏ Laptop, điện thoại theo h&igrave;nh ảnh kh&aacute;ch h&agrave;ng t&ugrave;y chọn</li>\r\n	<li><a href=\"https://laptop88.vn/chuot-gaming-s88-super-co-den-led/p4194.html\">Tặng Chuột Gaming S88 Super - C&oacute; Đ&egrave;n LED</a></li>\r\n	<li><a href=\"https://laptop88.vn/balo-laptop-chong-soc-bl88/p2491.html\">Tặng Balo laptop chống sốc BL88</a></li>\r\n	<li><a href=\"https://laptop88.vn/ban-di-chuot-gaming-kho-lon-size-xxl-80x30cm/p5179.html\">Tặng TẶNG B&Agrave;N DI CHUỘT GAMING KHỔ LỚN 80 X 30 cm</a></li>\r\n</ul>\r\n', '<p>Laptop gaming&nbsp;<strong>TẢN SI&Ecirc;U M&Aacute;T</strong>&nbsp; -&nbsp;<strong>Card GTX 1050</strong>&nbsp;cực khỏe chiến mượt mọi game PUBG, Call of Duty: Warzone,... max setting.&nbsp; Chỉ 20 triệu -&nbsp;<strong>Tặng SSD 256GB NVME</strong>&nbsp;-&nbsp;<a href=\"https://laptop88.vn/moi-100-full-box-laptop-gaming-hp-pavilion-gaming-15-dk0231tx-intel-core-i5/p4838.html\" target=\"_blank\">Laptop Gaming HP Pavilion 15-DK0231TX</a>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/lib/4516_89.LandingpageL340_Modul11.jpg\" /><img alt=\"\" src=\"https://laptop88.vn/media/lib/4516_89.LandingpageL340_Modul21.jpg\" /><img alt=\"\" src=\"https://laptop88.vn/media/lib/4516_89.LandingpageL340_Modul51.jpg\" /><img alt=\"\" src=\"https://laptop88.vn/media/lib/4516_89.LandingpageL340_Modul41.jpg\" /><img alt=\"\" src=\"https://laptop88.vn/media/lib/4516_89.LandingpageL340_Modul51.jpg\" /><img alt=\"\" src=\"https://laptop88.vn/media/lib/4516_89.LandingpageL340_Modul61.jpg\" /><img alt=\"\" src=\"https://laptop88.vn/media/lib/4516_89.LandingpageL340_Modul71.jpg\" /><img alt=\"\" src=\"https://laptop88.vn/media/lib/4516_89.LandingpageL340_Modul81.jpg\" /></p>\r\n\r\n<p><em>Lenovo Ideapad L340-15IRH 81LK01GKVN l&agrave; phi&ecirc;n bản thay thế của L340-15IRH&nbsp;81LK00XLVN i5 hiện đ&atilde; dừng kinh doanh tr&ecirc;n thị trường&nbsp;</em></p>\r\n'),
(12, 15, '<ul>\r\n	<li><strong>CPU:&nbsp;</strong>Core i5 6200U</li>\r\n	<li><strong>RAM:&nbsp;</strong>8GB&nbsp;</li>\r\n	<li><strong>SSD:&nbsp;</strong>256GB</li>\r\n	<li><strong>Cổng kết nối:</strong>2xUSB 3.0; SD card reader (SD, SDHC, SDXC); headset jack; 1xThunderbolt&trade;</li>\r\n	<li><strong>PIN:</strong>&nbsp;60Whe</li>\r\n	<li><strong>K&iacute;ch thước:</strong>&nbsp;304 x&nbsp;200 x 15 mm&nbsp;</li>\r\n	<li><strong>Trọng lượng:</strong>&nbsp;1.2kg</li>\r\n	<li><strong>M&agrave;n h&igrave;nh:</strong>&nbsp;13.3 Inch Full HD / 3K</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Miễn ph&iacute; d&aacute;n skin mặt lưng Laptop</li>\r\n	<li>D&aacute;n vỏ Laptop, điện thoại theo h&igrave;nh ảnh kh&aacute;ch h&agrave;ng t&ugrave;y chọn</li>\r\n	<li><a href=\"https://laptop88.vn/chuot-gaming-s88-super-co-den-led/p4194.html\">Tặng Chuột Gaming S88 Super - C&oacute; Đ&egrave;n LED</a></li>\r\n	<li><a href=\"https://laptop88.vn/balo-laptop-chong-soc-bl88/p2491.html\">Tặng Balo laptop chống sốc BL88</a></li>\r\n	<li><a href=\"https://laptop88.vn/ban-di-chuot-gaming-kho-lon-size-xxl-80x30cm/p5179.html\">Tặng TẶNG B&Agrave;N DI CHUỘT GAMING KHỔ LỚN 80 X 30 cm</a></li>\r\n</ul>\r\n', '<p><strong>Dell XPS 9350 - Laptop Ultrabook với viền SI&Ecirc;U MỎNG</strong></p>\r\n\r\n<p>XPS lu&ocirc;n l&agrave; d&ograve;ng laptop được rất nhiều người d&ugrave;ng y&ecirc;u th&iacute;ch bởi thiết kế mỏng nhẹ thời trang, đặc biệt l&agrave; viền InfinityEdge cho kh&ocirc;ng gian trải nghiệm h&igrave;nh ảnh v&ocirc; tận cũng như TouchPad thuộc h&agrave;ng đầu trong c&aacute;c d&ograve;ng laptop. XPS 9350 cũng kh&ocirc;ng ngoại lệ.</p>\r\n\r\n<p><img alt=\"Dell XPS 9350\" src=\"https://laptop88.vn/media/lib/4063_4063_dell_xps_9350_2.png\" style=\"height:1080px; width:1080px\" /></p>\r\n\r\n<p><strong>Thiết kế</strong></p>\r\n\r\n<p>Cảm nhận đầu ti&ecirc;n của m&igrave;nh khi cầm tr&ecirc;n tay chiếc m&aacute;y lần đầu ti&ecirc;n l&agrave; m&aacute;y rất nhẹ v&agrave; đẹp. Dễ d&agrave;ng cầm bằng một tay m&agrave; kh&ocirc;ng gặp bất cứ kh&oacute; khăn n&agrave;o, dễ như cầm một cuốn s&aacute;ch vậy. Mọi đường n&eacute;t đều được Dell l&agrave;m v&ocirc; c&ugrave;ng tinh xảo, gọn g&agrave;ng v&agrave; cao cấp. M&aacute;y rất gọn, sexy, sử dụng hai chất liệu ch&iacute;nh rất cao cấp l&agrave; nh&ocirc;m v&agrave; sợi carbon cho cảm gi&aacute;c sử dụng rất đ&atilde;, nhẹ nh&agrave;ng m&agrave; cứng c&aacute;p, chắc tay. C&aacute;c chi tiết cũng được l&agrave;m với độ tinh xảo v&agrave; ho&agrave;n thiện rất cao.</p>\r\n\r\n<p><img alt=\"Dell XPS 9350\" src=\"https://laptop88.vn/media/lib/4063_4063_dell_xps_9350_5.png\" style=\"height:1080px; width:1080px\" />C&oacute; thể m&aacute;y kh&ocirc;ng được mỏng lắm nếu so s&aacute;nh với c&aacute;c m&aacute;y như MacBook 12&rdquo; hay MacBook Air nhưng đ&acirc;y kh&ocirc;ng hẳn l&agrave; yếu điểm của m&aacute;y. Thiết kế d&agrave;y một ch&uacute;t cho người d&ugrave;ng cảm gi&aacute;c chắc chắn, mạnh mẽ, tự tin hơn, kh&ocirc;ng tạo cảm gi&aacute;c mong manh hay yếu đuối. Đặc biệt, phần viền m&agrave;n h&igrave;nh Infinity Edge được l&agrave;m si&ecirc;u mỏng khiến cho m&aacute;y chỉ c&oacute; k&iacute;ch thước tương đương một chiếc m&aacute;y 10&rdquo;-11&rdquo; m&agrave; th&ocirc;i.</p>\r\n\r\n<p>Nh&igrave;n chung, m&aacute;y đẹp, gọn nhẹ, chắc chắn v&agrave; rất xịn, nhưng kh&ocirc;ng yểu điệu thục nữ m&agrave; rất mạnh mẽ, nam t&iacute;nh, rất ph&ugrave; hợp cho c&aacute;c doanh nh&acirc;n th&agrave;nh đạt. C&oacute; lẽ kh&ocirc;ng hề sai khi n&oacute;i XPS 9350 l&agrave; một trong những chiếc m&aacute;y đẹp nhất trong thế giới laptop hiện nay</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>B&agrave;n ph&iacute;m, touchpad</strong></p>\r\n\r\n<p><strong><img alt=\"Dell XPS 9350\" src=\"https://laptop88.vn/media/lib/4063_image-1463068108-20160505_162935.jpg\" style=\"height:473px; width:630px\" /></strong></p>\r\n\r\n<p>Dell trang bị cho m&aacute;y b&agrave;n ph&iacute;m chicklet, c&oacute; đ&egrave;n LED-backlight để sử dụng buổi đ&ecirc;m. Ri&ecirc;ng c&aacute;c m&aacute;y d&ograve;ng XPS th&igrave; Dell lu&ocirc;n l&agrave;m b&agrave;n ph&iacute;m rất tốt h&agrave;nh tr&igrave;nh ph&iacute;m vừa đủ, rất nhẹ nh&agrave;ng, nhạy v&agrave; nảy, c&aacute;c ph&iacute;m l&agrave;m hợp l&yacute; v&agrave; kh&ocirc;ng bị lạc tay, c&oacute; thể g&otilde; trong thời gian d&agrave;i m&agrave; kh&ocirc;ng hề mỏi. Tiếp đến l&agrave; Touchpad, kh&ocirc;ng qu&aacute; rộng nhưng rất dễ d&ugrave;ng, c&aacute;c thao t&aacute;c đa điểm tốt, c&aacute;c n&uacute;t chuột tr&aacute;i phải cũng dễ bấm kh&ocirc;ng gặp kh&oacute; khăn g&igrave;, cảm gi&aacute;c sử dụng rất tuyệt, đầm tay, mọi thứ đều rất ho&agrave;n hảo.</p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p><strong>Cổng kết nối</strong></p>\r\n\r\n<p>C&aacute;c cổng kết nối được bố tr&iacute; tại 2 cạnh b&ecirc;n v&agrave; nằm gọn tại khu vực d&agrave;y nhất của m&aacute;y. Cạnh tr&aacute;i c&oacute; cổng sạc tr&ograve;n ch&acirc;n kim, USB-C 3.1, USB 3.0, jack tai nghe 3,5 mm 2 trong 1 v&agrave; một n&uacute;t bấm kiểm tra pin với 5 đ&egrave;n th&ocirc;ng b&aacute;o nhỏ v&agrave; loa tr&aacute;i. Cạnh phải c&oacute; th&ecirc;m kh&oacute;a Kensington, USB 3.0 v&agrave; đầu đọc thẻ nhớ SD v&agrave; loa phải. Như vậy về số lượng cổng kết nối th&igrave; XPS 13-9350 tương đương XPS 13-9343, n&acirc;ng cấp đ&aacute;ng ch&uacute; &yacute; ở đ&acirc;y l&agrave; cổng USB-C 3.1 tốc độ cao v&agrave; hỗ trợ Thunderbolt 3.</p>\r\n\r\n<p><img alt=\"Dell XPS 9350\" src=\"https://laptop88.vn/media/lib/4063_4063_dell_xps_9350_4.png\" style=\"height:1080px; width:1080px\" />Đ&aacute;ng tiếc Dell lại thay thế cổng mini DisplayPort bằng USB-C 3.1, do đ&oacute; hơi bất tiện cho bạn n&agrave;o muốn xuất m&aacute;y ra một m&agrave;n h&igrave;nh lớn hơn. C&oacute; thể sử dụng dock chuyển từ USB-C tuy nhi&ecirc;n dock n&agrave;y đang được Dell b&aacute;n với gi&aacute; kh&aacute; ch&aacute;t khoảng gần 3 triệu đồng.</p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p><strong>M&agrave;n h&igrave;nh </strong></p>\r\n\r\n<p><img alt=\"Dell XPS 9350\" src=\"https://laptop88.vn/media/lib/4063_dell-xps13-9350-prolap.jpg\" style=\"height:768px; width:1366px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trước ti&ecirc;n về m&agrave;n h&igrave;nh, m&aacute;y sử dụng tấm nền IPS chống ch&oacute;i với độ ph&acirc;n giải 3K do Sharp sản xuất, cho khả năng hiển thị v&ocirc; c&ugrave;ng tốt kể cả dưới &aacute;nh nắng. M&agrave;n h&igrave;nh n&agrave;y cũng cho một g&oacute;c nh&igrave;n rộng, kh&ocirc;ng bị thay đổi m&agrave;u khi thay đổi g&oacute;c nh&igrave;n. M&agrave;u sắc của m&agrave;n h&igrave;nh rất trung thực v&agrave; s&aacute;ng, r&otilde; r&agrave;ng. Độ ph&acirc;n giải 3K tạo cho m&aacute;y một kh&ocirc;ng gian l&agrave;m việc rộng lớn với một m&agrave;n h&igrave;nh 13.3&rdquo;. Đ&acirc;y l&agrave; một trong những laptop c&oacute; thể n&oacute;i l&agrave; c&oacute; m&agrave;n h&igrave;nh ấn tượng kể cả khi so s&aacute;nh với m&agrave;n h&igrave;nh Retina của Apple, m&agrave;n DreamColor của HP..vv th&igrave; XPS 9350 &nbsp;vẫn c&oacute; một m&agrave;n h&igrave;nh vượt trội.</p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p><strong>Hiệu năng</strong></p>\r\n\r\n<p>Dell XPS 13 9350 sử dụng chip Intel Core i5 Skylake thế hệ thứ 6, cho khả năng xử l&yacute; t&aacute;c vụ cực cao từ c&aacute;c t&aacute;c vụ văn ph&ograve;ng đến những tựa game giải tr&iacute; hot nhất hiện nay hay những phần mềm thiết kế, l&agrave;m đồ họa. Hơn nữa m&aacute;y c&ograve;n tiết kiệm điện năng rất hiệu quả. RAM dung lượng 8GB gi&uacute;p m&aacute;y chạy c&ugrave;ng l&uacute;c nhiều chương tr&igrave;nh m&agrave; vẫn đảm bảo sự mượt m&agrave;, trơn tru.</p>\r\n\r\n<p><img alt=\"Dell XPS 9350\" src=\"https://laptop88.vn/media/lib/4063_dell-xps-13-9343-8470.jpg\" style=\"height:1080px; width:1914px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với c&aacute;c thiết bị laptop cao cấp, th&igrave; việc trang bị ổ đĩa cứng SSD l&agrave; rất cần thiết, m&aacute;y t&iacute;nh x&aacute;ch tay Dell XPS 13 9350 trang bị ổ SSD dung lượng 256GB c&oacute; tốc độ truy xuất dữ liệu cực cao, gi&uacute;p bạn khởi động m&aacute;y hay sao ch&eacute;p dữ liệu nhanh ch&oacute;ng. Ngo&agrave;i ra, ổ SSD c&oacute; độ bền cao v&agrave; khả năng chống sốc hiệu quả, gi&uacute;p bạn c&oacute; thể bảo vệ được dữ liệu của m&igrave;nh một c&aacute;ch an to&agrave;n.</p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p><strong>&Acirc;m thanh</strong></p>\r\n\r\n<p>M&aacute;y thiết kế với 2 loa c&ocirc;ng suất 1W được đặt ở hai cạnh b&ecirc;n của m&aacute;y cho chất lượng rất tốt. Điều đặc biệt l&agrave; Dell đ&atilde; tận dụng cặp loa n&agrave;y, ph&aacute;t ở ở cả hai cạnh lẫn ph&aacute;t nổi l&ecirc;n ph&iacute;a tr&ecirc;n từ b&agrave;n ph&iacute;m. Điều n&agrave;y l&agrave;m cho &acirc;m thanh của m&aacute;y giống như &acirc;m thanh v&ograve;m, đều tiếng hơn v&agrave; thật hơn. Dell đ&atilde; l&agrave;m loa của m&aacute;y rất th&ocirc;ng minh, tinh tế. B&ecirc;n cạnh đ&oacute;, loa kh&ocirc;ng bị r&egrave; ở &acirc;m lượng cao v&agrave; rất r&otilde; r&agrave;ng, c&aacute;c dải &acirc;m đều, chắc chắn, nghe rất &ecirc;m tai. Điểm 10 cho loa của một chiếc laptop.</p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p><strong><strong>&nbsp;</strong></strong></p>\r\n\r\n<p><strong>Kết luận</strong></p>\r\n\r\n<p>L&agrave; một laptop thuộc d&ograve;ng giải tr&iacute; cao cấp XPS của Dell, việc XPS 9350 được trang bị khả năng giải tr&iacute; tuyệt vời kh&ocirc;ng phải l&agrave; điều đ&aacute;ng ngạc nhi&ecirc;n. M&aacute;y c&oacute; một m&agrave;n h&igrave;nh rất đẹp, loa c&oacute; chất lượng &acirc;m thanh tuyệt vời, b&agrave;n ph&iacute;m cho cảm gi&aacute;c g&otilde; rất &ecirc;m v&agrave; đ&atilde; tay, cấu h&igrave;nh mạnh mẽ v&agrave; một thời lượng sử dụng tốt. XPS 9350 &nbsp;gần như hội tụ đủ c&aacute;c yếu tố của một chiếc laptop giải tr&iacute; đỉnh cao.</p>\r\n'),
(13, 16, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh</td>\r\n			<td>\r\n			<p>Win 10 bản quyền</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ vi xử l&yacute;</td>\r\n			<td>\r\n			<p>Intel Core i7-10510U 1.80 GHz up to 4.90 GHz, 8MB</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ Ram</td>\r\n			<td>\r\n			<p>8GB DDR4</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ổ đĩa cứng</td>\r\n			<td>\r\n			<p>512GB SSD</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;n h&igrave;nh</td>\r\n			<td>\r\n			<p>14.0&quot;FHD Touch</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đồ họa</td>\r\n			<td>\r\n			<p>Intel UHD Graphics 620</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khe cắm mở rộng</td>\r\n			<td>\r\n			<p>1 multi-format SD media card reader</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Wifi</td>\r\n			<td>\r\n			<p>802.11 a/b/g/n/ac</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Keyboard + Mouse</td>\r\n			<td>\r\n			<p>Keyboard Laptop + Touchpad</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng giao tiếp</td>\r\n			<td>\r\n			<p>2x USB 3.1, 1x USB 3.1 Type-C, 1x HDMI</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera</td>\r\n			<td>\r\n			<p>HP Wide Vision HD Camera with integrated dual array digital microphone</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pin (Battery)</td>\r\n			<td>\r\n			<p>3-cell</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&Acirc;m thanh</td>\r\n			<td>\r\n			<p>B&amp;O, dual speakers, HP Audio Boost</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phụ kiện k&egrave;m theo</td>\r\n			<td>\r\n			<p>Full box</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bluetooth</td>\r\n			<td>\r\n			<p>Bluetooth&reg; 4.2</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Other Supports</td>\r\n			<td>\r\n			<p>Fingerprint</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>\r\n			<p>32.4 x 22.29 x 1.97 cm (W x D x H)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng</td>\r\n			<td>\r\n			<p>1.58 kg</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li>Miễn ph&iacute; d&aacute;n skin mặt lưng Laptop</li>\r\n	<li>D&aacute;n vỏ Laptop, điện thoại theo h&igrave;nh ảnh kh&aacute;ch h&agrave;ng t&ugrave;y chọn</li>\r\n	<li><a href=\"https://laptop88.vn/chuot-gaming-s88-super-co-den-led/p4194.html\">Tặng Chuột Gaming S88 Super - C&oacute; Đ&egrave;n LED</a></li>\r\n	<li><a href=\"https://laptop88.vn/balo-laptop-chong-soc-bl88/p2491.html\">Tặng Balo laptop chống sốc BL88</a></li>\r\n	<li><a href=\"https://laptop88.vn/ban-di-chuot-gaming-kho-lon-size-xxl-80x30cm/p5179.html\">Tặng TẶNG B&Agrave;N DI CHUỘT GAMING KHỔ LỚN 80 X 30 cm</a></li>\r\n</ul>\r\n', '<h1>HP Pavilion x360 14-dh1139TU thiết kế tinh tế với m&agrave;n h&igrave;nh xoay lật 360 hiện đại, tiện dụng. Hiệu năng ổn định l&agrave;m việc, giải tr&iacute; mượt m&agrave;. Nếu l&agrave; người d&ugrave;ng m&agrave; t&igrave;m kiếm chiếc m&aacute;y văn ph&ograve;ng th&igrave; đừng bỏ qua HP Pavilion x360 14-dh1139TU&nbsp;</h1>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/product/5076_4712_hp_pavilion_x360_14_cd1020tu_4.jpg\" /></p>\r\n\r\n<p><strong>Thiết kế 2 trong 1 đặc biệt</strong></p>\r\n\r\n<h1>HP Pavilion x360 14-dh1139TU nổi bật với thiết kế 2 trong 1 si&ecirc;u đặc biệt mang lại trải nghiệm mới lạ cho người d&ugrave;ng. Với chất liệu được l&agrave;m từ nh&ocirc;m nguy&ecirc;n khối chắc chắn cộng th&ecirc;m với ưu điểm c&acirc;n nặng chỉ 1,58kg đ&acirc;y l&agrave; chiếc laptop mỏng nhẹ c&oacute; thể mang đi lại dễ d&agrave;ng, thuận tiện. M&agrave;u sắc bạc lấp l&aacute;nh ch&iacute;nh l&agrave; một điểm cộng để t&ocirc;n l&ecirc;n sự sang trọng cho chiếc laptop văn ph&ograve;ng của thương hiệu HP n&agrave;y</h1>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/product/5076_4712_hp_pavilion_x360_14_cd1020tu_5.jpg\" /></p>\r\n\r\n<p><strong>Hiệu năng ấn tượng</strong></p>\r\n\r\n<p>HP Pavilion x360 14-dh1139TU với chip core i7 thế hệ thứ 10, RAM 8GB v&agrave; ổ cứng SSD 512GB đảm bảo thiết bị c&oacute; thể chạy tốt c&aacute;c c&ocirc;ng cụ phục vụ học tập v&agrave; l&agrave;m việc văn ph&ograve;ng. Ngo&agrave;i ra với hiệu năng như n&agrave;y th&igrave; giải tr&iacute;, chơi game mượt m&agrave;. Chắc chắn với hiệu năng như n&agrave;y sẽ l&agrave;m người d&ugrave;ng kh&ocirc;ng thất vọng</p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/product/5076_4712_hp_pavilion_x360_14_cd1020tu_3.jpg\" /></p>\r\n\r\n<p><strong>M&agrave;n h&igrave;nh 14 inch Full HD sắc n&eacute;t</strong></p>\r\n\r\n<p>M&agrave;n h&igrave;nh 14 inch Full HD sắc n&eacute;t mang lại chất lượng h&igrave;nh ảnh sắc n&eacute;t cho cả c&ocirc;ng việc lẫn giải tr&iacute;. Viền m&agrave;n h&igrave;nh 3 cạnh si&ecirc;u mỏng tối ưu trải nghiệm người d&ugrave;ng mang lại cảm gi&aacute;c ch&acirc;n thực, sống động. Ngo&agrave;i ra c&ograve;n c&oacute; thể xoay lật 360 độ với chiếc laptop n&agrave;y gi&uacute;p cho việc sử dụng trở n&ecirc;n dễ d&agrave;ng hơn</p>\r\n\r\n<p><strong><strong><img alt=\"\" src=\"https://laptop88.vn/media/product/5076_4712_hp_pavilion_x360_14_cd1020tu_2.jpg\" /></strong></strong></p>\r\n\r\n<p><strong>&Acirc;m thanh</strong></p>\r\n\r\n<p>Với cụm loa k&eacute;p được tinh chỉnh bởi c&aacute;c chuy&ecirc;n gia đến từ Bang &amp; Olufsen kết hợp với c&ocirc;ng nghệ phần mềm HP Audio Boost mang tới trải nghiệm &acirc;m thanh tuyệt hảo, sống động. Thật tuyệt vời sau mỗi giờ l&agrave;m việc được giải tr&iacute;&nbsp; trải nghiệm &acirc;m thanh ch&acirc;n thực nhẹ nh&agrave;ng hay s&ocirc;i động b&ecirc;n chiếc laptop phải kh&ocirc;ng</p>\r\n\r\n<p><img alt=\"\" src=\"https://laptop88.vn/media/product/5076_4712_hp_pavilion_x360_14_cd1020tu_6.jpg\" /></p>\r\n\r\n<p><strong>Cổng đa kết nối</strong></p>\r\n\r\n<p>HP Pavilion x360 14-dh1139TU&nbsp; hỗ trợ người d&ugrave;ng ở mức tối đa khi tương t&aacute;c với c&aacute;c thiết bị ngoại vi kh&aacute;c l&agrave; việc thiết bị được t&iacute;ch hợp đầy đủ c&aacute;c phương thức kết nối như cổng USB 3.1, cổng USB Type-C, Bluetooth 4.2 v&agrave; chuẩn Wi-Fi 802.11 ac.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>T&oacute;m lại HP Pavilion x360 14-dh1139TU&nbsp; với hiệu năng chip core i7 đời 10 kết hợp với RAM 8GB, SSD 512GB để l&agrave;m việc văn ph&ograve;ng th&igrave; đ&acirc;y chắc chắn sẽ l&agrave; chiếc laptop kh&ocirc;ng l&agrave;m bạn thất vọng. Đừng bỏ lỡ chiếc laptop văn ph&ograve;ng đến từ thương hiệu HP n&agrave;y nh&eacute;!</em></p>\r\n'),
(14, 17, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh</td>\r\n			<td>\r\n			<p>Free Dos</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ vi xử l&yacute;</td>\r\n			<td>\r\n			<p>Intel Core i3-10110U 2.10 GHz, 4MB</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ Ram</td>\r\n			<td>\r\n			<p>4GB DDR4</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ổ đĩa cứng</td>\r\n			<td>\r\n			<p>256GB SSD</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;n h&igrave;nh</td>\r\n			<td>\r\n			<p>14&quot;HD</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đồ họa</td>\r\n			<td>\r\n			<p>Intel UHD Graphics 620</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khe cắm mở rộng</td>\r\n			<td>\r\n			<p>1 SD (Supports SD, SDHC, SDXC.)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Keyboard + Mouse</td>\r\n			<td>\r\n			<p>Keyboard Laptop + Touchpad</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lan</td>\r\n			<td>\r\n			<p>Realtek 10/100/1000 GbE NIC</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cổng giao tiếp</td>\r\n			<td>\r\n			<p>USB 3.1 Gen 1, USB 3.1 Type-C Gen 1,USB 2.0,HDMI 1.4b</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera</td>\r\n			<td>\r\n			<p>720p HD camera</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pin (Battery)</td>\r\n			<td>\r\n			<p>3-cell</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phụ kiện k&egrave;m theo</td>\r\n			<td>\r\n			<p>Full box</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Wifi</td>\r\n			<td>\r\n			<p>802.11</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Other Supports</td>\r\n			<td>\r\n			<p>Finger Print</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>\r\n			<p>32.42 x 23.77 x 1.80 cm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng</td>\r\n			<td>\r\n			<p>1.6 kg</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bảo h&agrave;nh</td>\r\n			<td>\r\n			<p>12 th&aacute;ng</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li><a href=\"https://laptop88.vn/chuot-khong-day-s88-office-wireless/p4209.html\">Tặng Tặng chuột kh&ocirc;ng d&acirc;y S88 Office V1 / V2</a></li>\r\n	<li><a href=\"https://laptop88.vn/balo-laptop-chong-soc-bl88/p2491.html\">Tặng Balo laptop chống sốc BL88</a>&nbsp;hoặc T&uacute;i x&aacute;ch&nbsp;</li>\r\n	<li>Qu&agrave; tặng: Voucher giảm gi&aacute; (Thẻ qu&agrave; tặng), RAM, Ổ cứng, Chuột S88 Gaming kh&ocirc;ng &aacute;p dụng khi thanh to&aacute;n qua VISA/MASTER&nbsp;</li>\r\n</ul>\r\n', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id_anh` int(11) NOT NULL,
  `ten_anh` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`id_anh`, `ten_anh`, `url`) VALUES
(5, '23062020-15929214910.jpg', 'upload/23062020-15929214910.jpg'),
(6, '23062020-15929214911.jpg', 'upload/23062020-15929214911.jpg'),
(7, '23062020-15929214912.jpg', 'upload/23062020-15929214912.jpg'),
(8, '23062020-15929214913.jpg', 'upload/23062020-15929214913.jpg'),
(17, '23062020-15929380150.jpg', 'upload/23062020-15929380150.jpg'),
(18, '23062020-15929380340.jpg', 'upload/23062020-15929380340.jpg'),
(19, '23062020-15929380370.jpg', 'upload/23062020-15929380370.jpg'),
(20, '23062020-15929380970.jpg', 'upload/23062020-15929380970.jpg'),
(21, '23062020-15929380971.jpg', 'upload/23062020-15929380971.jpg'),
(22, '23062020-15929380972.jpg', 'upload/23062020-15929380972.jpg'),
(23, '23062020-15929380973.jpg', 'upload/23062020-15929380973.jpg'),
(24, '23062020-15929380974.jpg', 'upload/23062020-15929380974.jpg'),
(25, '05072020-15939176930.jpg', 'upload/05072020-15939176930.jpg'),
(26, '05072020-15939176931.jpg', 'upload/05072020-15939176931.jpg'),
(27, '05072020-15939176932.jpg', 'upload/05072020-15939176932.jpg'),
(28, '05072020-15939176933.png', 'upload/05072020-15939176933.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoa_don` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `nguoi_nhan` varchar(200) NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `dia_chi` text NOT NULL,
  `ngay_dat_don` date NOT NULL DEFAULT current_timestamp(),
  `tinh_trang` int(1) NOT NULL DEFAULT 0,
  `ghi_chu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hoa_don`, `id_khach_hang`, `nguoi_nhan`, `so_dien_thoai`, `dia_chi`, `ngay_dat_don`, `tinh_trang`, `ghi_chu`) VALUES
(3, 1, 'Lê Văn Long', '1', '1', '2020-06-27', 1, ''),
(4, 1, 'Lê Văn Long', '1', '1', '2020-06-27', 1, 'aaaaa'),
(5, 1, 'Lê Văn Long', '1', '12222', '2020-06-27', 1, '27414225'),
(6, 1, 'Lê Văn Long2', '1', '1', '2020-06-27', 1, ''),
(7, 1, 'Lê Văn Long54525', '1', '1', '2020-06-27', 1, ''),
(8, 1, 'Lê Văn Long', '1', '1', '2020-06-27', 0, ''),
(9, 2, 'Long A', '01254855498', 'hà nội', '2020-06-29', 0, ''),
(10, 1, 'Lê Văn Long', '1', '1', '2020-06-29', 0, ''),
(11, 1, 'Lê Văn Long', '1', '1', '2020-06-29', 0, ''),
(12, 1, 'Lê Văn Long', '1', '1', '2020-06-29', 0, ''),
(13, 1, 'Lê Văn Long', '1', '1', '2020-06-30', 0, ''),
(14, 1, 'Lê Văn Long', '1', '1', '2020-06-30', 0, ''),
(15, 1, 'Lê Văn Long', '1', '1', '2020-06-30', 0, ''),
(16, 1, 'Lê Văn Long', '1', '1', '2020-06-30', 0, ''),
(17, 1, 'Lê Văn Long', '1', '1', '2020-06-30', 0, ''),
(18, 1, 'Lê Văn Long', '1', '1', '2020-06-30', 2, ''),
(19, 1, 'Lê Văn Long', '123123', '1', '2020-07-01', 1, ''),
(20, 1, 'Lê Văn Long', '123123', '', '2020-07-05', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_khach_hang` int(11) NOT NULL,
  `ho_va_ten` varchar(200) NOT NULL,
  `anh_dai_dien` varchar(200) DEFAULT 'upload/default_avatar.jpeg',
  `ten_dang_nhap` varchar(50) NOT NULL,
  `mat_khau` varchar(200) NOT NULL,
  `dia_chi` text DEFAULT NULL,
  `so_dien_thoai` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_khach_hang`, `ho_va_ten`, `anh_dai_dien`, `ten_dang_nhap`, `mat_khau`, `dia_chi`, `so_dien_thoai`, `email`) VALUES
(1, 'Lê Văn Long', 'upload/default_avatar.jpeg	', 'hiiamlongdz', '9afd9c4495497535dd8834375785ab5d', '1', '123123', 'Levanlong220700@gmail.com'),
(2, 'Long A', 'upload/default_avatar.jpeg	', 'hiiamlongdz1', '9afd9c4495497535dd8834375785ab5d', 'hà nội', '01254855498', 'j2team.hiiamlongdz@gmail.com'),
(4, 'Lê Văn Long', 'upload/default_avatar.jpeg	', 'hiiamlongdz12', '9afd9c4495497535dd8834375785ab5d', NULL, NULL, NULL),
(5, 'Lê Văn Long', 'upload/default_avatar.jpeg	', 'hiiamlongdz123', '9afd9c4495497535dd8834375785ab5d', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlihieusanpham`
--

CREATE TABLE `quanlihieusanpham` (
  `id_hieu` int(11) NOT NULL,
  `ten_hieu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlihieusanpham`
--

INSERT INTO `quanlihieusanpham` (`id_hieu`, `ten_hieu`) VALUES
(1, 'Asus'),
(2, 'HP'),
(3, 'Lenovo'),
(4, 'Dell');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanliloaisanpham`
--

CREATE TABLE `quanliloaisanpham` (
  `id_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL,
  `id_hieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanliloaisanpham`
--

INSERT INTO `quanliloaisanpham` (`id_loai`, `ten_loai`, `id_hieu`) VALUES
(1, 'Dell Vostro Series', 4),
(2, 'Asus F Series', 1),
(3, 'Lenovo ThinkPad Series', 3),
(4, 'HP Elite Series', 2),
(5, 'Asus Vivobook', 1),
(7, 'Asus Gaming', 1),
(8, 'Lenovo Legion', 3),
(9, 'Lenovo IdeaPad', 3),
(10, 'Dell XPS Series', 4),
(11, 'HP Pavilon', 2),
(12, 'HP Probook Series', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlisanpham`
--

CREATE TABLE `quanlisanpham` (
  `id_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(200) NOT NULL,
  `anh_san_pham` varchar(200) NOT NULL,
  `id_hieu` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `gia` float NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tinh_trang` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlisanpham`
--

INSERT INTO `quanlisanpham` (`id_san_pham`, `ten_san_pham`, `anh_san_pham`, `id_hieu`, `id_loai`, `gia`, `so_luong`, `tinh_trang`) VALUES
(8, 'Laptop Lenovo Thinkpad T440s - Intel Core i7', 'upload/26062020-1593203116.jpg', 3, 3, 11390000, 88, 1),
(9, 'Laptop ABC2', 'upload/26062020-1593207858.jpg', 2, 4, 11390000, 92, 1),
(10, 'Laptop ABC1', 'upload/26062020-1593208104.jpg', 4, 1, 11390000, 94, 1),
(11, 'Laptop ABC22', 'upload/27062020-1593233090.jpg', 2, 4, 12990000, 99, 1),
(12, 'Laptop Asus TUF A15 FA506II-AL012T - AMD Ryzen 5', 'upload/28062020-1593340008.jpg', 1, 2, 19990000, 99, 1),
(13, 'Lenovo Legion Y540-15IRH 81SY004WVN - Intel Core i5', 'upload/04072020-1593894251.png', 3, 8, 19790000, 99, 1),
(14, 'Lenovo Ideapad L340-15IRH 81LK01GKVN - Intel Core i5', 'upload/04072020-1593894500.png', 3, 9, 15990000, 99, 1),
(15, 'Dell XPS 9350 - Intel Core i5', 'upload/04072020-1593894716.png', 4, 10, 15900000, 99, 1),
(16, ' Laptop HP Pavilion x360 14-dh1139TU - Intel Core i7', 'upload/05072020-1593912439.jpg', 2, 11, 19690000, 99, 1),
(17, 'Laptop HP ProBook 440 G7 9GQ24PA - Intel Core i3', 'upload/05072020-1593912659.png', 2, 12, 12900000, 99, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlitintuc`
--

CREATE TABLE `quanlitintuc` (
  `id_bai_viet` int(11) NOT NULL,
  `tieu_de` text NOT NULL,
  `anh_bai_viet` varchar(200) NOT NULL,
  `tom_tat` text NOT NULL,
  `chi_tiet` text NOT NULL,
  `tinh_trang` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlitintuc`
--

INSERT INTO `quanlitintuc` (`id_bai_viet`, `tieu_de`, `anh_bai_viet`, `tom_tat`, `chi_tiet`, `tinh_trang`) VALUES
(1, 'Coocaa chính thức ra mắt dòng sản phẩm mới vào ngày 07/07 tại Shopee – chỉ 8,9 triệu đồng mua được tivi 4K 58 inch', 'upload/images/04072020-1593895313.jpg', 'Là thương hiệu thuộc Tập đoàn Skyworth Digital Holdings Co - một trong 8 nhà sản xuất Tivi lớn nhất thế giới, tất cả tivi Coocaa đều được sản xuất trực tiếp tại nhà máy ở Jakarta, Indonesia trên các dây chuyền được kiểm soát nghiêm ngặt, quản lý chặt chẽ từ linh kiện đầu vào tới khi thành phẩm xuất xưởng. Quan trọng hơn, TV áp dụng công nghệ Nhật Bản vốn được cả thế giới công nhận về chất lượng cũng như độ bền.', '<p><img src=\"https://photo.techrum.vn/images/2020/07/04/covera8e49fe921f2fa7c.jpg\" />​</p>\r\n\r\n<p><br />\r\nTuy l&agrave; c&aacute;i t&ecirc;n mới xuất hiện tr&ecirc;n thị trường nhưng tivi Coocaa c&oacute; tuổi đời l&ecirc;n tới 23 năm, xuất hiện tại 40 quốc gia v&agrave; c&oacute; hơn 100 trung t&acirc;m bảo h&agrave;nh sản phẩm tr&ecirc;n to&agrave;n Việt Nam.<br />\r\n<br />\r\nL&agrave; thương hiệu thuộc Tập đo&agrave;n Skyworth Digital Holdings Co - một trong 8 nh&agrave; sản xuất Tivi lớn nhất thế giới, tất cả tivi Coocaa đều được sản xuất trực tiếp tại nh&agrave; m&aacute;y ở Jakarta, Indonesia tr&ecirc;n c&aacute;c d&acirc;y chuyền được kiểm so&aacute;t nghi&ecirc;m ngặt, quản l&yacute; chặt chẽ từ linh kiện đầu v&agrave;o tới khi th&agrave;nh phẩm xuất xưởng. Quan trọng hơn, TV &aacute;p dụng c&ocirc;ng nghệ Nhật Bản vốn được cả thế giới c&ocirc;ng nhận về chất lượng cũng như độ bền.<br />\r\n<br />\r\nCung cấp sản phẩm chất lượng tốt với gi&aacute; th&agrave;nh hợp l&yacute; - đ&oacute; l&agrave; l&yacute; do 6000 sản phẩm tivi Coocaa đ&atilde; được b&aacute;n ra sau một ng&agrave;y mở b&aacute;n ở s&agrave;n thương mại điện tử Lazada Indonesia. Kể từ khi v&agrave;o Việt Nam th&aacute;ng 12/2018, h&atilde;ng n&agrave;y cho ra mắt người ti&ecirc;u d&ugrave;ng Việt 5 d&ograve;ng sản phẩm l&agrave; 55S5G, 50S5G, 40S5G, 40S5C, 32S5C, lượng tivi b&aacute;n ra l&agrave; 5000 chiếc sau 3 ng&agrave;y ra mắt tr&ecirc;n Lazada v&agrave; gi&uacute;p Coocaa lọt v&agrave;o top &ldquo;Best selling&rdquo; h&agrave;ng ng&agrave;nh gia dụng của năm.<br />\r\n<br />\r\nMột đặc điểm gi&uacute;p tivi Coocaa trở n&ecirc;n th&acirc;n thiện hơn với người d&ugrave;ng đấy l&agrave; sản phẩm c&oacute; hỗ trợ sử dụng tiếng Việt. Đối với c&aacute;c Series S6G, tivi sử dụng hệ điều h&agrave;nh Android 9.0 (Android TV) nguy&ecirc;n bản v&agrave; c&oacute; điều chỉnh bằng giọng n&oacute;i Bluetooth 5.0 RC. M&agrave;n h&igrave;nh si&ecirc;u mỏng v&ocirc; cực với độ d&agrave;y chưa tới 1cm (9mm), t&iacute;ch hợp Dolby Vision 4K UHD cho h&igrave;nh ảnh trong v&agrave; sắc n&eacute;t hơn, hệ thống &acirc;m thanh Dolby &amp; DTS Dual-decoding giống như ngo&agrave;i rạp phim. Bộ vi xử l&yacute; 1,75Gb RAM v&agrave; 8Gb ROM, hỗ trợ bộ nhớ ngo&agrave;i th&ocirc;ng qua cổng USB l&ecirc;n tới 2TB cho khả năng lưu trữ tối đa.<br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/07/04/image14672f82e83fc4a69.jpg\" /><br />\r\n<em>Model tivi 58S6G của thương hiệu Coocaa</em>​</p>\r\n\r\n<p><br />\r\nB&ecirc;n cạnh đ&oacute;, Coocaa cũng l&agrave; thương hiệu rất chiều người ti&ecirc;u d&ugrave;ng với những sản phẩm như d&ograve;ng Series S3N sử dụng hệ điều h&agrave;nh Netflix Turnkey (Netflix TV), m&agrave;n h&igrave;nh v&ocirc; cực phục vụ nhu cầu xem phim kh&ocirc;ng giới hạn của những &ldquo;mọt phim&rdquo; ch&iacute;nh hiệu.<br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/07/04/image30b7655cd3e4ac695.jpg\" /><br />\r\n<em>Model tivi 55S3N với Netflix built-in</em>​</p>\r\n\r\n<p><br />\r\nTiếp nối th&agrave;nh c&ocirc;ng tuyệt đối tr&ecirc;n c&aacute;c s&agrave;n TMĐT, Coocaa sẽ ch&iacute;nh thức cho ra mắt th&ecirc;m 4 model Tivi mới l&agrave;: 40S6G, 58S6G, 50S3N, 55S3N tr&ecirc;n Shopee vào ngày 07/07, với mức gi&aacute; chỉ 8,9 triệu cho tivi 4K 58 inch hứa hẹn sẽ lại trở th&agrave;nh một hiện tượng được người ti&ecirc;u d&ugrave;ng săn đ&oacute;n.<br />\r\n&nbsp;</p>\r\n\r\n<p><em><img src=\"https://photo.techrum.vn/images/2020/07/04/image2a667945da917b132.jpg\" /><br />\r\nModel 40S6G của Coocaa sẽ c&oacute; gi&aacute; hấp dẫn v&agrave;o mỗi khung giờ giảm gi&aacute; tr&ecirc;n Shopee</em>​</p>\r\n\r\n<p><br />\r\nĐặc biệt khi mua tivi Coocaa v&agrave;o c&aacute;c khung giờ giảm gi&aacute; trong ng&agrave;y 07/07 tại Shopee, kh&aacute;ch h&agrave;ng sẽ nhận được ưu đ&atilde;i l&ecirc;n tới 30%, cụ thể:</p>\r\n\r\n<ul>\r\n	<li>Tivi SMART TV Full HD Coocaa 40 inch tivi - Tr&agrave;n viền - Model 40S6G chỉ c&ograve;n 4,6 triệu đồng so với gi&aacute; gốc 7,9 triệu (giảm 30%).</li>\r\n	<li>Android SMART TV 4K UHD Coocaa 58 inch Wifi - Model 58S6G (Model 2020)</li>\r\n	<li>Chỉ c&ograve;n 8,9 triệu, gi&aacute; gốc 13,9 triệu (giảm 30%).</li>\r\n	<li>SMART Tivi Netflix 4K UHD Coocaa 50 inch Wifi - Model 50S3N (Model 2020) chỉ c&ograve;n 6,4 triệu, gi&aacute; gốc 9,9 triệu (giảm 10%)</li>\r\n	<li>SMART Tivi Netflix 4K UHD Coocaa 55 inch Wifi - Model 55S3N (Model 2020) chỉ c&ograve;n 7,9 triệu, gi&aacute; gốc 12,4 triệu (giảm 10%)</li>\r\n</ul>\r\n\r\n<p>Coocaa tự h&agrave;o khi mang tới những sản phẩm tivi tốt nhất với mức gi&aacute; ph&ugrave; hợp nhất, phục vụ nhu cầu của đại đa số người d&acirc;n Việt Nam. Lu&ocirc;n đặt lợi &iacute;ch của kh&aacute;ch h&agrave;ng l&ecirc;n đầu, kh&ocirc;ng ngừng cải tiến chất lượng dịch vụ để mang đến sự h&agrave;i l&ograve;ng cho kh&aacute;ch h&agrave;ng.<br />\r\n<br />\r\nKh&aacute;ch h&agrave;ng khi mua tivi Coocaa sẽ được hưởng dịch vụ hậu m&atilde;i chuy&ecirc;n nghiệp, ho&agrave;n hảo v&agrave; tiện lợi: bảo h&agrave;nh l&ecirc;n tới 2 năm tại hơn 100 trung t&acirc;m bảo h&agrave;nh tr&ecirc;n to&agrave;n quốc, 15 ng&agrave;y đổi trả,...<br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/07/04/image4358bab95a783ec0c.jpg\" />​</p>\r\n\r\n<p><br />\r\nVới việc đề cao chất lượng phục vụ quan trọng kh&ocirc;ng k&eacute;m so với việc đảm bảo chất lượng sản phẩm, thương hiệu Coocaa chắc chắn sẽ l&agrave;m h&agrave;i l&ograve;ng mọi kh&aacute;ch h&agrave;ng đang c&oacute; nhu cầu t&igrave;m kiếm một chiếc tivi bền bỉ c&oacute; gi&aacute; th&agrave;nh hợp l&yacute;.<br />\r\n<br />\r\nTh&ocirc;ng tin chi tiết chương tr&igrave;nh khuyến m&atilde;i xem&nbsp;<a href=\"https://shopee.vn/coocaa_official_store?smtt=9&amp;utm_source=others%3Cpr%3E&amp;utm_medium=seller&amp;utm_campaign=s131201661_SS_VN_OTHR_techrum&amp;utm_content=media&amp;deep_and_web=1&amp;pid=others%20%3Cpr%3E&amp;c=s131201661_SS_VN_OTHR_techrum\" target=\"_blank\">tại đ&acirc;y</a>.</p>\r\n', 1),
(2, 'Apple hỏi ý kiến người dùng về củ sạc iPhone cũ, giữa tin đồn loại bỏ củ sạc trên iPhone 12', 'upload/images/04072020-1593896021.jpg', 'Trong thời gian gần đây, nhiều nguồn tin rò rỉ cùng chuyên gia phân tích từng khẳng định Apple sẽ loại bỏ củ sạc trong hộp của iPhone 12. Mới đây, Apple đã tiếp tục có một động thái gây tranh cãi khác, cũng liên quan đến củ sạc đi kèm máy.\r\n', '<p><img src=\"https://photo.techrum.vn/images/2020/07/04/iphone-chargers-100741701-largedaec466778c6e4cf.jpg\" /><br />\r\n<br />\r\nTrong thời gian gần đ&acirc;y, nhiều nguồn tin r&ograve; rỉ c&ugrave;ng chuy&ecirc;n gia ph&acirc;n t&iacute;ch từng khẳng định Apple sẽ loại bỏ củ sạc trong hộp của iPhone 12. Mới đ&acirc;y, Apple đ&atilde; tiếp tục c&oacute; một động th&aacute;i g&acirc;y tranh c&atilde;i kh&aacute;c, cũng li&ecirc;n quan đến củ sạc đi k&egrave;m m&aacute;y.<br />\r\n<br />\r\nCụ thể, Apple mới đ&acirc;y đ&atilde; c&oacute; một b&agrave;i khảo s&aacute;t đến người d&ugrave;ng của m&igrave;nh về những củ sạc đi k&egrave;m trong hộp. Theo đ&oacute;, h&atilde;ng muốn biết những người d&ugrave;ng của m&igrave;nh đ&atilde; l&agrave;m g&igrave; với củ sạc đi k&egrave;m m&aacute;y v&agrave; đưa ra 5 lựa chọn kh&aacute;c nhau. Bao gồm:</p>\r\n\r\n<ul>\r\n	<li>T&ocirc;i đ&atilde; b&aacute;n (hoặc trao đổi n&oacute;) c&ugrave;ng chiếc iPhone cũ</li>\r\n	<li>T&ocirc;i l&agrave;m mất n&oacute;</li>\r\n	<li>T&ocirc;i đ&atilde; để lại cho một th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh hoặc một người bạn</li>\r\n	<li>T&ocirc;i vẫn đang d&ugrave;ng n&oacute; ở nh&agrave;</li>\r\n	<li>T&ocirc;i vẫn đang d&ugrave;ng n&oacute; ở chỗ kh&aacute;c (chỗ l&agrave;m, trường học,...)</li>\r\n	<li>T&ocirc;i vẫn giữ n&oacute;, nhưng kh&ocirc;ng d&ugrave;ng</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/07/04/15938244819001563346185069992ca583f0d5c.jpg\" />​</p>\r\n\r\n<p><br />\r\nCần lưu &yacute;, b&agrave;i khảo s&aacute;t tr&ecirc;n chỉ &aacute;p dụng cho c&aacute;c củ sạc iPhone v&agrave; kh&ocirc;ng bao gồm d&acirc;y c&aacute;p đi k&egrave;m m&aacute;y. Theo nhận định trước đ&acirc;y của c&aacute;c chuy&ecirc;n gia, Apple sẽ vẫn b&aacute;n k&egrave;m d&acirc;y sạc Lightning trong hộp của thế hệ iPhone 12 mới.<br />\r\n<br />\r\nĐược biết, đ&acirc;y kh&ocirc;ng phải l&agrave; lần đầu ti&ecirc;n Apple thực hiện khảo s&aacute;t về c&aacute;c sản phẩm của m&igrave;nh. Trước đ&oacute; h&atilde;ng cũng đ&atilde; từng thực hiện khảo s&aacute;t về việc trang bị jack cắm tai nghe tr&ecirc;n c&aacute;c thiết bị MacBook Pro (hiện đ&atilde; bị khai tử tr&ecirc;n thế hệ MacBook Pro mới). Điều n&agrave;y đặt ra c&acirc;u hỏi về việc, liệu iPhone 12 c&oacute; bị loại bỏ củ sạc trong hộp hay kh&ocirc;ng?.</p>\r\n', 1),
(3, 'Âm thanh Mono là gì? cách kích hoạt Mono Audio trên Windows 10', 'upload/images/04072020-1593897184.jpg', 'Nếu bạn đã từng trải nghiệm về chế độ Stereo Audio thì sẽ hiểu, khi đeo tai nghe, âm thanh sẽ trung thực và sống động do được phát từ nhiều nguồn và nhiều vị trí khác nhau ra tai nghe. Tuy nhiên, chế độ này chỉ phù hợp khi bạn đeo tai nghe hai bên mà thôi. Vậy khi muốn chọn kiểu đeo tai nghe một nửa, tức là bên đeo bên không thì nên chon chế độ gì. Hãy cùng tìm hiểu về chế độ âm thanh Mono nhé.', '<p><img src=\"https://photo.techrum.vn/images/2020/07/04/Untitled-10b3ad7155b6e5f87.jpg\" />​</p>\r\n\r\n<p><br />\r\nNếu bạn đ&atilde; từng trải nghiệm về&nbsp;<strong>chế độ Stereo Audio</strong>&nbsp;th&igrave; sẽ hiểu, khi đeo tai nghe, &acirc;m thanh sẽ trung thực v&agrave; sống động do được ph&aacute;t từ nhiều nguồn v&agrave; nhiều vị tr&iacute; kh&aacute;c nhau ra tai nghe. Tuy nhi&ecirc;n, chế độ n&agrave;y chỉ ph&ugrave; hợp khi bạn đeo tai nghe hai b&ecirc;n m&agrave; th&ocirc;i. Vậy khi muốn chọn kiểu đeo tai nghe một nửa, tức l&agrave; b&ecirc;n đeo b&ecirc;n kh&ocirc;ng th&igrave; n&ecirc;n chon chế độ g&igrave;. H&atilde;y c&ugrave;ng t&igrave;m hiểu về&nbsp;<strong>chế độ &acirc;m thanh Mono</strong>&nbsp;nh&eacute;.<br />\r\n<br />\r\nNếu vậy th&igrave; khi nghe &acirc;m thanh (nhạc, phim&hellip;) bằng loa hoặc headphone, nếu nghe &acirc;m thanh ph&aacute;t ra ở cả b&ecirc;n tr&aacute;i v&agrave; b&ecirc;n phải, th&igrave; đ&oacute; chắc chắn l&agrave; &acirc;m thanh Stereo.</p>\r\n\r\n<ul>\r\n	<li><strong>Mono music:</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Stereo music:</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nHƯỚNG DẪN K&Iacute;CH HOẠT CHẾ ĐỘ MONO AUDIO TR&Ecirc;N WINDOWS 10<br />\r\n<br />\r\n<strong>Bước 1:</strong>&nbsp;Nhấn tổ hợp ph&iacute;m&nbsp;<strong>Windows + I&nbsp;</strong>để mở hộp thoại&nbsp;<strong>Settings</strong>, sau đ&oacute; click&nbsp;<strong>Ease of Access - Narrator</strong><br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/07/04/Untitled-123bae5022f04bfac.jpg\" /><br />\r\n​</p>\r\n\r\n<p><strong>Bước 2:&nbsp;</strong>Truy cập tab&nbsp;<strong>Audio</strong>, click bật t&ugrave;y chọn&nbsp;<strong>Turn on mono audio</strong>. Mặc định sẽ ở trạng th&aacute;i&nbsp;<strong>OFF</strong>, giờ bạn h&atilde;y d&ugrave;ng chuột gạt c&ocirc;ng tắc sang phải th&agrave;nh&nbsp;<strong>ON&nbsp;</strong>để bật lại t&iacute;nh năng n&agrave;y.<br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/07/04/Untitled-12235ca2bf4b2480d.jpg\" /><br />\r\n​</p>\r\n\r\n<p>Như vậy l&agrave; ho&agrave;n tất! Ch&uacute;c bạn th&agrave;nh c&ocirc;ng.</p>\r\n', 1),
(4, 'Hướng dẫn tùy biến giao diện Control Center giống như trên MIUI 12', 'upload/images/04072020-1593897253.jpg', 'MIUI 12 là phiên bản Android tùy chỉnh mới nhất dành cho những chiếc smartphone của Xiaomi. Trong bản cập nhật này, ngoài các nâng cấp về tính năng, thay đổi về quyền riêng tư của người dùng khi sử dụng thiết bị, hãng còn bổ sung thêm bộ hình nền Super Wallpapers và cải tiến giao diện Control Center (Trung tâm điều khiển) theo phong cách thiết kế dạng mô-đun được lấy cảm hứng từ hệ điều hành iOS.', '<p><img src=\"https://photo.techrum.vn/images/2020/07/04/mi-control-center-TECHRUM-cover9f1454c6c92dcbad.jpg\" />​</p>\r\n\r\n<p><br />\r\nMIUI 12 l&agrave; phi&ecirc;n bản Android t&ugrave;y chỉnh mới nhất d&agrave;nh cho những chiếc smartphone của Xiaomi. Trong bản cập nhật n&agrave;y, ngo&agrave;i c&aacute;c n&acirc;ng cấp về t&iacute;nh năng, thay đổi về quyền ri&ecirc;ng tư của người d&ugrave;ng khi sử dụng thiết bị, h&atilde;ng c&ograve;n bổ sung th&ecirc;m bộ h&igrave;nh nền Super Wallpapers v&agrave; cải tiến giao diện Control Center (Trung t&acirc;m điều khiển) theo phong c&aacute;ch thiết kế dạng m&ocirc;-đun được lấy cảm hứng từ hệ điều h&agrave;nh iOS.<br />\r\n<br />\r\nMặc d&ugrave; hiện tại MIUI 12 vẫn đang trong qu&aacute; tr&igrave;nh thử nghiệm, chỉ giới hạn tr&ecirc;n một số thiết bị v&agrave; khu vực nhất định. Tuy nhi&ecirc;n, nếu bạn muốn trải nghiệm trước Control Center theo mới th&igrave; c&oacute; thể d&ugrave;ng thử ứng dụng Mi Control Center từ nh&agrave; ph&aacute;t triển Treydev, thậm ch&iacute; l&agrave; c&ograve;n &aacute;p dụng được cho cả những chiếc smartphone Android kh&aacute;c nữa nh&eacute;.<br />\r\n<br />\r\nVề cơ bản, ứng dụng Mi Control Center cho ph&eacute;p bạn thay đổi giao diện Trung t&acirc;m th&ocirc;ng b&aacute;o tr&ecirc;n thiết bị Android theo phong c&aacute;ch MIUI 12 mới, đi k&egrave;m với một số t&iacute;nh năng th&uacute; vị như t&ugrave;y chỉnh bố cục lưới biểu tượng, t&ugrave;y chỉnh kiểu biểu tượng, chọn m&agrave;u văn bản, thiết lập ngăn xếp c&agrave;i đặt nhanh, tạo shortcut, thay đổi độ s&aacute;ng kiểu mới, thay đổi độ trong nền v.v...<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/07/04/mi-control-center-TECHRUM-17813f18dd23cfe10.jpg\" /><br />\r\n<br />\r\nVới phi&ecirc;n bản Mi Control Center miễn ph&iacute; c&oacute; thể k&egrave;m quảng c&aacute;o v&agrave; giới hạn một số chức năng c&agrave;i đặt ứng dụng. Bạn c&oacute; thể mua phi&ecirc;n bản cao cấp với gi&aacute; khoảng $2 để sử dụng tất cả chức năng m&agrave; nh&agrave; ph&aacute;t triển cung cấp (bao gồm thay đổi ti&ecirc;u đề , giới hạn th&ocirc;ng b&aacute;o, cho ph&eacute;p nhiều h&igrave;nh dạng cho c&aacute;c biểu tượng c&agrave;i đặt nhanh, t&ugrave;y chỉnh độ mờ đục v.v...)<br />\r\n<br />\r\n<strong>TẢI VỀ:</strong>&nbsp;<a href=\"https://play.google.com/store/apps/details?id=com.treydev.micontrolcenter\" target=\"_blank\">MI CONTROL CENTER (TREYDEV)</a>&nbsp;- FREE/IAP<br />\r\n<br />\r\nHƯỚNG DẪN SỬ DỤNG NHANH:<br />\r\n<br />\r\n<strong>B1:&nbsp;</strong>Sau khi c&agrave;i đặt Mi Control Center tr&ecirc;n thiết bị, bạn cần cấp một số quyền theo y&ecirc;u cầu như Truy cập trợ năng, Th&ocirc;ng b&aacute;o cho ứng dụng, Cho ph&eacute;p sửa đổi c&agrave;i đặt hệ thống, Hoạt động trong nền.<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/07/04/mi-control-center-TECHRUM-2fde15c33065b2000.jpg\" /><br />\r\n<br />\r\n<strong>B2:&nbsp;</strong>Tại giao diện ch&iacute;nh của ứng dụng, bạn sẽ c&oacute; hai t&ugrave;y chọn thiết lập kiểu Trung t&acirc;m điều khiển (theo mặc định - notification shade hoặc mới - control center)<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/07/04/mi-control-center-TECHRUM-3f4a2deb7c5a3cc0d.jpg\" /><br />\r\n<br />\r\n<strong>B3:&nbsp;</strong>Phần Settings bao gồm bốn mục ch&iacute;nh l&agrave; Layout, Colors, Head-up v&agrave; Extras, tương ứng với mỗi mục l&agrave; nhiều c&agrave;i đặt nhỏ kh&aacute;c để bạn t&ugrave;y chỉnh lại Trung t&acirc;m điều khiển. Cụ thể như sau:</p>\r\n\r\n<ul>\r\n	<li>Layout: H&igrave;nh dạng biểu tượng; Bật g&oacute;c vu&ocirc;ng (l&agrave;m cho c&aacute;c g&oacute;c được bo tr&ograve;n th&agrave;nh g&oacute;c vu&ocirc;ng); Lu&ocirc;n hiển thị phần dưới; Shift battery down; Căn giữa c&aacute;c h&agrave;nh động cho th&ocirc;ng b&aacute;o; L&agrave;m trong nền th&ocirc;ng b&aacute;o; X&oacute;a thanh trạng th&aacute;i khi mở Control Center; Bật bộ đếm th&ocirc;ng b&aacute;o đẩy; Hiển thị n&uacute;t Nguồn; Hiển thị bộ đo tốc độ mạng; T&ugrave;y chỉnh lại Số cột, Số h&agrave;ng, Ti&ecirc;u đề, Số &ocirc; ti&ecirc;u đề, Số lượng th&ocirc;ng b&aacute;o, Thanh trược độ s&aacute;ng, Hiển thị t&ugrave;y chỉnh độ s&aacute;ng tự động...</li>\r\n	<li>Colors: H&igrave;nh n&ecirc;n t&ugrave;y chỉnh; Bật/Tắt chế độ auto dark mode; T&ugrave;y chỉnh m&agrave;u sắc của nền, nền th&ocirc;ng b&aacute;o, &ocirc; đang k&iacute;ch hoạt, m&agrave;u chữ, m&agrave;u thanh điều chỉnh độ s&aacute;ng; B&oacute;ng mờ; Tint active icon; Blur behind; Th&ocirc;ng b&aacute;o trong suốt; Ti&ecirc;u đề trong suốt; Độ trong suốt...</li>\r\n	<li>Head-up: T&ugrave;y chỉnh kiểu pop-up; V&ocirc; hiệu h&oacute;a Pop-up; T&ugrave;y chỉnh m&agrave;u khung Pop-up; Bật/Tắt chấm th&ocirc;ng b&aacute;o tr&ecirc;n khung Pop-up, K&iacute;ch hoạt chế độ hiển thị khung Pop-up to&agrave;n m&agrave;n h&igrave;nh...</li>\r\n	<li>Extras: Sao lưu/Kh&ocirc;i phục c&agrave;i đặt; Chọn ảnh đại diện; T&ugrave;y chỉnh t&ecirc;n nh&agrave; mạng; Tự động mở rộng th&ocirc;ng b&aacute;o; Độ s&aacute;ng tự động v&agrave; nhiều thiết lập hữu &iacute;ch kh&aacute;c</li>\r\n</ul>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/07/04/mi-control-center-TECHRUM-460d22d14111c9697.jpg\" /><br />\r\n<br />\r\nSau khi t&ugrave;y chỉnh c&aacute;c c&agrave;i đặt trong Mi Contro Center, bạn chỉ cần bật n&uacute;t RUN tr&ecirc;n giao diện ch&iacute;nh của ứng dụng để k&iacute;ch hoạt kiểu Trung t&acirc;m điều khiển mới l&agrave; xong.<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/07/04/mi-control-center-TECHRUM-50645793a99d721dc.jpg\" /></p>\r\n', 1),
(5, 'iPhone 6s 5 năm tuổi vẫn có hiệu năng mượt mà đến bất ngờ trên iOS 14 mới ra mắt', 'upload/images/05072020-1593913686.jpg', 'Apple đã chính thức ra mắt phiên bản iOS 14 mới nhất tại sự kiện WWDC 2020, với rất nhiều bổ sung mới như Widget, App Library. Tuy nhiên, một điều khiến nhiều người bất ngờ và rất vui đó chính là Apple vẫn hỗ trợ iPhone 6s được ra mắt vào năm 2015 lên phiên bản iOS 14 mới nhất. Quan trọng hơn, iPhone 6s có tuổi đời 5 năm vẫn hoạt động tốt đáng ngạc nhiên trên iOS 14.', '<p><img src=\"https://photo.techrum.vn/images/2020/07/04/maxresdefault-1897217dd1b276580.jpg\" />​</p>\r\n\r\n<p><br />\r\nApple đ&atilde; ch&iacute;nh thức ra mắt phi&ecirc;n bản iOS 14 mới nhất tại sự kiện WWDC 2020, với rất nhiều bổ sung mới như Widget, App Library. Tuy nhi&ecirc;n, một điều khiến nhiều người bất ngờ v&agrave; rất vui đ&oacute; ch&iacute;nh l&agrave; Apple vẫn hỗ trợ iPhone 6s được ra mắt v&agrave;o năm 2015 l&ecirc;n phi&ecirc;n bản iOS 14 mới nhất. Quan trọng hơn, iPhone 6s c&oacute; tuổi đời 5 năm vẫn hoạt động tốt đ&aacute;ng ngạc nhi&ecirc;n tr&ecirc;n iOS 14.<br />\r\n<br />\r\n<a href=\"https://www.youtube.com/channel/UCpZy-Hfqcxf-R7nQzlv9Bvw\" target=\"_blank\">Brandon Butch</a>, một YouTuber đ&atilde; chia sẻ một video cho thấy c&aacute;ch iPhone 6s hoạt động tr&ecirc;n iOS 14 mới nhất. Thật ngạc nhi&ecirc;n, thiết bị 5 năm tuổi n&agrave;y dường như kh&ocirc;ng gặp phải kh&oacute; khăn, cho d&ugrave; đ&oacute; l&agrave; Widget, App Library hay bất kỳ bổ sung n&agrave;o kh&aacute;c được cung cấp bởi iOS 14. H&atilde;y xem video dưới đ&acirc;y để biết th&ecirc;m chi tiết.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nTrong video, Brandon Butch đ&atilde; giới thiệu những t&iacute;nh năng mới của iOS 14 hoạt động tr&ecirc;n iPhone 6s, anh khen Apple rằng người d&ugrave;ng chẳng cần phải bỏ ra số tiền lớn để mua iPhone 11 Pro Max m&agrave; vẫn c&oacute; thể trải nghiệm rất nhiều t&iacute;nh năng mới của iOS 14 tr&ecirc;n chiếc iPhone 6s cũ của họ. iPhone 6s th&iacute;ch nghi với bản dựng mới v&agrave; mọi thứ tr&ocirc;ng liền mạch v&agrave; mượt m&agrave;. Bạn sẽ thấy kh&ocirc;ng c&oacute; độ trễ đ&aacute;ng kể khi Brandon Butch vuốt c&aacute;c Widget, lướt web tr&ecirc;n Safari, tin nhắn, App Library.<br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/07/04/2020-07-04_1016556c509eb6b7d9ab66.jpg\" />​</p>\r\n\r\n<p><br />\r\nH&atilde;y lưu &yacute; rằng iOS 14 vẫn đang trong giai đoạn thử nghiệm v&agrave; Apple mới chỉ ph&aacute;t h&agrave;nh phi&ecirc;n bản beta 1. Ch&uacute;ng ta sẽ thấy hiệu suất được cải thiện với c&aacute;c phi&ecirc;n bản beta sắp tới. Tuy nhi&ecirc;n một điều kh&ocirc;ng thể tr&aacute;nh khỏi tr&ecirc;n iPhone 6s đ&oacute; ch&iacute;nh l&agrave; thời lượng Pin giảm đ&aacute;ng kể khi hoạt động tr&ecirc;n iOS 14, nhưng điều đ&oacute; c&oacute; thể do một số l&yacute; do.<br />\r\n<br />\r\nV&igrave; iOS 14 đang trong giai đoạn thử nghiệm, n&oacute; đang thu thập dữ liệu với c&aacute;c lỗi. Những lỗi n&agrave;y c&oacute; xu hướng hoạt động ti&ecirc;u cực v&agrave; c&oacute; thể khiến Pin cạn nhanh hơn. Ngo&agrave;i ra, c&aacute;c Widget l&agrave; thủ phạm ch&iacute;nh khiến Pin iPhone 6s cạn nhanh hơn khi phải cập nhật th&ocirc;ng tin li&ecirc;n tục, đặc biệt l&agrave; Widget thời tiết.<br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/07/04/2020-07-04_101748b3c53e8b8225807c.jpg\" />​</p>\r\n\r\n<p><br />\r\niOS 14 mang đến chế độ Picture in picture cho YouTube, cho ph&eacute;p bạn xem c&aacute;c video v&agrave; nghe nhạc trong khi bạn vẫn c&oacute; thể tr&ograve; chuyện với bạn b&egrave;. Tuy nhi&ecirc;n, t&iacute;nh năng n&agrave;y hoạt động trong tr&igrave;nh duyệt Safari chứ kh&ocirc;ng phải với ứng dụng ch&iacute;nh thức của YouTube.<br />\r\n<br />\r\nTuy nhi&ecirc;n hiện tại chế độ Picture in picture hoạt động tr&ecirc;n iPhone 6s vẫn xuất hiện một số lỗi nhỏ trong b&agrave;n ph&iacute;m, một số ứng dụng kh&ocirc;ng tải nhanh, lag khi di chuyển thanh video nổi. Bạn n&ecirc;n lưu &yacute; rằng iPhone 6s c&oacute; chỉ được trang bị chip Apple A9 v&agrave; RAM chỉ 2GB. V&igrave; thế khi sử dụng chế độ Picture in picture, số lượng RAM hạn chế chỉ c&oacute; thể khiến iPhone 6s xuất hiện t&igrave;nh trạng lag khi v&agrave;o nhiều ứng dụng c&ugrave;ng l&uacute;c.<br />\r\n&nbsp;</p>\r\n\r\n<p>Theo&nbsp;<a href=\"https://wccftech.com/iphone-6s-on-ios-14-holds-up-gracefully-performance-is-surprisingly-smooth-video/\" target=\"_blank\">Wccftech</a></p>\r\n', 1),
(6, 'Trên tay nhanh ROG Zephyrus G14: CPU AMD 4000 Series mạnh mẽ, thân hình mỏng nhẹ, mặt A LED độc đáo', 'upload/images/05072020-1593913767.jpg', 'Với sự ra đời của dòng CPU Ryzen 4000 series dành cho laptop đã giúp các thương hiệu phần cứng đã có thể tối ưu được hiệu năng và thiết kế trên những dòng sản phẩm có hiệu năng cao. Zephyrus G14 vừa được Asus ra mắt đã cho thấy AMD đang làm rất tốt với dòng sản phẩm mới của họ với việc giữ được một lượng điện tiêu thụ thấp nhưng vẫn có xung cao và nhiều nhân, nhiều luồng đồng thời là một thiết kế mỏng nhẹ đến bất ngờ.', '<p><img src=\"https://photo.techrum.vn/images/2020/07/01/G14236a3f2f05e3f6b8.jpg\" /><br />\r\n<br />\r\nVới sự ra đời của d&ograve;ng CPU Ryzen 4000 series d&agrave;nh cho laptop đ&atilde; gi&uacute;p c&aacute;c thương hiệu phần cứng đ&atilde; c&oacute; thể tối ưu được hiệu năng v&agrave; thiết kế tr&ecirc;n những d&ograve;ng sản phẩm c&oacute; hiệu năng cao. Zephyrus G14 vừa được Asus ra mắt đ&atilde; cho thấy AMD đang l&agrave;m rất tốt với d&ograve;ng sản phẩm mới của họ với việc giữ được một lượng điện ti&ecirc;u thụ thấp nhưng vẫn c&oacute; xung cao v&agrave; nhiều nh&acirc;n, nhiều luồng đồng thời l&agrave; một thiết kế mỏng nhẹ đến bất ngờ.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nVề mặt thiết kế, mặt A ch&iacute;nh l&agrave; điểm nhấn quan trọng nhất của Zephyrus G14 với đường cắt ch&eacute;o quen thuộc của ROG nhưng được Asus l&agrave;m mới bằng hệ thống LED AniMe Matrix gi&uacute;p tăng t&iacute;nh c&aacute; nh&acirc;n h&oacute;a cho người d&ugrave;ng th&ocirc;ng qua việc t&ugrave;y chỉnh ở phần mềm Armoury Crate. T&iacute;nh năng n&agrave;y tuy kh&ocirc;ng ảnh hưởng qu&aacute; nhiều đến trải nghiệm nhưng lại gi&uacute;p người d&ugrave;ng thể hiện được c&aacute; t&iacute;nh giữa đ&aacute;m đ&ocirc;ng.<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/07/01/G14-10d79328c3c3741b96.jpg\" /><br />\r\n<br />\r\nPhần m&agrave;n h&igrave;nh của G14 người d&ugrave;ng sẽ c&oacute; hai phi&ecirc;n bản để lựa chọn: FHD 120Hz hoặc 2K 60Hz t&ugrave;y theo nhu cầu. Nhưng d&ugrave; l&agrave; phi&ecirc;n bản n&agrave;o cũng sẽ c&oacute; k&iacute;ch thước 14inch ti&ecirc;u chuẩn viền mỏng, IPS LCD v&agrave; 100% dải m&agrave;u sRGB. Trải nghiệm c&aacute; nh&acirc;n của m&igrave;nh th&igrave; đ&acirc;y l&agrave; một m&agrave;n h&igrave;nh laptop c&oacute; g&oacute;c nh&igrave;n v&agrave; m&agrave;u sắc ổn, nhưng độ s&aacute;ng tối đa chưa qu&aacute; cao.<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/07/01/G14-38b7688b1669213b6.jpg\" /><br />\r\n<br />\r\nB&agrave;n ph&iacute;m của Zephyrus G14 c&oacute; layout ti&ecirc;u chuẩn nhưng được chăm ch&uacute;t kỹ lưỡng ở việc c&oacute; c&aacute;c ph&iacute;m Media t&ugrave;y chỉnh nhanh ở tr&ecirc;n v&agrave; ph&iacute;m Space được l&agrave;m lớn hơn. B&agrave;n ph&iacute;m n&agrave;y c&oacute; h&agrave;nh tr&igrave;nh kh&aacute; s&acirc;u v&agrave; cảm gi&aacute;c g&otilde; rất th&iacute;ch. Phần trackpad được l&agrave;m mịn, vuốt sướng nhưng k&iacute;ch thước th&igrave; hơi b&eacute;.<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/07/01/G14-7034815c3ba265f91.jpg\" /><br />\r\n<br />\r\nC&aacute;c cỗng kết nối tr&ecirc;n m&aacute;y cũng kh&aacute; đầy đủ với 2 cỗng USB A nhưng chỉ đặt ở b&ecirc;n phải hơi vướng v&iacute;u, cỗng C đặt ở b&ecirc;n tr&aacute;i trong đ&oacute; 1 cỗng hỗ trợ xuất h&igrave;nh chuẩn DisplayPort v&agrave; cả sạc PD rất tiện. M&aacute;y đương nhi&ecirc;n vẫn sở hữu 1 cỗng HDMI Fullsize v&agrave; jack &acirc;m thanh 3,5.<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/07/01/G14-114ebb5a5fa9b36efd.jpg\" /><br />\r\n<br />\r\nNhư đ&atilde; đề cập ở tr&ecirc;n d&ograve;ng G14 của ROG lần n&agrave;y sử dụng CPU 4000 Series của AMD được sản xuất với kiến tr&uacute;c zen 2 tr&ecirc;n tiến tr&igrave;nh 7nm. D&ograve;ng chip được Asus sử dụng c&oacute; ch&uacute;t kh&aacute;c biệt với phần hậu tố HS để chỉ việc tối ưu cho điện năng ti&ecirc;u thụ v&agrave; nhiệt độ. C&aacute;c phi&ecirc;n bản cấu h&igrave;nh sẽ gồm: Ryzen 5 4600HS, Ryzen 7 4800HS v&agrave; Ryzen 9 4900HS. GPU cũng được trải d&agrave;i từ GTX 1650 đến tận RTX 2060 MaxQ. Với gi&aacute; b&aacute;n từ 26,99triệu đến 44,99 triệu.<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/07/01/G14-920cc3af9487a1198.jpg\" /><br />\r\n<br />\r\nVới phi&ecirc;n bản đang test l&agrave; AMD Ryzen 7 4800HS, 16 GB RAM, GPU GTX1660Ti c&ugrave;ng m&agrave;n h&igrave;nh 2K th&igrave; điểm số v&agrave; hiệu năng mang lại rất đ&aacute;ng khen với một chiếc m&aacute;y mỏng nhẹ nhưng g&aacute;nh CPU l&ecirc;n đến 8 nh&acirc;n 16 luồng. Hệ thống tản nhiệt c&ugrave;ng bản lề ErgoLift n&acirc;ng m&aacute;y l&ecirc;n 15mm gi&uacute;p hiệu năng của sản phẩm được duy tr&igrave; m&agrave; kh&ocirc;ng bị giảm s&uacute;t, nhiệt lượng kh&ocirc;ng ảnh hưởng nhiều đến phẩn b&agrave;n ph&iacute;m hay k&ecirc; tay g&acirc;y kh&oacute; chịu.<br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/07/01/1065089396014541204949018169899869409569050n-1593426261376193974514456e7bb80ee0ee0d7.png\" />&nbsp;<img src=\"https://photo.techrum.vn/images/2020/07/01/Screenshot-13eaf9228d049b9fdf.jpg\" />&nbsp;<img src=\"https://photo.techrum.vn/images/2020/07/01/Screenshot-305dfb34b5a6a179f1.jpg\" />&nbsp;<img src=\"https://photo.techrum.vn/images/2020/07/01/Screenshot-42df42ced1ed57a01b.jpg\" /></p>\r\n\r\n<p><br />\r\n<br />\r\nTổng thể th&igrave; qua trải nghiệm nhanh của m&igrave;nh, Zephyrus l&agrave; một sản phẩm laptop hiệu năng cao, ổn định v&agrave; thật sự mỏng nhẹ. Cả AMD v&agrave; Asus đ&atilde; l&agrave;m tốt để tạo ra một sản phẩm c&oacute; hiệu năng tốt đến như vậy. Thiết kế v&agrave; c&aacute;c yếu tố kh&aacute;c đều từ mức ổn trở l&ecirc;n v&agrave; gi&aacute; b&aacute;n trải d&agrave;i n&ecirc;n cũng dễ d&agrave;ng lựa chọn được cấu h&igrave;nh hợp với nhu cầu.</p>\r\n', 1),
(7, 'ASUS ra mắt VivoBook S thế hệ mới cùng dự án “Tôi là tâm điểm” dành riêng cho Gen Z', 'upload/images/05072020-1593914135.jpg', 'ASUS Việt Nam giới thiệu VivoBook S13/S14/S15 (S333/S433/S533) mới trong sự kiện livestream chủ đề “Own The Spotlight – Tôi là tâm điểm”. Bộ ba VivoBook S13/S14/S15 năm nay mang câu chuyện thiết kế đặc biệt để kết nối với thế hệ Gen Z, đồng thời đáp ứng yêu cầu về hiệu năng của một thiết bị công nghệ dành cho lối sống năng động của giới trẻ. Thiết kế máy được đổi mới phím ENTER viền vàng neon nổi bật cá tính cùng thân máy 4 lựa chọn màu sắc sinh động.', '<p><img src=\"https://photo.techrum.vn/images/2020/06/19/assafb20a159479f5d7.jpg\" /><br />\r\nASUS Việt Nam giới thiệu VivoBook S13/S14/S15 (S333/S433/S533) mới trong sự kiện livestream chủ đề &ldquo;Own The Spotlight &ndash; T&ocirc;i l&agrave; t&acirc;m điểm&rdquo;. Bộ ba VivoBook S13/S14/S15 năm nay mang c&acirc;u chuyện thiết kế đặc biệt để kết nối với thế hệ Gen Z, đồng thời đ&aacute;p ứng y&ecirc;u cầu về hiệu năng của một thiết bị c&ocirc;ng nghệ d&agrave;nh cho lối sống năng động của giới trẻ. Thiết kế m&aacute;y được đổi mới ph&iacute;m ENTER viền v&agrave;ng neon nổi bật c&aacute; t&iacute;nh c&ugrave;ng th&acirc;n m&aacute;y 4 lựa chọn m&agrave;u sắc sinh động. C&aacute;c t&iacute;nh năng hiện đại như NumberPad, đăng nhập v&acirc;n tay, viền mỏng NanoEdge&hellip; đều xuất hiện tr&ecirc;n VivoBook S13/S14/S15. M&aacute;y được vận h&agrave;nh bởi vi xử l&yacute; Intel Core thế hệ 10 mới nhất, lưu trữ 512GB SSD được trang bị tr&ecirc;n tất cả t&ugrave;y chọn cấu h&igrave;nh.<br />\r\n<br />\r\nASUS VivoBook S13/S14/S15 l&agrave; một phần trong dự &aacute;n &ldquo;The Spotlight Project&rdquo; kết hợp giữa ASUS &amp; Gen Z, để c&ugrave;ng mang đến th&ocirc;ng điệp của ch&iacute;nh c&aacute;c bạn: H&atilde;y ENTER &amp; TRỞ TH&Agrave;NH T&Acirc;M ĐIỂM.<br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/06/19/3e1b94af7bec20d8a.jpg\" />​</p>\r\n\r\n<p><br />\r\nVới cảm hứng từ ch&iacute;nh c&aacute;c bạn trẻ thế hệ Gen Z, một thế hệ đầy m&agrave;u sắc, t&agrave;i năng, s&aacute;ng tạo, ASUS khởi động &ldquo;The Spotlight Project&rdquo; với bộ ba VivoBook S13/S14/S15 đồng h&agrave;nh c&ugrave;ng 3 đại diện Gen Z gồm Lena &ndash; Obito &ndash; Seachains (chủ nh&acirc;n của bản hit &ldquo;Simple Love&rdquo;) đại diện cho 3 gi&aacute; trị nổi bật của thế hệ n&agrave;y: phong c&aacute;ch &ndash; c&aacute; t&iacute;nh &ndash; t&agrave;i năng sẽ tiếp sức cho Gen Z tr&ecirc;n chặng đường theo đuổi đam m&ecirc;, trở th&agrave;nh t&acirc;m điểm.<br />\r\n<br />\r\n<strong>C&Aacute; T&Iacute;NH với loạt laptop sắc m&agrave;u &amp; ph&iacute;m ENTER viền v&agrave;ng neon</strong><br />\r\n<br />\r\nGi&uacute;p Gen Z thể hiện chất t&ocirc;i, n&eacute;t c&aacute; t&iacute;nh ri&ecirc;ng của m&igrave;nh, VivoBook S năm nay tiếp tục bước đi ti&ecirc;n phong trong cuộc chơi m&agrave;u sắc của thị trường c&ocirc;ng nghệ.</p>\r\n\r\n<ul>\r\n	<li><strong>Xanh Gaia</strong>: t&ecirc;n gọi lấy cảm hứng từ t&ecirc;n của nữ thần Gaia trong thần thoại Hy Lạp, đại diện cho yếu tố thi&ecirc;n nhi&ecirc;n, truyền th&ocirc;ng điệp bảo vệ m&ocirc;i trường &amp; tr&aacute;ch nhiệm cộng đồng.</li>\r\n	<li><strong>Đỏ t&aacute;o bạo</strong>: sắc đỏ nổi bật đại diện cho sự tự tin, mạnh mẽ kh&ocirc;ng ch&ugrave;n bước, niềm đam m&ecirc; m&atilde;nh liệt &amp; t&aacute;o bạo</li>\r\n	<li><strong>Đen Indie:&nbsp;</strong>sắc đen n&agrave;y đại diện cho t&iacute;nh độc lập, sự quyết đo&aacute;n, tố chất l&atilde;nh đạo v&agrave; sự tự tin vững v&agrave;ng.</li>\r\n	<li><strong>Trắng x&agrave; cừ:</strong>&nbsp;đại diện cho sự thời thượng, t&iacute;nh c&aacute;ch d&aacute;m nghĩ d&aacute;m l&agrave;m.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<img src=\"https://photo.techrum.vn/images/2020/06/19/2071ed6f37088ae3e.jpg\" /><br />\r\n<br />\r\nPh&iacute;m&nbsp;<strong>Enter</strong>&nbsp;ch&iacute;nh l&agrave; c&aacute;nh cửa giữa những &yacute; tưởng, kế hoạch v&agrave; thực tế. V&igrave; vậy, đội ngũ thiết kế ASUS muốn mang đến sự tự tin, phong c&aacute;ch cho người d&ugrave;ng khi đưa những &yacute; tưởng của m&igrave;nh ra với thế giới th&ocirc;ng qua phần viền neon nổi bật bao quanh viền ph&iacute;m Enter.<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/06/19/572f4fbbbaee0005c.jpg\" /><br />\r\n<br />\r\nB&ecirc;n cạnh đ&oacute;, mỗi m&aacute;y VivoBook S333/S433/S533 đều được tặng k&egrave;m 1 bộ sticker vui nhộn để người d&ugrave;ng c&oacute; thể trang tr&iacute; chiếc laptop theo phong c&aacute;ch ri&ecirc;ng của m&igrave;nh.<br />\r\n<br />\r\n<strong>PHONG C&Aacute;CH với viền mỏng NanoEdge 3 cạnh, si&ecirc;u di động</strong><br />\r\n<br />\r\nThế hệ Gen Z năng động, s&aacute;ng tạo v&agrave; lu&ocirc;n dẫn đầu xu hướng. VivoBook S13/S14/S15 vẫn đảm bảo c&aacute;c chi tiết thiết kế v&agrave; t&iacute;nh năng thiết yếu đ&aacute;p ứng được y&ecirc;u cầu về phong c&aacute;ch hiện đại trong thời đại mới.<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/06/19/697541e663c22e45a.jpg\" /><br />\r\n<br />\r\nKhung m&aacute;y (3 mặt A,C,D) được l&agrave;m từ hợp kim nh&ocirc;m cao cấp &amp; chắc chắn, bề mặt nắp m&aacute;y được l&agrave;m mượt bởi c&ocirc;ng nghệ in nano 3D v&agrave; cạnh m&aacute;y được ho&agrave;n thiện bởi c&aacute;c đường cắt kim cương tinh tế. VivoBook S13/S14/S15 vẫn l&agrave; một thiết bị si&ecirc;u di động với trọng lượng chỉ 1,2kg (S13), 1,4kg (S14) &amp; 1,8kg (S15). Độ mỏng của thiết bị được cải tiến gi&uacute;p mỏng hơn đến 12% so với thế hệ trước. Gen Z c&oacute; thể mang theo chiếc VivoBook S đến mọi nơi tr&ecirc;n h&agrave;nh tr&igrave;nh trở th&agrave;nh t&acirc;m điểm của m&igrave;nh.<br />\r\n<br />\r\nViền si&ecirc;u mỏng NanoEdge được &aacute;p dụng l&ecirc;n tr&ecirc;n 3 cạnh của m&agrave;n h&igrave;nh VivoBook S mới, ph&aacute; vỡ giới hạn của một chiếc laptop m&agrave;n h&igrave;nh viền mỏng. Nhờ vậy, VivoBook S333/S433/S533 sở hữu tỉ lệ m&agrave;n h&igrave;nh &ndash; th&acirc;n m&aacute;y l&ecirc;n đến 88%, tối ưu trải nghiệm nh&igrave;n trong một khung m&aacute;y nhỏ gọn.<br />\r\n<br />\r\n<strong>T&Agrave;I NĂNG với cấu h&igrave;nh Intel 10th Gen, SSD PICe, pin 50WHr</strong><br />\r\n<br />\r\nVivoBook S13/S14/S15 mới được trang bị cấu h&igrave;nh mạnh mẽ, sẵn s&agrave;ng đương đầu mọi thử th&aacute;ch trở th&agrave;nh t&acirc;m điểm của Gen Z, gồm: vi xử l&yacute; Intel Core thế hệ 10 v&agrave; 512GB SSD mặc định tr&ecirc;n mọi t&ugrave;y chọn cấu h&igrave;nh. Ngo&agrave;i ra c&ograve;n c&oacute; RAM l&ecirc;n đến 16GB v&agrave; t&ugrave;y chọn card đồ họa rời NVIDIA MX350 d&agrave;nh cho những c&ocirc;ng d&acirc;n Gen Z muốn bứt ph&aacute; giới hạn, dẫn đầu cuộc chơi.<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/06/19/7ffa714d4ccd1e5a1.png\" /><br />\r\n<br />\r\nNumberPad l&agrave; b&agrave;n ph&iacute;m số LED được t&iacute;ch hợp tại vị tr&iacute; b&agrave;n di chuột nhằm giải quyết vấn đề thiếu b&agrave;n ph&iacute;m số tr&ecirc;n mẫu laptop 13&rdquo; v&agrave; 14&rdquo; m&agrave; vẫn giữ nguy&ecirc;n k&iacute;ch cỡ nhỏ gọn của khung m&aacute;y. T&iacute;nh năng hiện đại n&agrave;y sẽ được trang bị lần đầu ti&ecirc;n tr&ecirc;n d&ograve;ng VivoBook S, cụ thể l&agrave; VivoBook S13 v&agrave; S14.<br />\r\n&nbsp;</p>\r\n\r\n<p><img src=\"https://photo.techrum.vn/images/2020/06/19/8337478c98e1af54b.jpg\" />​</p>\r\n\r\n<p><br />\r\nTăng cường sức mạnh di động, S333/ S433/ S533 được trang bị vi&ecirc;n pin l&ecirc;n đến 50WHr, cao hơn 20% so với thế hệ năm 2019, c&ugrave;ng c&ocirc;ng nghệ sạc nhanh 60% trong v&ograve;ng 49 ph&uacute;t. M&aacute;y được trang bị WiFi 6 v&agrave; Bluetooth 5.0 cho kết nối kh&ocirc;ng d&acirc;y nhanh hơn v&agrave; tốn &iacute;t năng lượng hơn. Cổng kết nối đầy đủ gồm USB 3.2 Gen 1, HDMI, USB 2.0, khe đọc thẻ MicroSD, jack cắm tai nghe gi&uacute;p m&aacute;y kết nối với nhiều thiết bị ngoại vi, dễ d&agrave;ng hơn trong việc tr&igrave;nh chiếu, thuyết tr&igrave;nh v&agrave; chia sẻ dữ liệu.<br />\r\n<br />\r\nVivoBook S13/S14/S15 l&agrave; người bạn đồng h&agrave;nh l&yacute; tưởng c&ugrave;ng Gen Z tr&ecirc;n chặng đường chứng minh bản th&acirc;n để trở th&agrave;nh t&acirc;m điểm. Bộ ba VivoBook S l&agrave; vật hiện hữu cho tuy&ecirc;n ng&ocirc;n c&aacute; t&iacute;nh &ndash; phong c&aacute;ch &ndash; t&agrave;i năng của thế hệ Gen Z!<br />\r\n<br />\r\n<img src=\"https://photo.techrum.vn/images/2020/06/19/Capture8882cc7d5bb700a5.jpg\" /></p>\r\n', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id_chi_tiet`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_anh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoa_don`),
  ADD KEY `id_khach_hang` (`id_khach_hang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_khach_hang`);

--
-- Chỉ mục cho bảng `quanlihieusanpham`
--
ALTER TABLE `quanlihieusanpham`
  ADD PRIMARY KEY (`id_hieu`);

--
-- Chỉ mục cho bảng `quanliloaisanpham`
--
ALTER TABLE `quanliloaisanpham`
  ADD PRIMARY KEY (`id_loai`),
  ADD KEY `id_hieu` (`id_hieu`);

--
-- Chỉ mục cho bảng `quanlisanpham`
--
ALTER TABLE `quanlisanpham`
  ADD PRIMARY KEY (`id_san_pham`),
  ADD KEY `id_hieu` (`id_hieu`),
  ADD KEY `id_loai` (`id_loai`);

--
-- Chỉ mục cho bảng `quanlitintuc`
--
ALTER TABLE `quanlitintuc`
  ADD PRIMARY KEY (`id_bai_viet`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `id_chi_tiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_anh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quanlihieusanpham`
--
ALTER TABLE `quanlihieusanpham`
  MODIFY `id_hieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `quanliloaisanpham`
--
ALTER TABLE `quanliloaisanpham`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `quanlisanpham`
--
ALTER TABLE `quanlisanpham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `quanlitintuc`
--
ALTER TABLE `quanlitintuc`
  MODIFY `id_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `chitietsanpham_ibfk_1` FOREIGN KEY (`id_san_pham`) REFERENCES `quanlisanpham` (`id_san_pham`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_khach_hang`) REFERENCES `khachhang` (`id_khach_hang`);

--
-- Các ràng buộc cho bảng `quanliloaisanpham`
--
ALTER TABLE `quanliloaisanpham`
  ADD CONSTRAINT `quanliloaisanpham_ibfk_1` FOREIGN KEY (`id_hieu`) REFERENCES `quanlihieusanpham` (`id_hieu`);

--
-- Các ràng buộc cho bảng `quanlisanpham`
--
ALTER TABLE `quanlisanpham`
  ADD CONSTRAINT `quanlisanpham_ibfk_1` FOREIGN KEY (`id_hieu`) REFERENCES `quanlihieusanpham` (`id_hieu`),
  ADD CONSTRAINT `quanlisanpham_ibfk_2` FOREIGN KEY (`id_loai`) REFERENCES `quanliloaisanpham` (`id_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
