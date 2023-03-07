-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 04:59 PM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Rolex'),
(2, 'Gucci'),
(3, 'Nike'),
(4, 'ps'),
(5, 'Adidas'),
(6, 'U boat');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(2, 'Watch'),
(3, 'Shoes'),
(4, 'Rings'),
(8, 'hellooooo');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `Id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `age_range` text NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`Id`, `username`, `password`, `email`, `age_range`, `role`) VALUES
(35, 'Sishirk', 'Sishir@123', 'jhbdjd@ganja.com', '35to44', 'user'),
(37, 'Sishirkharel', 'Sishir@123', 'kharelsishir1000@gmail.com', '18to24', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `inserting_product`
--

CREATE TABLE `inserting_product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inserting_product`
--

INSERT INTO `inserting_product` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_price`) VALUES
(1, 'Jordan 1 high (Universal purple)', '$999', 'jordan, air, jordan1,nike,purple, jordan1 high', 3, 3, 'jordan1.jpg', 'sdf'),
(2, 'Adidas air max', '$49', 'adidas, Adidas,air max', 3, 5, 'adidas.jpg', 'Okey'),
(3, 'Gucci ', '$99', 'Gucci gucci', 3, 2, 'gucci.jpg', 'df'),
(4, 'Jordan 4 retro', '$249', 'jordan Jordan4 retro', 3, 3, 'Jordan4 retro.jpg', 'sdf'),
(5, 'Air Jordan 1 Retro Shattered Backboard', '$160', 'Air Jordan jordan Retro shattered backboard', 3, 3, 'airjordan1 high.jpg', 'ad'),
(6, 'Adidas samba', '$99', 'Adidas samba', 3, 5, 'adidas2.jpg', 'qsdq'),
(7, 'Gold ring', '$499', 'Gold, gold, ps, ring', 4, 4, 'goldring.jpg', '$499'),
(15, 'Diamond ring ps', '$999', 'Diamond, ring, diamond Ring,ps', 4, 4, 'ring-1.jpg', '$999'),
(16, 'Rolex', '$1499', 'Rolex rolex', 2, 1, 'rolex.jpg', '$1499'),
(17, 'U boat', '$499', 'U boat, watch, uboat', 2, 6, 'uboat.jpg', '$499');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--
-- Error reading structure for table users.products: #1932 - Table &#039;users.products&#039; doesn&#039;t exist in engine
-- Error reading data for table users.products: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `users`.`products`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'a', '', 'd41d8cd98f00b204e9800998ecf8427e', 'user'),
(2, 'hellomello', '', '902cd56e0268528cd28c1c25e2c9e603', 'user'),
(3, 'hellomello', '', '0284bb853a649751efbca489e6132b12', 'user'),
(4, 'hellomello', '', '8b1a9953c4611296a827abf8c47804d7', 'user'),
(5, '', '', 'e012b7dd4a2a803595f24835eae91bae', 'user'),
(6, 'wew', 'qweq@gfer.com', 'd41d8cd98f00b204e9800998ecf8427e', 'user'),
(7, 'asdasd', '', '0d9a5368f1428854026c651ed44f6b7d', 'user'),
(8, 'asdasd', 'asdas@ash.com', 'd41d8cd98f00b204e9800998ecf8427e', 'user'),
(9, 'sdd', 'qdq@hdbk.com', '5d41402abc4b2a76b9719d911017c592', 'user'),
(10, 'sishir', 'jhda@gmail.com', '943b19bf30fab7896bf90ebbde668f44', 'user'),
(11, 'sishir', 'sishir@gmail.com', '5d41402abc4b2a76b9719d911017c592', 'user'),
(12, 'sishir', 'ksishir@gmail.com', '5d41402abc4b2a76b9719d911017c592', 'admin'),
(13, 'sishir', 'hello@gmail.com', '444bcb3a3fcf8389296c49467f27e1d6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `inserting_product`
--
ALTER TABLE `inserting_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `inserting_product`
--
ALTER TABLE `inserting_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
