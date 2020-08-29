-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 11:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restrodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`name`, `email`, `password`, `mobile`, `about`) VALUES
('', 's@gmail.com', 'test', '8210129728', 'We are from punjab and provide the best food in the world.'),
('chai shai', 'sa34@gmail.com', '1111', '8210129728', 'My restraurant is the best'),
('Cafe four', 'saumya1234@gmail.com', '1234', '8210129728', 'My restraurant is the best'),
('Cafe four', 'saumya@gmail.com', '1234', '', 'My restraurant is the best'),
('Food Delight', 'saumyashrivastava81@gmail.com', '12345', '', 'best best');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `title` text NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`title`, `description`, `cat_id`) VALUES
('Chinese', 'We have chefs coming all the way from china to serve you authentic Chinese dishes.Best desi Chinese food you have ever tasted.', 1),
('Punjabi', 'We have authentic Punjabi veg as well as non veg food . Enjoy the best Indian spice here.', 2),
('Mexican', 'We provide the best Mexican Food in the town so do not forget to try that out.', 3),
('Italian Cuisine', 'We provide you the best of best Italian authentic food which will make you fall in love with Italy.', 4),
('South-Indian', 'We provide you the best of best South-Indian authentic food which will make you fall in love with South Indian', 5),
('Fastfood', 'best fast food ever', 8),
('Bihari', 'We have the best bihari food which can make you feel like home.', 9),
('Bihari', 'We have the best bihari food which can make you feel like home.', 10),
('Bihari', 'We have the best bihari food which can make you feel like home.', 11);

-- --------------------------------------------------------

--
-- Table structure for table `customerdb`
--

CREATE TABLE `customerdb` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdb`
--

INSERT INTO `customerdb` (`name`, `email`, `password`, `number`, `type`) VALUES
('anirudh', 'a@gmail.com', '1234567', '1234567890', 'both'),
('choti', 'c@gmail.com', '123', '12345676789', 'veg'),
('komal', 'komal@gmail.com', '1234', '8888888888', 'veg'),
('kittu', 'kri1@gmail.com', '1122', '8210129728', 'nonveg'),
('papa', 'p@gmail.com', '11', '8210129728', 'both'),
('Sau', 'saumyash@gmail.com', '333', '8210129728', 'veg'),
('Saumya Shrivastava', 'saumyashrivastava81@gmail.com', '12345', '8210129728', 'nonveg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `name` text NOT NULL,
  `category` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` int(255) NOT NULL,
  `restaurant` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`name`, `category`, `type`, `price`, `restaurant`, `image`) VALUES
('Chicken Biryani', 'Punjabi', '', 500, 'Food Delight', 'chicken-biryani-recipe.jpg'),
('Chicken Tikka', 'Punjabi', 'nonveg', 500, 'Food Delight', '8.webp'),
('Chowmin', 'Chinese', 'veg', 500, 'Food Delight', 'veg-chowmein.jpg'),
('dosa', 'South-Indian', 'veg', 500, 'Food Delight', 'pasta.jpg'),
('fruit cake', 'Cake', 'veg', 200, 'Chai Shai', 'vanilla-fruit-cake-delhi-cake997vani-A.jpg'),
('Masala Chicken', 'Punjabi', 'nonveg', 500, 'Food Delight', 'mchicken.jpg'),
('Pasta', 'Italian', 'veg', 200, 'Food Delight', 'pasta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdb`
--

CREATE TABLE `orderdb` (
  `order_id` varchar(255) NOT NULL,
  `restaurant` varchar(255) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `timeoforder` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdb`
--

INSERT INTO `orderdb` (`order_id`, `restaurant`, `foodname`, `customername`, `number`, `timeoforder`) VALUES
('1', 'Food Delight', 'Chiken Chilli', 'Saumya Shrivastava', '8210129728', '24:08:2020 11:05:10pm'),
('1100811869', 'Food Delight', 'Masala Chicken', 'Saumya Shrivastava', '8210129728', '26:08:2020 09:11:21pm'),
('160542112', 'Food Delight', 'Masala Chicken', 'Saumya Shrivastava', '8210129728', '29:08:2020 01:06:19am'),
('1770571915', 'Food Delight', 'Pasta', 'Sau', '8210129728', '29:08:2020 01:08:19am'),
('1860680937', 'Chai Shai', 'fruit cake', 'Saumya Shrivastava', '8210129728', '27:08:2020 12:04:43am'),
('2', 'Food Delight', 'Chicken Tikka', 'Saumya Shrivastava', '8210129728', '25:08:2020 04:21:55pm'),
('3', 'Food Delight', 'Manchurian', 'Saumya Shrivastava', '8210129728', '25:08:2020 04:22:48pm'),
('4', 'Food Delight', 'Chowmin', 'Saumya Shrivastava', '8210129728', '25:08:2020 04:22:56pm'),
('5', 'Food Delight', 'Pasta', 'Saumya Shrivastava', '8210129728', '25:08:2020 11:44:18pm'),
('6', 'Food Delight', 'Manchurian', 'Saumya Shrivastava', '8210129728', '26:08:2020 12:14:58am'),
('7', 'Food Delight', 'Pasta', 'choti', '12345676789', '26:08:2020 12:24:47am'),
('8', 'Food Delight', 'Masala Chicken', 'choti', '12345676789', '26:08:2020 02:01:21am'),
('9', 'Food Delight', 'Chicken Tikka', 'anirudh', '1234567890', '26:08:2020 08:08:59pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customerdb`
--
ALTER TABLE `customerdb`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`name`(255));

--
-- Indexes for table `orderdb`
--
ALTER TABLE `orderdb`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
