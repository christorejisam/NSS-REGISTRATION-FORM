-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 10:35 AM
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
-- Database: `registrar`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `name` text DEFAULT NULL,
  `studentid` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `dateofbirth` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `bloodgroup` text DEFAULT NULL,
  `fathername` text DEFAULT NULL,
  `fatherphone` text DEFAULT NULL,
  `guardianname` text DEFAULT NULL,
  `guardianphone` text DEFAULT NULL,
  `currentsemester` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `hodname` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `reg_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `studentid`, `email`, `phone`, `dateofbirth`, `gender`, `bloodgroup`, `fathername`, `fatherphone`, `guardianname`, `guardianphone`, `currentsemester`, `department`, `hodname`, `username`, `password`, `reg_date`) VALUES
(1, 'CHRISTO REJI SAM', '202***1', 'christorejisam27@gmail.com', '0807*******', '**/**/****', 'Male', 'B+ve', 'REJI ', '9995******', 'CYRIL', '9995*****', '*th semester', 'Computer Science Enginnering', 'David Peter', '19c*****chri@ug.cuast.ac.in', '1234', '01-05-21  06:04:16'),
(2, 'Cyril reji ***', '2021****2', 'christorejisam27@gmail.com', '99952*****', '**/**/****', 'Male', 'B+ve', 'Cyril ', '9995******', 'Reji', '08078*****', '*th semester', 'Computer Science Enginnering', 'David peter', 'cyrilrej******@gmail.com', '1234', '07-06-21  10:34:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
