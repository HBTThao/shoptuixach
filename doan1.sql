-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 10:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminwmp`
--

CREATE TABLE `adminwmp` (
  `idadmin` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` int(100) NOT NULL,
  `adminstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adminwmp`
--

INSERT INTO `adminwmp` (`idadmin`, `user`, `pass`, `adminstatus`) VALUES
(9, 'admin', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idcart` int(11) NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `codecart` varchar(10) NOT NULL,
  `cartstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idcart`, `idkhachhang`, `codecart`, `cartstatus`) VALUES
(47, 1, '5084', 1),
(48, 1, '4425', 1),
(49, 1, '1893', 1),
(50, 1, '4745', 1),
(52, 1, '4234', 1),
(53, 1, '7904', 1),
(54, 1, '5634', 1),
(55, 1, '6760', 1),
(56, 1, '8935', 1),
(57, 1, '6021', 1),
(58, 1, '7263', 1),
(59, 1, '8048', 1),
(60, 1, '7774', 1),
(61, 1, '1642', 1),
(62, 1, '8534', 1),
(63, 1, '2184', 1),
(64, 1, '120', 1),
(65, 1, '4812', 1),
(66, 1, '6493', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE `cartdetails` (
  `idcartdetails` int(11) NOT NULL,
  `codecart` varchar(10) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluongsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `iddangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`iddangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(1, 'user', 'user@gmail.com', '123 abc', '202cb962ac59075b964b07152d234b70', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutudanhmuc` int(11) NOT NULL,
  `moinhat` int(11) NOT NULL,
  `noibat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `tendanhmuc`, `thutudanhmuc`, `moinhat`, `noibat`) VALUES
(24, 'TÚI CẦM TAY', 1, 1, 2),
(25, 'TÚI ĐEO CHÉO', 2, 3, 4),
(26, 'TÚI ĐEO VAI', 3, 4, 3),
(27, 'TÚI QUAI XÁCH', 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int(11) NOT NULL,
  `tensanpham` varchar(200) NOT NULL,
  `masanpham` varchar(100) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `hinhanhsanpham` varchar(50) NOT NULL,
  `noidungsanpham` text NOT NULL,
  `soluongsanpham` int(10) NOT NULL,
  `iddanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `tensanpham`, `masanpham`, `giasanpham`, `hinhanhsanpham`, `noidungsanpham`, `soluongsanpham`, `iddanhmuc`) VALUES
(1, 'LEVISA WALLET', 'lw', '247000', 'LEVISA WALLET.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 12 x 9 x 2cm\r\n• Kiểu khóa: Nắp gập\r\n• Chất liệu: Da PU xước ngang\r\n• Kích cỡ: Trung bình', 100, 24),
(2, 'TONGUE WALLET\r\n', 'dg', '240000', 'TONGUE WALLET.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Đen', 5, 24),
(3, 'STAND WALLET BLACK', 'dx', '180500', 'STAND WALLET BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 14 x 10 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ,chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Đen', 5, 24),
(4, 'STAND WALLET WHITE', 'sww', '180500', 'STAND WALLET WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 14 x 10 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ,chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Trắng', 3, 24),
(5, 'AVI CARDHOLDER BLACK', 'ku', '152000', 'AVI CARDHOLDER BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Đen', 4, 24),
(6, 'AVI CARDHOLDER WHITE', 'nh', '152000', 'AVI CARDHOLDER WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Trắng', 7, 24),
(7, 'FEI BAG BLACK', 'ntt', '375250', 'FEI BAG BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 14 x 10 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ,chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Đen', 4, 24),
(8, 'FEI BAG WHITE', 'sd', '375250', 'FEI BAG WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 14 x 10 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ,chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Trắng', 3, 24),
(9, 'AVI CARDHOLDER BROWN', 'sr', '152000', 'AVI CARDHOLDER BROWN.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 14 x 10 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ,chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Nâu', 4, 24),
(10, 'FEI BAG BROWN', 'ss', '375250', 'FEI BAG BROWN.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Nâu', 8, 24),
(11, 'LAGOM CARDHOLDER BLACK', 'bdm', '114000', 'LAGOM CARDHOLDER BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11 x 7.5cm\r\n• Chất liệu: Da PU xước chéo\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Đen', 7, 24),
(12, 'LAGOM CARDHOLDER GREY', 'dg', '114000', 'LAGOM CARDHOLDER GREY.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11 x 7.5cm\r\n• Chất liệu: Da PU xước chéo\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Xám', 6, 24),
(13, 'SYMPHONY BAG BLACK', 'dx', '360000', 'SYMPHONY BAG BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 12 x 10 x 4cm\r\n• Kiểu khóa: Nắp gập\r\n• Chất liệu: Da PU vân cá sấu, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Miniclutch\r\n• Màu sắc: Đen', 3, 25),
(14, 'SYMPHONY BAG WHITE', 'kn', '360000', 'SYMPHONY BAG WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 12 x 10 x 4cm\r\n• Kiểu khóa: Nắp gập\r\n• Chất liệu: Da PU vân cá sấu, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Miniclutch\r\n• Màu sắc: Trắng', 6, 25),
(15, 'CHARIS BAG BLACK', 'ku', '408500', 'CHARIS BAG BLACK.JPG', '• Kiểu dáng: Hobo Bag\r\n• Kích thước: 19 x 24 x 7cm\r\n• Kiểu khóa: Nắp gập\r\n• Chất liệu: Da PU trơn chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Đen', 3, 25),
(16, 'CHARIS BAG WHITE', 'nh', '408500', 'CHARIS BAG WHITE.JPG', '• Kiểu dáng: Hobo Bag\r\n• Kích thước: 19 x 24 x 7cm\r\n• Kiểu khóa: Nắp gập\r\n• Chất liệu: Da PU trơn chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Trắng', 4, 25),
(17, 'SUNITA BAG', 'mn', '294500', 'SUNITA BAG.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 19 x 12 x 7cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: da PU sần lì chắc chắn\r\n• Kích cỡ: Trung bình', 10, 25),
(18, 'CII BAG BROWN', 'ntt', '495000', 'CII BAG BROWN.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Nâu', 7, 25),
(19, 'CII BAG BLACK', 'sk', '495000', 'CII BAG BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Đen', 3, 25),
(20, 'CII BAG WHITE', 'nh', '495000', 'CII BAG WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Trắng', 6, 25),
(21, 'CASS BAG BLACK', 'mn', '480000', 'CASS BAG BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 19x12x5cm\r\n• Kiểu khóa: Khoá gài\r\n• Chất liệu: Da PU, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Mini Crossbody Bag\r\n• Màu sắc: Đen', 16, 25),
(22, 'CASS BAG WHITE', 'sr', '480000', 'CASS BAG WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 19x12x5cm\r\n• Kiểu khóa: Khoá gài\r\n• Chất liệu: Da PU, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Mini Crossbody Bag\r\n• Màu sắc: Trắng', 12, 25),
(23, 'AVERY BAG BLACK', 'nh', '399000', 'AVERY BAG BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 22 x 17 x 6cm\r\n• Kiểu khóa: Khoá gài\r\n• Chất liệu: Da PU, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Large Crossbody Bag\r\n• Màu sắc: Đen', 7, 25),
(24, 'AVERY BAG WHITE', 'mcr', '399000', 'AVERY BAG WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 22 x 17 x 6cm\r\n• Kiểu khóa: Khoá gài\r\n• Chất liệu: Da PU, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Large Crossbody Bag\r\n• Màu sắc: Trắng', 4, 25),
(25, 'WEE BAG BLACK', 'wbb', '570000', 'WEE BAG BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 20.5 x 13.5 x 6.5 cm\r\n• Kiểu khóa: Khoá gài\r\n• Chất liệu: Da PU, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Crossbody Bag\r\n• Màu sắc: Đen', 50, 26),
(26, 'WEE BAG WHITE', 'wbw', '570000', 'WEE BAG WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 20.5 x 13.5 x 6.5 cm\r\n• Kiểu khóa: Khoá gài\r\n• Chất liệu: Da PU, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Crossbody Bag\r\n• Màu sắc: Trắng', 50, 26),
(27, 'MIKALA BAG BLACK', 'mbb', '480000', 'MIKALA BAG BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 22 x 15 x 8cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần lì chắc chắn, quai xích mix da cùng chất liệu\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Đen', 50, 26),
(28, 'MIKALA BAG WHITE', 'mbw', '480000', 'MIKALA BAG WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 22 x 15 x 8cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần lì chắc chắn, quai xích mix da cùng chất liệu\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Trắng', 50, 26),
(29, 'SOL BAG BLACK', 'sbb', '522500', 'SOL BAG BLACK.PNG ', '• Hoạ tiết: 3 màu, da PU mềm\r\n• Kích thước: 28x32x10cm\r\n• Kiểu khóa: Khoá kéo\r\n• Chất liệu: Da PU\r\n• Màu sắc: Đen', 50, 26),
(30, 'SOL BAG WHTIE', 'sbw', '522500', 'SOL BAG WHITE.JPG', '• Hoạ tiết: 3 màu, da PU mềm\r\n• Kích thước: 28x32x10cm\r\n• Kiểu khóa: Khoá kéo\r\n• Chất liệu: Da PU\r\n• Màu sắc: Trắng', 50, 26),
(31, 'SOL BAG BROWN', 'sbb', '522500', 'SOL BAR BROWN.JPG', '• Hoạ tiết: 3 màu, da PU mềm\r\n• Kích thước: 28x32x10cm\r\n• Kiểu khóa: Khoá kéo\r\n• Chất liệu: Da PU\r\n• Màu sắc: Nâu', 50, 26),
(32, 'FEND BACKPACK BLACK', 'fbb', '570000', 'FEND BACKPACK BLACK.PNG', '• Hoạ tiết: 3 màu, da PU mềm\r\n• Kích thước:28x34x9cm\r\n• Kiểu khóa: Nắp gập - khoá gài\r\n• Chất liệu: Da PU\r\n• Màu sắc: Đen', 50, 26),
(33, 'FEND BACKPACK WHITE', 'fbw', '570000', 'FEND BACKPACK WHITE.JPG', '• Hoạ tiết: 3 màu, da PU mềm\r\n• Kích thước:28x34x9cm\r\n• Kiểu khóa: Nắp gập - khoá gài\r\n• Chất liệu: Da PU\r\n• Màu sắc: Trắng', 50, 26),
(34, 'FEND BACKPACK BROWN', 'fbb', '570000', 'FEND BACKPACK BROWN.JPG', '• Hoạ tiết: 3 màu, da PU mềm\r\n• Kích thước:28x34x9cm\r\n• Kiểu khóa: Nắp gập - khoá gài\r\n• Chất liệu: Da PU\r\n• Màu sắc: Nâu', 50, 26),
(35, 'SONATA BAG', 'sb', '385000', 'SONATA BAG.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 22 x 11 x 4cm\r\n• Kiểu khóa: Nắp gập\r\n• Chất liệu: Da PU vân cá sấu, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Clutch\r\n• Màu sắc: Đen', 50, 26),
(36, 'SCARLET BAG', 'sb', '380000', 'SCARLET BAG.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 22 x 11 x 4cm\r\n• Kiểu khóa: Nắp gập\r\n• Chất liệu: Da PU vân cá sấu, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Clutch\r\n• Màu sắc: Đen', 50, 26),
(37, 'FYNN BAG BLACK', 'fbb', '378000', 'FYNN BAG BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 19.5 x 12 x 5cm\r\n• Kiểu khóa: Khoá gài\r\n• Chất liệu: Da PU, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Mini Crossbody Bag\r\n• Màu sắc: Đen', 50, 27),
(38, 'FYNN BAG WHTE', 'fbw', '378000', 'FYNN BAG WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 19.5 x 12 x 5cm\r\n• Kiểu khóa: Khoá gài\r\n• Chất liệu: Da PU, kết hợp cùng dây xích kim loại tổng hợp\r\n• Kích cỡ: Mini Crossbody Bag\r\n• Màu sắc: Trắng', 50, 27),
(39, 'LESAC BLACK', 'lb', '800000', 'LESAC BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Đen', 50, 27),
(40, 'LESAC WHITE', 'lw', '800000', 'LESAC WHTIE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Trắng', 50, 27),
(41, 'LESAC BROWN', 'lbr', '800000', 'LESAC BROWN.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Nâu', 50, 27),
(42, 'LII BAG BLACK', 'lbb', '477000', 'LII BAG BLACK.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Đen', 50, 27),
(43, 'LII BAG WHITE', 'lbw', '477000', 'LII BAG WHITE.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Trắng', 50, 27),
(44, 'LII BAG BROWN', 'lbbr', '477000', 'LII BAG BROWN.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 11.6 x 9.2 x 2cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU sần nhẹ, chắc chắn\r\n• Kích cỡ: Trung bình\r\n• Màu sắc: Nâu', 50, 27),
(45, 'JULIA BAG', 'jb', '323000', 'JULIA BAG.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 20 x 14 x 8cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU mịn chắc chắn\r\n• Kích cỡ: Trung bình', 50, 27),
(46, 'IVY BAG', 'ib', '427500', 'IVY BAG.JPG', '• Kiểu dáng: Basic, thanh lịch\r\n• Kích thước: 24 x 17,3 x 6cm\r\n• Kiểu khóa: Khóa kéo\r\n• Chất liệu: Da PU trơn chắc chắn\r\n• Kích cỡ: Trung bình', 50, 27),
(47, 'AMM BAG BLACK', 'abb', '513000', 'AMM BAG BLACK.PNG', '• Hoạ tiết: Một màu, da PU vân cá sấu\r\n• Kích thước: 16.5 x 24 x 7cm\r\n• Kiểu khóa: Nắp gập\r\n• Chất liệu: Da PU\r\n• Túi nắp gập có ngăn to chính và 1 ngăn kéo khoá\r\n• Màu sắc: Đen', 50, 27),
(48, 'AMM BAG WHITE', 'abw', '513000', 'AMM BAG WHITE.PNG', '• Hoạ tiết: Một màu, da PU vân cá sấu\r\n• Kích thước: 16.5 x 24 x 7cm\r\n• Kiểu khóa: Nắp gập\r\n• Chất liệu: Da PU\r\n• Túi nắp gập có ngăn to chính và 1 ngăn kéo khoá\r\n• Màu sắc: Trắng', 50, 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminwmp`
--
ALTER TABLE `adminwmp`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idcart`);

--
-- Indexes for table `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD PRIMARY KEY (`idcartdetails`);

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`iddangky`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`),
  ADD KEY `iddanhmuc` (`iddanhmuc`),
  ADD KEY `iddanhmuc_2` (`iddanhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminwmp`
--
ALTER TABLE `adminwmp`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `cartdetails`
--
ALTER TABLE `cartdetails`
  MODIFY `idcartdetails` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `iddangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`iddanhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
