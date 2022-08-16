-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 02:52 PM
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
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` mediumint(5) NOT NULL,
  `name` varchar(55) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `designation` varchar(15) NOT NULL,
  `salary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `mobile`, `date`, `designation`, `salary`) VALUES
(102, 'Vikram Markali     ', 'male', 9373212324, '2020-01-01', 'Manager', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `s_key` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `username`, `password`, `s_key`) VALUES
('bb@gmail.com', 'bb', '777', ''),
('v@gmail.com', 'vikki16', 'vikki', ''),
('vikram@gmail.com', 'vikram', '111', ''),
('vikrammarkali007@gma', 'vikki', '444', ''),
('vm@gmail.com', 'vm', 'vm123', ''),
('bxn@gmail.com', 'bv', 'dsgd', ''),
('v@gmail.com', 'bhv', 'jijkh', ''),
('v@gmail.com', 'dddffdfd', 'dfggsd', ''),
('v@gmail.com', 'vikram', 'bfv f', ''),
('xbnnb@gmail.com', 'dsdsxd', 'xdsxs', ''),
('v@gmail.com', 'dsdsxd', 'hjghjj', ''),
('v@gmail.com', 'csascx', 'xscd', ''),
('v@jkxja', 'sscccsa', 'csxaax', ''),
('', '', '', ''),
('cs@gmail.com', 'dddddddd', 'ssdsas', ''),
('cs@gmail.com', 'vikram', 'saas', ''),
('cs@gmail.com', 'vikram', 'bnbnv', ''),
('hkhjh@gmail.com', 'vijay', '12345', '0000'),
('vikram@gmail.com', 'vikram', '111', ''),
('v@gmail.com', 'hh', '123', ''),
('v@gmail.com', 'uu', '999', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `employee` ADD FULLTEXT KEY `name` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
