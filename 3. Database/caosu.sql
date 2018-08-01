-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 07:09 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caosu`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(100) NOT NULL,
  `ma_san_pham` int(100) NOT NULL,
  `ma_nguoi_dung` int(100) NOT NULL,
  `noi_dung` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `ma_san_pham`, `ma_nguoi_dung`, `noi_dung`, `ngay_dang`) VALUES
(13, 14, 14, 'Bài viết hay quá', '07-31-18');

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoa_don`
--

CREATE TABLE `ct_hoa_don` (
  `stt` int(100) NOT NULL,
  `so_hoa_don` int(100) NOT NULL,
  `ma_san_pham` int(100) NOT NULL,
  `so_luong` int(100) NOT NULL,
  `don_gia` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_hoa_don`
--

INSERT INTO `ct_hoa_don` (`stt`, `so_hoa_don`, `ma_san_pham`, `so_luong`, `don_gia`) VALUES
(28, 20, 10, 1, 15000),
(29, 21, 10, 2, 15000),
(30, 22, 10, 1, 15000),
(31, 23, 11, 2, 20000),
(32, 24, 10, 1, 15000),
(33, 25, 11, 1, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `so_hoa_don` int(100) NOT NULL,
  `thoi_gian` time NOT NULL,
  `ngay_hd` date NOT NULL,
  `ma_khach_hang` int(100) NOT NULL,
  `tri_gia` int(100) NOT NULL,
  `tinh_trang` int(100) NOT NULL,
  `ghi_chu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thanh_toan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`so_hoa_don`, `thoi_gian`, `ngay_hd`, `ma_khach_hang`, `tri_gia`, `tinh_trang`, `ghi_chu`, `thanh_toan`) VALUES
(20, '01:25:28', '2018-07-31', 15, 15000, 0, ' ', 'Thanh toán khi nhận sản phẩm'),
(21, '01:34:54', '2018-07-31', 15, 30000, 0, '97 Man Thiện, Phường Hiệp Phú, Quận 9', 'Thanh toán khi nhận sản phẩm'),
(22, '01:38:00', '2018-07-31', 14, 15000, 0, '97 Man Thiện, Phường Hiệp Phú, Quận 9', 'Thanh toán khi nhận sản phẩm'),
(23, '21:02:56', '2018-07-31', 16, 40000, 0, ' ', 'Thanh toán khi nhận sản phẩm'),
(24, '23:43:41', '2018-07-31', 17, 15000, 0, ' ', 'Thanh toán khi nhận sản phẩm'),
(25, '23:47:44', '2018-07-31', 18, 20000, 0, '97 Man Thiện, Phường Hiệp Phú, Quận 9', 'Thanh toán khi nhận sản phẩm');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_khach_hang` int(100) NOT NULL,
  `ho_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` int(100) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_khach_hang`, `ho_ten`, `gioi_tinh`, `email`, `so_dien_thoai`) VALUES
(15, 'Phat', 0, 'lucycrazy0@gmail.com', 1698833736),
(18, 'Phat', 0, 'lucycrazy0@gmail.com', 1698833736);

-- --------------------------------------------------------

--
-- Table structure for table `loai_nguoi_dung`
--

CREATE TABLE `loai_nguoi_dung` (
  `ma_loai_nd` int(100) NOT NULL,
  `ten_loai_nd` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai_nguoi_dung`
--

INSERT INTO `loai_nguoi_dung` (`ma_loai_nd`, `ten_loai_nd`) VALUES
(1, 'Quản trị '),
(2, 'Người dùng');

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ma_loai` int(100) NOT NULL,
  `ten_loai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_loai` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai`, `ten_loai`, `hinh_loai`) VALUES
(1, 'PB235', 'coffee.jpg'),
(2, 'PB 255', 'drinks.jpg'),
(3, 'PB 260', 'com_chien.jpg'),
(4, 'RRIM 600', 'thuoc_la.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nguoi_dung` int(100) NOT NULL,
  `ma_loai_nd` int(100) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_dang_nhap` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` int(100) NOT NULL,
  `gioi_tinh` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ma_nguoi_dung`, `ma_loai_nd`, `ten`, `ten_dang_nhap`, `password`, `dia_chi`, `email`, `so_dien_thoai`, `gioi_tinh`, `date`) VALUES
(14, 1, 'Nguyễn Võ Thành Lộc', 'nvtl', 'e10adc3949ba59abbe56e057f20f883e', '97 Man Thiện, Phường Hiệp Phú, Quận 9', 'n14dccn049@student.ptithcm.edu.vn', 1698833736, 0, '2018-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` int(100) NOT NULL,
  `ma_loai` int(100) NOT NULL,
  `ten_san_pham` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(100) NOT NULL,
  `mo_ta_tom_tat` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_chi_tiet` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ma_loai`, `ten_san_pham`, `hinh`, `gia`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`) VALUES
(10, 1, 'Giống cao su RRIV 209', 'giong3.jpg', 15000, '<ul>\r\n	<li>Giống&nbsp;<strong>RRIV 209</strong>&nbsp;c&oacute; th&acirc;n thẳng, tr&ograve;n, nhiều c&agrave;nh nhỏ, c&oacute; t&aacute;n c&acirc;n đối. Tăng vanh kh&aacute; tốt trong thời gian khai&n', '<h2>Đặc t&iacute;nh của&nbsp;<strong>giống cao su RRIV 209</strong></h2>\r\n\r\n<ul>\r\n	<li>Giống&nbsp;<strong>RRIV 209</strong>&nbsp;c&oacute; th&acirc;n thẳng, tr&ograve;n, nhiều c&agrave;nh nhỏ, c&amp;o'),
(11, 2, 'RRIV 4 (LH 82/182)', 'giong2.jpg', 20000, '<ul>\r\n	<li>Giống&nbsp;<strong>RRIV 209</strong>&nbsp;c&oacute; th&acirc;n thẳng, tr&ograve;n, nhiều c&agrave;nh nhỏ, c&oacute; t&aacute;n c&acirc;n đối. Tăng vanh kh&aacute; tốt trong thời gian khai t', '<ul>\r\n	<li>Giống&nbsp;<strong>RRIV 209</strong>&nbsp;c&oacute; th&acirc;n thẳng, tr&ograve;n, nhiều c&agrave;nh nhỏ, c&oacute; t&aacute;n c&acirc;n đối. Tăng vanh kh&aacute; tốt trong thời gian khai t'),
(14, 4, 'GIỐNG CAO SU PB 255', 'giong3.jpg', 20000, '<p>+ Nguồn gốc: Xuất xứ Malaysia, Phổ hệ PB 5/51 x PB 32/36. Trồng đại tr&agrave; ở c&aacute;c c&ocirc;ng ty cao su Đ&ocirc;ng Nam bộ những năm gần đ&acirc;y.</p>\r\n\r\n<p>+ Dạng c&acirc;y: Th&acirc;n hơ', '<p>+ Nguồn gốc: Xuất xứ Malaysia, Phổ hệ PB 5/51 x PB 32/36. Trồng đại tr&agrave; ở c&aacute;c c&ocirc;ng ty cao su Đ&ocirc;ng Nam bộ những năm gần đ&acirc;y.</p>\r\n\r\n<p>+ Dạng c&acirc;y: Th&acirc;n hơ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `ma_san_pham` (`ma_san_pham`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`);

--
-- Indexes for table `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `so_hoa_don` (`so_hoa_don`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`so_hoa_don`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_khach_hang`);

--
-- Indexes for table `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  ADD PRIMARY KEY (`ma_loai_nd`);

--
-- Indexes for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`ma_nguoi_dung`),
  ADD KEY `ma_loai_nd` (`ma_loai_nd`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  MODIFY `stt` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `so_hoa_don` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_khach_hang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  MODIFY `ma_loai_nd` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `ma_loai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `ma_nguoi_dung` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_san_pham` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoi_dung` (`ma_nguoi_dung`);

--
-- Constraints for table `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  ADD CONSTRAINT `ct_hoa_don_ibfk_1` FOREIGN KEY (`so_hoa_don`) REFERENCES `hoa_don` (`so_hoa_don`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ct_hoa_don_ibfk_2` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD CONSTRAINT `nguoi_dung_ibfk_1` FOREIGN KEY (`ma_loai_nd`) REFERENCES `loai_nguoi_dung` (`ma_loai_nd`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_san_pham` (`ma_loai`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
