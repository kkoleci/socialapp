-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 08:39 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tirana_argetohet`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesi`
--

CREATE TABLE `perdoruesi` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gjinia` varchar(20) NOT NULL,
  `datelindja` date NOT NULL,
  `password` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pjesemarres`
--

CREATE TABLE `pjesemarres` (
  `email` varchar(50) DEFAULT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postime`
--

CREATE TABLE `postime` (
  `post_id` int(11) NOT NULL,
  `tipi` varchar(50) DEFAULT NULL,
  `vendi` varchar(100) DEFAULT NULL,
  `dita` date DEFAULT NULL,
  `ora` time DEFAULT NULL,
  `minLojtar` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pjestar` int(11) NOT NULL DEFAULT '1',
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD UNIQUE KEY `id_foto` (`id_foto`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `perdoruesi`
--
ALTER TABLE `perdoruesi`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pjesemarres`
--
ALTER TABLE `pjesemarres`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `pjesemarres` (`email`);

--
-- Indexes for table `postime`
--
ALTER TABLE `postime`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`),
  ADD KEY `postuesi` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `postime`
--
ALTER TABLE `postime`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `perdoruesi` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `pjesemarres`
--
ALTER TABLE `pjesemarres`
  ADD CONSTRAINT `id_grupi` FOREIGN KEY (`post_id`) REFERENCES `postime` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pjesemarres` FOREIGN KEY (`email`) REFERENCES `perdoruesi` (`email`);

--
-- Constraints for table `postime`
--
ALTER TABLE `postime`
  ADD CONSTRAINT `postuesi` FOREIGN KEY (`email`) REFERENCES `perdoruesi` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
