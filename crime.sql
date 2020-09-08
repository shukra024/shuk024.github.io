-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 12:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `crime_report`
--

CREATE TABLE `crime_report` (
  `type` varchar(10) NOT NULL,
  `informer_name` varchar(50) NOT NULL,
  `informer_username` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `file` varchar(50) NOT NULL,
  `crime_date` date NOT NULL,
  `crime_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_report`
--

INSERT INTO `crime_report` (`type`, `informer_name`, `informer_username`, `nic`, `district`, `city`, `street`, `file`, `crime_date`, `crime_description`) VALUES
('Missing Pe', 'asa', 'asaas', '0123654789', 'asds', 'sdsa', 'asd', '', '2020-09-05', 'sda'),
('Missing Ve', 'kasun', 'kasun', '9586475245', 'kandy', 'sdsa', 'asd', 'fee.jpg', '2020-09-05', 'sdasda'),
('Missing Ve', 'kasun', 'asdds', '9586475245', 'kandy', 'sdsa', 'asd', 'fee.jpg', '2020-09-05', 'sdasda dsd'),
('Missing Ve', 'qwe', 'qwe', '0125478965', 'as', 'sad', 'sad', 'crime.jpg', '2020-09-24', 'sdad dsvs'),
('Lost Items', 'cv', 'cv', '7854123658', 'col', 'col', 'col', 'login.jpg', '2020-09-18', 'purse');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `feed` varchar(10) NOT NULL,
  `service` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `name`, `feed`, `service`) VALUES
('as@gmail.com', 'asd', 'Student', ''),
('zx@gmail.com', 'zx', 'Worker', 'service'),
('zx@gmail.com', 'er', 'Worker', 'improve'),
('zx@gmail.com', 'rt', 'Other', 'dlike'),
('zx@gmail.com', 'asd', 'Student', 'dlike'),
('zx@gmail.com', 'qdwsdws', 'Student', 'dlike');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `officerid` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`fname`, `lname`, `city`, `nic`, `officerid`, `email`, `password`) VALUES
('sd', 'asd', 'asd', '0215478963', '24', 'kin@gmail.com', '24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `login`, `pass`, `name`, `email`) VALUES
('123', 'asd12', '', 'asd', 'asd@gmai;.com'),
('', '', '', '', ''),
('12', '123', '', 'back', 'back@12'),
('xz', '12', '', 'cop', 'cop@gmail.com'),
('24', '24', '', 'adsd', '24@gmail.com'),
('45', '45', '', 'as', 'as@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
