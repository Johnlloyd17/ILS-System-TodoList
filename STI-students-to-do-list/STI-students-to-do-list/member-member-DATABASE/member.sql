-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 05:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `fname` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `mi` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `lname` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `contactno` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `birthday` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `usertype` varchar(15) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `fname`, `mi`, `lname`, `address`, `gender`, `contactno`, `birthday`, `usertype`) VALUES
(38, 'jlc@gmail.com', '1234', 'John Lloyd', 'T', 'Caban', 'sukailang', 'Male', '09951088105', '2002-08-17', 'Admin'),
(39, 'sae@gmail.com', '1234', 'Sean Anthony', 'C', 'Escalante', 'Brgy. Luna', 'Male', '09123456789', '3141-02-12', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
