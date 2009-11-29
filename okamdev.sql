/*
MySQL Data Transfer
Source Host: 68.68.97.113
Source Database: okamdev
Target Host: 68.68.97.113
Target Database: okamdev
Date: 11/28/2009 11:28:44 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for ok_answers
-- ----------------------------
DROP TABLE IF EXISTS `ok_answers`;
CREATE TABLE `ok_answers` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `answer_text` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ok_ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `ok_ci_sessions`;
CREATE TABLE `ok_ci_sessions` (
  `session_id` varchar(40) collate utf8_bin NOT NULL default '0',
  `ip_address` varchar(16) collate utf8_bin NOT NULL default '0',
  `user_agent` varchar(150) collate utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for ok_dnas
-- ----------------------------
DROP TABLE IF EXISTS `ok_dnas`;
CREATE TABLE `ok_dnas` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `userid` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `relevance_id` int(11) default NULL,
  `answer1_id` int(11) default NULL,
  `answer2_id` int(11) default NULL,
  `answer3_id` int(11) default NULL,
  `answer4_id` int(11) default NULL,
  `answer5_id` int(11) default NULL,
  `answer6_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ok_login_attempts
-- ----------------------------
DROP TABLE IF EXISTS `ok_login_attempts`;
CREATE TABLE `ok_login_attempts` (
  `id` int(11) NOT NULL auto_increment,
  `ip_address` varchar(40) collate utf8_bin NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for ok_permissions
-- ----------------------------
DROP TABLE IF EXISTS `ok_permissions`;
CREATE TABLE `ok_permissions` (
  `id` int(11) NOT NULL auto_increment,
  `role_id` int(11) NOT NULL,
  `data` text collate utf8_bin,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for ok_personal_profiles
-- ----------------------------
DROP TABLE IF EXISTS `ok_personal_profiles`;
CREATE TABLE `ok_personal_profiles` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `location` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ok_questions
-- ----------------------------
DROP TABLE IF EXISTS `ok_questions`;
CREATE TABLE `ok_questions` (
  `id` int(11) unsigned zerofill NOT NULL auto_increment,
  `question_text` text,
  `addedbyuser_id` int(11) default NULL,
  `answer1_id` int(11) default NULL,
  `answer2_id` int(11) default NULL,
  `answer3_id` int(11) default NULL,
  `answer4_id` int(11) default NULL,
  `answer5_id` int(11) default NULL,
  `answer6_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ok_relevancies
-- ----------------------------
DROP TABLE IF EXISTS `ok_relevancies`;
CREATE TABLE `ok_relevancies` (
  `id` int(11) NOT NULL default '0',
  `relevancy` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ok_roles
-- ----------------------------
DROP TABLE IF EXISTS `ok_roles`;
CREATE TABLE `ok_roles` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `name` varchar(30) collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for ok_user_autologin
-- ----------------------------
DROP TABLE IF EXISTS `ok_user_autologin`;
CREATE TABLE `ok_user_autologin` (
  `key_id` char(32) collate utf8_bin NOT NULL,
  `user_id` mediumint(8) NOT NULL default '0',
  `user_agent` varchar(150) collate utf8_bin NOT NULL,
  `last_ip` varchar(40) collate utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for ok_user_profile
-- ----------------------------
DROP TABLE IF EXISTS `ok_user_profile`;
CREATE TABLE `ok_user_profile` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) collate utf8_bin default NULL,
  `website` varchar(255) collate utf8_bin default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for ok_user_temp
-- ----------------------------
DROP TABLE IF EXISTS `ok_user_temp`;
CREATE TABLE `ok_user_temp` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) collate utf8_bin NOT NULL,
  `password` varchar(34) collate utf8_bin NOT NULL,
  `email` varchar(100) collate utf8_bin NOT NULL,
  `activation_key` varchar(50) collate utf8_bin NOT NULL,
  `last_ip` varchar(40) collate utf8_bin NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for ok_users
-- ----------------------------
DROP TABLE IF EXISTS `ok_users`;
CREATE TABLE `ok_users` (
  `id` int(11) NOT NULL auto_increment,
  `role_id` int(11) NOT NULL default '1',
  `username` varchar(25) collate utf8_bin NOT NULL,
  `password` varchar(34) collate utf8_bin NOT NULL,
  `email` varchar(100) collate utf8_bin NOT NULL,
  `banned` tinyint(1) NOT NULL default '0',
  `ban_reason` varchar(255) collate utf8_bin default NULL,
  `newpass` varchar(34) collate utf8_bin default NULL,
  `newpass_key` varchar(32) collate utf8_bin default NULL,
  `newpass_time` datetime default NULL,
  `last_ip` varchar(40) collate utf8_bin NOT NULL,
  `last_login` datetime NOT NULL default '0000-00-00 00:00:00',
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `ok_answers` VALUES ('1', 'Hinduism');
INSERT INTO `ok_answers` VALUES ('2', 'Buddhism');
INSERT INTO `ok_answers` VALUES ('3', 'Christianity');
INSERT INTO `ok_answers` VALUES ('4', 'Islam');
INSERT INTO `ok_ci_sessions` VALUES ('c0649e7799dd420c6049e56b286421c1', '0.0.0.0', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en', '1259458043', '');
INSERT INTO `ok_questions` VALUES ('00000000001', 'What religion do you follow?', '3', '1', '2', '3', '4', '0', '0');
INSERT INTO `ok_roles` VALUES ('1', '0', 'User');
INSERT INTO `ok_roles` VALUES ('2', '0', 'Admin');
INSERT INTO `ok_user_profile` VALUES ('1', '1', null, null);
INSERT INTO `ok_user_profile` VALUES ('2', '3', null, null);
INSERT INTO `ok_user_temp` VALUES ('1', 'chimp', '$1$BM4.0b/.$FYmYIr8CP.e9aZC/jNM861', 'prashantpawar@gmail.com', 'afd39d3a7181028c9068508e12ea8a0e', '127.0.0.1', '2009-11-28 22:11:26');
INSERT INTO `ok_users` VALUES ('1', '2', 'admin', '$1$i75.Do4.$ROPRZjZzDx/JjqeVtaJLW.', 'admin@localhost.com', '0', null, null, null, null, '127.0.0.1', '2008-11-30 04:56:38', '2008-11-30 04:56:32', '2008-11-30 04:56:38');
INSERT INTO `ok_users` VALUES ('2', '1', 'user', '$1$bO..IR4.$CxjJBjKJ5QW2/BaYKDS7f.', 'user@localhost.com', '0', null, null, null, null, '127.0.0.1', '2008-12-01 14:04:14', '2008-12-01 14:01:53', '2008-12-01 14:04:14');
INSERT INTO `ok_users` VALUES ('3', '1', 'monkey', '$1$h75.Wu/.$AP8ju8qR3k1fpMNURmQRz.', 'prashantsinghpawar@gmail.com', '0', null, null, null, null, '127.0.0.1', '2009-11-28 22:19:27', '2009-11-28 22:12:28', '2009-11-28 22:19:28');
