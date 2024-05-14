-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 10:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tblproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Red Petal Whisper', 'BQ0001', 'images/flowers/flower1.jpg', 79.00),
(2, 'Tiger Beer Bouquet', 'BQ0002', 'images/flowers/flower2.png', 90.00),
(3, 'Mini Baby\'s Breath', 'BQ0003', 'images/flowers/flower3.jpg', 40.00),
(4, 'Chamomile Bouquet', 'BQ0004', 'images/flowers/flower4.jpg', 100.00),
(5, 'Baby’s breath bouquet', 'BQ0005', 'images/flowers/flower5.jpg', 70.00),
(6, 'Cappuccino Rose Bouquet', 'BQ0006', 'images/flowers/flower6.jpg', 90.00),
(7, 'Sunflower Chamomile', 'BQ0007', 'images/flowers/flower7.png', 65.00),
(8, 'Rose Sunflower Chamomile', 'BQ0008', 'images/flowers/flower8.jpg', 79.00),
(9, 'Cute and Mini Sunflower', 'BQ0009', 'images/flowers/flower9.jpg', 59.00),
(10, 'Congratulations Grad Bundle', 'BL0001', 'images/balloons/balloon1.webp', 29.00),
(11, 'The Adventure Begins Bundle', 'BL0002', 'images/balloons/balloon2.webp', 39.00),
(12, 'The Best is Coming Bundle', 'BL0003', 'images/balloons/balloon3.webp', 39.00),
(13, 'Congrats Grad Bear Bundle', 'BL0004', 'images/balloons/balloon4.webp', 59.00),
(14, 'Congrats Grad Year 2024', 'BL0005', 'images/balloons/balloon5.webp', 65.00),
(15, 'Congrats Grad(Blue)', 'BL0006', 'images/balloons/balloon6.webp', 29.00),
(16, 'Congrats Grad(Red)', 'BL0007', 'images/balloons/balloon7.webp', 29.00),
(17, 'Congrats Grad(Green)', 'BL0008', 'images/balloons/balloon8.webp', 29.00),
(18, 'Congrats Grad(White)', 'BL0009', 'images/balloons/balloon9.webp', 29.00),
(19, 'Graduation Blanket', 'SV0001', 'images/souvenir/souvenir1.webp', 45.00),
(20, 'Graduate Keychain', 'SV0002', 'images/souvenir/souvenir2.webp', 20.00),
(21, 'Graduate Acrylic Plaque', 'SV0003', 'images/souvenir/souvenir3.webp', 30.00),
(22, 'Teddy Bair Bouquet', 'SV0004', 'images/souvenir/souvenir4.webp', 19.00),
(23, 'Graduate Eyeglasses', 'SV0005', 'images/souvenir/souvenir5.webp', 10.00),
(24, 'Beaded Bracelet', 'SV0006', 'images/souvenir/souvenir6.webp', 29.00),
(25, 'Personalized Gifts', 'SV0007', 'images/souvenir/souvenir7.webp', 23.00),
(26, 'Jewelry Necklace', 'SV0008', 'images/souvenir/souvenir8.webp', 59.00),
(27, 'Graduation Money Holder', 'SV0009', 'images/souvenir/souvenir9.webp', 26.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
