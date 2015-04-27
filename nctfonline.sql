/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : xuegedb

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-04-28 00:38:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `nctf_admin` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

 

-- ----------------------------
-- Table structure for nctf_accounts
-- ----------------------------
DROP TABLE IF EXISTS `nctf_accounts`;
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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for nctf_notice
-- ----------------------------
DROP TABLE IF EXISTS `nctf_notice`;
CREATE TABLE `nctf_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(500) DEFAULT NULL,
  `times` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for nctf_questions
-- ----------------------------
DROP TABLE IF EXISTS `nctf_questions`;
CREATE TABLE `nctf_questions` (
  `question_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(10) unsigned zerofill NOT NULL,
  `question` varchar(255) NOT NULL COMMENT '题目标题',
  `mark` int(10) unsigned zerofill NOT NULL,
  `answer` varchar(64) NOT NULL,
  `comment` varchar(255) DEFAULT NULL COMMENT '放题目url',
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for nctf_rank
-- ----------------------------
DROP TABLE IF EXISTS `nctf_rank`;
CREATE TABLE `nctf_rank` (
  `submit_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `mark` int(10) DEFAULT NULL,
  PRIMARY KEY (`submit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for nctf_submitlog
-- ----------------------------
DROP TABLE IF EXISTS `nctf_submitlog`;
CREATE TABLE `nctf_submitlog` (
  `submit_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `success` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`submit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for nctf_talk
-- ----------------------------
DROP TABLE IF EXISTS `nctf_talk`;
CREATE TABLE `nctf_talk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
