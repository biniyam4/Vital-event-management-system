DROP TABLE IF EXISTS account;

CREATE TABLE `account` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  CONSTRAINT `account_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO account VALUES("13","waliewuleta","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("22","teku","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("24","ayu","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("26","meseret","24395e6ac79961202c2747de9fdae00b86eaf2a6","active");
INSERT INTO account VALUES("27","abebe","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("29","muler","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("31","bereket","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("33","alexso","5f6955d227a320c7f1f6c7da2a6d96a851a8118f","active");
INSERT INTO account VALUES("34","abex","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("35","belie","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("37","selam","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("38","federal","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("39","region","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("40","zone","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("41","kebele","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("42","admin","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("45","oromo","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");
INSERT INTO account VALUES("47","stat","5f6955d227a320c7f1f6c7da2a6d96a851a8118f","active");
INSERT INTO account VALUES("48","federel","40bd001563085fc35165329ea1ff5c5ecbdbbeef","active");


DROP TABLE IF EXISTS birthtable;

CREATE TABLE `birthtable` (
  `birthid` int(11) NOT NULL AUTO_INCREMENT,
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
  `birthstatus` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`birthid`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

INSERT INTO birthtable VALUES("44","awoke","negash","alebachew","aster","fff","male","2018-05-18","Ethiopian","2018-05-18","amhara","m/gojjam","m/lemar","gozamen","012","22","","","","married","born");
INSERT INTO birthtable VALUES("45","tariku","alemu","alebachew","alebachewu","bewuketu","female","2018-05-18","Ethiopian","2018-05-18","amhara","m/gojjam","m/lemar","gozamen","012","22","","","","","died");
INSERT INTO birthtable VALUES("46","alias","negash","alebachew","alebachewu","bewuketu","male","1990-05-18","Ethiopian","2018-05-18","amhara","m/gojjam","m/lemar","gozamen","012","22","","","","married","born");
INSERT INTO birthtable VALUES("47","asnakech","alemu","alebachew","aster","bewuketu","female","1990-05-18","Ethiopian","2018-05-18","amhara","m/gojjam","m/lemar","gozamen","012","22","","","","married","born");
INSERT INTO birthtable VALUES("48","abebe","negash","alebachew","ffff","mamo","male","1990-05-18","Ethiopian","2018-05-18","tigray","mekele","asdf","bole","01","41","","","","married","born");
INSERT INTO birthtable VALUES("49","awoke","bekele","alebachew","ffff","bewuketu","female","1998-05-18","Ethiopian","2018-05-18","tigray","mekele","asdf","bole","01","41","","","","married","born");
INSERT INTO birthtable VALUES("50","worku","kebedu","alebachew","aster","mamo","male","2018-05-18","Ethiopian","2018-05-18","tigray","mekele","asdf","bole","01","41","","","","unmarried","born");
INSERT INTO birthtable VALUES("51","kelemu","bekele","c","alebachewu","geletuma","female","2018-05-18","Ethiopian","2018-05-18","tigray","mekele","asdf","bole","01","41","","","","unmarried","born");
INSERT INTO birthtable VALUES("52","ayana","genet","abate","kasaye","amare","male","2018-05-14","Ethiopian","2018-05-22","amhara","m/gojjam","m/lemar","gozamen","012","22","","","","married","died");
INSERT INTO birthtable VALUES("53","alebachew","abebe","abate","kasaye","amare","male","1994-04-28","Ethiopian","1994-07-31","amhara","m/gojjam","m/lemar","gozamen","012","22","","","","married","born");
INSERT INTO birthtable VALUES("54","zebider","genet","abate","kasaye","amare","female","1994-04-30","Ethiopian","1994-04-30","amhara","m/gojjam","m/lemar","gozamen","012","22","","","","married","born");
INSERT INTO birthtable VALUES("55","alebachew","genet","abate","kasaye","amare","male","2018-05-08","Ethiopian","2018-05-15","amhara","m/gojjam","m/lemar","gozamen","012","22","","","","unmarried","died");
INSERT INTO birthtable VALUES("56","gh","uu","uty","kasaye","amare","female","2018-05-22","Ethiopian","2018-05-15","amhara","m/gojjam","m/lemar","gozamen","012","22","","","","unmarried","died");
INSERT INTO birthtable VALUES("57","alebachew","genet","abate","kasaye","amare","female","2018-05-15","Ethiopian","0000-00-00","afar","mekele"," ","addegrat","02","38","japan","amerika","teregfvv223","unmarried","born");
INSERT INTO birthtable VALUES("58","alebachew","abebe","abate","kasaye","amare","female","2018-05-09","Ethiopian","0000-00-00","afar","mekele"," ","addegrat","02","38","gh","fgh","fghj","unmarried","born");
INSERT INTO birthtable VALUES("59","alebachew","abebe","abate","kasaye","amare","female","2018-05-09","Ethiopian","0000-00-00","afar","mekele"," ","addegrat","02","38","gh","fgh","fghj","unmarried","born");
INSERT INTO birthtable VALUES("60","alebachew","genet","abate","kasaye","amare","female","2018-05-14","Ethiopian","2018-05-15","oromia","mekele","asdf","enebsie","02","45","","","","unmarried","born");
INSERT INTO birthtable VALUES("61","alebachew","genet","abate","kasaye","amare","female","2018-05-19","Ethiopian","0000-00-00","oromia","sdfgh","asdf","addegrat","02","48","japan","amerika","teregfvv223","unmarried","born");


DROP TABLE IF EXISTS citytable;

CREATE TABLE `citytable` (
  `cityid` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `woredaid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO citytable VALUES("asdf","","");
INSERT INTO citytable VALUES("asdf","","");
INSERT INTO citytable VALUES("asdf","asdf","");
INSERT INTO citytable VALUES("asdf","zxcvg","w4");


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
  `deathworeda` varchar(50) DEFAULT NULL,
  `deathcity` varchar(50) DEFAULT NULL,
  `deathkebele` varchar(10) DEFAULT NULL,
  `deathreason` varchar(100) DEFAULT NULL,
  `kebeleofficerid` varchar(50) NOT NULL,
  PRIMARY KEY (`deathid`),
  CONSTRAINT `deathtable_ibfk_1` FOREIGN KEY (`deathid`) REFERENCES `birthtable` (`birthid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO deathtable VALUES("45","tariku","alebachew","female","Ethiopian","2018-05-18","amhara","m/gojjam","gozamen","m/lemar","012","2018-05-18","deploma","afar","addegrat"," ","02","dd","38");
INSERT INTO deathtable VALUES("50","worku","alebachew","male","Ethiopian","2018-05-18","tigray","mekele","bole","asdf","01","2018-05-18","deploma","tigray","bole","asdf","01","asdfg","41");
INSERT INTO deathtable VALUES("51","kelemu","c","female","Ethiopian","2018-05-18","tigray","mekele","bole","asdf","01","2018-05-16","deploma","amhara","gozamen","m/lemar","012","sdfg","22");
INSERT INTO deathtable VALUES("52","ayana","abate","male","Ethiopian","2018-05-14","amhara","m/gojjam","gozamen","m/lemar","012","2018-05-15","deploma","amhara","gozamen","m/lemar","012","besitet","22");
INSERT INTO deathtable VALUES("55","alebachew","abate","male","Ethiopian","2018-05-08","amhara","m/gojjam","gozamen","m/lemar","012","2018-05-16","deploma","oromia","enebsie","asdf","02","we dont know","45");
INSERT INTO deathtable VALUES("56","gh","uty","female","Ethiopian","2018-05-22","amhara","m/gojjam","gozamen","m/lemar","012","2018-05-15","deploma","amhara","gozamen","m/lemar","012","asdf","22");


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
  `divorcezone` varchar(50) NOT NULL,
  `divorceworeda` varchar(50) DEFAULT NULL,
  `divorcecity` varchar(50) DEFAULT NULL,
  `divorcekebele` varchar(50) DEFAULT NULL,
  `numberofchild` int(11) DEFAULT NULL,
  `birthid` int(11) NOT NULL,
  `wifebirthid` int(11) NOT NULL,
  `kebeleofficerid` varchar(50) NOT NULL,
  PRIMARY KEY (`divorceid`),
  CONSTRAINT `divorce_ibfk_1` FOREIGN KEY (`divorceid`) REFERENCES `marriagetable` (`marriageid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO divorce VALUES("16","worku","alebachew","kelemu","c","2018-05-22","sdfgh"," amhara"," m/gojjam","gozamen","m/lemar","012","2","50","51","22");
INSERT INTO divorce VALUES("17","worku","alebachew","kelemu","c","0000-00-00","tree"," amhara"," m/gojjam","gozamen","m/lemar","012","2","50","51","22");


DROP TABLE IF EXISTS federalofficertable;

CREATE TABLE `federalofficertable` (
  `federalofficerid` varchar(50) NOT NULL,
  `federalofficerfname` varchar(50) NOT NULL,
  `federalofficermname` varchar(50) NOT NULL,
  `federalofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`federalofficerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS feedbacktable;

CREATE TABLE `feedbacktable` (
  `feedbackid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `dates` date DEFAULT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO feedbacktable VALUES("1","kebeleofficer","fgh","","dfghj","","0000-00-00");
INSERT INTO feedbacktable VALUES("2","woredaofficer","mahlet","","wellcome","","2010-01-03");
INSERT INTO feedbacktable VALUES("3","Admin","wuletaye","ww@gmail.com","well come for conference","","2013-05-18");
INSERT INTO feedbacktable VALUES("4","kebeleofficer","wuletaye","ww@gmail.com","how was registration","","2013-05-18");
INSERT INTO feedbacktable VALUES("5","kebeleofficer","wuletaye","ww@gmail.com","call for conference","","2013-05-18");
INSERT INTO feedbacktable VALUES("6","woredaofficer","hana","ha@gmail.com","call for cermony","","2014-05-18");
INSERT INTO feedbacktable VALUES("7","statician","wuletayeneh","ww@gmail.com"," wellcome\n					","","2014-05-18");
INSERT INTO feedbacktable VALUES("8","statician","wuletayeneh","ww@gmail.com"," wellcome\n					","","2014-05-18");
INSERT INTO feedbacktable VALUES("9","","","ww@gmail.com","ERTYUWERTYUI","","2016-05-18");
INSERT INTO feedbacktable VALUES("10","statician","","ha@gmail.com","asdfghjk","","2017-05-18");
INSERT INTO feedbacktable VALUES("11","statician","","ha@gmail.com","asdfghjk","","2017-05-18");
INSERT INTO feedbacktable VALUES("12","statician","","ww@gmail.com","WWWWWWWWWWWW","New","2017-05-18");
INSERT INTO feedbacktable VALUES("13","kebeleofficer","","ww@gmail.com","Hello Evrybody","seen","2017-05-18");
INSERT INTO feedbacktable VALUES("14","kebeleofficer","","ha@gmail.com","hell","seen","2017-05-18");
INSERT INTO feedbacktable VALUES("15","kebeleofficer","","ww@gmail.com","asjemreshignal","seen","2018-05-18");
INSERT INTO feedbacktable VALUES("16","kebeleofficer","","ww@gmail.com","wellcome to our sendfeedback","seen","2018-05-18");
INSERT INTO feedbacktable VALUES("17","kebeleofficer","","sd@gmail","sdfghj","seen","2019-05-18");
INSERT INTO feedbacktable VALUES("18","kebeleofficer","","sd@gmail","sdfghj","seen","2019-05-18");
INSERT INTO feedbacktable VALUES("19","kebeleofficer","","sd@gmail.com","welgo program!!!!!","seen","2019-05-18");
INSERT INTO feedbacktable VALUES("20","federaloficer","","sd@gmail.com","are you federal officer","New","2019-05-18");
INSERT INTO feedbacktable VALUES("21","federaloficer","","sd@gmail.com","are you federal officer","New","2019-05-18");
INSERT INTO feedbacktable VALUES("22","kebeleofficer","","sd@gmail.com","mbnbmbnbbnbnnb","seen","2020-05-18");
INSERT INTO feedbacktable VALUES("23","kebeleofficer","","sd@gmail.com","mkfgnjkg","seen","2020-05-18");
INSERT INTO feedbacktable VALUES("24","kebeleofficer","","sd@gmail.com","please look my feedback!!!!","seen","2020-05-18");
INSERT INTO feedbacktable VALUES("25","woredaofficer","","sd@gmail.com","do you finish!! your project","seen","2020-05-18");
INSERT INTO feedbacktable VALUES("26","woredaofficer","","sd@gmail.com","SDFGHJ","seen","2020-05-18");
INSERT INTO feedbacktable VALUES("27","kebeleofficer","","sd@gmail","follow me","seen","2020-05-18");
INSERT INTO feedbacktable VALUES("28","kebeleofficer","","sd@gmail.com","avbnmsfghjfghjdfghjsfgjhg\nhijijijkk\nhhjkjkjj\ngjiok\nghijokpl;","seen","2020-05-18");
INSERT INTO feedbacktable VALUES("29","kebeleofficer","","sd@gmail.com","avbnmsfghjfghjdfghjsfgjhg\nhijijijkk\nhhjkjkjj\ngjiok\nghijokpl;","seen","2020-05-18");
INSERT INTO feedbacktable VALUES("30","kebeleofficer","","sd@gmail.com","avbnmsfghjfghjdfghjsfgjhg\nhijijijkk\nhhjkjkjj\ngjiok\nghijokpl;","seen","2020-05-18");


DROP TABLE IF EXISTS kebeleofficertable;

CREATE TABLE `kebeleofficertable` (
  `kebeleofficerid` varchar(50) NOT NULL,
  `kebeleofficerfname` varchar(50) NOT NULL,
  `kebeleofficermname` varchar(50) NOT NULL,
  `kebeleofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `kebeleid` varchar(50) NOT NULL,
  PRIMARY KEY (`kebeleofficerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kebeleofficertable VALUES("","abebe","kebede","asefa","male","0909560110","asdfg@gmail.com","","k1");
INSERT INTO kebeleofficertable VALUES("asdf","sdfg","asdf","asdf","male","9052412412","zxcvzx@gmail.com","","k2");
INSERT INTO kebeleofficertable VALUES("SDFGH","DFG","FGHCV","FGH","male","0618404296","DFGH@gmail.com","","k2");


DROP TABLE IF EXISTS kebeletable;

CREATE TABLE `kebeletable` (
  `kebeleid` varchar(50) NOT NULL,
  `kebelename` varchar(50) NOT NULL,
  `woredaid` varchar(50) NOT NULL,
  PRIMARY KEY (`kebeleid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kebeletable VALUES("asdfg","zxasdf","w4");
INSERT INTO kebeletable VALUES("k1","01","w1");
INSERT INTO kebeletable VALUES("k2","02","w1");
INSERT INTO kebeletable VALUES("k3","014","w4");


DROP TABLE IF EXISTS marriagetable;

CREATE TABLE `marriagetable` (
  `marriageid` int(11) NOT NULL AUTO_INCREMENT,
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
  `kebeleofficerid` varchar(50) NOT NULL,
  PRIMARY KEY (`marriageid`),
  KEY `birthid` (`birthid`),
  CONSTRAINT `marriagetable_ibfk_1` FOREIGN KEY (`birthid`) REFERENCES `birthtable` (`birthid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO marriagetable VALUES("14","50","worku","alebachew","0","kelemu","c","0","51","amhara","m/gojjam","gozamen","m/lemar","012","2019-05-18","normal","married","22");
INSERT INTO marriagetable VALUES("15","50","worku","alebachew","0","kelemu","c","0","51","amhara","m/gojjam","gozamen","m/lemar","012","2019-05-18","normal","married","22");
INSERT INTO marriagetable VALUES("16","50","worku","alebachew","0","kelemu","c","0","51","amhara","m/gojjam","gozamen","m/lemar","012","2019-05-18","normal","divorced","22");
INSERT INTO marriagetable VALUES("17","50","worku","alebachew","0","kelemu","c","0","51","amhara","m/gojjam","gozamen","m/lemar","012","2020-05-18","select type","divorced","22");


DROP TABLE IF EXISTS regionalofficertable;

CREATE TABLE `regionalofficertable` (
  `regionalofficerid` varchar(50) NOT NULL,
  `regionalofficerfname` varchar(50) NOT NULL,
  `regionalofficermname` varchar(50) NOT NULL,
  `regionalofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`regionalofficerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO regionalofficertable VALUES("r3","rr","rrrr","rrrr","male","0909563252","a@gmail.com","aa.jpg");
INSERT INTO regionalofficertable VALUES("rw","rr","rrrr","rrrr","female","0909563277","bb@gmail.com","aa.jpg");
INSERT INTO regionalofficertable VALUES("z1","tariku","bekele","teka","male","0909563266","tark@gmail.com","aa.jpg");


DROP TABLE IF EXISTS regiontable;

CREATE TABLE `regiontable` (
  `regionid` varchar(50) NOT NULL,
  `regionname` varchar(50) NOT NULL,
  PRIMARY KEY (`regionid`),
  UNIQUE KEY `regionname` (`regionname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO regiontable VALUES("region2","afar");
INSERT INTO regiontable VALUES("r3","amhara");
INSERT INTO regiontable VALUES("43","benshangul");
INSERT INTO regiontable VALUES("r4","oromia");
INSERT INTO regiontable VALUES("region1","tigray");


DROP TABLE IF EXISTS staticiantable;

CREATE TABLE `staticiantable` (
  `staticianid` varchar(50) NOT NULL,
  `staticianfname` varchar(50) NOT NULL,
  `staticianmname` varchar(50) NOT NULL,
  `staticianlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`staticianid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","wuletaw","yehuala","bamilak","male","0942861337","w@gmail.com","aa.jpg","Admin","","","","","","");
INSERT INTO user VALUES("13","walie","sishaw","maru","male","0623521474","aaa@gmail.com","","Admin","Ethiopian","amhara","sdfg","asdfg","asdfg","02");
INSERT INTO user VALUES("14","mahlet","zewudu","abebe","male","0945212331","m@gmail.com","aa.jpg","kebeleofficer","Ethiopian","amhara","m/gojjam","gozamen","m/m","01");
INSERT INTO user VALUES("15","wuletaw","yehuala","bamilaku","male","0942863137","wu@gmail.com","","statician","Ethiopian","amhara","m/gojjam","gozamen","m/m","01");
INSERT INTO user VALUES("17","wuletaw","bekele","bamilaku","male","0909563363","wel@gmail.com","aa.jpg","zonalofficer","Ethiopian","amhara","m/gojjam","gozamen","m/lemar","014");
INSERT INTO user VALUES("19","abie","kebede","teka","male","0914563212","ab@gmail.com","aa.jpg","zonalofficer","Ethiopian","amhara","m/gojjam","gozamen","m/m","015");
INSERT INTO user VALUES("20","lamesgn","bekele","abebe","male","0966563242","yeku@gmail.com","aa.jpg","federaloficer","Ethiopian","amhara","m/gojjam","gozamen","m/m","015");
INSERT INTO user VALUES("21","tilaye","yehuala","teka","male","0909563214","tilaye@gmail.com","aa.jpg","woredaofficer","Ethiopian","amhara","m/gojjam","gozamen","m/m","014");
INSERT INTO user VALUES("22","we","ye","ab","male","0909563252","add@gmail.com","","kebeleofficer","Ethiopian","amhara","m/gojjam","gozamen","m/lemar","012");
INSERT INTO user VALUES("24","ayana","genet","abate","male","0918404296","ayu@gmail.com","aa.jpg","branchadmin","Ethiopian","amhara","m/gojjam","gozamen","m/m","012");
INSERT INTO user VALUES("26","meseret","yehu","bam","male","093570143","mesie@gmail.com","","kebeleofficer","Ethiopian","tigray","mekele","addegrat","m/m","01");
INSERT INTO user VALUES("27","abebe","yehu","bamilaku","male","0923521235","abe@gmail.com","aa.jpg","kebeleofficer","Ethiopian","afar","harerie","addegrat","m/m","01");
INSERT INTO user VALUES("28","hana","bekele","teka","male","0909500052","zem@gmail.com","aa.jpg","woredaofficer","Ethiopian","afar","mekele","addegrat","m/lemar"," ");
INSERT INTO user VALUES("29","meseret","bekele","teka","male","0909563221","aaaa@gmail.com","aa.jpg","woredaofficer","Ethiopian","afar","harerie","addegrat","m/m","01");
INSERT INTO user VALUES("30","mesenbet","teshome","moges","male","0909511252","ayayuu@gmail.com","w.jpg","woredaofficer","Ethiopian","afar","harerie","addegrat","m/lemar","02");
INSERT INTO user VALUES("31","bereket","yehuala","mablaku","male","0961863251","berie@gmail.cop","wuleta.jpg","Admin","Ethiopian","afar","mekele","addegrat","m/m","02");
INSERT INTO user VALUES("32","hanna","alemu","sita","female","0909511152","hanex@gmail.com","w.jpg","branchadmin","Ethiopian","afar","mekele","addegrat","m/m","01");
INSERT INTO user VALUES("33","alexs","bekele","teka","female","0909562142","alex@gmail.com","aa.jpg","kebeleofficer","Ethiopian","afar","mekele","addegrat","m/m","02");
INSERT INTO user VALUES("34","melkam","aderawu","meku","male","0909563102","meku@gmail.com","aa.jpg","Admin","Ethiopian","afar","arsie","addegrat","m/m","02");
INSERT INTO user VALUES("35","df","asdfg","asdfgh","male","0909563137","ad@gmail.com","aa.jpg","statician","Ethiopian","afar","arsie","addegrat","asdfg","01");
INSERT INTO user VALUES("36","asdfg","dfgh","dfg","male","0909565552","ff@gmail.com","","statician","Ethiopian","amhara","mekele","enebsie"," ","01");
INSERT INTO user VALUES("37","dfg","dfgh","dfg","male","0909563200","f@gmail.com","aa.jpg","statician","Ethiopian","tigray","mekele","addegrat"," ","01");
INSERT INTO user VALUES("38","walelign","bekele","teka","male","0909563201","xx@gmail.com","aa.jpg","federaloficer","Ethiopian","afar","mekele","addegrat"," ","02");
INSERT INTO user VALUES("39","ye","a","teka","male","0904425124","fgh@gmail.com","aa.jpg","reginalofficer","Ethiopian","afar","arsie","enebsie"," ","02");
INSERT INTO user VALUES("40","hana","yehuala","teka","male","0905563252","dfg@gmail.com","","zonalofficer","Ethiopian","afar","mekele","addegrat"," ","02");
INSERT INTO user VALUES("41","meselech","mel","teka","male","0901563252","zxcvxcv@gmail.com","aa.jpg","kebeleofficer","Ethiopian","tigray","mekele","bole","asdf","01");
INSERT INTO user VALUES("42","aderaw","temesgen","abebe","male","0902423531","ade@gmail.com","aa.jpg","Admin","Ethiopian","amhara","sdfgh","addegrat","asdf","02");
INSERT INTO user VALUES("45","aderaw","temesgen","abebe","male","0911423531","xxxx@gmail.com","aa.jpg","kebeleofficer","Ethiopian","oromia","mekele","enebsie","asdf","02");
INSERT INTO user VALUES("47","aderaw","temesgen","abebe","male","0901113531","wuleta@gmail.com","aa.jpg","statician","Ethiopian","amhara","arsie","addegrat","asdf","01");
INSERT INTO user VALUES("48","aderaw","temesgen","abebe","male","0902023531","federal@gmail.com","aa.jpg","federaloficer","Ethiopian","oromia","sdfgh","addegrat","asdf","02");


DROP TABLE IF EXISTS woredaofficer;

CREATE TABLE `woredaofficer` (
  `woredaofficerid` varchar(50) NOT NULL,
  `woredaofficerfname` varchar(50) NOT NULL,
  `woredaofficermname` varchar(50) NOT NULL,
  `woredaofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `woredaid` varchar(50) NOT NULL,
  PRIMARY KEY (`woredaofficerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS woredatable;

CREATE TABLE `woredatable` (
  `woredaid` varchar(50) NOT NULL,
  `woredaname` varchar(50) NOT NULL,
  `zoneid` varchar(50) NOT NULL,
  PRIMARY KEY (`woredaid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO woredatable VALUES("w1","addegrat","zone1");
INSERT INTO woredatable VALUES("w4","enebsie","z3");
INSERT INTO woredatable VALUES("we","bole","z3");


DROP TABLE IF EXISTS zonalofficertable;

CREATE TABLE `zonalofficertable` (
  `zonalofficerid` varchar(50) NOT NULL,
  `zonalofficerfname` varchar(50) NOT NULL,
  `zonalofficermname` varchar(50) NOT NULL,
  `zonalofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `zoneid` varchar(50) NOT NULL,
  PRIMARY KEY (`zonalofficerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO zonalofficertable VALUES("z2sdf","DFG","kebede","asefa","male","0909563002","asdfgh@gmail.com","","arsie");


DROP TABLE IF EXISTS zonetable;

CREATE TABLE `zonetable` (
  `zoneid` varchar(50) NOT NULL,
  `zonename` varchar(50) NOT NULL,
  `regionid` varchar(50) NOT NULL,
  PRIMARY KEY (`zoneid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO zonetable VALUES("z2df","sdfgh","region2");
INSERT INTO zonetable VALUES("z3","arsie","r3");
INSERT INTO zonetable VALUES("zone1","mekele","region1");
INSERT INTO zonetable VALUES("zone2","harerie","region2");


