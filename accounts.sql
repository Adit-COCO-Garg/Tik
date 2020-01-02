-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 12:46 PM
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
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(10, 'admin', 'admin', 'admin@admin.com', '$2y$10$1AXUz9k8zt2f19pfs5fqSOccyN/8aQwfIkzDuDNDD7C.TUFGJSe3e', '70efdf2ec9b086079795c442636b55fb', 1),
(11, 'test1', 'test1', 'test1@test.com', '$2y$10$ilDnWj2jj7TGbxybUk.fkuV3BYV4GGA00pHV.0cTUUyCSs19dwh.W', '4c27cea8526af8cfee3be5e183ac9605', 0),
(12, 'test2', 'test2', 'test2@test.com', '$2y$10$F3/7vmJTGyqq65GcBOeDwOCh.ZEGGcDxDPDvGfA/9I.utxkMjMlha', '7ce3284b743aefde80ffd9aec500e085', 1),
(13, 'test3', 'test3', 'test3@test3.com', '$2y$10$4XoY2NL9to0UMKV4Yfldpu5qumzvznaSFn82KShS8YFZ3.aL4K0P2', '66808e327dc79d135ba18e051673d906', 1),
(14, 'test4', 'test4', 'test4@test4.com', '$2y$10$NZG3WQ8RhDSCI6jBThMpxeVj4vItKbRGz3VMSQBAcFCCsX0iVceOu', '0d0871f0806eae32d30983b62252da50', 1),
(15, 'Test5', 'test5', 'test5@test5.com', '$2y$10$K1wMiaFZRRz14ddnRpWzJ.aU2eqYQH3RJw9HRmf.KA/zhVIqn7yMa', '170c944978496731ba71f34c25826a34', 1),
(16, 'test6', 'test6', 'test6@test6.com', '$2y$10$96E5Q6YLE6NAei1qtAFUuO2B0sv.ito/WpO3BOvczr6tYsqhS98De', '3328bdf9a4b9504b9398284244fe97c2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
