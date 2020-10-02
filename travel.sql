-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 05:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(30) NOT NULL,
  `client_mail` varchar(50) NOT NULL,
  `client_password` varchar(50) NOT NULL,
  `client_address` varchar(50) NOT NULL,
  `phone_number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_mail`, `client_password`, `client_address`, `phone_number`) VALUES
(9, 'amit', 'amit@gmail.com', '456789', 'Mirpur', '554562258522'),
(10, 'Himel', 'himel@gmail.com', '123456', 'Badda', '1321654985'),
(11, 'Rakib', 'rakib@gmail.com', '1234', 'Notun Bazar', '1924994859');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` varchar(20) NOT NULL,
  `district_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`) VALUES
('Ch-01', 'Coxs Bazar');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `enroll_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `transaction_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`enroll_id`, `group_id`, `client_id`, `status`, `transaction_id`) VALUES
(30, 9, 10, 'Going', 12345),
(31, 10, 10, 'Going', 12345),
(32, 11, 10, 'Going', 12345),
(33, 14, 10, 'Going', 12345),
(34, 12, 10, 'Going', 12345),
(35, 9, 10, 'Going', 12345),
(36, 9, 10, 'Going', 12345),
(37, 9, 10, 'Going', 12345),
(38, 9, 10, 'Going', 12345),
(39, 10, 10, 'Going', 12345),
(40, 14, 10, 'Going', 12345),
(41, 10, 10, 'Going', 12345),
(42, 10, 10, 'Going', 12345),
(43, 10, 10, 'Going', 12345),
(44, 10, 10, 'Going', 12345),
(45, 11, 10, 'Going', 67576576),
(46, 10, 10, 'Going', 56789),
(47, 10, 10, 'Going', 674674365),
(48, 11, 10, 'Going', 4354),
(49, 11, 10, 'Going', 46546);

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `group_id` int(11) NOT NULL,
  `host_id` int(11) NOT NULL,
  `tour_title` varchar(100) NOT NULL,
  `host_budget` int(20) NOT NULL,
  `tour_details` varchar(300) NOT NULL,
  `tour_date` date NOT NULL,
  `tour_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`group_id`, `host_id`, `tour_title`, `host_budget`, `tour_details`, `tour_date`, `tour_member`) VALUES
(9, 9, 'Sajek', 8000, 'i want to go there.', '2019-04-25', 5),
(10, 9, 'coxs', 10000, 'i want', '2019-04-25', 10),
(11, 11, 'Bandarban', 8000, 'i want to go nowhere', '2019-04-19', 4),
(12, 9, 'Rangamati', 4000, 'yeah', '2019-04-15', 6),
(13, 10, 'Shitakunda', 4600, 'yeah', '2019-04-16', 7),
(14, 9, 'khagrachori', 5000, 'yeah', '2019-04-23', 2),
(17, 10, 'Kuakata', 6000, 'hey kuakata', '2019-04-18', 3),
(18, 10, 'Thanchi', 5500, 'hey thanchi', '2019-04-23', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` varchar(20) NOT NULL,
  `hotel_name` varchar(30) NOT NULL,
  `hotel_catagory` varchar(10) NOT NULL,
  `hotel_fair` int(11) NOT NULL,
  `district_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `hotel_catagory`, `hotel_fair`, `district_id`) VALUES
('01', 'Ocean Paradise', '5 Star', 10000, 'Ch-01'),
('02', 'Cox INN', '5 Star', 13000, 'Ch-01'),
('03', 'Auster Echo', '3 Star', 5000, 'Ch-01'),
('04', 'Pink Shore', 'Normal', 1000, 'Ch-01'),
('05', 'Laboni Motel', 'Normal', 800, 'Ch-01');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_point`
--

CREATE TABLE `pickup_point` (
  `pickup_id` int(11) NOT NULL,
  `pickup_point_name` varchar(50) DEFAULT NULL,
  `district_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup_point`
--

INSERT INTO `pickup_point` (`pickup_id`, `pickup_point_name`, `district_id`) VALUES
(2, 'Dhaka', 'Ch-01'),
(3, 'Chittagong', 'Ch-01');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` varchar(15) NOT NULL,
  `place_name` varchar(30) DEFAULT NULL,
  `place_fair` int(11) NOT NULL,
  `district_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `place_name`, `place_fair`, `district_id`) VALUES
('01', 'Inani', 600, 'Ch-01'),
('02', 'Laboni Point', 100, 'Ch-01'),
('03', 'Marine Drive', 900, 'Ch-01'),
('04', 'Ramu', 500, 'Ch-01');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `transport_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `tr_name` varchar(30) NOT NULL,
  `tr_fair` int(11) NOT NULL,
  `pickup_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`transport_id`, `type`, `tr_name`, `tr_fair`, `pickup_id`) VALUES
(1, 'Bus Non-Ac', 'Shyamoli Hino', 1600, 2),
(2, 'Bus Non-Ac', 'Marsha', 500, 3),
(3, 'Bus Ac', 'Green Line Paribahan', 4000, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `fk_gid` (`group_id`),
  ADD KEY `fk_cid` (`client_id`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `fgfg` (`district_id`);

--
-- Indexes for table `pickup_point`
--
ALTER TABLE `pickup_point`
  ADD PRIMARY KEY (`pickup_id`),
  ADD KEY `FK_dis_id` (`district_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`),
  ADD KEY `FK_PersonOrder` (`district_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`transport_id`),
  ADD KEY `FK_pick_id` (`pickup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `fk_cid` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `fk_gid` FOREIGN KEY (`group_id`) REFERENCES `host` (`group_id`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `fgfg` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`);

--
-- Constraints for table `pickup_point`
--
ALTER TABLE `pickup_point`
  ADD CONSTRAINT `FK_dis_id` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`);

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`);

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `FK_pick_id` FOREIGN KEY (`pickup_id`) REFERENCES `pickup_point` (`pickup_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
