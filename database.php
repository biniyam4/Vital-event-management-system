<?php
$domain="localhost";
$dbuser="root";
$dbpass="";
$dbname="veradb1";
$x=0;
mysql_connect($domain,$dbuser,$dbpass) or die(mysql_error());
if(mysql_select_db($dbname))
$x=1;
else
$x=2;
if($x==2)
{
	
mysql_query("create database veradb1") or die(mysql_error());
		echo "<br>Your Database is Successfully created";
}else if($x==1)

{ 
mysql_query("create table user(uid varchar(50) primary key,ufname varchar(50),umname varchar(50),ulname varchar(50),sex VARCHAR(20),mobile varchar(50) UNIQUE,email varchar(50) UNIQUE,photo varchar(50),role varchar(50),nationality varchar(50),region varchar(50),zone varchar(50),woreda varchar(50),city  varchar(50),kebele varchar(50))") or die(mysql_error());
echo "<br>User table created";


//create birth table
mysql_query("create table birthtable(birthid int primary key AUTO_INCREMENT,fname varchar(50),mname varchar(50),lname varchar(50),motherfname varchar(50),mothermname varchar(50),sex varchar(10),nationality varchar(50),birthregion varchar(50),birthzone varchar(50),birthcity varchar(50),birthworeda varchar(50),birthkebele varchar(50),uid varchar(50),FOREIGN KEY(uid) REFERENCES user(uid),statename varchar(50),countryname varchar(50),socialsecurityno varchar(50), statusformrg varchar(50),birthstatus varchar(10))") or die(mysql_error());
echo "<br>birth table created";
//create death table
mysql_query("create table deathtable(deathid int primary key,fname varchar(50),lname varchar(50),sex varchar(10),nationality varchar(50),birthdate date,birthregion varchar(50),birthzone varchar(50),birthcity varchar(50),birthworeda varchar(50),birthkebele varchar(50),dateofdeath date,workposition varchar(50),deathregion varchar(50),deathzone varchar(50),deathworeda varchar(50),deathcity varchar(50),deathkebele varchar(10),deathreason varchar(100),FOREIGN key(deathid) REFERENCES birthtable(birthid),uid varchar(50),FOREIGN KEY(uid) REFERENCES user(uid))") or die(mysql_error());
echo "<br>death table created";
//create marriage table
mysql_query("create table marriagetable(marriageid int primary key AUTO_INCREMENT,birthid int,hasbandfname varchar(50),hasbandlname varchar(50),hasbandage int,hphoto varchar(50),hasbandbrthid int,wifefname varchar(50),wifelname VARCHAR(50),wifeage int,wphoto varchar(50),wifebirthid int,region varchar(50),zone varchar(50),woreda varchar(50),city varchar(50),kebele varchar(50),marragedate date,marragecondition varchar(100),FOREIGN key(birthid) REFERENCES birthtable(birthid),marriagestatus varchar(50),uid varchar(50),FOREIGN KEY(uid) REFERENCES user(uid))") or die(mysql_error());
echo "<br>marrage table created";
//exam divorce table

mysql_query("create table divorce(divorceid int primary key,FOREIGN key(divorceid) REFERENCES marriagetable(marriageid),hasbandfname varchar(50),hasbandlname varchar(50),wifefname varchar(50),wifelname VARCHAR(50),divorcedate date,divorcereason varchar(100),divorceregion varchar(50),divorcezone varchar(50),divorceworeda varchar(50),divorcecity varchar(50),divorcekebele varchar(50),numberofchild int,birthid int,FOREIGN key(birthid) REFERENCES birthtable(birthid),wifebirthid int,uid varchar(50),FOREIGN KEY(uid) REFERENCES user(uid))") or die(mysql_error());
echo "<br>divorce table created";

mysql_query("create table feedbacktable(feedbackid int primary key AUTO_INCREMENT,username varchar(50),email varchar(50),comment varchar(100),dates date,status varchar(255))") or die(mysql_error());
echo "<br>feedback table created";

mysql_query("create table regiontable(regionid varchar(50) primary key,regionname varchar(50) UNIQUE,uid varchar(50),FOREIGN KEY(uid) REFERENCES user(uid))") or die(mysql_error());
echo "<br>region table created";
mysql_query("create table zonetable(zoneid varchar(50) primary key,zonename varchar(50) UNIQUE,regionid varchar(50),FOREIGN KEY(regionid) REFERENCES regiontable(regionid),uid varchar(50),FOREIGN KEY(uid) REFERENCES user(uid))") or die(mysql_error());
echo "<br>region table created";
mysql_query("create table woredatable(woredaid varchar(50) primary key,woredaname varchar(50) UNIQUE,zoneid varchar(50),FOREIGN KEY(zoneid) REFERENCES zonetable(zoneid),regionid varchar(50),FOREIGN KEY(regionid) REFERENCES regiontable(regionid),uid varchar(50),FOREIGN KEY(uid) REFERENCES user(uid))") or die(mysql_error());
echo "<br>woredatable  created";
mysql_query("create table citytable(cityid varchar(50) primary key,cityname varchar(50) UNIQUE,woredaid varchar(50),FOREIGN KEY(woredaid) REFERENCES woredatable(woredaid),regionid varchar(50),FOREIGN KEY(regionid) REFERENCES regiontable(regionid),uid varchar(50),FOREIGN KEY(uid) REFERENCES user(uid))") or die(mysql_error());
echo "<br>citytable  created";
mysql_query("create table kebeletable(kebeleid varchar(50) primary key,kebelename varchar(50) ,woredaid varchar(50),FOREIGN KEY(woredaid) REFERENCES woredatable(woredaid),regionid varchar(50),FOREIGN KEY(regionid) REFERENCES regiontable(regionid),uid varchar(50),FOREIGN KEY(uid) REFERENCES user(uid))") or die(mysql_error());
echo "<br>kebeletable table created";






//create account table
mysql_query("create table account(uid varchar(50) primary key,username varchar(100) UNIQUE,password varchar(1000),status VARCHAR(50),FOREIGN key(uid) REFERENCES user(uid))") or die(mysql_error());
echo "<br>account table created";

}
?>