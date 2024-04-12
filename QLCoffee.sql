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
-- Table structure for table `coffee`
--

DROP TABLE IF EXISTS `coffee`;
CREATE TABLE IF NOT EXISTS `coffee` (
  `MaCF` int(10) NOT NULL AUTO_INCREMENT,
  `TenCF` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(10) NOT NULL,
  `HinhAnh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaCF`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`MaCF`, `TenCF`, `MoTa`, `DonGia`, `HinhAnh`) VALUES
(1, 'Cà phê truyền thống', 'Cà phê truyền thống là một phần không thể thiếu của nền văn hóa và cuộc sống hàng ngày của nhiều quốc gia trên khắp thế giới. Từ những quán cà phê nho nhỏ đến những tiệm cà phê sang trọng, cà phê đã trở thành biểu tượng của sự kết nối, thư giãn và trò chuyện.
Mỗi quốc gia có những phong cách cà phê truyền thống riêng, với những cách pha chế và phục vụ đặc trưng. Tuy nhiên, có một số yếu tố chung trong cà phê truyền thống mà người ta thường thấy, bao gồm:
Hương vị đậm đà: Cà phê truyền thống thường có hương vị đậm đà, mạnh mẽ và thơm ngon. Điều này thường được đạt được thông qua việc sử dụng hạt cà phê rang màu đậm và pha chế theo các kỹ thuật truyền thống.
Pha chế bằng tay: Trong cà phê truyền thống, việc pha chế cà phê thường được thực hiện bằng tay, từ việc rang hạt cà phê đến việc pha espresso hoặc phin cà phê.
Không gian ấm cúng: Quán cà phê truyền thống thường có không gian ấm cúng, thoải mái, thích hợp cho việc thư giãn, làm việc hoặc trò chuyện với bạn bè và người thân.
Phong cách phục vụ đa dạng: Tùy theo quốc gia và vùng miền, cà phê truyền thống có thể được phục vụ theo nhiều phong cách khác nhau, từ espresso ngắn đến cà phê đen đậm đà, từ cappuccino kem sữa đến latte mềm mại.
Vai trò xã hội: Quán cà phê truyền thống thường là nơi gặp gỡ và giao lưu của cộng đồng, nơi mà mọi người đến để thưởng thức cà phê, đọc sách, làm việc hoặc đơn giản chỉ là để trò chuyện.
Cà phê truyền thống không chỉ là một thức uống mà còn là một phần không thể thiếu của cuộc sống hàng ngày, mang lại sự phấn khích và niềm vui cho những người yêu cà phê trên khắp thế giới. ', 20000, 'images\h1_cftruyenthong.jpg'),
(2, 'Cà phê Americano', 'Cà phê Americano là một loại cà phê phổ biến và đặc trưng của nền văn hóa cà phê thế giới. Được cho là xuất phát từ thời kỳ Chiến tranh Thế giới thứ II, khi lính Mỹ ở châu Âu thường thích uống cà phê nhưng lại muốn dilute (phá hủy) hương vị mạnh mẽ của cà phê Espresso bằng cách thêm nước.
Americano được pha chế đơn giản từ một tách espresso và nước nóng. Quy trình pha chế này làm giảm đi độ đậm đà của cà phê Espresso mà vẫn giữ lại hương vị cà phê đích thực. Mặc dù Americano có thể được phục vụ theo nhiều cách khác nhau, nhưng cách phổ biến nhất vẫn là pha cà phê Espresso đơn giản và sau đó thêm nước nóng vào.
Với Americano, người uống cà phê có thể tận hưởng một ly cà phê nhẹ nhàng, dễ uống, với hương vị thanh mát và hậu vị đặc trưng. Đây cũng là lựa chọn phổ biến cho những người mới bắt đầu thưởng thức cà phê Espresso, vì nó giảm đi tính chất đậm đà và cay nồng của Espresso mà vẫn giữ lại được hương vị cà phê tinh tế.
Americano thường được thưởng thức vào bất kỳ thời điểm nào trong ngày và có thể được phục vụ ở nhiều quán cà phê trên khắp thế giới, từ những tiệm cà phê phong cách Italia đến các chuỗi cà phê quốc tế. Đối với nhiều người, Americano không chỉ là một thức uống, mà còn là biểu tượng của sự đơn giản và thưởng thức cà phê mà không cần quá phức tạp.', 25000, 'images\h2_cfAmericano.jpg');

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
-- Dumping data for table `tbl_nguoidung`
--

INSERT INTO `nguoidung` (`MaNguoiDung`, `TenNguoiDung`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1, 'Trần Văn A', 'tva', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(2, 'Trần Văn B', 'tvb', 'e10adc3949ba59abbe56e057f20f883e 	', 1, 0),
(3, 'Trần Văn C', 'tvc', 'e10adc3949ba59abbe56e057f20f883e', 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
