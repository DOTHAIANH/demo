-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 06, 2022 lúc 08:54 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vietbook`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chat`
--

INSERT INTO `chat` (`id`, `messages`, `response`) VALUES
(0, 'Hello', 'North Hills xin chào!!'),
(0, 'Phí ship bao nhiêu', '10.000 bạn nhé'),
(1, 'Hello', 'North Hills chào bạn'),
(2, 'Phí ship', '10.000 bạn nhé'),
(3, 'Tôi muốn tư vấn', 'Bạn muốn tư vấn gì ạ'),
(4, 'Mua sách làm sao', 'Bạn đặt hàng trên web nhé hoặc đến 12 Nguyễn Văn Bảo mua hàng trực tiếp ạ'),
(5, 'Thanh toán online được không', 'Được bạn nhé'),
(6, 'Giao hàng bao lâu', 'Tùy địa điểm bạn nhé'),
(7, 'Sách tôi muốn mua không có thì phải làm sao?', 'Bạn vô Wishlist nhập tên sách muốn mua, North Hills sẽ giúp bạn mua sách nhé!'),
(0, '', ''),
(0, 'Muốn đặt sách thì phải làm sao?', 'Khi khách hàng muốn đặt sách thì phải có tài khoản đăng nhập →   chọn sách muốn mua →  thêm vào giỏ hàng → chọn đặt hàng \r\n'),
(0, 'Tặng sách cho người khác thì phải làm sao?', 'Khi khách hàng muốn gửi tặng sách cho người khác thì phải có tài khoản đăng nhập →   chọn sách muốn mua →  thêm vào giỏ hàng → chọn gửi tặng → nhập thông người được gửi tặng'),
(0, 'Khi đặt hàng thành công thì có thể thanh toán bằng cách nào?', '- Thanh toán khi nhận hàng\r\n- Thanh toán qua VNPAY'),
(0, 'Có thể thay đổi số lượng khi đã đặt hàng thành công không?', 'Có bạn nhé với điều kiện đơn hàng của bạn đang ở trạng thái chờ duyệt!!'),
(11, 'Muốn hủy đơn đặt hàng thì phải làm như thể nào?', 'Khi quý khách đặt hàng thành công đơn hàng sẽ ở trạng thái chờ duyệt lúc đó bạn có thể hủy đơn hàng nếu muốn.'),
(10, 'Muốn hoàn trả hàng thì phải làm sao?', '1.Thời gian hoàn trả là trong vòng 3 ngày kể từ khi nhận hàng.\r\n2.Lý do trả hàng.\r\n3. Bạn phải cung cấp bằng chứng (video mở hàng) khi yêu cầu trả hàng.\r\n4. Bạn có thể liên hệ trực tiếp nhà sách để hỗ trợ việc trả hàng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `mactdh` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `masach` int(111) NOT NULL,
  `soluongdat` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`mactdh`, `madh`, `masach`, `soluongdat`, `thanhtien`) VALUES
(10, 33, 64, 1, 124000),
(12, 35, 116, 1, 83000),
(13, 36, 73, 1, 43000),
(14, 37, 118, 1, 64000),
(15, 38, 76, 1, 93000),
(16, 39, 43, 4, 748000),
(17, 40, 28, 4, 160000),
(18, 41, 36, 1, 69000),
(19, 42, 3, 1, 89000),
(20, 43, 98, 1, 198000),
(21, 44, 98, 1, 198000),
(22, 44, 90, 1, 112000),
(24, 46, 1, 3, 237000),
(25, 47, 1, 5, 395000),
(26, 48, 5, 3, 231000),
(28, 50, 13, 1, 52000),
(29, 51, 47, 3, 90000),
(30, 51, 29, 3, 90000),
(32, 53, 5, 2, 154000),
(33, 54, 22, 1, 72000),
(34, 55, 58, 1, 172000),
(47, 76, 1, 4, 288000),
(48, 77, 51, 3, 240000),
(49, 78, 107, 3, 108000),
(50, 79, 100, 1, 72000),
(51, 80, 98, 1, 198000),
(52, 81, 35, 4, 396000),
(53, 82, 89, 1, 51000),
(56, 85, 122, 1, 52000),
(57, 86, 47, 1, 30000),
(58, 87, 11, 1, 60000),
(59, 88, 15, 1, 54000),
(60, 88, 123, 1, 82000),
(63, 93, 25, 1, 56000),
(64, 94, 107, 1, 36000),
(68, 97, 8, 1, 18000),
(69, 97, 37, 1, 96000),
(70, 98, 122, 1, 52000),
(71, 99, 66, 1, 164000),
(72, 100, 105, 2, 176000),
(73, 101, 67, 1, 69000),
(74, 102, 46, 1, 131000),
(75, 103, 113, 1, 135000),
(76, 104, 58, 1, 172000),
(77, 105, 52, 1, 148000),
(78, 106, 84, 3, 288000),
(79, 107, 8, 1, 18000),
(80, 108, 89, 1, 51000),
(81, 109, 12, 2, 130000),
(82, 110, 2, 4, 340000),
(96, 119, 5, 1, 77000),
(97, 119, 2, 1, 85000),
(98, 120, 4, 1, 71000),
(99, 120, 14, 1, 26000),
(106, 124, 89, 2, 102000),
(107, 124, 4, 2, 142000),
(110, 127, 1, 1, 72000),
(111, 128, 2, 1, 85000),
(112, 129, 15, 1, 54000),
(113, 130, 84, 2, 192000),
(114, 131, 78, 3, 144000),
(115, 132, 15, 1, 54000),
(116, 132, 1, 1, 72000),
(117, 133, 14, 1, 26000),
(118, 134, 1, 1, 72000),
(119, 135, 3, 1, 89000),
(120, 136, 1, 1, 72000),
(121, 137, 10, 1, 54000),
(123, 139, 15, 1, 54000),
(124, 140, 22, 1, 72000),
(126, 142, 10, 2, 108000),
(127, 143, 1, 1, 72000),
(128, 143, 13, 1, 52000),
(129, 143, 16, 1, 52000),
(130, 144, 1, 10, 720000),
(133, 147, 14, 1, 26000),
(136, 150, 1, 1, 72000),
(137, 151, 1, 2, 144000),
(138, 151, 11, 1, 60000),
(139, 152, 25, 10, 560000),
(140, 153, 15, 1, 54000),
(141, 153, 13, 1, 52000),
(142, 154, 133, 0, 0),
(143, 154, 15, 1, 54000),
(145, 155, 10, 1, 54000),
(146, 156, 133, 1, 199000),
(147, 157, 21, 1, 180000),
(148, 158, 133, 2, 398000),
(149, 159, 21, 1, 180000),
(150, 160, 133, 1, 199000),
(151, 160, 21, 1, 180000),
(152, 161, 133, 2, 398000),
(156, 164, 21, 1, 180000),
(157, 165, 133, 1, 199000),
(159, 167, 21, 3, 540000),
(160, 167, 21, 1, 180000),
(161, 168, 21, 1, 180000),
(162, 168, 21, 1, 180000),
(166, 170, 136, 1, 96000),
(170, 173, 136, 1, 96000),
(171, 173, 21, 1, 180000),
(173, 174, 136, 1, 96000),
(174, 174, 21, 1, 180000),
(179, 177, 166, 1, 48000),
(181, 178, 166, 1, 48000),
(183, 179, 166, 1, 48000),
(184, 180, 159, 1, 69000),
(185, 181, 159, 1, 69000),
(186, 181, 211, 1, 139000),
(187, 181, 21, 1, 180000),
(188, 181, 194, 1, 99000),
(191, 184, 148, 1, 50000),
(192, 185, 148, 1, 50000),
(193, 186, 133, 1, 199000),
(194, 187, 133, 2, 398000),
(195, 187, 147, 1, 115000),
(196, 188, 133, 1, 199000),
(197, 188, 147, 1, 115000),
(198, 188, 148, 1, 50000),
(199, 189, 136, 2, 192000),
(206, 195, 133, 1, 199000),
(207, 196, 133, 2, 398000),
(211, 199, 136, 1, 96000),
(212, 200, 161, 1, 89000),
(213, 201, 161, 1, 89000),
(214, 201, 165, 1, 79000),
(215, 202, 133, 1, 199000),
(217, 202, 136, 1, 96000),
(218, 203, 136, 1, 96000),
(219, 204, 212, 1, 52000),
(220, 205, 212, 1, 52000),
(221, 205, 149, 1, 150000),
(223, 207, 217, 1, 75000),
(224, 208, 133, 1, 65000),
(225, 209, 21, 1, 180000),
(226, 210, 21, 1, 180000),
(227, 210, 133, 1, 65000),
(228, 211, 133, 0, 0),
(230, 212, 136, 1, 96000),
(231, 213, 151, 1, 136000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `sender` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `parent_id`, `comment`, `sender`, `date`) VALUES
(7, 0, 'hay', 'phÆ°Æ¡ng', '2022-05-16 06:21:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(100) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`) VALUES
(1, 'Văn học'),
(2, 'Tiểu thuyết'),
(3, 'Kỹ năng sống'),
(4, 'Sách phương pháp'),
(5, 'Sách ngoại ngữ'),
(6, 'Lịch sử'),
(13, 'Sách nâng cao'),
(14, 'Địa lý'),
(15, 'Sống khỏe -  Sống đẹp'),
(16, 'Kinh tế - xã hội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(11) NOT NULL,
  `manv` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tinhtrang` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `guitang` tinyint(4) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madh`, `manv`, `makh`, `ngaydat`, `tinhtrang`, `guitang`, `tongtien`) VALUES
(144, 4, 6, '2022-03-03', 'Đang vận chuyển', 0, 720000),
(151, 3, 6, '2022-03-17', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 204000),
(153, 3, 6, '2022-03-17', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 106000),
(154, 3, 6, '2022-03-17', 'Nhận hàng - Hoàn tất đơn hàng', 0, 54000),
(156, 1, 2, '2022-03-28', 'Chờ duyệt', 0, 199000),
(157, 3, 6, '2022-04-01', 'Nhận hàng - Hoàn tất đơn hàng', 0, 180000),
(158, 3, 6, '2022-04-01', 'Nhận hàng - Hoàn tất đơn hàng', 0, 199000),
(159, 3, 6, '2022-04-07', 'Gói hàng', 0, 180000),
(164, 3, 14, '2022-04-20', 'Nhận hàng - Hoàn tất đơn hàng', 0, 180000),
(165, 3, 6, '2022-04-20', 'Gói hàng', 0, 199000),
(175, 1, 6, '2022-05-05', 'Chờ duyệt', 0, 199000),
(184, 3, 6, '2022-05-07', 'Nhận hàng - Hoàn tất đơn hàng', 0, 60000),
(185, 3, 16, '2022-05-07', 'Nhận hàng - Hoàn tất đơn hàng', 0, 60000),
(186, 3, 16, '2022-05-08', 'Nhận hàng - Hoàn tất đơn hàng', 0, 209000),
(188, 3, 16, '2022-05-08', 'Gói hàng', 0, 374000),
(189, 3, 16, '2022-05-09', 'Nhận hàng - Hoàn tất đơn hàng', 0, 202000),
(205, 1, 1, '2022-05-14', 'Chờ duyệt', 0, 212000),
(207, 1, 6, '2022-05-15', 'Chờ duyệt', 0, 85000),
(208, 1, 20, '2022-05-16', 'Chờ duyệt', 0, 75000),
(209, 1, 14, '2022-05-16', 'Chờ duyệt', 0, 190000),
(210, 1, 14, '2022-05-16', 'Chờ duyệt', 0, 255000),
(212, 1, 21, '2022-05-16', 'Chờ duyệt', 0, 106000),
(213, 3, 16, '2022-05-18', 'Nhận hàng - Hoàn tất đơn hàng', 0, 146000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `guitang`
--

CREATE TABLE `guitang` (
  `maguitang` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `tennn` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `diachigt` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `sdtgt` text COLLATE utf32_unicode_ci NOT NULL,
  `emailgt` varchar(100) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `guitang`
--

INSERT INTO `guitang` (`maguitang`, `madh`, `tennn`, `diachigt`, `sdtgt`, `emailgt`) VALUES
(1, 93, 'Lê Văn Hoàng', '42 Dũng Sĩ Thanh Khê - Đà Nẵng', '0961380178', 'hoangle@gmail.com'),
(2, 94, 'Hoàng Hà', '123 Ông Ích Khiêm - Đà Nẵng', '0961380189', 'hoangha@gmail.com'),
(3, 105, 'Văn Đức ', '48 Cao Thắng - Đà Nẵng', '0363566372', 'vanduc@gmail.com'),
(16, 187, '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `usename` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `diachikh` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `sdtkh` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `emailkh` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `ngaydangky` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `usename`, `password`, `diachikh`, `sdtkh`, `emailkh`, `ngaysinh`, `gioitinh`, `ngaydangky`) VALUES
(6, 'minh anh', 'minhthuong', '321321', '308 Phạm Văn Bạch', '0961257845', 'thuongthu305@gmail.com', '2000-01-22', 'nữ', '2022-01-24'),
(14, 'Hồng Phương', 'hồng', '1234567', '308 Phạm Văn Bạch, Phường 15, TB', '0648229424', 'hong@gmail.com', '2003-11-20', 'Nữ', '2022-04-20'),
(16, 'Anh Thy', 'anhthy', '123456', '496 Dương Quãng Hàm', '0965451258', 'thuongthu378505@gmail.com', '2000-11-20', 'nữ', '2022-05-07'),
(18, 'Anh Thy', 'An Lạc', '123456', '308 Phạm Văn Bạch', '0961380179', 'thuongthu389805@gmail.com', '2000-11-20', 'nữ', '2022-05-07'),
(19, 'Anhsmai', 'anhmai', '123123', '496 Dương Quãng Hàmm', '0961381025', 'thuongthu378905@gmail.com', '2000-11-20', '', '2022-05-13'),
(20, 'Maianh', 'Mai Anh', '123123', '496 Dương Quãng Hàm', '0961381025', 'maianh2011@gmail.com', '2000-11-20', '', '2022-05-15'),
(21, 'Đức Duy', 'ducduy', '123456', 'HCM', '0397779854', 'ducduy2863@gmail.com', '2022-05-09', '', '2022-05-16'),
(22, 'hahaa', '1234567', '1234567', '308 Phạm Văn Bạch, Phường 15, TB', '0932378912', 'hothiphuonght2019@gmail.com', '2000-09-20', '', '2022-05-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(11) NOT NULL,
  `tennv` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `usename` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `ngaydangky` date NOT NULL,
  `phanquyen` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `user_status` enum('Active','Inactive') COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `usename`, `password`, `diachi`, `sdt`, `email`, `ngaysinh`, `gioitinh`, `ngaydangky`, `phanquyen`, `user_status`) VALUES
(1, 'Minh Thương', 'admin', 'admin', '308 Phạm Văn Bạch', '0986814233', 'thuongthu305@gmail.com', '2000-11-20', 'Nữ', '2020-05-13', 'admin', 'Active'),
(2, 'Trường Ý', 'nvkho', 'nvkho', 'Quang Nam', '0363254589', 'nhatduc@gmail.com', '1999-03-03', 'Nam', '2020-06-01', 'nvkho', 'Active'),
(3, 'Trần Minh Anh', 'giaohang', 'giaohang', '308 Phạm Văn Bạch, Phường 15', '0961380178', 'thuongthu5@gmail.com', '2000-06-22', 'Nữ', '2020-06-12', 'nvgiaohang', 'Active'),
(4, 'Hồ Phương Lan', 'giaohang1', 'giaohang1', '308 Phạm Văn Bạch, Phường 15', '0986814233', 'thuongthu305@gmail.com', '2000-03-12', 'Nữ', '2020-06-22', 'nvgiaohang', 'Active'),
(37, 'Vân Anh', 'nvkho1', 'nvkho1', '309 Lê Lợi, Phường 4, Gò Vấp', '0961380178', 'nvkho1@gmail.com', '1998-11-20', 'Nữ', '2022-05-18', 'nvkho', 'Active');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `manxb` int(11) NOT NULL,
  `tennxb` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `diachinxb` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `sdtnxb` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `emailnxb` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`manxb`, `tennxb`, `diachinxb`, `sdtnxb`, `emailnxb`) VALUES
(1, 'NXB Trẻ', 'TP Hồ Chí Minh', '0961380178', 'nxbtre@gmail.com'),
(2, 'NXB Tổng hợp TPHCM', 'TP Hồ Chí Minh', '0365854582', 'ncbtonghop@gmail.com'),
(3, 'NXB Hà Nội', 'Hà Nội', '0965425125', 'nxbhanoi@gmail.com'),
(4, 'NXB Văn học', 'Tp Hồ Chí Minh', '190081458', 'nxbvanhoc@gmail.com'),
(6, 'NXB Thanh niên', 'TP Hồ Chí Minh', '19001895', 'nxbthanhnien@gmail.com'),
(7, 'NXB Kim Đồng', 'Tp Hồ Chí Minh', '0961380111', 'nxbkimdong@gmail.com'),
(8, 'NXB Công thương', 'Hà Nội', '963258741', 'nxbcongthuong@gmail.com'),
(9, 'NXB Lao động', 'TP Hồ Chí Minh', '19001256', 'nxblaodong@gmail.com'),
(10, 'NXB Lao động và xã hội', 'TP Hồ Chí Minh', '0935458969', 'nxbldxh@gmail.com'),
(11, 'NXB Hồng Đức', 'Hồng Đức', '0154789632', 'nxbhongduc@gmail.com'),
(12, 'NXB Thế giới', 'TP Hồ Chí Minh', '0123965874', 'nxbthegioi@gmail.com'),
(13, 'NXB Dân trí', 'TP Hồ Chí Minh', '0145236987', 'nxbdantri@gmail.com'),
(14, 'NXB Đại Học Quốc Gia Hà Nội', 'Hà Nội', '0745896321', 'nxbdhqghn@gmail.com'),
(15, 'NXB Tri Thức', 'Đà Nẵng', '0563214789', 'nxbtrithuc@gmail.com'),
(16, 'NXB Đại học Vinh', 'Nghệ An', '0693258741', 'nxbvinh@gmail.com'),
(17, 'NXB Khoa học xã hội', 'Hà Nội', '0748512369', 'nxbkhxh@gmail.com'),
(18, 'NXB Đại học quốc gia TPHCM', 'TP Hồ Chí Minh', '0124578963', 'nxbdhqghcm@gmail.com'),
(19, 'NXB Giáo dục VIệt Nam', 'Hà Nội', '0121412135', 'nxbgdvn@gmail.com'),
(20, 'NXB Đà Nẵng', 'Đà Nẵng', '0789652341', 'nxbdanang@gmail.com'),
(21, 'NXB Đại học sư phạm', 'TP Hồ Chí Minh', '0896574321', 'nxbdhsp@gmail.com'),
(22, 'NXB Báo Sinh Viên VN - Hoa Học ', 'TP Hồ Chí Minh', '0524137896', 'nxbbsv@gmail.com'),
(23, 'NXB Kinh tế TP.Hồ Chí Minh', 'TP.Hồ Chí Minh', '0968741235', 'nxbkthcm@gmail.com'),
(24, 'NXB Công an nhân dân', 'Hà Nội', '0914325687', 'nxbcand@gmail.com'),
(25, 'NXB Văn hóa Văn nghệ', 'Hà Nội', '0963125478', 'nxbvhvn@gmail.com'),
(26, 'NXB Mỹ Thuật', 'Đà Nẵng', '0917382465', 'nxbmythuat@gmail.com'),
(27, 'NXB Văn Hóa Dân Tộc', 'Tp Hồ Chí Minh', '123658794', 'nxbvhdt@gmail.com'),
(28, 'NXB Thông Tấn', 'Tp Hồ Chí Minh', '985632147', 'nxbthongtan@gmail.com'),
(29, 'NXB Chính trị Quốc gia và Sự thật', 'Hà Nội', '35978156', 'nxbctqgst@gmail.com'),
(30, 'NXB Hải Phòng', 'Hải Phòng', '360254890', 'nxbhaiphong@gmail.com'),
(31, 'NXB Thống Kê', 'Tp Hồ Chí Minh', '901257841', 'nxbthongke@gmail.com'),
(32, 'NXB Thanh Hóa', 'Thanh Hóa', '201459635', 'nxbthanhhoa@gmail.com'),
(33, 'NXB Giao Thông Vận Tải', 'TP Hồ Chí Minh', '701235896', 'nxbgtvt@gmail.com'),
(34, 'NXB Phương Đông', 'Đà Nẵng', '152304489', 'nxbphuongdong@gmail.com'),
(35, 'NXB Âm Nhạc', 'Hà Nội', '302145875', 'nxbannhac@gmail.com'),
(36, 'NXB Thể Thao và Du Lịch', 'Hà Nội', '104523687', 'nxbttdl@gmail.com'),
(37, 'NXB Thể Dục - Thể Thao', 'Tp Hồ Chí Minh', '220113365', 'nxbtttt@gmail.com'),
(38, 'NXB Phụ Nữ', 'Đà Nẵng', '112002145', 'nxbphunu@gmail.com'),
(39, 'NXB Văn Hoá Thông Tin', 'TP Hồ Chí Minh', '10223547', 'nxbvhtt@gmail.com'),
(40, 'NXB Bách Khoa Hà Nội', 'Hà Nội', '1112020220', 'nxbbkhn@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `manhap` int(11) NOT NULL,
  `manv` int(11) NOT NULL,
  `masach` int(11) NOT NULL,
  `soluongnhap` int(11) NOT NULL,
  `ngaynhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieunhap`
--

INSERT INTO `phieunhap` (`manhap`, `manv`, `masach`, `soluongnhap`, `ngaynhap`) VALUES
(13, 2, 133, 20, '2022-03-28'),
(14, 2, 162, 20, '2022-03-28'),
(15, 2, 133, 0, '2022-03-28'),
(16, 2, 21, 4, '2022-04-07'),
(17, 2, 133, 35, '2022-04-07'),
(18, 2, 136, 30, '2022-04-07'),
(19, 2, 147, 70, '2022-04-07'),
(20, 2, 148, 30, '2022-04-07'),
(21, 2, 149, 10, '2022-04-07'),
(22, 2, 150, 90, '2022-04-07'),
(23, 2, 151, 79, '2022-04-07'),
(30, 2, 163, 79, '2022-04-07'),
(32, 2, 168, 77, '2022-04-07'),
(33, 2, 187, 77, '2022-04-07'),
(38, 2, 21, 112, '2022-05-07'),
(41, 2, 21, 0, '2022-05-08'),
(47, 2, 136, 39, '2022-05-15'),
(48, 2, 147, 22, '2022-05-15'),
(50, 2, 149, 11, '2022-05-15'),
(52, 2, 151, 13, '2022-05-15'),
(56, 2, 156, 93, '2022-05-15'),
(57, 2, 157, 29, '2022-05-15'),
(59, 2, 161, 50, '2022-05-15'),
(60, 2, 162, 68, '2022-05-15'),
(63, 2, 166, 19, '2022-05-15'),
(64, 2, 168, 22, '2022-05-15'),
(65, 2, 209, 67, '2022-05-15'),
(67, 2, 253, 20, '2022-05-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(34, 'Phan Äáº¡i', 5, 'NhÃ¢n viÃªn tÆ° váº¥n quÃ¡ nhiá»‡t tÃ¬nh ', 1650512018),
(53, 'Äá»©c Duy', 5, 'Good', 1651741161);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `masach` int(11) NOT NULL,
  `madm` int(11) NOT NULL,
  `manxb` int(11) NOT NULL,
  `tensach` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `tentacgia` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `namxb` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `giagoc` int(10) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `mieuta` text COLLATE utf32_unicode_ci NOT NULL,
  `noibat` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`masach`, `madm`, `manxb`, `tensach`, `tentacgia`, `namxb`, `soluong`, `gia`, `giagoc`, `hinhanh`, `mieuta`, `noibat`) VALUES
(159, 3, 6, 'Hài Hước Một Chút Thế Giới Sẽ Khác Đi', 'Lưu Chấn Hồng', 2017, 89, 69000, 89000, 'image_book/haihuocmotchut.jpg', 'Trong xã hội hiện đại, giao tiếp là chìa khóa giải quyết mọi vấn đề. Vậy làm thế nào để giao tiếp hiệu quả? Đó là biết vận dụng một cách tinh tế sự hài hước vào lời nói và tư duy, hài hước có thể giúp giúp chúng ta thiết lập được mạng lưới quan hệ rộng rãi. Hài hước một chút, thế giới sẽ khác đi - cuốn sách với nội dung phong phú mà sâu sắc này sẽ giúp các bạn có được cái nhìn rõ nét hơn về tính hài hước dưới các góc độ, phương diện đánh giá khác nhau, cũng như có thêm kĩ năng vận dụng sự hài hước vào cuộc sống hàng ngày.', ''),
(162, 2, 11, 'Hit Makes - Kẻ Dẫn Dắt Truyền Thông', 'Derek Thompson', 2018, 88, 118000, 150000, 'image_book/hitmakes.png', 'Hit Makers – kẻ dẫn dắt truyền thông là một cuốn sách dành cho những ai mới chập chững khi bắt tay vào làm truyền thông mạng xã hội. Một sản phẩm không tự nhiên trở thành hot trend trên các kênh truyền thông, chúng đều được sử dụng rất nhiều công cụ truyền thông hỗ trợ và bên cạnh đó là những “mánh khóe” để thao túng truyền thông. Nếu bạn là người mới làm về truyền thông hay muốn tìm hiểu chiến lược truyền thông sao cho hiệu quả, thì đây chính là cuốn sách dành cho bạn.', 'Co'),
(165, 3, 4, 'Khéo Ăn Nói Sẽ Có Được Thiên Hạ ', 'Trác Nhã', 2018, 85, 79000, 109000, 'image_book/kheoannoi.jpg', 'Trong xã hội thông tin hiện đại, sự im lặng không còn là vàng nữa, nếu không biết cách giao tiếp thì dù là vàng cũng sẽ bị chôn vùi. Trong cuộc đời một con người, từ xin việc đến thăng tiến, từ tình yêu đến hôn nhân, từ tiếp thị cho đến đàm phán, từ xã giao đến làm việc... không thể không cần đến kĩ năng và khả năng giao tiếp. Khéo ăn khéo nói thì đi đâu, làm gì cũng gặp thuận lợi. Trong khoảng thời gian ngắn nhất, nếu ai có thể nêu bật được khả năng, thực lực của mình cho đối phương biết thì đó sẽ là người chiến thắng. Chính vì vậy mà câu nói “Khéo ăn nói sẽ có được thiên hạ” rất có ý nghĩa. Vậy, như thế nào mới gọi là biết cách ăn nói? Nói năng lưu loát, không ấp úng có được gọi là biết cách nói chuyện không? Nói ngắn gọn, nói ít nhưng ý nghĩa thâm sâu có được gọi là biết cách nói chuyện không? Hay nhất định phải nói nhiều mới là biết nói chuyện?', 'Co'),
(166, 1, 4, 'Lều Chõng', 'Ngô Tất Tố', 2012, 66, 48000, 60000, 'image_book/leuchong.jpg', 'LỀU CHÕNG là “tiểu thuyết phóng sự”, chất “tiểu thuyết” của LỀU CHÕNG thể hiện từ cốt truyện với hệ thống các nhân vật có tâm lý, tính cách cụ thể, được xây dựng thành những hình tượng và các chân dung điển hình. Chất “phóng sự” trong LỀU CHÕNG biểu hiện bằng nghệ thuật xử lý tinh tế, có tính ”thời sự” cao, phản ánh chân thành, cụ thể các “sự việc có thực” diễn ra phong phú trong hệ thống ”thi cử” thời xưa.', ''),
(168, 4, 14, 'Mega XOY Học Nhanh - 23 Phương Pháp Giải Hóa Học Hiện Đại', 'Trần Văn Thanh', 2021, 99, 43000, 52000, 'image_book/megahoahoc.jpg', 'Mega XOY Học Nhanh 23 Phương Pháp Giải Hóa Học Hiện Đại là cuốn sổ tay Hóa Học cần thiết cho bất kì teen THPT nào muốn nắm chắc kiến thức và giải hóa nhanh nhất, đúng nhất. Phương pháp hiện đại nhất, mới nhất - Tích hợp tư duy giải Trắc Nghiệm Hóa nhanh nhất - Phá tan áp lực thời gian thi cử - Cập nhật công thức, mẹo làm bài nhanh nhất.Sổ tay gói gọn toàn bộ kiến thức trọng tâm, công thức, phương pháp giải nhanh Hóa Học trong 3 năm học - Dễ dàng học và mang đi mọi nơi - Rèn kỹ năng giải bài tập “siêu tốc” phân định đúng dạng bài – áp dụng đúng công thức tính nhanh, đánh bay mọi dạng bài trắc nghiệm Hóa Học trong tích tắc - Bật mí phương pháp làm bài tập lạ, khó và ít tài liệu như: Giải bài tập đốt cháy hợp chất hữu cơ, Kim loại phản ứng với HNO3, Este, Peptit,..', ''),
(169, 4, 14, 'Mega XOY Học Nhanh - Ngữ Pháp Tiếng Anh', 'Dương Hương', 2021, 20, 52000, 67000, 'image_book/megaanh.jpg', 'Mega XOY Học Nhanh Ngữ Pháp Tiếng Anh là cuốn sổ tay Tiếng Anh cần thiết cho bất kì dân học Tiếng Anh nào muốn chinh phục Tiếng Anh và giao tiếp Tiếng Anh thuần thục nhất.Học tất cả các kiến thức ngữ pháp của 12 năm cấp 3; 4 năm Đại Học với với 1 cuốn sổ tay. Làm chủ Ngữ Pháp căn bản với hệ thống 12 thì “thông dụng” nhất trong Tiếng Anh, Từ loại, Câu và cấu trúc Ngữ Pháp phổ biến Sổ tay Mega XOY Học Nhanh Ngữ Pháp Tiếng Anh dành cho người mất gốc, người mới bắt đầu học Tiếng Anh với các chủ đề Ngữ Pháp căn bản giúp bạn nhanh chóng xây dựng được nền móng học Tiếng Anh tốt nhất.', ''),
(170, 4, 14, 'Mega XOY Học Nhanh - Phương Pháp Giải Nhanh Vật Lý Trắc Nghiệm', 'Nguyễn Minh Thảo', 2021, 15, 52000, 68000, 'image_book/megaly.jpg', 'Mega XOY Học Nhanh Phương Pháp Giải Nhanh Vật Lý Trắc Nghiệm tích hợp đầy đủ, chuyên sâu 3 Chuyên đề “chắc chắn” có trong bài thi Vật Lý. Đây là cuốn sổ tay Vật Lý giúp team THPT đánh bật mất gốc kiến thức lớp 10,11- Học chắc kiến thức lớp 12. Đi sâu 3 Chuyên đề: Dao động cơ; Sóng cơ – Sóng điện từ; Điện xoay chiều.Được kì vọng giúp học sinh Trung bình – Khá vẫn có thể ôn luyện mọi lúc mọi nơi và nắm chắc kiến thức với lời giải chi tiết, công thức, phương pháp làm bài.', ''),
(171, 4, 14, 'Mega XOY Học Nhanh - Phương Pháp Giải Toán Trắc Nghiệm', 'Tô Nga', 2021, 20, 72000, 119000, 'image_book/megatoan.jpg', 'Mega XOY Giải Nhanh Phương Pháp Giải Toán Trắc Nghiệm tích hợp đầy đủ, chuyên sâu 4 Chuyên đề “chắc chắn” có trong bài thi Toán Học. Đây là cuốn sổ tay Toán Học giúp team THPT đánh bật mất gốc kiến thức lớp 10,11- Học chắc kiến thức lớp 12. Đi sâu 4 Chuyên đề: Hàm số và các bài Toán liên quan; Nguyên hàm – Tích phân; Mũ – Logarit – Số Phức; Hình học không gian, tọa độ trong không gian. Được kì vọng giúp học sinh Trung bình – Khá vẫn có thể ôn luyện mọi lúc mọi nơi và nắm chắc kiến thức với lời giải chi tiết, công thức, phương pháp làm bài', ''),
(172, 3, 13, 'Nghệ Thuật Lãnh Đạo', 'David M Rubenstein', 2021, 20, 195000, 215000, 'image_book/nghethuatlanhdao.jpg', 'Khi thực hiện cuốn Nghệ Thuật Lãnh Đạo, Rubenstein muốn cho độc giả thấy được toàn bộ tài sản là kinh nghiệm rất thực tế và gần gũi của các nhà lãnh đạo như các cựu Tổng thống Hoa Kỳ Bill Clinton và George W. Bush , Bill Gates, Jeff Bezos, Tim Cook và Oprah, với hi vọng rằng độc giả sẽ tích lũy được khả năng lãnh đạo tốt hơn qua những câu chuyện này, đồng thời truyền cảm hứng cho các thế hệ trẻ trở thành những nhà lãnh đạo giỏi trong tương lai. Nếu bạn mong muốn đạt được thành công, nếu bạn muốn trở thành một nhà lãnh đạo xuất sắc? Nếu bạn muốn đạt được thành tựu nhất định trong lĩnh vực của mình thì đây là cuốn sách mà bạn không thể bỏ qua.', ''),
(173, 1, 1, 'Óc Sáng Suốt', 'Nguyễn Duy Cẩn', 2021, 25, 60000, 82000, 'image_book/ocsangsuot.jpg', 'Óc sáng suốt là một trong những tác phẩm tiêu biểu của học giả Thu Giang - Nguyễn Duy Cần. Thông qua cuốn sách này, tác giả hướng dẫn cho người đọc những phương pháp để rèn luyện cho mình một bộ óc minh mẫn và sáng suốt, tư duy có hiệu quả để thành công trong công việc và cuộc sống. Cuốn sách này xuất bản lần đầu tiên cách đây hơn nửa thế kỷ (1952), dù đã trải qua một thời gian rất dài nhưng giá trị tư tưởng của sách vẫn phù hợp và có thể áp dụng trong đời sống hiện nay. Trân trọng giới thiệu cùng độc giả.', ''),
(174, 1, 5, 'Sống Mòn', 'Nam Cao', 2022, 10, 109000, 129000, 'image_book/songmon.jpg', '“NHƯNG NAY MAI, MỚI THẬT BUỒN. Y sẽ chẳng có việc gì làm, y sẽ ăn bám vợ! Đời y sẽ mốc lên, sẽ gỉ đi, sẽ mòn, sẽ mục ra, ở một xó nhà quê. Người ta sẽ khinh y, vợ y sẽ khinh y, chính y sẽ khinh y. Rồi y sẽ chết mà chưa làm gì cả, chết mà chưa sống! Nghĩ thế thì y thấy nghẹn ngào, thấy uất ức vô cùng!', 'Co'),
(176, 2, 12, 'Tôi PR cho PR', 'Di Li', 2015, 20, 60000, 89000, 'image_book/toipr.jpg', 'Cuốn sách phù hợp với mọi đối tượng từ 15 tuổi trở lên, bất phân ngành nghề và giới tính, bởi trong xã hội, ai cũng phải làm PR cho bản thân mình. Tất cả các bạn đều đã và đang làm PR cho bản thân mà không biết. Ngày Tết, các bạn thường hay đến thăm nhà sếp, mục đích là để tạo dựng mối quan hệ thân tình và chiếm thiện cảm của sếp, đó chính là một phần bản chất của PR. Bạn chuẩn bị tháo dỡ và xây nhà mới, tiếng ồn, khói bụi và sự bừa bãi của gạch vữa sẽ ảnh hưởng đến các gia chủ xung quanh, họ sẽ không chịu đựng được và cùng nhau làm đơn khiếu nại lên phường, bạn biết vậy nên vào một tối đẹp trời đã cất công sang từng nhà hàng xóm để trình bày trước sự việc bằng nụ cười chân thành, mục đích ngăn chặn một cuộc xung đột sắp xảy ra, đó chính là PR.', ''),
(177, 3, 1, 'Trên Đường Băng', 'Tony Buổi Sáng', 2017, 50, 51000, 62000, 'image_book/trenduongbang.jpg', 'Trên Đường Băng của Tony Buổi Sáng tuy hướng đến những đọc giả là những người trẻ nhưng những người lớn hơn vẫn để hiểu hơn, và có cách nhìn nhận cũng như giáo dục con em mình tốt nhất thay vì bảo vệ con quá kĩ trở nên yếu ớt và thiếu tự lập. Và để yêu thương “khoa học” nhất. Đây cũng là cuốn sách mà những người đi làm nên sở hữu để nhìn lại chặng đường mình đã đi qua, suy ngẫm và thay đổi vì chưa bao giờ là quá muộn. Một cuốn sách với nhiều điều để bạn học hỏi, suy ngẫm và chuẩn bị tốt nhất cho hành trang trên con đường tuổi trẻ của chính mình.', ''),
(178, 3, 5, 'Tuổi Trẻ Đáng Giá Bao Nhiêu', 'Trác Nhã', 2021, 10, 75000, 89000, 'image_book/tuoitredanggiabaonhieu.jpg', 'Tôi đã đọc quyển sách này một cách thích thú. Có nhiều kiến thức và kinh nghiệm hữu ích, những điều mới mẻ ngay cả với người gần trung niên như tôi. Tuổi trẻ đáng giá bao nhiêu? được tác giả chia làm 3 phần: HỌC, LÀM, ĐI. Nhưng tôi thấy cuốn sách còn thể hiện một phần thứ tư nữa, đó là ĐỌC. Hãy đọc sách, nếu bạn đọc sách một cách bền bỉ, sẽ đến lúc bạn bị thôi thúc không ngừng bởi ý muốn viết nên cuốn sách của riêng mình. Nếu tôi còn ở tuổi đôi mươi, hẳn là tôi sẽ đọc Tuổi trẻ đáng giá bao nhiêu? nhiều hơn một lần.', ''),
(179, 2, 8, 'Uber - Chuyến Đi Bão Táp', 'Adam Lashinsky', 2017, 10, 199000, 235000, 'image_book/uber.png', 'Uber là một trong những doanh nghiệp thú vị và gây nhiều tranh cãi nhất thế giới, vì ý tưởng đi chung xe thông minh, tốc độ tăng trưởng nhanh chóng và cả những cáo buộc nặng nề trước quyết tâm theo đuổi thành công bằng mọi giá của CEO Travis Kalanick. Bất chấp tầm quan trọng của công ty này với nền kinh tế và cuộc cách mạng trong ngành vận tải, cũng như trận chiến giành quyền thống trị toàn cầu của Kalanick với giới quan chức chính quyền và các công ty taxi trên khắp thế giới, câu chuyện đầy đủ về Uber vẫn chưa từng được kể. Đây là câu chuyện mà những người khởi xướng các công ty khởi nghiệp, giám đốc các doanh nghiệp truyền thống, độc giả yêu thích công nghệ, những tài xế và người sử dụng dịch vụ gọi xe sẽ bị hút vào qua từng trang sách.', ''),
(192, 2, 1, 'Đứa Trẻ Lạc Loài', 'Dave Pelzez', 2019, 10, 98000, 109000, 'image_book/duatrelacloai.jpg', 'Bộ ba tác phẩm Không Nơi Nương Tựa (1995), Đứa Trẻ Lạc Loài (1997) và Đi Ra Từ Bóng Tối (1999) tái hiện câu chuyện tuổi ngây thơ rúng động dư luận của David James Pelzer. \"Đứa Trẻ Lạc Loài” là quyển sách về tình yêu và những cống hiến không thể phủ nhận mà các tổ chức xã hội và các gia đình có con nuôi đã đem lại cho trẻ em trong con nguy hiểm. Chính Dave Pelzer là một bằng chứng sống cho lòng kiên cường, tinh thần trách nhiệm và sức mạnh của ý chí của con người\" .', ''),
(194, 3, 12, 'Đừng Lựa Chọn An Nhàn Khi Còn Trẻ', 'Cảnh Thiên', 2020, 4, 99000, 127000, 'image_book/dungluachonannhankhicontre.jpg', 'Tuổi trẻ bạn không dám mạo hiểm, không dám nỗ lực để kiếm học bổng, không chịu tìm tòi những thử thách trong công việc, không phấn đấu hướng đến ước mơ của mình. Nhưng vì sao bạn lại nghĩ rằng bạn chẳng cần bỏ ra chút công sức nào, cuộc sống sẽ dâng đến tận miệng những thứ bạn muốn? Bạn cần phải hiểu rằng: Hấp tấp muốn mau chóng thành công rất dễ khiến chúng ta đi vào mê lộ. Nếu bạn lựa chọn an nhàn trong 10 năm, tương lai sẽ buộc bạn phải vất vả trong 50 năm để bù đắp lại. Nếu bạn bươn chải vất vả trong 10 năm, thứ mà bạn chắc chắn có được là 50 năm hạnh phúc. Điều quý giá nhất không phải là tiền mà là tiền bạc. Thế nên, bạn à, đừng lựa chọn an nhàn khi còn trẻ.', ''),
(195, 5, 20, 'Giải Thích Ngữ Pháp Tiếng Anh', 'Mai Lan Hương', 2019, 10, 180000, 205000, 'image_book/giaithichnguphap.jpg', 'Sách Giải Thích Ngữ Pháp Tiếng Anh với bài tập và đáp án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao. Nội dung các chương biên soạn dựa trên ngữ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh và tiếng Anh của người Mỹ. Cuối mỗi phần ngữ pháp đều có bài tập  đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi  biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.', ''),
(196, 5, 1, 'Try! Kỳ Thi Năng Lực Nhật Ngữ N1', 'Hiệp hội văn hóa sinh viên Châu Á ABK', 2021, 10, 100000, 125000, 'image_book/giaotrinhluyenthinangluctiengnhat.jpg', 'Bộ giáo trình TRY! gồm một cuốn TRY! Start cho các bạn mới bắt đầu học tiếng Nhật và 5 cuốn TRY! N1, N2, N3, N4, N5 giúp phát triển các kỹ năng tiếng Nhật thông qua việc học ngữ pháp. Bộ giáo trình này là tài liệu luyện thi thiết thực cho \"Kỳ thi năng lực Nhật ngữ\" các cấp độ từ N5 đến N1, giúp người học nắm chắc các điểm ngữ pháp và vận dụng chúng thông qua các bài luyện tập Nghe - Đọc.', ''),
(197, 5, 1, 'Try! Kỳ Thi Năng Lực Nhật Ngữ N2', 'Hiệp hội văn hóa sinh viên Châu Á ABK', 2021, 6, 120000, 147000, 'image_book/giaotrinhluyenthiNLTN2.jpg', 'Bộ giáo trình TRY! gồm một cuốn TRY! Start cho các bạn mới bắt đầu học tiếng Nhật và 5 cuốn TRY! N1, N2, N3, N4, N5 giúp phát triển các kỹ năng tiếng Nhật thông qua việc học ngữ pháp.  Bộ giáo trình này là tài liệu luyện thi thiết thực cho \"Kỳ thi năng lực Nhật ngữ\" các cấp độ từ N5 đến N1, giúp người học nắm chắc các điểm ngữ pháp và vận dụng chúng thông qua các bài luyện tập Nghe - Đọc.', ''),
(199, 5, 1, 'Try! Kỳ Thi Năng Lực Nhật Ngữ N3', 'Hiệp hội văn hóa sinh viên Châu Á ABK', 2021, 2, 120000, 149000, 'image_book/giaotrinhthinangluctiengnhat.jpg', 'Bộ giáo trình TRY! gồm một cuốn TRY! Start cho các bạn mới bắt đầu học tiếng Nhật và 5 cuốn TRY! N1, N2, N3, N4, N5 giúp phát triển các kỹ năng tiếng Nhật thông qua việc học ngữ pháp.  Bộ giáo trình này là tài liệu luyện thi thiết thực cho \"Kỳ thi năng lực Nhật ngữ\" các cấp độ từ N5 đến N1, giúp người học nắm chắc các điểm ngữ pháp và vận dụng chúng thông qua các bài luyện tập Nghe - Đọc.', ''),
(200, 1, 4, 'Gió Lạnh Đầu Mùa', 'Thạch Lam', 2020, 5, 39000, 47000, 'image_book/giolanhdaumua.jpg', 'Trong Gió lạnh đầu mùa, tình người ấm áp như chiếc áo mùa đông đã nảy nở trong lòng hai đưa trẻ: Hai chị em Lan, Sơn mặc áo ấm ra chợ chơi với bọn trẻ nhà nghèo thấy Hiên con bé hàng xóm co ro bên cột quán mặc manh áo rách tả tơi bèn chạy về nhà lấy áo bông cũ đem cho nó mặc. Mẹ Lan thấy nhà Hiên nghèo khổ bèn cho mẹ nó mượn năm hào may áo...', ''),
(201, 1, 4, 'Hà Nội Băm Sáu Phố Phường', 'Thạch Lam', 2021, 10, 45000, 57000, 'image_book/hanoibasauphophuong.jpg', 'Văn học Việt Nam thời xưa có nhiều tác phẩm có giá trị to lớn về mặt nhân văn và nghệ thuật, đã được công nhận và chứng thực qua thời gian. Bộ sách Việt Nam danh tác bao gồm loạt tác phẩm đi cùng năm tháng như: Số đỏ (Vũ Trọng Phụng), Việc làng (Ngô Tất Tố), Gió đầu mùa, Hà Nội băm sáu phố phường (Thạch Lam), Miếng ngon Hà Nội (Vũ Bằng), Vang bóng một thời (Nguyễn Tuân). Hy vọng bộ sách sau khi tái bản sẽ giúp đông đảo tầng lớp độc giả thêm hiểu, tự hào và nâng niu kho tàng văn học nước nhà.', ''),
(202, 13, 1, 'Hồ Sơ Về Lục Châu Học', 'Nguyễn Văn Trung', 2015, 10, 199000, 205000, 'image_book/hosovelucchauhoc.jpg', 'Hồ sơ về Lục Châu học - Tìm hiểu con người ở vùng đất mới là một tập khảo cứu của Giáo sư Nguyễn Văn Trung về Nam Bộ thông qua các tài liệu văn sử bằng Quốc ngữ ở miền Nam giai đoạn từ khi Pháp xâm lược miền Nam 1865 đến khi thành lập Đảng Cộng sản Việt Nam 1930. Ở đó người đọc sẽ bất ngờ khám phá một mảng văn học bị bỏ quên, bỏ qua bởi ở chính vùng đất nầy những tờ báo viết bằng Quốc ngữ đầu tiên xuất hiện, theo đà phát triển của xã hội, sau báo là sách, sách tuyên truyền cho chính sách mới, sách truyền đạo và sách giải trí.', ''),
(203, 14, 25, 'Hương Sắc Miền Tây', 'Bùi Túy Phượng, Trần Minh Thương', 2019, 15, 109000, 125000, 'image_book/huongsacmientay.jpg', 'Vùng đất miền Tây Nam bộ mới chỉ cách nay trên dưới ba trăm năm hình thành. Một khoảng thời gian không dài so với lịch sử, nhưng cũng đủ để nó ghi lại những dấu ấn văn hóa của cư dân sinh sống nơi này. Có điều, theo quy luật phát triển đời sống, sinh hoạt của con người đã từng tháng, từng năm thay đổi. Những nét đẹp trong văn hóa gắn liền với nền kinh tế tự túc tự cấp đã và đang dần lùi vào dĩ vãng. Những biểu hiện đa dạng từ hình thức cư trú đến những hoạt động thường nhật trên cánh đồng thửa ruộng, những buổi chèo ghe, bơi xuồng kiếm cá tôm trên sông, những buổi trăng thanh gió mát trai gái trong xóm vần công giã gạo, đươn sàng,... đến những câu hò, điệu lý, hay những nét văn hóa lễ tục gắn liền với đời người từ đầy tháng thôi nôi đến cưới hỏi, chôn cất,... của các dân tộc anh em Việt - Khmer - Hoa sinh sống cộng cư, tất cả những điều đó được chúng tôi sưu tầm biên khảo qua những bài viết và tập hợp trong công trình: Hương sắc miền Tây.', ''),
(204, 3, 4, 'Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực', 'Vĩ Nhân', 2020, 6, 105000, 157000, 'image_book/khibandangmo.jpg', 'Có rất nhiều người hỏi tôi: “Tại sao em có thành tích tốt, cũng không lười, nhưng vẫn không đủ xuất sắc?”. Tôi chỉ có một câu trả lời cho vấn đề này: Bạn vẫn chưa thực sự thay đổi bản thân nhưng lại ép mình phải thành công, vì thế bạn mãi mãi không biết mình có thể xuất sắc thế nào. Bạn thấy đấy, những người giành được thành công thực sự, đằng sau ánh hào quang của họ luôn có những câu chuyện về quá trình khổ luyện ít ai biết đến. Chỉ có không ngừng ép buộc bản thân mới có khả năng vượt qua người khác để trở thành người xuất sắc. Cũng chỉ có giữ vững sức mạnh này bạn mới có thể từ ưu tú trở nên xuất sắc hơn, cho đến khi chạm tới đỉnh cao siêu việt.', ''),
(205, 15, 9, 'Khi Hơi Thở Hóa Thinh Không', 'Paul Kalanithi', 2017, 10, 104000, 149000, 'image_book/khihoitho.jpg', '“Khi hơi thở hóa thinh không” là tự truyện của một bác sĩ bị mắc bệnh ung thư phổi. Trong cuốn sách này, tác giả đã chia sẻ những trải nghiệm từ khi mới bắt đầu học ngành y, tiếp xúc với bệnh nhân cho tới khi phát hiện ra mình bị ung thư và phải điều trị lâu dài. Độc giả cũng được hiểu thêm về triết lý sống, triết lý nghề y của Kalanithi, thông qua ký ức về những ngày anh còn là sinh viên, rồi thực tập, cho đến khi chính thức hành nghề phẫu thuật thần kinh. Bạn bè và gia đình đã dành tặng những lời trìu mến nhất cho con người đáng kính trọng cả về tài năng lẫn nhân cách này. Dù không thể vượt qua cơn bệnh nan y, nhưng thông điệp của tác giả sẽ còn khiến người đọc nhớ mãi.', ''),
(206, 16, 12, 'Làm Chủ Cửa Hàng Bán Lẻ', 'Matt Thomas', 2019, 0, 99000, 129000, 'image_book/lamchucuahangbanle.jpg', 'Ý tưởng này cũng rất dễ hiểu vì kinh doanh cửa hàng được xem là một trong những công việc mang lại nhiều cơ hội làm giàu nhất. Công việc này thu hút tất cả những ai đặt chất lượng cuộc sống lên hàng đầu, bất kể người đó có đang nắm giữ một gia tài khổng lồ hay chỉ là một nhân viên vừa thất nghiệp. Nhưng làm thế nào để mở một cửa hàng bán lẻ? Và làm sao để cửa hàng ấy có một vị trí vững chắc trong lòng người mua sắm? Hình thành ý tưởng, lên kế hoạch và thực hiện ước mơ sở hữu một cửa hàng bán lẻ có phải là chuyện viển vông hay không? Với cuốn sách Làm chủ của hàng bán lẻ, bạn sẽ tìm ra câu giải đáp cho những thắc mắc trên. Đồng thời, bạn sẽ có thêm kiến thức và động lực để thực hiện được tất cả những gì mình muốn với niềm đam mê rực cháy.', ''),
(207, 6, 15, 'Lịch Sử Tư Tưởng Nhật Bản', 'Thích Thiên Ân', 2018, 10, 169000, 187000, 'image_book/lichsututuongnhatban.jpg', 'Mọi người Việt Nam trong khi hãnh diện với nền văn hóa cổ truyền của dân tộc và trong khi thiết tha với công cuộc phục hưng những tinh thần truyền thống của Đông phương - dù chúng ta vẫn niềm nở tiếp nhận thâu hóa các ngành văn minh kỹ nghệ Âu Mỹ - thì chúng ta không thể nào không nghiên cứu tìm hiểu đến những nước láng giềng, nhất là những nước cùng một nguồn gốc văn hóa với dân tộc chúng ta. Nhật Bản là một trong số các nước láng giềng ấy. Chúng ta nghiên cứu đến các ngành văn hóa tư tưởng của Nhật Bản, ngoài mục đích tìm hiểu những điểm dị đồng giữa hai dân tộc Việt - Nhật, còn có một lợi ích khác là sẽ nhờ đó rút tỉa những kinh nghiệm thích ứng với hoàn cảnh dân tộc trong việc tiếp nhận văn hóa ngoại quốc, hầu cải tiến và xây dựng xứ sở. ', ''),
(208, 6, 11, 'Lịch Sử Văn Minh Ả Rập', 'Dịch giả Nguyễn Hiến Lê', 2018, 20, 177000, 195000, 'image_book/lichsuvanminharap.jpg', 'Mở đầu cuốn sách là sự lý giải về bộc phát của bán đảo Ả Rập là biến cố lạ lùng nhất trong lịch sử thời Trung cổ; hậu quả của nó là một nửa thế giới ở chung quanh Địa Trung Hải bị người Ả Rập xâm chiếm và cải giáo (biến đổi tín ngưỡng). Không có bán đảo nào lớn bằng bán đảo Ả Rập: chiều dài nhất được hai ngàn hai trăm cây số. Về phương diện địa chất, bán đảo đó tiếp tục sa mạc Sahara, là một phần của cái đai cát đi ngang qua Ba Tư, tới tận sa mạc Gobi. Còn rất nhiều điều thú vị về văn minh Ả Rập mà bạn chưa từng biết đến, tôi nghĩ cuốn sách sẽ là cơ hội để bạn tiếp cận nền văn minh này mà không phải tìm các nguồn từ đâu cả.', ''),
(210, 1, 5, 'Mình Nói Gì Khi Nói Về Hạnh Phúc?', 'Rosie Nguyễn', 2020, 20, 69000, 89000, 'image_book/minhnoigikhinoivehanhphuc.jpg', 'Mình nói gì khi nói về hạnh phúc? là những tâm sự và trải lòng trên hành trình sống và đi, những suy tư về hạnh phúc, về mục đích sống, và thân phận con người. Giọng kể chuyện cứ như thủ thỉ tâm tình, đem lại cảm giác dễ chịu, nhẹ nhàng mà sâu lắng. Và trong những câu chữ đều lấp lánh vẻ đẹp của tình yêu cuộc sống.Tác phẩm gồm ba phần chính là Sống, Yêu, Vui với gần 30 bài viết dưới phong cách tự sự nhằm hướng tới những bạn trẻ để các bạn chiêm nghiệm về cuộc sống và hạnh phúc. Ngôn ngữ giản dị gần gũi như chính tâm sự của tác giả với bạn đọc.', ''),
(211, 1, 1, 'Nền Kinh Tế Tự Do', 'Mario McGovern', 2018, 9, 139000, 179000, 'image_book/nenkinhtetudo.jpg', 'Khởi nghiệp không phải là một công việc, đó là một lối sống. Và việc bạn chọn làm việc cho chính mình cũng có tính khởi nghiệp giống như đầu tư cho công ty của riêng mình vậy.\"Nền kinh tế tự do\" gợi ý cho các doanh nghiệp và cá nhân cách phát triển phù hợp với xu thế thời đại. Thế hệ lao động mới đang tham gia vào nền kinh tế tự do như thế nào? Động cơ của họ, mong muốn của họ khi xây dựng sự nghiệp ra sao? Làm thế nào để tìm kiếm những nhân sự xuất sắc trong kỷ nguyên 4.0? Các cá nhân phải làm gì để phát huy lợi thế của mình?... Tất cả những điều căn bản về xu hướng lao động thời đại số sẽ được giải đáp bởi Marion McGovern - doanh nhân tiên phong của nền kinh tế tự do.', ''),
(212, 3, 1, 'Nếu Tôi Biết Được Khi Còn 20', 'Hồng Nhật', 2020, 8, 52000, 67000, 'image_book/neutoibietkhinaocon20.jpg', 'Trong cả cuốn sách, những triết lý kinh doanh đơn giản được minh hoạ bằng những ví dụ cụ thể và sáng tạo. Những tình huống kinh doanh được đặt ra, có thành công và có cả thất bại, vấn đề là cách đối mặt với nó. Nếu Tôi Biết Được Khi Còn 20 gần gũi với những bài học bổ ích. Ngôn từ đơn giản, dễ hiểu chuyển tải một cách trọn vẹn những hàm ý sâu sắc của tác giả.Thông qua quyển sách, tác giả còn muốn các độc giả, đặc biệt là độc giả trẻ, sẽ được trang bị đủ sự tự tin để biến căng thẳng thành sự hào hứng, biến thử thách thành các cơ hội, và cứ sau mỗi lần vấp ngã lại đứng lên trưởng thành hơn. Thông điệp cốt lõi của quyển sách có thể tóm gọn như sau: “Hãy cho phép mình táo bạo và xuất sắc!”', ''),
(213, 1, 11, 'Ngân Hàng Đột Phá', 'Brett King', 2017, 10, 99000, 139000, 'image_book/nganhangdotpha.jpg', 'Cuốn sách này không chỉ đơn thuần là bảng tóm tắt những cuộc phỏng vấn; mà còn thể hiện nhiều phân tích với các mô hình kinh doanh đang thành công, các khái niệm, cách tiếp cận và hướng xậy dựng từ góc nhìn chiến lược dựa trên công nghệ và những thành tựu - từ góc nhìn về những thành công và cả những thất bại. Quan trọng hơn nữa, chúng ta sẽ phân tích những điều mà các ngân hàng truyền thống có thể học hỏi được từ những nhà kiến tạo trong công cuộc tiên phong cho những dự án hay kế hoạch đột phá, và cả những rủi ro học có thể gặp phải nếu như không chịu lắng nghe và học hỏi. Những dữ liệu thu thập được xung quanh các bài phỏng vấn và khái niệm này được xây dựng để giúp độc giả hiểu sâu sắc hơn về các mô hình và đưa ra những dẫn chứng thống kê và số liệu bổ trợ cho nhiều chiến lược.', ''),
(214, 3, 1, 'Ngày Xưa Có Một Chuyện Tình', 'Nguyễn Nhật Ánh', 2020, 10, 125000, 156000, 'image_book/ngayxuacomotcuoctinh.jpg', 'NGÀY XƯA CÓ MỘT CHUYỆN TÌNH là tác phẩm mới tinh thứ 2 trong năm 2016 của nhà văn Nguyễn Nhật Ánh dài hơn 300 trang, được coi là tập tiếp theo của tập truyện Mắt biếc. Có một tình yêu dữ dội, với em, của một người yêu em hơn chính bản thân mình  là anh. Ngày xưa có một chuyện tình có phải là một câu chuyện cảm động khi người ta yêu nhau, nỗi khát khao một hạnh phúc êm đềm ấm áp đến thế; hay đơn giản chỉ là chuyện ba người - anh, em, và người ấy…? Bạn hãy mở sách ra, để chứng kiến làn gió tình yêu chảy qua như rải nắng trên khuôn mặt mùa đông của cô gái; nụ hôn đầu tiên ngọt mật, cái ôm đầu tiên, những giọt nước mắt và cái ôm xiết cuối cùng… rồi sẽ tìm thấy câu trả lời, cho riêng mình.', ''),
(215, 16, 11, 'Nguồn Gốc Văn Minh', ' Will Durant', 2018, 10, 105000, 135000, 'image_book/nguongcvanminh.jpg', 'Ngược dòng thời gian để xem văn minh nhân loại và vạn vật muôn loài được hình thành như thế nào.  Bạn có biết lịch sử hình thành văn minh nhân loại được hình thành như thế nào không? Và cho tới hiện tại nền văn minh đã và đang ở đâu không? Mỗi giai đoạn lịch sử qua đi là một điểm nhấn mấu chốt mà gần như người xảy ra những biến cố hoặc dấu tích đặc trưng cho thời kỳ đó.', ''),
(216, 1, 2, 'Những Mũi Tên Đồng Vùng Chợ Lớn', ' Mã Thiện Đồng', 2017, 10, 75000, 89000, 'image_book/nhungmuitendongvungcholon.jpg', 'Đề tài chiến tranh luôn là đề tài mang lại niềm cảm hứng bất tận đối với các nhà văn, nhà thơ mà đặc biệt là nhà văn Mã Thiện Đồng.  Chính đề tài này đã cuốn hút nhà văn viết say sưa, bằng tình cảm và trách nhiệm, lòng nhiệt tình và sự trân trọng nhân chứng lịch sử,… đã đem lại cho độc giả mọi lứa tuổi niềm tự hào, lòng biết ơn những người lính đã hi sinh trong các cuộc chiến đấu cũng như những người lính vẫn còn đây – làm chứng nhân lịch sử để nhà văn tái hiện lại thật sinh động và chân thực qua những câu chuyện này.  Người Hoa hay người Việt cũng đều là người dân của đất nước đang có chiến tranh, họ phải cùng nhau đứng lên để giành lại độc lập. Người Hoa vùng Chợ Lớn đã làm được những điều như thế. Qua những câu chuyện, chúng ta sẽ thấy rõ hơn những tinh thần ấy.', ''),
(217, 2, 1, 'Những Ngày Thơ Ấu', 'Nguyên Hồng', 2021, 9, 75000, 87000, 'image_book/nhungngaythoau.jpg', 'Hồi ký “Những ngày thơ ấu” là một trong những tác phẩm đặc sắc nhất của Nguyên Hồng, bao gồm thiên hồi ký cùng tên “Những ngày thơ ấu” và bốn truyện ngắn khác, được NXB Đời Nay in lần đầu năm 1940. Với lối viết chân thực giản dị mà thắm đượm trữ tình, tác phẩm đã tái hiện những kỷ niệm sâu sắc về thời thơ ấu nhiều cay đắng của tác giả trong một gia đình không hạnh phúc. Cầm bút khi chưa có nhiều kinh nghiệm sáng tác, lại đúng lúc văn đàn đang bày chật nhiều câu chuyện tả thực, Nguyên Hồng chỉ lựa chọn cách kể lại tường tận câu chuyện gia đình mình mà đã có vị thế của nhà văn tả chân, nhưng Những ngày thơ ấu không bị sa vào thói quen bi kịch hóa những khốn khổ nhân sinh như văn học tả chân hay đề cao. ', ''),
(218, 1, 2, 'Sài Gòn Năm Xưa', 'Vương Hồng Sển', 2018, 10, 120000, 138000, 'image_book/saigonnamxua.jpg', 'Bởi thấy tôi là người trong Nam, đầu pha hai thứ tóc, làm việc trong một cơ quan chuyên môn, thêm có tánh ham chơi cổ ngoạn, tom góp giấy má cũ đầy nhà, rồi tiếng đồn truyền ra: tôi sành sỏi chuyện xưa, tôi giỏi kê cứu điển cố, báo hại phần đông văn hữu Bắc và Trung, ông nào quen một đôi lần, gặp nhau, hết năm ba câu lấy lệ, làm gì cũng hỏi vặn tôi về:  \"gốc tích hai chữ \"SÀI GÒN\"', ''),
(219, 5, 14, 'Tập Viết Tiếng Nhật Căn Bản Hiragana', 'Mai Ngọc', 2021, 10, 45000, 67000, 'image_book/tapviettiengnhat.png', 'Hệ thống chữ viết và phát âm tiếng Nhật khác hoàn toàn so với hệ thống chữ tiếng Việt, nên việc nhớ được bảng chữ cái tiếng Nhật là rất khó khăn đối với hầu hết những người mới học. Cho dù học bất cứ ngôn ngữ gì bạn cũng cần có phươngpháp thì mới có hiệu quả.', ''),
(220, 1, 4, 'Tắt Đèn', 'Ngô Tất Tố', 2020, 10, 50000, 67000, 'image_book/tatden.jpg', 'Tắt đèn của nhà văn Ngô Tất Tố phản ánh rất chân thực cuộc sống khốn khổ của tầng lớp nông dân Việt Nam đầu thế kỷ XX dưới ách đô hộ của thực dân Pháp. Tác phẩm xoay quanh nhân vật chị Dậu và gia đình – một điển hình của cuộc sống bần cùng hóa sưu cao thuế nặng mà chế độ thực dân áp đặt lên xã hội Việt Nam. Trong cơn cùng cực chị Dậu phải bán khoai, bán bầy chó đẻ và bán cả đứa con để lấy tiền nộp sưu thuế cho chồng nhưng cuộc sống vẫn đi vào bế tắc, không lối thoát.', ''),
(221, 3, 39, 'Thành Công Không Cần Trả Giá', 'Martin Bjergegaard, Jordan Milne', 2017, 10, 89000, 128000, 'image_book/thanhcongtragia.jpg', 'Mọi thứ từng rất đơn giản. Chúng ta có thể dựa vào mộ số chân lý cơ bản: •	Càng làm việc chăm chỉ, bạn càng làm ra nhiều tiền •	Thành công đi cùng với hy sinh •	Không dễ gì có được thành công •	Bạn cần lựa chọn giữa gia đình và công việc •	Cuộc sống cân bằng chỉ có được khi đã về hưu hoặc sau khi lìa trần •	Không có thời gian để làm tất cả mọi chuyện •	Tự gò mình là điều cần thiết •	Người chiến thắng là người làm việc chăm chỉ nhất •	Càng bỏ ra nhiều tiếng đồng hồ để làm việc, kết quả càng cao. Doanh nhân làm việc không biết đến ngày nghỉ. Gia đình và bạn bè: hãy đợi đến Chủ nhật Ngày nay, những suy nghĩ trên không còn đúng nữa. Chúng ta đang đối mặt với một thực tế mới. Chào mừng bạn đến với thời đại của  Thành công không cần trả giá.', ''),
(222, 3, 6, 'Tôi Muốn Giàu Có', 'Suchana Swangsrisuthikul', 2018, 10, 45000, 67000, 'image_book/toimuongiauco.jpg', 'Có câu chuyện cũ kể về một người nông dân đã đào những cái cây ông ta trồng lên để xem chúng đã lớn hay chưa. Chẳng có ích gì khi cố gắng đào lên những hạt giống đã được gieo vào tiềm thức của bạn. Tất cả hạt giống đều cần thời gian để nảy mầm và hạt giống ý thức về sự giàu có, thịnh vượng mà chương trình này đã gieo vào bạn cũng vậy. Bạn có thể hay không thể ngay lập tức nhìn thấy ảnh hưởng của nó trong cuộc sống của mình. Chúc cho mọi ước mơ của bạn đều trở thành sự thật!  Gửi đến bạn cả Tình yêu và Nhiệt huyết.', ''),
(223, 5, 11, 'Từ Điển Anh - Việt 125.000 Từ', 'Văn Lang Culture Jsc', 2018, 7, 90000, 119000, 'image_book/tudien.jpg', '- Câp nhật hơn 20.000 từ mới thuộc các lĩnh vực - Giải nghĩa đầy đủ, ví dụ phong phú - Trình bày ngắn gọn, khoa học, dễ sử dụng - Đáp ứng yêu cầu học tập, tra cứu, dịch thuật,….- Câp nhật hơn 20.000 từ mới thuộc các lĩnh vực - Giải nghĩa đầy đủ, ví dụ phong phú - Trình bày ngắn gọn, khoa học, dễ sử dụng - Đáp ứng yêu cầu học tập, tra cứu, dịch thuật,….', ''),
(224, 15, 37, 'Yoga Cho Sức Khỏe Vững Bền', 'Liz Lark & Mark Ansari', 2015, 10, 108000, 128000, 'image_book/yoga.jpg', 'Yoga là một phương pháp thư giãn cơ thể, tập trung tâm trí và phòng tránh bệnh tật. Yoga cũng giúp chúng ta chống lại những căng thẳng, chính vì thế mà Yoga hiện rất được quan tâm và  góp phần giúp chúng ta bắt nhịp với cuộc sống thay đổi quá nhanh hiện nay.Yoga sẽ giúp chúng ta đạt được sự hòa hợp giữa thân và tâm. Luyện tập các tư thế (asana) và các bài tập thở (pranayama) sẽ giúp thanh lọc cơ thể, phục hồi năng lượng và tăng cường sức mạnh, độ dẻo dai. Ngoài ra, yoga cũng giúp cân bằng lại cảm xúc để ta có thể ứng phó hiệu quả với những đòi hỏi của cuộc sống.', ''),
(225, 3, 15, 'Lược sử vạn vật', 'Nguyễn Nhật Ánh', 1998, 0, 95000, 130000, 'image_book/luocsuvanvat.jpg', 'zcsg', 'co'),
(234, 13, 14, 'Mega 2020 - Siêu Tốc Luyện Đề THPT Quốc Gia 2020 Ngữ Văn', 'Bùi Dương Lịch', 2020, 0, 89000, 109000, 'image_book/megaa.jpg', 'Với mục đích hỏa tốc củng cố, khắc sâu lý thuyết, hoàn thiện và nâng cao kỹ năng giải đề môn Toán theo hình thức mới nhất, tác giả Nguyễn Xuân Nam đã biên soạn bộ sách Siêu Tốc Luyện Đề THPT Quốc Gia 2020 Toán Học đưa ra 2 chuyền đề trong tâm nhất: Đại số và Hình học.  Bộ sách luyện thi môn Toán giúp cho các em nắm trọn lý thuyết trọng điểm, các công thức chính phải nhớ. Nắm chắc mẹo, chiến thuật, bí kíp, phương pháp xử lý nhanh để đạt điểm Toán tối đa.', ''),
(237, 6, 29, 'Sách Lịch Sử Quân Sự Việt Nam (14 Tập)', 'Bộ Quốc Phòng Viện Lịch Sử Quân Sự VN', 2005, 0, 1800000, 2200000, 'image_book/sls.jpg', 'Để tiếp tục phát huy truyền thống lịch sử vẻ vang của dân tộc ta qua bao cuộc chiến tranh, đặc biệt là Chiến thắng Điện Biên Phủ “Lừng Lẫy Năm Châu, Chấn Động Địa Cầu”, khẳng định sự lãnh đạo sáng suốt của Đảng Cộng sản Việt Nam, Chủ tịch Hồ Chí Minh, tinh thần đại đoàn kết dân tộc và sức mạnh của Quân Đội Nhân Dân Việt Nam là nhân tố quyết định mọi thắng lợi của cách mạng Việt Nam; khẳng định ý nghĩa và giá trị lịch sử vĩ đại của của lực lượng Quân Đội Nhân Dân Việt Nam. Nhằm ghi nhận và tuyên truyền đến thế hệ sau về những đóng góp vô cùng to lớn của lực lượng Quân Đội Nhân Dân Việt Nam trong công cuộc xây dựng và bảo vệ tổ quốc. Nhà xuất bản Chính trị Quốc gia Sự thật cho biên soạn, xuất bản và phát hành bộ sách Lịch Sử Quân Sự Việt Nam (14 Tập)', ''),
(238, 6, 39, 'Lịch sử thế giới', 'Nhiều tác giả', 2016, 0, 65000, 89000, 'image_book/lstg.jpg', 'ịch sử thế giới – sách lịch sử Được xuất bản từ những năm 50 của thế kỷ 19, “Lịch sử thế giới” là cuốn sách viết về bối cảnh lịch sử của hầu hết các nước trên thế giới. Tuy nhiên, tựa sách này có nhiều uẩn khúc chưa được giải đáp trọn vẹn. Vì thế đến nay, cuốn sách mới được xuất bản 1 lần duy nhất và cho đến hiện tại có rất ít người biết về cuốn sách lịch sử này.', ''),
(239, 14, 13, 'Những Tù Nhân Của Địa Lý', 'Phan Linh Lan', 2020, 0, 93000, 109000, 'image_book/ntn.jpg', '“Khi chúng ta đang vươn tới những vì sao, chính bởi những thách thức đặt ra phía trước mà chúng ta có lẽ sẽ phải chung tay để ứng phó: du hành vào vũ trụ không phải với tư cách người Nga, người Trung Quốc hay người Mỹ, mà là những đại diện của nhân loại. Nhưng cho đến nay, mặc dù đã thoát khỏi sự kìm hãm của trọng lực, chúng ta vẫn đang bị giam giữ trong tâm trí của chính mình, bị giới hạn bởi sự nghi ngờ của mình về ‘kẻ khác’, và do đó bởi cuộc cạnh tranh chính yếu về tài nguyên. Phía trước chúng ta còn cả một chặng đường dài.”  Sách \"Những Tù Nhân Của Địa Lý\" của tác giả Tim Marshall  Người Nga vẫn sẽ lo âu dõi mắt về phía tây, nơi có dải đất vẫn còn là bình nguyên, dễ bị xâm nhập; Ấn Độ và Trung Quốc vẫn sẽ bị cách ngăn bởi dãy Himalaya sừng sững, và địa lý sẽ xác định bản chất của những cuộc xung đột giữa hai nước trong tương lai, bất chấp sự phát triển của công nghệ và quân sự; “Đại gia đình châu Âu” đói khát năng lượng, bị phụ thuộc vào những đường ống dẫn dầu từ Nga, và do đó họ không thực sự có nhiều lựa chọn trên bàn đàm phán; sự suy yếu của Hoa Kỳ trong vị thế một siêu cường số một dường như đã bị thổi phồng quá mức, nếu xét tới những lợi thế địa lý mà nước này đã dày công gây dựng…  Và còn rất nhiều dẫn chứng cho thấy vai trò then chốt của các nhân tố địa lý trong bối cảnh chính trị hiện đại. Nhân loại đang trên đường hiện thực hóa giấc mơ vươn vào không gian. Nhưng Tim Marshall vẫn xác quyết rằng: “Các nhân tố địa lý vốn đã góp phần xác định lịch sử đa phần sẽ tiếp tục xác định tương lai của chúng ta”, và rằng: “Địa lý vẫn luôn luôn là một loại nhà tù định nghĩa một quốc gia là gì, hoặc có thể là gì, và là một nhà tù mà các nhà lãnh đạo thế giới thường phải nỗ lực để thoát ra”.  Hay nói cách khác, theo luận điểm của Tim Marshall, thì một thế kỷ nữa kể từ bây giờ, nhân loại vẫn sẽ là “những tù nhân của địa lý”.  “Một suy ngẫm cốt lõi và chi tiết về những động lực địa chính trị tồn tại trên toàn cầu.” – Tiến sĩ Sajjan M. Gohel  Thông tin tác giả Tác giả Tim Marshall Tim Marshall Là ký giả người Anh với hơn 25 năm kinh nghiệm về tin tức đối ngoại. Ngoài vai trò ký giả và biên tập viên, Marshall còn là nhà bình luận khách mời về các sự kiện thế giới cho BBC, Sky News.  Prisoners of Geography là một trong năm cuốn sách của ông đều nằm trong danh sách bán chạy của The New York Times, và được xuất bản ra nhiều thứ tiếng.  “Nói nhanh cho vuông, đây là một trong những cuốn sách hay nhất về địa chính trị bạn có thể tưởng tượng: đọc nó cũng giống như một nguồn ánh sáng rọi vào tâm trí bạn… Marshall có cái đầu mạch lạc, sáng suốt và sở hữu một năng lực gần như thần bí là có thể làm cho bức tranh toàn cảnh trở nên dễ hiểu và mạch lạc… Cuốn sách này, bao quát một chủ đề phức tạp như vậy, thật kinh ngạc là tôi đã không thể buông cuốn sách cho tới khi đọc xong… Tôi không thể tìm ra một cuốn sách nào khác có thể giải thích tình hình thế giới hay hơn.”  – Nicholas Lezard, Evening Standard  Xem tất cả sách của tác giả Tim Marshall  Sách Những Tù Nhân Của Địa Lý của tác giả Tim Marshall, có bán tại Nhà sách online NetaBooks với ưu đãi Bao sách miễn phí và Gian hàng NetaBooks tại Tiki với ưu đãi Bao sách miễn phí và tặng Bookmark', ''),
(246, 15, 13, 'NGỦ ÍT VẪN KHỎE (TSUBOTA SATORU)', 'Hương Linh', 2010, 0, 96000, 23000, 'image_book/sach-Ngu-it-van-khoe.jpg', '“Phương pháp ngủ ngon trong 5 tiếng” của cuốn sách này mang đến cho bạn kỹ thuật sở hữu tính hợp lý cả về y học lẫn sinh lý học để trở thành “người ngủ ngắn”. Phương pháp ngủ ngon trong 5 tiếng tức là, cho dù bạn chỉ ngủ trong một thời gian ngắn thôi, cả não bộ và cơ thể vẫn có cảm giác tràn đầy sinh khí, đôi mắt và tinh thần hoàn toàn trong trạng thái tỉnh táo. Nhờ đó, mọi hoạt động trong ngày đều đạt hiệu quả cao nhất. Bên cạnh đó, kỹ thuật “Thức dậy lúc 5 giờ sáng” mà tác giả sẽ đề cập tới chính là phương pháp cải thiện giấc ngủ vô cùng hiệu quả dành cho những người thường ngủ khoảng 7 tiếng một ngày, giúp họ rút ngắn thời gian ngủ theo kiến thức y học đúng đắn và khoa học.', ''),
(247, 2, 12, 'Những Người Đàn Bà', 'Nguyễn Minh Anh', 2010, 0, 65000, 72000, 'image_book/nhung-nguoi-dan-ba-truyen-thieu-thuyet-sach-tieu-thuyet-hay-nhat.jpg', 'Xuyên suốt câu chuyện là sự câm lặng của ba thế hệ phụ nữ. Thế hệ đầu thoát khỏi sự chiếm đóng của Israel trong xung đột Palestine và Israel, chạy trốn đến nước Mỹ với mong muốn tránh khỏi cuộc sống ở trại tị nạn. Thế hệ thứ 2 đồng ý một cuộc hôn nhân sắp đặt với người Mỹ gốc Palestine với hi vọng đất Mỹ tự do thì tiếng nói của nữ giới sẽ được tôn trọng hơn trên đất Palestine. Thế hệ thứ 3, suýt nữa thì rơi vào bánh xe đổ của các thế hệ trước, nếu cô ấy không phát hiện ra bí mật kinh khủng của gia đình mình và số phận của người mẹ đáng thươ Mỗi thế hệ đều có giấc mơ và khát vọng về sự tự do và nữ quyền, nhưng không phải ai cũng có thể đấu tranh đến tận cùng.', ''),
(249, 2, 1, 'Ốc sên chạy ', 'Điệp Chí Linh', 2005, 0, 65000, 72000, 'image_book/ốc-sên-chạy-truyện-ngôn-tình-hay-nhất-Trung-Quốc.jpg', 'rong cuốn truyện ngôn tình hay và tình cảm này, có lẽ Lục Song chính là hiện thân của chàng hoàng tử của thời hiện đại, anh luôn thầm lặng đứng phía sau để quan tâm, che chở và bảo vệ cho cô nàng Vệ Nam.  Thế nhưng đúng như tên gọi của tác phẩm, hai người lại như hai con ốc sên đang đi trên con đường tìm tình yêu hạnh phúc của đời mình, họ cứ chậm rãi mà đi, từng bước một mà không hề nóng vội.  Đổi lại, chậm mà chắc, tình cảm chân thành của họ được vun đắp dần qua thời gian và cuối cùng, họ đã được hạnh phúc bên nhau tựa như mối tình cổ tích giữa đời thực vậy.', ''),
(252, 2, 12, 'Rồi một ngày cuộc sống hoá hư vô', 'Hideko Suzuki', 2010, 0, 96000, 130000, 'image_book/Rồi-một-ngày-cuộc-sống-hoá-hư-vô-Hành-trình-về-phương-đông-Những-cuốn-sách-làm-thay-đổi-cuộc-đời-bạn-276x420.jpg', 'Sáng mai nhất định bạn sẽ chết, hôm nay bạn định sống như thế nào?”  ” Giờ điều bạn thật sự mong muốn là gì?”  Đây là một cuốn sách với chủ đề rất đặc biệt. Một trong số ít những cuốn sách viết về ” Cái chết”.  Tác giả  Hideko Suzuki đã viết ” Cuốn sách này tôi viết cho những ai đang cận kề cái chết và người thân xung quanh họ  Tôi cũng muốn  những người dù chưa phải đối mặt với cái chết nhưng luôn bị nỗi sợ về cái chết bủa vây sẽ đọc được cuốn sách này”.', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(1, 'test user', 'test@gmail.com', 2523523522523523, ' This is sample text for the test.', '2019-06-29 19:03:08', 'Test Admin Remark', '2019-06-30 12:55:23', 1),
(8, 'Nguyá»…n Thá»‹ Minh ThÆ°Æ¡ng', 'thuongthu305@gmail.com', 369654125, ' TÃ´i Ä‘á»™c thÃ¢n, tÃ´i vui tÃ­nh', '2022-04-03 06:24:44', NULL, NULL, NULL),
(9, 'Nguyá»…n Thá»‹ Minh ThÆ°Æ¡ng', 'thuongthu305@gmail.com', 369654125, ' ok', '2022-04-24 09:13:24', NULL, NULL, NULL),
(10, 'phÆ°Æ¡ng', 'phuong@gmail.com', 9324554, ' Ká»¹ nÄƒng sá»‘ng', '2022-04-24 09:28:55', NULL, NULL, NULL),
(11, 'Phuong', 'phuong@gmail.com', 9324554, ' Ká»¹ nÄƒng sá»‘ng', '2022-04-24 09:29:33', NULL, NULL, NULL),
(13, 'Há»“ Thá»‹ PhÆ°Æ¡ng', 'phuong@gmail.com', 9324554, ' Mai vÃ ng', '2022-05-08 08:06:35', NULL, NULL, NULL),
(15, 'PhÆ°Æ¡ng', 'phuong@gmail.com', 9324554, ' Kinh doanh', '2022-05-17 03:03:48', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(11) NOT NULL,
  `TuaDe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TinTuc` varchar(20000) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaNhanVien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `NgayDang` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `TuaDe`, `TinTuc`, `img`, `MaNhanVien`, `url`, `ten_url`, `NgayDang`) VALUES
(38, 'Minh ThÆ°Æ¡ng Nguyá»…n', 'Ai Ä‘á»c sÃ¡ch nÃ y chÆ°a áº¡? CÃ³ thá»ƒ review giÃºp em Ä‘Æ°á»£c khÃ´ng áº¡?', 'kctg.jpg', '', '', '', ''),
(39, 'Thá»‹ PhÆ°Æ¡ng', 'SÃ¡ch hay khÃ´ng áº¡?', 'dee.jpg', '', '', '', ''),
(40, 'Tráº§n Anh', 'Ai Ä‘á»c rá»“i cho em há»i truyá»‡n nÃ y cÃ³ hay khÃ´ng áº¡? cÃ¡i káº¿t tháº¿ nÃ o áº¡? HE hay SE áº¡?', 'thang6.jpg', '', '', '', ''),
(41, 'Minh Anh', 'xin review', 'gian1.jpg', '', '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`mactdh`,`madh`,`masach`),
  ADD KEY `madh` (`madh`),
  ADD KEY `masach` (`masach`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`,`manv`,`makh`),
  ADD KEY `makh` (`makh`),
  ADD KEY `manv` (`manv`);

--
-- Chỉ mục cho bảng `guitang`
--
ALTER TABLE `guitang`
  ADD PRIMARY KEY (`maguitang`,`madh`),
  ADD KEY `madh` (`madh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`),
  ADD UNIQUE KEY `email` (`emailkh`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Chỉ mục cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`manxb`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`manhap`,`manv`,`masach`),
  ADD KEY `masach` (`masach`),
  ADD KEY `manv` (`manv`);

--
-- Chỉ mục cho bảng `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`masach`,`madm`,`manxb`),
  ADD KEY `madm` (`madm`),
  ADD KEY `manxb` (`manxb`);

--
-- Chỉ mục cho bảng `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `mactdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT cho bảng `guitang`
--
ALTER TABLE `guitang`
  MODIFY `maguitang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  MODIFY `manxb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `manhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `masach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT cho bảng `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
