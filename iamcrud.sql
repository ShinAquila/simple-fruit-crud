-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 10:12 AM
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
(1, 'Peach', 28, '2024-09-17 10:18:31', '2024-09-23 16:10:31'),
(2, 'Lemon', 25, '2024-09-17 10:20:33', '2024-09-23 15:49:17'),
(3, 'Cherry', 25, '2024-09-17 10:21:26', '2024-09-17 10:21:26'),
(4, 'Plum', 25, '2024-09-17 10:26:05', '2024-09-17 10:26:05'),
(11, 'Mango', 25, '2024-09-19 17:11:44', '2024-09-19 17:11:44'),
(12, 'Coconut', 25, '2024-09-19 17:12:50', '2024-09-19 17:12:50'),
(13, 'Grape', 25, '2024-09-19 17:21:31', '2024-09-19 17:21:31'),
(14, 'Avocado', 25, '2024-09-20 15:38:42', '2024-09-20 15:38:42'),
(15, 'Pineapple', 25, '2024-09-20 15:40:30', '2024-09-20 15:40:30'),
(28, 'Guyabano', 11, '2024-09-20 17:19:21', '2024-09-20 17:19:48');

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
  MODIFY `fruit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
