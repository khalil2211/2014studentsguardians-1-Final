-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 30, 2014 at 07:24 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ccbs2014`
--
CREATE DATABASE IF NOT EXISTS `ccbs2014` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ccbs2014`;

-- --------------------------------------------------------

--
-- Table structure for table `gradelevels`
--

DROP TABLE IF EXISTS `gradelevels`;
CREATE TABLE `gradelevels` (
  `gra_id` int(11) NOT NULL AUTO_INCREMENT,
  `gra_level` int(11) DEFAULT NULL,
  `gra_description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`gra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

DROP TABLE IF EXISTS `guardians`;
CREATE TABLE `guardians` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_fname` varchar(50) DEFAULT NULL,
  `g_lname` varchar(50) DEFAULT NULL,
  `g_phone` varchar(10) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`g_id`,`u_id`),
  KEY `fk_guardians_users1_idx` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `guardians_has_students`
--

DROP TABLE IF EXISTS `guardians_has_students`;
CREATE TABLE `guardians_has_students` (
  `g_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  PRIMARY KEY (`g_id`,`s_id`),
  KEY `fk_guardians_has_students_students1_idx` (`s_id`),
  KEY `fk_guardians_has_students_guardians1_idx` (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `performances`
--

DROP TABLE IF EXISTS `performances`;
CREATE TABLE `performances` (
  `per_id` int(11) NOT NULL,
  `per_date` datetime NOT NULL,
  `per_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `v_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  PRIMARY KEY (`per_id`,`v_id`,`pro_id`),
  UNIQUE KEY `performance_id_UNIQUE` (`per_id`),
  KEY `fk_performances_venues1_idx` (`v_id`),
  KEY `fk_performances_productions1_idx` (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productions`
--

DROP TABLE IF EXISTS `productions`;
CREATE TABLE `productions` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_duration` time NOT NULL,
  `gra_id` int(11) NOT NULL,
  PRIMARY KEY (`pro_id`,`gra_id`),
  KEY `fk_productions_gradelevels1_idx` (`gra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_fname` varchar(50) DEFAULT NULL,
  `s_lname` varchar(50) DEFAULT NULL,
  `studentscol` varchar(45) DEFAULT NULL,
  `gra_id` int(11) NOT NULL,
  PRIMARY KEY (`s_id`,`gra_id`),
  KEY `fk_students_gradelevels_idx` (`gra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) DEFAULT NULL,
  `u_password` varchar(50) DEFAULT NULL,
  `u_createdate` timestamp NULL DEFAULT NULL,
  `u_updatedate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

DROP TABLE IF EXISTS `venues`;
CREATE TABLE `venues` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(50) NOT NULL,
  `v_address` varchar(45) DEFAULT NULL,
  `v_phone` varchar(10) DEFAULT NULL,
  `v_capacity` int(11) DEFAULT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guardians`
--
ALTER TABLE `guardians`
  ADD CONSTRAINT `fk_guardians_users1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `guardians_has_students`
--
ALTER TABLE `guardians_has_students`
  ADD CONSTRAINT `fk_guardians_has_students_guardians1` FOREIGN KEY (`g_id`) REFERENCES `guardians` (`g_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_guardians_has_students_students1` FOREIGN KEY (`s_id`) REFERENCES `students` (`s_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `performances`
--
ALTER TABLE `performances`
  ADD CONSTRAINT `fk_performances_venues1` FOREIGN KEY (`v_id`) REFERENCES `venues` (`v_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_performances_productions1` FOREIGN KEY (`pro_id`) REFERENCES `productions` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productions`
--
ALTER TABLE `productions`
  ADD CONSTRAINT `fk_productions_gradelevels1` FOREIGN KEY (`gra_id`) REFERENCES `gradelevels` (`gra_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_students_gradelevels` FOREIGN KEY (`gra_id`) REFERENCES `gradelevels` (`gra_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
