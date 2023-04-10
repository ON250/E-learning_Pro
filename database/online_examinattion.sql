-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 01 Décembre 2018 à 18:06
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `online_examinattion`
--
CREATE DATABASE IF NOT EXISTS `online_examinattion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `online_examinattion`;

-- --------------------------------------------------------

--
-- Structure de la table `attendances11`
--

CREATE TABLE IF NOT EXISTS `attendances11` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `d1_start_status` int(11) NOT NULL,
  `d1_start_date` datetime NOT NULL,
  `d1_end_status` int(11) NOT NULL,
  `d1_end_date` datetime NOT NULL,
  `d2_start_status` int(11) NOT NULL,
  `d2_start_date` datetime NOT NULL,
  `d2_end_status` int(11) NOT NULL,
  `d2_end_date` datetime NOT NULL,
  `d3_start_status` int(11) NOT NULL,
  `d3_start_date` datetime NOT NULL,
  `d3_end_status` int(11) NOT NULL,
  `d3_end_date` datetime NOT NULL,
  `d4_start_status` int(11) NOT NULL,
  `d4_start_date` datetime NOT NULL,
  `d4_end_status` int(11) NOT NULL,
  `d4_end_date` datetime NOT NULL,
  `d5_start_status` int(11) NOT NULL,
  `d5_start_date` datetime NOT NULL,
  `d5_end_status` int(11) NOT NULL,
  `d5_end_date` datetime NOT NULL,
  `d6_start_status` int(11) NOT NULL,
  `d6_start_date` datetime NOT NULL,
  `d6_end_status` int(11) NOT NULL,
  `d6_end_date` datetime NOT NULL,
  `d7_start_status` int(11) NOT NULL,
  `d7_start_date` datetime NOT NULL,
  `d7_end_status` int(11) NOT NULL,
  `d7_end_date` datetime NOT NULL,
  `d8_start_status` int(11) NOT NULL,
  `d8_start_date` datetime NOT NULL,
  `d8_end_status` int(11) NOT NULL,
  `d8_end_date` datetime NOT NULL,
  `d9_start_status` int(11) NOT NULL,
  `d9_start_date` datetime NOT NULL,
  `d9_end_status` int(11) NOT NULL,
  `d9_end_date` datetime NOT NULL,
  `d10_start_status` int(11) NOT NULL,
  `d10_start_date` datetime NOT NULL,
  `d10_end_status` int(11) NOT NULL,
  `d10_end_date` datetime NOT NULL,
  `d11_start_status` int(11) NOT NULL,
  `d11_start_date` datetime NOT NULL,
  `d11_end_status` int(11) NOT NULL,
  `d11_end_date` datetime NOT NULL,
  `d12_start_status` int(11) NOT NULL,
  `d12_start_date` datetime NOT NULL,
  `d12_end_status` int(11) NOT NULL,
  `d12_end_date` datetime NOT NULL,
  `d13_start_status` int(11) NOT NULL,
  `d13_start_date` datetime NOT NULL,
  `d13_end_status` int(11) NOT NULL,
  `d13_end_date` datetime NOT NULL,
  `d14_start_status` int(11) NOT NULL,
  `d14_start_date` datetime NOT NULL,
  `d14_end_status` int(11) NOT NULL,
  `d14_end_date` datetime NOT NULL,
  `d15_start_status` int(11) NOT NULL,
  `d15_start_date` datetime NOT NULL,
  `d15_end_status` int(11) NOT NULL,
  `d15_end_date` datetime NOT NULL,
  `d16_start_status` int(11) NOT NULL,
  `d16_start_date` datetime NOT NULL,
  `d16_end_status` int(11) NOT NULL,
  `d16_end_date` datetime NOT NULL,
  `d17_start_status` int(11) NOT NULL,
  `d17_start_date` datetime NOT NULL,
  `d17_end_status` int(11) NOT NULL,
  `d17_end_date` datetime NOT NULL,
  `d18_start_status` int(11) NOT NULL,
  `d18_start_date` datetime NOT NULL,
  `d18_end_status` int(11) NOT NULL,
  `d18_end_date` datetime NOT NULL,
  `d19_start_status` int(11) NOT NULL,
  `d19_start_date` datetime NOT NULL,
  `d19_end_status` int(11) NOT NULL,
  `d19_end_date` datetime NOT NULL,
  `d20_start_status` int(11) NOT NULL,
  `d20_start_date` datetime NOT NULL,
  `d20_end_status` int(11) NOT NULL,
  `d20_end_date` datetime NOT NULL,
  `d21_start_status` int(11) NOT NULL,
  `d21_start_date` datetime NOT NULL,
  `d21_end_status` int(11) NOT NULL,
  `d21_end_date` datetime NOT NULL,
  `d22_start_status` int(11) NOT NULL,
  `d22_start_date` datetime NOT NULL,
  `d22_end_status` int(11) NOT NULL,
  `d22_end_date` datetime NOT NULL,
  `d23_start_status` int(11) NOT NULL,
  `d23_start_date` datetime NOT NULL,
  `d23_end_status` int(11) NOT NULL,
  `d23_end_date` datetime NOT NULL,
  `d24_start_status` int(11) NOT NULL,
  `d24_start_date` datetime NOT NULL,
  `d24_end_status` int(11) NOT NULL,
  `d24_end_date` datetime NOT NULL,
  `d25_start_status` int(11) NOT NULL,
  `d25_start_date` datetime NOT NULL,
  `d25_end_status` int(11) NOT NULL,
  `d25_end_date` datetime NOT NULL,
  `d26_start_status` int(11) NOT NULL,
  `d26_start_date` datetime NOT NULL,
  `d26_end_status` int(11) NOT NULL,
  `d26_end_date` datetime NOT NULL,
  `d27_start_status` int(11) NOT NULL,
  `d27_start_date` datetime NOT NULL,
  `d27_end_status` int(11) NOT NULL,
  `d27_end_date` datetime NOT NULL,
  `d28_start_status` int(11) NOT NULL,
  `d28_start_date` datetime NOT NULL,
  `d28_end_status` int(11) NOT NULL,
  `d28_end_date` datetime NOT NULL,
  `d29_start_status` int(11) NOT NULL,
  `d29_start_date` datetime NOT NULL,
  `d29_end_status` int(11) NOT NULL,
  `d29_end_date` datetime NOT NULL,
  `d30_start_status` int(11) NOT NULL,
  `d30_start_date` datetime NOT NULL,
  `d30_end_status` int(11) NOT NULL,
  `d30_end_date` datetime NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `attendances11`
--

INSERT INTO `attendances11` (`attendance_id`, `student_id`, `roll_number`, `course_id`, `d1_start_status`, `d1_start_date`, `d1_end_status`, `d1_end_date`, `d2_start_status`, `d2_start_date`, `d2_end_status`, `d2_end_date`, `d3_start_status`, `d3_start_date`, `d3_end_status`, `d3_end_date`, `d4_start_status`, `d4_start_date`, `d4_end_status`, `d4_end_date`, `d5_start_status`, `d5_start_date`, `d5_end_status`, `d5_end_date`, `d6_start_status`, `d6_start_date`, `d6_end_status`, `d6_end_date`, `d7_start_status`, `d7_start_date`, `d7_end_status`, `d7_end_date`, `d8_start_status`, `d8_start_date`, `d8_end_status`, `d8_end_date`, `d9_start_status`, `d9_start_date`, `d9_end_status`, `d9_end_date`, `d10_start_status`, `d10_start_date`, `d10_end_status`, `d10_end_date`, `d11_start_status`, `d11_start_date`, `d11_end_status`, `d11_end_date`, `d12_start_status`, `d12_start_date`, `d12_end_status`, `d12_end_date`, `d13_start_status`, `d13_start_date`, `d13_end_status`, `d13_end_date`, `d14_start_status`, `d14_start_date`, `d14_end_status`, `d14_end_date`, `d15_start_status`, `d15_start_date`, `d15_end_status`, `d15_end_date`, `d16_start_status`, `d16_start_date`, `d16_end_status`, `d16_end_date`, `d17_start_status`, `d17_start_date`, `d17_end_status`, `d17_end_date`, `d18_start_status`, `d18_start_date`, `d18_end_status`, `d18_end_date`, `d19_start_status`, `d19_start_date`, `d19_end_status`, `d19_end_date`, `d20_start_status`, `d20_start_date`, `d20_end_status`, `d20_end_date`, `d21_start_status`, `d21_start_date`, `d21_end_status`, `d21_end_date`, `d22_start_status`, `d22_start_date`, `d22_end_status`, `d22_end_date`, `d23_start_status`, `d23_start_date`, `d23_end_status`, `d23_end_date`, `d24_start_status`, `d24_start_date`, `d24_end_status`, `d24_end_date`, `d25_start_status`, `d25_start_date`, `d25_end_status`, `d25_end_date`, `d26_start_status`, `d26_start_date`, `d26_end_status`, `d26_end_date`, `d27_start_status`, `d27_start_date`, `d27_end_status`, `d27_end_date`, `d28_start_status`, `d28_start_date`, `d28_end_status`, `d28_end_date`, `d29_start_status`, `d29_start_date`, `d29_end_status`, `d29_end_date`, `d30_start_status`, `d30_start_date`, `d30_end_status`, `d30_end_date`) VALUES
(1, 1, 201710258, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `attendances12`
--

CREATE TABLE IF NOT EXISTS `attendances12` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `d1_start_status` int(11) NOT NULL,
  `d1_start_date` datetime NOT NULL,
  `d1_end_status` int(11) NOT NULL,
  `d1_end_date` datetime NOT NULL,
  `d2_start_status` int(11) NOT NULL,
  `d2_start_date` datetime NOT NULL,
  `d2_end_status` int(11) NOT NULL,
  `d2_end_date` datetime NOT NULL,
  `d3_start_status` int(11) NOT NULL,
  `d3_start_date` datetime NOT NULL,
  `d3_end_status` int(11) NOT NULL,
  `d3_end_date` datetime NOT NULL,
  `d4_start_status` int(11) NOT NULL,
  `d4_start_date` datetime NOT NULL,
  `d4_end_status` int(11) NOT NULL,
  `d4_end_date` datetime NOT NULL,
  `d5_start_status` int(11) NOT NULL,
  `d5_start_date` datetime NOT NULL,
  `d5_end_status` int(11) NOT NULL,
  `d5_end_date` datetime NOT NULL,
  `d6_start_status` int(11) NOT NULL,
  `d6_start_date` datetime NOT NULL,
  `d6_end_status` int(11) NOT NULL,
  `d6_end_date` datetime NOT NULL,
  `d7_start_status` int(11) NOT NULL,
  `d7_start_date` datetime NOT NULL,
  `d7_end_status` int(11) NOT NULL,
  `d7_end_date` datetime NOT NULL,
  `d8_start_status` int(11) NOT NULL,
  `d8_start_date` datetime NOT NULL,
  `d8_end_status` int(11) NOT NULL,
  `d8_end_date` datetime NOT NULL,
  `d9_start_status` int(11) NOT NULL,
  `d9_start_date` datetime NOT NULL,
  `d9_end_status` int(11) NOT NULL,
  `d9_end_date` datetime NOT NULL,
  `d10_start_status` int(11) NOT NULL,
  `d10_start_date` datetime NOT NULL,
  `d10_end_status` int(11) NOT NULL,
  `d10_end_date` datetime NOT NULL,
  `d11_start_status` int(11) NOT NULL,
  `d11_start_date` datetime NOT NULL,
  `d11_end_status` int(11) NOT NULL,
  `d11_end_date` datetime NOT NULL,
  `d12_start_status` int(11) NOT NULL,
  `d12_start_date` datetime NOT NULL,
  `d12_end_status` int(11) NOT NULL,
  `d12_end_date` datetime NOT NULL,
  `d13_start_status` int(11) NOT NULL,
  `d13_start_date` datetime NOT NULL,
  `d13_end_status` int(11) NOT NULL,
  `d13_end_date` datetime NOT NULL,
  `d14_start_status` int(11) NOT NULL,
  `d14_start_date` datetime NOT NULL,
  `d14_end_status` int(11) NOT NULL,
  `d14_end_date` datetime NOT NULL,
  `d15_start_status` int(11) NOT NULL,
  `d15_start_date` datetime NOT NULL,
  `d15_end_status` int(11) NOT NULL,
  `d15_end_date` datetime NOT NULL,
  `d16_start_status` int(11) NOT NULL,
  `d16_start_date` datetime NOT NULL,
  `d16_end_status` int(11) NOT NULL,
  `d16_end_date` datetime NOT NULL,
  `d17_start_status` int(11) NOT NULL,
  `d17_start_date` datetime NOT NULL,
  `d17_end_status` int(11) NOT NULL,
  `d17_end_date` datetime NOT NULL,
  `d18_start_status` int(11) NOT NULL,
  `d18_start_date` datetime NOT NULL,
  `d18_end_status` int(11) NOT NULL,
  `d18_end_date` datetime NOT NULL,
  `d19_start_status` int(11) NOT NULL,
  `d19_start_date` datetime NOT NULL,
  `d19_end_status` int(11) NOT NULL,
  `d19_end_date` datetime NOT NULL,
  `d20_start_status` int(11) NOT NULL,
  `d20_start_date` datetime NOT NULL,
  `d20_end_status` int(11) NOT NULL,
  `d20_end_date` datetime NOT NULL,
  `d21_start_status` int(11) NOT NULL,
  `d21_start_date` datetime NOT NULL,
  `d21_end_status` int(11) NOT NULL,
  `d21_end_date` datetime NOT NULL,
  `d22_start_status` int(11) NOT NULL,
  `d22_start_date` datetime NOT NULL,
  `d22_end_status` int(11) NOT NULL,
  `d22_end_date` datetime NOT NULL,
  `d23_start_status` int(11) NOT NULL,
  `d23_start_date` datetime NOT NULL,
  `d23_end_status` int(11) NOT NULL,
  `d23_end_date` datetime NOT NULL,
  `d24_start_status` int(11) NOT NULL,
  `d24_start_date` datetime NOT NULL,
  `d24_end_status` int(11) NOT NULL,
  `d24_end_date` datetime NOT NULL,
  `d25_start_status` int(11) NOT NULL,
  `d25_start_date` datetime NOT NULL,
  `d25_end_status` int(11) NOT NULL,
  `d25_end_date` datetime NOT NULL,
  `d26_start_status` int(11) NOT NULL,
  `d26_start_date` datetime NOT NULL,
  `d26_end_status` int(11) NOT NULL,
  `d26_end_date` datetime NOT NULL,
  `d27_start_status` int(11) NOT NULL,
  `d27_start_date` datetime NOT NULL,
  `d27_end_status` int(11) NOT NULL,
  `d27_end_date` datetime NOT NULL,
  `d28_start_status` int(11) NOT NULL,
  `d28_start_date` datetime NOT NULL,
  `d28_end_status` int(11) NOT NULL,
  `d28_end_date` datetime NOT NULL,
  `d29_start_status` int(11) NOT NULL,
  `d29_start_date` datetime NOT NULL,
  `d29_end_status` int(11) NOT NULL,
  `d29_end_date` datetime NOT NULL,
  `d30_start_status` int(11) NOT NULL,
  `d30_start_date` datetime NOT NULL,
  `d30_end_status` int(11) NOT NULL,
  `d30_end_date` datetime NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `attendances12`
--

INSERT INTO `attendances12` (`attendance_id`, `student_id`, `roll_number`, `course_id`, `d1_start_status`, `d1_start_date`, `d1_end_status`, `d1_end_date`, `d2_start_status`, `d2_start_date`, `d2_end_status`, `d2_end_date`, `d3_start_status`, `d3_start_date`, `d3_end_status`, `d3_end_date`, `d4_start_status`, `d4_start_date`, `d4_end_status`, `d4_end_date`, `d5_start_status`, `d5_start_date`, `d5_end_status`, `d5_end_date`, `d6_start_status`, `d6_start_date`, `d6_end_status`, `d6_end_date`, `d7_start_status`, `d7_start_date`, `d7_end_status`, `d7_end_date`, `d8_start_status`, `d8_start_date`, `d8_end_status`, `d8_end_date`, `d9_start_status`, `d9_start_date`, `d9_end_status`, `d9_end_date`, `d10_start_status`, `d10_start_date`, `d10_end_status`, `d10_end_date`, `d11_start_status`, `d11_start_date`, `d11_end_status`, `d11_end_date`, `d12_start_status`, `d12_start_date`, `d12_end_status`, `d12_end_date`, `d13_start_status`, `d13_start_date`, `d13_end_status`, `d13_end_date`, `d14_start_status`, `d14_start_date`, `d14_end_status`, `d14_end_date`, `d15_start_status`, `d15_start_date`, `d15_end_status`, `d15_end_date`, `d16_start_status`, `d16_start_date`, `d16_end_status`, `d16_end_date`, `d17_start_status`, `d17_start_date`, `d17_end_status`, `d17_end_date`, `d18_start_status`, `d18_start_date`, `d18_end_status`, `d18_end_date`, `d19_start_status`, `d19_start_date`, `d19_end_status`, `d19_end_date`, `d20_start_status`, `d20_start_date`, `d20_end_status`, `d20_end_date`, `d21_start_status`, `d21_start_date`, `d21_end_status`, `d21_end_date`, `d22_start_status`, `d22_start_date`, `d22_end_status`, `d22_end_date`, `d23_start_status`, `d23_start_date`, `d23_end_status`, `d23_end_date`, `d24_start_status`, `d24_start_date`, `d24_end_status`, `d24_end_date`, `d25_start_status`, `d25_start_date`, `d25_end_status`, `d25_end_date`, `d26_start_status`, `d26_start_date`, `d26_end_status`, `d26_end_date`, `d27_start_status`, `d27_start_date`, `d27_end_status`, `d27_end_date`, `d28_start_status`, `d28_start_date`, `d28_end_status`, `d28_end_date`, `d29_start_status`, `d29_start_date`, `d29_end_status`, `d29_end_date`, `d30_start_status`, `d30_start_date`, `d30_end_status`, `d30_end_date`) VALUES
(1, 1, 201550107, 1, 2, '2018-12-01 19:12:58', -1, '0000-00-00 00:00:00', 2, '2018-12-01 19:20:45', 5, '2018-12-01 19:21:22', 2, '2018-12-01 19:21:46', 5, '2018-12-01 19:21:48', 2, '2018-12-01 19:23:08', 5, '2018-12-01 19:23:09', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 3, 201810282, 1, 2, '2018-12-01 19:13:12', 1, '2018-12-01 19:13:18', 2, '2018-12-01 19:14:04', 1, '2018-12-01 19:14:05', 2, '2018-12-01 19:22:33', 5, '2018-12-01 19:22:33', 2, '2018-12-01 19:22:59', -1, '0000-00-00 00:00:00', 2, '2018-12-01 19:26:28', -1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 1, 201712125, 1, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 2, '2018-12-01 19:38:19', 5, '2018-12-01 19:38:21', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 2, 201710211, 1, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 2, '2018-12-01 19:38:56', 5, '2018-12-01 19:39:06', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 3, 201845793, 1, 2, '2018-12-01 19:40:42', 5, '2018-12-01 19:41:27', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(6, 2, 201710698, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(7, 3, 201825874, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `attendances13`
--

CREATE TABLE IF NOT EXISTS `attendances13` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `d1_start_status` int(11) NOT NULL,
  `d1_start_date` datetime NOT NULL,
  `d1_end_status` int(11) NOT NULL,
  `d1_end_date` datetime NOT NULL,
  `d2_start_status` int(11) NOT NULL,
  `d2_start_date` datetime NOT NULL,
  `d2_end_status` int(11) NOT NULL,
  `d2_end_date` datetime NOT NULL,
  `d3_start_status` int(11) NOT NULL,
  `d3_start_date` datetime NOT NULL,
  `d3_end_status` int(11) NOT NULL,
  `d3_end_date` datetime NOT NULL,
  `d4_start_status` int(11) NOT NULL,
  `d4_start_date` datetime NOT NULL,
  `d4_end_status` int(11) NOT NULL,
  `d4_end_date` datetime NOT NULL,
  `d5_start_status` int(11) NOT NULL,
  `d5_start_date` datetime NOT NULL,
  `d5_end_status` int(11) NOT NULL,
  `d5_end_date` datetime NOT NULL,
  `d6_start_status` int(11) NOT NULL,
  `d6_start_date` datetime NOT NULL,
  `d6_end_status` int(11) NOT NULL,
  `d6_end_date` datetime NOT NULL,
  `d7_start_status` int(11) NOT NULL,
  `d7_start_date` datetime NOT NULL,
  `d7_end_status` int(11) NOT NULL,
  `d7_end_date` datetime NOT NULL,
  `d8_start_status` int(11) NOT NULL,
  `d8_start_date` datetime NOT NULL,
  `d8_end_status` int(11) NOT NULL,
  `d8_end_date` datetime NOT NULL,
  `d9_start_status` int(11) NOT NULL,
  `d9_start_date` datetime NOT NULL,
  `d9_end_status` int(11) NOT NULL,
  `d9_end_date` datetime NOT NULL,
  `d10_start_status` int(11) NOT NULL,
  `d10_start_date` datetime NOT NULL,
  `d10_end_status` int(11) NOT NULL,
  `d10_end_date` datetime NOT NULL,
  `d11_start_status` int(11) NOT NULL,
  `d11_start_date` datetime NOT NULL,
  `d11_end_status` int(11) NOT NULL,
  `d11_end_date` datetime NOT NULL,
  `d12_start_status` int(11) NOT NULL,
  `d12_start_date` datetime NOT NULL,
  `d12_end_status` int(11) NOT NULL,
  `d12_end_date` datetime NOT NULL,
  `d13_start_status` int(11) NOT NULL,
  `d13_start_date` datetime NOT NULL,
  `d13_end_status` int(11) NOT NULL,
  `d13_end_date` datetime NOT NULL,
  `d14_start_status` int(11) NOT NULL,
  `d14_start_date` datetime NOT NULL,
  `d14_end_status` int(11) NOT NULL,
  `d14_end_date` datetime NOT NULL,
  `d15_start_status` int(11) NOT NULL,
  `d15_start_date` datetime NOT NULL,
  `d15_end_status` int(11) NOT NULL,
  `d15_end_date` datetime NOT NULL,
  `d16_start_status` int(11) NOT NULL,
  `d16_start_date` datetime NOT NULL,
  `d16_end_status` int(11) NOT NULL,
  `d16_end_date` datetime NOT NULL,
  `d17_start_status` int(11) NOT NULL,
  `d17_start_date` datetime NOT NULL,
  `d17_end_status` int(11) NOT NULL,
  `d17_end_date` datetime NOT NULL,
  `d18_start_status` int(11) NOT NULL,
  `d18_start_date` datetime NOT NULL,
  `d18_end_status` int(11) NOT NULL,
  `d18_end_date` datetime NOT NULL,
  `d19_start_status` int(11) NOT NULL,
  `d19_start_date` datetime NOT NULL,
  `d19_end_status` int(11) NOT NULL,
  `d19_end_date` datetime NOT NULL,
  `d20_start_status` int(11) NOT NULL,
  `d20_start_date` datetime NOT NULL,
  `d20_end_status` int(11) NOT NULL,
  `d20_end_date` datetime NOT NULL,
  `d21_start_status` int(11) NOT NULL,
  `d21_start_date` datetime NOT NULL,
  `d21_end_status` int(11) NOT NULL,
  `d21_end_date` datetime NOT NULL,
  `d22_start_status` int(11) NOT NULL,
  `d22_start_date` datetime NOT NULL,
  `d22_end_status` int(11) NOT NULL,
  `d22_end_date` datetime NOT NULL,
  `d23_start_status` int(11) NOT NULL,
  `d23_start_date` datetime NOT NULL,
  `d23_end_status` int(11) NOT NULL,
  `d23_end_date` datetime NOT NULL,
  `d24_start_status` int(11) NOT NULL,
  `d24_start_date` datetime NOT NULL,
  `d24_end_status` int(11) NOT NULL,
  `d24_end_date` datetime NOT NULL,
  `d25_start_status` int(11) NOT NULL,
  `d25_start_date` datetime NOT NULL,
  `d25_end_status` int(11) NOT NULL,
  `d25_end_date` datetime NOT NULL,
  `d26_start_status` int(11) NOT NULL,
  `d26_start_date` datetime NOT NULL,
  `d26_end_status` int(11) NOT NULL,
  `d26_end_date` datetime NOT NULL,
  `d27_start_status` int(11) NOT NULL,
  `d27_start_date` datetime NOT NULL,
  `d27_end_status` int(11) NOT NULL,
  `d27_end_date` datetime NOT NULL,
  `d28_start_status` int(11) NOT NULL,
  `d28_start_date` datetime NOT NULL,
  `d28_end_status` int(11) NOT NULL,
  `d28_end_date` datetime NOT NULL,
  `d29_start_status` int(11) NOT NULL,
  `d29_start_date` datetime NOT NULL,
  `d29_end_status` int(11) NOT NULL,
  `d29_end_date` datetime NOT NULL,
  `d30_start_status` int(11) NOT NULL,
  `d30_start_date` datetime NOT NULL,
  `d30_end_status` int(11) NOT NULL,
  `d30_end_date` datetime NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `attendances24`
--

CREATE TABLE IF NOT EXISTS `attendances24` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `d1_start_status` int(11) NOT NULL,
  `d1_start_date` datetime NOT NULL,
  `d1_end_status` int(11) NOT NULL,
  `d1_end_date` datetime NOT NULL,
  `d2_start_status` int(11) NOT NULL,
  `d2_start_date` datetime NOT NULL,
  `d2_end_status` int(11) NOT NULL,
  `d2_end_date` datetime NOT NULL,
  `d3_start_status` int(11) NOT NULL,
  `d3_start_date` datetime NOT NULL,
  `d3_end_status` int(11) NOT NULL,
  `d3_end_date` datetime NOT NULL,
  `d4_start_status` int(11) NOT NULL,
  `d4_start_date` datetime NOT NULL,
  `d4_end_status` int(11) NOT NULL,
  `d4_end_date` datetime NOT NULL,
  `d5_start_status` int(11) NOT NULL,
  `d5_start_date` datetime NOT NULL,
  `d5_end_status` int(11) NOT NULL,
  `d5_end_date` datetime NOT NULL,
  `d6_start_status` int(11) NOT NULL,
  `d6_start_date` datetime NOT NULL,
  `d6_end_status` int(11) NOT NULL,
  `d6_end_date` datetime NOT NULL,
  `d7_start_status` int(11) NOT NULL,
  `d7_start_date` datetime NOT NULL,
  `d7_end_status` int(11) NOT NULL,
  `d7_end_date` datetime NOT NULL,
  `d8_start_status` int(11) NOT NULL,
  `d8_start_date` datetime NOT NULL,
  `d8_end_status` int(11) NOT NULL,
  `d8_end_date` datetime NOT NULL,
  `d9_start_status` int(11) NOT NULL,
  `d9_start_date` datetime NOT NULL,
  `d9_end_status` int(11) NOT NULL,
  `d9_end_date` datetime NOT NULL,
  `d10_start_status` int(11) NOT NULL,
  `d10_start_date` datetime NOT NULL,
  `d10_end_status` int(11) NOT NULL,
  `d10_end_date` datetime NOT NULL,
  `d11_start_status` int(11) NOT NULL,
  `d11_start_date` datetime NOT NULL,
  `d11_end_status` int(11) NOT NULL,
  `d11_end_date` datetime NOT NULL,
  `d12_start_status` int(11) NOT NULL,
  `d12_start_date` datetime NOT NULL,
  `d12_end_status` int(11) NOT NULL,
  `d12_end_date` datetime NOT NULL,
  `d13_start_status` int(11) NOT NULL,
  `d13_start_date` datetime NOT NULL,
  `d13_end_status` int(11) NOT NULL,
  `d13_end_date` datetime NOT NULL,
  `d14_start_status` int(11) NOT NULL,
  `d14_start_date` datetime NOT NULL,
  `d14_end_status` int(11) NOT NULL,
  `d14_end_date` datetime NOT NULL,
  `d15_start_status` int(11) NOT NULL,
  `d15_start_date` datetime NOT NULL,
  `d15_end_status` int(11) NOT NULL,
  `d15_end_date` datetime NOT NULL,
  `d16_start_status` int(11) NOT NULL,
  `d16_start_date` datetime NOT NULL,
  `d16_end_status` int(11) NOT NULL,
  `d16_end_date` datetime NOT NULL,
  `d17_start_status` int(11) NOT NULL,
  `d17_start_date` datetime NOT NULL,
  `d17_end_status` int(11) NOT NULL,
  `d17_end_date` datetime NOT NULL,
  `d18_start_status` int(11) NOT NULL,
  `d18_start_date` datetime NOT NULL,
  `d18_end_status` int(11) NOT NULL,
  `d18_end_date` datetime NOT NULL,
  `d19_start_status` int(11) NOT NULL,
  `d19_start_date` datetime NOT NULL,
  `d19_end_status` int(11) NOT NULL,
  `d19_end_date` datetime NOT NULL,
  `d20_start_status` int(11) NOT NULL,
  `d20_start_date` datetime NOT NULL,
  `d20_end_status` int(11) NOT NULL,
  `d20_end_date` datetime NOT NULL,
  `d21_start_status` int(11) NOT NULL,
  `d21_start_date` datetime NOT NULL,
  `d21_end_status` int(11) NOT NULL,
  `d21_end_date` datetime NOT NULL,
  `d22_start_status` int(11) NOT NULL,
  `d22_start_date` datetime NOT NULL,
  `d22_end_status` int(11) NOT NULL,
  `d22_end_date` datetime NOT NULL,
  `d23_start_status` int(11) NOT NULL,
  `d23_start_date` datetime NOT NULL,
  `d23_end_status` int(11) NOT NULL,
  `d23_end_date` datetime NOT NULL,
  `d24_start_status` int(11) NOT NULL,
  `d24_start_date` datetime NOT NULL,
  `d24_end_status` int(11) NOT NULL,
  `d24_end_date` datetime NOT NULL,
  `d25_start_status` int(11) NOT NULL,
  `d25_start_date` datetime NOT NULL,
  `d25_end_status` int(11) NOT NULL,
  `d25_end_date` datetime NOT NULL,
  `d26_start_status` int(11) NOT NULL,
  `d26_start_date` datetime NOT NULL,
  `d26_end_status` int(11) NOT NULL,
  `d26_end_date` datetime NOT NULL,
  `d27_start_status` int(11) NOT NULL,
  `d27_start_date` datetime NOT NULL,
  `d27_end_status` int(11) NOT NULL,
  `d27_end_date` datetime NOT NULL,
  `d28_start_status` int(11) NOT NULL,
  `d28_start_date` datetime NOT NULL,
  `d28_end_status` int(11) NOT NULL,
  `d28_end_date` datetime NOT NULL,
  `d29_start_status` int(11) NOT NULL,
  `d29_start_date` datetime NOT NULL,
  `d29_end_status` int(11) NOT NULL,
  `d29_end_date` datetime NOT NULL,
  `d30_start_status` int(11) NOT NULL,
  `d30_start_date` datetime NOT NULL,
  `d30_end_status` int(11) NOT NULL,
  `d30_end_date` datetime NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `attendances24`
--

INSERT INTO `attendances24` (`attendance_id`, `student_id`, `roll_number`, `course_id`, `d1_start_status`, `d1_start_date`, `d1_end_status`, `d1_end_date`, `d2_start_status`, `d2_start_date`, `d2_end_status`, `d2_end_date`, `d3_start_status`, `d3_start_date`, `d3_end_status`, `d3_end_date`, `d4_start_status`, `d4_start_date`, `d4_end_status`, `d4_end_date`, `d5_start_status`, `d5_start_date`, `d5_end_status`, `d5_end_date`, `d6_start_status`, `d6_start_date`, `d6_end_status`, `d6_end_date`, `d7_start_status`, `d7_start_date`, `d7_end_status`, `d7_end_date`, `d8_start_status`, `d8_start_date`, `d8_end_status`, `d8_end_date`, `d9_start_status`, `d9_start_date`, `d9_end_status`, `d9_end_date`, `d10_start_status`, `d10_start_date`, `d10_end_status`, `d10_end_date`, `d11_start_status`, `d11_start_date`, `d11_end_status`, `d11_end_date`, `d12_start_status`, `d12_start_date`, `d12_end_status`, `d12_end_date`, `d13_start_status`, `d13_start_date`, `d13_end_status`, `d13_end_date`, `d14_start_status`, `d14_start_date`, `d14_end_status`, `d14_end_date`, `d15_start_status`, `d15_start_date`, `d15_end_status`, `d15_end_date`, `d16_start_status`, `d16_start_date`, `d16_end_status`, `d16_end_date`, `d17_start_status`, `d17_start_date`, `d17_end_status`, `d17_end_date`, `d18_start_status`, `d18_start_date`, `d18_end_status`, `d18_end_date`, `d19_start_status`, `d19_start_date`, `d19_end_status`, `d19_end_date`, `d20_start_status`, `d20_start_date`, `d20_end_status`, `d20_end_date`, `d21_start_status`, `d21_start_date`, `d21_end_status`, `d21_end_date`, `d22_start_status`, `d22_start_date`, `d22_end_status`, `d22_end_date`, `d23_start_status`, `d23_start_date`, `d23_end_status`, `d23_end_date`, `d24_start_status`, `d24_start_date`, `d24_end_status`, `d24_end_date`, `d25_start_status`, `d25_start_date`, `d25_end_status`, `d25_end_date`, `d26_start_status`, `d26_start_date`, `d26_end_status`, `d26_end_date`, `d27_start_status`, `d27_start_date`, `d27_end_status`, `d27_end_date`, `d28_start_status`, `d28_start_date`, `d28_end_status`, `d28_end_date`, `d29_start_status`, `d29_start_date`, `d29_end_status`, `d29_end_date`, `d30_start_status`, `d30_start_date`, `d30_end_status`, `d30_end_date`) VALUES
(1, 1, 201550107, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 2, 201750035, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 4, 201750222, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 5, 201550234, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `attendances25`
--

CREATE TABLE IF NOT EXISTS `attendances25` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `d1_start_status` int(11) NOT NULL,
  `d1_start_date` datetime NOT NULL,
  `d1_end_status` int(11) NOT NULL,
  `d1_end_date` datetime NOT NULL,
  `d2_start_status` int(11) NOT NULL,
  `d2_start_date` datetime NOT NULL,
  `d2_end_status` int(11) NOT NULL,
  `d2_end_date` datetime NOT NULL,
  `d3_start_status` int(11) NOT NULL,
  `d3_start_date` datetime NOT NULL,
  `d3_end_status` int(11) NOT NULL,
  `d3_end_date` datetime NOT NULL,
  `d4_start_status` int(11) NOT NULL,
  `d4_start_date` datetime NOT NULL,
  `d4_end_status` int(11) NOT NULL,
  `d4_end_date` datetime NOT NULL,
  `d5_start_status` int(11) NOT NULL,
  `d5_start_date` datetime NOT NULL,
  `d5_end_status` int(11) NOT NULL,
  `d5_end_date` datetime NOT NULL,
  `d6_start_status` int(11) NOT NULL,
  `d6_start_date` datetime NOT NULL,
  `d6_end_status` int(11) NOT NULL,
  `d6_end_date` datetime NOT NULL,
  `d7_start_status` int(11) NOT NULL,
  `d7_start_date` datetime NOT NULL,
  `d7_end_status` int(11) NOT NULL,
  `d7_end_date` datetime NOT NULL,
  `d8_start_status` int(11) NOT NULL,
  `d8_start_date` datetime NOT NULL,
  `d8_end_status` int(11) NOT NULL,
  `d8_end_date` datetime NOT NULL,
  `d9_start_status` int(11) NOT NULL,
  `d9_start_date` datetime NOT NULL,
  `d9_end_status` int(11) NOT NULL,
  `d9_end_date` datetime NOT NULL,
  `d10_start_status` int(11) NOT NULL,
  `d10_start_date` datetime NOT NULL,
  `d10_end_status` int(11) NOT NULL,
  `d10_end_date` datetime NOT NULL,
  `d11_start_status` int(11) NOT NULL,
  `d11_start_date` datetime NOT NULL,
  `d11_end_status` int(11) NOT NULL,
  `d11_end_date` datetime NOT NULL,
  `d12_start_status` int(11) NOT NULL,
  `d12_start_date` datetime NOT NULL,
  `d12_end_status` int(11) NOT NULL,
  `d12_end_date` datetime NOT NULL,
  `d13_start_status` int(11) NOT NULL,
  `d13_start_date` datetime NOT NULL,
  `d13_end_status` int(11) NOT NULL,
  `d13_end_date` datetime NOT NULL,
  `d14_start_status` int(11) NOT NULL,
  `d14_start_date` datetime NOT NULL,
  `d14_end_status` int(11) NOT NULL,
  `d14_end_date` datetime NOT NULL,
  `d15_start_status` int(11) NOT NULL,
  `d15_start_date` datetime NOT NULL,
  `d15_end_status` int(11) NOT NULL,
  `d15_end_date` datetime NOT NULL,
  `d16_start_status` int(11) NOT NULL,
  `d16_start_date` datetime NOT NULL,
  `d16_end_status` int(11) NOT NULL,
  `d16_end_date` datetime NOT NULL,
  `d17_start_status` int(11) NOT NULL,
  `d17_start_date` datetime NOT NULL,
  `d17_end_status` int(11) NOT NULL,
  `d17_end_date` datetime NOT NULL,
  `d18_start_status` int(11) NOT NULL,
  `d18_start_date` datetime NOT NULL,
  `d18_end_status` int(11) NOT NULL,
  `d18_end_date` datetime NOT NULL,
  `d19_start_status` int(11) NOT NULL,
  `d19_start_date` datetime NOT NULL,
  `d19_end_status` int(11) NOT NULL,
  `d19_end_date` datetime NOT NULL,
  `d20_start_status` int(11) NOT NULL,
  `d20_start_date` datetime NOT NULL,
  `d20_end_status` int(11) NOT NULL,
  `d20_end_date` datetime NOT NULL,
  `d21_start_status` int(11) NOT NULL,
  `d21_start_date` datetime NOT NULL,
  `d21_end_status` int(11) NOT NULL,
  `d21_end_date` datetime NOT NULL,
  `d22_start_status` int(11) NOT NULL,
  `d22_start_date` datetime NOT NULL,
  `d22_end_status` int(11) NOT NULL,
  `d22_end_date` datetime NOT NULL,
  `d23_start_status` int(11) NOT NULL,
  `d23_start_date` datetime NOT NULL,
  `d23_end_status` int(11) NOT NULL,
  `d23_end_date` datetime NOT NULL,
  `d24_start_status` int(11) NOT NULL,
  `d24_start_date` datetime NOT NULL,
  `d24_end_status` int(11) NOT NULL,
  `d24_end_date` datetime NOT NULL,
  `d25_start_status` int(11) NOT NULL,
  `d25_start_date` datetime NOT NULL,
  `d25_end_status` int(11) NOT NULL,
  `d25_end_date` datetime NOT NULL,
  `d26_start_status` int(11) NOT NULL,
  `d26_start_date` datetime NOT NULL,
  `d26_end_status` int(11) NOT NULL,
  `d26_end_date` datetime NOT NULL,
  `d27_start_status` int(11) NOT NULL,
  `d27_start_date` datetime NOT NULL,
  `d27_end_status` int(11) NOT NULL,
  `d27_end_date` datetime NOT NULL,
  `d28_start_status` int(11) NOT NULL,
  `d28_start_date` datetime NOT NULL,
  `d28_end_status` int(11) NOT NULL,
  `d28_end_date` datetime NOT NULL,
  `d29_start_status` int(11) NOT NULL,
  `d29_start_date` datetime NOT NULL,
  `d29_end_status` int(11) NOT NULL,
  `d29_end_date` datetime NOT NULL,
  `d30_start_status` int(11) NOT NULL,
  `d30_start_date` datetime NOT NULL,
  `d30_end_status` int(11) NOT NULL,
  `d30_end_date` datetime NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `attendances26`
--

CREATE TABLE IF NOT EXISTS `attendances26` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `d1_start_status` int(11) NOT NULL,
  `d1_start_date` datetime NOT NULL,
  `d1_end_status` int(11) NOT NULL,
  `d1_end_date` datetime NOT NULL,
  `d2_start_status` int(11) NOT NULL,
  `d2_start_date` datetime NOT NULL,
  `d2_end_status` int(11) NOT NULL,
  `d2_end_date` datetime NOT NULL,
  `d3_start_status` int(11) NOT NULL,
  `d3_start_date` datetime NOT NULL,
  `d3_end_status` int(11) NOT NULL,
  `d3_end_date` datetime NOT NULL,
  `d4_start_status` int(11) NOT NULL,
  `d4_start_date` datetime NOT NULL,
  `d4_end_status` int(11) NOT NULL,
  `d4_end_date` datetime NOT NULL,
  `d5_start_status` int(11) NOT NULL,
  `d5_start_date` datetime NOT NULL,
  `d5_end_status` int(11) NOT NULL,
  `d5_end_date` datetime NOT NULL,
  `d6_start_status` int(11) NOT NULL,
  `d6_start_date` datetime NOT NULL,
  `d6_end_status` int(11) NOT NULL,
  `d6_end_date` datetime NOT NULL,
  `d7_start_status` int(11) NOT NULL,
  `d7_start_date` datetime NOT NULL,
  `d7_end_status` int(11) NOT NULL,
  `d7_end_date` datetime NOT NULL,
  `d8_start_status` int(11) NOT NULL,
  `d8_start_date` datetime NOT NULL,
  `d8_end_status` int(11) NOT NULL,
  `d8_end_date` datetime NOT NULL,
  `d9_start_status` int(11) NOT NULL,
  `d9_start_date` datetime NOT NULL,
  `d9_end_status` int(11) NOT NULL,
  `d9_end_date` datetime NOT NULL,
  `d10_start_status` int(11) NOT NULL,
  `d10_start_date` datetime NOT NULL,
  `d10_end_status` int(11) NOT NULL,
  `d10_end_date` datetime NOT NULL,
  `d11_start_status` int(11) NOT NULL,
  `d11_start_date` datetime NOT NULL,
  `d11_end_status` int(11) NOT NULL,
  `d11_end_date` datetime NOT NULL,
  `d12_start_status` int(11) NOT NULL,
  `d12_start_date` datetime NOT NULL,
  `d12_end_status` int(11) NOT NULL,
  `d12_end_date` datetime NOT NULL,
  `d13_start_status` int(11) NOT NULL,
  `d13_start_date` datetime NOT NULL,
  `d13_end_status` int(11) NOT NULL,
  `d13_end_date` datetime NOT NULL,
  `d14_start_status` int(11) NOT NULL,
  `d14_start_date` datetime NOT NULL,
  `d14_end_status` int(11) NOT NULL,
  `d14_end_date` datetime NOT NULL,
  `d15_start_status` int(11) NOT NULL,
  `d15_start_date` datetime NOT NULL,
  `d15_end_status` int(11) NOT NULL,
  `d15_end_date` datetime NOT NULL,
  `d16_start_status` int(11) NOT NULL,
  `d16_start_date` datetime NOT NULL,
  `d16_end_status` int(11) NOT NULL,
  `d16_end_date` datetime NOT NULL,
  `d17_start_status` int(11) NOT NULL,
  `d17_start_date` datetime NOT NULL,
  `d17_end_status` int(11) NOT NULL,
  `d17_end_date` datetime NOT NULL,
  `d18_start_status` int(11) NOT NULL,
  `d18_start_date` datetime NOT NULL,
  `d18_end_status` int(11) NOT NULL,
  `d18_end_date` datetime NOT NULL,
  `d19_start_status` int(11) NOT NULL,
  `d19_start_date` datetime NOT NULL,
  `d19_end_status` int(11) NOT NULL,
  `d19_end_date` datetime NOT NULL,
  `d20_start_status` int(11) NOT NULL,
  `d20_start_date` datetime NOT NULL,
  `d20_end_status` int(11) NOT NULL,
  `d20_end_date` datetime NOT NULL,
  `d21_start_status` int(11) NOT NULL,
  `d21_start_date` datetime NOT NULL,
  `d21_end_status` int(11) NOT NULL,
  `d21_end_date` datetime NOT NULL,
  `d22_start_status` int(11) NOT NULL,
  `d22_start_date` datetime NOT NULL,
  `d22_end_status` int(11) NOT NULL,
  `d22_end_date` datetime NOT NULL,
  `d23_start_status` int(11) NOT NULL,
  `d23_start_date` datetime NOT NULL,
  `d23_end_status` int(11) NOT NULL,
  `d23_end_date` datetime NOT NULL,
  `d24_start_status` int(11) NOT NULL,
  `d24_start_date` datetime NOT NULL,
  `d24_end_status` int(11) NOT NULL,
  `d24_end_date` datetime NOT NULL,
  `d25_start_status` int(11) NOT NULL,
  `d25_start_date` datetime NOT NULL,
  `d25_end_status` int(11) NOT NULL,
  `d25_end_date` datetime NOT NULL,
  `d26_start_status` int(11) NOT NULL,
  `d26_start_date` datetime NOT NULL,
  `d26_end_status` int(11) NOT NULL,
  `d26_end_date` datetime NOT NULL,
  `d27_start_status` int(11) NOT NULL,
  `d27_start_date` datetime NOT NULL,
  `d27_end_status` int(11) NOT NULL,
  `d27_end_date` datetime NOT NULL,
  `d28_start_status` int(11) NOT NULL,
  `d28_start_date` datetime NOT NULL,
  `d28_end_status` int(11) NOT NULL,
  `d28_end_date` datetime NOT NULL,
  `d29_start_status` int(11) NOT NULL,
  `d29_start_date` datetime NOT NULL,
  `d29_end_status` int(11) NOT NULL,
  `d29_end_date` datetime NOT NULL,
  `d30_start_status` int(11) NOT NULL,
  `d30_start_date` datetime NOT NULL,
  `d30_end_status` int(11) NOT NULL,
  `d30_end_date` datetime NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(100) NOT NULL,
  `section` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `section`, `department_id`, `c_date`) VALUES
(1, 'YEAR1/CS/D', 'Day', 1, '2018-12-01 16:01:01'),
(2, 'YEAR2/CS/D', 'Day', 1, '2018-12-01 16:01:28'),
(3, 'YEAR3/CS/D', 'Day', 1, '2018-12-01 16:01:48'),
(4, 'YEAR1/ETT/D', 'Day', 2, '2018-12-01 16:04:04'),
(5, 'YEAR2/ETT/D', 'Day', 2, '2018-12-01 16:04:26'),
(6, 'YEAR3/ETT/D', 'Day', 2, '2018-12-01 16:04:41');

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  `lecture_id` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `class_id`, `lecture_id`, `hours`, `days`, `c_date`) VALUES
(1, 'Networking 2', 2, 19, 80, 10, '2018-12-01 16:35:41'),
(2, 'C Programming', 4, 20, 50, 6, '2018-12-01 16:43:23'),
(3, 'Calculus 1', 5, 21, 100, 12, '2018-12-01 16:45:36'),
(4, 'Data Structure and Algorithms', 2, 19, 72, 9, '2018-12-01 19:57:13');

-- --------------------------------------------------------

--
-- Structure de la table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `faculty_id`, `c_date`) VALUES
(1, 'Computer Science', 1, '2018-12-01 15:59:16'),
(2, 'Electronic and Telecomminucation', 2, '2018-12-01 15:59:57'),
(3, 'Civil Engeneering', 2, '2018-12-01 16:00:36');

-- --------------------------------------------------------

--
-- Structure de la table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `hod_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `test` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `nb_pass_exam` int(11) NOT NULL,
  `nb_miss_exam` int(11) NOT NULL,
  `exam_date` datetime NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `exam`
--

INSERT INTO `exam` (`exam_id`, `course_id`, `class_id`, `department_id`, `hod_id`, `duration`, `test`, `room_id`, `status`, `nb_pass_exam`, `nb_miss_exam`, `exam_date`, `c_date`) VALUES
(1, 1, 2, 1, 10, 3, 1, 0, 2, 0, 0, '2018-12-10 00:00:00', '2018-12-01 16:36:19'),
(2, 1, 2, 1, 10, 4, 2, 0, 1, 0, 0, '2018-12-17 00:00:00', '2018-12-01 16:36:51');

-- --------------------------------------------------------

--
-- Structure de la table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `exams_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `marks` varchar(100) NOT NULL,
  `exa_p_date` datetime NOT NULL,
  PRIMARY KEY (`exams_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_name` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `c_date`) VALUES
(1, 'Science and Technology', '2018-12-01 15:57:10'),
(2, 'Polytechnic', '2018-12-01 15:57:30');

-- --------------------------------------------------------

--
-- Structure de la table `pass_exam`
--

CREATE TABLE IF NOT EXISTS `pass_exam` (
  `pass_id` int(11) NOT NULL AUTO_INCREMENT,
  `exams_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `response` longtext NOT NULL,
  `result` int(11) NOT NULL,
  `pass_date` datetime NOT NULL,
  PRIMARY KEY (`pass_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `p_answ` text NOT NULL,
  `q_date` datetime DEFAULT NULL,
  `as1` text NOT NULL,
  `as2` text NOT NULL,
  `as3` text NOT NULL,
  `as4` varchar(200) NOT NULL DEFAULT 'None',
  `test_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_code` int(11) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `photoprofile` varchar(255) NOT NULL DEFAULT 'img/u.png',
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `students`
--

INSERT INTO `students` (`student_id`, `student_code`, `roll_number`, `names`, `email`, `phone`, `status`, `password`, `faculty_id`, `department_id`, `class_id`, `photoprofile`, `c_date`) VALUES
(1, 2147483647, 201710258, 'Elvis ', 'elvis@gmail.com', '0784512789', 1, 'online-exam', 1, 1, 1, 'img/u.png', '2018-12-01 19:51:51'),
(2, 1001620775, 201710698, 'Muhindo Antoine', 'antoine@gmail.com', '+25078454627', 1, 'online-exam', 1, 1, 2, 'img/u.png', '2018-12-01 20:05:11'),
(3, 2147483647, 201825874, 'Tim Katende', 'tim@gmail.com', '0784512789', 1, 'online-exam', 1, 1, 2, 'img/u.png', '2018-12-01 20:06:08');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `test`
--

INSERT INTO `test` (`ID`, `Name`) VALUES
(1, 'CAT2'),
(2, 'FAT'),
(3, 'SPECIAL');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `password` varchar(110) NOT NULL,
  `c_date` datetime NOT NULL,
  `photoprofile` varchar(200) NOT NULL DEFAULT 'img/u.png',
  `class_id` int(11) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `names`, `email`, `phone`, `status`, `category_id`, `pin`, `password`, `c_date`, `photoprofile`, `class_id`, `roll_number`, `department_id`) VALUES
(1, 'Olivier', 'olivier@gmail.com', '078456512', 1, 1, 1, 'online-exam', '2018-10-09 08:23:24', 'img/u.png', 1, 0, 0),
(3, 'Eze', 'eze@gmail.com', '+250786618405', 1, 3, 0, 'online-exam', '2018-11-01 15:39:44', 'img/u.png', 1, 201711222, 2),
(5, 'Staff Recover', 'staff@gmail.com', '0785595552', 1, 5, 0, 'online-exam', '2018-11-02 14:45:51', 'img/u.png', 0, 0, 0),
(10, 'Kalengya Ezpk', 'ezpk@gmail.com', '+25078454627', 1, 4, 0, 'online-exam', '2018-11-23 12:32:03', 'img/u.png', 1, 0, 1),
(11, 'Abigael Wanzirendi', 'abigael@gmail.com', '+243975346253', 1, 4, 0, 'online-exam', '2018-11-23 12:36:42', 'img/IMG_20181014_092941.jpg', 0, 0, 2),
(12, 'Eloge Kalengya', 'eloge@gmail.com', '0784577845', 1, 3, 0, 'online-exam-admin-2018', '2018-11-23 13:26:38', 'img/u.png', 3, 201710222, 1),
(13, 'Bojos', 'bojos@gmail.com', '0788235689', 1, 3, 0, 'online-exam-admin-2018', '2018-11-23 13:28:06', 'img/u.png', 4, 201810258, 1),
(19, 'Louange Socrate', 'louange@gmail.com', '0784567894', 1, 2, 0, 'online-exam', '2018-12-01 16:35:05', 'img/u.png', 2, 0, 1),
(20, 'Timothee Katende', 'tim@gmail.com', '0784512789', 1, 2, 0, 'online-exam', '2018-12-01 16:43:00', 'img/u.png', 4, 0, 2),
(21, 'Muhindo Antoine', 'antoine@gmail.com', '0784513696', 1, 2, 0, 'online-exam', '2018-12-01 16:44:44', 'img/u.png', 5, 0, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
