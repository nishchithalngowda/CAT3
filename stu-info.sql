-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 06:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `christ`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu-info`
--

CREATE TABLE `stui-nfo` (
  `stu-id` int(11) NOT NULL,
  `stu-name` text NOT NULL,
  `age` int(2) NOT NULL,
  `gender` text NOT NULL,
  `course` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu-info`
--

INSERT INTO `stuinfo` (`stu-id`, `stu-name`, `age`, `gender', `course`,'address') VALUES
(2047138, 'nishchitha', '22', 'female', 'MCS','shimoga'),
(2047131, 'deeksha', '21', 'female', 'MCS','banglore'),
(2047122, 'yashu', '22', 'female', 'MCA','udupi'),
(2047156, 'anjan', '21', 'male', 'MDS','shimoga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu-info`
--
ALTER TABLE `stu-info`
  ADD PRIMARY KEY (`stu-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stu-info`
--
ALTER TABLE `stu-info`
  MODIFY `stu-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
