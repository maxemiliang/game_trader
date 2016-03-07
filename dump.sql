-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `games`;
CREATE DATABASE `games` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `games`;

DROP TABLE IF EXISTS `trades`;
CREATE TABLE `trades` (
  `tID` int(11) NOT NULL AUTO_INCREMENT,
  `have` varchar(100) NOT NULL,
  `wants` varchar(300) NOT NULL,
  `text` mediumtext NOT NULL,
  `img` varchar(40) NOT NULL DEFAULT 'default.jpg',
  `userID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`tID`),
  KEY `userID` (`userID`),
  CONSTRAINT `trades_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`uID`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privileges` smallint(6) NOT NULL DEFAULT '1',
  `steam` varchar(600) NOT NULL,
  PRIMARY KEY (`uID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2016-03-07 13:53:16