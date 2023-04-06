-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 02:49 AM
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
  `bikeCategory_descriptions` varchar(400) NOT NULL,
  `ext` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bikecategory`
--

INSERT INTO `bikecategory` (`bikeCategory_id`, `categoryName`, `bikeCategory_descriptions`, `ext`) VALUES
(20, 'mountain', 'Anyone who loves spending time outdoors and venturing far off the beaten track on their bike is best advised to choose a mountain bike. It’s suited for almost all types of trails and can offer everything – from a scenic and relaxed off-road bike ride to an action-packed challenge in rugged terrain. You only need to choose the right MTB for your needs.', 'jfif'),
(21, 'children', 'As soon as your child is outside on his or her first child\'s bike, they will experience their first outdoor adventures. To ensure that your little one gets maximum pleasure from their stylish new children’s bike, we’ll do our best to help you with your purchase. You need to ask the following two questions: What size does the kid\'s bike need to be? What equipment does the child\'s bike need?', 'jpg'),
(22, 'cross', 'CrossBike Cycling is healthy, reduces everyday stress instantly and is also a really eco-friendly and modern way of getting around in the city, in the countryside and off-road. And the BIKE24 online shop has the right bike for you. Our range covers bikes from big-name manufacturers for many different requirements. From children’s bikes and city bikes to high-end bikes, you can buy the bike that su', 'jpg'),
(23, 'city', 'City bikes Cycling is healthy, reduces everyday stress instantly and is also a really eco-friendly and modern way of getting around in the city, in the countryside and off-road. And the BIKE24 online shop has the right bike for you. Our range covers bikes from big-name manufacturers for many different requirements. From children’s bikes and city bikes to high-end bikes, you can buy the bike that s', 'jpg'),
(24, 'triathlon', 'triathlon Bikes Cycling is healthy, reduces everyday stress instantly and is also a really eco-friendly and modern way of getting around in the city, in the countryside and off-road. And the BIKE24 online shop has the right bike for you. Our range covers bikes from big-name manufacturers for many different requirements. From children’s bikes and city bikes to high-end bikes, you can buy the bike t', 'jfif'),
(25, 'road', 'Road bikes combine pure training and a passion for conquering long distances solo. This includes competitions and chasing records, but road bikes are also ideal for touring with friends and exploring.The choice of road bikes is diverse: classic road bikes, aerobikes, time trial bikes, e-bikes, all-road, gravel, cyclo-cross and track bikes and tourers etc. Carbon, aluminium and steel-rim road bikes', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brandName` varchar(20) NOT NULL,
  `brand_descriptions` varchar(400) NOT NULL,
  `ext` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brandName`, `brand_descriptions`, `ext`) VALUES
(22, 'cannondale', 'Cannondale has been synonymous with innovation since 1971. From the first CAAD aluminium bikes to the legendary Lefty through to the latest carbon road bikes, Cannondale has kept redefining the limits of what’s possible. Quality, unique designs, integration and revolutionary technology are the hallmark of Cannondale bikes, parts and apparel. Whether on- or off-road, traditional or with e-power, th', 'png'),
(23, 'asics', 'ASICS was founded in 1949 by Kihachiro Onitsuka in Kobe, Japan, and was initially called the Onitsuka Tiger. The first sports shoe from ASICS was a basketball shoe. However, the special focus on technologically adept running shoes quickly followed. But the brand name didn’t change until 1977. The letters are an acronym of the Latin saying Anima sana in corpore sano – in translation: a sound mind i', 'png'),
(24, 'campagnolo', 'Campagnolo represents not only the quest for technical perfection, but also the passion, exertion, agony and myths and the past, present and future of cycling, the most beautiful sport in the world.\" There is no better way to describe this company of great tradition than with the words of the owner, Valentino Campagnolo. Campagnolo road bike components and wheelsets set themselves apart through th', 'png'),
(25, 'cube', 'The CUBE state-of-the-art product range consists of around 350 different CUBE e-bikes, mountain bikes, road bikes, cross and gravel bikes, and city and trekking bikes. CUBE, specialists in affordable yet high-performance cycling gear from Waldershof in Bavaria, also have specifically adapted bikes for women, intelligent children\'s bicycles and an extensive range of CUBE bike accessories and clothi', 'png'),
(26, 'giro', 'Giro is the world leading manufacturer of high-end equipment for road cyclists and mountainbike riders. The product range includes shoes, helmets, goggles, gloves and apparel products specifically designed for women and men, which combine style, function and lifestyle in an outstanding way. Professional cycling teams like NTT Pro Cycling Team also rely on Giro products such as the Aether Spherical', 'png'),
(27, 'scott', 'SCOTT Sports is a truly traditional Swiss company with a long history in the production of professional sporting goods. Since 1958, the brand develops a wealth of different outdoor products, ranging from bicycles to ski poles. Founding father Ed Scott, an engineer and professional skier, strongly believed in creating the best quality product possible. The brand’s bike equipment is particularly pop', 'png'),
(28, 'endura', 'Founded in Edinburgh in 1992, Endura has grown into a globally respected brand whose award-winning cycling clothing, protectors and helmets are worn by the world\'s best road, MTB and triathlon riders. From the Pro SL gear, to the ground-breaking MT500 Endura MTB collection, through to the GV500 gravel bike wear, Endura cycling clothing offers you uncompromising quality with a sustainable approach.', 'png'),
(29, 'gorewear', 'For over 30 years, GOREWEAR has been developing products that make the athletic experience even better. Having evolved from the former brands GORE Bike Wear® and GORE Running Wear®, the successful GOREWEAR brand now produces top-quality bike and running wear with world-leading textile technologies such as GORE-TEX®, which sets new benchmarks in comfort and protection. So that you can set new stand', 'png');

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

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`userId`, `product_id`, `product_size`, `cart_quantity`, `cart_date`) VALUES
(15, 120, 'M', 3, '2022-12-16'),
(15, 128, '600', 3, '2022-12-16'),
(15, 129, 'M', 4, '2022-12-16'),
(15, 130, 'S', 2, '2022-12-16'),
(16, 119, 'M', 1, '2022-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `userId` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `favDate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`userId`, `product_id`, `favDate`) VALUES
(15, 120, '2022-12-16'),
(16, 130, '2022-12-16');

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
  `price` decimal(10,0) DEFAULT NULL,
  `discount` int(3) DEFAULT 0,
  `points` int(11) NOT NULL DEFAULT 0,
  `descriptions` varchar(400) NOT NULL,
  `made` varchar(30) NOT NULL,
  `code` varchar(40) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `material` varchar(170) NOT NULL,
  `model` int(11) NOT NULL,
  `weightt` int(11) DEFAULT 0,
  `categoryName` varchar(20) DEFAULT NULL,
  `activity` varchar(40) DEFAULT NULL,
  `chain` varchar(60) DEFAULT NULL,
  `sys` varchar(50) DEFAULT NULL,
  `Pdate` date DEFAULT curdate(),
  `ext` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `Category`, `brandName`, `title`, `color1`, `color2`, `price`, `discount`, `points`, `descriptions`, `made`, `code`, `gender`, `material`, `model`, `weightt`, `categoryName`, `activity`, `chain`, `sys`, `Pdate`, `ext`) VALUES
(77, 'bike', 'cannondale', 'Cannondale TOPSTONE 2 - Shimano GRX - Gravelbike - 2022 - olive green', 'beige', 'white', '2352', 10, 5, 'An amazingly capable, versatile gravel road bike. Built for chasing horizons, exploring routes less travelled or accelerating your commute... Straightforward, reliable and a whole hell of a lotta fun, the Cannondale Topstone Alloy is a gravel bike crafted for those with a taste for adventure – and value.\r\n\r\nRoll light and free, or load it up for a long haul, Topstone’s comfortable ride, confident ', 'france', 'CAD577587', 'female', 'Aluminium', 2021, 8400, 'mountain', 'Cycling', 'KMC X10', '10-speed', '2022-12-13', 'jpg'),
(78, 'bike', 'cannondale', 'Cannondale TOPSTONE 2 - Shimano GRX - Gravelbike - 2022 - olive green', 'white', 'grey', '2312', 12, 12, 'An amazingly capable, versatile gravel road bike. Built for chasing horizons, exploring routes less travelled or accelerating your commute. Straightforward, reliable and a whole hell of a lotta fun, the Cannondale Topstone Alloy is a gravel bike crafted for those with a taste for adventure – and value.\r\n\r\nRoll light and free, or load it up for a long haul, Topstone’s comfortable ride, confident ha', 'germany', 'CAD57758723', 'male', 'carbon', 2022, 8237, 'children', 'cycling', '	KMC X10', '12 -speed', '2022-12-13', 'jpg'),
(79, 'bike', 'cannondale', 'Cannondale TOPSTONE 1 - Shimano GRX - Gravelbike - 2022 - cinnamon', 'brown', 'beige', '2322', 23, 6, 'An amazingly capable, versatile gravel road bike. Built for chasing horizons, exploring routes less travelled or accelerating your commute. Straightforward, reliable and a whole hell of a lotta fun, the Cannondale Topstone Alloy is a gravel bike crafted for those with a taste for adventure – and value.\r\n\r\nRoll light and free, or load it up for a long haul, Topstone’s comfortable ride, confident ha', 'france', 'Wl237287g', 'male', 'carbon', 2022, 2324, 'cross', 'cycling', 'KMC X11', '15 -speed', '2022-12-13', 'jpg'),
(80, 'bike', 'asics', 'SCOTT ADDICT eRIDE 10 - Carbon Road E-Bike - 2022 - prism aqua green / chrome', 'black', 'brown', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'male', 'carbon', 2019, 23211, 'cross', 'cycling', 'CHS 426 GS', '12 speed', '2022-12-13', 'jpg'),
(81, 'bike', 'asics', 'SCOTT ADDICT eRIDE 10 - Carbon Road E-Bike - 2022 - prism aqua green / chrome', 'white', 'multicolor', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'male', 'carbon', 2019, 23211, 'triathlon', 'cycling', 'CHS 426 GS', '12 speed', '2022-12-13', 'jpg'),
(82, 'bike', 'asics', 'SCOTT ADDICT eRIDE 10 - Carbon Road E-Bike - 2022 - prism aqua green / chrome', 'black', 'blue', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'male', 'carbon', 2019, 23211, 'road', 'cycling', 'CHS 426 GS', '12 speed', '2022-12-13', 'jpg'),
(83, 'bike', 'asics', 'asics ADDICT eRIDE 10 - Carbon Road E-Bike - 2022 - prism aqua green / chrome', 'yellow', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'male', 'carbon', 2021, 23211, 'road', 'cycling', 'CHS 426 GS', '12 speed', '2022-12-13', 'jpg'),
(84, 'bike', 'asics', 'asics ADDICT eRIDE 10 - Carbon Road E-Bike - 2022 - prism aqua green / chrome', 'grey', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'unisex', 'carbon', 2021, 23211, 'city', 'cycling', 'CHS 426 GS', '12 speed', '2022-12-13', 'jpg'),
(85, 'bike', 'campagnolo', 'FOCUS JAM² 7.9 - 29\" MTB E-Bike - 2023 - Blue Green', 'grey', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'unisex', 'carbon', 2021, 23211, 'cross', 'cycling', 'CHS 426 GS34', '12 speed', '2022-12-13', 'jpg'),
(86, 'bike', 'campagnolo', 'FOC343US 2321 JAM² 7.9 - 29\" MTB E-Bike - 2023 - Blue Green', 'beige', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'unisex', 'carbon', 2021, 23211, 'road', 'cycling', 'CHS 426 GS34', '12 speed', '2022-12-13', 'jpg'),
(87, 'bike', 'cube', 'CUBE STEREO HYBRID 160 HPC Actionteam 750 - 27.5\" | Carbon | MTB E-Bike | 2022 - actionteam A00', 'beige', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'unisex', 'carbon', 2021, 23211, 'triathlon', 'cycling', 'CHS 426 GS34', '12 speed', '2022-12-13', 'jpg'),
(88, 'bike', 'cube', 'CUBE STEREO HYBRID 160 HPC Actionteam 750 - 27.5\" | Carbon | MTB E-Bike | 2022 - actionteam A00', 'beige', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'unisex', 'carbon', 2021, 23211, 'city', 'cycling', 'CHS 426 GS34', '12 speed', '2022-12-13', 'jpg'),
(89, 'bike', 'cube', 'CUBE CROSS Race C:68X TE - Ultegra Di2 Carbon Cyclocross Bike - 2022 - carbon/flashyellow A00', 'beige', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'unisex', 'carbon', 2021, 23211, 'road', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(90, 'bike', 'cube', 'CUBE CROSS Race C:68X TE - Ultegra Di2 Carbon Cyclocross Bike - 2022 - carbon/flashyellow A00', 'beige', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'unisex', 'carbon', 2021, 23211, 'road', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(91, 'bike', 'cube', 'CUBE CROSS Race C:68X TE - Ultegra Di2 Carbon Cyclocross Bike - 2022 - carbon/flashyellow A00', 'beige', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD2352', 'unisex', 'carbon', 2021, 23211, 'mountain', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(92, 'bike', 'cube', 'CUBE ACID 200 Street - 20 Inches Kids Bike - 2022 - blue/lindgreen A00', 'beige', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'mountain', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(93, 'bike', 'cube', 'CUBE ACID 200 Street - 20 Inches Kids Bike - 2022 - blue/lindgreen A00', 'yellow', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'mountain', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(94, 'bike', 'cube', 'CUBE ACID 200 Street - 20 Inches Kids Bike - 2022 - blue/lindgreen A00', 'yellow', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'mountain', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(95, 'bike', 'giro', 'Giro Agilis MIPS Helmet - matte black', 'yellow', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'cross', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(96, 'bike', 'scott', 'Giro Agilis MIPS Helmet - matte black', 'yellow', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'cross', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(97, 'bike', 'scott', 'scoot  Agilis MIPS Helmet - matte black', 'yellow', 'black', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'cross', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(98, 'bike', 'endura', 'BMC ROADMACHINE 01 DISC MODULE - Carbon Frame Set - 2022 - rhino grey & neon red', 'white', 'beige', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'mountain', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(99, 'bike', 'endura', 'BMC ROADMACHINE 01 DISC MODULE - Carbon Frame Set - 2022 - rhino grey & neon red', 'black', 'beige', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'female', 'carbon', 2021, 23211, 'mountain', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(100, 'bike', 'endura', 'BMC ROADMACHINE FIVE - Ultegra Carbon Roadbike - 2022 - Neon red / petrol blue', 'red', 'beige', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'road', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(101, 'bike', 'endura', 'BMC ROADMACHINE FIVE - Ultegra Carbon Roadbike - 2022 - Neon red / petrol blue', 'red', 'beige', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'road', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(102, 'bike', 'gorewear', 'Cinelli HOBOOTLEG - Adventure Bike - 2022 - red right hand', 'red', 'beige', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'cross', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(103, 'bike', 'gorewear', 'Cinelli HOBOOTLEG - Adventure Bike - 2022 - red right hand', 'black', 'beige', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'cross', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(104, 'bike', 'gorewear', 'BMC 257 AMP AL ONE - Electric City Bike - 2023 - Powder Steel Blue', 'black', 'beige', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'road', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(105, 'bike', 'gorewear', 'BMC 257 AMP AL ONE - Electric City Bike - 2023 - Powder Steel Blue', 'black', 'beige', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'road', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(106, 'bike', 'cube', 'BMC 257 AMP AL ONE - Electric City Bike - 2023 - Powder Steel Blue', 'blue', 'beige', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'children', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(107, 'bike', 'cube', 'BMC TWOSTROKE AL 20 - 20\" Kids Bike - 2022 - poison green & black', 'yellow', 'beige', '2213', 12, 23, 'When Scott decided to develop the Addict RC with electric drive, they didn\'t want to make road cycling easier per se. They simply wanted to make it better - to be able to ride higher, longer and even steeper climbs - that was their goal. So that you can set off even earlier and only hit the road again later. Lightweight, stiff and at least as stylish as its World Tour equivalent, the Addict eRIDE ', 'france', 'WJD23523', 'unisex', 'carbon', 2021, 23211, 'children', 'cycling', 'CHS 426 GS34wew', '12 speed', '2022-12-13', 'jpg'),
(108, 'helmet', 'giro', 'Giro Agilis MIPS Helmet - matte black', 'black', 'grey', '22222', 22, 2, 'The Agilis™ MIPS® is the right choice for riders looking for a helmet that combines airy design with slightly deeper coverage and a host of performance features aimed at road and multi-surface riding.', 'france', 'HHS2321', 'male', 'Composite', 2022, 200, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(109, 'helmet', 'giro', 'Giro Agilis MIPS Helmet - matte black', 'white', 'grey', '22222', 22, 2, 'The Agilis™ MIPS® is the right choice for riders looking for a helmet that combines airy design with slightly deeper coverage and a host of performance features aimed at road and multi-surface riding.', 'france', 'HHS2321', 'female', 'Composite', 2022, 200, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(110, 'helmet', 'gorewear', 'Giro Agilis MIPS Helmet - matte black', 'white', 'grey', '22222', 22, 2, 'The Agilis™ MIPS® is the right choice for riders looking for a helmet that combines airy design with slightly deeper coverage and a host of performance features aimed at road and multi-surface riding.', 'france', 'HHS2321', 'male', 'Composite', 2022, 200, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(111, 'helmet', 'asics', 'asics Agilis MIPS Helmet - matte black', 'black', 'grey', '22222', 22, 2, 'The Agilis™ MIPS® is the right choice for riders looking for a helmet that combines airy design with slightly deeper coverage and a host of performance features aimed at road and multi-surface riding.', 'france', 'HHS2321', 'male', 'Composite', 2022, 200, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(112, 'bottle', 'campagnolo', 'Elite Fly Bottle 750ml - black/grey', 'black', 'beige', '232', 23, 0, 'The Fly was designed and produced to achieve a low weight at record level. The bottle with a capacity of 750 ml is with its low weight one of the world\'s lightest sport bottles, thanks to different materials and thicknesses which were adjusted at the needs of its spare parts. Only 225 mm high the Fly is very compact and ideal for small frames.', 'france', 'HSH7232', 'unisex', 'Composite', 2017, 123, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(113, 'bottle', 'scott', 'Elite Fly Bottle 750ml - black/grey', 'black', 'beige', '232', 23, 0, 'The Fly was designed and produced to achieve a low weight at record level. The bottle with a capacity of 750 ml is with its low weight one of the world\'s lightest sport bottles, thanks to different materials and thicknesses which were adjusted at the needs of its spare parts. Only 225 mm high the Fly is very compact and ideal for small frames.', 'france', 'HSH7232', 'unisex', 'Composite', 2017, 123, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(114, 'bottle', 'gorewear', 'Elite Fly Bottle 750ml - black/grey', 'white', 'beige', '232', 23, 0, 'The Fly was designed and produced to achieve a low weight at record level. The bottle with a capacity of 750 ml is with its low weight one of the world\'s lightest sport bottles, thanks to different materials and thicknesses which were adjusted at the needs of its spare parts. Only 225 mm high the Fly is very compact and ideal for small frames.', 'france', 'HSH7232', 'unisex', 'Composite', 2017, 123, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(115, 'bottle', 'gorewear', 'Elite Fly Bottle 750ml - black/grey', 'black', 'beige', '232', 23, 0, 'The Fly was designed and produced to achieve a low weight at record level. The bottle with a capacity of 750 ml is with its low weight one of the world\'s lightest sport bottles, thanks to different materials and thicknesses which were adjusted at the needs of its spare parts. Only 225 mm high the Fly is very compact and ideal for small frames.', 'france', 'HSH7232', 'unisex', 'Composite', 2017, 123, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(116, 'bottle', 'asics', 'voose Fly Bottle 750ml - black/grey', 'black', 'beige', '232', 23, 0, 'The Fly was designed and produced to achieve a low weight at record level. The bottle with a capacity of 750 ml is with its low weight one of the world\'s lightest sport bottles, thanks to different materials and thicknesses which were adjusted at the needs of its spare parts. Only 225 mm high the Fly is very compact and ideal for small frames.', 'france', 'HSH7232', 'unisex', 'Composite', 2017, 123, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(117, 'gloves', 'cube', 'Castelli Espresso GT Glove - black 010', 'black', 'beige', '12', 10, 1, 'Castelli Espresso GT Glove - black 010\r\nPrimaLoft® for warmth, a GORE-TEX® waterproof liner and easy on/off thanks to the innovative Castelli zip construction. It’s Castelli\'s ultimate extreme-weather glove.\r\n\r\nMerkmale des Castelli Espresso GT Glove:Castelli Espresso GT Glove - black 010\r\nPrimaLoft® for warmth, a GORE-TEX® waterproof liner and easy on/off thanks to the innovative Castelli zip con', 'france', 'NCJ343', 'female', 'Synthetics', 2017, 5, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(118, 'gloves', 'cube', 'Castelli Espresso GT Glove - black 010', 'black', 'beige', '12', 1, 1, 'Castelli Espresso GT Glove - black 010\r\nPrimaLoft® for warmth, a GORE-TEX® waterproof liner and easy on/off thanks to the innovative Castelli zip construction. It’s Castelli\'s ultimate extreme-weather glove.\r\n\r\nMerkmale des Castelli Espresso GT Glove:Castelli Espresso GT Glove - black 010\r\nPrimaLoft® for warmth, a GORE-TEX® waterproof liner and easy on/off thanks to the innovative Castelli zip con', 'france', 'NCJ343', 'unisex', 'Synthetics', 2017, 5, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(119, 'gloves', 'cube', 'Castelli Espresso GT Glove - black 010', 'black', 'beige', '12', 1, 1, 'Castelli Espresso GT Glove - black 010\r\nPrimaLoft® for warmth, a GORE-TEX® waterproof liner and easy on/off thanks to the innovative Castelli zip construction. It’s Castelli\'s ultimate extreme-weather glove.\r\n\r\nMerkmale des Castelli Espresso GT Glove:Castelli Espresso GT Glove - black 010\r\nPrimaLoft® for warmth, a GORE-TEX® waterproof liner and easy on/off thanks to the innovative Castelli zip con', 'france', 'NCJ343', 'unisex', 'Synthetics', 2017, 5, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(120, 'gloves', 'scott', 'Castelli Espresso GT Glove - black 010', 'black', 'beige', '12', 1, 1, 'Castelli Espresso GT Glove - black 010\r\nPrimaLoft® for warmth, a GORE-TEX® waterproof liner and easy on/off thanks to the innovative Castelli zip construction. It’s Castelli\'s ultimate extreme-weather glove.\r\n\r\nMerkmale des Castelli Espresso GT Glove:Castelli Espresso GT Glove - black 010\r\nPrimaLoft® for warmth, a GORE-TEX® waterproof liner and easy on/off thanks to the innovative Castelli zip con', 'france', 'NCJ343', 'unisex', 'Synthetics', 2017, 5, NULL, NULL, NULL, NULL, '2022-12-13', 'jpg'),
(128, 'bottle', 'cube', 'Cube Deboyo Thermo Bottle 550ml - Silver', 'grey', 'green', '9', 1, 2, 'Double Chamber Structure With Vacuum Insulation Provides 12h Of Insulating Performance For Hot And Cold Drinks. Made Of AISI304 Stainless Steel For Optimal Hygiene Perfect For Outdoor Use With The Included Second Screw Cap Large, Easy To Clean Valve With High Flow Rate And Dust Cap Compatible With Standard Water Bottle Holders', 'france', 'WIL50115', 'unisex', 'Stainless Steel', 2021, 460, NULL, NULL, NULL, NULL, '2022-12-16', 'jpg'),
(129, 'helmet', 'endura', 'ENDORA Sintesi Bike Helmet - White', 'white', 'black', '101', 2, 2, 'ENDORA Has Today Unveiled A Highly Versatile Addition To Its Cycling Helmet Range, The Sintesi. The Sintesi Has Been Designed For Cyclists Who Like To Mix Up Their Riding, Whether That’s On The Road, Gravel, Or Trails, Or Simply Cruising Around Town. Its Sleek Design Combines Safety, Comfort And Style, And The Different Color Variations Allow Riders To Select The One Which Best Suits Their Look.', 'France', 'WIL8950115', 'female', 'Plastique', 2019, 300, NULL, NULL, NULL, NULL, '2022-12-16', 'jpg'),
(130, 'bike', 'asics', 'ASICS GARDA Disc -Ultegra -NDR38 -Carbon Road Bike - 2023- Black Red Matt', 'black', 'grey', '83000', 10, 26, 'The ASICS Jena Is A New Carbon Gravel Bike, Designed To Give You More Freedom Of Choice When You Go Out For A Ride. Jena Was Designed To Satisfy Any Of Your Needs, Whether It Is Performance On Dirt Roads And Single Track, Or Adventure, Exploration, And Bikepacking. Jena Is A Light, Reactive, And Easy-To-Handle Bike With Racing-Comfort Geometries, And Able To Adapt To The Multiple Uses Required Of ', 'france', 'WJD23523', 'unisex', 'Carbon', 2022, 8400, 'mountain', 'cycling', 'Campagnolo EKAR CN21-EK13', '13-Speed', '2022-12-16', 'jpg');

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
  `quantity` int(11) DEFAULT 0,
  `Category` varchar(30) NOT NULL,
  `widget` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sizestock`
--

INSERT INTO `sizestock` (`product_id`, `size`, `quantity`, `Category`, `widget`) VALUES
(77, 'L', 56, 'bike', 'size3'),
(77, 'M', 12, 'bike', 'size2'),
(77, 'S', 23, 'bike', 'size1'),
(78, 'L', 12, 'bike', 'size3'),
(78, 'M', 232, 'bike', 'size2'),
(78, 'S', 12, 'bike', 'size1'),
(79, 'L', 121, 'bike', 'size3'),
(79, 'M', 12, 'bike', 'size2'),
(79, 'S', 123, 'bike', 'size1'),
(80, 'L', 121, 'bike', 'size3'),
(80, 'M', 12, 'bike', 'size2'),
(80, 'S', 232, 'bike', 'size1'),
(81, 'L', 121, 'bike', 'size3'),
(81, 'M', 12, 'bike', 'size2'),
(81, 'S', 232, 'bike', 'size1'),
(82, 'L', 121, 'bike', 'size3'),
(82, 'M', 12, 'bike', 'size2'),
(82, 'S', 232, 'bike', 'size1'),
(83, 'L', 121, 'bike', 'size3'),
(83, 'M', 12, 'bike', 'size2'),
(83, 'S', 232, 'bike', 'size1'),
(84, 'L', 121, 'bike', 'size3'),
(84, 'M', 12, 'bike', 'size2'),
(84, 'S', 232, 'bike', 'size1'),
(85, 'L', 121, 'bike', 'size3'),
(85, 'M', 12, 'bike', 'size2'),
(85, 'S', 232, 'bike', 'size1'),
(86, 'L', 121, 'bike', 'size3'),
(86, 'M', 12, 'bike', 'size2'),
(86, 'S', 232, 'bike', 'size1'),
(87, 'L', 121, 'bike', 'size3'),
(87, 'M', 12, 'bike', 'size2'),
(87, 'S', 232, 'bike', 'size1'),
(88, 'L', 121, 'bike', 'size3'),
(88, 'M', 12, 'bike', 'size2'),
(88, 'S', 232, 'bike', 'size1'),
(89, 'L', 121, 'bike', 'size3'),
(89, 'M', 12, 'bike', 'size2'),
(89, 'S', 232, 'bike', 'size1'),
(90, 'L', 121, 'bike', 'size3'),
(90, 'M', 12, 'bike', 'size2'),
(90, 'S', 232, 'bike', 'size1'),
(91, 'L', 121, 'bike', 'size3'),
(91, 'M', 12, 'bike', 'size2'),
(91, 'S', 232, 'bike', 'size1'),
(92, 'L', 121, 'bike', 'size3'),
(92, 'M', 12, 'bike', 'size2'),
(92, 'S', 232, 'bike', 'size1'),
(93, 'L', 121, 'bike', 'size3'),
(93, 'M', 12, 'bike', 'size2'),
(93, 'S', 232, 'bike', 'size1'),
(94, 'L', 121, 'bike', 'size3'),
(94, 'M', 12, 'bike', 'size2'),
(94, 'S', 232, 'bike', 'size1'),
(95, 'L', 121, 'bike', 'size3'),
(95, 'M', 12, 'bike', 'size2'),
(95, 'S', 232, 'bike', 'size1'),
(96, 'L', 121, 'bike', 'size3'),
(96, 'M', 12, 'bike', 'size2'),
(96, 'S', 232, 'bike', 'size1'),
(97, 'L', 121, 'bike', 'size3'),
(97, 'M', 12, 'bike', 'size2'),
(97, 'S', 232, 'bike', 'size1'),
(98, 'L', 121, 'bike', 'size3'),
(98, 'M', 12, 'bike', 'size2'),
(98, 'S', 232, 'bike', 'size1'),
(99, 'L', 121, 'bike', 'size3'),
(99, 'M', 12, 'bike', 'size2'),
(99, 'S', 232, 'bike', 'size1'),
(100, 'L', 121, 'bike', 'size3'),
(100, 'M', 12, 'bike', 'size2'),
(100, 'S', 232, 'bike', 'size1'),
(101, 'L', 121, 'bike', 'size3'),
(101, 'M', 12, 'bike', 'size2'),
(101, 'S', 232, 'bike', 'size1'),
(102, 'L', 121, 'bike', 'size3'),
(102, 'M', 12, 'bike', 'size2'),
(102, 'S', 232, 'bike', 'size1'),
(103, 'L', 121, 'bike', 'size3'),
(103, 'M', 12, 'bike', 'size2'),
(103, 'S', 232, 'bike', 'size1'),
(104, 'L', 121, 'bike', 'size3'),
(104, 'M', 12, 'bike', 'size2'),
(104, 'S', 232, 'bike', 'size1'),
(105, 'L', 121, 'bike', 'size3'),
(105, 'M', 12, 'bike', 'size2'),
(105, 'S', 232, 'bike', 'size1'),
(106, 'L', 121, 'bike', 'size3'),
(106, 'M', 12, 'bike', 'size2'),
(106, 'S', 232, 'bike', 'size1'),
(107, 'L', 121, 'bike', 'size3'),
(107, 'M', 12, 'bike', 'size2'),
(107, 'S', 232, 'bike', 'size1'),
(108, 'L', 232, 'helmet', 'size3'),
(108, 'M', 232, 'helmet', 'size2'),
(108, 'S', 3, 'helmet', 'size1'),
(109, 'L', 232, 'helmet', 'size3'),
(109, 'M', 232, 'helmet', 'size2'),
(109, 'S', 3, 'helmet', 'size1'),
(110, 'L', 232, 'helmet', 'size3'),
(110, 'M', 232, 'helmet', 'size2'),
(110, 'S', 3, 'helmet', 'size1'),
(111, 'L', 232, 'helmet', 'size3'),
(111, 'M', 232, 'helmet', 'size2'),
(111, 'S', 3, 'helmet', 'size1'),
(112, '500', 121, 'bottle', 'size1'),
(112, '600', 1213, 'bottle', 'size2'),
(112, '750', 1211, 'bottle', 'size3'),
(113, '500', 121, 'bottle', 'size1'),
(113, '600', 1213, 'bottle', 'size2'),
(113, '750', 1211, 'bottle', 'size3'),
(114, '500', 121, 'bottle', 'size1'),
(114, '600', 1213, 'bottle', 'size2'),
(114, '750', 1211, 'bottle', 'size3'),
(115, '500', 121, 'bottle', 'size1'),
(115, '600', 1213, 'bottle', 'size2'),
(115, '750', 1211, 'bottle', 'size3'),
(116, '500', 121, 'bottle', 'size1'),
(116, '600', 1213, 'bottle', 'size2'),
(116, '750', 1211, 'bottle', 'size3'),
(117, 'L', 123, 'gloves', 'size3'),
(117, 'M', 1213, 'gloves', 'size2'),
(117, 'S', 121, 'gloves', 'size1'),
(118, 'L', 123, 'gloves', 'size3'),
(118, 'M', 1213, 'gloves', 'size2'),
(118, 'S', 121, 'gloves', 'size1'),
(119, 'L', 123, 'gloves', 'size3'),
(119, 'M', 1213, 'gloves', 'size2'),
(119, 'S', 121, 'gloves', 'size1'),
(120, 'L', 123, 'gloves', 'size3'),
(120, 'M', 1213, 'gloves', 'size2'),
(120, 'S', 121, 'gloves', 'size1'),
(128, '500', 200, 'bottle', 'size3'),
(128, '600', 122, 'bottle', 'size2'),
(128, '750', 0, 'bottle', 'size1'),
(129, 'L', 0, 'helmet', 'size3'),
(129, 'M', 121, 'helmet', 'size2'),
(129, 'S', 100, 'helmet', 'size1'),
(130, 'L', 0, 'bike', 'size3'),
(130, 'M', 5, 'bike', 'size2'),
(130, 'S', 12, 'bike', 'size1');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `layer`, `gender`, `firstName`, `lastName`, `email`, `tel`, `addressU`, `codePostal`, `passwordU`, `userPoint`, `dateUser`) VALUES
(15, 0, 'male', 'chaker', 'yaakoub', 'user@hotmail.com', '71180632', 'Nabatieh', '28739', 'user', 0, '2022-12-13'),
(16, 1, 'male', 'chaker', 'yaakoub', 'superadmin@hotmail.com', '711937891', 'beyrout ', '4223', 'superadmin', 0, '2022-12-13'),
(17, 2, 'male', 'hadi', 'chouman', 'admin@hotmail.com', '03128732', 'zahle', '23232', 'admin', 0, '2022-12-13'),
(18, 3, 'male', 'ibrahim', 'mostafa', 'selesman@hotmail.com', '718361816', 'jounieh', '232211', 'selesman', 0, '2022-12-13'),
(19, 4, 'male', 'hassan', 'najem', 'Delivery@hotmail.com', '718371912', 'saida', '45232', 'delivery', 0, '2022-12-13');

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
  MODIFY `bikeCategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ordreaddress`
--
ALTER TABLE `ordreaddress`
  MODIFY `ordre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `salesordre`
--
ALTER TABLE `salesordre`
  MODIFY `salesOrdre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `foreignProductcart` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `foreignUsercart` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

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
