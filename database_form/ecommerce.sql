-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 08:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`) VALUES
(1, 'Ahmad', 'Doughman', 71653043, 'ahmad@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `kids_jeans`
--

CREATE TABLE `kids_jeans` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids_jeans`
--

INSERT INTO `kids_jeans` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'jeans4.png', '12.00', 'good jeans');

-- --------------------------------------------------------

--
-- Table structure for table `kids_pajamas`
--

CREATE TABLE `kids_pajamas` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids_pajamas`
--

INSERT INTO `kids_pajamas` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'pajamas2.png', '20.00', 'cotton pajamas');

-- --------------------------------------------------------

--
-- Table structure for table `kids_shoes`
--

CREATE TABLE `kids_shoes` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids_shoes`
--

INSERT INTO `kids_shoes` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'shoes9.png', '20.00', 'good quality'),
(2, 'shoes3.png', '15.00', 'white shoes'),
(3, 'shoes5.png', '25.00', 'black shoes');

-- --------------------------------------------------------

--
-- Table structure for table `kids_tshirts`
--

CREATE TABLE `kids_tshirts` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids_tshirts`
--

INSERT INTO `kids_tshirts` (`id`, `image_path`, `price`, `description`) VALUES
(1, 't-shirt5.png', '9.00', 'nice tshirts'),
(2, 't-shirt7.png', '7.00', 'powder blue t_shirts'),
(3, 't-shirt11.png', '9.00', 'black t_shirts');

-- --------------------------------------------------------

--
-- Table structure for table `man_jeans`
--

CREATE TABLE `man_jeans` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `man_jeans`
--

INSERT INTO `man_jeans` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'category-1.jpg', '22.00', 'gray jeans'),
(2, 'buy-3.jpg', '23.00', 'black jeans'),
(3, 'man-slacks6.png', '12.00', 'white jeans'),
(4, 'man-slacks5.png', '15.00', 'blue jeans');

-- --------------------------------------------------------

--
-- Table structure for table `man_shoes`
--

CREATE TABLE `man_shoes` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `man_shoes`
--

INSERT INTO `man_shoes` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'buy-2.png', '20.00', 'black shoes'),
(2, 'product-5.jpg', '12.00', 'gray shoes'),
(3, 'product-12.jpg', '20.00', 'brown shoes');

-- --------------------------------------------------------

--
-- Table structure for table `man_suits`
--

CREATE TABLE `man_suits` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `man_suits`
--

INSERT INTO `man_suits` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'man-suits6.png', '40.00', 'black suits'),
(2, 'man-suits4.png', '60.00', 'red suits'),
(3, 'man-suits3.png', '66.00', 'blue suits'),
(4, 'man-suits9.png', '80.00', 'green suits'),
(5, 'man-suits2.png', '70.00', 'dark blue suits');

-- --------------------------------------------------------

--
-- Table structure for table `man_tshirts`
--

CREATE TABLE `man_tshirts` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `man_tshirts`
--

INSERT INTO `man_tshirts` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'buy-1.jpg', '15.00', 'red t_shirts'),
(2, 'hodies.png', '20.00', 'blue tshirts'),
(3, 'man-tshirts5.png', '15.00', 'black tshirts'),
(4, 'man-tshirts1.png', '7.00', 'good quality'),
(5, 'man-tshirts6.png', '12.00', 'cotton and high quality');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`id`, `user_id`, `image_path`, `price`, `quantity`, `description`) VALUES
(1, 1, 'assets/images/Man/product-6.png', 99.00, 3, 'Black T-Shirts'),
(2, 1, 'http://localhost/senior_project/user/assets/images/Women/woman-tshirts4.png', 14.00, 1, 'red t-shirt'),
(3, 1, 'assets/images/man-suits6.png', 40.00, 1, 'Black Suits'),
(4, 1, 'assets/images/t-shirt5.png', 45.00, 5, 'Nice Tshirts'),
(5, 1, 'assets/images/woman-shoes6.png', 40.00, 2, 'Best Shoes'),
(6, 3, 'assets/images/man-slacks5.png', 45.00, 3, 'Blue Jeans'),
(7, 3, 'assets/images/ladies-dress1.png', 70.00, 2, 'Black Dress'),
(8, 3, 'assets/images/shoes/buy-2.png', 50.00, 1, 'Black Shoes Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Magnam Voluptatibus Seda Accusamus Sint Unde Odit Asperiores Quae, Ipsa Ducimus Totam Veniam, Similique Minus Expedita Magni Eius Deleniti Voluptas? Laboriosam.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `feedback`) VALUES
(1, 'Ahmad', 'Doughman', 71653043, 'ahmad@gmail.com', '1234567', 'best ecommerce website'),
(2, 'sami', 'karam', 70145783, 'sami@gmail.com', 'sami123', ''),
(3, 'ali', 'karam', 81456258, 'ali@gmail.com', 'ali1@34', 'friendly website');

-- --------------------------------------------------------

--
-- Table structure for table `woman_dress`
--

CREATE TABLE `woman_dress` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `woman_dress`
--

INSERT INTO `woman_dress` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'dress3.jpeg', '45.00', 'best dress'),
(2, 'ladies-dress1.png', '35.00', 'black dress');

-- --------------------------------------------------------

--
-- Table structure for table `woman_jeans`
--

CREATE TABLE `woman_jeans` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `woman_jeans`
--

INSERT INTO `woman_jeans` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'woman-jeans6.png', '23.00', 'black jeans'),
(2, 'woman-jeans7.png', '11.00', 'green jeans');

-- --------------------------------------------------------

--
-- Table structure for table `woman_shoes`
--

CREATE TABLE `woman_shoes` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `woman_shoes`
--

INSERT INTO `woman_shoes` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'woman-shoes6.png', '20.00', 'best shoes'),
(2, 'woman-shoes8.png', '23.00', 'white shoes'),
(3, 'shoes2.png', '20.00', 'purple shoes'),
(4, 'woman-shoes7.png', '17.00', 'black shoes');

-- --------------------------------------------------------

--
-- Table structure for table `woman_tshirts`
--

CREATE TABLE `woman_tshirts` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `woman_tshirts`
--

INSERT INTO `woman_tshirts` (`id`, `image_path`, `price`, `description`) VALUES
(1, 'woman-tshirts4.png', '7.00', 'beauty tshirts'),
(2, 'jacket1.png', '12.00', 'white hoodies'),
(3, 'woman-tshirts9.png', '9.00', 'black t-shirts'),
(4, 'woman-tshirts5.png', '13.00', 'blue t-shirts'),
(5, 'woman-tshirts1.png', '15.00', 'white t-shirts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids_jeans`
--
ALTER TABLE `kids_jeans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids_pajamas`
--
ALTER TABLE `kids_pajamas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids_shoes`
--
ALTER TABLE `kids_shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids_tshirts`
--
ALTER TABLE `kids_tshirts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `man_jeans`
--
ALTER TABLE `man_jeans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `man_shoes`
--
ALTER TABLE `man_shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `man_suits`
--
ALTER TABLE `man_suits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `man_tshirts`
--
ALTER TABLE `man_tshirts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `woman_dress`
--
ALTER TABLE `woman_dress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `woman_jeans`
--
ALTER TABLE `woman_jeans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `woman_shoes`
--
ALTER TABLE `woman_shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `woman_tshirts`
--
ALTER TABLE `woman_tshirts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kids_jeans`
--
ALTER TABLE `kids_jeans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kids_pajamas`
--
ALTER TABLE `kids_pajamas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kids_shoes`
--
ALTER TABLE `kids_shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kids_tshirts`
--
ALTER TABLE `kids_tshirts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `man_jeans`
--
ALTER TABLE `man_jeans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `man_shoes`
--
ALTER TABLE `man_shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `man_suits`
--
ALTER TABLE `man_suits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `man_tshirts`
--
ALTER TABLE `man_tshirts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `woman_dress`
--
ALTER TABLE `woman_dress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `woman_jeans`
--
ALTER TABLE `woman_jeans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `woman_shoes`
--
ALTER TABLE `woman_shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `woman_tshirts`
--
ALTER TABLE `woman_tshirts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
