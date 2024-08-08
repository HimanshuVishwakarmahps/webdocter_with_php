-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 12:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myform`
--

-- --------------------------------------------------------

--
-- Table structure for table `createaccount`
--

CREATE TABLE `createaccount` (
  `Username` varchar(25) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `password` varchar(8) NOT NULL,
  `confirmPassword` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `createaccount`
--

INSERT INTO `createaccount` (`Username`, `Email`, `password`, `confirmPassword`) VALUES
('chandan kumar', 'chandan@gamil.com', '5555', '5555'),
('himanshu', 'himanshu@gmail.com', '2222', '2222'),
('piysh ', 'piysh@gmail.com', '121212', '121212'),
('priyanshu vishwakarma', 'pv@gmail.com', '151515', '151515'),
('sachin', 'sachin7845@gmail.com', '454545', '454545'),
('shrawan chaurasiya', 'shrawan1213@gmail.com', '4444', '5555');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`firstName`, `lastName`, `gender`, `email`, `phone`, `Address`) VALUES
('chandan', ' kumar', ' male', 'chandan@gmail.com', 2147483647, ' bihar '),
('himanshu', ' vishwakarma', ' male', 'himanshu@gmail.com', 2147483647, ' gochhaura '),
('Sachin ', ' Verma', ' male', 'sachinverma1010@gmail.com', 2147483647, ' gochhaura ,manpur ,barabanki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createaccount`
--
ALTER TABLE `createaccount`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
