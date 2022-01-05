-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 05, 2022 at 11:00 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loadme1`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `slogan` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `ip` varchar(255) DEFAULT 'https://api.ravepay.co/v2/services/confluence ',
  `port` varchar(10) DEFAULT NULL,
  `acct_num` varchar(30) DEFAULT NULL,
  `bank_name` varchar(10) DEFAULT NULL,
  `flutterapi` varchar(255) DEFAULT NULL,
  `flutterapisecret` varchar(255) DEFAULT NULL,
  `merchant_key` varchar(50) DEFAULT NULL,
  `api_key` varchar(50) DEFAULT NULL,
  `fee` int(50) DEFAULT 0,
  `googleapi` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `phone`, `email`, `slogan`, `address`, `logo`, `status`, `created_date`, `registeredby`, `ip`, `port`, `acct_num`, `bank_name`, `flutterapi`, `flutterapisecret`, `merchant_key`, `api_key`, `fee`, `googleapi`) VALUES
(2, 'Shop2Door', '08023447620', 'info@Shop2Door.com', 'Truck booking made easy', 'Osborne Foreshore Estate,', 'graphicallity/logo.png', '1', '2022-01-03 01:49:33', 'LMG415984', '', '', '0690000031', '044', 'FLWPUBK_TEST-756d4e291f3952e689dd67b8b7bd081e-X', 'FLWSECK_TEST-a2cc486782ef90adf65b4592cb671087-X', '', '', 10, 'AIzaSyAGrHdhUTvfj1Fyl9Dx7_e7RstThaE1uHo');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `code` varchar(50) NOT NULL,
  `status` varchar(2) DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `registeredby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `code`, `status`, `created_date`, `registeredby`) VALUES
(2, 'Stanbic Mobile Money', '304', '1', NULL, 'admin'),
(6, 'First Bank of Nigeria', '011', '1', NULL, 'admin'),
(10, 'Zenith Bank', '057', '1', NULL, 'admin'),
(11, 'Standard Chartered Bank', '068', '1', NULL, 'admin'),
(13, 'Fidelity Bank', '070', '1', NULL, 'admin'),
(14, 'CitiBank', '023', '1', NULL, 'admin'),
(15, 'Unity Bank', '215', '1', NULL, 'admin'),
(17, 'Eartholeum', '302', '1', NULL, 'admin'),
(20, 'JAIZ Bank', '301', '1', NULL, 'admin'),
(21, 'Ecobank Plc', '050', '1', NULL, 'admin'),
(27, 'Stanbic IBTC Bank', '221', '1', NULL, 'admin'),
(31, 'ChamsMobile', '303', '1', NULL, 'admin'),
(37, 'Wema Bank', '035', '1', NULL, 'admin'),
(38, 'Enterprise Bank', '084', '1', NULL, 'admin'),
(39, 'Diamond Bank', '063', '1', NULL, 'admin'),
(41, 'SunTrust Bank', '100', '1', NULL, 'admin'),
(44, 'Heritage', '030', '1', NULL, 'admin'),
(46, 'GTBank Plc', '058', '1', NULL, 'admin'),
(47, 'Union Bank', '032', '1', NULL, 'admin'),
(48, 'Sterling Bank', '232', '1', NULL, 'admin'),
(49, 'Skye Bank', '076', '1', NULL, 'admin'),
(50, 'Keystone Bank', '082', '1', NULL, 'admin'),
(55, 'First City Monument Bank', '214', '1', NULL, 'admin'),
(59, 'United Bank for Africa', '033', '1', NULL, 'admin'),
(60, 'Access Bank', '044', '1', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `base_fare`
--

DROP TABLE IF EXISTS `base_fare`;
CREATE TABLE IF NOT EXISTS `base_fare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truck_type` varchar(20) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `base_fare`
--

INSERT INTO `base_fare` (`id`, `truck_type`, `capacity`, `amount`, `status`, `created_date`, `registeredby`) VALUES
(1, '3', '7', '1000', '1', '2021-06-29 14:32:14', 'LMG415984'),
(2, '3', '8', '1200', '1', '2021-06-29 14:32:30', 'LMG415984'),
(3, '3', '9', '1600', '1', '2021-06-29 14:32:49', 'LMG415984'),
(4, '3', '10', '2000', '1', '2021-06-29 14:33:08', 'LMG415984'),
(5, '3', '12', '2300', '1', '2021-06-29 14:33:36', 'LMG415984'),
(6, '3', '13', '2800', '1', '2021-06-29 14:33:58', 'LMG415984'),
(7, '3', '14', '3400', '1', '2021-06-29 14:35:49', 'LMG415984'),
(8, '3', '15', '4000', '1', '2021-06-29 14:36:06', 'LMG415984'),
(9, '1', '2', '1000', '1', '2021-06-29 14:36:50', 'LMG415984'),
(10, '1', '3', '1300', '1', '2021-06-29 14:37:08', 'LMG415984'),
(11, '1', '4', '1800', '1', '2021-06-29 14:37:27', 'LMG415984'),
(12, '1', '5', '2200', '1', '2021-06-29 14:37:45', 'LMG415984'),
(13, '1', '6', '3000', '1', '2021-06-29 14:38:07', 'LMG415984'),
(14, '6', '16', '1900', '1', '2021-06-29 14:39:18', 'LMG415984'),
(15, '6', '17', '2600', '1', '2021-06-29 14:39:34', 'LMG415984'),
(16, '6', '18', '3400', '1', '2021-06-29 14:39:49', 'LMG415984'),
(17, '6', '19', '4100', '1', '2021-06-29 14:40:16', 'LMG415984'),
(18, '6', '20', '4700', '1', '2021-06-29 14:40:33', 'LMG415984'),
(19, '4', '23', '2000', '1', '2021-06-29 14:45:40', 'LMG415984'),
(20, '4', '24', '3000', '1', '2021-06-29 14:45:52', 'LMG415984'),
(21, '4', '25', '4000', '1', '2021-06-29 14:46:04', 'LMG415984'),
(22, '4', '26', '5000', '1', '2021-06-29 14:46:12', 'LMG415984'),
(23, '4', '27', '6000', '1', '2021-06-29 14:46:23', 'LMG415984'),
(24, '5', '28', '1000', '1', '2021-06-29 14:46:58', 'LMG415984'),
(25, '5', '29', '1200', '1', '2021-06-29 14:47:08', 'LMG415984'),
(26, '5', '30', '1800', '1', '2021-06-29 14:47:18', 'LMG415984'),
(27, '5', '31', '2600', '1', '2021-06-29 14:47:32', 'LMG415984'),
(28, '5', '32', '3500', '1', '2021-06-29 14:47:47', 'LMG415984'),
(29, '5', '33', '3900', '1', '2021-06-29 14:48:06', 'LMG415984'),
(30, '5', '34', '4300', '1', '2021-06-29 14:48:25', 'LMG415984'),
(31, '5', '35', '4800', '1', '2021-06-29 14:48:41', 'LMG415984'),
(32, '2', '36', '1600', '1', '2021-06-29 14:51:50', 'LMG415984'),
(33, '2', '37', '2900', '1', '2021-06-29 14:52:28', 'LMG415984'),
(34, '2', '38', '3999', '1', '2021-06-29 14:53:14', 'LMG415984');

-- --------------------------------------------------------

--
-- Table structure for table `block_users`
--

DROP TABLE IF EXISTS `block_users`;
CREATE TABLE IF NOT EXISTS `block_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `count_times` int(11) NOT NULL DEFAULT 0,
  `username` varchar(30) DEFAULT NULL,
  `status` varchar(2) DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `registeredby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block_users`
--

INSERT INTO `block_users` (`id`, `count_times`, `username`, `status`, `created_date`, `registeredby`) VALUES
(1, 1, '', '1', '2021-07-21 07:36:10', ''),
(2, 30, '9000', '1', '2021-07-21 07:39:26', '9000'),
(3, 0, 'LM654242', '1', '2021-07-21 16:34:16', 'LM654242'),
(4, 0, 'LM767654', '1', '2022-01-03 01:57:13', 'LM767654'),
(5, 0, 'LM442284', '1', '2022-01-04 13:20:10', 'LM442284');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `address` text DEFAULT NULL,
  `longi` varchar(50) DEFAULT NULL,
  `lati` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `status`, `created_date`, `registeredby`, `address`, `longi`, `lati`) VALUES
(1, 'Ikeja', '1', '2021-06-29 14:18:01', 'LMG415984', '1 Freedom Road, ikeja, lagos\r\n                                                ', '3.3514863', '6.601838');

-- --------------------------------------------------------

--
-- Table structure for table `courier_category`
--

DROP TABLE IF EXISTS `courier_category`;
CREATE TABLE IF NOT EXISTS `courier_category` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `created_date` varchar(50) DEFAULT NULL,
  `registeredby` varchar(50) DEFAULT NULL,
  `image` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_category`
--

INSERT INTO `courier_category` (`id`, `name`, `desc`, `status`, `created_date`, `registeredby`, `image`) VALUES
(1, 'Food', 'Courier Category', 1, '2022-01-03 12:03:04', 'LMG415984', 'graphicallity/Foodlogo.png'),
(2, 'Beverage', 'Beverage Milo', 1, '2022-01-03 12:03:04', 'LMG415984', 'graphicallity/Foodlogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `courier_category_sign_up`
--

DROP TABLE IF EXISTS `courier_category_sign_up`;
CREATE TABLE IF NOT EXISTS `courier_category_sign_up` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `courier` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `created_date` varchar(50) DEFAULT NULL,
  `registeredby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_category_sign_up`
--

INSERT INTO `courier_category_sign_up` (`id`, `category`, `courier`, `status`, `created_date`, `registeredby`) VALUES
(15, '1', 'LM442284', 1, '2022-01-04 15:18:12', 'LM442284'),
(14, '2', 'LM442284', 1, '2022-01-04 15:18:12', 'LM442284');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_number` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `license` varchar(250) NOT NULL,
  `license_expiry` varchar(250) NOT NULL,
  `passport` varchar(250) NOT NULL,
  `front_view` varchar(250) NOT NULL,
  `back_view` varchar(250) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `account_number`, `fname`, `lname`, `email`, `phone`, `license`, `license_expiry`, `passport`, `front_view`, `back_view`, `status`, `created_date`, `registeredby`) VALUES
(1, '444376883415', 'Usman', 'Usman', 'stephen.edet@gs3.services', '07040143619', '00000', '2023', 'graphicallity/444376883415NQR.png', 'graphicallity/444376883415NQR.png', 'graphicallity/444376883415NQR.png', '1', '2021-06-30 09:16:07', 'LM592872'),
(2, '420151645325', 'Ayo ', 'Amusa', 'ayoamusa@gmail.com.ng', '0818880000', '7', '01/05/2021', 'graphicallity/420151645325AdobeStock_310152511-scaled.jpg', 'graphicallity/420151645325istockphoto-691286862-612x612.jpg', 'graphicallity/420151645325download (11).jfif', '1', '2021-07-05 12:30:55', 'LM793687'),
(3, '127783939413', 'Olu', 'Ayobami', 'olubami@apexchordinnovations.com', '0803333333', '8338837847474', '01/06/2022', 'graphicallity/127783939413GettyImages-1035308964-5d15a77127854247b5c841d339a546c0.jpeg', 'graphicallity/127783939413istockphoto-691286862-612x612.jpg', 'graphicallity/127783939413download (11).jfif', '1', '2021-07-05 12:33:52', 'LM793687'),
(4, '37191341552', 'Mide', 'Lawson', 'midelawson@apexchordinnovations.com', '0901000000', '72772625637359', '2/09/2023', 'graphicallity/37191341552images (2).jfif', 'graphicallity/37191341552istockphoto-691286862-612x612.jpg', 'graphicallity/37191341552download (11).jfif', '1', '2021-07-05 12:37:37', 'LM793687'),
(5, '194522496283', 'Ranti', 'Adebajo', 'rantiadebajo@gmail.com.ng', '0700000000', '456454784947', '98/7/2024', 'graphicallity/194522496283images (2).jfif', 'graphicallity/1945224962838471859_img20190110wa0004_jpeg61152d91e52760cd2a436af433b8600c.jfif', 'graphicallity/194522496283download (10).jfif', '1', '2021-07-05 12:41:51', 'LM793687');

-- --------------------------------------------------------

--
-- Table structure for table `driver_truck_attachment`
--

DROP TABLE IF EXISTS `driver_truck_attachment`;
CREATE TABLE IF NOT EXISTS `driver_truck_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truck` varchar(250) NOT NULL,
  `driver` varchar(250) NOT NULL,
  `status` varchar(2) DEFAULT '1',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` text DEFAULT NULL,
  `truck_owner` varchar(30) DEFAULT NULL,
  `registeredby` varchar(30) DEFAULT NULL,
  `rating` varchar(30) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback`, `truck_owner`, `registeredby`, `rating`, `status`, `created_at`, `name`, `email`) VALUES
(1, 'fsdfsdfsdfsdfsdfsdfsdfsdffsd', '', '', '0', '1', '2021-07-15 03:02:20', 'First Last', 'info@payall.com.ng'),
(2, 'fsdfsdfsdfsdfsdfsdfsdfsdffsd', 'LM592872', '', '0', '1', '2021-07-15 03:04:05', 'First Last', 'info@payall.com.ng');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_report`
--

DROP TABLE IF EXISTS `inspection_report`;
CREATE TABLE IF NOT EXISTS `inspection_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) DEFAULT NULL,
  `truck_id` varchar(20) DEFAULT NULL,
  `inspector` varchar(50) NOT NULL,
  `score` varchar(20) NOT NULL,
  `result` varchar(20) NOT NULL,
  `interior` varchar(20) NOT NULL,
  `exterior` varchar(20) NOT NULL,
  `cleanliness` varchar(20) NOT NULL,
  `functionality` varchar(20) NOT NULL,
  `vehicle_number` varchar(20) NOT NULL,
  `mileage` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `transmission` varchar(20) NOT NULL,
  `make` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `exterior_colour` varchar(20) NOT NULL,
  `interior_colour` varchar(20) NOT NULL,
  `chasis_colour` varchar(20) NOT NULL,
  `engine_number` varchar(20) NOT NULL,
  `interior_trim` varchar(20) NOT NULL,
  `vehicle_licence_expiry` varchar(20) NOT NULL,
  `road_worthiness` varchar(20) NOT NULL,
  `road_worthiness_expiry` varchar(20) NOT NULL,
  `insurance` varchar(20) NOT NULL,
  `insurance_expiry` varchar(20) NOT NULL,
  `drivers_licence` varchar(20) NOT NULL,
  `drivers_licence_expiry` varchar(20) NOT NULL,
  `radio_functional` varchar(20) NOT NULL,
  `horn_functional` varchar(20) NOT NULL,
  `seat_covering_integrity` varchar(20) NOT NULL,
  `window_control_functional` varchar(20) NOT NULL,
  `door_locks_functional` varchar(20) NOT NULL,
  `door_handles_functional` varchar(20) NOT NULL,
  `brv_shocks_condition` varchar(20) NOT NULL,
  `parking_brakes_engages` varchar(20) NOT NULL,
  `no_grinding_noise` varchar(20) NOT NULL,
  `spring_or_balloon` varchar(20) NOT NULL,
  `tyre_thread` varchar(20) NOT NULL,
  `tyre_condition` varchar(20) NOT NULL,
  `vehicle_body` varchar(20) NOT NULL,
  `free_of_scratches` varchar(20) NOT NULL,
  `free_of_dents` varchar(20) NOT NULL,
  `no_windshield_window_cracks` varchar(20) NOT NULL,
  `wipper_engine_wipper` varchar(20) NOT NULL,
  `jack_and_accessories` varchar(20) NOT NULL,
  `fire_extinguisher` varchar(20) NOT NULL,
  `spare_tyre` varchar(20) NOT NULL,
  `hazard_warning_triangle` varchar(20) NOT NULL,
  `headlights_working` varchar(20) NOT NULL,
  `brakelights_working` varchar(20) NOT NULL,
  `indicators_working` varchar(20) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `report` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_report`
--

INSERT INTO `inspection_report` (`id`, `code`, `truck_id`, `inspector`, `score`, `result`, `interior`, `exterior`, `cleanliness`, `functionality`, `vehicle_number`, `mileage`, `year`, `transmission`, `make`, `model`, `exterior_colour`, `interior_colour`, `chasis_colour`, `engine_number`, `interior_trim`, `vehicle_licence_expiry`, `road_worthiness`, `road_worthiness_expiry`, `insurance`, `insurance_expiry`, `drivers_licence`, `drivers_licence_expiry`, `radio_functional`, `horn_functional`, `seat_covering_integrity`, `window_control_functional`, `door_locks_functional`, `door_handles_functional`, `brv_shocks_condition`, `parking_brakes_engages`, `no_grinding_noise`, `spring_or_balloon`, `tyre_thread`, `tyre_condition`, `vehicle_body`, `free_of_scratches`, `free_of_dents`, `no_windshield_window_cracks`, `wipper_engine_wipper`, `jack_and_accessories`, `fire_extinguisher`, `spare_tyre`, `hazard_warning_triangle`, `headlights_working`, `brakelights_working`, `indicators_working`, `status`, `created_date`, `registeredby`, `report`) VALUES
(1, '29079518665475303', '14', 'LM452937', '14', 'A', '3', '4', '4', '3', 'LA 439 KJ', '23000', '1899', 'Auto', 'DAF', '1899', 'Black', 'Brown', '00000000', '00000000', 'abcdef', '10/02/22', 'Yes', '23/04/23', 'Yes', '22/03/22', 'Yes', '12/12/22', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Okay', 'Yes', 'Yes', 'Yes', 'Okay', 'Okay', 'Okay', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '0', '2021-07-01 11:15:42', 'LM452937', NULL),
(2, '71439229814502717', '19', 'LM524488', '14', 'A', '4', '3', '4', '3', 'lax45600n', '10000', '2001', 'Manual', 'Daf', 'expera', 'Green', 'Brown', '46783635484649646', '3462803', '3635738', '01/5/2021', 'Yes', '01/05/2021', 'Yes', '01/05/2021', 'Yes', '01/05/2021', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Working', 'Working', 'No', 'Spring', 'jusfsh', 'Perfect', 'yes', 'Yes', 'No dent', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '0', '2021-07-05 11:53:44', 'LM524488', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locals`
--

DROP TABLE IF EXISTS `locals`;
CREATE TABLE IF NOT EXISTS `locals` (
  `local_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `local_name` varchar(100) NOT NULL,
  PRIMARY KEY (`local_id`)
) ENGINE=MyISAM AUTO_INCREMENT=739 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locals`
--

INSERT INTO `locals` (`local_id`, `state_id`, `local_name`) VALUES
(1, 1, 'Aba South'),
(2, 1, 'Arochukwu'),
(3, 1, 'Bende'),
(4, 1, 'Ikwuano'),
(5, 1, 'Isiala Ngwa North'),
(6, 1, 'Isiala Ngwa South'),
(7, 1, 'Isuikwuato'),
(8, 1, 'Obi Ngwa'),
(9, 1, 'Ohafia'),
(10, 1, 'Osisioma'),
(11, 1, 'Ugwunagbo'),
(12, 1, 'Ukwa East'),
(13, 1, 'Ukwa West'),
(14, 1, 'Umuahia North'),
(15, 1, 'Umuahia South'),
(16, 1, 'Umu Nneochi'),
(17, 2, 'Fufure'),
(18, 2, 'Ganye'),
(19, 2, 'Gayuk'),
(20, 2, 'Gombi'),
(21, 2, 'Grie'),
(22, 2, 'Hong'),
(23, 2, 'Jada'),
(24, 2, 'Lamurde'),
(25, 2, 'Madagali'),
(26, 2, 'Maiha'),
(27, 2, 'Mayo Belwa'),
(28, 2, 'Michika'),
(29, 2, 'Mubi North'),
(30, 2, 'Mubi South'),
(31, 2, 'Numan'),
(32, 2, 'Shelleng'),
(33, 2, 'Song'),
(34, 2, 'Toungo'),
(35, 2, 'Yola North'),
(36, 2, 'Yola South'),
(37, 3, 'Eastern Obolo'),
(38, 3, 'Eket'),
(39, 3, 'Esit Eket'),
(40, 3, 'Essien Udim'),
(41, 3, 'Etim Ekpo'),
(42, 3, 'Etinan'),
(43, 3, 'Ibeno'),
(44, 3, 'Ibesikpo Asutan'),
(45, 3, 'Ibiono-Ibom'),
(46, 3, 'Ika'),
(47, 3, 'Ikono'),
(48, 3, 'Ikot Abasi'),
(49, 3, 'Ikot Ekpene'),
(50, 3, 'Ini'),
(51, 3, 'Itu'),
(52, 3, 'Mbo'),
(53, 3, 'Mkpat-Enin'),
(54, 3, 'Nsit-Atai'),
(55, 3, 'Nsit-Ibom'),
(56, 3, 'Nsit-Ubium'),
(57, 3, 'Obot Akara'),
(58, 3, 'Okobo'),
(59, 3, 'Onna'),
(60, 3, 'Oron'),
(61, 3, 'Oruk Anam'),
(62, 3, 'Udung-Uko'),
(63, 3, 'Ukanafun'),
(64, 3, 'Uruan'),
(65, 3, 'Urue-Offong/Oruko'),
(66, 3, 'Uyo'),
(67, 4, 'Anambra East'),
(68, 4, 'Anambra West'),
(69, 4, 'Anaocha'),
(70, 4, 'Awka North'),
(71, 4, 'Awka South'),
(72, 4, 'Ayamelum'),
(73, 4, 'Dunukofia'),
(74, 4, 'Ekwusigo'),
(75, 4, 'Idemili North'),
(76, 4, 'Idemili South'),
(77, 4, 'Ihiala'),
(78, 4, 'Njikoka'),
(79, 4, 'Nnewi North'),
(80, 4, 'Nnewi South'),
(81, 4, 'Ogbaru'),
(82, 4, 'Onitsha North'),
(83, 4, 'Onitsha South'),
(84, 4, 'Orumba North'),
(85, 4, 'Orumba South'),
(86, 4, 'Oyi'),
(87, 5, 'Bauchi'),
(88, 5, 'Bogoro'),
(89, 5, 'Damban'),
(90, 5, 'Darazo'),
(91, 5, 'Dass'),
(92, 5, 'Gamawa'),
(93, 5, 'Ganjuwa'),
(94, 5, 'Giade'),
(95, 5, 'Itas/Gadau'),
(96, 5, 'Jama\'are'),
(97, 5, 'Katagum'),
(98, 5, 'Kirfi'),
(99, 5, 'Misau'),
(100, 5, 'Ningi'),
(101, 5, 'Shira'),
(102, 5, 'Tafawa Balewa'),
(103, 5, 'Toro'),
(104, 5, 'Warji'),
(105, 5, 'Zaki'),
(106, 6, 'Ekeremor'),
(107, 6, 'Kolokuma/Opokuma'),
(108, 6, 'Nembe'),
(109, 6, 'Ogbia'),
(110, 6, 'Sagbama'),
(111, 6, 'Southern Ijaw'),
(112, 6, 'Yenagoa'),
(113, 7, 'Apa'),
(114, 7, 'Ado'),
(115, 7, 'Buruku'),
(116, 7, 'Gboko'),
(117, 7, 'Guma'),
(118, 7, 'Gwer East'),
(119, 7, 'Gwer West'),
(120, 7, 'Katsina-Ala'),
(121, 7, 'Konshisha'),
(122, 7, 'Kwande'),
(123, 7, 'Logo'),
(124, 7, 'Makurdi'),
(125, 7, 'Obi'),
(126, 7, 'Ogbadibo'),
(127, 7, 'Ohimini'),
(128, 7, 'Oju'),
(129, 7, 'Okpokwu'),
(130, 7, 'Oturkpo'),
(131, 7, 'Tarka'),
(132, 7, 'Ukum'),
(133, 7, 'Ushongo'),
(134, 7, 'Vandeikya'),
(135, 8, 'Askira/Uba'),
(136, 8, 'Bama'),
(137, 8, 'Bayo'),
(138, 8, 'Biu'),
(139, 8, 'Chibok'),
(140, 8, 'Damboa'),
(141, 8, 'Dikwa'),
(142, 8, 'Gubio'),
(143, 8, 'Guzamala'),
(144, 8, 'Gwoza'),
(145, 8, 'Hawul'),
(146, 8, 'Jere'),
(147, 8, 'Kaga'),
(148, 8, 'Kala/Balge'),
(149, 8, 'Konduga'),
(150, 8, 'Kukawa'),
(151, 8, 'Kwaya Kusar'),
(152, 8, 'Mafa'),
(153, 8, 'Magumeri'),
(154, 8, 'Maiduguri'),
(155, 8, 'Marte'),
(156, 8, 'Mobbar'),
(157, 8, 'Monguno'),
(158, 8, 'Ngala'),
(159, 8, 'Nganzai'),
(160, 8, 'Shani'),
(161, 9, 'Akamkpa'),
(162, 9, 'Akpabuyo'),
(163, 9, 'Bakassi'),
(164, 9, 'Bekwarra'),
(165, 9, 'Biase'),
(166, 9, 'Boki'),
(167, 9, 'Calabar Municipal'),
(168, 9, 'Calabar South'),
(169, 9, 'Etung'),
(170, 9, 'Ikom'),
(171, 9, 'Obanliku'),
(172, 9, 'Obubra'),
(173, 9, 'Obudu'),
(174, 9, 'Odukpani'),
(175, 9, 'Ogoja'),
(176, 9, 'Yakuur'),
(177, 9, 'Yala'),
(178, 10, 'Aniocha South'),
(179, 10, 'Bomadi'),
(180, 10, 'Burutu'),
(181, 10, 'Ethiope East'),
(182, 10, 'Ethiope West'),
(183, 10, 'Ika North East'),
(184, 10, 'Ika South'),
(185, 10, 'Isoko North'),
(186, 10, 'Isoko South'),
(187, 10, 'Ndokwa East'),
(188, 10, 'Ndokwa West'),
(189, 10, 'Okpe'),
(190, 10, 'Oshimili North'),
(191, 10, 'Oshimili South'),
(192, 10, 'Patani'),
(193, 10, 'Sapele'),
(194, 10, 'Udu'),
(195, 10, 'Ughelli North'),
(196, 10, 'Ughelli South'),
(197, 10, 'Ukwuani'),
(198, 10, 'Uvwie'),
(199, 10, 'Warri North'),
(200, 10, 'Warri South'),
(201, 10, 'Warri South West'),
(202, 11, 'Afikpo North'),
(203, 11, 'Afikpo South'),
(204, 11, 'Ebonyi'),
(205, 11, 'Ezza North'),
(206, 11, 'Ezza South'),
(207, 11, 'Ikwo'),
(208, 11, 'Ishielu'),
(209, 11, 'Ivo'),
(210, 11, 'Izzi'),
(211, 11, 'Ohaozara'),
(212, 11, 'Ohaukwu'),
(213, 11, 'Onicha'),
(214, 12, 'Egor'),
(215, 12, 'Esan Central'),
(216, 12, 'Esan North-East'),
(217, 12, 'Esan South-East'),
(218, 12, 'Esan West'),
(219, 12, 'Etsako Central'),
(220, 12, 'Etsako East'),
(221, 12, 'Etsako West'),
(222, 12, 'Igueben'),
(223, 12, 'Ikpoba Okha'),
(224, 12, 'Orhionmwon'),
(225, 12, 'Oredo'),
(226, 12, 'Ovia North-East'),
(227, 12, 'Ovia South-West'),
(228, 12, 'Owan East'),
(229, 12, 'Owan West'),
(230, 12, 'Uhunmwonde'),
(231, 13, 'Efon'),
(232, 13, 'Ekiti East'),
(233, 13, 'Ekiti South-West'),
(234, 13, 'Ekiti West'),
(235, 13, 'Emure'),
(236, 13, 'Gbonyin'),
(237, 13, 'Ido Osi'),
(238, 13, 'Ijero'),
(239, 13, 'Ikere'),
(240, 13, 'Ikole'),
(241, 13, 'Ilejemeje'),
(242, 13, 'Irepodun/Ifelodun'),
(243, 13, 'Ise/Orun'),
(244, 13, 'Moba'),
(245, 13, 'Oye'),
(246, 14, 'Awgu'),
(247, 14, 'Enugu East'),
(248, 14, 'Enugu North'),
(249, 14, 'Enugu South'),
(250, 14, 'Ezeagu'),
(251, 14, 'Igbo Etiti'),
(252, 14, 'Igbo Eze North'),
(253, 14, 'Igbo Eze South'),
(254, 14, 'Isi Uzo'),
(255, 14, 'Nkanu East'),
(256, 14, 'Nkanu West'),
(257, 14, 'Nsukka'),
(258, 14, 'Oji River'),
(259, 14, 'Udenu'),
(260, 14, 'Udi'),
(261, 14, 'Uzo Uwani'),
(262, 15, 'Bwari'),
(263, 15, 'Gwagwalada'),
(264, 15, 'Kuje'),
(265, 15, 'Kwali'),
(266, 15, 'Municipal Area Council'),
(267, 16, 'Balanga'),
(268, 16, 'Billiri'),
(269, 16, 'Dukku'),
(270, 16, 'Funakaye'),
(271, 16, 'Gombe'),
(272, 16, 'Kaltungo'),
(273, 16, 'Kwami'),
(274, 16, 'Nafada'),
(275, 16, 'Shongom'),
(276, 16, 'Yamaltu/Deba'),
(277, 17, 'Ahiazu Mbaise'),
(278, 17, 'Ehime Mbano'),
(279, 17, 'Ezinihitte'),
(280, 17, 'Ideato North'),
(281, 17, 'Ideato South'),
(282, 17, 'Ihitte/Uboma'),
(283, 17, 'Ikeduru'),
(284, 17, 'Isiala Mbano'),
(285, 17, 'Isu'),
(286, 17, 'Mbaitoli'),
(287, 17, 'Ngor Okpala'),
(288, 17, 'Njaba'),
(289, 17, 'Nkwerre'),
(290, 17, 'Nwangele'),
(291, 17, 'Obowo'),
(292, 17, 'Oguta'),
(293, 17, 'Ohaji/Egbema'),
(294, 17, 'Okigwe'),
(295, 17, 'Orlu'),
(296, 17, 'Orsu'),
(297, 17, 'Oru East'),
(298, 17, 'Oru West'),
(299, 17, 'Owerri Municipal'),
(300, 17, 'Owerri North'),
(301, 17, 'Owerri West'),
(302, 17, 'Unuimo'),
(303, 18, 'Babura'),
(304, 18, 'Biriniwa'),
(305, 18, 'Birnin Kudu'),
(306, 18, 'Buji'),
(307, 18, 'Dutse'),
(308, 18, 'Gagarawa'),
(309, 18, 'Garki'),
(310, 18, 'Gumel'),
(311, 18, 'Guri'),
(312, 18, 'Gwaram'),
(313, 18, 'Gwiwa'),
(314, 18, 'Hadejia'),
(315, 18, 'Jahun'),
(316, 18, 'Kafin Hausa'),
(317, 18, 'Kazaure'),
(318, 18, 'Kiri Kasama'),
(319, 18, 'Kiyawa'),
(320, 18, 'Kaugama'),
(321, 18, 'Maigatari'),
(322, 18, 'Malam Madori'),
(323, 18, 'Miga'),
(324, 18, 'Ringim'),
(325, 18, 'Roni'),
(326, 18, 'Sule Tankarkar'),
(327, 18, 'Taura'),
(328, 18, 'Yankwashi'),
(329, 19, 'Chikun'),
(330, 19, 'Giwa'),
(331, 19, 'Igabi'),
(332, 19, 'Ikara'),
(333, 19, 'Jaba'),
(334, 19, 'Jema\'a'),
(335, 19, 'Kachia'),
(336, 19, 'Kaduna North'),
(337, 19, 'Kaduna South'),
(338, 19, 'Kagarko'),
(339, 19, 'Kajuru'),
(340, 19, 'Kaura'),
(341, 19, 'Kauru'),
(342, 19, 'Kubau'),
(343, 19, 'Kudan'),
(344, 19, 'Lere'),
(345, 19, 'Makarfi'),
(346, 19, 'Sabon Gari'),
(347, 19, 'Sanga'),
(348, 19, 'Soba'),
(349, 19, 'Zangon Kataf'),
(350, 19, 'Zaria'),
(351, 20, 'Albasu'),
(352, 20, 'Bagwai'),
(353, 20, 'Bebeji'),
(354, 20, 'Bichi'),
(355, 20, 'Bunkure'),
(356, 20, 'Dala'),
(357, 20, 'Dambatta'),
(358, 20, 'Dawakin Kudu'),
(359, 20, 'Dawakin Tofa'),
(360, 20, 'Doguwa'),
(361, 20, 'Fagge'),
(362, 20, 'Gabasawa'),
(363, 20, 'Garko'),
(364, 20, 'Garun Mallam'),
(365, 20, 'Gaya'),
(366, 20, 'Gezawa'),
(367, 20, 'Gwale'),
(368, 20, 'Gwarzo'),
(369, 20, 'Kabo'),
(370, 20, 'Kano Municipal'),
(371, 20, 'Karaye'),
(372, 20, 'Kibiya'),
(373, 20, 'Kiru'),
(374, 20, 'Kumbotso'),
(375, 20, 'Kunchi'),
(376, 20, 'Kura'),
(377, 20, 'Madobi'),
(378, 20, 'Makoda'),
(379, 20, 'Minjibir'),
(380, 20, 'Nasarawa'),
(381, 20, 'Rano'),
(382, 20, 'Rimin Gado'),
(383, 20, 'Rogo'),
(384, 20, 'Shanono'),
(385, 20, 'Sumaila'),
(386, 20, 'Takai'),
(387, 20, 'Tarauni'),
(388, 20, 'Tofa'),
(389, 20, 'Tsanyawa'),
(390, 20, 'Tudun Wada'),
(391, 20, 'Ungogo'),
(392, 20, 'Warawa'),
(393, 20, 'Wudil'),
(394, 21, 'Batagarawa'),
(395, 21, 'Batsari'),
(396, 21, 'Baure'),
(397, 21, 'Bindawa'),
(398, 21, 'Charanchi'),
(399, 21, 'Dandume'),
(400, 21, 'Danja'),
(401, 21, 'Dan Musa'),
(402, 21, 'Daura'),
(403, 21, 'Dutsi'),
(404, 21, 'Dutsin Ma'),
(405, 21, 'Faskari'),
(406, 21, 'Funtua'),
(407, 21, 'Ingawa'),
(408, 21, 'Jibia'),
(409, 21, 'Kafur'),
(410, 21, 'Kaita'),
(411, 21, 'Kankara'),
(412, 21, 'Kankia'),
(413, 21, 'Katsina'),
(414, 21, 'Kurfi'),
(415, 21, 'Kusada'),
(416, 21, 'Mai\'Adua'),
(417, 21, 'Malumfashi'),
(418, 21, 'Mani'),
(419, 21, 'Mashi'),
(420, 21, 'Matazu'),
(421, 21, 'Musawa'),
(422, 21, 'Rimi'),
(423, 21, 'Sabuwa'),
(424, 21, 'Safana'),
(425, 21, 'Sandamu'),
(426, 21, 'Zango'),
(427, 22, 'Arewa Dandi'),
(428, 22, 'Argungu'),
(429, 22, 'Augie'),
(430, 22, 'Bagudo'),
(431, 22, 'Birnin Kebbi'),
(432, 22, 'Bunza'),
(433, 22, 'Dandi'),
(434, 22, 'Fakai'),
(435, 22, 'Gwandu'),
(436, 22, 'Jega'),
(437, 22, 'Kalgo'),
(438, 22, 'Koko/Besse'),
(439, 22, 'Maiyama'),
(440, 22, 'Ngaski'),
(441, 22, 'Sakaba'),
(442, 22, 'Shanga'),
(443, 22, 'Suru'),
(444, 22, 'Wasagu/Danko'),
(445, 22, 'Yauri'),
(446, 22, 'Zuru'),
(447, 23, 'Ajaokuta'),
(448, 23, 'Ankpa'),
(449, 23, 'Bassa'),
(450, 23, 'Dekina'),
(451, 23, 'Ibaji'),
(452, 23, 'Idah'),
(453, 23, 'Igalamela Odolu'),
(454, 23, 'Ijumu'),
(455, 23, 'Kabba/Bunu'),
(456, 23, 'Kogi'),
(457, 23, 'Lokoja'),
(458, 23, 'Mopa Muro'),
(459, 23, 'Ofu'),
(460, 23, 'Ogori/Magongo'),
(461, 23, 'Okehi'),
(462, 23, 'Okene'),
(463, 23, 'Olamaboro'),
(464, 23, 'Omala'),
(465, 23, 'Yagba East'),
(466, 23, 'Yagba West'),
(467, 24, 'Baruten'),
(468, 24, 'Edu'),
(469, 24, 'Ekiti'),
(470, 24, 'Ifelodun'),
(471, 24, 'Ilorin East'),
(472, 24, 'Ilorin South'),
(473, 24, 'Ilorin West'),
(474, 24, 'Irepodun'),
(475, 24, 'Isin'),
(476, 24, 'Kaiama'),
(477, 24, 'Moro'),
(478, 24, 'Offa'),
(479, 24, 'Oke Ero'),
(480, 24, 'Oyun'),
(481, 24, 'Pategi'),
(482, 25, 'Ajeromi-Ifelodun'),
(483, 25, 'Alimosho'),
(484, 25, 'Amuwo-Odofin'),
(485, 25, 'Apapa'),
(486, 25, 'Badagry'),
(487, 25, 'Epe'),
(488, 25, 'Eti Osa'),
(489, 25, 'Ibeju-Lekki'),
(490, 25, 'Ifako-Ijaiye'),
(491, 25, 'Ikeja'),
(492, 25, 'Ikorodu'),
(493, 25, 'Kosofe'),
(494, 25, 'Lagos Island'),
(495, 25, 'Lagos Mainland'),
(496, 25, 'Mushin'),
(497, 25, 'Ojo'),
(498, 25, 'Oshodi-Isolo'),
(499, 25, 'Shomolu'),
(500, 25, 'Surulere'),
(501, 26, 'Awe'),
(502, 26, 'Doma'),
(503, 26, 'Karu'),
(504, 26, 'Keana'),
(505, 26, 'Keffi'),
(506, 26, 'Kokona'),
(507, 26, 'Lafia'),
(508, 26, 'Nasarawa'),
(509, 26, 'Nasarawa Egon'),
(510, 26, 'Obi'),
(511, 26, 'Toto'),
(512, 26, 'Wamba'),
(513, 27, 'Agwara'),
(514, 27, 'Bida'),
(515, 27, 'Borgu'),
(516, 27, 'Bosso'),
(517, 27, 'Chanchaga'),
(518, 27, 'Edati'),
(519, 27, 'Gbako'),
(520, 27, 'Gurara'),
(521, 27, 'Katcha'),
(522, 27, 'Kontagora'),
(523, 27, 'Lapai'),
(524, 27, 'Lavun'),
(525, 27, 'Magama'),
(526, 27, 'Mariga'),
(527, 27, 'Mashegu'),
(528, 27, 'Mokwa'),
(529, 27, 'Moya'),
(530, 27, 'Paikoro'),
(531, 27, 'Rafi'),
(532, 27, 'Rijau'),
(533, 27, 'Shiroro'),
(534, 27, 'Suleja'),
(535, 27, 'Tafa'),
(536, 27, 'Wushishi'),
(537, 28, 'Abeokuta South'),
(538, 28, 'Ado-Odo/Ota'),
(539, 28, 'Egbado North'),
(540, 28, 'Egbado South'),
(541, 28, 'Ewekoro'),
(542, 28, 'Ifo'),
(543, 28, 'Ijebu East'),
(544, 28, 'Ijebu North'),
(545, 28, 'Ijebu North East'),
(546, 28, 'Ijebu Ode'),
(547, 28, 'Ikenne'),
(548, 28, 'Imeko Afon'),
(549, 28, 'Ipokia'),
(550, 28, 'Obafemi Owode'),
(551, 28, 'Odeda'),
(552, 28, 'Odogbolu'),
(553, 28, 'Ogun Waterside'),
(554, 28, 'Remo North'),
(555, 28, 'Shagamu'),
(556, 29, 'Akoko North-West'),
(557, 29, 'Akoko South-West'),
(558, 29, 'Akoko South-East'),
(559, 29, 'Akure North'),
(560, 29, 'Akure South'),
(561, 29, 'Ese Odo'),
(562, 29, 'Idanre'),
(563, 29, 'Ifedore'),
(564, 29, 'Ilaje'),
(565, 29, 'Ile Oluji/Okeigbo'),
(566, 29, 'Irele'),
(567, 29, 'Odigbo'),
(568, 29, 'Okitipupa'),
(569, 29, 'Ondo East'),
(570, 29, 'Ondo West'),
(571, 29, 'Ose'),
(572, 29, 'Owo'),
(573, 30, 'Atakunmosa West'),
(574, 30, 'Aiyedaade'),
(575, 30, 'Aiyedire'),
(576, 30, 'Boluwaduro'),
(577, 30, 'Boripe'),
(578, 30, 'Ede North'),
(579, 30, 'Ede South'),
(580, 30, 'Ife Central'),
(581, 30, 'Ife East'),
(582, 30, 'Ife North'),
(583, 30, 'Ife South'),
(584, 30, 'Egbedore'),
(585, 30, 'Ejigbo'),
(586, 30, 'Ifedayo'),
(587, 30, 'Ifelodun'),
(588, 30, 'Ila'),
(589, 30, 'Ilesa East'),
(590, 30, 'Ilesa West'),
(591, 30, 'Irepodun'),
(592, 30, 'Irewole'),
(593, 30, 'Isokan'),
(594, 30, 'Iwo'),
(595, 30, 'Obokun'),
(596, 30, 'Odo Otin'),
(597, 30, 'Ola Oluwa'),
(598, 30, 'Olorunda'),
(599, 30, 'Oriade'),
(600, 30, 'Orolu'),
(601, 30, 'Osogbo'),
(602, 31, 'Akinyele'),
(603, 31, 'Atiba'),
(604, 31, 'Atisbo'),
(605, 31, 'Egbeda'),
(606, 31, 'Ibadan North'),
(607, 31, 'Ibadan North-East'),
(608, 31, 'Ibadan North-West'),
(609, 31, 'Ibadan South-East'),
(610, 31, 'Ibadan South-West'),
(611, 31, 'Ibarapa Central'),
(612, 31, 'Ibarapa East'),
(613, 31, 'Ibarapa North'),
(614, 31, 'Ido'),
(615, 31, 'Irepo'),
(616, 31, 'Iseyin'),
(617, 31, 'Itesiwaju'),
(618, 31, 'Iwajowa'),
(619, 31, 'Kajola'),
(620, 31, 'Lagelu'),
(621, 31, 'Ogbomosho North'),
(622, 31, 'Ogbomosho South'),
(623, 31, 'Ogo Oluwa'),
(624, 31, 'Olorunsogo'),
(625, 31, 'Oluyole'),
(626, 31, 'Ona Ara'),
(627, 31, 'Orelope'),
(628, 31, 'Ori Ire'),
(629, 31, 'Oyo'),
(630, 31, 'Oyo East'),
(631, 31, 'Saki East'),
(632, 31, 'Saki West'),
(633, 31, 'Surulere'),
(634, 32, 'Barkin Ladi'),
(635, 32, 'Bassa'),
(636, 32, 'Jos East'),
(637, 32, 'Jos North'),
(638, 32, 'Jos South'),
(639, 32, 'Kanam'),
(640, 32, 'Kanke'),
(641, 32, 'Langtang South'),
(642, 32, 'Langtang North'),
(643, 32, 'Mangu'),
(644, 32, 'Mikang'),
(645, 32, 'Pankshin'),
(646, 32, 'Qua\'an Pan'),
(647, 32, 'Riyom'),
(648, 32, 'Shendam'),
(649, 32, 'Wase'),
(650, 33, 'Ahoada East'),
(651, 33, 'Ahoada West'),
(652, 33, 'Akuku-Toru'),
(653, 33, 'Andoni'),
(654, 33, 'Asari-Toru'),
(655, 33, 'Bonny'),
(656, 33, 'Degema'),
(657, 33, 'Eleme'),
(658, 33, 'Emuoha'),
(659, 33, 'Etche'),
(660, 33, 'Gokana'),
(661, 33, 'Ikwerre'),
(662, 33, 'Khana'),
(663, 33, 'Obio/Akpor'),
(664, 33, 'Ogba/Egbema/Ndoni'),
(665, 33, 'Ogu/Bolo'),
(666, 33, 'Okrika'),
(667, 33, 'Omuma'),
(668, 33, 'Opobo/Nkoro'),
(669, 33, 'Oyigbo'),
(670, 33, 'Port Harcourt'),
(671, 33, 'Tai'),
(672, 34, 'Bodinga'),
(673, 34, 'Dange Shuni'),
(674, 34, 'Gada'),
(675, 34, 'Goronyo'),
(676, 34, 'Gudu'),
(677, 34, 'Gwadabawa'),
(678, 34, 'Illela'),
(679, 34, 'Isa'),
(680, 34, 'Kebbe'),
(681, 34, 'Kware'),
(682, 34, 'Rabah'),
(683, 34, 'Sabon Birni'),
(684, 34, 'Shagari'),
(685, 34, 'Silame'),
(686, 34, 'Sokoto North'),
(687, 34, 'Sokoto South'),
(688, 34, 'Tambuwal'),
(689, 34, 'Tangaza'),
(690, 34, 'Tureta'),
(691, 34, 'Wamako'),
(692, 34, 'Wurno'),
(693, 34, 'Yabo'),
(694, 35, 'Bali'),
(695, 35, 'Donga'),
(696, 35, 'Gashaka'),
(697, 35, 'Gassol'),
(698, 35, 'Ibi'),
(699, 35, 'Jalingo'),
(700, 35, 'Karim Lamido'),
(701, 35, 'Kumi'),
(702, 35, 'Lau'),
(703, 35, 'Sardauna'),
(704, 35, 'Takum'),
(705, 35, 'Ussa'),
(706, 35, 'Wukari'),
(707, 35, 'Yorro'),
(708, 35, 'Zing'),
(709, 36, 'Bursari'),
(710, 36, 'Damaturu'),
(711, 36, 'Fika'),
(712, 36, 'Fune'),
(713, 36, 'Geidam'),
(714, 36, 'Gujba'),
(715, 36, 'Gulani'),
(716, 36, 'Jakusko'),
(717, 36, 'Karasuwa'),
(718, 36, 'Machina'),
(719, 36, 'Nangere'),
(720, 36, 'Nguru'),
(721, 36, 'Potiskum'),
(722, 36, 'Tarmuwa'),
(723, 36, 'Yunusari'),
(724, 36, 'Yusufari'),
(725, 37, 'Bakura'),
(726, 37, 'Birnin Magaji/Kiyaw'),
(727, 37, 'Bukkuyum'),
(728, 37, 'Bungudu'),
(729, 37, 'Gummi'),
(730, 37, 'Gusau'),
(731, 37, 'Kaura Namoda'),
(732, 37, 'Maradun'),
(733, 37, 'Maru'),
(734, 37, 'Shinkafi'),
(735, 37, 'Talata Mafara'),
(736, 37, 'Chafe'),
(737, 37, 'Zurmi'),
(738, 13, 'Ado-Ekiti');

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

DROP TABLE IF EXISTS `login_log`;
CREATE TABLE IF NOT EXISTS `login_log` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `ip_address` text NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT 1,
  `platform` varchar(30) NOT NULL DEFAULT 'web',
  `service_unit` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_log`
--

INSERT INTO `login_log` (`id`, `username`, `ip_address`, `login`, `logout`, `status`, `platform`, `service_unit`) VALUES
(1, '0810000000', '', '2021-07-20 18:27:56', NULL, 0, 'customer mobile', NULL),
(2, '0810000000', '', '2021-07-21 07:17:04', NULL, 0, 'customer mobile', NULL),
(3, '0810000000', '', '2021-07-21 07:17:52', NULL, 0, 'customer mobile', NULL),
(4, '0810000000', '', '2021-07-21 07:19:25', NULL, 0, 'customer mobile', NULL),
(5, '0810000000', '', '2021-07-21 07:19:51', NULL, 0, 'customer mobile', NULL),
(6, '0810000000', '127.0.0.1', '2021-07-21 07:20:28', NULL, 0, 'customer mobile', NULL),
(7, 'user', '127.0.0.1', '2021-07-21 17:06:59', NULL, 0, 'customer mobile', NULL),
(8, 'user', '127.0.0.1', '2021-07-21 17:07:36', NULL, 0, 'customer mobile', NULL),
(9, 'user', '127.0.0.1', '2021-07-21 17:07:37', NULL, 0, 'customer mobile', NULL),
(10, 'user', '127.0.0.1', '2021-07-21 17:07:46', NULL, 0, 'customer mobile', NULL),
(11, 'user', '127.0.0.1', '2021-07-22 10:17:01', NULL, 0, 'customer mobile', NULL),
(12, 'user', '127.0.0.1', '2021-07-22 12:52:05', NULL, 0, 'customer mobile', NULL),
(13, 'user', '127.0.0.1', '2021-07-22 12:52:29', NULL, 0, 'customer mobile', NULL),
(14, 'user', '127.0.0.1', '2021-07-22 12:53:32', NULL, 0, 'customer mobile', NULL),
(15, 'user', '127.0.0.1', '2021-07-22 12:55:02', NULL, 0, 'customer mobile', NULL),
(16, 'user', '127.0.0.1', '2021-07-22 12:56:46', NULL, 0, 'customer mobile', NULL),
(17, 'user', '127.0.0.1', '2021-07-23 02:06:35', NULL, 0, 'customer mobile', NULL),
(18, 'user', '127.0.0.1', '2021-07-23 03:20:08', NULL, 0, 'customer mobile', NULL),
(19, 'user', '127.0.0.1', '2021-07-23 03:20:57', NULL, 0, 'customer mobile', NULL),
(20, 'user', '127.0.0.1', '2021-07-23 03:21:40', NULL, 0, 'customer mobile', NULL),
(21, 'user', '127.0.0.1', '2021-07-23 03:22:44', NULL, 0, 'customer mobile', NULL),
(22, 'user', '127.0.0.1', '2021-07-23 04:27:21', NULL, 0, 'Web Admin', NULL),
(23, 'user', '127.0.0.1', '2021-07-23 22:28:59', NULL, 0, 'customer mobile', NULL),
(24, 'user', '127.0.0.1', '2021-07-23 22:43:04', NULL, 0, 'Web Admin', NULL),
(25, '08023447620', '127.0.0.1', '2021-07-24 15:33:21', NULL, 0, 'Web Admin', NULL),
(26, '0810000000', '127.0.0.1', '2021-08-03 14:22:20', NULL, 0, 'Web Admin', NULL),
(27, '0810000000', '127.0.0.1', '2021-08-05 03:22:52', NULL, 0, 'Web Admin', NULL),
(28, '0810000000', '127.0.0.1', '2021-08-14 08:17:10', NULL, 0, 'Web Admin', NULL),
(29, '0810000000', '127.0.0.1', '2021-08-25 18:17:16', '2021-08-25 18:52:51', 1, 'Web Admin', NULL),
(30, '0810000000', '127.0.0.1', '2021-08-25 19:49:08', '2021-08-25 18:52:51', 1, 'Web Admin', NULL),
(31, '0810000000', '127.0.0.1', '2021-08-25 19:55:35', NULL, 0, 'Web Admin', NULL),
(32, '0810000000', '127.0.0.1', '2021-10-12 23:57:05', NULL, 0, 'Web Admin', NULL),
(33, '0810000000', '127.0.0.1', '2021-11-20 04:36:35', NULL, 0, 'Web Admin', NULL),
(34, '12345', '127.0.0.1', '2022-01-03 01:00:06', '2022-01-03 00:03:57', 1, 'Web Admin', NULL),
(35, '0810000000', '127.0.0.1', '2022-01-03 01:10:32', '2022-01-03 00:48:52', 1, 'Web Admin', NULL),
(36, '0810000000', '127.0.0.1', '2022-01-03 01:11:18', '2022-01-03 00:48:52', 1, 'Web Admin', NULL),
(37, '0810000000', '127.0.0.1', '2022-01-03 01:48:21', '2022-01-03 00:48:52', 1, 'Web Admin', NULL),
(38, '0810000000', '127.0.0.1', '2022-01-03 01:49:07', '2022-01-03 00:49:35', 1, 'Web Admin', NULL),
(39, '80355386580', '127.0.0.1', '2022-01-03 01:58:49', '2022-01-03 02:32:27', 1, 'Web Admin', NULL),
(40, '80355386580', '127.0.0.1', '2022-01-03 02:03:23', '2022-01-03 02:32:27', 1, 'Web Admin', NULL),
(41, '80355386580', '127.0.0.1', '2022-01-03 02:14:39', '2022-01-03 02:32:27', 1, 'Web Admin', NULL),
(42, '80355386580', '127.0.0.1', '2022-01-03 03:39:47', '2022-01-03 02:49:22', 1, 'Web Admin', NULL),
(43, '80355386580', '127.0.0.1', '2022-01-03 03:49:40', NULL, 0, 'Web Admin', NULL),
(44, '0810000000', '127.0.0.1', '2022-01-03 11:42:16', NULL, 0, 'Web Admin', NULL),
(45, '80355386580', '127.0.0.1', '2022-01-04 13:06:36', NULL, 0, 'Web Admin', NULL),
(46, '778035538658', '127.0.0.1', '2022-01-04 13:21:23', '2022-01-04 14:37:15', 1, 'Web Admin', NULL),
(47, '8035538658', '127.0.0.1', '2022-01-04 15:40:41', '2022-01-04 22:14:38', 1, 'Web Admin', NULL),
(48, '8035538658', '127.0.0.1', '2022-01-04 15:46:30', '2022-01-04 22:14:38', 1, 'Web Admin', NULL),
(49, '0810000000', '127.0.0.1', '2022-01-04 21:29:01', '2022-01-04 21:26:23', 1, 'Web Admin', NULL),
(50, '8035538658', '127.0.0.1', '2022-01-04 22:26:59', '2022-01-04 22:14:38', 1, 'Web Admin', NULL),
(51, '8035538658', '127.0.0.1', '2022-01-04 23:15:16', NULL, 0, 'Web Admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logistics_payment_details`
--

DROP TABLE IF EXISTS `logistics_payment_details`;
CREATE TABLE IF NOT EXISTS `logistics_payment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) DEFAULT NULL,
  `bank` varchar(33) NOT NULL DEFAULT '0',
  `account_number` varchar(33) NOT NULL DEFAULT '0',
  `account_name` varchar(80) NOT NULL DEFAULT '0',
  `reff` varchar(80) NOT NULL DEFAULT '0',
  `naration` text NOT NULL,
  `message` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logistics_payment_details`
--

INSERT INTO `logistics_payment_details` (`id`, `code`, `bank`, `account_number`, `account_name`, `reff`, `naration`, `message`, `status`, `created_at`) VALUES
(1, '202107051343136734458', 'ACCESS BANK NIGERIA', '0690000031', 'Forrest Green', '202107051343136734458 1625490732878-1699', 'Cashout for Truckers Field. Code:202107051343136734458', '', '1', '2021-07-05 14:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `maximum_negotiation`
--

DROP TABLE IF EXISTS `maximum_negotiation`;
CREATE TABLE IF NOT EXISTS `maximum_negotiation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_max` varchar(20) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maximum_negotiation`
--

INSERT INTO `maximum_negotiation` (`id`, `number_max`, `status`, `created_date`, `registeredby`) VALUES
(1, '3', '1', '2021-07-05 12:44:17', 'LMG415984');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `super_menu` varchar(5) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `icon` varchar(30) DEFAULT NULL,
  `desc_text` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_rights`
--

DROP TABLE IF EXISTS `menu_rights`;
CREATE TABLE IF NOT EXISTS `menu_rights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) DEFAULT NULL,
  `menu` varchar(50) NOT NULL,
  `super` varchar(5) DEFAULT NULL,
  `edit_right` varchar(5) DEFAULT '0',
  `delete_right` varchar(5) DEFAULT '0',
  `update_right` varchar(5) DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  `registeredby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `negotiation_count`
--

DROP TABLE IF EXISTS `negotiation_count`;
CREATE TABLE IF NOT EXISTS `negotiation_count` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(200) NOT NULL,
  `count` varchar(200) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negotiation_count`
--

INSERT INTO `negotiation_count` (`id`, `code`, `count`, `status`, `created_date`, `registeredby`) VALUES
(1, '202107240242622573435', '1', '1', '2021-07-27 06:43:34', 'LM654242');

-- --------------------------------------------------------

--
-- Table structure for table `negotiation_criterai`
--

DROP TABLE IF EXISTS `negotiation_criterai`;
CREATE TABLE IF NOT EXISTS `negotiation_criterai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `negotiate` varchar(200) NOT NULL,
  `percentage` varchar(200) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `truck` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negotiation_criterai`
--

INSERT INTO `negotiation_criterai` (`id`, `negotiate`, `percentage`, `status`, `created_date`, `registeredby`, `truck`) VALUES
(1, 'Yes', '7', '1', '2021-07-05 12:34:45', 'LM793687', NULL),
(2, 'Yes', '5', '1', '2021-07-12 02:54:14', 'LMG415984', '18'),
(3, 'Yes', '10', '1', '2021-07-24 15:34:11', 'LM592872', '8'),
(4, 'Yes', '10', '1', '2021-07-24 15:34:31', 'LM592872', '27');

-- --------------------------------------------------------

--
-- Table structure for table `negotiation_table`
--

DROP TABLE IF EXISTS `negotiation_table`;
CREATE TABLE IF NOT EXISTS `negotiation_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(200) NOT NULL,
  `count` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=259 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negotiation_table`
--

INSERT INTO `negotiation_table` (`id`, `code`, `count`, `amount`, `status`, `created_date`, `registeredby`) VALUES
(1, '202107051343136734458', '1', '35000', '0', '2021-07-05 13:43:52', 'LM381470'),
(2, '202107051343136734458', '3', '42500', '1', '2021-07-05 13:44:11', 'LM381470'),
(3, '2021070513392827560299', '4', '4000', '0', '2021-07-05 13:57:19', 'LM381470'),
(4, '202107079321715337388', '1', '30300', '1', '2021-07-07 09:36:52', ''),
(5, '202107079321715337388', '1', '30300', '1', '2021-07-07 09:36:52', ''),
(6, '202107079371733345910', '1', '30300', '1', '2021-07-07 09:37:54', ''),
(7, '202107079371733345910', '1', '30300', '1', '2021-07-07 09:37:54', ''),
(8, '202107079371733345910', '1', '30300', '1', '2021-07-07 09:38:43', ''),
(9, '202107079371733345910', '1', '30300', '1', '2021-07-07 09:38:43', ''),
(10, '202107079462330896006', '1', '60000', '1', '2021-07-07 09:46:35', ''),
(11, '202107079462330896006', '1', '60000', '1', '2021-07-07 09:46:35', ''),
(12, '202107079462330896006', '1', '60000', '1', '2021-07-07 09:57:10', ''),
(13, '202107079462330896006', '1', '60000', '1', '2021-07-07 09:57:11', ''),
(14, '2021070811083728725979', '1', '29300', '1', '2021-07-08 11:08:50', ''),
(15, '2021070811083728725979', '1', '29300', '1', '2021-07-08 11:08:51', ''),
(16, '2021070811083728725979', '1', '29300', '1', '2021-07-08 11:09:43', ''),
(17, '2021070811083728725979', '1', '29300', '1', '2021-07-08 11:09:43', ''),
(18, '2021070811372831685385', '1', '6000', '1', '2021-07-08 11:40:20', ''),
(19, '2021070811372831685385', '1', '6000', '1', '2021-07-08 11:40:21', ''),
(20, '2021070811414616334862', '1', '2900', '1', '2021-07-08 11:43:32', ''),
(21, '2021070811414616334862', '1', '2900', '1', '2021-07-08 11:43:33', ''),
(22, '2021070811414616334862', '1', '2900', '1', '2021-07-08 11:45:25', ''),
(23, '2021070811414616334862', '1', '2900', '1', '2021-07-08 11:45:26', ''),
(24, '2021070812302535875892', '1', '179300', '1', '2021-07-08 12:32:09', 'LM381470'),
(25, '2021070813005117142560', '1', '29300', '1', '2021-07-08 13:01:02', 'LM115985'),
(26, '2021070813005117142560', '1', '29300', '1', '2021-07-08 13:01:03', 'LM115985'),
(27, '2021070820411729393301', '1', '2300', '1', '2021-07-08 20:42:16', ''),
(28, '2021070820411729393301', '1', '2300', '1', '2021-07-08 20:42:17', ''),
(29, '2021070820411729393301', '1', '2300', '1', '2021-07-08 20:45:24', ''),
(30, '2021070820411729393301', '1', '2300', '1', '2021-07-08 20:45:24', ''),
(31, '2021070821194622013388', '1', '117300', '1', '2021-07-08 21:19:59', ''),
(32, '2021070821194622013388', '1', '117300', '1', '2021-07-08 21:19:59', ''),
(33, '2021070821194622013388', '1', '117300', '1', '2021-07-08 21:25:06', ''),
(34, '2021070821194622013388', '1', '117300', '1', '2021-07-08 21:25:07', ''),
(35, '2021070821255310297696', '1', '117300', '1', '2021-07-08 21:26:03', 'LM381470'),
(36, '2021070821255310297696', '1', '117300', '1', '2021-07-08 21:26:03', 'LM381470'),
(37, '2021070911051135815689', '1', '60500', '1', '2021-07-09 11:06:53', ''),
(38, '2021070911051135815689', '1', '60500', '1', '2021-07-09 11:06:54', ''),
(39, '20210709112626501704', '1', '19700', '1', '2021-07-09 11:27:18', ''),
(40, '20210709112626501704', '1', '19700', '1', '2021-07-09 11:27:19', ''),
(41, '2021070911414732061334', '1', '60500', '1', '2021-07-09 11:42:00', 'LM613587'),
(42, '2021070911414732061334', '1', '60500', '1', '2021-07-09 11:42:01', 'LM613587'),
(43, '2021071022423526770949', '1', '31700', '1', '2021-07-10 22:43:52', ''),
(44, '2021071022423526770949', '1', '31700', '1', '2021-07-10 22:43:53', ''),
(45, '2021071022460131602956', '1', '20300', '1', '2021-07-10 22:46:14', 'LM381470'),
(46, '2021071022460131602956', '1', '20300', '1', '2021-07-10 22:46:15', 'LM381470'),
(47, '2021071022460131602956', '1', '20300', '1', '2021-07-10 22:47:09', 'LM381470'),
(48, '2021071022460131602956', '1', '20300', '1', '2021-07-10 22:47:10', 'LM381470'),
(49, '202107122464733197731', '1', '851000', '1', '2021-07-12 02:46:57', 'LMG415984'),
(50, '202107122464733197731', '1', '851000', '1', '2021-07-12 02:46:57', 'LMG415984'),
(51, '202107122464733197731', '1', '851000', '1', '2021-07-12 02:52:23', 'LMG415984'),
(52, '202107122464733197731', '1', '851000', '1', '2021-07-12 02:52:23', 'LMG415984'),
(53, '202107122464733197731', '1', '851000', '1', '2021-07-12 02:52:41', 'LMG415984'),
(54, '202107122464733197731', '1', '851000', '1', '2021-07-12 02:52:41', 'LMG415984'),
(55, '202107123311823616240', '1', '1583300', '1', '2021-07-12 03:32:54', 'LMG415984'),
(56, '202107123311823616240', '1', '1583300', '1', '2021-07-12 03:32:55', 'LMG415984'),
(57, '20210712336497747401', '1', '1583300', '1', '2021-07-12 03:37:00', 'LMG415984'),
(58, '20210712336497747401', '1', '1583300', '1', '2021-07-12 03:37:01', 'LMG415984'),
(59, '202107143135329468064', '1', '6000', '1', '2021-07-14 03:14:38', 'LM381470'),
(60, '202107143135329468064', '1', '6000', '1', '2021-07-14 03:14:38', 'LM381470'),
(61, '202107143135329468064', '1', '6000', '1', '2021-07-14 03:19:39', 'LM381470'),
(62, '202107143135329468064', '1', '6000', '1', '2021-07-14 03:19:39', 'LM381470'),
(63, '202107143135329468064', '1', '6000', '1', '2021-07-14 03:36:49', 'LM381470'),
(64, '202107143135329468064', '1', '6000', '1', '2021-07-14 03:36:49', 'LM381470'),
(65, '202107143135329468064', '1', '6000', '1', '2021-07-14 03:39:43', 'LM381470'),
(66, '202107143135329468064', '1', '6000', '1', '2021-07-14 03:39:43', 'LM381470'),
(67, '202107143135329468064', '1', '6000', '1', '2021-07-14 03:39:46', 'LM381470'),
(68, '202107143135329468064', '1', '6000', '1', '2021-07-14 03:39:46', 'LM381470'),
(69, 'MjAyMTA3MTQzNTUzMDI5Njk4MDEx', '1', '', '1', '2021-07-14 03:55:43', 'LM381470'),
(70, 'MjAyMTA3MTQzNTUzMDI5Njk4MDEx', '1', '', '1', '2021-07-14 03:55:43', 'LM381470'),
(71, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:04:54', 'LM381470'),
(72, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:04:55', 'LM381470'),
(73, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:04:55', 'LM381470'),
(74, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:10:12', 'LM381470'),
(75, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:10:12', 'LM381470'),
(76, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:11:07', 'LM381470'),
(77, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:11:07', 'LM381470'),
(78, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:12:02', 'LM381470'),
(79, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:12:02', 'LM381470'),
(80, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:12:46', 'LM381470'),
(81, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:12:46', 'LM381470'),
(82, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:17:38', 'LM381470'),
(83, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:17:38', 'LM381470'),
(84, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:28:17', 'LM381470'),
(85, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:28:17', 'LM381470'),
(86, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:28:52', 'LM381470'),
(87, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:28:52', 'LM381470'),
(88, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:29:46', 'LM381470'),
(89, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:29:46', 'LM381470'),
(90, '', '1', '', '1', '2021-07-14 04:29:51', 'LM381470'),
(91, '', '1', '', '1', '2021-07-14 04:29:51', 'LM381470'),
(92, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:30:39', 'LM381470'),
(93, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:30:39', 'LM381470'),
(94, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:33:40', 'LM381470'),
(95, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:33:40', 'LM381470'),
(96, '', '1', '', '1', '2021-07-14 04:36:14', 'LM381470'),
(97, '', '1', '', '1', '2021-07-14 04:36:14', 'LM381470'),
(98, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:36:47', 'LM381470'),
(99, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:36:47', 'LM381470'),
(100, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:37:20', 'LM381470'),
(101, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:37:20', 'LM381470'),
(102, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:37:28', 'LM381470'),
(103, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:37:28', 'LM381470'),
(104, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:38:30', 'LM381470'),
(105, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:38:30', 'LM381470'),
(106, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:38:43', 'LM381470'),
(107, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:40:08', 'LM381470'),
(108, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:40:08', 'LM381470'),
(109, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:40:19', 'LM381470'),
(110, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:40:19', 'LM381470'),
(111, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:41:04', 'LM381470'),
(112, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:41:04', 'LM381470'),
(113, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:41:23', 'LM381470'),
(114, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:41:23', 'LM381470'),
(115, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:42:33', 'LM381470'),
(116, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:42:33', 'LM381470'),
(117, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:42:42', 'LM381470'),
(118, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:42:42', 'LM381470'),
(119, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:43:37', 'LM381470'),
(120, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:43:37', 'LM381470'),
(121, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:44:46', 'LM381470'),
(122, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:44:46', 'LM381470'),
(123, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:44:53', 'LM381470'),
(124, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:44:53', 'LM381470'),
(125, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:45:35', ''),
(126, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:45:35', ''),
(127, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:45:43', ''),
(128, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:45:43', ''),
(129, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:46:22', 'LM381470'),
(130, '202107144043414775698', '1', '141000', '1', '2021-07-14 04:46:25', 'LM381470'),
(131, 'MjAyMTA3MTQ0NTEyNDI2NTg2OTQ,', '1', '', '1', '2021-07-14 04:51:31', ''),
(132, 'MjAyMTA3MTQ0NTEyNDI2NTg2OTQ,', '1', '', '1', '2021-07-14 04:51:31', ''),
(133, 'MjAyMTA3MTQ0NTMyNDM2MDMyNTg3', '1', '', '1', '2021-07-14 04:53:41', 'LM381470'),
(134, 'MjAyMTA3MTQ0NTMyNDM2MDMyNTg3', '1', '', '1', '2021-07-14 04:53:41', 'LM381470'),
(135, '202107144541624869152', '1', '86000', '1', '2021-07-14 04:54:52', 'LM381470'),
(136, '202107144541624869152', '1', '86000', '1', '2021-07-14 04:54:55', 'LM381470'),
(137, '202107145022830372027', '1', '236000', '1', '2021-07-14 05:02:42', 'LM381470'),
(138, '202107145022830372027', '1', '236000', '1', '2021-07-14 05:02:45', 'LM381470'),
(139, '202107145031427232303', '1', '236000', '1', '2021-07-14 05:03:18', ''),
(140, '202107145031427232303', '1', '236000', '1', '2021-07-14 05:03:19', ''),
(141, '20210714504042900718', '1', '236000', '1', '2021-07-14 05:04:33', 'LM381470'),
(142, '20210714504042900718', '1', '236000', '1', '2021-07-14 05:04:36', 'LM381470'),
(143, '20210714504042900718', '1', '236000', '1', '2021-07-14 05:08:35', 'LM381470'),
(144, '20210714504042900718', '1', '236000', '1', '2021-07-14 05:08:37', 'LM381470'),
(145, '20210714504042900718', '1', '236000', '1', '2021-07-14 05:11:48', 'LM381470'),
(146, '20210714504042900718', '1', '236000', '1', '2021-07-14 05:11:51', 'LM381470'),
(147, '202107145131816937952', '1', '236000', '1', '2021-07-14 05:14:14', ''),
(148, '202107145131816937952', '1', '236000', '1', '2021-07-14 05:14:14', ''),
(149, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:20:18', ''),
(150, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:20:18', ''),
(151, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:21:29', ''),
(152, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:21:29', ''),
(153, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:32:08', ''),
(154, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:32:08', ''),
(155, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:58:26', ''),
(156, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:58:26', ''),
(157, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:59:19', ''),
(158, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:59:19', ''),
(159, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:59:55', ''),
(160, '202107152200912450608', '1', '21000', '1', '2021-07-15 02:59:55', ''),
(161, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:00:34', ''),
(162, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:00:34', ''),
(163, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:01:18', ''),
(164, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:01:19', ''),
(165, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:02:09', ''),
(166, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:02:09', ''),
(167, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:02:20', ''),
(168, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:02:21', ''),
(169, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:04:05', ''),
(170, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:04:05', ''),
(171, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:10:35', ''),
(172, '202107152200912450608', '1', '21000', '1', '2021-07-15 03:10:35', ''),
(173, '202107153110033303714', '1', '20000', '1', '2021-07-15 03:11:07', ''),
(174, '202107153110033303714', '1', '20000', '1', '2021-07-15 03:11:07', ''),
(175, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:15:05', ''),
(176, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:15:06', ''),
(177, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:16:44', ''),
(178, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:16:44', ''),
(179, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:17:15', ''),
(180, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:17:16', ''),
(181, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:19:06', ''),
(182, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:19:06', ''),
(183, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:33:24', ''),
(184, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:33:25', ''),
(185, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:33:49', ''),
(186, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:33:49', ''),
(187, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:34:17', ''),
(188, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:34:17', ''),
(189, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:34:36', ''),
(190, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:34:36', ''),
(191, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:35:00', ''),
(192, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:35:01', ''),
(193, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:35:35', ''),
(194, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:38:15', ''),
(195, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:38:15', ''),
(196, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:38:27', ''),
(197, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:38:27', ''),
(198, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:40:09', ''),
(199, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:40:09', ''),
(200, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:40:20', ''),
(201, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:40:26', ''),
(202, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:40:26', ''),
(203, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:40:59', ''),
(204, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:41:00', ''),
(205, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:41:59', ''),
(206, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:42:00', ''),
(207, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:42:25', ''),
(208, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:42:25', ''),
(209, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:43:01', ''),
(210, '202107153145624063786', '1', '131000', '1', '2021-07-15 03:43:01', ''),
(211, '202107232352634425637', '1', '', '1', '2021-07-23 03:41:48', ''),
(212, '202107232352634425637', '1', '', '1', '2021-07-23 03:41:49', ''),
(213, '202107233443421751943', '1', '17400', '1', '2021-07-23 03:44:40', ''),
(214, '202107233443421751943', '1', '17400', '1', '2021-07-23 03:44:40', ''),
(215, '202107233443421751943', '1', '17400', '1', '2021-07-23 04:27:25', ''),
(216, '202107233443421751943', '1', '17400', '1', '2021-07-23 04:27:26', ''),
(217, '202107233443421751943', '1', '17400', '1', '2021-07-23 04:27:37', 'LM654242'),
(218, '202107233443421751943', '1', '17400', '1', '2021-07-23 04:27:39', 'LM654242'),
(219, '202107240242622573435', '1', '', '0', '2021-07-24 16:50:44', 'LM654242'),
(220, '202107240242622573435', '3', '', '0', '2021-07-24 16:50:56', 'LM654242'),
(221, '202107240242622573435', '4', '', '0', '2021-07-24 16:51:18', 'LM654242'),
(222, '202107240242622573435', '1', '345', '0', '2021-07-24 16:58:17', 'LM654242'),
(223, '202107240242622573435', '3', '1234', '0', '2021-07-24 16:59:18', 'LM654242'),
(224, '202107240242622573435', '4', '1234', '0', '2021-07-24 17:03:35', 'LM654242'),
(225, '202107240242622573435', '1', '4567', '0', '2021-07-24 17:08:07', 'LM654242'),
(226, '202107240242622573435', '3', '870000', '1', '2021-07-24 17:08:23', 'LM654242'),
(227, '202107240242622573435', '4', '87', '0', '2021-07-24 17:08:31', 'LM654242'),
(228, '202107240242622573435', '1', '100000', '0', '2021-07-24 17:21:15', 'LM654242'),
(229, '202107240242622573435', '3', '1000000', '1', '2021-07-24 17:21:31', 'LM654242'),
(230, '202107240242622573435', '4', '1000000', '1', '2021-07-24 17:21:57', 'LM654242'),
(231, '202107240242622573435', '1', '870000', '1', '2021-07-24 17:23:37', 'LM654242'),
(232, '202107240242622573435', '3', '1000000', '1', '2021-07-24 17:25:43', 'LM654242'),
(233, '202107240242622573435', '4', '870000', '1', '2021-07-24 17:26:32', 'LM654242'),
(234, '202107240242622573435', '1', '870000', '1', '2021-07-24 17:26:50', 'LM654242'),
(235, '202107240242622573435', '1', '1000000', '1', '2021-07-24 17:27:39', 'LM654242'),
(236, '202107240242622573435', '3', '1000000', '1', '2021-07-24 17:29:09', 'LM654242'),
(237, '202107240242622573435', '4', '1000000', '1', '2021-07-24 17:29:42', 'LM654242'),
(238, '202107240242622573435', '1', '100', '0', '2021-07-24 17:30:26', 'LM654242'),
(239, '202107240242622573435', '3', '100', '0', '2021-07-24 17:31:58', 'LM654242'),
(240, '202107240242622573435', '4', '870000', '1', '2021-07-24 17:32:35', 'LM654242'),
(241, '202107240242622573435', '1', '100', '1', '2021-07-27 06:15:51', 'LM654242'),
(242, '202107240242622573435', '3', '100', '0', '2021-07-27 06:16:35', 'LM654242'),
(243, '202107240242622573435', '4', '100566', '0', '2021-07-27 06:16:50', 'LM654242'),
(244, '202107240242622573435', '1', '1', '1', '2021-07-27 06:20:29', 'LM654242'),
(245, '202107240242622573435', '3', '1', '0', '2021-07-27 06:24:40', 'LM654242'),
(246, '202107240242622573435', '4', '1', '0', '2021-07-27 06:26:20', 'LM654242'),
(247, '202107240242622573435', '1', '1', '1', '2021-07-27 06:27:51', 'LM654242'),
(248, '202107240242622573435', '3', '1', '0', '2021-07-27 06:31:38', 'LM654242'),
(249, '202107240242622573435', '1', '1', '1', '2021-07-27 06:32:03', 'LM654242'),
(250, '202107240242622573435', '3', '1', '0', '2021-07-27 06:41:08', 'LM654242'),
(251, '202107240242622573435', '1', '1', '1', '2021-07-27 06:42:03', 'LM654242'),
(252, '202107240242622573435', '3', '1', '0', '2021-07-27 06:42:05', 'LM654242'),
(253, '202107240242622573435', '4', '1', '0', '2021-07-27 06:42:06', 'LM654242'),
(254, '202107240242622573435', '1', '100000', '1', '2021-07-27 06:42:41', 'LM654242'),
(255, '202107240242622573435', '3', '10000000000', '1', '2021-07-27 06:42:50', 'LM654242'),
(256, '202107240242622573435', '1', '10000000000', '1', '2021-07-27 06:43:34', 'LM654242'),
(257, '', '1', '', '1', '2021-08-14 03:50:30', 'LMG415984'),
(258, '', '1', '', '1', '2021-08-14 03:51:11', 'LMG415984');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registeredby` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_to` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `read_status` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `code` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truck_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `message`, `title`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`, `code`, `truck_id`) VALUES
(1, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAF</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 100 LA</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MQ,,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MQ,,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:00:53', 'MQ,,', NULL),
(2, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> MAC</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 210 AX</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=Mg,,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=Mg,,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:04:18', 'Mg,,', NULL),
(3, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAF</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 342 LJ</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=Mw,,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=Mw,,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:06:50', 'Mw,,', NULL),
(4, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> FDS</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 243 HJ</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=NA,,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=NA,,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:10:39', 'NA,,', NULL),
(5, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> FRD</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 265 GH</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=NQ,,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=NQ,,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:13:34', 'NQ,,', NULL),
(6, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> Merc</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 600 LI</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=Ng,,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=Ng,,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:17:37', 'Ng,,', NULL),
(7, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAT</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 879 FG</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=Nw,,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=Nw,,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:23:32', 'Nw,,', NULL),
(8, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAT</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 648 LO</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=OA,,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=OA,,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:28:50', 'OA,,', NULL),
(9, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> GMT</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 986 IO</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=OQ,,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=OQ,,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:33:37', 'OQ,,', NULL),
(10, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> KIT</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 543 JJ</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTA,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTA,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:36:27', 'MTA,', NULL),
(11, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> HMT</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 687 JD</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTE,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTE,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:41:46', 'MTE,', NULL),
(12, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> LAD</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 23 AD</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTI,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTI,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:44:24', 'MTI,', NULL),
(13, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> HMT</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 344 WD</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTM,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTM,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:46:25', 'MTM,', NULL),
(14, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAF</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 439 KJ</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTQ,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTQ,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 19:49:29', 'MTQ,', NULL),
(15, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DRT</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 43 JH</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTU,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTU,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 20:08:36', 'MTU,', NULL),
(16, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> GMT</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 546 LH</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTY,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTY,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 20:44:51', 'MTY,', NULL),
(17, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAT</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 09 OI</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTc,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTc,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 20:50:17', 'MTc,', NULL),
(18, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAT </strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 349 KJ</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTg,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTg,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 20:53:41', 'MTg,', NULL),
(19, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> KIA</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> LA 426 HI</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Airflip</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTk,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTk,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM592872', 'LM835379', '1', '1', '2021-06-29 20:57:06', 'MTk,', NULL),
(20, '<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://www.loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Airflip...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Scheduled Truck Inspection. </span><br>\r\n	   \r\n  <span style=\"padding: 20px;font-size: 1.5em;\">Your truck with plate number: <strong> LA 546 LH</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> GMT</strong> </span>\r\n	\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> is scheduled for inspection</span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Please find inspector\'s details below</span>\r\n     \r\n      <span style=\"padding: 20px;font-size: 1.5em;\">Name <strong> kolawole ogunseye</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Phone<strong> 08132787287</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Email<strong> kolawoleogunseye7@gmail.com</strong> </span>\r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://www.loadme.services/restricted/view-truck?id=MTY,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://www.loadme.services/restricted/view-truck?id=MTY,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  \r\n</div>\r\n', 'Truck Inspection Alert', 'LMG415984', 'LM452937', '1', '1', '2021-07-01 09:19:19', 'MTY,', NULL),
(21, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> Hyundia</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> rty678jhu</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Truckers Field</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjA,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjA,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM793687', 'LM835379', '1', '1', '2021-07-01 09:27:49', 'MjA,', NULL);
INSERT INTO `notification` (`id`, `message`, `title`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`, `code`, `truck_id`) VALUES
(22, '<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Super User...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Scheduled Truck Inspection. </span><br>\r\n	   \r\n  <span style=\"padding: 20px;font-size: 1.5em;\">Your truck with plate number: <strong> LA 349 KJ</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAT </strong> </span>\r\n	\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> is scheduled for inspection</span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Please find inspector\'s details below</span>\r\n     \r\n      <span style=\"padding: 20px;font-size: 1.5em;\">Name <strong> Dan Ighor</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Phone<strong> 07032594273</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Email<strong> dan.ighor@apexchordinnovations.com</strong> </span>\r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTg,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTg,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  \r\n</div>\r\n', 'Truck Inspection Alert', 'LMG415984', 'LM524488', '1', '1', '2021-07-01 09:32:24', 'MTg,', NULL),
(23, '<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Super User...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Scheduled Truck Inspection. </span><br>\r\n	   \r\n  <span style=\"padding: 20px;font-size: 1.5em;\">Your truck with plate number: <strong> LA 426 HI</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> KIA</strong> </span>\r\n	\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> is scheduled for inspection</span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Please find inspector\'s details below</span>\r\n     \r\n      <span style=\"padding: 20px;font-size: 1.5em;\">Name <strong> Dan Ighor</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Phone<strong> 07032594273</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Email<strong> dan.ighor@apexchordinnovations.com</strong> </span>\r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTk,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTk,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  \r\n</div>\r\n', 'Truck Inspection Alert', 'LMG415984', 'LM524488', '1', '1', '2021-07-01 09:32:37', 'MTk,', NULL),
(24, '<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Airflip...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Scheduled Truck Inspection. </span><br>\r\n	   \r\n  <span style=\"padding: 20px;font-size: 1.5em;\">Your truck with plate number: <strong> LA 43 JH</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DRT</strong> </span>\r\n	\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> is scheduled for inspection</span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Please find inspector\'s details below</span>\r\n     \r\n      <span style=\"padding: 20px;font-size: 1.5em;\">Name <strong> kolawole ogunseye</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Phone<strong> 08132787287</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Email<strong> kolawoleogunseye7@gmail.com</strong> </span>\r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTU,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTU,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  \r\n</div>\r\n', 'Truck Inspection Alert', 'LMG415984', 'LM452937', '1', '1', '2021-07-01 09:33:05', 'MTU,', NULL),
(25, '<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Airflip...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Scheduled Truck Inspection. </span><br>\r\n	   \r\n  <span style=\"padding: 20px;font-size: 1.5em;\">Your truck with plate number: <strong> LA 439 KJ</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAF</strong> </span>\r\n	\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> is scheduled for inspection</span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Please find inspector\'s details below</span>\r\n     \r\n      <span style=\"padding: 20px;font-size: 1.5em;\">Name <strong> kolawole ogunseye</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Phone<strong> 08132787287</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Email<strong> kolawoleogunseye7@gmail.com</strong> </span>\r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTQ,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTQ,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  \r\n</div>\r\n', 'Truck Inspection Alert', 'LMG415984', 'LM452937', '1', '1', '2021-07-01 09:33:19', 'MTQ,', NULL),
(26, '<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Airflip...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Scheduled Truck Inspection. </span><br>\r\n	   \r\n  <span style=\"padding: 20px;font-size: 1.5em;\">Your truck with plate number: <strong> LA 344 WD</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> HMT</strong> </span>\r\n	\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> is scheduled for inspection</span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Please find inspector\'s details below</span>\r\n     \r\n      <span style=\"padding: 20px;font-size: 1.5em;\">Name <strong> kolawole ogunseye</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Phone<strong> 08132787287</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\">Email<strong> kolawoleogunseye7@gmail.com</strong> </span>\r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTM,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MTM,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  \r\n</div>\r\n', 'Truck Inspection Alert', 'LMG415984', 'LM452937', '1', '1', '2021-07-01 09:33:33', 'MTM,', NULL),
(27, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAF</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> 89yyuu89</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Truckers Field</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjE,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjE,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM793687', 'LM835379', '1', '1', '2021-07-01 09:35:02', 'MjE,', NULL),
(28, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> DAF PORT HARCOURT</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> PH 100 PH</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Super User</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjI,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjI,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LMG415984', 'LM835379', '1', '1', '2021-07-01 09:58:43', 'MjI,', NULL),
(29, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> Mercedes Benz</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> tyu456gh</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Truckers Field</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjM,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjM,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM793687', 'LM835379', '1', '1', '2021-07-05 12:10:09', 'MjM,', NULL),
(30, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> Mitsubushi</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> ert345huj</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Truckers Field</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjQ,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjQ,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM793687', 'LM835379', '1', '1', '2021-07-05 12:18:04', 'MjQ,', NULL),
(31, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> Test Truck</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> 09876</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Truckers Field</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjU,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjU,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM793687', 'LM835379', '1', '1', '2021-07-12 01:42:43', 'MjU,', NULL),
(32, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://loadme.services/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Uploaded need approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Brand: <strong> test truck 2</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Plate Number: <strong> 12122</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner: <strong> Truckers Field</strong> </span>\r\n	 \r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjY,\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://loadme.services/restricted/view-truck?id=MjY,\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Approval', 'LM793687', 'LM835379', '1', '1', '2021-07-12 01:54:19', 'MjY,', NULL),
(33, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://127.0.0.1/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Owner Registeration needs approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner Name: <strong> AGRICTRADEVEST</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Account Number: <strong> LM654242</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner Phone: <strong> 08035538658</strong> </span>\r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://127.0.0.1/restricted/all-truck-owners?id=LM654242\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://127.0.0.1/restricted/all-truck-owners?id=LM654242\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Owner Approval', '', 'LM835379', '1', '1', '2021-07-14 01:25:47', 'LM654242', NULL),
(34, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://127.0.0.1/restricted/graphicality/LoadME3.jpg\"  alt=\"graphicality/LoadME3.jpg\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Owner Registeration needs approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner Name: <strong> AGRICTRADEVEST123</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Account Number: <strong> LM558182</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner Phone: <strong> 08140609393</strong> </span>\r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://127.0.0.1/restricted/all-truck-owners?id=LM558182\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://127.0.0.1/restricted/all-truck-owners?id=LM558182\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Owner Approval', '', 'LM835379', '1', '1', '2021-08-19 03:54:30', 'LM558182', NULL),
(35, ' \r\n\r\n<div class=\"email-background\" style=\"background: #eee;padding: 10px;\">\r\n   \r\n  <div class=\"email-container\" style=\"max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;\"> <img src=\"http://127.0.0.1/restricted/graphicallity/kini.png\"  alt=\"graphicallity/kini.png\"  width=\"50px\" height=\"50px\" style=\"max-width: 30%;\">\r\n	   \r\n	    <h3 style=\"5px;font-size: 2.0em;\">Hi Muyiwa Adegorite...,   </h3>\r\n    <span style=\"padding: 20px;font-size: 1.3em;\">Truck Owner Registeration needs approval. </span><br>\r\n	   \r\n \r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner Name: <strong> Olumide Francis</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Account Number: <strong> LM218288</strong> </span>\r\n	 <span style=\"padding: 20px;font-size: 1.5em;\"> Truck Owner Phone: <strong> sssss8035538658</strong> </span>\r\n   \r\n    <span> \r\n	 <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://127.0.0.1/restricted/all-truck-owners?id=LM218288\" style=\"text-decoration: none;color: white;\">View Details Now</a></p>\r\n \r\n   </span>\r\n   \r\n    <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\">Please login to the portal. </p>\r\n    <div class=\"cta\" style=\"padding: 5px;background: #26466D;margin: 0 auto;\">\r\n      <p style=\"padding: 20px;font-weight: 300;font-size: 1.2em;\"><a href=\"https://127.0.0.1/restricted/all-truck-owners?id=LM218288\" style=\"text-decoration: none;color: white;\">Visit Portal Now</a></p>\r\n    </div>\r\n\r\n\r\n  </div>\r\n  <div class=\"footer-links\" style=\"max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;\">\r\n    <a href=\"/xx\" style=\"color: #26466D;\">about</a> | <a href=\"/xx\" style=\"color: #26466D;\">unsubsribe</a> | <a href=\"/xx\" style=\"color: #26466D;\">t&amp;c s</a>\r\n  </div>\r\n</div>\r\n', 'Truck Owner Approval', '', 'LM835379', '1', '1', '2022-01-02 23:00:17', 'LM218288', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `percentage_commission`
--

DROP TABLE IF EXISTS `percentage_commission`;
CREATE TABLE IF NOT EXISTS `percentage_commission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truck_owners` varchar(200) NOT NULL,
  `percentage` varchar(200) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `percentage_commission`
--

INSERT INTO `percentage_commission` (`id`, `truck_owners`, `percentage`, `status`, `created_date`, `registeredby`) VALUES
(1, 'LM592872', '5', '1', '2021-07-09 11:14:09', 'LMG415984'),
(2, 'LM793687', '1', '1', '2021-07-05 13:02:11', 'LMG415984'),
(3, 'LM477753', '2', '1', '2021-07-05 13:04:17', 'LMG415984');

-- --------------------------------------------------------

--
-- Table structure for table `price_per_km`
--

DROP TABLE IF EXISTS `price_per_km`;
CREATE TABLE IF NOT EXISTS `price_per_km` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truck_type` varchar(20) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_per_km`
--

INSERT INTO `price_per_km` (`id`, `truck_type`, `capacity`, `amount`, `status`, `created_date`, `registeredby`) VALUES
(1, '3', '7', '1000', '1', '2021-06-29 14:55:09', 'LMG415984'),
(2, '3', '8', '1000', '1', '2021-06-29 14:55:19', 'LMG415984'),
(3, '3', '9', '1000', '1', '2021-06-29 14:55:28', 'LMG415984'),
(4, '3', '10', '1000', '1', '2021-06-29 14:55:45', 'LMG415984'),
(5, '3', '11', '1000', '1', '2021-06-29 14:55:55', 'LMG415984'),
(6, '3', '12', '1000', '1', '2021-06-29 14:56:09', 'LMG415984'),
(7, '3', '13', '1000', '1', '2021-06-29 14:56:24', 'LMG415984'),
(8, '3', '14', '1000', '1', '2021-06-29 14:56:44', 'LMG415984'),
(9, '3', '15', '1000', '1', '2021-06-29 14:56:57', 'LMG415984'),
(10, '1', '2', '1000', '1', '2021-06-29 14:57:17', 'LMG415984'),
(11, '1', '3', '1000', '1', '2021-06-29 14:57:28', 'LMG415984'),
(12, '1', '4', '1000', '1', '2021-06-29 14:57:40', 'LMG415984'),
(13, '1', '5', '1000', '1', '2021-06-29 14:57:55', 'LMG415984'),
(14, '1', '6', '1000', '1', '2021-06-29 14:58:06', 'LMG415984'),
(16, '6', '16', '1200', '1', '2021-06-29 14:59:13', 'LMG415984'),
(17, '6', '17', '1200', '1', '2021-06-29 14:59:27', 'LMG415984'),
(18, '6', '18', '1200', '1', '2021-06-29 14:59:45', 'LMG415984'),
(19, '6', '19', '1200', '1', '2021-06-29 14:59:57', 'LMG415984'),
(20, '6', '20', '1500', '1', '2021-06-29 15:00:09', 'LMG415984'),
(21, '6', '21', '1500', '1', '2021-06-29 15:00:23', 'LMG415984'),
(22, '6', '22', '1500', '1', '2021-06-29 15:00:39', 'LMG415984'),
(23, '4', '23', '2000', '1', '2021-06-29 15:00:58', 'LMG415984'),
(24, '4', '24', '2000', '1', '2021-06-29 15:01:11', 'LMG415984'),
(25, '4', '25', '2000', '1', '2021-06-29 15:01:26', 'LMG415984'),
(26, '4', '26', '2000', '1', '2021-06-29 15:01:41', 'LMG415984'),
(27, '4', '27', '2000', '1', '2021-06-29 15:01:51', 'LMG415984'),
(28, '2', '36', '1400', '1', '2021-06-29 15:02:14', 'LMG415984'),
(29, '2', '37', '1400', '1', '2021-06-29 15:02:24', 'LMG415984'),
(30, '2', '38', '1500', '1', '2021-06-29 15:02:44', 'LMG415984'),
(31, '5', '28', '1700', '1', '2021-06-29 15:03:11', 'LMG415984'),
(32, '5', '29', '1700', '1', '2021-06-29 15:03:22', 'LMG415984'),
(33, '5', '30', '1700', '1', '2021-06-29 15:07:37', 'LMG415984'),
(34, '5', '31', '1700', '1', '2021-06-29 15:07:46', 'LMG415984'),
(35, '5', '32', '1700', '1', '2021-06-29 15:07:57', 'LMG415984'),
(36, '5', '33', '1700', '1', '2021-06-29 15:08:14', 'LMG415984'),
(37, '5', '34', '1700', '1', '2021-06-29 15:08:29', 'LMG415984'),
(38, '5', '35', '1700', '1', '2021-06-29 15:08:40', 'LMG415984');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

DROP TABLE IF EXISTS `privilege`;
CREATE TABLE IF NOT EXISTS `privilege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_number` varchar(250) NOT NULL,
  `rights` text NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `account_number`, `rights`, `status`, `created_date`, `registeredby`) VALUES
(1, 'LM835379', 'delete', '1', '2021-06-29 14:20:42', 'LMG415984'),
(2, 'LM835379', 'activate', '1', '2021-06-29 14:20:42', 'LMG415984'),
(3, 'LM835379', 'deactivate', '1', '2021-06-29 14:20:42', 'LMG415984'),
(4, 'LM835379', 'transfer', '1', '2021-06-29 14:20:42', 'LMG415984'),
(5, 'LM835379', 'comment', '1', '2021-06-29 14:20:42', 'LMG415984'),
(6, 'LM835379', 'view', '1', '2021-06-29 14:20:42', 'LMG415984'),
(7, 'LM835379', 'download', '1', '2021-06-29 14:20:42', 'LMG415984'),
(8, 'LM835379', 'approve', '1', '2021-06-29 14:20:42', 'LMG415984'),
(9, 'LM835379', 'grant', '1', '2021-06-29 14:20:42', 'LMG415984'),
(10, 'LM835379', 'returned', '1', '2021-06-29 14:20:42', 'LMG415984'),
(11, 'LM835379', 'share', '1', '2021-06-29 14:20:42', 'LMG415984'),
(12, 'LM835379', 'update', '1', '2021-06-29 14:20:42', 'LMG415984'),
(13, 'LM452937', 'inspect', '1', '2021-06-29 14:29:24', 'LMG415984'),
(14, 'LMG415984', 'delete', '1', '2021-06-29 14:20:42', 'LMG415984'),
(15, 'LMG415984', 'activate', '1', '2021-06-29 14:20:42', 'LMG415984'),
(16, 'LMG415984', 'deactivate', '1', '2021-06-29 14:20:42', 'LMG415984'),
(17, 'LMG415984', 'transfer', '1', '2021-06-29 14:20:42', 'LMG415984'),
(18, 'LMG415984', 'comment', '1', '2021-06-29 14:20:42', 'LMG415984'),
(19, 'LMG415984', 'view', '1', '2021-06-29 14:20:42', 'LMG415984'),
(20, 'LMG415984', 'download', '1', '2021-06-29 14:20:42', 'LMG415984'),
(21, 'LMG415984', 'approve', '1', '2021-06-29 14:20:42', 'LMG415984'),
(22, 'LMG415984', 'grant', '1', '2021-06-29 14:20:42', 'LMG415984'),
(23, 'LMG415984', 'returned', '1', '2021-06-29 14:20:42', 'LMG415984'),
(24, 'LMG415984', 'share', '1', '2021-06-29 14:20:42', 'LMG415984'),
(25, 'LMG415984', 'update', '1', '2021-06-29 14:20:42', 'LMG415984'),
(26, 'LM452937', 'inspect', '1', '2021-06-29 14:29:24', 'LMG415984'),
(27, 'LMG415984', 'unblock', '1', '2021-06-29 14:20:42', 'LMG415984'),
(28, 'LM524488', 'inspect', '1', '2021-07-01 08:20:21', 'LMG415984'),
(29, 'LM524488', 'view', '1', '2021-07-01 08:20:21', 'LMG415984'),
(30, 'LMG415984', 'inspect', '1', '2021-06-29 14:20:42', 'LMG415984'),
(31, 'LM452937', 'inspect', '1', '2021-07-08 15:19:00', 'LMG415984'),
(32, 'LM452937', 'inspect', '1', '2021-07-08 15:19:00', 'LMG415984');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

DROP TABLE IF EXISTS `product_type`;
CREATE TABLE IF NOT EXISTS `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `uom` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `abbr` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `radius`
--

DROP TABLE IF EXISTS `radius`;
CREATE TABLE IF NOT EXISTS `radius` (
  `id` int(22) NOT NULL,
  `radius` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `created_date` varchar(50) DEFAULT NULL,
  `registeredby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `search_result`
--

DROP TABLE IF EXISTS `search_result`;
CREATE TABLE IF NOT EXISTS `search_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(200) NOT NULL,
  `loading` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `pick_up_date` varchar(200) NOT NULL,
  `product` varchar(200) NOT NULL,
  `truck_type` varchar(200) NOT NULL,
  `truck_capacity` varchar(200) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `cashed` int(10) NOT NULL DEFAULT 1,
  `longi1` varchar(50) DEFAULT NULL,
  `lati1` varchar(50) DEFAULT NULL,
  `longi2` varchar(50) DEFAULT NULL,
  `lati2` varchar(50) DEFAULT NULL,
  `distance` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `truck_id` varchar(30) DEFAULT NULL,
  `truck_owner` varchar(100) DEFAULT NULL,
  `trip_status` int(10) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_result`
--

INSERT INTO `search_result` (`id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `status`, `created_date`, `registeredby`, `cashed`, `longi1`, `lati1`, `longi2`, `lati2`, `distance`, `amount`, `truck_id`, `truck_owner`, `trip_status`) VALUES
(1, '202107235044833584418', 'Ibadan, Oluyole, Nigeria', 'Mokola Road, Ibadan, Nigeria', '11/02/2021', 'Charcoal', '1', '6', '0', '2021-07-23 05:04:45', 'LM654242', 1, '3.9470396', '7.3775355', '3.8895903', '7.4049859', '11.1', '17000', '27', 'LM592872', 1),
(2, '202107235045023073498', 'Ibadan, Oluyole, Nigeria', 'Mokola Road, Ibadan, Nigeria', '11/02/2021', 'Charcoal', '1', '6', '0', '2021-07-23 05:04:48', 'LM654242', 1, '3.9470396', '7.3775355', '3.8895903', '7.4049859', '11.1', '17000', '27', 'LM592872', 1),
(3, '20210723506378776613', 'Ibadan - Lagos Expressway, Oluyole, Nigeria', 'Mokola Road, Ibadan, Nigeria', '11/02/2021', 'Charcoal', '6', '20', '2', '2021-07-23 05:06:34', 'LM654242', 1, '3.7943195', '7.1849051', '3.8895903', '7.4049859', '30.4', '52700', '11', 'LM592872', 1),
(4, '20210723535501563212', 'Ibadan, Oluyole, Nigeria', 'Mokola Road, Ibadan, Nigeria', '11/02/2021', 'Charcoal', '6', '20', '2', '2021-07-23 05:35:47', 'LM654242', 1, '3.9470396', '7.3775355', '3.8895903', '7.4049859', '11.1', '24200', '11', 'LM592872', 1),
(5, '20210723542371890195', 'Oluyole Estate Extension Central Mosque, Off Alaafine Avenue, Ibadan, Nigeria', 'Bariga, Oworonshoki, Nigeria', '11/02/2021', 'Charcoal', '3', '13', '2', '2021-07-23 05:42:33', 'LM654242', 1, '3.8389103', '7.3646674', '3.4006205', '6.5536278', '122', '127800', '4', 'LM592872', 1),
(6, '202107235463834010273', 'Olumide Ige Street, Lagos, Nigeria', 'Oluwaseun Estate, Lagos, Nigeria', '06/29/2021 1:44 AM', 'Charcoal', '6', '16', '2', '2021-07-23 05:46:34', 'LM654242', 1, '3.3708776', '6.6225482', '3.2784832', '6.6337', '19.8', '25700', '9', 'LM592872', 1),
(7, '202107235510817255640', 'Olutoyese Park, Ago-Iwoye, Nigeria', 'Ago Iwoye Market, Odenusi Street, Ago-Iwoye, Nigeria', '11/02/2021', 'Charcoal', '6', '20', '0', '2021-07-23 05:51:04', 'LM654242', 1, '3.9086704', '6.9469051', '3.9135032', '6.9386229', '1.6', '9200', '11', 'LM592872', 1),
(8, '202107235520022910772', 'Olutoyese Park, Ago-Iwoye, Nigeria', 'Ago Iwoye Market, Odenusi Street, Ago-Iwoye, Nigeria', '11/02/2021', 'Charcoal', '6', '20', '0', '2021-07-23 05:51:58', 'LM654242', 1, '3.9086704', '6.9469051', '3.9135032', '6.9386229', '1.6', '9200', '11', 'LM592872', 1),
(9, '202107235524020711953', 'Oluwakayode Jacobs Crescent, Lagos, Nigeria', 'Oba Oniru Palace, Lagos, Nigeria', '11/02/2021', 'Charcoal', '6', '16', '0', '2021-07-23 05:52:37', 'LM654242', 1, '3.4799745', '6.4361785', '3.4509323', '6.4311026', '8.7', '12500', '9', 'LM592872', 1),
(10, '202107235595436098346', 'Oluwakayode Jacobs Crescent, Lagos, Nigeria', 'Oba Oniru Palace, Lagos, Nigeria', '11/02/2021', 'Charcoal', '6', '16', '0', '2021-07-23 05:59:51', 'LM654242', 1, '3.4799745', '6.4361785', '3.4509323', '6.4311026', '8.7', '12500', '9', 'LM592872', 1),
(11, '202107235595624202951', 'Oluwakayode Jacobs Crescent, Lagos, Nigeria', 'Oba Oniru Palace, Lagos, Nigeria', '11/02/2021', 'Charcoal', '6', '16', '0', '2021-07-23 05:59:54', 'LM654242', 1, '3.4799745', '6.4361785', '3.4509323', '6.4311026', '8.7', '12500', '9', 'LM592872', 1),
(12, '202107236013218548151', 'Oluyole, Ibadan, Nigeria', 'Mokola Road, Ibadan, Nigeria', '11/02/2021', 'Charcoal', '4', '25', '0', '2021-07-23 06:01:30', 'LM654242', 1, '3.8502617', '7.3621978', '3.8895903', '7.4049859', '9.3', '', '', '', 1),
(13, '20210723602402177830', 'Mokola Road, Ibadan, Nigeria', 'Ikeja, Nigeria', '11/02/2021', 'Charcoal', '6', '20', '0', '2021-07-23 06:02:37', 'LM654242', 1, '3.8895903', '7.4049859', '3.3514863', '6.601838', '118', '184700', '11', 'LM592872', 1),
(14, '202107236063534487859', 'Oluyole, Ibadan, Nigeria', 'Ikeja, Nigeria', '06/29/2021 1:44 AM', 'Charcoal', '1', '6', '0', '2021-07-23 06:06:32', 'LM654242', 1, '3.8502617', '7.3621978', '3.3514863', '6.601838', '116', '122000', '27', 'LM592872', 1),
(15, '202107236093013787744', 'Oluyole, Ibadan, Nigeria', 'Ikeja, Nigeria', '06/29/2021 1:44 AM', 'Charcoal', '1', '6', '0', '2021-07-23 06:09:28', 'LM654242', 1, '3.8502617', '7.3621978', '3.3514863', '6.601838', '116', '122000', '27', 'LM592872', 1),
(16, '20210723610089305584', 'Benue Links Motor Park, Nnamdi Azikiwe Express Way, Abuja, Nigeria', 'Adamawa Plaza, First Avenue, Abuja, Nigeria', '11/02/2021', 'Charcoal', '4', '23', '0', '2021-07-23 06:10:05', 'LM654242', 1, '7.4763311', '9.0234336', '7.4938345', '9.0670192', '7.8', '18000', '12', 'LM592872', 1),
(17, '202107236103130997683', 'Benue Links Motor Park, Nnamdi Azikiwe Express Way, Abuja, Nigeria', 'Adamawa Plaza, First Avenue, Abuja, Nigeria', '11/02/2021', 'Charcoal', '4', '23', '0', '2021-07-23 06:10:28', 'LM654242', 1, '7.4763311', '9.0234336', '7.4938345', '9.0670192', '7.8', '18000', '12', 'LM592872', 1),
(18, '202107236105423799805', 'Benue Links Motor Park, Nnamdi Azikiwe Express Way, Abuja, Nigeria', 'Adamawa Plaza, First Avenue, Abuja, Nigeria', '11/02/2021', 'Charcoal', '4', '24', '0', '2021-07-23 06:10:52', 'LM654242', 1, '7.4763311', '9.0234336', '7.4938345', '9.0670192', '7.8', '20000', '13', 'LM592872', 1),
(19, '202107236114634634291', 'Omole Phase 1, Ikeja, Nigeria', 'Tope Nigeria Enterprises, Lagos, Nigeria', '06/29/2021 11:07 AM', 'Charcoal', '3', '13', '4', '2021-07-23 06:11:43', 'LM654242', 1, '3.3557854', '6.6375968', '3.3482739', '6.5579797', '13.7', '18800', '4', 'LM592872', 1),
(20, '202107240242622573435', 'Oluyole, Ibadan, Nigeria', 'Maiduguri Road, Kano, Nigeria', '11/02/2021', 'Charcoal', '1', '6', '6', '2021-07-24 00:24:24', 'LM654242', 1, '3.8502617', '7.3621978', '8.5890656', '11.9633001', '864', '870000', '27', 'LM592872', 1),
(21, '2021072415354821553401', 'Oluyole, Ibadan, Nigeria', 'Omole Phase II, Lagos, Nigeria', '07/24/2021 3:35 PM', 'Charcoal', '1', '6', '0', '2021-07-24 15:35:48', 'LM592872', 1, '3.8502617', '7.3621978', '3.366289', '6.6307405', '113', '119000', '8', 'LM592872', 1),
(22, '2021072421361516578968', 'Oluyole, Ibadan, Nigeria', 'Badagry, Nigeria', '11/02/2021', 'Charcoal', '1', '6', '2', '2021-07-24 21:36:13', 'LM654242', 1, '3.8502617', '7.3621978', '2.8876436', '6.4315805', '186', '192000', '27', 'LM592872', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stake_holder`
--

DROP TABLE IF EXISTS `stake_holder`;
CREATE TABLE IF NOT EXISTS `stake_holder` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `position` varchar(3) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `unique_id` text DEFAULT NULL,
  `encrypted_password` text DEFAULT NULL,
  `salt` text DEFAULT NULL,
  `irrelivant` text DEFAULT NULL,
  `password_update` varchar(5) DEFAULT '0',
  `updated_at` datetime DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `mda` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `name`) VALUES
(1, 'Abia State'),
(2, 'Adamawa State'),
(3, 'Akwa Ibom State'),
(4, 'Anambra State'),
(5, 'Bauchi State'),
(6, 'Bayelsa State'),
(7, 'Benue State'),
(8, 'Borno State'),
(9, 'Cross River State'),
(10, 'Delta State'),
(11, 'Ebonyi State'),
(12, 'Edo State'),
(13, 'Ekiti State'),
(14, 'Enugu State'),
(15, 'FCT'),
(16, 'Gombe State'),
(17, 'Imo State'),
(18, 'Jigawa State'),
(19, 'Kaduna State'),
(20, 'Kano State'),
(21, 'Katsina State'),
(22, 'Kebbi State'),
(23, 'Kogi State'),
(24, 'Kwara State'),
(25, 'Lagos State'),
(26, 'Nasarawa State'),
(27, 'Niger State'),
(28, 'Ogun State'),
(29, 'Ondo State'),
(30, 'Osun State'),
(31, 'Oyo State'),
(32, 'Plateau State'),
(33, 'Rivers State'),
(34, 'Sokoto State'),
(35, 'Taraba State'),
(36, 'Yobe State'),
(37, 'Zamfara State');

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

DROP TABLE IF EXISTS `tracker`;
CREATE TABLE IF NOT EXISTS `tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(40) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 0,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracker`
--

INSERT INTO `tracker` (`id`, `code`, `status`, `created_date`) VALUES
(1, '', 1, '2021-07-05 13:55:12'),
(2, '', 1, '2021-07-08 13:04:35'),
(3, '', 1, '2021-07-08 20:48:29'),
(4, '', 1, '2021-07-09 12:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_information`
--

DROP TABLE IF EXISTS `transaction_information`;
CREATE TABLE IF NOT EXISTS `transaction_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(200) NOT NULL,
  `truck_owner` varchar(200) NOT NULL,
  `trip_status` int(10) NOT NULL DEFAULT 1,
  `amount` varchar(200) NOT NULL,
  `commissiononfee` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `owners_share` varchar(200) NOT NULL,
  `loadme_share` varchar(200) NOT NULL,
  `customer` varchar(200) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `cashed` int(10) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_information`
--

INSERT INTO `transaction_information` (`id`, `code`, `truck_owner`, `trip_status`, `amount`, `commissiononfee`, `message`, `owners_share`, `loadme_share`, `customer`, `status`, `created_date`, `registeredby`, `cashed`) VALUES
(1, '202107240242622573435', 'LM592872', 1, '10000000000', '10', '', '9500000000', '500000000', 'LM654242', '0', '2021-07-24 04:13:23', 'LM654242', 1),
(2, '202107236114634634291', 'Airflip', 1, '18800', '10', 'Transaction not found', '18790', '0', 'LM654242', '0', '2021-07-24 04:36:56', 'LM654242', 1),
(3, '202107236105423799805', 'LM592872', 1, '20000', '10', '', '19990', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(4, '202107236103130997683', 'LM592872', 1, '18000', '10', '', '17990', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(5, '20210723610089305584', 'LM592872', 1, '18000', '10', '', '17990', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(6, '202107236093013787744', 'LM592872', 1, '122000', '10', '', '121990', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(7, '202107236063534487859', 'LM592872', 1, '122000', '10', '', '121990', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(8, '20210723602402177830', 'LM592872', 1, '184700', '10', '', '184690', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(9, '202107236013218548151', '', 1, '', '10', '', '-10', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(10, '202107235595624202951', 'LM592872', 1, '12500', '10', '', '12490', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(11, '202107235595436098346', 'LM592872', 1, '12500', '10', '', '12490', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(12, '202107235524020711953', 'LM592872', 1, '12500', '10', '', '12490', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(13, '202107235520022910772', 'LM592872', 1, '9200', '10', '', '9190', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(14, '202107235510817255640', 'LM592872', 1, '9200', '10', '', '9190', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(15, '202107235463834010273', 'LM592872', 1, '25700', '10', '', '25690', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(16, '20210723542371890195', 'LM592872', 1, '127800', '10', '', '127790', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(17, '20210723535501563212', 'LM592872', 1, '24200', '10', '', '24190', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(18, '20210723506378776613', 'LM592872', 1, '52700', '10', '', '52690', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(19, '202107235045023073498', 'LM592872', 1, '17000', '10', '', '16990', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(20, '202107235044833584418', 'LM592872', 1, '17000', '10', '', '16990', '0', 'LM654242', '0', '2021-07-24 17:40:11', 'LM654242', 1),
(21, '2021072421361516578968', 'LM592872', 1, '192000', '10', '', '182400', '9600', 'LM654242', '0', '2021-07-24 21:36:27', 'LM654242', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trip_record`
--

DROP TABLE IF EXISTS `trip_record`;
CREATE TABLE IF NOT EXISTS `trip_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `lati` varchar(100) NOT NULL,
  `longi` varchar(100) NOT NULL,
  `status` varchar(2) DEFAULT '1',
  `trip_started` datetime NOT NULL,
  `trip_ended` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `end_longi` varchar(100) DEFAULT NULL,
  `end_lati` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

DROP TABLE IF EXISTS `truck`;
CREATE TABLE IF NOT EXISTS `truck` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_number` varchar(250) NOT NULL,
  `truck_brand` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `truck_plate_number` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `total_capacity` varchar(250) NOT NULL,
  `truck_type` varchar(250) NOT NULL,
  `calibration_chart` text NOT NULL,
  `road_worthiness_cert` text NOT NULL,
  `commercial_licence` text NOT NULL,
  `git_insurance` text NOT NULL,
  `front_view_1` text NOT NULL,
  `front_view_2` text NOT NULL,
  `side_view_1` text NOT NULL,
  `side_view_2` text NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `driver` varchar(10) DEFAULT '-',
  `ccaution` varchar(6) DEFAULT NULL,
  `extinguisher` varchar(6) DEFAULT NULL,
  `jacket` varchar(6) DEFAULT NULL,
  `extratyre` varchar(6) DEFAULT NULL,
  `hat` varchar(6) DEFAULT NULL,
  `boot` varchar(6) DEFAULT NULL,
  `inspector` varchar(30) DEFAULT NULL,
  `inspection_status` int(6) NOT NULL DEFAULT 0,
  `code` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `lati` varchar(30) DEFAULT NULL,
  `longi` varchar(30) DEFAULT NULL,
  `status_value` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`, `state`, `total_capacity`, `truck_type`, `calibration_chart`, `road_worthiness_cert`, `commercial_licence`, `git_insurance`, `front_view_1`, `front_view_2`, `side_view_1`, `side_view_2`, `status`, `created_date`, `registeredby`, `driver`, `ccaution`, `extinguisher`, `jacket`, `extratyre`, `hat`, `boot`, `inspector`, `inspection_status`, `code`, `location`, `lati`, `longi`, `status_value`) VALUES
(1, 'LM592872', 'DAF', '1897', 'LA 100 LA', '25', '2', '1', 'graphicallity/16653239233507650NQR.png', 'graphicallity/16653239233507650NQR.png', 'graphicallity/16653239233507650NQR.png', 'graphicallity/16653239233507650NQR.png', 'graphicallity/16653239233507650NQR.png', 'graphicallity/16653239233507650NQR.png', 'graphicallity/16653239233507650NQR.png', 'graphicallity/16653239233507650NQR.png', '1', '2021-06-29 19:00:53', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '16653239233507650', 'Ikeja, Nigeria', '6.601838', '3.3514863', 0),
(2, 'LM592872', 'MAC', '1899', 'LA 210 AX', '25', '9', '3', 'graphicallity/49329706164864662NQR.png', 'graphicallity/49329706164864662NQR.png', 'graphicallity/49329706164864662NQR.png', 'graphicallity/49329706164864662NQR.png', 'graphicallity/49329706164864662NQR.png', 'graphicallity/49329706164864662NQR.png', 'graphicallity/49329706164864662NQR.png', 'graphicallity/49329706164864662NQR.png', '1', '2021-06-29 19:04:18', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '49329706164864662', 'Agege, Lagos, Nigeria', '6.6179731', '3.3208916', 0),
(3, 'LM592872', 'DAF', '1900', 'LA 342 LJ', '25', '11', '3', 'graphicallity/68112724164593480NQR.png', 'graphicallity/68112724164593480NQR.png', 'graphicallity/68112724164593480NQR.png', 'graphicallity/68112724164593480NQR.png', 'graphicallity/68112724164593480NQR.png', 'graphicallity/68112724164593480NQR.png', 'graphicallity/68112724164593480NQR.png', 'graphicallity/68112724164593480NQR.png', '1', '2021-06-29 19:06:50', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '68112724164593480', 'Mushin, Lagos, Nigeria', '6.5272929', '3.3414103', 0),
(4, 'LM592872', 'FDS', '1898', 'LA 243 HJ', '25', '13', '3', 'graphicallity/5267310197622629NQR.png', 'graphicallity/5267310197622629NQR.png', 'graphicallity/5267310197622629NQR.png', 'graphicallity/5267310197622629NQR.png', 'graphicallity/5267310197622629NQR.png', 'graphicallity/5267310197622629NQR.png', 'graphicallity/5267310197622629NQR.png', 'graphicallity/5267310197622629NQR.png', '1', '2021-06-29 19:10:39', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '5267310197622629', 'Ikeja GRA, Ikeja, Nigeria', '6.578997', '3.3494666', 0),
(5, 'LM592872', 'FRD', '1897', 'LA 265 GH', '25', '15', '3', 'graphicallity/24567213252646290NQR.png', 'graphicallity/24567213252646290NQR.png', 'graphicallity/24567213252646290NQR.png', 'graphicallity/24567213252646290NQR.png', 'graphicallity/24567213252646290NQR.png', 'graphicallity/24567213252646290NQR.png', 'graphicallity/24567213252646290NQR.png', 'graphicallity/24567213252646290NQR.png', '1', '2021-06-29 19:13:34', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '24567213252646290', 'Anthony Village, Lagos, Nigeria', '6.564353', '3.3766851', 0),
(6, 'LM592872', 'Merc', '1986', 'LA 600 LI', '25', '3', '1', 'graphicallity/48573323852799641NQR.png', 'graphicallity/48573323852799641NQR.png', 'graphicallity/48573323852799641NQR.png', 'graphicallity/48573323852799641NQR.png', 'graphicallity/48573323852799641NQR.png', 'graphicallity/48573323852799641NQR.png', 'graphicallity/48573323852799641NQR.png', 'graphicallity/48573323852799641NQR.png', '0', '2021-06-29 19:17:37', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '48573323852799641', 'Ikeja City Mall, Lagos, Nigeria', '6.6201985', '3.3610773', 0),
(7, 'LM592872', 'DAT', '1901', 'LA 879 FG', '25', '5', '1', 'graphicallity/56062506437570459NQR.png', 'graphicallity/56062506437570459NQR.png', 'graphicallity/56062506437570459NQR.png', 'graphicallity/56062506437570459NQR.png', 'graphicallity/56062506437570459NQR.png', 'graphicallity/56062506437570459NQR.png', 'graphicallity/56062506437570459NQR.png', 'graphicallity/56062506437570459NQR.png', '1', '2021-06-29 19:23:32', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '56062506437570459', 'Dopemu, Lagos, Nigeria', '6.612898', '3.3139943', 0),
(8, 'LM592872', 'DAT', '1897', 'LA 648 LO', '25', '6', '1', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', '1', '2021-06-29 19:28:50', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '61982277244484579', 'Ikeja General Hospital, Ikeja, Nigeria', '6.5887066', '3.3425655', 1),
(9, 'LM592872', 'GMT', '1898', 'LA 986 IO', '25', '16', '6', 'graphicallity/51124258916504846NQR.png', 'graphicallity/51124258916504846NQR.png', 'graphicallity/51124258916504846NQR.png', 'graphicallity/51124258916504846NQR.png', 'graphicallity/51124258916504846NQR.png', 'graphicallity/51124258916504846NQR.png', 'graphicallity/51124258916504846NQR.png', 'graphicallity/51124258916504846NQR.png', '1', '2021-06-29 19:33:37', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '51124258916504846', 'Oshodi Bridge Lagos, Lagos, Nigeria', '6.5556265', '3.351797', 1),
(10, 'LM592872', 'KIT', '1897', 'LA 543 JJ', '25', '18', '6', 'graphicallity/5981614020168257NQR.png', 'graphicallity/5981614020168257NQR.png', 'graphicallity/5981614020168257NQR.png', 'graphicallity/5981614020168257NQR.png', 'graphicallity/5981614020168257NQR.png', 'graphicallity/5981614020168257NQR.png', 'graphicallity/5981614020168257NQR.png', 'graphicallity/5981614020168257NQR.png', '1', '2021-06-29 19:36:27', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '5981614020168257', 'Anthony Village, Lagos, Nigeria', '6.564353', '3.3766851', 0),
(11, 'LM592872', 'HMT', '1897', 'LA 687 JD', '25', '20', '6', 'graphicallity/52139388261236347NQR.png', 'graphicallity/52139388261236347NQR.png', 'graphicallity/52139388261236347NQR.png', 'graphicallity/52139388261236347NQR.png', 'graphicallity/52139388261236347NQR.png', 'graphicallity/52139388261236347NQR.png', 'graphicallity/52139388261236347NQR.png', 'graphicallity/52139388261236347NQR.png', '1', '2021-06-29 19:41:46', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '52139388261236347', 'Apapa, Lagos, Nigeria', '6.4446406', '3.3640841', 0),
(12, 'LM592872', 'LAD', '1900', 'LA 23 AD', '25', '23', '4', 'graphicallity/17687121553258484NQR.png', 'graphicallity/17687121553258484NQR.png', 'graphicallity/17687121553258484NQR.png', 'graphicallity/17687121553258484NQR.png', 'graphicallity/17687121553258484NQR.png', 'graphicallity/17687121553258484NQR.png', 'graphicallity/17687121553258484NQR.png', 'graphicallity/17687121553258484NQR.png', '1', '2021-06-29 19:44:24', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '17687121553258484', 'Ikeja GRA, Ikeja, Nigeria', '6.578997', '3.3494666', 0),
(13, 'LM592872', 'HMT', '1898', 'LA 344 WD', '25', '24', '4', 'graphicallity/71927134893991303NQR.png', 'graphicallity/71927134893991303NQR.png', 'graphicallity/71927134893991303NQR.png', 'graphicallity/71927134893991303NQR.png', 'graphicallity/71927134893991303NQR.png', 'graphicallity/71927134893991303NQR.png', 'graphicallity/71927134893991303NQR.png', 'graphicallity/71927134893991303NQR.png', '1', '2021-06-29 19:46:25', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'LM452937', 0, '71927134893991303', 'Oshodi Bridge Lagos, Lagos, Nigeria', '6.5556265', '3.351797', 0),
(14, 'LM592872', 'DAF', '1899', 'LA 439 KJ', '25', '25', '4', 'graphicallity/5607122814577692NQR.png', 'graphicallity/5607122814577692NQR.png', 'graphicallity/5607122814577692NQR.png', 'graphicallity/5607122814577692NQR.png', 'graphicallity/5607122814577692NQR.png', 'graphicallity/5607122814577692NQR.png', 'graphicallity/5607122814577692NQR.png', 'graphicallity/5607122814577692NQR.png', '3', '2021-06-29 19:49:29', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'LM452937', 1, '5607122814577692', 'Isolo, Lagos, Nigeria', '6.535498', '3.3086778', 0),
(15, 'LM592872', 'DRT', '1897', 'LA 43 JH', '25', '26', '4', 'graphicallity/6208917284722354NQR.png', 'graphicallity/6208917284722354NQR.png', 'graphicallity/6208917284722354NQR.png', 'graphicallity/6208917284722354NQR.png', 'graphicallity/6208917284722354NQR.png', 'graphicallity/6208917284722354NQR.png', 'graphicallity/6208917284722354NQR.png', 'graphicallity/6208917284722354NQR.png', '1', '2021-06-29 20:08:36', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'LM452937', 0, '6208917284722354', 'Apapa Wharf, Lagos, Nigeria', '6.4372218', '3.39296', 0),
(16, 'LM592872', 'GMT', '1899', 'LA 546 LH', '25', '27', '4', 'graphicallity/33585711315045465NQR.png', 'graphicallity/33585711315045465NQR.png', 'graphicallity/33585711315045465NQR.png', 'graphicallity/33585711315045465NQR.png', 'graphicallity/33585711315045465NQR.png', 'graphicallity/33585711315045465NQR.png', 'graphicallity/33585711315045465NQR.png', 'graphicallity/33585711315045465NQR.png', '1', '2021-06-29 20:44:51', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'LM452937', 0, '33585711315045465', 'Lekki Phase 1, Lekki, Nigeria', '6.4478093', '3.4723495', 0),
(17, 'LM592872', 'DAT', '1898', 'LA 09 OI', '25', '36', '2', 'graphicallity/49066368542964438NQR.png', 'graphicallity/49066368542964438NQR.png', 'graphicallity/49066368542964438NQR.png', 'graphicallity/49066368542964438NQR.png', 'graphicallity/49066368542964438NQR.png', 'graphicallity/49066368542964438NQR.png', 'graphicallity/49066368542964438NQR.png', 'graphicallity/49066368542964438NQR.png', '1', '2021-06-29 20:50:17', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '49066368542964438', 'Ilupeju Industrial Avenue, Lagos, Nigeria', '6.5506068', '3.356064', 0),
(18, 'LMG415984', 'DAT ', '1901', 'LA 349 KJ', '25', '37', '2', 'graphicallity/499637118634NQR.png', 'graphicallity/499637118634NQR.png', 'graphicallity/499637118634NQR.png', 'graphicallity/499637118634NQR.png', 'graphicallity/499637118634NQR.png', 'graphicallity/499637118634NQR.png', 'graphicallity/499637118634NQR.png', 'graphicallity/499637118634NQR.png', '1', '2021-06-29 20:53:41', 'LMG415984', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'LM524488', 0, '60116725707510718', 'Ikeja, Nigeria', '6.601838', '3.3514863', 0),
(19, 'LMG415984', 'KIA', '1899', 'LA 426 HI', '25', '', 'Open', '', '', '', '', '', '', '', '', '3', '2021-06-29 20:57:06', 'LMG415984', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'LM524488', 1, '32794741037178243', 'Ajao Estate, Lagos, Nigeria', '6.5496257', '3.3277003', 0),
(20, 'LM793687', 'Hyundia', '2001', 'rty678jhu', '25', '5', '1', 'graphicallity/41631545992307353316214929.png', 'graphicallity/41631545992307353download.jfif', 'graphicallity/41631545992307353download.png', 'graphicallity/41631545992307353download (1).jfif', 'graphicallity/41631545992307353B1177191698.jpg', 'graphicallity/4163154599230735310_0.jpg', 'graphicallity/41631545992307353images.jfif', 'graphicallity/41631545992307353download (3).jfif', '1', '2021-07-01 09:27:49', 'LM793687', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '41631545992307353', 'Lagos', '6.5243793', '3.3792057', 0),
(21, 'LM793687', 'DAF', '2005', '89yyuu89', '25', '24', '4', 'graphicallity/1464786697534620images.png', 'graphicallity/1464786697534620download (7).jfif', 'graphicallity/1464786697534620download (6).jfif', 'graphicallity/1464786697534620big_441d7f43ead31df601a2dc864f5d8ec564d2e7ae.jpg', 'graphicallity/1464786697534620images (1).jfif', 'graphicallity/1464786697534620Sinotruk-HOWO-6X4-Low-Bed-Truck-20-Ton-371HP.jpg', 'graphicallity/1464786697534620FAW-6X4-20-Ton-Concave-Flatbed-Transport-Truck.jpg', 'graphicallity/1464786697534620download (5).jfif', '1', '2021-07-01 09:35:02', 'LM793687', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '1464786697534620', 'Lagos, Nigeria', '6.5243793', '3.3792057', 0),
(22, 'LMG415984', 'DAF PORT HARCOURT', '1900', 'PH 100 PH', '33', '15', '3', 'graphicallity/27260468713714317NQR.png', 'graphicallity/27260468713714317NQR.png', 'graphicallity/27260468713714317NQR.png', 'graphicallity/27260468713714317NQR.png', 'graphicallity/27260468713714317NQR.png', 'graphicallity/27260468713714317NQR.png', 'graphicallity/27260468713714317NQR.png', 'graphicallity/27260468713714317NQR.png', '1', '2021-07-01 09:58:43', 'LMG415984', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '27260468713714317', 'De-General E-Processing Center, Westend, Port Harcourt, Nigeria', '4.7973504', '6.9803172', 0),
(23, 'LM793687', 'Mercedes Benz', '2010', 'tyu456gh', '25', '19', '6', 'graphicallity/71558765753160884Join-us-for-thanksgiving-service-WEB-EVENT.jpg', 'graphicallity/71558765753160884download (8).jfif', 'graphicallity/71558765753160884download (7).jfif', 'graphicallity/71558765753160884big_441d7f43ead31df601a2dc864f5d8ec564d2e7ae.jpg', 'graphicallity/71558765753160884download (10).jfif', 'graphicallity/71558765753160884Sinotruk-HOWO-6X4-Low-Bed-Truck-20-Ton-371HP.jpg', 'graphicallity/71558765753160884download (4).jfif', 'graphicallity/71558765753160884images.jfif', '1', '2021-07-05 12:10:09', 'LM793687', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '71558765753160884', 'Lagos, Nigeria', '6.5243793', '3.3792057', 0),
(24, 'LM793687', 'Mitsubushi', '2008', 'ert345huj', '25', '38', '2', 'graphicallity/14096345504946599download (7).jfif', 'graphicallity/14096345504946599WhatsApp Image 2021-07-05 at 03.34.57.jpeg', 'graphicallity/14096345504946599Join-us-for-thanksgiving-service-WEB-EVENT.jpg', 'graphicallity/14096345504946599WhatsApp Image 2021-06-16 at 10.21.08 (1).jpeg', 'graphicallity/140963455049465998471859_img20190110wa0004_jpeg61152d91e52760cd2a436af433b8600c.jfif', 'graphicallity/14096345504946599unnamed-500x500.jpg', 'graphicallity/14096345504946599download (7).jfif', 'graphicallity/14096345504946599unnamed-500x500.jpg', '1', '2021-07-05 12:18:04', 'LM793687', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '14096345504946599', 'Lagos, Nigeria', '6.5243793', '3.3792057', 0),
(25, 'LM793687', 'Test Truck', '1897', '09876', '2', '16', '6', 'graphicallity/49112245621775702sigmund-59yRYIHWtzY-unsplash.jpg', 'graphicallity/49112245621775702fahrul-azmi-cFUZ-6i83vs-unsplash.jpg', 'graphicallity/49112245621775702carlos-muza-hpjSkU2UYSU-unsplash.jpg', 'graphicallity/49112245621775702viktor-talashuk-05HLFQu8bFw-unsplash.jpg', 'graphicallity/49112245621775702bernd-klutsch-nE2HV5AUXFo-unsplash.jpg', 'graphicallity/49112245621775702sharon-mccutcheon-tn57JI3CewI-unsplash.jpg', 'graphicallity/49112245621775702logo 37.png', 'graphicallity/49112245621775702WhatsApp Image 2021-07-05 at 11.49.30 PM.jpeg', '0', '2021-07-12 01:42:43', 'LM793687', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '49112245621775702', 'Police, Poland', '53.5520416', '14.5720607', 1),
(26, 'LM793687', 'test truck 2', '1898', '12122', '5', '5', '1', 'graphicallity/47924462492764665IMG-20210330-WA0015.jpg', 'graphicallity/47924462492764665good dream.jpg', 'graphicallity/47924462492764665LIFE SANCTUARY ASSEMBLY INTâ€™L.jpeg', 'graphicallity/47924462492764665WhatsApp Image 2021-06-30 at 1.20.15 PM (1).jpeg', 'graphicallity/47924462492764665WhatsApp Image 2021-06-30 at 1.20.15 PM.jpeg', 'graphicallity/47924462492764665WhatsApp Image 2021-06-23 at 10.21.08 PM (1).jpeg', 'graphicallity/47924462492764665WhatsApp Image 2021-06-23 at 10.21.09 PM (1).jpeg', 'graphicallity/47924462492764665WhatsApp Image 2021-06-23 at 10.21.08 PM.jpeg', '2', '2021-07-12 01:54:19', 'LM793687', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '47924462492764665', 'Oluyole, Ibadan, Nigeria', '7.3621978', '3.8502617', 1),
(27, 'LM592872', 'DAT', '1897', 'LA 648 LO', '25', '6', '1', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', 'graphicallity/61982277244484579NQR.png', '1', '2021-06-29 19:28:50', 'LM592872', '-', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 0, '61982277244484579', 'Ikeja General Hospital, Ikeja, Nigeria', '6.5887066', '3.3425655', 0),
(28, 'LM442284', 'Yamaha', '1913', 'GTA 12 GT', '2', '', '', 'graphicallity/46157323866913795New-Vertex-Logo.png', 'graphicallity/46157323866913795logo.png', 'graphicallity/46157323866913795IMG_20210525_194509_5.jpg', 'graphicallity/46157323866913795IMG_20210525_194457_9.jpg', 'graphicallity/46157323866913795IMG_20210525_194436_5.jpg', 'graphicallity/46157323866913795IMG_20210525_194448_3.jpg', '', '', '0', '2022-01-05 12:01:25', 'LM442284', '-', '', '', '', '', 'Yes', '', NULL, 0, '46157323866913795', 'Oluyole, Ibadan, Nigeria', '7.3621978', '3.8502617', 0),
(29, 'LM442284', 'Bike Brand:', '1910', 'Bike Plate Number:', '4', '', '', 'graphicallity/50500238052589669New-Vertex-Logo.png', 'graphicallity/50500238052589669messry xmas.jpg', 'graphicallity/50500238052589669logo.png', 'graphicallity/50500238052589669IMG_20210525_194457_9.jpg', 'graphicallity/5050023805258966920201114_215910-COLLAGE.jpg', 'graphicallity/50500238052589669DSC_0978.jpg', '', '', '0', '2022-01-05 12:32:44', 'LM442284', '-', '', '', '', '', 'Yes', '', NULL, 0, '50500238052589669', 'Olumo Rock, Ikija Road, Abeokuta, Nigeria', '7.1666599', '3.341438', 0);

-- --------------------------------------------------------

--
-- Table structure for table `truck_capacity`
--

DROP TABLE IF EXISTS `truck_capacity`;
CREATE TABLE IF NOT EXISTS `truck_capacity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truck_type` varchar(20) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck_capacity`
--

INSERT INTO `truck_capacity` (`id`, `truck_type`, `capacity`, `status`, `created_date`, `registeredby`) VALUES
(2, '1', '3', '1', '2021-06-29 14:01:33', 'LMG415984'),
(3, '1', '10', '1', '2021-06-29 14:01:48', 'LMG415984'),
(4, '1', '15', '1', '2021-06-29 14:01:56', 'LMG415984'),
(5, '1', '20', '1', '2021-06-29 14:02:04', 'LMG415984'),
(6, '1', '30', '1', '2021-06-29 14:02:19', 'LMG415984'),
(7, '3', '3', '1', '2021-06-29 14:07:29', 'LMG415984'),
(8, '3', '5', '1', '2021-06-29 14:07:38', 'LMG415984'),
(9, '3', '10', '1', '2021-06-29 14:07:47', 'LMG415984'),
(10, '3', '15', '1', '2021-06-29 14:07:53', 'LMG415984'),
(11, '3', '20', '1', '2021-06-29 14:08:10', 'LMG415984'),
(12, '3', '25', '1', '2021-06-29 14:08:19', 'LMG415984'),
(13, '3', '30', '1', '2021-06-29 14:08:25', 'LMG415984'),
(14, '3', '35', '1', '2021-06-29 14:08:34', 'LMG415984'),
(15, '3', '40', '1', '2021-06-29 14:08:41', 'LMG415984'),
(16, '6', 'Double-sided 10 ton', '1', '2021-06-29 14:09:31', 'LMG415984'),
(17, '6', 'Double-sided 15 ton', '1', '2021-06-29 14:09:45', 'LMG415984'),
(18, '6', 'Double-sided 20 ton', '1', '2021-06-29 14:09:54', 'LMG415984'),
(19, '6', 'Double-sided 25 ton', '1', '2021-06-29 14:10:15', 'LMG415984'),
(20, '6', 'Double-sided 30 ton', '1', '2021-06-29 14:10:28', 'LMG415984'),
(21, '6', 'Double-sided 35 ton', '1', '2021-06-29 14:10:39', 'LMG415984'),
(22, '6', 'Double-sided 40 ton', '1', '2021-06-29 14:10:49', 'LMG415984'),
(23, '4', '20 foot long container', '1', '2021-06-29 14:11:37', 'LMG415984'),
(24, '4', '30 foot long container', '1', '2021-06-29 14:11:50', 'LMG415984'),
(25, '4', '40 foot long container', '1', '2021-06-29 14:11:58', 'LMG415984'),
(26, '4', '50 foot long container', '1', '2021-06-29 14:12:15', 'LMG415984'),
(27, '4', '60 foot long container', '1', '2021-06-29 14:12:24', 'LMG415984'),
(28, '5', '5', '1', '2021-06-29 14:12:56', 'LMG415984'),
(29, '5', '10', '1', '2021-06-29 14:13:02', 'LMG415984'),
(30, '5', '15', '1', '2021-06-29 14:13:07', 'LMG415984'),
(31, '5', '20', '1', '2021-06-29 14:13:12', 'LMG415984'),
(32, '5', '25', '1', '2021-06-29 14:13:19', 'LMG415984'),
(33, '5', '30', '1', '2021-06-29 14:13:28', 'LMG415984'),
(34, '5', '35', '1', '2021-06-29 14:13:35', 'LMG415984'),
(35, '5', '40', '1', '2021-06-29 14:13:41', 'LMG415984'),
(36, '2', '10 ton', '1', '2021-06-29 14:50:26', 'LMG415984'),
(37, '2', '20 ton', '1', '2021-06-29 14:50:36', 'LMG415984'),
(38, '2', '30 ton', '1', '2021-06-29 14:51:02', 'LMG415984');

-- --------------------------------------------------------

--
-- Table structure for table `truck_capacity_charge`
--

DROP TABLE IF EXISTS `truck_capacity_charge`;
CREATE TABLE IF NOT EXISTS `truck_capacity_charge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truck_type` varchar(20) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck_capacity_charge`
--

INSERT INTO `truck_capacity_charge` (`id`, `truck_type`, `capacity`, `amount`, `status`, `created_date`, `registeredby`) VALUES
(1, '3', '7', '300', '1', '2021-06-29 15:12:46', 'LMG415984'),
(2, '3', '8', '500', '1', '2021-06-29 15:12:56', 'LMG415984'),
(3, '3', '9', '1000', '1', '2021-06-29 15:13:05', 'LMG415984'),
(4, '3', '10', '1500', '1', '2021-06-29 15:13:16', 'LMG415984'),
(5, '3', '11', '2000', '1', '2021-06-29 15:13:30', 'LMG415984'),
(6, '3', '12', '2500', '1', '2021-06-29 15:13:44', 'LMG415984'),
(7, '3', '13', '3000', '1', '2021-06-29 15:14:00', 'LMG415984'),
(8, '3', '14', '3500', '1', '2021-06-29 15:14:20', 'LMG415984'),
(9, '3', '15', '4000', '1', '2021-06-29 15:14:34', 'LMG415984'),
(10, '1', '2', '300', '1', '2021-06-29 15:14:44', 'LMG415984'),
(11, '1', '3', '1000', '1', '2021-06-29 15:14:57', 'LMG415984'),
(12, '1', '4', '1500', '1', '2021-06-29 15:15:10', 'LMG415984'),
(13, '1', '5', '2000', '1', '2021-06-29 15:15:25', 'LMG415984'),
(14, '1', '6', '3000', '1', '2021-06-29 15:15:41', 'LMG415984'),
(15, '6', '16', '1000', '1', '2021-06-29 15:16:19', 'LMG415984'),
(16, '6', '17', '1500', '1', '2021-06-29 15:16:33', 'LMG415984'),
(17, '6', '18', '2000', '1', '2021-06-29 15:16:46', 'LMG415984'),
(18, '6', '19', '2500', '1', '2021-06-29 15:16:59', 'LMG415984'),
(19, '6', '20', '3000', '1', '2021-06-29 15:17:10', 'LMG415984'),
(20, '6', '21', '3500', '1', '2021-06-29 15:17:23', 'LMG415984'),
(21, '6', '22', '4000', '1', '2021-06-29 15:17:41', 'LMG415984'),
(22, '4', '23', '2000', '1', '2021-06-29 15:19:06', 'LMG415984'),
(23, '4', '24', '3000', '1', '2021-06-29 15:19:17', 'LMG415984'),
(24, '4', '25', '4000', '1', '2021-06-29 15:19:28', 'LMG415984'),
(25, '4', '26', '5000', '1', '2021-06-29 15:19:39', 'LMG415984'),
(26, '4', '27', '6000', '1', '2021-06-29 15:19:51', 'LMG415984'),
(27, '2', '36', '1000', '1', '2021-06-29 15:21:53', 'LMG415984'),
(28, '2', '37', '2000', '1', '2021-06-29 15:22:09', 'LMG415984'),
(29, '2', '38', '3000', '1', '2021-06-29 15:22:22', 'LMG415984'),
(30, '5', '28', '500', '1', '2021-06-29 15:22:33', 'LMG415984'),
(31, '5', '29', '1000', '1', '2021-06-29 15:22:43', 'LMG415984'),
(32, '5', '30', '1500', '1', '2021-06-29 15:22:55', 'LMG415984'),
(33, '5', '31', '2000', '1', '2021-06-29 15:23:05', 'LMG415984'),
(34, '5', '32', '2500', '1', '2021-06-29 15:23:15', 'LMG415984'),
(35, '5', '33', '3000', '1', '2021-06-29 15:23:29', 'LMG415984'),
(36, '5', '34', '3500', '1', '2021-06-29 15:23:41', 'LMG415984'),
(37, '5', '35', '4000', '1', '2021-06-29 15:23:57', 'LMG415984');

-- --------------------------------------------------------

--
-- Table structure for table `truck_type`
--

DROP TABLE IF EXISTS `truck_type`;
CREATE TABLE IF NOT EXISTS `truck_type` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `created_date` varchar(50) DEFAULT NULL,
  `registeredby` varchar(50) DEFAULT NULL,
  `image` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck_type`
--

INSERT INTO `truck_type` (`id`, `name`, `desc`, `status`, `created_date`, `registeredby`, `image`) VALUES
(1, 'Covered Body', 'Covered Body Truck', 1, '2021-06-29 14:00:43', 'LMG415984', 'graphicallity/Covered Bodycovered body.png'),
(2, 'Open Body', 'Open Body Truck', 1, '2021-06-29 14:04:08', 'LMG415984', 'graphicallity/Open BodyOpen body.jpg'),
(3, 'Box Body ', 'Box Body  Truck', 1, '2021-06-29 14:04:38', 'LMG415984', 'graphicallity/Box Body Box body.png'),
(4, 'Flat Bed', 'Flat Bed ', 1, '2021-06-29 14:05:13', 'LMG415984', 'graphicallity/Flat BedFlat Bed.png'),
(5, 'Tautliners', 'Tautliners Truck', 1, '2021-06-29 14:06:12', 'LMG415984', 'graphicallity/TautlinersTautliners.png'),
(6, 'Curtainsiders', 'Curtainsiders', 1, '2021-06-29 14:06:56', 'LMG415984', 'graphicallity/CurtainsidersCurtainsider2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(33) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `icon` varchar(30) DEFAULT NULL,
  `desc_text` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uom`
--

DROP TABLE IF EXISTS `uom`;
CREATE TABLE IF NOT EXISTS `uom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `abbr` varchar(20) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_unit`
--

DROP TABLE IF EXISTS `user_unit`;
CREATE TABLE IF NOT EXISTS `user_unit` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 1,
  `unique_id` text DEFAULT NULL,
  `encrypted_password` text DEFAULT NULL,
  `salt` text DEFAULT NULL,
  `irrelivant` text DEFAULT NULL,
  `password_update` int(11) DEFAULT 0,
  `updated_at` varchar(30) DEFAULT NULL,
  `usertype` int(4) DEFAULT NULL,
  `ministry` varchar(10) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `super` varchar(2) NOT NULL DEFAULT '0',
  `file` text DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `lga` varchar(30) DEFAULT NULL,
  `number` int(10) DEFAULT NULL,
  `lati` varchar(100) DEFAULT NULL,
  `longi` varchar(100) DEFAULT NULL,
  `year` varchar(30) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `truck_owner_type` int(10) DEFAULT 0,
  `git` text DEFAULT NULL,
  `rc` varchar(50) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=237 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_unit`
--

INSERT INTO `user_unit` (`id`, `name`, `account_number`, `phone`, `email`, `address`, `created_date`, `registeredby`, `status`, `unique_id`, `encrypted_password`, `salt`, `irrelivant`, `password_update`, `updated_at`, `usertype`, `ministry`, `designation`, `super`, `file`, `state`, `lga`, `number`, `lati`, `longi`, `year`, `branch`, `truck_owner_type`, `git`, `rc`, `notes`) VALUES
(1, 'Super User', 'LMG415984', '0810000000', 'superadmin@apexapps.net', '-', '2020-09-09 13:34:29', 'OGSG607696', 1, '5f58cc3055a813.10510239', 'ONlEDpc7h+KdMDR2AmmXhB0DNVw3MjhiYTJkMGE5', '728ba2d0a9', '12345', 1, NULL, 1, '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(234, 'First Last', 'LM388049', '12345', 'infaaao@payall.com.ng', '', '2022-01-03 00:26:03', '', 1, '61d23c698d2d91.64457520', 'WXGSmgz4bcDp0gG4VK6Zmv7Aq0A2YjU3ZDgxMzAy', '6b57d81302', '1234566', 1, NULL, 3, '-', 'Customers', '0', '', '', '', 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(235, 'Olumide Francis', 'LM767654', '80355386580', 'info@psssayall.com.ng', '1242sss2 W. Bluff Creek Drive Playa Vista,', '2022-01-03 01:50:38', '', 1, '61d24a2c8503c7.58255354', 'n65garzIIQKTPIhEJMxWOaxA2V0zYzc5NzZiMWU1', '3c7976b1e5', '123455', 1, NULL, 2, '-', 'Truck Owner', '0', '', '31', '1', 4, NULL, NULL, '', NULL, 1, 'graphicallity/', '43423423423', NULL),
(236, 'Totaling Finance', 'LM442284', '8035538658', 'olumideogundele2@gmail.com', '1, Billings Road Oregun', '2022-01-04 15:18:12', 'LM442284', 1, '61d43bab5da787.28168235', 'DxehDAdr80L63iRI0yFCWdSZIgY4YTc1NzJhMDdi', '8a7572a07b', '12345', 1, NULL, 2, '-', 'Courier Company ', '0', 'LM442284New-Vertex-Logo.png', '5', '', 6, '6.6030661', '3.3702464', '', NULL, 2, 'LM442284logo.png', '12121212121-2', 'About You sdsadsadsadsa	 ssss');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

DROP TABLE IF EXISTS `wallet`;
CREATE TABLE IF NOT EXISTS `wallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(30) DEFAULT NULL,
  `registeredby` varchar(30) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `wallet_no` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_breakdown`
--

DROP TABLE IF EXISTS `wallet_breakdown`;
CREATE TABLE IF NOT EXISTS `wallet_breakdown` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(30) DEFAULT NULL,
  `registeredby` varchar(30) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `wallet_no` varchar(20) DEFAULT NULL,
  `reff` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
