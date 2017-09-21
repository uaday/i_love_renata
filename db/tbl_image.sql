-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 10:33 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i_love_renata_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `image`, `status`) VALUES
(1, 'uploads/G7bRXcuFqs.png', 1),
(2, 'uploads/apebT5kAIN.png', 1),
(3, 'uploads/Pb5GssXa1v.png', 1),
(7, 'uploads/5L5eJbuzJb.png', 1),
(8, 'uploads/ArqlYKoMs5.png', 1),
(9, 'uploads/0isUv8sHlB.png', 1),
(10, 'uploads/LAmcA3PixV.png', 1),
(11, 'uploads/bGfaClqX1x.png', 1),
(12, 'uploads/muN7c7hAr9.png', 1),
(13, 'uploads/zsqkI71WXr.png', 1),
(14, 'uploads/cbsIA5RO0h.png', 1),
(15, 'uploads/Zmv3AHzQjW.png', 1),
(16, 'uploads/6PHKE0grIy.png', 1),
(17, 'uploads/EjGLpugFTO.png', 1),
(18, 'uploads/YeoF8UlcHf.png', 1),
(19, 'uploads/qPHOn78fZi.png', 1),
(20, 'uploads/Si5lSaNbPk.png', 1),
(21, 'uploads/4TbFagEWbf.png', 1),
(22, 'uploads/nDpGziCBn9.png', 1),
(23, 'uploads/ZW8QpxfbIW.png', 1),
(24, 'uploads/MvbpuAJusG.png', 1),
(25, 'uploads/XMs0BoMHlt.png', 1),
(26, 'uploads/4nG9BsQhLD.png', 1),
(27, 'uploads/llrbshnBgn.png', 1),
(28, 'uploads/aIEgLU5Kon.png', 1),
(29, 'uploads/uKrgbNYdcd.png', 1),
(30, 'uploads/QrP0u5ug42.png', 1),
(31, 'uploads/AZfauQkoiw.png', 1),
(32, 'uploads/H4YUQYNHeE.png', 1),
(33, 'uploads/pWm3anIoUl.png', 1),
(34, 'uploads/zPeit3izGI.png', 1),
(35, 'uploads/e0l4eATnpy.png', 1),
(36, 'uploads/muORSnyp3v.png', 1),
(37, 'uploads/hc8lG8iabm.png', 1),
(38, 'uploads/x7hRBM1Tft.png', 1),
(39, 'uploads/XrHUiXRDFb.png', 1),
(40, 'uploads/3l2yyKjbbk.png', 1),
(41, 'uploads/fwpbSiQKpO.png', 1),
(42, 'uploads/7jcbAnQU9l.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
