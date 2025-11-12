/*
SQLyog Ultimate v8.61 
MySQL - 5.5.5-10.1.26-MariaDB : Database - proyectophp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`proyectophp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `proyectophp`;

/*Table structure for table `usercategory` */

DROP TABLE IF EXISTS `usercategory`;

CREATE TABLE `usercategory` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `Description` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Description` (`Description`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `usercategory` */

INSERT  INTO `usercategory`(`Id`,`Description`) VALUES (1,'ADMIN'),(2,'GENERAL');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `UserName` VARCHAR(60) NOT NULL,
  `NameFull` VARCHAR(120) NOT NULL,
  `Password` VARCHAR(60) NOT NULL,
  `Email` VARCHAR(120) NOT NULL,
  `Phone` VARCHAR(20) NOT NULL,
  `Category_Id` INT(11) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `UserName` (`UserName`),
  KEY `Category_Id` (`Category_Id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Category_Id`) REFERENCES `usercategory` (`Id`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

INSERT  INTO `users`(`Id`,`UserName`,`NameFull`,`Password`,`Email`,`Phone`,`Category_Id`) VALUES (1,'ADMIN','ADMINISTRADOR','123456','','',1),(2,'USER','USUARIO','123456','','',2);

/* Procedure structure for procedure `SP_Deleteuser` */

/*!50003 DROP PROCEDURE IF EXISTS  `SP_Deleteuser` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Deleteuser`(
	IN _Id INTeger
)
BEGIN
	Delete from users where Id=_Id;
END */$$
DELIMITER ;

/* Procedure structure for procedure `SP_User` */

/*!50003 DROP PROCEDURE IF EXISTS  `SP_User` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_User`(
	in _Id int,
	in _UserName varchar(60),
	in _NameFull varchar(120),
	IN _Password varchar(60),
	in _Email varchar(120),
	in _Phone varchar(20),
	in _Category_Id int
)
begin
	declare _Exists integer;
	select count(Id) from Users where Id = _Id into _Exists;
	
	if _Exists > 0 then
		update Users set UserName = _UserName, NameFull = _NameFull, `Password` = _Password, Email = _Email, Phone = _Phone, Category_Id = _Category_Id where Id = _Id;
		
	else
		insert into Users (Id, UserName, NameFull, `Password`, Email, Phone, Category_Id) values (_Id, _UserName, _NameFull, _Password, _Email, _Phone, _Category_Id);	 
	end if;
end */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
