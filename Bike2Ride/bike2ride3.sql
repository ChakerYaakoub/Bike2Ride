-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 05:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bike2ride3`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikecategory`
--

CREATE TABLE `bikecategory` (
  `bikeCategory_id` int(11) NOT NULL,
  `categoryName` varchar(20) NOT NULL,
  `bikeCategory_descriptions` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brandName` varchar(20) NOT NULL,
  `brand_descriptions` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userId` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_size` varchar(10) NOT NULL,
  `cart_quantity` int(11) NOT NULL DEFAULT 0,
  `cart_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `userId` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `favDate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordreaddress`
--

CREATE TABLE `ordreaddress` (
  `ordre_id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `company` varchar(30) DEFAULT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `stret` varchar(50) NOT NULL,
  `addressO` varchar(50) NOT NULL,
  `codePostal` varchar(30) NOT NULL,
  `contry` varchar(30) NOT NULL,
  `ordre_date` date DEFAULT curdate(),
  `OrderDone` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `brandName` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `color1` varchar(30) NOT NULL,
  `color2` varchar(30) DEFAULT NULL,
  `price` float(5,5) DEFAULT NULL,
  `discount` float(3,3) DEFAULT 0.000,
  `points` int(11) NOT NULL DEFAULT 0,
  `descriptions` varchar(400) NOT NULL,
  `made` varchar(30) NOT NULL,
  `code` varchar(40) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `material` varchar(170) NOT NULL,
  `model` int(11) NOT NULL,
  `weightt` float(4,4) DEFAULT 0.0000,
  `categoryName` varchar(20) NOT NULL,
  `activity` varchar(40) NOT NULL DEFAULT 'none',
  `chain` varchar(60) NOT NULL DEFAULT 'none',
  `sys` varchar(50) NOT NULL DEFAULT 'none',
  `Pdate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `rating_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salesordre`
--

CREATE TABLE `salesordre` (
  `salesOrdre_id` int(11) NOT NULL,
  `ordre_id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_size` varchar(10) NOT NULL,
  `Ordre_quantity` int(11) NOT NULL DEFAULT 0,
  `price_now` float(5,5) DEFAULT NULL,
  `discount_now` float(3,3) DEFAULT 0.000,
  `sales_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sizestock`
--

CREATE TABLE `sizestock` (
  `product_id` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `layer` int(11) NOT NULL DEFAULT 0,
  `gender` varchar(20) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `addressU` varchar(100) NOT NULL,
  `codePostal` varchar(30) NOT NULL,
  `passwordU` varchar(50) NOT NULL,
  `userPoint` int(11) DEFAULT 0,
  `dateUser` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikecategory`
--
ALTER TABLE `bikecategory`
  ADD PRIMARY KEY (`bikeCategory_id`,`categoryName`),
  ADD UNIQUE KEY `categoryName` (`categoryName`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`,`brandName`),
  ADD UNIQUE KEY `brandName` (`brandName`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`userId`,`product_id`,`product_size`),
  ADD KEY `foreignProductcart` (`product_id`);

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`userId`,`product_id`),
  ADD KEY `foreignProductFav` (`product_id`);

--
-- Indexes for table `ordreaddress`
--
ALTER TABLE `ordreaddress`
  ADD PRIMARY KEY (`ordre_id`),
  ADD KEY `foreignUserOrdres` (`userId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `foreignBrand` (`brandName`),
  ADD KEY `foreignBikeCat` (`categoryName`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`,`userId`,`product_id`),
  ADD KEY `foreignUserrating` (`userId`),
  ADD KEY `foreignProductrating` (`product_id`);

--
-- Indexes for table `salesordre`
--
ALTER TABLE `salesordre`
  ADD PRIMARY KEY (`salesOrdre_id`),
  ADD KEY `foreignUserSales` (`userId`),
  ADD KEY `foreignOrdreProduct` (`product_id`),
  ADD KEY `foreignOrdreAddress` (`ordre_id`);

--
-- Indexes for table `sizestock`
--
ALTER TABLE `sizestock`
  ADD PRIMARY KEY (`product_id`,`size`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bikecategory`
--
ALTER TABLE `bikecategory`
  MODIFY `bikeCategory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordreaddress`
--
ALTER TABLE `ordreaddress`
  MODIFY `ordre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salesordre`
--
ALTER TABLE `salesordre`
  MODIFY `salesOrdre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `fav_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE,
  ADD CONSTRAINT `fav_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `ordreaddress`
--
ALTER TABLE `ordreaddress`
  ADD CONSTRAINT `ordreaddress_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brandName`) REFERENCES `brands` (`brandName`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`categoryName`) REFERENCES `bikecategory` (`categoryName`) ON DELETE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `salesordre`
--
ALTER TABLE `salesordre`
  ADD CONSTRAINT `salesordre_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE,
  ADD CONSTRAINT `salesordre_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `salesordre_ibfk_3` FOREIGN KEY (`ordre_id`) REFERENCES `ordreaddress` (`ordre_id`) ON DELETE CASCADE;

--
-- Constraints for table `sizestock`
--
ALTER TABLE `sizestock`
  ADD CONSTRAINT `sizestock_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
