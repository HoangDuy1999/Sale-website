-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 08:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deploy99`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdondathang`
--

CREATE TABLE `chitietdondathang` (
  `MaChiTietDonDatHang` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaBan` int(11) DEFAULT NULL,
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `MaSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdondathang`
--

INSERT INTO `chitietdondathang` (`MaChiTietDonDatHang`, `SoLuong`, `GiaBan`, `MaDonDatHang`, `MaSanPham`) VALUES
('19121910000', 1, 25990000, '1912191', 37),
('19121920000', 1, 23990000, '1912192', 66),
('20121910000', 1, 9490000, '2012191', 47),
('20121920000', 1, 256000, '2012192', 25),
('21121910000', 1, 21990000, '2112191', 68),
('21121920000', 1, 33490000, '2112192', 67),
('21121930000', 1, 4990000, '2112193', 12),
('24121910000', 1, 7990000, '2412191', 56),
('26121910000', 10, 21990000, '2612191', 68);

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `MaDonDatHang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` datetime DEFAULT NULL,
  `TongThanhTien` int(11) DEFAULT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaTinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`MaDonDatHang`, `NgayLap`, `TongThanhTien`, `MaTaiKhoan`, `MaTinhTrang`) VALUES
('1912191', '2019-12-19 15:31:27', 25990000, 2, 3),
('1912192', '2019-12-19 15:47:35', 23990000, 16, 3),
('2012191', '2019-12-20 16:05:29', 9490000, 2, 4),
('2012192', '2019-12-20 16:30:13', 256000, 37, 4),
('2112191', '2019-12-21 11:57:57', 21990000, 37, 1),
('2112192', '2019-12-21 21:01:00', 45680000, 37, 1),
('2112193', '2019-12-21 21:05:44', 4990000, 37, 1),
('2412191', '2019-12-24 11:15:01', 7990000, 37, 1),
('2612191', '2019-12-26 23:44:41', 227280000, 37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `MaHangSanXuat` int(11) NOT NULL,
  `TenHangSanXuat` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LogoURL` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MaHangSanXuat`, `TenHangSanXuat`, `LogoURL`, `BiXoa`) VALUES
(1, 'Apple', 'logo_apple.png', 0),
(2, 'SamSung', 'logo_samsung.png', 0),
(3, 'Dell', 'logo_dell.png', 0),
(4, 'Asus', 'logo_asus.png', 0),
(5, 'Casio', 'logo_casio.png', 0),
(11, 'acbe', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSanPham` int(11) NOT NULL,
  `TenLoaiSanPham` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `BiXoa`) VALUES
(1, 'Điện thoại', 0),
(2, 'Tablet', 0),
(3, 'Laptop', 0),
(4, 'Phụ kiện', 0),
(5, 'Đồng hồ', 0),
(11, 'Cũ giá rẻ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `MaLoaiTaiKhoan` int(11) NOT NULL,
  `TenLoaiTaiKhoan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`MaLoaiTaiKhoan`, `TenLoaiTaiKhoan`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhURL` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GiaSanPham` int(11) DEFAULT NULL,
  `NgayNhap` datetime DEFAULT NULL,
  `SoLuongTon` int(11) DEFAULT NULL,
  `SoLuongBan` int(11) DEFAULT NULL,
  `SoLuongXem` int(11) DEFAULT NULL,
  `MoTa` text COLLATE utf8_unicode_ci,
  `XuatXu` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NhaSanXuat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT '0',
  `MaLoaiSanPham` int(11) NOT NULL,
  `MaHangSanXuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuongXem`, `MoTa`, `XuatXu`, `NhaSanXuat`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`) VALUES
(1, 'iphone 11 pro max 256GB ', 'apple-iphone-7-plus.png', 11990000, '2019-12-18 06:28:07', 32, 2, 20, 'Màn hình:LED-backlit IPS LCD, 5.5\", Retina HD\r\nHệ điều hành:iOS 12\r\nCamera sau:Chính 12 MP & Phụ 12 MP\r\nCamera trước:7 MP\r\nCPU:Apple A10 Fusion 4 nhân\r\nRAM:3 GB\r\nBộ nhớ trong:2 GB\r\nThẻ SIM:\r\n1 Nano SIM, Hỗ trợ 4G\r\nXuất xứ: Mỹ\r\nNhà sản xuất: Apple', 'Hoa Kỳ', 'Apple', 0, 1, 1),
(2, 'Laptop Apple Macbook Air 2019 i5', 'apple-macbook-air-2019-i5.jpg', 27990000, '2019-12-12 06:29:07', 30, 9, 26, 'CPU:	Intel Core i5 Coffee Lake, 1.60 GHz\r\nRAM:	8 GB, DDR3, 2133 MHz\r\nỔ cứng:	SSD: 128 GB\r\nMàn hình:	13.3 inch, Retina (2560 x 1600)\r\nCard màn hình:	Card đồ họa tích hợp, Intel UHD Graphics 617\r\nCổng kết nối:	2 x Thunderbolt 3 (USB-C)\r\nHệ điều hành:	Mac OS\r\nThiết kế:	Vỏ kim loại nguyên khối, PIN liền\r\nKích thước:	Dày 4.1 đến 15.6 mm, 1.25 kg', 'Hoa Kỳ', 'Apple', 0, 3, 1),
(3, 'Laptop Apple MacBook Air 2017', 'apple-macbook-air-mqd32sa-a-i5.jpg', 22490000, '2019-12-13 00:00:00', 20, 10, 30, 'CPU:	Intel Core i5 Broadwell, 1.80 GHz\r\nRAM:	8 GB, DDR3L(On board), 1600 MHz\r\nỔ cứng:	SSD: 128 GB\r\nMàn hình:	13.3 inch, WXGA+(1440 x 900)\r\nCard màn hình:	Card đồ họa tích hợp, Intel HD Graphics 6000\r\nCổng kết nối:	MagSafe 2, 2 x USB 3.0, Thunderbolt 2\r\nHệ điều hành:	Mac OS\r\nThiết kế:	Vỏ kim loại nguyên khối, PIN liền\r\nKích thước:	Dày 17 mm, 1.35 Kg', 'Hoa Kỳ', 'Apple', 0, 3, 1),
(4, 'Laptop Apple Macbook Pro Touch 2019', 'apple-macbook-pro-touch-2019.jpg', 33990000, '2019-12-13 06:27:06', 60, 10, 12, 'CPU:	Intel Core i5 Coffee Lake, 1.40 GHz\r\nRAM:	8 GB, DDR3L, 2133 MHz\r\nỔ cứng:	SSD: 128 GB\r\nMàn hình:	13.3 inch, Retina (2560 x 1600)\r\nCard màn hình:	Card đồ họa tích hợp, Intel Iris Plus Graphics 645\r\nCổng kết nối:	2 x Thunderbolt 3 (USB-C)\r\nHệ điều hành:	Mac OS\r\nThiết kế:	Vỏ kim loại nguyên khối, PIN liền\r\nKích thước:	Dày 14.9 mm, 1.37 kg', 'Hoa Kỳ', 'Apple', 0, 3, 1),
(5, ' Laptop Apple Macbook Pro Touch 2019 i7', 'apple-macbook-pro-touch-2019-i5.jpg', 58990000, '2019-07-06 00:00:00', 55, 18, 20, 'CPU:	Intel Core i7 Coffee Lake, 2.60 GHz\r\nRAM:	16 GB, DDR4 (On board), 2400 MHz\r\nỔ cứng:	SSD: 256 GB\r\nMàn hình:	15.4 inch, Retina (2880 x 1800)\r\nCard màn hình:	Card đồ họa rời, AMD Radeon Pro 555X, 4 GB\r\nCổng kết nối:	4 x Thunderbolt 3 (USB-C)\r\nHệ điều hành:	Mac OS\r\nThiết kế:	Vỏ kim loại nguyên khối, PIN liền\r\nKích thước:	Cao 15.5 mm, 1.83 kg', 'Hoa Kỳ', 'Apple', 0, 3, 1),
(6, 'Laptop Apple MacBook Pro 2018 Touch i5', 'apple-macbook-pro-touch-mr9q2sa-a-2018.jpg', 37690000, '2019-01-19 06:28:07', 46, 14, 22, 'CPU:	Intel Core i5 Kabylake Refresh, 2.30 GHz\r\nRAM:	8 GB, DDR3L(On board), 2133 MHz\r\nỔ cứng:	SSD: 256 GB\r\nMàn hình:	13.3 inch, Retina (2560 x 1600)\r\nCard màn hình:	Card đồ họa tích hợp, Intel Iris Plus Graphics 655\r\nCổng kết nối:	4 x Thunderbolt 3 (USB-C)\r\nHệ điều hành:	Mac OS\r\nThiết kế:	Vỏ kim loại nguyên khối, PIN liền\r\nKích thước:	Dày 14.9 mm, 1.37 kg', 'Hoa Kỳ', 'Apple', 0, 3, 1),
(7, 'Ốp Lưng Iphone 7 8 Silicon', 'apple-op-lung-iphone-78-silicon-cocoa.png', 70000, '2019-08-19 09:28:07', 129, 20, 27, 'Thiết kế đẹp mắt cho người dùng, tinh tế và sang trọng', 'Hoa Kỳ', 'Apple', 0, 4, 1),
(8, 'Adapter Sạc Type-C 18W Apple MU7V2 Trắng', 'apple-sac-12w-usb-power-adapter.png', 990000, '2019-12-04 00:00:00', 200, 60, 70, 'Thiết kế nhỏ gọn, đầu cắm 2 chấu thông dụng.\r\nCổng ra Type-C, kết nối thêm dây cáp để sạc cho điện thoại, máy tính bảng.\r\nCông suất 18W cho tốc độ sạc nhanh chóng.\r\nSản phẩm chính hãng Apple, nguyên seal 100%.\r\nLưu ý: Thanh toán trước khi mở seal.', 'Hoa Kỳ', 'Apple', 0, 4, 1),
(9, 'Tai nghe EarPods MMTN2', 'apple-tai-nghe-earpods-with-lightning.png', 790000, '2019-06-06 00:00:00', 87, 18, 20, 'Thiết kế hiện đại, đầu tai nghe tròn theo hình dáng của tai.\r\nCó phím điều chỉnh âm lượng, nghe/nhận cuộc gọi.\r\nCổng lightning phù hợp với đa số iPhone, iPad...\r\nSản phẩm chính hãng nguyên seal 100%.\r\nLưu ý: Thanh toán trước khi mở seal.', 'Hoa Kỳ', 'Apple', 0, 4, 1),
(10, 'Tai Nghe Earpods MNHF2', 'apple-tai-nghe-earpods-with-remote.png', 790000, '2019-12-10 00:10:00', 217, 64, 71, 'Thiết kế hiện đại, sang trọng và thoải mái.\r\nCó phím điều chỉnh âm lượng, nghe/nhận cuộc gọi.\r\nCổng 3.5mm phù hợp nhiều loại điện thoại, máy tính bảng, laptop.\r\nSản phẩm chính hãng Apple, nguyên seal 100%.\r\nLưu ý: Thanh toán trước khi mở seal.', 'Hoa Kỳ', 'Apple', 0, 4, 1),
(11, 'Apple Watch S3 GPS', 'apple-watch-3.png', 5490000, '2019-12-14 00:00:00', 100, 20, 56, 'Công nghệ màn hình:	OLED\r\nKích thước màn hình:	1.9 inch\r\nThời gian sử dụng pin:	Khoảng 18 giờ\r\nHệ điều hành:	iOS 13 trở lên\r\nChất liệu mặt:	Ion-X strengthened glass\r\nĐường kính mặt:	38 mm\r\nKết nối:	Wifi, Bluetooth\r\nNgôn ngữ:	Tiếng Anh', 'Hoa Kỳ', 'Apple', 0, 5, 1),
(12, 'Apple Watch S1', 'apple-watch-3-phien-ban-38.png', 4990000, '2019-09-14 07:21:21', 39, 13, 24, 'Công nghệ màn hình:	OLED cảm ứng\r\nKích thước màn hình:	1.9 inch\r\nThời gian sử dụng pin:	Khoảng 18 giờ\r\nHệ điều hành:	iOS 9 trở lên\r\nChất liệu mặt:	Ion-X strengthened glass\r\nĐường kính mặt:	38 mm\r\nKết nối:	Wifi, Bluetooth\r\nNgôn ngữ:	Tiếng Anh, Tiếng Việt', 'Hoa Kỳ', 'Apple', 0, 5, 1),
(13, 'Apple Watch S5 ', 'apple-watch-series-1-38mm,-vien-nhom,-day-mau-trang.png', 11990000, '2019-11-05 00:00:00', 36, 12, 2, 'Công nghệ màn hình:	OLED\r\nKích thước màn hình:	1.78 inch\r\nThời gian sử dụng pin:	Khoảng 18 giờ\r\nHệ điều hành:	iOS 13 trở lên\r\nChất liệu mặt:	Ion-X strengthened glass\r\nĐường kính mặt:	44 mm\r\nKết nối:	Wifi, Bluetooth v5.0, GPS\r\nNgôn ngữ:	Tiếng Anh, Tiếng Việt', 'Hoa Kỳ', 'Apple', 0, 5, 1),
(14, 'Apple Watch S5 LTE ', 'AppleWatch-series-5.png', 15990000, '2019-12-02 00:00:00', 59, 30, 21, 'Công nghệ màn hình:	OLED\r\nKích thước màn hình:	1.78 inch\r\nThời gian sử dụng pin:	Khoảng 18 giờ\r\nHệ điều hành:	iOS 13 trở lên\r\nChất liệu mặt:	Ion-X strengthened glass\r\nĐường kính mặt:	44 mm\r\nKết nối:	Wifi, Bluetooth v5.0, GPS, Hỗ trợ eSim\r\nNgôn ngữ:	Tiếng Anh, Tiếng Việt', 'Hoa Kỳ', 'Apple', 0, 5, 1),
(15, 'Laptop Asus VivoBook Pro F571GD', 'asus-f571gd.jpg', 19290000, '2019-11-11 00:00:00', 99, 46, 7, 'CPU:	Intel Core i5 Coffee Lake, 8300H, 2.30 GHz\r\nRAM:	8 GB, DDR4 (On board +1 khe), 2400 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, NVIDIA GeForce GTX 1050, 4GB\r\nCổng kết nối:	2 x USB 2.0, USB 3.1, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 21.9 mm, 2.14 kg', 'Đài Loan', 'Asus', 0, 3, 4),
(16, 'Laptop Asus Gaming ROG Strix G531GD', 'asus-gaming-rog-g531gd.jpg', 26490000, '2019-11-14 00:00:00', 96, 23, 14, 'CPU:	Intel Core i7 Coffee Lake, 9750H, 2.60 GHz\r\nRAM:	8 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, NVIDIA GeForce GTX 1050, 4GB\r\nCổng kết nối:	3 x USB 3.1, HDMI, LAN (RJ45), USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 25.8 mm, 2.40 kg', 'Đài Loan', 'Asus', 0, 3, 4),
(17, 'Laptop Asus Gaming ROG Strix G531', 'asus-rog-g531.jpg', 38990000, '2019-09-16 07:29:21', 55, 13, 8, 'CPU:	Intel Core i7 Coffee Lake, 9750H, 2.60 GHz\r\nRAM:	8 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, NVIDIA® GeForce RTX™ 2060, 6GB\r\nCổng kết nối:	HDMI 2.0, 3 x USB 3.1, LAN (RJ45), USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ kim loại, PIN liền\r\nKích thước:	Dày 26 mm, 2.4 kg', 'Đài Loan', 'Asus', 0, 3, 4),
(18, 'Laptop Asus VivoBook S430FN', 'asus-s430fn.jpg', 18490000, '2019-11-19 00:00:00', 53, 23, 11, 'CPU:	Intel Core i5 Coffee Lake, 8265U, 1.60 GHz\r\nRAM:	8 GB, DDR4 (On board +1 khe), 2400 MHz\r\nỔ cứng:	SSD: 256 GB M.2 SATA3, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	14 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, NVIDIA Geforce MX150, 2GB\r\nCổng kết nối:	2 x USB 2.0, USB 3.1, HDMI, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ kim loại, PIN liền\r\nKích thước:	Dày 18 mm, 1.4 kg', 'Đài Loan', 'Asus', 0, 3, 4),
(19, 'Laptop Asus ZenBook 13 UX333FA', 'asus-ux333fa-a4184t-19.jpg', 22490000, '2019-08-18 06:59:07', 60, 33, 22, 'CPU:	Intel Core i5 Coffee Lake, 8265U, 1.60 GHz\r\nRAM:	8 GB, DDR3L(On board), 2133 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe\r\nMàn hình:	13.3 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 620\r\nCổng kết nối:	USB 3.1, HDMI, USB 2.0, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ kim loại, PIN liền\r\nKích thước:	Dày 16.9 mm, 1.25 kg', 'Đài Loan', 'Asus', 0, 3, 4),
(20, 'Laptop Asus VivoBook X509U', 'asus-vivobook-x509u.jpg', 10690000, '2019-12-03 00:00:00', 56, 23, 17, 'CPU:	Intel Core i3 Kabylake, 7020U, 2.30 GHz\r\nRAM:	4 GB, DDR4 (On board +1 khe), 2400 MHz\r\nỔ cứng:	HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 620\r\nCổng kết nối:	2 x USB 2.0, USB 3.1, HDMI, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 22.9 mm, 1.8 kg', 'Đài Loan', 'Asus', 0, 3, 4),
(21, 'Laptop Asus VivoBook X441MA(GA024T)', 'asus-x441ma.jpg', 7190000, '2019-12-07 00:00:00', 34, 12, 7, 'CPU:	Intel Pentium, N5000, 1.10 GHz\r\nRAM:	4 GB, DDR4 (1 khe), 2133 MHz\r\nỔ cứng:	HDD: 1 TB SATA3\r\nMàn hình:	14 inch, HD (1366 x 768)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® HD Graphics\r\nCổng kết nối:	HDMI, LAN (RJ45), USB 2.0, USB Type-C, USB 3.0, VGA (D-Sub)\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 27.6 mm, 1.7 kg', 'Đài Loan', 'Asus', 0, 3, 4),
(22, 'Laptop Asus VivoBook X507MA', 'asus-x507ma.jpg', 6490000, '2019-09-19 07:21:21', 78, 23, 21, 'CPU:	Intel Celeron, N4000, 1.10 GHz\r\nRAM:	4 GB, DDR4 (1 khe), 2400 MHz\r\nỔ cứng:	SSD: 256 GB M2\r\nMàn hình:	15.6 inch, HD (1366 x 768)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 600\r\nCổng kết nối:	2 x USB 3.0, HDMI, USB 2.0\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 21.9 mm, 1.75 kg', 'Đài Loan', 'Asus', 0, 3, 4),
(23, 'Laptop Asus VivoBook X509FJ', 'asus-x509fj.jpg', 12790000, '2019-11-25 00:00:00', 34, 2, 3, 'CPU:	Intel Core i3 Coffee Lake, 8145U, 2.10 GHz\r\nRAM:	4 GB, DDR4 (On board +1 khe), 2400 MHz\r\nỔ cứng:	HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, NVIDIA GeForce MX230 2GB\r\nCổng kết nối:	2 x USB 2.0, USB 3.1, HDMI, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 22.9 mm, 1.9 kg', 'Đài Loan', 'Asus', 0, 3, 4),
(24, 'Laptop Asus ZenBook Duo UX481F ', 'asus-zenbook-duo-ux481f.jpg', 32990000, '2019-12-12 06:59:07', 65, 17, 20, 'CPU:	Intel Core i5 Comet Lake, 10210U, 1.60 GHz\r\nRAM:	8 GB, DDR3L(On board), 2133 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe\r\nMàn hình:	14 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, NVIDIA GeForce MX250 2GB\r\nCổng kết nối:	2 x USB 3.1, HDMI, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ kim loại, PIN liền\r\nKích thước:	Dày 19.9 mm, 1.57 kg', 'Đài Loan', 'Asus', 0, 3, 4),
(25, 'Bộ Adapter sạc kèm cáp Type C Samsung TA20EW', 'bo-adapter-sac-kem-cap-type-c-samsung.jpg', 256000, '2019-12-10 00:00:00', 53, 10, 39, 'Thiết kế nhỏ và gọn.\r\nTương thích với mọi dòng điện.\r\nTương thích với các thiết bị sử dụng cổng sạc Type C .\r\nSản phẩm chính hãng Samsung.', 'Hàn Quốc', '	\r\nSamSung', 0, 4, 2),
(26, 'Cáp 3 đầu 3 Micro 1 Type-C 1.3 m Samsung MN93', 'cap-3-dau-3-micro-1-type-c-13m-samsung.jpg', 500000, '2019-12-04 00:00:00', 55, 16, 15, 'Tích hợp cùng một lúc 3 cổng kết nối Micro USB và 1 cổng kết nối Type-C.\r\nGiúp tiết kiệm chi phí tối đa cho người dùng.\r\nDùng để chép dữ liệu hay sạc pin (dùng với adapter riêng).\r\nDây 1.3 m sử dụng được trong nhiều trường hợp khác nhau.\r\nSản phẩm chính hãng Samsung.', 'Hàn Quốc', '	\r\nSamSung', 0, 4, 2),
(27, 'Đồng hồ Unisex Casio A168WECM-5DF', 'casio-a168wecm-5df.jpg', 2726000, '2019-07-14 07:21:21', 44, 25, 12, 'Đường kính mặt:	35 mm\r\nChất liệu mặt:	Nhựa\r\nChất liệu khung viền:	Nhựa PC\r\nĐộ dày mặt:	Dày 9.7 mm\r\nChất liệu dây:	Thép không gỉ\r\nĐộ rộng dây:	21.1 mm\r\nThay được dây:	Có\r\nTiện ích	Bấm giờ thể thao, Đèn nền, Báo thức, Lịch ngày, thứ\r\nChống nước:	3 ATM - Rửa tay, đi mưa\r\nNguồn năng lượng:	Pin', 'Nhật Bản', 'Casio', 0, 5, 5),
(28, 'Đồng hồ đôi Casio 110GB-1ADR', 'casio-ba-110-1adr-ga-110gb-1adr-nam-nu.jpg', 8390000, '2019-12-15 00:00:00', 48, 32, 14, 'Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản ', 'Nhật Bản', 'Casio', 0, 5, 5),
(29, 'Đồng hồ Nữ Casio BEL-130D-6AVDF', 'casio-bel-130d-6avdf-nu.jpg', 3008000, '2019-01-17 06:27:07', 45, 21, 12, 'Mang thương hiệu đồng hồ Casio uy tín Nhật Bản, đồng hồ nữ Casio BEL-130D-6AVDF sẽ khiến bạn hài lòng về chất lượng của nó.', 'Nhật Bản', 'Casio', 0, 5, 5),
(30, 'Đồng hồ Nữ Casio LQ-139LB-2B2DF', 'casio-lq-139lb-2b2df.jpg', 682000, '2019-10-04 00:00:00', 34, 12, 6, 'Casio LQ-139LB-2B2DF là một sản phẩm của hãng đồng hồ Casio đến từ Nhật Bản.', 'Nhật Bản', 'Casio', 0, 5, 5),
(31, 'Đồng hồ Nam Casio MTP-SW320L-7AVDF', 'casio-mtp-sw320l-7avdf-nam.jpg', 3196000, '2019-12-18 06:25:07', 60, 23, 11, 'Đường kính mặt:	47.9 mm\r\nChất liệu mặt:	Kính khoáng (Mineral)\r\nChất liệu khung viền:	Thép không gỉ\r\nĐộ dày mặt:	Dày 10.8 mm', 'Nhật Bản', 'Casio', 0, 5, 5),
(32, 'Đồng hồ Nam Casio MTP-E317L-7AVDF', 'casio-mtp-e317l-7avdf-nam.jpg', 2468000, '2019-10-10 00:00:00', 45, 22, 12, 'Đường kính mặt:	42.8 mm\r\nChất liệu mặt:	Kính khoáng (Mineral)\r\nChất liệu khung viền:	Thép không gỉ\r\nĐộ dày mặt:	Dày 11 mm\r\nChất liệu dây:	Da\r\nThay được dây:	Có\r\nTiện ích	Đồng hồ 24h, Lịch ngày, Lịch thứ\r\nChống nước:	5 ATM - Rửa tay, đi mưa, tắm\r\nNguồn năng lượng:	Pin\r\nThời gian sử dụng pin:	Khoảng 2 năm', 'Nhật Bản', 'Casio', 0, 5, 5),
(33, 'Đồng hồ Nam Casio MTP-V004L-7AUDF', 'casio-mtp-v004l-7audf-nam.jpg', 729000, '2019-12-03 00:00:00', 54, 31, 46, 'Đường kính mặt:	40 mm\r\nChất liệu mặt:	Kính khoáng (Mineral)\r\nChất liệu khung viền:	Hợp kim\r\nĐộ dày mặt:	Dày 8.3 mm\r\nChất liệu dây:	Da\r\nThay được dây:	Có\r\nTiện ích	Lịch ngày\r\nChống nước:	3 ATM - Rửa tay, đi mưa\r\nNguồn năng lượng:	Pin\r\nThời gian sử dụng pin:	Khoảng 2 năm', 'Nhật Bản', 'Casio', 0, 5, 5),
(34, 'Đồng hồ Nam Casio SGW-400H-1BVDR', 'casio-sgw-400h-1bvdr-nam.jpg', 3102000, '2019-12-06 07:00:00', 78, 44, 25, 'Đường kính mặt:	51.9 mm\r\nChất liệu mặt:	Nhựa Resin\r\nChất liệu khung viền:	Nhôm\r\nĐộ dày mặt:	Dày 14.9 mm\r\nChất liệu dây:	Nhựa\r\nThay được dây:	Có\r\nTiện ích	Bấm giờ thể thao, Đèn nền, Báo thức\r\nChống nước:	10 ATM - Rửa tay, đi mưa, tắm, bơi\r\nNguồn năng lượng:	Pin\r\nThời gian sử dụng pin:	Khoảng 2 năm', 'Nhật Bản', 'Casio', 0, 5, 5),
(35, 'Laptop Dell Inspiron 3593', 'dell-inspiron-3593-i7.jpg', 22390000, '2019-12-04 05:24:00', 43, 12, 91, 'CPU:	Intel Core i7 Ice Lake, 1065G7, 1.30 GHz\r\nRAM:	8 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, NVIDIA GeForce MX230 2GB\r\nCổng kết nối:	2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 22.7 mm, 2.28 kg', 'Hoa Kỳ', 'Dell', 0, 3, 3),
(36, 'Laptop Dell Inspiron 5584 ', 'dell-inspiron-5584-i5.jpg', 17990000, '2019-05-14 07:21:21', 66, 22, 11, 'CPU:	Intel Core i5 Coffee Lake, 8265U, 1.60 GHz\r\nRAM:	8 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 620\r\nCổng kết nối:	2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 22 mm, 2.025 kg', 'Hoa Kỳ', 'Dell', 0, 3, 3),
(37, 'Laptop Dell Inspiron 7373', 'dell-inspiron-7373-i5.jpg', 25990000, '2019-11-11 00:00:00', 88, 67, 62, 'CPU:	Intel Core i5 Kabylake Refresh, 8250U, 1.60 GHz\r\nRAM:	8 GB, DDR4 (On board), 2400 MHz\r\nỔ cứng:	SSD: 256 GB M.2 SATA3\r\nMàn hình:	13.3 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 620\r\nCổng kết nối:	2 x USB 3.0, HDMI, USB Type-C\r\nHệ điều hành:	Windows 10 + Office 365 1 năm\r\nThiết kế:	Vỏ kim loại, PIN liền\r\nKích thước:	Dày 15.2 mm, 1.6 kg', 'Hoa Kỳ', 'Dell', 0, 3, 3),
(38, 'Laptop Dell Vostro 5370', 'dell-vostro-13-5370-i5.jpg', 20590000, '2019-09-19 09:28:07', 61, 23, 23, 'CPU:	Intel Core i5 Coffee Lake, 8265U, 1.60 GHz\r\nRAM:	4 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	SSD: 256 GB M2\r\nMàn hình:	13.3 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 620\r\nCổng kết nối:	HDMI 1.4, 2 x USB 2.0, 2 x USB 3.0, USB Type-C\r\nHệ điều hành:	Windows 10 + Office 365 1 năm\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 75 mm, 2.0 kg', 'Hoa Kỳ', 'Dell', 0, 3, 3),
(39, 'Laptop Dell Vostro 3468', 'dell-vostro-3468-i3.jpg', 11190000, '2019-10-09 00:00:00', 56, 45, 62, 'CPU:	Intel Core i3 Kabylake, 7020U, 2.30 GHz\r\nRAM:	4 GB, DDR4 (2 khe), 2400 MHz\r\nỔ cứng:	HDD: 1 TB\r\nMàn hình:	14 inch, HD (1366 x 768)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® HD Graphics 620\r\nCổng kết nối:	2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0, VGA (D-Sub)\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN rời', 'Hoa Kỳ', 'Dell', 0, 3, 3),
(40, 'Laptop Dell Vostro 5581', 'dell-vostro-5581-i5.jpg', 17490000, '2019-09-02 00:00:00', 43, 22, 44, 'CPU:	Intel Core i5 Coffee Lake, 8265U, 1.60 GHz\r\nRAM:	4 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 620\r\nCổng kết nối:	2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, USB Type-C\r\nHệ điều hành:	Windows 10 + Office 365 1 năm\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 20.3 mm, 1.9 kg', 'Hoa Kỳ', 'Dell', 0, 3, 3),
(41, 'Laptop Dell XPS 13 9370', 'dell-xps-13-9370-i7.jpg', 44990000, '2020-01-08 00:00:00', 66, 23, 10, 'CPU:	Intel Core i7 Coffee Lake, 8550U, 1.80 GHz\r\nRAM:	8 GB, DDR3L(On board), 1866 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe\r\nMàn hình:	13.3 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 620\r\nCổng kết nối:	2 x Thunderbolt 3 (USB-C), USB Type-C\r\nHệ điều hành:	Windows 10 + Office 365 1 năm\r\nThiết kế:	Vỏ kim loại nguyên khối, PIN liền\r\nKích thước:	Dày 11.6 mm, 1.21 kg', 'Hoa Kỳ', 'Dell', 0, 3, 3),
(42, 'Laptop Dell Vostro 3590', 'dell-vostro-3590-i5.jpg', 15290000, '2019-12-23 00:00:00', 48, 11, 7, 'CPU:	Intel Core i5 Comet Lake, 10210U, 1.60 GHz\r\nRAM:	4 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối:	2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, VGA (D-Sub)\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 19.8 mm, 1.99 kg', 'Hoa Kỳ', 'Dell', 0, 3, 3),
(43, 'Ipad Mini 4 Wifi 4G 128GB', 'ipad-mini-4-wi-fi-4g-128gb.png', 11890000, '2019-12-18 06:27:07', 63, 31, 49, 'Giá thành tốt, màn hình chất lượng,Sử dụng dài lâu', 'Hoa Kỳ', 'Apple', 0, 2, 1),
(44, 'Ipad Pro 105 Wifi 4G 64GB', 'ipad-pro-105-wi-fi-4g-64gb.png', 12190000, '2019-12-10 17:10:00', 43, 11, 27, 'Trải nghiệm tốt cho người dùng,\r\nGiá thành phù hợp cho dân văn phòng', 'Hoa Kỳ', 'Apple', 0, 2, 1),
(45, 'Ipad Pro 129 Wifi 4G 64GB', 'ipad-pro-129-wi-fi-4g-64gb.png', 13490000, '2019-12-31 00:00:00', 43, 12, 2, 'Chất lượng siêu mượt cho người dùng trải nghiệm,bảm hành 2 năm', 'Hoa Kỳ', 'Apple', 0, 2, 1),
(46, 'Máy tính bảng Samsung Galaxy Tab A8', 'samsung-galaxy-tab-a8-t295-2019-silver.png', 3690000, '2019-12-29 00:00:00', 61, 14, 17, 'Samsung Galaxy Tab A8 8 inch T295 (2019) là một chiếc máy tính bảng gọn nhẹ, với màn hình vừa đủ có thể giúp bạn giải trí hay hỗ trợ trẻ nhỏ trong việc học tập.', 'Hàn Quốc', '	\r\nSamSung', 0, 2, 2),
(47, 'Máy tính bảng Samsung Galaxy Tab A 10.5\"', 'samsung-galaxy-tab-a-105-inch-black.png', 9490000, '2019-12-26 00:00:00', 43, 12, 30, 'Màn hình	IPS LCD, 10.5\"\r\nHệ điều hành	Android 8.0\r\nCPU	CPU 8 nhân, 1.8 GHz\r\nRAM	3 GB\r\nBộ nhớ trong	32 GB\r\nCamera sau	8 MP\r\nCamera trước	5 MP\r\nKết nối mạng	WiFi, 3G, Hỗ trợ 4G\r\nHỗ trợ SIM\r\nNano Sim', 'Hàn Quốc', '	\r\nSamSung', 0, 2, 2),
(48, 'Samsung Galaxy Tab S6', 'samsung-galaxy-tab-s6.png', 18490000, '2019-12-07 08:59:00', 43, 42, 7, 'Samsung Galaxy Tab S6 là chiếc máy tính bảng 2 trong 1, được thiết kế để giúp cho những người cần một sản phẩm đủ gọn gàng nhưng mạnh mẽ.', 'Hàn Quốc', '	\r\nSamSung', 0, 2, 2),
(49, 'Samsung Galaxy Tab A 10.1 T515 (2019)', 'samsung-galaxy-tab-a-101-t515-2019-gold.png', 7490000, '2019-09-24 07:21:21', 44, 41, 96, 'Màn hình	TFT LCD, 10.1\"\r\nHệ điều hành	Android 9.0 (Pie)\r\nCPU	Exynos 7904 8 nhân, 2 nhân 1.8 GHz & 6 nhân 1.6 GHz\r\nRAM	3 GB\r\nBộ nhớ trong	32 GB\r\nCamera sau	8 MP\r\nCamera trước	5 MP\r\nKết nối mạng	WiFi, 3G, 4G LTE\r\nHỗ trợ SIM\r\nNano Sim\r\nHOTSIM Mobi Data 5GB (5GB data/tháng). Giá từ 150.000đ\r\nĐàm thoại	Có', 'Hàn Quốc', '	\r\nSamSung', 0, 2, 2),
(50, 'iPad Pro 11 inch Wifi 64GB (2018)', 'ipad-pro-11-inch-2018-64gb-wifi-33397-chitiet.png', 19990000, '2019-12-21 00:00:00', 89, 44, 55, 'Màn hình	Liquid Retina, 11\"\r\nHệ điều hành	iOS 12\r\nCPU	Apple A12X Bionic\r\nRAM	4 GB\r\nBộ nhớ trong	64 GB\r\nCamera sau	12 MP\r\nCamera trước	7 MP\r\nKết nối mạng	WiFi, Không hỗ trợ 3G, Không hỗ trợ 4G\r\nĐàm thoại	FaceTime\r\nTrọng lượng	468 g', 'Hoa Kỳ', 'Apple', 0, 2, 1),
(51, 'iPad Mini 7.9 inch Wifi Cellular 64GB (2019)', 'ipad-mini-79-inch-wifi-cellular-64gb-2019-1.png', 13490000, '2019-12-31 13:18:00', 45, 34, 38, 'iPad Mini 7.9 inch Wifi Cellular 64GB (2019) được Apple trang bị hiệu năng rất ấn tượng với con chip Apple A12 cùng RAM 3 GB và 64 GB bộ nhớ trong.', 'Hoa Kỳ', 'Apple', 0, 2, 1),
(52, 'Samsung Galaxy Fit e R375', 'samsung-galaxy-fit.jpg', 940000, '2019-12-12 08:29:07', 33, 18, 20, 'Công nghệ màn hình:	PMOLED\r\nKích thước màn hình:	0.74 inch\r\nThời gian sử dụng pin:	Khoảng 7 ngày\r\nKết nối được với hệ điều hành:	Android 5.0, iOS 9 trở lên\r\nĐộ dài dây:	22.6 cm\r\nChất liệu dây:	Silicone\r\nKết nối:	Bluetooth\r\nNgôn ngữ:	Tiếng Anh, Tiếng Việt, Ứng dụng tiếng Anh, Ứng dụng tiếng Việt\r\nTiện ích:	Theo dõi giấc ngủ, Đo nhịp tim, Đếm số bước chân, Chế độ luyện tập, Báo thức, Rung thông báo, Thay mặt đồng hồ', 'Hàn Quốc', '	\r\nSamSung', 0, 5, 2),
(53, 'Samsung Galaxy Fit R370', 'samsung-galaxy-fit-r370.jpg', 2360000, '2019-12-10 00:01:00', 47, 45, 23, 'Thời trang, cá tính, khỏe mạnh và năng động 24/7 cùng vòng đeo tay thông minh Samsung Galaxy Fit, thiết bị theo dõi sức khỏe chuyên sâu đến từ Samsung.', 'Hàn Quốc', '	\r\nSamSung', 0, 5, 2),
(54, 'Samsung Galaxy Watch Active 2 ', 'samsung-galaxy-watch-active-2.jpg', 9490000, '2019-12-27 00:04:00', 49, 20, 14, 'Đồng hồ thông minh Samsung Galaxy Watch Active 2 44mm là phiên bản có sự cải tiến về công nghệ để mang đến những trải nghiệm tốt nhất cho người dùng với nhiều tính năng chăm sóc sức khỏe, nhận cuộc gọi trực tiếp cũng như nhiều tính năng tiện ích khác', 'Hàn Quốc', '	\r\nSamSung', 0, 5, 2),
(55, 'Tai nghe Bluetooth Samsung MG900E', 'tai-nghe-bluetooth-samsung.jpg', 850000, '2019-09-19 17:21:21', 44, 13, 9, 'Công nghệ chống ồn cho âm thanh trong trẻo và chất lượng.\r\nĐệm tai nghe êm ái, dễ chịu khi sử dụng thời gian dài.\r\nThời gian thoại lên đến 9 giờ, thời gian chờ lên đến 300 giờ.\r\nThời gian sạc khoảng 2 giờ. Thời gian nghe nhạc có thể lên đến 8 giờ.', 'Hàn Quốc', '	\r\nSamSung', 0, 4, 2),
(56, 'Samsung Galaxy A7 (2018) 128GB', 'samsung-galaxy-a7-2018-128gb.png', 7990000, '2019-12-31 16:30:00', 129, 130, 188, 'Màn hình:	Super AMOLED, 6.0\", Full HD+\r\nHệ điều hành:	Android 8.0 (Oreo)\r\nCamera sau:	Chính 24 MP & Phụ 8 MP, 5 MP\r\nCamera trước:	24 MP\r\nCPU:	Exynos 7885 8 nhân\r\nRAM:	6 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Viettel F120 (nhân đôi dung lượng). Giá từ 260.000đ\r\nDung lượng pin:	3300 mAh', 'Hàn Quốc', '	\r\nSamSung', 0, 1, 2),
(57, 'Samsung Galaxy A9 (2018)', 'samsung-galaxy-a9-2018.png', 12490000, '2019-12-04 20:00:00', 44, 23, 1, 'Samsung Galaxy A9 (2018) là chiếc điện thoại đầu tiên của Samsung sở hữu hệ thống camera ấn tượng với 4 thấu kính cùng hàng loạt các nâng cấp đáng giá về cấu hình và tính năng hiện đại khác', 'Hàn Quốc', '	\r\nSamSung', 0, 1, 2),
(58, 'Samsung Galaxy A10s', 'samsung-galaxy-a10s.png', 3390000, '2019-01-19 09:28:07', 130, 130, 150, 'Samsung đã trang bị cho Galaxy A10s viên pin 4000 mAh. Viên pin này cho phép bạn xài thoải mái trong suốt cả một ngày dài làm việc', 'Hàn Quốc', '	\r\nSamSung', 0, 1, 2),
(59, 'Samsung Galaxy A50', 'samsung-galaxy-a50-128gb.png', 6490000, '2019-12-11 22:10:00', 300, 230, 305, 'Sản phẩm được nhiều người dùng nhất 2019\r\nĐiểm nổi bật của sản phẩm là thiết kế tinh tế, phù hợp phân khúc giá tốt cho khách hàng', 'Hàn Quốc', '	\r\nSamSung', 0, 1, 2),
(60, 'Samsung Galaxy S10+', 'samsung-galaxy-s10-plus.png', 22990000, '0000-00-00 00:00:00', 100, 20, 50, 'Samsung Galaxy S10+ 128GB là một trong những chiếc smartphone được trông chờ nhiều nhất trong năm 2019 và không phụ sự kỳ vọng của mọi người thì chiếc Galaxy S thứ 10 của Samsung thực sự gây ấn tượng mạnh cho người dùng.\r\nMàn hình: Dynamic AMOLED, 6.4\", Quad HD+ (2K+)\r\nHệ điều hành: Android 9.0 (Pie)\r\nCamera sau: Chính 12 MP & Phụ 12 MP, 16 MP\r\nCamera trước: Chính 10 MP & Phụ 8 MP\r\nCPU: Exynos 9820 8 nhân\r\nRAM: 8 GB', 'Hàn Quốc', '	\r\nSamSung', 0, 1, 2),
(61, 'Samsung Galaxy Note 10+', 'samsung-galaxy-note-10-plus.png', 24990000, '2019-12-18 15:28:07', 130, 23, 24, 'Galaxy Note 10+ là chiếc smartphone có camera tốt nhất hiện nay.', 'Hàn Quốc', '	\r\nSamSung', 0, 1, 2),
(62, 'Samsung Galaxy M20', 'samsung-galaxy-m20.png', 4490000, '2019-12-31 20:11:25', 44, 23, 28, 'Nổi bật hơn cả trong lần ra mắt bộ đôi dòng M của Samsung, chiếc điện thoại Galaxy M20 có màn hình mới Infinity-V, dung lượng pin cực khủng lên tới 5000 mAh, camera siêu rộng và nhiều tính năng hấp dẫn khác.', 'Hàn Quốc', '	\r\nSamSung', 0, 1, 2),
(63, 'iPhone 6 32GB', 'iphone-6-32gb.png', 700000, '2019-12-22 06:29:07', 30, 18, 14, 'Màn hình:	LED-backlit IPS LCD, 4.7\", Retina HD\r\nHệ điều hành:	iOS 12\r\nCamera sau:	8 MP\r\nCamera trước:	1.2 MP\r\nCPU:	Apple A8 2 nhân 64-bit\r\nRAM:	1 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ SIM:\r\n1 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ\r\nDung lượng pin:	1810 mAh', 'Hoa Kỳ', 'Apple', 0, 1, 1),
(64, 'iPhone 7 32GB', 'iphone-7-gold.png', 8990000, '2019-12-18 13:00:00', 66, 55, 22, 'Màn hình:	LED-backlit IPS LCD, 4.7\", Retina HD\r\nHệ điều hành:	iOS 12\r\nCamera sau:	12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A10 Fusion 4 nhân\r\nRAM:	2 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ SIM:\r\n1 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Viettel F120 (nhân đôi dung lượng). Giá từ 260.000đ\r\nDung lượng pin:	1960 mAh', 'Hoa Kỳ', 'Apple', 0, 1, 1),
(65, 'iPhone 8 Plus 64GB', 'iphone-8-plus.png', 14490000, '2019-12-14 21:00:00', 55, 35, 34, 'Màn hình:	LED-backlit IPS LCD, 5.5\", Retina HD\r\nHệ điều hành:	iOS 12\r\nCamera sau:	Chính 12 MP & Phụ 12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A11 Bionic 6 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ SIM:\r\n1 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Viettel F120 (nhân đôi dung lượng). Giá từ 260.000đ\r\nDung lượng pin:	2691 mAh, có sạc nhanh', 'Hoa Kỳ', 'Apple', 0, 1, 1),
(66, 'iPhone 11 128GB', 'iphone-11-128gb-black.png', 23990000, '2020-07-08 00:00:00', 76, 34, 64, 'Màn hình:	IPS LCD, 6.1\", Liquid Retina\r\nHệ điều hành:	iOS 13\r\nCamera sau:	Chính 12 MP & Phụ 12 MP\r\nCamera trước:	12 MP\r\nCPU:	Apple A13 Bionic 6 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ SIM:\r\n1 eSIM & 1 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ\r\nDung lượng pin:	3110 mAh, có sạc nhanh', 'Hoa Kỳ', 'Apple', 0, 1, 1),
(67, 'iPhone 11 Pro 256GB', 'iphone-11-pro-black.png', 33490000, '2020-01-15 00:00:00', 87, 120, 42, 'Màn hình:	OLED, 5.8\", Super Retina XDR\r\nHệ điều hành:	iOS 13\r\nCamera sau:	3 camera 12 MP\r\nCamera trước:	12 MP\r\nCPU:	Apple A13 Bionic 6 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	256 GB\r\nThẻ SIM:\r\n1 eSIM & 1 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ\r\nDung lượng pin:	3046 mAh, có sạc nhanh', 'Hoa Kỳ', 'Apple', 0, 1, 1),
(68, 'iPhone 11 64GB Red 2019', 'iphone-11-red-2.png', 21990000, '2020-01-02 00:00:00', 34, 34, 28, 'Sản phẩm tốt giá rẻ nhất thị trường 20199', 'Hoa Kỳ', 'Apple', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TenDangNhap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenHienThi` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT '0',
  `MaLoaiTaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `TenHienThi`, `DiaChi`, `DienThoai`, `Email`, `BiXoa`, `MaLoaiTaiKhoan`) VALUES
(1, 'nvt', 'thongnguyen', 'Thông Nguyễn', 'Bình Dương', '01234567890', 'nvt@gmail.com', 1, 1),
(2, 'Admin', 'Admin', 'Admin Deploy99', 'Phú Giáo-Bình Dương', '0989985985', 'admin@deploy99.vn	', 0, 2),
(16, 'hoangyenhup', '123456', 'inaothun', 'Đồng Nai', '0989985989', 'user@gmail.com', 1, 1),
(37, 'admin2', 'thong', 'thông thuần khiết', 'Bình Dương', NULL, NULL, 0, 1),
(46, 'mrt99', '1234567', 'Thông Bố Chồn', NULL, NULL, NULL, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `MaTinhTrang` int(11) NOT NULL,
  `TenTinhTrang` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`MaTinhTrang`, `TenTinhTrang`) VALUES
(1, 'Đặt hàng'),
(2, 'Đang giao hàng'),
(3, 'Thanh toán'),
(4, 'Huỷ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD PRIMARY KEY (`MaChiTietDonDatHang`),
  ADD KEY `MaDonDatHang` (`MaDonDatHang`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDonDatHang`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`),
  ADD KEY `MaTinhTrang` (`MaTinhTrang`);

--
-- Indexes for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`MaHangSanXuat`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSanPham`);

--
-- Indexes for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`MaLoaiTaiKhoan`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaHangSanXuat` (`MaHangSanXuat`),
  ADD KEY `MaLoaiSanPham` (`MaLoaiSanPham`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD KEY `MaLoaiTaiKhoan` (`MaLoaiTaiKhoan`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`MaTinhTrang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `MaHangSanXuat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `MaLoaiTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `MaTinhTrang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `chitietdondathang_ibfk_1` FOREIGN KEY (`MaDonDatHang`) REFERENCES `dondathang` (`MaDonDatHang`),
  ADD CONSTRAINT `chitietdondathang_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_ibfk_1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`),
  ADD CONSTRAINT `dondathang_ibfk_2` FOREIGN KEY (`MaTinhTrang`) REFERENCES `tinhtrang` (`MaTinhTrang`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaHangSanXuat`) REFERENCES `hangsanxuat` (`MaHangSanXuat`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaLoaiSanPham`) REFERENCES `loaisanpham` (`MaLoaiSanPham`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`MaLoaiTaiKhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
