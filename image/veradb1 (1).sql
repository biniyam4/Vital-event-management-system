-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 07:35 PM
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
  `uid` varchar(50) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`uid`, `username`, `password`, `status`) VALUES
('add', 'wuleta', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('admin1', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('am', 'zonofficer', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('fuser', 'federal', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('kebeleuser', 'userkb', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('regiondfgh', 'regiondfgh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('ruser', 'region', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('rusere', 'hanex', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('stauser', 'aster', '6fd4a22c9a7c49dcbee12d5819a252beabacd79d', 'active'),
('use2', 'kebale', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('user1', 'hana', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'active'),
('user111', 'user111', 'f8781c346613322d157b5f9a26cc85591f5cc96d', 'active'),
('user3', 'kebeleuser', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('userr', 'region1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('woreda', 'woreda', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
('zoneoficer', 'zone', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active');

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
  `birthdate` date NOT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `registrationdate` year(4) NOT NULL,
  `birthregion` varchar(50) DEFAULT NULL,
  `birthzone` varchar(50) DEFAULT NULL,
  `birthcity` varchar(50) DEFAULT NULL,
  `birthworeda` varchar(50) DEFAULT NULL,
  `birthkebele` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `statename` varchar(50) DEFAULT NULL,
  `countryname` varchar(50) DEFAULT NULL,
  `socialsecurityno` varchar(50) DEFAULT NULL,
  `statusformrg` varchar(50) DEFAULT NULL,
  `birthstatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthtable`
--

INSERT INTO `birthtable` (`birthid`, `fname`, `mname`, `lname`, `motherfname`, `mothermname`, `sex`, `birthdate`, `nationality`, `registrationdate`, `birthregion`, `birthzone`, `birthcity`, `birthworeda`, `birthkebele`, `uid`, `statename`, `countryname`, `socialsecurityno`, `statusformrg`, `birthstatus`) VALUES
(1, 'baby', 'genet', 'abate', 'kasaye', 'amare', 'female', '1999-05-26', 'Ethiopian', 2018, 'afar', 'afarzone1', 'afarcity1', 'afarworeda1', 'afarkebele1', 'user1', NULL, NULL, NULL, 'married', 'died'),
(2, 'alebachew', 'genet', 'abate', 'kasaye', 'amare', 'female', '2018-05-26', 'Ethiopian', 2018, 'afar', 'afarzone1', 'afarcity1', 'afarworeda1', 'afarkebele1', 'user1', NULL, NULL, NULL, 'unmarried', 'died'),
(3, 'abebaw', 'genet', 'abate', 'kasaye', 'amare', 'male', '1996-05-26', 'Ethiopian', 2018, 'afar', 'afarzone1', 'afarcity1', 'afarworeda1', 'afarkebele1', 'user1', NULL, NULL, NULL, 'married', 'born'),
(4, 'fromswidn', 'genet', 'abate', 'kasaye', 'amare', 'female', '2026-05-18', 'Ethiopian', 2026, 'afar', 'afarzone1', 'afarcity1', 'afarworeda1', 'afarkebele1', 'fuser', 'japan', 'amerika', 'teregfvv223', 'unmarried', 'died'),
(5, 'ayana', 'genet', 'yilma', 'kasaye', 'amare', 'female', '2018-05-27', 'Ethiopian', 2018, 'amhara', 'gozamen', 'dangla', 'TilIly', '01', 'rusere', NULL, NULL, NULL, 'unmarried', 'died'),
(6, 'ayana', 'abebe', 'abate', 'sumesh', 'amare', 'male', '2018-05-27', 'Ethiopian', 2018, 'amhara', 'gozamen', 'dangla', 'TilIly', '01', 'rusere', NULL, NULL, NULL, 'unmarried', 'died'),
(7, 'alebachew', 'genet', 'abate', 'kasaye', 'amare', 'female', '2018-05-28', 'Ethiopian', 2018, 'amhara', 'awie', 'danglacity', 'dangila', '01', 'use2', NULL, NULL, NULL, 'unmarried', 'born'),
(8, 'zebider', 'abebe', 'abate', 'dfghj', 'bayu', 'female', '2018-05-28', 'Ethiopian', 2018, 'amhara', 'awie', 'danglacity', 'dangila', '01', 'use2', NULL, NULL, NULL, 'unmarried', 'born'),
(12, 'baby', 'abbeyneh', 'kebede', 'mother', 'bekalu', 'female', '2018-05-28', 'Ethiopian', 1990, 'amhara', 'gozamen', 'dangla', 'TilIly', '01', 'kebeleuser', NULL, NULL, NULL, 'unmarried', 'born'),
(13, 'alebachew', 'genet', 'abate', 'kasaye', 'bayu', 'female', '2018-05-28', 'Ethiopian', 1990, 'amhara', 'gozamen', 'dangla', 'TilIly', '01', 'rusere', NULL, NULL, NULL, 'unmarried', 'born'),
(14, 'zebider', 'genet', 'yilma', 'kasaye', 'amare', 'male', '2029-05-18', 'Ethiopian', 2029, 'afar', 'afarzone1', 'afarcity1', 'afarworeda1', 'afarkebele1', 'fuser', 'japan', 'amerika', 'teregfvv223', 'unmarried', 'born'),
(15, 'zebider', 'genet', 'abate', 'kasaye', 'amare', 'female', '2018-05-29', 'Ethiopian', 2018, 'amhara', 'gozamen', 'dangla', 'TilIly', '01', 'rusere', NULL, NULL, NULL, 'unmarried', 'born'),
(22, 'zebider', 'genet', 'abate', 'kasaye', 'amare', 'female', '2018-05-29', 'Ethiopian', 2018, 'amhara', 'gozamen', 'dangla', 'TilIly', '01', 'rusere', NULL, NULL, NULL, 'unmarried', 'born'),
(23, 'alebachew', 'genet', 'abate', 'kasaye', 'amare', 'female', '2018-05-29', 'Ethiopian', 2018, 'amhara', 'gozamen', 'dangla', 'TilIly', '01', 'rusere', NULL, NULL, NULL, 'unmarried', 'died');

-- --------------------------------------------------------

--
-- Table structure for table `citytable`
--

CREATE TABLE `citytable` (
  `cityid` varchar(50) NOT NULL,
  `cityname` varchar(50) DEFAULT NULL,
  `woredaid` varchar(50) DEFAULT NULL,
  `regionid` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citytable`
--

INSERT INTO `citytable` (`cityid`, `cityname`, `woredaid`, `regionid`, `uid`) VALUES
('c1', 'afarcity1', 'w1', 'r2', 'admin1'),
('city', 'dangla', 'w3', 'region3', 'woreda'),
('city04', 'denbecha', 'w2', 'region3', 'woreda'),
('city05', 'danglacity', 'w2', 'region3', 'woreda');

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
  `birthworeda` varchar(50) NOT NULL,
  `birthcity` varchar(50) DEFAULT NULL,
  `birthkebele` varchar(50) DEFAULT NULL,
  `dateofdeath` date DEFAULT NULL,
  `workposition` varchar(50) DEFAULT NULL,
  `deathregion` varchar(50) DEFAULT NULL,
  `deathzone` varchar(50) DEFAULT NULL,
  `deathworeda` varchar(50) DEFAULT NULL,
  `deathcity` varchar(50) DEFAULT NULL,
  `deathkebele` varchar(10) DEFAULT NULL,
  `deathreason` varchar(100) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `yearofdeath` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deathtable`
--

INSERT INTO `deathtable` (`deathid`, `fname`, `lname`, `sex`, `nationality`, `birthdate`, `birthregion`, `birthzone`, `birthworeda`, `birthcity`, `birthkebele`, `dateofdeath`, `workposition`, `deathregion`, `deathzone`, `deathworeda`, `deathcity`, `deathkebele`, `deathreason`, `uid`, `yearofdeath`) VALUES
(1, 'baby', 'abate', 'female', 'Ethiopian', '2018-05-26', 'afar', 'afarzone1', '', 'afarworeda1', 'afarkebele1', '2018-05-26', 'Diploma', 'afar', 'afarworeda1', 'afarcity1', 'afarkebele1', 'acciedent', 'car acciedent or other', 'user1', 0000),
(2, 'alebachew', 'abate', 'female', 'Ethiopian', '2018-05-26', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1', '2018-05-26', 'Diploma', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele', 'car acciedent', 'user1', 0000),
(4, 'fromswidn', 'abate', 'female', 'Ethiopian', '2026-05-18', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1', '2018-05-29', 'Diploma', 'amhara', 'gozamen', 'TilIly', 'dangla', '01', 'sdfg', 'rusere', 0000),
(5, 'ayana', 'yilma', 'female', 'Ethiopian', '2018-05-27', 'amhara', 'gozamen', 'TilIly', 'dangla', '01', '2018-05-29', 'Diploma', 'amhara', 'gozamen', 'TilIly', 'dangla', '01', 'jhythgvfgrfd', 'rusere', 2018),
(6, 'ayana', 'abate', 'male', 'Ethiopian', '2018-05-27', 'amhara', 'gozamen', 'TilIly', 'dangla', '01', '2018-05-29', 'Diploma', 'amhara', 'gozamen', 'TilIly', 'dangla', '01', 'weadd year now', 'rusere', 2018),
(23, 'alebachew', 'abate', 'female', 'Ethiopian', '2018-05-29', 'amhara', 'gozamen', 'TilIly', 'dangla', '01', '2018-05-29', 'Diploma', 'amhara', 'gozamen', 'TilIly', 'dangla', '01', ' unkown', 'rusere', 2018);

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
  `divorcezone` varchar(50) DEFAULT NULL,
  `divorceworeda` varchar(50) DEFAULT NULL,
  `divorcecity` varchar(50) DEFAULT NULL,
  `divorcekebele` varchar(50) DEFAULT NULL,
  `numberofchild` int(11) DEFAULT NULL,
  `birthid` int(11) DEFAULT NULL,
  `wifebirthid` int(11) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divorce`
--

INSERT INTO `divorce` (`divorceid`, `hasbandfname`, `hasbandlname`, `wifefname`, `wifelname`, `divorcedate`, `divorcereason`, `divorceregion`, `divorcezone`, `divorceworeda`, `divorcecity`, `divorcekebele`, `numberofchild`, `birthid`, `wifebirthid`, `uid`) VALUES
(1, 'abebaw', 'abate', 'baby', 'abate', '2018-05-26', 'asdfg', ' afar', ' afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1', 3, 3, 1, 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `feedbackid` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`feedbackid`, `role`, `email`, `comment`, `dates`, `status`) VALUES
(1, 'kebeleofficer', 'sd@gmail.com', 'why we do best', '2026-05-18', 'seen'),
(2, 'kebeleofficer', 'sd@gmail.com', 'wertyfghghjk', '2026-05-18', 'seen'),
(3, 'kebeleofficer', 'sd@gmail', 'asdfg', '2026-05-18', 'seen'),
(4, 'kebeleofficer', 'sd@gmail.com', 'ASDFGH', '2027-05-18', 'seen'),
(5, 'federaloficer', 'sd@gmail.com', 'are you federal officer', '2027-05-18', 'seen'),
(6, 'zoneofficer', 'sd@gmail.com', 'lkjhgfdspoiuytrew.,mnbvz', '2029-05-18', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `kebeletable`
--

CREATE TABLE `kebeletable` (
  `kebeleid` varchar(50) NOT NULL,
  `kebelename` varchar(50) DEFAULT NULL,
  `woredaid` varchar(50) DEFAULT NULL,
  `regionid` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebeletable`
--

INSERT INTO `kebeletable` (`kebeleid`, `kebelename`, `woredaid`, `regionid`, `uid`) VALUES
('k1', 'afarkebele1', 'w1', 'r2', 'admin1'),
('k2', '01', 'w2', 'region3', 'woreda'),
('k3', '02', 'w3', 'region3', 'woreda'),
('kebele3', '02', 'w2', 'region3', 'woreda'),
('kebele4', '03', 'w2', 'region3', 'woreda'),
('kebele5', '0244', 'w1', 'r2', 'woreda');

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
  `hphoto` varchar(50) DEFAULT NULL,
  `hasbandbrthid` int(11) DEFAULT NULL,
  `wifefname` varchar(50) DEFAULT NULL,
  `wifelname` varchar(50) DEFAULT NULL,
  `wifeage` int(11) DEFAULT NULL,
  `wphoto` varchar(50) DEFAULT NULL,
  `wifebirthid` int(11) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL,
  `woreda` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `kebele` varchar(50) DEFAULT NULL,
  `marragedate` date DEFAULT NULL,
  `marragecondition` varchar(100) DEFAULT NULL,
  `marriagestatus` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marriagetable`
--

INSERT INTO `marriagetable` (`marriageid`, `birthid`, `hasbandfname`, `hasbandlname`, `hasbandage`, `hphoto`, `hasbandbrthid`, `wifefname`, `wifelname`, `wifeage`, `wphoto`, `wifebirthid`, `region`, `zone`, `woreda`, `city`, `kebele`, `marragedate`, `marragecondition`, `marriagestatus`, `uid`) VALUES
(1, 3, 'abebaw', 'abate', 22, '2.jpg', NULL, 'baby', 'abate', 19, 'mist1.jpg', 1, 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1', '2026-05-18', 'religious', 'divorced', 'user1'),
(2, 3, 'abebaw', 'abate', 22, '2.jpg', NULL, 'baby', 'abate', 19, 'mist2.jpg', 1, 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1', '2026-05-18', 'nonreligious', 'divorced', 'user1'),
(3, 3, 'abebaw', 'abate', 22, '2.jpg', NULL, 'baby', 'abate', 19, 'mist2.jpg', 1, 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1', '2026-05-18', 'nonreligious', 'married', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `regiontable`
--

CREATE TABLE `regiontable` (
  `regionid` varchar(50) NOT NULL,
  `regionname` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regiontable`
--

INSERT INTO `regiontable` (`regionid`, `regionname`, `uid`) VALUES
('r1', 'tigray', 'admin1'),
('r2', 'afar', 'admin1'),
('region3', 'amhara', 'fuser'),
('region4', 'oromia', 'fuser'),
('region5', 'DNNP', 'fuser'),
('region6', 'Benshangul', 'fuser'),
('region7', 'Somalia', 'fuser'),
('region8', 'Ganbela', 'fuser'),
('region9', 'Harar', 'fuser');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(50) NOT NULL,
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
('add', 'mahie', 'temesgen', 'teka', 'male', '09323531352652', 'tahgfd@gmil.com', '', 'kebeleofficer', 'Ethiopian', 'amhara', 'awie', 'dangila', 'denbecha', '01'),
('admin1', 'wuletaw', 'yehuala', 'bamilaku', 'male', '+251942863137', 'wuleta@gmail.com', '', 'Admin', 'Ethiopian', 'amhara', 'eastgojjam', 'gozamen', 'dm', '01'),
('am', 'aderaw', 'temesgen', 'abebe', 'male', '0911423481', 'taaa@gmil.com', '', 'zonalofficer', 'Ethiopian', 'amhara', 'gozamen', 'TilIly', 'dangla', '01'),
('ffuser', 'aderaw', 'temesgen', 'abebe', 'male', '+25194512683 ', 'fta@gmil.com', 'wuleta.jpg', '--Select Role--', 'Ethiopian', 'amhara', 'gozamen', 'TilIly', 'dangla', '01'),
('fuser', 'tariku', 'bekele', 'teka', 'female', '+251 94751246', 'tarik@gmail.com', 'bal1.jpg', 'federaloficer', 'Ethiopian', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1'),
('kebeleuser', 'aderaw', 'mesert', 'abebe', 'male', '0945213652', 'mesie@gmil.com', '', 'kebeleofficer', 'Ethiopian', 'amhara', 'gozamen', 'TilIly', 'dangla', '01'),
('regiondfgh', 'aderaw', 'temesgen', 'teka', 'female', '0911425215', 'tadfg@gmil.com', 'mist1.jpg', 'woredaofficer', 'Ethiopian', 'amhara', 'gozamen', 'TilIly', 'dangla', '01'),
('regionsd', 'aderaw', 'temesgen', 'abebe', '--Select sex--', '09017893531', 'erfgtyh@gmail.com', '', '--Select Role--', 'Ethiopian', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1'),
('ruser', 'mahielet', 'zewudu', 'abebe', 'female', '+251 92545141', 'mahi@gmail.com', 'mist4.jpg', 'regionalofficer', 'Ethiopian', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1'),
('rusere', 'tariku', 'temesgen', 'abebe', 'male', '+25195142516 ', 'aas@gmail.com', '2.jpg', 'kebeleofficer', 'Ethiopian', 'amhara', 'gozamen', 'TilIly', 'dangla', '01'),
('ruserx', 'aderaw', 'temesgen', 'abebe', 'male', '0911423531', 'ta@gmil.com', '', 'kebeleofficer', 'Ethiopian', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1'),
('stauser', 'tariku', 'bekele', 'abebe', 'male', '+25194215426 ', 'tae@gmil.com', '2.jpg', 'statician', 'Ethiopian', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1'),
('use2', 'aderaw', 'temesgen', 'abebe', 'male', '0902423531', 'tahgf@gmil.com', '', 'kebeleofficer', 'Ethiopian', 'amhara', 'awie', 'dangila', 'danglacity', '01'),
('user1', 'hana', 'tilahun', 'abebe', 'female', '+251 92125412', 'hana@gmil.com', '', 'kebeleofficer', 'Ethiopian', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1'),
('user10', 'aderaw', 'bekele', 'abebe', 'male', '+251 53398699', 'Fade@gmail.com', '2.jpg', 'reginalofficer', 'Ethiopian', 'amhara', 'Eastgojjam', 'kosober', 'danglacity', '02'),
('user111', 'tariku', 'temesgen', 'abebe', 'male', '0911423556', 'tafghj@gmil.com', '', 'statician', 'Ethiopian', 'amhara', 'gozamen', 'TilIly', 'denbecha', '01'),
('user3', 'aderaw', 'temesgen', 'abebe', 'male', '+251 96532142', 'ta@gmil.comuser', '', 'kebeleofficer', 'Ethiopian', 'amhara', 'awie', 'dangila', 'danglacity', '01'),
('userr', 'aderaw', 'temesgen', 'abebe', 'male', '+251 98542153', 'm@gmail.com', 'bal2.jpg', 'reginalofficer', 'Ethiopian', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1'),
('woreda', 'walie', 'temesgen', 'abebe', 'male', '+251941458425', 'wal@gmail.com', 'bal1.jpg', 'woredaofficer', 'Ethiopian', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1'),
('zoneoficer', 'ayana', 'genet', 'abate', 'male', '+251 91840429', 'ayu@gmail.com', 'bal2.jpg', 'zonalofficer', 'Ethiopian', 'afar', 'afarzone1', 'afarworeda1', 'afarcity1', 'afarkebele1');

-- --------------------------------------------------------

--
-- Table structure for table `woredatable`
--

CREATE TABLE `woredatable` (
  `woredaid` varchar(50) NOT NULL,
  `woredaname` varchar(50) DEFAULT NULL,
  `zoneid` varchar(50) DEFAULT NULL,
  `regionid` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `woredatable`
--

INSERT INTO `woredatable` (`woredaid`, `woredaname`, `zoneid`, `regionid`, `uid`) VALUES
('w03', 'TilIly', 'zone03', 'region3', 'zoneoficer'),
('w1', 'afarworeda1', 'z1', 'r2', 'admin1'),
('w2', 'dangila', 'zone3', 'region3', 'zoneoficer'),
('w3', 'denbecha', 'zone3', 'region3', 'zoneoficer'),
('wo01', 'kosober', 'zone03', 'region3', 'zoneoficer');

-- --------------------------------------------------------

--
-- Table structure for table `zonetable`
--

CREATE TABLE `zonetable` (
  `zoneid` varchar(50) NOT NULL,
  `zonename` varchar(50) DEFAULT NULL,
  `regionid` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zonetable`
--

INSERT INTO `zonetable` (`zoneid`, `zonename`, `regionid`, `uid`) VALUES
('z0ne05', 'gozamen', 'region3', 'userr'),
('z1', 'afarzone1', 'r2', 'admin1'),
('zone03', 'awie', 'region3', 'userr'),
('zone04', 'feresbet', 'region3', 'userr'),
('zone22', 'afarzone2', 'r2', 'userr'),
('zone23', 'afarzone3', 'r2', 'userr'),
('zone24', 'afarzone4', 'r2', 'userr'),
('zone3', 'Eastgojjam', 'region3', 'userr');

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
  ADD PRIMARY KEY (`birthid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `registrationdate` (`registrationdate`),
  ADD KEY `registrationdate_2` (`registrationdate`),
  ADD KEY `registrationdate_3` (`registrationdate`);

--
-- Indexes for table `citytable`
--
ALTER TABLE `citytable`
  ADD PRIMARY KEY (`cityid`),
  ADD UNIQUE KEY `cityname` (`cityname`),
  ADD KEY `woredaid` (`woredaid`),
  ADD KEY `regionid` (`regionid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `deathtable`
--
ALTER TABLE `deathtable`
  ADD PRIMARY KEY (`deathid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `divorce`
--
ALTER TABLE `divorce`
  ADD PRIMARY KEY (`divorceid`),
  ADD KEY `birthid` (`birthid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `kebeletable`
--
ALTER TABLE `kebeletable`
  ADD PRIMARY KEY (`kebeleid`),
  ADD KEY `woredaid` (`woredaid`),
  ADD KEY `regionid` (`regionid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `marriagetable`
--
ALTER TABLE `marriagetable`
  ADD PRIMARY KEY (`marriageid`),
  ADD KEY `birthid` (`birthid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `regiontable`
--
ALTER TABLE `regiontable`
  ADD PRIMARY KEY (`regionid`),
  ADD UNIQUE KEY `regionname` (`regionname`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `woredatable`
--
ALTER TABLE `woredatable`
  ADD PRIMARY KEY (`woredaid`),
  ADD UNIQUE KEY `woredaname` (`woredaname`),
  ADD KEY `zoneid` (`zoneid`),
  ADD KEY `regionid` (`regionid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `zonetable`
--
ALTER TABLE `zonetable`
  ADD PRIMARY KEY (`zoneid`),
  ADD UNIQUE KEY `zonename` (`zonename`),
  ADD KEY `regionid` (`regionid`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthtable`
--
ALTER TABLE `birthtable`
  MODIFY `birthid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `marriagetable`
--
ALTER TABLE `marriagetable`
  MODIFY `marriageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `birthtable`
--
ALTER TABLE `birthtable`
  ADD CONSTRAINT `birthtable_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `citytable`
--
ALTER TABLE `citytable`
  ADD CONSTRAINT `citytable_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `deathtable`
--
ALTER TABLE `deathtable`
  ADD CONSTRAINT `deathtable_ibfk_1` FOREIGN KEY (`deathid`) REFERENCES `birthtable` (`birthid`),
  ADD CONSTRAINT `deathtable_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `divorce`
--
ALTER TABLE `divorce`
  ADD CONSTRAINT `divorce_ibfk_1` FOREIGN KEY (`divorceid`) REFERENCES `marriagetable` (`marriageid`),
  ADD CONSTRAINT `divorce_ibfk_2` FOREIGN KEY (`birthid`) REFERENCES `birthtable` (`birthid`),
  ADD CONSTRAINT `divorce_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `kebeletable`
--
ALTER TABLE `kebeletable`
  ADD CONSTRAINT `kebeletable_ibfk_1` FOREIGN KEY (`woredaid`) REFERENCES `woredatable` (`woredaid`),
  ADD CONSTRAINT `kebeletable_ibfk_2` FOREIGN KEY (`regionid`) REFERENCES `regiontable` (`regionid`),
  ADD CONSTRAINT `kebeletable_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `marriagetable`
--
ALTER TABLE `marriagetable`
  ADD CONSTRAINT `marriagetable_ibfk_1` FOREIGN KEY (`birthid`) REFERENCES `birthtable` (`birthid`),
  ADD CONSTRAINT `marriagetable_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `regiontable`
--
ALTER TABLE `regiontable`
  ADD CONSTRAINT `regiontable_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `woredatable`
--
ALTER TABLE `woredatable`
  ADD CONSTRAINT `woredatable_ibfk_1` FOREIGN KEY (`zoneid`) REFERENCES `zonetable` (`zoneid`),
  ADD CONSTRAINT `woredatable_ibfk_2` FOREIGN KEY (`regionid`) REFERENCES `regiontable` (`regionid`),
  ADD CONSTRAINT `woredatable_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `zonetable`
--
ALTER TABLE `zonetable`
  ADD CONSTRAINT `zonetable_ibfk_1` FOREIGN KEY (`regionid`) REFERENCES `regiontable` (`regionid`),
  ADD CONSTRAINT `zonetable_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
