-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 12:44 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tik`
--

-- --------------------------------------------------------

--
-- Table structure for table `basicdetails`
--

CREATE TABLE `basicdetails` (
  `std_id` int(5) NOT NULL,
  `std_name` varchar(40) NOT NULL,
  `Grade` varchar(5) NOT NULL,
  `Age` int(2) NOT NULL,
  `Phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basicdetails`
--

INSERT INTO `basicdetails` (`std_id`, `std_name`, `Grade`, `Age`, `Phone`) VALUES
(12345, 'Lorem Ipsum', '12', 17, '7021791745'),
(12346, 'Liet Kiley', '12', 17, '934854932'),
(12347, 'Biket Doil', '12', 18, '193485384'),
(12348, 'Diet Kilet', '12', 18, '39485549334'),
(12349, 'Adit Garg', '12', 18, '7021791745'),
(12350, 'Samyak kumar', '12', 17, '9347565934'),
(12351, 'Jai Singh', '12', 18, '9824782592'),
(12352, 'Hardik Kilet', '12', 18, '8293048572'),
(12353, 'Irene West', '12', 18, '29834857832'),
(12354, 'James Druid', '12', 17, '8437238478'),
(12355, 'Troy Coy', '12', 18, '8239348573');

-- --------------------------------------------------------

--
-- Table structure for table `medicaldetails`
--

CREATE TABLE `medicaldetails` (
  `std_id` int(5) NOT NULL,
  `st_name` varchar(40) NOT NULL,
  `blood_type` varchar(20) NOT NULL,
  `phys_conn` text NOT NULL,
  `ment_conn` text NOT NULL,
  `breath_conn` text NOT NULL,
  `sex` varchar(6) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicaldetails`
--

INSERT INTO `medicaldetails` (`std_id`, `st_name`, `blood_type`, `phys_conn`, `ment_conn`, `breath_conn`, `sex`, `phone`) VALUES
(12347, 'Biket Doil', 'a positive', 'none', 'none', 'none', 'Male', '193485384'),
(12348, 'Diet Kilet', 'O NEGATIVE', 'Amputated leg', 'none', 'Asthama', 'Male', '39485549334'),
(12349, 'Adit Garg', 'B negative', 'none no', 'none no', 'none no', 'Male', '193485384');

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails`
--

CREATE TABLE `perfedetails` (
  `std_id` int(5) NOT NULL,
  `std_name` varchar(40) NOT NULL,
  `January` int(1) DEFAULT '0',
  `Feburary` int(1) DEFAULT '0',
  `March` int(1) NOT NULL DEFAULT '0',
  `April` int(1) NOT NULL DEFAULT '0',
  `May` int(1) NOT NULL DEFAULT '0',
  `June` int(1) NOT NULL DEFAULT '0',
  `July` int(1) NOT NULL DEFAULT '0',
  `August` int(1) NOT NULL DEFAULT '0',
  `September` int(1) NOT NULL DEFAULT '0',
  `October` int(1) NOT NULL DEFAULT '0',
  `November` int(1) NOT NULL DEFAULT '0',
  `December` int(1) NOT NULL DEFAULT '0',
  `perf_grade` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perfedetails`
--

INSERT INTO `perfedetails` (`std_id`, `std_name`, `January`, `Feburary`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`, `perf_grade`) VALUES
(12345, 'Lorem Ipsum', 5, 3, 5, 6, 7, 6, 5, 7, 8, 9, 9, 8, 0),
(12346, 'Liet Kiley', 4, 4, 4, 5, 6, 5, 6, 6, 5, 4, 3, 3, 0),
(12347, 'Biket Doil', 5, 5, 5, 6, 7, 7, 6, 8, 9, 8, 8, 7, 0),
(12348, 'Diet Kilet', 7, 7, 6, 8, 8, 7, 6, 8, 7, 6, 7, 8, 0),
(12349, 'Adit Garg', 2, 5, 3, 6, 3, 6, 7, 8, 5, 4, 9, 6, 5),
(12350, 'Samyak kumar', 8, 7, 8, 7, 6, 7, 6, 9, 8, 8, 9, 8, 0),
(12351, 'Jai Singh', 7, 6, 7, 8, 6, 5, 6, 6, 7, 6, 5, 6, 0),
(12352, 'Hardik Kilet', 7, 6, 7, 7, 6, 8, 8, 8, 7, 7, 6, 6, 0),
(12353, 'Irene West', 6, 6, 7, 6, 8, 6, 8, 5, 7, 8, 6, 8, 0),
(12354, 'James Druid', 8, 7, 8, 8, 7, 8, 9, 8, 7, 7, 8, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails_12345`
--

CREATE TABLE `perfedetails_12345` (
  `x` varchar(20) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perfedetails_12345`
--

INSERT INTO `perfedetails_12345` (`x`, `y`) VALUES
('1. January', 5),
('2. Feburary', 6),
('3. March', 6),
('4. April', 6),
('5. May', 5),
('6. June', 7),
('7. July', 6),
('8. August', 7),
('9. September', 5),
('91. October', 6),
('92. November', 7),
('93. December', 8);

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails_12346`
--

CREATE TABLE `perfedetails_12346` (
  `x` varchar(20) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails_12347`
--

CREATE TABLE `perfedetails_12347` (
  `x` varchar(20) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails_12348`
--

CREATE TABLE `perfedetails_12348` (
  `x` varchar(20) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails_12349`
--

CREATE TABLE `perfedetails_12349` (
  `x` varchar(20) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails_12350`
--

CREATE TABLE `perfedetails_12350` (
  `x` varchar(20) DEFAULT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails_12351`
--

CREATE TABLE `perfedetails_12351` (
  `x` varchar(20) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails_12352`
--

CREATE TABLE `perfedetails_12352` (
  `x` varchar(20) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails_12353`
--

CREATE TABLE `perfedetails_12353` (
  `x` varchar(20) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfedetails_12354`
--

CREATE TABLE `perfedetails_12354` (
  `x` varchar(20) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basicdetails`
--
ALTER TABLE `basicdetails`
  ADD PRIMARY KEY (`std_id`,`std_name`,`Grade`,`Age`,`Phone`);

--
-- Indexes for table `medicaldetails`
--
ALTER TABLE `medicaldetails`
  ADD PRIMARY KEY (`std_id`,`st_name`,`phone`) USING BTREE;

--
-- Indexes for table `perfedetails`
--
ALTER TABLE `perfedetails`
  ADD PRIMARY KEY (`std_id`,`std_name`);

--
-- Indexes for table `perfedetails_12345`
--
ALTER TABLE `perfedetails_12345`
  ADD PRIMARY KEY (`x`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
