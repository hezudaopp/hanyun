-- ----------------------------
--  Table structure for `oms_ips`
-- ----------------------------
DROP TABLE IF EXISTS `oms_ips`;
CREATE TABLE `oms_ips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ipname` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `oms_ips`
-- ----------------------------
BEGIN;
INSERT INTO `oms_ips` VALUES ('11', '联通独立IP'), ('12', '双线双IP');
COMMIT;

-- ----------------------------
--  Table structure for `oms_items_ips`
-- ----------------------------
DROP TABLE IF EXISTS `oms_items_ips`;
CREATE TABLE `oms_items_ips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `ip_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `oms_items_ips`
-- ----------------------------
BEGIN;
INSERT INTO `oms_items_ips` VALUES ('31', '31', '11', '0.00'), ('32', '37', '11', '0.00'), ('33', '38', '11', '0.00'), ('34', '41', '11', '0.00'), ('35', '42', '11', '0.00'), ('36', '43', '11', '0.00'), ('37', '44', '11', '0.00'), ('38', '45', '11', '0.00'), ('39', '46', '11', '0.00'), ('40', '31', '12', '2000.00'), ('41', '37', '12', '2000.00'), ('42', '38', '12', '2000.00'), ('43', '41', '12', '2000.00'), ('44', '42', '12', '1500.00'), ('45', '43', '12', '1500.00'), ('46', '44', '12', '1500.00'), ('47', '45', '12', '1500.00'), ('48', '46', '12', '1500.00');
COMMIT;