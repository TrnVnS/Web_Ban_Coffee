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
CREATE DATABASE `qlcf` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `qlcf`;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `coffee`;
CREATE TABLE IF NOT EXISTS `coffee` (
  `MaCF` int(10) NOT NULL AUTO_INCREMENT,
  `TenCF` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(10) NOT NULL,
  `HinhAnh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaCF`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT= ;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`MaCF`, `TenCF`, `MoTa`, `DonGia`, `HinhAnh`) VALUES
(1, 'Cà phê truyền thống', ' ', 20000, ''),
(2, 'Cà phê Americano', ' ', 25000, ''),
(3, 'Cà phê truyền thống', ' ', 20000, ''),
(4, 'Cà phê Americano', ' ', 25000, ''),
(5, 'Cà phê truyền thống', ' ', 20000, ''),
(6, 'Cà phê Americano', ' ', 25000, ''),

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `tbl_nguoidung` (
  `MaNguoiDung` int(10) NOT NULL AUTO_INCREMENT,
  `TenNguoiDung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `QuyenHan` tinyint(1) NOT NULL,
  `Khoa` tinyint(1) NOT NULL,
  PRIMARY KEY (`MaNguoiDung`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`MaNguoiDung`, `TenNguoiDung`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1, 'Trần Văn A', 'tva', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(2, 'Trần Văn B', 'tvb', 'e10adc3949ba59abbe56e057f20f883e 	', 1, 0),
(3, 'Trần Văn C', 'tvc', 'e10adc3949ba59abbe56e057f20f883e', 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
