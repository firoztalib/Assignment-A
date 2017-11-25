-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 01:15 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemax movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `it personnel`
--

CREATE TABLE `it personnel` (
  `personnel_id` int(20) NOT NULL,
  `personnel_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it personnel`
--

INSERT INTO `it personnel` (`personnel_id`, `personnel_name`, `username`, `password`, `contact`, `address`, `email`) VALUES
(1, 'Firoz Talib', 'f_talib', 'game', 84687854, '23 Serangoon Central, #04-64, NEX Mall, 556083', 'f_talib@live.com'),
(2, 'Iman Khalis', 'i_khalis', 'gameover1', 98597412, '112 East Coast Road, #04-09, 112 Katong, 428802', 'i_khalis@live.com'),
(3, 'ZarifHaziq', 'z_haziq', 'gameover3', 1234567, '51 Yishun Central 1, 768794', 'z_haziq@live.com'),
(4, 'Marcus Goh', 'm_goh', 'gameover4', 1235647, '1 Kim Seng Promenade, #03-29 Great World City, 237994', 'm_goh@live.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `it personnel`
--
ALTER TABLE `it personnel`
  ADD PRIMARY KEY (`personnel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
