-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2022 at 12:43 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dive_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `@tmp`
--

DROP TABLE IF EXISTS `@tmp`;
CREATE TABLE IF NOT EXISTS `@tmp` (
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dve_admin`
--

DROP TABLE IF EXISTS `dve_admin`;
CREATE TABLE IF NOT EXISTS `dve_admin` (
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `access` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_admin`
--

INSERT INTO `dve_admin` (`email`, `username`, `password`, `access`, `status`, `eta`, `id`) VALUES
('dehphantom@yahoo.com', '2gbeh', '4444', 3, 0, '2018-12-21 16:42:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dve_ana_cbt`
--

DROP TABLE IF EXISTS `dve_ana_cbt`;
CREATE TABLE IF NOT EXISTS `dve_ana_cbt` (
  `user_id` int(6) NOT NULL,
  `cbt_id` varchar(15) NOT NULL,
  `score` int(1) NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_ana_cbt`
--

INSERT INTO `dve_ana_cbt` (`user_id`, `cbt_id`, `score`, `status`, `eta`, `id`) VALUES
(2, 'bvnl', 6, 0, '2019-01-05 22:10:44', 1),
(3, 'bvnl', 5, 0, '2019-01-05 22:10:44', 2),
(4, 'bvnl', 4, 0, '2019-01-05 22:10:44', 3),
(5, 'bvnl', 5, 0, '2019-01-05 22:10:44', 4),
(6, 'bvnl', 2, 0, '2019-01-05 22:10:44', 5),
(7, 'bvnl', 4, 0, '2019-01-05 22:10:44', 6),
(8, 'bvnl', 6, 0, '2019-01-05 22:10:44', 7),
(9, 'bvnl', 6, 0, '2019-01-05 22:10:45', 8),
(10, 'bvnl', 4, 0, '2019-01-05 22:10:45', 9),
(11, 'bvnl', 2, 0, '2019-01-05 22:10:45', 10),
(12, 'bvnl', 1, 0, '2019-01-05 22:10:45', 11),
(13, 'bvnl', 1, 0, '2019-01-05 22:10:45', 12),
(14, 'bvnl', 1, 0, '2019-01-05 22:10:45', 13),
(15, 'bvnl', 2, 0, '2019-01-05 22:10:45', 14),
(16, 'bvnl', 4, 0, '2019-01-05 22:10:45', 15),
(17, 'bvnl', 3, 0, '2019-01-05 22:10:45', 16),
(18, 'bvnl', 6, 0, '2019-01-05 22:10:45', 17),
(19, 'bvnl', 2, 0, '2019-01-05 22:10:45', 18),
(20, 'bvnl', 1, 0, '2019-01-05 22:10:45', 19),
(21, 'bvnl', 3, 0, '2019-01-05 22:10:45', 20),
(22, 'bvnl', 2, 0, '2019-01-05 22:10:45', 21),
(23, 'bvnl', 4, 0, '2019-01-05 22:10:45', 22),
(24, 'bvnl', 7, 0, '2019-01-05 22:10:46', 23),
(25, 'bvnl', 6, 0, '2019-01-05 22:10:46', 24),
(26, 'bvnl', 4, 0, '2019-01-05 22:10:46', 25),
(58, 'bvnl', 5, 0, '2019-03-18 12:09:38', 26),
(2, 'qac', 5, 0, '2019-01-05 22:10:44', 27),
(3, 'qac', 2, 0, '2019-01-05 22:10:44', 28),
(4, 'qac', 4, 0, '2019-01-05 22:10:44', 29),
(5, 'qac', 4, 0, '2019-01-05 22:10:44', 30),
(6, 'qac', 5, 0, '2019-01-05 22:10:44', 31),
(7, 'qac', 2, 0, '2019-01-05 22:10:44', 32),
(8, 'qac', 10, 0, '2019-01-05 22:10:44', 33),
(9, 'qac', 2, 0, '2019-01-05 22:10:45', 34),
(10, 'qac', 8, 0, '2019-01-05 22:10:45', 35),
(11, 'qac', 7, 0, '2019-01-05 22:10:45', 36),
(12, 'qac', 1, 0, '2019-01-05 22:10:45', 37),
(13, 'qac', 9, 0, '2019-01-05 22:10:45', 38),
(14, 'qac', 6, 0, '2019-01-05 22:10:45', 39),
(15, 'qac', 3, 0, '2019-01-05 22:10:45', 40),
(16, 'qac', 6, 0, '2019-01-05 22:10:45', 41),
(17, 'qac', 8, 0, '2019-01-05 22:10:45', 42),
(18, 'qac', 8, 0, '2019-01-05 22:10:45', 43),
(19, 'qac', 10, 0, '2019-01-05 22:10:45', 44),
(20, 'qac', 2, 0, '2019-01-05 22:10:45', 45),
(21, 'qac', 6, 0, '2019-01-05 22:10:45', 46),
(22, 'qac', 4, 0, '2019-01-05 22:10:45', 47),
(23, 'qac', 1, 0, '2019-01-05 22:10:45', 48),
(24, 'qac', 6, 0, '2019-01-05 22:10:46', 49),
(25, 'qac', 6, 0, '2019-01-05 22:10:46', 50),
(26, 'qac', 1, 0, '2019-01-05 22:10:46', 51);

-- --------------------------------------------------------

--
-- Table structure for table `dve_ana_form`
--

DROP TABLE IF EXISTS `dve_ana_form`;
CREATE TABLE IF NOT EXISTS `dve_ana_form` (
  `user_id` int(6) NOT NULL,
  `form_id` varchar(15) NOT NULL,
  `entry` longtext NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_ana_form`
--

INSERT INTO `dve_ana_form` (`user_id`, `form_id`, `entry`, `status`, `eta`, `id`) VALUES
(2, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Female\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Family\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:44', 1),
(3, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 25 - 29\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Friends\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:44', 2),
(4, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Female\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Family\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:44', 3),
(5, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Society/Economy\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:44', 4),
(6, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 20 - 24\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Society/Economy\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:44', 5),
(7, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 20 - 24\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Family\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:44', 6),
(8, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 20 - 24\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Family\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:44', 7),
(9, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 20 - 24\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Society/Economy\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:45', 8),
(10, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Friends\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:45', 9),
(11, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Female\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Society/Economy\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:45', 10),
(12, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Female\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 25 - 29\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Society/Economy\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:45', 11),
(13, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 20 - 24\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Society/Economy\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:45', 12),
(14, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Female\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 20 - 24\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Media\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:45', 13),
(15, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Society/Economy\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:45', 14),
(16, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 25 - 29\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Friends\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:45', 15),
(17, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 25 - 29\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Society/Economy\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:45', 16),
(18, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Female\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Society/Economy\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:45', 17),
(19, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Female\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Society/Economy\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:45', 18),
(20, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Friends\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:45', 19),
(21, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Female\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 25 - 29\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Media\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:45', 20),
(22, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Media\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"Yes\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:45', 21),
(23, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Female\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 25 - 29\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Friends\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:45', 22),
(24, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Family\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:46', 23),
(25, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 15 - 19\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"No\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Media\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"Yes\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Fairly optimistic\"}', 0, '2019-01-05 22:10:46', 24),
(26, 'ttng', '{\"question\":\"Please select your Gender:\",\"answer\":\"Male\"},{\"question\":\"Please select your Age Range:\",\"answer\":\"Between 25 - 29\"},{\"question\":\"Is your current field of study your preferred choice?\",\"answer\":\"Yes\"},{\"question\":\"What factor had the most influence in deciding your current field of study?\",\"answer\":\"Family\"},{\"question\":\"Is your current field of study inline with your career interests?\",\"answer\":\"No\"},{\"question\":\"If given an opportunity, will you change your current field of study?\",\"answer\":\"No\"},{\"question\":\"How optimistic are you about your chances of success in your current field of study?\",\"answer\":\"Very optimistic\"}', 0, '2019-01-05 22:10:46', 25);

-- --------------------------------------------------------

--
-- Table structure for table `dve_ana_poll`
--

DROP TABLE IF EXISTS `dve_ana_poll`;
CREATE TABLE IF NOT EXISTS `dve_ana_poll` (
  `user_id` int(6) NOT NULL,
  `poll_id` varchar(15) NOT NULL,
  `entry` varchar(160) NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_ana_poll`
--

INSERT INTO `dve_ana_poll` (`user_id`, `poll_id`, `entry`, `status`, `eta`, `id`) VALUES
(0, 'acute2', '1,1,0,1,0,1,0', 0, '2019-03-21 21:27:09', 1),
(0, 'acute2', '0,0,1,0,0,0,0', 0, '2019-03-21 21:27:09', 2),
(0, 'acute2', '1,0,0,0,1,0,0', 0, '2019-03-21 21:27:09', 3),
(0, 'acute2', '0,0,0,0,1,0,0', 0, '2019-03-21 21:27:09', 4),
(0, 'acute2', '0,0,0,0,0,0,1', 0, '2019-03-21 21:27:09', 5),
(0, 'acute2', '1,1,0,1,0,0,0', 0, '2019-03-21 21:27:09', 6),
(0, 'acute2', '0,0,1,0,0,0,0', 0, '2019-03-21 21:27:09', 7),
(0, 'acute2', '0,0,1,0,0,0,0', 0, '2019-03-21 21:27:09', 8),
(0, 'acute2', '0,0,0,0,0,0,1', 0, '2019-03-21 21:27:09', 9),
(0, 'acute2', '1,1,0,1,0,0,0', 0, '2019-03-21 21:27:09', 10),
(0, 'acute2', '1,1,0,1,0,0,0', 0, '2019-03-21 21:27:09', 11),
(0, 'acute2', '1,1,0,1,0,0,0', 0, '2019-03-21 21:27:10', 12),
(0, 'acute2', '0,0,1,0,1,0,0', 0, '2019-03-21 21:27:10', 13),
(0, 'acute2', '1,1,0,1,0,0,0', 0, '2019-03-21 21:27:10', 14),
(0, 'acute2', '0,0,0,0,0,0,1', 0, '2019-03-21 21:27:10', 15),
(0, 'acute2', '1,1,0,1,0,0,0', 0, '2019-03-21 21:27:10', 16),
(0, 'acute2', '1,0,0,0,1,0,0', 0, '2019-03-21 21:27:10', 17),
(0, 'acute2', '0,0,0,0,0,0,1', 0, '2019-03-21 21:27:10', 18),
(0, 'acute2', '0,0,0,0,0,0,1', 0, '2019-03-21 21:27:10', 19),
(0, 'acute2', '1,1,0,1,0,1,0', 0, '2019-03-21 21:27:10', 20),
(0, 'acute2', '1,1,0,0,0,0,0', 0, '2019-03-21 21:27:10', 21),
(0, 'acute2', '0,0,0,0,0,0,0', 0, '2019-03-21 21:27:10', 22),
(0, 'acute2', '0,0,1,0,1,0,1', 0, '2019-03-21 21:27:10', 23),
(0, 'acute2', '0,0,0,1,0,1,0', 0, '2019-03-21 21:27:10', 24),
(0, 'acute2', '0,0,0,0,0,1,0', 0, '2019-03-21 21:27:10', 25),
(0, 'acute2', '1,1,0,1,0,1,0', 0, '2019-03-21 21:27:11', 26),
(0, 'acute2', '1,1,0,1,0,1,0', 0, '2019-03-21 21:27:11', 27),
(0, 'acute2', '0,0,0,0,1,0,1', 0, '2019-03-21 21:27:11', 28),
(0, 'acute2', '1,1,0,1,0,1,0', 0, '2019-03-21 21:27:11', 29),
(0, 'acute2', '1,1,0,1,0,1,0', 0, '2019-03-21 21:27:11', 30),
(0, 'acute2', '0,0,1,0,1,0,1', 0, '2019-03-21 21:27:11', 31),
(0, 'acute2', '1,1,0,0,0,0,0', 0, '2019-03-21 21:27:11', 32);

-- --------------------------------------------------------

--
-- Table structure for table `dve_audit`
--

DROP TABLE IF EXISTS `dve_audit`;
CREATE TABLE IF NOT EXISTS `dve_audit` (
  `user_id` int(6) NOT NULL,
  `barcode` varchar(25) NOT NULL,
  `duration` int(3) NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_audit`
--

INSERT INTO `dve_audit` (`user_id`, `barcode`, `duration`, `status`, `eta`, `id`) VALUES
(0, 'niit_web', 0, 0, '2019-01-21 19:12:44', 1),
(0, 'lbs_web_dev', 0, 0, '2019-01-21 19:12:44', 2),
(0, 'lbs_web_dev', 0, 0, '2019-01-21 19:12:44', 3),
(0, 'lbs_web_dev', 0, 0, '2019-01-21 19:12:44', 4),
(0, 'niit_web', 0, 0, '2019-01-21 19:12:44', 5),
(0, 'niit_web', 0, 0, '2019-01-21 19:12:44', 6),
(0, 'niit_web', 0, 0, '2019-01-21 19:15:11', 7),
(2, 'niit_web', 0, 0, '2019-01-21 19:15:11', 8),
(2, 'lbs_web_dev', 0, 0, '2019-01-21 19:12:44', 9),
(2, 'niit_java', 0, 0, '2019-01-21 19:12:44', 10),
(2, 'niit_jsp', 0, 0, '2019-01-21 19:12:44', 11),
(2, 'niit_html5', 0, 0, '2019-01-21 19:12:44', 12),
(54, 'niit_java', 0, 0, '2019-03-05 13:10:40', 13),
(54, 'niit_jsp', 0, 0, '2019-03-05 13:10:54', 14),
(54, 'niit_html5', 0, 0, '2019-03-05 13:12:31', 15),
(71, 'lbs_web_dev', 0, 0, '2019-04-13 10:23:19', 16),
(53, 'niit_java', 0, 0, '2019-05-08 12:19:24', 17),
(53, 'niit_jsp', 0, 0, '2019-05-08 12:19:50', 18),
(53, 'niit_html5', 0, 0, '2019-05-08 12:20:06', 19),
(72, 'niit_java', 0, 0, '2019-10-16 12:41:23', 20),
(73, 'niit_java', 0, 0, '2019-10-16 12:41:34', 21);

-- --------------------------------------------------------

--
-- Table structure for table `dve_codelib`
--

DROP TABLE IF EXISTS `dve_codelib`;
CREATE TABLE IF NOT EXISTS `dve_codelib` (
  `title` varchar(160) NOT NULL,
  `size` int(6) NOT NULL DEFAULT '0',
  `filename` varchar(25) NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_codelib`
--

INSERT INTO `dve_codelib` (`title`, `size`, `filename`, `status`, `eta`, `id`) VALUES
('Company Website Template (HTML, CSS & JS)', 235, '20190303210100.zip', 0, '2019-03-08 10:12:39', 1),
('Company Website Application with PHP', 240, '20190303212600.zip', 0, '2019-03-08 10:12:39', 2),
('Company Website Application with JSP', 1465, '20190304224900.zip', 0, '2019-03-08 10:13:03', 3),
('ATM Simulator with Java (OOP)', 0, '', 0, '2019-01-24 11:43:00', 4),
('Sales Ledger with Java (Arrays)', 0, '', 0, '2019-02-07 11:36:00', 5),
('Basic Calculator with Java (OOP)', 0, '', 0, '2019-01-24 11:43:00', 6),
('Live Search with AJAX PHP', 0, '', 0, '2019-03-08 10:35:38', 7),
('Sales Ledger with XML & XSTL', 0, '', 0, '2019-02-07 11:36:00', 8),
('Create, Read, Update & Delete (CRUD) with PHP', 0, '', 0, '2019-03-08 10:41:32', 9),
('Create, Read, Update & Delete (CRUD) with JSP', 0, '', 0, '2019-03-08 10:41:32', 10),
('Live Search with AJAX JSP', 0, '', 0, '2019-03-08 10:35:38', 11),
('CRUD &amp; Session with JSP (Demoday)', 1947, '20190312154300.zip', 0, '2019-03-12 14:53:58', 12),
('Image Slideshow with CSS3', 0, '', 0, '2019-04-02 14:22:43', 13),
('Maze Game with JavaScript (Treasure Hunt)', 0, '', 0, '2019-04-03 12:21:06', 14),
('Pop Quiz with JavaScript BOM', 0, '', 0, '2019-04-10 22:09:57', 15);

-- --------------------------------------------------------

--
-- Table structure for table `dve_developers`
--

DROP TABLE IF EXISTS `dve_developers`;
CREATE TABLE IF NOT EXISTS `dve_developers` (
  `user_id` int(6) NOT NULL,
  `domain` int(2) NOT NULL,
  `project` varchar(160) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `company` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_developers`
--

INSERT INTO `dve_developers` (`user_id`, `domain`, `project`, `linkedin`, `github`, `company`, `website`, `status`, `eta`, `id`) VALUES
(2, 1, '', '/2gbeh', '/2gbeh', 'HWP Labs', 'http://www.hwplabs.com/', 0, '2019-01-30 19:16:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dve_help`
--

DROP TABLE IF EXISTS `dve_help`;
CREATE TABLE IF NOT EXISTS `dve_help` (
  `email` varchar(50) NOT NULL,
  `subject` varchar(160) NOT NULL,
  `message` longtext NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dve_materials`
--

DROP TABLE IF EXISTS `dve_materials`;
CREATE TABLE IF NOT EXISTS `dve_materials` (
  `barcode` varchar(25) NOT NULL,
  `chapter` int(2) NOT NULL,
  `title` varchar(160) NOT NULL,
  `size` int(6) NOT NULL,
  `filename` varchar(25) NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_materials`
--

INSERT INTO `dve_materials` (`barcode`, `chapter`, `title`, `size`, `filename`, `status`, `eta`, `id`) VALUES
('lbs_web_dev', 1, 'Introduction to Web Design', 95, '20180914071201.pptx', 0, '2018-09-14 06:12:00', 1),
('niit_java', 1, 'Introduction to Java', 101, '20181004071101.pptx', 0, '2018-10-04 06:11:00', 2),
('lbs_web_dev', 2, 'Hypertext Markup Language', 89, '20180914071202.pptx', 0, '2018-09-14 06:13:00', 3),
('lbs_web_dev', 3, 'Data Representation with Tables', 81, '20180914071203.pptx', 0, '2018-09-18 23:29:00', 4),
('lbs_web_dev', 6, 'Introduction to HTML5', 100, '20180914071206.pptx', 0, '2018-10-03 05:37:00', 5),
('lbs_web_dev', 7, 'Adobe Dreamweaver', 95, '20180914071207.pptx', 0, '2018-10-13 21:16:00', 6),
('lbs_web_dev', 9, 'Domain Name, Web Hosting &amp; Server Configuration', 89, '20180914071209.pptx', 0, '2018-11-02 05:03:00', 7),
('lbs_web_dev', 11, 'Relational Database Management Systems', 71, '20180914071211.pptx', 0, '2018-11-08 01:22:00', 8),
('lbs_web_dev', 12, 'Hypertext Preprocessor (PHP)', 104, '20180914071212.pptx', 0, '2018-11-11 00:53:00', 9),
('lbs_web_dev', 13, 'JavaScript', 72, '20180914071213.pptx', 0, '2019-01-21 18:08:00', 10),
('niit_java', 2, 'Basic I/O with Java', 94, '20181004071102.pptx', 0, '2018-10-14 01:16:00', 11),
('niit_java', 3, 'Conditional &amp; Loop Constructs', 63, '20181004071103.pptx', 0, '2018-10-14 01:16:00', 12),
('niit_java', 4, 'Object Oriented Programming (OOP)', 87, '20181004071104.pptx', 0, '2018-10-05 02:15:00', 13),
('niit_java', 5, 'Arrays, Enums and Strings', 77, '20181004071105.pptx', 0, '2018-10-27 04:51:00', 14),
('niit_java', 6, 'Graphical User Interface (GUI)', 92, '20181004071106.pptx', 0, '2018-10-14 01:17:00', 15),
('niit_java', 7, 'GUI Layouts', 111, '20181004071107.pptx', 0, '2018-10-14 02:12:00', 16),
('niit_java', 8, 'Event Listeners &amp; Event Handlers', 83, '20181004071108.pptx', 0, '2018-10-18 21:49:00', 17),
('niit_java', 9, 'Nested Classes', 89, '20181004071109.pptx', 0, '2018-10-16 20:27:00', 18),
('niit_java', 10, 'Type Casting: Datatype Conversion', 73, '20181004071110.pptx', 0, '2018-10-17 23:42:00', 19),
('niit_java', 11, 'Patterns &amp; Regular Expressions', 83, '20181004071111.pptx', 0, '2018-11-09 19:33:00', 20),
('niit_java', 13, 'Generics', 70, '20181004071113.pptx', 0, '2018-11-01 05:16:00', 21),
('niit_java', 14, 'Data storage with Collections', 91, '20181004071114.pptx', 0, '2018-10-25 06:28:00', 22),
('niit_java', 15, 'Thread Synchronization and Concurrency', 85, '20181004071115.pptx', 0, '2018-10-26 00:37:00', 23),
('niit_java', 16, 'Streams: Java File System', 99, '20181004071116.pptx', 0, '2018-10-28 22:17:00', 24),
('niit_java', 17, 'NIO Classes and Interfaces', 95, '20181004071117.pptx', 0, '2018-10-30 03:48:00', 25),
('niit_java', 18, 'Java Database Connectivity (JDBC)', 84, '20181004071118.pptx', 0, '2018-11-09 19:18:00', 26);

-- --------------------------------------------------------

--
-- Table structure for table `dve_payment`
--

DROP TABLE IF EXISTS `dve_payment`;
CREATE TABLE IF NOT EXISTS `dve_payment` (
  `user_id` int(6) NOT NULL,
  `order_id` int(3) NOT NULL,
  `summary` varchar(160) NOT NULL,
  `depositor` varchar(50) NOT NULL,
  `mode` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_payment`
--

INSERT INTO `dve_payment` (`user_id`, `order_id`, `summary`, `depositor`, `mode`, `date`, `status`, `eta`, `id`) VALUES
(57, 1, 'Java', 'Akolor kelvin', 'USSD Transfer', '2019-02-06', 0, '2019-02-06 12:24:01', 1),
(54, 1, 'Java', 'Emwinghare Justice', 'Cash', '2019-03-05', 0, '2019-03-05 13:03:58', 5),
(64, 2, 'Dive Project', 'Omege Dennie', 'cash', '2019-03-05', 0, '2019-03-05 13:06:49', 6),
(71, 1, 'Web Application Devi', 'Uyi', 'Cash Deposit', '2019-04-13', 0, '2019-04-13 10:20:36', 7),
(58, 1, 'java premium', 'kenneth', 'transfer', '2019-02-06', 0, '2019-02-06 12:12:50', 8),
(73, 1, 'Java SE', 'Madamedon Kelly', 'Trade by barter', '2019-10-16', 0, '2019-10-16 12:38:09', 9);

-- --------------------------------------------------------

--
-- Table structure for table `dve_proxy`
--

DROP TABLE IF EXISTS `dve_proxy`;
CREATE TABLE IF NOT EXISTS `dve_proxy` (
  `proxy` varchar(25) NOT NULL,
  `user_id` int(6) NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_proxy`
--

INSERT INTO `dve_proxy` (`proxy`, `user_id`, `status`, `eta`, `id`) VALUES
('129.205.112.25', 60, 0, '2019-02-07 08:00:23', 2),
('105.112.106.215', 61, 0, '2019-02-07 08:07:44', 3),
('105.112.98.254', 62, 0, '2019-02-07 08:23:59', 4),
('41.203.72.85', 63, 0, '2019-02-07 08:28:56', 5),
('41.203.78.86', 65, 0, '2019-02-07 10:41:29', 7),
('197.211.60.142', 66, 0, '2019-02-08 19:08:26', 8),
('197.211.60.140', 2, 0, '2019-02-08 22:22:38', 9),
('129.205.113.44', 2, 0, '2019-02-26 13:06:22', 10),
('129.205.113.60', 68, 0, '2019-02-28 23:41:19', 12),
('105.112.99.180', 68, 0, '2019-03-02 10:21:06', 13),
('105.112.98.70', 58, 0, '2019-03-12 11:08:41', 18),
('129.205.112.115', 53, 0, '2019-03-12 12:07:45', 20),
('105.112.99.123', 58, 0, '2019-03-18 10:19:05', 22),
('105.112.96.67', 70, 0, '2019-03-27 23:04:33', 26),
('197.210.226.207', 71, 0, '2019-04-13 10:19:10', 27),
('197.210.198.130', 71, 0, '2019-09-12 15:55:25', 28),
('41.190.2.180', 72, 0, '2019-09-25 19:44:43', 29),
('197.210.53.170', 58, 0, '2019-10-11 06:30:41', 30),
('197.210.53.76', 58, 0, '2019-10-11 06:31:44', 31),
('105.112.106.64', 73, 0, '2019-10-16 09:25:58', 32),
('129.205.113.108', 73, 0, '2019-10-16 12:34:55', 33),
('105.112.98.92', 73, 0, '2019-10-18 00:58:25', 34);

-- --------------------------------------------------------

--
-- Table structure for table `dve_users`
--

DROP TABLE IF EXISTS `dve_users`;
CREATE TABLE IF NOT EXISTS `dve_users` (
  `photo` varchar(25) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `location` int(2) NOT NULL,
  `groups` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` int(1) DEFAULT '0',
  `eta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`phone`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dve_users`
--

INSERT INTO `dve_users` (`photo`, `fullname`, `gender`, `email`, `phone`, `location`, `groups`, `username`, `password`, `status`, `eta`, `id`) VALUES
('etugbeh.jpg', 'Tugbeh Emmanuel', 0, 'tugbeh.osaretin@gmail.com', '08169960927', 12, 10, '2gbeh', '4444', 0, '2019-01-05 22:10:44', 2),
('sobi.jpg', 'Obi Sopuluchukwu', 0, 'sobi@libertycity.ng', '08130837724', 35, 6, 'sobi', '1234', 0, '2019-01-05 22:10:44', 3),
('cndolo.jpg', 'Ndolo Chimaobi', 0, 'cndolo@libertycity.ng', '', 24, 6, 'cndolo', '1234', 0, '2019-01-05 22:10:44', 4),
('udaniel.jpg', 'Daniel Ugonna', 0, 'udaniel@libertycity.ng', '', 24, 6, 'udaniel', '1234', 0, '2019-01-05 22:10:44', 5),
('wnwokejiobi.jpg', 'Nwokejiobi Wisdom', 0, 'wnwokejiobi@libertycity.ng', '', 24, 6, 'wnwokejiobi', '1234', 0, '2019-01-05 22:10:44', 6),
('jnisakpo.jpg', 'Nisakpo Joshua', 0, 'jnisakpo@libertycity.ng', '', 24, 6, 'jnisakpo', '1234', 0, '2019-01-05 22:10:44', 7),
('poiboh.jpg', 'Oiboh Peter', 0, 'poiboh@libertycity.ng', '', 24, 6, 'poiboh', '1234', 0, '2019-01-05 22:10:44', 8),
('jogbeomoide.jpg', 'Ogbeomoide James', 0, 'jogbeomoide@libertycity.ng', '', 24, 6, 'jogbeomoide', '1234', 0, '2019-01-05 22:10:45', 9),
('eosagie.jpg', 'Osagie Eseosa', 1, 'eosagie@libertycity.ng', '', 24, 6, 'eosagie', '1234', 0, '2019-01-05 22:10:45', 10),
('cmolokwu.jpg', 'Molokwu Chijioke', 0, 'cmolokwu@libertycity.ng', '', 24, 6, 'cmolokwu', '1234', 0, '2019-01-05 22:10:45', 11),
('rtugbeh.jpg', 'Tugbeh Roosevelt', 0, 'rtugbeh@libertycity.ng', '', 24, 6, 'rtugbeh', '1234', 0, '2019-01-05 22:10:45', 12),
('aogiri.jpg', 'Ogiri Adaeze', 1, 'aogiri@libertycity.ng', '', 24, 6, 'aogiri', '1234', 0, '2019-01-05 22:10:45', 13),
('knworgu.jpg', 'Nworgu Kingsley', 0, 'knworgu@libertycity.ng', '', 24, 6, 'knworgu', '1234', 0, '2019-01-05 22:10:45', 14),
('eosarokwata.jpg', 'Osarokwata Emerald', 1, 'eosarokwata@libertycity.ng', '', 24, 6, 'eosarokwata', '1234', 0, '2019-01-05 22:10:45', 15),
('molasinde.jpg', 'Olasinde Morolake', 1, 'molasinde@libertycity.ng', '', 24, 6, 'molasinde', '1234', 0, '2019-01-05 22:10:45', 16),
('dokosun.jpg', 'Okosun Deborah', 1, 'dokosun@libertycity.ng', '', 24, 6, 'dokosun', '1234', 0, '2019-01-05 22:10:45', 17),
('porih.jpg', 'Orih Prince', 0, 'porih@libertycity.ng', '', 24, 6, 'porih', '1234', 0, '2019-01-05 22:10:45', 18),
('palokwe.jpg', 'Alokwe Peter', 0, 'palokwe@libertycity.ng', '', 24, 6, 'palokwe', '1234', 0, '2019-01-05 22:10:45', 19),
('cokhuebor.jpg', 'Okhuebor Cynthia', 1, 'cokhuebor@libertycity.ng', '', 24, 6, 'cokhuebor', '1234', 0, '2019-01-05 22:10:45', 20),
('myeno.jpg', 'Yeno Misan', 0, 'myeno@libertycity.ng', '', 24, 6, 'myeno', '1234', 0, '2019-01-05 22:10:45', 21),
('gbobmanuel.jpg', 'Bobmanuel Godwin', 0, 'gbobmanuel@libertycity.ng', '', 24, 6, 'gbobmanuel', '1234', 0, '2019-01-05 22:10:45', 22),
('nisuru.gif', 'Isuru Nyerhowo', 0, 'nisuru@libertycity.ng', '', 24, 6, 'nisuru', '1234', 0, '2019-01-05 22:10:45', 23),
('jtanshi.jpg', 'Tanshi Jovworie', 0, 'jtanshi@libertycity.ng', '', 24, 6, 'jtanshi', '1234', 0, '2019-01-05 22:10:46', 24),
('jogobegwu.jpg', 'Ogobegwu Jennifer', 1, 'jogobegwu@libertycity.ng', '', 24, 6, 'jogobegwu', '1234', 0, '2019-01-05 22:10:46', 25),
('vanyim.jpg', 'Anyim Victor', 0, 'vanyim@libertycity.ng', '', 24, 6, 'vanyim', '1234', 0, '2019-01-05 22:10:46', 26),
('', '', 0, 'sirblakez30@gmail.com', '', 0, 10, 'sirblakez', 'United630', 0, '2019-01-29 11:16:38', 53),
('jt_goodchild.gif', 'Emwinghare Justice', 0, 'emwinghare2k8@gmail.com', '08102312218', 12, 10, 'jt_goodchild', 'poppysmic123', 0, '2019-01-29 11:32:29', 54),
('', '', 0, 'engrstepheno54@gmail.com', '', 0, 10, 'ENGRSTEPHENO', 'Engineering2', 0, '2019-01-29 12:20:53', 55),
('victor__.gif', 'victor vero', 0, 'Payusakpovero@gmail.com', '08024603837', 12, 10, 'victor__', 'Payusakpovero1', 0, '2019-02-06 10:48:53', 56),
('', 'Akolor Kelvin', 0, 'akolorkelvin@gmail.com', '08144564966', 12, 10, 'dark-kev', 'kelvin798', 0, '2019-02-06 12:12:05', 57),
('medikeno.gif', 'Enajuke Kenneth', 0, 'medikeno@gmail.com', '08033795507', 12, 10, 'medikeno', 'always126', 0, '2019-02-06 12:12:50', 58),
('Osayi.gif', 'Osayi omorogieva', 0, 'jim_jay@mail.com', '09060279751', 12, 10, 'Osayi', 'febuary2019', 0, '2019-02-07 08:00:23', 60),
('Henryokafor0705666.gif', '', 0, 'lindaqueen0705666@gmail.com', '', 0, 10, 'Henryokafor0705666', 'sexyboy', 0, '2019-02-07 08:07:44', 61),
('', 'TJ Jeffrey', 0, 'jeffreyjeffrey080@gmail.com', '08153280992', 12, 10, 'TJ', 'sociology', 0, '2019-02-07 08:23:59', 62),
('', 'Ogbogho Aigbonoga Richard', 0, 'ogboghorichard2@gmail.com', '09077669220', 12, 10, 'Aigbonoga2', 'Agtgjpagtgjp1$', 0, '2019-02-07 08:28:56', 63),
('Drsweet.gif', 'Omeje Dennis', 0, 'Drsweets16@gmail.com', '08078428091', 12, 10, 'Drsweet', '1000zuckerberg', 0, '2019-02-07 08:29:26', 64),
('rukevwemike.gif', 'Mike Rukevwe', 0, 'rukevwemike@gmail.com', '07052640336', 12, 10, 'rukevwemike', 'mikeoliva', 0, '2019-02-07 10:41:29', 65),
('', '', 0, 'angelchristabel53@yahoo.com', '', 0, 10, 'Angeljones', 'etinosa', 0, '2019-02-08 19:08:26', 66),
('', 'okechukwu miracle', 0, 'zencraft40@gmail.com', '08119196997', 12, 10, 'spinoza', 'crowdmentaloty', 0, '2019-02-27 15:30:24', 67),
('', '', 0, 'nasleo001@gmail.com', '', 0, 7, 'Leonardo', '123456Em', 0, '2019-03-02 10:21:06', 68),
('', 'teddy s.e. ojubiaja', 0, 'youngslyehis@gmail.com', '08067526894', 12, 10, 'blank', 'ojubiaja', 0, '2019-03-12 12:00:59', 69),
('', '', 0, 'meekykols@gmail.com', '', 0, 0, 'Shygeek', 'shygeek12345', 0, '2019-03-27 23:04:33', 70),
('', '', 0, 'wsunnyuyui@gmail.com', '', 0, 12, 'Uyi', 'omoruyi8238', 0, '2019-04-13 10:19:10', 71),
('', 'Onyebuchi Romanus', 0, 'romamusonyebuchi99@gmail.com', '07061850843', 12, 10, 'OGB_RICH_MIND', '123456', 0, '2019-09-25 19:44:43', 72),
('', 'Madamedon Kelly', 0, 'made.corp@yahoo.com', '08165405359', 12, 10, 'madeCorp', 'money55555', 0, '2019-10-16 09:25:58', 73);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
