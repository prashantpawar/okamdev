/*
MySQL Data Transfer
Source Host: 68.68.97.113
Source Database: okamdev
Target Host: 68.68.97.113
Target Database: okamdev
Date: 11/28/2009 5:14:05 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for ok_answers
-- ----------------------------
DROP TABLE IF EXISTS `ok_answers`;
CREATE TABLE `ok_answers` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `answer_text` text,
  `question_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ok_ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `ok_ci_sessions`;
CREATE TABLE `ok_ci_sessions` (
  `session_id` varchar(40) NOT NULL default '0',
  `ip_address` varchar(16) NOT NULL default '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text NOT NULL,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for ok_groups
-- ----------------------------
DROP TABLE IF EXISTS `ok_groups`;
CREATE TABLE `ok_groups` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL default '',
  `description` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ok_personal_profiles
-- ----------------------------
DROP TABLE IF EXISTS `ok_personal_profiles`;
CREATE TABLE `ok_personal_profiles` (
  `id` int(11) unsigned NOT NULL auto_increment,
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for ok_users
-- ----------------------------
DROP TABLE IF EXISTS `ok_users`;
CREATE TABLE `ok_users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL default '100',
  `token` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
