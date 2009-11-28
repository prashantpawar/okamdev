/*
MySQL Data Transfer
Source Host: 68.68.97.113
Source Database: okamdev
Target Host: 68.68.97.113
Target Database: okamdev
Date: 11/28/2009 4:54:17 PM
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
  `session_data` text,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ok_country
-- ----------------------------
DROP TABLE IF EXISTS `ok_country`;
CREATE TABLE `ok_country` (
  `id` int(11) NOT NULL auto_increment,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `iso3` char(3) default NULL,
  `numcode` smallint(6) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

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
-- Table structure for ok_user
-- ----------------------------
DROP TABLE IF EXISTS `ok_user`;
CREATE TABLE `ok_user` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(45) NOT NULL,
  `country_id` int(11) default NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `role` varchar(50) NOT NULL default 'user',
  `banned` tinyint(1) NOT NULL default '0',
  `forgotten_password_code` varchar(50) default NULL,
  `last_visit` datetime default NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`),
  KEY `user_FI_1` (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ok_user_profile
-- ----------------------------
DROP TABLE IF EXISTS `ok_user_profile`;
CREATE TABLE `ok_user_profile` (
  `id` int(11) NOT NULL,
  `field_1` varchar(50) default NULL,
  `field_2` varchar(50) default NULL,
  `call_me_nicely` varchar(3) default NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ok_user_temp
-- ----------------------------
DROP TABLE IF EXISTS `ok_user_temp`;
CREATE TABLE `ok_user_temp` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(45) NOT NULL,
  `country_id` int(11) default NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `activation_code` varchar(50) NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  KEY `user_FI_1` (`country_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `ok_ci_sessions` VALUES ('56144ca48a300d94a60e52d116dc958d', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) Ap', '1259392361', 'a:0:{}');
INSERT INTO `ok_ci_sessions` VALUES ('107d07977128e599031fff799f71a9ed', '0.0.0.0', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en', '1259393630', null);
INSERT INTO `ok_ci_sessions` VALUES ('eca047fbe4503d074bb0a37587a0092e', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) Ap', '1259441617', 'a:4:{s:24:\"flash:old:requested_page\";s:0:\"\";s:22:\"flash:old:flashMessage\";s:85:\"You do not have the credentials to access this reserved area, please login and retry.\";s:24:\"flash:new:requested_page\";s:0:\"\";s:17:\"FreakAuth_captcha\";s:5:\"sjilx\";}');
INSERT INTO `ok_ci_sessions` VALUES ('b55102afa4364546256b8e7e03483b82', '67.82.205.40', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) Ap', '1259439591', 'a:0:{}');
INSERT INTO `ok_country` VALUES ('1', 'AF', 'Afghanistan', 'AFG', '4');
INSERT INTO `ok_country` VALUES ('2', 'AL', 'Albania', 'ALB', '8');
INSERT INTO `ok_country` VALUES ('3', 'DZ', 'Algeria', 'DZA', '12');
INSERT INTO `ok_country` VALUES ('4', 'AS', 'American Samoa', 'ASM', '16');
INSERT INTO `ok_country` VALUES ('5', 'AD', 'Andorra', 'AND', '20');
INSERT INTO `ok_country` VALUES ('6', 'AO', 'Angola', 'AGO', '24');
INSERT INTO `ok_country` VALUES ('7', 'AI', 'Anguilla', 'AIA', '660');
INSERT INTO `ok_country` VALUES ('8', 'AQ', 'Antarctica', null, null);
INSERT INTO `ok_country` VALUES ('9', 'AG', 'Antigua and Barbuda', 'ATG', '28');
INSERT INTO `ok_country` VALUES ('10', 'AR', 'Argentina', 'ARG', '32');
INSERT INTO `ok_country` VALUES ('11', 'AM', 'Armenia', 'ARM', '51');
INSERT INTO `ok_country` VALUES ('12', 'AW', 'Aruba', 'ABW', '533');
INSERT INTO `ok_country` VALUES ('13', 'AU', 'Australia', 'AUS', '36');
INSERT INTO `ok_country` VALUES ('14', 'AT', 'Austria', 'AUT', '40');
INSERT INTO `ok_country` VALUES ('15', 'AZ', 'Azerbaijan', 'AZE', '31');
INSERT INTO `ok_country` VALUES ('16', 'BS', 'Bahamas', 'BHS', '44');
INSERT INTO `ok_country` VALUES ('17', 'BH', 'Bahrain', 'BHR', '48');
INSERT INTO `ok_country` VALUES ('18', 'BD', 'Bangladesh', 'BGD', '50');
INSERT INTO `ok_country` VALUES ('19', 'BB', 'Barbados', 'BRB', '52');
INSERT INTO `ok_country` VALUES ('20', 'BY', 'Belarus', 'BLR', '112');
INSERT INTO `ok_country` VALUES ('21', 'BE', 'Belgium', 'BEL', '56');
INSERT INTO `ok_country` VALUES ('22', 'BZ', 'Belize', 'BLZ', '84');
INSERT INTO `ok_country` VALUES ('23', 'BJ', 'Benin', 'BEN', '204');
INSERT INTO `ok_country` VALUES ('24', 'BM', 'Bermuda', 'BMU', '60');
INSERT INTO `ok_country` VALUES ('25', 'BT', 'Bhutan', 'BTN', '64');
INSERT INTO `ok_country` VALUES ('26', 'BO', 'Bolivia', 'BOL', '68');
INSERT INTO `ok_country` VALUES ('27', 'BA', 'Bosnia and Herzegovina', 'BIH', '70');
INSERT INTO `ok_country` VALUES ('28', 'BW', 'Botswana', 'BWA', '72');
INSERT INTO `ok_country` VALUES ('29', 'BV', 'Bouvet Island', null, null);
INSERT INTO `ok_country` VALUES ('30', 'BR', 'Brazil', 'BRA', '76');
INSERT INTO `ok_country` VALUES ('31', 'IO', 'British Indian Ocean Territory', null, null);
INSERT INTO `ok_country` VALUES ('32', 'BN', 'Brunei Darussalam', 'BRN', '96');
INSERT INTO `ok_country` VALUES ('33', 'BG', 'Bulgaria', 'BGR', '100');
INSERT INTO `ok_country` VALUES ('34', 'BF', 'Burkina Faso', 'BFA', '854');
INSERT INTO `ok_country` VALUES ('35', 'BI', 'Burundi', 'BDI', '108');
INSERT INTO `ok_country` VALUES ('36', 'KH', 'Cambodia', 'KHM', '116');
INSERT INTO `ok_country` VALUES ('37', 'CM', 'Cameroon', 'CMR', '120');
INSERT INTO `ok_country` VALUES ('38', 'CA', 'Canada', 'CAN', '124');
INSERT INTO `ok_country` VALUES ('39', 'CV', 'Cape Verde', 'CPV', '132');
INSERT INTO `ok_country` VALUES ('40', 'KY', 'Cayman Islands', 'CYM', '136');
INSERT INTO `ok_country` VALUES ('41', 'CF', 'Central African Republic', 'CAF', '140');
INSERT INTO `ok_country` VALUES ('42', 'TD', 'Chad', 'TCD', '148');
INSERT INTO `ok_country` VALUES ('43', 'CL', 'Chile', 'CHL', '152');
INSERT INTO `ok_country` VALUES ('44', 'CN', 'China', 'CHN', '156');
INSERT INTO `ok_country` VALUES ('45', 'CX', 'Christmas Island', null, null);
INSERT INTO `ok_country` VALUES ('46', 'CC', 'Cocos (Keeling) Islands', null, null);
INSERT INTO `ok_country` VALUES ('47', 'CO', 'Colombia', 'COL', '170');
INSERT INTO `ok_country` VALUES ('48', 'KM', 'Comoros', 'COM', '174');
INSERT INTO `ok_country` VALUES ('49', 'CG', 'Congo', 'COG', '178');
INSERT INTO `ok_country` VALUES ('50', 'CD', 'Congo, the Democratic Republic of the', 'COD', '180');
INSERT INTO `ok_country` VALUES ('51', 'CK', 'Cook Islands', 'COK', '184');
INSERT INTO `ok_country` VALUES ('52', 'CR', 'Costa Rica', 'CRI', '188');
INSERT INTO `ok_country` VALUES ('53', 'CI', 'Cote D\'Ivoire', 'CIV', '384');
INSERT INTO `ok_country` VALUES ('54', 'HR', 'Croatia', 'HRV', '191');
INSERT INTO `ok_country` VALUES ('55', 'CU', 'Cuba', 'CUB', '192');
INSERT INTO `ok_country` VALUES ('56', 'CY', 'Cyprus', 'CYP', '196');
INSERT INTO `ok_country` VALUES ('57', 'CZ', 'Czech Republic', 'CZE', '203');
INSERT INTO `ok_country` VALUES ('58', 'DK', 'Denmark', 'DNK', '208');
INSERT INTO `ok_country` VALUES ('59', 'DJ', 'Djibouti', 'DJI', '262');
INSERT INTO `ok_country` VALUES ('60', 'DM', 'Dominica', 'DMA', '212');
INSERT INTO `ok_country` VALUES ('61', 'DO', 'Dominican Republic', 'DOM', '214');
INSERT INTO `ok_country` VALUES ('62', 'EC', 'Ecuador', 'ECU', '218');
INSERT INTO `ok_country` VALUES ('63', 'EG', 'Egypt', 'EGY', '818');
INSERT INTO `ok_country` VALUES ('64', 'SV', 'El Salvador', 'SLV', '222');
INSERT INTO `ok_country` VALUES ('65', 'GQ', 'Equatorial Guinea', 'GNQ', '226');
INSERT INTO `ok_country` VALUES ('66', 'ER', 'Eritrea', 'ERI', '232');
INSERT INTO `ok_country` VALUES ('67', 'EE', 'Estonia', 'EST', '233');
INSERT INTO `ok_country` VALUES ('68', 'ET', 'Ethiopia', 'ETH', '231');
INSERT INTO `ok_country` VALUES ('69', 'FK', 'Falkland Islands (Malvinas)', 'FLK', '238');
INSERT INTO `ok_country` VALUES ('70', 'FO', 'Faroe Islands', 'FRO', '234');
INSERT INTO `ok_country` VALUES ('71', 'FJ', 'Fiji', 'FJI', '242');
INSERT INTO `ok_country` VALUES ('72', 'FI', 'Finland', 'FIN', '246');
INSERT INTO `ok_country` VALUES ('73', 'FR', 'France', 'FRA', '250');
INSERT INTO `ok_country` VALUES ('74', 'GF', 'French Guiana', 'GUF', '254');
INSERT INTO `ok_country` VALUES ('75', 'PF', 'French Polynesia', 'PYF', '258');
INSERT INTO `ok_country` VALUES ('76', 'TF', 'French Southern Territories', null, null);
INSERT INTO `ok_country` VALUES ('77', 'GA', 'Gabon', 'GAB', '266');
INSERT INTO `ok_country` VALUES ('78', 'GM', 'Gambia', 'GMB', '270');
INSERT INTO `ok_country` VALUES ('79', 'GE', 'Georgia', 'GEO', '268');
INSERT INTO `ok_country` VALUES ('80', 'DE', 'Germany', 'DEU', '276');
INSERT INTO `ok_country` VALUES ('81', 'GH', 'Ghana', 'GHA', '288');
INSERT INTO `ok_country` VALUES ('82', 'GI', 'Gibraltar', 'GIB', '292');
INSERT INTO `ok_country` VALUES ('83', 'GR', 'Greece', 'GRC', '300');
INSERT INTO `ok_country` VALUES ('84', 'GL', 'Greenland', 'GRL', '304');
INSERT INTO `ok_country` VALUES ('85', 'GD', 'Grenada', 'GRD', '308');
INSERT INTO `ok_country` VALUES ('86', 'GP', 'Guadeloupe', 'GLP', '312');
INSERT INTO `ok_country` VALUES ('87', 'GU', 'Guam', 'GUM', '316');
INSERT INTO `ok_country` VALUES ('88', 'GT', 'Guatemala', 'GTM', '320');
INSERT INTO `ok_country` VALUES ('89', 'GN', 'Guinea', 'GIN', '324');
INSERT INTO `ok_country` VALUES ('90', 'GW', 'Guinea-Bissau', 'GNB', '624');
INSERT INTO `ok_country` VALUES ('91', 'GY', 'Guyana', 'GUY', '328');
INSERT INTO `ok_country` VALUES ('92', 'HT', 'Haiti', 'HTI', '332');
INSERT INTO `ok_country` VALUES ('93', 'HM', 'Heard Island and Mcdonald Islands', null, null);
INSERT INTO `ok_country` VALUES ('94', 'VA', 'Holy See (Vatican City State)', 'VAT', '336');
INSERT INTO `ok_country` VALUES ('95', 'HN', 'Honduras', 'HND', '340');
INSERT INTO `ok_country` VALUES ('96', 'HK', 'Hong Kong', 'HKG', '344');
INSERT INTO `ok_country` VALUES ('97', 'HU', 'Hungary', 'HUN', '348');
INSERT INTO `ok_country` VALUES ('98', 'IS', 'Iceland', 'ISL', '352');
INSERT INTO `ok_country` VALUES ('99', 'IN', 'India', 'IND', '356');
INSERT INTO `ok_country` VALUES ('100', 'ID', 'Indonesia', 'IDN', '360');
INSERT INTO `ok_country` VALUES ('101', 'IR', 'Iran, Islamic Republic of', 'IRN', '364');
INSERT INTO `ok_country` VALUES ('102', 'IQ', 'Iraq', 'IRQ', '368');
INSERT INTO `ok_country` VALUES ('103', 'IE', 'Ireland', 'IRL', '372');
INSERT INTO `ok_country` VALUES ('104', 'IL', 'Israel', 'ISR', '376');
INSERT INTO `ok_country` VALUES ('105', 'IT', 'Italy', 'ITA', '380');
INSERT INTO `ok_country` VALUES ('106', 'JM', 'Jamaica', 'JAM', '388');
INSERT INTO `ok_country` VALUES ('107', 'JP', 'Japan', 'JPN', '392');
INSERT INTO `ok_country` VALUES ('108', 'JO', 'Jordan', 'JOR', '400');
INSERT INTO `ok_country` VALUES ('109', 'KZ', 'Kazakhstan', 'KAZ', '398');
INSERT INTO `ok_country` VALUES ('110', 'KE', 'Kenya', 'KEN', '404');
INSERT INTO `ok_country` VALUES ('111', 'KI', 'Kiribati', 'KIR', '296');
INSERT INTO `ok_country` VALUES ('112', 'KP', 'Korea, Democratic People\'s Republic of', 'PRK', '408');
INSERT INTO `ok_country` VALUES ('113', 'KR', 'Korea, Republic of', 'KOR', '410');
INSERT INTO `ok_country` VALUES ('114', 'KW', 'Kuwait', 'KWT', '414');
INSERT INTO `ok_country` VALUES ('115', 'KG', 'Kyrgyzstan', 'KGZ', '417');
INSERT INTO `ok_country` VALUES ('116', 'LA', 'Lao People\'s Democratic Republic', 'LAO', '418');
INSERT INTO `ok_country` VALUES ('117', 'LV', 'Latvia', 'LVA', '428');
INSERT INTO `ok_country` VALUES ('118', 'LB', 'Lebanon', 'LBN', '422');
INSERT INTO `ok_country` VALUES ('119', 'LS', 'Lesotho', 'LSO', '426');
INSERT INTO `ok_country` VALUES ('120', 'LR', 'Liberia', 'LBR', '430');
INSERT INTO `ok_country` VALUES ('121', 'LY', 'Libyan Arab Jamahiriya', 'LBY', '434');
INSERT INTO `ok_country` VALUES ('122', 'LI', 'Liechtenstein', 'LIE', '438');
INSERT INTO `ok_country` VALUES ('123', 'LT', 'Lithuania', 'LTU', '440');
INSERT INTO `ok_country` VALUES ('124', 'LU', 'Luxembourg', 'LUX', '442');
INSERT INTO `ok_country` VALUES ('125', 'MO', 'Macao', 'MAC', '446');
INSERT INTO `ok_country` VALUES ('126', 'MK', 'Macedonia, the Former Yugoslav Republic of', 'MKD', '807');
INSERT INTO `ok_country` VALUES ('127', 'MG', 'Madagascar', 'MDG', '450');
INSERT INTO `ok_country` VALUES ('128', 'MW', 'Malawi', 'MWI', '454');
INSERT INTO `ok_country` VALUES ('129', 'MY', 'Malaysia', 'MYS', '458');
INSERT INTO `ok_country` VALUES ('130', 'MV', 'Maldives', 'MDV', '462');
INSERT INTO `ok_country` VALUES ('131', 'ML', 'Mali', 'MLI', '466');
INSERT INTO `ok_country` VALUES ('132', 'MT', 'Malta', 'MLT', '470');
INSERT INTO `ok_country` VALUES ('133', 'MH', 'Marshall Islands', 'MHL', '584');
INSERT INTO `ok_country` VALUES ('134', 'MQ', 'Martinique', 'MTQ', '474');
INSERT INTO `ok_country` VALUES ('135', 'MR', 'Mauritania', 'MRT', '478');
INSERT INTO `ok_country` VALUES ('136', 'MU', 'Mauritius', 'MUS', '480');
INSERT INTO `ok_country` VALUES ('137', 'YT', 'Mayotte', null, null);
INSERT INTO `ok_country` VALUES ('138', 'MX', 'Mexico', 'MEX', '484');
INSERT INTO `ok_country` VALUES ('139', 'FM', 'Micronesia, Federated States of', 'FSM', '583');
INSERT INTO `ok_country` VALUES ('140', 'MD', 'Moldova, Republic of', 'MDA', '498');
INSERT INTO `ok_country` VALUES ('141', 'MC', 'Monaco', 'MCO', '492');
INSERT INTO `ok_country` VALUES ('142', 'MN', 'Mongolia', 'MNG', '496');
INSERT INTO `ok_country` VALUES ('143', 'MS', 'Montserrat', 'MSR', '500');
INSERT INTO `ok_country` VALUES ('144', 'MA', 'Morocco', 'MAR', '504');
INSERT INTO `ok_country` VALUES ('145', 'MZ', 'Mozambique', 'MOZ', '508');
INSERT INTO `ok_country` VALUES ('146', 'MM', 'Myanmar', 'MMR', '104');
INSERT INTO `ok_country` VALUES ('147', 'NA', 'Namibia', 'NAM', '516');
INSERT INTO `ok_country` VALUES ('148', 'NR', 'Nauru', 'NRU', '520');
INSERT INTO `ok_country` VALUES ('149', 'NP', 'Nepal', 'NPL', '524');
INSERT INTO `ok_country` VALUES ('150', 'NL', 'Netherlands', 'NLD', '528');
INSERT INTO `ok_country` VALUES ('151', 'AN', 'Netherlands Antilles', 'ANT', '530');
INSERT INTO `ok_country` VALUES ('152', 'NC', 'New Caledonia', 'NCL', '540');
INSERT INTO `ok_country` VALUES ('153', 'NZ', 'New Zealand', 'NZL', '554');
INSERT INTO `ok_country` VALUES ('154', 'NI', 'Nicaragua', 'NIC', '558');
INSERT INTO `ok_country` VALUES ('155', 'NE', 'Niger', 'NER', '562');
INSERT INTO `ok_country` VALUES ('156', 'NG', 'Nigeria', 'NGA', '566');
INSERT INTO `ok_country` VALUES ('157', 'NU', 'Niue', 'NIU', '570');
INSERT INTO `ok_country` VALUES ('158', 'NF', 'Norfolk Island', 'NFK', '574');
INSERT INTO `ok_country` VALUES ('159', 'MP', 'Northern Mariana Islands', 'MNP', '580');
INSERT INTO `ok_country` VALUES ('160', 'NO', 'Norway', 'NOR', '578');
INSERT INTO `ok_country` VALUES ('161', 'OM', 'Oman', 'OMN', '512');
INSERT INTO `ok_country` VALUES ('162', 'PK', 'Pakistan', 'PAK', '586');
INSERT INTO `ok_country` VALUES ('163', 'PW', 'Palau', 'PLW', '585');
INSERT INTO `ok_country` VALUES ('164', 'PS', 'Palestinian Territory, Occupied', null, null);
INSERT INTO `ok_country` VALUES ('165', 'PA', 'Panama', 'PAN', '591');
INSERT INTO `ok_country` VALUES ('166', 'PG', 'Papua New Guinea', 'PNG', '598');
INSERT INTO `ok_country` VALUES ('167', 'PY', 'Paraguay', 'PRY', '600');
INSERT INTO `ok_country` VALUES ('168', 'PE', 'Peru', 'PER', '604');
INSERT INTO `ok_country` VALUES ('169', 'PH', 'Philippines', 'PHL', '608');
INSERT INTO `ok_country` VALUES ('170', 'PN', 'Pitcairn', 'PCN', '612');
INSERT INTO `ok_country` VALUES ('171', 'PL', 'Poland', 'POL', '616');
INSERT INTO `ok_country` VALUES ('172', 'PT', 'Portugal', 'PRT', '620');
INSERT INTO `ok_country` VALUES ('173', 'PR', 'Puerto Rico', 'PRI', '630');
INSERT INTO `ok_country` VALUES ('174', 'QA', 'Qatar', 'QAT', '634');
INSERT INTO `ok_country` VALUES ('175', 'RE', 'Reunion', 'REU', '638');
INSERT INTO `ok_country` VALUES ('176', 'RO', 'Romania', 'ROM', '642');
INSERT INTO `ok_country` VALUES ('177', 'RU', 'Russian Federation', 'RUS', '643');
INSERT INTO `ok_country` VALUES ('178', 'RW', 'Rwanda', 'RWA', '646');
INSERT INTO `ok_country` VALUES ('179', 'SH', 'Saint Helena', 'SHN', '654');
INSERT INTO `ok_country` VALUES ('180', 'KN', 'Saint Kitts and Nevis', 'KNA', '659');
INSERT INTO `ok_country` VALUES ('181', 'LC', 'Saint Lucia', 'LCA', '662');
INSERT INTO `ok_country` VALUES ('182', 'PM', 'Saint Pierre and Miquelon', 'SPM', '666');
INSERT INTO `ok_country` VALUES ('183', 'VC', 'Saint Vincent and the Grenadines', 'VCT', '670');
INSERT INTO `ok_country` VALUES ('184', 'WS', 'Samoa', 'WSM', '882');
INSERT INTO `ok_country` VALUES ('185', 'SM', 'San Marino', 'SMR', '674');
INSERT INTO `ok_country` VALUES ('186', 'ST', 'Sao Tome and Principe', 'STP', '678');
INSERT INTO `ok_country` VALUES ('187', 'SA', 'Saudi Arabia', 'SAU', '682');
INSERT INTO `ok_country` VALUES ('188', 'SN', 'Senegal', 'SEN', '686');
INSERT INTO `ok_country` VALUES ('189', 'CS', 'Serbia and Montenegro', null, null);
INSERT INTO `ok_country` VALUES ('190', 'SC', 'Seychelles', 'SYC', '690');
INSERT INTO `ok_country` VALUES ('191', 'SL', 'Sierra Leone', 'SLE', '694');
INSERT INTO `ok_country` VALUES ('192', 'SG', 'Singapore', 'SGP', '702');
INSERT INTO `ok_country` VALUES ('193', 'SK', 'Slovakia', 'SVK', '703');
INSERT INTO `ok_country` VALUES ('194', 'SI', 'Slovenia', 'SVN', '705');
INSERT INTO `ok_country` VALUES ('195', 'SB', 'Solomon Islands', 'SLB', '90');
INSERT INTO `ok_country` VALUES ('196', 'SO', 'Somalia', 'SOM', '706');
INSERT INTO `ok_country` VALUES ('197', 'ZA', 'South Africa', 'ZAF', '710');
INSERT INTO `ok_country` VALUES ('198', 'GS', 'South Georgia and the South Sandwich Islands', null, null);
INSERT INTO `ok_country` VALUES ('199', 'ES', 'Spain', 'ESP', '724');
INSERT INTO `ok_country` VALUES ('200', 'LK', 'Sri Lanka', 'LKA', '144');
INSERT INTO `ok_country` VALUES ('201', 'SD', 'Sudan', 'SDN', '736');
INSERT INTO `ok_country` VALUES ('202', 'SR', 'Suriname', 'SUR', '740');
INSERT INTO `ok_country` VALUES ('203', 'SJ', 'Svalbard and Jan Mayen', 'SJM', '744');
INSERT INTO `ok_country` VALUES ('204', 'SZ', 'Swaziland', 'SWZ', '748');
INSERT INTO `ok_country` VALUES ('205', 'SE', 'Sweden', 'SWE', '752');
INSERT INTO `ok_country` VALUES ('206', 'CH', 'Switzerland', 'CHE', '756');
INSERT INTO `ok_country` VALUES ('207', 'SY', 'Syrian Arab Republic', 'SYR', '760');
INSERT INTO `ok_country` VALUES ('208', 'TW', 'Taiwan, Province of China', 'TWN', '158');
INSERT INTO `ok_country` VALUES ('209', 'TJ', 'Tajikistan', 'TJK', '762');
INSERT INTO `ok_country` VALUES ('210', 'TZ', 'Tanzania, United Republic of', 'TZA', '834');
INSERT INTO `ok_country` VALUES ('211', 'TH', 'Thailand', 'THA', '764');
INSERT INTO `ok_country` VALUES ('212', 'TL', 'Timor-Leste', null, null);
INSERT INTO `ok_country` VALUES ('213', 'TG', 'Togo', 'TGO', '768');
INSERT INTO `ok_country` VALUES ('214', 'TK', 'Tokelau', 'TKL', '772');
INSERT INTO `ok_country` VALUES ('215', 'TO', 'Tonga', 'TON', '776');
INSERT INTO `ok_country` VALUES ('216', 'TT', 'Trinidad and Tobago', 'TTO', '780');
INSERT INTO `ok_country` VALUES ('217', 'TN', 'Tunisia', 'TUN', '788');
INSERT INTO `ok_country` VALUES ('218', 'TR', 'Turkey', 'TUR', '792');
INSERT INTO `ok_country` VALUES ('219', 'TM', 'Turkmenistan', 'TKM', '795');
INSERT INTO `ok_country` VALUES ('220', 'TC', 'Turks and Caicos Islands', 'TCA', '796');
INSERT INTO `ok_country` VALUES ('221', 'TV', 'Tuvalu', 'TUV', '798');
INSERT INTO `ok_country` VALUES ('222', 'UG', 'Uganda', 'UGA', '800');
INSERT INTO `ok_country` VALUES ('223', 'UA', 'Ukraine', 'UKR', '804');
INSERT INTO `ok_country` VALUES ('224', 'AE', 'United Arab Emirates', 'ARE', '784');
INSERT INTO `ok_country` VALUES ('225', 'GB', 'United Kingdom', 'GBR', '826');
INSERT INTO `ok_country` VALUES ('226', 'US', 'United States', 'USA', '840');
INSERT INTO `ok_country` VALUES ('227', 'UM', 'United States Minor Outlying Islands', null, null);
INSERT INTO `ok_country` VALUES ('228', 'UY', 'Uruguay', 'URY', '858');
INSERT INTO `ok_country` VALUES ('229', 'UZ', 'Uzbekistan', 'UZB', '860');
INSERT INTO `ok_country` VALUES ('230', 'VU', 'Vanuatu', 'VUT', '548');
INSERT INTO `ok_country` VALUES ('231', 'VE', 'Venezuela', 'VEN', '862');
INSERT INTO `ok_country` VALUES ('232', 'VN', 'Viet Nam', 'VNM', '704');
INSERT INTO `ok_country` VALUES ('233', 'VG', 'Virgin Islands, British', 'VGB', '92');
INSERT INTO `ok_country` VALUES ('234', 'VI', 'Virgin Islands, U.s.', 'VIR', '850');
INSERT INTO `ok_country` VALUES ('235', 'WF', 'Wallis and Futuna', 'WLF', '876');
INSERT INTO `ok_country` VALUES ('236', 'EH', 'Western Sahara', 'ESH', '732');
INSERT INTO `ok_country` VALUES ('237', 'YE', 'Yemen', 'YEM', '887');
INSERT INTO `ok_country` VALUES ('238', 'ZM', 'Zambia', 'ZMB', '894');
INSERT INTO `ok_country` VALUES ('239', 'ZW', 'Zimbabwe', 'ZWE', '716');
INSERT INTO `ok_user` VALUES ('1', 'admin', null, 'b46576883b03b5988ebef5933f8868dd', 'prashantpawar@gmail.com', 'superadmin', '0', null, null, '2009-11-28 02:11:05', '0000-00-00 00:00:00');
INSERT INTO `ok_user_profile` VALUES ('1', null, null, null);
