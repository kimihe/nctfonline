-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: leodb
-- ------------------------------------------------------
-- Server version       5.1.73

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jl_teamstatus`
--

DROP TABLE IF EXISTS `jl_teamstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jl_teamstatus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `teamid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1，通过\n0，待审核\n-1,拒绝',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jl_user`
--

DROP TABLE IF EXISTS `jl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jl_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `teamid` int(11) DEFAULT NULL,
  `professional` varchar(100) NOT NULL,
  `collage` varchar(32) NOT NULL,
  `telephone` char(11) DEFAULT NULL,
  `dynamicSalt` varchar(128) NOT NULL,
  `checkimg` varchar(50) DEFAULT NULL,
  `token` varchar(32) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `point` int(11) DEFAULT '0',
  `ques1` int(10) DEFAULT '0',
  `ques2` int(10) DEFAULT '0',
  `ques3` int(10) DEFAULT '0',
  `ques4` int(10) DEFAULT '0',
  `ques5` int(10) DEFAULT '0',
  `ques6` int(10) DEFAULT '0',
  `ques7` int(10) DEFAULT '0',
  `ques8` int(10) DEFAULT '0',
  `ques9` int(10) DEFAULT '0',
  `ques10` int(10) DEFAULT '0',
  `ques11` int(10) DEFAULT '0',
  `ques12` int(10) DEFAULT '0',
  `ques13` int(10) DEFAULT '0',
  `ques14` int(10) DEFAULT '0',
  `ques15` int(10) DEFAULT '0',
  `ques16` int(10) DEFAULT '0',
  `ques17` int(10) DEFAULT '0',
  `ques18` int(10) DEFAULT '0',
  `ques19` int(10) DEFAULT '0',
  `ques20` int(10) DEFAULT '0',
  `ques21` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `nctf_accounts`
--

DROP TABLE IF EXISTS `nctf_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nctf_accounts` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `tel` int(12) unsigned DEFAULT NULL,
  `mail` varchar(30) NOT NULL,
  `avatar` varchar(200) DEFAULT '',
  `xuehao` varchar(10) DEFAULT NULL,
  `comment` varchar(50) DEFAULT NULL,
  `score` int(11) DEFAULT '0',
  `time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `locked` varchar(1) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `nctf_questions`
--

DROP TABLE IF EXISTS `nctf_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nctf_questions` (
  `question_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(10) unsigned zerofill NOT NULL,
  `question` varchar(255) NOT NULL COMMENT '题目标题',
  `mark` int(10) unsigned zerofill NOT NULL,
  `answer` varchar(64) NOT NULL,
  `comment` varchar(255) DEFAULT NULL COMMENT '放题目url',
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `nctf_rank`
--

DROP TABLE IF EXISTS `nctf_rank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nctf_rank` (
  `submit_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `mark` int(10) DEFAULT NULL,
  PRIMARY KEY (`submit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `nctf_submitlog`
--

DROP TABLE IF EXISTS `nctf_submitlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nctf_submitlog` (
  `submit_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `success` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`submit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `nctf_talk`
--

DROP TABLE IF EXISTS `nctf_talk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nctf_talk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-30 10:10:30
