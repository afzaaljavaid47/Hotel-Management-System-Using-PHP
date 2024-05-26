-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 10:13 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`first_name`, `last_name`, `username`, `email`, `password`) VALUES
('afzaal ali', 'javaid alii', 'afzaaljavaid1', 'afzaaljavaid47@gmail.com', '22380012');

-- --------------------------------------------------------

--
-- Table structure for table `bookedroom`
--

CREATE TABLE `bookedroom` (
  `room_id` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `capacity` varchar(10) NOT NULL,
  `rent_per_day` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `enterence` date NOT NULL,
  `departure` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Booked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookedroom`
--

INSERT INTO `bookedroom` (`room_id`, `type`, `capacity`, `rent_per_day`, `name`, `address`, `contact`, `enterence`, `departure`, `status`) VALUES
(0, '', '', 0, '', '', '2147483647', '0000-00-00', '0000-00-00', 'Booked'),
(1, 'AC', '1', 50000, 'afzaal', 'dogranwalai', '2147483647', '0199-01-01', '2020-01-01', 'Booked'),
(2, 'Non AC', '2', 5100, 'afzaal', 'sialkot', '2147483647', '3010-01-02', '1516-02-05', 'Booked'),
(3, 'AC Furnish', 'Family', 3000, 'afzaal', 'dogranwali', '2147483647', '1999-01-01', '2020-01-01', 'Booked'),
(1, 'AC', '1', 50000, 'chdcdha', ' ajcasjc', '2147483647', '0000-00-00', '5326-04-06', 'Booked'),
(4, 'Local', '4', 5000, 'faisal', 'papau ibvkjbvskjbvkjdbbvddsvk hvisviavabvba abiusviusivus', '2147483647', '0000-00-00', '0000-00-00', 'Booked'),
(5, 'Local', 'Family', 2000, 'afzaal', 'dogranwali', '03497462877', '2120-01-02', '2020-02-01', 'Booked'),
(6, 'Non AC', 'Family', 1000, 'afzaal', 'javaid', '03497462877', '1999-01-01', '0000-00-00', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL DEFAULT 'No Reply',
  `status` varchar(10) NOT NULL DEFAULT 'No Reply'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`no`, `name`, `email`, `message`, `reply`, `status`) VALUES
(2, 'afzaal', 'afzaaljavaid47@gmail.com', 'vsdvds', 'well', 'Reply'),
(3, 'javaid', 'afzaaljavaid475456@gmail.com', 'hello', 'Reply', 'Reply'),
(4, 'afzaal', 'afzaaljavaid47545612@gmail.com', ' cjhavcjhavjc', 'HELLO you are performing a nice job', 'Reply'),
(5, 'afzaal', 'afzaaljavaid47@gmail.com', ' svcjhv', 'hrlljo jhs  abj chauvcjha ajvcyuavchj', 'Reply'),
(6, 'afzaal', 'afzaaljavaid47@gmail.com', ' djsc jsd c', 'nice', 'Reply'),
(7, 'afzaal', 'afzaaljavaid47@gmail.com', 'kakcskd cjdkjsbdk', 'well', 'Reply'),
(8, 'afzaal', 'afzaal223800@gmail.com', 'hello your website is very cool', 'nice bro', 'Reply'),
(9, '', '', '', 'No Reply', 'No Reply'),
(10, '', '', '', 'No Reply', 'No Reply'),
(11, 'afzaaljavaid', 'afzaaljavaid47545612@gmail.com', 'your website is cool', 'No Reply', 'No Reply'),
(12, 'afzaaljavaid', 'afzaaljavaid47545612@gmail.com', 'your website is cool', 'No Reply', 'No Reply'),
(13, 'avajsc', 'afzaaljavaid47@gmail.com', 'javcjhdc', 'No Reply', 'No Reply'),
(14, 'c jsd', 'afzaaljavaid47@gmail.com', 'scsdv', 'No Reply', 'No Reply'),
(15, 'afzaaljavaid', 'afzaaljavaid47@gmail.com', 'ascas', 'No Reply', 'No Reply'),
(16, 'afzaaljavaid', 'afzaaljavaid47545612@gmail.com', 'Hy ', 'No Reply', 'No Reply'),
(17, 'afzaaljavaid', 'afzaaljavaid47545612@gmail.com', 'Hy', 'No Reply', 'No Reply'),
(18, 'avajsc', 'afzaaljavaid47545612@gmail.com', 'aacasckj', '', 'Reply'),
(19, 'afzaal', '786rizoo@gmail.com', 'dcwjvdjc', 'No Reply', 'No Reply'),
(20, 'rizwan', '786rizoo@gmail.com', 'hlo pan na jawa', 'lan ta char', 'Reply'),
(21, '', '', '', 'No Reply', 'No Reply'),
(22, '', '', '', 'No Reply', 'No Reply'),
(23, 'adfsv', 'afzaaljavaid179@gmail.com', 'acvdsjsvc', 'No Reply', 'No Reply');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `capacity` varchar(20) NOT NULL,
  `rent_per_day` int(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'unbook'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `type`, `capacity`, `rent_per_day`, `status`) VALUES
(1, 'AC', '1', 50000, 'book'),
(2, 'Non AC', '2', 5100, 'book'),
(3, 'AC Furnished', 'Family', 3000, 'book'),
(4, 'Local', '4', 5000, 'book'),
(5, 'Local', 'Family', 2000, 'book'),
(6, 'Non AC', 'Family', 1000, 'book'),
(7, 'AC', '2', 2000, 'unbook');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
