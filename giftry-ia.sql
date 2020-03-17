-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 02:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftry-ia`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `product_desc`, `img`, `type`) VALUES
(0, 'Al Abd Biscuit With Coconut- 15 Pieces', 32, 'Brand: Al Abd\r\nType: Biscuits, Cookies & Crackers\r\nSize: 250 Gm\r\nPackaging: Box           ', 'item_XXL_38655519_150657188.jpg', ''),
(0, 'Dell Inspiron G5 5590', 27666, '             Gaming Laptop - Intel Core i7-9750H, 15.6 Inch, 1 TB Plus 512 SSD, 16 GB RAM, NVIDIA Ge', 'item_XL_99997917_62e00e7b657be.jpg', ''),
(0, 'Lazurd Set Of 13 Pieces Cookware - Pink', 925, '       Brand:Lazurd\r\nType:Cookware Sets\r\nColor:Pink\r\nMaterial:Granite\r\nDiameter:16-18-22-26-18-22-24', 'item_XL_90204017_e9916f48e60c0.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `address`) VALUES
(1, 'Mahmoud', '0', '1478530123M', '407 omer ibn '),
(3, 'Maged', 'ehhhh  ', '1478530123G', ''),
(4, 'Admin', 'admin@gmail.com', '14785', 'admin407');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
