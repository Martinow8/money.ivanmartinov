-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: fdb1027.zettahost.bg
-- Generation Time: Apr 09, 2023 at 02:04 PM
-- Server version: 8.0.32
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4284651_im`
--

-- --------------------------------------------------------

--
-- Table structure for table `spent`
--

CREATE TABLE `spent` (
  `id` int NOT NULL,
  `amount` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb3_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `spent`
--

INSERT INTO `spent` (`id`, `amount`, `description`, `date`) VALUES
(5, 18, 'Месо', '2023-03-31'),
(6, 5, 'Храна', '2023-03-31'),
(7, 10, 'aaaa', '2023-03-30'),
(8, 14, 'Рамка', '2023-04-01'),
(9, 6, 'Mania print', '2023-04-01'),
(10, 30, 'Цвете', '2023-04-01'),
(11, 12, 'Vape', '2023-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spent`
--
ALTER TABLE `spent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spent`
--
ALTER TABLE `spent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
