-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 12:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `acc_no` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`acc_no`, `name`, `pass`, `email`, `aadhar`, `amount`) VALUES
(7, 'Mr.Bond', 'bbchm', 'j.bond@mi6.com', '0000000007', 10000),
(9, 'nitish', 'nit', 'dog@dogmail.com', '12345633', 1355202),
(100, 'Akash Marwah', 'abcd@123', 'akaka@gmail.com', '147258369147', 132922),
(101, 'Rishabh', 'rish', 'rishabh@gmail.com', '2222222222', 13077),
(102, 'Irhsba', 'Rishabh135', 'rishabh135@gamilc.om', '1234', 10000),
(111, 'Rishabh', 'rish', 'rishabh@dogmail.com', '1111101', 6253363),
(11111, 'rish', 'abcddd', 'rish@gmail.com', '222', 10000),
(67890, 'kanishk', 'tyreqw', 'rishabh@gmail.com22kj', '123344558', 99960000),
(12345678, 'hitesh', 'hit', 'hitesh@gmail.com', '122223', 1891454);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`acc_no`),
  ADD UNIQUE KEY `aadhar` (`aadhar`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
