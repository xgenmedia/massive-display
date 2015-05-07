-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2015 at 04:03 PM
-- Server version: 5.5.43
-- PHP Version: 5.4.40-1+deb.sury.org~precise+4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `massive-display`
--

-- --------------------------------------------------------

--
-- Table structure for table `cfw_group`
--

CREATE TABLE IF NOT EXISTS `cfw_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `is_active` enum('Y','N') NOT NULL,
  `is_deleted` enum('N','Y') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cfw_group`
--

INSERT INTO `cfw_group` (`id`, `title`, `is_active`, `is_deleted`) VALUES
(1, 'Superadmin', 'Y', 'N'),
(2, 'Admin', 'N', 'N'),
(5, 'Test', 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `cfw_group_rights`
--

CREATE TABLE IF NOT EXISTS `cfw_group_rights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `is_active` enum('Y','N') NOT NULL,
  `is_deleted` enum('N','Y') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cfw_group_rights`
--

INSERT INTO `cfw_group_rights` (`id`, `task_id`, `group_id`, `is_active`, `is_deleted`) VALUES
(1, 1, 2, 'Y', 'N'),
(2, 1, 5, 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `cfw_task`
--

CREATE TABLE IF NOT EXISTS `cfw_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(300) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(400) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `is_deleted` enum('N','Y') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cfw_task`
--

INSERT INTO `cfw_task` (`id`, `code`, `title`, `description`, `is_active`, `is_deleted`) VALUES
(1, 'dashboard', 'Dashboard', 'Dashboard or Home page for all', 'Y', 'N'),
(2, 'group', 'Group', 'Group List', 'Y', 'N'),
(3, 'user', 'User', 'User List', 'Y', 'N'),
(4, 'task', 'Task', 'Task List', 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `cfw_user_rights`
--

CREATE TABLE IF NOT EXISTS `cfw_user_rights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_active` enum('Y','N') NOT NULL,
  `is_deleted` enum('N','Y') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `is_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `group_id`, `username`, `password`, `name`, `email`, `phone`, `address`, `is_delete`) VALUES
(1, 1, 'super@email.com', 'b82adc22969b27208e9a7f9a6a22081cd8de9af03e3fe2dab466d9062e248e237ab71393f5be972a6064ed0cf2a8c987acbccae4ac66cdb549f48f191139e7d4', 'Admin Me', 'super@email.com', '0123456789', 'Address', 'N'),
(2, 2, 'admin@email.com', 'b82adc22969b27208e9a7f9a6a22081cd8de9af03e3fe2dab466d9062e248e237ab71393f5be972a6064ed0cf2a8c987acbccae4ac66cdb549f48f191139e7d4', 'Name', 'admin@email.com', '1234567890', 'as', 'N'),
(3, 5, 'test@email.com', 'b82adc22969b27208e9a7f9a6a22081cd8de9af03e3fe2dab466d9062e248e237ab71393f5be972a6064ed0cf2a8c987acbccae4ac66cdb549f48f191139e7d4', 'Name', 'test@email.com', '1234567890', '12345678902', 'N');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
