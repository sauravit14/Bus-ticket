-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 06:51 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbus`
--

CREATE TABLE `addbus` (
  `code` varchar(10) NOT NULL,
  `bno` varchar(20) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `seat` varchar(2) NOT NULL,
  `row` varchar(2) NOT NULL,
  `date` varchar(10) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `fare` varchar(5) NOT NULL,
  `etime` varchar(10) NOT NULL,
  `atime` varchar(10) NOT NULL,
  `dtime` varchar(10) NOT NULL,
  `from` varchar(10) NOT NULL,
  `to` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbus`
--

INSERT INTO `addbus` (`code`, `bno`, `bname`, `type`, `seat`, `row`, `date`, `rname`, `fare`, `etime`, `atime`, `dtime`, `from`, `to`) VALUES
('B000', 'jh-05-al-4083', 'morzila', 'volvo', '', '', '2018-03-29', 'tata-patna', '600', '11 hrs', '06:00 AM', '07:00 PM', 'TATA', 'PATNA'),
('B001', 'jh-05-bb-1001', 'chrome', 'volvo', '', '', '2018-03-29', 'tata-patna', '600', '11 hrs', '05:30', '18:30', 'TATA', 'PATNA');

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `admin_uname` varchar(50) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `address` int(100) NOT NULL,
  `city` int(30) NOT NULL,
  `pcode` int(6) NOT NULL,
  `sque1` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`fname`, `lname`, `admin_uname`, `pno`, `pass`, `address`, `city`, `pcode`, `sque1`) VALUES
('alkama', 'naz', 'alkama.naz', 'sfn', 'alkama', 0, 0, 233455, 0),
('saurav', 'kumar', 'saurav kumar', '9122265646', '11221989', 0, 0, 831011, 0),
('saurav', 'kumar', 'saurav.bear@gmail.com', '8789587857', '14301997', 0, 0, 831011, 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `tno` varchar(12) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bno` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `book_date` date NOT NULL,
  `fare` varchar(100) NOT NULL,
  `dtime` varchar(100) NOT NULL,
  `atime` varchar(100) NOT NULL,
  `etime` varchar(100) NOT NULL,
  `no_of_seats` varchar(100) NOT NULL,
  `money` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`tno`, `uname`, `bname`, `bno`, `from`, `to`, `book_date`, `fare`, `dtime`, `atime`, `etime`, `no_of_seats`, `money`) VALUES
('T001', 'saurav.bear', 'chrome', 'jh-05-bb-1001', 'TATA', 'PATNA', '2018-03-31', '600', '18:30', '05:30', '11 hrs', '3', '1800'),
('T002', 'abhishek mishra', 'chrome', 'jh-05-bb-1001', 'TATA', 'PATNA', '2018-03-31', '600', '18:30', '05:30', '11 hrs', '5', '3000'),
('T003', 'abhishek mishra', 'morzila', 'jh-05-al-4083', 'TATA', 'PATNA', '2018-03-31', '600', '07:00 PM', '06:00 AM', '11 hrs', '1', '600'),
('T004', 'rahul@gmail.com', 'morzila', 'jh-05-al-4083', 'TATA', 'PATNA', '2018-03-31', '600', '07:00 PM', '06:00 AM', '11 hrs', '3', '1800'),
('T005', 'saurav kumar ', 'chrome', 'jh-05-bb-1001', 'TATA', 'PATNA', '2018-03-31', '600', '18:30', '05:30', '11 hrs', '2', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktbl`
--

CREATE TABLE `feedbacktbl` (
  `name` varchar(200) NOT NULL,
  `mobile_no` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `remarks` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktbl`
--

INSERT INTO `feedbacktbl` (`name`, `mobile_no`, `email`, `remarks`) VALUES
('Abhi', 1234567890, 'soyabhishek@gmail.com', 'yoooo'),
('sourav', 879787876, 'fdewfewfed@gmail.com', 'yesss'),
('saurav', 2147483647, 'saurav.bear@gmail.com', 'yo yo honey singh'),
('baby', 212173314, 'titu@gg.com', 'ooh yeah!!'),
('hola', 2147483647, 'hola@parabola.com', 'dfsa'),
('bencho', 212173314, 'bancho@bbkv.com', 'hello bencho.\r\nfuck you all'),
('sameer', 2147483647, 'sameer.fuddi@gmail.com', 'ooh yeah!'),
('johny', 212173314, 'js@sins.com', 'hello world');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pcode` varchar(6) NOT NULL,
  `sque1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`fname`, `lname`, `uname`, `pno`, `pass`, `address`, `city`, `pcode`, `sque1`) VALUES
('abhishek', 'mishra', 'abhishek mishra', '9693711110', '1122', 'sonari', 'jamshedpur', '831011', '?'),
('alkama', 'naz', 'alkama.naz', 'ghgthhg924', 'alkama', 'mango', 'jsr', '233455', 'robot'),
('sourav', 'arya', 'aryasourav003@gmail.com', '8409636473', 'arya', 'chaibasa', 'chaibasa', '833201', 'junglebook'),
('dhnno', 'g', 'dhnnogfor', '1234', 'dhnno', 'mango', 'jsr', '23445', 'robot2'),
('gomeya', 'kandiburu', 'gk@gmail.com', '1234567890', '123456789', 'karandih', 'jamshedpur', '831002', 'x-men'),
('jagga', 'devi', 'jaggadevi', '123445677', 'devi', 'dehati', 'hukuduku', '21345', 'wassepur'),
('rahul', 'das', 'rahul@gmail.com', '1234567891', '123456789', 'kitadih', 'jamshedpur', '831002', '?'),
('saurav ', 'kumar', 'saurav kumar ', '9122265646', '11221989', 'sonari', 'jamshedpur', '831011', 'indian'),
('saurav', 'kumar', 'saurav.bear', '8789587857', '11221989', 'sonari', 'jsr', '831011', 'deadpool');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbus`
--
ALTER TABLE `addbus`
  ADD PRIMARY KEY (`code`),
  ADD UNIQUE KEY `bno` (`bno`);

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`admin_uname`),
  ADD UNIQUE KEY `pno` (`pno`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `pno` (`pno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
