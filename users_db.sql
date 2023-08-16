-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 16, 2023 at 06:09 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'iqrasarwar', 'iqra.sarwar@arbisoft.com', '$2y$10$fZ3o63crVe.7r0hWilPxCeC6ngVHP4xqpoJqE8P3kgLndrfregQgW'),
(2, 'Ayesha Siddique', 'ayesha.sidique@arbisoft.com', '$2y$10$c0/O43hZffkKMcB8jHyWcORxoZHv0bsc/79iruHG0HGgkTxwMOyxW'),
(3, 'iqrasarwar1', 'iqrasarwar@gmail.com', '$2y$10$uKNijJ8lSbvHW1IR8lkMlOIYnhLpRPWIVPV6vtYlvgEn3x8qBBdli'),
(4, 'finalUser', 'final@gmail.co', '$2y$10$LRYmJHTbMojxRw7HlGE4FO9QaUXBCqbO0aHStCwoe1EBxKXhjZWaC');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `company`) VALUES
(7, 'Sophia Wilson', 'sophia.wilson@example.com', 'Tesla'),
(8, 'Liam Martinez', 'liam.martinez@example.com', 'Netflix'),
(9, 'Olivia Anderson', 'olivia.anderson@example.com', 'Adobe'),
(10, 'James Hernandez', 'james.hernandez@example.com', 'Intel'),
(11, 'Emma Jackson', 'emma.jackson@example.com', 'IBM1'),
(12, 'Noah Davis', 'noah.davis@example.com', 'Twitter'),
(13, 'Ava Harris', 'ava.harris@example.com', 'Oracle'),
(14, 'Oliver Wilson', 'oliver.wilson@example.com', 'HP'),
(15, 'Isabella Turner', 'isabella.turner@example.com', 'Uber'),
(16, 'Lucas Wright', 'lucas.wright@example.com', 'Airbnb'),
(17, 'Sophia Martin', 'sophia.martin@example.com', 'Salesforce'),
(18, 'Jackson Rodriguez', 'jackson.rodriguez@example.com', 'Snapchat'),
(19, 'Olivia Walker', 'olivia.walker@example.com', 'Adobe'),
(20, 'Liam White', 'liam.white@example.com', 'Intel'),
(21, 'Emma Thompson', 'emma.thompson@example.com', 'IBM'),
(22, 'Kai Chen', 'kai.chen@example.com', 'Alibaba'),
(23, 'Yuna Kim', 'yuna.kim@example.com', 'Samsung'),
(24, 'Rohan Patel', 'rohan.patel@example.com', 'Tata Consultancy Services'),
(25, 'Rin Tanaka', 'rin.tanaka@example.com', 'Sony'),
(26, 'Xiao Liu', 'xiao.liu@example.com', 'Baidu'),
(27, 'Aishwarya Singh', 'aishwarya.singh@example.com', 'Infosys'),
(28, 'Makoto Suzuki', 'makoto.suzuki@example.com', 'Panasonic'),
(29, 'Ji-hoon Park', 'jihoon.park@example.com', 'LG Electronics'),
(30, 'Ananya Mehta', 'ananya.mehta@example.com', 'Wipro'),
(31, 'Wei Li', 'wei.li@example.com', 'Tencent'),
(32, 'Haruka Sato', 'haruka.sato@example.com', 'SoftBank'),
(33, 'Ravi Gupta', 'ravi.gupta@example.com', 'Reliance Industries'),
(34, 'Jae-ho Kim', 'jaeho.kim@example.com', 'Hyundai Motor'),
(35, 'Sakura Nakamura', 'sakura.nakamura@example.com', 'Mitsubishi'),
(36, 'Rajesh Kumar', 'rajesh.kumar@example.com', 'Tata Motors'),
(37, 'iqra sarwar', 'iqrasarwarm012@gamil.com', 'arbisoft'),
(38, 'ayesha siddique', 'ayesha@gmail.com', 'arbi'),
(39, 'ayesha siddique1', 'ayesha67@gmail.com', 'arbisoft'),
(40, 'iqra_sarwar_', 'bsef19m012@pucit.edu.pk', 'arbisoft'),
(41, 'iqra_sarwar_new', 'iqrasarwarm@gamil.com', 'arbisoft'),
(42, 'iqra_sarwar_3', 'iqra3@gmail.com', 'arbisoft'),
(43, 'iqra', 'iqrasarwarm01@gamil.com', 'arbisoft'),
(44, 'final', 'final@gmail.co', 'arbisoft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
