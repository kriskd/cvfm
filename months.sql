/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : cvfm2011

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2011-07-17 16:05:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `months`
-- ----------------------------
DROP TABLE IF EXISTS `months`;
CREATE TABLE `months` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of months
-- ----------------------------
INSERT INTO `months` VALUES ('1', 'January');
INSERT INTO `months` VALUES ('2', 'February');
INSERT INTO `months` VALUES ('3', 'March');
INSERT INTO `months` VALUES ('4', 'April');
INSERT INTO `months` VALUES ('5', 'May');
INSERT INTO `months` VALUES ('6', 'June');
INSERT INTO `months` VALUES ('7', 'July');
INSERT INTO `months` VALUES ('8', 'August');
INSERT INTO `months` VALUES ('9', 'September');
INSERT INTO `months` VALUES ('10', 'October');
INSERT INTO `months` VALUES ('11', 'November');
INSERT INTO `months` VALUES ('12', 'December');
