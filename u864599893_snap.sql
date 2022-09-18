-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2022 at 04:48 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u864599893_snap`
--

-- --------------------------------------------------------

--
-- Table structure for table `sch_detail`
--

CREATE TABLE `sch_detail` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(20) NOT NULL,
  `des` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_detail`
--

INSERT INTO `sch_detail` (`id`, `title`, `date`, `time`, `location`, `des`) VALUES
(1, 'demo', '2022-09-17', '00:00:00', 'zoom', 'this is only demo '),
(2, 'Saksham Ki meeting', '2022-09-20', '22:08:00', 'Zoom', 'Jaldi se kardo'),
(3, 'Prerit Ki meeting', '2022-09-22', '23:20:00', 'Zoom', 'Jaldi karna bhai'),
(107, 'demo', '2022-09-19', '11:00:00', 'Zoom', 'hum sab bhartiye h'),
(105, 'Sakshamm', '2022-09-24', '12:27:00', 'Zoom', 'dfsdf'),
(106, 'Sakshammm', '2022-09-24', '12:27:00', 'Zoom', 'dfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('Prerit@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
('root@sdfsfsdf.sdfsf', '332532dcfaa1cbf61e2a266bd723612c'),
('saksham.21mcan001@jecrcu.edu.in', '332532dcfaa1cbf61e2a266bd723612c'),
('sakshambhargava@curious-fox-cti4cn.com', '332532dcfaa1cbf61e2a266bd723612c'),
('sakshambhargava@yahoo.com', '332532dcfaa1cbf61e2a266bd723612c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sch_detail`
--
ALTER TABLE `sch_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sch_detail`
--
ALTER TABLE `sch_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
