-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2016 at 04:00 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`) VALUES
(1, 'olive', 'olive.hasan.12@gmail.com', 'dgfghdgfhdfhgdhfgdhfghdghf'),
(2, 'karim', 'gfg@gmail.com', 'well done.good job.keep it up.....');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `FIRST_NAME` char(20) NOT NULL,
  `LAST_NAME` char(20) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `SEX` char(1) DEFAULT NULL,
  `INCOME` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `apartment_size` double NOT NULL,
  `bed_room` int(100) NOT NULL,
  `bath_room` int(100) NOT NULL,
  `garage` varchar(100) NOT NULL,
  `garage_size` double NOT NULL,
  `total_rooms` int(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `basement` varchar(200) NOT NULL,
  `building_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `user_id`, `apartment_size`, `bed_room`, `bath_room`, `garage`, `garage_size`, `total_rooms`, `floor`, `basement`, `building_year`) VALUES
(1, '', 0, 0, 0, '', 0, 0, '', '', ''),
(2, '', 0, 0, 0, '', 0, 0, '', '', ''),
(3, '', 1700.56, 10, 12, '2', 260.23, 20, '4rth', 'extreme solid', '2005-2015'),
(4, '', 12.2, 12, 25, '10', 2.5, 45, '10th', 'hardcore', '2020'),
(5, '', 1700.56, 12, 25, '10', 2.5, 45, '10th', 'extreme solid', '2020'),
(6, '', 12.2, 10, 25, '10', 2.5, 45, '10th', 'extreme solid', '2020'),
(7, '', 12.2, 10, 25, '10', 2.5, 45, '10th', 'hardcore', '2020'),
(8, '', 1700.56, 10, 25, '10', 2.5, 45, '10th', 'extreme solid', '2020'),
(10, 'hamim', 12121, 3213, 121, '321', 1232, 312, '132', 'gfg', '12312'),
(11, 'mama', 0, 0, 0, '00', 0, 0, '00', 'nai', '00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `head_line` longtext NOT NULL,
  `update_date` date NOT NULL,
  `newses` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `head_line`, `update_date`, `newses`) VALUES
(1, 'New features', '0000-00-00', ''),
(2, 'news 2', '0000-00-00', ''),
(3, 'news3', '0000-00-00', 'coming soon..................');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `user_id`, `first_name`, `last_name`, `email`, `address`, `city`, `phone`) VALUES
(1, '', 'olive', 'hasan', 'olive.hasan.12@gmail.com', 'binodpur', 'rajshahi', '1674393468'),
(2, '', 'habib', 'manu', 'gfg@gmail.com', '62,kalinagar,parapura,rajshahi,motihar', 'rajshahi', '1674393468'),
(3, '', 'matahar', 'uddin', 'asa@yahoo.com', 'kjhgjhgkjfdhgkjfdhgjkfdhjk', 'gjklfdhgjklfhgfj', '01934804551,01670259077'),
(4, 'hamim', 'hamim', 'morshed', 'hamim@yahoo.com', '2/2,420 lane,kulaura', 'kulaura', '01612569872'),
(5, 'mama', 'mamu', 'monu', 'mama@hotmail.com', 'nai', 'nai', '01566666666666');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `user_id`, `location`, `caption`) VALUES
(12, '', 'photos/Screenshot (13).png', ''),
(37, 'hamim', 'photos/(56).jpg', 'nai'),
(36, 'hamim', 'photos/2014_ferrari_laferrari-wallpaper-1920x1080.jpg', 'fgf');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `apartment_type` varchar(100) NOT NULL,
  `apartment_for` varchar(100) NOT NULL,
  `apartment_name` varchar(100) NOT NULL,
  `apartment_location` longtext NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(100) NOT NULL,
  `rent` int(100) NOT NULL,
  `description` longtext NOT NULL,
  `facilities` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `user_id`, `apartment_type`, `apartment_for`, `apartment_name`, `apartment_location`, `address`, `city`, `rent`, `description`, `facilities`) VALUES
(2, '', 'Loft Apartment', 'Family', 'mohon das', 'sadhur mor', '55/23,gadha lane,sadhur mor,rajshahi', 'rajshahi', 5000, 'gfdshfgdshgdsgvfcxhbvgcxhnvbncxbvncxbvnbxcvx fukgfdhgkjhjfjkdfdsjfdsklg ruuuuuuutifdgufi h;fduigydio ugtfd yugtfdygufydguifd grdytgjkdshlkfdjs;lkfjdsklfdjkshg jkldf gdfltio', 'Drawning Room,Ventilation,Balcony,24/7 Water Supply,24/7 Gas Suppy,Garage,Lift'),
(3, '', 'Garden Apartment', 'Student', 'korim', 'kothao na', 'janina', 'rajshahi', 2147483647, 'bnb', 'Air Conditioning,Cable or Satelite,Tilesed Floor'),
(4, 'hamim', 'Studio Apartment', 'Bachelor', 'fhgh', 'ghgh', 'hghg', 'ghjh', 545, 'xgfg', 'Air Conditioning,Cable or Satelite'),
(5, 'mama', 'Studio Apartment', 'Family', 'monu mama', 'nai', 'nai', 'nai', 0, 'fgfdfhfdh', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, '', 'admin@brotecs.com', '$2y$10$WpbFbBdshCSoveh2qllELebFV5QOG6wtTvrjTG6JMRv'),
(2, 'monu', 'monu@yahoo.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
