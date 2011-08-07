/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : cake1

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2011-07-10 16:04:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `contents`
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(50) NOT NULL,
  `val` varchar(10000) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contents
-- ----------------------------
INSERT INTO `contents` VALUES ('1', 'index', 'This is the home page', '2011-04-12 19:33:01', '2011-04-12 19:33:15');

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `product_type` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=225 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Aged cheddar cheese', '2');
INSERT INTO `products` VALUES ('2', 'Asian squash', '6');
INSERT INTO `products` VALUES ('3', 'Asparagus', '6');
INSERT INTO `products` VALUES ('4', 'Autumn cup sweet', '6');
INSERT INTO `products` VALUES ('5', 'Baby green mustard', '6');
INSERT INTO `products` VALUES ('6', 'Bacon', '2');
INSERT INTO `products` VALUES ('7', 'Baked goods', '2');
INSERT INTO `products` VALUES ('8', 'Basil', '6');
INSERT INTO `products` VALUES ('9', 'Beans', '6');
INSERT INTO `products` VALUES ('10', 'Beauregard', '6');
INSERT INTO `products` VALUES ('11', 'Bee\'s wax products', '5');
INSERT INTO `products` VALUES ('12', 'Beef', '2');
INSERT INTO `products` VALUES ('13', 'Beef sausage', '2');
INSERT INTO `products` VALUES ('14', 'Beets', '6');
INSERT INTO `products` VALUES ('15', 'Berries', '3');
INSERT INTO `products` VALUES ('16', 'Bitter melon', '3');
INSERT INTO `products` VALUES ('17', 'Bitter melon leaf', '3');
INSERT INTO `products` VALUES ('18', 'Blend of kettle, caramel and cheddar popcorn', '2');
INSERT INTO `products` VALUES ('19', 'Bokchoy', '6');
INSERT INTO `products` VALUES ('20', 'Brats', '2');
INSERT INTO `products` VALUES ('21', 'Breads', '2');
INSERT INTO `products` VALUES ('22', 'Broccoli', '6');
INSERT INTO `products` VALUES ('23', 'Brown eggs', '2');
INSERT INTO `products` VALUES ('24', 'Brussel sprouts', '6');
INSERT INTO `products` VALUES ('25', 'Brussels', '6');
INSERT INTO `products` VALUES ('26', 'Butterkase cheese', '2');
INSERT INTO `products` VALUES ('27', 'Cabbage', '6');
INSERT INTO `products` VALUES ('28', 'Cakes', '2');
INSERT INTO `products` VALUES ('29', 'Calypso', '1');
INSERT INTO `products` VALUES ('30', 'Candles', '5');
INSERT INTO `products` VALUES ('31', 'Caramel glazed kettle corn', '2');
INSERT INTO `products` VALUES ('32', 'Carrots', '6');
INSERT INTO `products` VALUES ('33', 'Cat toys', '4');
INSERT INTO `products` VALUES ('34', 'Cauliflower', '6');
INSERT INTO `products` VALUES ('35', 'Chard', '6');
INSERT INTO `products` VALUES ('36', 'Chayote', '6');
INSERT INTO `products` VALUES ('37', 'Chayote Leaf', '6');
INSERT INTO `products` VALUES ('38', 'Cheddar cheese', '2');
INSERT INTO `products` VALUES ('39', 'Cheddar cheese corn', '2');
INSERT INTO `products` VALUES ('40', 'Chicken', '2');
INSERT INTO `products` VALUES ('41', 'Chili Peppers', '6');
INSERT INTO `products` VALUES ('42', 'Chinese broccoli', '6');
INSERT INTO `products` VALUES ('43', 'Chinese okra', '6');
INSERT INTO `products` VALUES ('44', 'Chowder', '2');
INSERT INTO `products` VALUES ('45', 'Cilantro', '6');
INSERT INTO `products` VALUES ('46', 'Coffee cakes', '2');
INSERT INTO `products` VALUES ('47', 'Cookies', '2');
INSERT INTO `products` VALUES ('48', 'Corn', '6');
INSERT INTO `products` VALUES ('49', 'Cucumber', '6');
INSERT INTO `products` VALUES ('50', 'Cucumbers', '6');
INSERT INTO `products` VALUES ('51', 'Cut flowers', '1');
INSERT INTO `products` VALUES ('52', 'Dog and cat treats', '4');
INSERT INTO `products` VALUES ('53', 'Dog coats and dresses', '4');
INSERT INTO `products` VALUES ('54', 'Dry flowers', '6');
INSERT INTO `products` VALUES ('55', 'Eggplant', '6');
INSERT INTO `products` VALUES ('56', 'Eggs', '2');
INSERT INTO `products` VALUES ('57', 'Elephant stalk', '6');
INSERT INTO `products` VALUES ('58', 'Expresso drinks', '2');
INSERT INTO `products` VALUES ('59', 'Fair trade organic coffee', '2');
INSERT INTO `products` VALUES ('60', 'Fall squash', '6');
INSERT INTO `products` VALUES ('61', 'Farmers cheese', '2');
INSERT INTO `products` VALUES ('62', 'Fava Beans', '6');
INSERT INTO `products` VALUES ('63', 'Fennel', '6');
INSERT INTO `products` VALUES ('64', 'Flowers', '1');
INSERT INTO `products` VALUES ('65', 'Flying Saucer', '6');
INSERT INTO `products` VALUES ('66', 'Fresh and frozen seafood', '2');
INSERT INTO `products` VALUES ('67', 'Fresh cheese curds', '2');
INSERT INTO `products` VALUES ('68', 'Fresh cut flowers', '1');
INSERT INTO `products` VALUES ('69', 'Fresh flowers', '1');
INSERT INTO `products` VALUES ('70', 'Fresh popped on-site kettle corn', '2');
INSERT INTO `products` VALUES ('71', 'Fresh squeezed lemonade', '2');
INSERT INTO `products` VALUES ('72', 'Fruit smoothies', '2');
INSERT INTO `products` VALUES ('73', 'Fully array of cheeses', '2');
INSERT INTO `products` VALUES ('74', 'Garlic', '2');
INSERT INTO `products` VALUES ('75', 'Garlic powder', '6');
INSERT INTO `products` VALUES ('76', 'Garlic scrapes', '6');
INSERT INTO `products` VALUES ('77', 'Gluten free flax cracker', '2');
INSERT INTO `products` VALUES ('78', 'Gluten free granola', '2');
INSERT INTO `products` VALUES ('79', 'Goat', '2');
INSERT INTO `products` VALUES ('80', 'Golden raspberries', '3');
INSERT INTO `products` VALUES ('81', 'Gourds', '6');
INSERT INTO `products` VALUES ('82', 'Granola', '2');
INSERT INTO `products` VALUES ('83', 'Green bean', '6');
INSERT INTO `products` VALUES ('84', 'Green beans', '6');
INSERT INTO `products` VALUES ('85', 'Green malabar spinach', '6');
INSERT INTO `products` VALUES ('86', 'Green peppers', '6');
INSERT INTO `products` VALUES ('87', 'Greens', '6');
INSERT INTO `products` VALUES ('88', 'Gumbo', '2');
INSERT INTO `products` VALUES ('89', 'Herbs', '6');
INSERT INTO `products` VALUES ('90', 'Hers', '6');
INSERT INTO `products` VALUES ('91', 'Hmong corn', '6');
INSERT INTO `products` VALUES ('92', 'Hmong crafts', '5');
INSERT INTO `products` VALUES ('93', 'Hmong cucumber', '6');
INSERT INTO `products` VALUES ('94', 'Hmong pumpkin', '6');
INSERT INTO `products` VALUES ('95', 'Hmong pumpkin leaf', '6');
INSERT INTO `products` VALUES ('96', 'Homemade noodles', '2');
INSERT INTO `products` VALUES ('97', 'Honey', '2');
INSERT INTO `products` VALUES ('98', 'Honey Bear', '6');
INSERT INTO `products` VALUES ('99', 'Honey rock', '6');
INSERT INTO `products` VALUES ('100', 'Horseradish', '6');
INSERT INTO `products` VALUES ('101', 'Hot pepper', '6');
INSERT INTO `products` VALUES ('102', 'Hot peppers', '6');
INSERT INTO `products` VALUES ('103', 'Indian eggplant', '6');
INSERT INTO `products` VALUES ('104', 'Jams and jellies', '2');
INSERT INTO `products` VALUES ('105', 'Japanese cucumber', '6');
INSERT INTO `products` VALUES ('106', 'Jicama', '6');
INSERT INTO `products` VALUES ('107', 'Kale', '6');
INSERT INTO `products` VALUES ('108', 'Kohlrabi', '6');
INSERT INTO `products` VALUES ('109', 'Leeks', '6');
INSERT INTO `products` VALUES ('110', 'Lemon grass', '6');
INSERT INTO `products` VALUES ('111', 'Lettuce', '6');
INSERT INTO `products` VALUES ('112', 'Malabar spinach', '6');
INSERT INTO `products` VALUES ('113', 'Maple syrup', '2');
INSERT INTO `products` VALUES ('114', 'Melons', '3');
INSERT INTO `products` VALUES ('115', 'Metro PMR butternut', '6');
INSERT INTO `products` VALUES ('116', 'Mexican Herbs', '6');
INSERT INTO `products` VALUES ('117', 'Mint', '6');
INSERT INTO `products` VALUES ('118', 'Mozzarella cheese', '2');
INSERT INTO `products` VALUES ('119', 'Mums', '1');
INSERT INTO `products` VALUES ('120', 'Mushrooms', '6');
INSERT INTO `products` VALUES ('121', 'Muskmelon', '3');
INSERT INTO `products` VALUES ('122', 'Mustard green', '6');
INSERT INTO `products` VALUES ('123', 'Okra', '6');
INSERT INTO `products` VALUES ('124', 'Okra leaf', '6');
INSERT INTO `products` VALUES ('125', 'Onion', '6');
INSERT INTO `products` VALUES ('126', 'Opo', '6');
INSERT INTO `products` VALUES ('127', 'Organic brown eggs', '2');
INSERT INTO `products` VALUES ('128', 'Organic vegetables', '6');
INSERT INTO `products` VALUES ('129', 'Ornanmental', '6');
INSERT INTO `products` VALUES ('130', 'Other flowering plants', '1');
INSERT INTO `products` VALUES ('131', 'Pac choy', '6');
INSERT INTO `products` VALUES ('132', 'Parsley', '6');
INSERT INTO `products` VALUES ('133', 'Pasta sauces', '2');
INSERT INTO `products` VALUES ('134', 'Pastries', '2');
INSERT INTO `products` VALUES ('135', 'Peanut', '2');
INSERT INTO `products` VALUES ('136', 'Pears', '3');
INSERT INTO `products` VALUES ('137', 'Peas', '6');
INSERT INTO `products` VALUES ('138', 'Peppers', '6');
INSERT INTO `products` VALUES ('139', 'Peter Pan', '6');
INSERT INTO `products` VALUES ('140', 'Phat boon', '6');
INSERT INTO `products` VALUES ('141', 'Pickle kermit', '6');
INSERT INTO `products` VALUES ('142', 'Pickles', '6');
INSERT INTO `products` VALUES ('143', 'Pies', '2');
INSERT INTO `products` VALUES ('144', 'Pizza', '2');
INSERT INTO `products` VALUES ('145', 'Plants', '1');
INSERT INTO `products` VALUES ('146', 'Pork', '2');
INSERT INTO `products` VALUES ('147', 'Pork sausage', '2');
INSERT INTO `products` VALUES ('148', 'Portable pet bowls', '4');
INSERT INTO `products` VALUES ('149', 'Potatoes', '6');
INSERT INTO `products` VALUES ('150', 'Potting mix', '1');
INSERT INTO `products` VALUES ('151', 'Poultry', '2');
INSERT INTO `products` VALUES ('152', 'Pound cakes', '2');
INSERT INTO `products` VALUES ('153', 'Preserves', '2');
INSERT INTO `products` VALUES ('154', 'Produce', '6');
INSERT INTO `products` VALUES ('155', 'Pumpkins', '6');
INSERT INTO `products` VALUES ('156', 'Quick breads', '2');
INSERT INTO `products` VALUES ('157', 'Radish', '6');
INSERT INTO `products` VALUES ('158', 'Radishes', '6');
INSERT INTO `products` VALUES ('159', 'Ram xwb kuab', '6');
INSERT INTO `products` VALUES ('160', 'Rama leaf', '6');
INSERT INTO `products` VALUES ('161', 'Rasberries', '3');
INSERT INTO `products` VALUES ('162', 'Raspberries', '3');
INSERT INTO `products` VALUES ('163', 'Rhubarb', '6');
INSERT INTO `products` VALUES ('164', 'Salsas', '2');
INSERT INTO `products` VALUES ('165', 'Sesame leaf', '6');
INSERT INTO `products` VALUES ('166', 'Shallots', '6');
INSERT INTO `products` VALUES ('167', 'Shortbread cakes', '2');
INSERT INTO `products` VALUES ('168', 'Snack sticks', '2');
INSERT INTO `products` VALUES ('169', 'Snake gourd', '6');
INSERT INTO `products` VALUES ('170', 'Snap peas', '6');
INSERT INTO `products` VALUES ('171', 'Snow peas', '6');
INSERT INTO `products` VALUES ('172', 'Soap', '5');
INSERT INTO `products` VALUES ('173', 'Soups', '2');
INSERT INTO `products` VALUES ('174', 'Spa products', '4');
INSERT INTO `products` VALUES ('175', 'Spinach', '6');
INSERT INTO `products` VALUES ('176', 'Spring raab', '6');
INSERT INTO `products` VALUES ('177', 'Squash', '6');
INSERT INTO `products` VALUES ('178', 'Squash flowers', '6');
INSERT INTO `products` VALUES ('179', 'Squash leaf', '6');
INSERT INTO `products` VALUES ('180', 'Strawberries', '3');
INSERT INTO `products` VALUES ('181', 'Sugar bon', '6');
INSERT INTO `products` VALUES ('182', 'Sugar snap', '6');
INSERT INTO `products` VALUES ('183', 'Summer squash', '6');
INSERT INTO `products` VALUES ('184', 'Sunburst', '6');
INSERT INTO `products` VALUES ('185', 'Sweet and Dill-licious salad dressing', '2');
INSERT INTO `products` VALUES ('186', 'Sweet and Lean salad dressing', '2');
INSERT INTO `products` VALUES ('187', 'Sweet and Savory salad dressing', '2');
INSERT INTO `products` VALUES ('188', 'Sweet and Sultry salad dressing', '2');
INSERT INTO `products` VALUES ('189', 'Sweet corn', '6');
INSERT INTO `products` VALUES ('190', 'Sweet pepper', '6');
INSERT INTO `products` VALUES ('191', 'Sweet potato leaf', '6');
INSERT INTO `products` VALUES ('192', 'Sweet rolls', '2');
INSERT INTO `products` VALUES ('193', 'Swiss chard', '6');
INSERT INTO `products` VALUES ('194', 'Tai Yu Choy', '6');
INSERT INTO `products` VALUES ('195', 'Tainong', '6');
INSERT INTO `products` VALUES ('196', 'Taub txaij', '6');
INSERT INTO `products` VALUES ('197', 'Teas', '2');
INSERT INTO `products` VALUES ('198', 'Thai basil', '6');
INSERT INTO `products` VALUES ('199', 'Thai eggplant', '6');
INSERT INTO `products` VALUES ('200', 'Tomatillos', '6');
INSERT INTO `products` VALUES ('201', 'Tomato juice', '2');
INSERT INTO `products` VALUES ('202', 'Tomato puree', '2');
INSERT INTO `products` VALUES ('203', 'Tomatoes', '6');
INSERT INTO `products` VALUES ('204', 'Turnips', '6');
INSERT INTO `products` VALUES ('205', 'Vegetable juice', '2');
INSERT INTO `products` VALUES ('206', 'Vegetables', '6');
INSERT INTO `products` VALUES ('207', 'Water spinach', '6');
INSERT INTO `products` VALUES ('208', 'Watercress', '6');
INSERT INTO `products` VALUES ('209', 'Watermelon', '3');
INSERT INTO `products` VALUES ('210', 'White yam', '6');
INSERT INTO `products` VALUES ('211', 'Wild blackberries', '3');
INSERT INTO `products` VALUES ('212', 'Winter melon', '6');
INSERT INTO `products` VALUES ('213', 'Winter squash', '6');
INSERT INTO `products` VALUES ('214', 'Yao Choy', '6');
INSERT INTO `products` VALUES ('215', 'Yellow beans', '6');
INSERT INTO `products` VALUES ('216', 'Yellow Crookneck', '6');
INSERT INTO `products` VALUES ('217', 'Yellow peppers', '6');
INSERT INTO `products` VALUES ('218', 'Zaub iab', '6');
INSERT INTO `products` VALUES ('219', 'Zaub pag', '6');
INSERT INTO `products` VALUES ('220', 'Zucchini', '6');
INSERT INTO `products` VALUES ('221', 'Kris product', '4');
INSERT INTO `products` VALUES ('222', 'Jim product Stormy', '4');
INSERT INTO `products` VALUES ('223', 'Zoey product', '3');
INSERT INTO `products` VALUES ('224', 'Domino meat', '2');

-- ----------------------------
-- Table structure for `producttypes`
-- ----------------------------
DROP TABLE IF EXISTS `producttypes`;
CREATE TABLE `producttypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of producttypes
-- ----------------------------
INSERT INTO `producttypes` VALUES ('1', 'Flowers');
INSERT INTO `producttypes` VALUES ('2', 'Food');
INSERT INTO `producttypes` VALUES ('3', 'Fruits');
INSERT INTO `producttypes` VALUES ('4', 'Pet Supplies');
INSERT INTO `producttypes` VALUES ('5', 'Products');
INSERT INTO `producttypes` VALUES ('6', 'Vegetables');

-- ----------------------------
-- Table structure for `product_types`
-- ----------------------------
DROP TABLE IF EXISTS `product_types`;
CREATE TABLE `product_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_types
-- ----------------------------
INSERT INTO `product_types` VALUES ('1', 'Flowers');
INSERT INTO `product_types` VALUES ('2', 'Food');
INSERT INTO `product_types` VALUES ('3', 'Fruits');
INSERT INTO `product_types` VALUES ('4', 'Pet Supplies');
INSERT INTO `product_types` VALUES ('5', 'Products');
INSERT INTO `product_types` VALUES ('6', 'Vegetables');

-- ----------------------------
-- Table structure for `product_vendors`
-- ----------------------------
DROP TABLE IF EXISTS `product_vendors`;
CREATE TABLE `product_vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=348 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_vendors
-- ----------------------------
INSERT INTO `product_vendors` VALUES ('1', '12', '2');
INSERT INTO `product_vendors` VALUES ('4', '12', '4');
INSERT INTO `product_vendors` VALUES ('5', '8', '5');
INSERT INTO `product_vendors` VALUES ('6', '7', '9');
INSERT INTO `product_vendors` VALUES ('7', '8', '9');
INSERT INTO `product_vendors` VALUES ('8', '10', '9');
INSERT INTO `product_vendors` VALUES ('9', '12', '10');
INSERT INTO `product_vendors` VALUES ('10', '11', '11');
INSERT INTO `product_vendors` VALUES ('11', '2', '12');
INSERT INTO `product_vendors` VALUES ('345', '8', '14');
INSERT INTO `product_vendors` VALUES ('13', '10', '14');
INSERT INTO `product_vendors` VALUES ('15', '8', '16');
INSERT INTO `product_vendors` VALUES ('16', '12', '16');
INSERT INTO `product_vendors` VALUES ('17', '8', '17');
INSERT INTO `product_vendors` VALUES ('18', '4', '18');
INSERT INTO `product_vendors` VALUES ('19', '10', '19');
INSERT INTO `product_vendors` VALUES ('20', '9', '21');
INSERT INTO `product_vendors` VALUES ('21', '8', '22');
INSERT INTO `product_vendors` VALUES ('22', '12', '22');
INSERT INTO `product_vendors` VALUES ('23', '8', '24');
INSERT INTO `product_vendors` VALUES ('24', '10', '24');
INSERT INTO `product_vendors` VALUES ('25', '12', '25');
INSERT INTO `product_vendors` VALUES ('26', '7', '27');
INSERT INTO `product_vendors` VALUES ('27', '8', '27');
INSERT INTO `product_vendors` VALUES ('28', '10', '27');
INSERT INTO `product_vendors` VALUES ('29', '12', '27');
INSERT INTO `product_vendors` VALUES ('30', '9', '28');
INSERT INTO `product_vendors` VALUES ('31', '12', '29');
INSERT INTO `product_vendors` VALUES ('32', '11', '30');
INSERT INTO `product_vendors` VALUES ('33', '4', '31');
INSERT INTO `product_vendors` VALUES ('34', '8', '32');
INSERT INTO `product_vendors` VALUES ('35', '10', '32');
INSERT INTO `product_vendors` VALUES ('36', '3', '33');
INSERT INTO `product_vendors` VALUES ('37', '8', '34');
INSERT INTO `product_vendors` VALUES ('38', '10', '34');
INSERT INTO `product_vendors` VALUES ('39', '12', '34');
INSERT INTO `product_vendors` VALUES ('40', '8', '36');
INSERT INTO `product_vendors` VALUES ('41', '12', '36');
INSERT INTO `product_vendors` VALUES ('42', '8', '37');
INSERT INTO `product_vendors` VALUES ('43', '4', '39');
INSERT INTO `product_vendors` VALUES ('44', '8', '42');
INSERT INTO `product_vendors` VALUES ('45', '8', '43');
INSERT INTO `product_vendors` VALUES ('46', '8', '45');
INSERT INTO `product_vendors` VALUES ('47', '10', '45');
INSERT INTO `product_vendors` VALUES ('48', '12', '45');
INSERT INTO `product_vendors` VALUES ('49', '9', '46');
INSERT INTO `product_vendors` VALUES ('50', '9', '47');
INSERT INTO `product_vendors` VALUES ('51', '7', '50');
INSERT INTO `product_vendors` VALUES ('52', '8', '50');
INSERT INTO `product_vendors` VALUES ('53', '12', '50');
INSERT INTO `product_vendors` VALUES ('54', '7', '51');
INSERT INTO `product_vendors` VALUES ('55', '3', '52');
INSERT INTO `product_vendors` VALUES ('56', '3', '53');
INSERT INTO `product_vendors` VALUES ('57', '13', '54');
INSERT INTO `product_vendors` VALUES ('58', '7', '55');
INSERT INTO `product_vendors` VALUES ('59', '8', '55');
INSERT INTO `product_vendors` VALUES ('60', '12', '55');
INSERT INTO `product_vendors` VALUES ('61', '8', '57');
INSERT INTO `product_vendors` VALUES ('62', '8', '63');
INSERT INTO `product_vendors` VALUES ('63', '12', '64');
INSERT INTO `product_vendors` VALUES ('64', '12', '65');
INSERT INTO `product_vendors` VALUES ('65', '5', '67');
INSERT INTO `product_vendors` VALUES ('66', '8', '68');
INSERT INTO `product_vendors` VALUES ('67', '10', '68');
INSERT INTO `product_vendors` VALUES ('68', '13', '69');
INSERT INTO `product_vendors` VALUES ('69', '4', '70');
INSERT INTO `product_vendors` VALUES ('70', '4', '71');
INSERT INTO `product_vendors` VALUES ('71', '5', '73');
INSERT INTO `product_vendors` VALUES ('72', '8', '74');
INSERT INTO `product_vendors` VALUES ('73', '2', '79');
INSERT INTO `product_vendors` VALUES ('74', '8', '81');
INSERT INTO `product_vendors` VALUES ('75', '9', '82');
INSERT INTO `product_vendors` VALUES ('76', '12', '83');
INSERT INTO `product_vendors` VALUES ('77', '8', '85');
INSERT INTO `product_vendors` VALUES ('78', '8', '90');
INSERT INTO `product_vendors` VALUES ('79', '8', '91');
INSERT INTO `product_vendors` VALUES ('80', '13', '92');
INSERT INTO `product_vendors` VALUES ('81', '8', '93');
INSERT INTO `product_vendors` VALUES ('82', '8', '94');
INSERT INTO `product_vendors` VALUES ('83', '8', '95');
INSERT INTO `product_vendors` VALUES ('84', '9', '96');
INSERT INTO `product_vendors` VALUES ('85', '11', '97');
INSERT INTO `product_vendors` VALUES ('86', '12', '98');
INSERT INTO `product_vendors` VALUES ('87', '12', '99');
INSERT INTO `product_vendors` VALUES ('88', '12', '101');
INSERT INTO `product_vendors` VALUES ('89', '8', '103');
INSERT INTO `product_vendors` VALUES ('90', '8', '105');
INSERT INTO `product_vendors` VALUES ('91', '8', '106');
INSERT INTO `product_vendors` VALUES ('92', '8', '107');
INSERT INTO `product_vendors` VALUES ('93', '7', '108');
INSERT INTO `product_vendors` VALUES ('94', '8', '108');
INSERT INTO `product_vendors` VALUES ('95', '10', '108');
INSERT INTO `product_vendors` VALUES ('96', '12', '108');
INSERT INTO `product_vendors` VALUES ('97', '8', '109');
INSERT INTO `product_vendors` VALUES ('98', '12', '109');
INSERT INTO `product_vendors` VALUES ('99', '8', '110');
INSERT INTO `product_vendors` VALUES ('100', '12', '110');
INSERT INTO `product_vendors` VALUES ('101', '7', '111');
INSERT INTO `product_vendors` VALUES ('102', '8', '111');
INSERT INTO `product_vendors` VALUES ('103', '10', '111');
INSERT INTO `product_vendors` VALUES ('104', '12', '111');
INSERT INTO `product_vendors` VALUES ('105', '12', '112');
INSERT INTO `product_vendors` VALUES ('204', '6', '189');
INSERT INTO `product_vendors` VALUES ('107', '8', '114');
INSERT INTO `product_vendors` VALUES ('108', '10', '114');
INSERT INTO `product_vendors` VALUES ('109', '12', '115');
INSERT INTO `product_vendors` VALUES ('110', '8', '117');
INSERT INTO `product_vendors` VALUES ('111', '1', '119');
INSERT INTO `product_vendors` VALUES ('112', '10', '122');
INSERT INTO `product_vendors` VALUES ('113', '12', '122');
INSERT INTO `product_vendors` VALUES ('114', '12', '123');
INSERT INTO `product_vendors` VALUES ('115', '8', '123');
INSERT INTO `product_vendors` VALUES ('116', '8', '124');
INSERT INTO `product_vendors` VALUES ('117', '8', '125');
INSERT INTO `product_vendors` VALUES ('118', '12', '125');
INSERT INTO `product_vendors` VALUES ('119', '8', '126');
INSERT INTO `product_vendors` VALUES ('120', '9', '127');
INSERT INTO `product_vendors` VALUES ('121', '8', '129');
INSERT INTO `product_vendors` VALUES ('122', '1', '130');
INSERT INTO `product_vendors` VALUES ('123', '12', '131');
INSERT INTO `product_vendors` VALUES ('124', '8', '132');
INSERT INTO `product_vendors` VALUES ('125', '10', '132');
INSERT INTO `product_vendors` VALUES ('126', '9', '134');
INSERT INTO `product_vendors` VALUES ('127', '8', '135');
INSERT INTO `product_vendors` VALUES ('128', '8', '137');
INSERT INTO `product_vendors` VALUES ('129', '10', '137');
INSERT INTO `product_vendors` VALUES ('130', '8', '138');
INSERT INTO `product_vendors` VALUES ('131', '12', '139');
INSERT INTO `product_vendors` VALUES ('132', '8', '140');
INSERT INTO `product_vendors` VALUES ('133', '12', '141');
INSERT INTO `product_vendors` VALUES ('134', '9', '143');
INSERT INTO `product_vendors` VALUES ('135', '8', '145');
INSERT INTO `product_vendors` VALUES ('136', '2', '146');
INSERT INTO `product_vendors` VALUES ('137', '3', '148');
INSERT INTO `product_vendors` VALUES ('138', '8', '149');
INSERT INTO `product_vendors` VALUES ('139', '10', '149');
INSERT INTO `product_vendors` VALUES ('140', '12', '149');
INSERT INTO `product_vendors` VALUES ('141', '2', '151');
INSERT INTO `product_vendors` VALUES ('142', '9', '152');
INSERT INTO `product_vendors` VALUES ('143', '8', '155');
INSERT INTO `product_vendors` VALUES ('144', '10', '155');
INSERT INTO `product_vendors` VALUES ('145', '9', '156');
INSERT INTO `product_vendors` VALUES ('146', '8', '158');
INSERT INTO `product_vendors` VALUES ('147', '10', '158');
INSERT INTO `product_vendors` VALUES ('148', '12', '158');
INSERT INTO `product_vendors` VALUES ('149', '8', '159');
INSERT INTO `product_vendors` VALUES ('150', '8', '160');
INSERT INTO `product_vendors` VALUES ('151', '11', '162');
INSERT INTO `product_vendors` VALUES ('152', '8', '162');
INSERT INTO `product_vendors` VALUES ('153', '10', '162');
INSERT INTO `product_vendors` VALUES ('154', '13', '162');
INSERT INTO `product_vendors` VALUES ('155', '8', '163');
INSERT INTO `product_vendors` VALUES ('156', '10', '163');
INSERT INTO `product_vendors` VALUES ('157', '8', '165');
INSERT INTO `product_vendors` VALUES ('158', '8', '166');
INSERT INTO `product_vendors` VALUES ('159', '9', '167');
INSERT INTO `product_vendors` VALUES ('160', '12', '169');
INSERT INTO `product_vendors` VALUES ('161', '11', '172');
INSERT INTO `product_vendors` VALUES ('162', '3', '174');
INSERT INTO `product_vendors` VALUES ('163', '8', '175');
INSERT INTO `product_vendors` VALUES ('164', '12', '175');
INSERT INTO `product_vendors` VALUES ('165', '8', '176');
INSERT INTO `product_vendors` VALUES ('166', '8', '177');
INSERT INTO `product_vendors` VALUES ('167', '12', '179');
INSERT INTO `product_vendors` VALUES ('168', '8', '180');
INSERT INTO `product_vendors` VALUES ('169', '10', '180');
INSERT INTO `product_vendors` VALUES ('170', '13', '180');
INSERT INTO `product_vendors` VALUES ('171', '12', '181');
INSERT INTO `product_vendors` VALUES ('172', '12', '182');
INSERT INTO `product_vendors` VALUES ('173', '12', '183');
INSERT INTO `product_vendors` VALUES ('174', '12', '184');
INSERT INTO `product_vendors` VALUES ('175', '8', '189');
INSERT INTO `product_vendors` VALUES ('176', '12', '190');
INSERT INTO `product_vendors` VALUES ('177', '12', '191');
INSERT INTO `product_vendors` VALUES ('178', '9', '192');
INSERT INTO `product_vendors` VALUES ('179', '10', '193');
INSERT INTO `product_vendors` VALUES ('180', '12', '193');
INSERT INTO `product_vendors` VALUES ('181', '12', '194');
INSERT INTO `product_vendors` VALUES ('182', '8', '195');
INSERT INTO `product_vendors` VALUES ('183', '8', '196');
INSERT INTO `product_vendors` VALUES ('184', '8', '198');
INSERT INTO `product_vendors` VALUES ('185', '8', '199');
INSERT INTO `product_vendors` VALUES ('186', '7', '203');
INSERT INTO `product_vendors` VALUES ('187', '8', '203');
INSERT INTO `product_vendors` VALUES ('188', '10', '203');
INSERT INTO `product_vendors` VALUES ('189', '12', '203');
INSERT INTO `product_vendors` VALUES ('190', '8', '204');
INSERT INTO `product_vendors` VALUES ('191', '11', '206');
INSERT INTO `product_vendors` VALUES ('192', '13', '206');
INSERT INTO `product_vendors` VALUES ('193', '12', '207');
INSERT INTO `product_vendors` VALUES ('194', '8', '208');
INSERT INTO `product_vendors` VALUES ('195', '12', '210');
INSERT INTO `product_vendors` VALUES ('196', '12', '212');
INSERT INTO `product_vendors` VALUES ('197', '8', '214');
INSERT INTO `product_vendors` VALUES ('198', '12', '216');
INSERT INTO `product_vendors` VALUES ('199', '8', '218');
INSERT INTO `product_vendors` VALUES ('200', '8', '219');
INSERT INTO `product_vendors` VALUES ('201', '7', '220');
INSERT INTO `product_vendors` VALUES ('202', '8', '220');
INSERT INTO `product_vendors` VALUES ('203', '12', '220');
INSERT INTO `product_vendors` VALUES ('205', '6', '163');
INSERT INTO `product_vendors` VALUES ('206', '6', '162');
INSERT INTO `product_vendors` VALUES ('207', '6', '138');
INSERT INTO `product_vendors` VALUES ('208', '6', '203');
INSERT INTO `product_vendors` VALUES ('209', '6', '149');
INSERT INTO `product_vendors` VALUES ('210', '6', '50');
INSERT INTO `product_vendors` VALUES ('211', '6', '183');
INSERT INTO `product_vendors` VALUES ('212', '6', '137');
INSERT INTO `product_vendors` VALUES ('213', '6', '32');
INSERT INTO `product_vendors` VALUES ('214', '6', '60');
INSERT INTO `product_vendors` VALUES ('215', '6', '155');
INSERT INTO `product_vendors` VALUES ('216', '6', '136');
INSERT INTO `product_vendors` VALUES ('217', '6', '113');
INSERT INTO `product_vendors` VALUES ('218', '6', '125');
INSERT INTO `product_vendors` VALUES ('219', '6', '121');
INSERT INTO `product_vendors` VALUES ('220', '6', '209');
INSERT INTO `product_vendors` VALUES ('221', '6', '12');
INSERT INTO `product_vendors` VALUES ('222', '6', '146');
INSERT INTO `product_vendors` VALUES ('223', '6', '40');
INSERT INTO `product_vendors` VALUES ('224', '14', '164');
INSERT INTO `product_vendors` VALUES ('225', '14', '153');
INSERT INTO `product_vendors` VALUES ('226', '14', '173');
INSERT INTO `product_vendors` VALUES ('227', '14', '201');
INSERT INTO `product_vendors` VALUES ('228', '14', '133');
INSERT INTO `product_vendors` VALUES ('229', '14', '202');
INSERT INTO `product_vendors` VALUES ('230', '14', '205');
INSERT INTO `product_vendors` VALUES ('231', '14', '145');
INSERT INTO `product_vendors` VALUES ('232', '14', '154');
INSERT INTO `product_vendors` VALUES ('233', '14', '150');
INSERT INTO `product_vendors` VALUES ('234', '15', '3');
INSERT INTO `product_vendors` VALUES ('235', '15', '163');
INSERT INTO `product_vendors` VALUES ('236', '15', '100');
INSERT INTO `product_vendors` VALUES ('237', '15', '142');
INSERT INTO `product_vendors` VALUES ('238', '15', '104');
INSERT INTO `product_vendors` VALUES ('239', '15', '211');
INSERT INTO `product_vendors` VALUES ('240', '15', '80');
INSERT INTO `product_vendors` VALUES ('241', '15', '189');
INSERT INTO `product_vendors` VALUES ('242', '15', '114');
INSERT INTO `product_vendors` VALUES ('243', '15', '34');
INSERT INTO `product_vendors` VALUES ('244', '15', '203');
INSERT INTO `product_vendors` VALUES ('245', '15', '138');
INSERT INTO `product_vendors` VALUES ('246', '20', '180');
INSERT INTO `product_vendors` VALUES ('247', '20', '50');
INSERT INTO `product_vendors` VALUES ('248', '20', '202');
INSERT INTO `product_vendors` VALUES ('249', '21', '187');
INSERT INTO `product_vendors` VALUES ('250', '21', '188');
INSERT INTO `product_vendors` VALUES ('251', '21', '186');
INSERT INTO `product_vendors` VALUES ('252', '21', '185');
INSERT INTO `product_vendors` VALUES ('253', '22', '1');
INSERT INTO `product_vendors` VALUES ('254', '22', '26');
INSERT INTO `product_vendors` VALUES ('255', '22', '38');
INSERT INTO `product_vendors` VALUES ('256', '22', '61');
INSERT INTO `product_vendors` VALUES ('257', '22', '118');
INSERT INTO `product_vendors` VALUES ('258', '22', '23');
INSERT INTO `product_vendors` VALUES ('259', '22', '6');
INSERT INTO `product_vendors` VALUES ('260', '22', '12');
INSERT INTO `product_vendors` VALUES ('261', '22', '20');
INSERT INTO `product_vendors` VALUES ('262', '22', '40');
INSERT INTO `product_vendors` VALUES ('263', '22', '146');
INSERT INTO `product_vendors` VALUES ('264', '22', '13');
INSERT INTO `product_vendors` VALUES ('265', '22', '147');
INSERT INTO `product_vendors` VALUES ('266', '22', '151');
INSERT INTO `product_vendors` VALUES ('267', '22', '168');
INSERT INTO `product_vendors` VALUES ('268', '22', '3');
INSERT INTO `product_vendors` VALUES ('269', '22', '9');
INSERT INTO `product_vendors` VALUES ('344', '22', '14');
INSERT INTO `product_vendors` VALUES ('271', '22', '22');
INSERT INTO `product_vendors` VALUES ('272', '22', '27');
INSERT INTO `product_vendors` VALUES ('273', '22', '32');
INSERT INTO `product_vendors` VALUES ('274', '22', '34');
INSERT INTO `product_vendors` VALUES ('275', '22', '41');
INSERT INTO `product_vendors` VALUES ('276', '22', '48');
INSERT INTO `product_vendors` VALUES ('277', '22', '49');
INSERT INTO `product_vendors` VALUES ('278', '22', '74');
INSERT INTO `product_vendors` VALUES ('279', '22', '87');
INSERT INTO `product_vendors` VALUES ('280', '22', '111');
INSERT INTO `product_vendors` VALUES ('281', '22', '137');
INSERT INTO `product_vendors` VALUES ('282', '22', '170');
INSERT INTO `product_vendors` VALUES ('283', '22', '171');
INSERT INTO `product_vendors` VALUES ('284', '22', '86');
INSERT INTO `product_vendors` VALUES ('285', '22', '102');
INSERT INTO `product_vendors` VALUES ('286', '22', '217');
INSERT INTO `product_vendors` VALUES ('287', '22', '157');
INSERT INTO `product_vendors` VALUES ('288', '22', '163');
INSERT INTO `product_vendors` VALUES ('289', '22', '183');
INSERT INTO `product_vendors` VALUES ('290', '22', '213');
INSERT INTO `product_vendors` VALUES ('291', '22', '203');
INSERT INTO `product_vendors` VALUES ('292', '22', '220');
INSERT INTO `product_vendors` VALUES ('293', '18', '180');
INSERT INTO `product_vendors` VALUES ('294', '18', '84');
INSERT INTO `product_vendors` VALUES ('295', '18', '215');
INSERT INTO `product_vendors` VALUES ('296', '18', '161');
INSERT INTO `product_vendors` VALUES ('297', '18', '111');
INSERT INTO `product_vendors` VALUES ('298', '18', '175');
INSERT INTO `product_vendors` VALUES ('299', '18', '32');
INSERT INTO `product_vendors` VALUES ('300', '18', '108');
INSERT INTO `product_vendors` VALUES ('301', '18', '117');
INSERT INTO `product_vendors` VALUES ('302', '18', '45');
INSERT INTO `product_vendors` VALUES ('303', '18', '132');
INSERT INTO `product_vendors` VALUES ('304', '18', '158');
INSERT INTO `product_vendors` VALUES ('305', '18', '68');
INSERT INTO `product_vendors` VALUES ('306', '23', '77');
INSERT INTO `product_vendors` VALUES ('307', '23', '78');
INSERT INTO `product_vendors` VALUES ('308', '24', '144');
INSERT INTO `product_vendors` VALUES ('309', '19', '111');
INSERT INTO `product_vendors` VALUES ('310', '19', '158');
INSERT INTO `product_vendors` VALUES ('311', '19', '35');
INSERT INTO `product_vendors` VALUES ('312', '19', '14');
INSERT INTO `product_vendors` VALUES ('313', '19', '32');
INSERT INTO `product_vendors` VALUES ('314', '19', '45');
INSERT INTO `product_vendors` VALUES ('315', '19', '8');
INSERT INTO `product_vendors` VALUES ('316', '19', '64');
INSERT INTO `product_vendors` VALUES ('317', '19', '203');
INSERT INTO `product_vendors` VALUES ('318', '19', '200');
INSERT INTO `product_vendors` VALUES ('319', '19', '48');
INSERT INTO `product_vendors` VALUES ('320', '19', '123');
INSERT INTO `product_vendors` VALUES ('321', '19', '62');
INSERT INTO `product_vendors` VALUES ('322', '19', '9');
INSERT INTO `product_vendors` VALUES ('323', '19', '55');
INSERT INTO `product_vendors` VALUES ('324', '19', '116');
INSERT INTO `product_vendors` VALUES ('325', '19', '178');
INSERT INTO `product_vendors` VALUES ('326', '19', '183');
INSERT INTO `product_vendors` VALUES ('327', '16', '128');
INSERT INTO `product_vendors` VALUES ('328', '16', '74');
INSERT INTO `product_vendors` VALUES ('329', '16', '15');
INSERT INTO `product_vendors` VALUES ('330', '16', '89');
INSERT INTO `product_vendors` VALUES ('331', '16', '76');
INSERT INTO `product_vendors` VALUES ('332', '16', '56');
INSERT INTO `product_vendors` VALUES ('333', '16', '75');
INSERT INTO `product_vendors` VALUES ('334', '16', '120');
INSERT INTO `product_vendors` VALUES ('335', '16', '7');
INSERT INTO `product_vendors` VALUES ('336', '25', '59');
INSERT INTO `product_vendors` VALUES ('337', '25', '58');
INSERT INTO `product_vendors` VALUES ('338', '25', '197');
INSERT INTO `product_vendors` VALUES ('339', '25', '72');
INSERT INTO `product_vendors` VALUES ('340', '26', '66');
INSERT INTO `product_vendors` VALUES ('341', '26', '88');
INSERT INTO `product_vendors` VALUES ('342', '26', '44');
INSERT INTO `product_vendors` VALUES ('343', '16', '40');

-- ----------------------------
-- Table structure for `schedules`
-- ----------------------------
DROP TABLE IF EXISTS `schedules`;
CREATE TABLE `schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of schedules
-- ----------------------------
INSERT INTO `schedules` VALUES ('1', 'Full Season: June 2 - October 13');
INSERT INTO `schedules` VALUES ('2', 'First Half of Season: June 2 - August 4');
INSERT INTO `schedules` VALUES ('3', 'Second Half of Season: August 11 - October 13');
INSERT INTO `schedules` VALUES ('4', 'Week to Week');

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
INSERT INTO `users` VALUES ('1', 'kris', '64a55abeffc6a25be0e984550d9608b2b78f98ab');

-- ----------------------------
-- Table structure for `vendors`
-- ----------------------------
DROP TABLE IF EXISTS `vendors`;
CREATE TABLE `vendors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `schedule_id` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vendors
-- ----------------------------
INSERT INTO `vendors` VALUES ('1', 'America\'s Best Flowers', 'Cottage Grove, WI', '', '1', '0');
INSERT INTO `vendors` VALUES ('2', 'Anisoptera Acres', 'Waterloo, WI', 'http://www.anisopteraacres.com/', '1', '1');
INSERT INTO `vendors` VALUES ('3', 'Buddies Bites, LLC', 'Monona, WI', 'http://buddiesnaturaldogtreats.com/', '1', '1');
INSERT INTO `vendors` VALUES ('4', 'Chippy\'s Kettle Corn, LLC', 'Beaver Dam, WI', 'http://www.chippyskettlecorn.com/', '1', '1');
INSERT INTO `vendors` VALUES ('5', 'Farmer John\'s Cheese', 'Dodgeville, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('6', 'J and E Produce', 'Cottage Grove, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('7', 'McDowell Fresh Produce', 'Montello, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('8', 'Nina and Family Garden', 'Madison, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('9', 'Riverbend Farm Bakery', 'Hillsboro, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('10', 'Thor Produce and Flowers', 'Madison, WI', '', '4', '1');
INSERT INTO `vendors` VALUES ('11', 'Tom and Carrie\'s Place', 'Fort Atkinson, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('12', 'Xiong Family Garden', 'Madison, WI', '', '2', '1');
INSERT INTO `vendors` VALUES ('13', 'Yang, Ju Varh', 'Cottage Grove, WI', '', '2', '1');
INSERT INTO `vendors` VALUES ('14', 'Tomato Mountain Farm, LLC', 'Brooklyn, WI', 'http://www.tomatomountain.com/', '1', '1');
INSERT INTO `vendors` VALUES ('15', 'Krueger, Earl', 'Waterloo, WI', '', '4', '1');
INSERT INTO `vendors` VALUES ('16', 'Keene Organics', 'Marshall, WI', 'http://www.keeneorganics.com/', '1', '1');
INSERT INTO `vendors` VALUES ('17', 'Nehmers Produce & Greenhouse', 'Columbus, WI', 'http://www.savorwisconsin.com/alllistings/detail.a', '1', '1');
INSERT INTO `vendors` VALUES ('18', 'Chouchee and Kayoua', 'Sun Prairie, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('19', 'Gonzalez, Juan', 'Madison, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('20', 'JenEhr Family Farm', 'Sun Prairie, WI', 'http://www.jenehrfamilyfarm.com/', '4', '0');
INSERT INTO `vendors` VALUES ('21', 'Sasha\'s Salad Dressings', 'Mukwonago, WI', 'http://www.sashasdressings.com/', '1', '1');
INSERT INTO `vendors` VALUES ('22', 'Reeson Family Farm', 'Loganville, WI', '', '1', '1');
INSERT INTO `vendors` VALUES ('23', 'Inside Out Wellness', 'Middleton, WI', 'http://myinsideoutwellness.com/', '1', '1');
INSERT INTO `vendors` VALUES ('24', 'La Fortuna Pizza', 'Madison, WI', 'http://www.lafortunapizza.com/', '3', '1');
INSERT INTO `vendors` VALUES ('25', 'Coffee Pirate', 'Cambridge, WI', '', '3', '1');
INSERT INTO `vendors` VALUES ('26', 'South Padre Seafood', 'Janesville, WI', '', '3', '1');
INSERT INTO `vendors` VALUES ('27', 'Kris Vendor', 'Madison', '', '1', '1');
INSERT INTO `vendors` VALUES ('28', 'Jim Vendor', 'Madison', 'http://www.google.com/', '1', '1');
INSERT INTO `vendors` VALUES ('29', 'Colorbox', '', '', '0', '1');
INSERT INTO `vendors` VALUES ('30', 'Modal', '', '', '0', '1');
INSERT INTO `vendors` VALUES ('31', 'Again', '', '', '0', '1');
INSERT INTO `vendors` VALUES ('32', 'Active?', '', '', '0', '1');
INSERT INTO `vendors` VALUES ('33', 'This active?', '', '', '0', '1');
INSERT INTO `vendors` VALUES ('34', 'Not active', '', '', '0', '0');
INSERT INTO `vendors` VALUES ('35', 'Not active', '', '', '0', '0');
INSERT INTO `vendors` VALUES ('36', 'Not active2', '', '', '0', '0');
