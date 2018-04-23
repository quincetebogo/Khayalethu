/*
SQLyog Community v11.33 (32 bit)
MySQL - 5.5.27 : Database - khayalethu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`khayalethu` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `khayalethu`;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `adm_Name` varchar(255) DEFAULT NULL,
  `adm_username` varchar(255) DEFAULT NULL,
  `adm_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_admin` */

LOCK TABLES `tbl_admin` WRITE;

insert  into `tbl_admin`(`adm_Name`,`adm_username`,`adm_password`) values ('IDAH','idah@gmail.com','123456789');

UNLOCK TABLES;

/*Table structure for table `tbl_announcement` */

DROP TABLE IF EXISTS `tbl_announcement`;

CREATE TABLE `tbl_announcement` (
  `ann_announceID` int(11) NOT NULL AUTO_INCREMENT,
  `ann_message` varchar(500) NOT NULL,
  `ann_announceDate` date NOT NULL,
  PRIMARY KEY (`ann_announceID`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_announcement` */

LOCK TABLES `tbl_announcement` WRITE;

insert  into `tbl_announcement`(`ann_announceID`,`ann_message`,`ann_announceDate`) values (101,'The deposit for all type rooms is R1500,then can be refundend when moving out and only the room is in condition.\r\nThank you!','2016-08-01'),(103,'VISITING HOURS START FROM 10:00 AM TILL 08:00 PM','2016-09-27'),(105,'THE WI-FI IS NOW AVAILABLE. USE YOUR USERNAME TO AN ABLE. ONLY ONE USERNAME CAN BE USE PER TIME!','2016-10-11'),(106,'The will be construction at the hallway of floor number 3 on 19-08-2016... PLEASE MOVE IN CAUTION!\r\nTHANK YOU.','2016-08-12'),(107,'THE WI-FI IS NOW AVAILABLE. USE YOUR USERNAME TO AN ABLE. ONLY ONE USERNAME CAN BE USE PER TIME!','2016-09-29'),(108,'The will be construction at the hallway of floor number 1 on 30-07-2016... PLEASE MOVE IN CAUTION!\r\nTHANK YOU.','2016-07-25'),(109,'ATTENTION!\r\nElavators will be not working on 04-08-2016 due to maintanaince.Please use staircase. Sorry for the inconvienence that may be cause.','2016-09-01'),(110,'New Comers, You are invited for the orientation of the residence.','2016-07-28'),(111,'TUT vs UJ (football) at 18:00 on Thurday 16 June 2016','2016-09-13'),(112,'ATTENTION!!!!  Ntokozo\'s memorial service at 15:00 in the common room','2016-08-01'),(113,'TUT vs Wits (Netball) at 13:00 on Friday 19 August 2016','2016-08-14');

UNLOCK TABLES;

/*Table structure for table `tbl_changeroom` */

DROP TABLE IF EXISTS `tbl_changeroom`;

CREATE TABLE `tbl_changeroom` (
  `ch_changeID` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `ch_status` varchar(20) DEFAULT NULL,
  `res_refNumber` int(13) DEFAULT NULL,
  `ch_motivation` varchar(200) DEFAULT NULL,
  `ch_roomType` varchar(20) DEFAULT NULL,
  `ch_newRoom` varchar(20) DEFAULT NULL,
  `rm_roomNumber` varchar(5) DEFAULT NULL,
  `ch_approveDate` date DEFAULT NULL,
  `ch_applicationDate` date DEFAULT NULL,
  PRIMARY KEY (`ch_changeID`),
  KEY `ref` (`res_refNumber`),
  KEY `room` (`rm_roomNumber`),
  KEY `rrf` (`ch_roomType`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_changeroom` */

LOCK TABLES `tbl_changeroom` WRITE;

insert  into `tbl_changeroom`(`ch_changeID`,`ch_status`,`res_refNumber`,`ch_motivation`,`ch_roomType`,`ch_newRoom`,`rm_roomNumber`,`ch_approveDate`,`ch_applicationDate`) values (00000001,'Approved',216108,'The room is too small','Single','103a','112c','2016-07-25',NULL),(00000002,'Approved',216104,'the roof is leaking','Double','102b','101a','2016-08-03',NULL),(00000004,'Approved',216105,'i need a room where i  can share','Triple','103c','111b','2016-08-03',NULL),(00000006,'Not Approved',216104,'i need a single room','Single',NULL,'115b','2016-08-15',NULL),(00000007,'Not Approved',216101,'The roof is leaking and ceiling is falling off','Double',NULL,'111b','2016-08-10',NULL),(00000008,'Approved',216111,'i need a triple room,i no longer afford a single','Triple','106c','107a','2018-03-09',NULL),(00000048,NULL,216103,'Hi','Single',NULL,'114b',NULL,'2018-03-09'),(00000049,'Approved',216111,'i need a triple room,i no longer afford a single','Triple','106c','107a','2018-03-09','2018-01-09'),(00000050,NULL,216104,'Hi','Double',NULL,'114b',NULL,'2018-03-30'),(00000051,NULL,216105,'Hi','Single',NULL,'114b',NULL,'2018-03-09');

UNLOCK TABLES;

/*Table structure for table `tbl_complaint` */

DROP TABLE IF EXISTS `tbl_complaint`;

CREATE TABLE `tbl_complaint` (
  `comp_complaintID` int(11) NOT NULL AUTO_INCREMENT,
  `comp_description` varchar(30) NOT NULL,
  `comp_details` varchar(300) NOT NULL,
  `comp_floorNumber` int(11) NOT NULL,
  `comp_status` varchar(15) DEFAULT 'NULL',
  `res_refnumber` int(11) DEFAULT NULL,
  `comp_date` date DEFAULT NULL,
  PRIMARY KEY (`comp_complaintID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_complaint` */

LOCK TABLES `tbl_complaint` WRITE;

insert  into `tbl_complaint`(`comp_complaintID`,`comp_description`,`comp_details`,`comp_floorNumber`,`comp_status`,`res_refnumber`,`comp_date`) values (2,'Repair','the handle door looks itself everytime its closes',2,'NULL',216104,'2016-11-15'),(3,'Maintenance','the toilet is leaking water and floods the floor',1,'NULL',216104,'2016-11-15'),(8,'Noise','my neighbours are always making noise i can\'t even concentrate when am studying. ',2,'NULL',216101,'2016-11-15'),(9,'General','The kitchen is dirty the cleaners hardly clean it.',1,'NULL',216101,'2016-11-16'),(10,'General','my next room ,there always noise at night',1,'NULL',216111,'2016-11-15'),(11,'Repairs','The floors are leaking',1,'Fixed',216103,'2018-03-04'),(12,'Noise','My room mate is constantly making noise ',1,'Fixed',216103,'2018-03-06'),(13,'Repair','the handle door looks itself everytime its closes',2,NULL,216104,'2016-11-15'),(14,'Noise','My room mate is constantly making noise ',1,NULL,216103,'2018-03-06'),(15,'Noise','My room mate is constantly making noise ',1,NULL,216103,'2018-02-12'),(16,'Noise','My room mate is constantly making noise ',1,NULL,216103,'2018-03-04'),(17,'Noise','Some is making noise during midnight hours while some of us are trying to sleep',1,'NULL',216103,'2018-03-07');

UNLOCK TABLES;

/*Table structure for table `tbl_payment` */

DROP TABLE IF EXISTS `tbl_payment`;

CREATE TABLE `tbl_payment` (
  `pm_depNo` int(11) NOT NULL AUTO_INCREMENT,
  `pm_date` date NOT NULL,
  `pm_amount` decimal(10,0) NOT NULL,
  `res_refnumber` int(11) NOT NULL,
  `pm_paymentType` varchar(15) NOT NULL,
  `pm_paymentMethod` varchar(15) NOT NULL,
  PRIMARY KEY (`pm_depNo`),
  KEY `REF` (`res_refnumber`),
  CONSTRAINT `tbl_payment_ibfk_1` FOREIGN KEY (`res_refnumber`) REFERENCES `tbl_resident` (`res_refNumber`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11156 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_payment` */

LOCK TABLES `tbl_payment` WRITE;

insert  into `tbl_payment`(`pm_depNo`,`pm_date`,`pm_amount`,`res_refnumber`,`pm_paymentType`,`pm_paymentMethod`) values (11101,'2016-07-28','3100',216102,'Rent','Credit'),(11103,'2016-06-30','1600',216102,'Rent & Deposit','Cash'),(11105,'2016-06-30','1600',216106,'Rent','Cash'),(11107,'2016-07-02','1300',216101,'Rent','Credit'),(11114,'2016-07-02','1300',216110,'Rent','EFT'),(11118,'2016-08-01','1300',216105,'Rent','Credit'),(11122,'2016-08-01','1300',216104,'Rent','Credit'),(11125,'2016-06-10','2600',216101,'Rent & Deposit','Cash'),(11127,'2016-08-02','1600',216109,'Rent','Cash'),(11133,'2016-07-27','1300',216108,'Rent','Cash'),(11135,'2016-08-02','1600',216111,'Rent','Credit'),(11136,'2016-02-27','2400',216104,'Rent & Deposit','Credit'),(11137,'2016-04-29','1300',216104,'Rent','Cash'),(11138,'2016-04-29','1300',216104,'Rent','Cash'),(11139,'2016-05-30','1300',216104,'Rent','Credit'),(11140,'2016-06-27','1300',216104,'Rent','Cash'),(11141,'2016-07-27','1300',216104,'Rent','Cash'),(11142,'2016-08-02','1300',216104,'Rent','Cash'),(11145,'2016-07-28','3100',216102,'Rent','Credit'),(11150,'2018-03-07','2300',216104,'Rent',''),(11155,'2018-02-04','2300',216102,'Rent','Cash');

UNLOCK TABLES;

/*Table structure for table `tbl_rescomplaint` */

DROP TABLE IF EXISTS `tbl_rescomplaint`;

CREATE TABLE `tbl_rescomplaint` (
  `comp_complaintID` int(11) NOT NULL AUTO_INCREMENT,
  `res_refnumber` int(11) NOT NULL,
  `comp_message` varchar(300) NOT NULL,
  `comp_date` date NOT NULL,
  PRIMARY KEY (`comp_complaintID`),
  KEY `REF` (`res_refnumber`),
  CONSTRAINT `tbl_rescomplaint_ibfk_3` FOREIGN KEY (`res_refnumber`) REFERENCES `tbl_resident` (`res_refNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_rescomplaint` */

LOCK TABLES `tbl_rescomplaint` WRITE;

insert  into `tbl_rescomplaint`(`comp_complaintID`,`res_refnumber`,`comp_message`,`comp_date`) values (1,216102,'the door handle locks itself','2016-07-27'),(2,216101,'the handle door looks itself everytime its closes','2016-08-10'),(3,216104,'the toilet is leaking water and floods the floor','2016-07-29'),(4,216101,'my next room ,there always noise at night','2016-08-11'),(5,216105,'The kitchen is dirty the cleaners harldy clean','2016-07-26'),(6,216102,'my neighbours are always making noise i can\'t even costruct when am studying. ','2016-06-29');

UNLOCK TABLES;

/*Table structure for table `tbl_resident` */

DROP TABLE IF EXISTS `tbl_resident`;

CREATE TABLE `tbl_resident` (
  `res_refNumber` int(11) NOT NULL AUTO_INCREMENT,
  `st_IDnum` varchar(13) NOT NULL,
  PRIMARY KEY (`res_refNumber`),
  KEY `ref` (`st_IDnum`),
  CONSTRAINT `FK_tbl_resident` FOREIGN KEY (`st_IDnum`) REFERENCES `tbl_student` (`st_IDnum`)
) ENGINE=InnoDB AUTO_INCREMENT=216117 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_resident` */

LOCK TABLES `tbl_resident` WRITE;

insert  into `tbl_resident`(`res_refNumber`,`st_IDnum`) values (216114,'1234567891017'),(216116,'1234567899000'),(216110,'910715115'),(216115,'911212045'),(216104,'920312159'),(216105,'920617450'),(216112,'921011258'),(216113,'921011258'),(216106,'930418154'),(216101,'930718158'),(216102,'930918548'),(216111,'950407555'),(216109,'950518046'),(216108,'951113045');

UNLOCK TABLES;

/*Table structure for table `tbl_resroom` */

DROP TABLE IF EXISTS `tbl_resroom`;

CREATE TABLE `tbl_resroom` (
  `res_occupationID` int(10) NOT NULL AUTO_INCREMENT,
  `rm_roomNumber` varchar(11) NOT NULL,
  `res_refnumber` int(11) NOT NULL,
  `resrm_occupationDate` date NOT NULL,
  PRIMARY KEY (`res_occupationID`),
  KEY `rm_roomNumber` (`rm_roomNumber`),
  KEY `REF` (`res_refnumber`),
  CONSTRAINT `tbl_resroom_ibfk_2` FOREIGN KEY (`res_refnumber`) REFERENCES `tbl_resident` (`res_refNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_resroom` */

LOCK TABLES `tbl_resroom` WRITE;

insert  into `tbl_resroom`(`res_occupationID`,`rm_roomNumber`,`res_refnumber`,`resrm_occupationDate`) values (101,'101a',216102,'2016-08-01'),(102,'115b',216104,'2016-03-01'),(103,'108b',216108,'2016-07-18'),(104,'111b',216101,'2016-06-17'),(105,'111b',216105,'2016-01-25'),(106,'113a',216109,'2016-01-15'),(107,'110a',216106,'2016-01-26'),(108,'102b',216110,'2016-07-15'),(110,'106c',216111,'2016-02-01'),(111,'116a',216112,'2016-08-18'),(112,'116a',216113,'2016-08-18'),(113,'118c',216114,'2018-03-08'),(114,'118c',216115,'2018-03-08'),(115,'116b',216116,'2018-03-09');

UNLOCK TABLES;

/*Table structure for table `tbl_room` */

DROP TABLE IF EXISTS `tbl_room`;

CREATE TABLE `tbl_room` (
  `rm_roomNumber` varchar(5) NOT NULL,
  `rnt_roomType` varchar(10) NOT NULL,
  `rm_status` varchar(20) NOT NULL,
  `rm_floorNumber` int(11) NOT NULL,
  PRIMARY KEY (`rm_roomNumber`),
  KEY `REF` (`rnt_roomType`),
  CONSTRAINT `tbl_room_ibfk_1` FOREIGN KEY (`rnt_roomType`) REFERENCES `tbl_roomtype` (`rnt_roomType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_room` */

LOCK TABLES `tbl_room` WRITE;

insert  into `tbl_room`(`rm_roomNumber`,`rnt_roomType`,`rm_status`,`rm_floorNumber`) values ('101a','Single','Not Available',1),('102b','Double','Not Available',1),('103c','Triple','Not Available',1),('104a','Double','Not Available',1),('105b','Double','Not Available',1),('106c','Triple','Not Available',1),('107a','Single','Available',1),('108b','Double','Not Available',1),('109c','Triple','Available',1),('110a','Single','Available',2),('111b','Double','Not Available',2),('112c','Triple','Available',2),('113a','Single','Not Available',2),('114b','Double','Available',2),('115b','Double','Not Available',2),('115c1','Triple','Available',2),('115c2','Triple','Available',2),('115c3','Triple','Available',2),('116a','Single','Not Available',2),('116b1','Double','Available',2),('116b2','Double','Available',2),('117a','Single','Available',2),('117b1','Double','Available',2),('117b2','Double','Available',2),('118a','Single','Available',2),('118b1','Double','Available',2),('118b2','Double','Available',2),('118c1','Triple','Available',2),('118c2','Triple','Available',2),('118c3','Triple','Available',2);

UNLOCK TABLES;

/*Table structure for table `tbl_roomtype` */

DROP TABLE IF EXISTS `tbl_roomtype`;

CREATE TABLE `tbl_roomtype` (
  `rnt_roomType` varchar(10) NOT NULL,
  `rnt_amount` int(11) NOT NULL,
  PRIMARY KEY (`rnt_roomType`),
  KEY `IND` (`rnt_roomType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_roomtype` */

LOCK TABLES `tbl_roomtype` WRITE;

insert  into `tbl_roomtype`(`rnt_roomType`,`rnt_amount`) values ('Double',1300),('Single',1600),('Triple',950);

UNLOCK TABLES;

/*Table structure for table `tbl_student` */

DROP TABLE IF EXISTS `tbl_student`;

CREATE TABLE `tbl_student` (
  `st_IDnum` varchar(13) DEFAULT NULL,
  `st_pic` varchar(500) DEFAULT NULL,
  `st_firstName` varchar(30) DEFAULT NULL,
  `st_lastName` varchar(30) DEFAULT NULL,
  `st_Gender` varchar(7) DEFAULT NULL,
  `st_address` varchar(100) DEFAULT NULL,
  `st_contactNo` int(11) DEFAULT NULL,
  `st_dateOfBirth` date DEFAULT NULL,
  `st_nationality` varchar(30) DEFAULT NULL,
  `st_username` varchar(50) DEFAULT NULL,
  `st_applicationDate` date DEFAULT NULL,
  `st_status` varchar(15) DEFAULT NULL,
  `rnt_roomType` varchar(10) DEFAULT NULL,
  `st_password` varchar(255) DEFAULT NULL,
  KEY `st_IDnum` (`st_IDnum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_student` */

LOCK TABLES `tbl_student` WRITE;

insert  into `tbl_student`(`st_IDnum`,`st_pic`,`st_firstName`,`st_lastName`,`st_Gender`,`st_address`,`st_contactNo`,`st_dateOfBirth`,`st_nationality`,`st_username`,`st_applicationDate`,`st_status`,`rnt_roomType`,`st_password`) values ('1234567891017','','Tinyiko','Rhanzu','Male','42 Jump Street',721468705,'2015-01-14','South Africa','RhanzTin','2016-04-19','Approved','Single',''),('890422049','','Sandile','Madlala','Male','3304 lebogang str,Leandra,2439',615546987,'1989-04-22','south african','mad45','2016-01-25','Moved Out','triple','123456789'),('900405054','','Sanele','Mahlangu','Female','293 kriel drive,thubelihle,2271',823569852,'1990-04-05','south african','sanny45@gmail.com','2016-03-14','Moved Out','double','123456789'),('910715115','','Sboniso','Dladla','Male','85 Duncan street,Witbank 1035',725658945,'1991-07-15','south africa','sbobo12@gmail.com','2016-05-16','Accepted','single','123456789'),('911212045','','Babongile','Simelane','Male','28 levi str,standerton,4578',784865297,'1991-12-12','south african','boby32','2016-03-17','Approved','double',''),('920312159','','Lebogang','Mabelane','Female','75 jubantoto str,piet rief 2549',768945896,'1992-03-12','south african','lebby12','2016-01-20','Accepted','double',''),('920617450','','Laura','Mahlangu','Female','3549 jacaranda,nelspruit 1489',734854893,'1992-06-17','south african','laura48','2016-01-15','Accepted','double',''),('921011258','','Blessing','Masango','Male','498 mpungushe str,soweto 1548',605894892,'1992-10-11','south african','bless26','2016-01-18','Approved','single',''),('930418154','','Goodness','Mahlangu','Female','287 daisy str,pretoria 0001',796745044,'1993-04-18','south african','goody96','2016-01-19','Accepted','single',''),('930718158','','Kennet','Mabijwa','Male','498 kingfisher,bethal 1459',745894867,'1993-07-18','south african','kenny156','2016-01-04','Accepted','single',''),('930918548','','Thabo','Mokoena','Male','78 jojo str,Hendrina 4578',761458990,'1993-09-18','south african','tbos76','2016-01-05','Accepted','double',''),('940129458','','Quincy','Dlamin','Male','222 springbok str,Belfast 0123',760480411,'1994-01-29','south african','Quincy4856','2016-01-29','Waiting List','triple',''),('940322034','','Sekhukhune','Mafukwane','Male','76 thubela street,thubela, 1034',794867235,'1994-03-22','south african','mafuk15','2016-01-18','Moved Out','single',''),('950407555','','Lesedi','Masemola','Female','37 jump street burgersfort,1130',795486052,'1995-04-07','south african','lesedi95','2016-01-26','Accepted','single',''),('950518046','','Thabiso','Mabogwana','Female','456 gwenya str,middleburg 1546',731389564,'1995-05-18','south african','thaby78','2016-01-12','Accepted','single',''),('951113045','','Micheal','Sibusi','Male','159 bhejane,witbank 1035',724586895,'1995-11-13','south african','mike789','2016-01-12','Accepted','double',''),('990908090909',NULL,'Kenny','Penny','male','beatrix street',2147483647,NULL,'South african','kenny@yaho','2018-02-10','Rejected','double','123456'),('555555555',NULL,'Quince','Ngomane','Male','beatrix street',123456789,NULL,'asdasd','kenny@gmail.com','2018-02-10','Accepted','Double','1234567890'),('555555555',NULL,'Quince','Ngomane','Male','beatrix street',123456789,NULL,'asdasd','kenny@yam.','2018-02-10','Waiting List','Double','123456789'),('1234567899000',NULL,'Max','Ngoman','Male','Old Hadefields ,45, 0002',2147483647,NULL,'South Africa','max@gmails.com','2018-02-20','Approved','Double','123456789'),('123456789',NULL,'aaaa','aaaaa','Male','hhh,123456, 0002',123456666,NULL,'sou','hjggj@gmail.com','2018-03-10','Waiting List','Single','123456');

UNLOCK TABLES;

/* Procedure structure for procedure `proc_approveRequest` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_approveRequest` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_approveRequest`(IN `st_idno` VARCHAR(13), IN `ch_stat` VARCHAR(20), IN `ch_newRm` varchar(4))
begin 
 declare 
 res_refID,resref,resref2, room varchar(8);
 select count(st_idnum) into res_refID  from tbl_student
 WHERE st_idnum = st_idno;
 if(res_refID  = 1 ) then
 if(ch_stat = "Approved") then 
 select max(res_refnumber)+1 into resref From tbl_resident;
 INSERT INTO tbl_resident(res_refnumber,st_idnum) values (resref,st_idno );
 select max(res_refnumber) into resref2 From tbl_resident;
 INSERT INTO tbl_resroom(rm_roomNumber, res_refNumber, resrm_occupationDate) values(ch_newRm,resref2, curdate());
 update tbl_student set st_status = ch_stat
 where st_idnum = st_idno ;
 update tbl_room set rm_status = "Not Available"
 where rm_roomnumber = ch_newRm;
 end if;
 end if;
 end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_approveRoom` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_approveRoom` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_approveRoom`(IN `res_Refno` VARCHAR(8), IN `ch_stat` VARCHAR(20), IN `ch_newRm` varchar(4))
begin 
 declare 
 res_refID, room varchar(8);
 select count(res_refnumber) into res_refID  from tbl_changeRoom
 WHERE res_refNumber = res_refNO;
 if(res_refID  >= 1 ) then
 if(ch_stat = "Approved") then 
 select distinct rm_roomNumber into room FROM tbl_resroom
 WHERE res_refNumber = res_refNo;
 update tbl_room SET rm_status = "Available"
 WHERE rm_roomNumber = room;
 update tbl_room SET rm_status = "Not Available"
 WHERE rm_roomNumber = ch_newRm;
 update tbl_resroom SET rm_roomNumber = ch_newRm 
 WHERE res_refNumber = res_refNo;
 UPDATE tbl_changeroom SET ch_status = ch_stat , ch_newRoom = ch_newRm, ch_approveDate = curdate()
 WHERE res_refNumber = res_refNo;
 end if;
 end if;
 end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_delStudent` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_delStudent` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_delStudent`(IN `ID_Number` VARCHAR(13))
Begin 
 Declare 
 room , id, refNumber varchar(20);
 SELECT res_refNumber into refNumber FROM tbl_resident
 WHERE st_idNum = id_number;
 SELECT rm_roomNumber into room FROM tbl_resroom
 WHERE res_refnumber = refNumber;
 DELETE FROM tbl_resroom 
 WHERE rm_roomNumber = room;
 Update tbl_room SET rm_status = "Available"
 WHERE rm_roomNumber = room;
 DELETE from tbl_resident 
 WHERE res_refNUmber = refNumber;
 UPDATE tbl_student SET st_status = "Moved Out"
 WHERE st_IDnum = id_number;
 end */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
