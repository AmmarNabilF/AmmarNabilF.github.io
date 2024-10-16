-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 01:04 PM
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
-- Database: `survey`
--
CREATE DATABASE IF NOT EXISTS `survey` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `survey`;

-- --------------------------------------------------------

--
-- Table structure for table `surveycustomer`
--

DROP TABLE IF EXISTS `surveycustomer`;
CREATE TABLE `surveycustomer` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `recommend` varchar(20) NOT NULL,
  `hear_about_us` varchar(20) NOT NULL,
  `contact_pref` text NOT NULL,
  `comments` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surveycustomer`
--

INSERT INTO `surveycustomer` (`id`, `email`, `rating`, `recommend`, `hear_about_us`, `contact_pref`, `comments`, `foto`) VALUES
(6, 'abc1232@gmail.com', 'Very Unsatisfied', 'Unlikely', 'Newsletter', '1', 'ghjkfghj', ''),
(7, 'abc1232@gmail.com', 'Very Unsatisfied', 'Unlikely', 'Newsletter', '1', 'ghjkfghj', ''),
(8, 'abc1232@gmail.com', 'Unsatisfied', '', 'Friends', '', 'dfghj', ''),
(9, 'abc1232@gmail.com', 'Neutral', 'Neutral', 'Advertisements', '1', 'trew', ''),
(10, 'abc1232@gmail.com', 'Unsatisfied', 'Neutral', 'Advertisements', 'Post', 'dfghj', ''),
(11, 'abc1232@gmail.com', 'Unsatisfied', 'Neutral', 'Advertisements', 'Post', 'dfghj', ''),
(12, 'abc666@gmail.com', 'Satisfied', 'Very Unlikely', 'Social Media', 'Email', 'wlwllw', ''),
(39, 'abc1232@gmail.com', 'Satisfied', 'Very Likely', 'Advertisements', 'Email, Phone', 'asdfghjkl', '20241016184036.jpg'),
(40, 'abc1232@gmail.com', 'Satisfied', 'Very Likely', 'Social Media', 'Phone, Post', 'makanan disini enak bangettt', '20241016185624.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surveycustomer`
--
ALTER TABLE `surveycustomer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surveycustomer`
--
ALTER TABLE `surveycustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
