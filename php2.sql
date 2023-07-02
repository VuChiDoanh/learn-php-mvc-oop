-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 18, 2023 lúc 05:04 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `soluong`, `user_id`, `product_id`, `invoice_id`) VALUES
(92, 3, 1, 62, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `ten`) VALUES
(1, 'Chưa phân loạii'),
(2, 'Mũ'),
(3, 'Áo'),
(4, 'Quần'),
(5, 'Giày'),
(6, 'Phụ kiện đi kèm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `ngay` datetime DEFAULT NULL,
  `final` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `invoices`
--

INSERT INTO `invoices` (`id`, `tinhtrang`, `diachi`, `sdt`, `ngay`, `final`) VALUES
(1, 'Giỏ hàng', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `xem` int(11) NOT NULL,
  `mua` int(11) NOT NULL,
  `binhluan` int(11) NOT NULL,
  `mota` longtext NOT NULL,
  `anh` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `ten`, `gia`, `sale`, `soluong`, `xem`, `mua`, `binhluan`, `mota`, `anh`, `category_id`) VALUES
(53, 'Áo Hoodiee', 350000, 20, 143, 16, 7, 0, 'Để đáp ứng nhu cầu đa dạng của khách hàng, các mẫu hoodie đang ngày càng được cách điệu, sáng tạo để trở nên phong cách hơn, hợp thời trang hơn.&#13;&#10;&#60;br&#62;&#60;br&#62;&#13;&#10;Bên cạnh kiểu dáng truyền thống, ngày nay ta có thể bắt gặp rất nhiều kiểu hoodie cách điêu.&#13;&#10;&#60;br&#62;&#60;br&#62;&#13;&#10;Một số mẫu áo hoodie cách tân phổ biến, bao gồm:&#13;&#10;&#60;br&#62;&#60;br&#62;&#13;&#10;Hoodie dáng dài&#13;&#10;&#60;br&#62;&#60;br&#62;&#13;&#10;Đây là kiểu dáng khá được các bạn nam ưa chuộng. Hoodie dáng dài không khóa không những đem lại cảm giác ấm áp, dễ chịu mà cũng rất nam tính và phong cách&#13;&#10;&#60;br&#62;&#60;br&#62;&#13;&#10;Hoodie dáng suông&#13;&#10;&#60;br&#62;&#60;br&#62;&#13;&#10;Một biến thể của hoodie dáng dài là hoodie dáng suông. Thiết kế này về cơ bản tương tự dáng dài, chỉ khác ở chỗ không có phần đai ôm.&#13;&#10;&#60;br&#62;&#60;br&#62;&#13;&#10;Những chiếc áo hoodie dài kết hợp với quần jeans khiến cho nam giới vừa lịch lãm nhưng không quá già dặn như suit.&#13;&#10;&#60;br&#62;&#60;br&#62;&#13;&#10;Một điểm trừ nhỏ đối với dáng dài là chiều cao của bạn không thể quá khiêm tốn. Nếu không tự tin với chiều cao của mình thì bạn nên lựa chọn dáng truyền thống nhé!', 'ao Hoodie-1.jpg', 1),
(54, 'Quần Jean rách', 285000, 15, 98, 4, 2, 0, 'Tên sản phẩm:  Quần jean nam rách gối màu đen trơn chất bò cao cấp co dãn 4 chiều đẹp rin trơn form dáng skinny Havado50 mẫu mới&#13;&#10; Quần jeans nam với thiết kế mới thời trang hơn, mang lại sự tự tin tối đa cho người mặc trước những người xung quanh&#13;&#10; Jean nam từ vải Denim chất bò cao cấp nên rất mềm và thoải mái khi mặc, đảm bảo sẽ không hề cảm thấy gò bó ngay cả khi di chuyển nhiều.&#60;br&#62;&#60;br&#62;&#13;&#10; Dáng quan jean nam ống côn trẻ trung ôm body tạo nên form skinny jeans nam cho người mặc túi quần lớn rất thuận tiện cho việc đựng smart phone hoặc ví cỡ bự.&#60;br&#62;&#60;br&#62;&#13;&#10; quần zin nam màu sắc chuẩn được nhuộm kỹ đến hai lần giúp hạn chế tối đa việc phai màu khi sử dụng.', '304898741_857936088911522_2610633528655028712_n.jpg', 3),
(55, 'Áo khoác da', 895000, 10, 100, 0, 0, 0, '+Khóa kéo giữa xéo, áo cổ trụ nút bấm<br><br>\r\n+ Tay có khóa kéo thao tác nhanh gọn để tăng giảm giúp bạn thoải mái hơn hoặc kín đáo khi chạy xe trời lạnh<br><br>\r\n+ hai túi kéo khóa bên hông tăng vẻ nam tính và mạnh mẽ hơn<br><br>\r\n\r\n+ Vai và hai cùi trỏ có đắp caro giúp áo trông gồ ghề bụi bặm hơn<br><br>\r\n+ Bên trong vải lót có hai túi dưới ngực, một túi trơn, môt túi kéo khóa dùng để đựng những vật quan trọng như tiền, điện thoại, giấy tờ quan trọng....\r\n<br><br>+ Line áo có đai nút bấm bản 4cm tăng giảm chiều rộng eo áo<br><br>\r\n\r\nĐặc tính áo da bò: mềm, nhẹ, Khi thời tiết lạnh các lỗ chân lông trên bề mặt da co lại giữ nhiệt trong cơ thể giúp bạn ấm dần lên.\r\n<br><br>\r\nĐặc biệt áo da nam biker đẹp da thật 100% làm từ da bò luôn bền đẹp nhất trong các loại da, tạo được form dáng cho người mặc, chất liệu lâu bền sang trọng theo thời gian', 'aoda.jpg', 3),
(56, 'Polo basic ss1 CREWZ', 80000, 0, 200, 0, 0, 0, '- Áo thun nam nữ oversize sử dụng chất vải cotton 65/35 co giãn 4 chiều. Là loại vải có đặc điểm mềm mịn, độ co giãn cao, khả năng thấm hút tốt và được dệt hoàn toàn từ sợi cây bông tự nhiên. Chất vải cotton cực kỳ thân thiện với làn da.<br>\r\n- Áo thun nam nữ form rộng cổ tròn thoải mái<br>\r\n\r\n- Áo phông unisex form rộng dễ phối đồ. Bạn có thể phối với quần jean, chân váy, … kết hợp với một đôi sneaker cho bạn tự tin xuống phố<br>\r\nHƯỚNG DẪN BẢO QUẢN ÁO PHÔNG NAM NỮ OVERSIZE VENDER Shop\r\n- Lộn trái áo thun nam nữ tay ngắn khi giặt, không giặt chung áo thun unisex trắng với quần áo tối màu. \r\n- Sử dụng xà phòng trung tính, không sử dụng xà phòng có chất tẩy mạnh cho áo thun nam nữ oversize.\r\n- Không sử dụng chất tẩy, không ngâm áo phông unisex. \r\n- Phơi ngang, không treo móc khi áo thun unisex ướt, không phơi trực tiếp dưới ánh nắng mặt trời. ', 'aopolo.png', 3),
(57, 'Áo sơ mi sọc TRIGGER SHIRT', 330000, 12, 50, 0, 0, 0, 'Áo Sơ Mi với chất liệu cotton 100% ,  giúp thấm hút mồ hôi tốt. \r\nÁo có 3 size S,M,L\r\n<br>\r\nSize S:\r\nNgang: 56cm\r\nDài: 68cm\r\nDài tay: 66cm\r\nFit từ 1m50 - 1m60, 50 - 55kg\r\n<br>\r\nSize M\r\nNgang: 58cm\r\nDài: 70cm\r\nDài tay: 68cm\r\nFit từ 1m65 - 1m75, 60 - 70kg\r\n<br>\r\nSize L\r\nNgang: 60cm\r\nDài: 72cm\r\nDài tay: 70cm\r\nFit từ 1m75 - 1m85, 70 - 85kg\r\n', 'somi.jpg', 3),
(58, 'Kính Mát Chống Tia UV400 Cho Nam Nữ', 450000, 30, 130, 0, 0, 0, 'Tất cả các sản phẩm có sẵn trong kho.\r\nThời gian giao hàng: Thường Giao hàng trong 24H\r\nChất liệu: Khung nhựa Tròng kính Polycarbonate Lớp phủ bảo vệ tia cực tím\r\nBảo VỆ UV400 CHO ĐÔI MẮT CỦA BẠN - Tròng kính chống chói có thể chặn 100% bức xạ cả tia UVA và UVB. Kính râm được xếp hạng UV400 rất cần thiết để lọc ánh sáng chói phản xạ ánh sáng mặt trời và bảo vệ đôi mắt của bạn chống lại tác hại lâu dài của tia UV khi bạn ra ngoài.\r\nChất LIỆU CAO CẤP - Kính râm tròn sành điệu này được làm bằng gọng nhựa cao cấp, tròng kính UV400, các chi tiết đều đảm bảo cho bạn thời gian sử dụng lâu dài. Chúng có sẵn cho cả nam và nữ và phù hợp với mọi điều kiện khí hậu và thời tiết.\r\nPerfect all ROUNDER - Những chiếc kính râm này là sự lựa chọn hoàn hảo cho các hoạt động và thể thao ngoài trời như lái xe, mua sắm, du lịch, đi bộ đường dài và thích hợp làm phụ kiện thời trang cao cấp và đeo hàng ngày quanh năm.', 'ao Vest-4.jpg', 6),
(59, 'Áo sơ mi trắng hàn quốc MEMOTOP', 230000, 5, 39, 2, 1, 0, 'ÁO SƠ MI TRẮNG NAM lụa mát che nút hàn quốc MM03\r\n\r\nÁO SƠ MI NAM DÀI TAY \r\n\r\nSƠ MI NAM FORM RỘNG\r\n\r\n♥️ Kích thước: M, L, XL, XXL cho chiều cao từ 1m5 - 1m87 nặng từ 45kg - 90kg, mẫu áo này vẫn phù hợp cho những bạn Bigsize, áo may kiểu Oversize nhe, chi tiết cách chọn size trên Hình 3 của SP nha!\r\n\r\n♥️ Chất liệu: cotton lụa mát, dễ giặt, bền màu, không nhăn, thấm hút mồ hôi tốt\r\n\r\n♥️ Màu sắc có 5 màu : trắng, đen, xanh đen, đỏ đô, xanh dương nhạt\r\n\r\n♥️ Style: Korea \r\n\r\nÁo sơ mi nam là một items không thể thiếu trong tủ đồ của phái nam, có rất nhiều dáng áo và màu sắc khác nhau tạo nên vẻ đẹp và khí chất của người đàn ông. Bạn đã biết cách chọn áo sơ mi nam tay dài sao cho phù hợp với mình chưa nào? \r\n\r\n⚛  Chọn áo sơ mi theo kiểu dáng:\r\n\r\n - Áo sơ mi nam Form rộng - được may rộng nhiều so với vóc dáng cơ thể. Xu hướng trẻ hiện nay cực thích kiểu form áo sơ mi nam hàn quốc này vì dù mập ốm gì cũng không kén “giấu nhẹm”  khuyết điểm béo bụng, mix với quần Baggy, quần túi hộp, ống rộng tạo phong cách Hàn quốc rất trẻ trung, năng động\r\n\r\n- Áo sơ mi nam Ôm sát - Thiết kế áo bó sát cơ thể những anh chàng có body đẹp muốn khoe khéo thì mặc slim fit là một lợi thế. Nhưng nó khá kén người mặc, nếu bạn có body gầy quá hoặc béo quá sẽ không hợp\r\n\r\n⚛  Chọn áo theo từng hoàn cảnh:\r\n\r\n- Áo sơ mi nam Công sở thì những chiếc áo sơ mi trắng nam, sơ mi trắng là phổ biến nhất, áo có sọc kẻ chìm hay kẻ ca rô cũng đều rất phù hợp với môi trường công sở \r\n\r\nĐể phối đồ bạn mix với cà vạt cùng tông màu áo hoặc quần. Áo sơ mi trơn thì không nên chọn cà vạt quá đơn điệu. Tại Shop cũng có sẵn Cà vạt cho bạn lựa chọn, mời bạn vào shop Xem thêm nhé!\r\n\r\n- Áo sơ mi cho nam dự tiệc - đám cưới thiết kế trẻ trung,  với gam màu sáng nên phối cùng quần jean và kaki để sang trọng, lịch sự và hiện đại.\r\n\r\n- Áo sơ mi đi biển - hội họp bạn bè các chàng trai có thể chọn cho mình những chiếc áo họa tiết hoa lá rất phù hợp khi đi biển. Mix cùng quần short và giày sneaker trắng trẻ trung năng động. \r\n\r\nĐi chơi xuống phố cafe thì những chiếc áo sơ mi nam oversize với hoạ tiết trẻ trung. Chắc chắn sẽ tạo nên một outfit nổi bật cuốn hút tạo cho bạn phong cách riêng.', 'somi2.jpeg', 3),
(60, 'Jean nam Baggy phom suông rộng', 320000, 5, 70, 0, 0, 0, '- Có phải bạn đang muốn tìm cho mình một chiếc quần jean baggy cao cấp mang style hàn quốc? \r\nMay mắn là bạn đã tìm thấy chúng tôi.\r\n-  Chiếc quần jean baggy dành cho  nam này cửa hàng chúng tôi bán khoảng 600 chiếc mỗi tháng.\r\nĐã bán hơn 6.000 chiếc chỉ tính riêng trên hệ thống của Shopee Việt Nam, chưa kể đến những kênh bán khác!\r\n-  Bạn cũng sẽ là một trong số những người sẽ sở hữu chiếc quần jean baggy mang phong cách hàn quốc này.\r\nBởi vì đây là một chiếc quần jean mà cực kỳ dễ phối đồ từ áo thun, hoodie, áo khoác..cho đến các loại sneakers, boots..\r\n\r\n- CHẤT LƯỢNG: Chất vải jean CHÍNH PHẨM gồm 95% cotton ( thấm hút, vải mềm) và 5% spandex ( độ co dãn).\r\n- GIÁ CẢ : Chúng tôi trực tiếp sản xuất với số lượng lớn. Nên so với các quần cùng chất lượng giá cả của chiếc quần jean baggy thì giá tốt nhất cho bạn hiện tại.', 'quanbo.jpg', 4),
(61, 'Quần short nam Gman chất đũi', 190000, 10, 59, 2, 1, 0, ' Mỗi khi mùa hè ghé qua, items quần đũi  luôn được các chàng trai ưu ái trong tủ đồ của mình. Nếu như những chiếc quần dài làm bạn cảm thấy bí bức, khó chịu thì những chiếc quần sooc đũi (quần sọc) chắc chắn sẽ mang đến sự thoải mái, dễ chịu. Chất liệu vải đũi (linen) đẹp, mềm, mịn, khả năng thấm hút mồ hôi tốt luôn tạo cảm giác mát mẻ, thoải mái khi mặc.. Chất vải đũi tuy mộc mạc, tự nhiên nhưng không đơn điệu mang đến cho nam giới phong cách thời trang lịch lãm không quá cầu kì. Từng đường may tinh tế, chỉn chu, màu sắc đa dạng, tươi mát chắc chắn sẽ làm vừa lòng những chàng trai khó tính  nhất. Bạn có thể diện quần short đũi nam đi chơi, đi dạo, đi biển,...đều NỔI BẬT VÀ PHONG CÁCH. Hãy SỞ HỮU NGAY MỘT CHIẾC QUẦN ĐŨI NAM về tủ đồ của bạn nhé !\r\n', 'aopolo2.jpg', 4),
(62, 'Giày nam cao cấp cổ lửng da bò Nappa', 1200000, 7, 20, 0, 0, 0, 'Chi tiết Giày da nam cổ lửng da bò nappa cao cấp màu đen CL1 - MADEM\r\n\r\n1. CHẤT LIỆU: Da bò nappa\r\nDa bò nappa là loại da được thuộc từ da của bò non. Vì thế da Nappa mềm, dẻo, dai, đàn hồi hơn các loại da khác và độ bền rất cao. Da bò nappa là loại da bò thường được dùng cho các sản phẩm cao cấp\r\n\r\n2. ĐẶC ĐIỂM:\r\n+ Kiểu dáng: Giày tây nam cổ lửng có dây buộc, khóa kéo\r\n+ Màu sắc: Đen\r\n+ Size: 38; 39; 40; 41; 42; 43\r\n\r\n3. ĐẾ GIÀY\r\nĐế đúc cao su nguyên khối chắc chắn, bền bỉ độ bền lên tới 5 năm.\r\nVân đế chống trượt không mài mòn\r\nChiều cao đế: 3cm tôn giáng, tạo nét nam tính\r\n\r\nBẢO HÀNH\r\n- Bảo hành 12 tháng về da do lỗi sản xuất: da bị bong tróc, nổ tự nhiên … \r\n- Thời hạn bảo hành được tính từ ngày mua hàng(được quản lý trên hệ thống của shop)\r\n\r\n\r\nKHÔNG ĐƯỢC BẢO HÀNH:\r\nNhững thiệt hại trong quá trình sử dụng: sản phẩm bị rách, trầy xước do người sử dụng (va quệt, rạch, co kéo…), bị hao mòn hoặc cháy trong quá trình sử dụng, hoặc do môi trường gây ra…', 'sg-11134201-22110-1kq1z9lqm3jv92.jpg', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `ten`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `tinhtrang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `ten`, `matkhau`, `email`, `sdt`, `diachi`, `ngaysinh`, `avatar`, `role_id`, `tinhtrang`) VALUES
(1, 'admin', '123456', 'admin123@gmail.com', '03333222111', 'Ha Noi', '0000-00-00', 'macdinh.png', 1, 'active'),
(33, 'vuchidoanh', '123456789', 'vuchidoanh@gmail.com', '0357028784', '', '2003-02-12', 'macdinh.png', 2, 'active'),
(34, 'thaiquoctuan', '123456789', 'thaiquoctuan@gmail.com', '0357028785', 'Số 9- Lê Đức Thọ-Mỹ Đình-Hà Nội', '2022-12-09', 'macdinh.png', 2, 'active');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_taikhoan_giohang` (`user_id`),
  ADD KEY `FK_mathang_giohang` (`product_id`),
  ADD KEY `FK_donhang_giohang` (`invoice_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_loaihang_mathang` (`category_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_quyenhan_taikhoan` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `FK_donhang_giohang` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_mathang_giohang` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_taikhoan_giohang` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_loaihang_mathang` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_roles_users` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
