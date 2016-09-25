-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2016 at 04:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `naijobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `posted_by` varchar(25) NOT NULL,
  `time_posted` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`uid`, `title`, `body`, `posted_by`, `time_posted`) VALUES
(1, 'Frontend Developer Job', 'A frontend developer, who is very good with angularjs is required, he must have atleast 2year experience.', 'Habban ', '12:09am on Sep 21 2016'),
(2, 'Mobile App Developer', 'A mobile app developer, who is very good with ionic is required, he must have atleast 2year experience.', 'adam', '12:19am on Sep 21 2016'),
(3, 'Backend Developer Job', 'A backend developer, who is very good with nodejs, express and mongodb is required, he must have atleast 2year experience.', 'kamal', '12:53am on Sep 21 2016'),
(4, 'Graphic Designer Job', 'A serious graphic designer, who is skilled in the art of photo shopping and good with his illustrator is needed urgently, apply if you''re a hard worker.', 'siddique', '01:09am on Sep 21 2016'),
(5, 'Certified Network Administrator', 'A Certified Network Administrator is required urgently for serious network management.', 'siddique', '01:09am on Sep 21 2016'),
(6, 'Private Chauffeur Job', 'A private driver is wanted for daily service provision at ABC enterprise.', 'adam', '03:09am on Sep 21 2016'),
(7, 'Maths Teacher', 'A math teacher job awaits you at UVW high school, applicants must be certified with atleast a collge diploma or high school. Hurry', 'thiyah', '03:09am on Sep 21 2016'),
(8, 'Marketing Personnel', 'A highly experienced marketing personnel is needed at Blue Estate Company and Property development Ltd.', 'thiyah', '06:09pm on Sep 22 2016');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `pword` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pword`) VALUES
(2, 'adam', '12345678'),
(3, 'Becki', '000000000'),
(4, 'siddique', '<sid></sid>'),
(5, 'Habban', '<habban/>'),
(6, 'Thiyah', '<thiyah/>'),
(7, 'kamal', '<kamal/>'),
(8, 'AbuBakr', '<abubakr/>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
