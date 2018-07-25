-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 12:05 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villa`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(1, 'rent'),
(2, 'Flats '),
(3, 'Apartments'),
(4, 'houses'),
(5, 'commercial  properties'),
(6, 'kenya'),
(7, 'bedsitter'),
(8, '5555');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category`, `image`) VALUES
(3, 'ddddd', 'no-name-0311-468012-1-zoom.jpg'),
(4, 'jbjbjjjnjnj', '1c15711d-914a-46b9-bc17-5b6b5af7c1ff.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `postproperty`
--

CREATE TABLE `postproperty` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_location` varchar(100) NOT NULL,
  `pro_price` varchar(100) NOT NULL,
  `pro_description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postproperty`
--

INSERT INTO `postproperty` (`id`, `cat_name`, `pro_name`, `pro_location`, `pro_price`, `pro_description`, `image`, `image1`, `image2`) VALUES
(26, 'rent', 'kenya', 'Riruta ,Dagoretti South ', '7,900,000', 'Situated in Thika, a mere 45-minute drive from Nairobiâ€™s Central Business District, this development presents an exciting selection of Townhouses, Villas and Bungalows that feature beautiful country views, a tranquil rural ambiance, and a refreshing escape from city chaos.\r\nDiscerning homeowners will love this 95-acre gated community with all the benefits of country living.\r\n', '20180625_144816.jpg', '20180625_145320.jpg', ' 20180625_150028.jpg'),
(27, 'rent', '2 Bed Apartment in Kileleshwa', 'Kileleshwa ', '13,000,000', 'Nestled in the serene and quite locale   of 3rd parklands Avenue lies an architectural perfect 4 bedrooms all ensuite apartment. A feeling of spaciousness makes this the perfect home for family living. All rooms are naturally light and feature ample space for creative set up and design.', 'd099dc77-4e86-45c2-9be7-6abad3bdea93-1.jpg', '0c845ded-fbfc-4af3-a436-d2b145d9642e-1.jpg', ' '),
(28, 'bedsitter', 'BedSitter', 'kahawa sukari ', '8000', 'Nestled in the serene and quite locale   of 3rd parklands Avenue lies an architectural perfect 4 bedrooms all ensuite apartment. A feeling of spaciousness makes this the perfect home for family living. All rooms are naturally light and feature ample space for creative set up and design.', 'esoko_img_2018_07_20_08_51_51.jpg', 'esoko_img_2018_07_20_08_44_01.jpg', ' '),
(29, 'Apartments', 'Modern Apartments In Parklands', 'Parklands ', '7,000,000', 'Situated in Thika, a mere 45-minute drive from Nairobiâ€™s Central Business District, this development presents an exciting selection of Townhouses, Villas and Bungalows that feature beautiful country views, a tranquil rural ambiance, and a refreshing escape from city chaos.\r\nDiscerning homeowners will love this 95-acre gated community with all the benefits of country living.\r\n', 'DSCN1372.jpg', 'DSCN1372.jpg', ' '),
(30, 'rent', 'one bedroom', 'Langata ', '40,000', 'Nestled in the serene and quite locale   of 3rd parklands Avenue lies an architectural perfect 4 bedrooms all ensuite apartment. A feeling of spaciousness makes this the perfect home for family living. All rooms are naturally light and feature ample space for creative set up and design.', 'esoko_img_2018_07_23_10_22_42.jpg', 'esoko_img_2018_07_23_10_22_43.jpg', ' '),
(31, 'commercial properties', 'Office Space in Riverside Drive', 'Riverside  ', '100,000', 'Situated in Thika, a mere 45-minute drive from Nairobiâ€™s Central Business District, this development presents an exciting selection of Townhouses, Villas and Bungalows that feature beautiful country views, a tranquil rural ambiance, and a refreshing escape from city chaos.\r\nDiscerning homeowners will love this 95-acre gated community with all the benefits of country living.\r\n', '20180508_152549.jpg', '20180508_151500.jpg', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'andrew', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postproperty`
--
ALTER TABLE `postproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `postproperty`
--
ALTER TABLE `postproperty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
