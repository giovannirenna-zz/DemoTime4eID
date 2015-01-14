-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.73


--
-- Create schema time4eid
--

CREATE DATABASE IF NOT EXISTS time4eid;
USE time4eid;

--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email_gmail` varchar(255) NOT NULL,
  `uniqueTokenId` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_1` (`uniqueTokenId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;


