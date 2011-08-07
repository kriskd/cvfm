/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : cvfm2011

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2011-07-17 16:05:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `month_products`
-- ----------------------------
DROP TABLE IF EXISTS `month_products`;
CREATE TABLE `month_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of month_products
-- ----------------------------
INSERT INTO `month_products` VALUES ('1', '5', '67');
INSERT INTO `month_products` VALUES ('2', '6', '67');
INSERT INTO `month_products` VALUES ('3', '7', '67');
INSERT INTO `month_products` VALUES ('4', '8', '67');
INSERT INTO `month_products` VALUES ('5', '8', '43');
INSERT INTO `month_products` VALUES ('6', '9', '43');
INSERT INTO `month_products` VALUES ('7', '6', '21');
INSERT INTO `month_products` VALUES ('8', '7', '21');
INSERT INTO `month_products` VALUES ('9', '8', '21');
INSERT INTO `month_products` VALUES ('10', '9', '21');
INSERT INTO `month_products` VALUES ('11', '10', '21');
INSERT INTO `month_products` VALUES ('12', '8', '76');
INSERT INTO `month_products` VALUES ('13', '9', '76');
INSERT INTO `month_products` VALUES ('14', '10', '76');
INSERT INTO `month_products` VALUES ('15', '6', '27');
INSERT INTO `month_products` VALUES ('16', '7', '27');
INSERT INTO `month_products` VALUES ('17', '8', '27');
INSERT INTO `month_products` VALUES ('18', '9', '27');
INSERT INTO `month_products` VALUES ('19', '10', '27');
INSERT INTO `month_products` VALUES ('20', '8', '157');
INSERT INTO `month_products` VALUES ('21', '9', '157');
INSERT INTO `month_products` VALUES ('22', '10', '157');
INSERT INTO `month_products` VALUES ('23', '11', '157');
INSERT INTO `month_products` VALUES ('24', '6', '159');
INSERT INTO `month_products` VALUES ('25', '7', '159');
INSERT INTO `month_products` VALUES ('26', '8', '159');
INSERT INTO `month_products` VALUES ('27', '9', '159');
INSERT INTO `month_products` VALUES ('28', '10', '159');
INSERT INTO `month_products` VALUES ('29', '11', '159');
INSERT INTO `month_products` VALUES ('30', '8', '105');
INSERT INTO `month_products` VALUES ('31', '9', '105');
INSERT INTO `month_products` VALUES ('32', '6', '22');
INSERT INTO `month_products` VALUES ('33', '7', '22');
INSERT INTO `month_products` VALUES ('34', '8', '22');
INSERT INTO `month_products` VALUES ('35', '9', '22');
INSERT INTO `month_products` VALUES ('36', '10', '22');
INSERT INTO `month_products` VALUES ('37', '8', '28');
INSERT INTO `month_products` VALUES ('38', '9', '28');
INSERT INTO `month_products` VALUES ('39', '10', '28');
INSERT INTO `month_products` VALUES ('40', '11', '28');
INSERT INTO `month_products` VALUES ('41', '8', '153');
INSERT INTO `month_products` VALUES ('42', '9', '153');
INSERT INTO `month_products` VALUES ('43', '10', '153');
INSERT INTO `month_products` VALUES ('44', '7', '152');
INSERT INTO `month_products` VALUES ('45', '8', '152');
INSERT INTO `month_products` VALUES ('46', '9', '152');
INSERT INTO `month_products` VALUES ('47', '6', '26');
INSERT INTO `month_products` VALUES ('48', '7', '26');
INSERT INTO `month_products` VALUES ('49', '8', '26');
INSERT INTO `month_products` VALUES ('50', '6', '15');
INSERT INTO `month_products` VALUES ('51', '7', '15');
INSERT INTO `month_products` VALUES ('52', '8', '15');
INSERT INTO `month_products` VALUES ('53', '9', '15');
INSERT INTO `month_products` VALUES ('54', '10', '15');
INSERT INTO `month_products` VALUES ('55', '7', '106');
INSERT INTO `month_products` VALUES ('56', '8', '106');
INSERT INTO `month_products` VALUES ('57', '9', '106');
INSERT INTO `month_products` VALUES ('58', '10', '106');
INSERT INTO `month_products` VALUES ('59', '8', '42');
INSERT INTO `month_products` VALUES ('60', '9', '42');
INSERT INTO `month_products` VALUES ('61', '10', '42');
INSERT INTO `month_products` VALUES ('62', '11', '42');
INSERT INTO `month_products` VALUES ('63', '7', '19');
INSERT INTO `month_products` VALUES ('64', '8', '19');
INSERT INTO `month_products` VALUES ('65', '9', '19');
INSERT INTO `month_products` VALUES ('66', '6', '72');
INSERT INTO `month_products` VALUES ('67', '7', '72');
INSERT INTO `month_products` VALUES ('68', '8', '72');
INSERT INTO `month_products` VALUES ('69', '9', '72');
INSERT INTO `month_products` VALUES ('70', '6', '48');
INSERT INTO `month_products` VALUES ('71', '7', '48');
INSERT INTO `month_products` VALUES ('72', '8', '48');
INSERT INTO `month_products` VALUES ('73', '9', '48');
INSERT INTO `month_products` VALUES ('74', '10', '48');
INSERT INTO `month_products` VALUES ('75', '8', '71');
INSERT INTO `month_products` VALUES ('76', '9', '71');
INSERT INTO `month_products` VALUES ('77', '10', '71');
INSERT INTO `month_products` VALUES ('78', '6', '109');
INSERT INTO `month_products` VALUES ('79', '7', '109');
INSERT INTO `month_products` VALUES ('80', '8', '109');
INSERT INTO `month_products` VALUES ('81', '9', '109');
INSERT INTO `month_products` VALUES ('82', '8', '25');
INSERT INTO `month_products` VALUES ('83', '9', '25');
INSERT INTO `month_products` VALUES ('84', '4', '69');
INSERT INTO `month_products` VALUES ('85', '5', '69');
INSERT INTO `month_products` VALUES ('86', '6', '69');
INSERT INTO `month_products` VALUES ('87', '7', '69');
INSERT INTO `month_products` VALUES ('88', '8', '69');
INSERT INTO `month_products` VALUES ('89', '9', '69');
INSERT INTO `month_products` VALUES ('90', '10', '69');
INSERT INTO `month_products` VALUES ('91', '8', '29');
INSERT INTO `month_products` VALUES ('92', '9', '29');
INSERT INTO `month_products` VALUES ('93', '10', '29');
INSERT INTO `month_products` VALUES ('94', '7', '111');
INSERT INTO `month_products` VALUES ('95', '8', '111');
INSERT INTO `month_products` VALUES ('96', '7', '17');
INSERT INTO `month_products` VALUES ('97', '8', '17');
INSERT INTO `month_products` VALUES ('98', '9', '17');
INSERT INTO `month_products` VALUES ('99', '7', '23');
INSERT INTO `month_products` VALUES ('100', '8', '23');
INSERT INTO `month_products` VALUES ('101', '9', '23');
INSERT INTO `month_products` VALUES ('102', '10', '23');
INSERT INTO `month_products` VALUES ('103', '10', '30');
INSERT INTO `month_products` VALUES ('104', '5', '70');
INSERT INTO `month_products` VALUES ('105', '6', '70');
INSERT INTO `month_products` VALUES ('106', '7', '70');
INSERT INTO `month_products` VALUES ('107', '8', '70');
INSERT INTO `month_products` VALUES ('108', '9', '70');
INSERT INTO `month_products` VALUES ('109', '10', '70');
INSERT INTO `month_products` VALUES ('110', '6', '53');
INSERT INTO `month_products` VALUES ('111', '7', '53');
INSERT INTO `month_products` VALUES ('112', '8', '53');
INSERT INTO `month_products` VALUES ('113', '5', '47');
INSERT INTO `month_products` VALUES ('114', '6', '47');
INSERT INTO `month_products` VALUES ('115', '5', '117');
INSERT INTO `month_products` VALUES ('116', '6', '117');
INSERT INTO `month_products` VALUES ('117', '7', '117');
INSERT INTO `month_products` VALUES ('118', '8', '117');
INSERT INTO `month_products` VALUES ('119', '9', '117');
INSERT INTO `month_products` VALUES ('120', '10', '117');
INSERT INTO `month_products` VALUES ('121', '7', '112');
INSERT INTO `month_products` VALUES ('122', '8', '112');
INSERT INTO `month_products` VALUES ('123', '9', '112');
INSERT INTO `month_products` VALUES ('124', '10', '112');
INSERT INTO `month_products` VALUES ('125', '6', '49');
INSERT INTO `month_products` VALUES ('126', '7', '49');
INSERT INTO `month_products` VALUES ('127', '7', '13');
INSERT INTO `month_products` VALUES ('128', '8', '13');
INSERT INTO `month_products` VALUES ('129', '9', '13');
INSERT INTO `month_products` VALUES ('130', '10', '13');
INSERT INTO `month_products` VALUES ('131', '8', '114');
INSERT INTO `month_products` VALUES ('132', '9', '114');
INSERT INTO `month_products` VALUES ('133', '8', '115');
INSERT INTO `month_products` VALUES ('134', '9', '115');
INSERT INTO `month_products` VALUES ('135', '10', '115');
INSERT INTO `month_products` VALUES ('136', '7', '116');
INSERT INTO `month_products` VALUES ('137', '8', '116');
INSERT INTO `month_products` VALUES ('138', '9', '116');
INSERT INTO `month_products` VALUES ('139', '10', '116');
