-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 12:17 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b31_18685913_scw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acc`
--

CREATE TABLE `tbl_acc` (
  `accid` int(11) NOT NULL,
  `fname` varchar(999) NOT NULL,
  `lname` varchar(999) NOT NULL,
  `ad` varchar(999) NOT NULL,
  `con` varchar(30) NOT NULL,
  `email` varchar(999) NOT NULL,
  `pw` varchar(999) NOT NULL,
  `activationcode` varchar(999) NOT NULL,
  `status` varchar(30) NOT NULL,
  `discid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_acc`
--

INSERT INTO `tbl_acc` (`accid`, `fname`, `lname`, `ad`, `con`, `email`, `pw`, `activationcode`, `status`, `discid`) VALUES
(17, 'James', 'Bayot', '107 Bk. Anabu I-A Imus Cavite', '09957640067', 'strikejames123@gmail.com', '123456', '1234', 'Active', 1),
(18, 'Kent Darwin', 'Alcalde', 'Blk10 Lot32 Ph1 West Plains Subd. Trece Martirez City, Cavite', '09164975485', 'kent.alcalde@gmail.com', '598741852', '1234', 'Active', 1),
(15, 'John', 'Doe', '012 Sherwood St., Imus, Cavite', '09261994168', 'lpu-customer-1@gmail.com', 'password', '6c70752d637573746f6d65722d3140676d61696c2e636f6d', 'Active', 1),
(16, 'Lilybeth', 'Ranada', 'New Rochelle', '1234567890', 'lilybeth.ranada@gmail.com', 'lilybeth123', '6c696c79626574682e72616e61646140676d61696c2e636f6d', 'Active', 1),
(19, 'joyce', 'bawag', '058 bucal, amadeo, cavite', '09061984790', 'j.bawag@yahoo.com', 'pokemongo', '1234', 'Active', 1),
(20, 'cham', 'rivera', 'b8 l9 anabu imus ', '03164878451', 'charm@yahoo.com', 'chamcham', '1234', 'Active', 1),
(21, 'kappa', 'Pride', 'general trias cavite', '1321328648641256564879+874', 'grepo32@gmail.com', '123123123123', '1234', 'Active', 1),
(22, 'Kappa', 'Pride', 'Baby Street, Blk 69, Lot 69', '0949191', 'coolstorybro@gmail.com', 'roflxdgg', '1234', 'Active', 1),
(23, 'testing', 'testing', 'testing', '0921312323', 'testing@gmail.com', 'abc123456', '1234', 'Active', 1),
(24, 'joshiua', 'noble', 'dasmariÃ±as, Cavite', '09972995840', 'owamamitsu@gmail.com', 'savetheearth', '1234', 'Active', 1),
(25, 'testing', 'testing', 'testing', '0921312323', 'elmaranchuelo@gmail.com', 'abc1234567', '1234', 'Active', 1),
(26, 'wewe', 'defef', 'iujfiufwiujfeh', '9083256325328', 'budeman@gmai.com', 'gwaponibude', '1234', 'Inactive', 1),
(27, 'dianne', 'garcia', '123 wakwak wakwak', '09123456789', 'diannegarcia31@yahoo.com', 'sikreto', '1234', 'Inactive', 1),
(28, 'tester', 'testes', '123@banana.com', '2226666', '123@banana.com', '123456789', '1234', 'Active', 1),
(29, 'Luigi', 'Lacsamana', 'Imus Cavite', '09174340773', 'gio_knight101@yahoo.com', 'colcota94', '1234', 'Inactive', 1),
(30, 'Gian', 'Velasco', 'Dasma', '09846546841', 'gianvelasco@yahoo.com', 'asdf1234', '1234', 'Active', 1),
(31, 'bato', 'bato', 'bato', '09542324354354564132135431354', 'bato@yahoo.com', 'chamcham', '1234', 'Active', 1),
(32, 'Cedrick', 'Custodio', 'Gen. Trias, Cavite', '09279186497', 'cedrick.custodio@yahoo.com', 'cedrick1996', '1234', 'Inactive', 1),
(33, 'presci ', 'gie', 'maryland, usa', '12214354365', '123@gmail.com', '123456789', '1234', 'Active', 1),
(34, 'Rose', 'Tejano', 'DasmariÃ±as, Cavite', '09363136545', 'tejanoroselyn@gmail.com', '008231994mE', '1234', 'Active', 1),
(35, 'Junne Valerie', 'Villanueva', '38 Bucandala 1 Imus Cavite', '09173961475', 'junnechan017@yahoo.com', 'hakbeybi', '1234', 'Inactive', 1),
(36, 'Jhaii', 'Urbano', 'Winwardhills Subd', '09352222222', 'jhaiiurbano@gmail.com', '123456789', '1234', 'Active', 1),
(37, 'Juan', 'menardo', 'tanza cavite', '0969696969', 'juan@yahoo.com', 'zxcvbnnm', '1234', 'Active', 1),
(38, 'Miguel', 'Acebuche', 'Sa puso mo', '09151163205', 'miguelacebuche10@yahoo.com', '123456789', '1234', 'Active', 1),
(39, 'Luigi', 'Giuseppe', 'Imus', '09174340773', 'gio@yahoo.com', 'hotdogs123', '67696f407961686f6f2e636f6d', 'Active', 1),
(40, 'Frank Cedrick', 'Custodio', 'B30 Lot42 Navarro, Gen. Trias, Cavite', '09279186497', 'frankcedrickcustodio@yahoo.com', 'cedrick1996', '1234', 'Active', 1),
(41, 'ai', 'Culapan', '046 Buenavista II general Trias Cavite', '09363810626', 'airagculapan@gmail.com', '0123456ai', '1234', 'Active', 1),
(42, 'raymond', 'paano', 'blk 16 lot 6 city of dasma', '09282733743', 'chrstn0202@gmail.com', '123456789jo', '1234', 'Inactive', 1),
(43, 'x', 'naya', 'dsfafds', '21321', 'x@g.com', 'fsdfasdfadsf', '1234', 'Inactive', 1),
(44, 'Kreeztian', 'X', 'Tanza', '09123456789', 'kreeztianx@gmail.com', 'asdf1234', '1234', 'Active', 1),
(46, 'Jediael', 'Saliba', '084 Arnaldo Street', '09261994154', 'jeddsaliba@gmail.com', 'password', '1234', 'Active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acc_disc`
--

CREATE TABLE `tbl_acc_disc` (
  `discid` int(11) NOT NULL,
  `discname` varchar(50) NOT NULL,
  `discpercent` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_acc_disc`
--

INSERT INTO `tbl_acc_disc` (`discid`, `discname`, `discpercent`) VALUES
(1, 'Regular Consumer', '0.00'),
(2, 'Bulk Consumer', '0.05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminid` int(11) NOT NULL,
  `adminemail` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL,
  `adminfname` varchar(50) NOT NULL,
  `adminlname` varchar(50) NOT NULL,
  `admintype` varchar(50) NOT NULL,
  `adminexp` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminid`, `adminemail`, `adminpassword`, `adminfname`, `adminlname`, `admintype`, `adminexp`) VALUES
(1, 'ricksanchez@gmail.com', 'password', 'Rick', 'Sanchez', 'Regular', '2017-08-12'),
(5, 'mortysmith@gmail.com', 'password', 'Morty', 'Smith', 'Regular', '2017-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_act`
--

CREATE TABLE `tbl_admin_act` (
  `adminid` int(11) NOT NULL,
  `adminact` varchar(999) NOT NULL,
  `adminactdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_act`
--

INSERT INTO `tbl_admin_act` (`adminid`, `adminact`, `adminactdate`) VALUES
(1, 'Logged out', '2016-09-05 23:10:15'),
(1, 'Logged in', '2016-09-05 23:10:52'),
(1, 'Updated personal profile', '2016-09-05 23:32:47'),
(1, 'Logged out', '2016-09-05 23:34:38'),
(1, 'Logged in', '2016-09-05 12:13:36'),
(1, 'Changed a customer discount type', '2016-09-05 12:18:01'),
(1, 'Logged out', '2016-09-05 12:19:52'),
(1, 'Logged in', '2016-09-05 12:20:39'),
(1, 'Logged out', '2016-09-05 12:23:20'),
(1, 'Logged in', '2016-09-05 12:23:40'),
(1, 'Logged out', '2016-09-05 12:23:49'),
(1, 'Logged in', '2016-09-05 18:51:30'),
(1, 'Logged in', '2016-09-05 18:57:33'),
(1, 'Logged in', '2016-09-05 19:08:38'),
(1, 'Logged in', '2016-09-06 09:13:16'),
(1, 'Logged in', '2016-09-10 12:26:11'),
(1, 'Logged in', '2016-09-16 00:18:03'),
(1, 'Logged in', '2016-09-16 07:24:14'),
(1, 'Accepted order #1473394934', '2016-09-16 07:24:45'),
(1, 'Accepted order #1473395366', '2016-09-16 07:24:51'),
(1, 'Accepted order #1473395500', '2016-09-16 07:25:01'),
(1, 'Accepted order #1473402523', '2016-09-16 07:25:07'),
(1, 'Accepted order #1473403701', '2016-09-16 07:25:14'),
(1, 'Set order #1473395500 as delivered', '2016-09-16 07:25:22'),
(1, 'Set order #1473394934 as delivered', '2016-09-16 07:25:28'),
(1, 'Set order #1473395366 as delivered', '2016-09-16 07:25:34'),
(1, 'Set order #1473402523 as delivered', '2016-09-16 07:25:40'),
(1, 'Set order #1473403701 as delivered', '2016-09-16 07:25:46'),
(1, 'Logged in', '2016-09-29 20:55:35'),
(1, 'Logged in', '2016-09-29 21:40:43'),
(1, 'Accepted order #1475153637', '2016-09-29 23:35:43'),
(1, 'Set order #1475153637 as delivered', '2016-09-29 23:35:56'),
(1, 'Logged out', '2016-09-30 00:16:20'),
(1, 'Logged in', '2016-09-30 00:27:01'),
(1, 'Logged in', '2016-09-30 08:25:16'),
(1, 'Logged in', '2015-09-30 12:21:45'),
(1, 'Accepted order #1443583197', '2015-09-30 12:21:56'),
(1, 'Set order #1443583197 as delivered', '2015-09-30 12:22:05'),
(1, 'Accepted order #1443673453', '2015-10-01 13:24:42'),
(1, 'Set order #1443673453 as delivered', '2015-10-01 13:24:51'),
(1, 'Accepted order #1444454779', '2015-10-10 14:26:39'),
(1, 'Set order #1444454779 as delivered', '2015-10-10 14:26:47'),
(1, 'Accepted order #1452407313', '2016-01-10 15:29:00'),
(1, 'Set order #1452407313 as delivered', '2016-01-10 15:29:10'),
(1, 'Accepted order #1452497445', '2016-01-11 16:31:04'),
(1, 'Set order #1452497445 as delivered', '2016-01-11 16:31:13'),
(1, 'Accepted order #1452587541', '2016-01-12 17:32:42'),
(1, 'Set order #1452587541 as delivered', '2016-01-12 17:32:50'),
(1, 'Accepted order #1455269676', '2016-02-12 18:34:53'),
(1, 'Set order #1455269676 as delivered', '2016-02-12 18:35:01'),
(1, 'Accepted order #1455359813', '2016-02-13 19:37:08'),
(1, 'Set order #1455359813 as delivered', '2016-02-13 19:37:16'),
(1, 'Accepted order #1457955522', '2016-03-14 20:39:02'),
(1, 'Set order #1457955522 as delivered', '2016-03-14 20:39:12'),
(1, 'Accepted order #1458045624', '2016-03-15 21:40:40'),
(1, 'Set order #1458045624 as delivered', '2016-03-15 21:40:48'),
(1, 'Accepted order #1460727719', '2016-04-15 22:42:22'),
(1, 'Set order #1460727719 as delivered', '2016-04-15 22:42:32'),
(1, 'Accepted order #1463409842', '2016-05-16 23:44:21'),
(1, 'Set order #1463409842 as delivered', '2016-05-16 23:44:29'),
(1, 'Accepted order #1466091965', '2016-06-17 00:46:26'),
(1, 'Set order #1466091965 as delivered', '2016-06-17 00:46:37'),
(1, 'Accepted order #1466095686', '2016-06-17 01:48:21'),
(1, 'Set order #1466095686 as delivered', '2016-06-17 01:48:36'),
(1, 'Accepted order #1468691386', '2016-07-17 02:50:02'),
(1, 'Set order #1468691386 as delivered', '2016-07-17 02:50:10'),
(1, 'Accepted order #1471373482', '2016-08-17 03:51:39'),
(1, 'Set order #1471373482 as delivered', '2016-08-17 03:51:48'),
(1, 'Accepted order #1474055607', '2016-09-17 04:53:45'),
(1, 'Set order #1474055607 as delivered', '2016-09-17 04:53:56'),
(1, 'Accepted order #1472677012', '2016-09-01 05:57:09'),
(1, 'Set order #1472677012 as delivered', '2016-09-01 05:57:19'),
(1, 'Accepted order #1472767109', '2016-09-02 06:58:44'),
(1, 'Set order #1472767109 as delivered', '2016-09-02 06:58:53'),
(1, 'Accepted order #1472857194', '2016-09-03 08:00:08'),
(1, 'Set order #1472857194 as delivered', '2016-09-03 08:00:18'),
(1, 'Accepted order #1472947293', '2016-09-04 09:01:48'),
(1, 'Set order #1472947293 as delivered', '2016-09-04 09:01:56'),
(1, 'Accepted order #1473037359', '2016-09-05 10:02:52'),
(1, 'Set order #1473037359 as delivered', '2016-09-05 10:03:01'),
(1, 'Logged in', '2016-09-30 12:43:49'),
(1, 'Logged in', '2016-09-30 13:29:01'),
(1, 'Registered Morty Smith as a new Administrator', '2016-09-30 13:35:55'),
(1, 'Logged in', '2016-09-10 19:30:39'),
(1, 'Accepted order #1473507025', '2016-09-10 20:30:52'),
(1, 'Set order #1473507025 as delivered', '2016-09-10 20:30:59'),
(1, 'Accepted order #1473597108', '2016-09-11 21:32:00'),
(1, 'Set order #1473597108 as delivered', '2016-09-11 21:32:06'),
(1, 'Accepted order #1473687192', '2016-09-12 22:33:24'),
(1, 'Set order #1473687192 as delivered', '2016-09-12 22:33:30'),
(1, 'Accepted order #1473777255', '2016-09-13 23:34:25'),
(1, 'Set order #1473777255 as delivered', '2016-09-13 23:34:31'),
(1, 'Logged in', '2016-09-30 07:59:32'),
(1, 'Logged in', '2016-09-30 08:09:11'),
(1, 'Added a new brand: AMD', '2016-09-30 08:12:03'),
(1, 'Logged in', '2016-09-30 08:31:40'),
(1, 'Accepted order #1475238033', '2016-09-30 08:46:21'),
(1, 'Set order #1475238033 as delivered', '2016-09-30 08:46:30'),
(1, 'Logged in', '2016-09-30 10:53:47'),
(1, 'Logged in', '2016-10-15 13:31:03'),
(1, 'Logged in', '2016-10-15 21:37:21'),
(1, 'Logged in', '2016-10-16 10:17:47'),
(1, 'Logged in', '2016-10-19 14:45:59'),
(1, 'Accepted order #1476531296', '2016-10-19 15:11:35'),
(1, 'Logged in', '2016-10-25 08:10:35'),
(1, 'Logged in', '2016-11-06 18:33:14'),
(1, 'Logged in', '2016-11-06 21:26:57'),
(1, 'Logged in', '2016-11-06 23:53:53'),
(1, 'Logged in', '2016-11-07 01:48:00'),
(1, 'Logged in', '2016-11-07 06:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_basket`
--

CREATE TABLE `tbl_basket` (
  `accid` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `itemtotal` decimal(10,2) NOT NULL,
  `basketdate` date NOT NULL,
  `dateexp` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandid` int(11) NOT NULL,
  `brandname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandid`, `brandname`) VALUES
(1, 'Intel'),
(2, 'Asus'),
(3, 'Kingston'),
(4, 'Adata'),
(5, 'ASRock'),
(6, 'ECS'),
(7, 'Gigabyte'),
(8, 'MSI'),
(9, 'Apacer'),
(10, 'Corsair'),
(11, 'Inno3D'),
(12, 'PowerColor'),
(13, 'Creative'),
(14, 'Cooler Master'),
(15, 'Antec'),
(16, 'Xigmatek'),
(17, 'Armaggeddon'),
(18, 'FRONTIER'),
(19, 'Thermaltake'),
(20, 'Western Digital'),
(21, 'Seagate'),
(22, 'Samsung'),
(23, 'Lenovo'),
(24, 'LITE-ON'),
(25, 'Cougar'),
(26, 'AMD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`categoryid`, `categoryname`) VALUES
(1, 'Processor'),
(2, 'Motherboard'),
(3, 'Memory (RAM)'),
(4, 'Storage (HDD/SSD)'),
(5, 'Video Card'),
(6, 'Sound Card'),
(7, 'CD / DVD Drive'),
(8, 'CPU Fan / Heatsink'),
(9, 'Power Supply'),
(10, 'Chassis');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id` int(11) NOT NULL,
  `m_address` varchar(999) NOT NULL,
  `m_contact` varchar(30) NOT NULL,
  `m_email` varchar(999) NOT NULL,
  `m_about` varchar(999) NOT NULL,
  `m_tin` varchar(50) NOT NULL,
  `m_terms_conditions` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `m_address`, `m_contact`, `m_email`, `m_about`, `m_tin`, `m_terms_conditions`) VALUES
(1, 'G/F, JIM Building, Tanza Trece Martires Road, Daang Amaya 1, Tanza, 4108 Cavite', '(046) 437 7089', 'skidwanlaiph@gmail.com', 'Skidwanlai-tanza.byethost31.com is the go-to shopping website for computer components and desktop packages by Skidwanlai Computer World Tanza.', '000-299-299-015', 'In General\r\nSkidwanlai Computer World Tanza owns and operates this Website. This document governs your relationship with skidwanlai-tanza.byethost31.com. Access to and use of this Website and the products and services available through this are subject to the following terms, conditions and notices. By using the Services, you are agreeing to all of the Terms of Service, as may be updated by us from time to time. You should check this page regularly to take notice of any changes we may have made to the Terms of Service.\r\n\r\nPrivacy Policy\r\nBy using this Website, you consent to the processing described therein and warrant that all data provided by you is accurate. Rest assure that your information shall not be manipulated by any means and that skidwanlai-tanza.byethost31.com shall only use your information for reference use only.\r\n\r\nProhibitions\r\nYou must not misuse this Website. You will not: commit or encourage a criminal offense; transmit or distribute a virus, trojan, worm, logic bomb or any other material which is malicious, technologically harmful, in breach of confidence or in any way offensive or obscene; hack into any aspect of the Service; corrupt data; cause annoyance to other users; infringe upon the rights of any other person''s proprietary rights; send any unsolicited advertising or promotional material, commonly referred to as spam; or attempt to affect the performance or functionality of any computer facilities of or accessed through this Website. Breaching this provision would constitute a criminal offense and skidwanlai-tanza.byethost31.com will report any such breach to the relevant law enforcement authorities and disclose your identity to them.\r\n\r\nWe will not be liable for any loss or damage caused by a distributed denial-of-service attack, viruses or other technologically harmful material that may infect your computer equipment, computer programs, data or other proprietary material due to your use of this Website or to your downloading of any material posted on it, or on any website linked to it.\r\n\r\nIntellectual Property, Software and Content\r\nThe intellectual property rights in all software and content made available to you on or through this Website remains the property of skidwanlai-tanza.byethost31.com or its licensors and are protected by copyright laws and treaties around the world. All such rights are reserved by skidwanlai-tanza.byethost31.com and its licensors. You may store, print and display the content supplied solely for your own personal use. You are not permitted to publish, manipulate, distribute or otherwise reproduce, in any format, any of the content or copies of the content supplied to you or which appears on this Website nor may you use any such content in connection with any business or commercial enterprise.\r\n\r\nTerms of Sale\r\nBy placing an order you are offering to purchase a product on and subject to the following terms and conditions. All orders are subject to availability and confirmation of the order price.\r\nDispatch times may vary according to availability and subject to any delays resulting from postal delays or force majeure for which we will not be responsible. \r\n\r\nskidwanlai-tanza.byethost31.com retains the right to refuse any request made by you. When placing an order you undertake that all details you provide to us are true and accurate, that you are an authorized user to place your order. The cost of products and services may fluctuate. All prices advertised are subject to such changes.\r\n\r\n(a) Pricing and Availability\r\nWhilst we try and ensure that all details, descriptions and prices which appear on this Website are accurate, errors may occur. If we discover an error in the price of any goods which you have ordered we will inform you of this as soon as possible and give you the option of reconfirming your order at the correct price or cancelling it. If we are unable to contact you we will treat the order as cancelled.\r\nDelivery costs will be charged in addition; such additional charges are clearly displayed where applicable and included in the Total Cost.\r\nSkidwanlai Computer World operates only within Cavite area only and is not available in places outside of Cavite.\r\n\r\n(b) Payment \r\nYour order will be delivered by an official contact of ours. Please check first if he/she is truly a member of our group and insists you to see his/her I.D. before any transaction occurs. Upon receiving your order we carry out a standard authorization check and recommend you to pay the exact amount. This process is only applicable via Cash on Delivery. Transactions via PayPal will not be liable to pay additional amount upon receiving your order.\r\n\r\nVariation\r\nskidwanlai-tanza.byethost31.com shall have the right in its absolute discretion at any time and without notice to amend, remove or vary the Services and/or any page of this Website.\r\n\r\nEntire Agreement\r\nThe above Terms of Service constitute the entire agreement of the parties and supersede any and all preceding and contemporaneous agreements between you and skidwanlai-tanza.byethost31.com.                                                                                                                                                                                    ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `invoice` int(30) NOT NULL,
  `accid` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `name` varchar(999) NOT NULL,
  `qty` int(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `markdown` decimal(10,2) NOT NULL,
  `priceMD` decimal(10,2) NOT NULL,
  `orderstatus` varchar(50) NOT NULL,
  `dateordered` datetime NOT NULL,
  `eta` date NOT NULL,
  `shipday` varchar(30) NOT NULL,
  `shipcost` decimal(10,2) NOT NULL,
  `method` varchar(30) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) NOT NULL,
  `grandtotal` decimal(10,2) NOT NULL,
  `customername` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(999) NOT NULL,
  `city` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `acceptby` varchar(100) NOT NULL,
  `datedelivered` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`invoice`, `accid`, `code`, `name`, `qty`, `price`, `markdown`, `priceMD`, `orderstatus`, `dateordered`, `eta`, `shipday`, `shipcost`, `method`, `discount`, `vat`, `grandtotal`, `customername`, `contact`, `address`, `city`, `brgy`, `acceptby`, `datedelivered`) VALUES
(1443583197, 17, '37736471A3', 'Intel Pentium Dual Core G2020 2.9Ghz 3MB Cache LGA1155 22nm Processor', 2, '5198.00', '0.00', '5198.00', 'Delivered', '2015-09-30 11:19:57', '2015-10-09', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '354.85', '7550.85', 'James Bayot', '09957640067', '107 Bk. Anabu I-A Imus Cavite', 'Imus', 'Anabu I~A', 'Rick Rick', '2015-09-30 12:22:05'),
(1443583197, 17, '30BCFC33F3', 'Apacer 4GB DDR3 1333 / PC10600 DIMM', 1, '1899.00', '0.00', '1899.00', 'Delivered', '2015-09-30 11:19:58', '2015-10-09', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '354.85', '7550.85', 'James Bayot', '09957640067', '107 Bk. Anabu I-A Imus Cavite', 'Imus', 'Anabu I~A', 'Rick Rick', '2015-09-30 12:22:05'),
(1443673453, 18, 'B1A3B6FCD0', 'Corsair Force Series LS 120GB SATA 3 6Gb/s Solid State Drive', 1, '5188.00', '0.00', '5188.00', 'Delivered', '2015-10-01 12:24:13', '2015-10-12', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '259.40', '5546.40', 'Kent Darwin Alcalde', '09164975485', 'Blk10 Lot32 Ph1 West Plains Subd. Trece Martirez City, Cavite', 'Trece Martires City', 'San Agustin (Pob.)', 'Rick Rick', '2015-10-01 13:24:51'),
(1444454779, 15, 'F37CF0C1DD', 'Corsair VS Series VS650 (CP-9020051) APFC Power Supply [80% Up Efficiency]', 2, '5976.00', '0.00', '5976.00', 'Delivered', '2015-10-10 13:26:19', '2015-10-20', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '298.80', '6373.80', 'John Doe', '09261994168', '084 Arnaldo Street, General Trias, Cavite', 'General Trias', 'Arnaldo Pob. (Bgy. 7)', 'Rick Rick', '2015-10-10 14:26:47'),
(1452407313, 16, '628C0121B1', 'Intel Core i3-4170 Processor (3M Cache, 3.70 GHz) FCLGA1150 Socket', 1, '5799.00', '0.00', '5799.00', 'Delivered', '2016-01-10 14:28:33', '2016-01-19', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '289.95', '6187.95', 'Lilybeth Ranada', '1234567890', 'New Rochelle', 'Cavite City', 'Barangay 1 (Hen. M. Alvarez)', 'Rick Rick', '2016-01-10 15:29:10'),
(1452497445, 19, '4E0F3B7E18', 'Asus GT730 2GB DDR3 128BIT (GT730-2GD3) Video Card', 3, '8664.00', '0.00', '8664.00', 'Delivered', '2016-01-11 15:30:45', '2016-01-20', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '433.20', '9196.20', 'joyce bawag', '09061984790', '058 bucal, amadeo, cavite', 'Amadeo', 'Bucal', 'Rick Rick', '2016-01-11 16:31:13'),
(1452587541, 20, '11DF60299D', 'Creative Audigy Value', 1, '1699.00', '0.00', '1699.00', 'Delivered', '2016-01-12 16:32:21', '2016-01-21', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '84.95', '1882.95', 'cham rivera', '03164878451', 'b8 l9 anabu imus ', 'Imus', 'Anabu I~A', 'Rick Rick', '2016-01-12 17:32:50'),
(1455269676, 21, '2E5E8AD113', 'Cooler Master Hyper 212 EVO Turbo Edition (20th Anniversary) CPU Cooler w/ 2 Fans', 1, '1999.00', '0.00', '1999.00', 'Delivered', '2016-02-12 17:34:36', '2016-02-23', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '99.95', '2197.95', 'kappa Pride', '1321328648641256564879+874', 'general trias cavite', 'General Trias', 'Bacao I', 'Rick Rick', '2016-02-12 18:35:01'),
(1455359813, 22, '7C8BECD1FD', 'Gigabyte GA-G41M Combo LGA775 Motherboard', 1, '3699.00', '0.00', '3699.00', 'Delivered', '2016-02-13 18:36:53', '2016-02-23', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '184.95', '3982.95', 'Kappa Pride', '0949191', 'Baby Street, Blk 69, Lot 69', 'Indang', 'Daine I', 'Rick Rick', '2016-02-13 19:37:16'),
(1457955522, 23, '5F3F9ECB11', 'PowerColor Radeon HD5570 2GB DDR3 128BIT DVI/HDMI Graphic Card', 3, '7464.00', '0.00', '7464.00', 'Delivered', '2016-03-14 19:38:42', '2016-03-23', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '373.20', '7936.20', 'testing testing', '0921312323', 'testing', 'Naic', 'Humbac', 'Rick Rick', '2016-03-14 20:39:12'),
(1458045624, 24, '0EB3D2F1EB', 'Samsung 120GB MZ-7TE120BW 840 EVO Basic Solid State Drive', 1, '5090.00', '0.00', '5090.00', 'Delivered', '2016-03-15 20:40:24', '2016-03-24', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '254.50', '5443.50', 'joshiua noble', '09972995840', 'dasmariÃ±as, Cavite', 'Dasmarinas City', 'Langkaan I', 'Rick Rick', '2016-03-15 21:40:48'),
(1460727719, 25, '7C8BECD1FD', 'Gigabyte GA-G41M Combo LGA775 Motherboard', 2, '7398.00', '0.00', '7398.00', 'Delivered', '2016-04-15 21:41:59', '2016-04-26', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '369.90', '7866.90', 'testing testing', '0921312323', 'testing', 'Indang', 'Guyam Munti', 'Rick Rick', '2016-04-15 22:42:32'),
(1463409842, 28, '628C0121B1', 'Intel Core i3-4170 Processor (3M Cache, 3.70 GHz) FCLGA1150 Socket', 1, '5799.00', '0.00', '5799.00', 'Delivered', '2016-05-16 22:44:02', '2016-05-25', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '289.95', '6187.95', 'tester testes', '2226666', 'dasmariÃ±as, Cavite', 'Dasmarinas City', 'Emmanuel Bergado II', 'Rick Rick', '2016-05-16 23:44:29'),
(1466091965, 30, '9D13116405', 'Asus H97M-E Socket H3 LGA-1150 Motherboard', 1, '4888.00', '0.00', '4888.00', 'Delivered', '2016-06-16 23:46:05', '2016-06-27', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '244.40', '5231.40', 'Gian Velasco', '09846546841', 'Dasma', 'Dasmarinas City', 'Burol II', 'Rick Rick', '2016-06-17 00:46:37'),
(1466095686, 31, '287C119388', 'MSI B85M-P33 LGA1150 Socket Intel B85 SATA 6Gb/s USB 3.0 Micro ATX Entry DVI Business Intel Motherboard', 1, '3388.00', '0.00', '3388.00', 'Delivered', '2016-06-17 00:48:06', '2016-06-28', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '169.40', '3656.40', 'bato bato', '09542324354354564132135431354', 'Noveleta', 'Noveleta', 'Santa Rosa I', 'Rick Rick', '2016-06-17 01:48:36'),
(1468691386, 34, '1AFC71461B', 'ECS H61H2-MV LGA1155 Intel H61 VGA Micro-ATX Intel Motherboard', 1, '1988.00', '0.00', '1988.00', 'Delivered', '2016-07-17 01:49:46', '2016-07-27', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '99.40', '2186.40', 'Rose Tejano', '09363136545', 'DasmariÃ±as, Cavite', 'Dasmarinas City', 'Emmanuel Bergado II', 'Rick Rick', '2016-07-17 02:50:10'),
(1471373482, 37, 'B0F55618A7', 'Kingston SSDNow V300 120GB SV300S37A SATA 3 7mm Solid State Drive', 1, '4999.00', '0.00', '4999.00', 'Delivered', '2016-08-17 02:51:22', '2016-08-26', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '249.95', '5347.95', 'Juan menardo', '0969696969', 'tanza cavite', 'Tanza', 'Barangay I (Pob.)', 'Rick Rick', '2016-08-17 03:51:48'),
(1472767109, 37, '30BCFC33F3', 'Apacer 4GB DDR3 1333 / PC10600 DIMM', 2, '3798.00', '0.00', '3798.00', 'Delivered', '2016-09-02 05:58:29', '2016-09-13', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '189.90', '4086.90', 'Juan menardo', '0969696969', 'tanza cavite', 'Tanza', 'Biga', 'Rick Rick', '2016-09-02 06:58:53'),
(1472677012, 36, '93DC1C3358', 'Corsair 2GB DDR3 PC1333 / PC3-10600 VS2GB1333D3G DIMM', 2, '2098.00', '0.00', '2098.00', 'Delivered', '2016-09-01 04:56:52', '2016-09-10', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '104.90', '2301.90', 'Jhaii Urbano', '09352222222', 'Winwardhills Subd', 'Maragondon', 'Pantihan II (Sagbat)', 'Rick Rick', '2016-09-01 05:57:19'),
(1472857194, 37, '5046F5A75B', 'ASRock G41C-GS Combo DDR2/DDR3 LGA775 socket Motherboard', 1, '3399.00', '0.00', '3399.00', 'Delivered', '2016-09-03 06:59:54', '2016-09-13', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '169.95', '3667.95', 'Juan menardo', '0969696969', 'tanza cavite', 'Tanza', 'Calibuyo', 'Rick Rick', '2016-09-03 08:00:18'),
(1472947293, 39, 'E99B6948FB', 'ASRock H61M-VS3 LGA1155 Motherboard', 2, '4376.00', '0.00', '4376.00', 'Delivered', '2016-09-04 08:01:33', '2016-09-13', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '218.80', '4693.80', 'Luigi Giuseppe', '09174340773', 'Imus', 'Imus', 'Alapan I~A', 'Rick Rick', '2016-09-04 09:01:56'),
(1473037359, 39, '79C6B5BA80', 'Inno3D NVIDIA Ge Force GT630 2GB KEPLER 64BIT HDMI, Dual Link DVI, VGA', 1, '2788.00', '0.00', '2788.00', 'Delivered', '2016-09-05 09:02:39', '2016-09-14', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '139.40', '3026.40', 'Luigi Giuseppe', '09174340773', 'Imus', 'Imus', 'Alapan I~A', 'Rick Rick', '2016-09-05 10:03:01'),
(1473507025, 45, '93DC1C3358', 'Corsair 2GB DDR3 PC1333 / PC3-10600 VS2GB1333D3G DIMM', 1, '1049.00', '0.00', '1049.00', 'Delivered', '2016-09-10 19:30:25', '2016-09-12', 'Next day shipping', '150.00', 'Cash on Delivery', '0.00', '306.95', '6595.95', 'Jediael Saliba', '09261994154', '084 Arnaldo Street, General Trias, Cavite', 'General Trias', 'Arnaldo Pob. (Bgy. 7)', 'Rick Rick', '2016-09-10 20:30:59'),
(1473507025, 45, '0EB3D2F1EB', 'Samsung 120GB MZ-7TE120BW 840 EVO Basic Solid State Drive', 1, '5090.00', '0.00', '5090.00', 'Delivered', '2016-09-10 19:30:25', '2016-09-12', 'Next day shipping', '150.00', 'Cash on Delivery', '0.00', '306.95', '6595.95', 'Jediael Saliba', '09261994154', '084 Arnaldo Street, General Trias, Cavite', 'General Trias', 'Arnaldo Pob. (Bgy. 7)', 'Rick Rick', '2016-09-10 20:30:59'),
(1473597108, 45, '37736471A3', 'Intel Pentium Dual Core G2020 2.9Ghz 3MB Cache LGA1155 22nm Processor', 2, '5198.00', '0.00', '5198.00', 'Delivered', '2016-09-11 20:31:48', '2016-09-12', 'Next day shipping', '150.00', 'Cash on Delivery', '0.00', '259.90', '5607.90', 'Jediael Saliba', '09261994154', '084 Arnaldo Street, General Trias, Cavite', 'General Trias', 'Arnaldo Pob. (Bgy. 7)', 'Rick Rick', '2016-09-11 21:32:06'),
(1473687192, 17, '287C119388', 'MSI B85M-P33 LGA1150 Socket Intel B85 SATA 6Gb/s USB 3.0 Micro ATX Entry DVI Business Intel Motherboard', 2, '6776.00', '0.00', '6776.00', 'Delivered', '2016-09-12 21:33:12', '2016-09-13', 'Next day shipping', '150.00', 'Cash on Delivery', '0.00', '338.80', '7264.80', 'James Bayot', '09957640067', '107 Bk. Anabu I-A Imus Cavite', 'Imus', 'Anabu I~A', 'Rick Rick', '2016-09-12 22:33:30'),
(1473777255, 17, '2DA63E4076', 'Antec NEW SOLUTION SERIES VSK-4000 Black SGCC steel ATX Mid Tower Computer Case', 3, '4197.00', '0.00', '4197.00', 'Delivered', '2016-09-13 22:34:15', '2016-09-22', '7 day shipping', '99.00', 'Cash on Delivery', '0.00', '209.85', '4505.85', 'James Bayot', '09957640067', '107 Bk. Anabu I-A Imus Cavite', 'Imus', 'Anabu I~A', 'Rick Rick', '2016-09-13 23:34:31'),
(1475238033, 45, '80E0B4B01C', 'AMD FX-8350 4.0GHZ BLK EDITION PROCESSOR', 2, '16400.00', '0.00', '16400.00', 'Delivered', '2016-09-30 08:24:44', '2016-10-11', '7 day shipping', '99.00', 'Paypal', '0.00', '820.00', '17319.00', 'Jediael Saliba', '09261994154', '084 Arnaldo Street, General Trias, Cavite', 'General Trias', 'Arnaldo Pob. (Bgy. 7)', 'Rick Rick', '2016-09-30 08:46:30'),
(1476531296, 46, '9D13116405', 'Asus H97M-E Socket H3 LGA-1150 Motherboard', 1, '4888.00', '0.00', '4888.00', 'Ready for Delivery', '2016-10-15 19:34:56', '2016-10-17', 'Next day shipping', '150.00', 'Cash on Delivery', '0.00', '244.40', '5282.40', 'Jediael Saliba', '09261994154', '084 Arnaldo Street', 'Mendez', 'Galicia I', 'Rick Rick', '0000-00-00 00:00:00'),
(1477353928, 15, '0EB3D2F1EB', 'Samsung 120GB MZ-7TE120BW 840 EVO Basic Solid State Drive', 1, '5090.00', '0.00', '5090.00', 'Processing', '2016-10-25 08:05:28', '2016-10-26', 'Next day shipping', '150.00', 'Cash on Delivery', '0.00', '254.50', '5494.50', 'John Doe', '09261994168', '012 Sherwood St., Imus, Cavite', 'Imus', 'Bucandala I', '', '0000-00-00 00:00:00'),
(1478432565, 46, '5046F5A75B', 'ASRock G41C-GS Combo DDR2/DDR3 LGA775 socket Motherboard', 2, '6798.00', '0.00', '6798.00', 'Processing', '2016-11-06 19:42:45', '2016-11-07', 'Next day shipping', '150.00', 'Cash on Delivery', '0.00', '339.90', '7287.90', 'Jediael Saliba', '09261994154', '084 Arnaldo Street', 'General Trias', 'Arnaldo Pob. (Bgy. 7)', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod`
--

CREATE TABLE `tbl_prod` (
  `code` varchar(30) NOT NULL,
  `categoryname` varchar(50) NOT NULL,
  `name` varchar(999) NOT NULL,
  `des` varchar(999) NOT NULL,
  `brandname` varchar(50) NOT NULL,
  `img` varchar(500) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(30) NOT NULL,
  `suppliername` varchar(100) DEFAULT NULL,
  `dateadded` date NOT NULL,
  `daterestock` date NOT NULL,
  `markdown` decimal(10,2) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod`
--

INSERT INTO `tbl_prod` (`code`, `categoryname`, `name`, `des`, `brandname`, `img`, `price`, `stock`, `suppliername`, `dateadded`, `daterestock`, `markdown`, `adminid`) VALUES
('8B92D914CF', 'Processor', 'Intel Celeron 420', '512MB L2 Cache, EM64T, 800MHz FSB 1.6GHz', 'Intel', 'products/celeron-box-01.gif', '1799.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.05', 1),
('3F891A555E', 'Processor', 'Intel PentiumÂ® Dual Core G620 2.60GHz, 3MB Cache LGA1155 Processor', 'IntelÂ® PentiumÂ® Processor G620 (3M Cache, 2.60 GHz)', 'Intel', 'products/intel_pentium_processor_g620.jpg', '2399.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('37736471A3', 'Processor', 'Intel Pentium Dual Core G2020 2.9Ghz 3MB Cache LGA1155 22nm Processor', 'Intel Smart Cache 3MB / Lithography 22nm / Sockets Supported FC LGA1155', 'Intel', 'products/intel_g2020.gif', '2599.00', 64, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('C98E3CC886', 'Processor', 'Intel Core i5-4690K Processor (6M Cache, up to 3.90GHz) FCLGA1150 Socket', 'IntelÂ® Coreâ„¢ i5-4690K Processor (6M Cache, up to 3.90GHz) / Memory Types DDR3-1333/1600, DDR3L-1333/1600 @ 1.5V / Processor Graphics Intel HD Graphics 4600 / Sockets Supported FCLGA1150', 'Intel', 'products/intel_i5-4690k.gif', '11499.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('E5218F00AA', 'Processor', 'Intel Core i7-4790 Processor (8M Cache, up to 4.00 GHz) FCLGA1150 Socket', 'i7-4790 up to 4.00 GHz / DDR3-1333/1600 / Intel HD Graphics 4600 / FCLGA1150 Socket', 'Intel', 'products/intel_i7-4790.gif', '14999.00', 68, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('628C0121B1', 'Processor', 'Intel Core i3-4170 Processor (3M Cache, 3.70 GHz) FCLGA1150 Socket', 'Intel Core i3-4170 Processor (3M Cache, 3.70 GHz) / Memory Types DDR3-1333/1600, DDR3L-1333/1600 @ 1.5V / IntelÂ® HD Graphics 4400 / Sockets Supported: FCLGA1150', 'Intel', 'products/intel_i3-4170.gif', '5799.00', 67, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('E99B6948FB', 'Motherboard', 'ASRock H61M-VS3 LGA1155 Motherboard', 'Solid Capacitor for CPU power / Supports Dual Channel DDR3 1600 / 1 x PCIe 3.0 x16 Slot / Supports IntelÂ® HD Graphics with Built-in Visuals / 5.1 CH HD Audio (Realtek ALC662 Audio Codec)', 'ASRock', 'products/h61m-vs3.gif', '2188.00', 67, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('A5AD328792', 'Motherboard', 'Asus H81M-C LGA1150 with Parallel Port mATX Motherboard', 'Intel Socket 1150 / Intel H81 / Integrated Graphics Processor / 1 x PCIe 2.0 x16 / 2 x PCIe 2.0 x1 / 1 x PCIv / IntelÂ® H81 chipset', 'Asus', 'products/asus_h81m-c.gif', '3299.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('D17941736D', 'Motherboard', 'Asus B85M-G LGA1150 4th Gen mATX Motherboard', 'ASUS 5X Protection: All-round protection provides the best quality, reliability, and durability / USB 3.0 BOOST (UASP Support): 170% faster transfer speeds than traditional USB 3.0 / Network iControl: Real-time network bandwidth management / Fan Xpert :Dedicated CPU and case fan controls / CrashFree BIOS 3: Restore corrupted BIOS data from USB storage / AI Suite 3: One-stop access to innovative ASUS features', 'Asus', 'products/asus-b85m-g.gif', '3688.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('A2F92E03BE', 'Motherboard', 'Asus B85-PRO-GAMER, High-value gaming board with SupremeFX audio', 'Socket LGA1150 / Intel B85 Express Chipset / Dual DDR3 1600 Support / SupremeFX / Intel Gigabit LAN & GameFirst II / Sonic Radar', 'Asus', 'products/asus-b85-pro-gamer.gif', '5388.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('9D13116405', 'Motherboard', 'Asus H97M-E Socket H3 LGA-1150 Motherboard', 'Processor Support: Core i7, Core i5, Core i3, Pentium, Celeron, Xeon / Socket Type: Socket H3 LGA-1150 / Form Factor: Micro ATX', 'Asus', 'products/asus_h97m-e.gif', '4888.00', 67, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('5046F5A75B', 'Motherboard', 'ASRock G41C-GS Combo DDR2/DDR3 LGA775 socket Motherboard', 'Supports FSB1333/1066/800/533 MHz CPUs / Supports Dual Channel DDR3 1333(OC) + DDR2 800 / Intel Graphics Media Accelerator X4500 / PCIE Gigabit LAN', 'ASRock', 'products/asrock_g41c-gs.gif', '3399.00', 66, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('C56CC4523F', 'Motherboard', 'ASRock Penryn1600SLi-1100dB', 'n650i, 3PCI-E, DC-DDR2, 7.1A,6sATA2-R,Gbit,Fwire', 'ASRock', 'products/asrock-penryn1600sli-1100db.gif', '4688.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('1AFC71461B', 'Motherboard', 'ECS H61H2-MV LGA1155 Intel H61 VGA Micro-ATX Intel Motherboard', 'Intel H61 Express Chipset / Core i7 / i5 / i3 / Pentium / Celeron (LGA1155) / DDR3 1600/1333', 'ECS', 'products/ecs_h61h2-mv.gif', '1988.00', 68, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('DB9F26D1D3', 'Motherboard', 'ECS H61H2-M17 (v1.0) LGA1155 Intel H61 HDMI Micro-ATX Intel Motherboard', 'Intel H61 Express Chipset / Core i7 / i5 / i3 / Pentium / Celeron (LGA1155) / DDR3 1066/1333', 'ECS', 'products/ecs_h61h2-m17.gif', '2088.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('8E263D3F00', 'Motherboard', 'ECS H81H3-M4 (1.0A) LGA1150 Intel H81 HDMI SATA 6Gb/s USB 3.0 Micro ATX Intel Motherboard', 'Intel H81 Express Chipset / Core i7 / i5 / i3 / Pentium / Celeron (LGA1150)', 'ECS', 'products/ecs_h81h3-m4_v1.gif', '2299.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('CE2F9AF405', 'Motherboard', 'Gigabyte GA-H81M-S2PH LGA1150, USB 3.0, Parallel Port, PCI Slot, HDMI micro ATX Mother Board', 'LGA1150 / USB 3.0 / Parallel Port / PCI Slot / HDMI micro ATX', 'Gigabyte', 'products/gigabyte_ga-h81m-s2ph.gif', '2888.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('7C8BECD1FD', 'Motherboard', 'Gigabyte GA-G41M Combo LGA775 Motherboard', 'Supports 45nm Intel Core 2 multi-core processors with FSB 1333MHz / Supports both DDR2 and DDR3 memory for great flexibility / Integrated Intel Graphics Media Accelerator X4500 (DirectX 10)', 'Gigabyte', 'products/ga-g41m.gif', '3699.00', 66, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('FF71D691A7', 'Motherboard', 'Gigabyte GA-H110M-DS2 DDR3, H110, DualDDR3-1600, SATA3, D-Sub, mATX', 'Gigabyte GA-H110M-DS2 DDR3, H110, DualDDR3-1600, SATA3, D-Sub, mATX', 'Gigabyte', 'products/gigabyte_ga-h110m-ds2.gif', '3888.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('EC50E44137', 'Motherboard', 'Gigabyte GA-Z97M-D3H Socket 1150 micro-ATX Motherboard', 'Intel Z97, LGA1150, 4 x DDR3 DIMM, PCI Express x16, 2 x PCI, PS/2, D-Sub, DVI-D, HDMI, 4 x USB 3.0, 2 x USB 2.0, RJ-45, 6 x audio jacks, Micro ATX', 'Gigabyte', 'products/gigabyte_ga-z97m-d3h.gif', '5888.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('67B7A31EC3', 'Motherboard', 'MSI Z87-G41 PC MATE LGA1150 Intel Z87 HDMI SATA 6Gb/s USB 3.0 ATX High Performance CF Intel Motherboard', 'Intel Z87 / 4th-Gen Intel Core i7 / i5/ i3 (LGA1150) / DDR3 3000(OC)/2800(OC)', 'MSI', 'products/msi_z87-g41.gif', '4950.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('287C119388', 'Motherboard', 'MSI B85M-P33 LGA1150 Socket Intel B85 SATA 6Gb/s USB 3.0 Micro ATX Entry DVI Business Intel Motherboard', 'Intel B85 / 4th-Gen Intel Core i7 / i5/ i3 (LGA1150) / DDR3 1600/1333', 'MSI', 'products/msi_b85m-p33.gif', '3388.00', 66, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('31BED1CA59', 'Motherboard', 'MSI H81M-P33 Socket LGA1150/Supports DDR3-1600 Memory/USB 3.0 + SATA 6Gb/s Motherboard', 'Supports 4th Gen IntelÂ® Coreâ„¢ / PentiumÂ® / CeleronÂ® processors for LGA 1150 socket / Supports DDR3-1600 Memory / USB 3.0 + SATA 6Gb/s', 'MSI', 'products/msi_h81m-p33.gif', '2688.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('9E93FC1063', 'Motherboard', 'MSI H61M-P31/W8 Socket LGA1155 Motherboard', 'Intel H61 (B3) Chipset Based / OC Genie II: Auto OC to boost performance in 1 sec / ClickBIOS Concept: Easy-to-use UEFI BIOS interface / Support VGA & DVI-D output / IGP Supports DirectX 11, Shader Model 5.0, OCL 1.1 and OpenGL 3.1', 'MSI', 'products/msi_h61m-p31_w8.gif', '2288.00', 68, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('30BCFC33F3', 'Memory (RAM)', 'Apacer 4GB DDR3 1333 / PC10600 DIMM', 'JEDEC Standard; DDR3 Speed Grade : 1333Mbps; Unbuffered DIMM : 240-pin', 'Apacer', 'products/prod_1gb_unb_ddr2-800(pc2-6400)_l.jpg', '1899.00', 66, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('5D5F7DA837', 'Memory (RAM)', 'Apacer 2GB DDR3 1333 / PC10600', 'DDR3 1333 / PC10600 DIMM', 'Apacer', 'products/prod_1gb_unb_ddr2-800(pc2-6400)_l.jpg', '1049.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('93DC1C3358', 'Memory (RAM)', 'Corsair 2GB DDR3 PC1333 / PC3-10600 VS2GB1333D3G DIMM', '2GB / VS2GB1333D3G / DDR3', 'Corsair', 'products/232131.jpg', '1049.00', 66, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('F699F3E547', 'Memory (RAM)', 'Corsair Triple 1GB XMS3 DDR3 1333MHz TR3X3G1333C9 Memory Kit (For Core i7, X58 Chipset MB)', 'DDR3 1333MHz', 'Corsair', 'products/xms3.jpg', '2499.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('98BBB17D0F', 'Memory (RAM)', 'Kingston 8GB DDR3-1600 HYPER X (KHX16C10B1 Blue/KHX16C10B1B Black) DIMM Memory', 'Capacities 8GB / Frequency speeds â€” DDR3: 1,333MHz-1,600MHz / New streamlined clipless design / Compatible with Intel XMP auto-overclocking function (available with selected models) and Core i3 processors', 'Kingston', 'products/kingston_8gb_khx16c10b.gif', '4188.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('FD5FB0BF3F', 'Memory (RAM)', 'Kingston 8GB DDR3-1866 HYPER X (KHX1866C9D3K2/8G) Desktop Memory', '8GB / DDR3 1866 / Cas Latency 9 / Voltage 1.65V', 'Kingston', 'products/khx1866c9d3k2_8g.gif', '4499.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('FDC4A693B7', 'Video Card', 'Asus NVIDIA GeForce GT 730 1GB GDDR5 64-bit, Multimedia & Gaming Performance Graphic Card', 'Graphics Engine: NVIDIA GeForce GT 730 / Bus Standard: PCI Express 2.0 / Video Memory: GDDR5 1GB / Engine Clock: 901 MHz / CUDA Core: 384 / Memory Clock: 1252 MHz ( 5010 MHz GDDR5 ) / Memory Interface: 64-bit / Resolution: DVI Max Resolution : 2560x1600, Digital Max Resolution:2560x1600 Interface: D-Sub Output : Yes x 1, DVI Output : Yes x 1 (DVI-D), HDMI Output : Yes x 1, HDCP Support : Yes', 'Asus', 'products/asus_gt730-1gd5-brk.gif', '2730.00', 68, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('4E0F3B7E18', 'Video Card', 'Asus GT730 2GB DDR3 128BIT (GT730-2GD3) Video Card', '2GB / DDR3 / 128BIT / PCI Express 2.0 / DVI / HDMI', 'Asus', 'products/asus_gt730-2gd3.gif', '2888.00', 66, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('D10E15BF41', 'Video Card', 'ASUS NVIDIA GeForce GTX760-DC2OC-2GD5 2GB GDDR5 256BIT DVI-I/HDMI/DisplayPort PCI Express 3.0', '2GB / GDDR5 / 256BIT / DVI Output : Yes x 1 (DVI-I), Yes x 1 (DVI-D) / HDMI Output x 1 / Display Port x 1', 'Asus', 'products/gtx760-dc2oc-2gd5.gif', '11688.00', 68, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('8372BE0837', 'Video Card', 'Inno3D GeForce GTX 650 Green 2GB PCI-E GDDR5 2 x DVI / mini HDMI Video Card', '2GB / GDDR5 / 128-bit / PCI-E3.0 X16 / Mini HDMI, Two Dual Link / DVI', 'Inno3D', 'products/inno3d_gtx650_2gb_green.gif', '5388.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('06B69F6662', 'Video Card', 'Inno3D GeForce GT730 4GB 128-bit SDDR3 HDMI, Dual Link DVI-I, VGA', '4GB / SDDR3 / 128-bit / PCI-E2.0 X16 / HDMI, Dual Link DVI-I, VGA', 'Inno3D', 'products/gt_730_inno3d.gif', '3887.98', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.05', 1),
('79C6B5BA80', 'Video Card', 'Inno3D NVIDIA Ge Force GT630 2GB KEPLER 64BIT HDMI, Dual Link DVI, VGA', '2GB / SDDR3 / 64-BIT / PCI-E2.0 X16 / HDMI, Dual Link DVI, VGA', 'Inno3D', 'products/gt-630.gif', '2788.00', 68, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('D88F7F20B5', 'Video Card', 'PowerColor PowerColor R7 40 2GB 128-Bit DDR3 V2 OC SL DVI-D/HDMI/VGA', 'RADEON R7 240 / 2GB DDR3 / 800MHz x 2 / 128bit / DirectXÂ® Support11.2 / PCIE 3.0 / SL DVI-D/HDMI/VGA', 'PowerColor', 'products/powercolor_r7-240.gif', '3688.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('89D8F6E3C0', 'Video Card', 'PowerColor Radeon HD6570 2GB DDR3 PCI-E 128Bit DL-DVI-D/HDMI/VGA', 'RADEON HD6570 / Video Memory 2GB DDR3 / Engine Clock 650MHz / Memory Clock 500MHz x2 / Memory Interface 128bit / DirectXÂ® Support11 / Bus Standard PCIE 2.1 / DL-DVI-D/HDMI/VGA', 'PowerColor', 'products/hd6570.gif', '2888.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('5F3F9ECB11', 'Video Card', 'PowerColor Radeon HD5570 2GB DDR3 128BIT DVI/HDMI Graphic Card', 'AX5570 2GBK3-H / RADEON HD5570 / 2GB DDR3 / 128bit / DirectX 11 Support / PCIE 2.1 / DL-DVI/HDMI/VGA', 'PowerColor', 'products/ax5570-2gbk3-h.gif', '2488.00', 66, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('11DF60299D', 'Sound Card', 'Creative Audigy Value', 'Delivering audio quality of up to 24-bit / 96kHz, 100dB SNR clarity and 7.1 surround sound, Sound Blaster Audigy Value is the ideal upgrade to high quality audio from basic motherboard audio.', 'Creative', 'products/audigyvalue.jpg', '1699.00', 68, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('CE67ACC90F', 'Sound Card', 'Creative Sound Blaster 5.1 VX', '16 bit/5.1/Line-Out (front / rear / center / subwoofer) Line-In / Mic-In', 'Creative', 'products/sb_51.gif', '1099.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('C7E203E3FB', 'CPU Fan / Heatsink', 'Cooler Master Hyper 412 Slim CPU Fan CMRR-H412-16PK-R1', 'Intel Socket: LGA 2011 / 1366 / 1156 / 1155 / 775, AMD Socket: FM1 / AM3+ / AM3 / AM2+ / AM2', 'Cooler Master', 'products/cooler-master-hyper-412-slim-cpu-fan.gif', '1999.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('2E5E8AD113', 'CPU Fan / Heatsink', 'Cooler Master Hyper 212 EVO Turbo Edition (20th Anniversary) CPU Cooler w/ 2 Fans', 'Intel LGA775 / 1155 / 1156 / 1366 / 2011, AMD 754 / 939 / 940 / AMx / socket-F(1207)', 'Cooler Master', 'products/cm-hyper-212-evo-turbo-edition.gif', '1999.00', 68, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('BF5240A696', 'CPU Fan / Heatsink', 'Cooler Master Hyper 212X (RR-212X-20PM-R1) CPU Cooler Intel LA 2011-3', 'CPU Socket: Intel LGA 2011-3/2011/1366/1156/1155/1150/775 AMD FM2+/FM2/FM1/AM3+/AM3/AM2+/AM2 /', 'Cooler Master', 'products/rr-212x-20pm-r1.gif', '1788.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('C060976B3F', 'CPU Fan / Heatsink', 'Cooler Master Blizzard T2 (RR-T2-22FP-R1) CPU Cooler', 'CPU Socket: Intel LGA 1156 / 1155 / 1150 / 775 AMD FM2+ / FM2 / FM1 / AM3+ / AM3 / AM2 /', 'Cooler Master', 'products/cooler_master_blizzard_t2.gif', '988.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('8CAC4334F4', 'Chassis', 'Xigmatek Recon Case with 500Watts PSU', 'ATX, MicroATX, Mini-ITX / USB3.0(or USB2.0) and USB2.0, HD Audio in/out jacks / Preinstalled 120mm silent Xigmatek Orange bladed fan / Supports 1/2â€ , 3/8â€, 1â€ Water tubes', 'Xigmatek', 'products/xigmatek_recon.gif', '2088.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('2DA63E4076', 'Chassis', 'Antec NEW SOLUTION SERIES VSK-4000 Black SGCC steel ATX Mid Tower Computer Case', 'SGCC steel ATX Mid Tower / 2 x USB 2.0 / Audio In/Out Front Ports / 3 External 5.25" Drive Bays / 2 Internal 3.5" Drive Bays', 'Antec', 'products/vsk-4000.gif', '1399.00', 66, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('BAB57C7EA7', 'Chassis', 'Armaggeddon AK3 Gaming Case w/ 550W Standard Rated PS', 'Power supply with protective black sleeve / Chassis with excellent steel form factor and full black coating / High speed USB 3.0 ports located in front for easy access / Power button with built-in blue LED lights / Front cover with integrated dust filter / Front and side covers with unique mesh design', 'Armaggeddon', 'products/armaggeddon_k3.gif', '1999.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('77FBD565AC', 'Chassis', 'Thermaltake Versa H24 CA-1C1-00M1NN-00 Mid-Tower Chassis', 'Mid Tower / USB 3.0 x 1,USB 2.0 x 1, HD Audio x 1 / 9.6â€ x 9.6â€ (Micro ATX) / 12â€ x 9.6â€ (ATX)', 'Thermaltake', 'products/thermaltake_versa_h24.gif', '1988.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('CAA1C81448', 'Storage (HDD/SSD)', 'Western Digital 500GB Black (WD5003AZEX) SATA 6Gb/s 3.5-inch HDD', '500GB / SATA 6 Gb/s / 7,200 RPM (nominal) / 64MB / 5-year limited warranty', 'Western Digital', 'products/wd5003azex.gif', '3388.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('51B768A0F6', 'Storage (HDD/SSD)', 'Seagate Barracuda 1TB SATA 64MB 7200RPM (ST1000DM003)', '3.5-inch / SATA 6Gb/s / 64MB / 7200RPM', 'Seagate', 'products/desktop-hdd-hero-left-500x500.jpg', '2888.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('C54FEEB1C7', 'Storage (HDD/SSD)', 'Seagate 1.5TB SATA 32MB 7200RPM Hard Disk Drive (ST31500341AS)', 'SATA 32MB 7200RPM Hard Disk Drive', 'Seagate', 'products/seagate_hd3.jpg', '4499.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('B0F55618A7', 'Storage (HDD/SSD)', 'Kingston SSDNow V300 120GB SV300S37A SATA 3 7mm Solid State Drive', 'Capacity: 120GB / Form factor: 2.5-inch / Interface: SATA Rev. 3.0 (6Gb/s) â€“ with backwards compatibility to SATA Rev. 2.0', 'Kingston', 'products/sv300s37a.gif', '4999.00', 68, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('B1A3B6FCD0', 'Storage (HDD/SSD)', 'Corsair Force Series LS 120GB SATA 3 6Gb/s Solid State Drive', 'Force Series LS features SATA 3 6GB/s support for optimal performance with the latest systems, and itâ€™s backward compatible with SATA 1 and 2 for maximum compatibility. The thin 7mm height, low heat generation, and solid-state reliability make it ideal for everything from desktop PCs to the latest ultra-thin laptops.', 'Corsair', 'products/corsair_120gb_ls.gif', '5188.00', 68, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('0EB3D2F1EB', 'Storage (HDD/SSD)', 'Samsung 120GB MZ-7TE120BW 840 EVO Basic Solid State Drive', '120GB / Rely on robust design and high-quality components / Upgrade easily with the One-stop Install Navigator', 'Samsung', 'products/samsung_mz-7te120bw.gif', '5090.00', 57, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('66C1D27D1D', 'Storage (HDD/SSD)', 'Samsung SSD 840 EVO 2.5-inch SATA 500GB', '2.5-inch / 500GB / Faster Performance for Everyday Use / Always be in High Acceleration with TurboWrite / Unmatched Reliability for Consistently Superior Performance / Integrated Solution Utilizing Highest-Quality Components', 'Samsung', 'products/samsung_mz-7te500bw.gif', '14999.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('3BFC4D1C28', 'CD / DVD Drive', 'Samsung SH-224BB/DB/BSBS 24X SATA Black Internal DVD Writer', '24X DVD+R 8X DVD+RW 8X DVD+R DL 24X DVD-R 6X DVD-RW 48X CD-R 24X CD-RW / 16X DVD-ROM 48X CD-ROM / 1.5MB Cache', 'Samsung', 'products/sh-224bb_.gif', '850.00', 61, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('15EBA6AED7', 'CD / DVD Drive', 'LITE-ON DH-4O1S BLU-RAY SATA', 'Read BD-R/RE/ROM/SL/DL media at 4X speed, support reading DVD Â±R /Â±R DL/Â±RW/ROM media', 'LITE-ON', 'products/liteon_dh401s_bluray_box.gif', '6950.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('4D5AA3D5B9', 'Power Supply', 'Cougar RS550 550W Power Supply 80-PLUSÂ® - EXTREMELY HIGH EFFICIENCY', '550W / Dynamic Dual-12V Rial / Ultra-Quite 120mm fan', 'Cougar', 'products/rs550.gif', '2588.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('8E7FEEF28F', 'Power Supply', 'Cougar SL500 500W Power Supply', '500W / SLI Ready / 20+4Pin / ATX', 'Cougar', 'products/sl500.gif', '2088.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('F37CF0C1DD', 'Power Supply', 'Corsair VS Series VS650 (CP-9020051) APFC Power Supply [80% Up Efficiency]', 'Conforms to ATX12V v2.31 standard, and is backward compatible with the ATX12V 2.2 and ATX12V 2.01 standards', 'Corsair', 'products/cp-9020051.gif', '2988.00', 66, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-03', '0.00', 1),
('06B69F6662', 'Video Card', 'Inno3D GeForce GT730 4GB 128-bit SDDR3 HDMI, Dual Link DVI-I, VGA', '4GB / SDDR3 / 128-bit / PCI-E2.0 X16 / HDMI, Dual Link DVI-I, VGA', 'Inno3D', 'products/gt_730_inno3d.gif', '3887.98', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-05', '0.05', 1),
('8B92D914CF', 'Processor', 'Intel Celeron 420', '512MB L2 Cache, EM64T, 800MHz FSB 1.6GHz', 'Intel', 'products/celeron-box-01.gif', '1799.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-08', '0.05', 1),
('ED4FA11C58', 'Desktop Package', 'FM2 Amd Richland A4-4020 Complete Desktop Set', 'Processor :	Amd Richland A4-4020 x2 Processor Socket Fm2 3.2ghz Tray Type / \r\nMotherBoard :	Biostar Hi-Fi A70U3P Motherboard Socket Fm2+ Pcie Ddr3 / \r\nMemory (RAM) :	Kingston Memory 2gb Ddr3-1600 / \r\nCase :	Rise 789B Casing Blue / \r\nPSU :	Vortex Power Supply 600watts / \r\nHard Disk Drive :	Samsung St500dm005 Harddisk Drive 500gb Sata / \r\nODD :	Lite-on ihas124 Optical Disk Drive Dvd-rw Sata Black Oem / \r\nMonitor :	LG 16M37A Led Monitor 15.6" Black / \r\nSpeaker :	Invons Headset Black / \r\nAVR :	Eco-power Avr 220v/110v / \r\nMouse :	Rapoo NX1710 Keyboard and Mouse Usb Black / \r\nHSF :	Q3 Heatsink Fan Intel/amd', '', 'products/complete.3871.jpg', '11090.00', 91, 'Pcclinic Computer Service Center', '2016-03-09', '2016-03-09', '0.05', 1),
('ED4FA11C58', 'Desktop Package', 'FM2 Amd Richland A4-4020 Complete Desktop Set', 'Processor :	Amd Richland A4-4020 x2 Processor Socket Fm2 3.2ghz Tray Type / \r\nMotherBoard :	Biostar Hi-Fi A70U3P Motherboard Socket Fm2+ Pcie Ddr3 / \r\nMemory (RAM) :	Kingston Memory 2gb Ddr3-1600 / \r\nCase :	Rise 789B Casing Blue / \r\nPSU :	Vortex Power Supply 600watts / \r\nHard Disk Drive :	Samsung St500dm005 Harddisk Drive 500gb Sata / \r\nODD :	Lite-on ihas124 Optical Disk Drive Dvd-rw Sata Black Oem / \r\nMonitor :	LG 16M37A Led Monitor 15.6" Black / \r\nSpeaker :	Invons Headset Black / \r\nAVR :	Eco-power Avr 220v/110v / \r\nMouse :	Rapoo NX1710 Keyboard and Mouse Usb Black / \r\nHSF :	Q3 Heatsink Fan Intel/amd', '', 'products/complete.3871.jpg', '11090.00', 69, 'Pcclinic Computer Service Center', '2016-03-09', '2016-03-09', '0.05', 1),
('ED4FA11C58', 'Desktop Package', 'FM2 Amd Richland A4-4020 Complete Desktop Set', 'Processor :	Amd Richland A4-4020 x2 Processor Socket Fm2 3.2ghz Tray Type / \r\nMotherBoard :	Biostar Hi-Fi A70U3P Motherboard Socket Fm2+ Pcie Ddr3 / \r\nMemory (RAM) :	Kingston Memory 2gb Ddr3-1600 / \r\nCase :	Rise 789B Casing Blue / \r\nPSU :	Vortex Power Supply 600watts / \r\nHard Disk Drive :	Samsung St500dm005 Harddisk Drive 500gb Sata / \r\nODD :	Lite-on ihas124 Optical Disk Drive Dvd-rw Sata Black Oem / \r\nMonitor :	LG 16M37A Led Monitor 15.6" Black / \r\nSpeaker :	Invons Headset Black / \r\nAVR :	Eco-power Avr 220v/110v / \r\nMouse :	Rapoo NX1710 Keyboard and Mouse Usb Black / \r\nHSF :	Q3 Heatsink Fan Intel/amd', '', 'products/complete.3871.jpg', '11090.00', 69, 'Pcclinic Computer Service Center', '2016-03-09', '2016-03-09', '0.05', 1),
('0EB3D2F1EB', 'Storage (HDD/SSD)', 'Samsung 120GB MZ-7TE120BW 840 EVO Basic Solid State Drive', '120GB / Rely on robust design and high-quality components / Upgrade easily with the One-stop Install Navigator', 'Samsung', 'products/samsung_mz-7te120bw.gif', '5090.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-09', '0.00', 1),
('0EB3D2F1EB', 'Storage (HDD/SSD)', 'Samsung 120GB MZ-7TE120BW 840 EVO Basic Solid State Drive', '120GB / Rely on robust design and high-quality components / Upgrade easily with the One-stop Install Navigator', 'Samsung', 'products/samsung_mz-7te120bw.gif', '5090.00', 69, 'Pcclinic Computer Service Center', '2016-03-03', '2016-03-09', '0.00', 1),
('ED4FA11C58', 'Desktop Package', 'FM2 Amd Richland A4-4020 Complete Desktop Set', 'Processor :	Amd Richland A4-4020 x2 Processor Socket Fm2 3.2ghz Tray Type / \r\nMotherBoard :	Biostar Hi-Fi A70U3P Motherboard Socket Fm2+ Pcie Ddr3 / \r\nMemory (RAM) :	Kingston Memory 2gb Ddr3-1600 / \r\nCase :	Rise 789B Casing Blue / \r\nPSU :	Vortex Power Supply 600watts / \r\nHard Disk Drive :	Samsung St500dm005 Harddisk Drive 500gb Sata / \r\nODD :	Lite-on ihas124 Optical Disk Drive Dvd-rw Sata Black Oem / \r\nMonitor :	LG 16M37A Led Monitor 15.6" Black / \r\nSpeaker :	Invons Headset Black / \r\nAVR :	Eco-power Avr 220v/110v / \r\nMouse :	Rapoo NX1710 Keyboard and Mouse Usb Black / \r\nHSF :	Q3 Heatsink Fan Intel/amd', '', 'products/complete.3871.jpg', '11090.00', 69, 'Pcclinic Computer Service Center', '2016-03-09', '2016-03-09', '0.05', 1),
('E41272CA8C', 'Desktop Package', 'AM3 AMD Athlon 245 Complete Desktop Set', 'Processor :	Amd Athlon II x2 245 Processor Socket Am3 2.9ghz Tray Type / \r\nMotherBoard :	Asrock n68c-gs4 Fx Motherboard Socket Am3+ Pcie Drdr3 / \r\nMemory (RAM) :	Kingston Memory 2gb Ddr3-1600 / \r\nCase :	Rise 789B Casing Blue / \r\nPSU :	Vortex Power Supply 600watts / \r\nHard Disk Drive :	Samsung St500dm005 Harddisk Drive 500gb Sata / \r\nODD :	Lite-on ihas124 Optical Disk Drive Dvd-rw Sata Black Oem / \r\nMonitor :	LG 16M37A Led Monitor 15.6" Black / \r\nSpeaker :	Invons Headset Black / \r\nAVR :	Eco-power Avr 220v/110v / \r\nMouse :	Rapoo NX1710 Keyboard and Mouse Usb Black / \r\nHSF :	Q3 Heatsink Fan Intel/amd', '', 'products/complete.1207.jpg', '11264.99', 69, 'Pcclinic Computer Service Center', '2016-03-09', '2016-03-09', '0.05', 1),
('80E0B4B01C', 'Processor', 'AMD FX-8350 4.0GHZ BLK EDITION PROCESSOR', 'Socket AM3+ / 8-Cores / 4.0 GHz (4.2GHz Turbo) / L2 Cache: 4 x 2MB / L3 Cache: 8MB / 64-Bit Support / 125W / Heatsink and fan included', 'AMD', 'products/fx-8350.jpg', '8200.00', 178, 'Pcclinic Computer Service Center', '2016-09-30', '2016-09-30', '0.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shippingfee`
--

CREATE TABLE `tbl_shippingfee` (
  `shipid` int(11) NOT NULL,
  `shipday` varchar(30) NOT NULL,
  `cost` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shippingfee`
--

INSERT INTO `tbl_shippingfee` (`shipid`, `shipday`, `cost`) VALUES
(1, 'Next day shipping', '150.00'),
(2, '7 day shipping', '99.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `supplierid` int(11) NOT NULL,
  `suppliername` varchar(500) NOT NULL,
  `supplieraddress` varchar(500) NOT NULL,
  `suppliercon` varchar(30) NOT NULL,
  `supplieremail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`supplierid`, `suppliername`, `supplieraddress`, `suppliercon`, `supplieremail`) VALUES
(1, 'Pcclinic Computer Service Center', '856 Reina Regente Street, Philippines', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_totalprod_discount`
--

CREATE TABLE `tbl_totalprod_discount` (
  `discountid` int(11) NOT NULL,
  `totalfrom` decimal(10,2) NOT NULL,
  `totalto` decimal(10,2) NOT NULL,
  `discpercent` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_totalprod_discount`
--

INSERT INTO `tbl_totalprod_discount` (`discountid`, `totalfrom`, `totalto`, `discpercent`) VALUES
(1, '1.00', '50000.00', '0.00'),
(2, '50001.00', '100000.00', '0.05'),
(3, '100001.00', '150000.00', '0.10'),
(4, '150001.00', '250000.00', '0.15'),
(5, '250001.00', '500000.00', '0.20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vat`
--

CREATE TABLE `tbl_vat` (
  `vatid` int(11) NOT NULL,
  `vat_percent` decimal(10,2) NOT NULL,
  `vat_desc` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vat`
--

INSERT INTO `tbl_vat` (`vatid`, `vat_percent`, `vat_desc`) VALUES
(1, '0.05', 'VAT computed via total multiplied by the VAT percentage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_acc`
--
ALTER TABLE `tbl_acc`
  ADD PRIMARY KEY (`accid`);

--
-- Indexes for table `tbl_acc_disc`
--
ALTER TABLE `tbl_acc_disc`
  ADD PRIMARY KEY (`discid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tbl_basket`
--
ALTER TABLE `tbl_basket`
  ADD KEY `accid` (`accid`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandid`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD KEY `accid` (`accid`),
  ADD KEY `code` (`code`),
  ADD KEY `invoice` (`invoice`);

--
-- Indexes for table `tbl_prod`
--
ALTER TABLE `tbl_prod`
  ADD KEY `code` (`code`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `tbl_shippingfee`
--
ALTER TABLE `tbl_shippingfee`
  ADD PRIMARY KEY (`shipid`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`supplierid`);

--
-- Indexes for table `tbl_totalprod_discount`
--
ALTER TABLE `tbl_totalprod_discount`
  ADD PRIMARY KEY (`discountid`);

--
-- Indexes for table `tbl_vat`
--
ALTER TABLE `tbl_vat`
  ADD PRIMARY KEY (`vatid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_acc`
--
ALTER TABLE `tbl_acc`
  MODIFY `accid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tbl_acc_disc`
--
ALTER TABLE `tbl_acc_disc`
  MODIFY `discid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_shippingfee`
--
ALTER TABLE `tbl_shippingfee`
  MODIFY `shipid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `supplierid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_totalprod_discount`
--
ALTER TABLE `tbl_totalprod_discount`
  MODIFY `discountid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_vat`
--
ALTER TABLE `tbl_vat`
  MODIFY `vatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
