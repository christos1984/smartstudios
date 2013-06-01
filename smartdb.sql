/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50145
Source Host           : localhost:3306
Source Database       : smartdb

Target Server Type    : MYSQL
Target Server Version : 50145
File Encoding         : 65001

Date: 2011-03-03 12:30:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `deals`
-- ----------------------------
DROP TABLE IF EXISTS `deals`;
CREATE TABLE `deals` (
  `deal_id` int(5) NOT NULL AUTO_INCREMENT,
  `deal_acc` int(5) NOT NULL,
  `deal_title` varchar(150) NOT NULL,
  `deal_text` text NOT NULL,
  `lang_id` int(5) NOT NULL,
  PRIMARY KEY (`deal_id`),
  KEY `deal_acc` (`deal_acc`),
  CONSTRAINT `deals_ibfk_1` FOREIGN KEY (`deal_acc`) REFERENCES `deal_codes` (`deal_code_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of deals
-- ----------------------------
INSERT INTO `deals` VALUES ('19', '10', 'Smart-Deal 2', '<p>&Phi;έ&rho;&epsilon; &mu;&alpha;&sigmaf; &epsilon;&sigma;ύ &tau;&omicron;&nu; &sigma;&upsilon;&gamma;&kappa;ά&tau;&omicron;&iota;&kappa;ό &sigma;&omicron;&upsilon; &kappa;&alpha;&iota; &kappa;&epsilon;&rho;&delta;ί&sigma;&tau;&epsilon; &alpha;&pi;ό &mu;&iota;&sigma;ό &mu;ή&nu;&alpha; &delta;&omega;&rho;&epsilon;ά&nu; &delta;&iota;&alpha;&mu;&omicron;&nu;ή&sigmaf; &omicron; &kappa;&alpha;&theta;έ&nu;&alpha;&sigmaf;!!!</p>\r\n<p>&Alpha;&rho;&kappa;&epsilon;ί &nu;&alpha; &epsilon;ί&sigma;&alpha;&iota; &phi;&omicron;&iota;&tau;&eta;&tau;ή&sigmaf;, &nu;&alpha; &mu;&alpha;&sigmaf; &pi;&rho;&omicron;&tau;&epsilon;ί&nu;&epsilon;&iota;&sigmaf; &tau;&omicron;&nu; &sigma;&upsilon;&gamma;&kappa;ά&tau;&omicron;&iota;&kappa;ό &sigma;&omicron;&upsilon; &epsilon;&sigma;ύ &kappa;&alpha;&iota; &nu;&alpha; &sigma;&upsilon;&mu;&pi;&lambda;&eta;&rho;ώ&sigma;&epsilon;&tau;&epsilon; &mu;&epsilon; &tau;&omicron;&nu; &phi;ί&lambda;&omicron; &sigma;&omicron;&upsilon; &sigma;&upsilon;&mu;&beta;ό&lambda;&alpha;&iota;&omicron; &epsilon;&nu;ό&sigmaf; έ&tau;&omicron;&upsilon;&sigmaf; &mu;&epsilon; &epsilon;&mu;ά&sigmaf;!</p>\r\n<p>&nbsp;</p>\r\n<p>*&Tau;&omicron; &sigma;&upsilon;&mu;&beta;ό&lambda;&alpha;&iota;&omicron; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &tau;&eta;&rho;&eta;&theta;&epsilon;ί, &tau;&alpha; έ&pi;&iota;&pi;&lambda;&alpha; &kappa;&alpha;&iota; &omicron;&iota; &eta;&lambda;&epsilon;&kappa;&tau;&rho;&iota;&kappa;έ&sigmaf; &sigma;&upsilon;&sigma;&kappa;&epsilon;&upsilon;έ&sigmaf; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &mu;&eta;&nu; έ&chi;&omicron;&upsilon;&nu; &upsilon;&pi;&omicron;&sigma;&tau;&epsilon;ί &zeta;&eta;&mu;&iota;έ&sigmaf; &pi;έ&rho;&alpha;&nu; &tau;&omicron;&upsilon; &phi;&upsilon;&sigma;&iota;&omicron;&lambda;&omicron;&gamma;&iota;&kappa;&omicron;ύ, &omicron;&iota; &kappa;&alpha;&tau;&alpha;&beta;&omicron;&lambda;έ&sigmaf; &tau;&omega;&nu; &epsilon;&nu;&omicron;&iota;&kappa;ί&omega;&nu; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &gamma;ί&nu;&omicron;&nu;&tau;&alpha;&iota; &alpha;&upsilon;&sigma;&tau;&eta;&rho;ά &alpha;&pi;&omicron; 1&eta; &epsilon;&omega;&sigmaf; 5&eta; &tau;&omicron;&upsilon; &kappa;ά&theta;&epsilon; &mu;ή&nu;&alpha;.</p>', '1');
INSERT INTO `deals` VALUES ('20', '10', 'Smart-Deal 2', '<p>&Phi;έ&rho;&epsilon; &mu;&alpha;&sigmaf; &epsilon;&sigma;ύ &tau;&omicron;&nu; &sigma;&upsilon;&gamma;&kappa;ά&tau;&omicron;&iota;&kappa;ό &sigma;&omicron;&upsilon; &kappa;&alpha;&iota; &kappa;&epsilon;&rho;&delta;ί&sigma;&tau;&epsilon; &alpha;&pi;ό &mu;&iota;&sigma;ό &mu;ή&nu;&alpha; &delta;&omega;&rho;&epsilon;ά&nu; &delta;&iota;&alpha;&mu;&omicron;&nu;ή&sigmaf; &omicron; &kappa;&alpha;&theta;έ&nu;&alpha;&sigmaf;!!!</p>\r\n<p>&Alpha;&rho;&kappa;&epsilon;ί &nu;&alpha; &epsilon;ί&sigma;&alpha;&iota; &phi;&omicron;&iota;&tau;&eta;&tau;ή&sigmaf;, &nu;&alpha; &mu;&alpha;&sigmaf; &pi;&rho;&omicron;&tau;&epsilon;ί&nu;&epsilon;&iota;&sigmaf; &tau;&omicron;&nu; &sigma;&upsilon;&gamma;&kappa;ά&tau;&omicron;&iota;&kappa;ό &sigma;&omicron;&upsilon; &epsilon;&sigma;ύ &kappa;&alpha;&iota; &nu;&alpha; &sigma;&upsilon;&mu;&pi;&lambda;&eta;&rho;ώ&sigma;&epsilon;&tau;&epsilon; &mu;&epsilon; &tau;&omicron;&nu; &phi;ί&lambda;&omicron; &sigma;&omicron;&upsilon; &sigma;&upsilon;&mu;&beta;ό&lambda;&alpha;&iota;&omicron; &epsilon;&nu;ό&sigmaf; έ&tau;&omicron;&upsilon;&sigmaf; &mu;&epsilon; &epsilon;&mu;ά&sigmaf;!</p>\r\n<p>&nbsp;</p>\r\n<p>*&Tau;&omicron; &sigma;&upsilon;&mu;&beta;ό&lambda;&alpha;&iota;&omicron; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &tau;&eta;&rho;&eta;&theta;&epsilon;ί, &tau;&alpha; έ&pi;&iota;&pi;&lambda;&alpha; &kappa;&alpha;&iota; &omicron;&iota; &eta;&lambda;&epsilon;&kappa;&tau;&rho;&iota;&kappa;έ&sigmaf; &sigma;&upsilon;&sigma;&kappa;&epsilon;&upsilon;έ&sigmaf; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &mu;&eta;&nu; έ&chi;&omicron;&upsilon;&nu; &upsilon;&pi;&omicron;&sigma;&tau;&epsilon;ί &zeta;&eta;&mu;&iota;έ&sigmaf; &pi;έ&rho;&alpha;&nu; &tau;&omicron;&upsilon; &phi;&upsilon;&sigma;&iota;&omicron;&lambda;&omicron;&gamma;&iota;&kappa;&omicron;ύ, &omicron;&iota; &kappa;&alpha;&tau;&alpha;&beta;&omicron;&lambda;έ&sigmaf; &tau;&omega;&nu; &epsilon;&nu;&omicron;&iota;&kappa;ί&omega;&nu; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &gamma;ί&nu;&omicron;&nu;&tau;&alpha;&iota; &alpha;&upsilon;&sigma;&tau;&eta;&rho;ά &alpha;&pi;&omicron; 1&eta; &epsilon;&omega;&sigmaf; 5&eta; &tau;&omicron;&upsilon; &kappa;ά&theta;&epsilon; &mu;ή&nu;&alpha;.</p>', '2');
INSERT INTO `deals` VALUES ('21', '11', 'Smart-deal 1', '<p>&Phi;έ&rho;&epsilon; &mu;&alpha;&sigmaf; &epsilon;&sigma;ύ &tau;&omicron;&nu; &sigma;&upsilon;&gamma;&kappa;ά&tau;&omicron;&iota;&kappa;ό &sigma;&omicron;&upsilon; &kappa;&alpha;&iota; &kappa;&epsilon;&rho;&delta;ί&sigma;&tau;&epsilon; &alpha;&pi;ό έ&nu;&alpha; &mu;ή&nu;&alpha; &delta;&omega;&rho;&epsilon;ά&nu; &delta;&iota;&alpha;&mu;&omicron;&nu;ή&sigmaf; &omicron; &kappa;&alpha;&theta;έ&nu;&alpha;&sigmaf;!!!</p>\r\n<p>&Alpha;&rho;&kappa;&epsilon;ί &nu;&alpha; &epsilon;ί&sigma;&alpha;&iota; &phi;&omicron;&iota;&tau;&eta;&tau;ή&sigmaf;, &nu;&alpha; &mu;&alpha;&sigmaf; &pi;&rho;&omicron;&tau;&epsilon;ί&nu;&epsilon;&iota;&sigmaf; &tau;&omicron;&nu; &sigma;&upsilon;&gamma;&kappa;ά&tau;&omicron;&iota;&kappa;ό &sigma;&omicron;&upsilon; &epsilon;&sigma;ύ &kappa;&alpha;&iota; &nu;&alpha; &sigma;&upsilon;&mu;&pi;&lambda;&eta;&rho;ώ&sigma;&epsilon;&tau;&epsilon;&mu;&epsilon; &tau;&omicron;&nu; &phi;ί&lambda;&omicron; &sigma;&omicron;&upsilon; &delta;&upsilon;&epsilon;&tau;έ&sigmaf; &sigma;&upsilon;&mu;&beta;ό&lambda;&alpha;&iota;&omicron; &mu;&epsilon; &epsilon;&mu;ά&sigmaf;!*</p>\r\n<p>&nbsp;</p>\r\n<p>*&Tau;&omicron; &sigma;&upsilon;&mu;&beta;ό&lambda;&alpha;&iota;&omicron; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &tau;&eta;&rho;&eta;&theta;&epsilon;ί, &tau;&alpha; έ&pi;&iota;&pi;&lambda;&alpha; &kappa;&alpha;&iota; &eta; &eta;&lambda;&epsilon;&kappa;&tau;&rho;&iota;&kappa;έ&sigmaf; &sigma;&upsilon;&sigma;&kappa;&epsilon;&upsilon;έ&sigmaf; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &mu;&eta;&nu; έ&chi;&omicron;&upsilon;&nu; &upsilon;&pi;&omicron;&sigma;&tau;&epsilon;ί &zeta;&eta;&mu;&iota;έ&sigmaf; &pi;έ&rho;&alpha;&nu; &tau;&omicron;&upsilon; &phi;&upsilon;&sigma;&iota;&omicron;&lambda;&omicron;&gamma;&iota;&kappa;&omicron;ύ, &omicron;&iota; &kappa;&alpha;&tau;&alpha;&beta;&omicron;&lambda;έ&sigmaf; &tau;&omega;&nu; &epsilon;&nu;&omicron;&iota;&kappa;ί&omega;&nu; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &gamma;ί&nu;&omicron;&nu;&tau;&alpha;&iota; &alpha;&upsilon;&sigma;&tau;&eta;&rho;ά &alpha;&pi;&omicron; 1&eta; &epsilon;&omega;&sigmaf; 5&eta; &tau;&omicron;&upsilon; &kappa;ά&theta;&epsilon; &mu;ή&nu;&alpha;.</p>', '1');
INSERT INTO `deals` VALUES ('22', '11', 'Smart-deal 1', '<p>&Phi;έ&rho;&epsilon; &mu;&alpha;&sigmaf; &epsilon;&sigma;ύ &tau;&omicron;&nu; &sigma;&upsilon;&gamma;&kappa;ά&tau;&omicron;&iota;&kappa;ό &sigma;&omicron;&upsilon; &kappa;&alpha;&iota; &kappa;&epsilon;&rho;&delta;ί&sigma;&tau;&epsilon; &alpha;&pi;ό έ&nu;&alpha; &mu;ή&nu;&alpha; &delta;&omega;&rho;&epsilon;ά&nu; &delta;&iota;&alpha;&mu;&omicron;&nu;ή&sigmaf; &omicron; &kappa;&alpha;&theta;έ&nu;&alpha;&sigmaf;!!!</p>\r\n<p>&Alpha;&rho;&kappa;&epsilon;ί &nu;&alpha; &epsilon;ί&sigma;&alpha;&iota; &phi;&omicron;&iota;&tau;&eta;&tau;ή&sigmaf;, &nu;&alpha; &mu;&alpha;&sigmaf; &pi;&rho;&omicron;&tau;&epsilon;ί&nu;&epsilon;&iota;&sigmaf; &tau;&omicron;&nu; &sigma;&upsilon;&gamma;&kappa;ά&tau;&omicron;&iota;&kappa;ό &sigma;&omicron;&upsilon; &epsilon;&sigma;ύ &kappa;&alpha;&iota; &nu;&alpha; &sigma;&upsilon;&mu;&pi;&lambda;&eta;&rho;ώ&sigma;&epsilon;&tau;&epsilon;&mu;&epsilon; &tau;&omicron;&nu; &phi;ί&lambda;&omicron; &sigma;&omicron;&upsilon; &delta;&upsilon;&epsilon;&tau;έ&sigmaf; &sigma;&upsilon;&mu;&beta;ό&lambda;&alpha;&iota;&omicron; &mu;&epsilon; &epsilon;&mu;ά&sigmaf;!*</p>\r\n<p>&nbsp;</p>\r\n<p>*&Tau;&omicron; &sigma;&upsilon;&mu;&beta;ό&lambda;&alpha;&iota;&omicron; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &tau;&eta;&rho;&eta;&theta;&epsilon;ί, &tau;&alpha; έ&pi;&iota;&pi;&lambda;&alpha; &kappa;&alpha;&iota; &eta; &eta;&lambda;&epsilon;&kappa;&tau;&rho;&iota;&kappa;έ&sigmaf; &sigma;&upsilon;&sigma;&kappa;&epsilon;&upsilon;έ&sigmaf; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &mu;&eta;&nu; έ&chi;&omicron;&upsilon;&nu; &upsilon;&pi;&omicron;&sigma;&tau;&epsilon;ί &zeta;&eta;&mu;&iota;έ&sigmaf; &pi;έ&rho;&alpha;&nu; &tau;&omicron;&upsilon; &phi;&upsilon;&sigma;&iota;&omicron;&lambda;&omicron;&gamma;&iota;&kappa;&omicron;ύ, &omicron;&iota; &kappa;&alpha;&tau;&alpha;&beta;&omicron;&lambda;έ&sigmaf; &tau;&omega;&nu; &epsilon;&nu;&omicron;&iota;&kappa;ί&omega;&nu; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &gamma;ί&nu;&omicron;&nu;&tau;&alpha;&iota; &alpha;&upsilon;&sigma;&tau;&eta;&rho;ά &alpha;&pi;&omicron; 1&eta; &epsilon;&omega;&sigmaf; 5&eta; &tau;&omicron;&upsilon; &kappa;ά&theta;&epsilon; &mu;ή&nu;&alpha;.</p>', '2');

-- ----------------------------
-- Table structure for `deal_codes`
-- ----------------------------
DROP TABLE IF EXISTS `deal_codes`;
CREATE TABLE `deal_codes` (
  `deal_code_id` int(5) NOT NULL AUTO_INCREMENT,
  `deal_code_title` varchar(150) NOT NULL,
  `deal_date` datetime NOT NULL,
  PRIMARY KEY (`deal_code_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of deal_codes
-- ----------------------------
INSERT INTO `deal_codes` VALUES ('10', 'Smart-Deal 2', '2011-02-21 18:22:09');
INSERT INTO `deal_codes` VALUES ('11', 'Smart-deal 1', '2011-02-21 18:22:34');

-- ----------------------------
-- Table structure for `languages`
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `lang_id` int(5) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(10) NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of languages
-- ----------------------------
INSERT INTO `languages` VALUES ('1', 'GR');
INSERT INTO `languages` VALUES ('2', 'EN');

-- ----------------------------
-- Table structure for `links`
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
  `link_id` int(5) NOT NULL AUTO_INCREMENT,
  `link_acc` int(5) NOT NULL,
  `link_title` varchar(150) NOT NULL,
  `link_text` text NOT NULL,
  `link_url` varchar(400) NOT NULL,
  `link_date` datetime DEFAULT NULL,
  `lang_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`link_id`),
  KEY `link_acc` (`link_acc`) USING BTREE,
  CONSTRAINT `links_ibfk_1` FOREIGN KEY (`link_acc`) REFERENCES `link_codes` (`link_code_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of links
-- ----------------------------

-- ----------------------------
-- Table structure for `link_codes`
-- ----------------------------
DROP TABLE IF EXISTS `link_codes`;
CREATE TABLE `link_codes` (
  `link_code_id` int(5) NOT NULL AUTO_INCREMENT,
  `link_code_title` varchar(150) NOT NULL,
  `link_date` datetime DEFAULT NULL,
  PRIMARY KEY (`link_code_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of link_codes
-- ----------------------------

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(5) NOT NULL AUTO_INCREMENT,
  `news_acc` int(5) NOT NULL,
  `news_text` text NOT NULL,
  `news_date` datetime DEFAULT NULL,
  `lang_id` int(5) NOT NULL,
  PRIMARY KEY (`news_id`),
  KEY `news_acc` (`news_acc`),
  CONSTRAINT `news_ibfk_1` FOREIGN KEY (`news_acc`) REFERENCES `news_codes` (`news_code_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('32', '13', '<a href=\"index.php?page=deals&amp;lang=gr\">Smart Deals</a>: &Delta;&epsilon;ί&tau;&epsilon; &tau;&iota;&sigmaf; &kappa;&alpha;&iota;&nu;&omicron;ύ&rho;&gamma;&iota;&epsilon;&sigmaf; &mu;&alpha;&sigmaf; &pi;&rho;&omicron;&sigma;&phi;&omicron;&rho;έ&sigmaf; &kappa;&alpha;&iota; &kappa;&epsilon;&rho;&delta;ί&sigma;&tau;&epsilon; &delta;&omega;&rho;&epsilon;ά&nu; &mu;ή&nu;&epsilon;&sigmaf; &delta;&iota;&alpha;&mu;&omicron;&nu;ή&sigmaf;!', '2011-02-21 16:25:34', '1');
INSERT INTO `news` VALUES ('33', '13', '<a href=\"index.php?page=deals&amp;lang=en\">Smart Deals</a>: See our latest offers and win free months of stay!<br />', '2011-02-21 16:25:34', '2');
INSERT INTO `news` VALUES ('34', '14', '<strong>Ampelokipoi Project: </strong><br /><br />&Mu;ό&lambda;&iota;&sigmaf; έ&nu;&alpha; &lambda;&epsilon;&pi;&tau;ό &mu;&epsilon; &tau;&alpha; &pi;ό&delta;&iota;&alpha; &alpha;&pi;ό &tau;&omicron; &Mu;&epsilon;&tau;&rho;ό &tau;&omega;&nu; &Alpha;&mu;&pi;&epsilon;&lambda;&omicron;&kappa;ή&pi;&omega;&nu; &tau;&omicron; &mu;&epsilon;&lambda;&lambda;&omicron;&nu;&tau;&iota;&kappa;ό &mu;&alpha;&sigmaf; project &epsilon;ί&nu;&alpha;&iota; &pi;&rho;&omicron; &tau;&omega;&nu; &pi;&upsilon;&lambda;ώ&nu;!<br /><br />&Mu;&epsilon; &sigma;&tau;ό&chi;&omicron; &tau;&eta;&nu; ό&lambda;&omicron; &kappa;&alpha;&iota; &alpha;&upsilon;&xi;&alpha;&nu;ό&mu;&epsilon;&nu;&eta; &zeta;ή&tau;&eta;&sigma;&eta; &omicron;&lambda;&omicron;&kappa;&lambda;&eta;&rho;&omicron;&mu;έ&nu;&omega;&nu; &phi;&omicron;&iota;&tau;&eta;&tau;&iota;&kappa;ώ&nu; &lambda;ύ&sigma;&epsilon;&omega;&nu; , &kappa;&alpha;&iota; &mu;&epsilon; &gamma;&nu;ώ&mu;&omicron;&nu;&alpha; &tau;&eta;&nu; ά&nu;&epsilon;&sigma;&eta; &kappa;&alpha;&iota; &tau;&eta;&nu; &pi;&omicron;&lambda;&upsilon;&tau;έ&lambda;&epsilon;&iota;&alpha; &tau;&omicron;&upsilon; &phi;&omicron;&iota;&tau;&eta;&tau;ή &sigma;&upsilon;&nu;&epsilon;&chi;ί&zeta;&omicron;&upsilon;&mu;&epsilon; &tau;&eta;&nu; &epsilon;&pi;&iota;&tau;&upsilon;&chi;&eta;&mu;έ&nu;&eta; &alpha;&upsilon;&tau;ή &iota;&delta;έ&alpha; &kappa;&alpha;&iota; &sigma;&epsilon; ά&lambda;&lambda;&epsilon;&sigmaf; \"&phi;&omicron;&iota;&tau;&eta;&tau;&omicron;&kappa;&alpha;&tau;&omicron;&iota;&kappa;&eta;&mu;έ&nu;&epsilon;&sigmaf;\" &pi;&epsilon;&rho;&iota;&omicron;&chi;έ&sigmaf;.<br /><br />&Sigma;ύ&nu;&tau;&omicron;&mu;&alpha; &kappa;&omicron;&nu;&tau;ά &sigma;&alpha;&sigmaf; &mu;&epsilon; &pi;&epsilon;&rho;&iota;&sigma;&sigma;ό&tau;&epsilon;&rho;&alpha; &nu;έ&alpha;...<strong><br /></strong>', '2011-02-21 16:29:04', '1');
INSERT INTO `news` VALUES ('35', '14', '<strong>Ampelokipoi Project: </strong><br /><br />&Mu;ό&lambda;&iota;&sigmaf; έ&nu;&alpha; &lambda;&epsilon;&pi;&tau;ό &mu;&epsilon; &tau;&alpha; &pi;ό&delta;&iota;&alpha; &alpha;&pi;ό &tau;&omicron; &Mu;&epsilon;&tau;&rho;ό &tau;&omega;&nu; &Alpha;&mu;&pi;&epsilon;&lambda;&omicron;&kappa;ή&pi;&omega;&nu; &tau;&omicron; &mu;&epsilon;&lambda;&lambda;&omicron;&nu;&tau;&iota;&kappa;ό &mu;&alpha;&sigmaf; project &epsilon;ί&nu;&alpha;&iota; &pi;&rho;&omicron; &tau;&omega;&nu; &pi;&upsilon;&lambda;ώ&nu;!<br /><br />&Mu;&epsilon; &sigma;&tau;ό&chi;&omicron; &tau;&eta;&nu; ό&lambda;&omicron; &kappa;&alpha;&iota; &alpha;&upsilon;&xi;&alpha;&nu;ό&mu;&epsilon;&nu;&eta; &zeta;ή&tau;&eta;&sigma;&eta; &omicron;&lambda;&omicron;&kappa;&lambda;&eta;&rho;&omicron;&mu;έ&nu;&omega;&nu; &phi;&omicron;&iota;&tau;&eta;&tau;&iota;&kappa;ώ&nu; &lambda;ύ&sigma;&epsilon;&omega;&nu; , &kappa;&alpha;&iota; &mu;&epsilon; &gamma;&nu;ώ&mu;&omicron;&nu;&alpha; &tau;&eta;&nu; ά&nu;&epsilon;&sigma;&eta; &kappa;&alpha;&iota; &tau;&eta;&nu; &pi;&omicron;&lambda;&upsilon;&tau;έ&lambda;&epsilon;&iota;&alpha; &tau;&omicron;&upsilon; &phi;&omicron;&iota;&tau;&eta;&tau;ή &sigma;&upsilon;&nu;&epsilon;&chi;ί&zeta;&omicron;&upsilon;&mu;&epsilon; &tau;&eta;&nu; &epsilon;&pi;&iota;&tau;&upsilon;&chi;&eta;&mu;έ&nu;&eta; &alpha;&upsilon;&tau;ή &iota;&delta;έ&alpha; &kappa;&alpha;&iota; &sigma;&epsilon; ά&lambda;&lambda;&epsilon;&sigmaf; \"&phi;&omicron;&iota;&tau;&eta;&tau;&omicron;&kappa;&alpha;&tau;&omicron;&iota;&kappa;&eta;&mu;έ&nu;&epsilon;&sigmaf;\" &pi;&epsilon;&rho;&iota;&omicron;&chi;έ&sigmaf;.<br /><br />&Sigma;ύ&nu;&tau;&omicron;&mu;&alpha; &kappa;&omicron;&nu;&tau;ά &sigma;&alpha;&sigmaf; &mu;&epsilon; &pi;&epsilon;&rho;&iota;&sigma;&sigma;ό&tau;&epsilon;&rho;&alpha; &nu;έ&alpha;...<br /><br />', '2011-02-21 16:29:04', '2');

-- ----------------------------
-- Table structure for `news_codes`
-- ----------------------------
DROP TABLE IF EXISTS `news_codes`;
CREATE TABLE `news_codes` (
  `news_code_id` int(5) NOT NULL AUTO_INCREMENT,
  `news_date` datetime NOT NULL,
  PRIMARY KEY (`news_code_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_codes
-- ----------------------------
INSERT INTO `news_codes` VALUES ('13', '2011-02-21 16:25:34');
INSERT INTO `news_codes` VALUES ('14', '2011-02-21 16:29:04');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_un` varchar(15) NOT NULL,
  `user_pw` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `user_un` (`user_un`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '$2a$08$DQePWHgKgScDXXMVuCGY/eNIIr6atAJlZ1qV2bD1SIg5aE60VrAOi');
