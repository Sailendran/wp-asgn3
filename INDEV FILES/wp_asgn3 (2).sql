-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 03:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp_asgn3`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(16) DEFAULT NULL,
  `order_item` int(3) DEFAULT NULL,
  `user_idno` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(4) NOT NULL,
  `product_name` varchar(32) NOT NULL,
  `product_price` float(8,2) NOT NULL,
  `product_image` varchar(32) NOT NULL DEFAULT 'noImage.png',
  `product_visible` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_image`, `product_visible`) VALUES
(1, 'Weed', 4.20, 'noImage.png', 1),
(2, 'Crack', 69.99, 'noImage.png', 0),
(3, 'Heroine', 21.00, 'noImage.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_idno` int(8) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(32) NOT NULL,
  `user_phone` int(12) DEFAULT NULL,
  `address_number` int(4) DEFAULT NULL,
  `address_street` varchar(32) DEFAULT NULL,
  `address_taman` varchar(32) DEFAULT NULL,
  `address_city` varchar(32) DEFAULT NULL,
  `address_state` varchar(32) DEFAULT NULL,
  `address_postcode` int(6) DEFAULT NULL,
  `address_country` varchar(32) DEFAULT NULL,
  `user_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_idno`, `user_password`, `user_email`, `user_phone`, `address_number`, `address_street`, `address_taman`, `address_city`, `address_state`, `address_postcode`, `address_country`, `user_name`) VALUES
(1, '$2y$10$913IizhoZbJWw7Dmv65toOTb./FMgrPsSKZ1ObfHJaew80.htBD82', 'test@user.com', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, 'Test User'),
(2, '$2y$10$9/9YqxiavdgXu4yYCiWr2eFbO9d8tMb630dtoRM.dmJnFoJIquAGm', 'admin@test.com', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, 'Admin'),
(3, '$2y$10$HcNQYI/I2duIAkCMtADHeOPjbw92CaSs/4XeNp9.7HbzRIbJi6fZK', 'test@delete.com', 1234567889, 156, 'Jalan Maharaja Lela', 'Taman Penjajah', NULL, 'Ngeri', 45600, 'Afghanistaan', 'Deletion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `user_idno` (`user_idno`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_idno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_idno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_idno` FOREIGN KEY (`user_idno`) REFERENCES `users` (`user_idno`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
