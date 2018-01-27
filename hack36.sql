
CREATE DATABASE IF NOT EXISTS`hack36`;
USE hack36;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  	`id` bigint(20) NOT NULL AUTO_INCREMENT,
	  `NAME` varchar(100),
   	`EMAIL` varchar(120),
   	`CONTACT` varchar(100),
   	`STREET` varchar(125),
   	`CITY` varchar(1000),
   	`PROFESSION` varchar(125),
  PRIMARY KEY (id)
) ;
