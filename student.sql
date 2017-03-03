-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2017 at 02:32 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Role` varchar(20) DEFAULT NULL,
  `Username` varchar(30) NOT NULL DEFAULT '',
  `Password` varchar(50) DEFAULT NULL,
  `secret_code` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Role`, `Username`, `Password`, `secret_code`) VALUES
('admin', 'admin', 'wonderful', 'ff2115d46e7466e4c308');

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `Role` varchar(20) DEFAULT NULL,
  `Username` varchar(30) NOT NULL DEFAULT '',
  `Password` varchar(50) DEFAULT NULL,
  `Advname` varchar(50) DEFAULT NULL,
  `Dept` varchar(5) NOT NULL,
  `Section` varchar(2) NOT NULL,
  `Year` int(1) NOT NULL,
  `secret_code` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`Role`, `Username`, `Password`, `Advname`, `Dept`, `Section`, `Year`, `secret_code`) VALUES
('Faculty', 'sridevi', 'accenture', 'sridevi', 'cse', 'c', 3, '8363e6ba31850ae08bc1'),
('Faculty', 'sangeetha', 'infosys', 'sangeetha', 'mech', '', 2, '30e166068a7462105eb5'),
('Faculty', 'sasikala', 'cognizant', 'sasikala', 'cse', 'a', 3, '181f21fd496864195e27'),
('Faculty', 'abin', 'microsoft', 'abin', 'ece', '', 3, '82f92fcf1f1cde3736b2'),
('Faculty', 'suresh', 'glosys', 'suresh', 'cse', 'b', 3, '673a3ca2ac85faf69984');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` varchar(5) NOT NULL,
  `Dept` varchar(10) NOT NULL,
  `secret_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`Username`, `Password`, `Role`, `Dept`, `secret_code`) VALUES
('vijaya', 'vijaya', 'HOD', 'cse', 'daa963835852b2974fab');

-- --------------------------------------------------------

--
-- Table structure for table `onlineanswer`
--

CREATE TABLE `onlineanswer` (
  `Qno` int(3) NOT NULL,
  `Answer` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlineanswer`
--

INSERT INTO `onlineanswer` (`Qno`, `Answer`) VALUES
(1, 'a'),
(2, 'b'),
(3, 'c'),
(4, 'd'),
(5, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `otmark`
--

CREATE TABLE `otmark` (
  `rollno` bigint(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(6) NOT NULL,
  `year` int(3) NOT NULL,
  `DBMS` int(3) DEFAULT NULL,
  `TOC` int(3) DEFAULT NULL,
  `CA` int(3) DEFAULT NULL,
  `PDS` int(3) DEFAULT NULL,
  `Total` int(4) DEFAULT NULL,
  `Rank` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otmark`
--

INSERT INTO `otmark` (`rollno`, `name`, `dept`, `year`, `DBMS`, `TOC`, `CA`, `PDS`, `Total`, `Rank`) VALUES
(113214104017, 'anand', 'cse', 3, 25, 25, NULL, NULL, 50, 2),
(113214104018, 'harikshore', 'cse', 3, 15, NULL, NULL, NULL, 15, 3),
(113214104019, 'vignesh', 'mech', 3, 25, 25, 25, 25, 100, 1),
(113214104020, 'deepak', 'ece', 3, NULL, NULL, NULL, NULL, NULL, 4),
(113214104016, 'aswin', 'cse', 3, NULL, NULL, NULL, NULL, NULL, 5),
(113214104150, 'sankar', 'mech', 2, NULL, NULL, NULL, NULL, NULL, 6),
(113214104021, 'buvanesh', 'cse', 3, NULL, NULL, NULL, NULL, NULL, 7),
(113214104022, 'pradeep', 'cse', 3, NULL, NULL, NULL, NULL, NULL, 8),
(113214104023, 'fredix', 'cse', 3, NULL, NULL, NULL, NULL, NULL, 9),
(113214104025, 'susan', 'cse', 2, NULL, NULL, NULL, NULL, NULL, 10),
(113214104026, 'rakesh', 'cse', 3, NULL, NULL, NULL, NULL, NULL, 11),
(113214104027, 'sushma', 'cse', 3, NULL, NULL, NULL, NULL, NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `name` varchar(50) NOT NULL,
  `admission` varchar(10) NOT NULL,
  `rollno` bigint(15) NOT NULL,
  `year` int(2) DEFAULT NULL,
  `advisor` varchar(15) NOT NULL,
  `dept` varchar(10) DEFAULT NULL,
  `section` varchar(2) NOT NULL,
  `mark1` int(4) DEFAULT NULL,
  `mark2` int(4) DEFAULT NULL,
  `mark3` int(4) DEFAULT NULL,
  `mark4` int(4) DEFAULT NULL,
  `mark5` int(4) DEFAULT NULL,
  `mark6` int(4) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `Rank` int(4) DEFAULT NULL,
  `secret_code` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`name`, `admission`, `rollno`, `year`, `advisor`, `dept`, `section`, `mark1`, `mark2`, `mark3`, `mark4`, `mark5`, `mark6`, `total`, `percentage`, `Rank`, `secret_code`) VALUES
('anand', '14vec689', 113214104017, 3, 'sridevi', 'cse', 'c', 90, 90, 90, 90, 90, 90, 540, 90, 3, 'b973f774bfeab53233b4'),
('harikshore', '14vec690', 113214104018, 3, 'sridevi', 'cse', 'c', 85, 85, 85, 85, 85, 85, 499, 85, 7, '86346e96a17404611648'),
('vignesh', '14vec691', 113214104019, 3, 'sangeetha', 'mech', '', 95, 95, 95, 95, 95, 95, 570, 95, 2, '9ea103c01c9c8c6c77aa'),
('deepak', '14vec692', 113214104020, 3, 'abin', 'ece', '', 50, 50, 50, 50, 50, 50, 300, 50, 11, 'd11186354d1ef01ca06a'),
('aswin', '14vec688', 113214104016, 3, 'sridevi', 'cse', 'c', 98, 98, 98, 98, 98, 98, 588, 98, 1, 'bfa14955daca93db2acc'),
('sankar', '14vec328', 113214104150, 2, 'sangeetha', 'mech', '', 90, 85, 80, 90, 95, 80, 520, 86.6667, 6, '705374d6157ff25f4444'),
('buvanesh', '14vec588', 113214104021, 3, 'suresh', 'cse', 'b', 88, 66, 4, 88, 66, 12, 360, 45, 9, '210613b8a86aec18ba19'),
('pradeep', '14vec589', 113214104022, 3, 'suresh', 'cse', 'b', 33, 33, 33, 33, 24, 33, 198, 33, 12, '6edf8b2bd1b6e03a5355'),
('fredix', '14vec590', 113214104023, 3, 'sasikala', 'cse', 'a', 90, 90, 90, 90, 90, 90, 540, 90, 4, 'b801638fc88c9dad9e36'),
('susan', '14vec591', 113214104025, 2, 'sasikala', 'cse', 'a', 88, 88, 88, 88, 88, 88, 528, 88, 5, 'd8f68c1ab79ab971a383'),
('rakesh', '14vec592', 113214104026, 3, 'suresh', 'cse', 'b', 56, 56, 56, 56, 56, 56, 336, 56, 10, '9eadc8fa224eebb865f0'),
('sushma', '14vec593', 113214104027, 3, 'suresh', 'cse', 'a', 70, 70, 70, 70, 70, 70, 420, 70, 8, '86b12d137b0113cb1e33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `onlineanswer`
--
ALTER TABLE `onlineanswer`
  ADD PRIMARY KEY (`Qno`);

--
-- Indexes for table `otmark`
--
ALTER TABLE `otmark`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`rollno`),
  ADD UNIQUE KEY `Regno` (`rollno`),
  ADD UNIQUE KEY `admission` (`admission`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
