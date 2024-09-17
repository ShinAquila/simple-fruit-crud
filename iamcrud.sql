-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 11:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iamcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `fruit_id` int(11) NOT NULL,
  `fruit_name` varchar(255) NOT NULL,
  `fruit_qty` int(11) NOT NULL,
  `fruit_created` datetime NOT NULL,
  `fruit_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`fruit_id`, `fruit_name`, `fruit_qty`, `fruit_created`, `fruit_updated`) VALUES
(1, 'Peach', 25, '2024-09-17 10:18:31', '2024-09-17 10:18:31'),
(2, 'Lemon', 34, '2024-09-17 10:20:33', '2024-09-17 10:20:33'),
(3, 'Cherry', 12, '2024-09-17 10:21:26', '2024-09-17 10:21:26'),
(4, 'Plum', 22, '2024-09-17 10:26:05', '2024-09-17 10:26:05'),
(5, 'Pear', 17, '2024-09-17 10:26:32', '2024-09-17 10:26:32'),
(6, 'Blueberry', 31, '2024-09-17 10:31:44', '2024-09-17 10:31:44'),
(7, 'Coconut', 15, '2024-09-17 10:31:44', '2024-09-17 10:31:44'),
(8, 'Watermelon', 24, '2024-09-17 10:31:44', '2024-09-17 10:31:44'),
(9, 'Strawberry', 28, '2024-09-17 10:33:11', '2024-09-17 10:33:11'),
(10, 'Lime', 11, '2024-09-17 10:33:11', '2024-09-17 10:33:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`fruit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `fruit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
