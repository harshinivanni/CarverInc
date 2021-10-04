-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2019 at 12:23 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t123`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `admin_name` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `admin_name`) VALUES
(1, 'admin@admin.com', 'check123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `client_name` char(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_name`, `email`, `password`, `status`) VALUES
(1, 'charan', 'rcharan@gmail.com', 'asdf1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `details` text,
  `c_id` int(11) DEFAULT NULL,
  `app_status` int(11) DEFAULT NULL,
  `docdate` datetime DEFAULT NULL,
  `docdelete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `title`, `details`, `c_id`, `app_status`, `docdate`, `docdelete`) VALUES
(1, 'checking', 'This is for checking purpose', 0, 1, '2019-04-16 00:00:00', 0),
(2, '.$_POST[\'title\'].', '.$_POST[\'doc\'].', NULL, NULL, '2019-04-17 19:39:10', NULL),
(3, '.$_POST[\'title\'].', '.$_POST[\'doc\'].', NULL, NULL, '2019-04-17 19:42:06', NULL),
(4, '.$_POST[\'title\'].', '.$_POST[\'doc\'].', NULL, 2, NULL, NULL),
(5, '.$_POST[\'title\'].', '.$_POS T  [\'doc\'].', NULL, 1, NULL, NULL),
(6, 'hey', 'ahsda asd f', NULL, 0, NULL, NULL),
(7, 'hey', 'hello i want to add this new document', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `searchlist`
--

CREATE TABLE `searchlist` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `sdate` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchlist`
--

INSERT INTO `searchlist` (`id`, `name`, `sdate`, `status`) VALUES
(1, 'hey', NULL, 0),
(2, 'hey', NULL, 0),
(3, 'hey', NULL, 0),
(4, 'hey', NULL, 0),
(5, 'asdf', NULL, 0),
(6, 'asdf', NULL, 0),
(7, 'asdf', NULL, 1),
(8, 'asdf', NULL, 1),
(9, 'asdf', NULL, 1),
(10, 'asdf', NULL, 1),
(11, 'asdf', NULL, 1),
(12, 'asdf', NULL, 1),
(13, 'asdf', NULL, 1),
(14, 'asdf', NULL, 1),
(15, 'asdf', NULL, 1),
(16, 'post', NULL, 1),
(17, 'hey', NULL, 1),
(18, 'asdf', NULL, 1),
(19, 'post', NULL, 1),
(20, 'hey', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tagname` varchar(20) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tagname`, `doc_id`) VALUES
(1, 'This', 1),
(2, 'text', 1),
(3, 'numeric', 1),
(4, 'message', 1),
(5, '', 1),
(6, NULL, 1),
(7, NULL, 1),
(8, NULL, 1),
(9, NULL, 1),
(10, NULL, 1),
(11, NULL, 1),
(12, NULL, 1),
(13, NULL, 1),
(14, NULL, 1),
(15, NULL, 1),
(16, 'asdf', 5),
(17, '', 5),
(18, '', 5),
(19, 'post', 5),
(20, 'hey', 5),
(21, '', 5),
(22, '', 5),
(23, '', 5),
(24, '', 5),
(25, '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchlist`
--
ALTER TABLE `searchlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `searchlist`
--
ALTER TABLE `searchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
