-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2021 lúc 04:44 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bigshoes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` varchar(50) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `noi_dung` varchar(50) NOT NULL,
  `ngay_bl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `mo_ta` varchar(500) NOT NULL,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `hinh`, `don_gia`, `giam_gia`, `mo_ta`, `ma_loai`) VALUES
(64, 'Cà phê đen đá', 'cafedenda.jpg', 32000, 0, 'Không ngọt ngào như Bạc sỉu hay Cà phê sữa, Cà phê đen mang trong mình phong vị trầm lắng, thi vị hơn. Người ta thường phải ngồi rất lâu mới cảm nhận được hết hương thơm ngào ngạt, phảng phất mùi cacao và cái đắng mượt mà trôi tuột xuống vòm họng.', 28),
(65, 'Cà phê đen nóng', 'cafedennong.jpg', 35000, 0, 'Không ngọt ngào như Bạc sỉu hay Cà phê sữa, Cà phê đen mang trong mình phong vị trầm lắng, thi vị hơn. Người ta thường phải ngồi rất lâu mới cảm nhận được hết hương thơm ngào ngạt, phảng phất mùi cacao và cái đắng mượt mà trôi tuột xuống vòm họng.', 28),
(66, 'Cà phê sữa đá', 'caphesuada.jpg', 32000, 0, 'Cà phê được pha phin truyền thống kết hợp với sữa đặc tạo nên hương vị đậm đà, hài hòa giữa vị ngọt đầu lưỡi và vị đắng thanh thoát nơi hậu vị.', 28),
(67, 'Cà phê sữa nóng', 'cafesuanong.jpg', 35000, 0, 'Cà phê được pha phin truyền thống kết hợp với sữa đặc tạo nên hương vị đậm đà, hài hòa giữa vị ngọt đầu lưỡi và vị đắng thanh thoát nơi hậu vị.', 28),
(68, 'Caramel Macchiato Đá', 'caramel-macchiato.jpg', 50000, 1, 'Caramel Macchiato sẽ mang đến một sự ngạc nhiên thú vị khi vị thơm béo của bọt sữa, sữa tươi, vị đắng thanh thoát của cà phê Espresso hảo hạng và vị ngọt đậm của sốt caramel được gói gọn trong một tách cà phê.', 28),
(69, 'Caramel Macchiato Nóng', 'caramelmacchiatonong.jpg', 50000, 1, 'Caramel Macchiato sẽ mang đến một sự ngạc nhiên thú vị khi vị thơm béo của bọt sữa, sữa tươi, vị đắng thanh thoát của cà phê Espresso hảo hạng và vị ngọt đậm của sốt caramel được gói gọn trong một tách cà phê.', 28),
(70, 'Latte Đá', 'latte-da.jpg', 50000, 1, 'Một sự kết hợp tinh tế giữa vị đắng cà phê Espresso nguyên chất hòa quyện cùng vị sữa nóng ngọt ngào, bên trên là một lớp kem mỏng nhẹ tạo nên một tách cà phê hoàn hảo về hương vị lẫn nhãn quan.', 28),
(71, 'Latte Nóng', 'latte-nong.jpg', 50000, 1, 'Một sự kết hợp tinh tế giữa vị đắng cà phê Espresso nguyên chất hòa quyện cùng vị sữa nóng ngọt ngào, bên trên là một lớp kem mỏng nhẹ tạo nên một tách cà phê hoàn hảo về hương vị lẫn nhãn quan.', 28),
(72, 'Americano Đá', 'americano-da.jpg', 40000, 1, 'Americano được pha chế bằng cách pha thêm nước với tỷ lệ nhất định vào tách cà phê Espresso, từ đó mang lại hương vị nhẹ nhàng và giữ trọn được mùi hương cà phê đặc trưng.', 28),
(73, 'Americano Nóng', 'americano-nong.jpg', 40000, 1, 'Americano được pha chế bằng cách pha thêm nước với tỷ lệ nhất định vào tách cà phê Espresso, từ đó mang lại hương vị nhẹ nhàng và giữ trọn được mùi hương cà phê đặc trưng.', 28),
(74, 'Cappuccino Đá', 'Capuchino-da.jpg', 50000, 0, 'Capuchino là thức uống hòa quyện giữa hương thơm của sữa, vị béo của bọt kem cùng vị đậm đà từ cà phê Espresso. Tất cả tạo nên một hương vị đặc biệt, một chút nhẹ nhàng, trầm lắng và tinh tế.', 28),
(75, 'Cappuccino Nóng', 'cappuccino_nong.jpg', 50000, 1, 'Capuchino là thức uống hòa quyện giữa hương thơm của sữa, vị béo của bọt kem cùng vị đậm đà từ cà phê Espresso. Tất cả tạo nên một hương vị đặc biệt, một chút nhẹ nhàng, trầm lắng và tinh tế.', 28),
(76, 'Espresso Đá', 'espresso_Da.jpg', 45000, 0, 'Một tách Espresso nguyên bản được bắt đầu bởi những hạt Arabica chất lượng, phối trộn với tỉ lệ cân đối hạt Robusta, cho ra vị ngọt caramel, vị chua dịu và sánh đặc.', 28),
(77, 'Espresso Nóng', 'espresso_Nong.jpg', 40000, 0, 'Một tách Espresso nguyên bản được bắt đầu bởi những hạt Arabica chất lượng, phối trộn với tỉ lệ cân đối hạt Robusta, cho ra vị ngọt caramel, vị chua dịu và sánh đặc.', 28),
(78, 'Cold Brew Sữa Tươi', 'cold-brew-sua-tuoi.jpg', 50000, 2, 'Thanh mát và cân bằng với hương vị cà phê nguyên bản 100% Arabica Cầu Đất cùng sữa tươi thơm béo cho từng ngụm tròn vị, hấp dẫn.', 28),
(79, 'Cold Brew Truyền Thống', 'classic-cold-brew.jpg', 45000, 0, 'Tại The Staff House, Cold Brew được ủ và phục vụ mỗi ngày từ 100% hạt Arabica Cầu Đất với hương gỗ thông, hạt dẻ, nốt sô-cô-la đặc trưng, thoang thoảng hương khói nhẹ giúp Cold Brew giữ nguyên vị tươi mới.', 28),
(80, 'Cold Brew Phúc Bồn Tử', 'cold-brew-pbt.jpg', 50000, 1, 'Vị chua ngọt của trái phúc bồn tử, làm dậy lên hương vị trái cây tự nhiên vốn sẵn có trong hạt cà phê, hòa quyện thêm vị đăng đắng, ngọt dịu nhẹ nhàng của Cold Brew 100% hạt Arabica Cầu Đất để mang đến một cách thưởng thức cà phê hoàn toàn mới, vừa thơm lừng hương cà phê quen thuộc, vừa nhẹ nhàng và thanh mát bởi hương trái cây đầy thú vị.', 28),
(81, 'Cà Phê Đá Xay-Lạnh', 'caphedaxay.jpg', 59000, 0, 'Một phiên bản \"upgrade\" từ ly cà phê sữa quen thuộc, nhưng lại tỉnh táo và tươi mát hơn bởi lớp đá xay đi kèm. Nhấp 1 ngụm cà phê đá xay là thấy đã, ngụm thứ hai thêm tỉnh táo và cứ thế lôi cuốn bạn đến ngụm cuối cùng.', 28),
(82, 'Mocha Đá', 'mocha-da.jpg', 50000, 0, 'Loại cà phê được tạo nên từ sự kết hợp hoàn hảo của vị đắng đậm đà của Espresso và sốt sô-cô-la ngọt ngào mang tới hương vị đầy lôi cuốn, đánh thức mọi giác quan nên đây chính là thức uống ưa thích của phụ nữ và giới trẻ.', 28),
(83, 'Mocha Nóng', 'mochanong.jpg', 50000, 0, 'Loại cà phê được tạo nên từ sự kết hợp hoàn hảo của vị đắng đậm đà của Espresso và sốt sô-cô-la ngọt ngào mang tới hương vị đầy lôi cuốn, đánh thức mọi giác quan nên đây chính là thức uống ưa thích của phụ nữ và giới trẻ.', 28),
(84, 'Trà Đào Cam Sả Chai Fresh 500ML', 'Bottle_TraDao.jpg', 109000, 1, 'Với phiên bản chai fresh 500ml, thức uống \"best seller\" đỉnh cao mang một diện mạo tươi mới, tiện lợi, phù hợp với bình thường mới và vẫn giữ nguyên vị thanh ngọt của đào, vị chua dịu của cam vàng nguyên vỏ và vị trà đen thơm lừng ly Trà đào cam sả nguyên bản. *Sản phẩm dùng ngon nhất trong ngày. *Sản phẩm mặc định mức đường và không đá.', 29),
(85, 'Trà Đào Cam Sả - Đá', 'tra-dao-cam-xa_da.jpg', 45000, 0, 'Vị thanh ngọt của đào, vị chua dịu của Cam Vàng nguyên vỏ, vị chát của trà đen tươi được ủ mới mỗi 4 tiếng, cùng hương thơm nồng đặc trưng của sả chính là điểm sáng làm nên sức hấp dẫn của thức uống này.', 29),
(86, 'Trà Đào Cam Sả - Nóng', 'tdcs-nong.jpg', 52000, 0, 'Vị thanh ngọt của đào, vị chua dịu của Cam Vàng nguyên vỏ, vị chát của trà đen tươi được ủ mới mỗi 4 tiếng, cùng hương thơm nồng đặc trưng của sả chính là điểm sáng làm nên sức hấp dẫn của thức uống này.', 29),
(87, 'Trà Hạt Sen - Đá', 'tra-sen_da.jpg', 45000, 0, 'Nền trà oolong hảo hạng kết hợp cùng hạt sen tươi, bùi bùi và lớp foam cheese béo ngậy. Trà hạt sen là thức uống thanh mát, nhẹ nhàng phù hợp cho cả buổi sáng và chiều tối.', 29),
(88, 'Trà Hạt Sen - Nóng', 'tra-sen-nong_.jpg', 52000, 1, 'Nền trà oolong hảo hạng kết hợp cùng hạt sen tươi, bùi bùi thơm ngon. Trà hạt sen là thức uống thanh mát, nhẹ nhàng phù hợp cho cả buổi sáng và chiều tối.', 29),
(89, 'Trà Phúc Bồn Tử', 'tra-pbt.jpg', 50000, 0, 'Quả Phúc Bồn Tử hoàn toàn tự nhiên, được các barista Nhà kết hợp một cách đầy tinh tế cùng trà Oolong và cam vàng tạo ra một dư vị hoàn toàn tươi mới. Mát lạnh ngay từ ngụm đầu tiên, đọng lại cuối cùng là hương vị trà thơm lừng và vị ngọt thanh, chua dịu khó quên của trái phúc bồn tử.', 29),
(90, 'Trà Đen Macchiato', 'tra-den-matchiato.jpg', 50000, 1, 'Trà đen được ủ mới mỗi ngày, giữ nguyên được vị chát mạnh mẽ đặc trưng của lá trà, phủ bên trên là lớp Macchiato \"homemade\" bồng bềnh quyến rũ vị phô mai mặn mặn mà béo béo.', 29),
(91, 'Hồng Trà Sữa Trân Châu', 'hong-tra-sua-tran-chau.jpg', 55000, 1, 'Thêm chút ngọt ngào cho ngày mới với hồng trà nguyên lá, sữa thơm ngậy được cân chỉnh với tỉ lệ hoàn hảo, cùng trân châu trắng dai giòn có sẵn để bạn tận hưởng từng ngụm trà sữa ngọt ngào thơm ngậy thiệt đã.', 30),
(92, 'Trà sữa Oolong Nướng Trân Châu', 'olong-nuong-tran-chau.jpg', 55000, 2, 'Hương vị chân ái đúng gu đậm đà với trà oolong được “sao” (nướng) lâu hơn cho hương vị đậm đà, hòa quyện với sữa thơm béo mang đến cảm giác mát lạnh, lưu luyến vị trà sữa đậm đà nơi vòm họng.', 30),
(93, 'Trà Sữa Mắc Ca Trân Châu', 'tra-sua-mac-ca_377522.jpg', 50000, 0, 'Mỗi ngày với The Coffee House sẽ là điều tươi mới hơn với sữa hạt mắc ca thơm ngon, bổ dưỡng quyện cùng nền trà oolong cho vị cân bằng, ngọt dịu đi kèm cùng Trân châu trắng giòn dai mang lại cảm giác “đã” trong từng ngụm trà sữa.', 30),
(94, 'Hồng Trà Latte Macchiato', 'hong-tra-latte.jpg', 55000, 1, 'Sự kết hợp hoàn hảo bởi hồng trà dịu nhẹ và sữa tươi, nhấn nhá thêm lớp macchiato trứ danh của The Coffee House mang đến cho bạn hương vị trà sữa đúng gu tinh tế và healthy.', 30),
(95, 'Cookie Đá Xay', 'Chocolate-ice-blended.jpg', 59000, 1, 'Những mẩu bánh cookies giòn rụm kết hợp ăn ý với sữa tươi, kem tươi béo ngọt và đá xay mát lành, đem đến cảm giác lạ miệng gây thích thú và không thể cưỡng lại. Một món uống phá cách dễ thương đầy mê hoặc.', 33),
(96, 'Chocolate Đá Xay', 'Chocola_da_xay.jpg', 59000, 0, 'Những mẩu bánh cookies giòn rụm kết hợp ăn ý với sữa tươi, kem tươi béo ngọt và đá xay mát lành, đem đến cảm giác lạ miệng gây thích thú và không thể cưỡng lại. Một món uống phá cách dễ thương đầy mê hoặc.', 33),
(97, 'Phúc Bồn Tử Cam Đá Xay', 'cam-pbt-da-xay.jpg', 59000, 0, 'Tê tái ngay đầu lưỡi bởi sự mát lạnh của đá xay. Hòa quyện thêm hương vị chua chua, ngọt ngọt từ cam tươi và phúc bồn tử 100% tự nhiên, cho ra một hương vị thanh mát, kích thích vị giác đầy thú vị ngay từ lần đầu thưởng thức.', 33),
(98, 'Chanh Sả Đá Xay', 'Chanh-sa-da-xay.jpg', 49000, 0, 'Sự kết hợp hài hoà giữa Chanh & sả - những nguyên liệu mộc mạc rất đỗi quen thuộc cho ra đời một thức uống thanh mát, vị chua chua ngọt ngọt giải nhiệt lại tốt cho sức khỏe.', 33),
(99, 'Đào Việt Quất Đá Xay', 'DaoVietQuat.jpg', 59000, 0, 'Vị đào quen thuộc, được khoác lên mình dáng vẻ thanh mát hơn khi kết hợp với mứt berry và lớp kem ngọt béo ngậy, cho hương vị kích thích vị giác đầy lôi cuốn và khoan khoái ngay từ ngụm đầu tiên.', 33),
(100, 'Matcha Đá Xay', 'matchadaxay.jpg', 59000, 1, 'Matcha thanh, nhẫn, và đắng nhẹ được nhân đôi sảng khoái khi uống lạnh. Nhấn nhá thêm những nét bùi béo của kem và sữa. Gây thương nhớ vô cùng!', 33),
(101, 'Yogurt Dưa Lưới phát tài', 'tra-dua-luoi.jpg', 59000, 0, 'Vị yogurt chua ngọt, mát lạnh tái tê, thêm topping dưa lưới vàng tươi, thơm lừng, vui miệng. Thật khó để không yêu ngay từ ngụm đầu tiên.', 33),
(102, 'Sinh Tố Việt Quất', 'sinh-to-viet-quoc.jpg', 59000, 0, 'Mứt Việt Quất chua thanh, ngòn ngọt, phối hợp nhịp nhàng với dòng sữa chua bổ dưỡng. Là món sinh tố thơm ngon mà cả đầu lưỡi và làn da đều thích.', 33),
(103, 'Chocolate Nóng', 'chocolatenong.jpg', 59000, 0, 'Bột chocolate nguyên chất hoà cùng sữa tươi béo ngậy. Vị ngọt tự nhiên, không gắt cổ, để lại một chút đắng nhẹ, cay cay trên đầu lưỡi.', 33),
(104, 'Cà Phê Sữa Đá Hòa Tan', 'cpsd-3in1.jpg', 44000, 4, 'Thật dễ dàng để bắt đầu ngày mới với tách cà phê sữa đá sóng sánh, thơm ngon như cà phê pha phin. Vị đắng thanh của cà phê hoà quyện với vị ngọt béo của sữa, giúp bạn luôn tỉnh táo và hứng khởi cho ngày làm việc thật hiệu quả.', 31),
(105, 'Combo 3 Hộp Cà Phê Sữa Đá Hòa Tan', 'combo-3cfsd.jpg', 119000, 5, 'Thật dễ dàng để bắt đầu ngày mới với tách cà phê sữa đá sóng sánh, thơm ngon như cà phê pha phin. Vị đắng thanh của cà phê hoà quyện với vị ngọt béo của sữa, giúp bạn luôn tỉnh táo và hứng khởi cho ngày làm việc thật hiệu quả.', 31),
(106, 'Thùng 24 Lon Cà Phê Sữa Đá', '24-lon-cpsd_225680.jpg', 336000, 5, 'Với thiết kế lon cao trẻ trung, hiện đại và tiện lợi, Cà phê sữa đá lon thơm ngon đậm vị của The Coffee House sẽ đồng hành cùng nhịp sống sôi nổi của tuổi trẻ và giúp bạn có được một ngày làm việc đầy hứng khởi.', 31),
(107, 'Cà Phê Peak Flavor Hương Thơm Đỉnh Cao (350G)', 'peak-plavor.jpg', 90000, 0, 'Được rang dưới nhiệt độ vàng, Cà phê Peak Flavor - Hương thơm đỉnh cao lưu giữ trọn vẹn hương thơm tinh tế đặc trưng của cà phê Robusta Đăk Nông và Arabica Cầu Đất. Với sự hòa trộn nhiều cung bậc giữa hương và vị sẽ mang đến cho bạn một ngày mới tràn đầy cảm hứng.', 31),
(108, 'Cà Phê Rich Finish Gu Đậm Tinh Tế (350G)', 'rich-finish.jpg', 90000, 0, 'The Staff House hiểu rằng ly cà phê ngon phải đậm đà, rõ vị từ cái chạm đầu tiên đến hậu vị vương vấn. Cà phê Rich Finish mang đến những ly cà phê đậm, thơm, hương vị tinh tế giúp bạn bắt đầu ngày mới đầy năng lượng.', 31),
(109, 'Ly inox ống hút đen nhám', 'Binh-inox-ong-hut-den-nham.jpg', 280000, 5, 'Màu đen ngày nào cũng được khen- Chiếc ly inbox kèm ống hút mang sắc đen ngầu này sẽ là người bạn đồng hành may mắn mỗi ngày bên bạn, nước ngon hơn, nhiều cảm hứng hơn. Dung tích: 500 ml Chất liệu: Inox, nhựa', 32),
(110, 'Ly Inox Ống Hút Xanh Biển', 'Binh-inox-ong-hut-xanh-bien.jpg', 280000, 5, 'Màu xanh \"chốt\" gì cũng nhanh - Chiếc ly inbox kèm ống hút mang sắc xanh này sẽ là người bạn đồng hành may mắn mỗi ngày bên bạn, nước ngon hơn, nhiều cảm hứng hơn. Dung tích: 500 ml Chất liệu: Inox, nhựa', 32),
(111, 'Ly Inox Ống Hút Hồng Xanh', 'Binh-inox-ong-hut-xanh-hong.jpg', 280000, 5, 'Màu hồng xanh may mắn tới nhanh - Chiếc ly inbox kèm ống hút mang sắc xanh này sẽ là người bạn đồng hành may mắn mỗi ngày bên bạn, nước ngon hơn, nhiều cảm hứng hơn. Dung tích: 500 ml Chất liệu: Inox, nhựa', 32),
(112, 'Ly Farm to Cup (Cao)', 'Ly-Farm-to-cup-cao.jpg', 150000, 2, 'Lấy cảm hứng từ vùng đất cà phê Việt Nam, ly sứ Farm To Cup sẽ cho bạn trải nghiệm đầy cảm hứng với món yêu thích tại nhà, tại nơi làm việc mỗi ngày. Dung tích ly: 400ml Thành phần: Cao lanh, đất sét, tráng thạch, men màu.', 32),
(113, 'Ly Farm to Cup (Thấp)', 'Ly-Farm-to-cup-thap.jpg', 120000, 2, 'Lấy cảm hứng từ vùng đất cà phê Việt Nam, ly sứ Farm To Cup sẽ cho bạn trải nghiệm đầy cảm hứng với món yêu thích tại nhà, tại nơi làm việc mỗi ngày. Dung tích ly: 300ml Thành phần: Cao lanh, đất sét, tráng thạch, men màu.', 32);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ngay_mua` varchar(20) NOT NULL,
  `ghi_chu` varchar(50) NOT NULL,
  `tinh_trang` varchar(20) NOT NULL DEFAULT '0',
  `ma_kh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hd` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `vai_tro` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ho_ten`, `mat_khau`, `email`, `dia_chi`, `vai_tro`) VALUES
('admin', 'Duy', '123123', 'truongduy0412bku@gmail.com', 'Hồ Chí Minh', 1),
('pikachu', 'Piiiiiiiiiiii', '123123', 'pi@gmail.com', 'Đà Nẵng', 0),
('thy', 'Trương Anh Thy', '123123', 'thy@gmail.com', 'Vũng Tàu', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(28, 'Cà phê'),
(29, 'Trà trái cây'),
(30, 'Trà sữa'),
(31, 'Thưởng thức tại nhà'),
(32, 'Bộ sưu tập quà tặng'),
(33, 'Đá xay-Choco-Matcha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `thanh_vien` varchar(100) NOT NULL COMMENT 'thành viên thanh toán',
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `thanh_vien`, `money`, `note`, `vnp_response_code`, `code_vnpay`, `code_bank`, `time`) VALUES
(1, '742874161', 'abc', 100000, 'chinh chuyển khoản', '00', '13401455', 'NCB', '2020-10-10 01:00:00'),
(2, '608324672', 'abc', 1000000, 'test chuyển khoản', '00', '13401811', 'NCB', '2020-10-11 21:00:00'),
(3, '1134065293', 'CT2', 150000, 'học phí', '00', '13407163', 'NCB', '2020-10-22 23:00:00'),
(4, '596509313', 'CT2', 5000000, 'học phí', '00', '13407176', 'NCB', '2020-10-23 00:00:00'),
(5, '70267166', 'CT2', 5000000, 'học phí', '00', '13407178', 'NCB', '2020-10-23 00:00:00'),
(6, '1672349048', 'CT1', 150000, 'học phí', '00', '13407729', 'NCB', '2020-10-23 21:00:00'),
(7, '106', '', 2070000, 'Noi dung thanh toan', '00', '13563934', 'NCB', '2021-08-13 21:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_hd` (`ma_hd`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_3` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
