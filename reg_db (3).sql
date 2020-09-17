-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 11:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rform_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_db`
--

CREATE TABLE `reg_db` (
  `Id` int(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `mob_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_db`
--

INSERT INTO `reg_db` (`Id`, `Fname`, `Lname`, `address`, `DOB`, `email`, `mob_no`) VALUES
(19, 'Monika', 'Chavan', 'Ajara', '2020-09-30', 'M12345@gmail.com', 9874568123),
(20, 'samir', 'patil', 'pune', '2020-09-02', 'sam@gmail.com', 9874561236),
(21, 'samir', 'patil', 'pune', '2020-09-02', 'sam@gmail.com', 9874561236),
(22, 'sandhya', 'patil', 'kolhapur', '2018-08-09', 'sp@123.gmail.com', 9874561236),
(23, 'Sagar', 'kolhe', 'Nagpur', '2018-03-08', 'sk@gmail.com', 7485698745),
(24, 'sonali', 'patil', 'kolhapur', '2006-02-15', 'p@123.gmail.com', 9874561236),
(25, 'Sunil', 'sutar', 'Nagpur', '1994-06-17', 'ss@124gmail.com', 9874561236);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_db`
--
ALTER TABLE `reg_db`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_db`
--
ALTER TABLE `reg_db`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
