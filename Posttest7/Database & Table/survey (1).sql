-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 04:54 PM
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
-- Table structure for table `akun_pengguna`
--

CREATE TABLE `akun_pengguna` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun_pengguna`
--

INSERT INTO `akun_pengguna` (`email`, `password`) VALUES
('12312@whyhoo.com', '$2y$10$sEVXdv0rohCMS6vxADy4wOweMjXLQvBOwZDh0b43YGPLmL.t0A38S'),
('abc1232@gmail.com', '$2y$10$kDhrq8NFGEQaTsx0NZ1ff.troE5ymru4A7uN9b/RqqXYUAy.ssIZe'),
('ammarnabilfauzan19@gmail.com', '$2y$10$t1TJCAkoegF2oJEFQOJZKOLAcEvmmQpcDr8oAWiqMcp/hZe2rPU4i');

-- --------------------------------------------------------

--
-- Table structure for table `surveycustomer`
--

CREATE TABLE `surveycustomer` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rating` varchar(20) DEFAULT NULL,
  `recommend` varchar(20) DEFAULT NULL,
  `hear_about_us` varchar(20) DEFAULT NULL,
  `contact_pref` text DEFAULT NULL,
  `comments` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL
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
(40, 'abc1232@gmail.com', 'Satisfied', 'Very Likely', 'Social Media', 'Phone, Post', 'makanan disini enak bangettt', '20241016185624.jpg'),
(42, 'abc666@gmail.com', 'Unsatisfied', 'Neutral', 'Newsletter', 'Phone', 'enak', '20241023164841.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_pengguna`
--
ALTER TABLE `akun_pengguna`
  ADD PRIMARY KEY (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
