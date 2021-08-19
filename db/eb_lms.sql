-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 08:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eb_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `Camera_id` int(11) NOT NULL,
  `Camera_title` varchar(100) NOT NULL,
  `category_id` int(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `Camera_copies` int(11) NOT NULL,
  `Camera_pub` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `copyright_year` int(11) NOT NULL,
  `date_receive` varchar(20) NOT NULL,
  `date_added` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`Camera_id`, `Camera_title`, `category_id`, `author`, `Camera_copies`, `Camera_pub`, `publisher_name`, `isbn`, `copyright_year`, `date_receive`, `date_added`, `status`) VALUES
(15, 'Natural Resources', 8, 'Robin Kerrod', 15, 'Marshall Cavendish Corporation', 'Marshall', '1-85435-628-3', 1997, '', '2013-12-11 06:34:27', 'Archive'),
(16, 'Encyclopedia Americana', 5, 'Grolier', 20, 'Connecticut', 'Grolier Incorporation', '0-7172-0119-8', 1988, '', '2013-12-11 06:36:23', 'Archive'),
(17, 'Algebra 1', 3, 'Carolyn Bradshaw, Michael Seals', 35, 'Pearson Education, Inc', 'Prentice Hall, New Jersey', '0-13-125087-6', 2004, '', '2013-12-11 06:39:17', 'Archive'),
(18, 'The Philippine Daily Inquirer', 7, '..', 3, 'Pasay City', '..', '..', 2013, '', '2013-12-11 06:41:53', 'Archive'),
(19, 'Science in our World', 4, 'Brian Knapp', 25, 'Regency Publishing Group', 'Prentice Hall, Inc', '0-13-050841-1', 1996, '', '2013-12-11 06:44:44', 'Archive'),
(20, 'Literature', 9, 'Greg Glowka', 20, 'Regency Publishing Group', 'Prentice Hall, Inc', '0-13-050841-1', 2001, '', '2013-12-11 06:47:44', 'Archive'),
(21, 'Lexicon Universal Encyclopedia', 5, 'Lexicon', 10, 'Lexicon Publication', 'Pulication Inc., Lexicon', '0-7172-2043-5', 1993, '', '2013-12-11 06:49:53', 'Archive'),
(22, 'Science and Invention Encyclopedia', 5, 'Clarke Donald, Dartford Mark', 16, 'H.S. Stuttman inc. Publishing', 'Publisher , Westport Connecticut', '0-87475-450-x', 1992, '', '2013-12-11 06:52:58', 'Archive'),
(23, 'Integrated Science Textbook ', 4, 'Merde C. Tan', 15, 'Vibal Publishing House Inc.', '12536. Araneta Avenue Corner Ma. Clara St., Quezon City', '971-570-124-8', 2009, '', '2013-12-11 06:55:27', 'Archive'),
(24, 'Algebra 2', 3, 'Glencoe McGraw Hill', 15, 'The McGrawHill Companies Inc.', 'McGrawhill', '978-0-07-873830-2', 2008, '', '2013-12-11 06:57:35', 'Archive'),
(25, 'Wiki at Panitikan ', 7, 'Lorenza P. Avera', 28, 'JGM & S Corporation', 'JGM & S Corporation', '971-07-1574-7', 2000, '', '2013-12-11 06:59:24', 'Archive'),
(26, 'English Expressways TextBook for 4th year', 9, 'Virginia Bermudez Ed. O. et al', 23, 'SD Publications, Inc.', 'Gregorio Araneta Avenue, Quezon City', '978-971-0315-33-8', 2007, '', '2013-12-11 07:01:25', 'Archive'),
(27, 'Asya Pag-usbong Ng Kabihasnan ', 8, 'Ricardo T. Jose, Ph . D.', 21, 'Vibal Publishing House Inc.', 'Araneta Avenue . Cor. Maria Clara St., Quezon City', '971-07-2324-3', 2008, '', '2013-12-11 07:02:56', 'Archive'),
(28, 'Literature (the readers choice)', 9, 'Glencoe McGraw Hill', 20, '..', 'the McGrawHill Companies Inc', '0-02-817934-x', 2001, '', '2013-12-11 07:05:25', 'Archive'),
(29, 'Beloved a Novel', 9, 'Toni Morrison', 13, '..', 'Alfred A. Knoff, Inc', '0-394-53597-9', 1987, '', '2013-12-11 07:07:02', 'Archive'),
(30, 'Silver Burdett Engish', 2, 'Judy Brim', 12, 'Silver Burdett Company', 'Silver', '0-382-03575-5', 1985, '', '2013-12-11 09:22:50', 'Archive'),
(31, 'The Corporate Warriors (Six Classic Cases in American Business)', 8, 'Douglas K. Ramsey', 8, 'Houghton Miffin Company', '..', '0-395-35487-0', 1987, '', '2013-12-11 09:25:32', 'Archive'),
(32, 'Introduction to Information System', 9, 'Cristine Redoblo', 10, 'CHMSC', 'Brian INC', '123-132', 2013, '', '2014-01-17 19:00:10', 'Archive'),
(33, 'nm', 2, 'bn', 2222222, ' n', 'n', '233', 2017, '', '2021-02-02 14:33:56', 'Archive'),
(34, 'sd', 1, 'xsd', 0, 'sd', 'wsd', 'sd', 0, '', '2021-02-02 23:03:50', 'Archive'),
(35, 'Aua', 1, 'NVR2', 22, '250GB', 'DIRECTOR CORRIDOR', '123456tresdfgh', 2017, '', '2021-02-02 23:24:08', 'New'),
(36, 'sdfg', 1, 'Grolier', 23, 'qwedf', 'as', 'as234', 2017, '', '2021-02-03 21:46:11', 'Damage');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `classname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `classname`) VALUES
(1, 'NVR'),
(2, 'DVR');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `firstname`, `lastname`, `gender`, `address`, `contact`, `type`, `year_level`, `status`) VALUES
(67, 'WAZIRI', 'ally', 'Male', 'ameibiwa gari', '25565303931', 'Staff', '45-55', 'Active'),
(68, 'WAZIRI', 'ally', 'Male', 'TANGA', '25565303931', 'Staff', '35-45', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `lost_camera`
--

CREATE TABLE `lost_camera` (
  `Camera_ID` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `client_No` varchar(50) NOT NULL,
  `Date Lost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `pending_id` int(11) NOT NULL,
  `client_id` bigint(50) NOT NULL,
  `date_pending` varchar(100) NOT NULL,
  `due_date` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`pending_id`, `client_id`, `date_pending`, `due_date`) VALUES
(484, 55, '2014-03-20 23:50:27', '21/03/2014'),
(483, 55, '2014-03-20 23:49:34', '21/03/2014'),
(482, 52, '2014-03-20 23:38:22', '03/01/2014'),
(485, 66, '2021-02-02 23:40:15', '03/02/2021'),
(486, 66, '2021-02-02 23:44:05', '02/02/2021'),
(487, 67, '2021-02-03 00:14:58', '01/02/2021'),
(488, 67, '2021-02-03 00:29:54', '03/02/2021'),
(489, 68, '2021-02-03 21:51:26', '03/02/2021'),
(490, 68, '2021-02-03 22:01:01', '03/02/2021');

-- --------------------------------------------------------

--
-- Table structure for table `pendingdetails`
--

CREATE TABLE `pendingdetails` (
  `pending_details_id` int(11) NOT NULL,
  `Camera_id` int(11) NOT NULL,
  `pending_id` int(11) NOT NULL,
  `pending_status` varchar(50) NOT NULL,
  `date_Approve` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendingdetails`
--

INSERT INTO `pendingdetails` (`pending_details_id`, `Camera_id`, `pending_id`, `pending_status`, `date_Approve`) VALUES
(164, 16, 484, 'Approved', '2021-02-03 08:15:58'),
(162, 15, 482, 'Approved', '2021-02-03 08:16:07'),
(163, 15, 483, 'Approved', '2021-02-03 08:16:01'),
(165, 35, 485, 'Approved', '2021-02-03 08:15:54'),
(166, 35, 486, 'Approved', '2021-02-03 08:15:51'),
(167, 35, 487, 'Approved', '2021-02-03 08:15:48'),
(168, 35, 488, 'Approved', '2021-02-03 08:15:30'),
(169, 35, 489, 'Approved', '2021-02-03 21:51:47'),
(170, 35, 490, 'Approved', '2021-02-03 22:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `pendingertype` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `pendingertype`) VALUES
(2, 'Teacher'),
(20, 'Employee'),
(21, 'Non-Teaching'),
(22, 'Student'),
(32, 'Contruction');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(2, 'admin', 'admin', 'WAZIRI', 'amiri'),
(3, 'admin', 'admin', 'ian', 'Clemence'),
(4, 'admin', 'admin', 'joshua', 'joshua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`Camera_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`),
  ADD KEY `classid` (`category_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `lost_camera`
--
ALTER TABLE `lost_camera`
  ADD PRIMARY KEY (`Camera_ID`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`pending_id`),
  ADD KEY `borrowerid` (`client_id`),
  ADD KEY `borrowid` (`pending_id`);

--
-- Indexes for table `pendingdetails`
--
ALTER TABLE `pendingdetails`
  ADD PRIMARY KEY (`pending_details_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrowertype` (`pendingertype`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `Camera_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=801;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `lost_camera`
--
ALTER TABLE `lost_camera`
  MODIFY `Camera_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `pending_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=491;

--
-- AUTO_INCREMENT for table `pendingdetails`
--
ALTER TABLE `pendingdetails`
  MODIFY `pending_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
