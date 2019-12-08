DROP TABLE IF EXISTS account;

CREATE TABLE `account` (
  `uid` varchar(50) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  CONSTRAINT `account_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO account VALUES("admin1","admin","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("kebele1","kebele","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("region","region","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("stat","stat","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("woreda","woreda","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("zone","zone","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");


DROP TABLE IF EXISTS birthtable;

CREATE TABLE `birthtable` (
  `birthid` int(11) NOT NULL AUTO_INCREMENT,
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
  `birthstatus` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`birthid`),
  KEY `uid` (`uid`),
  CONSTRAINT `birthtable_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO birthtable VALUES("1","alebachew","genet","abate","kasaye","amare","female","1994-06-21","Ethiopian","1994","Amhara","westgojjam","debremarkos","gozamen","01","kebele1","","","","unmarried","born");
INSERT INTO birthtable VALUES("2","wuletaw","yehuala","abate","Etagegnew","amare","female","2018-05-30","Ethiopian","2018","Amhara","westgojjam","debremarkos","gozamen","01","kebele1","","","","unmarried","born");
INSERT INTO birthtable VALUES("3","zewudu","genet","abate","kasaye","amare","male","1990-05-30","Ethiopian","1990","Amhara","westgojjam","debremarkos","gozamen","01","kebele1","","","","unmarried","born");


DROP TABLE IF EXISTS citytable;

CREATE TABLE `citytable` (
  `cityid` varchar(50) NOT NULL,
  `cityname` varchar(50) DEFAULT NULL,
  `woredaid` varchar(50) DEFAULT NULL,
  `regionid` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cityid`),
  UNIQUE KEY `cityname` (`cityname`),
  KEY `woredaid` (`woredaid`),
  KEY `regionid` (`regionid`),
  KEY `uid` (`uid`),
  CONSTRAINT `citytable_ibfk_1` FOREIGN KEY (`woredaid`) REFERENCES `woredatable` (`woredaid`),
  CONSTRAINT `citytable_ibfk_2` FOREIGN KEY (`regionid`) REFERENCES `regiontable` (`regionid`),
  CONSTRAINT `citytable_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO citytable VALUES("c1","debremarkos","w1","r3","admin1");


DROP TABLE IF EXISTS deathtable;

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
  `deathzone` varchar(50) DEFAULT NULL,
  `deathworeda` varchar(50) DEFAULT NULL,
  `deathcity` varchar(50) DEFAULT NULL,
  `deathkebele` varchar(10) DEFAULT NULL,
  `deathreason` varchar(100) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`deathid`),
  KEY `uid` (`uid`),
  CONSTRAINT `deathtable_ibfk_1` FOREIGN KEY (`deathid`) REFERENCES `birthtable` (`birthid`),
  CONSTRAINT `deathtable_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS divorce;

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
  `uid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`divorceid`),
  KEY `birthid` (`birthid`),
  KEY `uid` (`uid`),
  CONSTRAINT `divorce_ibfk_1` FOREIGN KEY (`divorceid`) REFERENCES `marriagetable` (`marriageid`),
  CONSTRAINT `divorce_ibfk_2` FOREIGN KEY (`birthid`) REFERENCES `birthtable` (`birthid`),
  CONSTRAINT `divorce_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS feedbacktable;

CREATE TABLE `feedbacktable` (
  `feedbackid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS kebeletable;

CREATE TABLE `kebeletable` (
  `kebeleid` varchar(50) NOT NULL,
  `kebelename` varchar(50) DEFAULT NULL,
  `woredaid` varchar(50) DEFAULT NULL,
  `regionid` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kebeleid`),
  KEY `woredaid` (`woredaid`),
  KEY `regionid` (`regionid`),
  KEY `uid` (`uid`),
  CONSTRAINT `kebeletable_ibfk_1` FOREIGN KEY (`woredaid`) REFERENCES `woredatable` (`woredaid`),
  CONSTRAINT `kebeletable_ibfk_2` FOREIGN KEY (`regionid`) REFERENCES `regiontable` (`regionid`),
  CONSTRAINT `kebeletable_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kebeletable VALUES("k1","01","w1","r3","admin1");


DROP TABLE IF EXISTS marriagetable;

CREATE TABLE `marriagetable` (
  `marriageid` int(11) NOT NULL AUTO_INCREMENT,
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
  `uid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`marriageid`),
  KEY `birthid` (`birthid`),
  KEY `uid` (`uid`),
  CONSTRAINT `marriagetable_ibfk_1` FOREIGN KEY (`birthid`) REFERENCES `birthtable` (`birthid`),
  CONSTRAINT `marriagetable_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS regiontable;

CREATE TABLE `regiontable` (
  `regionid` varchar(50) NOT NULL,
  `regionname` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`regionid`),
  UNIQUE KEY `regionname` (`regionname`),
  KEY `uid` (`uid`),
  CONSTRAINT `regiontable_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO regiontable VALUES("r1","tigray","admin1");
INSERT INTO regiontable VALUES("r2","Afar","admin1");
INSERT INTO regiontable VALUES("r3","Amhara","admin1");
INSERT INTO regiontable VALUES("r4","Oromia","admin1");
INSERT INTO regiontable VALUES("r5","Benshangul","admin1");
INSERT INTO regiontable VALUES("r6","Ganbela","admin1");
INSERT INTO regiontable VALUES("r7","SNNP","admin1");
INSERT INTO regiontable VALUES("R8","Somalie","admin1");
INSERT INTO regiontable VALUES("r9","Harar","admin1");


DROP TABLE IF EXISTS user;

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
  `kebele` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("admin1","wuletaw","yehuala","bamilaku","male","0942863137","wuleta@gmail.com","","Admin","Ethiopian","amhara","eastgojjam","gozamen","debremarkos","01");
INSERT INTO user VALUES("kebele1","tariku","bekele","teka","male","0947635214","ta@gmil.com","","kebeleofficer","Ethiopian","Amhara","westgojjam","gozamen","debremarkos","01");
INSERT INTO user VALUES("region","hana","tilahun","abebe","female","0930452135","han@gmil.com","","reginalofficer","Ethiopian","Amhara","eastgojjam","gozamen","debremarkos","01");
INSERT INTO user VALUES("stat","aderaw","temesgen","abebe","male","0911420002","stat@gmil.com","","statician","Ethiopian","Amhara","eastgojjam","gozamen","debremarkos","01");
INSERT INTO user VALUES("woreda","wuleta","bekele","abebe","male","0945863137","wul@gmil.com","","woredaofficer","Ethiopian","Amhara","eastgojjam","gozamen","debremarkos","01");
INSERT INTO user VALUES("zone","mahie","zewudu","abebe","female","0931640401","m@gmail.com","","zonalofficer","Ethiopian","Amhara","eastgojjam","gozamen","debremarkos","01");


DROP TABLE IF EXISTS woredatable;

CREATE TABLE `woredatable` (
  `woredaid` varchar(50) NOT NULL,
  `woredaname` varchar(50) DEFAULT NULL,
  `zoneid` varchar(50) DEFAULT NULL,
  `regionid` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`woredaid`),
  UNIQUE KEY `woredaname` (`woredaname`),
  KEY `zoneid` (`zoneid`),
  KEY `regionid` (`regionid`),
  KEY `uid` (`uid`),
  CONSTRAINT `woredatable_ibfk_1` FOREIGN KEY (`zoneid`) REFERENCES `zonetable` (`zoneid`),
  CONSTRAINT `woredatable_ibfk_2` FOREIGN KEY (`regionid`) REFERENCES `regiontable` (`regionid`),
  CONSTRAINT `woredatable_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO woredatable VALUES("w1","gozamen","z1","r3","admin1");
INSERT INTO woredatable VALUES("w2","Denbecha","z2","r3","admin1");


DROP TABLE IF EXISTS zonetable;

CREATE TABLE `zonetable` (
  `zoneid` varchar(50) NOT NULL,
  `zonename` varchar(50) DEFAULT NULL,
  `regionid` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`zoneid`),
  UNIQUE KEY `zonename` (`zonename`),
  KEY `regionid` (`regionid`),
  KEY `uid` (`uid`),
  CONSTRAINT `zonetable_ibfk_1` FOREIGN KEY (`regionid`) REFERENCES `regiontable` (`regionid`),
  CONSTRAINT `zonetable_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO zonetable VALUES("z1","eastgojjam","r3","admin1");
INSERT INTO zonetable VALUES("z2","westgojjam","r3","admin1");


