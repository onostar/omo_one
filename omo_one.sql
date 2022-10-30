-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 04:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omo_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `media_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`media_id`, `title`, `photo`, `post_date`) VALUES
(10, 'Elema Reception', 'reception.jpeg', '2022-10-30 09:41:56'),
(11, 'Apartment', 'apartment_entrance.jpeg', '2022-10-30 09:45:00'),
(12, 'Dinning', 'dinning.jpeg', '2022-10-30 09:45:18'),
(13, 'Bathroom', 'bathroom.jpeg', '2022-10-30 09:45:35'),
(14, 'Pool', 'pool2.jpeg', '2022-10-30 09:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `booking_id` int(11) NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_address` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`booking_id`, `surname`, `other_names`, `phone_number`, `email_address`, `gender`, `home_address`, `room_type`, `check_in`, `check_out`) VALUES
(28, 'Kelly', 'Ikpefua', '07068897068', 'onostarkels@gmail.com', 'Male', '23 Sapele Road', 'Diamond', '2022-05-10 00:00:00', '2022-05-12 00:00:00'),
(29, 'James', 'Madison', '08709090909', 'onostarkels@gmail.com', 'Male', '23 Sapele Road', 'Silver', '2022-05-11 00:00:00', '2022-05-13 00:00:00'),
(30, 'Ikpefua', 'Kelly', '07068897068', 'onostarmedia@gmail.com', 'Male', '23 Sapele Road', 'Diamond', '2022-09-22 00:00:00', '2022-09-23 00:00:00'),
(31, 'Ikpefua', 'Kelly', '07068897068', 'onostarmedia@gmail.com', 'Male', '23 Sapele Road', 'Silver', '2022-09-23 00:00:00', '2023-09-22 00:00:00'),
(32, 'Bazuaye', 'Paul', '07068897068', 'onostarmedia@gmail.com', 'Male', '23 Sapele Road', 'Gold', '2023-08-20 00:00:00', '2024-08-20 00:00:00'),
(33, 'Cy', 'Gracious', '07068897068', 'onostarmedia@gmail.com', 'Female', '23 Sapele Road', 'Gold', '2023-09-22 00:00:00', '2022-09-23 00:00:00'),
(34, 'Paul', 'Abbas', '07068897068', 'onostarmedia@gmail.com', 'Male', '23 Sapele Road', 'Gold', '2021-08-20 00:00:00', '2022-08-20 00:00:00'),
(35, 'Kelly', 'Brown', '07068897068', 'onostarmedia@gmail.com', 'Male', '23 Sapele Road', 'Crystal', '2023-10-22 00:00:00', '2023-10-22 00:00:00'),
(36, 'Paulinho', 'Navas', '07068897068', 'onostarmedia@gmail.com', 'Male', '23 Sapele Road', 'Platinum', '2023-09-22 00:00:00', '2023-10-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`) VALUES
(1, 'Admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
