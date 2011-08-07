/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : cvfm2011

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2011-08-07 15:47:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `contents`
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uri` varchar(50) NOT NULL,
  `val` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_uri` (`uri`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contents
-- ----------------------------
INSERT INTO `contents` VALUES ('1', 'index', '<h2>The Capitol View Farmer\'s Market operates from June 1, 2011 until\r\n                October 12, 2011 from 3:00PM - 7:00PM.</h2>\r\n                <p>The farmers market is located on the south side of Sharpsburg Drive\r\n                starting at the corner of North Star Drive on the east side of Madison\r\n                across from the new Great Dane Pub within the Grandview Commons Neighborhood and\r\n                visible from Cottage Grove Road.</p>\r\n                <p>The overall goal of the market is to bring\r\n                quality, fresh foods at an affordable price to East Madison by providing an\r\n                outlet for purchasing locally grown produce, farm fresh meats, dairy products,\r\n                and baked goods.</p>\r\n                <h3>Documents</h3>\r\n                <p>Please take a moment to review the <a href=\"cvfm2011RulesandByLaws.pdf\">Rules and Bylaws</a>.</p>\r\n                <h3>Special Events for 2011</h3>\r\n                <ul>\r\n                    <li>June 1 - In honor of June dairy month and the first market of the\r\n                    new season, CVFM will be serving ice cream and giving balloons to the\r\n                    kids.</li>\r\n                    <li>July 6 - Celebrate Independence Day at the farmer\'s market!</li>\r\n                    <li>August 3 - To be determined.</li>\r\n                    <li>September 7 - Corn roast.</li>\r\n                    <li>October 4 - Safety with Medflight and McGruff.</li>\r\n                </ul>\r\n                ');
INSERT INTO `contents` VALUES ('2', 'map', '<h3>Where to Find Us</h3>\r\n<p id=\"map\">\r\n<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=43.08569,-89.279709&amp;aq=&amp;sll=37.771008,-122.41175&amp;sspn=0.04851,0.077162&amp;ie=UTF8&amp;z=14&amp;ll=43.085689,-89.279709&amp;output=embed\"></iframe><br /><small><a href=\"http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=43.08569,-89.279709&amp;aq=&amp;sll=37.771008,-122.41175&amp;sspn=0.04851,0.077162&amp;ie=UTF8&amp;z=14&amp;ll=43.085689,-89.279709\" style=\"color:#694F10;text-align:left\">View Larger Map</a></small>\r\n</p>\r\n');

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

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `product_type` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=187 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Popcorn', '2');
INSERT INTO `products` VALUES ('2', 'Kettlecorn', '2');
INSERT INTO `products` VALUES ('3', 'Lemonade', '2');
INSERT INTO `products` VALUES ('4', 'Fresh cheese', '2');
INSERT INTO `products` VALUES ('5', 'Cheese curds', '2');
INSERT INTO `products` VALUES ('6', 'Gluten-free raw granola', '2');
INSERT INTO `products` VALUES ('7', 'Gluten-free crackers', '2');
INSERT INTO `products` VALUES ('8', 'Produce', '5');
INSERT INTO `products` VALUES ('9', 'Flowers', '1');
INSERT INTO `products` VALUES ('10', 'Jams', '2');
INSERT INTO `products` VALUES ('11', 'Pickles', '2');
INSERT INTO `products` VALUES ('12', 'Horseradish', '2');
INSERT INTO `products` VALUES ('13', 'Tomatoes', '5');
INSERT INTO `products` VALUES ('14', 'Wood-fired pizza', '2');
INSERT INTO `products` VALUES ('15', 'Cucumber', '5');
INSERT INTO `products` VALUES ('16', 'Squash', '5');
INSERT INTO `products` VALUES ('17', 'Peppers', '5');
INSERT INTO `products` VALUES ('18', 'Tomatillos', '5');
INSERT INTO `products` VALUES ('19', 'Beans', '5');
INSERT INTO `products` VALUES ('20', 'Mexican herbs', '7');
INSERT INTO `products` VALUES ('21', 'Beets', '5');
INSERT INTO `products` VALUES ('22', 'Carrots', '5');
INSERT INTO `products` VALUES ('23', 'Potatoes', '5');
INSERT INTO `products` VALUES ('24', 'Plants', '1');
INSERT INTO `products` VALUES ('25', 'Melons', '3');
INSERT INTO `products` VALUES ('26', 'Sweet corn', '5');
INSERT INTO `products` VALUES ('27', 'Broccoli', '5');
INSERT INTO `products` VALUES ('28', 'Cauliflower', '5');
INSERT INTO `products` VALUES ('29', 'Onions', '5');
INSERT INTO `products` VALUES ('30', 'Pumpkins', '5');
INSERT INTO `products` VALUES ('31', 'Organic Beef', '2');
INSERT INTO `products` VALUES ('32', 'Organic chicken', '2');
INSERT INTO `products` VALUES ('33', 'Cedar Grove cheese', '2');
INSERT INTO `products` VALUES ('34', 'Organic eggs', '2');
INSERT INTO `products` VALUES ('35', 'Pork', '2');
INSERT INTO `products` VALUES ('36', 'Bread', '2');
INSERT INTO `products` VALUES ('37', 'Angel food', '2');
INSERT INTO `products` VALUES ('38', 'Pies', '2');
INSERT INTO `products` VALUES ('39', 'Cookies', '2');
INSERT INTO `products` VALUES ('40', 'Rolls', '2');
INSERT INTO `products` VALUES ('41', 'Granola', '2');
INSERT INTO `products` VALUES ('42', 'Garlic', '7');
INSERT INTO `products` VALUES ('43', 'Basil', '7');
INSERT INTO `products` VALUES ('44', 'Cilantro', '7');
INSERT INTO `products` VALUES ('45', 'Dill', '7');
INSERT INTO `products` VALUES ('46', 'Bokchoy', '5');
INSERT INTO `products` VALUES ('47', 'Rhubarb', '5');
INSERT INTO `products` VALUES ('48', 'Greens', '5');
INSERT INTO `products` VALUES ('49', 'Strawberries', '3');
INSERT INTO `products` VALUES ('50', 'Honey', '2');
INSERT INTO `products` VALUES ('51', 'Soap', '4');
INSERT INTO `products` VALUES ('52', 'Candles', '4');
INSERT INTO `products` VALUES ('53', 'Raspberries', '3');
INSERT INTO `products` VALUES ('54', 'Bedding plants', '1');
INSERT INTO `products` VALUES ('55', 'Blackberries', '3');
INSERT INTO `products` VALUES ('56', 'Peaches', '3');
INSERT INTO `products` VALUES ('57', 'Apricots', '3');
INSERT INTO `products` VALUES ('58', 'Plums', '3');
INSERT INTO `products` VALUES ('59', 'Alpaca yarn', '4');
INSERT INTO `products` VALUES ('60', 'Roving', '4');
INSERT INTO `products` VALUES ('61', 'Fleece', '4');
INSERT INTO `products` VALUES ('62', 'Grass fed meats', '2');
INSERT INTO `products` VALUES ('63', 'Soy free eggs', '2');
INSERT INTO `products` VALUES ('64', 'Organic produce', '5');
INSERT INTO `products` VALUES ('65', 'Home canned goods', '2');
INSERT INTO `products` VALUES ('66', 'Baked goods', '2');
INSERT INTO `products` VALUES ('67', 'Asparagus', '5');
INSERT INTO `products` VALUES ('68', 'Parsley', '5');
INSERT INTO `products` VALUES ('69', 'Mint', '6');
INSERT INTO `products` VALUES ('70', 'Radish', '5');
INSERT INTO `products` VALUES ('71', 'Leeks', '5');
INSERT INTO `products` VALUES ('72', 'Green onions', '5');
INSERT INTO `products` VALUES ('73', 'Elephant ear leaf', '6');
INSERT INTO `products` VALUES ('74', 'Baby green mustard', '6');
INSERT INTO `products` VALUES ('75', 'Bitter leaf', '6');
INSERT INTO `products` VALUES ('76', 'Bitter melon', '6');
INSERT INTO `products` VALUES ('77', 'Chayote', '6');
INSERT INTO `products` VALUES ('78', 'Chayote leaf', '6');
INSERT INTO `products` VALUES ('79', 'Chinese broccoli', '6');
INSERT INTO `products` VALUES ('80', 'Green malabar spinach', '6');
INSERT INTO `products` VALUES ('81', 'Hmong corn', '6');
INSERT INTO `products` VALUES ('82', 'Hmong cucumber', '6');
INSERT INTO `products` VALUES ('83', 'Hmong pumpkin', '6');
INSERT INTO `products` VALUES ('84', 'Hmong pumpkin leaf', '6');
INSERT INTO `products` VALUES ('85', 'Indian eggplant', '6');
INSERT INTO `products` VALUES ('86', 'Italian eggplant', '6');
INSERT INTO `products` VALUES ('87', 'Jaicama', '6');
INSERT INTO `products` VALUES ('88', 'Lemon grass', '6');
INSERT INTO `products` VALUES ('89', 'Okra leaf', '6');
INSERT INTO `products` VALUES ('90', 'Opo', '6');
INSERT INTO `products` VALUES ('91', 'Peanut', '6');
INSERT INTO `products` VALUES ('92', 'Phat boon', '6');
INSERT INTO `products` VALUES ('93', 'Rama leaf', '6');
INSERT INTO `products` VALUES ('94', 'Rama xwb kuab', '6');
INSERT INTO `products` VALUES ('95', 'Seseme leaf', '6');
INSERT INTO `products` VALUES ('96', 'Spring raab', '6');
INSERT INTO `products` VALUES ('97', 'Tainong', '6');
INSERT INTO `products` VALUES ('98', 'Taub txaijl', '6');
INSERT INTO `products` VALUES ('99', 'Thai basil', '6');
INSERT INTO `products` VALUES ('100', 'Thai eggplant', '6');
INSERT INTO `products` VALUES ('101', 'Yao choy', '6');
INSERT INTO `products` VALUES ('102', 'Zaub pa', '6');
INSERT INTO `products` VALUES ('103', 'Japanese cucumber', '6');
INSERT INTO `products` VALUES ('104', 'Chinese okra', '6');
INSERT INTO `products` VALUES ('105', 'Cantaloupe', '3');
INSERT INTO `products` VALUES ('106', 'Eggplant', '5');
INSERT INTO `products` VALUES ('107', 'Gourd', '5');
INSERT INTO `products` VALUES ('108', 'Kohlrabi', '5');
INSERT INTO `products` VALUES ('109', 'Lettuce', '5');
INSERT INTO `products` VALUES ('110', 'Okra', '5');
INSERT INTO `products` VALUES ('111', 'Peas', '5');
INSERT INTO `products` VALUES ('112', 'Summer squash', '5');
INSERT INTO `products` VALUES ('113', 'Watercress', '5');
INSERT INTO `products` VALUES ('114', 'Watermelon', '3');
INSERT INTO `products` VALUES ('115', 'Winter squash', '5');
INSERT INTO `products` VALUES ('116', 'Zucchini', '5');
INSERT INTO `products` VALUES ('117', 'Spinach', '5');
INSERT INTO `products` VALUES ('118', 'Aster', '1');
INSERT INTO `products` VALUES ('119', 'Baby breath', '1');
INSERT INTO `products` VALUES ('120', 'Bachorlor', '1');
INSERT INTO `products` VALUES ('121', 'Blazing star', '1');
INSERT INTO `products` VALUES ('122', 'Bombay', '1');
INSERT INTO `products` VALUES ('123', 'Cosmos', '1');
INSERT INTO `products` VALUES ('124', 'Dahlia', '1');
INSERT INTO `products` VALUES ('125', 'Dephinium', '1');
INSERT INTO `products` VALUES ('126', 'Gladiola', '1');
INSERT INTO `products` VALUES ('127', 'Gold cosmos', '1');
INSERT INTO `products` VALUES ('128', 'Larkspur', '1');
INSERT INTO `products` VALUES ('129', 'Liatris', '1');
INSERT INTO `products` VALUES ('130', 'Like roses', '1');
INSERT INTO `products` VALUES ('131', 'Love-in-a-mist', '1');
INSERT INTO `products` VALUES ('132', 'Lupine', '1');
INSERT INTO `products` VALUES ('133', 'Snap dragon', '1');
INSERT INTO `products` VALUES ('134', 'Statice', '1');
INSERT INTO `products` VALUES ('135', 'Yellow flowers', '1');
INSERT INTO `products` VALUES ('136', 'Zinnia', '1');
INSERT INTO `products` VALUES ('137', 'Sun flower', '1');
INSERT INTO `products` VALUES ('138', 'Parmesan cheese', '2');
INSERT INTO `products` VALUES ('139', 'Asiago cheese', '2');
INSERT INTO `products` VALUES ('140', 'Pepper cheese', '2');
INSERT INTO `products` VALUES ('141', 'Caramel corn', '2');
INSERT INTO `products` VALUES ('142', 'Cheddar cheese corn', '2');
INSERT INTO `products` VALUES ('143', 'Quick breads', '2');
INSERT INTO `products` VALUES ('144', 'Homemade noodles', '2');
INSERT INTO `products` VALUES ('145', 'Jalapeno pepper', '5');
INSERT INTO `products` VALUES ('146', 'Sweet potatoes', '5');
INSERT INTO `products` VALUES ('147', 'Peonies', '1');
INSERT INTO `products` VALUES ('148', 'Yarrow', '1');
INSERT INTO `products` VALUES ('149', 'Heirloom tomatoes', '5');
INSERT INTO `products` VALUES ('150', 'Cherry tomatoes', '5');
INSERT INTO `products` VALUES ('151', 'Artichokes', '5');
INSERT INTO `products` VALUES ('152', 'Chard', '5');
INSERT INTO `products` VALUES ('153', 'Celery', '5');
INSERT INTO `products` VALUES ('154', 'Pears', '3');
INSERT INTO `products` VALUES ('155', 'Swiss chard', '5');
INSERT INTO `products` VALUES ('156', 'Acorn squash', '5');
INSERT INTO `products` VALUES ('157', 'Brussel sprouts', '5');
INSERT INTO `products` VALUES ('158', 'Butternut squash', '5');
INSERT INTO `products` VALUES ('159', 'Cabbage', '5');
INSERT INTO `products` VALUES ('160', 'Chinese cabbage', '6');
INSERT INTO `products` VALUES ('161', 'Fennel', '7');
INSERT INTO `products` VALUES ('162', 'Ginger', '7');
INSERT INTO `products` VALUES ('163', 'Kamatsuna', '6');
INSERT INTO `products` VALUES ('164', 'Luffa gourd', '5');
INSERT INTO `products` VALUES ('165', 'Shell peas', '5');
INSERT INTO `products` VALUES ('166', 'Snake gourd', '5');
INSERT INTO `products` VALUES ('167', 'Snap peas', '5');
INSERT INTO `products` VALUES ('168', 'Sunburst squash', '5');
INSERT INTO `products` VALUES ('169', 'Super sugar pea', '5');
INSERT INTO `products` VALUES ('170', 'White radish', '5');
INSERT INTO `products` VALUES ('171', 'White yam', '5');
INSERT INTO `products` VALUES ('172', 'Napa', '6');
INSERT INTO `products` VALUES ('173', 'Colorado', '1');
INSERT INTO `products` VALUES ('174', 'Dinner plate dahlias', '1');
INSERT INTO `products` VALUES ('175', 'Ford hooked ruffled pastel', '1');
INSERT INTO `products` VALUES ('176', 'Kale', '1');
INSERT INTO `products` VALUES ('177', 'Mono Lisa lily', '1');
INSERT INTO `products` VALUES ('178', 'Painted Daisy', '1');
INSERT INTO `products` VALUES ('179', 'Red velvet', '1');
INSERT INTO `products` VALUES ('180', 'Russell', '1');
INSERT INTO `products` VALUES ('181', 'Russell lupine', '1');
INSERT INTO `products` VALUES ('182', 'Shasta daisy', '1');
INSERT INTO `products` VALUES ('183', 'Zinnia lilliput', '1');
INSERT INTO `products` VALUES ('184', 'Fresh and frozen seafood', '2');
INSERT INTO `products` VALUES ('185', 'Gumbo', '2');
INSERT INTO `products` VALUES ('186', 'Chowder', '2');

-- ----------------------------
-- Table structure for `producttypes`
-- ----------------------------
DROP TABLE IF EXISTS `producttypes`;
CREATE TABLE `producttypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of producttypes
-- ----------------------------
INSERT INTO `producttypes` VALUES ('1', 'Flowers');
INSERT INTO `producttypes` VALUES ('2', 'Food');
INSERT INTO `producttypes` VALUES ('3', 'Fruit');
INSERT INTO `producttypes` VALUES ('4', 'Products');
INSERT INTO `producttypes` VALUES ('5', 'Tradional Vegetables');
INSERT INTO `producttypes` VALUES ('6', 'Asian Vegetables');
INSERT INTO `producttypes` VALUES ('7', 'Spices');

-- ----------------------------
-- Table structure for `product_types`
-- ----------------------------
DROP TABLE IF EXISTS `product_types`;
CREATE TABLE `product_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_types
-- ----------------------------

-- ----------------------------
-- Table structure for `product_vendors`
-- ----------------------------
DROP TABLE IF EXISTS `product_vendors`;
CREATE TABLE `product_vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=313 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_vendors
-- ----------------------------
INSERT INTO `product_vendors` VALUES ('1', '1', '1');
INSERT INTO `product_vendors` VALUES ('2', '1', '2');
INSERT INTO `product_vendors` VALUES ('3', '1', '3');
INSERT INTO `product_vendors` VALUES ('4', '2', '4');
INSERT INTO `product_vendors` VALUES ('5', '2', '5');
INSERT INTO `product_vendors` VALUES ('6', '3', '6');
INSERT INTO `product_vendors` VALUES ('7', '3', '7');
INSERT INTO `product_vendors` VALUES ('68', '4', '21');
INSERT INTO `product_vendors` VALUES ('9', '4', '9');
INSERT INTO `product_vendors` VALUES ('10', '5', '8');
INSERT INTO `product_vendors` VALUES ('11', '5', '10');
INSERT INTO `product_vendors` VALUES ('12', '5', '11');
INSERT INTO `product_vendors` VALUES ('13', '5', '12');
INSERT INTO `product_vendors` VALUES ('14', '5', '13');
INSERT INTO `product_vendors` VALUES ('15', '6', '14');
INSERT INTO `product_vendors` VALUES ('16', '7', '9');
INSERT INTO `product_vendors` VALUES ('17', '7', '24');
INSERT INTO `product_vendors` VALUES ('18', '7', '25');
INSERT INTO `product_vendors` VALUES ('19', '7', '26');
INSERT INTO `product_vendors` VALUES ('20', '7', '27');
INSERT INTO `product_vendors` VALUES ('21', '7', '28');
INSERT INTO `product_vendors` VALUES ('22', '7', '29');
INSERT INTO `product_vendors` VALUES ('23', '7', '30');
INSERT INTO `product_vendors` VALUES ('86', '8', '73');
INSERT INTO `product_vendors` VALUES ('87', '8', '74');
INSERT INTO `product_vendors` VALUES ('26', '9', '31');
INSERT INTO `product_vendors` VALUES ('27', '9', '32');
INSERT INTO `product_vendors` VALUES ('28', '9', '33');
INSERT INTO `product_vendors` VALUES ('29', '9', '8');
INSERT INTO `product_vendors` VALUES ('30', '9', '34');
INSERT INTO `product_vendors` VALUES ('31', '9', '35');
INSERT INTO `product_vendors` VALUES ('32', '10', '36');
INSERT INTO `product_vendors` VALUES ('33', '10', '37');
INSERT INTO `product_vendors` VALUES ('34', '10', '38');
INSERT INTO `product_vendors` VALUES ('35', '10', '39');
INSERT INTO `product_vendors` VALUES ('36', '10', '40');
INSERT INTO `product_vendors` VALUES ('37', '10', '41');
INSERT INTO `product_vendors` VALUES ('38', '10', '34');
INSERT INTO `product_vendors` VALUES ('39', '11', '50');
INSERT INTO `product_vendors` VALUES ('40', '11', '51');
INSERT INTO `product_vendors` VALUES ('41', '11', '52');
INSERT INTO `product_vendors` VALUES ('42', '11', '8');
INSERT INTO `product_vendors` VALUES ('43', '11', '53');
INSERT INTO `product_vendors` VALUES ('44', '12', '54');
INSERT INTO `product_vendors` VALUES ('45', '12', '9');
INSERT INTO `product_vendors` VALUES ('46', '12', '53');
INSERT INTO `product_vendors` VALUES ('47', '12', '49');
INSERT INTO `product_vendors` VALUES ('48', '12', '13');
INSERT INTO `product_vendors` VALUES ('49', '12', '26');
INSERT INTO `product_vendors` VALUES ('50', '12', '55');
INSERT INTO `product_vendors` VALUES ('51', '12', '23');
INSERT INTO `product_vendors` VALUES ('52', '12', '25');
INSERT INTO `product_vendors` VALUES ('53', '12', '29');
INSERT INTO `product_vendors` VALUES ('56', '14', '53');
INSERT INTO `product_vendors` VALUES ('57', '14', '56');
INSERT INTO `product_vendors` VALUES ('58', '14', '57');
INSERT INTO `product_vendors` VALUES ('59', '14', '58');
INSERT INTO `product_vendors` VALUES ('60', '14', '59');
INSERT INTO `product_vendors` VALUES ('61', '14', '60');
INSERT INTO `product_vendors` VALUES ('62', '14', '61');
INSERT INTO `product_vendors` VALUES ('63', '13', '62');
INSERT INTO `product_vendors` VALUES ('64', '13', '63');
INSERT INTO `product_vendors` VALUES ('65', '13', '64');
INSERT INTO `product_vendors` VALUES ('66', '13', '65');
INSERT INTO `product_vendors` VALUES ('67', '13', '66');
INSERT INTO `product_vendors` VALUES ('69', '4', '22');
INSERT INTO `product_vendors` VALUES ('70', '4', '19');
INSERT INTO `product_vendors` VALUES ('71', '4', '67');
INSERT INTO `product_vendors` VALUES ('72', '4', '44');
INSERT INTO `product_vendors` VALUES ('73', '4', '68');
INSERT INTO `product_vendors` VALUES ('74', '4', '69');
INSERT INTO `product_vendors` VALUES ('75', '4', '47');
INSERT INTO `product_vendors` VALUES ('76', '4', '49');
INSERT INTO `product_vendors` VALUES ('77', '4', '53');
INSERT INTO `product_vendors` VALUES ('78', '4', '70');
INSERT INTO `product_vendors` VALUES ('79', '4', '45');
INSERT INTO `product_vendors` VALUES ('80', '4', '15');
INSERT INTO `product_vendors` VALUES ('81', '4', '13');
INSERT INTO `product_vendors` VALUES ('82', '4', '71');
INSERT INTO `product_vendors` VALUES ('83', '4', '72');
INSERT INTO `product_vendors` VALUES ('84', '4', '29');
INSERT INTO `product_vendors` VALUES ('85', '4', '26');
INSERT INTO `product_vendors` VALUES ('88', '8', '75');
INSERT INTO `product_vendors` VALUES ('89', '8', '76');
INSERT INTO `product_vendors` VALUES ('90', '8', '77');
INSERT INTO `product_vendors` VALUES ('91', '8', '78');
INSERT INTO `product_vendors` VALUES ('92', '8', '79');
INSERT INTO `product_vendors` VALUES ('93', '8', '80');
INSERT INTO `product_vendors` VALUES ('94', '8', '81');
INSERT INTO `product_vendors` VALUES ('95', '8', '82');
INSERT INTO `product_vendors` VALUES ('96', '8', '83');
INSERT INTO `product_vendors` VALUES ('97', '8', '84');
INSERT INTO `product_vendors` VALUES ('98', '8', '85');
INSERT INTO `product_vendors` VALUES ('99', '8', '86');
INSERT INTO `product_vendors` VALUES ('100', '8', '87');
INSERT INTO `product_vendors` VALUES ('101', '8', '88');
INSERT INTO `product_vendors` VALUES ('102', '8', '44');
INSERT INTO `product_vendors` VALUES ('103', '8', '45');
INSERT INTO `product_vendors` VALUES ('104', '8', '69');
INSERT INTO `product_vendors` VALUES ('105', '8', '89');
INSERT INTO `product_vendors` VALUES ('106', '8', '90');
INSERT INTO `product_vendors` VALUES ('107', '8', '91');
INSERT INTO `product_vendors` VALUES ('108', '8', '92');
INSERT INTO `product_vendors` VALUES ('109', '8', '93');
INSERT INTO `product_vendors` VALUES ('110', '8', '94');
INSERT INTO `product_vendors` VALUES ('111', '8', '95');
INSERT INTO `product_vendors` VALUES ('112', '8', '96');
INSERT INTO `product_vendors` VALUES ('113', '8', '97');
INSERT INTO `product_vendors` VALUES ('114', '8', '98');
INSERT INTO `product_vendors` VALUES ('115', '8', '99');
INSERT INTO `product_vendors` VALUES ('116', '8', '100');
INSERT INTO `product_vendors` VALUES ('117', '8', '101');
INSERT INTO `product_vendors` VALUES ('118', '8', '102');
INSERT INTO `product_vendors` VALUES ('119', '8', '103');
INSERT INTO `product_vendors` VALUES ('120', '8', '104');
INSERT INTO `product_vendors` VALUES ('121', '8', '67');
INSERT INTO `product_vendors` VALUES ('122', '8', '19');
INSERT INTO `product_vendors` VALUES ('123', '8', '21');
INSERT INTO `product_vendors` VALUES ('124', '8', '46');
INSERT INTO `product_vendors` VALUES ('125', '8', '27');
INSERT INTO `product_vendors` VALUES ('126', '8', '105');
INSERT INTO `product_vendors` VALUES ('127', '8', '22');
INSERT INTO `product_vendors` VALUES ('128', '8', '28');
INSERT INTO `product_vendors` VALUES ('129', '8', '15');
INSERT INTO `product_vendors` VALUES ('130', '8', '106');
INSERT INTO `product_vendors` VALUES ('131', '8', '42');
INSERT INTO `product_vendors` VALUES ('132', '8', '107');
INSERT INTO `product_vendors` VALUES ('133', '8', '72');
INSERT INTO `product_vendors` VALUES ('134', '8', '108');
INSERT INTO `product_vendors` VALUES ('135', '8', '71');
INSERT INTO `product_vendors` VALUES ('136', '8', '109');
INSERT INTO `product_vendors` VALUES ('137', '8', '110');
INSERT INTO `product_vendors` VALUES ('138', '8', '29');
INSERT INTO `product_vendors` VALUES ('139', '8', '111');
INSERT INTO `product_vendors` VALUES ('140', '8', '17');
INSERT INTO `product_vendors` VALUES ('141', '8', '23');
INSERT INTO `product_vendors` VALUES ('142', '8', '30');
INSERT INTO `product_vendors` VALUES ('143', '8', '70');
INSERT INTO `product_vendors` VALUES ('144', '8', '53');
INSERT INTO `product_vendors` VALUES ('145', '8', '47');
INSERT INTO `product_vendors` VALUES ('146', '8', '112');
INSERT INTO `product_vendors` VALUES ('147', '8', '26');
INSERT INTO `product_vendors` VALUES ('148', '8', '13');
INSERT INTO `product_vendors` VALUES ('149', '8', '113');
INSERT INTO `product_vendors` VALUES ('150', '8', '114');
INSERT INTO `product_vendors` VALUES ('151', '8', '115');
INSERT INTO `product_vendors` VALUES ('152', '8', '116');
INSERT INTO `product_vendors` VALUES ('153', '8', '117');
INSERT INTO `product_vendors` VALUES ('154', '8', '118');
INSERT INTO `product_vendors` VALUES ('155', '8', '119');
INSERT INTO `product_vendors` VALUES ('156', '8', '120');
INSERT INTO `product_vendors` VALUES ('157', '8', '121');
INSERT INTO `product_vendors` VALUES ('158', '8', '122');
INSERT INTO `product_vendors` VALUES ('159', '8', '123');
INSERT INTO `product_vendors` VALUES ('160', '8', '124');
INSERT INTO `product_vendors` VALUES ('161', '8', '125');
INSERT INTO `product_vendors` VALUES ('162', '8', '126');
INSERT INTO `product_vendors` VALUES ('163', '8', '127');
INSERT INTO `product_vendors` VALUES ('164', '8', '128');
INSERT INTO `product_vendors` VALUES ('165', '8', '129');
INSERT INTO `product_vendors` VALUES ('166', '8', '130');
INSERT INTO `product_vendors` VALUES ('167', '8', '131');
INSERT INTO `product_vendors` VALUES ('168', '8', '132');
INSERT INTO `product_vendors` VALUES ('169', '8', '133');
INSERT INTO `product_vendors` VALUES ('170', '8', '134');
INSERT INTO `product_vendors` VALUES ('171', '8', '135');
INSERT INTO `product_vendors` VALUES ('172', '8', '136');
INSERT INTO `product_vendors` VALUES ('173', '8', '137');
INSERT INTO `product_vendors` VALUES ('174', '2', '138');
INSERT INTO `product_vendors` VALUES ('175', '2', '139');
INSERT INTO `product_vendors` VALUES ('176', '2', '140');
INSERT INTO `product_vendors` VALUES ('177', '1', '141');
INSERT INTO `product_vendors` VALUES ('178', '1', '142');
INSERT INTO `product_vendors` VALUES ('179', '10', '143');
INSERT INTO `product_vendors` VALUES ('180', '10', '144');
INSERT INTO `product_vendors` VALUES ('181', '7', '108');
INSERT INTO `product_vendors` VALUES ('182', '7', '15');
INSERT INTO `product_vendors` VALUES ('183', '16', '15');
INSERT INTO `product_vendors` VALUES ('184', '16', '112');
INSERT INTO `product_vendors` VALUES ('185', '16', '20');
INSERT INTO `product_vendors` VALUES ('186', '16', '145');
INSERT INTO `product_vendors` VALUES ('187', '16', '13');
INSERT INTO `product_vendors` VALUES ('188', '16', '18');
INSERT INTO `product_vendors` VALUES ('189', '16', '19');
INSERT INTO `product_vendors` VALUES ('190', '16', '21');
INSERT INTO `product_vendors` VALUES ('191', '16', '22');
INSERT INTO `product_vendors` VALUES ('192', '16', '23');
INSERT INTO `product_vendors` VALUES ('193', '16', '146');
INSERT INTO `product_vendors` VALUES ('194', '17', '147');
INSERT INTO `product_vendors` VALUES ('195', '17', '67');
INSERT INTO `product_vendors` VALUES ('196', '17', '137');
INSERT INTO `product_vendors` VALUES ('197', '17', '148');
INSERT INTO `product_vendors` VALUES ('198', '17', '43');
INSERT INTO `product_vendors` VALUES ('199', '17', '45');
INSERT INTO `product_vendors` VALUES ('200', '17', '149');
INSERT INTO `product_vendors` VALUES ('201', '17', '150');
INSERT INTO `product_vendors` VALUES ('202', '17', '151');
INSERT INTO `product_vendors` VALUES ('203', '17', '48');
INSERT INTO `product_vendors` VALUES ('204', '17', '152');
INSERT INTO `product_vendors` VALUES ('205', '17', '53');
INSERT INTO `product_vendors` VALUES ('206', '12', '108');
INSERT INTO `product_vendors` VALUES ('207', '12', '114');
INSERT INTO `product_vendors` VALUES ('208', '12', '19');
INSERT INTO `product_vendors` VALUES ('209', '12', '112');
INSERT INTO `product_vendors` VALUES ('210', '12', '115');
INSERT INTO `product_vendors` VALUES ('211', '12', '17');
INSERT INTO `product_vendors` VALUES ('212', '12', '15');
INSERT INTO `product_vendors` VALUES ('213', '12', '30');
INSERT INTO `product_vendors` VALUES ('214', '12', '107');
INSERT INTO `product_vendors` VALUES ('215', '12', '27');
INSERT INTO `product_vendors` VALUES ('216', '12', '28');
INSERT INTO `product_vendors` VALUES ('217', '12', '109');
INSERT INTO `product_vendors` VALUES ('218', '12', '153');
INSERT INTO `product_vendors` VALUES ('219', '12', '70');
INSERT INTO `product_vendors` VALUES ('220', '12', '21');
INSERT INTO `product_vendors` VALUES ('221', '12', '154');
INSERT INTO `product_vendors` VALUES ('222', '12', '56');
INSERT INTO `product_vendors` VALUES ('223', '18', '21');
INSERT INTO `product_vendors` VALUES ('224', '18', '22');
INSERT INTO `product_vendors` VALUES ('225', '18', '29');
INSERT INTO `product_vendors` VALUES ('226', '18', '19');
INSERT INTO `product_vendors` VALUES ('227', '18', '42');
INSERT INTO `product_vendors` VALUES ('228', '18', '16');
INSERT INTO `product_vendors` VALUES ('229', '18', '43');
INSERT INTO `product_vendors` VALUES ('230', '18', '44');
INSERT INTO `product_vendors` VALUES ('231', '18', '45');
INSERT INTO `product_vendors` VALUES ('232', '18', '46');
INSERT INTO `product_vendors` VALUES ('233', '18', '108');
INSERT INTO `product_vendors` VALUES ('234', '18', '155');
INSERT INTO `product_vendors` VALUES ('235', '18', '47');
INSERT INTO `product_vendors` VALUES ('236', '18', '9');
INSERT INTO `product_vendors` VALUES ('237', '18', '137');
INSERT INTO `product_vendors` VALUES ('238', '18', '74');
INSERT INTO `product_vendors` VALUES ('239', '18', '71');
INSERT INTO `product_vendors` VALUES ('240', '18', '114');
INSERT INTO `product_vendors` VALUES ('241', '18', '105');
INSERT INTO `product_vendors` VALUES ('242', '18', '69');
INSERT INTO `product_vendors` VALUES ('243', '18', '49');
INSERT INTO `product_vendors` VALUES ('244', '19', '156');
INSERT INTO `product_vendors` VALUES ('245', '19', '67');
INSERT INTO `product_vendors` VALUES ('246', '19', '46');
INSERT INTO `product_vendors` VALUES ('247', '19', '43');
INSERT INTO `product_vendors` VALUES ('248', '19', '21');
INSERT INTO `product_vendors` VALUES ('249', '19', '17');
INSERT INTO `product_vendors` VALUES ('250', '19', '76');
INSERT INTO `product_vendors` VALUES ('251', '19', '27');
INSERT INTO `product_vendors` VALUES ('252', '19', '157');
INSERT INTO `product_vendors` VALUES ('253', '19', '158');
INSERT INTO `product_vendors` VALUES ('254', '19', '159');
INSERT INTO `product_vendors` VALUES ('255', '19', '22');
INSERT INTO `product_vendors` VALUES ('256', '19', '28');
INSERT INTO `product_vendors` VALUES ('257', '19', '150');
INSERT INTO `product_vendors` VALUES ('258', '19', '79');
INSERT INTO `product_vendors` VALUES ('259', '19', '160');
INSERT INTO `product_vendors` VALUES ('260', '19', '44');
INSERT INTO `product_vendors` VALUES ('261', '19', '106');
INSERT INTO `product_vendors` VALUES ('262', '19', '161');
INSERT INTO `product_vendors` VALUES ('263', '19', '162');
INSERT INTO `product_vendors` VALUES ('264', '19', '19');
INSERT INTO `product_vendors` VALUES ('265', '19', '72');
INSERT INTO `product_vendors` VALUES ('266', '19', '163');
INSERT INTO `product_vendors` VALUES ('267', '19', '108');
INSERT INTO `product_vendors` VALUES ('268', '19', '71');
INSERT INTO `product_vendors` VALUES ('269', '19', '164');
INSERT INTO `product_vendors` VALUES ('270', '19', '80');
INSERT INTO `product_vendors` VALUES ('271', '19', '110');
INSERT INTO `product_vendors` VALUES ('272', '19', '29');
INSERT INTO `product_vendors` VALUES ('273', '19', '11');
INSERT INTO `product_vendors` VALUES ('274', '19', '23');
INSERT INTO `product_vendors` VALUES ('275', '19', '70');
INSERT INTO `product_vendors` VALUES ('276', '19', '53');
INSERT INTO `product_vendors` VALUES ('277', '19', '165');
INSERT INTO `product_vendors` VALUES ('278', '19', '166');
INSERT INTO `product_vendors` VALUES ('279', '19', '167');
INSERT INTO `product_vendors` VALUES ('280', '19', '117');
INSERT INTO `product_vendors` VALUES ('281', '19', '16');
INSERT INTO `product_vendors` VALUES ('282', '19', '49');
INSERT INTO `product_vendors` VALUES ('283', '19', '168');
INSERT INTO `product_vendors` VALUES ('284', '19', '169');
INSERT INTO `product_vendors` VALUES ('285', '19', '13');
INSERT INTO `product_vendors` VALUES ('286', '19', '170');
INSERT INTO `product_vendors` VALUES ('287', '19', '171');
INSERT INTO `product_vendors` VALUES ('288', '19', '116');
INSERT INTO `product_vendors` VALUES ('289', '19', '15');
INSERT INTO `product_vendors` VALUES ('290', '19', '172');
INSERT INTO `product_vendors` VALUES ('291', '19', '47');
INSERT INTO `product_vendors` VALUES ('292', '19', '118');
INSERT INTO `product_vendors` VALUES ('293', '19', '120');
INSERT INTO `product_vendors` VALUES ('294', '19', '173');
INSERT INTO `product_vendors` VALUES ('295', '19', '124');
INSERT INTO `product_vendors` VALUES ('296', '19', '174');
INSERT INTO `product_vendors` VALUES ('297', '19', '175');
INSERT INTO `product_vendors` VALUES ('298', '19', '176');
INSERT INTO `product_vendors` VALUES ('299', '19', '131');
INSERT INTO `product_vendors` VALUES ('300', '19', '177');
INSERT INTO `product_vendors` VALUES ('301', '19', '178');
INSERT INTO `product_vendors` VALUES ('302', '19', '132');
INSERT INTO `product_vendors` VALUES ('303', '19', '179');
INSERT INTO `product_vendors` VALUES ('304', '19', '180');
INSERT INTO `product_vendors` VALUES ('305', '19', '181');
INSERT INTO `product_vendors` VALUES ('306', '19', '182');
INSERT INTO `product_vendors` VALUES ('307', '19', '148');
INSERT INTO `product_vendors` VALUES ('308', '19', '136');
INSERT INTO `product_vendors` VALUES ('309', '19', '183');
INSERT INTO `product_vendors` VALUES ('310', '20', '185');
INSERT INTO `product_vendors` VALUES ('311', '20', '186');
INSERT INTO `product_vendors` VALUES ('312', '20', '184');

-- ----------------------------
-- Table structure for `schedules`
-- ----------------------------
DROP TABLE IF EXISTS `schedules`;
CREATE TABLE `schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `short` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of schedules
-- ----------------------------
INSERT INTO `schedules` VALUES ('1', 'Full Season: June 1 - October 12', 'Full');
INSERT INTO `schedules` VALUES ('2', 'First Half of Season: June 1 - August 3', 'First Half');
INSERT INTO `schedules` VALUES ('3', 'Second Half of Season: August 10 - October 12', 'Second Half');

-- ----------------------------
-- Table structure for `sponsors`
-- ----------------------------
DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE `sponsors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sponsors
-- ----------------------------
INSERT INTO `sponsors` VALUES ('1', 'Veridian Homes', 'http://www.veridianhomes.com/', 'logo-veridian.png', '500.00');
INSERT INTO `sponsors` VALUES ('2', 'McClellan Park Neighborhood Association', 'http://mympna.org/', 'logo-mpna.png', '75.00');
INSERT INTO `sponsors` VALUES ('3', 'Heritage Heights Neighborhood Association', '', '', '75.00');
INSERT INTO `sponsors` VALUES ('4', 'A-1 Furniture', 'http://a1furniture.com/', 'logo-a1furniture.png', '50.00');
INSERT INTO `sponsors` VALUES ('5', 'Grandview Commons Condominium Association', '', 'logo-grandview-condos.jpg', '75.00');
INSERT INTO `sponsors` VALUES ('6', 'Heritage Bakery and Cafe', 'http://www.heritagebakeryandcafe.com/', 'logo-heritage-bakery.png', '50.00');
INSERT INTO `sponsors` VALUES ('9', 'Summit Credit Union', 'http://www.summitcreditunion.com/', 'logo-summit.gif', '250.00');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) DEFAULT NULL,
  `password` char(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'kris', '72b67ed395879a0c97902b1f7f738186dba406bd');

-- ----------------------------
-- Table structure for `vendors`
-- ----------------------------
DROP TABLE IF EXISTS `vendors`;
CREATE TABLE `vendors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `schedule_id` smallint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vendors
-- ----------------------------
INSERT INTO `vendors` VALUES ('1', 'Chippys Kettle Corn', 'Beaver Dam, WI', 'http://www.chippyskettlecorn.com/', '1', '1');
INSERT INTO `vendors` VALUES ('2', 'Farmer John\'s Cheese', 'Dodgeville, WI', 'http://www.farmerjohnsstore.com/', '1', '1');
INSERT INTO `vendors` VALUES ('3', 'Inside Out Wellness', 'Madison, WI', 'http://myinsideoutwellness.com/', '2', '0');
INSERT INTO `vendors` VALUES ('4', 'Kayoua', 'Sun Prairie, WI', '', '2', '1');
INSERT INTO `vendors` VALUES ('5', 'Krueger', 'Waterloo, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('6', 'La Fortuna Pizza', 'Madison, WI', 'http://lafortunapizza.com/', '3', '1');
INSERT INTO `vendors` VALUES ('7', 'Nehmer Produce and Greenhouse', 'Columbus, WI', 'http://www.savorwisconsin.com/AllListings/detail.asp?recordid=2163&table=producer', '1', '1');
INSERT INTO `vendors` VALUES ('8', 'Nina and Family Garden', 'Madison, WI', '', '2', '1');
INSERT INTO `vendors` VALUES ('9', 'Reeson Family Farm', 'Loganville, WI', 'http://www.savorwisconsin.com/AllListings/detail.asp?recordid=2118&table=producer', '1', '1');
INSERT INTO `vendors` VALUES ('10', 'Riverbend Farm Bakery', 'Hillsboro, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('11', 'Tom and Carries Place', 'Fort Atkinson, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('12', 'Kidd Gardens', 'Waterloo, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('13', 'Ruegsegger Farms', 'Blanchardville, WI', 'http://www.naturalmeats.org/', '1', '1');
INSERT INTO `vendors` VALUES ('14', 'Offbeat Acres', 'Cottage Grove, WI', 'http://offbeatacres.com/', '3', '1');
INSERT INTO `vendors` VALUES ('15', 'Fox Line City Farm', 'Baraboo, WI', '', '1', '0');
INSERT INTO `vendors` VALUES ('16', 'Los Abuelos Farley Farm LLC', 'Madison, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('17', 'Beela Farm', 'McFarland, WI', '', '2', '1');
INSERT INTO `vendors` VALUES ('18', 'Thors', 'Madison, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('19', 'Xiong Farm', 'Sun Prairie, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('20', 'South Padre Seafood', 'Janesville, WI', 'http://www.southpadreseafood.com/', '2', '1');
