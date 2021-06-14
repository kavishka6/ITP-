-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 07:21 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sale`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_four`
--

CREATE TABLE IF NOT EXISTS `category_four` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `extra` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category_four`
--

INSERT INTO `category_four` (`id`, `extra`, `status`, `entered_date`, `user`) VALUES
(4, '250ml', 1, '2020-10-20 08:35:38', 1),
(5, '100ml', 1, '2020-10-20 08:35:43', 1),
(6, '500ml', 1, '2020-10-20 08:35:47', 1),
(7, '4" X 4"', 1, '2020-10-21 06:15:29', 14),
(8, '14" X 12"', 1, '2020-10-21 06:15:36', 14);

-- --------------------------------------------------------

--
-- Table structure for table `category_one`
--

CREATE TABLE IF NOT EXISTS `category_one` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category_one`
--

INSERT INTO `category_one` (`id`, `type`, `status`, `entered_date`, `user`) VALUES
(7, 'busket', 0, '2020-10-20 08:35:15', 1),
(8, 'basin', 0, '2020-10-21 03:41:33', 14),
(9, 'BOX', 1, '2020-10-21 06:14:08', 14),
(10, 'BOTTLE', 1, '2020-10-21 06:14:12', 14),
(11, 'SPORT', 1, '2020-10-21 06:14:20', 14);

-- --------------------------------------------------------

--
-- Table structure for table `category_three`
--

CREATE TABLE IF NOT EXISTS `category_three` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category_three`
--

INSERT INTO `category_three` (`id`, `model`, `status`, `entered_date`, `user`) VALUES
(5, 'small', 0, '2020-10-20 08:35:30', 1),
(6, 'large', 0, '2020-10-20 19:43:18', 14),
(7, 'BLACK', 1, '2020-10-21 06:14:52', 14),
(8, 'BLUE', 1, '2020-10-21 06:14:55', 14),
(9, 'RED', 1, '2020-10-21 06:14:57', 14),
(10, 'GREEN', 1, '2020-10-21 06:15:00', 14);

-- --------------------------------------------------------

--
-- Table structure for table `category_two`
--

CREATE TABLE IF NOT EXISTS `category_two` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category_two`
--

INSERT INTO `category_two` (`id`, `brand`, `status`, `entered_date`, `user`) VALUES
(7, 'water', 0, '2020-10-20 08:35:23', 1),
(8, 'casual', 0, '2020-10-20 19:43:51', 14),
(9, 'SMALL', 1, '2020-10-21 06:14:28', 14),
(10, 'LARGE', 1, '2020-10-21 06:14:33', 14),
(11, 'MIDDLE', 1, '2020-10-21 06:14:36', 14);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `br_no` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `vat_no` varchar(30) NOT NULL,
  `cheques_payable` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `stat` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `phone`, `address`, `owner`, `br_no`, `description`, `vat_no`, `cheques_payable`, `email`, `stat`) VALUES
(1, 'SHANAZ INDUSTRIES(PVT) LTD', '0372245250', 'Elabadagama West, Sri Lanka', 'MR IMDAD', 'TY458745', 'WORLD LEADING PLASTIC MANUFACTURERS', 'FG889-9885', 'SHANAZ INDUSTRIES(PVT) LTD', 'shanaz@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_customer`
--

CREATE TABLE IF NOT EXISTS `company_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_customer` int(2) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `br_no` int(11) NOT NULL,
  `vat_no` int(11) NOT NULL,
  `company_phone` int(10) NOT NULL,
  `company_fax` int(11) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_mobile` int(10) NOT NULL,
  `salutation` varchar(10) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `min_sale_price` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `user` int(2) NOT NULL,
  `recidence` varchar(15) NOT NULL,
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nic` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `company_customer`
--

INSERT INTO `company_customer` (`id`, `type_customer`, `company_name`, `br_no`, `vat_no`, `company_phone`, `company_fax`, `company_address`, `person_name`, `person_mobile`, `salutation`, `company_email`, `min_sale_price`, `status`, `user`, `recidence`, `entered_date`, `nic`) VALUES
(48, 2, 'ADRENALINE(PVT)LTD', 0, 0, 335606919, 0, '', 'THARAKA ', 715606945, 'CONTACT PE', '', 0, 1, 14, '', '2020-10-21 05:15:37', ''),
(49, 2, 'SENANAYAKA TRANSPORTS', 0, 0, 0, 0, '', 'THARAKA PERERA', 715606919, 'MR', '', 0, 1, 14, '', '2020-10-21 05:27:54', ''),
(50, 0, '', 0, 0, 0, 0, 'GAMPAHA', 'RAVIDU', 778521695, 'MR', 'ravidu@gmail.com', 0, 1, 14, '0332289245', '2020-10-23 13:25:04', '981510895V'),
(51, 2, 'NISHAM (PVT) LTD', 0, 0, 112225656, 0, 'THIHARIYA', 'SHAHIM', 715852852, 'MR', 'nisham@gmail.com', 0, 1, 14, '', '2020-10-23 13:27:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dnic` varchar(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `daddress` varchar(50) NOT NULL,
  `dphone` int(10) NOT NULL,
  `dlicense` varchar(10) NOT NULL,
  `rnic` varchar(11) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `raddress` varchar(50) NOT NULL,
  `rphone` int(10) NOT NULL,
  `rlicense` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `entered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `dnic`, `dname`, `daddress`, `dphone`, `dlicense`, `rnic`, `rname`, `raddress`, `rphone`, `rlicense`, `status`, `entered_date`, `user`) VALUES
(28, '901810168v', 'PRASANNA SENANAYAKA', '', 0, '', '', '', '', 0, '', 1, '2020-10-21 11:13:38', 14),
(29, '', '', '', 0, '', '901810167v', 'THARAKA SILVA', '', 0, '', 1, '2020-10-21 11:13:54', 14),
(30, '981510895V', 'NISHANTHA', 'galle', 704564565, 'B23321312', '901510895V', 'KUMARA', 'gampaha', 712754689, 'B23321312', 1, '2020-10-23 19:01:18', 14);

-- --------------------------------------------------------

--
-- Table structure for table `expenses_category`
--

CREATE TABLE IF NOT EXISTS `expenses_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `user` int(5) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `expenses_category`
--

INSERT INTO `expenses_category` (`id`, `type`, `user`, `status`, `entered_date`) VALUES
(36, 'FOOD AND BEVERAGE', 1, 1, '2020-10-20 21:36:39'),
(37, 'STATIONARY ', 1, 0, '2020-10-20 21:36:46'),
(38, 'WATER', 1, 1, '2020-10-20 21:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `expenses_proc`
--

CREATE TABLE IF NOT EXISTS `expenses_proc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `pay` varchar(100) NOT NULL,
  `description` varchar(50) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `entered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(5) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `expenses_proc`
--

INSERT INTO `expenses_proc` (`id`, `date`, `pay`, `description`, `amount`, `entered_date`, `user`, `status`) VALUES
(1, '2020-10-21', 'prasanna', 'free', 2700.00, '2020-10-20 22:37:09', 1, 1),
(2, '2020-10-21', 'prasanna', 'free', 2700.00, '2020-10-20 22:37:22', 1, 0),
(3, '2020-10-21', 'prasanna', 'free', 2700.00, '2020-10-20 22:37:44', 1, 0),
(4, '2020-10-21', 'prasanna', 'free', 2700.00, '2020-10-20 22:37:59', 1, 0),
(5, '2020-10-21', 'prasanna', 'free', 2700.00, '2020-10-20 22:41:25', 1, 0),
(6, '2020-10-21', 'prasanna', 'free', 2700.00, '2020-10-20 22:42:08', 1, 0),
(7, '2020-10-21', 'prasanna', 'free', 2700.00, '2020-10-20 22:43:21', 1, 0),
(8, '2020-10-12', 'CHANAKA NALAKA COMPANY', 'PAID', 12500.00, '2020-10-21 14:03:42', 14, 1),
(9, '2020-10-15', 'sarath', 'manager  expenses', 1400.00, '2020-10-23 18:04:43', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `expenses_proc_items`
--

CREATE TABLE IF NOT EXISTS `expenses_proc_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `excat_id` int(10) NOT NULL,
  `proc_id` int(10) NOT NULL,
  `amount` double NOT NULL,
  `entered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '1',
  `user` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `expense id_idx` (`proc_id`),
  KEY `expense category id_idx` (`excat_id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `expenses_proc_items`
--

INSERT INTO `expenses_proc_items` (`id`, `excat_id`, `proc_id`, `amount`, `entered_date`, `status`, `user`) VALUES
(1, 36, 1, 1500, '2020-10-20 22:37:09', 1, 1),
(2, 38, 1, 1200, '2020-10-20 22:37:09', 1, 1),
(15, 38, 8, 12500, '2020-10-21 14:03:42', 1, 14),
(16, 38, 9, 400, '2020-10-23 18:04:43', 1, 14),
(17, 36, 9, 1000, '2020-10-23 18:04:43', 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) NOT NULL,
  `recieved_date` datetime NOT NULL,
  `pay_done` varchar(5) NOT NULL,
  `description` varchar(100) NOT NULL,
  `user` int(5) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pay_type` varchar(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `invoice_id`, `recieved_date`, `pay_done`, `description`, `user`, `status`, `entered_date`, `pay_type`) VALUES
(12, 30, '2020-10-05 00:00:00', 'YES', '', 10, 1, '2020-10-21 13:50:00', 'CASH'),
(13, 30, '2020-10-06 00:00:00', 'YES', '2BASKETS ARE DAMAGED', 10, 1, '2020-10-21 16:53:05', 'CASH');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_amount` decimal(18,2) NOT NULL DEFAULT '0.00',
  `net_amount` decimal(18,2) NOT NULL,
  `paid_amount` double(10,2) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_type` varchar(50) NOT NULL,
  `tax_percentage_id` int(10) NOT NULL,
  `driver_id` int(10) NOT NULL,
  `porter_id` int(10) DEFAULT NULL,
  `vehicle_id` int(10) NOT NULL,
  `feedback` int(2) DEFAULT NULL,
  `date` date NOT NULL,
  `stat` tinyint(4) NOT NULL DEFAULT '1',
  `user` int(5) NOT NULL,
  `date_enter` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `tax id_idx` (`tax_percentage_id`),
  KEY `customer id_idx` (`customer_id`),
  KEY `driver id_idx` (`driver_id`),
  KEY `vehicle id_idx` (`vehicle_id`),
  KEY `feedback id_idx` (`feedback`),
  KEY `user id_idx` (`user`),
  KEY `porterid_idx` (`porter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_amount`, `net_amount`, `paid_amount`, `type`, `customer_id`, `invoice_type`, `tax_percentage_id`, `driver_id`, `porter_id`, `vehicle_id`, `feedback`, `date`, `stat`, `user`, `date_enter`) VALUES
(30, '1560.00', '1560.00', 1560.00, 'CREDIT-SALE', 48, 'VAT', 1, 28, NULL, 52, NULL, '2020-10-14', 1, 14, '2020-10-21 12:21:25'),
(31, '1560.00', '1560.00', 2000.00, 'CREDIT-SALE', 48, 'VAT', 1, 28, 29, 52, NULL, '2020-10-14', 1, 14, '2020-10-21 12:22:55'),
(32, '8500.00', '8500.00', NULL, 'CREDIT-SALE', 48, 'NON-VAT', 1, 28, 29, 52, NULL, '2020-10-07', 1, 14, '2020-10-21 12:24:28'),
(33, '270.00', '270.00', NULL, 'CASH-SALE', 48, 'NON-VAT', 1, 28, 29, 52, NULL, '2020-10-08', 1, 14, '2020-10-21 16:21:12'),
(34, '1835.00', '1835.00', NULL, 'CASH-SALE', 48, 'NON-VAT', 1, 28, 29, 52, NULL, '2020-10-14', 1, 14, '2020-10-21 16:42:14'),
(35, '840.00', '840.00', NULL, 'CASH-SALE', 48, 'VAT', 1, 28, 29, 52, NULL, '2020-10-08', 1, 14, '2020-10-23 18:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE IF NOT EXISTS `invoice_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `item_id` int(10) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `invoice_id` int(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `unit_price` double DEFAULT NULL,
  `discount_per_item` float NOT NULL,
  `min_sale_price` double NOT NULL,
  `cash_price` double NOT NULL,
  `credit_price` double NOT NULL,
  `stat` tinyint(2) NOT NULL DEFAULT '1',
  `user` int(5) NOT NULL,
  `date_enter` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `item id_idx` (`item_id`),
  KEY `customer id_idx` (`customer_id`),
  KEY `invoice id_idx` (`invoice_id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`id`, `item_id`, `customer_id`, `item_name`, `invoice_id`, `quantity`, `unit_price`, `discount_per_item`, `min_sale_price`, `cash_price`, `credit_price`, `stat`, `user`, `date_enter`) VALUES
(38, 11, 48, 'BOTTLE LARGE RED 250ml', 30, 12, 130, 5, 125, 130, 135, 1, 14, '2020-10-21 12:21:25'),
(41, 11, 48, 'BOTTLE LARGE RED 250ml', 31, 12, 130, 5, 125, 130, 135, 1, 14, '2020-10-21 12:22:56'),
(42, 12, 48, 'SPORT MIDDLE BLACK 14" X 12"', 32, 10, 850, 20, 800, 850, 870, 1, 14, '2020-10-21 12:24:28'),
(43, 11, 48, 'BOTTLE LARGE RED 250ml', 33, 2, 135, -5, 125, 130, 135, 1, 14, '2020-10-21 16:21:12'),
(44, 11, 48, 'BOTTLE LARGE RED 250ml', 34, 1, 135, -5, 125, 130, 135, 1, 14, '2020-10-21 16:42:14'),
(45, 12, 48, 'SPORT MIDDLE BLACK 14" X 12"', 34, 2, 850, 0, 800, 850, 870, 1, 14, '2020-10-21 16:42:14'),
(46, 10, 48, 'BOX SMALL BLACK 4" X 4"', 35, 2, 160, 0, 150, 160, 175, 1, 14, '2020-10-23 18:01:28'),
(47, 11, 48, 'BOTTLE LARGE RED 250ml', 35, 4, 130, 0, 125, 130, 135, 1, 14, '2020-10-23 18:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) NOT NULL,
  `amount` double(10,2) DEFAULT NULL,
  `invoice_date` date NOT NULL,
  `pay_type` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `date_enter` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `invoice id_idx` (`invoice_id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `invoice_id`, `amount`, `invoice_date`, `pay_type`, `status`, `date_enter`, `user`) VALUES
(1, 31, 500.00, '2020-10-07', 'CASH', 1, NULL, 14),
(2, 31, 500.00, '2020-10-07', 'CASH', 1, '2020-10-21 07:29:38', 14),
(3, 31, 500.00, '2020-10-07', 'CASH', 1, '2020-10-21 07:32:35', 14),
(4, 31, 500.00, '2020-10-07', 'CASH', 1, '2020-10-21 07:36:31', 14),
(5, 31, 500.00, '2020-10-07', 'CASH', 1, '2020-10-21 07:37:16', 14);

-- --------------------------------------------------------

--
-- Table structure for table `production_grn`
--

CREATE TABLE IF NOT EXISTS `production_grn` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grn_date` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `production_grn`
--

INSERT INTO `production_grn` (`id`, `grn_date`, `description`, `status`, `entered_date`, `user`) VALUES
(45, '2020-10-15', 'added 2 items ', 1, '2020-10-20 15:21:07', 1),
(46, '2020-10-15', 'added 2 items ', 1, '2020-10-20 15:21:57', 1),
(47, '2020-10-15', 'added 2 items ', 1, '2020-10-20 15:23:40', 1),
(48, '0000-00-00', 'added 2 items ', 1, '2020-10-20 17:01:24', 1),
(49, '0000-00-00', 'added 2 items ', 1, '2020-10-20 17:02:20', 1),
(50, '0000-00-00', 'added 2 items ', 1, '2020-10-20 20:08:15', 1),
(51, '2020-10-07', 'added 2 items ', 1, '2020-10-20 20:12:04', 1),
(52, '2020-10-07', 'added 2 items ', 1, '2020-10-20 20:13:12', 14),
(53, '2020-10-07', 'added 2 items ', 1, '2020-10-20 20:14:31', 14),
(54, '2020-10-22', 'hello', 1, '2020-10-21 05:34:53', 14),
(55, '2020-10-22', 'NEW STOCK', 1, '2020-10-21 06:17:43', 14),
(56, '2020-10-15', 'ADDED NEW ITEMS', 1, '2020-10-23 12:32:22', 14);

-- --------------------------------------------------------

--
-- Table structure for table `production_grn_items`
--

CREATE TABLE IF NOT EXISTS `production_grn_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_item_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `production_grn_id` int(10) NOT NULL,
  `user` int(5) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `product_item_id` (`product_item_id`),
  KEY `production_grn_id` (`production_grn_id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `production_grn_items`
--

INSERT INTO `production_grn_items` (`id`, `product_item_id`, `qty`, `production_grn_id`, `user`, `status`, `entered_date`) VALUES
(66, 9, 5, 50, 1, 1, '2020-10-20 20:08:15'),
(67, 9, 5, 51, 1, 1, '2020-10-20 20:12:04'),
(68, 9, 5, 52, 14, 1, '2020-10-20 20:13:12'),
(69, 9, 5, 53, 14, 1, '2020-10-20 20:14:31'),
(70, 9, 12, 54, 14, 1, '2020-10-21 05:34:53'),
(71, 10, 15, 55, 14, 1, '2020-10-21 06:17:43'),
(72, 11, 30, 55, 14, 1, '2020-10-21 06:17:43'),
(73, 12, 50, 55, 14, 1, '2020-10-21 06:17:43'),
(74, 11, 5, 56, 14, 1, '2020-10-23 12:32:22'),
(75, 12, 50, 56, 14, 1, '2020-10-23 12:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_item`
--

CREATE TABLE IF NOT EXISTS `product_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat1` int(11) NOT NULL,
  `cat2` int(11) NOT NULL,
  `cat3` int(11) NOT NULL,
  `cat4` int(11) NOT NULL,
  `min_sale_price` double(10,2) NOT NULL,
  `cash_price` double(10,2) NOT NULL,
  `credit_price` double(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `user` int(5) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `cat 1 _idx` (`cat1`),
  KEY `cat 2_idx` (`cat2`),
  KEY `cat 3_idx` (`cat3`),
  KEY `cat 4_idx` (`cat4`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `product_item`
--

INSERT INTO `product_item` (`id`, `cat1`, `cat2`, `cat3`, `cat4`, `min_sale_price`, `cash_price`, `credit_price`, `stock`, `user`, `status`, `entered_date`) VALUES
(9, 7, 7, 5, 4, 100.00, 102.00, 105.00, 32, 1, 0, '2020-10-20 08:36:10'),
(10, 9, 9, 7, 7, 150.00, 160.00, 175.00, 13, 14, 1, '2020-10-21 06:16:13'),
(11, 10, 10, 9, 4, 125.00, 130.00, 135.00, 4, 14, 1, '2020-10-21 06:16:35'),
(12, 11, 11, 7, 8, 800.00, 850.00, 870.00, 88, 14, 1, '2020-10-21 06:16:53'),
(13, 10, 10, 8, 6, 150.00, 153.00, 155.00, 0, 14, 1, '2020-10-23 13:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `raw_grn_items`
--

CREATE TABLE IF NOT EXISTS `raw_grn_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `row_grn_id` int(10) NOT NULL,
  `raw_item_id` int(10) NOT NULL,
  `entered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `raw_grn_items`
--

INSERT INTO `raw_grn_items` (`id`, `qty`, `price`, `row_grn_id`, `raw_item_id`, `entered_date`, `user`) VALUES
(9, 12, 120, 6, 23, '2020-10-21 11:40:32', 14),
(10, 15, 100, 6, 24, '2020-10-21 11:40:32', 14),
(11, 18, 150, 6, 25, '2020-10-21 11:40:32', 14),
(12, 5, 40, 7, 25, '2020-10-23 18:03:21', 14),
(13, 5, 50, 7, 26, '2020-10-23 18:03:21', 14);

-- --------------------------------------------------------

--
-- Table structure for table `row_four`
--

CREATE TABLE IF NOT EXISTS `row_four` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `extra` varchar(50) NOT NULL,
  `user` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `row_four`
--

INSERT INTO `row_four` (`id`, `extra`, `user`, `status`, `entered_date`) VALUES
(6, '400ML', 1, 1, '2020-10-20 08:37:18'),
(7, '100ML', 1, 1, '2020-10-20 08:37:25'),
(8, '50ML', 1, 1, '2020-10-20 08:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `row_grn`
--

CREATE TABLE IF NOT EXISTS `row_grn` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grn_date` datetime NOT NULL,
  `supplier_invoice_no` varchar(45) DEFAULT NULL,
  `supplier` int(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `supplier_idx` (`supplier`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `row_grn`
--

INSERT INTO `row_grn` (`id`, `grn_date`, `supplier_invoice_no`, `supplier`, `description`, `amount`, `status`, `entered_date`, `user`) VALUES
(6, '2020-10-22 00:00:00', 'QW124545', 63, 'NO FAULTS', 5640.00, 1, '2020-10-21 11:40:32', 14),
(7, '2020-10-08 00:00:00', 'IN2020', 63, 'thanuka items adding', 450.00, 1, '2020-10-23 18:03:20', 14);

-- --------------------------------------------------------

--
-- Table structure for table `row_item`
--

CREATE TABLE IF NOT EXISTS `row_item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat1` int(10) NOT NULL,
  `cat2` int(10) NOT NULL,
  `cat3` int(10) NOT NULL,
  `cat4` int(10) NOT NULL,
  `reorder` int(10) NOT NULL,
  `stock_stores` int(11) NOT NULL,
  `user` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`cat1`),
  KEY `row two_idx` (`cat2`),
  KEY `row three_idx` (`cat3`),
  KEY `row four_idx` (`cat4`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `row_item`
--

INSERT INTO `row_item` (`id`, `cat1`, `cat2`, `cat3`, `cat4`, `reorder`, `stock_stores`, `user`, `status`, `entered_date`) VALUES
(23, 12, 7, 7, 6, 500, 12, 14, 1, '2020-10-21 11:32:01'),
(24, 12, 8, 8, 7, 500, 15, 14, 1, '2020-10-21 11:32:09'),
(25, 12, 9, 9, 8, 500, 23, 14, 1, '2020-10-21 11:32:16'),
(26, 13, 7, 7, 6, 500, 5, 14, 1, '2020-10-21 11:32:21'),
(27, 13, 9, 9, 8, 500, 0, 14, 1, '2020-10-21 11:32:28'),
(28, 12, 8, 8, 8, 50, 0, 14, 1, '2020-10-23 19:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `row_one`
--

CREATE TABLE IF NOT EXISTS `row_one` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `user` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `row_one`
--

INSERT INTO `row_one` (`id`, `type`, `user`, `status`, `entered_date`) VALUES
(12, 'GRAND', 14, 1, '2020-10-21 05:59:56'),
(13, 'MAIN', 14, 1, '2020-10-21 06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `row_three`
--

CREATE TABLE IF NOT EXISTS `row_three` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `row_three`
--

INSERT INTO `row_three` (`id`, `model`, `status`, `entered_date`, `user`) VALUES
(7, 'LIGHT', 1, '2020-10-21 06:00:26', 14),
(8, 'DARK', 1, '2020-10-21 06:00:46', 14),
(9, 'LUMINUS', 1, '2020-10-21 06:00:54', 14);

-- --------------------------------------------------------

--
-- Table structure for table `row_two`
--

CREATE TABLE IF NOT EXISTS `row_two` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `row_two`
--

INSERT INTO `row_two` (`id`, `brand`, `status`, `entered_date`, `user`) VALUES
(7, 'BLACK', 1, '2020-10-20 08:36:46', 1),
(8, 'BLUE', 1, '2020-10-20 08:36:51', 1),
(9, 'GREEN', 1, '2020-10-20 08:36:56', 1),
(10, 'RED', 1, '2020-10-20 08:36:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) NOT NULL,
  `br_no` int(11) NOT NULL,
  `vat_no` int(11) NOT NULL,
  `company_phone` int(10) NOT NULL,
  `company_fax` int(11) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_mobile` int(10) NOT NULL,
  `salutation` varchar(5) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `user` int(10) NOT NULL,
  `entered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `company_name`, `br_no`, `vat_no`, `company_phone`, `company_fax`, `company_address`, `person_name`, `person_mobile`, `salutation`, `company_email`, `country`, `status`, `user`, `entered_date`) VALUES
(61, '', 0, 0, 714568598, 0, 'gampaha', 'ranul', 748528526, 'Mr', 'gaya@gmail.com', 'Sri Lanka', 0, 1, '2020-10-20 17:00:00'),
(62, 'rashan', 0, 0, 332285459, 0, 'gampaha', '', 0, 'Conta', 'r@gmail.com', '', 0, 14, '2020-10-21 07:46:21'),
(63, 'THANURA PERERA', 0, 0, 0, 0, '', 'THANURA PERERA', 715606919, 'Mr', '', 'Sri Lanka', 1, 14, '2020-10-21 11:36:24'),
(64, 'NISHANTHA', 0, 0, 712754896, 0, 'COLOMBO', 'GAYAN', 718595325, 'Mr', 'nishantha@gmail.com', 'Sri Lanka', 1, 14, '2020-10-23 18:58:20'),
(65, 'NIRMAL', 0, 0, 777894563, 0, 'GAMPAHA', 'SADUN', 718527416, 'Mr', 'n@gmail.com', 'Sri Lanka', 1, 14, '2020-10-23 18:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `tax_percentages`
--

CREATE TABLE IF NOT EXISTS `tax_percentages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nbt` float NOT NULL,
  `vat` float NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `user` int(11) NOT NULL,
  `stat` tinyint(2) NOT NULL DEFAULT '1',
  `enter_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tax_percentages`
--

INSERT INTO `tax_percentages` (`id`, `nbt`, `vat`, `start`, `end`, `user`, `stat`, `enter_date`) VALUES
(1, 2, 15, '2020-01-01', '2021-03-31', 1, 1, '2020-10-21 05:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(8) NOT NULL,
  `entered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_name`, `name`, `password`, `phone`, `email`, `position`, `entered_date`, `status`) VALUES
(1, 'buddhika', '1000', '369d1b729408910d610cb5e63a54a148b21ce7e3', 712751694, 'b@gmail.com', '1', '2020-10-20 12:21:53', 0),
(10, 'savinu zoysa', '1001', '19cc1ebd86f740d803bad19d464b85e0e83562a2', 714568526, 'savinu@gmail.com', '4', '2020-10-20 15:37:01', 1),
(13, 'PRASANNA SENANAYAKA', '1002', '6367c48dd193d56ea7b0baad25b19455e529f5ea', 715606919, 'senanayaka@gmail.com', '1', '2020-10-20 23:19:47', 1),
(14, 'BUDDHIKA SENANAYAKA', '1003', 'ff97bb1a469b81c0d4a089ed1b0200be42e32792', 712751694, 'buddhika.senanayaka123@gmail.com', '1', '2020-10-21 00:28:48', 1),
(15, 'BUDDHIKA', '1004', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 0, '', 'Select P', '2020-10-21 16:46:00', 1),
(16, 'BUDDHIKA', '1005', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 0, '', 'Select P', '2020-10-21 16:46:02', 1),
(17, 'LASHAN', '1006', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 712751694, 'lashan@gmail.com', '1', '2020-10-23 18:30:49', 1),
(18, 'LASHAN', '1007', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 712751694, 'lashan@gmail.com', '1', '2020-10-23 18:30:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `revenue_license` date NOT NULL,
  `insurance_company` varchar(50) NOT NULL,
  `insurance_date` date NOT NULL,
  `registration_num` varchar(15) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `entered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user id_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `type`, `dname`, `rname`, `revenue_license`, `insurance_company`, `insurance_date`, `registration_num`, `status`, `entered_date`, `user`) VALUES
(52, 'LORRY', ' 28 ', ' 29 ', '2020-10-17', 'SRI LANKA INSURANCE', '2020-10-21', 'LY-1810', 1, '2020-10-21 05:46:48', 14);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_four`
--
ALTER TABLE `category_four`
  ADD CONSTRAINT `user id1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_one`
--
ALTER TABLE `category_one`
  ADD CONSTRAINT `user id2` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_three`
--
ALTER TABLE `category_three`
  ADD CONSTRAINT `user id3` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_two`
--
ALTER TABLE `category_two`
  ADD CONSTRAINT `user id4` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company_customer`
--
ALTER TABLE `company_customer`
  ADD CONSTRAINT `user id5` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `user id6` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expenses_category`
--
ALTER TABLE `expenses_category`
  ADD CONSTRAINT `user id7` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expenses_proc`
--
ALTER TABLE `expenses_proc`
  ADD CONSTRAINT `user id8` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expenses_proc_items`
--
ALTER TABLE `expenses_proc_items`
  ADD CONSTRAINT `expense category id` FOREIGN KEY (`excat_id`) REFERENCES `expenses_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `expense id` FOREIGN KEY (`proc_id`) REFERENCES `expenses_proc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user id9` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `user id10` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `customer id` FOREIGN KEY (`customer_id`) REFERENCES `company_customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `driver id` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `feedback id` FOREIGN KEY (`feedback`) REFERENCES `feedback` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `porter id` FOREIGN KEY (`porter_id`) REFERENCES `driver` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tax id` FOREIGN KEY (`tax_percentage_id`) REFERENCES `tax_percentages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user id13` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vehicle id` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD CONSTRAINT `customer1 id` FOREIGN KEY (`customer_id`) REFERENCES `company_customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `invoice1 id` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `item id1` FOREIGN KEY (`item_id`) REFERENCES `product_item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user id15` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `invoice id2` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user id25` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `production_grn`
--
ALTER TABLE `production_grn`
  ADD CONSTRAINT `user id16` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `production_grn_items`
--
ALTER TABLE `production_grn_items`
  ADD CONSTRAINT `product item id` FOREIGN KEY (`product_item_id`) REFERENCES `product_item` (`id`),
  ADD CONSTRAINT `production grn id` FOREIGN KEY (`production_grn_id`) REFERENCES `production_grn` (`id`),
  ADD CONSTRAINT `user id17` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_item`
--
ALTER TABLE `product_item`
  ADD CONSTRAINT `cat 1 ` FOREIGN KEY (`cat1`) REFERENCES `category_one` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cat 2` FOREIGN KEY (`cat2`) REFERENCES `category_two` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cat 3` FOREIGN KEY (`cat3`) REFERENCES `category_three` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cat 4` FOREIGN KEY (`cat4`) REFERENCES `category_four` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user id14` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `raw_grn_items`
--
ALTER TABLE `raw_grn_items`
  ADD CONSTRAINT `user id18` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `row_four`
--
ALTER TABLE `row_four`
  ADD CONSTRAINT `user id19` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `row_grn`
--
ALTER TABLE `row_grn`
  ADD CONSTRAINT `supplier` FOREIGN KEY (`supplier`) REFERENCES `supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user id20` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `row_item`
--
ALTER TABLE `row_item`
  ADD CONSTRAINT `row four` FOREIGN KEY (`cat4`) REFERENCES `row_four` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `row one` FOREIGN KEY (`cat1`) REFERENCES `row_one` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `row three` FOREIGN KEY (`cat3`) REFERENCES `row_three` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `row two` FOREIGN KEY (`cat2`) REFERENCES `row_two` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user id24` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `row_one`
--
ALTER TABLE `row_one`
  ADD CONSTRAINT `user id21` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `row_three`
--
ALTER TABLE `row_three`
  ADD CONSTRAINT `user id23` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `row_two`
--
ALTER TABLE `row_two`
  ADD CONSTRAINT `user id22` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tax_percentages`
--
ALTER TABLE `tax_percentages`
  ADD CONSTRAINT `user id11` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `user id12` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
