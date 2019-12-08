-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 01:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veradb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`uid`, `username`, `password`, `status`) VALUES
(13, 'waliewuleta', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(22, 'teku', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(24, 'ayu', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(26, 'meseret', '24395e6ac79961202c2747de9fdae00b86eaf2a6', 'active'),
(27, 'abebe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(29, 'muler', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(30, 'woreda', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(31, 'bereket', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(32, 'alex', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(33, 'alexso', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', 'active'),
(34, 'abex', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(35, 'belie', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(37, 'selam', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(38, 'federal', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(39, 'region', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(40, 'zone', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(41, 'kebele', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `birthtable`
--

CREATE TABLE `birthtable` (
  `birthid` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `motherfname` varchar(50) DEFAULT NULL,
  `mothermname` varchar(50) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `registrationdate` date DEFAULT NULL,
  `birthregion` varchar(50) DEFAULT NULL,
  `birthzone` varchar(50) DEFAULT NULL,
  `birthcity` varchar(50) DEFAULT NULL,
  `birthworeda` varchar(50) DEFAULT NULL,
  `birthkebele` varchar(50) DEFAULT NULL,
  `kebeleofficerid` varchar(50) NOT NULL,
  `statename` varchar(50) NOT NULL,
  `countryname` varchar(50) NOT NULL,
  `socialsecurityno` varchar(50) NOT NULL,
  `statusformrg` varchar(50) NOT NULL,
  `birthstatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthtable`
--

INSERT INTO `birthtable` (`birthid`, `fname`, `mname`, `lname`, `motherfname`, `mothermname`, `sex`, `birthdate`, `nationality`, `registrationdate`, `birthregion`, `birthzone`, `birthcity`, `birthworeda`, `birthkebele`, `kebeleofficerid`, `statename`, `countryname`, `socialsecurityno`, `statusformrg`, `birthstatus`) VALUES
(9, 'meselu', 'negash', 'alebachew', 'aster', 'mamo', 'male', '2010-02-03', 'Ethiopian', '2013-05-18', 'tigray', 'mekele', 'm/m', 'addegrat', '01', '26', '', '', '', '', 'died'),
(10, 'c', 'negash', 'alebachew', 'aster', 'fff', 'female', '2000-11-01', 'Ethiopian', '2013-05-18', 'tigray', 'mekele', 'm/m', 'addegrat', '01', '26', '', '', '', '', 'born'),
(11, 'abebe', 'alemu', 'alebachew', 'ffff', 'fff', 'female', '2010-02-03', 'Ethiopian', '2014-05-18', 'amhara', 'm/gojjam', 'm/m', 'gozamen', '012', '24', '', '', '', '', 'born'),
(12, 'abebe', 'alemu', 'alebachew', 'aster', 'mamo', 'male', '2010-02-03', 'Ethiopian', '2014-05-18', 'amhara', 'm/gojjam', 'm/m', 'gozamen', '015', '20', '', '', '', '', 'born'),
(13, 'meselu', 'negash', 'c', 'aster', 'mamo', 'female', '2010-02-03', 'Ethiopian', '2014-05-18', 'afar', 'harerie', 'm/m', 'addegrat', '01', '27', '', '', '', '', 'born'),
(14, 'abebe', 'alemu', 'alebachew', 'ffff', 'fff', 'female', '2010-02-03', 'Ethiopian', '2014-05-19', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', '', 'died'),
(15, 'meselu', 'negash', 'alebachew', 'aster', 'mamo', 'female', '2010-02-03', 'Ethiopian', '2014-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', 'married', 'died'),
(16, 'abebe', 'negash', 'bewustie', 'alebachewu', 'mamo', 'female', '2010-02-03', 'Ethiopian', '2015-05-18', 'tigray', 'mekele', 'm/m', 'addegrat', '01', '26', '', '', '', '', 'born'),
(17, 'hana', 'tila', 'alebachew', 'ffff', 'mamo', 'male', '2000-02-03', 'Ethiopian', '2015-05-18', 'tigray', 'mekele', 'm/m', 'addegrat', '01', '26', '', '', '', '', 'born'),
(18, 'tsegawu', 'alem', 'alem', 'alem', 'enatneh', 'male', '2000-02-03', 'Ethiopian', '2015-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', 'married', 'born'),
(19, 'aster', 'awoke', 'ynges', 'tilanesh', 'bewuketu', 'female', '2000-02-03', 'Ethiopian', '2015-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', '', 'died'),
(20, 'wuleta', 'yehu', 'rtte', 'ffd', 'ddd', 'male', '2000-02-03', 'Ethiopian', '2016-05-18', 'tigray', 'mekele', 'm/m', 'addegrat', '01', '26', '', '', '', '', 'born'),
(21, 'meselu', 'negash', 'alebachew', 'ffff', 'mamo', 'female', '2000-02-03', 'Ethiopian', '2016-05-18', 'amhara', 'm/gojjam', 'm/m', 'gozamen', '015', '20', '', '', '', '', 'born'),
(22, 'abebe', 'negash', 'alebachew', 'ffff', 'mamo', 'male', '2010-02-03', 'Ethiopian', '2016-05-18', 'afar', 'mekele', 'm/m', 'addegrat', '02', '33', '', '', '', '', 'born'),
(23, 'c', 'negash', 'alebachew', 'ffff', 'mamo', 'female', '2010-02-03', 'Ethiopian', '2017-05-18', 'amhara', 'sdfg', 'asdfg', 'asdfg', '02', '13', '', '', '', '', 'born'),
(24, 'awoke', 'aschalew', 'girma', 'aster', 'melesech', 'female', '2010-02-03', 'Ethiopian', '2017-05-18', 'afar', 'arsie', 'asdfg', 'addegrat', '01', '35', '', '', '', '', 'born'),
(25, 'meselu', 'negash', 'alebachew', 'aster', 'bewuketu', 'female', '2000-02-03', 'Ethiopian', '2017-05-18', 'afar', 'arsie', 'asdfg', 'addegrat', '01', '35', '', '', '', '', 'born'),
(26, 'abebu', 'negash', 'alem', 'aster', 'bewuketu', 'female', '2018-05-17', 'Ethiopian', '2017-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', 'married', 'born'),
(27, 'abebe', 'negash', 'c', 'ffff', 'mamo', 'female', '2018-05-17', 'Ethiopian', '2017-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'america', '', '', 'unmarried', 'born'),
(28, 'awoke', 'alemu', 'alebachew', 'aster', 'bewuketu', 'male', '2018-05-17', 'Ethiopian', '2017-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'swidden', '', '', 'unmarried', 'born'),
(29, 'tariku', 'bekele', 'teka', 'mother', 'fmf', 'male', '1985-05-17', 'Ethiopian', '2017-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'ethiopia', '', '', 'married', 'born'),
(30, 'ayantu', 'misganew', 'temesgen', 'geletta', 'geletuma', 'female', '1990-05-17', 'Ethiopian', '2017-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'swidden', '', '', 'married', 'born'),
(31, 'wuletaw', 'yehuala', 'bamilaku', 'etagagegnew', 'mamo', 'male', '2018-05-18', 'Ethiopian', '2018-05-18', 'amhara', 'sdfg', 'asdfg', 'asdfg', '02', '13', 'america', '', '', 'unmarried', 'died'),
(32, 'hanex', 'negash', 'alebachew', 'ffff', 'mamo', 'female', '2018-05-18', 'Ethiopian', '2018-05-18', 'tigray', 'mekele', 'asdf', 'bole', '01', '41', 'america', '', '', 'married', 'born'),
(33, 'tariku', 'bekele', 'teka', 'mother', 'gmother', 'male', '2018-05-18', 'Ethiopian', '2018-05-18', 'tigray', 'mekele', 'asdf', 'bole', '01', '41', 'swidden', '', '', 'married', 'born'),
(34, 'meselu', 'alemu', 'teka', 'aster', 'mamo', 'male', '2018-05-18', 'Ethiopian', '2018-05-18', 'tigray', 'mekele', 'asdf', 'bole', '01', '41', 'swidden', '', '', 'married', 'born'),
(35, 'asnaku', 'kebede', 'lema', 'asichalech', 'mamo', 'female', '2010-05-18', 'Ethiopian', '2018-05-18', 'tigray', 'mekele', 'asdf', 'bole', '01', '41', 'ethiopia', '', '', 'married', 'born'),
(36, 'teku', 'negash', 'alebachew', 'aster', 'mamo', 'male', '2018-05-18', 'Ethiopian', '2018-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'swidden', '', '', 'married', 'died'),
(37, 'alem', 'negash', 'teka', 'alebachewu', 'bewuketu', 'female', '2018-05-18', 'Ethiopian', '2018-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'america', '', '', 'married', 'born'),
(38, 'federal', 'negash', 'alebachew', 'ffff', 'mamo', 'female', '2000-02-03', 'Ethiopian', '2018-05-18', 'afar', 'mekele', ' sdd', 'addegrat', '02', '38', 'semerland', 'swidden', '34hh', 'unmarried', 'born'),
(39, 'federal', 'negash', 'alebachew', 'ffff', 'mamo', 'female', '2018-05-18', 'Ethiopian', '2018-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'semerland', 'swidden', '34wertt', 'unmarried', 'born'),
(40, 'dfgdfg', 'bekele', 'alebachew', 'aster', 'mamo', 'female', '2018-05-18', 'Ethiopian', '2018-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', '', 'born');

-- --------------------------------------------------------

--
-- Table structure for table `citytable`
--

CREATE TABLE `citytable` (
  `cityid` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `woredaid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citytable`
--

INSERT INTO `citytable` (`cityid`, `cityname`, `woredaid`) VALUES
('asdf', '', ''),
('asdf', '', ''),
('asdf', 'asdf', ''),
('asdf', 'zxcvg', 'w4');

-- --------------------------------------------------------

--
-- Table structure for table `deathtable`
--

CREATE TABLE `deathtable` (
  `deathid` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `birthregion` varchar(50) DEFAULT NULL,
  `birthzone` varchar(50) DEFAULT NULL,
  `birthcity` varchar(50) DEFAULT NULL,
  `birthworeda` varchar(50) DEFAULT NULL,
  `birthkebele` varchar(50) DEFAULT NULL,
  `dateofdeath` date DEFAULT NULL,
  `workposition` varchar(50) DEFAULT NULL,
  `deathregion` varchar(50) DEFAULT NULL,
  `deathworeda` varchar(50) DEFAULT NULL,
  `deathcity` varchar(50) DEFAULT NULL,
  `deathkebele` varchar(10) DEFAULT NULL,
  `deathreason` varchar(100) DEFAULT NULL,
  `kebeleofficerid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `divorce`
--

CREATE TABLE `divorce` (
  `divorceid` int(11) NOT NULL,
  `hasbandfname` varchar(50) DEFAULT NULL,
  `hasbandlname` varchar(50) DEFAULT NULL,
  `wifefname` varchar(50) DEFAULT NULL,
  `wifelname` varchar(50) DEFAULT NULL,
  `divorcedate` date DEFAULT NULL,
  `divorcereason` varchar(100) DEFAULT NULL,
  `divorceregion` varchar(50) DEFAULT NULL,
  `divorcezone` varchar(50) NOT NULL,
  `divorceworeda` varchar(50) DEFAULT NULL,
  `divorcecity` varchar(50) DEFAULT NULL,
  `divorcekebele` varchar(50) DEFAULT NULL,
  `numberofchild` int(11) DEFAULT NULL,
  `kebeleofficerid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `federalofficertable`
--

CREATE TABLE `federalofficertable` (
  `federalofficerid` varchar(50) NOT NULL,
  `federalofficerfname` varchar(50) NOT NULL,
  `federalofficermname` varchar(50) NOT NULL,
  `federalofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `feedbackid` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `dates` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`feedbackid`, `role`, `username`, `email`, `comment`, `status`, `dates`) VALUES
(1, 'kebeleofficer', 'fgh', '', 'dfghj', '', '0000-00-00'),
(2, 'woredaofficer', 'mahlet', '', 'wellcome', '', '2010-01-03'),
(3, 'Admin', 'wuletaye', 'ww@gmail.com', 'well come for conference', '', '2013-05-18'),
(4, 'kebeleofficer', 'wuletaye', 'ww@gmail.com', 'how was registration', '', '2013-05-18'),
(5, 'kebeleofficer', 'wuletaye', 'ww@gmail.com', 'call for conference', '', '2013-05-18'),
(6, 'woredaofficer', 'hana', 'ha@gmail.com', 'call for cermony', '', '2014-05-18'),
(7, 'statician', 'wuletayeneh', 'ww@gmail.com', ' wellcome\r\n					', '', '2014-05-18'),
(8, 'statician', 'wuletayeneh', 'ww@gmail.com', ' wellcome\r\n					', '', '2014-05-18'),
(9, '', NULL, 'ww@gmail.com', 'ERTYUWERTYUI', '', '2016-05-18'),
(10, 'statician', NULL, 'ha@gmail.com', 'asdfghjk', '', '2017-05-18'),
(11, 'statician', NULL, 'ha@gmail.com', 'asdfghjk', '', '2017-05-18'),
(12, 'statician', NULL, 'ww@gmail.com', 'WWWWWWWWWWWW', 'New', '2017-05-18'),
(13, 'kebeleofficer', NULL, 'ww@gmail.com', 'Hello Evrybody', 'New', '2017-05-18'),
(14, 'kebeleofficer', NULL, 'ha@gmail.com', 'hell', 'New', '2017-05-18'),
(15, 'kebeleofficer', NULL, 'ww@gmail.com', 'asjemreshignal', 'New', '2018-05-18'),
(16, 'kebeleofficer', NULL, 'ww@gmail.com', 'wellcome to our sendfeedback', 'New', '2018-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `kebeleofficertable`
--

CREATE TABLE `kebeleofficertable` (
  `kebeleofficerid` varchar(50) NOT NULL,
  `kebeleofficerfname` varchar(50) NOT NULL,
  `kebeleofficermname` varchar(50) NOT NULL,
  `kebeleofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `kebeleid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebeleofficertable`
--

INSERT INTO `kebeleofficertable` (`kebeleofficerid`, `kebeleofficerfname`, `kebeleofficermname`, `kebeleofficerlname`, `sex`, `mobile`, `email`, `photo`, `kebeleid`) VALUES
('', 'abebe', 'kebede', 'asefa', 'male', '0909560110', 'asdfg@gmail.com', '', 'k1'),
('asdf', 'sdfg', 'asdf', 'asdf', 'male', '9052412412', 'zxcvzx@gmail.com', '', 'k2'),
('SDFGH', 'DFG', 'FGHCV', 'FGH', 'male', '0618404296', 'DFGH@gmail.com', '', 'k2');

-- --------------------------------------------------------

--
-- Table structure for table `kebeletable`
--

CREATE TABLE `kebeletable` (
  `kebeleid` varchar(50) NOT NULL,
  `kebelename` varchar(50) NOT NULL,
  `woredaid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebeletable`
--

INSERT INTO `kebeletable` (`kebeleid`, `kebelename`, `woredaid`) VALUES
('asdfg', 'zxasdf', 'w4'),
('k1', '01', 'w1'),
('k2', '02', 'w1'),
('k3', '014', 'w4');

-- --------------------------------------------------------

--
-- Table structure for table `marriagetable`
--

CREATE TABLE `marriagetable` (
  `marriageid` int(11) NOT NULL,
  `birthid` int(11) DEFAULT NULL,
  `hasbandfname` varchar(50) DEFAULT NULL,
  `hasbandlname` varchar(50) DEFAULT NULL,
  `hasbandage` int(11) DEFAULT NULL,
  `wifefname` varchar(50) DEFAULT NULL,
  `wifelname` varchar(50) DEFAULT NULL,
  `wifeage` int(11) DEFAULT NULL,
  `wifebirthid` int(11) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL,
  `woreda` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `kebele` varchar(50) DEFAULT NULL,
  `marragedate` date DEFAULT NULL,
  `marragecondition` varchar(100) DEFAULT NULL,
  `marriagestatus` varchar(50) DEFAULT NULL,
  `kebeleofficerid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regionalofficertable`
--

CREATE TABLE `regionalofficertable` (
  `regionalofficerid` varchar(50) NOT NULL,
  `regionalofficerfname` varchar(50) NOT NULL,
  `regionalofficermname` varchar(50) NOT NULL,
  `regionalofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regionalofficertable`
--

INSERT INTO `regionalofficertable` (`regionalofficerid`, `regionalofficerfname`, `regionalofficermname`, `regionalofficerlname`, `sex`, `mobile`, `email`, `photo`) VALUES
('r3', 'rr', 'rrrr', 'rrrr', 'male', '0909563252', 'a@gmail.com', 'aa.jpg'),
('rw', 'rr', 'rrrr', 'rrrr', 'female', '0909563277', 'bb@gmail.com', 'aa.jpg'),
('z1', 'tariku', 'bekele', 'teka', 'male', '0909563266', 'tark@gmail.com', 'aa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `regiontable`
--

CREATE TABLE `regiontable` (
  `regionid` varchar(50) NOT NULL,
  `regionname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regiontable`
--

INSERT INTO `regiontable` (`regionid`, `regionname`) VALUES
('region2', 'afar'),
('r3', 'amhara'),
('43', 'benshangul'),
('r4', 'oromia'),
('region1', 'tigray');

-- --------------------------------------------------------

--
-- Table structure for table `staticiantable`
--

CREATE TABLE `staticiantable` (
  `staticianid` varchar(50) NOT NULL,
  `staticianfname` varchar(50) NOT NULL,
  `staticianmname` varchar(50) NOT NULL,
  `staticianlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `ufname` varchar(50) DEFAULT NULL,
  `umname` varchar(50) DEFAULT NULL,
  `ulname` varchar(50) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL,
  `woreda` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `kebele` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `ufname`, `umname`, `ulname`, `sex`, `mobile`, `email`, `photo`, `role`, `nationality`, `region`, `zone`, `woreda`, `city`, `kebele`) VALUES
(1, 'wuletaw', 'yehuala', 'bamilak', 'male', '0942861337', 'w@gmail.com', 'aa.jpg', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'walie', 'sishaw', 'maru', 'male', '0623521474', 'aaa@gmail.com', '', 'Admin', 'Ethiopian', 'amhara', 'sdfg', 'asdfg', 'asdfg', '02'),
(14, 'mahlet', 'zewudu', 'abebe', 'male', '0945212331', 'm@gmail.com', 'aa.jpg', 'kebeleofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '01'),
(15, 'wuletaw', 'yehuala', 'bamilaku', 'male', '0942863137', 'wu@gmail.com', '', 'statician', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '01'),
(16, 'hana', 'tilahun', 'asres', 'female', '0909563231', 'hana@gmail.com', 'aa.jpg', 'reginalofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '012'),
(17, 'wuletaw', 'bekele', 'bamilaku', 'male', '0909563363', 'wel@gmail.com', 'aa.jpg', 'zonalofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/lemar', '014'),
(19, 'abie', 'kebede', 'teka', 'male', '0914563212', 'ab@gmail.com', 'aa.jpg', 'zonalofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '015'),
(20, 'lamesgn', 'bekele', 'abebe', 'male', '0966563242', 'yeku@gmail.com', 'aa.jpg', 'federaloficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '015'),
(21, 'tilaye', 'yehuala', 'teka', 'male', '0909563214', 'tilaye@gmail.com', 'aa.jpg', 'woredaofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '014'),
(22, 'we', 'ye', 'ab', 'male', '0909563252', 'add@gmail.com', '', 'kebeleofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/lemar', '012'),
(24, 'ayana', 'genet', 'abate', 'male', '0918404296', 'ayu@gmail.com', 'aa.jpg', 'branchadmin', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '012'),
(26, 'meseret', 'yehu', 'bam', 'male', '093570143', 'mesie@gmail.com', '', 'kebeleofficer', 'Ethiopian', 'tigray', 'mekele', 'addegrat', 'm/m', '01'),
(27, 'abebe', 'yehu', 'bamilaku', 'male', '0923521235', 'abe@gmail.com', 'aa.jpg', 'kebeleofficer', 'Ethiopian', 'afar', 'harerie', 'addegrat', 'm/m', '01'),
(28, 'hana', 'bekele', 'teka', 'male', '0909500052', 'zem@gmail.com', 'aa.jpg', 'woredaofficer', 'Ethiopian', 'afar', 'mekele', 'addegrat', 'm/lemar', ' '),
(29, 'meseret', 'bekele', 'teka', 'male', '0909563221', 'aaaa@gmail.com', 'aa.jpg', 'woredaofficer', 'Ethiopian', 'afar', 'harerie', 'addegrat', 'm/m', '01'),
(30, 'mesenbet', 'teshome', 'moges', 'male', '0909511252', 'ayayuu@gmail.com', 'w.jpg', 'woredaofficer', 'Ethiopian', 'afar', 'harerie', 'addegrat', 'm/lemar', '02'),
(31, 'bereket', 'yehuala', 'mablaku', 'male', '0961863251', 'berie@gmail.cop', 'wuleta.jpg', 'Admin', 'Ethiopian', 'afar', 'mekele', 'addegrat', 'm/m', '02'),
(32, 'hanna', 'alemu', 'sita', 'female', '0909511152', 'hanex@gmail.com', 'w.jpg', 'branchadmin', 'Ethiopian', 'afar', 'mekele', 'addegrat', 'm/m', '01'),
(33, 'alexs', 'bekele', 'teka', 'female', '0909562142', 'alex@gmail.com', 'aa.jpg', 'kebeleofficer', 'Ethiopian', 'afar', 'mekele', 'addegrat', 'm/m', '02'),
(34, 'melkam', 'aderawu', 'meku', 'male', '0909563102', 'meku@gmail.com', 'aa.jpg', 'Admin', 'Ethiopian', 'afar', 'arsie', 'addegrat', 'm/m', '02'),
(35, 'df', 'asdfg', 'asdfgh', 'male', '0909563137', 'ad@gmail.com', 'aa.jpg', 'statician', 'Ethiopian', 'afar', 'arsie', 'addegrat', 'asdfg', '01'),
(36, 'asdfg', 'dfgh', 'dfg', 'male', '0909565552', 'ff@gmail.com', '', 'statician', 'Ethiopian', 'amhara', 'mekele', 'enebsie', ' ', '01'),
(37, 'dfg', 'dfgh', 'dfg', 'male', '0909563200', 'f@gmail.com', 'aa.jpg', 'statician', 'Ethiopian', 'tigray', 'mekele', 'addegrat', ' ', '01'),
(38, 'walelign', 'bekele', 'teka', 'male', '0909563201', 'xx@gmail.com', 'aa.jpg', 'federaloficer', 'Ethiopian', 'afar', 'mekele', 'addegrat', ' ', '02'),
(39, 'ye', 'a', 'teka', 'male', '0904425124', 'fgh@gmail.com', 'aa.jpg', 'reginalofficer', 'Ethiopian', 'afar', 'arsie', 'enebsie', ' ', '02'),
(40, 'hana', 'yehuala', 'teka', 'male', '0905563252', 'dfg@gmail.com', '', 'zonalofficer', 'Ethiopian', 'afar', 'mekele', 'addegrat', ' ', '02'),
(41, 'meselech', 'mel', 'teka', 'male', '0901563252', 'zxcvxcv@gmail.com', 'aa.jpg', 'kebeleofficer', 'Ethiopian', 'tigray', 'mekele', 'bole', 'asdf', '01');

-- --------------------------------------------------------

--
-- Table structure for table `woredaofficer`
--

CREATE TABLE `woredaofficer` (
  `woredaofficerid` varchar(50) NOT NULL,
  `woredaofficerfname` varchar(50) NOT NULL,
  `woredaofficermname` varchar(50) NOT NULL,
  `woredaofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `woredaid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `woredatable`
--

CREATE TABLE `woredatable` (
  `woredaid` varchar(50) NOT NULL,
  `woredaname` varchar(50) NOT NULL,
  `zoneid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `woredatable`
--

INSERT INTO `woredatable` (`woredaid`, `woredaname`, `zoneid`) VALUES
('w1', 'addegrat', 'zone1'),
('w4', 'enebsie', 'z3'),
('we', 'bole', 'z3');

-- --------------------------------------------------------

--
-- Table structure for table `zonalofficertable`
--

CREATE TABLE `zonalofficertable` (
  `zonalofficerid` varchar(50) NOT NULL,
  `zonalofficerfname` varchar(50) NOT NULL,
  `zonalofficermname` varchar(50) NOT NULL,
  `zonalofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `zoneid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zonalofficertable`
--

INSERT INTO `zonalofficertable` (`zonalofficerid`, `zonalofficerfname`, `zonalofficermname`, `zonalofficerlname`, `sex`, `mobile`, `email`, `photo`, `zoneid`) VALUES
('z2sdf', 'DFG', 'kebede', 'asefa', 'male', '0909563002', 'asdfgh@gmail.com', '', 'arsie');

-- --------------------------------------------------------

--
-- Table structure for table `zonetable`
--

CREATE TABLE `zonetable` (
  `zoneid` varchar(50) NOT NULL,
  `zonename` varchar(50) NOT NULL,
  `regionid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zonetable`
--

INSERT INTO `zonetable` (`zoneid`, `zonename`, `regionid`) VALUES
('z2df', 'sdfgh', 'region2'),
('z3', 'arsie', 'r3'),
('zone1', 'mekele', 'region1'),
('zone2', 'harerie', 'region2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `birthtable`
--
ALTER TABLE `birthtable`
  ADD PRIMARY KEY (`birthid`);

--
-- Indexes for table `deathtable`
--
ALTER TABLE `deathtable`
  ADD PRIMARY KEY (`deathid`);

--
-- Indexes for table `divorce`
--
ALTER TABLE `divorce`
  ADD PRIMARY KEY (`divorceid`);

--
-- Indexes for table `federalofficertable`
--
ALTER TABLE `federalofficertable`
  ADD PRIMARY KEY (`federalofficerid`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `kebeleofficertable`
--
ALTER TABLE `kebeleofficertable`
  ADD PRIMARY KEY (`kebeleofficerid`);

--
-- Indexes for table `kebeletable`
--
ALTER TABLE `kebeletable`
  ADD PRIMARY KEY (`kebeleid`);

--
-- Indexes for table `marriagetable`
--
ALTER TABLE `marriagetable`
  ADD PRIMARY KEY (`marriageid`),
  ADD KEY `birthid` (`birthid`);

--
-- Indexes for table `regionalofficertable`
--
ALTER TABLE `regionalofficertable`
  ADD PRIMARY KEY (`regionalofficerid`);

--
-- Indexes for table `regiontable`
--
ALTER TABLE `regiontable`
  ADD PRIMARY KEY (`regionid`),
  ADD UNIQUE KEY `regionname` (`regionname`);

--
-- Indexes for table `staticiantable`
--
ALTER TABLE `staticiantable`
  ADD PRIMARY KEY (`staticianid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `woredaofficer`
--
ALTER TABLE `woredaofficer`
  ADD PRIMARY KEY (`woredaofficerid`);

--
-- Indexes for table `woredatable`
--
ALTER TABLE `woredatable`
  ADD PRIMARY KEY (`woredaid`);

--
-- Indexes for table `zonalofficertable`
--
ALTER TABLE `zonalofficertable`
  ADD PRIMARY KEY (`zonalofficerid`);

--
-- Indexes for table `zonetable`
--
ALTER TABLE `zonetable`
  ADD PRIMARY KEY (`zoneid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthtable`
--
ALTER TABLE `birthtable`
  MODIFY `birthid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `deathtable`
--
ALTER TABLE `deathtable`
  ADD CONSTRAINT `deathtable_ibfk_1` FOREIGN KEY (`deathid`) REFERENCES `birthtable` (`birthid`);

--
-- Constraints for table `divorce`
--
ALTER TABLE `divorce`
  ADD CONSTRAINT `divorce_ibfk_1` FOREIGN KEY (`divorceid`) REFERENCES `marriagetable` (`marriageid`);

--
-- Constraints for table `marriagetable`
--
ALTER TABLE `marriagetable`
  ADD CONSTRAINT `marriagetable_ibfk_1` FOREIGN KEY (`birthid`) REFERENCES `birthtable` (`birthid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
