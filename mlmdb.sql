-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2025 at 09:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mlmtab`
--

CREATE TABLE `mlmtab` (
  `slno` int(11) NOT NULL,
  `refid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `side` varchar(20) NOT NULL,
  `package` varchar(30) NOT NULL,
  `commission` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mlmtab`
--

INSERT INTO `mlmtab` (`slno`, `refid`, `name`, `address`, `phone`, `gender`, `amount`, `side`, `package`, `commission`) VALUES
(1, '12345', 'Srijit Bera', 'Ekloky,Hooghly,', '9073391252', 'Male', '2500', 'Right', 'Cloths', '625'),
(2, '1230', 'raja das', 'kolkata', '9874563215', 'Male', '2500', 'Left', 'Medicien', '300'),
(3, '123456', 'Robin BannerJee', 'Dankuni, Hooghly, West Bengal', '9073391252', 'Male', '1500', 'Right', 'Medicien', '375');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mlmtab`
--
ALTER TABLE `mlmtab`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mlmtab`
--
ALTER TABLE `mlmtab`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
