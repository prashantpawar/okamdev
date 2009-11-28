/*
MySQL Data Transfer
Source Host: 68.68.97.113
Source Database: okamdev
Target Host: 68.68.97.113
Target Database: okamdev
Date: 11/28/2009 5:48:43 PM
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
-- Records 
-- ----------------------------
