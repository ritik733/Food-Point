-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 07:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'bunny733', 'patwa789');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `name`, `phone`, `email`, `address`, `username`, `password`) VALUES
(1, 'Ritik Patwa', '7339795984', 'patwaritik01@gmail.com', 'salumber', 'bunny733', 'patwa789'),
(2, 'vinod kharol', '9855451552', 'kharolvinod@gmail.com', 'bhopalsagar', 'vinod123', 'kharol123'),
(10, 'Bunny', 'patwaritik08@gmail.com', '7339795984', 'Mahadev cafe , opposite morden hair solon', 'bunny09', '09'),
(11, 'Jitendra Patwa', '07339795984', 'ritikpatwa08@gmail.com', 'Indra colony behind hospital', 'puksh', '09'),
(12, 'ritik', '3546438452', 'ritikpatwa01@gmail.co', 'Indra colony behind hospital', 'ritik09', '$2y$10$eH3C92.i0VZuUA..Z0X6.OrLrYbO12YakzeUlY8ow8mE9E5MjWcXy');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(255) NOT NULL,
  `client-name` varchar(255) NOT NULL,
  `client-phone` varchar(255) NOT NULL,
  `client-email` varchar(255) NOT NULL,
  `client-addhar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client-name`, `client-phone`, `client-email`, `client-addhar`) VALUES
(1, 'Ritik Patwa', '7339795984', 'patwaritik01@gmail.com', '165046861655'),
(2, 'Ritik Patwa', '7339795984', 'patwaritik01@gmail.com', '165046861655'),
(3, 'Ritik Patwa', '7339795984', 'patwaritik01@gmail.com', '165046861655'),
(4, 'Ritik Patwa', '7339795984', 'patwaritik08@gmail.com', '145698552889');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `item-img` varchar(255) NOT NULL,
  `item-name` varchar(255) NOT NULL,
  `item-type` varchar(255) NOT NULL,
  `item-price` varchar(255) NOT NULL,
  `restro-id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `item-img`, `item-name`, `item-type`, `item-price`, `restro-id`) VALUES
(1, 'burger.jpg', 'Chai', 'breakfast', '20', '2');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `restu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restro`
--

CREATE TABLE `restro` (
  `restro_id` int(255) NOT NULL,
  `restro-img` varchar(255) NOT NULL,
  `restro-name` varchar(255) NOT NULL,
  `restro-address` varchar(255) NOT NULL,
  `restro-phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restro`
--

INSERT INTO `restro` (`restro_id`, `restro-img`, `restro-name`, `restro-address`, `restro-phone`) VALUES
(2, 'rs1.jpg', 'India Flavour', '', ''),
(3, 'rs2.jpg', 'Tandoor', '', ''),
(4, 'rs3.jpg', 'Amrit Palace', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restro`
--
ALTER TABLE `restro`
  ADD PRIMARY KEY (`restro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restro`
--
ALTER TABLE `restro`
  MODIFY `restro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
