/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : maaskantje

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 01/02/2023 14:55:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `omschrijving` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------

-- ----------------------------
-- Table structure for inhoud
-- ----------------------------
DROP TABLE IF EXISTS `inhoud`;
CREATE TABLE `inhoud`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pakket_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pakket_id`(`pakket_id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE,
  CONSTRAINT `inhoud_ibfk_1` FOREIGN KEY (`pakket_id`) REFERENCES `pakket` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `inhoud_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inhoud
-- ----------------------------

-- ----------------------------
-- Table structure for invoer
-- ----------------------------
DROP TABLE IF EXISTS `invoer`;
CREATE TABLE `invoer`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `levering_id` int NOT NULL,
  `product_id` int NOT NULL,
  `aantal` double NOT NULL,
  `houdbaar-tot` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `levering_id`(`levering_id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE,
  CONSTRAINT `invoer_ibfk_1` FOREIGN KEY (`levering_id`) REFERENCES `levering` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `invoer_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of invoer
-- ----------------------------

-- ----------------------------
-- Table structure for klant
-- ----------------------------
DROP TABLE IF EXISTS `klant`;
CREATE TABLE `klant`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gezins_naam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `plaats` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `adres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telefoon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `volwassen` int NOT NULL,
  `kind` int NULL DEFAULT NULL,
  `baby` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of klant
-- ----------------------------

-- ----------------------------
-- Table structure for klant_wens
-- ----------------------------
DROP TABLE IF EXISTS `klant_wens`;
CREATE TABLE `klant_wens`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `klant_id` int NOT NULL,
  `wens_id` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `klant_id`(`klant_id`) USING BTREE,
  INDEX `wens_id`(`wens_id`) USING BTREE,
  CONSTRAINT `klant_wens_ibfk_1` FOREIGN KEY (`klant_id`) REFERENCES `klant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `klant_wens_ibfk_2` FOREIGN KEY (`wens_id`) REFERENCES `wens` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of klant_wens
-- ----------------------------

-- ----------------------------
-- Table structure for leverancier
-- ----------------------------
DROP TABLE IF EXISTS `leverancier`;
CREATE TABLE `leverancier`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `plaats` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `contact_persoon_naam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefoon` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `volgende_lever_datum` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of leverancier
-- ----------------------------

-- ----------------------------
-- Table structure for levering
-- ----------------------------
DROP TABLE IF EXISTS `levering`;
CREATE TABLE `levering`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `leverancier_id` int NOT NULL,
  `datumtijd` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `leverancier_id`(`leverancier_id`) USING BTREE,
  CONSTRAINT `levering_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `levering_ibfk_2` FOREIGN KEY (`leverancier_id`) REFERENCES `leverancier` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of levering
-- ----------------------------

-- ----------------------------
-- Table structure for messenger_messages
-- ----------------------------
DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE `messenger_messages`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `headers` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `queue_name` varchar(190) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `IDX_75EA56E0FB7336F0`(`queue_name`) USING BTREE,
  INDEX `IDX_75EA56E0E3BD61CE`(`available_at`) USING BTREE,
  INDEX `IDX_75EA56E016BA31DB`(`delivered_at`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of messenger_messages
-- ----------------------------

-- ----------------------------
-- Table structure for pakket
-- ----------------------------
DROP TABLE IF EXISTS `pakket`;
CREATE TABLE `pakket`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `klant_id` int NOT NULL,
  `datum` datetime NOT NULL,
  `uitgifte_datum` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `klant_id`(`klant_id`) USING BTREE,
  CONSTRAINT `pakket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pakket_ibfk_2` FOREIGN KEY (`klant_id`) REFERENCES `klant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pakket
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `streepjescode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `omschrijving` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aantal` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `category_id`(`category_id`) USING BTREE,
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for wens
-- ----------------------------
DROP TABLE IF EXISTS `wens`;
CREATE TABLE `wens`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `omschrijving` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wens
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
