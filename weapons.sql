-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 01:14 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tactics`
--

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE `weapons` (
  `weapon-name` varchar(15) NOT NULL,
  `price` varchar(15) NOT NULL,
  `ammo_capacity` varchar(15) NOT NULL,
  `head_damage` varchar(15) NOT NULL,
  `chest_damage` varchar(15) NOT NULL,
  `stomach_damage` varchar(15) NOT NULL,
  `leg_damage` varchar(15) NOT NULL,
  `speed_zoom` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weapons`
--

INSERT INTO `weapons` (`weapon-name`, `price`, `ammo_capacity`, `head_damage`, `chest_damage`, `stomach_damage`, `leg_damage`, `speed_zoom`) VALUES
('P2000', '200.00', '20/120', '111', '27', '34', '20', '240'),
('Desert Eagle', '700', '7/35', '247', '61', '77', '46', '230'),
('Negev', '5700', '150/200', '139', '34', '43', '26', '195'),
('MAG-7', '1800', '5/32', '112', '102', '102', '105', '225'),
('MP9', '1250', '30/120', '102', '25', '31', '19', '240'),
('P90', '2350', '50/100', '102', '25', '32', '19', '230'),
('M4A1-S', '3100', '20/40', '131', '32', '41', '24', '225'),
('AK-47', '2700', '30/90', '143', '35', '44', '26', '215'),
('Galil AR', '2000', '35/90', '119', '29', '37', '22', '215'),
('AWP', '4750', '10/30', '459', '114', '143', '86', '200');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
