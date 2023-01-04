-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 01:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `ID` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `History` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`ID`, `credit`, `debit`, `total`, `History`) VALUES
(1, 43, 0, 406, 0),
(2, 0, 3, 0, 0),
(3, 0, 3, 0, 0),
(4, 0, 34, 0, 0),
(5, 0, 3, 0, 0),
(6, 0, 3, 0, 0),
(7, 3, 0, 0, 0),
(8, -1, 0, 0, 0),
(9, 0, 3, 0, 0),
(10, 0, 3, 0, 0),
(11, 25, 0, 0, 0),
(12, 0, 25, 0, 0),
(13, 0, 3, 0, 0),
(14, 0, 4, 0, 0),
(15, 0, 3, 0, 0),
(16, 0, 3, 0, 0),
(17, 0, 3, 0, 0),
(18, 333, 0, 0, 0),
(19, 0, 3, 0, 0),
(20, 0, 3, 0, 0),
(21, 3, 0, 0, 0),
(22, 0, 3, 0, 0),
(23, 34, 0, 0, 0),
(24, 0, 34, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
