-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 01:58 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanisha`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `cname` text NOT NULL,
  `iname` text NOT NULL,
  `idesc` varchar(1000) NOT NULL,
  `amt` int(11) NOT NULL,
  `id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`cname`, `iname`, `idesc`, `amt`, `id`) VALUES
('tanisha', 'cycling bike', 'three years old', 4520, 'ghdhb'),
('ranesha', 'treadmill', 'new', 5626, 'zcac'),
('resham', 'arm curl', 'two years old', 562, 'resham'),
('ritul', 'chest press', 'one year old', 2564, 'ritl@gmail.com'),
('hghsch', 'scs', 'sacsdv', 5698, 'ZCacad'),
('sima', '4 gym multistatioin', 'in good condition', 14582, 'sima@gs.com'),
('ALEX', 'cycling bike', '', 0, ''),
('cgcegx', 'dsfxg', '', 0, ''),
('SD', 'ASDSADASD', 'SDA', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(25) NOT NULL,
  `addr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `addr`) VALUES
('ALEX', 'great'),
('gsge', 'fd'),
('ran', 'ran'),
('resham', 'ritul'),
('rik', '123456'),
('swati', 'swati'),
('tanisha', 'tanisha'),
('ted', 'ted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
