-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2023 at 02:10 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qlcoffee`
--
CREATE DATABASE `qlcoffee` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `qlcoffee`;

-- --------------------------------------------------------

--
-- Table structure for table `danhsach`
--

DROP TABLE IF EXISTS `danhsach`;
CREATE TABLE IF NOT EXISTS `danhsach` (
  `MaDS` int(10) NOT NULL AUTO_INCREMENT,
  `Ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `PhanLoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(10) NOT NULL,
  `HinhAnh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaDS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11;

--
-- Dumping data for table `danhsach`
--

INSERT INTO `danhsach` (`MaDS`, `Ten`, `MoTa`, `PhanLoai`, `DonGia`, `HinhAnh`) VALUES
(1, 'Cà phê truyền thống', '', 'đồ uống', 20000, 'images/h1_cftruyenthong.jpg'),
(2, 'Cà phê truyền thống', '', 'đồ uống', 20000, 'images/h1_cftruyenthong.jpg'),
(3, 'Cà phê truyền thống', '', 'đồ uống', 20000, 'images/h1_cftruyenthong.jpg'),
(4, 'Cà phê truyền thống', '', 'đồ uống', 20000, 'images/h1_cftruyenthong.jpg'),
(5, 'Cà phê truyền thống', '', 'đồ uống', 20000, 'images/h1_cftruyenthong.jpg'),
(6, 'Cà phê truyền thống', '', 'đồ uống', 20000, 'images/h1_cftruyenthong.jpg'),
(7, 'Cà phê truyền thống', '', 'đồ uống', 20000, 'images/h1_cftruyenthong.jpg'),
(8, 'Cà phê truyền thống', '', 'đồ uống', 20000, 'images/h1_cftruyenthong.jpg'),
(9, 'Cà phê truyền thống', '', 'đồ uống', 20000, 'images/h1_cftruyenthong.jpg'),
(10, 'Cà phê Americano', '', 'đồ uống',25000, 'images/h2_cfAmericano.jpg');



-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `MaNguoiDung` int(10) NOT NULL AUTO_INCREMENT,
  `TenNguoiDung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `QuyenHan` tinyint(1) NOT NULL,
  `Khoa` tinyint(1) NOT NULL,
  PRIMARY KEY (`MaNguoiDung`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaNguoiDung`, `TenNguoiDung`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1, 'Trần Văn Sĩ', 'tvs', 'e10adc3949ba59abbe56e057f20f883e', 2, 0),
(2, 'Nguyễn Tấn Tài', 'ntt', 'e10adc3949ba59abbe56e057f20f883e 	', 2, 0),
(3, 'Trần Văn A', 'tva', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(4, 'Trần Văn B', 'tvb', 'e10adc3949ba59abbe56e057f20f883e', 3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

DROP TABLE IF EXISTS `giohang`;
CREATE TABLE IF NOT EXISTS `giohang` (
  `MaGH` int(10) NOT NULL AUTO_INCREMENT,
  `MaNguoiDung` int(10) NOT NULL,
  `MaDS` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  PRIMARY KEY (`MaGH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `giohang`
--

-- INSERT INTO `nguoidung` (`MaNguoiDung`, `TenNguoiDung`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
-- (1, 'Trần Văn A', 'tva', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
-- (2, 'Trần Văn B', 'tvb', 'e10adc3949ba59abbe56e057f20f883e 	', 1, 0),
-- (3, 'Trần Văn C', 'tvc', 'e10adc3949ba59abbe56e057f20f883e', 2, 0);