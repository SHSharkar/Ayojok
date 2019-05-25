/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : ayojok_gamma

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 20/05/2019 11:51:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `line1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `extraInfo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `addressName` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (2, 'Admin', 'admin@ayojok.com', 'admin', '$2y$10$DSpririnJHYaEPs7QaRI5Op2wiYdTrnQoFYODPStdK84ZxHqmu5wy', 'hpaDNRCCIty4ua4sErxm6Nss4yJiEtjejKKGjciUoITLqMz0qAbz9HG50Utf', NULL, NULL);
INSERT INTO `admins` VALUES (3, 'Sazzad Hossain ', 'sazzad3029@gmail.com', 'editor', '$2y$10$J3nvOH3WPTnnbBodJDDMvuDc.Lkhhzhgh7RdknxVRnSUwMo5Nhrv2', NULL, '2019-04-21 16:06:59', '2019-04-21 16:06:59');
INSERT INTO `admins` VALUES (8, 'sazzad Hossain Nirjhor', 'sazzad39@gmail.com', 'admin', '$2y$10$CDybMAGmL90U.7gtO0ldeu2rHWPfMvQjirv4e/JPc9Lk2uLfIaaky', NULL, '2019-04-21 17:15:23', '2019-04-21 17:15:23');
INSERT INTO `admins` VALUES (9, 'test', 'test@gmail.com', 'editor', '$2y$10$eSp8Xq5jooX4NL.5/njCFeniSuVtbEdYCUmzCpM7SBQ9kq/ipc59G', NULL, '2019-04-23 12:32:44', '2019-04-23 12:32:44');
INSERT INTO `admins` VALUES (11, 'abc', 'sazzad210@gmail.com', 'editor', '$2y$10$EP94pcfX2bdm/k5.4V9NJOYjqGCCothglUhLan3EtSJeKYGpHlGVi', NULL, '2019-04-24 15:32:15', '2019-04-24 15:38:16');
INSERT INTO `admins` VALUES (12, 'sazzad Hossain Nirjhor', 'sazz3029@gmail.com', 'editor', '$2y$10$zEaQ1NPy7ePByA9XoKim2e1WXrVAGZzLR3CGEGA8uBuG2RlP7ta4u', NULL, '2019-04-24 15:33:51', '2019-04-24 15:33:51');

-- ----------------------------
-- Table structure for bakeries_feature
-- ----------------------------
DROP TABLE IF EXISTS `bakeries_feature`;
CREATE TABLE `bakeries_feature`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` int(11) NOT NULL DEFAULT 0,
  `feature_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `speciality_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `low_price` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bakeries_feature
-- ----------------------------
INSERT INTO `bakeries_feature` VALUES (1, 11, 'Panthapath', 6, 'One Pound', 'Not Available', 'Available', 'Not Available', '40% advance', '3 days before', 'birthday,wedding', 3000, 0, NULL, NULL);
INSERT INTO `bakeries_feature` VALUES (2, 45, 'Mohammadpur', 3, 'One Pound', 'Not Available', 'Available', 'Not Available', '50% advance', '1 Week', 'birthday,wedding', 899, 0, NULL, NULL);
INSERT INTO `bakeries_feature` VALUES (3, 177, 'Khilgaon', 6, 'One Pound', 'Available', 'Available', 'Not Available', '50% advance', '1 Week', NULL, 1000, 0, '2018-12-05 17:23:41', '2018-12-05 17:23:41');
INSERT INTO `bakeries_feature` VALUES (4, 178, 'Mohammedpur', 4, 'One Pound', 'Available', 'Available', 'Not Available', '50% advance', '1 Week', 'birthday,wedding', 1000, 0, '2018-12-05 17:41:29', '2018-12-05 17:41:29');
INSERT INTO `bakeries_feature` VALUES (5, 288, 'Mohammedpur', 6, 'One Pound', 'Available', 'Available', 'Not Available', '50% advance', '1 Week', 'birthday,wedding', 1300, 0, '2018-12-26 20:04:04', '2018-12-26 20:04:04');
INSERT INTO `bakeries_feature` VALUES (6, 289, 'Mohammadpur', 4, 'One Pound', 'Available', 'Available', 'Not Available', '50% advance', '1 Week', 'birthday,wedding', 1000, 0, '2018-12-26 20:10:14', '2018-12-26 20:10:14');
INSERT INTO `bakeries_feature` VALUES (7, 290, 'Dhaka', 6, 'One Pound', 'Available', 'Available', 'Not Available', '50% advance', '1 Week', 'birthday,wedding', 1000, 0, '2018-12-26 20:20:15', '2018-12-26 20:20:15');
INSERT INTO `bakeries_feature` VALUES (8, 291, 'Mohakhali', 4, 'One Pound', 'Available', 'Available', 'Not Available', '50% advance', '1 Week', 'birthday,wedding', 1000, 0, '2018-12-26 20:27:27', '2018-12-26 20:27:27');
INSERT INTO `bakeries_feature` VALUES (9, 292, 'Shaheed Tajuddin Ahmed Ave', 2, 'One Pound', 'Available', 'Available', 'Not Available', '50% advance', '1 Week', 'birthday,wedding', 1000, 0, '2018-12-26 20:32:53', '2018-12-26 20:32:53');
INSERT INTO `bakeries_feature` VALUES (10, 384, '0 Ba', 0, '0 Ba', '0 Ba', '0 Ba', '0 Ba', '0 Ba', '0 Ba', 'wedding', 100, 0, '2019-04-11 17:16:49', '2019-04-11 17:16:49');

-- ----------------------------
-- Table structure for bkash_payment
-- ----------------------------
DROP TABLE IF EXISTS `bkash_payment`;
CREATE TABLE `bkash_payment`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `used_num` int(11) NOT NULL DEFAULT 0,
  `trxid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for bridal_outfit_features
-- ----------------------------
DROP TABLE IF EXISTS `bridal_outfit_features`;
CREATE TABLE `bridal_outfit_features`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bridal_outfit_features
-- ----------------------------
INSERT INTO `bridal_outfit_features` VALUES (1, 370, '2', '2', '2', '2', '20', '5', NULL, NULL, 'wedding,birthday', '1', '1', '1', '50', '60', 0, '2019-04-07 15:10:25', '2019-04-15 17:40:00');
INSERT INTO `bridal_outfit_features` VALUES (2, 374, 'b', 'b', 'b', 'b', 'b', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2019-04-10 13:10:26', '2019-04-10 13:10:26');
INSERT INTO `bridal_outfit_features` VALUES (5, 396, 'd', 'd', 'd', 'd', 'd', '9', NULL, NULL, 'birthday', '5', NULL, NULL, NULL, '8', 0, '2019-04-15 17:54:20', '2019-04-18 11:31:30');

-- ----------------------------
-- Table structure for budgetcost
-- ----------------------------
DROP TABLE IF EXISTS `budgetcost`;
CREATE TABLE `budgetcost`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `venue` int(11) NOT NULL,
  `decoration` int(11) NOT NULL,
  `outfit` int(11) NOT NULL,
  `jewelery` int(11) NOT NULL,
  `makeup` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `music` int(11) NOT NULL,
  `catering` int(11) NOT NULL,
  `bakeries` int(11) NOT NULL,
  `invitation` int(11) NOT NULL,
  `legal` int(11) NOT NULL,
  `transportation` int(11) NOT NULL,
  `honeymoon` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of budgetcost
-- ----------------------------
INSERT INTO `budgetcost` VALUES (1, 39, 30000, 4000, 2000, 400, 10000, 4, 10, 0, 0, 0, 0, 0, 0, 10, '2019-03-06 17:40:40', '2019-04-07 18:25:43');

-- ----------------------------
-- Table structure for budgetpaid
-- ----------------------------
DROP TABLE IF EXISTS `budgetpaid`;
CREATE TABLE `budgetpaid`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `venue` int(11) NOT NULL,
  `decoration` int(11) NOT NULL,
  `outfit` int(11) NOT NULL,
  `jewelery` int(11) NOT NULL,
  `makeup` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `music` int(11) NOT NULL,
  `catering` int(11) NOT NULL,
  `bakeries` int(11) NOT NULL,
  `invitation` int(11) NOT NULL,
  `legal` int(11) NOT NULL,
  `transportation` int(11) NOT NULL,
  `honeymoon` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of budgetpaid
-- ----------------------------
INSERT INTO `budgetpaid` VALUES (1, 39, 33012, 200, 0, 400, 5000, 40, 20, 0, 12, 200, 0, 0, 0, 2000, '2019-03-06 17:40:40', '2019-04-07 18:25:43');

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `quantity` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mess` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for catagories
-- ----------------------------
DROP TABLE IF EXISTS `catagories`;
CREATE TABLE `catagories`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_service` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `layout` int(10) NULL DEFAULT NULL,
  `feature_table` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of catagories
-- ----------------------------
INSERT INTO `catagories` VALUES (1, 'vehicle', 0, 1, NULL, '', '', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (2, 'light_&_sound', 0, 1, NULL, '', '', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (3, 'holud_snacks', 0, 1, NULL, '', '', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (4, 'dala_kula', 0, 1, NULL, '', '', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (5, 'holud', 0, 1, NULL, '', '', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (6, 'wedding', 0, 1, NULL, '', '', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (7, 'crafts_&_alpona', 0, 0, NULL, '', '', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (8, 'flowers', 0, 0, NULL, '', '', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (9, 'venue', 1, 1, 3, 'venue_feature', 'img/cat_layout_img/venue.jpg', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (10, 'dj', 1, 1, 3, 'dj_feature', 'img/cat_layout_img/dj.jpg', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (11, 'catering', 1, 1, 3, 'catering_feature', 'img/cat_layout_img/food.jpg', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (12, 'photography_and_cinematography', 1, 1, 1, 'photography_feature', 'img/cat_layout_img/photography.jpg', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (13, 'decoration', 1, 1, 1, 'decoration_feature', 'img/cat_layout_img/decoration.jpg', '2018-05-20 05:10:34', NULL, NULL);
INSERT INTO `catagories` VALUES (14, 'invitation_cards', 1, 1, 2, 'invitation_feature', 'img/cat_layout_img/card.jpg', '2018-05-20 05:10:35', NULL, NULL);
INSERT INTO `catagories` VALUES (15, 'makeup_artist', 1, 1, 1, 'makeup_feature', 'img/cat_layout_img/makeup.jpg', '2018-05-20 05:10:35', NULL, NULL);
INSERT INTO `catagories` VALUES (16, 'bakeries', 1, 1, 2, 'bakeries_feature', 'img/cat_layout_img/bakeries.jpg', '2018-05-20 05:10:35', NULL, NULL);
INSERT INTO `catagories` VALUES (17, 'mehedi', 1, 1, 2, 'mehedi_feature', 'img/cat_layout_img/mehedi.jpg', '2018-05-20 05:10:35', NULL, NULL);
INSERT INTO `catagories` VALUES (18, 'kazi', 1, 1, 4, 'kazi_feature', 'img/cat_layout_img/kazi.jpg', '2018-05-20 05:10:35', NULL, NULL);
INSERT INTO `catagories` VALUES (19, 'building_lights', 0, 1, NULL, '', '', '2018-05-20 05:10:35', NULL, NULL);
INSERT INTO `catagories` VALUES (20, 'Choreography', 0, 1, NULL, '', '', NULL, NULL, NULL);
INSERT INTO `catagories` VALUES (21, 'holud_dress', 0, 1, NULL, '', '', NULL, NULL, NULL);
INSERT INTO `catagories` VALUES (22, 'alpona', 0, 1, NULL, '', '', NULL, NULL, NULL);
INSERT INTO `catagories` VALUES (23, 'bridal_outfit', 1, 1, 5, 'BridalOutfitFeature', 'img/cat_layout_img/bridal_outfits.jpg', NULL, NULL, NULL);
INSERT INTO `catagories` VALUES (24, 'jewellery', 1, 1, 5, 'JewelleryFeature', 'img/cat_layout_img/Jewellery.jpg', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for catering_feature
-- ----------------------------
DROP TABLE IF EXISTS `catering_feature`;
CREATE TABLE `catering_feature`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` int(11) NULL DEFAULT 0,
  `feature_3` int(11) NOT NULL DEFAULT 0,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `menu_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `low_price` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of catering_feature
-- ----------------------------
INSERT INTO `catering_feature` VALUES (1, 10, 'Purana Paltan', 5, 50, 'Available', 'Not Available', 'Available', '3 Days', 'Not Available', 'fixed', 850, 0, NULL, NULL);
INSERT INTO `catering_feature` VALUES (2, 42, 'Mohammadpur', 84, 25, 'Not Available', 'Not Available', 'Available', '1 Week', 'Available', 'fixed,chef', 550, 0, NULL, NULL);
INSERT INTO `catering_feature` VALUES (3, 83, 'Dhanmondi', 2, 20, 'Not Available', 'Not Available', 'Available', '1 Week', 'On Demand', 'fixed', 680, 0, NULL, NULL);
INSERT INTO `catering_feature` VALUES (4, 84, 'Mohammadpur', 2, 20, 'Not Available', 'Not Available', 'Available', '1 Week', 'On Demand', 'fixed,chef', 520, 0, NULL, NULL);
INSERT INTO `catering_feature` VALUES (5, 99, 'Banani', 15, 32, 'Not Available', 'Available', 'Available', '60% Advance', 'Available', 'fixed', 520, 0, NULL, NULL);
INSERT INTO `catering_feature` VALUES (6, 125, 'Green Road', 14, 100, 'Available', 'Available', 'Available', '50%', 'Available', 'fixed,chef', 480, 0, NULL, NULL);
INSERT INTO `catering_feature` VALUES (7, 126, 'Dhaka Cantonment', 11, 100, 'Available', 'Available', 'Available', '50%', 'Available', 'fixed', 420, 0, NULL, NULL);
INSERT INTO `catering_feature` VALUES (8, 162, 'UCB Chattar', 2, 20, 'Available', 'Available', 'Available', '50% Advance', 'Available', 'fixed', 450, 0, '2018-11-23 15:20:24', '2018-11-23 15:20:24');
INSERT INTO `catering_feature` VALUES (9, 193, 'Azimpur', 5, 30, 'Available', 'Available', 'Available', '10000', 'Available', 'fixed', 30000, 0, '2018-12-12 17:26:36', '2018-12-12 17:26:36');
INSERT INTO `catering_feature` VALUES (10, 194, 'Chowk Bazar', 3, 20, 'Available', 'Available', 'Available', '40% advance', 'Not Available', 'fixed', 15000, 0, '2018-12-12 18:48:19', '2018-12-12 18:48:19');
INSERT INTO `catering_feature` VALUES (11, 195, 'Cantonment', 7, 20, 'Available', 'Available', 'Available', '60% advance', 'Available', 'fixed', 550, 0, '2018-12-12 19:05:03', '2018-12-12 19:05:03');
INSERT INTO `catering_feature` VALUES (12, 242, 'Paltan', 5, 40, 'Available', 'Available', 'Not Available', '5000', 'Available', 'fixed,chef', 450, 0, '2018-12-26 12:17:14', '2018-12-26 12:17:14');
INSERT INTO `catering_feature` VALUES (13, 243, 'Adabor', 6, 20, 'Available', 'Available', 'Available', '50% advance', 'On Demand', 'fixed,chef', 550, 0, '2018-12-26 12:24:01', '2018-12-26 12:24:01');
INSERT INTO `catering_feature` VALUES (14, 244, 'Cantonment', 6, 20, 'Available', 'Available', 'Available', '50% advance', 'Available', 'fixed,chef', 550, 0, '2018-12-26 12:28:13', '2018-12-26 12:28:13');
INSERT INTO `catering_feature` VALUES (15, 245, 'Khilkhet', 7, 50, 'Available', 'Available', 'Available', '50% advance', 'Available', 'fixed,chef', 500, 0, '2018-12-26 12:35:01', '2018-12-26 12:35:01');
INSERT INTO `catering_feature` VALUES (16, 246, 'Mohammadpur', 5, 20, 'Available', 'Available', 'Available', '50% advance', 'On Demand', 'fixed,chef', 450, 0, '2018-12-26 12:45:16', '2018-12-26 12:45:16');
INSERT INTO `catering_feature` VALUES (17, 247, 'Dhanmondi', 3, 50, 'Available', 'Available', 'Available', '20% advance', 'Available', 'fixed,chef', 450, 0, '2018-12-26 12:55:18', '2018-12-26 12:55:18');
INSERT INTO `catering_feature` VALUES (18, 248, 'Mirpur', 4, 20, 'Available', 'Available', 'Available', '50% advance', 'Available', 'fixed,chef', 10000, 0, '2018-12-26 13:06:19', '2018-12-26 13:06:19');
INSERT INTO `catering_feature` VALUES (19, 379, '0 test catering', 0, 0, 'i', 'i', 'i', 'i', 'i', 'fixed,chef', 100, 0, '2019-04-11 17:13:08', '2019-04-11 17:13:08');
INSERT INTO `catering_feature` VALUES (20, 387, 'g', 0, 0, 'g', 'g', 'g', NULL, NULL, 'fixed', 0, 0, '2019-04-11 17:26:15', '2019-04-11 17:26:15');
INSERT INTO `catering_feature` VALUES (21, 388, 'g', 0, 0, 'g', 'g', 'g', 'g', 'g', NULL, 0, 0, '2019-04-11 17:26:29', '2019-04-11 17:26:29');
INSERT INTO `catering_feature` VALUES (22, 397, 't', 0, 0, 't', 't', 't', 't', 't', 'chef', 0, 0, '2019-04-28 20:13:11', '2019-04-28 20:13:11');

-- ----------------------------
-- Table structure for change_logs
-- ----------------------------
DROP TABLE IF EXISTS `change_logs`;
CREATE TABLE `change_logs`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `vendor_service` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `package_gallery` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `table_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `table_id` int(11) NULL DEFAULT NULL,
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `action` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `order_action` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of change_logs
-- ----------------------------
INSERT INTO `change_logs` VALUES (1, 3, 'vendor', NULL, 'vendors', 397, 'Add a new Vendor ( test -> venue  ) by Sazzad Hossain ', 'add', NULL, '2019-04-23 15:32:08', '2019-04-23 15:32:08');
INSERT INTO `change_logs` VALUES (2, 3, 'vendor', NULL, 'vendors', 397, 'Vendor ( test -> venue ) Updated  by Sazzad Hossain ', 'update', NULL, '2019-04-23 15:48:06', '2019-04-23 15:48:06');
INSERT INTO `change_logs` VALUES (3, 3, 'vendor', NULL, 'vendors', NULL, 'Vendor ( test -> venue ) Deleted  by Sazzad Hossain ', 'delete', NULL, '2019-04-23 15:52:56', '2019-04-23 15:52:56');
INSERT INTO `change_logs` VALUES (4, 3, 'vendor', NULL, 'vendors', 1, 'Deactivate a Vendor ( Casnova Party Centre -> venue  ) by Sazzad Hossain ', 'deactivate', NULL, '2019-04-23 16:30:41', '2019-04-23 16:30:41');
INSERT INTO `change_logs` VALUES (5, 3, 'vendor', NULL, 'vendors', 1, 'Activate a Vendor ( Casnova Party Centre -> venue  ) by Sazzad Hossain ', 'activate', NULL, '2019-04-23 16:30:56', '2019-04-23 16:30:56');
INSERT INTO `change_logs` VALUES (6, 3, 'vendor', 'package', 'vendors', 1, 'add package in a Vendor ( Casnova Party Centre -> venue  ) by Sazzad Hossain ', 'add', NULL, '2019-04-23 16:42:49', '2019-04-23 16:42:49');
INSERT INTO `change_logs` VALUES (7, 3, 'vendor', 'package', 'vendors', NULL, 'One package Deleted from a Vendor ( Casnova Party Centre -> venue  ) by Sazzad Hossain ', 'delete', NULL, '2019-04-23 16:50:51', '2019-04-23 16:50:51');
INSERT INTO `change_logs` VALUES (8, 3, 'vendor', 'gallery', 'vendors', 1, 'Add new gallery in a Vendor ( Casnova Party Centre -> venue  ) by Sazzad Hossain ', 'add', NULL, '2019-04-23 17:41:24', '2019-04-23 17:41:24');
INSERT INTO `change_logs` VALUES (9, 3, 'vendor', 'gallery', 'vendors', NULL, 'One gallery Deleted from  a Vendor ( Casnova Party Centre -> venue  ) by Sazzad Hossain ', 'delete', NULL, '2019-04-23 17:44:53', '2019-04-23 17:44:53');
INSERT INTO `change_logs` VALUES (10, 2, 'service', NULL, 'products', 277, 'Add a new Service ( test -> vehicle  ) by Admin', 'add', NULL, '2019-04-24 14:08:13', '2019-04-24 14:08:13');
INSERT INTO `change_logs` VALUES (11, 2, 'service', NULL, 'products', 277, 'Service ( test -> vehicle  ) Updated by Admin', 'update', NULL, '2019-04-24 14:11:26', '2019-04-24 14:11:26');
INSERT INTO `change_logs` VALUES (12, 2, 'service', NULL, 'products', NULL, 'Service ( test -> vehicle  ) Deleted by Admin', 'delete', NULL, '2019-04-24 14:41:18', '2019-04-24 14:41:18');
INSERT INTO `change_logs` VALUES (13, 2, 'service', NULL, 'products', 276, 'Service ( test -> vehicle  ) deactivate by Admin', 'deactivate', NULL, '2019-04-24 15:14:50', '2019-04-24 15:14:50');
INSERT INTO `change_logs` VALUES (14, 2, 'service', NULL, 'products', 276, 'Service ( test -> vehicle  ) Activate by Admin', 'activate', NULL, '2019-04-24 15:15:05', '2019-04-24 15:15:05');
INSERT INTO `change_logs` VALUES (15, 2, NULL, NULL, 'admins', NULL, 'New user (sazzad Hossain Nirjhor) added Admin', 'add', NULL, '2019-04-24 15:33:51', '2019-04-24 15:33:51');
INSERT INTO `change_logs` VALUES (16, 2, NULL, NULL, 'admins', NULL, 'User (a) Deleted by-Admin', 'delete', NULL, '2019-04-24 15:35:52', '2019-04-24 15:35:52');
INSERT INTO `change_logs` VALUES (17, 2, NULL, NULL, 'admins', NULL, 'User (abc) Info Updated by-Admin', 'update', NULL, '2019-04-24 15:38:16', '2019-04-24 15:38:16');
INSERT INTO `change_logs` VALUES (18, 2, 'vendor', NULL, 'query_cart', 6, 'Confirm-Query for Customer (sazzad3029@gmail.com) <br> vendor ( bridal outfit -> bridal_outfit  ) by Admin', 'update', NULL, '2019-04-25 13:24:47', '2019-04-25 13:24:47');
INSERT INTO `change_logs` VALUES (19, 2, 'vendor', NULL, 'query_cart', 6, 'Confirm-Query for Customer (sazzad3029@gmail.com) :: vendor ( bridal outfit -> bridal_outfit  ) by Admin', NULL, 'confirm_query', '2019-04-25 15:27:41', '2019-04-25 15:27:41');
INSERT INTO `change_logs` VALUES (20, 2, 'service', NULL, 'query_cart', 7, 'Confirm-Query for Customer (sazzad3029@gmail.com) :: service ( Coffee -> holud_snacks  ) by Admin', NULL, 'confirm_query', '2019-04-25 15:59:49', '2019-04-25 15:59:49');
INSERT INTO `change_logs` VALUES (21, 2, 'service', NULL, 'query_cart', 7, 'Confirm-Query for Customer (sazzad3029@gmail.com) :: service ( Coffee -> holud_snacks  ) by Admin', NULL, 'confirm_query', '2019-04-25 16:00:50', '2019-04-25 16:00:50');
INSERT INTO `change_logs` VALUES (22, 2, 'vendor', NULL, 'query_cart', 6, 'Confirm-Query for Customer (sazzad3029@gmail.com) :: vendor ( bridal outfit -> bridal_outfit  ) by Admin', NULL, 'confirm_query', '2019-04-25 16:06:49', '2019-04-25 16:06:49');
INSERT INTO `change_logs` VALUES (23, 2, 'vendor', NULL, 'query_cart', 6, 'delete-Query for Customer (sazzad3029@gmail.com) :: vendor ( bridal outfit -> bridal_outfit  ) by Admin', NULL, 'delete_query', '2019-04-25 16:13:05', '2019-04-25 16:13:05');
INSERT INTO `change_logs` VALUES (24, 2, 'vendor', NULL, 'query_cart', 8, 'Confirm-Query for Customer (sazzad3029@gmail.com) :: vendor ( Hasan Catering Service -> catering  ) by Admin', NULL, 'confirm_query', '2019-04-25 17:37:14', '2019-04-25 17:37:14');
INSERT INTO `change_logs` VALUES (25, 2, 'vendor', NULL, 'query_cart', 10, 'Confirm-Query for Customer (dev2@gmail.com) :: vendor ( Profile- Wedding & Event Photography -> photography_and_cinematography  ) by Admin', NULL, 'confirm_query', '2019-04-28 13:32:11', '2019-04-28 13:32:11');
INSERT INTO `change_logs` VALUES (26, 2, 'vendor', NULL, 'query_cart', 11, 'Confirm-Query for Customer (dev2@gmail.com) :: vendor ( Exclusive Wedding Decor\r\n -> decoration  ) by Admin', NULL, 'confirm_query', '2019-04-28 14:33:11', '2019-04-28 14:33:11');
INSERT INTO `change_logs` VALUES (27, 2, 'vendor', NULL, 'confirmorder', 31, 'Confirm-Booking for Customer (dev2@gmail.com) :: vendor ( Exclusive Wedding Decor\r\n -> decoration  ) by Admin', NULL, 'confirm_booking', '2019-04-28 16:11:59', '2019-04-28 16:11:59');
INSERT INTO `change_logs` VALUES (28, 2, 'vendor', NULL, 'confirmorder', 31, 'Booking Deleted for Customer (dev2@gmail.com) :: vendor ( Exclusive Wedding Decor\r\n -> decoration  ) by Admin', NULL, 'delete_booking', '2019-04-28 16:18:35', '2019-04-28 16:18:35');
INSERT INTO `change_logs` VALUES (29, 2, 'vendor', NULL, 'confirmorder', 31, 'Confirm-Booking for Customer (dev2@gmail.com) :: vendor ( Exclusive Wedding Decor\r\n -> decoration  ) by Admin', NULL, 'confirm_booking', '2019-04-28 16:46:22', '2019-04-28 16:46:22');
INSERT INTO `change_logs` VALUES (30, 2, 'vendor', NULL, 'confirmorder', 31, 'Confirm-Booking for Customer (dev2@gmail.com) :: vendor ( Exclusive Wedding Decor\r\n -> decoration  ) by Admin', NULL, 'confirm_booking', '2019-04-28 16:48:13', '2019-04-28 16:48:13');
INSERT INTO `change_logs` VALUES (31, 2, 'vendor', NULL, 'confirmorder', 31, 'Payment Confirmation for Customer (dev2@gmail.com) :: vendor ( Exclusive Wedding Decor\r\n -> decoration  ) by Admin', NULL, 'confirm_payment', '2019-04-28 17:01:44', '2019-04-28 17:01:44');
INSERT INTO `change_logs` VALUES (32, 2, 'vendor', NULL, 'confirmorder', 30, 'Payment Confirmation for Customer (dev2@gmail.com) :: vendor ( Profile- Wedding & Event Photography -> photography_and_cinematography  ) by Admin', NULL, 'confirm_payment', '2019-04-28 17:58:36', '2019-04-28 17:58:36');
INSERT INTO `change_logs` VALUES (33, 2, 'vendor', NULL, 'vendors', 397, 'Add a new Vendor ( test -> catering  ) by Admin', 'add', NULL, '2019-04-28 20:13:11', '2019-04-28 20:13:11');
INSERT INTO `change_logs` VALUES (34, 3, 'vendor', NULL, 'query_cart', 10, 'Confirm-Query for Customer (sazzad3029@gmail.com) :: vendor ( PHOTOHOLLIC -> photography_and_cinematography  ) by Sazzad Hossain ', NULL, 'confirm_query', '2019-05-05 17:59:05', '2019-05-05 17:59:05');
INSERT INTO `change_logs` VALUES (35, 3, 'vendor', NULL, 'confirmorder', 33, 'Confirm-Booking for Customer (sazzad3029@gmail.com) :: vendor ( PHOTOHOLLIC -> photography_and_cinematography  ) by Sazzad Hossain ', NULL, 'confirm_booking', '2019-05-05 18:06:30', '2019-05-05 18:06:30');
INSERT INTO `change_logs` VALUES (36, 3, 'service', NULL, 'query_cart', 11, 'Confirm-Query for Customer (sazzad3029@gmail.com) :: service ( test -> Choreography  ) by Sazzad Hossain ', NULL, 'confirm_query', '2019-05-05 18:58:52', '2019-05-05 18:58:52');
INSERT INTO `change_logs` VALUES (37, 3, 'vendor', NULL, 'query_cart', 12, 'Confirm-Query for Customer (sazzad3029@gmail.com) :: vendor ( Reminiscence Photography -> photography_and_cinematography  ) by Sazzad Hossain ', NULL, 'confirm_query', '2019-05-05 18:59:02', '2019-05-05 18:59:02');
INSERT INTO `change_logs` VALUES (38, 3, 'vendor', NULL, 'confirmorder', 35, 'Confirm-Booking for Customer (sazzad3029@gmail.com) :: vendor ( Reminiscence Photography -> photography_and_cinematography  ) by Sazzad Hossain ', NULL, 'confirm_booking', '2019-05-05 18:59:21', '2019-05-05 18:59:21');
INSERT INTO `change_logs` VALUES (39, 3, 'service', NULL, 'confirmorder', 34, 'Confirm-Booking for Customer (sazzad3029@gmail.com) :: service ( test -> Choreography  ) by Sazzad Hossain ', NULL, 'confirm_booking', '2019-05-05 18:59:23', '2019-05-05 18:59:23');
INSERT INTO `change_logs` VALUES (40, 3, 'vendor', NULL, 'query_cart', 1, 'Confirm-Query for Customer (sazzad3029@gmail.com) :: vendor ( Sea Shell Party Center -> venue  ) by Sazzad Hossain ', NULL, 'confirm_query', '2019-05-06 12:04:16', '2019-05-06 12:04:16');

-- ----------------------------
-- Table structure for checklist
-- ----------------------------
DROP TABLE IF EXISTS `checklist`;
CREATE TABLE `checklist`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `details` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 301 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of checklist
-- ----------------------------
INSERT INTO `checklist` VALUES (1, 41, 1, 'Fix your event dates', '8 months', 1, '2019-04-25 12:39:30', '2019-04-25 12:39:50');
INSERT INTO `checklist` VALUES (2, 41, 1, 'Create guest list.', '8 months', 1, '2019-04-25 12:39:30', '2019-04-25 12:39:50');
INSERT INTO `checklist` VALUES (3, 41, 1, 'Fix your budget', '8 months', 1, '2019-04-25 12:39:30', '2019-04-25 12:39:51');
INSERT INTO `checklist` VALUES (4, 41, 2, 'Decide on joint ceremony or separate.', '8 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (5, 41, 2, 'Look up wedding and holud venues within budget', '7 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (6, 41, 2, 'Finalize selection of event venue.', '6 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (7, 41, 2, 'Complete booking payment of the venue.', '6 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (8, 41, 2, 'Visit venue for reassuring everything.', '15 days', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (9, 41, 3, 'Research online for wedding and holud ceremony theme', '4 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (10, 41, 3, ' Read our articles to know current trends and ideas', '4 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (11, 41, 3, ' Talk to relatives and friends regarding bride-groom entry theme', '4 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (12, 41, 3, ' Finalize your Decoration theme as well as the Decor team', '3 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (13, 41, 3, ' Discuss theme with Decor team', '2 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (14, 41, 3, ' Select & book florists to decorate home and car', '2 weeks', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (15, 41, 3, ' Send someone at the venue on event day to assure the progress.', '', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (16, 41, 3, ' Read our articles to find different poses or theme for your photos', '2 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (17, 41, 3, ' Discuss theme, decoration, lighting and make up with photographer', '1 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (18, 41, 3, ' Discuss preferred song for cinematic trailer', '1 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (19, 41, 3, ' Done your pre-wedding shoot if you have any plan', '15 days', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (20, 41, 3, ' Send someone at the venue on event day to assure the progress.', '', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (21, 41, 5, ' Research about wedding outfits through our articles', '3 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (22, 41, 5, ' Finalize selection of your wedding dress.', '3 months', 0, '2019-04-25 12:39:30', '2019-04-25 12:39:30');
INSERT INTO `checklist` VALUES (23, 41, 5, ' Make a list of outfits for other days', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (24, 41, 5, ' Create a list of clothes for relatives and in laws.', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (25, 41, 5, ' Finish your shopping', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (26, 41, 5, ' Tailoring of clothes', 'at least 1 month ', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (27, 41, 5, ' Check up with tailor for trial and fitting', 'at least 15 days ', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (28, 41, 6, ' Create a budget for jewelleries ', '3 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (29, 41, 6, ' Try to hunt down your treasure jewellery as a blessing from your elders if you are the bride.', '3 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (30, 41, 6, ' Research online for trending types of jewelleries.', '3 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (31, 41, 6, ' Select jewelleries that matches your outfit and theme', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (32, 41, 6, ' Take help from someone experienced on jewellery shopping day ', '1 month', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (33, 41, 7, ' Maintain diet and start gym. ', '3 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (34, 41, 7, ' Research online and read our articles for make-up theme matching your outfits & jewellery.', '3 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (35, 41, 7, ' Book beauty parlor closer to home and venue ', '2 month ', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (36, 41, 7, ' Discuss with makeup artists about your preference ', '1 month ', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (37, 41, 7, ' Groom must get haircut & facial treatment. ', '5-7 days ', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (38, 41, 7, ' Start early for parlour and try to reach at venue 1 hour  scheduled time.', 'Event day', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (39, 41, 8, ' Research photographers online and social media ', '6 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (40, 41, 8, ' Select and book photographer & cinematographer ', '4 months ', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (41, 41, 8, ' Read our articles to find different poses or theme for your photos ', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (42, 41, 8, ' Discuss theme, decoration, lighting and make up with photographer ', '1 month', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (43, 41, 8, ' Discuss preferred song for cinematic trailer ', '1 month', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (44, 41, 8, ' Done your pre-wedding shoot if you have any plan ', '15 days', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (45, 41, 9, ' Select invitation card design. ', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (46, 41, 9, ' Double check the texts for card/order ', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (47, 41, 9, ' Print required no. of cards ', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (48, 41, 9, ' Send out or deliver invitation cards ', '1 month', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (49, 41, 9, ' Create a Facebook event page and invite guests. ', '15 days', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (50, 41, 10, ' Select your food menus for different ceremonies. ', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (51, 41, 10, ' Appoint preferred catering and discuss the menu. ', '1 month', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (52, 41, 10, ' Make a list of relatives and in laws to distribute sweets/desserts ', '1 week', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (53, 41, 11, ' Create list of people for your dance practice. ', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (54, 41, 11, ' Select for bands/solo artists/DJ ', '2 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (55, 41, 11, ' Download and edit/cut finalized songs for dance performance ', '1 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (56, 41, 11, ' Fix date, time and place for dance practice. ', '1 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (57, 41, 11, ' Book Choreographer from Ayojok.com if you need ', '1 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (58, 41, 11, ' Book sound system & lighting.', '1 months', 0, '2019-04-25 12:39:31', '2019-04-25 12:39:31');
INSERT INTO `checklist` VALUES (59, 41, 11, ' Discuss preferred songs with band/artist/DJ', '15 days', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (60, 41, 12, ' Find a Wedding Officiant ', '1 month ', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (61, 41, 12, ' Gather necessary documents to file marriage license ', '15 days', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (62, 41, 13, ' Make a list of goodies that you will give as trousseau ', '1 month', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (63, 41, 13, ' Packing gifts for wedding and Ask relatives and friends for help ', '5 days', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (64, 41, 13, ' Ensure a separate car to take the gifts to the venue ', '2 days', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (65, 41, 14, ' Rent a car for bride/groom car if necessary. ', '2 weeks', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (66, 41, 14, ' Rent cars for friends & family. ', '2 weeks', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (67, 41, 14, ' Make a schedule for car decoration and hire someone accordingly. (groom side) ', '2 weeks', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (68, 41, 14, ' Book hotels/guest houses for guests from outside towns. ', '1 month ', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (69, 41, 14, ' Book hotels or resorts for destination wedding ', '5 months ', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (70, 41, 15, ' Create a budget for honeymoon ', '2 months', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (71, 41, 15, ' Research online for honeymoon destinations. ', '2 months', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (72, 41, 15, ' Select honeymoon destination and fix travel date. ', '1 month', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (73, 41, 15, ' Search online for best tourism packages ', '1 month', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (74, 41, 15, ' Book hotels online via air bnb, tripadvisor etc ', '1 month', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (75, 41, 15, ' Purchase plane tickets ', '1 month', 0, '2019-04-25 12:39:32', '2019-04-25 12:39:32');
INSERT INTO `checklist` VALUES (151, 43, 1, 'Fix your event dates', '8 months', 0, '2019-04-28 12:53:43', '2019-04-28 17:24:52');
INSERT INTO `checklist` VALUES (152, 43, 1, 'Create guest list.', '8 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (153, 43, 1, 'Fix your budget', '8 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (154, 43, 2, 'Decide on joint ceremony or separate.', '8 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (155, 43, 2, 'Look up wedding and holud venues within budget', '7 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (156, 43, 2, 'Finalize selection of event venue.', '6 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (157, 43, 2, 'Complete booking payment of the venue.', '6 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (158, 43, 2, 'Visit venue for reassuring everything.', '15 days', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (159, 43, 3, 'Research online for wedding and holud ceremony theme', '4 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (160, 43, 3, ' Read our articles to know current trends and ideas', '4 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (161, 43, 3, ' Talk to relatives and friends regarding bride-groom entry theme', '4 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (162, 43, 3, ' Finalize your Decoration theme as well as the Decor team', '3 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (163, 43, 3, ' Discuss theme with Decor team', '2 months', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (164, 43, 3, ' Select & book florists to decorate home and car', '2 weeks', 0, '2019-04-28 12:53:43', '2019-04-28 12:53:43');
INSERT INTO `checklist` VALUES (165, 43, 3, ' Send someone at the venue on event day to assure the progress.', '', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (166, 43, 3, ' Read our articles to find different poses or theme for your photos', '2 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (167, 43, 3, ' Discuss theme, decoration, lighting and make up with photographer', '1 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (168, 43, 3, ' Discuss preferred song for cinematic trailer', '1 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (169, 43, 3, ' Done your pre-wedding shoot if you have any plan', '15 days', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (170, 43, 3, ' Send someone at the venue on event day to assure the progress.', '', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (171, 43, 5, ' Research about wedding outfits through our articles', '3 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (172, 43, 5, ' Finalize selection of your wedding dress.', '3 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (173, 43, 5, ' Make a list of outfits for other days', '2 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (174, 43, 5, ' Create a list of clothes for relatives and in laws.', '2 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (175, 43, 5, ' Finish your shopping', '2 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (176, 43, 5, ' Tailoring of clothes', 'at least 1 month ', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (177, 43, 5, ' Check up with tailor for trial and fitting', 'at least 15 days ', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (178, 43, 6, ' Create a budget for jewelleries ', '3 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (179, 43, 6, ' Try to hunt down your treasure jewellery as a blessing from your elders if you are the bride.', '3 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (180, 43, 6, ' Research online for trending types of jewelleries.', '3 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (181, 43, 6, ' Select jewelleries that matches your outfit and theme', '2 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (182, 43, 6, ' Take help from someone experienced on jewellery shopping day ', '1 month', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (183, 43, 7, ' Maintain diet and start gym. ', '3 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (184, 43, 7, ' Research online and read our articles for make-up theme matching your outfits & jewellery.', '3 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (185, 43, 7, ' Book beauty parlor closer to home and venue ', '2 month ', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (186, 43, 7, ' Discuss with makeup artists about your preference ', '1 month ', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (187, 43, 7, ' Groom must get haircut & facial treatment. ', '5-7 days ', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (188, 43, 7, ' Start early for parlour and try to reach at venue 1 hour  scheduled time.', 'Event day', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (189, 43, 8, ' Research photographers online and social media ', '6 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (190, 43, 8, ' Select and book photographer & cinematographer ', '4 months ', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (191, 43, 8, ' Read our articles to find different poses or theme for your photos ', '2 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (192, 43, 8, ' Discuss theme, decoration, lighting and make up with photographer ', '1 month', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (193, 43, 8, ' Discuss preferred song for cinematic trailer ', '1 month', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (194, 43, 8, ' Done your pre-wedding shoot if you have any plan ', '15 days', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (195, 43, 9, ' Select invitation card design. ', '2 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (196, 43, 9, ' Double check the texts for card/order ', '2 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (197, 43, 9, ' Print required no. of cards ', '2 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (198, 43, 9, ' Send out or deliver invitation cards ', '1 month', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (199, 43, 9, ' Create a Facebook event page and invite guests. ', '15 days', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (200, 43, 10, ' Select your food menus for different ceremonies. ', '2 months', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (201, 43, 10, ' Appoint preferred catering and discuss the menu. ', '1 month', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (202, 43, 10, ' Make a list of relatives and in laws to distribute sweets/desserts ', '1 week', 0, '2019-04-28 12:53:44', '2019-04-28 12:53:44');
INSERT INTO `checklist` VALUES (203, 43, 11, ' Create list of people for your dance practice. ', '2 months', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (204, 43, 11, ' Select for bands/solo artists/DJ ', '2 months', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (205, 43, 11, ' Download and edit/cut finalized songs for dance performance ', '1 months', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (206, 43, 11, ' Fix date, time and place for dance practice. ', '1 months', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (207, 43, 11, ' Book Choreographer from Ayojok.com if you need ', '1 months', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (208, 43, 11, ' Book sound system & lighting.', '1 months', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (209, 43, 11, ' Discuss preferred songs with band/artist/DJ', '15 days', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (210, 43, 12, ' Find a Wedding Officiant ', '1 month ', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (211, 43, 12, ' Gather necessary documents to file marriage license ', '15 days', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (212, 43, 13, ' Make a list of goodies that you will give as trousseau ', '1 month', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (213, 43, 13, ' Packing gifts for wedding and Ask relatives and friends for help ', '5 days', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (214, 43, 13, ' Ensure a separate car to take the gifts to the venue ', '2 days', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (215, 43, 14, ' Rent a car for bride/groom car if necessary. ', '2 weeks', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (216, 43, 14, ' Rent cars for friends & family. ', '2 weeks', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (217, 43, 14, ' Make a schedule for car decoration and hire someone accordingly. (groom side) ', '2 weeks', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (218, 43, 14, ' Book hotels/guest houses for guests from outside towns. ', '1 month ', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (219, 43, 14, ' Book hotels or resorts for destination wedding ', '5 months ', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (220, 43, 15, ' Create a budget for honeymoon ', '2 months', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (221, 43, 15, ' Research online for honeymoon destinations. ', '2 months', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (222, 43, 15, ' Select honeymoon destination and fix travel date. ', '1 month', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (223, 43, 15, ' Search online for best tourism packages ', '1 month', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (224, 43, 15, ' Book hotels online via air bnb, tripadvisor etc ', '1 month', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (225, 43, 15, ' Purchase plane tickets ', '1 month', 0, '2019-04-28 12:53:45', '2019-04-28 12:53:45');
INSERT INTO `checklist` VALUES (226, 44, 1, 'Fix your event dates', '8 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (227, 44, 1, 'Create guest list.', '8 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (228, 44, 1, 'Fix your budget', '8 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (229, 44, 2, 'Decide on joint ceremony or separate.', '8 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (230, 44, 2, 'Look up wedding and holud venues within budget', '7 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (231, 44, 2, 'Finalize selection of event venue.', '6 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (232, 44, 2, 'Complete booking payment of the venue.', '6 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (233, 44, 2, 'Visit venue for reassuring everything.', '15 days', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (234, 44, 3, 'Research online for wedding and holud ceremony theme', '4 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (235, 44, 3, ' Read our articles to know current trends and ideas', '4 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (236, 44, 3, ' Talk to relatives and friends regarding bride-groom entry theme', '4 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (237, 44, 3, ' Finalize your Decoration theme as well as the Decor team', '3 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (238, 44, 3, ' Discuss theme with Decor team', '2 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (239, 44, 3, ' Select & book florists to decorate home and car', '2 weeks', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (240, 44, 3, ' Send someone at the venue on event day to assure the progress.', '', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (241, 44, 3, ' Read our articles to find different poses or theme for your photos', '2 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (242, 44, 3, ' Discuss theme, decoration, lighting and make up with photographer', '1 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (243, 44, 3, ' Discuss preferred song for cinematic trailer', '1 months', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (244, 44, 3, ' Done your pre-wedding shoot if you have any plan', '15 days', 0, '2019-04-29 10:41:26', '2019-04-29 10:41:26');
INSERT INTO `checklist` VALUES (245, 44, 3, ' Send someone at the venue on event day to assure the progress.', '', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (246, 44, 5, ' Research about wedding outfits through our articles', '3 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (247, 44, 5, ' Finalize selection of your wedding dress.', '3 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (248, 44, 5, ' Make a list of outfits for other days', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (249, 44, 5, ' Create a list of clothes for relatives and in laws.', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (250, 44, 5, ' Finish your shopping', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (251, 44, 5, ' Tailoring of clothes', 'at least 1 month ', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (252, 44, 5, ' Check up with tailor for trial and fitting', 'at least 15 days ', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (253, 44, 6, ' Create a budget for jewelleries ', '3 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (254, 44, 6, ' Try to hunt down your treasure jewellery as a blessing from your elders if you are the bride.', '3 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (255, 44, 6, ' Research online for trending types of jewelleries.', '3 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (256, 44, 6, ' Select jewelleries that matches your outfit and theme', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (257, 44, 6, ' Take help from someone experienced on jewellery shopping day ', '1 month', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (258, 44, 7, ' Maintain diet and start gym. ', '3 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (259, 44, 7, ' Research online and read our articles for make-up theme matching your outfits & jewellery.', '3 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (260, 44, 7, ' Book beauty parlor closer to home and venue ', '2 month ', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (261, 44, 7, ' Discuss with makeup artists about your preference ', '1 month ', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (262, 44, 7, ' Groom must get haircut & facial treatment. ', '5-7 days ', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (263, 44, 7, ' Start early for parlour and try to reach at venue 1 hour  scheduled time.', 'Event day', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (264, 44, 8, ' Research photographers online and social media ', '6 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (265, 44, 8, ' Select and book photographer & cinematographer ', '4 months ', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (266, 44, 8, ' Read our articles to find different poses or theme for your photos ', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (267, 44, 8, ' Discuss theme, decoration, lighting and make up with photographer ', '1 month', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (268, 44, 8, ' Discuss preferred song for cinematic trailer ', '1 month', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (269, 44, 8, ' Done your pre-wedding shoot if you have any plan ', '15 days', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (270, 44, 9, ' Select invitation card design. ', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (271, 44, 9, ' Double check the texts for card/order ', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (272, 44, 9, ' Print required no. of cards ', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (273, 44, 9, ' Send out or deliver invitation cards ', '1 month', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (274, 44, 9, ' Create a Facebook event page and invite guests. ', '15 days', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (275, 44, 10, ' Select your food menus for different ceremonies. ', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (276, 44, 10, ' Appoint preferred catering and discuss the menu. ', '1 month', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (277, 44, 10, ' Make a list of relatives and in laws to distribute sweets/desserts ', '1 week', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (278, 44, 11, ' Create list of people for your dance practice. ', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (279, 44, 11, ' Select for bands/solo artists/DJ ', '2 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (280, 44, 11, ' Download and edit/cut finalized songs for dance performance ', '1 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (281, 44, 11, ' Fix date, time and place for dance practice. ', '1 months', 0, '2019-04-29 10:41:27', '2019-04-29 10:41:27');
INSERT INTO `checklist` VALUES (282, 44, 11, ' Book Choreographer from Ayojok.com if you need ', '1 months', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (283, 44, 11, ' Book sound system & lighting.', '1 months', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (284, 44, 11, ' Discuss preferred songs with band/artist/DJ', '15 days', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (285, 44, 12, ' Find a Wedding Officiant ', '1 month ', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (286, 44, 12, ' Gather necessary documents to file marriage license ', '15 days', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (287, 44, 13, ' Make a list of goodies that you will give as trousseau ', '1 month', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (288, 44, 13, ' Packing gifts for wedding and Ask relatives and friends for help ', '5 days', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (289, 44, 13, ' Ensure a separate car to take the gifts to the venue ', '2 days', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (290, 44, 14, ' Rent a car for bride/groom car if necessary. ', '2 weeks', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (291, 44, 14, ' Rent cars for friends & family. ', '2 weeks', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (292, 44, 14, ' Make a schedule for car decoration and hire someone accordingly. (groom side) ', '2 weeks', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (293, 44, 14, ' Book hotels/guest houses for guests from outside towns. ', '1 month ', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (294, 44, 14, ' Book hotels or resorts for destination wedding ', '5 months ', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (295, 44, 15, ' Create a budget for honeymoon ', '2 months', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (296, 44, 15, ' Research online for honeymoon destinations. ', '2 months', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (297, 44, 15, ' Select honeymoon destination and fix travel date. ', '1 month', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (298, 44, 15, ' Search online for best tourism packages ', '1 month', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (299, 44, 15, ' Book hotels online via air bnb, tripadvisor etc ', '1 month', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');
INSERT INTO `checklist` VALUES (300, 44, 15, ' Purchase plane tickets ', '1 month', 0, '2019-04-29 10:41:28', '2019-04-29 10:41:28');

-- ----------------------------
-- Table structure for completed_queries
-- ----------------------------
DROP TABLE IF EXISTS `completed_queries`;
CREATE TABLE `completed_queries`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `vendor_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `tag_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `quantity` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `event_date` date NULL DEFAULT NULL,
  `shift` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total` double NOT NULL DEFAULT 0,
  `advance` double NOT NULL DEFAULT 0,
  `discount` double NOT NULL DEFAULT 0,
  `payment` double NOT NULL DEFAULT 0,
  `expiry_date` date NULL DEFAULT NULL,
  `expiry_time` time(0) NULL DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_available` tinyint(4) NOT NULL DEFAULT 0,
  `is_open` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `completed_queries_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `completed_queries_category_id_foreign`(`category_id`) USING BTREE,
  INDEX `completed_queries_vendor_id_foreign`(`vendor_id`) USING BTREE,
  INDEX `completed_queries_product_id_foreign`(`product_id`) USING BTREE,
  INDEX `completed_queries_tag_id_foreign`(`tag_id`) USING BTREE,
  CONSTRAINT `completed_queries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `catagories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `completed_queries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `completed_queries_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `completed_queries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `completed_queries_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for confirmorder
-- ----------------------------
DROP TABLE IF EXISTS `confirmorder`;
CREATE TABLE `confirmorder`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `catagory_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `vendors_id` int(11) NOT NULL DEFAULT 0,
  `time` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `invoice_id` int(11) NOT NULL DEFAULT 0,
  `temp_add` int(11) NOT NULL DEFAULT 0,
  `payment_type` int(11) NOT NULL DEFAULT 0,
  `mess` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_paid` tinyint(4) NOT NULL DEFAULT 0,
  `online_paid` tinyint(4) NOT NULL DEFAULT 0,
  `isconfirmed` int(11) NOT NULL,
  `is_delivered` tinyint(4) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL DEFAULT 0,
  `advance` int(11) NOT NULL DEFAULT 0,
  `is_open` tinyint(4) NOT NULL DEFAULT 0,
  `is_openForPayment` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of confirmorder
-- ----------------------------
INSERT INTO `confirmorder` VALUES (33, '05/01/2019', 41, 12, 0, 94, 'day', 0, 1, 0, 'ok', 0, 0, 1, 0, 100, 10, 1, 0, '2019-05-05 17:59:47', '2019-05-05 19:02:36');
INSERT INTO `confirmorder` VALUES (34, '05/16/2019', 41, 20, 274, 0, '5', 0, 1, 0, 'dfg', 0, 0, 1, 0, 100, 34, 1, 0, '2019-05-05 18:59:11', '2019-05-05 19:02:41');
INSERT INTO `confirmorder` VALUES (35, '05/09/2019', 41, 12, 0, 89, 'day', 0, 1, 2, 'gg', 0, 0, 1, 0, 2312, 13, 1, 0, '2019-05-05 18:59:14', '2019-05-05 19:02:57');

-- ----------------------------
-- Table structure for contactus
-- ----------------------------
DROP TABLE IF EXISTS `contactus`;
CREATE TABLE `contactus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `messbody` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_opened` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of contactus
-- ----------------------------
INSERT INTO `contactus` VALUES (1, 'Sazzad Hossain Nirjhor', 'Sazzad3029@gmail.com', '01685-262326', 'hello this is nirjhor', 1, '2019-04-04 11:34:37', '2019-04-04 11:36:48');
INSERT INTO `contactus` VALUES (2, 'developer', 'Sazzad3029@gmail.com', '01685262326', 'testing testing testing', 1, '2019-04-04 11:39:15', '2019-04-04 11:39:51');
INSERT INTO `contactus` VALUES (3, 'developer', 'Sazzad3029@gmail.com', '01685-262326', 'this is developers test', 0, '2019-04-04 11:49:56', '2019-04-04 11:49:56');
INSERT INTO `contactus` VALUES (4, 'new', 'NEW@GMAIL.COM', '01685262326', 'new new new new', 1, '2019-04-29 12:42:51', '2019-04-29 12:44:51');
INSERT INTO `contactus` VALUES (5, 'contact', 'con@gmail.com', '01685-262326', 'contact contact contact contact contact contact contact contact contact \ncontact contact contact \ncontact contact', 1, '2019-04-29 12:44:15', '2019-04-29 12:44:35');
INSERT INTO `contactus` VALUES (6, 'sazzad Hossain Nirjhor', 'admin@ayojok.com', '01685-262326', 'gfdgbvfds fgfd gf', 0, '2019-04-29 13:39:11', '2019-04-29 13:39:11');
INSERT INTO `contactus` VALUES (7, 'sazzad Hossain Nirjhor', 'admin@ayojok.com', '01685-262326', 'this is test', 0, '2019-04-29 18:52:36', '2019-04-29 18:52:36');
INSERT INTO `contactus` VALUES (8, 'sazzad Hossain Nirjhor', 'admin@ayojok.com', '01685-262326', 'hello', 0, '2019-04-29 18:55:18', '2019-04-29 18:55:18');
INSERT INTO `contactus` VALUES (9, 'Dev', 'dev@gmail.com', '01685-262326', 'Dev message from dev', 0, '2019-04-29 18:59:25', '2019-04-29 18:59:25');
INSERT INTO `contactus` VALUES (10, 'sazzad Hossain Nirjhor', 'admin@ayojok.com', '01685-262326', 'hello there you are', 0, '2019-04-29 19:37:36', '2019-04-29 19:37:36');
INSERT INTO `contactus` VALUES (11, 'dev', 'dev@gmail.com', '01685-262326', 'Dev from another Developer', 0, '2019-04-29 19:40:52', '2019-04-29 19:40:52');
INSERT INTO `contactus` VALUES (12, 'sazzad Hossain Nirjhor', 'admin@ayojok.com', '01685-262326', 'hello their how can you know about this', 0, '2019-04-29 19:45:18', '2019-04-29 19:45:18');
INSERT INTO `contactus` VALUES (13, 'Arif Ahmed Noor', 'sazzad@gmail.com', '01685-262326', 'ok', 0, '2019-04-29 19:47:42', '2019-04-29 19:47:42');
INSERT INTO `contactus` VALUES (14, 'sazzad Hossain Nirjhor', 'admin@ayojok.com', '01685-262326', 'ok ok ok ok ok ok', 0, '2019-04-29 19:49:04', '2019-04-29 19:49:04');
INSERT INTO `contactus` VALUES (15, 'sazzad Hossain Nirjhor', 'admin@ayojok.com', '01685-262326', 'ok ok ok ok ok', 0, '2019-04-29 20:01:23', '2019-04-29 20:01:23');
INSERT INTO `contactus` VALUES (16, 'sazzad Hossain Nirjhor', 'admin@gmail.com', '01685-262326', 'ok the', 0, '2019-04-29 20:02:11', '2019-04-29 20:02:11');
INSERT INTO `contactus` VALUES (17, 'sazzad Hossain Nirjhor', 'admin@ayojok.com', '01685-2623', 'fcgfd', 0, '2019-04-29 20:08:12', '2019-04-29 20:08:12');
INSERT INTO `contactus` VALUES (18, 'sazzad Hossain Nirjhor', 'sazzad@gmail.com', '01685-262326', 'this message should be send from ayojok', 0, '2019-04-30 11:16:44', '2019-04-30 11:16:44');
INSERT INTO `contactus` VALUES (19, 'sazzad Hossain Nirjhor', 'sazzad@gmail.com', '01685-262326', 'message send from ayojok', 1, '2019-04-30 11:18:11', '2019-04-30 11:20:35');

-- ----------------------------
-- Table structure for custom_order
-- ----------------------------
DROP TABLE IF EXISTS `custom_order`;
CREATE TABLE `custom_order`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `time` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `advance` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for decoration_feature
-- ----------------------------
DROP TABLE IF EXISTS `decoration_feature`;
CREATE TABLE `decoration_feature`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` int(11) NOT NULL DEFAULT 0,
  `feature_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `event_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `low_price` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of decoration_feature
-- ----------------------------
INSERT INTO `decoration_feature` VALUES (11, 9, 'Shukrabad', 8, '50% advance', 'Not Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 10000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (12, 43, 'Dhanmondi', 7, '50% Advance', 'Not Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 10000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (13, 44, 'Dhanmondi', 6, '50% Advance', 'Not Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 10000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (14, 93, 'Mohakhali DOHS', 4, '60% Advance', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 15000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (15, 96, 'Malibagh', 2, '50% advance', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 10000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (16, 97, 'katabon', 3, '50% advance', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 10000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (17, 100, 'Mohakhali', 6, 'Minimum 5000 BDT', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 15000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (18, 101, 'ECB chottor', 3, '60% of total amount', 'Available', 'Book before 10 Days', 'Yes', 'No', 'Yes', 'wedding,birthday,corporate', 14000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (19, 102, 'Banani', 18, 'Full Advance', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 200000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (20, 103, 'Niketon', 6, '50%', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 25000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (21, 111, 'Bashundhara', 4, '70%', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 50000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (22, 113, 'Lalmatia', 8, '50%', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 25000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (23, 114, 'Uttara', 6, '50%', 'Not Available', 'Yes', 'Yes', 'No', 'Yes', 'wedding,birthday', 15000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (24, 115, 'Niketon', 8, '80%', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 30000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (25, 116, 'Bashundhara', 6, '50%', 'Available', 'Yes', 'Yes', 'No', 'Yes', 'wedding,birthday', 50000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (26, 117, 'Mirpur', 6, '50%', 'On Demand', 'Yes', 'Yes', 'No', 'Yes', 'wedding,birthday', 20000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (27, 118, 'Mirpur', 6, '50%', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 25000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (28, 119, 'Uttara', 3, '60%', 'Available', 'Yes', 'Yes', 'No', 'Yes', 'wedding,birthday', 30000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (29, 120, 'Baily Road', 4, '50%', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 25000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (30, 121, 'Dhaka Cantonment', 11, '50%', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 50000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (31, 132, 'Motijheel', 3, '50%', 'Available', 'Yes', 'Yes', 'Yes', 'Yes', 'wedding,birthday,corporate', 10000, 0, NULL, NULL);
INSERT INTO `decoration_feature` VALUES (32, 172, 'Mirpur', 5, '70% Advance', 'Depend on Place', 'Available', 'Available', 'Not Available', 'Available', NULL, 15000, 0, '2018-12-05 12:33:48', '2018-12-05 12:33:48');
INSERT INTO `decoration_feature` VALUES (33, 173, 'Dhanmondi', 6, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', NULL, 20000, 0, '2018-12-05 12:48:59', '2018-12-05 12:48:59');
INSERT INTO `decoration_feature` VALUES (34, 174, 'Khilgaon', 2, '60% Advance', 'Available', 'Available', 'Available', 'Not Available', 'Available', 'wedding,birthday', 15000, 0, '2018-12-05 13:05:26', '2018-12-05 13:05:26');
INSERT INTO `decoration_feature` VALUES (35, 260, 'Dhanmondi', 5, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 25000, 0, '2018-12-26 16:46:48', '2018-12-26 16:46:48');
INSERT INTO `decoration_feature` VALUES (36, 262, 'Bashaboo', 3, '50%', 'On Demand', 'Available', 'Available', 'Not Available', 'Available', NULL, 20000, 0, '2018-12-26 17:22:14', '2018-12-26 17:22:14');
INSERT INTO `decoration_feature` VALUES (37, 263, 'Bashundhara R/A', 6, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 50000, 0, '2018-12-26 17:38:51', '2018-12-26 17:38:51');
INSERT INTO `decoration_feature` VALUES (38, 264, 'Gandaria', 3, '70% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', NULL, 10000, 0, '2018-12-26 17:48:05', '2018-12-26 17:48:05');
INSERT INTO `decoration_feature` VALUES (39, 265, 'Savar/Dhaka', 2, '60% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 15000, 0, '2018-12-26 17:53:11', '2018-12-26 17:53:11');
INSERT INTO `decoration_feature` VALUES (40, 266, 'Lalbagh', 5, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', NULL, 10000, 0, '2018-12-26 17:55:35', '2018-12-26 17:55:35');
INSERT INTO `decoration_feature` VALUES (41, 267, 'West Nakhal Para', 7, '70% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 10000, 0, '2018-12-26 18:01:47', '2018-12-26 18:01:47');
INSERT INTO `decoration_feature` VALUES (42, 268, 'West Kafrul', 2, '60% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 15000, 0, '2018-12-26 18:05:56', '2018-12-26 18:05:56');
INSERT INTO `decoration_feature` VALUES (43, 269, 'Mohammedpur', 3, '50% Advance', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday', 10000, 0, '2018-12-26 18:11:13', '2018-12-26 18:11:13');
INSERT INTO `decoration_feature` VALUES (44, 270, 'Rampura', 6, '70% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 10000, 0, '2018-12-26 18:13:13', '2018-12-26 18:13:13');
INSERT INTO `decoration_feature` VALUES (45, 271, 'Rampura', 5, '50% Advance', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday', 10000, 0, '2018-12-26 18:17:26', '2018-12-26 18:17:26');
INSERT INTO `decoration_feature` VALUES (46, 272, 'Mohammadpur', 5, '60% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 15000, 0, '2018-12-26 18:49:38', '2018-12-26 18:49:38');
INSERT INTO `decoration_feature` VALUES (47, 273, 'Eskaton', 3, '50% Advance', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday', 20000, 0, '2018-12-26 18:54:02', '2018-12-26 18:54:02');
INSERT INTO `decoration_feature` VALUES (48, 274, 'Baridhara DOHS', 4, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', NULL, 15000, 0, '2018-12-26 18:57:50', '2018-12-26 18:57:50');
INSERT INTO `decoration_feature` VALUES (49, 275, 'Old Dhaka', 2, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 10000, 0, '2018-12-26 19:02:03', '2018-12-26 19:02:03');
INSERT INTO `decoration_feature` VALUES (50, 276, 'Mohammadpur', 3, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 25000, 0, '2018-12-26 19:06:43', '2018-12-26 19:06:43');
INSERT INTO `decoration_feature` VALUES (51, 277, 'Mirpur', 5, '25% Advance', 'Not Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday', 15000, 0, '2018-12-26 19:14:41', '2018-12-26 19:14:41');
INSERT INTO `decoration_feature` VALUES (52, 278, 'Uttara', 9, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 100000, 0, '2018-12-26 19:19:04', '2018-12-26 19:19:04');
INSERT INTO `decoration_feature` VALUES (53, 279, 'Baridhara', 4, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 15000, 0, '2018-12-26 19:23:00', '2018-12-26 19:23:00');
INSERT INTO `decoration_feature` VALUES (54, 280, 'Dhanmondi', 5, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 15000, 0, '2018-12-26 19:26:26', '2018-12-26 19:26:26');
INSERT INTO `decoration_feature` VALUES (55, 281, 'Bansree', 9, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 10000, 0, '2018-12-26 19:31:19', '2018-12-26 19:31:19');
INSERT INTO `decoration_feature` VALUES (56, 282, 'Mugda', 4, '70% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 30000, 0, '2018-12-26 19:35:24', '2018-12-26 19:35:24');
INSERT INTO `decoration_feature` VALUES (57, 283, 'Badda', 19, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 20000, 0, '2018-12-26 19:39:49', '2018-12-26 19:39:49');
INSERT INTO `decoration_feature` VALUES (58, 284, 'Uttara', 3, '50% Advance', 'Available', 'Available', 'Available', 'Not Available', 'Available', 'wedding,birthday,corporate', 15000, 0, '2018-12-26 19:42:39', '2018-12-26 19:42:39');
INSERT INTO `decoration_feature` VALUES (59, 285, 'Mohammadpur', 4, '60% Advance', 'Not Available', 'Available', 'Available', 'Not Available', 'Available', 'wedding,birthday', 15000, 0, '2018-12-26 19:47:23', '2018-12-26 19:47:23');
INSERT INTO `decoration_feature` VALUES (60, 286, 'Rampura', 3, '50% Advance', 'Available', 'Available', 'Available', 'Not Available', 'Available', 'wedding,birthday,corporate', 20000, 0, '2018-12-26 19:50:33', '2018-12-26 19:50:33');
INSERT INTO `decoration_feature` VALUES (61, 287, 'Uttara', 8, '70% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 20000, 0, '2018-12-26 19:54:29', '2018-12-26 19:54:29');
INSERT INTO `decoration_feature` VALUES (62, 355, 'Mirpur', 3, '50% Advance', 'Available', 'Available', 'Available', 'Available', 'Available', 'wedding,birthday,corporate', 10000, 0, '2019-01-02 13:56:00', '2019-01-02 13:56:00');
INSERT INTO `decoration_feature` VALUES (63, 381, '0 d', 0, '0 d', '0 d', '0 d', '0 d', '0 d', '0 d', 'birthday', 100, 0, '2019-04-11 17:15:30', '2019-04-11 17:15:30');

-- ----------------------------
-- Table structure for dj_feature
-- ----------------------------
DROP TABLE IF EXISTS `dj_feature`;
CREATE TABLE `dj_feature`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` int(11) NOT NULL DEFAULT 0,
  `feature_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `low_price` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 99 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dj_feature
-- ----------------------------
INSERT INTO `dj_feature` VALUES (82, 7, 'Any', 4, 'Available', 'Available with Payment', 'Yes', '50% Cash', '1 week', 'Available', 10000, 0, NULL, NULL);
INSERT INTO `dj_feature` VALUES (83, 8, 'Any', 10, 'Not Available', 'On demand', 'Yes', 'Cash', '1 week', 'Available', 10000, 0, NULL, NULL);
INSERT INTO `dj_feature` VALUES (84, 74, 'Any', 15, 'Available', 'Available', 'Available', '50% Cash', '1 Week', 'Available', 20000, 0, NULL, NULL);
INSERT INTO `dj_feature` VALUES (85, 75, 'Any', 15, 'Available', 'Available', 'Available', '50% Cash', '1 Week', 'Available', 10000, 0, NULL, NULL);
INSERT INTO `dj_feature` VALUES (86, 76, 'Any', 10, 'Available', 'Available', 'Available', '50% Cash', '1 Week', 'Available', 15000, 0, NULL, NULL);
INSERT INTO `dj_feature` VALUES (87, 77, 'Any', 10, 'Available', 'Available', 'Available', '50% Cash', '1 Week', 'Available', 8000, 0, NULL, NULL);
INSERT INTO `dj_feature` VALUES (88, 78, 'Any', 10, 'Available', 'Available', 'Available', '50% Cash', '1 Week', 'Available', 20000, 0, NULL, NULL);
INSERT INTO `dj_feature` VALUES (89, 79, 'Any', 9, 'Available', 'Available', 'Available', '50% Cash', '1 Week', 'Available', 12000, 0, NULL, NULL);
INSERT INTO `dj_feature` VALUES (90, 80, 'Any', 16, 'Available', 'Available', 'Available', '50% Cash', '1 Week', 'Available', 15000, 0, NULL, NULL);
INSERT INTO `dj_feature` VALUES (91, 81, 'Any', 3, 'Not Available', 'Not Available', 'Available', '50% Cash', '1 Week', 'Available', 7000, 0, NULL, NULL);
INSERT INTO `dj_feature` VALUES (92, 293, 'Dhaka', 6, 'Not Available', 'Not Available', 'Available', '50% Advance', '1Week', 'Available', 10000, 0, '2018-12-26 20:40:01', '2018-12-26 20:40:01');
INSERT INTO `dj_feature` VALUES (93, 350, 'Any', 3, 'Not Available', 'Not Allowed', 'Available', '50% Advance', '1Week', 'Available', 4000, 0, '2019-01-02 13:28:08', '2019-01-02 13:28:08');
INSERT INTO `dj_feature` VALUES (94, 351, 'Any', 5, 'Not Available', 'Not Allowed', 'Available', '50% Advance', '10 Days', 'Available', 10000, 0, '2019-01-02 13:30:28', '2019-01-02 13:30:28');
INSERT INTO `dj_feature` VALUES (95, 352, 'Any', 6, 'Not Available', 'Not Allowed', 'Available', '50% Advance', '1Week', 'Available', 15000, 0, '2019-01-02 13:34:15', '2019-01-02 13:34:15');
INSERT INTO `dj_feature` VALUES (96, 353, 'Any', 3, 'Not Available', 'Not Available', 'Available', '50% Advance', '1Week', 'Available', 5000, 0, '2019-01-02 13:38:07', '2019-01-02 13:38:07');
INSERT INTO `dj_feature` VALUES (97, 354, 'Any', 3, 'Not Available', 'Not Available', 'Available', '50% Advance', '1Week', 'Available', 20000, 0, '2019-01-02 13:41:23', '2019-01-02 13:41:23');
INSERT INTO `dj_feature` VALUES (98, 378, '0 test DJ', 0, '0 test DJ', '0 test DJ', '0 test DJ', '0 test DJ', '0 test DJ', '0 test DJ', 0, 0, '2019-04-11 17:11:52', '2019-04-11 17:11:52');

-- ----------------------------
-- Table structure for expire_queries
-- ----------------------------
DROP TABLE IF EXISTS `expire_queries`;
CREATE TABLE `expire_queries`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `vendor_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `tag_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `quantity` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `event_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `shift` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total` double NOT NULL DEFAULT 0,
  `advance` double NOT NULL DEFAULT 0,
  `discount` double NOT NULL DEFAULT 0,
  `payment` double NOT NULL DEFAULT 0,
  `expiry_date` date NULL DEFAULT NULL,
  `expiry_time` time(0) NULL DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_available` tinyint(4) NOT NULL DEFAULT 0,
  `is_open` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `expire_queries_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `expire_queries_category_id_foreign`(`category_id`) USING BTREE,
  INDEX `expire_queries_vendor_id_foreign`(`vendor_id`) USING BTREE,
  INDEX `expire_queries_product_id_foreign`(`product_id`) USING BTREE,
  INDEX `expire_queries_tag_id_foreign`(`tag_id`) USING BTREE,
  CONSTRAINT `expire_queries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `catagories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `expire_queries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `expire_queries_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `expire_queries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `expire_queries_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for inboxchat
-- ----------------------------
DROP TABLE IF EXISTS `inboxchat`;
CREATE TABLE `inboxchat`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `inbox_id` int(11) NOT NULL,
  `msg` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg_type` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of inboxchat
-- ----------------------------
INSERT INTO `inboxchat` VALUES (6, 183, 'hello', 1, '2019-04-09 15:54:21', '2019-04-09 15:54:21');
INSERT INTO `inboxchat` VALUES (7, 183, 'ok got it', 0, '2019-04-09 15:55:24', '2019-04-09 15:55:24');
INSERT INTO `inboxchat` VALUES (8, 183, 'ho', 0, '2019-04-09 16:29:44', '2019-04-09 16:29:44');
INSERT INTO `inboxchat` VALUES (9, 191, 'hello', 0, '2019-04-25 17:38:49', '2019-04-25 17:38:49');
INSERT INTO `inboxchat` VALUES (10, 191, 'ok i am here', 1, '2019-04-25 17:39:08', '2019-04-25 17:39:08');
INSERT INTO `inboxchat` VALUES (11, 191, 'ok', 0, '2019-04-25 17:39:49', '2019-04-25 17:39:49');
INSERT INTO `inboxchat` VALUES (12, 191, 'ok', 0, '2019-04-25 17:39:50', '2019-04-25 17:39:50');
INSERT INTO `inboxchat` VALUES (13, 209, 'kkkk', 0, '2019-05-14 16:18:38', '2019-05-14 16:18:38');

-- ----------------------------
-- Table structure for inboxes
-- ----------------------------
DROP TABLE IF EXISTS `inboxes`;
CREATE TABLE `inboxes`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `vendors_id` int(11) NOT NULL DEFAULT 0,
  `query_id` int(11) NOT NULL,
  `is_open` tinyint(4) NOT NULL DEFAULT 0,
  `is_openForAdmin` int(11) NOT NULL,
  `is_mailed` tinyint(4) NOT NULL DEFAULT 0,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `mess` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 219 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of inboxes
-- ----------------------------
INSERT INTO `inboxes` VALUES (182, 41, 12, 0, 128, 1, 1, 0, 0, 0, NULL, '2019-04-09 15:14:28', '2019-04-10 11:24:37');
INSERT INTO `inboxes` VALUES (183, 41, 12, 0, 94, 2, 1, 0, 0, 0, NULL, '2019-04-09 15:53:02', '2019-04-10 11:47:34');
INSERT INTO `inboxes` VALUES (184, 41, 2, 215, 0, 0, 1, 0, 0, 0, NULL, '2019-04-09 15:58:15', '2019-04-10 11:24:41');
INSERT INTO `inboxes` VALUES (185, 41, 11, 0, 126, 4, 1, 0, 0, 0, NULL, '2019-04-09 16:03:51', '2019-04-10 11:24:35');
INSERT INTO `inboxes` VALUES (186, 41, 11, 0, 84, 4, 1, 0, 0, 0, NULL, '2019-04-24 16:21:20', '2019-04-25 12:48:23');
INSERT INTO `inboxes` VALUES (187, 41, 20, 274, 0, 0, 0, 0, 0, 0, NULL, '2019-04-24 16:29:51', '2019-04-24 16:29:51');
INSERT INTO `inboxes` VALUES (188, 41, 23, 0, 370, 6, 1, 0, 0, 0, NULL, '2019-04-25 12:49:01', '2019-04-25 17:39:32');
INSERT INTO `inboxes` VALUES (189, 41, 3, 231, 0, 0, 1, 0, 0, 0, NULL, '2019-04-25 13:01:44', '2019-04-25 17:39:31');
INSERT INTO `inboxes` VALUES (190, 41, 11, 0, 99, 8, 1, 0, 0, 0, NULL, '2019-04-25 17:34:42', '2019-04-25 17:39:29');
INSERT INTO `inboxes` VALUES (191, 41, 11, 0, 99, 9, 1, 0, 0, 0, NULL, '2019-04-25 17:35:41', '2019-04-25 17:58:10');
INSERT INTO `inboxes` VALUES (192, 43, 12, 0, 205, 10, 0, 0, 0, 0, NULL, '2019-04-28 13:31:26', '2019-04-28 13:31:26');
INSERT INTO `inboxes` VALUES (193, 43, 13, 0, 114, 11, 1, 0, 0, 0, NULL, '2019-04-28 14:32:15', '2019-04-28 20:07:45');
INSERT INTO `inboxes` VALUES (194, 41, 12, 0, 94, 10, 0, 0, 0, 0, NULL, '2019-05-05 17:58:17', '2019-05-05 17:58:17');
INSERT INTO `inboxes` VALUES (195, 41, 20, 274, 0, 0, 0, 0, 0, 0, NULL, '2019-05-05 18:58:13', '2019-05-05 18:58:13');
INSERT INTO `inboxes` VALUES (196, 41, 12, 0, 89, 12, 0, 0, 0, 0, NULL, '2019-05-05 18:58:26', '2019-05-05 18:58:26');
INSERT INTO `inboxes` VALUES (197, 41, 9, 0, 39, 1, 0, 0, 0, 0, NULL, '2019-05-06 11:50:27', '2019-05-06 11:50:27');
INSERT INTO `inboxes` VALUES (198, 41, 9, 0, 15, 2, 0, 0, 0, 0, NULL, '2019-05-06 16:14:31', '2019-05-06 16:14:31');
INSERT INTO `inboxes` VALUES (199, 41, 11, 0, 84, 3, 0, 0, 0, 0, NULL, '2019-05-06 17:27:54', '2019-05-06 17:27:54');
INSERT INTO `inboxes` VALUES (200, 41, 9, 0, 37, 2, 0, 0, 0, 0, NULL, '2019-05-06 18:12:26', '2019-05-06 18:12:26');
INSERT INTO `inboxes` VALUES (201, 41, 13, 0, 262, 3, 0, 0, 0, 0, NULL, '2019-05-07 16:19:19', '2019-05-07 16:19:19');
INSERT INTO `inboxes` VALUES (202, 41, 12, 0, 205, 4, 1, 0, 0, 0, NULL, '2019-05-07 16:21:06', '2019-05-14 16:16:19');
INSERT INTO `inboxes` VALUES (203, 48, 12, 0, 235, 5, 0, 0, 0, 0, NULL, '2019-05-07 16:46:25', '2019-05-07 16:46:25');
INSERT INTO `inboxes` VALUES (204, 41, 1, 225, 0, 0, 1, 0, 0, 0, NULL, '2019-05-08 10:34:56', '2019-05-14 16:16:18');
INSERT INTO `inboxes` VALUES (205, 48, 11, 0, 42, 6, 0, 0, 0, 0, NULL, '2019-05-08 10:35:33', '2019-05-08 10:35:33');
INSERT INTO `inboxes` VALUES (206, 48, 2, 215, 0, 0, 0, 0, 0, 0, NULL, '2019-05-08 11:55:08', '2019-05-08 11:55:08');
INSERT INTO `inboxes` VALUES (207, 48, 2, 215, 0, 0, 0, 0, 0, 0, NULL, '2019-05-08 12:02:31', '2019-05-08 12:02:31');
INSERT INTO `inboxes` VALUES (208, 41, 12, 0, 94, 8, 1, 0, 0, 0, NULL, '2019-05-12 12:35:13', '2019-05-14 16:16:17');
INSERT INTO `inboxes` VALUES (209, 41, 12, 0, 94, 9, 1, 0, 0, 0, NULL, '2019-05-12 12:51:51', '2019-05-14 16:31:16');
INSERT INTO `inboxes` VALUES (210, 41, 12, 0, 94, 10, 1, 0, 0, 0, NULL, '2019-05-12 12:51:51', '2019-05-14 16:16:15');
INSERT INTO `inboxes` VALUES (211, 41, 12, 0, 94, 11, 1, 0, 0, 0, NULL, '2019-05-12 12:51:51', '2019-05-14 16:16:16');
INSERT INTO `inboxes` VALUES (212, 41, 11, 0, 83, 1, 0, 0, 0, 0, NULL, '2019-05-16 14:37:35', '2019-05-16 14:37:35');
INSERT INTO `inboxes` VALUES (213, 41, 11, 0, 83, 2, 0, 0, 0, 0, NULL, '2019-05-16 14:37:35', '2019-05-16 14:37:35');
INSERT INTO `inboxes` VALUES (214, 41, 11, 0, 83, 3, 0, 0, 0, 0, NULL, '2019-05-16 14:37:45', '2019-05-16 14:37:45');
INSERT INTO `inboxes` VALUES (215, 41, 4, 251, 0, 0, 0, 0, 0, 0, NULL, '2019-05-16 14:38:02', '2019-05-16 14:38:02');
INSERT INTO `inboxes` VALUES (216, 41, 2, 215, 0, 0, 0, 0, 0, 0, NULL, '2019-05-16 14:38:18', '2019-05-16 14:38:18');
INSERT INTO `inboxes` VALUES (217, 41, 11, 0, 10, 6, 0, 0, 0, 0, NULL, '2019-05-19 10:56:42', '2019-05-19 10:56:42');
INSERT INTO `inboxes` VALUES (218, 41, 9, 0, 36, 7, 0, 0, 0, 0, NULL, '2019-05-19 11:08:43', '2019-05-19 11:08:43');

-- ----------------------------
-- Table structure for invitation_feature
-- ----------------------------
DROP TABLE IF EXISTS `invitation_feature`;
CREATE TABLE `invitation_feature`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` int(11) NOT NULL DEFAULT 0,
  `feature_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `speciality_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `low_price` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of invitation_feature
-- ----------------------------
INSERT INTO `invitation_feature` VALUES (1, 13, 'Mohammadpur', 4, '50', 'Yes', 'Yes', 'Min 7 Days but depends on order quantity', 'No', '50% Advance', 'wood', 50, 0, NULL, NULL);
INSERT INTO `invitation_feature` VALUES (2, 382, '0 i', 0, '0 i', '0 i', '0 i', '0 i', '0 i', '0 i', 'wood,hand', 100, 0, '2019-04-11 17:16:09', '2019-04-11 17:16:09');

-- ----------------------------
-- Table structure for invoice
-- ----------------------------
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `orders_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bkash_id` int(11) NOT NULL DEFAULT 0,
  `wire_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of invoice
-- ----------------------------
INSERT INTO `invoice` VALUES (1, '24', 0, 1, '2019-04-09 15:22:13', '2019-04-09 15:22:13');
INSERT INTO `invoice` VALUES (2, '25,26', 0, 2, '2019-04-23 18:19:55', '2019-04-23 18:19:55');
INSERT INTO `invoice` VALUES (3, '28', 0, 3, '2019-04-24 16:32:51', '2019-04-24 16:32:51');
INSERT INTO `invoice` VALUES (4, '30', 0, 5, '2019-04-28 13:33:05', '2019-04-28 13:33:05');

-- ----------------------------
-- Table structure for invoices
-- ----------------------------
DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invoice_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `query_id` int(10) UNSIGNED NOT NULL,
  `discount` double NOT NULL DEFAULT 0,
  `currency` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total_amount` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `transaction_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `invoices_query_id_foreign`(`query_id`) USING BTREE,
  CONSTRAINT `invoices_query_id_foreign` FOREIGN KEY (`query_id`) REFERENCES `queries` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for jewellery_features
-- ----------------------------
DROP TABLE IF EXISTS `jewellery_features`;
CREATE TABLE `jewellery_features`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of jewellery_features
-- ----------------------------
INSERT INTO `jewellery_features` VALUES (1, 367, '1', '1', '1', '1', '1', '1', NULL, NULL, 'wedding', '1', '1', '1', '1', NULL, 0, '2019-03-20 11:26:52', '2019-03-20 11:26:52');
INSERT INTO `jewellery_features` VALUES (2, 371, 'location', 'business typeq', '0', 'bKash', 'time', NULL, NULL, NULL, 'birthday', 'w', 'e', 'r', 'w', NULL, 0, '2019-04-07 16:37:09', '2019-04-07 16:37:09');
INSERT INTO `jewellery_features` VALUES (3, 372, 'l', 'b', '0', 'p', 'd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2019-04-07 16:39:27', '2019-04-07 16:39:27');
INSERT INTO `jewellery_features` VALUES (4, 373, 'j', 'j', '0', 'j', 'j', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2019-04-07 16:41:10', '2019-04-07 16:41:10');

-- ----------------------------
-- Table structure for kazi_features
-- ----------------------------
DROP TABLE IF EXISTS `kazi_features`;
CREATE TABLE `kazi_features`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` int(11) NOT NULL DEFAULT 0,
  `feature_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `area` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kazi_features
-- ----------------------------
INSERT INTO `kazi_features` VALUES (1, 12, 5, NULL, 'N/A', 'N/A', 'Lamatia-Dhanmondi', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (2, 47, 10, NULL, 'N/A', 'N/A', 'Rampura-Khilgaon', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (3, 48, 8, '10', 'N/A', 'N/A', 'Rampura-Khilgaon', 0, NULL, '2019-04-15 16:36:01');
INSERT INTO `kazi_features` VALUES (4, 49, 14, NULL, 'N/A', 'N/A', 'Rampura-Khilgaon', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (5, 50, 10, NULL, 'N/A', 'N/A', 'Rampura-Khilgaon', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (6, 51, 18, NULL, 'N/A', 'N/A', 'Lalmatia-Dhanmondi', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (7, 52, 9, NULL, 'N/A', 'N/A', 'Lalmatia-Dhanmondi', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (8, 53, 9, NULL, 'N/A', 'N/A', 'Uttara', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (9, 54, 7, NULL, 'N/A', 'N/A', 'Uttara', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (10, 55, 6, NULL, 'N/A', 'N/A', 'Gulshan-Banani', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (11, 56, 8, NULL, 'N/A', 'N/A', 'Gulshan-Banani', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (12, 57, 11, NULL, 'N/A', 'N/A', 'Gulshan-Banani', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (13, 58, 15, NULL, 'N/A', 'N/A', 'Paltan-Motijheel', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (14, 59, 14, NULL, 'N/A', 'N/A', 'Paltan-Motijheel', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (15, 60, 13, NULL, 'N/A', 'N/A', 'Cantonment-Kafrul', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (16, 61, 12, NULL, 'N/A', 'N/A', 'Mirpur-Pallabi', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (17, 62, 13, NULL, 'N/A', 'N/A', 'Mirpur-Pallabi', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (18, 63, 10, NULL, 'N/A', 'N/A', 'Lalbag-Azimpur', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (19, 64, 11, NULL, 'N/A', 'N/A', 'Old-dhaka', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (20, 65, 8, NULL, 'N/A', 'N/A', 'Old-Dhaka', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (21, 66, 9, NULL, 'N/A', 'N/A', 'Old-Dhaka', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (22, 67, 6, NULL, 'N/A', 'N/A', 'Firmget-Mohakhali', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (23, 68, 12, NULL, 'N/A', 'N/A', 'Firmget-Mohakhali', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (24, 69, 15, NULL, 'N/A', 'N/A', 'Firmget-Mohakhali', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (25, 70, 14, NULL, 'N/A', 'N/A', 'Baridhara-Bosundhara', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (26, 71, 11, NULL, 'N/A', 'N/A', 'Badda-Banasree', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (27, 72, 10, NULL, 'N/A', 'N/A', 'Magbazar-Eskaton', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (28, 73, 10, NULL, 'N/A', 'N/A', 'Magbazar-Eskaton', 0, NULL, NULL);
INSERT INTO `kazi_features` VALUES (29, 395, 0, 'k', 'k', 'k', 'Shamoli-Mohammadpur', 0, '2019-04-15 12:21:17', '2019-04-15 12:21:17');

-- ----------------------------
-- Table structure for makeup_feature
-- ----------------------------
DROP TABLE IF EXISTS `makeup_feature`;
CREATE TABLE `makeup_feature`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` int(11) NOT NULL DEFAULT 0,
  `feature_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `low_price` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of makeup_feature
-- ----------------------------
INSERT INTO `makeup_feature` VALUES (1, 6, 'Dhanmondi', 3, '9AM-9PM', 'Women Only', 'Not Available', 'Bank transfer(City bank:2801872075001)or Cash', 'On demand', 'Not Available', 12000, 0, NULL, NULL);
INSERT INTO `makeup_feature` VALUES (2, 41, 'Panthapath', 2, '11 a.m- 9 p.m', 'For women only', 'Available', 'For bridal packages 50% in advance. for party make over packages 1000tk.', 'Before 1 month', 'Not Available', 8000, 0, NULL, NULL);
INSERT INTO `makeup_feature` VALUES (3, 82, 'Dhanmondi', 19, '10AM - 8PM', 'Female Only', 'Not Available', '2000-5000', 'N/A', 'Not Available', 10000, 0, NULL, NULL);
INSERT INTO `makeup_feature` VALUES (4, 91, ' Dhanmondi', 3, '7AM-8PM', 'Women Only', 'Available', '1500-3000 BDT', 'On demand', 'Available', 15000, 0, NULL, NULL);
INSERT INTO `makeup_feature` VALUES (5, 104, 'Niketon', 8, '10:00 A.M - 9:00 P.M', 'Female', 'Not Available', '5000 BDT Advance', '1 Week', 'Available (Bridal Make up charge be 30000 and transport cost 5000 tk will be added)', 15000, 0, NULL, NULL);
INSERT INTO `makeup_feature` VALUES (6, 105, 'Dhanmondi', 3, '10:00 A.M - 8:00 P.M', 'Female Only', 'Not Available', '2000 - 5000 BDT Advance', 'N/A', 'Not Available', 8000, 0, NULL, NULL);
INSERT INTO `makeup_feature` VALUES (7, 106, 'Niketon', 17, '10:00 AM - 9:00 PM', 'Female Only', 'Available', '500 - 1000 BDT Advance', '5 - 7 Days', 'Available', 7000, 0, NULL, NULL);
INSERT INTO `makeup_feature` VALUES (8, 179, 'Gulshan', 5, '10am-9pm', 'Female Only', 'No', '50%', '10 Days', 'No', 15000, 0, '2018-12-10 14:43:30', '2018-12-10 14:43:30');
INSERT INTO `makeup_feature` VALUES (9, 180, 'Wari', 6, '10am-9pm', 'Female Only', 'No', '40%', '1Week', 'Not Available', 10000, 0, '2018-12-11 01:30:24', '2018-12-11 01:30:24');
INSERT INTO `makeup_feature` VALUES (10, 181, 'Mirpur', 5, '10am-8pm', 'Female Only', 'On Demand', '1000 Tk', '1.5 Month', 'Available (extra Charge will be added)', 800, 0, '2018-12-11 01:43:42', '2018-12-11 01:43:42');
INSERT INTO `makeup_feature` VALUES (11, 182, 'Dhanmond', 6, '10am-8pm', 'Female Only', 'Available', '50%', '2 Days', 'Not Available', 10000, 0, '2018-12-11 01:56:02', '2018-12-11 01:56:02');
INSERT INTO `makeup_feature` VALUES (12, 183, 'Ibrahimpur', 3, '10am-10pm', 'Female Only', 'Not Available', '40%', '1Week', 'Not Available', 15000, 0, '2018-12-11 11:08:50', '2018-12-11 11:08:50');
INSERT INTO `makeup_feature` VALUES (13, 184, 'Banani', 2, '10am-8pm', 'Female Only', 'Not Available', '50%', '1Week', 'Not Available', 12000, 0, '2018-12-11 11:33:23', '2018-12-11 11:33:23');
INSERT INTO `makeup_feature` VALUES (14, 185, 'Mirpur', 5, '10am-8pm', 'Female Only', 'Not Available', '40%', '10 Days', 'Not Available', 10000, 0, '2018-12-11 11:42:39', '2018-12-11 11:42:39');
INSERT INTO `makeup_feature` VALUES (15, 186, 'Uttara', 3, '10am-8pm', 'Female Only', 'Available (Transport Charge will be added)', '30%', '1Week', 'Available (Transport Charge will be added)', 12000, 0, '2018-12-11 12:15:01', '2018-12-11 12:15:01');
INSERT INTO `makeup_feature` VALUES (16, 187, 'Mohammadpur', 2, '8am to 11pm', 'Female Only', 'Not Available', '2000 tk to 5000tk Advance', '1Week', 'Not Available', 10000, 0, '2018-12-11 12:28:17', '2018-12-11 12:28:17');
INSERT INTO `makeup_feature` VALUES (17, 188, 'Dhanmondi', 5, '10am-8pm', 'Female Only', 'Not Available', '30% Advance', '1Week', 'Not Available', 12000, 0, '2018-12-11 12:54:32', '2018-12-11 12:54:32');
INSERT INTO `makeup_feature` VALUES (18, 189, 'Azimpur', 5, '10am-10pm', 'Female Only', 'Not Available', '50%', '5-7 Days', 'Yes (Transport and Accommodation cost will be added)', 10000, 0, '2018-12-11 13:19:24', '2018-12-11 13:19:24');
INSERT INTO `makeup_feature` VALUES (19, 190, 'Banani', 3, '9am-9pm', 'Female Only', 'Not Available', '50% Advance', '1Week', 'Not Available', 12000, 0, '2018-12-11 13:41:53', '2018-12-11 13:41:53');
INSERT INTO `makeup_feature` VALUES (20, 191, 'Gulshan', 4, '10:00 AM - 8:00 PM', 'Female Only', 'Not Available', '30%', '1Week', 'Not Available', 10000, 0, '2018-12-11 14:22:27', '2018-12-11 14:22:27');
INSERT INTO `makeup_feature` VALUES (21, 192, 'Agargoan', 3, '10am-10pm', 'Female Only', 'Not Available', '50% Advance', 'Yes (Transport and Accommodation cost will be added)', 'Not Available', 16000, 0, '2018-12-11 14:34:13', '2018-12-11 14:49:06');
INSERT INTO `makeup_feature` VALUES (22, 249, 'Gulshan', 9, '10am-8pm', 'Female Only', 'Not Available', '50% Advance', '1Week', 'Not Available', 10000, 0, '2018-12-26 13:39:59', '2018-12-26 13:39:59');
INSERT INTO `makeup_feature` VALUES (23, 383, '0 m', 0, '0 m', '0 m', '0 m', '0 m', '0 m', '0 m', 0, 0, '2019-04-11 17:16:27', '2019-04-11 17:16:27');

-- ----------------------------
-- Table structure for mehedi_feature
-- ----------------------------
DROP TABLE IF EXISTS `mehedi_feature`;
CREATE TABLE `mehedi_feature`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` int(11) NOT NULL DEFAULT 0,
  `feature_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `low_price` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mehedi_feature
-- ----------------------------
INSERT INTO `mehedi_feature` VALUES (1, 4, 'Client\'s preffered place', 3, 'Available', '500 BDT Advance', '1 Week', 'Not Available', NULL, NULL, 3500, 0, NULL, NULL);
INSERT INTO `mehedi_feature` VALUES (2, 5, 'Client\'s preferred place', 4, 'Available', '500 BDT Advance', '1 Week', 'Available', NULL, NULL, 750, 0, NULL, '2019-04-15 18:00:22');
INSERT INTO `mehedi_feature` VALUES (3, 46, 'Banasri', 7, 'Available', '500 BDT Advance', '5 Days', 'Not Available', NULL, NULL, 150, 0, NULL, NULL);
INSERT INTO `mehedi_feature` VALUES (4, 92, 'Banasree', 5, 'Available', '500 BDT Advance', '1 Week', 'Not Available', NULL, NULL, 2500, 0, NULL, NULL);
INSERT INTO `mehedi_feature` VALUES (5, 107, 'Moghbazar', 7, 'Available', '500 BDT Advance', '10 Days', 'Not Available', NULL, NULL, 2000, 0, NULL, NULL);
INSERT INTO `mehedi_feature` VALUES (6, 122, 'Nikunja', 4, 'Available', '500 BDT Advance', '3-7 Days', 'Available', NULL, NULL, 1500, 0, NULL, NULL);
INSERT INTO `mehedi_feature` VALUES (7, 123, 'Gulshan', 3, 'Available', '500 BDT Advance', '7 Days', 'Not Available', NULL, NULL, 2500, 0, NULL, NULL);
INSERT INTO `mehedi_feature` VALUES (8, 124, 'Motijheel', 2, 'Available', '30% Advance', '2 Days', 'Available', NULL, NULL, 700, 0, NULL, NULL);
INSERT INTO `mehedi_feature` VALUES (9, 196, 'Nikunja', 3, 'Available', '500 tk Advance', '1 Week', 'On Demand', NULL, NULL, 1000, 0, '2018-12-16 19:54:43', '2018-12-16 19:54:43');
INSERT INTO `mehedi_feature` VALUES (10, 197, 'Dhanmondi', 9, 'Available', '30% Advance', '15 Days', 'On Demand', NULL, NULL, 2500, 0, '2018-12-16 19:57:58', '2018-12-16 19:57:58');
INSERT INTO `mehedi_feature` VALUES (11, 198, 'Dhanmondi', 5, 'Not Available', '1000 Taka', '1 Week', 'No', NULL, NULL, 15000, 0, '2018-12-16 20:00:42', '2018-12-16 20:00:42');
INSERT INTO `mehedi_feature` VALUES (12, 199, 'Mirpur', 3, 'Available', '30% Advance', '1 Week', 'Not Available', NULL, NULL, 2000, 0, '2018-12-16 20:02:49', '2018-12-16 20:02:49');
INSERT INTO `mehedi_feature` VALUES (13, 200, 'Mirpur', 2, 'Home-Yes(Transort cost 300 to 1000 taka will be added)', '50%', '15 Days', 'Not Available', NULL, NULL, 2500, 0, '2018-12-16 20:08:42', '2018-12-16 20:08:42');
INSERT INTO `mehedi_feature` VALUES (14, 201, 'Khilgaon', 11, 'Available ( 200 to 1000 tk transport cost will be added)', '20% Advance', '1 month', 'Not Available', NULL, NULL, 1500, 0, '2018-12-17 00:49:56', '2018-12-17 00:49:56');
INSERT INTO `mehedi_feature` VALUES (15, 202, 'Mohammedpur', 5, 'Available', '30% Advance', '1 month', 'Available', NULL, NULL, 2500, 0, '2018-12-17 02:17:35', '2018-12-17 02:17:35');
INSERT INTO `mehedi_feature` VALUES (16, 203, 'Azimpur', 2, 'Available ( 500 tk will be charged extra)', '50% Advance', '1 Week', 'Not Available', NULL, NULL, 1500, 0, '2018-12-17 02:20:12', '2018-12-17 02:20:12');
INSERT INTO `mehedi_feature` VALUES (17, 250, 'Mohammadpur', 2, 'Available', '500 tk Advance', '15 Days', 'Not Available', NULL, NULL, 1500, 0, '2018-12-26 13:58:21', '2018-12-26 13:58:21');
INSERT INTO `mehedi_feature` VALUES (18, 251, 'Azimpur', 4, 'Available ( 500 tk will be charged extra)', '50% Advance', '1 Week', 'Not Available', NULL, NULL, 1500, 0, '2018-12-26 14:08:09', '2018-12-26 14:08:09');
INSERT INTO `mehedi_feature` VALUES (19, 252, 'Banasree', 3, 'Available', '500 tk Advance', '1 Week', 'Not Available', NULL, NULL, 1500, 0, '2018-12-26 14:13:08', '2018-12-26 14:13:08');
INSERT INTO `mehedi_feature` VALUES (20, 253, 'Shaymoli', 4, 'Available', '1000 taka Advance', '15 Days', 'Available', NULL, NULL, 5000, 0, '2018-12-26 14:22:17', '2018-12-26 14:22:17');
INSERT INTO `mehedi_feature` VALUES (21, 254, 'Shantinagar', 2, 'Available', '500 tk Advance', '1 Week', 'Not Available', NULL, NULL, 1500, 0, '2018-12-26 14:40:30', '2018-12-27 11:36:33');
INSERT INTO `mehedi_feature` VALUES (22, 255, 'Banasree', 5, 'Available', '500 tk Advance', '1 Week', 'Not Available', NULL, NULL, 2500, 1, '2018-12-26 14:49:50', '2018-12-26 15:38:17');
INSERT INTO `mehedi_feature` VALUES (25, 258, 'Motijheel', 6, 'Not Available', '50% Advance', '1 Week', 'Not Available', NULL, NULL, 2500, 0, '2018-12-26 16:15:09', '2018-12-26 16:15:09');
INSERT INTO `mehedi_feature` VALUES (26, 259, 'Wari', 2, 'Available', '500 tk Advance', '1 Week', 'Not Available', NULL, NULL, 2500, 0, '2018-12-26 16:23:32', '2018-12-26 16:23:32');
INSERT INTO `mehedi_feature` VALUES (27, 385, '0 meh', 0, '0 meh', '0 meh', '0 meh', '0 mehdi', NULL, NULL, 100, 0, '2019-04-11 17:17:10', '2019-04-11 17:17:45');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 131 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2018_05_03_070012_create_catagories_table', 1);
INSERT INTO `migrations` VALUES (5, '2018_05_03_070115_create_hotoffers_table', 1);
INSERT INTO `migrations` VALUES (6, '2018_05_03_070155_create_productstop_table', 1);
INSERT INTO `migrations` VALUES (7, '2018_05_09_054237_create_admin_table', 1);
INSERT INTO `migrations` VALUES (8, '2018_05_13_100023_create_vendor_kazi_table', 1);
INSERT INTO `migrations` VALUES (11, '2018_05_14_071342_create_vendors_photography_and_cinematographies_table', 1);
INSERT INTO `migrations` VALUES (12, '2018_05_14_071406_create_vendors_decorations_table', 1);
INSERT INTO `migrations` VALUES (13, '2018_05_14_071425_create_vendors_invitation_cards_table', 1);
INSERT INTO `migrations` VALUES (15, '2018_05_14_071453_create_vendors_makeup_artists_table', 1);
INSERT INTO `migrations` VALUES (16, '2018_05_14_071521_create_vendors_bakeries_table', 1);
INSERT INTO `migrations` VALUES (17, '2018_05_14_071539_create_vendors_mehedis_table', 1);
INSERT INTO `migrations` VALUES (18, '2018_05_15_055258_create_packages_table', 1);
INSERT INTO `migrations` VALUES (20, '2018_05_20_033632_create_query_cart_table', 1);
INSERT INTO `migrations` VALUES (23, '2018_05_17_044642_create_featurs_table', 2);
INSERT INTO `migrations` VALUES (27, '2018_05_14_071002_create_vendors_venues_table', 3);
INSERT INTO `migrations` VALUES (28, '2018_05_14_071101_create_vendors_caterings_table', 3);
INSERT INTO `migrations` VALUES (29, '2018_05_14_071437_create_vendors_djs_table', 3);
INSERT INTO `migrations` VALUES (30, '2018_05_23_054115_create_vendors_table', 4);
INSERT INTO `migrations` VALUES (34, '2018_05_29_060003_create_cart_table', 5);
INSERT INTO `migrations` VALUES (35, '2018_05_29_055857_create_wishlist_table', 6);
INSERT INTO `migrations` VALUES (36, '2018_05_29_183700_create_address_table', 7);
INSERT INTO `migrations` VALUES (37, '2018_05_29_222108_add_column_to_users_table', 8);
INSERT INTO `migrations` VALUES (42, '2018_06_03_110953_create_order_table', 10);
INSERT INTO `migrations` VALUES (43, '2018_05_30_050854_create_product_image_table', 11);
INSERT INTO `migrations` VALUES (48, '2018_06_21_070541_create_contactus_table', 12);
INSERT INTO `migrations` VALUES (49, '2018_06_24_122526_create_tem_querycart_table', 13);
INSERT INTO `migrations` VALUES (52, '2018_07_16_091909_create_phone_query_table', 14);
INSERT INTO `migrations` VALUES (53, '2018_07_16_095311_create_custom_order_table', 14);
INSERT INTO `migrations` VALUES (54, '2018_07_16_115339_create_offline_user_table', 14);
INSERT INTO `migrations` VALUES (55, '2018_08_28_053511_create_inboxes_table', 15);
INSERT INTO `migrations` VALUES (58, '2018_05_03_070028_create_products_table', 16);
INSERT INTO `migrations` VALUES (61, '2018_09_02_061427_create_tempayments_table', 17);
INSERT INTO `migrations` VALUES (62, '2018_09_17_090738_create__bkash_payment_table', 18);
INSERT INTO `migrations` VALUES (63, '2018_09_17_090810_create_invoice_table', 18);
INSERT INTO `migrations` VALUES (66, '2018_09_20_082041_create_my_vendors_table', 19);
INSERT INTO `migrations` VALUES (67, '2018_09_24_103213_create_ratings_table', 20);
INSERT INTO `migrations` VALUES (68, '2018_09_27_075638_create_venue_feature_table', 21);
INSERT INTO `migrations` VALUES (69, '2018_09_30_055858_create_catering_features_table', 22);
INSERT INTO `migrations` VALUES (70, '2018_09_30_085021_create_photography_features_table', 23);
INSERT INTO `migrations` VALUES (72, '2018_09_30_102130_create_dj_features_table', 24);
INSERT INTO `migrations` VALUES (73, '2018_10_01_104000_create_decoration_features_table', 25);
INSERT INTO `migrations` VALUES (74, '2018_10_02_055314_create_invitation_features_table', 26);
INSERT INTO `migrations` VALUES (75, '2018_10_02_055853_create_makeup_features_table', 27);
INSERT INTO `migrations` VALUES (76, '2018_10_02_060608_create_bakeries_features_table', 28);
INSERT INTO `migrations` VALUES (77, '2018_10_02_061220_create_mehedi_features_table', 29);
INSERT INTO `migrations` VALUES (78, '2018_10_02_061820_create_kazi_features_table', 30);
INSERT INTO `migrations` VALUES (79, '2018_10_11_092131_create_partners_table', 31);
INSERT INTO `migrations` VALUES (80, '2018_10_15_060337_create_budgetcosts_table', 32);
INSERT INTO `migrations` VALUES (81, '2018_10_15_060530_create_budgetpaids_table', 32);
INSERT INTO `migrations` VALUES (82, '2018_10_16_062725_create_checklists_table', 33);
INSERT INTO `migrations` VALUES (83, '2018_10_23_173041_create_inboxchats_table', 34);
INSERT INTO `migrations` VALUES (85, '2019_02_26_033209_create_sslorder_table', 35);
INSERT INTO `migrations` VALUES (94, '2019_03_18_191327_create_bridal_outfit_features_table', 36);
INSERT INTO `migrations` VALUES (95, '2019_03_18_192326_create_jewellery_features_table', 36);
INSERT INTO `migrations` VALUES (96, '2019_04_23_133134_create_change_logs_table', 37);
INSERT INTO `migrations` VALUES (124, '2019_05_06_105901_create_tags_table', 38);
INSERT INTO `migrations` VALUES (125, '2019_05_06_111444_create_queries_table', 38);
INSERT INTO `migrations` VALUES (126, '2019_05_06_132142_create_invoices_table', 38);
INSERT INTO `migrations` VALUES (127, '2019_05_06_140545_create_payment_details_table', 38);
INSERT INTO `migrations` VALUES (128, '2019_05_07_110718_create_expire_queries_table', 38);
INSERT INTO `migrations` VALUES (129, '2019_05_07_110743_create_completed_queries_table', 38);
INSERT INTO `migrations` VALUES (130, '2019_05_12_103649_create_unauthorised_queries_table', 38);

-- ----------------------------
-- Table structure for my_vendors
-- ----------------------------
DROP TABLE IF EXISTS `my_vendors`;
CREATE TABLE `my_vendors`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `vendors_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `catagory` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `contact_details` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `service_time` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `service_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total_payment` int(11) NOT NULL DEFAULT 0,
  `advance_payment` int(11) NOT NULL DEFAULT 0,
  `due_payment` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of my_vendors
-- ----------------------------
INSERT INTO `my_vendors` VALUES (4, 39, 'ok', 'holud snacks', 'werf', 'frg', 'frgh', 0, 0, 0, '2019-03-12 14:49:29', '2019-03-12 15:20:11');
INSERT INTO `my_vendors` VALUES (5, 39, 'Tareq\'s Catering & Event Management', 'catering', 'Adabor', 'day', '03/14/2019', 100, 100, 0, '2019-03-13 15:02:11', '2019-03-13 15:02:11');
INSERT INTO `my_vendors` VALUES (6, 39, 'Kazi Mohammad Abdullah', 'kazi', NULL, 'day', '04/11/2019', 100, 100, 0, '2019-04-07 11:25:53', '2019-04-07 11:25:53');
INSERT INTO `my_vendors` VALUES (7, 41, 'Lorenzo Wedding\r\n', 'photography_and_cinematography', NULL, '10', '04/10/2019', 100, 10, 90, '2019-04-09 15:22:13', '2019-04-09 15:22:13');
INSERT INTO `my_vendors` VALUES (8, 41, 'PHOTOHOLLIC', 'photography_and_cinematography', NULL, '10', '04/24/2019', 1000, 100, 900, '2019-04-23 18:19:55', '2019-04-23 18:19:55');
INSERT INTO `my_vendors` VALUES (9, 41, 'Dhaka Catering & Event Management\r\n', 'catering', NULL, 'day', '04/24/2019', 1000, 10, 990, '2019-04-23 18:19:55', '2019-04-23 18:19:55');
INSERT INTO `my_vendors` VALUES (10, 41, 'Nuruzzaman Catering Service', 'catering', NULL, 'day', '04/25/2019', 10000, 100, 9900, '2019-04-24 16:32:51', '2019-04-24 16:32:51');
INSERT INTO `my_vendors` VALUES (11, 43, 'Profile- Wedding & Event Photography', 'photography_and_cinematography', 'Nikunja', 'day', '04/28/2019', 300, 30, 270, '2019-04-28 13:33:05', '2019-04-28 13:33:05');

-- ----------------------------
-- Table structure for offline_user
-- ----------------------------
DROP TABLE IF EXISTS `offline_user`;
CREATE TABLE `offline_user`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for packages
-- ----------------------------
DROP TABLE IF EXISTS `packages`;
CREATE TABLE `packages`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `catagory_id` int(11) NOT NULL,
  `vendors_id` int(11) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 327 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of packages
-- ----------------------------
INSERT INTO `packages` VALUES (1, 16, 11, 'Wedding/Anniversary 1', '5500', 'Flavour: Vanilla, Chocolate,Blackforest, Red Velvet,Double Chocolate\r\nWeight: 1.5Kg', 'img\\vendor-package\\dbake\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (4, 16, 11, 'Wedding/Anniversary 2', '8000', 'Flavour: Vanilla, Chocolate,Blackforest, Red Velvet,Double Chocolate\r\nWeight: 4KG', 'img\\vendor-package\\dbake\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (5, 16, 11, 'Wedding/Anniversary 3', '8500', 'Flavour: Vanilla, Chocolate,Blackforest, Red Velvet,Double Chocolate\r\nWeight: 4Kg', 'img\\vendor-package\\dbake\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (6, 15, 6, 'Proposal Day Makeup', '7000', 'Package include Makeup + Hairstyle + Hand and Neck Makeup + Nailpolish +Hand painting(For Holud) + Outfit and Jewellery setting + Eye lashes\r\n\r\nPlease note that all products used in our studio are from famous cosmetics brands. We do not use any non branded products on our clients. Thank you!', 'img\\vendor-package\\ramisa_parvin\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (7, 15, 6, 'Engagement', '12000', 'Package include Makeup + Hairstyle + Hand and Neck Makeup + Nailpolish +Hand painting(For Holud) + Outfit and Jewellery setting + Eye lashes\r\n\r\nPlease note that all products used in our studio are from famous cosmetics brands. We do not use any non branded products on our clients. Thank you!', 'img\\vendor-package\\ramisa_parvin\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (8, 15, 6, 'Holud', '14000', 'Package include Makeup + Hairstyle + Hand and Neck Makeup + Nailpolish +Hand painting(For Holud) + Outfit and Jewellery setting + Eye lashes\r\n\r\nPlease note that all products used in our studio are from famous cosmetics brands. We do not use any non branded products on our clients. Thank you!', 'img\\vendor-package\\ramisa_parvin\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (9, 15, 6, 'Bridal Makeup', '16000', 'Package include Makeup + Hairstyle + Hand and Neck Makeup + Nailpolish +Hand painting(For Holud) + Outfit and Jewellery setting + Eye lashes\r\nPlease note that all products used in our studio are from famous cosmetics brands. We do not use any non branded products on our clients. Thank you!', 'img\\vendor-package\\ramisa_parvin\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (10, 15, 6, 'Simple Party Makeup', '4500', 'Party makeup (Without glitter eye makeup)\r\nPackage includes- Makeup + Hairstyle + Outfit and jewellery setting + nail polish + Eye lashes.\r\nPlease note that these packages come with regular party hairstyles such as curls, straightening or different updos. If you want any exquisite hairstyles such as bridal ones you will have to pay extra 500-800 depending on the hairstyle.\r\nI work only on appointments so you will have make bookings for your events in order to get the above mentioned services. Thank you\r\n!', 'img\\vendor-package\\ramisa_parvin\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (11, 15, 6, 'Glam Party Makeup', '5000', 'Glam party makeup (With glitter eye makeup).\r\nPackage includes- Makeup + Hairstyle + Outfit and jewellery setting + nail polish + Eye lashes.\r\nPlease note that these packages come with regular party hairstyles such as curls, straightening or different updos. If you want any exquisite hairstyles such as bridal ones you will have to pay extra 500-800 depending on the hairstyle. \r\nI work only on appointments so you will have make bookings for your events in order to get the above mentioned services. Thank you\r\n!', 'img\\vendor-package\\ramisa_parvin\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (12, 17, 4, 'Bridal Elbow Gap Work', '3500', 'Bridal Mehendi Both hand both side up to elbow', 'img\\vendor-package\\dulhan_mehedi_arts\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (13, 17, 4, 'Bridal Elbow Normal Work', '4000', 'Bridal Mehendi Both hand both side up to elbow', 'img\\vendor-package\\dulhan_mehedi_arts\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (14, 17, 4, 'Bridal Elbow Gorgeous Work', '4500', 'Bridal Mehendi Both hand both side up to elbow', 'img\\vendor-package\\dulhan_mehedi_arts\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (15, 17, 4, 'Bridal Midarm Normal', '6000', 'Bridal Mehendi Both hand both side up to midarm', 'img\\vendor-package\\dulhan_mehedi_arts\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (16, 17, 4, 'Bridal Midarm Gorgeous', '7000', 'Bridal Mehendi Both hand both side up to midarm', 'img\\vendor-package\\dulhan_mehedi_arts\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (17, 17, 4, 'Semi Bridal Normal', '3000', 'Bridal Mehendi Both hand both side up to halfway', 'img\\vendor-package\\dulhan_mehedi_arts\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (18, 17, 4, 'feet string with 5 finger', '1000', '', 'img\\vendor-package\\dulhan_mehedi_arts\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (19, 17, 4, 'Both feet up to ankle', '2000', '', 'img\\vendor-package\\dulhan_mehedi_arts\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (20, 17, 4, 'geet royal design', '6500', '', 'img\\vendor-package\\dulhan_mehedi_arts\\p9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (21, 17, 4, 'Non-Bridal design', '150', 'Single String each side upto wrist', 'img\\vendor-package\\dulhan_mehedi_arts\\p10.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (22, 17, 5, 'Simple Bridal design', '1400', 'Both hand both side upto halfway', 'img\\vendor-package\\mehendi_noksha\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (23, 17, 5, 'Simple Bridal design upto elbow', '2000', 'Both hand both side upto elbow', 'img\\vendor-package\\mehendi_noksha\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (24, 17, 5, 'Semi Gorgeous Bridal design upto elbow', '2500', 'Both hand both side upto elbow', 'img\\vendor-package\\mehendi_noksha\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (25, 17, 5, 'Semi Gorgeous Bridal design upto highway', '1600', 'Both hand both side upto highway', 'img\\vendor-package\\mehendi_noksha\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (26, 17, 5, 'Gorgeous Bridal design upto highway', '1800', 'Both hand both side upto highway', 'img\\vendor-package\\mehendi_noksha\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (27, 17, 5, 'Gorgeous Bridal design upto elbow', '3200', 'Both hand both side upto elbow', 'img\\vendor-package\\mehendi_noksha\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (28, 17, 5, 'Gorgeous Bridal design upto elbow', '4000', 'Special Bride Groom design Both hand both side upto elbow', 'img\\vendor-package\\mehendi_noksha\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (29, 17, 5, 'Both Leg ', '1000', '', 'img\\vendor-package\\mehendi_noksha\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (30, 17, 5, 'Simple String ', '100', 'One side on 1 hand', 'img\\vendor-package\\mehendi_noksha\\p9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (31, 17, 5, 'Semi Gorgeous String Non bridal', '150', 'one side on one hand', 'img\\vendor-package\\mehendi_noksha\\p10.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (32, 10, 7, 'Regular Package', '10000', 'BDT 10000 per event', 'img\\vendor-package\\dj_alif\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (33, 10, 8, 'Regular Package', '10000', 'BDT 10000 per event', 'img\\vendor-package\\dj_emn\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (34, 9, 1, 'Regular package', '35000', 'Booking Confirm money before 15 days and Full payment before 3 days. ', 'img\\vendor-package\\casnova_party_centre\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (35, 9, 2, '2nd floor day time', '27500', 'Booking Confirm money before 1 month and Full payment before 3 days. ', 'img\\vendor-image\\uttara_community_centre\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (36, 9, 2, '2nd floor Night time', '30500', 'Booking Confirm money before 1 month and Full payment before 3 days. ', 'img\\vendor-image\\uttara_community_centre\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (37, 9, 2, '2nd and 3rd floor Night time', '53500', 'Booking Confirm money before 1 month and Full payment before 3 days. ', 'img\\vendor-image\\uttara_community_centre\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (38, 9, 2, '2nd and 3rd floor day time', '46000', 'Booking Confirm money before 1 month and Full payment before 3 days. ', 'img\\vendor-image\\uttara_community_centre\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (39, 9, 2, '3rd floor day time', '32000', 'Booking Confirm money before 1 month and Full payment before 3 days. ', 'img\\vendor-image\\uttara_community_centre\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (40, 9, 2, '3rd floor night time', '36000', 'Booking Confirm money before 1 month and Full payment before 3 days. ', 'img\\vendor-image\\uttara_community_centre\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (41, 12, 3, 'Combo Economy', '15000', 'Combo Economy :\r\n1 Senior Photographer + 1 Associate Photographer\r\n1 Cinematographer (Full HD)\r\nPackage Rate: 15,000 BDT (Single Event ) \r\nSession: 4 hrs\r\nVideo: 3-5 minutes trailer + 20 to 25 minutes full edited video\r\nSoft copy: As much as possible to capture & all edited photos will be given in a DVD.\r\nPrints: 100 Copies 4R (4\"X6\") \r\n1 Photo Album (small) ', 'img\\vendor-package\\wedding_mate\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (42, 12, 3, 'Combo Affordable', '21500', 'Combo Affordable :\r\nChief Photographer (1.5 hr) + 1 Senior Photographer\r\n1 Cinematographer (Full HD)\r\nPackage Rate: 21,500 BDT (Single Event ) \r\nSession: 5 hrs\r\nVideo: 3-5 minutes trailer + 25 to 30 minutes full edited video \r\nSoft copy: As much as possible to capture & all edited photos will be given in a DVD.\r\nPrints: 100 Copies 4R (4\"X6\") & 1 copy 12L (12\"X18\") size photos. \r\n1 Photo Album (Large)', 'img\\vendor-package\\wedding_mate\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (43, 12, 3, 'Combo Standard', '30000', 'Combo Standard :\r\nChief Photographer + 1 Senior Photographer & 1 Associate Photographer\r\n2 Cinematographers (Full HD)\r\nPackage Rate: 30,000 BDT (Single Event ) \r\nSession: 5 hrs\r\nVideo: 3-5 minutes trailer + 25 to 30 minutes full edited video \r\nSoft Copy: As much as possible to capture & all edited photos will be given in a DVD.\r\nPrints: 100 Copies 4R (4\"X6\"), 10 Copies 5L (6\"X9\") & 1 copy 12L (12\"X18\") size photos. \r\n1 Photo Album (Large)', 'img\\vendor-package\\wedding_mate\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (44, 12, 3, 'Combo Super Saver', '10500', 'Combo Super Saver :\r\n1 Photographer & 1 Videographer (HD)\r\nPackage Rate: 10,500 BDT (Single Event ) \r\nSession: 4 hrs\r\nVideo: 3-5 minutes trailer + 20 to 25 minutes full edited video\r\nSoft copy: As much as possible to capture & all edited photos will be given in a DVD.\r\nPrints: 50 Copies 4R (4\"X6\") size.', 'img\\vendor-package\\wedding_mate\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (45, 14, 13, '50 pc', '150', 'Card Size: Size 5\" x 7\" Inc Pine Wood.\r\nper peice 150 bdt', 'img\\vendor-package\\wood_takker\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (46, 14, 13, '100 pc', '130', 'Card Size: Size 5\" x 7\" Inc Pine Wood.\r\nper peice 130 bdt', 'img\\vendor-package\\wood_takker\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (47, 14, 13, '200 pc', '110', 'Card Size: Size 5\" x 7\" Inc Pine Wood.\r\nper peice 110 bdt', 'img\\vendor-package\\wood_takker\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (48, 14, 13, '300-500 piece card ', '110', 'Card Size: Size 5\" x 7\" Inc Pine Wood.quantity range: 300-500\r\nper peice 90 bdt', 'img\\vendor-package\\wood_takker\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (49, 11, 10, 'Thai and Chinies Menu 1 ', '875', 'per person 850 bdt. \r\nPackage for minimum 100 peoples.\r\nMenu includes:\r\nAppetizer:-\r\n1.Wonton/Spring Roll(2pc)\r\n2.Chicken corn Soup/Thai soup stick\r\nMain Dish:-\r\n1.Vegetable fried rice/Chinies chiken fried rice\r\n2.Thai fried chicken/Fried Prawn(2pc)\r\n3.Szechuan Chicken\r\n4.Mix Vegetable\r\nBeverage:-\r\n1.Soft drink(1 glass)\r\n2.Mineral Water\r\n', 'img\\vendor-package\\birds_eye\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (50, 11, 10, 'Thai and Chinies Menu 2', '850', 'per person 850 bdt. \r\nPackage for minimum 100 peoples.\r\nMenu includes:\r\nAppetizer:-\r\n1.Wonton/Spring Roll(2pc)\r\n2.Soup\r\n3.Thai Soup Clear\r\nMain Dish:-\r\n1.Vegetable fried rice/Chinies chiken fried rice\r\n2.Thai fried chicken(2pc)\r\n3.Chicken chilli onion\r\n4.Mix Vegetable\r\nBeverage:-\r\n1.Soft drink(1 glass)\r\n2.Mineral Water\r\n', 'img\\vendor-package\\birds_eye\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (51, 11, 10, 'Thai and Chinies Menu 3', '895', 'per person 895 bdt. \r\nPackage for minimum 100 peoples.\r\nMenu includes:\r\nAppetizer:-\r\n1.Spring Roll/Thai Cosmos(2pc)\r\n2.Thai Soup thick/Vegetable Soup\r\nMain Dish:-\r\n1.Chinies mix fried rice/Chiniese chicken fried rice\r\n2.Thai fried chicken(2pc)\r\n3.Beef/chicken sizzling\r\n4.Mix Vegetable o/s\r\nBeverage:-\r\n1.Soft drink(1 glass)\r\n2.Mineral Water\r\n', 'img\\vendor-package\\birds_eye\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (52, 11, 10, 'Thai and Chinies Menu 4', '925', 'per person 925 bdt. \r\nPackage for minimum 100 peoples.\r\nMenu includes:\r\nAppetizer:-\r\n1.Chicken cashewnut salad/fish cake(2pc)\r\n2.Thai Soup thick/Hot and sour soup\r\nMain Dish:-\r\n1.Chinies mix fried rice/Chinies chiken fried rice\r\n2.Special fried prawn(2pc)\r\n3.Chicken garlic paper\r\n4.Thai Mix Vegetable o/s\r\nBeverage:-\r\n1.Soft drink(1 glass)\r\n2.Mineral Water\r\n', 'img\\vendor-package\\birds_eye\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (53, 11, 10, 'Bangla Party Menu 1', '675', 'Per person 675 bdt\r\npackage for minimum 100 people\r\nMenu includes:\r\nSalad:-\r\n1.PCS Salad\r\nMain Dish:-\r\n1.Plain Polao\r\n2.Beef Rezala\r\n3.Chicken Roast\r\n4.Tikia Kebab\r\nDesert:-\r\n1.Zarda/firni\r\nBeverage:-\r\n1.Borhani/Soft drink(1 glass)\r\n2.Mineral Water\r\n', 'img\\vendor-package\\birds_eye\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (54, 11, 10, 'Bangla Party Menu 2', '725', 'Per person 725 bdt\r\npackage for minimum 100 people\r\nMenu includes:\r\nSalad:-\r\n1.PCS Salad\r\nMain Dish:-\r\n1.Plain Polao\r\n2.Mutton Rezala\r\n3.Chicken Roast\r\n4.Tikia Kebab\r\nDesert:-\r\n1.Zarda/firni\r\nBeverage:-\r\n1.Borhani/Soft drink(1 glass)\r\n2.Mineral Water\r\n', 'img\\vendor-package\\birds_eye\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (55, 11, 10, 'Bangla Party Menu 2', '750', 'Per person 750 bdt\r\npackage for minimum 100 people\r\nMenu includes:\r\nSalad:-\r\n1.PCS Salad\r\n\r\nMain Dish:-\r\n1.Kacchi Biriani\r\n2.Chicken Roast\r\n3.Tikia Kebab\r\n\r\nDesert:-\r\n1.Zarda/firni\r\n\r\nBeverage:-\r\n1.Borhani/Soft drink(1 glass)\r\n2.Mineral Water\r\n', 'img\\vendor-package\\birds_eye\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (56, 11, 10, 'Buffet', '1200', '\r\nMenu includes:\r\n1.Spring Roll\r\n2.Chinies Wonton\r\n3.Thai Soup Thick\r\n4.Butter Naan\r\n5.Chicken Karai\r\n6.Mixed Chowmin\r\n7.Chinies Chicken Fried Rice\r\n8.Thai Fried Chicken\r\n9.Beef With Mashroom Oyester Sauce\r\n10.Boneless fish with garlic papper\r\n11.Chinies mixed vegetable\r\n12.Chicken green chilli onion\r\n13.Russian salad\r\n14.Garden fresh salad\r\n15.Soft drinks\r\n16.Mineral water\r\n17.Firni\r\n18.Pudding\r\n\r\nPer person 1200 bdt.\r\npackage for minimum 50 people. excluded 15% vat on buffet menu', 'img\\vendor-package\\birds_eye\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (57, 9, 14, 'Regular Package', '60000', '50% of the estimated function cost is required to be deposited to confirm booking of the desired date. This is not refundable.', 'img\\vendor-package\\aziz_manzil\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (58, 9, 15, 'Winter Day Package', '80000', '', 'img\\vendor-package\\chowdhury_community_center\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (59, 9, 15, 'Winter Night Package', '50000', '', 'img\\vendor-package\\chowdhury_community_center\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (60, 9, 15, 'Summer Day Package', '90000', '', 'img\\vendor-package\\chowdhury_community_center\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (61, 9, 15, 'Summer Night Package', '65000', '', 'img\\vendor-package\\chowdhury_community_center\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (62, 9, 16, 'Regular Package', '60000', '', 'img\\vendor-package\\gardenia_grand_hall\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (63, 9, 17, 'Regular package', '15000', '15% Vat and 5% service charge on food menu will be added.', 'img\\vendor-package\\sector_7\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (64, 9, 18, 'Regular Price', '60000', '50tk per person will be added.', 'img/vendor-package/polwel_convention_center/p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (65, 9, 19, 'King’s Hall', '55000', '15% Vat will be added. Banquet Hall- Ground Floor. Length: 60Feet, Width: 30 Feet, Height: 23 Feet: Total Size: - 1800 Sft, Banner Size: 8\'x6\'', 'img\\vendor-package\\spectra_convention_hall\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (66, 9, 19, 'Queen’s Hal', '55000', '15% vat will be added.Banquet Hall- 1st Floor. Length: – 75 Feet, Width: – 25 Feet, Height: – 18 Feet: Total Size: 1875 Sft, Banner Size: 12\'x5\'', 'img\\vendor-package\\spectra_convention_hall\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (67, 9, 19, 'Family Ties Hall', '40000', '15% vat will be added. Banquet Hall-2nd Floor. Length: – 43 Feet, Width: – 34 Feet, Height: –10, Feet: Total Size: 1462 Sft, Banner Size: 10\'x6’ \r\n', 'img\\vendor-package\\spectra_convention_hall\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (68, 9, 19, 'Red Hall', '22000', '15% vat will be added. Conference Hall-1st Floor. 28 persons in Conference Chair OR 40-45 persons in Banquette Chair.\r\n(PA system & Built in Screen) ', 'img\\vendor-package\\spectra_convention_hall\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (69, 9, 19, 'Green Hall', '15000', '15% vat will be added. Conference Hall- Ground Floor. Any Setup: 30-35 Person & Theater Setup - 40 pax ', 'img\\vendor-package\\spectra_convention_hall\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (70, 9, 19, 'Golden Tulip Hall', '', 'Length: – 32 Feet, Width: – 19 Feet, Height: – 8.5 Feet. Total Size: – 608 Sft. \r\n', 'img\\vendor-package\\spectra_convention_hall\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (71, 9, 20, 'Regular Package', '65000', '30000 tk will be added for vat, service charge and khanshama. 50% money need to pay for booking before 15 days to 1 month.', 'img\\vendor-package\\maliha_convention_center\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (72, 9, 21, 'Regular Package', '35000', '5000 to 10000 taka need to pay for booking.', 'img\\vendor-package\\samsun_community_center\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (73, 9, 22, 'Regular Package', '30000', '', 'img\\vendor-package\\party_house\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (74, 9, 23, 'Regular Package', '180750', 'Booking money 30000 taka. 180750 taka will be charged for 500 person including service charge, decoration charge, Lighting system, gas, WASA, cleaning charge. After 500 person, for every 100 guest 11750 taka will be charged. After 12pm, in every hour 5000 tk service charge will be increase.', 'img\\vendor-package\\abacus_convention_center\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (75, 9, 24, 'Regular Package', '50000', '15% vat will be added based on food menu. Nearly 30day before need to pay 50% money for booking.30 waiters is required for every 500 guest. 200 taka will be charged for a single waiter.', 'img\\vendor-package\\ananda_community_center\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (76, 9, 25, 'Regular Package', '30000', '', 'img\\vendor-package\\bilash_bhaban_community\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (77, 9, 26, 'Regular Price', '30000', '', 'img\\vendor-package\\appayon_community_center_2\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (78, 9, 27, 'Regular Package', '28000', '', 'img\\vendor-package\\kazi_community_center\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (79, 9, 28, 'Both Hall', '120000', '15% vat and service charge will be added.', 'img\\vendor-package\\mirpur_convention_center\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (80, 9, 28, 'Hall 1', '80000', '15% vat and service charge will be added.', 'img\\vendor-package\\mirpur_convention_center\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (81, 9, 28, 'Hall 2', '50000', '15% vat and service charge will be added.', 'img\\vendor-package\\mirpur_convention_center\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (82, 9, 29, 'Regular Package', '40000', '5000 vat will be added.', 'img\\vendor-package\\atn_party_house\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (83, 9, 30, 'Regular Package', '20000', '15% vat will charged.', 'img\\vendor-package\\hill_town\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (84, 9, 31, 'Regular Package', '60000', 'Price is not fixed. It can be changed depend on guest. Price range will be 60000 to 110000', 'img\\vendor-package\\white_hall\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (85, 9, 33, 'Regular Package', '40000', '', 'img\\vendor-package\\sayeedana_community_center/p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (86, 9, 34, 'Regular Package', '30000', 'Per person 30 taka will be charged.', 'img\\vendor-package\\shimanto_convention_center\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (87, 9, 35, 'Regular Package', '90000', 'Per person 25 taka and 15% vat will be charged.', 'img\\vendor-package\\emmanuelle\'s_convention\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (88, 9, 36, 'Regular Package', '60000', '60000 taka will be charged for 500 guest. After 500 guest, 500 taka will be charged for every 100 guest.', 'img\\vendor-package\\new_dhaka_convention_center\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (89, 9, 37, 'Regular Package', '25000', 'For decoration and lighting system 8000taka will be charged.', 'http://via.placeholder.com/600x400', NULL, NULL);
INSERT INTO `packages` VALUES (90, 9, 38, 'Regular Package', '48000', '', 'img/vendor-package/isti_kutum_community_center/p1.jpg\r\n', NULL, NULL);
INSERT INTO `packages` VALUES (91, 9, 39, 'Regular Package', '60000', '', 'img\\vendor-package\\sea_shell_party_center\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (92, 9, 40, 'Regular Price', '40000', 'Per person 40 taka will be charged.', 'http://via.placeholder.com/600x400', NULL, NULL);
INSERT INTO `packages` VALUES (93, 15, 41, 'Wedding or Reception', '12000', 'Include face makeup, neck makeup, hand makeup, lashes and nails, any hairdo, outfit setting, jewelry setting, basically everything required to complete the Bridal look. And a mini facial on the day', 'img\\vendor-package\\make_it_up_by_farzana_islam\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (94, 15, 41, 'Semi Heavy Makeover', '10000', 'Holud or Engagement. Include face makeup, neck makeup, hand makeup, lashes and nails, any hairdo, outfit setting, jewelry setting, basically everything required to complete the Bridal look. And a mini facial on the day', 'img\\vendor-package\\make_it_up_by_farzana_islam\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (95, 15, 41, 'Simple Makeover', '8000', 'Akdh or Mehendi. Include face makeup, neck makeup, hand makeup, lashes and nails, any hairdo, outfit setting, jewelry setting, basically everything required to complete the Bridal look. And a mini facial on the day', 'img\\vendor-package\\make_it_up_by_farzana_islam\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (96, 15, 41, 'Heavy Glamour', '4500', 'Light hairdo, dress/sari and jewelry setting', 'img\\vendor-package\\make_it_up_by_farzana_islam\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (97, 15, 41, 'Heavy Makeup', '4000', 'Hair straight and curls and sari setting', 'img\\vendor-package\\make_it_up_by_farzana_islam\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (98, 15, 41, 'Light Glamour', '3500', 'Light hairdo, dress and jewelry setting (no dramatic eyes . No glitter.)', 'img\\vendor-package\\make_it_up_by_farzana_islam\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (99, 15, 41, 'Light Makeup', '3000', 'Hair straight and curls and sari', 'img\\vendor-package\\make_it_up_by_farzana_islam\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (100, 15, 41, 'Natural Makeup', '2000', 'Light hair setting. Will be used all drag store products', 'img\\vendor-package\\make_it_up_by_farzana_islam\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (101, 17, 46, 'Per Stick', '150', 'Per Stick - 150', 'img\\vendor-package\\karuka_mehendi\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (102, 17, 46, 'Per Stick (With finger)', '200', 'Per Stick (With Finger)', 'img\\vendor-package\\karuka_mehendi\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (103, 17, 46, 'Full Design Up To Wrist (per side)', '250', 'Full Design Up To Wrist (per side): 250/-', 'img\\vendor-package\\karuka_mehendi\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (104, 17, 46, 'Full Design Up To Half-way (per side)', '350', 'Full Design Up To Half-way (per side): 350/-', 'img\\vendor-package\\karuka_mehendi\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (105, 17, 46, 'Full Design Up To Elbow (per side)', '450', 'Full Design Up To Elbow (per side): 450/-', 'img\\vendor-package\\karuka_mehendi\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (106, 17, 46, 'Both Hand, Both Side', '1500', 'Both Hand, Both Side :1500', 'img\\vendor-package\\karuka_mehendi\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (107, 17, 46, 'Both Hand, Both Side Full Design Up To Elbow', '3000', 'Both Hand, Both Side Full Design Up To Elbow: 3000/-', 'img\\vendor-package\\karuka_mehendi\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (108, 17, 46, 'Both Hand, Both Side Full Design Up To Half-Way', '2000', 'Both Hand, Both Side Full Design Up To Half-Way: 3000/-', 'img\\vendor-package\\karuka_mehendi\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (109, 17, 46, 'Both Hand, Both Side Full Design Up To Wrist', '1300', 'Both Hand, Both Side Full Design Up To Wrist: 1300/-', 'img\\vendor-package\\karuka_mehendi\\p9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (110, 17, 46, 'Both Feet', '300', 'Both Feet Starts From 300/- (Depending on design patterns)', 'img\\vendor-package\\karuka_mehendi\\p10.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (111, 17, 46, 'Both Hand, Side Up To Elbow With Full Design', '4000', 'Both Hand, Both Side Up To Elbow With Full Design: 4000/- (Gorgeous hena designs + Colorful hena mehendi (As client wish))', 'img\\vendor-package\\karuka_mehendi\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (112, 17, 46, 'Both Hand, Side Up To Elbow and feet With Full Design', '5000', 'Both Hand, Both Side Up to Elbow With Full Design + Both Feet: 5000/- (Gorgeous hena design+ Colorful mehendi (As client wish))', 'img\\vendor-package\\karuka_mehendi\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (113, 16, 45, 'Cocolate frosting with whipped cream', '899', 'Cocolate frosting with whipped cream BDT 899', 'img\\vendor-package\\cake_paradise\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (115, 16, 45, 'Cocolate frosting with whipped cream', '899', 'Cocolate frosting with whipped cream BDT 899', 'img\\vendor-package\\cake_paradise\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (116, 16, 45, 'Cocolate frosting with cheese cream', '1599', 'Cocolate frosting with cheese cream BDT 1599', 'img\\vendor-package\\cake_paradise\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (117, 16, 45, 'Cocolate frosting with nutella & snickers cream', '1699', 'Cocolate frosting with nutella & snickers cream BDT 1699', 'img\\vendor-package\\cake_paradise\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (118, 16, 45, 'Snickers Cream', '1999', 'Snickers Cream BDT 1999', 'img\\vendor-package\\cake_paradise\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (119, 16, 45, 'Vanilla frosting with whipped Cream', '799', 'Vanilla frosting with whipped Cream BDT 799', 'img\\vendor-package\\cake_paradise\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (120, 16, 45, 'Vanilla frosting with butter cream', '1299', 'Vanilla frosting with butter cream BDT 1299', 'img\\vendor-package\\cake_paradise\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (121, 16, 45, 'Vanilla frosting with cheese cream', '1499', 'Vanilla frosting with cheese cream BDT 1499', 'img\\vendor-package\\cake_paradise\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (122, 16, 45, ' Redvelvet frosting with butter Cream', '1399', ' Redvelvet frosting with butter Cream BDT 1399', 'img\\vendor-package\\cake_paradise\\p9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (123, 16, 45, ' Redvelvet frosting with cheese cream', '1499', 'Redvelvet frosting with cheese cream BDT 1499', 'img\\vendor-package\\cake_paradise\\p10.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (124, 16, 45, 'Greenvelvet frosting with butter Cream', '1399', 'Greenvelvet frosting with butter Cream BDT 1399', 'img\\vendor-package\\cake_paradise\\p11.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (125, 16, 45, 'Greenvelvet frosting with Cheese Cream', '1499', 'Greenvelvet frosting with Cheese Cream BDT 1499', 'img\\vendor-package\\cake_paradise\\p12.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (126, 16, 45, 'Chocolate peanut', '1399', 'Chocolate peanut BDT 1399', 'img\\vendor-package\\cake_paradise\\p13.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (127, 16, 45, 'Vanilla peanut', '1399', 'Vanilla peanut BDT 1399', 'img\\vendor-package\\cake_paradise\\p14.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (128, 16, 45, 'Apricot Sponge', '1599', 'Apricot Sponge BDT 1599', 'img\\vendor-package\\cake_paradise\\p15.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (129, 16, 45, 'Strawberry with butter cream', '1299', 'Strawberry with butter cream BDT 1299', 'img\\vendor-package\\cake_paradise\\p16.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (130, 16, 45, 'Strawberry with strawberry cream', '1599', 'Strawberry with strawberry cream BDT 1599', 'img\\vendor-package\\cake_paradise\\p17.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (131, 16, 45, 'Blueberry sponge', '1599', 'Blueberry sponge BDT 1599', 'img\\vendor-package\\cake_paradise\\p18.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (132, 16, 45, 'Mango with mango cream', '1599', 'Mango with mango cream BDT 1599', 'img\\vendor-package\\cake_paradise\\p19.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (133, 16, 45, 'Mango with butter cream', '1299', 'Mango with butter cream BDT 1299', 'img\\vendor-package\\cake_paradise\\p20.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (134, 16, 45, 'Orange Sponge', '1299', 'Orange Sponge BDT 1299', 'img\\vendor-package\\cake_paradise\\p21.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (135, 16, 45, 'Lemon Sponge', '1299', 'Lemon Sponge BDT 1299', 'img\\vendor-package\\cake_paradise\\p22.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (136, 16, 45, 'Apricot Sponge', '1599', 'Apricot Sponge BDT 1599', 'img\\vendor-package\\cake_paradise\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (137, 16, 45, 'Roshmalai Cake', '1599', 'Roshmalai Cake BDT 1599', 'img\\vendor-package\\cake_paradise\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (138, 16, 45, 'Dudh Malai Cake', '1599', 'Dudh Malai Cake BDT 1599', 'img\\vendor-package\\cake_paradise\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (139, 10, 74, 'Regular Package', '200000', 'For every event charges 20000/event. ', 'img\\vendor-package\\dj_nirjhar\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (140, 10, 75, 'Regular Package', '10000', 'For every event charges 10,000 BDT per event. ', 'img\\vendor-package\\dj_jmn\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (141, 10, 76, 'Regular Package', '15000', 'For every event charges may vary from 15,000 BDT per event to 25,000 BDT per event, based on the event. ', 'img\\vendor-package\\dj_rafat\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (142, 10, 77, 'Regular Package', '8000', 'For every event charges 8000 BDT per event. ', 'img\\vendor-package\\dj_shahriar\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (143, 10, 78, 'Regular Package', '20000', 'For every event charges 20000 BDT per event. ', 'img\\vendor-package\\dj_niloy_ahasan\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (144, 10, 79, 'Regular Package', '12000', 'For every event charges 12000 BDT perevent. ', 'img\\vendor-package\\dj_kayser\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (145, 10, 80, 'Regular Package', '15000', 'For every event charges may vary from 15,000 BDT per event to 20,000 BDT per event, based on the event. ', 'img\\vendor-package\\dj_rubel\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (146, 10, 81, 'Regular Package', '7000', 'Per event 70000 BDT', 'img\\vendor-package\\dj_shipon\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (147, 15, 82, 'Bridal (Senior Hand)', '10000', 'Bridal (Senior Hand) - 10000', 'img\\vendor-package\\dreams_hair_&_beauty_corner\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (148, 15, 82, 'Bridal (Assistant Hand)', '12000', 'Bridal (Assistant Hand) - 12000', 'img\\vendor-package\\dreams_hair_&_beauty_corner\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (149, 15, 82, 'Bridal (Best Hand)', '16000', 'Bridal (Best Hand) - 16000', 'img\\vendor-package\\dreams_hair_&_beauty_corner\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (150, 11, 83, 'Platinum', '1065', 'Kacchi(full); Chicken Roast; Chicken Jali Kabab; Beef Kalia; Rumali Ruti; Chicken Vegetable ; Jorda(Basmati Chal);Raita;Alu Bokhara Chatni; Borhani; Pani; Salad; Mishti Pan', 'img\\vendor-package\\tf_catering\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (151, 11, 83, 'Gold', '800', 'Kacchi(full); Chicken Tikka; Chicken Jali Kabab; Chicken Vegetable ; Jorda(Basmati Chal);Alu Bokhara Chatni; Borhani; Pani; Salad; Mishti Pan', 'img\\vendor-package\\tf_catering\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (152, 11, 83, 'Silver', '680', 'Kacchi(full); Chicken Jali Kabab; Chicken Vegetable ;Alu Bokhara Chatni; Jorda(Basmati Chal); Borhani; Pani; Salad; Mishti Pan', 'img\\vendor-package\\tf_catering\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (153, 11, 83, 'Platter 1', '970', 'Morog Polao; Chiken Tikka; Chicken Jali Kabab; Beef Kalia; Rumali Ruti; Chicken Vegetable ; Firni; Raita; Alu Bokhara Chatni; Borhani; Pani; Salad; Mishti Pan', 'img\\vendor-package\\tf_catering\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (154, 11, 83, 'Platter 2', '700', 'Morog Polao; Chiken Roast; Chicken Jali Kabab; Chicken Vegetable ; Firni; Alu Bokhara Chatni; Borhani; Pani; Salad; Mishti Pan', 'img\\vendor-package\\tf_catering\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (155, 11, 83, 'Platter 3', '520', 'Morog Polao; Chicken Jali Kabab; Chicken Vegetable ; Firni; Alu Bokhara Chatni; Borhani;Pani; Salad; Mishti Pan', 'img\\vendor-package\\tf_catering\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (156, 11, 84, 'Menu 1', '0', 'Shahi khashi kacchi biriyani (Bashmoti/ Chinigura); Shahi nan ruti; Chicken tandoori/ Morog roast (1/4 pc); Beef vuna; Shahi jorda / Firni (with plastic cup and spoon);  Borhani with white cream dohi; Alubokhara chatni; Salad; Mineral water; Shahi paan box; Tissue/ soap/ Towel', 'img\\vendor-package\\nuruzzaman_catering_service\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (157, 11, 84, 'Menu 2', '0', 'Shahi khashi kacchi biriyani (Bashmoti/ Chinigura); Chicken tandoori/ Morog roast (1/4 pc); Jali Kabab / Tikka kabab; Shahi jorda / Firni (with plastic cup and spoon); Borhani with white cream dohi; Alubokhara chatni; Salad; Mineral water; Shahi paan box; Tissue/ soap/ Towel; ', 'img\\vendor-package\\nuruzzaman_catering_service\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (158, 11, 84, 'Menu 3', '0', 'Shahi Morog polaw (chinigura ); Morog cream fry (1/4 pc); Shahi nan ruti / Shahi porota; Khashi Rejala/ Vuna; Shahi jorda / Firni (with plastic cup and spoon); Borhani with white cream dohi; Alubokhara chatni; Salad; Mineral water; Shahi paan box; Tissue/ soap/ Towel', 'img\\vendor-package\\nuruzzaman_catering_service\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (159, 11, 84, 'Menu 4', '0', 'Shahi khashi kacchi biriyani (Bashmoti/ Chinigura); Chicken Roast/ Chicken Tandoori (1/4 pc); Beef vuna/ Kopta curry; Shahi jorda / Firni (with plastic cup and spoon); Borhani with white cream dohi; Alubokhara chatni; Salad; Mineral water; Shahi paan box; Tissue/ soap/ Towel', 'img\\vendor-package\\nuruzzaman_catering_service\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (160, 11, 84, 'Menu 5', '0', 'Plane Polaw; Chicken Roast; Kashi rejala; Chinese vegetables/ Jali kabab; Shahi jorda / Firni (with plastic cup and spoon); Borhani with white cream dohi; Salad; Mineral water; Shahi paan box; Tissue/ soap/ Towel', 'img\\vendor-package\\nuruzzaman_catering_service\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (161, 11, 84, 'Menu 6', '0', 'Plane polaw/ Motorshuti Polaw/ Kopta polaw; Chicken Roast (1/4 pc); Khashi Rejala; Rui fish fry/ Rupchada fish fry; Shahi jorda/ firni cup/ fruits custard; Borhani with white cream dohi; Salad; Mineral water; Shahi paan box; Tissue/ soap/ Towel', 'img\\vendor-package\\nuruzzaman_catering_service\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (162, 11, 84, 'Menu 7', '0', 'Shahi Morog Polaw; Khashir Rejala/ Beef Rejala; Jali Kabab/ Tikka kabab; Shahi Jorda/ Firni/ Shahi Tukra; Borhani with white cream dohi; Salad; Mineral water; Shahi paan box; Tissue/ soap/ Towel ', 'img\\vendor-package\\nuruzzaman_catering_service\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (163, 11, 84, 'Menu 8 (Holud)', '0', 'Shahi Morog Polaw; Jali Kabab/ Mixed Vegetables ; Salad/ mixed Salad; Chotpoti Fuchka; Reshmi Jilapi; Cup Coffee; Cold Drinks; Mineral water; Shahi paan Box; Tissue/ Soap/ Towel', 'img\\vendor-package\\nuruzzaman_catering_service\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (164, 11, 84, 'Menu 9 (Holud)', '0', 'Shahi khashi kacchi biriyani (Bashmoti/ Chinigura); Jali kabab / Tikka kabab; Salad/ Mixed Salad; Chotpoti Fuchka; Reshmi Jilapi; Cup Coffee; Cold Drinks; Mineral Water; Shahi Paan Box; Tissue/ Soap/ Towel', 'img\\vendor-package\\nuruzzaman_catering_service\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (165, 12, 85, 'Combo one', '20000', '1 senior and 1 associate; 1 cinematographer\r\n', 'img\\vendor-package\\wedd_life\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (166, 12, 85, 'Combo Two', '25000', '1 senior and 1 associate; 2 cinematographer\r\n', 'img\\vendor-package\\wedd_life\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (167, 12, 85, 'Combo Three', '40000', 'Chief photographer Imran kayes and one Senior; 1 senior cinematographer\r\n', 'img\\vendor-package\\wedd_life\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (168, 12, 85, 'Combo Four', '50000', 'Imran kayes (chief photographer Weddlife ) and 2 associate; 2 cinematographer\r\n', 'img\\vendor-package\\wedd_life\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (169, 12, 85, 'Bronze Package One', '10000', 'Single Event; 1 (OnePhotographer from Wedd-life Photography); All Edited Pictureswill be delivered in a DVD; Print: 4R (4\"X6\"): 50; 12L (12\"X18\"): 1; Duration: 4 Hrs', 'img\\vendor-package\\wedd_life\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (170, 12, 85, 'Bronze Package One', '16000', 'Single Event; 2 (TwoPhotographer from Wedd-life Photography); All Edited Pictureswill be delivered in a DVD; Print: 4R (4\"X6\"): 50; 12L (12\"X18\"): 1; Duration: 4 Hrs', 'img\\vendor-package\\wedd_life\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (171, 12, 85, 'Bronze Package One', '22000', 'Single Event; 3 (Two Senior Photographer and One Junior Photographer from Wedd-life Photography); All Edited Pictureswill be delivered in a DVD; Print: 4R (4\"X6\"): 100; 12L (12\"X18\"): 2; Duration: 4 Hrs', 'img\\vendor-package\\wedd_life\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (172, 12, 85, 'Silver Package One', '35000', 'Single Event; Only for Dhaka city; Our Key Photographer (Imran Kayes Sazid) & One Senior AssociatePhotographer Will Cover the Event.NB: Only Stage Oriented Photography. Will use extra lightsetup with umbrella. \r\nTime: 4 hours a day. [Approx.] (Only for any 4 hours in a row); Prints: 50 copies of 5L, 2 copies of 12L(12\"x18\"); No of Photographs: As much as we can take. (About 200 - 300 photographs)\r\n', 'img\\vendor-package\\wedd_life\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (173, 12, 85, 'Silver Package Two', '42000', 'Single Event; Only for Dhaka city; Our Key Photographer (Imran Kayes Sazid) , One Senior AssociatePhotographer & One Junior Photographer Will Cover the Event. NB: Only Stage Oriented Photography. Will use extra light setupwith umbrella. Time: 4 hours a day. [Approx.] (Only for any 4 hours in a row) Prints: 50 copies of 5L, 2 copies of 12L(12\"x18\"); No of Photographs: As much as we can take. (About 200 - 300 photographs)\r\n', 'img\\vendor-package\\wedd_life\\p9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (174, 12, 85, 'Silver Package Three', '46000', 'Single Event; Only for Dhaka city; Our Key Photographer (Imran Kayes Sazid), One Senior AssociatePhotographer & 2 Junior Photographers Will Cover the Event. NB: Will use extra light setup with umbrella.\r\nTime: 4 hours a day. [Approx.] (Only for any 4 hours in a row); Prints: 100 copies of 5L, 2 copies of 12L(12\"x18\"); No of Photographs: As much as we can take. (About 300 - 500 photographs per photographer)\r\n', 'img\\vendor-package\\wedd_life\\p10.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (175, 12, 85, 'Gold', '140000', 'Bride and Groom’s Holud, Wedding & Reception –Four events (only for Dhaka City); Our Key Photographer (Imran Kayes Sazid) & One Senior AssociatePhotographer Will Cover the Event. NB: Only Venue Oriented Photography. Photographers Will Cover the Whole Event. Will use extra light setup with umbrella. Time: 4 hours a day. [Approx.]; Prints: An exclusive Wedding Album with selective 150 copies of 5L& 150 copies of 4R(6\"x4\"), 4 copies of 12L(12\"x18\"); No of Photographs: Unlimited\r\n', 'img\\vendor-package\\wedd_life\\p11.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (176, 12, 85, 'Platinum', '160000', 'Bride and Groom’s Holud, Wedding and Reception – Four Events (only forDhaka City); Our Key Photographer (Imran Kayes Sazid) & Two Senior Associate Photographer Will Cover the Event. NB: Only Venue Oriented Photography. Photographers Will Cover the Whole Event. Will use extra light setup with umbrella. Time: 4 hours a day. [Approx.]; Prints: An exclusive Wedding story book & selective 150 copies of 5L & 150 copies of 4R(6\"x4\"),4 copies of 12L(12\"x18\"); No of Photographs: Unlimited\r\n', 'img\\vendor-package\\wedd_life\\p12.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (177, 12, 85, 'Super Exclusive Package', '300000', 'Brideand Groom’s Holud, Wedding, Reception+ Pre Wedding Photo-shoot ofBride & Groom + Cinematography – Four Events; No of Photographers: Our Key Photographer (Imran Kayes Sazid) & Three SeniorAssociate Photographers Will Cover the Event. No of Photographers: 2 Cinematographers for each Event. Time: 4 hours a day. [Approx.]; Prints:  An exclusive Wedding Story Book & selective 200 copies of 5R(5\"x7\") & 250 copies of 4R(6\"x4\"), 15 copies of 10R(10\"x12\"); No of Photographs: Unlimited\r\n', 'img\\vendor-package\\wedd_life\\p13.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (178, 12, 86, 'Super Saver', '12000', 'Number of Photographer: 1 (One Senior Photographer); Edited & Printed Photos: Total - 51 Copies\r\n', 'img\\vendor-package\\retro_focus\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (179, 12, 86, 'Exclusive', '17000', 'Number of Photographer: 2 (One Senior Photographer with One Associate Photographer); Edited & Printed Photos: Total - 61 Copies', 'img\\vendor-package\\retro_focus\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (180, 12, 86, 'Elegant', '21000', 'Number of Photographer: 3 (One Senior Photographer with Two Associate Photographer); Edited & Printed Photos: Total - 82 Copies', 'img\\vendor-package\\retro_focus\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (181, 12, 86, 'Gold', '26000', 'Number of Photographer: 3 (Two Senior Photographer with One Associate Photographer); Edited & Printed Photos: Total - 103 Copies', 'img\\vendor-package\\retro_focus\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (182, 12, 86, 'Super Saver Combo', '9000', '1 senior photographer will cover the whole event; Edited & Printed Photos: Total: 50 Copies; 1 cinematographer will cover the whole event', 'img\\vendor-package\\retro_focus\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (183, 12, 86, 'Combo One', '18000', '1 senior photographer will cover the whole event; Edited & Printed Photos: Total: 83 Copies; 1 senior cinematographer will cover the whole event', 'img\\vendor-package\\retro_focus\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (184, 12, 86, 'Combo Two', '22000', '1 senior photographer and 1 associate photographer will cover the whole event; Edited & Printed Photos: Total: 83 Copies; 1 senior cinematographers will cover the whole event', 'img\\vendor-package\\retro_focus\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (185, 12, 86, 'Combo Three', '26000', '2 senior photographers with 1 associate photographer will cover the whole event; Edited & Printed Photos: Total: 103 Copies; 2 senior cinematographers will cover the whole event', 'img\\vendor-package\\retro_focus\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (186, 12, 88, 'The Affordable Photography Package 2', '20000', 'No. of Photographers: 2 \r\n(2 Senior Photographer of WeddingMoments™)\r\n	 \r\n	Duration: 5 Hours (per event)\r\n	Number of Pictures: Unlimited\r\n	 \r\n	Prints (per event):\r\n	12L (12x18\") Matte prints: 1 copy\r\n4R (4x6\") Matte prints: 120 copies\r\n', 'img\\vendor-package\\wedding_moments\\wedding_moments_pk2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (187, 12, 88, 'The Regular Photography Package 2 (with Tanvir Ali)', '40000', 'No. of Photographers: 3 (Tanvir Ali for 2 hour with 2 Senior\r\nPhotographers of WeddingMoments™)\r\n \r\nDuration: 5 Hours (per event)\r\nNumber of Pictures: Unlimited\r\n \r\nPrints (per event):\r\n12L (12x18\") Matte prints: 1 copies\r\n4R (4x6\") Matte prints: 150 copies\r\n', 'img\\vendor-package\\wedding_moments\\wedding_moments_pk3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (188, 12, 88, 'The Exclusive Photography Package 2 (with Tanvir Ali)', '65000', '(Tanvir Ali for full event and 3 Senior Photographers of WeddingMoments™)\r\n \r\nDuration: 6 Hours (per event)\r\nNumber of Pictures: Unlimited\r\n \r\nFollowing the Bride or Groomfrom the venue.\r\n \r\nOne Exclusive wedding album.\r\n \r\nPrints (per event):\r\n12L (12×18″) Matte prints: 2 copies\r\n5L (5×7.5″) Matte prints: 200 copies\r\n\r\n', 'img\\vendor-package\\wedding_moments\\wedding_moments_pk4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (189, 12, 88, 'The Exclusive Photography Package 3 (with Tanvir Ali)', '80000', 'No. of Photographers: 5\r\n(Tanvir Ali for full event and 3 Senior Photographers of WeddingMoments™)\r\n \r\nDuration: 6 Hours (per event)\r\nNumber of Pictures: Unlimited\r\n \r\nPhotoshoot at the parlor: Yes\r\nFollowing the Bride or Groomfrom the venue.\r\n \r\nOne Exclusive wedding album.\r\n \r\nPrints (per event):\r\n12L (12×18″) Matte prints: 2 copies\r\n5L (5×7.5″) Matte prints: 250 copies\r\n', 'img\\vendor-package\\wedding_moments\\wedding_moments_pk5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (190, 12, 88, 'Combo Package 2', '30000', 'No. of Photographers: 2 \r\n(1 Senior Photographer and 1 Associate Photographer of WeddingMoments™)\r\n\r\n\r\n\r\nDuration: 5 Hours (per event)\r\nNumber of Pictures: Unlimited\r\n \r\nPrints:\r\n12L (12×18″) Matte prints: 1 copies\r\n4R (4×6″) Matte prints: 120 copies\r\n \r\nFull HD Cinematography\r\n', 'img\\vendor-package\\wedding_moments\\wedding_moments_pk1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (191, 12, 88, 'Combo Package 4', '45000', 'No. of Photographers: 3 \r\n(2 Senior Photographers and 1 Associate Photographer of WeddingMoments™)\r\n \r\n \r\nDuration: 5 Hours (per event)\r\nNumber of Pictures: Unlimited\r\n \r\nPrints:\r\n12L (12×18″) Matte prints: 1 copies\r\n4R (4×6″) Matte prints: 150 copies\r\n \r\nFull HD Cinematography\r\nNumber of cameras: 2\r\n \r\nTrailer: 3 - 5 minutes\r\nFull video: 30 – 40 minutes\r\n', 'img\\vendor-package\\wedding_moments\\wedding_moments_pk7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (192, 12, 88, 'Combo Package 8', '100000', 'No. of Photographers: 5\r\n(Tanvir Ali for full event and 4 Senior Photographers of WeddingMoments™)\r\n \r\n \r\nDuration: 6 Hours (per event)\r\nNumber of Pictures: Unlimited\r\n \r\n \r\nPhotoshoot at the parlor: Yes\r\nFollowing the Bride or Groom from the venue.\r\n \r\n \r\nOne Exclusive wedding album\r\n \r\nPrints:\r\n12L (12×18″) Matte prints: 2 copies\r\n5R (5×7.5″) Matte prints: 250 copies\r\n \r\nFull HD Cinematography\r\nNumber of cameras: 3\r\n \r\nSpecial Equipment:\r\nSteadicam: Yes\r\nSlider: Yes\r\n \r\n \r\n*The trailer will be edited under the direction of Tanvir Ali\r\n \r\n \r\nTrailer: 3 - 5 minutes\r\nFull video: 30 – 40 minutes\r\n\r\n', 'img\\vendor-package\\wedding_moments\\wedding_moments_pk8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (193, 12, 88, 'Cinematography Package 4', '40000', 'Number of cameras: 4\r\n \r\n \r\nSpecial Equipment:\r\nSteadicam: Yes\r\nSlider: Yes\r\n \r\n \r\nCoverage:\r\n \r\nFollowing the Bride and Groom from the venue\r\n \r\n \r\nTrailer: 3 - 5 minutes\r\nFull video: 30 - 40 minutes \r\n', 'img\\vendor-package\\wedding_moments\\wedding_moments_pk9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (194, 12, 88, 'Cinematography Package 5', '55000', 'Number of cameras: 5\r\n \r\n \r\nSpecial Equipment:\r\nJib Arm: Yes\r\nSteadicam: Yes\r\nSlider: Yes\r\n \r\n \r\nCoverage:\r\nFollowing the Bride from make-up/parlor\r\nFollowing the Groom from home\r\nFollowing the Bride and Groom from the venue\r\n \r\n \r\n*The trailer will be edited under the direction of Tanvir Ali\r\n \r\n \r\nTrailer: 3 - 5 minutes\r\nFull video: 30 - 40 minutes\r\n', 'img\\vendor-package\\wedding_moments\\wedding_moments_pk10.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (195, 12, 88, 'Combo Package 6', '55000', 'No. of Photographers: 3 (Tanvir Ali for 2 hours with \r\n2 Senior Photographers and of WeddingMoments™)\r\n \r\n \r\nDuration: 5 Hours (per event)\r\nNumber of Pictures: Unlimited\r\n \r\nPrints:\r\n12L (12×18″) Matte prints: 2 copies\r\n4R (4×6″) Matte prints: 200 copies\r\n \r\nFull HD Cinematography\r\nNumber of cameras: 2\r\n \r\nTrailer: 3 - 5 minutes\r\nFull video: 30 – 40 minutes\r\n', 'img\\vendor-package\\wedding_moments\\wedding_moments_pk11.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (196, 12, 89, 'Standard Photography', '40000', '1 Core Photographer & 1 Associate Photographer \r\nAll photos edited. \r\n100 4R prints.10 6L prints. \r\nNO ALBUM.\r\nDuration: Only Venue (Max 1230 am) \r\nPrice:40,000 BDT per event. ', 'img\\vendor-package\\rp\\rp_pk1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (197, 12, 89, 'Premium Package', '60000', '2 Core Photographers, 1 assistant photographer. \r\nUnlimited photographs in DVD \r\nAll photos edited, color corrected.\r\n150 4R prints, 15 6L,. \r\nDuration: Venue + Before (Till 1230AM) \r\nPrice: 60,000 BDT per event \r\n(For 3 day event package: 1,70,000 BDT)', 'img\\vendor-package\\rp\\rp_pk2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (205, 12, 90, 'Divine Star', '35000', '(Photography + Cinematography)\r\n\r\n\r\nPhotographer: 2 Top Senior Photographer with 1 Senior Photographer & 1 Associate Photographer\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\nCinematographer \r\n1 Senior Cinematographer (DSLR full HD camera) & an assistant.\r\n\r\nDuration: 4 Hours (Per event)\r\n\r\nVideo Edit: comes with 3/4 minutes trailer & 40/50 minutes edited video\r\n\r\n\r\n\r\n\r\nPrinted copy:\r\n	4R prints: 120 copies\r\n	5L (5″ ×7.5″) Print: 25 Copies\r\n	12L (12″×18″) Print: 1 Copy\r\n	20L (20\"×30\") Print: 1 Copy\r\n ', 'img\\vendor-package\\wedding_devine\\wedding_devine_pk6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (206, 12, 90, 'Divine Diamond', '40000', '(Photography + Cinematography)\r\n\r\n\r\nPhotographer: 2 Top Senior Photographer + 1 Associate Photographer\r\nCinematographer \r\n2 Senior Cinematographer (DSLR full HD camera) & an assistant.\r\n\r\n 4 Hours (Per event)\r\n\r\nVideo Edit: comes with 3/4 minutes trailer & 40/50 minutes edited video\r\n\r\nPrinted copy:\r\n	4R prints :170 copies\r\n	5L (5″ ×7.5″) Print: 20 Copies\r\n	12L (12″×18″) Print: 1 Copy\r\n	20L (20\"×30\") Print: 1 Copy\r\n ', 'img\\vendor-package\\wedding_devine\\wedding_devine_pk7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (207, 12, 90, 'Divine Platinum', '50000', '(Photography + Cinematography)\r\n \r\nPhotographer:  2 Top Senior Photographer with 1 Senior Photographer & 1 Associate Photographer\r\n\r\n\r\nCinematographer \r\n2 Senior Cinematographer (DSLR full HD camera) & an assistant.\r\n\r\nDuration:5 Hours (Per event)\r\n\r\nVideo Edit: comes with 3/4 minutes trailer & 40/50 minutes edited video\r\n\r\n\r\nPrinted copy:\r\n	4R prints: 200 copies\r\n	5L (5″ ×7.5″) Print: 40 Copies\r\n	12L (12″×18″) Print: 2 Copy\r\n	20L (20\"×30\") Print: 1 Copy\r\n ', 'img\\vendor-package\\wedding_devine\\wedding_devine_pk8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (208, 12, 90, ' Divine Premium With free Pre/Post wedding shoot', '70000', '(Photography + Cinematography)\r\n\r\nPhotographer: 2 Top Senior Photographer with 1 Senior Photographer & 1 Associate Photographer\r\n\r\nCinematographer \r\n2 Top With 1 Senior Cinematographer (DSLR full HD camera) & an assistant.\r\n\r\nDuration: 5 Hours (Per event)\r\n\r\nVideo Edit: comes with 3/4 minutes trailer & 40/50 minutes edited video\r\n\r\nPrinted copy:\r\n	4R prints: 100 copies\r\n	5L (5″ ×7.5″) Print: 100 Copies\r\n	12L (12″×18″) Print: 2 Copy\r\n	20L (20\"×30\") Print: 1 Copy\r\n', 'img\\vendor-package\\wedding_devine\\wedding_devine_pk9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (209, 12, 90, ' Divine Signature  With free Pre/Post wedding shoot', '100000', 'Photography + Cinematography)\r\nPhotographer:  3 Top Senior Photographer with 2 Senior Photographer & 1 Associate Photographer\r\n\r\nCinematographer  \r\n4 Top Senior Cinematographer (DSLR full HD camera) & an assistant.\r\n\r\nDuration: 5 Hours (Per event)\r\nVideo Edit: comes with 3/4 minutes trailer & 40/50 minutes edited video\r\n\r\nPrinted copy:\r\n	5L (5″ ×7.5″) Print: 200 Copies\r\n	12L (12″×18″) Print :6 Copy\r\n	20L (20\"×30\") Print: 3 Copy\r\n*****   Free Pre/Post Wedding   *****\r\n', 'img\\vendor-package\\wedding_devine\\wedding_devine_pk10.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (210, 12, 90, ' Pre-Wedding / Post Wedding Outdoor Photography', '10000', '    Duration: 2 Hours\r\n    Number of Photo shoot: Unlimited\r\n    Total Number of Print: 100\r\n    Number of Photographer: 1\r\n    We will deliver all post processed pictures on a DVD\r\n ', 'img\\vendor-package\\wedding_devine\\wedding_devine_pk11.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (211, 12, 90, 'Birthday Exclusive Package', '12000', '    Number of Photo shoot: Unlimited\r\n    Total no of print: 120 Copies\r\n     12L photos 1 copy\r\n\r\n     Number of photographer: 2\r\n     Edited copy- 100 copies\r\n    We will deliver all post processed pictures on a DVD\r\n    Time Duration: As long as the event continues.\r\n\r\n (After 11.00 pm; client will arrange the transportation)\r\n', 'img\\vendor-package\\wedding_devine\\wedding_devine_pk12.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (212, 12, 90, 'Birthday Normal Package', '8000', 'Number of Photo shoot: Unlimited\r\n    Total no of print: 50 Copies\r\n\r\n\r\n     Number of photographer: 1\r\n\r\n     Edited copy- 100 copies\r\n    We will deliver all post processed pictures on a DVD\r\n    Time Duration: As long as the event continues. \r\n\r\n(After 11.00 pm; client will arrange the transportation)\r\n', 'img\\vendor-package\\wedding_devine\\wedding_devine_pk13.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (213, 15, 91, 'Regular Glamorous Bridal Makeup', '15000', 'Bridal Makeup, hairstyle, accessories setting, saree drape, nail polish application, back hand makeup ', 'img/vendor-package/manami/manami_p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (214, 15, 91, 'Extra Glamorous Bridal Makeup', '18000', 'Bridal Makeup, hairstyle, accessories setting, saree drape, nail polish application, back hand makeup ', 'img/vendor-package/manami/manami_p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (215, 15, 91, 'Simple Akth Makeup', '7000', 'Makeup with hairstyle, accessories setting, saree drape', 'img/vendor-package/manami/manami_p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (216, 15, 91, 'Gorgeous Akht Makeup', '11000', 'Makeup with hairstyle, accessories setting, saree drape', 'img/vendor-package/manami/manami_p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (217, 15, 91, 'Simple Party Makeup', '3500', 'Simple Party Make up with hairstyle', 'img/vendor-package/manami/manami_p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (218, 15, 91, 'Gorgeous Party Makeup', '4500', 'Simple Party Make up with hairstyle', 'img/vendor-package/manami/manami_p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (219, 17, 92, 'Both hand both side up to Halfway ', '2500', 'Both hand both side up to Halfway ', 'img/vendor-package/mehendi_by_khowab/p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (220, 17, 92, 'Both hand both side up to quarter', '3000', 'Both hand both side up to quarter', 'img/vendor-package/mehendi_by_khowab/p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (221, 17, 92, ' Both hand both side up to elbow', '3000', ' Both hand both side up to elbow', 'img/vendor-package/mehendi_by_khowab/p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (222, 17, 92, 'Signature Work', '4000', 'Both hand both side up to elbow Signature work ', 'img/vendor-package/mehendi_by_khowab/p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (223, 17, 92, 'Both hand both side up to arm ', '4000', 'Both hand both side up to arm  ', 'img/vendor-package/mehendi_by_khowab/p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (224, 17, 92, 'Both Hand & Feet', '5000', 'Both hand both side up to arm and both leg string design  ', 'img/vendor-package/mehendi_by_khowab/p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (225, 17, 92, 'Feet String', '500', 'Simple leg string design ', 'img/vendor-package/mehendi_by_khowab/p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (226, 17, 92, 'Feet Gorgeous String', '1000', 'gorgeous leg string design ', 'img/vendor-package/mehendi_by_khowab/p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (227, 17, 92, 'Feet Upto Ankle', '2000', 'Gorgeous upto ankle design ', 'img/vendor-package/mehendi_by_khowab/p9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (228, 12, 94, 'Package-1', '8000', 'Package Including:  \r\n# 01  Senior Photographer \r\n# All basic edit\r\n# 50 Copies special edit \r\n# 40 Copies 4r print\r\n# 10 Copies 5r print  \r\n# Unlimited raw photos  \r\n# All photos will be delivered by DVD ', 'img\\vendor-package\\photoholic\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (229, 12, 94, 'Package-2', '11990', 'Package Including:  \r\n# 01 Senior photographer\r\n# 01 Associate photographer \r\n # All basic edit  \r\n# 80 Copies Special Edit photos \r\n# 60 Copies 4r print \r\n# 20 copies 5r print\r\n# 1 copy 8L   \r\n# Unlimited Raw Photos \r\n# All photos will be delivered by DVD ', 'img\\vendor-package\\photoholic\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (230, 12, 94, 'Package-3', '12999', ' Package Including:   \r\n# 01 Senior photographer \r\n# 01 Senior cinematographer \r\n # All basic edit \r\n# 50 Copies special edit  \r\n# 40 Copies 4r print \r\n# 10 Copies 5r print\r\n# 1 copy 8L   \r\n# Unlimited raw photos   \r\n# All photos will be delivered by DVD  ', 'img\\vendor-package\\photoholic\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (231, 12, 94, 'Package-4', '17490', '\r\nPackage Including: \r\n# 1 hour exclusive bride groom photo shoot by ( CEO/ CHIEF OF PHOTOHOLIC ) \r\n# 01 Core Photographer\r\n# 01 Associate photographer\r\n# All basic edit \r\n# 70 Copies special edit \r\n# 60 Copies 4r print \r\n# 10 Copies 6L print\r\n# 3 Copies 8L print\r\n# 1 Photo Album \r\n# Unlimited Raw Photos \r\n# All photos will be delivered by DVD', 'img\\vendor-package\\photoholic\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (232, 12, 94, 'Package-5', '19990', '\rPackage Including:\r\n # 01 Senior photographer\r\n# 01 Associate photographer \r\n# 01 Cinematographer \r\n# All basic edit\r\n# 100 Copies special edit\r\n# 70 Copies 4r print \r\n# 20 Copies 5L print\r\n# 7 Copies 6r print\r\n# 3 Copies 8L print\r\n# 1 Photo Album\r\n # 3- 5 mins wedding movie trailer  \r\n# Full video of the event    \r\n# Unlimited Raw Photos  \r\n# All photos & video will be delivered by DVD ', 'img\\vendor-package\\photoholic\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (233, 12, 94, 'Package-6', '29990', 'Package Including:  \r\n# 2 hours of bride groom exclusive photo session by Ariful Islam ( CEO/ CHIEF OF PHOTOHOLIC )\r\n# 01 Senior photographer  \r\n# 01 Associate photographer \r\n# 01 Cinematographer  \r\n# All basic edited photos \r\n# 100 photos exclusive edit by ARIFUL ISLAM  \r\n# 150 Copies 4r print  \r\n# 3 Copies 8L print\r\n# 2 Copies 12 L print\r\n# 1 Photo Album\r\n # 3- 5 mins wedding movie trailer  \r\n# Full video of the event   \r\n# Unlimited Raw Photos  \r\n# All photos & video will be delivered by DVD ', 'img\\vendor-package\\photoholic\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (234, 12, 94, 'Package-7', '44990', 'Package Including:  \r\n# 2 hours of bride groom exclusive photo session, 1 hour for family and friends portraits  by Ariful Islam ( CEO/ CHIEF OF PHOTOHOLIC )\r\n# 02 top Photographer \r\n# 01 senior photographer \r\n# 02 top cinematographer\r\n# All basic edit \r\n# 150 copies special edited photos by ARIFUL ISLAM\r\n# 200 copies 4R print \r\n# 40 copies 5r print \r\n# 3 copies 16L print\r\n# 2 copies 12 L print\r\n# 5 copies 8L print\r\n# 1 photo album\r\n# 3- 5 mins wedding movie trailer \r\n# Full video of the event\r\n# Surprise gift \r\n# Unlimited Raw Photos \r\n# All photos & video will be delivered by DVD', 'img\\vendor-package\\photoholic\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (235, 12, 94, 'Package-8', '79990', 'Package Including: \r\n # 2 hours of bride groom exclusive photo session, 1 hour for family and friends portraits and 1 our of group photo session  by Ariful Islam ( CEO/ CHIEF OF PHOTOHOLIC ) \r\n# 02 Core photographer  \r\n# 01 Top photographer  \r\n# 01 Senior photographer  \r\n# 02 Top cinematography  \r\n# 01 Senior cinematographer \r\n# Slider  \r\n# Crane 2\r\n# All basic edit  \r\n# 200 Copies special edited photos by ARIFUL ISLAM  \r\n# 200 Copies 5L print  \r\n# 50 Copies 6r print  \r\n# 4 Copie 16L print  \r\n# 3 Copies 8 L  print\r\n# 3 Copies 16 L print\r\n# 2 Photo album  \r\n# 1 Photo frame\r\n# 3- 5 mins wedding movie trailer  \r\n# Full video of the event  \r\n# Unlimited Raw Photos  \r\n# All photos & video will be delivered by DVD \r\n# 2 hrs of Pre/ Post wedding photography by core photographer ', 'img\\vendor-package\\photoholic\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (236, 12, 94, 'Premium Package', '99999', 'Package Including:\r\n \r\n# Full storytelling event coverage and direction by Ariful Islam  ( CEO/ CHIEF, PHOTOHOLIC ).\r\n# 02 Core Photographer  \r\n# 01 Top photographer  \r\n# 01 Senior photographer   \r\n# Chief Cinematographer \r\n# 02 top cinematography   \r\n# Slider   \r\n# Crane 2 \r\n# Jib arm   \r\n# Full photo edit by Ariful Islam\r\n# 200 Copies 5L print   \r\n# 50 copies 6r print   \r\n# 4 Copies 6L print   \r\n# 3 Copies 8 L print      \r\n# 3 copies 16 L  print   \r\n# 2 photo album   \r\n# 1 photo frame  \r\n# Unlimited Raw Photos\r\n# Story telling cinematography\r\n# 1 Photographer and cinematographer will cover bride-groom’s getting ready sessions.       \r\n# 3-5 Minute trailer with 30minute(aprox) full wedding film directed by Ariful Islam  ( CEO/ CHIEF, PHOTOHOLIC ) \r\n# All photos & video will be delivered by DVD \r\n\r\n3 hrs of Pre/ Post wedding photography by Ariful Islam ', 'img\\vendor-package\\photoholic\\p9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (237, 12, 95, 'Package-1 : (Photography+Cinematography)\r\n', '15000', 'Package Including:\r\n \r\n*1 Senior Photographer. \r\n*1 Senior Cinematographer.\r\n*Event Duration: 5 Hours\r\n*Unlimited Photos (All Photos Edited)\r\n*Specially Edited Photos: 50 copies\r\n*Print: 4R(4”x6\")  50 copies\r\n*All soft copy of photos will be delivered on DVD s.\r\n*Video Quality: 1080P(1920*1080) Full HD\r\n*25-30 mins edited video.\r\n*3-5 mins Trailer \r\n', 'img\\vendor-package\\rifat_reza\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (238, 12, 95, 'Package-3 : (Photography+Cinematography)\r\n', '20000', 'Package Including:\r\n \r\n*2 Senior Photographers and 1 Senior Cinematographer.\r\n*Event Duration: 5 Hours\r\n*Unlimited Photos (All Photos Edited)\r\n*Specially Edited Photos: 50 copies\r\n*Print: 4R(4”x6\")  50 copies\r\n*All soft copy of photos will be delivered on DVDs.\r\n*Video Quality: 1080P(1920*1080) Full HD\r\n*25-30 mins edited video.\r\n*3-5 mins Trailer \r\n', 'img\\vendor-package\\rifat_reza\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (239, 12, 95, 'Package-2 : (Photography+Cinematography)\r\n', '20000', 'Package Including:\r\n \r\n*1 TOP Photographer. \r\n*1 TOP Cinematographer.\r\n*Event Duration: 5 Hours\r\n*Unlimited Photos (All Photos Edited)\r\n*Specially Edited Photos: 50 copies\r\n*Print:4R (4”x6\")  :50 copies\r\n*All soft copy of photos will be delivered on DVD s.\r\n*Video Quality: 1080P(1920*1080) Full HD\r\n*25-30 mins edited video.\r\n*3-5 mins Trailer \r\n', 'img\\vendor-package\\rifat_reza\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (240, 12, 95, 'Package-4 : (Photography+Cinematography)\r\n', '25000', 'Package Including:\r\n \r\n*2 Photographers (1TOP+1Senior) \r\n*1 TOP Cinematographer.\r\n*Event Duration: 5 Hours\r\n*Unlimited Photos (All Photos Edited)\r\n*Specially Edited Photos: 50 copies\r\n*Print:4R (4”x6\") : 50 copies\r\n*All soft copy of photos will be delivered on DVD s.\r\n*Video Quality: 1080P(1920*1080) Full HD\r\n*25-30 mins edited video.\r\n*3-5 mins Trailer \r\n', 'img\\vendor-package\\rifat_reza\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (241, 12, 95, 'Package-5: (Photography+Cinematography)\r\n', '25000', 'Package Including:\r\n \r\nChief Photographer RIFAT REZA (1hour) with \r\n*1 Senior Photographer.\r\n*1 Senior Cinematographer.\r\n*Event Duration: 5 Hours\r\n*Unlimited Photos (All Photos Edited)\r\n*Specially Edited Photos: 100 copies\r\n*Print:4R (4”x 6\") : 100 copies\r\n*All soft copy of photos will be delivered on DVD s.\r\n*Video Quality: 1080P(1920*1080) Full HD\r\n*25-30 mins edited video.\r\n*3-5 mins Trailer \r\n', 'img\\vendor-package\\rifat_reza\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (242, 12, 95, 'Package-6: (Photography+Cinematography)\r\n', '30000', 'Package Including:\r\n \r\nChief Photographer RIFAT REZA(2hour) with \r\n*1 TOP Photographer.\r\n*1 TOP Cinematographer.\r\n*Event Duration: 5 Hours+\r\n*Unlimited Photos (All Photos Edited)\r\n*Specially Edited Photos: 100 copies\r\n*Print:4R (4”x6\") : 100 copies\r\n*10L Poster Size print: 1 copy\r\n*All soft copy of photos will be delivered on DVD s.\r\n*Video Quality: 1080P(1920*1080) Full HD\r\n*25-30 mins edited video.\r\n*3-5 mins Trailer \r\n\r\n', 'img\\vendor-package\\rifat_reza\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (243, 12, 95, 'Package-7: (Photography+Cinematography)\r\n', '35000', 'Package Including:\r\n \r\n*1 TOP Photographers \r\n*2 Cinematographers (1Top+1Senior) \r\n*Event Duration: 5 Hours+\r\n*Unlimited Photos (All Photos Edited)\r\n*Specially Edited Photos: 100 copies\r\n*Print:4R (4”x6\") : 100 copies\r\n*12L Poster Size print: 1 copy\r\n*All soft copy of photos will be delivered on DVD s.\r\n*Video Quality: 1080P(1920*1080) Full HD\r\n*25-30 mins edited video.\r\n*3-5 mins Trailer \r\n', 'img\\vendor-package\\rifat_reza\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (244, 12, 95, 'Package-8: (Photography+Cinematography)\r\n', '40000', 'Package Including:\r\n \r\nChief Photographer RIFAT REZA (3 hour)\r\n1 TOP+ 1 SENIOR Photographers. \r\n1 TOP + 1 SENIOR Cinematographers.\r\n*Event Duration: 5 Hours +\r\n*Chief Photographer RIFAT REZA session is 3 hours and he will cover the  portraits, couples, conceptual and also important family portraits.\r\n*Unlimited Photos (All Photos Edited)\r\n*Specially Edited Photo: 100 copies\r\n*Print: 4R (4”x6\") : 100 copies\r\n*20L (20”x30\")Poster Size print: 1 copy\r\n*Album\r\n*All soft copy of photos will be delivered on DVD s.\r\n*Cinematography Directed By RIFAT REZA\r\n*Video Quality: 1080P(1920*1080) Full HD\r\n*25-30 mins edited video.\r\n*Exclusive Story Type Cinematic Trailer\r\n \r\n', 'img\\vendor-package\\rifat_reza\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (245, 12, 95, 'Package-9: (Photography+Cinematography)\r\n', '60000', 'Package Including:\r\nChief Photographer RIFAT REZA (5 hour)\r\n2 TOP Photographers \r\n2 TOP Cinematographers \r\nDuration: 5 Hours+\r\n* 5 hours exclusive session  for Bride and Groom with conceptual photographs and exclusive Photo work at the event with their family by Chief Photographer RIFAT REZA.\r\n*Lighting System : 2 units External Lighting system which is very Useful for taking outstanding Family Photos on the stage( External wireless flash units )\r\n*Unlimited Photos (All Photos Edited)\r\n*Specially Edited Photo: 150 copies\r\n*Print: 4R (4”x6\") matte prints: 150 copies\r\n*20L (20”x30\")Poster Size print: 1 copy\r\n*Album\r\n*All soft copy of photos will be delivered on DVD.\r\n*WEDDING FILM Directed By RIFAT REZA\r\n*FullHD (1080P) Wedding Film\r\n* Exclusive Story Type Cinematic Trailer\r\n* Story type / Documentary .\r\n* Conceptual cinematography of every details.\r\n*Bride will be followed throughout from Makeup till her entry in the venue\r\n*Groom will be followed throughout from Getting ready till in the venue members\r\n*Bashor Coverage will be done (if Necessary)\r\n*FlyCam & Slider will be used for Necessary Cinematic Shots\r\n', 'img\\vendor-package\\rifat_reza\\p9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (246, 12, 95, 'Package-10: (Photography+Cinematography)\r\n', '80000', 'Package Including:\r\nChief Photographer RIFAT REZA(Full Event)\r\n3 TOP Photographers.\r\n3 TOP Cinematographers.\r\nDuration: 5 Hours+\r\n* 5 hours exclusive session  for Bride and Groom with conceptual photographs and exclusive Photo work at the event with their family by Chief Photographer RIFAT REZA.\r\n*Lighting System : 2 units External Lighting system which is very Useful for taking outstanding Family Photos on the stage( External wireless flash units )\r\n*Unlimited Photos (All Photos Edited)\r\n*Specially Edited Photo: 200 copies\r\n*Print: 4R (4”x6\") matte prints: 200 copies\r\n*20L (20”x30\")Poster Size print: 2 copy\r\n*Album\r\n*All soft copy of photos will be delivered on DVD.\r\n*WEDDING FILM Directed By RIFAT REZA\r\n*FullHD (1080P) Wedding Film\r\n* Exclusive Story Type Cinematic Trailer\r\n* Story type / Documentary .\r\n* Conceptual cinematography of every details.\r\n*Bride will be followed throughout from Makeup till her entry in the venue\r\n*Groom will be followed throughout from Getting ready till in the venue members\r\n*Bashor Coverage will be done (if Necessary)\r\n*FlyCam & Slider will be used for Necessary Cinematic Shots\r\n*Interviews of the Bride and Groom & Interviews of Family and Friends\r\n', 'img\\vendor-package\\rifat_reza\\p10.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (247, 13, 96, 'Regular Package\r\n', '10000', '', 'img\\vendor-package\\red_elegance\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (248, 13, 97, 'Regular Package\r\n', '10000', '', 'img\\vendor-package\\new_puspo_valley\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (249, 11, 99, 'Menu 1', '0', '১. সাদা পোলাও;\r\n২. মুরগির রোস্ট; \r\n৩. গরুর রেজালা; \r\n৪. জালি কাবাব; \r\n৫. মিক্সড সবজি; \r\n৬. বোরহানি; \r\n৭. শাহী জরদা; \r\n৮. পিস সালাদ; \r\n৯. মিনারেল পানি; \r\n', 'img\\vendor-package\\hasan-catering-service\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (250, 11, 99, 'Menu 2', '0', '১. সাদা পোলাও; \r\n২. মুরগির রোস্ট; \r\n৩. খাশির রেজালা;\r\n৪. জালি কাবাব;\r\n৫. মিক্সড সবজি;\r\n৬. বোরহানি;\r\n৭. শাহী জরদা; \r\n৮. পিস সালাদ; \r\n৯. মিনারেল পানি\r\n', 'img\\vendor-package\\hasan-catering-service\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (251, 11, 99, 'Menu 3', '0', '১. কাচ্চি বিরিয়ানি;\r\n২. মুরগির রোস্ট; \r\n৩. জালি কাবাব;\r\n৪. বোরহানি; \r\n৫. শাহী জরদা / ফিরনী;\r\n৬. পিস সালাদ;\r\n৭. আলুবোখারার চাটনি;\r\n৮. মিষ্টি পান;\r\n৯. মিনারেল পানি\r\n', 'img\\vendor-package\\hasan-catering-service\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (252, 11, 99, 'Menu 4', '0', '১. মোরগ পোলাও ( ২ পিস );\r\n২. গরুর ঝাল ভুনা / খাশি ঝাল ভুনা;\r\n৩. জালি কাবাব;\r\n৪. বোরহানি; \r\n৫. শাহী জরদা / ফিরনী;\r\n৬. পিস সালাদ;\r\n৭. আলুবোখারার চাটনি;\r\n৮. মিষ্টি পান;\r\n৯. মিনারেল পানি\r\n', 'img\\vendor-package\\hasan-catering-service\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (253, 11, 99, 'Menu 5', '0', '১. তেহারি গরু/খাশি;\r\n২. জালি কাবাব; \r\n৩. মিনারেল পানি/২৫০মি.লি. ড্রিংকস \r\n', 'img\\vendor-package\\hasan-catering-service\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (254, 11, 99, 'Menu 6', '0', '১. ভুনা খিচুড়ি; \r\n২. গরুর রেজালা / খাশির রেজালা; \r\n৩. আলুবোখারার চাটনি; \r\n৪. মাখা সালাদ; \r\n৫. মিনারেল পানি / ২৫০মি,লি, ড্রিংকস', 'img\\vendor-package\\hasan-catering-service\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (255, 15, 104, 'Bridal Package 1', '15000', '', 'img\\vendor-package\\smj_bridal_makeover\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (256, 15, 104, 'Bridal Package 2', '18000', '', 'img\\vendor-package\\smj_bridal_makeover\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (257, 15, 104, 'Bridal Package 3', '20000', '', 'img\\vendor-package\\smj_bridal_makeover\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (258, 15, 104, 'Bridal Package 4', '25000', '', 'img\\vendor-package\\smj_bridal_makeover\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (259, 15, 105, 'Assistant Bridal Makeover ', '8000/10000', 'Makeup, hair, saree, hand-makeup. ', 'img\\vendor-package\\sakiron\'s_makeover_salon\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (260, 15, 105, 'Sakiron Ma\'am', '15000/18000', 'Makeup, hair, saree, hand-makeup. ', 'img\\vendor-package\\sakiron\'s_makeover_salon\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (261, 15, 105, 'Party Makeup', '2000/3000/5000', 'Makeup, hair, saree, hand-makeup. ', 'img\\vendor-package\\sakiron\'s_makeover_salon\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (262, 15, 106, 'Bridal Makeup', '7000 - 20000', '', 'img\\vendor-package\\fabulous_glamour\'s_beauty_parlour\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (263, 17, 107, 'Single Hand', '800', 'Per hand one side upto elbow (gorgeous)', 'img\\vendor-package\\alpona_mehedi\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (264, 17, 107, 'Both Hand Single Side', '2000', 'Both hands one side upto elbow (gorgeous)', 'img\\vendor-package\\alpona_mehedi\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (265, 17, 107, 'Both Hand Both Side', '3500', 'Both hands both sides up to elbow (gorgeous)', 'img\\vendor-package\\alpona_mehedi\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (266, 12, 108, 'Combo Basic', '12999', 'Package Includes:\r\n\r\n1.Senior Photographer\r\n2.Cinematographer\r\n\r\nTime duration:4.30 hours\r\nUnlimited Photos+soft copies in DVD\r\n50 special edited+All Basic Edited\r\n50 prints 4R +Album\r\nMain Movie(20-40min)+Trailer(2-3min)', 'img\\vendor-package\\mat_photography\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (267, 12, 108, 'Chief Combo Premium', '50000', 'Package Includes:\r\nChief Photographer(full event)\r\n3 Senior Photographer\r\n3 Cinematographer\r\n\r\nTime duration:4.30 hours\r\nUnlimited Photos+soft copies in DVD\r\n200 special edited+All Basic Edited\r\n200 prints 4R +Album+2 poster size\r\nMain Movie(20-60min)+Trailer(2-3min)', 'img\\vendor-package\\mat_photography\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (268, 12, 108, 'Chief Combo Master', '65000', 'Package Includes:\r\nChief Photographer(full event)\r\n4 Senior Photographer\r\n4 Cinematographer\r\n\r\nTime duration:4.30 hours\r\nUnlimited Photos+soft copies in DVD\r\n300 special edited+All Basic Edited\r\n300 prints 4R +5 Poster size+Album\r\nMain Movie(20-60min)+Trailer(2-3min)', 'img\\vendor-package\\mat_photography\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (269, 12, 108, 'Single Photo', '7500', 'Package Includes:\r\nSenior Photographer\r\n\r\nTime duration:4.30 hours\r\nUnlimited Photos+soft copies in DVD\r\n50 special edited+All Basic Edited\r\n50 prints 4R+Album\r\n', 'img\\vendor-package\\mat_photography\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (270, 12, 108, 'Chief Photo Mini', '16999', 'Package Includes:\r\nChief Photographer for whole event\r\nSenior Photographer\r\nTime duration:4.30 hours\r\nUnlimited Photos+soft copies in DVD\r\n50 special edited+All Basic Edited\r\n50 prints 4R+Album\r\n', 'img\\vendor-package\\mat_photography\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (271, 12, 108, 'Chief Combo Elite', '35000', 'Package Includes:\r\nChief Photographer for whole event\r\n2 Senior Photographer\r\n2 Cinematographer\r\n\r\nTime duration:4.30 hours\r\nUnlimited Photos+soft copies in DVD\r\n150 special edited+All Basic Edited\r\n150 prints 4R+2 POster Size+Album\r\nMain movie(20-40min) +Trailer(2-3min)\r\n', 'img\\vendor-package\\mat_photography\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (272, 12, 108, 'Chief Combo Standard', '22999', 'Package Includes:\r\nChief Photographer for whole event\r\n2 Senior Photographer\r\n2 Cinematographer\r\n\r\nTime duration:4.30 hours\r\nUnlimited Photos+soft copies in DVD\r\n150 special edited+All Basic Edited\r\n150 prints 4R+2 POster Size+Album\r\nMain movie(20-40min) +Trailer(2-3min)\r\nPackage Includes:\r\nChief Photographer for whole event\r\n1 Senior Photographer\r\n1 Cinematographer\r\n\r\nTime duration:4.30 hours\r\nUnlimited Photos+soft copies in DVD\r\n100 special edited+All Basic Edited\r\n100 prints 4R+2 POster Size+Album\r\nMain movie(20-40min) +Trailer(2-3min)\r\n', 'img\\vendor-package\\mat_photography\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (273, 12, 108, 'Chief Combo 1.5', '16999', 'Package Includes:\r\nChief Photographer for 1.5 hours\r\n1 Senior Photographer\r\n1 Cinematographer\r\n\r\nTime duration:4.30 hours\r\nUnlimited Photos+soft copies in DVD\r\n100 special edited+All Basic Edited\r\n100 prints 4R+Album\r\nMain movie(20-40min) +Trailer(2-3min)\r\n', 'img\\vendor-package\\mat_photography\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (274, 12, 109, 'Package 1', '16000', 'Package Includes:\r\n\r\n Senior Photographer\r\n Cinematographer\r\n', 'img\\vendor-package\\jolchap\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (275, 12, 109, 'Package 02', '28000', 'Package Includes:\r\n Chief Photographer\r\n Asst Photographer\r\n 1 Cinematographer\r\n', 'img\\vendor-package\\jolchap\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (276, 12, 109, 'Package 03', '32000', 'Package Includes:\r\n Chief Photographer\r\n 1 senior Photographer\r\n 1 Cinematographer\r\n', 'img\\vendor-package\\jolchap\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (277, 12, 109, 'Package 04', '35000', 'Package Includes:\r\n Chief Photographer\r\n 2 Asst Photographer\r\n 1 Cinematographer\r\n', 'img\\vendor-package\\jolchap\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (278, 12, 109, 'Package 05', '42000', 'Package Includes:\r\n Chief Photographer\r\n Senior Photographer\r\n Asst Photographer\r\n 2 Cinematographer', 'img\\vendor-package\\jolchap\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (279, 12, 109, 'Package 06', '52000', 'Package Includes:\r\n Chief Photographer\r\n Senior Photographer\r\n 2 Asst Photographer\r\n 3 Cinematographer\r\n', 'img\\vendor-package\\jolchap\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (280, 12, 110, 'Videography/Cinematography Special Packages', '6000', 'Package Includes:\r\n\r\nCinematography/Videography\r\n\r\nStory Based Cinematography - 50,000 BDT\r\nCinematography ( Done by 2 cameras) - 30,000 BDT\r\nCinematography ( By 1 Camera ) - 15,000 BDT\r\nVideography - HD - 6,000 BDT\r\n\r\n# All RAW footage will be delivered\r\n# All Trailers will be HD (1080p) in resolution', 'img\\vendor-package\\wm_by_an\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (281, 12, 110, 'Special Package: A', '90000', 'Package Includes:\r\n\r\n90,000 BDT with Cinematography Directed By Afzal Nazim\r\n75,000/- (Per day), with Two (2) HD videography\r\n65,000/- without videography\r\n\r\nNumber Of Photographers: 5 (Afzal Nazim with 2 Top photographers and 2 Top Associate Photographers)\r\nIncluding Afzal Nazim for the Day Long Photoshoot\r\nIncludes One Pre/Post wedding photoshoot By Afzal Nazim\r\n\r\nFocus:\r\nDay long shoot (including pre wed) with Afzal Nazim\r\nConcentrate on Bride n Groom Along with the event\r\nA special session with bride By Afzal Naim\r\nGroom Session couple by Afzal Nazim\r\nCouple Session With Afzal Nazim\r\nA Photo Booth for the guests photos\r\nPortrait Photographer for moments\r\nOne Photographer for Guest Portraits\r\n12 leaves Exclusive Album (Like Magazine)\r\nExclusive Bashor Shoot by Afzal nazim\r\nOne Photographer will start from Groom\'s Residence\r\nOne photographer will start from Bride\'s Salon\r\nOne Projector\r\nFree Pre/Post wedding\r\n\r\nAFZAL NAZIM WILL STAY FULLTIME\r\n\r\nDuration: As long as the event continues.\r\nNumber of Pictures: Unlimited\r\n\r\nPrint:\r\n20L (20×30″) poster : 3 copies with frame\r\n12L (12x18\") prints: 5 copies with frame,\r\n5L (5x7.5\") prints: 300 copies\r\nSpecially Edited Photographs: 175\r\n\r\nAll pictures taken at the event will be delivered on a DVD/CD.\r\nFree DVD Slide-show with selected pictures & songs.', 'img\\vendor-package\\wm_by_an\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (282, 12, 110, 'Special Package: B', '65000', 'Package Includes:\r\n\r\nAmount:\r\n65,000 BDT with Cinematography Directed By Afzal Nazim\r\n55,000/- (Per day), with Two (2) HD videography\r\n50,000/- without videography\r\n\r\nNumber Of Photographers: 5, (Afzal Nazim with 2 Top photographers and 2 Top Associate Photographers)\r\nIncluding Afzal Nazim for the whole time\r\nIncludes One Pre/Post wedding photoshoot By Afzal nazim\r\n\r\nFocus:\r\n1. Concentrate on Bride n Groom Along with the event\r\n2. A special session with bride By Afzal Naim\r\n3. Groom Session couple by Afzal Nazim\r\n4. Couple Session With Afzal Nazim\r\n5. A Photo Booth for the guests photos\r\n6. Portrait Photographer for moments\r\n7. One Photographer for Guest Portraits\r\n8. 12 leaves Exclusive Album (Like Magazine)\r\n9. Exclusive Bashor Shoot by Afzal nazim\r\n10. One Photographer will start from Groom\'s Residence\r\n11. One photographer will start from Bride\'s Salon\r\n12. One Projector\r\n13. Free Pre/Post wedding\r\n\r\nAFZAL NAZIM WILL STAY FULLTIME\r\n\r\nDuration: As long as the event continues.\r\nNumber of Pictures: Unlimited\r\n\r\nPrint:\r\n20L (20×30″) poster : 1 copy with frame\r\n12L (12x18\") prints: 5 copies with frame,\r\n8L (8x12\") prints: 5 copies\r\n5L (5x7.5\") prints: 300 copies\r\nSpecially Edited Photographs: 175\r\n\r\n\r\nAll pictures taken at the event will be delivered on a DVD/CD.\r\nFree DVD Slide-show with selected pictures & songs.', 'img\\vendor-package\\wm_by_an\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (283, 12, 110, 'Special Package: C', '50000', 'Package Includes:\r\n\r\nAmount:\r\n50,000/- with Cinematrography\r\n40,000/- with One (1) HD videography\r\n35,000/- without Videography\r\n\r\nNumber Of Photographers: 4, (Afzal Nazim with 2 Top photographers and 1 Top Associate Photographer)\r\nIncluding Afzal Nazim for the whole time\r\nIncludes One Pre/Post wedding photoshoot By Afzal Nazim\r\n\r\nFocus:\r\n1. Concentrate on Bride n Groom Along with the event\r\n2. A special session with bride By Afzal Naim\r\n3. Groom Session couple by Afzal Nazim\r\n4. Couple Session With Afzal Nazim\r\n5. A Photo Booth for the guests photos\r\n6. Portrait Photographer for moments\r\n7. One Photographer for Guest Portraits\r\n8. One Photographer will start from Groom\'s Residence\r\n9. 12 leaves Exclusive Album (Like Magazine)\r\n10. Free Pre/Post wedding\r\n\r\nAFZAL NAZIM WILL STAY FULLTIME\r\n\r\nDuration: 5 Hours (Per day),\r\nNumber of Pictures: Unlimited\r\n\r\nPHOTOGRAPHERS WILL BE STAYING AT THE VENUE ONLY\r\n\r\nPrint:\r\n\r\n12L (12×18″) Matte or Glossy prints: 3copies with frame\r\n8L (8×12″) Matte or Glossy prints: 5 copies\r\n5L prints: 200 copies\r\nEdited Photographs: 200\r\nSpecially Edited Photographs: 125\r\n\r\nAll pictures taken at the event will be delivered on a DVD/CD.\r\nFree DVD Slide-show with selected pictures & songs.', 'img\\vendor-package\\wm_by_an\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (284, 12, 110, 'Special Package: D', '35000', 'Package Includes:\r\n\r\nAmount:\r\n35,000/- with Cinematography\r\n32,000/- with HD Videography\r\n28,000/- Without Videography\r\n\r\nNumber Of Photographers: 3 (Afzal Nazim, with 2 Top photographers and 1 Top Associate Photographer)\r\nIncluding Afzal Nazim will stay 3 hrs\r\nIncludes One Pre/Post wedding photoshoot By /Robin\r\n\r\nFocus:\r\n\r\n1. One exclusive Bridal Session With Afzal Nazim\r\n2. One Portrait photographer who will start from home\r\n3. Family Session with Afzal Nazim\r\n4. Conceptual Photographs from Afzal Nazim\r\n\r\nDuration: 5 Hours (Per day),\r\nNumber of Pictures: Unlimited\r\n\r\nPHOTOGRAPHERS WILL BE STAYING AT THE VENUE ONLY\r\nPrint:\r\n\r\n12L (12×18″) Matte or Glossy prints: 1 copies\r\n8L Prints: 2 Copies\r\n4R prints: 200 copies\r\nEdited Photographs: 200\r\nSpecially Edited Photographs: 150\r\n\r\nAll pictures taken at the event will be delivered on a DVD/CD.', 'img\\vendor-package\\wm_by_an\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (285, 12, 110, 'Special Package: E', '25000', 'Package Includes:\r\n\r\nAmount:\r\n25,000/- with Cinematography\r\n22,000/- with HD videography\r\n18,000/- without Videography\r\nNumber Of Photographers: 3\r\n\r\nNumber Of Photographers: 3 (Top 2 Photographers and 1 Top Associate Photographer)\r\n\r\nIncludes One Pre/Post wedding photoshoot\r\nFocus:\r\nBridal Session\r\nCouple Session\r\nOutdoor shoot by Portrait photographer\r\nBashor Shoot\r\nDuration: 5 Hours (Per day)\r\nNumber of Pictures: Unlimited\r\n\r\nPHOTOGRAPHERS WILL BE STAYING AT THE VENUE ONLY\r\n\r\nPrint:\r\n12L Print: 1 Copy\r\n4R prints: 150 copies\r\nEdited Photographs: 150\r\nSpecially Edited Photographs: 100\r\nAll pictures taken at the event will be delivered on a DVD/CD.', 'img\\vendor-package\\wm_by_an\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (286, 12, 110, 'Special Package: F', '15000', 'Package Includes:\r\n\r\nAmount: \r\n15,000/- (Per day), with videography\r\n10,000/- without Videography\r\n\r\nNumber Of Photographers: 1 Top Photographer with 1 Associate Photographer\r\n\r\nFocus:\r\n1. Bridal Session\r\n2. Couple Session\r\n\r\nDuration: 5 Hours (Per day)\r\nNumber of Pictures: Unlimited\r\n\r\nPHOTOGRAPHERS WILL BE STAYING AT THE VENUE ', 'img\\vendor-package\\wm_by_an\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (287, 12, 110, 'Special Package: G', '12000', 'Package Includes:\r\n\r\nAmount:\r\n12,000/- with HD videography\r\n8,000/- without Videography\r\n\r\nNumber Of Photographers: 1\r\n1 Top photographer will cover ur program.\r\n\r\nFocus:\r\nBridal Session\r\nCouple Session\r\nDuration: 5 Hours (Per day)\r\nNumber of Pictures: Unlimited\r\n\r\nPHOTOGRAPHERS WILL BE STAYING AT THE VENUE ONLY\r\n\r\nPrint:\r\n\r\n4R prints: 125 copies\r\nEdited Photographs: 125\r\nSpecially Edited Photographs: 100\r\nAll pictures taken at the event will be delivered on a DVD/CD.', 'img\\vendor-package\\wm_by_an\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (288, 12, 110, 'Special Package: H', '10000', 'Package Includes:\r\n\r\nAmount:\r\n10,000/- with HD videography\r\n6,000/- without Videography\r\n\r\nNumber Of Photographers: 1\r\n1 Top Associate Photographer will cover ur program.\r\n\r\nFocus:\r\nBridal Session\r\nCouple Session\r\nDuration: 5 Hours (Per day)\r\nNumber of Pictures: Unlimited\r\n\r\nPHOTOGRAPHERS WILL BE STAYING AT THE VENUE ONLY\r\n\r\nPrint:\r\n4R prints: 125 copies\r\nEdited Photographs: 125\r\nSpecially Edited Photographs: 100\r\nAll pictures taken at the event will be delivered on a DVD/CD.', 'img\\vendor-package\\wm_by_an\\p9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (289, 11, 42, 'Menu 1', '0', '1.	Shada Polaw\r\n2.	Chicken Roast \r\n3.	Chicken Cram fry/ Chicken Onion\r\n4.	Khashi Rejala/ Morog Rejala\r\n5.	Fish cutlet\r\n6.	White vegetables/ Chinese vegetables\r\n7.	Alu Bokhara Chatni\r\n8.	Kabab/jail kabab/ shami kabab/tikka kabab\r\n9.	Jorda/ Firni/ Custard/ Doi\r\n10.	Borhani/ Labang\r\n11.	Salad/Russian Salad/ fruits Salad/ Cashew nut salad/ Raita Salad\r\n', 'img\\vendor-package\\fazlur_rahman\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (290, 11, 42, 'Menu 2', '0', '1.	Shada Polaw \r\n2.	Chicken Roast\r\n3.	Chicken Cram fry/ Chicken Onion\r\n4.	Fish cutlet\r\n5.	Beef Rejala\r\n6.	Chinese vegetables\r\n7.	Alu Bokhara Chatni\r\n8.	Kabab/jail kabab/ shami kabab/tikka kabab\r\n9.	Jorda/ Firni/ Custard/ Doi\r\n10.	Borhani/ Labang\r\n11.	Salad/Russian Salad/ fruits Salad/ Cashew nut salad/ Raita Salad\r\n', 'img\\vendor-package\\fazlur_rahman\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (291, 11, 42, 'Menu 3', '0', '1.	Kacchi Biriyani\r\n2.	Chicken Roast/ Grill\r\n3.	Alu Bokhara Chatni\r\n4.	Kabab/jail kabab/ shami kabab/tikka kabab\r\n5.	Meet Ball\r\n6.	Jorda/ Firni/ Custard/ Doi\r\n7.	Borhani/ Labang\r\n8.	Salad\r\n', 'img\\vendor-package\\fazlur_rahma\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (292, 11, 42, 'Menu 4', '0', '1.	Shada Polaw\r\n2.	Chicken Roast\r\n3.	Chicken Cram fry/ Chicken Onion\r\n4.	Fish cutlet\r\n5.	Kashi Rejala\r\n6.	Rui Fish do Piyaju\r\n7.	Alu Bokhara Chatni\r\n8.	Kabab/jail kabab/ shami kabab/tikka kabab\r\n9.	Jorda/ Firni/ Custard/ Doi\r\n10.	Borhani/ Labang\r\n11.	Salad/Russian Salad/ fruits Salad/ Cashew nut salad/ Raita Salad\r\n', 'img\\vendor-package\\fazlur_rahman\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (293, 11, 42, 'Menu 5', '0', '1.	Shada Polaw\r\n2.	Chicken Roast/ Fry\r\n3.	Chicken Cram fry/ Chicken Onion\r\n4.	Beef Rejala\r\n5.	Chinese vegetables\r\n6.	Alu Bokhara Chatni\r\n7.	Rui Fish do Piyaju\r\n8.	Kabab/jail kabab/ shami kabab/tikka kabab\r\n9.	Meet Ball\r\n10.	Jorda/ Firni/ Custard/ Doi\r\n11.	Borhani/ Labang\r\n12.	Salad/ Raita Salad', 'img\\vendor-package\\fazlur_rahman\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (294, 11, 42, 'Menu 6', '0', '1.	Morog Polaw\r\n2.	Chicken Roast/ fry\r\n3.	Khashi Rejala\r\n4.	Kabab/jail kabab/ shami kabab/tikka kabab\r\n5.	Meet Ball\r\n6.	Shashli Kabab\r\n7.	Jorda/ Firni/ Custard/ Doi\r\n8.	Borhani/ Labang\r\n9.	Salad', 'img\\vendor-package\\fazlur_rahman\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (295, 11, 42, 'Menu 7', '0', '1.	Morog Polaw\r\n2.	Rui Fish do Piyaju\r\n3.	Meet Ball\r\n4.	Morog Rejala\r\n5.	Alu Bokhara Chatni\r\n6.	Shashli Kabab\r\n7.	Jorda/ Firni/ Custard/ Doi\r\n8.	Borhani/ Labang\r\n9.	Salad', 'img\\vendor-package\\fazlur_rahman\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (296, 11, 42, 'Menu 8', '0', '1.	Vuna khichuri\r\n2.	Porota+ Boti kabab/Shik Kabab\r\n3.	Chicken Tandoori\r\n4.	Vegetable Pakora\r\n5.	Beef Kolija\r\n6.	Chinese Vegetable\r\n7.	Salad\r\n8.	Cold Drinks\r\n9.	Coffee', 'img\\vendor-package\\fazlur_rahman\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (297, 11, 42, 'Menu 9', '0', '1.	Khashi Tehri\r\n2.	Porota+Boti Kabab/Shik Kabab\r\n3.	Chicken Tandoori\r\n4.	Vegetable Pakora/ Kopi Fuluri\r\n5.	Fuchka/Chotpoti\r\n6.	Vaba Pitha\r\n7.	Jilapi/ Reshmi Jilapi\r\n8.	Salad\r\n9.	Cold Drinks\r\n10.	Coffee', 'img\\vendor-package\\fazlur_rahman\\p9.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (298, 11, 42, 'Menu 10', '0', '1.	Beef Tehri\r\n2.	Porota\r\n3.	Chicken Tandoori\r\n4.	Vegetable Pakora/ Kopi Fuluri\r\n5.	Fuchka/ Chotpoti\r\n6.	Vaba Pitha\r\n7.	Jilapi/ Reshmi Jilapi\r\n8.	Salad\r\n9.	Cold Drinks\r\n10.	Coffee', 'img\\vendor-package\\fazlur_rahman\\p10.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (299, 13, 111, 'Regular Package', '50000', 'Regular Package', 'img\\vendor-package\\blitz\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (300, 13, 113, 'Regular Package', '25000', 'Regular Package', 'img\\vendor-package\\elegant_es\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (301, 13, 114, 'Regular Package', '15000', 'Regular Package', 'img\\vendor-package\\exclusive\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (302, 13, 115, 'Regular Package', '30000', 'Regular Package', 'img\\vendor-package\\iiedatan\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (303, 13, 116, 'Regular Package', '50000', 'Regular Package', 'img\\vendor-package\\sparkling\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (304, 13, 117, 'Regular Package', '20000', 'Regular Package', 'img\\vendor-package\\wedding_decor\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (305, 13, 118, 'Regular Package', '25000', 'Regular Package', 'img\\vendor-package\\ruhaani\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (306, 13, 119, 'Regular Package', '30000', 'Regular Package', 'img\\vendor-package\\classic_events\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (307, 13, 120, 'Regular Package', '25000', 'Regular Package', 'img\\vendor-package\\green_box\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (308, 13, 132, 'Regular Package', '10000', 'Regular Package', 'img\\vendor-package\\colors_event\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (309, 13, 121, 'Regular Package', '50000', 'Regular Package', 'http://via.placeholder.com/600x400', NULL, NULL);
INSERT INTO `packages` VALUES (310, 12, 130, 'Shimmer', '30000', 'Photographers :: Chief Photographer Mahbube Subhani Prottoy (Exclusive portrait session of bride and groom for 1 hour) 1 senior photographer 1 associate photographer Photos : unlimited Edited Photos :: 100 Print :: 90 copies of 5L 5 copies of 6L 2 copies of 10L', 'img\\vendor-package\\metro_wedding\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (311, 12, 130, 'Twinkle', '20000', 'Photographers :: 1 pro photographer 1 senior photographer 1 associate photographer Photos : unlimited Edited Photos :: 100 Print :: 80 copies of 5L 5 copies of 6L 1 copies of 10L', 'img\\vendor-package\\metro_wedding\\p8.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (312, 12, 130, 'Glitter', '50000', 'Photographers:: Chief photographer Mahbube Subhani Prottoy (Exclusive bride, groom and FNF portrait sessionfor 2 hour) 1 pro photographer 1 senior photographer 1 associate photographer Photos : unlimited Edited Potos :: 120 Print :: 100 copies of 5L 15 6L 3 10L 1 20L', 'img\\vendor-package\\metro_wedding\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (313, 12, 130, 'Premium', '250000', 'Photographers :: Chief Photographer Mahbube Subhani Prottoy (will cover the whole event) & pre wedding 2 pro photographer 2 senior photographer 5 cinematographers Wedding film will be directed by Mahbube Subhani Prottoy Photos : unlimited Edited Photos :: 150 Print :: 120 copies of 5L 10 copies of 6L 2 copies of 10L 2 copies of 12L 1 copy of 14L 1 copy of 20L Pre/Post wedding photoshoot by Mahbube Subhani Prottoy Exclusive Storybook :: 12\" X 12\"', 'img\\vendor-package\\metro_wedding\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (314, 12, 130, 'Combo 1', '35000', 'Photo and Cinematography\r\nPhotographers:: Chief Photographer Mahbube Subhani Prottoy (Exclusive bride , groom and FNF for 1 hour) 1 senior photographer 1 associate photographer and 1 Cinemetographer Photos : unlimited Edited photos : 100 Print : 80 5L . 10 6L . 1 10L trailer : 2-3 mins film : 15-20 mins', 'img\\vendor-package\\metro_wedding\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (315, 12, 130, 'Combo 2', '20000', 'Photo and Cinematography\r\nPhotographers:: 1 senior photographer 1 associate photographer and 1 Cinematographer photos : unlimited edited photos : 60 print : 50 5L . 6 6L . 1 10L trailer : 2-3 mins film : 15-20 mins', 'img\\vendor-package\\metro_wedding\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (316, 12, 130, 'Combo 4', '60000', 'Photographers:: Chief Photographer Mahbube Subhani Prottoy (Exclusive bride , groom and FNF for 2 hour) 1 pro photographer 1 senior photographer 1 associate photographer and 2 cinematographer Photos : unlimited Edited Potos :: 120 Print :: 100 copies of 5L 15 6L 3 10L 1 20L trailer : 2-3 mins film : 15-20 mins', 'img\\vendor-package\\metro_wedding\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (317, 12, 130, 'Sparkle', '100000', 'Photographers :: Chief Photographer Mahbube Subhani Prottoy (full event) & pre wedding 2 pro photographer 2 senior photographer Photos : unlimited Edited Photos :: 150 Print :: 120 copies of 5L 10 copies of 6L 2 copies of 10L 2 copies of 12L 1 copies of 14L Pre/Post wedding photoshoot by Mahbube Subhani Prottoy Exclusive Storybook :: 12\" X 12\"', 'img\\vendor-package\\metro_wedding\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (318, 12, 131, 'Cherish', '11,000', '-1 Senior Photographer \r\n-1 Cinematographer \r\n-All Edited Photos (in DVD) \r\n-25 exclusively edited Portrait \r\n-1 Movie & Trailer \r\n-Matte Print 75 copies (4R) \r\n- 1 Photo Album \r\n2 Events –BDT.21,000 \r\n3 Events –BDT.31,500 4 Events –BDT.42,000', 'img\\vendor-package\\lfotto\\p1.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (319, 12, 131, 'Sparkle', '16,000', '\"1 Senior Photographer\r\n-1 Associate Photographer\r\n-1 Cinematographer\r\n-All Edited Photos (in DVD) \r\n-25 exclusively edited Portrait\r\n-1 Movie & Trailer\r\n-Matte Print 80 copies (4R)\r\n-1 Large Photo (12x18)\r\n-1 Photo Album\r\n\r\n2 Events –BDT. 31,000\r\n3 Events –BDT. 46,500\r\n4 Events – BDT. 62,000\"', 'img\\vendor-package\\lfotto\\p2.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (320, 12, 131, 'Enamor', '45,000', 'Chief Photographer \r\n-3 Sr. Photographers \r\n-1 Cinematographer with Jib arm/ Trolley \r\n-2 Cinematographers -Complimentary Pre/Post Shoot \r\n-All Edited Photos (in DVD) \r\n-150 exclusively edited Portrait \r\n-1 Movie & Trailer \r\n-Exclusive Dry Print 100 copies (5L) \r\n-1 Poster size photo (16x24) \r\n-1 Lucrative Frame (16L) \r\n-1 Special Album\r\n', 'img\\vendor-package\\lfotto\\p3.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (321, 12, 131, 'Julieta', '70000', 'Chief Photographer \r\n-3 Sr. Photographers \r\n-3 Cinematographers \r\n-1 Cinematographer with Jib arm & Trolley \r\n-Bride & Groom Getup Coverage \r\n-Bashor Shoot \r\n-Complimentary Pre & Post shoot \r\n-All Edited Photos (in DVD) \r\n-200 exclusively edited Portrait \r\n-1 Movie & Trailer \r\n-Exclusive Dry Print 150 copies (5L) \r\n-1 Poster size photo (20x30) \r\n-1 Lucrative Frame (20L) \r\n-1 Special Album \r\n-1 Premium Photo Book (6x9)\r\n', 'img\\vendor-package\\lfotto\\p4.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (322, 12, 131, 'Plushy', '85000', 'Chief Photographer \r\n-4 Sr. Photographers \r\n-2 Cinematographers \r\n-2 Cinematographers with Motion Units \r\n-Bride & Groom Getup Coverage \r\n-Complete Bashor Shoot \r\n-Complimentary Pre & Post Shoot \r\n-All Edited Photos (in Pen Drive) \r\n-250 exclusively edited Portrait \r\n-1 Movie & Trailer \r\n-Exclusive Dry Print 200 copies (5L) \r\n-1 Poster size photo (20x30) \r\n-1 Lucrative Frame (20L) \r\n-2 Special Albums \r\n-1 Premium Photo Book (8x12)\r\n', 'img\\vendor-package\\lfotto\\p5.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (323, 12, 131, 'Flory', '20000', '1 Key Photographer \r\n- 2 Associate Photographers \r\n- 1 Cinematographer \r\n- All Edited Photos (in DVD) \r\n- 50 exclusively edited Portrait \r\n- 1 Movie & Trailer \r\n- Matte Print 100 copies (4R) \r\n- 1 Large Photo (12x18) \r\n- 1 Photo Album 2 Events \r\n– BDT. 39,000 3 Events \r\n– BDT. 58,500 4 Events \r\n– BDT. 78,000 \r\n', 'img\\vendor-package\\lfotto\\p6.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (324, 12, 131, 'Dream Elite', '25000', 'Chief Photographer \r\n- 1 Senior Photographer \r\n- 1 Cinematographer \r\n- Complementary Pre/Post Wedding Shoot \r\n- All Edited Photos (in DVD) \r\n- 100 exclusively edited Portrait \r\n- 1 Movie & Trailer \r\n- Exclusive Dry Print 80 copies (5L) \r\n- 1 Large Photo (12x18) \r\n- 1 Special Album 2 Events \r\n–BDT. 48,000 3 Events \r\n–BDT. 72,000 4 Events \r\n–BDT .96,000\r\n', 'img\\vendor-package\\lfotto\\p7.jpg', NULL, NULL);
INSERT INTO `packages` VALUES (326, 9, 1, 'testy', '100', 'testy 100', 'img\\vendor-package\\1_3.jpg', '2019-04-23 16:42:49', '2019-04-23 16:42:49');

-- ----------------------------
-- Table structure for partners
-- ----------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_addres` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int(11) NOT NULL,
  `mess` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of partners
-- ----------------------------
INSERT INTO `partners` VALUES (1, 'Md. Nafis Hasan Siddique', 'Nvisio Solution', 'Photography & Cinematography', '23/8, Shamoly Garden, Khilgi Road, Shamoly', 'Mohammadpur, Dhaka-1207', 'ns.shamit@gmail.com', '1680041089', 10, 'asdasd', '2018-10-11 10:32:01', '2018-10-11 10:32:01');
INSERT INTO `partners` VALUES (3, 'Tanjin Jahan Tani', 'SouL Art by Tanjin & Sajal', 'Decoration', '659/1,Ibrahimpur bazar road,Mirpur 14', '659/1,Ibrahimpur bazar road,Mirpur-14', 'tanjinjahantani@gmail.com', '01986816084', 4, 'We work within clients budget.', '2018-12-24 17:19:13', '2018-12-24 17:19:13');
INSERT INTO `partners` VALUES (4, 'Tanjin Jahan Tani', 'SouL Art by Tanjin & Sajal', 'Decoration', '659/1,Ibrahimpur bazar road,Mirpur 14', '659/1,Ibrahimpur bazar road,Mirpur-14', 'tanjinjahantani@gmail.com', '01986816084', 4, 'We work within clients budget.', '2018-12-24 17:19:28', '2018-12-24 17:19:28');
INSERT INTO `partners` VALUES (9, 'Developer', 'd', 'Venue', 'dsfs', 'fsfdsfd', 'sazzad3029@gmail.com', '01685-262326', 10, 'fdgdsgsdfg', '2019-02-24 17:16:03', '2019-02-24 17:16:03');
INSERT INTO `partners` VALUES (12, 'Developer', 'NVISIO', 'Venue', 'sdfds', 'dsfds', 'sazzad3029@gmail.com', '01685-262326', 1, 'fdsf', '2019-02-24 17:18:06', '2019-02-24 17:18:06');
INSERT INTO `partners` VALUES (13, 'Developer', 'NVISIO', 'Venue', 'dfd', 'fdgfd', 'sazzad3029@gmail.com', '01685-262326', 2, 'gdfgfd', '2019-02-24 17:18:44', '2019-02-24 17:18:44');
INSERT INTO `partners` VALUES (14, 'Developer', 'NVISIO', 'Venue', 'dscd', 'sdfds', 'sazzad3029@gmail.com', '01685-262326', 21, 'fdsfsd', '2019-02-24 17:19:11', '2019-02-24 17:19:11');
INSERT INTO `partners` VALUES (15, 'Developer', 'NVISIO', 'Venue', 'sfdgdsg', 'dsfsd', 'sazzad3029@gmail.com', '01685-262326', 21, 'dsfsdfsd', '2019-02-24 17:43:35', '2019-02-24 17:43:35');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('sazzad3029@diu.edu.bd', '$2y$10$efF59E703gi64.PB19pU.ewvxvQNWhULwFlBduyNMsVbHPehfvIg.', '2018-11-21 14:00:23');
INSERT INTO `password_resets` VALUES ('sazzad3029@gmail.com', '$2y$10$4J9pxpbfzli.84HYHP0a/.HhqxI498AoMS79o58m2SkcaAWgDbBF2', '2018-11-21 16:01:39');

-- ----------------------------
-- Table structure for payment_details
-- ----------------------------
DROP TABLE IF EXISTS `payment_details`;
CREATE TABLE `payment_details`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `query_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `vendor_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `invoice_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `payment` double NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `payment_details_query_id_foreign`(`query_id`) USING BTREE,
  INDEX `payment_details_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `payment_details_category_id_foreign`(`category_id`) USING BTREE,
  INDEX `payment_details_vendor_id_foreign`(`vendor_id`) USING BTREE,
  INDEX `payment_details_product_id_foreign`(`product_id`) USING BTREE,
  INDEX `payment_details_invoice_id_foreign`(`invoice_id`) USING BTREE,
  CONSTRAINT `payment_details_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `catagories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `payment_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `payment_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `payment_details_query_id_foreign` FOREIGN KEY (`query_id`) REFERENCES `queries` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `payment_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `payment_details_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for phone_query
-- ----------------------------
DROP TABLE IF EXISTS `phone_query`;
CREATE TABLE `phone_query`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` int(11) NULL DEFAULT 0,
  `products_id` int(11) NULL DEFAULT 0,
  `is_followup` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of phone_query
-- ----------------------------
INSERT INTO `phone_query` VALUES (1, '01682201880', 0, 0, 0, '2019-05-14 12:34:43', '2019-05-14 12:34:43');
INSERT INTO `phone_query` VALUES (2, '01682201880', 0, 0, 0, '2019-05-14 12:40:54', '2019-05-14 12:40:54');
INSERT INTO `phone_query` VALUES (3, '01682201880', 0, 0, 0, '2019-05-14 13:21:06', '2019-05-14 13:21:06');
INSERT INTO `phone_query` VALUES (4, '01682201880', 0, 0, 0, '2019-05-14 13:53:11', '2019-05-14 13:53:11');
INSERT INTO `phone_query` VALUES (5, '01682201880', 0, 0, 0, '2019-05-14 13:54:11', '2019-05-14 13:54:11');
INSERT INTO `phone_query` VALUES (6, '01682201880', 0, 0, 0, '2019-05-14 14:22:35', '2019-05-14 14:22:35');
INSERT INTO `phone_query` VALUES (7, '01682201880', 0, 0, 0, '2019-05-14 14:23:52', '2019-05-14 14:23:52');
INSERT INTO `phone_query` VALUES (8, '01612363773', 0, 0, 0, '2019-05-14 16:32:07', '2019-05-14 16:32:07');

-- ----------------------------
-- Table structure for photography_feature
-- ----------------------------
DROP TABLE IF EXISTS `photography_feature`;
CREATE TABLE `photography_feature`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` int(11) NOT NULL DEFAULT 0,
  `feature_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `low_price` int(11) NOT NULL DEFAULT 0,
  `event_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 60 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of photography_feature
-- ----------------------------
INSERT INTO `photography_feature` VALUES (1, 3, 'Dhanmondi', 4, '4-5 hours', 'Available', '2000 for Photo &2000 for video', '50% Advance', '1 month', 'Available', 11000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (2, 85, 'Tejgaon', 9, '6 Hours', 'Available', '5000 BDT', '50% Advance', '1 Month to 2 month ( Client Urgency will give priority regarding delivery)', 'Available', 200, 'wedding,birthday,corporate', 0, NULL, '2019-04-18 12:26:41');
INSERT INTO `photography_feature` VALUES (3, 86, 'Moghbazar', 3, '5-6 Hours', 'Available', '3000 BDT', '50% - 60% Advance', '3 - 4 Weeks Maximum', 'Available', 12000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (4, 87, 'Banani', 13, '5 Hours', 'Available', '2000', '50% Advance', '3 Weeks', 'Available', 12000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (5, 88, 'Mohakhali DOHS', 9, '4 Hours', 'Available', '5000', '60% Advance', '2 Months', 'Available', 20000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (6, 89, 'Dhaka And Chittagong', 10, '5 Hours', 'Available', '2000', '50% Advance', '30 Days', 'Available', 40000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (7, 90, 'Mirpur', 7, '5 Hours', 'Available', '2000', '50% Advance', '20-30 Days', 'Available', 10000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (8, 94, 'Mohammodpur', 4, '4 hours', 'Available', '2000 tk for per artist/hour', '50% Advance', '2 weeks', 'Available', 8000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (9, 95, 'Khilkhet', 8, '5 Hours', 'Available', '3000 tk for per artist/hour', '50% Advance', '1 Month', 'Available', 15000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (10, 108, 'Katabon', 4, '4.30-5 Hours ', 'Available', 'chief photographer 3000\r\nSenior Photographer 1500', '50% Advance', '40-42 days', 'Available', 12999, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (11, 109, 'Shajahanpur', 3, '4 Hours ', 'Available', '2500 per hour', '50% Advance', '1 month', 'Available', 16000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (12, 110, 'Baridhara DOHS', 9, '5 Hours ', 'Available', '2000 per hour', '60% Advance', '1 month', 'Available', 6000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (13, 127, 'Rampura', 9, '5 Hours', 'Available', '1500', '30%', '20-25', 'Available', 14000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (14, 128, 'Mohammadpur', 10, '5 Hours', 'Available', '2000', '50%', '1 Month', 'Available', 10000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (15, 129, 'Rampura', 6, '5 Hours', 'Available', '0', '50%', '1 Month', 'Available', 12500, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (16, 130, 'Mohammadpur', 6, '5 Hours', 'Available', '5000', '50%', '21 Working Days', 'Available', 20000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (17, 131, 'Malibagh', 3, '5 Hours', 'Available', '2000', '50%', '1 Month', 'Available', 11000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (18, 133, 'Mohammadpur', 8, '5 Hours', 'Available', '2000', '50%', '1 Month', 'Available', 15000, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (19, 134, 'Rampura', 7, '5 Hours', 'Available', '3000', '30%', '1 Month', 'Available', 7500, 'wedding,birthday,corporate', 0, NULL, NULL);
INSERT INTO `photography_feature` VALUES (20, 204, 'Khilgaon', 5, '5 Hours', 'Available', 'No', '30% Advance', '10-15 Days', 'Not Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-17 02:36:00', '2018-12-17 02:36:00');
INSERT INTO `photography_feature` VALUES (21, 205, 'Nikunja', 2, '5 Hours', 'Available', '2000', '50%', '30 Days', 'Available (Transport and accommodation cost cost will be added)', 12500, 'wedding,birthday,corporate', 0, '2018-12-17 11:37:46', '2018-12-17 11:37:46');
INSERT INTO `photography_feature` VALUES (22, 206, 'Mirpur', 14, '6 Hours', 'Available', '1000', '50%', '1 month', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-18 21:26:13', '2018-12-18 21:26:13');
INSERT INTO `photography_feature` VALUES (23, 207, 'Nikunja', 6, 'Service- 5Hours(Depend on Package)', 'Available', '2500', '75% Advance', '25 Days', 'Available', 20000, 'wedding,birthday,corporate', 0, '2018-12-18 22:40:01', '2018-12-18 22:40:01');
INSERT INTO `photography_feature` VALUES (24, 208, 'Dhanmondi', 7, '5 Hours', 'Available', '5000', '50% Advance', '30 Days', 'Available', 13999, 'wedding,birthday,corporate', 0, '2018-12-18 23:09:34', '2018-12-18 23:09:34');
INSERT INTO `photography_feature` VALUES (25, 209, 'Mohammadpur', 4, '5 Hours', 'Available', '2000', '50% Advance', '1 Month', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-19 02:17:13', '2018-12-19 02:17:13');
INSERT INTO `photography_feature` VALUES (26, 210, 'Dhanmondi', 5, '4 Hours', 'Available', 'Depend On Package', '50% Advance', '21 Days', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-19 02:32:16', '2018-12-19 02:32:16');
INSERT INTO `photography_feature` VALUES (27, 211, 'Dhaka/Chittagong', 4, '5', 'Available', '2000', '50% Advance', '1 Month', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-19 02:37:57', '2018-12-19 02:37:57');
INSERT INTO `photography_feature` VALUES (28, 212, 'Mohammedpur', 4, '5 Hours', 'Available', '1500', '60%', '3 weeks', 'Available', 12500, 'wedding,birthday,corporate', 0, '2018-12-19 02:42:07', '2018-12-19 02:42:07');
INSERT INTO `photography_feature` VALUES (29, 213, 'Mirpur', 5, '6 Hours', 'Available', '3000', '60% Advance', '4 Week', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-19 02:48:51', '2018-12-19 02:48:51');
INSERT INTO `photography_feature` VALUES (30, 214, 'Gulshan', 10, '5 Hours', 'Available', '3000', '50% Advance', '15 Days', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-19 11:20:47', '2018-12-19 11:20:47');
INSERT INTO `photography_feature` VALUES (31, 215, 'Eskaton', 7, '5 Hours', 'Available', '3000', '70% Advance', '20 Days', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-19 11:25:47', '2018-12-19 11:25:47');
INSERT INTO `photography_feature` VALUES (32, 216, 'Mipur DOHS', 5, '4 Hours', 'Available', '2000', '25% Advance', '1Week', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-19 11:30:29', '2018-12-19 11:30:29');
INSERT INTO `photography_feature` VALUES (33, 217, 'Mirpur', 6, '5 Hours', 'Available', 'No (To cover Bashor Ghor photoshoot 3000tk will be added', '50% Advance', '21 Days', 'Available (30% tk of total price will be added)', 10000, 'wedding,birthday,corporate', 0, '2018-12-19 11:40:50', '2018-12-19 11:40:50');
INSERT INTO `photography_feature` VALUES (34, 218, 'Mogbazar', 15, '4-5 Hours (Depend on Package', 'Available', 'No', '10% Advance on package (full payment have to done on last event)', '1 Month', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-19 11:47:24', '2018-12-19 11:47:24');
INSERT INTO `photography_feature` VALUES (35, 219, 'Malibag', 18, '5 Hours', 'Available', '3000', '75% Advance', '25 Days', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-19 11:57:39', '2018-12-19 11:57:39');
INSERT INTO `photography_feature` VALUES (36, 220, 'Uttara', 4, '5 Hours', 'Not Available', '2000', '50% Advance', '1 Month', 'Available', 10500, 'wedding,birthday', 0, '2018-12-19 12:05:06', '2018-12-19 12:05:06');
INSERT INTO `photography_feature` VALUES (37, 221, 'Moghbazar', 4, '4-5 Hours (depend on Package)', 'Available', '3000', '50% Advance', '20- 25 Days', 'Available', 13000, 'wedding,birthday,corporate', 0, '2018-12-19 19:47:47', '2018-12-19 19:47:47');
INSERT INTO `photography_feature` VALUES (38, 222, 'Dhaka/Mymensingh', 3, '5 Hours', 'Available', '1500', '30% Advance', '10-15 Days', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-22 20:35:55', '2018-12-22 20:35:55');
INSERT INTO `photography_feature` VALUES (39, 223, 'Mugda', 3, '5 Hours', 'Available', '2000', '50% Advance', '1 Month', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-22 20:39:31', '2018-12-22 20:39:31');
INSERT INTO `photography_feature` VALUES (40, 224, 'Hatirpool', 6, '5 Hours', 'Available', '20000', '50% Advance', '3 Weeks', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-23 01:00:29', '2018-12-23 01:00:29');
INSERT INTO `photography_feature` VALUES (41, 225, 'Mirpur', 5, '4-6 Hours (Depend on Package)', 'Available', '2000', '30% to 50% Advance', '21 to 30 Days', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-23 01:04:38', '2018-12-23 01:04:38');
INSERT INTO `photography_feature` VALUES (42, 226, 'Uttara', 5, '5 Hours', 'Available', '5000', '30% Advance', '3-4 Weeks', 'Available', 10500, 'wedding,birthday,corporate', 0, '2018-12-23 01:08:36', '2018-12-23 01:08:36');
INSERT INTO `photography_feature` VALUES (43, 227, 'Mirpur DOHS', 0, '5 Hours (Depend on Package)', 'Available', '3000', '50% Advance', '15 Days', 'Available (20000 tk Will be added extra)', 18000, 'wedding,birthday,corporate', 0, '2018-12-23 01:13:43', '2018-12-23 01:13:43');
INSERT INTO `photography_feature` VALUES (44, 228, 'Bashundhara R/A', 5, '5 Hours', 'Available', 'Up on Discussion', '50% Advance', '3 Week', 'Not Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-23 01:23:30', '2018-12-23 01:23:30');
INSERT INTO `photography_feature` VALUES (45, 229, 'Elephant Road', 7, '5 Hours', 'Available', '2000', '50% Advance', '1 Month', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-23 01:30:09', '2018-12-23 01:30:09');
INSERT INTO `photography_feature` VALUES (46, 230, 'Purana polton', 5, '5 Hours', 'Available', '2000', '50% Advance', '1 Month', 'Available', 15000, 'wedding,birthday,corporate', 0, '2018-12-23 02:44:07', '2018-12-23 02:44:07');
INSERT INTO `photography_feature` VALUES (47, 231, 'Basundhara R/A', 6, '5 Hours', 'Available', '3000', '50% Advance', '1 Month', 'Available', 15000, 'wedding,birthday,corporate', 0, '2018-12-25 23:53:36', '2018-12-25 23:53:36');
INSERT INTO `photography_feature` VALUES (48, 232, 'Dhaka', 5, 'Available', 'Available', '2000', '60% Advance', '1 Month', 'Available', 12000, 'wedding,birthday,corporate', 0, '2018-12-26 00:10:35', '2018-12-26 00:10:35');
INSERT INTO `photography_feature` VALUES (49, 233, 'Rampura', 4, '5 Hours', 'Available', '2000', '50% Advance', '25 to 28 Days', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-26 00:20:34', '2018-12-26 00:20:34');
INSERT INTO `photography_feature` VALUES (50, 234, 'Mirpur DOHS', 5, '5 Hours', 'Available', '2000', '50% Advance', '3 Week', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-26 00:26:49', '2018-12-26 00:26:49');
INSERT INTO `photography_feature` VALUES (51, 235, 'Mirpur', 2, '5 Hours', 'Available', '2000', '50% Advance', '1 Month', 'Available', 11500, 'wedding,birthday,corporate', 0, '2018-12-26 11:00:40', '2018-12-26 11:00:40');
INSERT INTO `photography_feature` VALUES (52, 236, 'Shyamoli', 3, '5 Hours', 'Available', '2000', '50% Advance', '1Week', 'Available', 11000, 'wedding,birthday,corporate', 0, '2018-12-26 11:12:16', '2018-12-26 11:12:16');
INSERT INTO `photography_feature` VALUES (53, 237, 'Mirpur', 4, '5 Hours', 'Available', '2000', '50% Advance', '1 Month', 'Available', 10000, 'wedding,birthday,corporate', 0, '2018-12-26 11:16:25', '2018-12-26 11:16:25');
INSERT INTO `photography_feature` VALUES (54, 238, 'Dhaka/Chittagong', 3, '5 Hours', 'Available', '2000', '50% Advance', '3 Weeks', 'Available', 10500, 'wedding,birthday,corporate', 0, '2018-12-26 11:22:58', '2018-12-26 11:22:58');
INSERT INTO `photography_feature` VALUES (55, 239, 'Niketan', 3, '5 Hours', 'Not Available', '2000', '50% Advance', '20-25 Days', 'Available', 10000, 'wedding,birthday', 0, '2018-12-26 11:32:15', '2018-12-26 11:32:15');
INSERT INTO `photography_feature` VALUES (56, 240, 'Khilgaon', 3, '4 Hours', 'Available', 'Depend on Package', '60% Advance', '15-25 Days', 'Available', 12500, 'wedding,birthday,corporate', 0, '2018-12-26 11:41:04', '2018-12-26 11:41:04');
INSERT INTO `photography_feature` VALUES (57, 241, 'Mirpur DOHS', 3, '5 Hours', 'Not Available', '2000', '50% Advance', '20-25 Days', 'Available', 12000, 'wedding,birthday,corporate', 0, '2018-12-26 11:46:30', '2018-12-26 11:46:30');
INSERT INTO `photography_feature` VALUES (58, 261, 'Khilgaon', 4, '5 Hours', 'Available', '3000', '50% Advance', '3 Weeks', 'Available', 22000, 'wedding,birthday,corporate', 0, '2018-12-26 17:09:13', '2018-12-26 17:09:13');
INSERT INTO `photography_feature` VALUES (59, 380, '0 p', 0, '0 p', '0 p', '0 p', '0 p', '0 p', '0 p', 100, 'birthday', 0, '2019-04-11 17:15:04', '2019-04-11 17:15:04');

-- ----------------------------
-- Table structure for product_image
-- ----------------------------
DROP TABLE IF EXISTS `product_image`;
CREATE TABLE `product_image`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `img_location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 214 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of product_image
-- ----------------------------
INSERT INTO `product_image` VALUES (1, 271, 'img/ayojok-product/271_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (2, 272, 'img/ayojok-product/272_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (3, 216, 'img/ayojok-product/216_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (4, 217, 'img/ayojok-product/217_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (5, 218, 'img/ayojok-product/218_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (6, 219, 'img/ayojok-product/219_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (7, 216, 'img/ayojok-product/216_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (8, 216, 'img/ayojok-product/216_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (9, 216, 'img/ayojok-product/216_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (10, 216, 'img/ayojok-product/216_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (11, 217, 'img/ayojok-product/217_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (12, 217, 'img/ayojok-product/217_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (13, 217, 'img/ayojok-product/217_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (14, 217, 'img/ayojok-product/217_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (15, 218, 'img/ayojok-product/218_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (16, 218, 'img/ayojok-product/218_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (17, 218, 'img/ayojok-product/218_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (18, 218, 'img/ayojok-product/218_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (19, 219, 'img/ayojok-product/219_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (20, 219, 'img/ayojok-product/219_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (21, 219, 'img/ayojok-product/219_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (22, 219, 'img/ayojok-product/219_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (23, 221, 'img/ayojok-product/221_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (24, 221, 'img/ayojok-product/221_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (25, 221, 'img/ayojok-product/221_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (26, 221, 'img/ayojok-product/221_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (27, 221, 'img/ayojok-product/221_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (28, 222, 'img/ayojok-product/222_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (29, 222, 'img/ayojok-product/222_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (30, 222, 'img/ayojok-product/222_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (31, 222, 'img/ayojok-product/222_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (32, 223, 'img\\ayojok-product\\223_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (33, 223, 'img\\ayojok-product\\223_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (34, 223, 'img\\ayojok-product\\223_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (35, 220, 'img/ayojok-product/220_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (36, 220, 'img/ayojok-product/220_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (37, 220, 'img/ayojok-product/220_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (38, 220, 'img/ayojok-product/220_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (39, 225, 'img\\ayojok-product\\225_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (40, 224, 'img\\ayojok-product\\224_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (41, 226, 'img\\ayojok-product\\226_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (42, 232, 'img\\ayojok-product\\232_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (43, 232, 'img\\ayojok-product\\232_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (44, 232, 'img\\ayojok-product\\232_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (45, 232, 'img\\ayojok-product\\232_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (46, 232, 'img\\ayojok-product\\232_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (47, 234, 'img\\ayojok-product\\234_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (48, 234, 'img\\ayojok-product\\234_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (49, 234, 'img\\ayojok-product\\234_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (50, 234, 'img\\ayojok-product\\234_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (51, 234, 'img\\ayojok-product\\234_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (52, 235, 'img\\ayojok-product\\235_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (53, 235, 'img\\ayojok-product\\235_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (54, 235, 'img\\ayojok-product\\235_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (55, 235, 'img\\ayojok-product\\235_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (56, 235, 'img\\ayojok-product\\235_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (57, 236, 'img\\ayojok-product\\236_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (58, 236, 'img\\ayojok-product\\236_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (59, 236, 'img\\ayojok-product\\236_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (60, 236, 'img\\ayojok-product\\236_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (61, 236, 'img\\ayojok-product\\236_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (62, 243, 'img\\ayojok-product\\243_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (63, 243, 'img\\ayojok-product\\243_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (64, 243, 'img\\ayojok-product\\243_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (65, 243, 'img\\ayojok-product\\243_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (66, 246, 'img\\ayojok-product\\246_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (67, 246, 'img\\ayojok-product\\246_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (68, 246, 'img\\ayojok-product\\246_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (69, 247, 'img\\ayojok-product\\247_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (70, 247, 'img\\ayojok-product\\247_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (71, 247, 'img\\ayojok-product\\247_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (72, 248, 'img\\ayojok-product\\248_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (73, 248, 'img\\ayojok-product\\248_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (74, 248, 'img\\ayojok-product\\248_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (75, 245, 'img\\ayojok-product\\245_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (76, 245, 'img\\ayojok-product\\245_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (77, 245, 'img\\ayojok-product\\245_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (78, 245, 'img\\ayojok-product\\245_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (79, 245, 'img\\ayojok-product\\245_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (80, 244, 'img\\ayojok-product\\244_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (81, 244, 'img\\ayojok-product\\244_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (82, 244, 'img\\ayojok-product\\244_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (83, 250, 'img\\ayojok-product\\250_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (84, 250, 'img\\ayojok-product\\250_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (85, 250, 'img\\ayojok-product\\250_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (86, 242, 'img\\ayojok-product\\242_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (87, 242, 'img\\ayojok-product\\242_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (88, 242, 'img\\ayojok-product\\242_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (89, 242, 'img\\ayojok-product\\242_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (90, 242, 'img\\ayojok-product\\242_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (91, 252, 'img\\ayojok-product\\252_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (92, 252, 'img\\ayojok-product\\252_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (93, 252, 'img\\ayojok-product\\252_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (94, 252, 'img\\ayojok-product\\252_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (95, 252, 'img\\ayojok-product\\252_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (96, 238, 'img\\ayojok-product\\238_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (97, 238, 'img\\ayojok-product\\238_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (98, 238, 'img\\ayojok-product\\238_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (99, 238, 'img\\ayojok-product\\238_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (100, 238, 'img\\ayojok-product\\238_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (101, 240, 'img\\ayojok-product\\240_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (102, 240, 'img\\ayojok-product\\240_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (103, 240, 'img\\ayojok-product\\240_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (104, 240, 'img\\ayojok-product\\240_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (105, 241, 'img\\ayojok-product\\241_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (106, 241, 'img\\ayojok-product\\241_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (107, 241, 'img\\ayojok-product\\241_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (108, 241, 'img\\ayojok-product\\241_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (109, 241, 'img\\ayojok-product\\241_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (110, 237, 'img\\ayojok-product\\237_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (111, 237, 'img\\ayojok-product\\237_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (112, 237, 'img\\ayojok-product\\237_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (113, 237, 'img\\ayojok-product\\237_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (114, 237, 'img\\ayojok-product\\237_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (115, 239, 'img\\ayojok-product\\239_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (116, 239, 'img\\ayojok-product\\239_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (117, 239, 'img\\ayojok-product\\239_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (118, 239, 'img\\ayojok-product\\239_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (119, 239, 'img\\ayojok-product\\239_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (120, 249, 'img\\ayojok-product\\249_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (121, 263, 'img\\ayojok-product\\263_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (122, 263, 'img\\ayojok-product\\263_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (123, 263, 'img\\ayojok-product\\263_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (124, 269, 'img\\ayojok-product\\269_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (125, 269, 'img\\ayojok-product\\269_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (126, 269, 'img\\ayojok-product\\269_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (127, 269, 'img\\ayojok-product\\269_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (128, 269, 'img\\ayojok-product\\269_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (129, 266, 'img\\ayojok-product\\266_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (130, 267, 'img\\ayojok-product\\267_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (131, 268, 'img\\ayojok-product\\268_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (132, 265, 'img\\ayojok-product\\265_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (133, 265, 'img\\ayojok-product\\265_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (134, 265, 'img\\ayojok-product\\265_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (135, 261, 'img\\ayojok-product\\261_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (136, 261, 'img\\ayojok-product\\261_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (137, 261, 'img\\ayojok-product\\261_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (138, 264, 'img\\ayojok-product\\264_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (139, 264, 'img\\ayojok-product\\264_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (140, 264, 'img\\ayojok-product\\264_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (141, 260, 'img\\ayojok-product\\260_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (142, 260, 'img\\ayojok-product\\260_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (143, 260, 'img\\ayojok-product\\260_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (144, 260, 'img\\ayojok-product\\260_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (145, 260, 'img\\ayojok-product\\260_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (146, 272, 'img\\ayojok-product\\272_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (147, 251, 'img\\ayojok-product\\251_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (148, 251, 'img\\ayojok-product\\251_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (149, 251, 'img\\ayojok-product\\251_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (150, 251, 'img\\ayojok-product\\251_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (151, 251, 'img\\ayojok-product\\251_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (152, 228, 'img\\ayojok-product\\228_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (153, 228, 'img\\ayojok-product\\228_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (154, 228, 'img\\ayojok-product\\228_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (155, 228, 'img\\ayojok-product\\228_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (156, 228, 'img\\ayojok-product\\228_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (157, 227, 'img\\ayojok-product\\227_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (158, 227, 'img\\ayojok-product\\227_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (159, 227, 'img\\ayojok-product\\227_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (160, 227, 'img\\ayojok-product\\227_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (161, 227, 'img\\ayojok-product\\227_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (162, 229, 'img\\ayojok-product\\229_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (163, 229, 'img\\ayojok-product\\229_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (164, 229, 'img\\ayojok-product\\229_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (165, 229, 'img\\ayojok-product\\229_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (166, 229, 'img\\ayojok-product\\229_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (167, 230, 'img\\ayojok-product\\230_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (168, 230, 'img\\ayojok-product\\230_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (169, 230, 'img\\ayojok-product\\230_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (170, 230, 'img\\ayojok-product\\230_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (171, 206, 'img\\ayojok-product\\206_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (172, 206, 'img\\ayojok-product\\206_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (173, 206, 'img\\ayojok-product\\206_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (174, 206, 'img\\ayojok-product\\206_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (175, 215, 'img\\ayojok-product\\215_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (176, 214, 'img\\ayojok-product\\214_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (177, 210, 'img\\ayojok-product\\210_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (178, 211, 'img\\ayojok-product\\211_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (179, 212, 'img\\ayojok-product\\212_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (180, 213, 'img\\ayojok-product\\213_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (181, 231, 'img\\ayojok-product\\231_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (182, 233, 'img\\ayojok-product\\233_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (183, 233, 'img\\ayojok-product\\233_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (184, 233, 'img\\ayojok-product\\233_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (185, 259, 'img\\ayojok-product\\259_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (186, 258, 'img\\ayojok-product\\258_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (187, 258, 'img\\ayojok-product\\258_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (191, 257, 'img\\ayojok-product\\257_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (192, 257, 'img\\ayojok-product\\257_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (193, 257, 'img\\ayojok-product\\257_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (194, 256, 'img\\ayojok-product\\256_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (195, 256, 'img\\ayojok-product\\256_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (196, 254, 'img\\ayojok-product\\254_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (197, 254, 'img\\ayojok-product\\254_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (198, 253, 'img\\ayojok-product\\253_img1.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (199, 253, 'img\\ayojok-product\\253_img2.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (200, 253, 'img\\ayojok-product\\253_img3.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (201, 253, 'img\\ayojok-product\\253_img4.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (202, 253, 'img\\ayojok-product\\253_img5.jpg', NULL, NULL);
INSERT INTO `product_image` VALUES (206, 277, 'img\\ayojok-product\\277_img1.png', '2018-11-06 16:29:41', '2018-11-06 16:29:41');
INSERT INTO `product_image` VALUES (207, 277, 'img\\ayojok-product\\277_img2.png', '2018-11-06 16:29:41', '2018-11-06 16:29:41');
INSERT INTO `product_image` VALUES (208, 277, 'img\\ayojok-product\\277_img3.png', '2018-11-06 16:29:41', '2018-11-06 16:29:41');
INSERT INTO `product_image` VALUES (209, 272, 'img\\ayojok-product\\272_img1.png', '2019-03-17 15:15:56', '2019-03-17 15:15:56');
INSERT INTO `product_image` VALUES (210, 273, 'img\\ayojok-product\\273_img1.jpg', '2019-03-17 15:36:24', '2019-03-17 15:36:24');
INSERT INTO `product_image` VALUES (211, 274, 'img\\ayojok-product\\274_img1.jpg', '2019-03-17 15:37:41', '2019-03-17 15:37:41');
INSERT INTO `product_image` VALUES (212, 275, 'img\\ayojok-product\\275_img1.jpg', '2019-03-18 11:41:05', '2019-03-18 11:41:05');
INSERT INTO `product_image` VALUES (213, 277, 'img\\ayojok-product\\277_img1.png', '2019-04-24 14:08:13', '2019-04-24 14:08:13');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `long_des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `contact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `is_sellable` tinyint(4) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `suffix` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `in_stock` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `products_catagory_id_foreign`(`catagory_id`) USING BTREE,
  CONSTRAINT `products_catagory_id_foreign` FOREIGN KEY (`catagory_id`) REFERENCES `catagories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 277 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (205, 'http://via.placeholder.com/400x400', 2, 'Sound Box (1pair)', '2x combo / 1/4″ Jack, very high-quality audio. Perfect for event use.', 'A well behaved, knowledgeable technical team will be there at the venue for operating and maintaining all the equipment. Customers have the option to customize this product in their preferred way. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 0, 4000, 'per event', 1, 0, NULL, '2018-06-27 00:02:40', NULL);
INSERT INTO `products` VALUES (206, 'img\\ayojok-product\\profile\\206.jpg', 2, 'DJ set', '2 Amplifier, 1 Mixer, 1 Stabilizer.', 'A professional set with high quality mixers especially suited for professional DJ’s.\r\nA well behaved, knowledgeable technical team will be there at the venue for operating and maintaining all the equipment. Customers have the option to customize this product in their preferred way. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.\r\n', NULL, 0, 5500, 'per event', 1, 0, NULL, '2018-11-06 13:36:47', NULL);
INSERT INTO `products` VALUES (207, 'http://via.placeholder.com/400x400', 2, 'DJ light (only light)', 'Power Supply: AC220V/110V/50/60Hz', 'These are very high-quality lights with high durability. \r\nA well behaved, knowledgeable technical team will be there at the venue for operating and maintaining all the equipment. Customers have the option to customize this product in their preferred way. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 0, 2500, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (208, 'http://via.placeholder.com/400x400', 2, 'DJ light (Light with Smoke)', 'Power Supply: AC220V/110V/50/60Hz', 'These are very high-quality lights with high durability. This set includes a smoke machine too. \r\nA well behaved, knowledgeable technical team will be there at the venue for operating and maintaining all the equipment. Customers have the option to customize this product in their preferred way. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 0, 3000, 'per event', 1, 0, NULL, '2018-06-26 01:03:49', NULL);
INSERT INTO `products` VALUES (209, 'http://via.placeholder.com/400x400', 2, 'DJ light (Sharpy withLights & Smoke)', '200W, 14 colors.', 'These are very high-quality lights with high durability. This set includes a smoke machine too. \r\nA well behaved, knowledgeable technical team will be there at the venue for operating and maintaining all the equipment. Customers have the option to customize this product in their preferred way. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 0, 4000, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (210, 'img\\ayojok-product\\profile\\210.jpg', 2, 'Projector with video camera (front)', '\r\n', '', NULL, 0, 5000, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (211, 'img\\ayojok-product\\profile\\211.jpg', 2, 'Projector with video camera (back)', '\r\n', '', NULL, 0, 6500, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (212, 'img\\ayojok-product\\profile\\212.jpg', 2, 'Projector (front)', '8 X 6 AFTER STRETCH, CORNER TO CORNER, HIGH QUALITY PROJECTOR', 'A well behaved, knowledgeable technical team will be there at the venue for operating and maintaining all the equipment. Customers have the option to customize this product in their preferred way. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 0, 3000, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (213, 'img\\ayojok-product\\profile\\213.jpg', 2, 'Projector (back)', '8 X 6 AFTER STRETCH, CORNER TO CORNER, HIGH QUALITY PROJECTOR', 'A well behaved, knowledgeable technical team will be there at the venue for operating and maintaining all the equipment. Customers have the option to customize this product in their preferred way. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 0, 4500, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (214, 'img\\ayojok-product\\profile\\214.jpg', 2, 'LED screen 6*8 ', 'Size : 6*8 feet', 'We provide the best quality LED screen at a very reasonable price. These LED screens are specialized for all types of event purposes. A well behaved, knowledgeable technical team will be there at the venue for operating and maintaining all the equipment. Customers have the option to customize this product in their preferred way.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.\r\n', NULL, 0, 15000, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (215, 'img\\ayojok-product\\profile\\215.jpg', 2, 'LED screen 8*12 ', 'Size : 8*12 feet', 'We provide the best quality LED screen at a very reasonable price. These LED screens are specialized for all types of event purposes. A well behaved, knowledgeable technical team will be there at the venue for operating and maintaining all the equipment. Customers have the option to customize this product in their preferred way.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.\r\n', NULL, 0, 20000, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (216, 'img/ayojok-product/profile/216.jpg', 1, 'Toyota X/G Corolla ', 'Seat capacity : 4; 200 BDT will be charged for per additional hour', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 3500, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (217, 'img/ayojok-product/profile/217.jpg', 1, 'Toyota Allion', 'Seat capacity : 4\r\n200 BDT will be charged for per additional hour', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 4500, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (218, 'img/ayojok-product/profile/218.jpg', 1, 'Toyota premio', 'Seat capacity : 4\r\n200 BDT will be charged for per additional hour', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 5000, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (219, 'img/ayojok-product/profile/219.jpg', 1, 'Toyota Axio', 'Seat capacity : 4\r\n200 BDT will be charged for per additional hour', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 4000, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (220, 'img/ayojok-product/profile/220.jpg\r\n', 1, 'Hiace', 'Seat capacity : 11/11+\r\n300 BDT will be charged for per additional hour\r\n\r\nModel: early 2012', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 4000, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (221, 'img/ayojok-product/profile/221.jpg', 1, 'Hiace', 'Seat capacity : 11/11+\r\n300 BDT will be charged for per additional hour\r\n\r\nModel: Late 2012', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 4500, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (222, 'img/ayojok-product/profile/222.jpg', 1, 'Noah', 'Seat capacity : 7/7+\r\n300 BDT will be charged for per additional hour\r\n\r\n', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 4500, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (223, 'img\\ayojok-product\\profile\\223.jpg', 1, 'X Noah', 'Seat capacity : 7/7+\r\n300 BDT will be charged for per additional hour\r\n\r\n', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 4800, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (224, 'img\\ayojok-product\\profile\\224.jpg', 1, 'Groom Car Allion', '\r\n\r\n', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 5500, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (225, 'img\\ayojok-product\\profile\\225.jpg', 1, 'Groom Car Premio', '\r\n\r\n', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 6000, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (226, 'img\\ayojok-product\\profile\\226.jpg', 1, 'Groom Car Corolla', '\r\n\r\n', 'The mentioned price is for a 10-hour shift. After the completion of 10 hours, 200 BDT will be charged for every additional hour. Color of the car may vary depending upon availability. If the car is to be decorated with flowers, an extra 1000 BDT will be charged. Customers are encouraged to book and confirm at least one week before event for ready availability. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly.', NULL, 0, 4500, 'per day', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (227, 'img\\ayojok-product\\profile\\227.jpg', 3, 'Fuchka', 'For 100 people - 40/- per plate; for 200 peaple -30/- per plate', 'Ayojok.com will send a team to assist in managing and serving all the snacks to the guests. Our team will ensure proper hygiene, well behavior and professionalism all throughout the event. Customers are advised to order more number of plates than the attending number of guests just to be on the safe side. \r\nThe number of empty plates at the end of the event will be used as a count for how much snacks have been consumed. Ayojok will not be liable for cases where the counter runs out of snacks due to guests having more plates than expected.\r\n', NULL, 0, 30, 'per plate', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (228, 'img\\ayojok-product\\profile\\228.jpg', 3, 'Chotpoti', 'For 100 people - 40/- per plate; for 200 peaple -30/- per plate', 'Ayojok.com will send a team to assist in managing and serving all the snacks to the guests. Our team will ensure proper hygiene, well behavior and professionalism all throughout the event. Customers are advised to order more number of plates than the attending number of guests just to be on the safe side. \r\nThe number of empty plates at the end of the event will be used as a count for how much snacks have been consumed. Ayojok will not be liable for cases where the counter runs out of snacks due to guests having more plates than expected.\r\n', NULL, 0, 30, 'per plate', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (229, 'img\\ayojok-product\\profile\\229.jpg', 3, 'Zilapi', 'For 100 people - 40/- per plate; for 200 peaple -30/- per plate.', 'Ayojok.com will send a team to assist in managing and serving all the snacks to the guests. Our team will ensure proper hygiene, well behavior and professionalism all throughout the event. Customers are advised to order more number of plates than the attending number of guests just to be on the safe side. \r\nThe number of empty plates at the end of the event will be used as a count for how much snacks have been consumed. Ayojok will not be liable for cases where the counter runs out of snacks due to guests having more plates than expected.\r\n', NULL, 0, 30, 'per plate', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (230, 'img\\ayojok-product\\profile\\230.jpg', 3, 'Hawai Mithai', '', 'Ayojok.com will send a team to assist in managing and serving all the snacks to the guests. Our team will ensure proper hygiene, well behavior and professionalism all throughout the event. Customers are advised to order more number of plates than the attending number of guests just to be on the safe side. \r\nThe number of empty plates at the end of the event will be used as a count for how much snacks have been consumed. Ayojok will not be liable for cases where the counter runs out of snacks due to guests having more plates than expected.\r\n', NULL, 0, 12, 'per plate', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (231, 'img\\ayojok-product\\profile\\231.jpg', 3, 'Coffee', 'Package available for min 100 people', 'Ayojok.com will send a team to assist in managing and serving all the snacks to the guests. Our team will ensure proper hygiene, well behavior and professionalism all throughout the event. Customers are advised to order more number of plates than the attending number of guests just to be on the safe side. \r\nThe number of empty plates at the end of the event will be used as a count for how much snacks have been consumed. Ayojok will not be liable for cases where the counter runs out of snacks due to guests having more plates than expected.\r\n', NULL, 0, 25, 'per cup', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (232, 'img\\ayojok-product\\profile\\232.jpg', 4, 'Busket Square Large', 'Size: Set includes:- (18-16-14), For more customizable options read the description below\r\n', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 1000, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (233, 'img\\ayojok-product\\profile\\233.jpg', 4, 'Busket Square Small', 'Size: Set includes:- (14-12-10), For more customizable options read the description below\r\n', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 800, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (234, 'img\\ayojok-product\\profile\\234.jpg', 4, 'Busket round Small', 'Size: Single piece, For more customizable options read the description below\r\n', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 500, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (235, 'img\\ayojok-product\\profile\\235.jpg', 4, 'Octa-Shape Round', 'Size 3 piece Set, For more customizable options read the description below.\r\n', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 500, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (236, 'img\\ayojok-product\\profile\\236.jpg', 4, 'Kula', 'Size Single Regular Shape, For more customizable options read the description below.', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 500, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (237, 'img\\ayojok-product\\profile\\237.jpg', 4, 'Chata Kula Small', 'For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 650, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (238, 'img\\ayojok-product\\profile\\238.jpg', 4, 'Designed Kula', 'For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 1500, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (239, 'img\\ayojok-product\\profile\\239.jpg', 4, 'Chata Kula Large', 'For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 900, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (240, 'img\\ayojok-product\\profile\\240.jpg', 4, 'Gift Dala Small', 'Size: 24-20-18, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 1200, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (241, 'img\\ayojok-product\\profile\\241.jpg', 4, 'Gift Dala Large', 'Size: 36-30-28, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 1400, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (242, 'img\\ayojok-product\\profile\\242.jpg', 4, 'Sherwani Dala', 'Size: 36, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 800, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (243, 'img\\ayojok-product\\profile\\243.jpg', 4, 'Paiep Dala set', 'For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 550, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (244, 'img\\ayojok-product\\profile\\244.jpg', 4, 'Cosmetics Dala', 'Regular Size, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 800, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (245, 'img\\ayojok-product\\profile\\245.jpg', 4, 'Cosmetics Dala Large', 'Large Size, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 1000, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (246, 'img\\ayojok-product\\profile\\246.jpg', 4, 'Fish Dala Small', 'Size: Small, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 450, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (247, 'img\\ayojok-product\\profile\\247.jpg', 4, 'Fish Dala Medium', 'Size: Medium, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 500, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (248, 'img\\ayojok-product\\profile\\248.jpg', 4, 'Fish Dala Large', 'Size: Large, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 500, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (249, 'img\\ayojok-product\\profile\\249.jpg', 4, 'Selo Paper set', 'Set includes 5 piece selo paper. For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 100, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (250, 'img\\ayojok-product\\profile\\250.jpg', 4, 'Misty Dala Raw', 'Regular Size, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 150, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (251, 'img\\ayojok-product\\profile\\251.jpg', 4, 'Misty Dala Cloth', 'Regular Size, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 200, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (252, 'img\\ayojok-product\\profile\\252.jpg', 4, 'Decorative Flowers set', 'Set includes 10 piece flowers, For more customizable options read the description below', 'Ordering at least 1 week beforehand is highly advisable as it will give us enough time to go out and purchase/order your preferred design choices.\r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 200, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (253, 'img\\ayojok-product\\profile\\253.jpg', 6, 'Palki', 'Regular Size\r\nRent price : 5000', '', NULL, 0, 5000, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (254, 'img\\ayojok-product\\profile\\254.jpg', 6, 'Umbrella ', 'Regular Size; Rent price : 2000', 'Any personnel from our Ayojok team assigned for this job will be well behaved and professional. Customers are not bound to give tips to the individual. The design and color on the umbrella is customizable. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.\r\n', NULL, 0, 2000, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (255, 'http://via.placeholder.com/400x400', 6, 'Bangla Dhol', 'Regular Size, rent price 1500 for single quantity.', 'Any personnel from our Ayojok team assigned for this job will be well behaved and professional. Customers are not bound to give tips to the individual. \r\nFor any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.\r\n', NULL, 0, 1500, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (256, 'img\\ayojok-product\\profile\\256.jpg', 6, 'Band Party', 'Rent price starts from 5000 per event. Band includes a group of 4 people.', 'Prices may vary if venue location is outside the city area. A bigger band party can be managed depending on customer preference. Customers are not bound to give tips to the band party. Ayojok ensures that the band party will be well behaved, have a positive attitude and professional. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.\r\n', NULL, 0, 5000, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (257, 'img\\ayojok-product\\profile\\257.jpg', 6, 'Ghorar Gari', 'Rent price : 8000', 'Prices may vary if venue is outside the city. 4-seater carriage/2 horses. Experienced and professional coachman for the carriage. Trendy and eye-catching decoration on the carriage. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.\r\n', NULL, 0, 8000, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (258, 'img\\ayojok-product\\profile\\258.jpg', 6, 'Charrot', '\r\nRent price : 10000', '', NULL, 0, 10000, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (259, 'img\\ayojok-product\\profile\\259.jpg', 6, 'Pakha', '\r\nRent price : 2500', '', NULL, 0, 2500, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (260, 'img\\ayojok-product\\profile\\260.jpg', 5, 'Holud Package ', 'Package includes multiple products, each in a single quantity.\r\n', 'Package includes Uptan, chondon, turmeric paste (holud), sondha, Gila box, chondon tel, rakhi, towel, prodip. \r\nCustomers can customize and order more quantity according to their requirement. For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.\r\n', NULL, 1, 800, 'per event', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (261, 'img\\ayojok-product\\profile\\261.jpg', 5, 'Pakha', 'Regular Size\r\n', '', NULL, 1, 450, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (262, 'http://via.placeholder.com/400x400', 5, 'Designed Pakha', 'Designed Pakha price started from 700 but price can be increase upto 1000 depends on design.\r\n', '', NULL, 1, 700, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (263, 'img\\ayojok-product\\profile\\263.jpg', 5, 'Paati', 'Dimension Standard, high quality, durable.\r\n', 'For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 450, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (264, 'img\\ayojok-product\\profile\\264.jpg', 5, 'Rakhi set', 'set includes 2 piece rakhi for bride and groom', '', NULL, 1, 500, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (265, 'img\\ayojok-product\\profile\\265.jpg', 5, 'Party Popper', 'Standard/regular size', 'For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 200, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (266, 'img\\ayojok-product\\profile\\266.jpg', 5, 'Party Spray 2pc', 'Small Size, made in China', 'Made in China, Size: Small; Set includes : 2pc; For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 100, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (267, 'img\\ayojok-product\\profile\\267.jpg', 5, 'Party Spray Taiwan', 'Made in Taiwan; Size: Small; quantity: Single', 'For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 200, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (268, 'img\\ayojok-product\\profile\\268.jpg', 5, 'Party Spray 550ml', 'Made in Taiwan; Size: Large; quantity: Single', 'For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.', NULL, 1, 500, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (269, 'img\\ayojok-product\\profile\\269.jpg', 5, 'Jewellery', '', 'For any additional details on your order, use the additional message box while ordering to write about your preference and needs. Our Ayojok team will look into it and get back to you shortly. Prices may vary depending on customer preference.\r\nFor custom orders, our team will be constantly in touch with you via WhatsApp and will send pictures of several designs to choose from.\r\n', NULL, 1, 1000, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (271, 'img/ayojok-product/profile/271.jpg', 6, 'Ribon', '3 pc set', NULL, NULL, 0, 200, 'per piece', 1, 0, NULL, NULL, NULL);
INSERT INTO `products` VALUES (272, 'img\\ayojok-product\\profile\\272.png', 21, 'test', 'gfvdf', 'dhdhdfhddhdgg tdh ghsh', '435t4', 0, 2, '2', 1, 0, '2019-03-17 15:15:55', '2019-03-17 15:15:56', NULL);
INSERT INTO `products` VALUES (274, 'img\\ayojok-product\\profile\\274.jpg', 20, 'test', 'rf', 'f', 'f', 0, 2, '2', 1, 0, '2019-03-17 15:37:41', '2019-03-17 15:37:41', NULL);
INSERT INTO `products` VALUES (275, 'img\\ayojok-product\\profile\\275.jpg', 2, 'test', 'nopthing', 'ghbg', 'agf', 0, 20000000, 'Price Suffix:', 1, 0, '2019-03-18 11:41:05', '2019-03-18 11:41:05', NULL);
INSERT INTO `products` VALUES (276, '', 1, 'test', 'f', 'f', 'f', 0, 100, 'no', 1, 0, '2019-04-24 14:07:55', '2019-04-24 15:15:05', NULL);

-- ----------------------------
-- Table structure for productstop
-- ----------------------------
DROP TABLE IF EXISTS `productstop`;
CREATE TABLE `productstop`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `productstop_product_id_foreign`(`product_id`) USING BTREE,
  CONSTRAINT `productstop_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for queries
-- ----------------------------
DROP TABLE IF EXISTS `queries`;
CREATE TABLE `queries`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `vendor_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `tag_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `unit` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `quantity` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `event_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `shift` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total` double NOT NULL DEFAULT 0,
  `advance` double NOT NULL DEFAULT 0,
  `discount` double NOT NULL DEFAULT 0,
  `payment` double NOT NULL DEFAULT 0,
  `expiry_date` date NULL DEFAULT NULL,
  `expiry_time` time(0) NULL DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_available` tinyint(4) NOT NULL DEFAULT 0,
  `is_open` tinyint(4) NOT NULL DEFAULT 0,
  `in_cart` int(11) NOT NULL DEFAULT 0,
  `queue_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `queries_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `queries_category_id_foreign`(`category_id`) USING BTREE,
  INDEX `queries_vendor_id_foreign`(`vendor_id`) USING BTREE,
  INDEX `queries_product_id_foreign`(`product_id`) USING BTREE,
  INDEX `queries_tag_id_foreign`(`tag_id`) USING BTREE,
  CONSTRAINT `queries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `catagories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `queries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `queries_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `queries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `queries_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of queries
-- ----------------------------
INSERT INTO `queries` VALUES (1, 41, 11, 83, NULL, NULL, NULL, NULL, NULL, '2019-05-17', NULL, 0, 0, 0, 0, NULL, NULL, 'Available', 0, 0, 0, 2, '2019-05-16 14:37:35', '2019-05-16 14:37:35');
INSERT INTO `queries` VALUES (2, 41, 11, 83, NULL, NULL, NULL, NULL, NULL, '2019-05-18', NULL, 0, 0, 0, 0, NULL, NULL, 'Booked', 0, 0, 0, 3, '2019-05-16 14:37:35', '2019-05-16 14:37:35');
INSERT INTO `queries` VALUES (3, 41, 11, 83, NULL, NULL, NULL, NULL, NULL, '2019-05-20', NULL, 0, 0, 0, 0, NULL, NULL, 'Query Submitted', 0, 0, 0, 0, '2019-05-16 14:37:45', '2019-05-16 14:37:45');
INSERT INTO `queries` VALUES (4, 41, 4, NULL, 251, NULL, NULL, NULL, 'sadasd', '2019-05-17', NULL, 0, 0, 0, 0, NULL, NULL, 'Query Submitted', 0, 0, 0, 0, '2019-05-16 14:38:02', '2019-05-16 14:38:02');
INSERT INTO `queries` VALUES (5, 41, 2, NULL, 215, NULL, NULL, NULL, 'adasd', '2019-05-17', NULL, 0, 0, 0, 0, NULL, NULL, 'Query Submitted', 0, 0, 0, 0, '2019-05-16 14:38:18', '2019-05-16 14:38:18');
INSERT INTO `queries` VALUES (6, 41, 11, 10, NULL, NULL, NULL, NULL, 'fdsdgfdgfdgf', '2019-05-21', NULL, 0, 0, 0, 0, NULL, NULL, 'Query Submitted', 0, 0, 0, 0, '2019-05-19 10:56:42', '2019-05-19 10:56:42');
INSERT INTO `queries` VALUES (7, 41, 9, 36, NULL, NULL, NULL, NULL, 'bmnghkjhj', '2019-05-22', NULL, 0, 0, 0, 0, NULL, NULL, 'Query Submitted', 0, 0, 0, 0, '2019-05-19 11:08:43', '2019-05-19 11:08:43');

-- ----------------------------
-- Table structure for query_cart
-- ----------------------------
DROP TABLE IF EXISTS `query_cart`;
CREATE TABLE `query_cart`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `vendors_id` int(11) NOT NULL,
  `products_id` int(10) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `mess` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_available` tinyint(4) NOT NULL DEFAULT 0,
  `advance` int(11) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL DEFAULT 0,
  `is_open` tinyint(4) NOT NULL DEFAULT 0,
  `is_confirm` tinyint(4) NOT NULL DEFAULT 0,
  `is_mailed` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `time` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `maindate` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ratings
-- ----------------------------
DROP TABLE IF EXISTS `ratings`;
CREATE TABLE `ratings`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for sslorder
-- ----------------------------
DROP TABLE IF EXISTS `sslorder`;
CREATE TABLE `sslorder`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `currency` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` int(11) NOT NULL,
  `order_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tran_id` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sslorder
-- ----------------------------
INSERT INTO `sslorder` VALUES (1, 'BDT', 10, '24', '2590574565cac640aa5277', 'sazzad Hossain Nirjhor', 'sazzad3029@gmail.com', '01685262326', 'Complete', '2019-04-09 15:21:40', '2019-04-09 15:22:13');
INSERT INTO `sslorder` VALUES (2, 'BDT', 110, '25,26', '15154281735cbf02df829e4', 'sazzad Hossain Nirjhor', 'sazzad3029@gmail.com', '01685262326', 'Complete', '2019-04-23 18:19:44', '2019-04-23 18:19:55');
INSERT INTO `sslorder` VALUES (3, 'BDT', 100, '28', '1977365995cc03b3b5560d', 'sazzad Hossain Nirjhor', 'sazzad3029@gmail.com', '01685262326', 'Complete', '2019-04-24 16:32:36', '2019-04-24 16:32:51');
INSERT INTO `sslorder` VALUES (4, 'BDT', 10, '29', '2682248855cc19e65d24b9', 'sazzad Hossain Nirjhor', 'sazzad3029@gmail.com', '01685262326', 'Pending', '2019-04-25 17:47:51', '2019-04-25 17:47:51');
INSERT INTO `sslorder` VALUES (5, 'BDT', 30, '30', '20350223235cc5571d6fa51', 'dev2', 'dev2@gmail.com', '01685262326', 'Complete', '2019-04-28 13:32:46', '2019-04-28 13:33:05');
INSERT INTO `sslorder` VALUES (6, 'BDT', 10, '29', '11717258895cc7fd1d8ae4d', 'sazzad Hossain Nirjhor', 'sazzad3029@gmail.com', '01685262326', 'Pending', '2019-04-30 13:45:37', '2019-04-30 13:45:37');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tags_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `tags_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for unauthorised_queries
-- ----------------------------
DROP TABLE IF EXISTS `unauthorised_queries`;
CREATE TABLE `unauthorised_queries`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mobile_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `vendor_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `unit` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `quantity` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `event_date` date NULL DEFAULT NULL,
  `shift` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `unauthorised_queries_category_id_foreign`(`category_id`) USING BTREE,
  INDEX `unauthorised_queries_vendor_id_foreign`(`vendor_id`) USING BTREE,
  INDEX `unauthorised_queries_product_id_foreign`(`product_id`) USING BTREE,
  CONSTRAINT `unauthorised_queries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `catagories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `unauthorised_queries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `unauthorised_queries_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `contact` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `mybudget` int(13) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 49 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (41, 'sazzad Hossain Nirjhor', 'sazzad3029@gmail.com', NULL, NULL, '01685262326', '$2y$10$gxm5muNHewYFlaDEljTorONmC1EY/3awHnWFzf7hQlembD49VnmVm', NULL, 0, 'i5zHQ9p8XKXk4S0aF71q3m9H0AHJUa2nGEzvcdmwHKXP7HOVdfpzTC0aHqke', '2019-04-09 15:13:00', '2019-04-09 15:13:00');
INSERT INTO `users` VALUES (42, 'dev', 'dev@gmail.com', 'd', 'a', '01685-262326', '$2y$10$1RYodr9ms2P5m1AVBmjUaeSDV1Jk8xJO1bTottxthDIZfFCIvgMuG', NULL, 0, 'cWg32tz3zs7pSnwtTtjPWtlEMNh93d7dNypmhslWqUJ0aLVAjzBQWXU0g7yL', '2019-04-28 12:20:37', '2019-04-28 12:46:28');
INSERT INTO `users` VALUES (43, 'dev2', 'dev2@gmail.com', NULL, NULL, '01685262326', '$2y$10$ihHYe3CbPI5cXJKtgKgIKerF6pAqTacTrEhE3n1LW7Oci0rhxYudO', NULL, 0, NULL, '2019-04-28 12:47:18', '2019-04-28 12:47:18');
INSERT INTO `users` VALUES (44, 'nirjhor', 'sazzad003@gmail.com', NULL, NULL, '01685262326', '$2y$10$BBD0N1plyoDfiG7Nl31ukeWvFZguDEINhpYo2ihAdVs8JO7WiroC2', NULL, 0, NULL, '2019-04-29 10:40:51', '2019-04-29 10:40:51');
INSERT INTO `users` VALUES (45, 'Sazzad  Hossain Nirjhor', 'admin@nextgear.com', 'Sazzad  Hossain', 'Nirjhor', '01685-262326', '$2y$10$Tc/6PLrEXF1yLF6Ve75C6ecfi6FyeZjVzPDaEm3A39qHWzXDO29Ya', 'fghfdg', 0, NULL, '2019-05-05 13:45:36', '2019-05-05 13:45:36');
INSERT INTO `users` VALUES (47, 'Sazzad  Hossain Nirjhor', 'admin@ayojok.com', 'Sazzad  Hossain', 'Nirjhor', '01685-262326', '$2y$10$VzEXuFMzsGr1Ep4uHIoC6uGJVILXJ7dldEc.8K.d.Gk7D8asIn6Ty', 'fd', 0, NULL, '2019-05-05 16:33:07', '2019-05-05 16:33:07');
INSERT INTO `users` VALUES (48, 'Frank', 'frnk.kml08@gmail.com', NULL, NULL, '01682201880', '$2y$10$fmRCez6LVnnCsKCV5KaxIuBHTbqjlBiUbyuxSrZ.xRT17qUoXIryG', NULL, 0, NULL, '2019-05-07 16:17:28', '2019-05-07 16:17:28');

-- ----------------------------
-- Table structure for vendor_featurs
-- ----------------------------
DROP TABLE IF EXISTS `vendor_featurs`;
CREATE TABLE `vendor_featurs`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `catagory_id` int(11) NOT NULL,
  `feature1_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature1_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature2_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature2_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature3_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature3_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature4_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature4_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature5_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature5_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature6_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature6_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature7_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature7_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature8_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature8_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of vendor_featurs
-- ----------------------------
INSERT INTO `vendor_featurs` VALUES (41, 18, 'img/icons/kazi/location.png', 'Location', 'img/icons/kazi/experience.png', 'Industry Experience (Years)', 'img/icons/kazi/booking-method.png', 'Booking Method', 'img/icons/kazi/appointment.png', 'Book Before', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `vendor_featurs` VALUES (42, 10, 'img\\icons\\dj\\performing-time.png', 'Performing Time', 'img\\icons\\dj\\experience.png', 'Industry Experience (Years)', 'img\\icons\\dj\\light-setup.png', 'Light Setup', 'img\\icons\\dj\\sound-box.png', 'Sound Setup', 'img\\icons\\dj\\request-song.png', 'Custom Song List', 'img\\icons\\dj\\booking-method.png', 'Booking Method', 'img\\icons\\dj\\appointment.png', 'Book Before', 'img\\icons\\dj\\outside-city.png', 'Outside City Service', NULL, NULL);
INSERT INTO `vendor_featurs` VALUES (43, 11, 'img\\icons\\catering\\location.png', 'Location', 'img\\icons\\catering\\experience.png', 'Industry Experience', 'img\\icons\\catering\\minimum.png', 'Min. Order', 'img\\icons\\catering\\crokaries.png', 'Cookeries & Cutleries', 'img\\icons\\catering\\waiter.png', 'Waiter', 'img\\icons\\catering\\home-delivery.png', 'Home Delivery', 'img\\icons\\catering\\booking-method.png', 'Booking Method', 'img\\icons\\catering\\outside-city.png', 'Outside City Service', NULL, NULL);
INSERT INTO `vendor_featurs` VALUES (44, 9, 'img\\icons\\venue\\location.png', 'Location', 'img\\icons\\venue\\venue-type.png', 'Venue Type', 'img\\icons\\venue\\seating.png', 'Max. Seating Capacity', 'img\\icons\\venue\\caterer.png', 'Outside Caterer', 'img\\icons\\venue\\decor.png', 'Outside Decoration', 'img\\icons\\venue\\parking.png', 'Parking Size', 'img\\icons\\venue\\booking-method.png', 'Booking Method', 'img\\icons\\venue\\timing.png', 'Timing', NULL, NULL);
INSERT INTO `vendor_featurs` VALUES (45, 17, 'img\\icons\\mehedi\\location.png', 'Location', 'img\\icons\\mehedi\\experience.png', 'Industry Experience', 'img\\icons\\mehedi\\home-service.png', 'Home Service', 'img\\icons\\mehedi\\booking-method.png', 'Booking Method', 'img\\icons\\mehedi\\appointment.png', 'Book Before', 'img\\icons\\mehedi\\outside-city.png', 'Outside City Service', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `vendor_featurs` VALUES (46, 16, 'img\\icons\\bakeries\\location.png', 'Location', 'img\\icons\\bakeries\\industry-experience.png', 'Industry Experience', 'img\\icons\\bakeries\\minimum.png', 'Min. Order', 'img\\icons\\bakeries\\custom-design.png', 'Customization', 'img\\icons\\bakeries\\wedding-cake.png', 'Wedding Cake', 'img\\icons\\bakeries\\home-delivery.png', 'Home Delivery', 'img\\icons\\bakeries\\booking-method.png', 'Booking Method', 'img\\icons\\bakeries\\delivery-time.png', 'Order Before', NULL, NULL);
INSERT INTO `vendor_featurs` VALUES (47, 14, 'img\\icons\\invitation-card\\location.png', 'Location', 'img\\icons\\invitation-card\\experience.png', 'Industry Experience', 'img\\icons\\invitation-card\\minorder.png', 'Min. Order', 'img\\icons\\invitation-card\\custom-design.png', 'Custom Design', 'img\\icons\\invitation-card\\handmade.png', 'Handmade Card', 'img\\icons\\invitation-card\\delivery-time.png', 'Delivery Time', 'img\\icons\\invitation-card\\home-delivery.png', 'Home Delivery', 'img\\icons\\invitation-card\\booking-method.png', 'Booking Method', NULL, NULL);
INSERT INTO `vendor_featurs` VALUES (48, 15, 'img\\icons\\makeup\\location.png', 'Location', 'img\\icons\\makeup\\experience.png', 'Industry Experience', 'img\\icons\\makeup\\service-time.png', 'Timing', 'img\\icons\\makeup\\type.png', 'Men only\\Women only\\ Both', 'img\\icons\\makeup\\home-service.png', 'Home Service', 'img\\icons\\makeup\\booking-method.png', 'Booking Method', 'img\\icons\\makeup\\appointment.png', 'Book Before', 'img\\icons\\makeup\\outside-city.png', 'Outside City Service', NULL, NULL);
INSERT INTO `vendor_featurs` VALUES (49, 13, 'img\\icons\\decoration\\location.png', 'Location', 'img\\icons\\decoration\\experience.png', 'Industry Experience', 'img\\icons\\decoration\\booking-method.png', 'Booking Method', 'img\\icons\\decoration\\outside-city.png', 'Outside City Service', 'img\\icons\\decoration\\custom-theme.png', 'Theme Design', 'img\\icons\\decoration\\wedding.png', 'Wedding', 'img\\icons\\decoration\\corporate.png', 'Corporate Event', 'img\\icons\\decoration\\birthday.png', 'Birthday', NULL, NULL);
INSERT INTO `vendor_featurs` VALUES (50, 12, 'img\\icons\\photography\\location.png', 'Location', 'img\\icons\\photography\\experience.png', 'Industry Experience', 'img\\icons\\photography\\service-time.png', 'Service Time', 'img\\icons\\photography\\corporate.png', 'Corporate Event', 'img\\icons\\photography\\additional-hour-charge.png', 'Additional Hour Rate', 'img\\icons\\photography\\booking-method.png', 'Booking Method', 'img\\icons\\photography\\delivery-time.png', 'Delivery Time', 'img\\icons\\photography\\outside-city.png', 'Outside City Service', NULL, NULL);
INSERT INTO `vendor_featurs` VALUES (51, 23, '	\r\nimg\\icons\\photography\\location.png', 'Location', 'img\\icons\\Business-type-2.png', 'Business Type', 'img\\icons\\Customize-2.png', 'Customization', 'img\\icons\\invitation-card\\booking-method.png', 'Payment Method', 'img\\icons\\photography\\delivery-time.png', 'Delivery Time', 'img\\icons\\decoration\\experience.png', 'Industry Experience', NULL, NULL, NULL, NULL, '2019-03-20 00:00:00', NULL);
INSERT INTO `vendor_featurs` VALUES (52, 24, 'img\\icons\\photography\\location.png', 'Location', 'img\\icons\\Business-type-2.png', 'Business Type', 'img\\icons\\Customize-2.png', 'Customization', 'img\\icons\\invitation-card\\booking-method.png', 'Payment Method', 'img\\icons\\photography\\delivery-time.png', 'Delivery Time', 'img\\icons\\decoration\\experience.png', 'Industry Experience', NULL, NULL, NULL, NULL, '2019-03-20 00:00:00', NULL);

-- ----------------------------
-- Table structure for vendor_images
-- ----------------------------
DROP TABLE IF EXISTS `vendor_images`;
CREATE TABLE `vendor_images`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `catagory_id` int(11) NOT NULL,
  `vendors_id` int(11) NOT NULL,
  `image_locations` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1061 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of vendor_images
-- ----------------------------
INSERT INTO `vendor_images` VALUES (88, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (89, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (90, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (91, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (92, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (93, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (94, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (95, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (96, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (97, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (98, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (99, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (100, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (101, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (102, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (103, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (104, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (105, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (106, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (107, 12, 3, 'img\\vendor-image\\wedding_mate\\Ayojok-WM-20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (108, 17, 46, 'img\\vendor-image\\karuka_mehendi\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (109, 17, 46, 'img\\vendor-image\\karuka_mehendi\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (110, 17, 46, 'img\\vendor-image\\karuka_mehendi\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (111, 17, 46, 'img\\vendor-image\\karuka_mehendi\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (112, 17, 46, 'img\\vendor-image\\karuka_mehendi\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (113, 17, 46, 'img\\vendor-image\\karuka_mehendi\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (114, 17, 46, 'img\\vendor-image\\karuka_mehendi\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (115, 17, 46, 'img\\vendor-image\\karuka_mehendi\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (116, 17, 46, 'img\\vendor-image\\karuka_mehendi\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (117, 17, 46, 'img\\vendor-image\\karuka_mehendi\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (118, 17, 5, 'img\\vendor-image\\mehendi_noksha\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (119, 17, 5, 'img\\vendor-image\\mehendi_noksha\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (120, 17, 5, 'img\\vendor-image\\mehendi_noksha\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (121, 17, 5, 'img\\vendor-image\\mehendi_noksha\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (122, 17, 5, 'img\\vendor-image\\mehendi_noksha\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (123, 17, 5, 'img\\vendor-image\\mehendi_noksha\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (124, 17, 5, 'img\\vendor-image\\mehendi_noksha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (125, 17, 5, 'img\\vendor-image\\mehendi_noksha\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (126, 17, 5, 'img\\vendor-image\\mehendi_noksha\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (127, 17, 5, 'img\\vendor-image\\mehendi_noksha\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (128, 17, 5, 'img\\vendor-image\\mehendi_noksha\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (129, 17, 5, 'img\\vendor-image\\mehendi_noksha\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (130, 17, 5, 'img\\vendor-image\\mehendi_noksha\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (131, 17, 5, 'img\\vendor-image\\mehendi_noksha\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (132, 17, 5, 'img\\vendor-image\\mehendi_noksha\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (133, 17, 5, 'img\\vendor-image\\mehendi_noksha\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (134, 17, 5, 'img\\vendor-image\\mehendi_noksha\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (135, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (136, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (137, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (138, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (139, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (140, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (141, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (142, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (143, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (144, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (145, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (146, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (147, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (148, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (149, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (150, 17, 4, 'img\\vendor-image\\dulhan_mehedi_arts\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (151, 15, 6, 'img\\vendor-image\\ramisa_parvin\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (152, 15, 6, 'img\\vendor-image\\ramisa_parvin\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (153, 15, 6, 'img\\vendor-image\\ramisa_parvin\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (154, 15, 6, 'img\\vendor-image\\ramisa_parvin\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (155, 15, 6, 'img\\vendor-image\\ramisa_parvin\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (156, 15, 6, 'img\\vendor-image\\ramisa_parvin\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (157, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (158, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (159, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (160, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (161, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (162, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (163, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (164, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (165, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (166, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (167, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (168, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (169, 14, 13, 'img\\vendor-image\\wood_takker\\wood_takker_13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (170, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (171, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (172, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (173, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (174, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (175, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (176, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (177, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (178, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (179, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (180, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (181, 15, 82, 'img\\vendor-image\\dreams_hair_&_beauty_corner\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (182, 16, 11, 'img\\vendor-image\\dbake\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (183, 16, 11, 'img\\vendor-image\\dbake\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (184, 16, 11, 'img\\vendor-image\\dbake\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (185, 16, 11, 'img\\vendor-image\\dbake\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (186, 16, 11, 'img\\vendor-image\\dbake\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (187, 16, 11, 'img\\vendor-image\\dbake\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (188, 16, 11, 'img\\vendor-image\\dbake\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (189, 16, 11, 'img\\vendor-image\\dbake\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (190, 16, 11, 'img\\vendor-image\\dbake\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (191, 16, 11, 'img\\vendor-image\\dbake\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (192, 16, 11, 'img\\vendor-image\\dbake\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (193, 16, 11, 'img\\vendor-image\\dbake\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (194, 16, 11, 'img\\vendor-image\\dbake\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (195, 16, 11, 'img\\vendor-image\\dbake\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (196, 16, 11, 'img\\vendor-image\\dbake\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (197, 16, 11, 'img\\vendor-image\\dbake\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (198, 16, 45, 'img\\vendor-image\\cake_paradise\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (199, 16, 45, 'img\\vendor-image\\cake_paradise\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (200, 16, 45, 'img\\vendor-image\\cake_paradise\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (201, 16, 45, 'img\\vendor-image\\cake_paradise\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (202, 16, 45, 'img\\vendor-image\\cake_paradise\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (203, 16, 45, 'img\\vendor-image\\cake_paradise\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (204, 16, 45, 'img\\vendor-image\\cake_paradise\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (205, 16, 45, 'img\\vendor-image\\cake_paradise\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (206, 16, 45, 'img\\vendor-image\\cake_paradise\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (207, 16, 45, 'img\\vendor-image\\cake_paradise\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (208, 16, 45, 'img\\vendor-image\\cake_paradise\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (209, 16, 45, 'img\\vendor-image\\cake_paradise\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (210, 16, 45, 'img\\vendor-image\\cake_paradise\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (211, 16, 45, 'img\\vendor-image\\cake_paradise\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (212, 16, 45, 'img\\vendor-image\\cake_paradise\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (213, 16, 45, 'img\\vendor-image\\cake_paradise\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (214, 16, 45, 'img\\vendor-image\\cake_paradise\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (215, 16, 45, 'img\\vendor-image\\cake_paradise\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (216, 16, 45, 'img\\vendor-image\\cake_paradise\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (217, 16, 45, 'img\\vendor-image\\cake_paradise\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (218, 16, 45, 'img\\vendor-image\\cake_paradise\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (219, 16, 45, 'img\\vendor-image\\cake_paradise\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (220, 16, 45, 'img\\vendor-image\\cake_paradise\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (221, 15, 91, 'img\\vendor-image\\manami\\manami_1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (222, 15, 91, 'img\\vendor-image\\manami\\manami_2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (223, 15, 91, 'img\\vendor-image\\manami\\manami_3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (224, 15, 91, 'img\\vendor-image\\manami\\manami_4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (225, 15, 91, 'img\\vendor-image\\manami\\manami_5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (226, 15, 91, 'img\\vendor-image\\manami\\manami_6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (227, 15, 91, 'img\\vendor-image\\manami\\manami_7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (228, 15, 91, 'img\\vendor-image\\manami\\manami_8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (229, 15, 91, 'img\\vendor-image\\manami\\manami_9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (230, 15, 91, 'img\\vendor-image\\manami\\manami_10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (231, 12, 87, 'img\\vendor-image\\wedding_diary\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (232, 12, 87, 'img\\vendor-image\\wedding_diary\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (233, 12, 87, 'img\\vendor-image\\wedding_diary\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (234, 12, 87, 'img\\vendor-image\\wedding_diary\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (235, 12, 87, 'img\\vendor-image\\wedding_diary\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (236, 12, 87, 'img\\vendor-image\\wedding_diary\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (237, 12, 87, 'img\\vendor-image\\wedding_diary\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (238, 12, 87, 'img\\vendor-image\\wedding_diary\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (239, 12, 87, 'img\\vendor-image\\wedding_diary\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (240, 12, 87, 'img\\vendor-image\\wedding_diary\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (241, 12, 87, 'img\\vendor-image\\wedding_diary\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (242, 12, 87, 'img\\vendor-image\\wedding_diary\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (243, 12, 88, 'img\\vendor-image\\wedding_moments\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (244, 12, 88, 'img\\vendor-image\\wedding_moments\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (245, 12, 88, 'img\\vendor-image\\wedding_moments\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (246, 12, 88, 'img\\vendor-image\\wedding_moments\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (247, 12, 88, 'img\\vendor-image\\wedding_moments\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (248, 12, 88, 'img\\vendor-image\\wedding_moments\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (250, 12, 88, 'img\\vendor-image\\wedding_moments\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (251, 12, 88, 'img\\vendor-image\\wedding_moments\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (252, 12, 88, 'img\\vendor-image\\wedding_moments\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (253, 12, 88, 'img\\vendor-image\\wedding_moments\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (254, 12, 88, 'img\\vendor-image\\wedding_moments\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (255, 12, 88, 'img\\vendor-image\\wedding_moments\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (256, 12, 89, 'img\\vendor-image\\reminiscence\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (257, 12, 89, 'img\\vendor-image\\reminiscence\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (258, 12, 89, 'img\\vendor-image\\reminiscence\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (259, 12, 89, 'img\\vendor-image\\reminiscence\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (260, 12, 89, 'img\\vendor-image\\reminiscence\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (261, 12, 89, 'img\\vendor-image\\reminiscence\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (262, 12, 89, 'img\\vendor-image\\reminiscence\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (263, 12, 89, 'img\\vendor-image\\reminiscence\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (264, 12, 89, 'img\\vendor-image\\reminiscence\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (265, 12, 89, 'img\\vendor-image\\reminiscence\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (266, 12, 89, 'img\\vendor-image\\reminiscence\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (267, 12, 89, 'img\\vendor-image\\reminiscence\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (268, 12, 90, 'img\\vendor-image\\wedding_devine\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (269, 12, 90, 'img\\vendor-image\\wedding_devine\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (270, 12, 90, 'img\\vendor-image\\wedding_devine\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (271, 12, 90, 'img\\vendor-image\\wedding_devine\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (272, 12, 90, 'img\\vendor-image\\wedding_devine\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (273, 12, 90, 'img\\vendor-image\\wedding_devine\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (274, 12, 90, 'img\\vendor-image\\wedding_devine\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (275, 12, 90, 'img\\vendor-image\\wedding_devine\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (276, 12, 90, 'img\\vendor-image\\wedding_devine\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (277, 12, 90, 'img\\vendor-image\\wedding_devine\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (278, 12, 90, 'img\\vendor-image\\wedding_devine\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (279, 12, 90, 'img\\vendor-image\\wedding_devine\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (280, 12, 88, 'img\\vendor-image\\wedding_moments\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (281, 12, 88, 'img\\vendor-image\\wedding_moments\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (282, 12, 88, 'img\\vendor-image\\wedding_moments\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (283, 12, 88, 'img\\vendor-image\\wedding_moments\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (284, 12, 88, 'img\\vendor-image\\wedding_moments\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (285, 12, 88, 'img\\vendor-image\\wedding_moments\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (286, 12, 88, 'img\\vendor-image\\wedding_moments\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (287, 12, 88, 'img\\vendor-image\\wedding_moments\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (288, 12, 90, 'img\\vendor-image\\wedding_moments\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (289, 12, 90, 'img\\vendor-image\\wedding_devine\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (290, 12, 90, 'img\\vendor-image\\wedding_devine\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (291, 12, 90, 'img\\vendor-image\\wedding_devine\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (292, 12, 90, 'img\\vendor-image\\wedding_devine\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (293, 12, 90, 'img\\vendor-image\\wedding_devine\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (294, 12, 90, 'img\\vendor-image\\wedding_devine\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (295, 12, 90, 'img\\vendor-image\\wedding_devine\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (296, 12, 90, 'img\\vendor-image\\wedding_devine\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (297, 12, 89, 'img\\vendor-image\\reminiscence\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (298, 12, 89, 'img\\vendor-image\\reminiscence\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (299, 12, 89, 'img\\vendor-image\\reminiscence\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (300, 12, 89, 'img\\vendor-image\\reminiscence\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (301, 12, 89, 'img\\vendor-image\\reminiscence\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (302, 12, 89, 'img\\vendor-image\\reminiscence\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (303, 12, 89, 'img\\vendor-image\\reminiscence\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (304, 12, 89, 'img\\vendor-image\\reminiscence\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (305, 12, 87, 'img\\vendor-image\\wedding_diary\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (306, 12, 87, 'img\\vendor-image\\wedding_diary\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (307, 12, 87, 'img\\vendor-image\\wedding_diary\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (309, 12, 87, 'img\\vendor-image\\wedding_diary\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (311, 12, 87, 'img\\vendor-image\\wedding_diary\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (312, 12, 87, 'img\\vendor-image\\wedding_diary\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (313, 12, 87, 'img\\vendor-image\\wedding_diary\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (314, 12, 87, 'img\\vendor-image\\wedding_diary\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (315, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (316, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (317, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (318, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (319, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (320, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (321, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (322, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (323, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (324, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (325, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (326, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (327, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (328, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (329, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (330, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (331, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (332, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (333, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (334, 17, 92, 'img/vendor-image/Mehendi_By_Khowab/mehendiByKhowab_20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (335, 13, 93, 'img/vendor-image/alpona/1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (336, 13, 93, 'img/vendor-image/alpona/2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (337, 13, 93, 'img/vendor-image/alpona/3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (338, 13, 93, 'img/vendor-image/alpona/4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (340, 13, 93, 'img/vendor-image/alpona/5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (341, 13, 93, 'img/vendor-image/alpona/5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (342, 13, 93, 'img/vendor-image/alpona/6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (343, 13, 93, 'img/vendor-image/alpona/7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (345, 13, 93, 'img/vendor-image/alpona/8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (346, 13, 93, 'img/vendor-image/alpona/9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (347, 13, 93, 'img/vendor-image/alpona/10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (348, 13, 93, 'img/vendor-image/alpona/11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (349, 13, 93, 'img/vendor-image/alpona/12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (350, 13, 93, 'img/vendor-image/alpona/13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (351, 13, 93, 'img/vendor-image/alpona/14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (352, 13, 93, 'img/vendor-image/alpona/15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (353, 13, 93, 'img/vendor-image/alpona/16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (354, 13, 93, 'img/vendor-image/alpona/17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (355, 13, 93, 'img/vendor-image/alpona/18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (356, 13, 93, 'img/vendor-image/alpona/19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (357, 13, 93, 'img/vendor-image/alpona/20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (358, 12, 94, 'img\\vendor-image\\photoholic\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (359, 12, 94, 'img\\vendor-image\\photoholic\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (360, 12, 94, 'img\\vendor-image\\photoholic\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (361, 12, 94, 'img\\vendor-image\\photoholic\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (362, 12, 94, 'img\\vendor-image\\photoholic\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (363, 12, 94, 'img\\vendor-image\\photoholic\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (364, 12, 94, 'img\\vendor-image\\photoholic\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (365, 12, 94, 'img\\vendor-image\\photoholic\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (366, 12, 94, 'img\\vendor-image\\photoholic\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (367, 12, 94, 'img\\vendor-image\\photoholic\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (368, 12, 94, 'img\\vendor-image\\photoholic\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (369, 12, 94, 'img\\vendor-image\\photoholic\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (370, 12, 94, 'img\\vendor-image\\photoholic\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (371, 12, 94, 'img\\vendor-image\\photoholic\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (372, 12, 94, 'img\\vendor-image\\photoholic\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (373, 12, 94, 'img\\vendor-image\\photoholic\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (374, 12, 94, 'img\\vendor-image\\photoholic\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (375, 12, 94, 'img\\vendor-image\\photoholic\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (376, 12, 94, 'img\\vendor-image\\photoholic\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (377, 12, 95, 'img\\vendor-image\\rifat_reza\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (378, 12, 95, 'img\\vendor-image\\rifat_reza\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (379, 12, 95, 'img\\vendor-image\\rifat_reza\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (380, 12, 95, 'img\\vendor-image\\rifat_reza\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (381, 12, 95, 'img\\vendor-image\\rifat_reza\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (382, 12, 95, 'img\\vendor-image\\rifat_reza\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (383, 12, 95, 'img\\vendor-image\\rifat_reza\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (384, 12, 95, 'img\\vendor-image\\rifat_reza\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (385, 12, 95, 'img\\vendor-image\\rifat_reza\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (386, 12, 95, 'img\\vendor-image\\rifat_reza\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (387, 12, 95, 'img\\vendor-image\\rifat_reza\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (388, 12, 95, 'img\\vendor-image\\rifat_reza\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (389, 12, 95, 'img\\vendor-image\\rifat_reza\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (390, 12, 95, 'img\\vendor-image\\rifat_reza\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (391, 12, 95, 'img\\vendor-image\\rifat_reza\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (392, 12, 95, 'img\\vendor-image\\rifat_reza\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (393, 12, 95, 'img\\vendor-image\\rifat_reza\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (394, 12, 95, 'img\\vendor-image\\rifat_reza\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (395, 12, 95, 'img\\vendor-image\\rifat_reza\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (396, 12, 95, 'img\\vendor-image\\rifat_reza\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (397, 13, 96, 'img/vendor-image/red_elegance/1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (398, 13, 96, 'img/vendor-image/red_elegance/2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (399, 13, 96, 'img/vendor-image/red_elegance/3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (400, 13, 96, 'img/vendor-image/red_elegance/4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (401, 13, 96, 'img/vendor-image/red_elegance/5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (402, 13, 96, 'img/vendor-image/red_elegance/6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (403, 13, 96, 'img/vendor-image/red_elegance/7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (404, 13, 96, 'img/vendor-image/red_elegance/8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (405, 13, 96, 'img/vendor-image/red_elegance/9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (406, 13, 96, 'img/vendor-image/red_elegance/10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (407, 13, 96, 'img/vendor-image/red_elegance/11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (408, 13, 96, 'img/vendor-image/red_elegance/12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (409, 13, 96, 'img/vendor-image/red_elegance/13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (410, 13, 96, 'img/vendor-image/red_elegance/14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (411, 13, 96, 'img/vendor-image/red_elegance/15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (412, 13, 96, 'img/vendor-image/red_elegance/16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (413, 13, 97, 'img/vendor-image/new_puspo_valley/1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (414, 13, 96, 'img/vendor-image/red_elegance/17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (415, 13, 96, 'img/vendor-image/red_elegance/18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (416, 13, 96, 'img/vendor-image/red_elegance/19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (417, 13, 96, 'img/vendor-image/red_elegance/20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (418, 13, 97, 'img/vendor-image/new_puspo_valley/2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (419, 13, 97, 'img/vendor-image/new_puspo_valley/3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (420, 13, 97, 'img/vendor-image/new_puspo_valley/4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (421, 13, 97, 'img/vendor-image/new_puspo_valley/5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (422, 13, 97, 'img/vendor-image/new_puspo_valley/6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (423, 13, 97, 'img/vendor-image/new_puspo_valley/7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (424, 13, 97, 'img/vendor-image/new_puspo_valley/8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (425, 13, 97, 'img/vendor-image/new_puspo_valley/8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (426, 13, 97, 'img/vendor-image/new_puspo_valley/9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (427, 13, 97, 'img/vendor-image/new_puspo_valley/10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (428, 13, 97, 'img/vendor-image/new_puspo_valley/11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (429, 13, 97, 'img/vendor-image/new_puspo_valley/12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (430, 13, 97, 'img/vendor-image/new_puspo_valley/13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (431, 13, 97, 'img/vendor-image/new_puspo_valley/14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (432, 13, 97, 'img/vendor-image/new_puspo_valley/15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (433, 13, 97, 'img/vendor-image/new_puspo_valley/16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (434, 13, 97, 'img/vendor-image/new_puspo_valley/17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (435, 13, 97, 'img/vendor-image/new_puspo_valley/18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (436, 13, 97, 'img/vendor-image/new_puspo_valley/19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (437, 13, 97, 'img/vendor-image/new_puspo_valley/20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (438, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (439, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (440, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (441, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (442, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (443, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (457, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (458, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (459, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (460, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (461, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (462, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (463, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (464, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (465, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (466, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (467, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (468, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (469, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (470, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (471, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (472, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (473, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (474, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (475, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (476, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (477, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (478, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (479, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (480, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (481, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (482, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (483, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (484, 13, 100, 'img\\vendor-image\\dazzling_decor_by_shabiha\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (485, 13, 101, 'img\\vendor-image\\elation\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (486, 13, 101, 'img\\vendor-image\\elation\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (487, 13, 101, 'img\\vendor-image\\elation\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (488, 13, 101, 'img\\vendor-image\\elation\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (489, 13, 101, 'img\\vendor-image\\elation\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (490, 13, 101, 'img\\vendor-image\\elation\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (491, 13, 101, 'img\\vendor-image\\elation\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (492, 13, 101, 'img\\vendor-image\\elation\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (493, 13, 101, 'img\\vendor-image\\elation\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (494, 13, 101, 'img\\vendor-image\\elation\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (495, 13, 102, 'img\\vendor-image\\sygmaz\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (496, 13, 101, 'img\\vendor-image\\elation\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (497, 13, 101, 'img\\vendor-image\\elation\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (498, 13, 101, 'img\\vendor-image\\elation\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (499, 13, 101, 'img\\vendor-image\\elation\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (500, 13, 102, 'img\\vendor-image\\sygmaz\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (501, 13, 102, 'img\\vendor-image\\sygmaz\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (502, 13, 102, 'img\\vendor-image\\sygmaz\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (503, 13, 102, 'img\\vendor-image\\sygmaz\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (504, 13, 102, 'img\\vendor-image\\sygmaz\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (505, 13, 102, 'img\\vendor-image\\sygmaz\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (506, 13, 102, 'img\\vendor-image\\sygmaz\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (507, 13, 102, 'img\\vendor-image\\sygmaz\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (508, 13, 102, 'img\\vendor-image\\sygmaz\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (509, 13, 102, 'img\\vendor-image\\sygmaz\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (510, 13, 102, 'img\\vendor-image\\sygmaz\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (511, 13, 102, 'img\\vendor-image\\sygmaz\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (512, 13, 102, 'img\\vendor-image\\sygmaz\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (513, 13, 102, 'img\\vendor-image\\sygmaz\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (514, 13, 102, 'img\\vendor-image\\sygmaz\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (515, 13, 102, 'img\\vendor-image\\sygmaz\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (516, 13, 102, 'img\\vendor-image\\sygmaz\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (517, 13, 102, 'img\\vendor-image\\sygmaz\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (518, 13, 102, 'img\\vendor-image\\sygmaz\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (519, 13, 102, 'img\\vendor-image\\sygmaz\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (520, 13, 102, 'img\\vendor-image\\sygmaz\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (521, 13, 102, 'img\\vendor-image\\sygmaz\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (522, 13, 102, 'img\\vendor-image\\sygmaz\\24.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (523, 13, 102, 'img\\vendor-image\\sygmaz\\25.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (524, 13, 101, 'img\\vendor-image\\elation\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (525, 13, 101, 'img\\vendor-image\\elation\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (526, 13, 101, 'img\\vendor-image\\elation\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (527, 13, 101, 'img\\vendor-image\\elation\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (528, 13, 101, 'img\\vendor-image\\elation\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (529, 13, 101, 'img\\vendor-image\\elation\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (530, 13, 103, 'img\\vendor-image\\wedding_bees\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (531, 13, 103, 'img\\vendor-image\\wedding_bees\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (532, 13, 103, 'img\\vendor-image\\wedding_bees\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (533, 13, 103, 'img\\vendor-image\\wedding_bees\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (534, 13, 103, 'img\\vendor-image\\wedding_bees\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (535, 13, 103, 'img\\vendor-image\\wedding_bees\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (536, 13, 103, 'img\\vendor-image\\wedding_bees\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (537, 13, 103, 'img\\vendor-image\\wedding_bees\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (538, 13, 103, 'img\\vendor-image\\wedding_bees\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (539, 13, 103, 'img\\vendor-image\\wedding_bees\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (540, 13, 103, 'img\\vendor-image\\wedding_bees\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (541, 13, 103, 'img\\vendor-image\\wedding_bees\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (542, 13, 103, 'img\\vendor-image\\wedding_bees\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (543, 13, 103, 'img\\vendor-image\\wedding_bees\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (544, 13, 103, 'img\\vendor-image\\wedding_bees\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (545, 13, 103, 'img\\vendor-image\\wedding_bees\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (546, 13, 103, 'img\\vendor-image\\wedding_bees\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (547, 13, 103, 'img\\vendor-image\\wedding_bees\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (548, 13, 103, 'img\\vendor-image\\wedding_bees\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (549, 13, 103, 'img\\vendor-image\\wedding_bees\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (550, 13, 103, 'img\\vendor-image\\wedding_bees\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (551, 13, 103, 'img\\vendor-image\\wedding_bees\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (552, 13, 103, 'img\\vendor-image\\wedding_bees\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (553, 13, 103, 'img\\vendor-image\\wedding_bees\\24.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (554, 13, 103, 'img\\vendor-image\\wedding_bees\\25.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (555, 13, 103, 'img\\vendor-image\\wedding_bees\\26.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (556, 13, 103, 'img\\vendor-image\\wedding_bees\\27.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (557, 13, 103, 'img\\vendor-image\\wedding_bees\\28.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (558, 13, 103, 'img\\vendor-image\\wedding_bees\\29.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (559, 13, 103, 'img\\vendor-image\\wedding_bees\\30.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (560, 13, 103, 'img\\vendor-image\\wedding_bees\\31.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (561, 13, 103, 'img\\vendor-image\\wedding_bees\\32.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (562, 13, 103, 'img\\vendor-image\\wedding_bees\\33.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (563, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (564, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (565, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (566, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (567, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (568, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (569, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (570, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (571, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (572, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (573, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (574, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (575, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (576, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (577, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (578, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (579, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (580, 15, 104, 'img\\vendor-image\\smj_bridal_makeover\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (597, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (598, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (599, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (600, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (601, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (602, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (603, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (604, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (605, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (606, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (607, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (608, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (609, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (610, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (611, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (612, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (613, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (614, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (615, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (616, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (617, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (618, 15, 105, 'img\\vendor-image\\sakiron\'s_makeover_salon\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (619, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (620, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (621, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (622, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (623, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (624, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (625, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (626, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (627, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (628, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (629, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (630, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (631, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (632, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (633, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (634, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (635, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (636, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (637, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (638, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (639, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (640, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (641, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (642, 15, 106, 'img\\vendor-image\\fabulous_glamour\'s_beauty_parlour\\24.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (643, 17, 107, 'img\\vendor-image\\alpona_mehedi\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (644, 17, 107, 'img\\vendor-image\\alpona_mehedi\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (645, 17, 107, 'img\\vendor-image\\alpona_mehedi\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (646, 17, 107, 'img\\vendor-image\\alpona_mehedi\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (647, 17, 107, 'img\\vendor-image\\alpona_mehedi\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (648, 17, 107, 'img\\vendor-image\\alpona_mehedi\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (649, 17, 107, 'img\\vendor-image\\alpona_mehedi\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (650, 17, 107, 'img\\vendor-image\\alpona_mehedi\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (651, 17, 107, 'img\\vendor-image\\alpona_mehedi\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (652, 17, 107, 'img\\vendor-image\\alpona_mehedi\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (653, 17, 107, 'img\\vendor-image\\alpona_mehedi\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (654, 17, 107, 'img\\vendor-image\\alpona_mehedi\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (655, 17, 107, 'img\\vendor-image\\alpona_mehedi\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (656, 17, 107, 'img\\vendor-image\\alpona_mehedi\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (657, 17, 107, 'img\\vendor-image\\alpona_mehedi\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (658, 17, 107, 'img\\vendor-image\\alpona_mehedi\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (659, 12, 108, 'img\\vendor-image\\mat_photography\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (660, 12, 108, 'img\\vendor-image\\mat_photography\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (661, 12, 108, 'img\\vendor-image\\mat_photography\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (662, 12, 108, 'img\\vendor-image\\mat_photography\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (663, 12, 108, 'img\\vendor-image\\mat_photography\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (664, 12, 108, 'img\\vendor-image\\mat_photography\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (665, 12, 108, 'img\\vendor-image\\mat_photography\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (666, 12, 108, 'img\\vendor-image\\mat_photography\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (667, 12, 108, 'img\\vendor-image\\mat_photography\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (668, 12, 108, 'img\\vendor-image\\mat_photography\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (669, 12, 108, 'img\\vendor-image\\mat_photography\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (670, 12, 108, 'img\\vendor-image\\mat_photography\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (671, 12, 108, 'img\\vendor-image\\mat_photography\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (672, 12, 108, 'img\\vendor-image\\mat_photography\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (673, 12, 108, 'img\\vendor-image\\mat_photography\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (674, 12, 108, 'img\\vendor-image\\mat_photography\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (675, 12, 108, 'img\\vendor-image\\mat_photography\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (676, 12, 108, 'img\\vendor-image\\mat_photography\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (677, 12, 108, 'img\\vendor-image\\mat_photography\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (678, 12, 108, 'img\\vendor-image\\mat_photography\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (679, 12, 109, 'img\\vendor-image\\jolchap\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (680, 12, 109, 'img\\vendor-image\\jolchap\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (681, 12, 109, 'img\\vendor-image\\jolchap\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (682, 12, 109, 'img\\vendor-image\\jolchap\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (683, 12, 109, 'img\\vendor-image\\jolchap\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (684, 12, 109, 'img\\vendor-image\\jolchap\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (685, 12, 109, 'img\\vendor-image\\jolchap\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (686, 12, 109, 'img\\vendor-image\\jolchap\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (687, 12, 109, 'img\\vendor-image\\jolchap\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (688, 12, 109, 'img\\vendor-image\\jolchap\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (689, 12, 109, 'img\\vendor-image\\jolchap\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (690, 12, 109, 'img\\vendor-image\\jolchap\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (691, 12, 109, 'img\\vendor-image\\jolchap\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (692, 12, 109, 'img\\vendor-image\\jolchap\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (693, 12, 109, 'img\\vendor-image\\jolchap\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (694, 12, 109, 'img\\vendor-image\\jolchap\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (695, 12, 109, 'img\\vendor-image\\jolchap\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (696, 12, 109, 'img\\vendor-image\\jolchap\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (697, 12, 109, 'img\\vendor-image\\jolchap\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (698, 12, 109, 'img\\vendor-image\\jolchap\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (699, 12, 109, 'img\\vendor-image\\jolchap\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (700, 12, 109, 'img\\vendor-image\\jolchap\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (701, 12, 110, 'img\\vendor-image\\wm_by_an\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (702, 12, 110, 'img\\vendor-image\\wm_by_an\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (703, 12, 110, 'img\\vendor-image\\wm_by_an\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (704, 12, 110, 'img\\vendor-image\\wm_by_an\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (705, 12, 110, 'img\\vendor-image\\wm_by_an\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (706, 12, 110, 'img\\vendor-image\\wm_by_an\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (707, 12, 110, 'img\\vendor-image\\wm_by_an\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (708, 12, 110, 'img\\vendor-image\\wm_by_an\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (709, 12, 110, 'img\\vendor-image\\wm_by_an\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (710, 12, 110, 'img\\vendor-image\\wm_by_an\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (711, 12, 110, 'img\\vendor-image\\wm_by_an\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (712, 12, 110, 'img\\vendor-image\\wm_by_an\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (713, 12, 110, 'img\\vendor-image\\wm_by_an\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (714, 12, 110, 'img\\vendor-image\\wm_by_an\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (715, 12, 110, 'img\\vendor-image\\wm_by_an\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (716, 12, 110, 'img\\vendor-image\\wm_by_an\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (718, 12, 110, 'img\\vendor-image\\wm_by_an\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (719, 12, 110, 'img\\vendor-image\\wm_by_an\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (720, 12, 110, 'img\\vendor-image\\wm_by_an\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (721, 12, 110, 'img\\vendor-image\\wm_by_an\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (722, 12, 3, 'img\\vendor-image\\wedding_mate\\1-200.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (723, 12, 3, 'img\\vendor-image\\wedding_mate\\1-500.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (724, 12, 3, 'img\\vendor-image\\wedding_mate\\1-1000.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (725, 12, 3, 'img\\vendor-image\\wedding_mate\\2-200.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (726, 12, 3, 'img\\vendor-image\\wedding_mate\\2-500.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (727, 12, 3, 'img\\vendor-image\\wedding_mate\\2-1000.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (728, 13, 111, 'img\\vendor-image\\blitz\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (729, 13, 111, 'img\\vendor-image\\blitz\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (730, 13, 111, 'img\\vendor-image\\blitz\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (731, 13, 111, 'img\\vendor-image\\blitz\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (732, 13, 111, 'img\\vendor-image\\blitz\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (733, 13, 111, 'img\\vendor-image\\blitz\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (734, 13, 111, 'img\\vendor-image\\blitz\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (735, 13, 111, 'img\\vendor-image\\blitz\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (736, 13, 111, 'img\\vendor-image\\blitz\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (737, 13, 111, 'img\\vendor-image\\blitz\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (738, 13, 111, 'img\\vendor-image\\blitz\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (739, 13, 111, 'img\\vendor-image\\blitz\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (740, 13, 111, 'img\\vendor-image\\blitz\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (741, 13, 111, 'img\\vendor-image\\blitz\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (742, 13, 111, 'img\\vendor-image\\blitz\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (743, 13, 111, 'img\\vendor-image\\blitz\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (744, 13, 111, 'img\\vendor-image\\blitz\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (745, 13, 111, 'img\\vendor-image\\blitz\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (746, 13, 111, 'img\\vendor-image\\blitz\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (747, 13, 111, 'img\\vendor-image\\blitz\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (748, 13, 111, 'img\\vendor-image\\blitz\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (749, 13, 111, 'img\\vendor-image\\blitz\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (750, 13, 111, 'img\\vendor-image\\blitz\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (751, 13, 111, 'img\\vendor-image\\blitz\\24.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (752, 13, 111, 'img\\vendor-image\\blitz\\25.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (753, 13, 111, 'img\\vendor-package\\blitz\\26.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (754, 13, 111, 'img\\vendor-package\\blitz\\27.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (755, 13, 111, 'img\\vendor-package\\blitz\\28.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (756, 13, 111, 'img\\vendor-package\\blitz\\29.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (757, 13, 111, 'img\\vendor-package\\blitz\\30.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (758, 13, 111, 'img\\vendor-package\\blitz\\31.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (759, 13, 111, 'img\\vendor-package\\blitz\\32.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (760, 13, 113, 'img\\vendor-image\\elegant_es\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (761, 13, 113, 'img\\vendor-image\\elegant_es\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (762, 13, 113, 'img\\vendor-image\\elegant_es\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (763, 13, 113, 'img\\vendor-image\\elegant_es\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (764, 13, 113, 'img\\vendor-image\\elegant_es\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (765, 13, 113, 'img\\vendor-image\\elegant_es\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (766, 13, 113, 'img\\vendor-image\\elegant_es\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (767, 13, 113, 'img\\vendor-image\\elegant_es\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (768, 13, 113, 'img\\vendor-image\\elegant_es\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (769, 13, 113, 'img\\vendor-image\\elegant_es\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (770, 13, 113, 'img\\vendor-image\\elegant_es\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (771, 13, 113, 'img\\vendor-image\\elegant_es\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (772, 13, 113, 'img\\vendor-image\\elegant_es\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (773, 13, 113, 'img\\vendor-image\\elegant_es\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (774, 13, 113, 'img\\vendor-image\\elegant_es\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (775, 13, 113, 'img\\vendor-image\\elegant_es\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (776, 13, 113, 'img\\vendor-image\\elegant_es\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (777, 13, 113, 'img\\vendor-image\\elegant_es\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (778, 13, 113, 'img\\vendor-image\\elegant_es\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (779, 13, 113, 'img\\vendor-image\\elegant_es\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (780, 13, 113, 'img\\vendor-image\\elegant_es\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (781, 13, 113, 'img\\vendor-image\\elegant_es\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (782, 13, 113, 'img\\vendor-image\\elegant_es\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (783, 13, 113, 'img\\vendor-image\\elegant_es\\24.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (784, 13, 113, 'img\\vendor-image\\elegant_es\\25.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (785, 13, 114, 'img\\vendor-image\\exclusive\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (786, 13, 114, 'img\\vendor-image\\exclusive\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (787, 13, 114, 'img\\vendor-image\\exclusive\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (788, 13, 114, 'img\\vendor-image\\exclusive\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (789, 13, 114, 'img\\vendor-image\\exclusive\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (790, 13, 114, 'img\\vendor-image\\exclusive\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (791, 13, 114, 'img\\vendor-image\\exclusive\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (792, 13, 114, 'img\\vendor-image\\exclusive\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (793, 13, 114, 'img\\vendor-image\\exclusive\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (794, 13, 114, 'img\\vendor-image\\exclusive\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (795, 13, 114, 'img\\vendor-image\\exclusive\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (796, 13, 114, 'img\\vendor-image\\exclusive\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (797, 13, 114, 'img\\vendor-image\\exclusive\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (798, 13, 114, 'img\\vendor-image\\exclusive\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (799, 13, 114, 'img\\vendor-image\\exclusive\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (800, 13, 114, 'img\\vendor-image\\exclusive\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (801, 13, 114, 'img\\vendor-image\\exclusive\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (802, 13, 114, 'img\\vendor-image\\exclusive\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (803, 13, 114, 'img\\vendor-image\\exclusive\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (804, 13, 114, 'img\\vendor-image\\exclusive\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (805, 13, 114, 'img\\vendor-image\\exclusive\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (806, 13, 114, 'img\\vendor-image\\exclusive\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (807, 13, 114, 'img\\vendor-image\\exclusive\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (808, 13, 115, 'img\\vendor-image\\iiedatan\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (809, 13, 115, 'img\\vendor-image\\iiedatan\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (810, 13, 115, 'img\\vendor-image\\iiedatan\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (811, 13, 115, 'img\\vendor-image\\iiedatan\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (812, 13, 115, 'img\\vendor-image\\iiedatan\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (813, 13, 115, 'img\\vendor-image\\iiedatan\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (814, 13, 115, 'img\\vendor-image\\iiedatan\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (815, 13, 115, 'img\\vendor-image\\iiedatan\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (816, 13, 115, 'img\\vendor-image\\iiedatan\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (817, 13, 115, 'img\\vendor-image\\iiedatan\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (818, 13, 115, 'img\\vendor-image\\iiedatan\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (819, 13, 115, 'img\\vendor-image\\iiedatan\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (820, 13, 115, 'img\\vendor-image\\iiedatan\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (821, 13, 115, 'img\\vendor-image\\iiedatan\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (822, 13, 115, 'img\\vendor-image\\iiedatan\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (823, 13, 115, 'img\\vendor-image\\iiedatan\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (824, 13, 115, 'img\\vendor-image\\iiedatan\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (825, 13, 115, 'img\\vendor-image\\iiedatan\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (826, 13, 115, 'img\\vendor-image\\iiedatan\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (827, 13, 115, 'img\\vendor-image\\iiedatan\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (828, 13, 115, 'img\\vendor-image\\iiedatan\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (829, 13, 115, 'img\\vendor-image\\iiedatan\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (830, 13, 115, 'img\\vendor-image\\iiedatan\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (831, 13, 115, 'img\\vendor-image\\iiedatan\\24.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (832, 13, 115, 'img\\vendor-image\\iiedatan\\25.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (833, 13, 115, 'img\\vendor-image\\iiedatan\\26.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (834, 13, 115, 'img\\vendor-image\\iiedatan\\27.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (835, 13, 116, 'img\\vendor-image\\sparkling\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (836, 13, 116, 'img\\vendor-image\\sparkling\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (837, 13, 116, 'img\\vendor-image\\sparkling\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (838, 13, 116, 'img\\vendor-image\\sparkling\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (839, 13, 116, 'img\\vendor-image\\sparkling\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (840, 13, 116, 'img\\vendor-image\\sparkling\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (841, 13, 116, 'img\\vendor-image\\sparkling\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (842, 13, 116, 'img\\vendor-image\\sparkling\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (843, 13, 116, 'img\\vendor-image\\sparkling\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (844, 13, 116, 'img\\vendor-image\\sparkling\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (845, 13, 116, 'img\\vendor-image\\sparkling\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (846, 13, 116, 'img\\vendor-image\\sparkling\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (847, 13, 116, 'img\\vendor-image\\sparkling\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (848, 13, 116, 'img\\vendor-image\\sparkling\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (849, 13, 116, 'img\\vendor-image\\sparkling\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (850, 13, 116, 'img\\vendor-image\\sparkling\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (851, 13, 116, 'img\\vendor-image\\sparkling\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (852, 13, 116, 'img\\vendor-image\\sparkling\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (853, 13, 116, 'img\\vendor-image\\sparkling\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (854, 13, 116, 'img\\vendor-image\\sparkling\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (855, 13, 116, 'img\\vendor-image\\sparkling\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (856, 13, 116, 'img\\vendor-image\\sparkling\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (857, 13, 116, 'img\\vendor-image\\sparkling\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (858, 13, 116, 'img\\vendor-image\\sparkling\\24.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (859, 13, 116, 'img\\vendor-image\\sparkling\\25.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (860, 13, 116, 'img\\vendor-image\\sparkling\\26.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (861, 13, 116, 'img\\vendor-image\\sparkling\\27.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (862, 13, 116, 'img\\vendor-image\\sparkling\\28.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (863, 13, 116, 'img\\vendor-image\\sparkling\\29.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (864, 13, 116, 'img\\vendor-image\\sparkling\\30.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (865, 13, 116, 'img\\vendor-image\\sparkling\\31.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (866, 13, 116, 'img\\vendor-image\\sparkling\\32.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (867, 13, 116, 'img\\vendor-image\\sparkling\\33.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (868, 13, 117, 'img\\vendor-image\\wedding_decor\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (869, 13, 117, 'img\\vendor-image\\wedding_decor\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (870, 13, 117, 'img\\vendor-image\\wedding_decor\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (871, 13, 117, 'img\\vendor-image\\wedding_decor\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (872, 13, 117, 'img\\vendor-image\\wedding_decor\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (873, 13, 117, 'img\\vendor-image\\wedding_decor\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (874, 13, 117, 'img\\vendor-image\\wedding_decor\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (875, 13, 117, 'img\\vendor-image\\wedding_decor\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (876, 13, 117, 'img\\vendor-image\\wedding_decor\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (877, 13, 117, 'img\\vendor-image\\wedding_decor\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (878, 13, 117, 'img\\vendor-image\\wedding_decor\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (879, 13, 117, 'img\\vendor-image\\wedding_decor\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (880, 13, 117, 'img\\vendor-image\\wedding_decor\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (881, 13, 117, 'img\\vendor-image\\wedding_decor\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (882, 13, 117, 'img\\vendor-image\\wedding_decor\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (883, 13, 117, 'img\\vendor-image\\wedding_decor\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (884, 13, 117, 'img\\vendor-image\\wedding_decor\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (885, 13, 117, 'img\\vendor-image\\wedding_decor\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (886, 13, 117, 'img\\vendor-image\\wedding_decor\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (887, 13, 117, 'img\\vendor-image\\wedding_decor\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (888, 13, 117, 'img\\vendor-image\\wedding_decor\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (889, 13, 118, 'img\\vendor-image\\ruhaani\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (890, 13, 118, 'img\\vendor-image\\ruhaani\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (891, 13, 118, 'img\\vendor-image\\ruhaani\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (892, 13, 118, 'img\\vendor-image\\ruhaani\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (893, 13, 118, 'img\\vendor-image\\ruhaani\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (894, 13, 118, 'img\\vendor-image\\ruhaani\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (895, 13, 118, 'img\\vendor-image\\ruhaani\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (896, 13, 118, 'img\\vendor-image\\ruhaani\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (897, 13, 118, 'img\\vendor-image\\ruhaani\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (898, 13, 118, 'img\\vendor-image\\ruhaani\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (899, 13, 118, 'img\\vendor-image\\ruhaani\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (900, 13, 118, 'img\\vendor-image\\ruhaani\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (901, 13, 118, 'img\\vendor-image\\ruhaani\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (902, 13, 118, 'img\\vendor-image\\ruhaani\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (903, 13, 118, 'img\\vendor-image\\ruhaani\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (904, 13, 118, 'img\\vendor-image\\ruhaani\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (905, 13, 118, 'img\\vendor-image\\ruhaani\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (906, 13, 118, 'img\\vendor-image\\ruhaani\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (907, 13, 118, 'img\\vendor-image\\ruhaani\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (908, 13, 118, 'img\\vendor-image\\ruhaani\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (909, 13, 118, 'img\\vendor-image\\ruhaani\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (910, 13, 118, 'img\\vendor-image\\ruhaani\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (911, 13, 118, 'img\\vendor-image\\ruhaani\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (912, 13, 118, 'img\\vendor-image\\ruhaani\\24.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (913, 13, 119, 'img\\vendor-image\\classic_events\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (914, 13, 119, 'img\\vendor-image\\classic_events\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (915, 13, 119, 'img\\vendor-image\\classic_events\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (916, 13, 119, 'img\\vendor-image\\classic_events\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (917, 13, 119, 'img\\vendor-image\\classic_events\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (918, 13, 119, 'img\\vendor-image\\classic_events\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (919, 13, 119, 'img\\vendor-image\\classic_events\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (920, 13, 119, 'img\\vendor-image\\classic_events\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (921, 13, 119, 'img\\vendor-image\\classic_events\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (922, 13, 119, 'img\\vendor-image\\classic_events\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (923, 13, 119, 'img\\vendor-image\\classic_events\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (924, 13, 119, 'img\\vendor-image\\classic_events\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (925, 13, 119, 'img\\vendor-image\\classic_events\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (926, 13, 119, 'img\\vendor-image\\classic_events\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (927, 13, 119, 'img\\vendor-image\\classic_events\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (928, 13, 119, 'img\\vendor-image\\classic_events\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (929, 13, 119, 'img\\vendor-image\\classic_events\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (930, 13, 119, 'img\\vendor-image\\classic_events\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (931, 13, 119, 'img\\vendor-image\\classic_events\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (932, 13, 119, 'img\\vendor-image\\classic_events\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (933, 13, 119, 'img\\vendor-image\\classic_events\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (934, 13, 119, 'img\\vendor-image\\classic_events\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (935, 13, 119, 'img\\vendor-image\\classic_events\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (936, 13, 119, 'img\\vendor-image\\classic_events\\24.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (937, 13, 119, 'img\\vendor-image\\classic_events\\25.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (938, 13, 119, 'img\\vendor-image\\classic_events\\26.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (939, 13, 119, 'img\\vendor-image\\classic_events\\27.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (940, 13, 119, 'img\\vendor-image\\classic_events\\28.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (941, 13, 119, 'img\\vendor-image\\classic_events\\29.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (942, 13, 120, 'img\\vendor-image\\green_box\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (943, 13, 120, 'img\\vendor-image\\green_box\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (944, 13, 120, 'img\\vendor-image\\green_box\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (945, 13, 120, 'img\\vendor-image\\green_box\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (946, 13, 120, 'img\\vendor-image\\green_box\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (947, 13, 120, 'img\\vendor-image\\green_box\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (948, 13, 120, 'img\\vendor-image\\green_box\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (949, 13, 120, 'img\\vendor-image\\green_box\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (950, 13, 120, 'img\\vendor-image\\green_box\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (951, 13, 120, 'img\\vendor-image\\green_box\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (952, 13, 120, 'img\\vendor-image\\green_box\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (953, 13, 120, 'img\\vendor-image\\green_box\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (954, 13, 120, 'img\\vendor-image\\green_box\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (955, 13, 120, 'img\\vendor-image\\green_box\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (956, 13, 120, 'img\\vendor-image\\green_box\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (957, 13, 120, 'img\\vendor-image\\green_box\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (958, 13, 120, 'img\\vendor-image\\green_box\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (959, 13, 120, 'img\\vendor-image\\green_box\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (960, 13, 120, 'img\\vendor-image\\green_box\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (961, 13, 120, 'img\\vendor-image\\green_box\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (962, 13, 120, 'img\\vendor-image\\green_box\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (963, 13, 120, 'img\\vendor-image\\green_box\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (964, 13, 120, 'img\\vendor-image\\green_box\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (965, 13, 120, 'img\\vendor-image\\green_box\\24.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (966, 13, 120, 'img\\vendor-image\\green_box\\25.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (967, 13, 120, 'img\\vendor-image\\green_box\\26.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (968, 13, 120, 'img\\vendor-image\\green_box\\27.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (969, 13, 120, 'img\\vendor-image\\green_box\\28.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (970, 13, 132, 'img\\vendor-image\\colors_event\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (971, 13, 132, 'img\\vendor-image\\colors_event\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (972, 13, 132, 'img\\vendor-image\\colors_event\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (973, 13, 132, 'img\\vendor-image\\colors_event\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (974, 13, 132, 'img\\vendor-image\\colors_event\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (975, 13, 132, 'img\\vendor-image\\colors_event\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (976, 13, 132, 'img\\vendor-image\\colors_event\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (977, 13, 132, 'img\\vendor-image\\colors_event\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (978, 13, 132, 'img\\vendor-image\\colors_event\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (979, 13, 132, 'img\\vendor-image\\colors_event\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (980, 13, 132, 'img\\vendor-image\\colors_event\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (981, 13, 132, 'img\\vendor-image\\colors_event\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (982, 13, 132, 'img\\vendor-image\\colors_event\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (983, 13, 132, 'img\\vendor-image\\colors_event\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (984, 13, 132, 'img\\vendor-image\\colors_event\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (985, 13, 132, 'img\\vendor-image\\colors_event\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (986, 13, 132, 'img\\vendor-image\\colors_event\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (987, 13, 132, 'img\\vendor-image\\colors_event\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (988, 13, 132, 'img\\vendor-image\\colors_event\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (989, 13, 132, 'img\\vendor-image\\colors_event\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (990, 13, 132, 'img\\vendor-image\\colors_event\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (991, 13, 132, 'img\\vendor-image\\colors_event\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (992, 13, 132, 'img\\vendor-image\\colors_event\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (993, 12, 130, 'img\\vendor-image\\metro_wedding\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (994, 12, 130, 'img\\vendor-image\\metro_wedding\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (995, 12, 130, 'img\\vendor-image\\metro_wedding\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (996, 12, 130, 'img\\vendor-image\\metro_wedding\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (997, 12, 130, 'img\\vendor-image\\metro_wedding\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (998, 12, 130, 'img\\vendor-image\\metro_wedding\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (999, 12, 130, 'img\\vendor-image\\metro_wedding\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1000, 12, 130, 'img\\vendor-image\\metro_wedding\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1001, 12, 130, 'img\\vendor-image\\metro_wedding\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1002, 12, 130, 'img\\vendor-image\\metro_wedding\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1003, 12, 130, 'img\\vendor-image\\metro_wedding\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1004, 12, 130, 'img\\vendor-image\\metro_wedding\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1005, 12, 130, 'img\\vendor-image\\metro_wedding\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1006, 12, 130, 'img\\vendor-image\\metro_wedding\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1007, 12, 130, 'img\\vendor-image\\metro_wedding\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1008, 12, 130, 'img\\vendor-image\\metro_wedding\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1009, 12, 130, 'img\\vendor-image\\metro_wedding\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1010, 12, 130, 'img\\vendor-image\\metro_wedding\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1011, 12, 130, 'img\\vendor-image\\metro_wedding\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1012, 12, 130, 'img\\vendor-image\\metro_wedding\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1013, 12, 130, 'img\\vendor-image\\metro_wedding\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1014, 12, 133, 'img\\vendor-image\\wind_photography\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1015, 12, 133, 'img\\vendor-image\\wind_photography\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1016, 12, 133, 'img\\vendor-image\\wind_photography\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1017, 12, 133, 'img\\vendor-image\\wind_photography\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1018, 12, 133, 'img\\vendor-image\\wind_photography\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1019, 12, 133, 'img\\vendor-image\\wind_photography\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1020, 12, 133, 'img\\vendor-image\\wind_photography\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1021, 12, 133, 'img\\vendor-image\\wind_photography\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1022, 12, 133, 'img\\vendor-image\\wind_photography\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1023, 12, 133, 'img\\vendor-image\\wind_photography\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1024, 12, 133, 'img\\vendor-image\\wind_photography\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1025, 12, 133, 'img\\vendor-image\\wind_photography\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1026, 12, 133, 'img\\vendor-image\\wind_photography\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1027, 12, 133, 'img\\vendor-image\\wind_photography\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1028, 12, 133, 'img\\vendor-image\\wind_photography\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1029, 12, 133, 'img\\vendor-image\\wind_photography\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1030, 12, 133, 'img\\vendor-image\\wind_photography\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1031, 12, 133, 'img\\vendor-image\\wind_photography\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1032, 12, 133, 'img\\vendor-image\\wind_photography\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1033, 12, 131, 'img\\vendor-image\\lfotto\\1.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1034, 12, 131, 'img\\vendor-image\\lfotto\\2.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1035, 12, 131, 'img\\vendor-image\\lfotto\\3.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1036, 12, 131, 'img\\vendor-image\\lfotto\\4.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1037, 12, 131, 'img\\vendor-image\\lfotto\\5.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1038, 12, 131, 'img\\vendor-image\\lfotto\\6.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1039, 12, 131, 'img\\vendor-image\\lfotto\\7.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1040, 12, 131, 'img\\vendor-image\\lfotto\\8.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1041, 12, 131, 'img\\vendor-image\\lfotto\\9.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1042, 12, 131, 'img\\vendor-image\\lfotto\\10.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1043, 12, 131, 'img\\vendor-image\\lfotto\\11.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1044, 12, 131, 'img\\vendor-image\\lfotto\\12.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1045, 12, 131, 'img\\vendor-image\\lfotto\\13.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1046, 12, 131, 'img\\vendor-image\\lfotto\\14.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1047, 12, 131, 'img\\vendor-image\\lfotto\\15.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1048, 12, 131, 'img\\vendor-image\\lfotto\\16.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1049, 12, 131, 'img\\vendor-image\\lfotto\\17.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1050, 12, 131, 'img\\vendor-image\\lfotto\\18.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1051, 12, 131, 'img\\vendor-image\\lfotto\\19.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1052, 12, 131, 'img\\vendor-image\\lfotto\\20.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1053, 12, 131, 'img\\vendor-image\\lfotto\\21.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1054, 12, 131, 'img\\vendor-image\\lfotto\\22.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1055, 12, 131, 'img\\vendor-image\\lfotto\\23.jpg', NULL, NULL);
INSERT INTO `vendor_images` VALUES (1056, 23, 370, 'img/vendor-image/bridal_outfit/bridal_outfit_1056.jpg', '2019-04-10 12:52:34', '2019-04-10 12:52:34');
INSERT INTO `vendor_images` VALUES (1057, 23, 370, 'img/vendor-image/bridal_outfit/bridal_outfit_1057.jpg', '2019-04-10 12:52:35', '2019-04-10 12:52:35');
INSERT INTO `vendor_images` VALUES (1058, 23, 370, 'img/vendor-image/bridal_outfit/bridal_outfit_1058.jpg', '2019-04-10 12:52:35', '2019-04-10 12:52:35');
INSERT INTO `vendor_images` VALUES (1059, 9, 1, 'img/vendor-image/casnova_party_centre/casnova_party_centre_1059.png', '2019-04-23 16:53:05', '2019-04-23 16:53:06');
INSERT INTO `vendor_images` VALUES (1060, 9, 1, 'img/vendor-image/casnova_party_centre/casnova_party_centre_1060.png', '2019-04-23 16:53:23', '2019-04-23 16:53:23');

-- ----------------------------
-- Table structure for vendors
-- ----------------------------
DROP TABLE IF EXISTS `vendors`;
CREATE TABLE `vendors`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `catagory_id` int(11) NOT NULL,
  `profile_img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `contact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `startingat_1_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `startingat_1_price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `startingat_2_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `startingat_2_price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `startingat_3_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `startingat_3_price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_image_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'http://via.placeholder.com/600x400',
  `feature_image_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'http://via.placeholder.com/600x400',
  `feature_image_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'http://via.placeholder.com/600x400',
  `video_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 398 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of vendors
-- ----------------------------
INSERT INTO `vendors` VALUES (1, 9, 'img\\vendor-profile\\casnova_party_centre.jpg', 'img\\vendor-logo\\vendor_logo_default.jpg', 'Casnova Party Centre', 'Casnova Party Centre has been in the event industry for a long time. They have been providing quality products and services with many positive reviews from satisfied customers. ', NULL, 'Hall 1', '35000', NULL, NULL, NULL, NULL, 'img\\feature-image\\casnova_party_centre_f1.jpg', 'img\\feature-image\\casnova_party_centre_f2.jpg', 'img\\feature-image\\casnova_party_centre_f3.jpg', NULL, 0, NULL, '2019-04-23 16:30:56');
INSERT INTO `vendors` VALUES (2, 9, 'img\\vendor-profile\\uttara_community_centre.jpg', 'img\\vendor-logo\\vendor_logo_default.jpg', 'Uttara Community Centre', 'Uttara Community Center has been in the event industry for a long time. They have been providing quality products and services with many positive reviews from satisfied customers. ', NULL, '2nd floor', '27500', '3rd floor', '32000', '2nd & 3rd floor', '46000', 'img/feature-image/uttara_community_centre_f1.jpg', 'img/feature-image/uttara_community_centre_f2.jpg', 'img/feature-image/uttara_community_centre_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (3, 12, 'img/vendor-profile/wedding_mate.jpg', 'img/vendor-logo/wedding_mate.jpg', 'Wedding Mate', 'Part of your wedding on photography, cinematography & event planning', NULL, 'Economy', '11000', 'Standard', '22000', 'Signature', '45000', 'img/feature-image/wedding_mate_f1.jpg', 'img/feature-image/wedding_mate_f2.jpg', 'img/feature-image/wedding_mate_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (4, 17, 'img\\vendor-profile\\dulhan_mehedi_arts.jpg', NULL, 'DULHAN MEHEDI ARTS By NOUSHIN TABASSUM', NULL, NULL, 'Bridal ', '3500', 'Semi Bridal ', '3000', 'No Bridal', '150', 'img\\feature-image\\dulhan_mehedi_arts_f1.jpg', 'img\\feature-image\\dulhan_mehedi_arts_f2.jpg', 'img\\feature-image\\dulhan_mehedi_arts_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (5, 17, 'img\\vendor-profile\\mehendi_noksha.jpg', 'img\\vendor-logo\\5.png', 'Mehendi Noksha By Sanjida Lima', NULL, 'g', 'Bridal', '750', 'Special-Bride Groom Design', '4000', 'Non Bridal', '100', 'img\\feature-image\\mehendi_noksha_f1.jpg', 'img\\feature-image\\mehendi_noksha_f2.jpg', 'img\\feature-image\\mehendi_noksha_f3.jpg', NULL, 0, NULL, '2019-04-15 18:00:52');
INSERT INTO `vendors` VALUES (6, 15, 'img\\vendor-profile\\ramisa_parvin.jpg', 'img\\vendor-profile\\ramisa_parvin.jpg', 'Ramisa Parvin - Makeup Artistry ', NULL, NULL, 'Bridal Makeup', '12000', 'Proposal day Makeup', '7000', 'Party Makeup', '4500', 'img\\feature-image\\ramisa_parvin_f1.jpg', 'img\\feature-image\\ramisa_parvin_f2.jpg', 'img\\feature-image\\ramisa_parvin_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (7, 10, 'img\\vendor-profile\\dj_alif.jpg', NULL, 'Dj Alif', 'ALIF started his career as a member DJ with 2 years experience. ALIF started working professionally from 2014. Now he is one of the best youngest DJ in Bangladesh and also one of the best youngest music producer & composer in Bangladesh.He is popular in Bangladesh.He is experienced for all types of functions including Club parties, Corporate parties, Commercial parties, Private parties. ALIF is committed to every aspect of his show. His extensive repertoire and excellent audience report assurance a fantastic night beyond your expectations & an audience dancing from start to finish. ALIF also played at various club parties, corporate parties, private parties, wedding parties and other huge events.', NULL, 'Per Event', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dj_alif_f1.jpg', 'img\\feature-image\\dj_alif_f2.jpg', 'img\\feature-image\\dj_alif_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (8, 10, 'img\\vendor-profile\\dj_emn.jpg', NULL, 'Dj Emn', 'Born: October 21\r\nLocation: Dhaka, Bangladesh\r\nGenres: Electro house, Electro progressive, Electro funk, Electro Electronich\r\nOccupations: Professional DJ ,Student & businessman\r\nYears active: 2008-present\r\nOwner : EXPLICIT SCRAPE\r\nManaging Director: Red Burn\r\nOfficial & Chief DJ: ALborak international , Swift international ,Red Burn , Explicit scrape, Streo Event Zoo\r\n. \r\n“Music speaks what cannot be expressed, soothes the mind and gives it rest, heals the heart and makes it whole, flows from heaven to the soul.”Dj Emn believes “Music in the soul can be heard by the universe.>>>no music no life@All fans of \"Dj Emn\" can join him here..\r\n\r\nAwards:\r\n\r\n1.Cultural & decoration chairman in lions club international leo youth camp dist 315b3 - shopnopuri 2016\r\n2.Appereciation award as DJ in lions club international leo youth camp multiple district 315 -auronody\r\n', NULL, 'Per Event', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dj_emn_f1.jpg', 'img\\feature-image\\dj_emn_f2.jpg', 'img\\feature-image\\dj_emn_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (9, 13, 'img\\vendor-profile\\shukrabad_lighting_and_decoration.jpg', 'img\\vendor-profile\\shukrabad_lighting_and_decoration.jpg', 'Shukrabad Lighting and Decoration', NULL, NULL, 'Package 1', '10000', '', '', '', '', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (10, 11, 'img\\vendor-profile\\birds_eye.jpg', 'img\\vendor-logo\\vendor_logo_default.jpg', 'Birds eye Roof Top Restaurant', 'Located at the heart of Paltan, Bird’s eye sits on top of the Baitul View Tower. A Rooftop restaurant with the true 360 degree view of Dhaka city.  We offer an amazing view of national landmarks among which are the Baitul Mukarram National Mosque and the Bangabandhu National Stadium.', NULL, 'Thai and Chinies Menu ', '850 ', 'Bangla Party Menu', '675 ', 'Buffet', '1200 ', 'img\\feature-image\\birds_eye_f1.jpg', 'img\\feature-image\\birds_eye_f2.jpg', 'img\\feature-image\\birds_eye_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (11, 16, 'img\\vendor-profile\\dbake.jpg', 'img\\vendor-logo\\dbake.jpg', 'D’Bake', 'If you want to Colour your special moment with a beautiful eye-catching as well as super tasty artistic cakes then D’Bake is the right choice. D’Bake is a boutique bakery completely based on home baking. D’Bake is here to satisfy your taste buds by its deliciously baked goodies. Tasty food with utmost quality is D’ Bakes’ prime consideration to ensure your ultimate comfort. To ensure highest quality we use imported ingredients and tools. So welcome to our palatable world of baked goodies and experience a unique taste indulgence.', NULL, 'Wedding/Anniversary', '3000', 'Holud', '3500', 'Birthday', '2500', 'img\\feature-image\\dbake_f1.jpg', 'img\\feature-image\\dbake_f2.jpg', 'img\\feature-image\\dbake_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (12, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Dr. Golam Kibriya', 'Dr. Mohammad Golam Kibriya has been in the industry for a long time. ', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (13, 14, 'img\\vendor-profile\\wood_takker.jpg', 'img\\vendor-profile\\wood_takker.jpg', 'Wood Takker', 'Exclusive Wooden Gift Items & Souvenirs: Frames, Shapes, Designs, Quotes & Key Rings!', NULL, '50', '150/- tk unitprice', '100', '130/- tk unitprice', '200', '110/- tk unitprice', 'img\\feature-image\\wood_takker_f1.jpg', 'img\\feature-image\\wood_takker_f2.jpg', 'img\\feature-image\\wood_takker_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (14, 9, 'img/vendor-profile/aziz_manzil.jpg', 'img/vendor-profile/aziz_manzil.jpg', 'Aziz Manzil - Part Place & Banquet Hall', 'A lush haven amidst the concrete jungle where we create an innovative and enlightening experience to rejuvenate our guests\' love of celebration.', NULL, 'Open Space', '60000', NULL, NULL, NULL, NULL, 'img/feature-image/aziz_manzil_f1.jpg', 'img/feature-image/aziz_manzil_f2.jpg', 'img/feature-image/aziz_manzil_f3.jpg', '', 0, NULL, NULL);
INSERT INTO `vendors` VALUES (15, 9, 'img\\vendor-profile\\chowdhury_community_center.jpg', NULL, 'Chowdhury Community Centre', NULL, NULL, 'Winter', '50000', 'Summer ', '65000', NULL, NULL, 'img/feature-image/chowdhury_community_centre_f1.jpg', 'img/feature-image/chowdhury_community_centre_f2.jpg', 'img/feature-image/chowdhury_community_centre_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (16, 9, 'img\\vendor-profile\\gardenia_grand_hall.jpg', NULL, 'Gardenia Grand Hall', NULL, NULL, 'Hall-1', '60000', 'Hall-2', '60000', NULL, NULL, 'img/feature-image/gardenia_grand_hall_f1.jpg', 'img/feature-image/gardenia_grand_hall_f2.jpg', 'img/feature-image/gardenia_grand_hall_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (17, 9, 'img/vendor-profile/sector_7.jpg', 'img/vendor-logo/sector_7.jpg', 'Sector 7', 'The world of Magical Recipes.', NULL, 'Hall 1', '15000', '', NULL, NULL, NULL, 'img/feature-image/sector_7_f1.jpg', 'img/feature-image/sector_7_f2.jpg', 'img/feature-image/sector_7_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (18, 9, 'img\\vendor-profile\\polwel_convention_center.jpg', NULL, 'Polwel Convention Center', NULL, NULL, 'Day', '50000', 'Night', '60000', NULL, NULL, 'img/feature-image/polwel_convention_center_f1.jpg', 'img/feature-image/polwel_convention_center_f2.jpg', 'img/feature-image/polwel_convention_center_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (19, 9, 'img\\vendor-profile\\spectra_convention_hall.jpg', NULL, 'Spectra Convention Hall', NULL, NULL, 'Green Hall', '15000', NULL, NULL, '', NULL, 'img/feature-image/spectra_convention_hall_f1.jpg', 'img/feature-image/spectra_convention_hall_f2.jpg', 'img/feature-image/spectra_convention_hall_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (20, 9, 'img\\vendor-profile\\maliha_convention_centre.jpg', NULL, 'Maliha Convention Centre', 'We create an ideal place with best service and quality for birthday,haldi night,akhts,reception,fair,re-union,sunnat e khatna,anniversaries programs.', NULL, 'Hall 1', '65000\r\n', NULL, NULL, NULL, NULL, 'img/feature-image/maliha_convention_centre_f1.jpg', 'img/feature-image/maliha_convention_centre_f2.jpg', 'img/feature-image/maliha_convention_centre_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (21, 9, 'img\\vendor-profile\\samsun_community_center.jpg', NULL, 'Samsun Community Center', NULL, NULL, 'Hall 1', '35000', NULL, NULL, NULL, NULL, 'img\\feature-image\\samsun_community_center_f1.jpg', 'img\\feature-image\\samsun_community_center_f2.jpg', 'img\\feature-image\\samsun_community_center_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (22, 9, 'img\\vendor-profile\\party_house.jpg', NULL, 'Party House', NULL, NULL, 'Hall 1', '30000', NULL, NULL, NULL, NULL, 'img\\feature-image\\party_house_f1.jpg', 'img\\feature-image\\party_house_f2.jpg', 'img\\feature-image\\party_house_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (23, 9, 'img/vendor-profile/abacus_conventional_hall.jpg', 'img/vendor-logo/abacus_conventional_hall.jpg', 'Abacus Conventional Hall', 'It\'s a one stop service provider for your wedding, reception, Corporate Meetings and many more at a affordable price. State of art interior & facilities.', NULL, 'Hall 1', '180750', NULL, NULL, NULL, NULL, 'img/feature-image/abacus_conventional_hall_f1.jpg', 'img/feature-image/abacus_conventional_hall_f2.jpg', 'img/feature-image/abacus_conventional_hall_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (24, 9, 'img\\vendor-profile\\ananda_community_center.jpg', NULL, 'Ananda Community Center', NULL, NULL, 'Hall 1', '50000', NULL, NULL, NULL, NULL, 'img\\feature-image\\ananda_community_center_f1.jpg', 'img\\feature-image\\ananda_community_center_f2.jpg', 'img\\feature-image\\ananda_community_center_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (25, 9, 'img\\vendor-profile\\bilash_bhaban_community.jpg', NULL, 'Bilash Bhaban Community Centre', NULL, NULL, 'Hall', '30000', NULL, NULL, NULL, NULL, 'img\\feature-image\\bilash_bhaban_community_f1.jpg', 'img\\feature-image\\bilash_bhaban_community_f2.jpg', 'img\\feature-image\\bilash_bhaban_community_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (26, 9, 'img\\vendor-profile\\appayon_community_center_2.jpg', NULL, 'Appayon Community Center 2', NULL, NULL, 'Hall', '30000', NULL, NULL, NULL, NULL, 'img\\feature-image\\appayon_community_center_2_f1.jpg', 'img\\feature-image\\appayon_community_center_2_f2.jpg', 'img\\feature-image\\appayon_community_center_2_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (27, 9, 'img\\vendor-profile\\kazi_community_center.jpg', NULL, 'Kazi Community Center', NULL, NULL, 'Hall', '28000', NULL, NULL, NULL, NULL, 'img\\feature-image\\kazi_community_center_f1.jpg', 'img\\feature-image\\kazi_community_center_f2.jpg', 'img\\feature-image\\kazi_community_center_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (28, 9, 'img\\vendor-profile\\mirpur_convention_center.jpg', NULL, 'Mirpur Convention Center', NULL, NULL, 'Hall 1', '50000', NULL, NULL, NULL, NULL, 'img/feature-image/mirpur_convention_center_f1.jpg', 'img/feature-image/mirpur_convention_center_f2.jpg', 'img/feature-image/mirpur_convention_center_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (29, 9, 'img\\vendor-profile\\atn_party_house.jpg', NULL, 'ATN Party House', NULL, NULL, 'Hall', '45000', NULL, NULL, NULL, NULL, 'img\\feature-image\\atn_party_house_f1.jpg', 'img\\feature-image\\atn_party_house_f2.jpg', 'img\\feature-image\\atn_party_house_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (30, 9, 'img\\vendor-profile\\hill_town.jpg', NULL, 'Hill Town Convention & Community Center', NULL, NULL, 'Hall', '20000', NULL, NULL, NULL, NULL, 'img/feature-image/hill_town_f1.jpg', 'img/feature-image/hill_town_f2.jpg', 'img/feature-image/hill_town_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (31, 9, 'img\\vendor-profile\\white_hall.jpg', NULL, 'White Hall', 'White Hall convention centre - a home of catering and party solution.', NULL, 'Hall', '60000', NULL, NULL, NULL, NULL, 'img/feature-image/white_hall_f1.jpg', 'img/feature-image/white_hall_f2.jpg', 'img/feature-image/white_hall_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (33, 9, 'img\\vendor-profile\\sayeedana_community_center.jpg', NULL, 'Sayeedana Community Center', NULL, NULL, 'Hall', '40000', NULL, NULL, NULL, NULL, 'img\\feature-image\\sayeedana_community_center_f1.jpg', 'img\\feature-image\\sayeedana_community_center_f2.jpg', 'img\\feature-image\\sayeedana_community_center_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (34, 9, 'img\\vendor-profile\\shimanto_convention_center.jpg', NULL, 'Shimanto convention centre', NULL, NULL, 'Hall', '30000', NULL, NULL, NULL, NULL, 'img\\feature-image\\shimanto_convention_center_f1.jpg', 'img\\feature-image\\shimanto_convention_center_f2.jpg', 'img\\feature-image\\shimanto_convention_center_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (35, 9, 'img\\vendor-profile\\emmanuelle\'s_convention.jpg', NULL, 'Emmanuelle\'s convention center', NULL, NULL, 'Hall', '90000', NULL, NULL, NULL, NULL, 'img\\feature-image\\emmanuelle\'s_convention_f1.jpg', 'img\\feature-image\\emmanuelle\'s_convention_f2.jpg', 'img\\feature-image\\emmanuelle\'s_convention_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (36, 9, 'img\\vendor-profile\\new_dhaka_convention_center.jpg', NULL, 'New Dhaka Convention Center', NULL, NULL, 'Hall', '60000', NULL, NULL, NULL, NULL, 'img/feature-image/new_dhaka_convention_center_f1.jpg', 'img/feature-image/new_dhaka_convention_center_f2.jpg', 'img/feature-image/new_dhaka_convention_center_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (37, 9, NULL, NULL, 'The Cool House', NULL, NULL, 'Hall', '25000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (38, 9, 'img/vendor-profile/isti_kutum_community_center.jpg', NULL, 'Isti Kutum Community Center', NULL, NULL, 'Hall', '48000', NULL, NULL, NULL, NULL, 'img/feature-image/isti_kutum_community_center_f1.jpg', 'img/feature-image/isti_kutum_community_center_f1.jpg', 'img/feature-image/isti_kutum_community_center_f1.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (39, 9, 'img\\vendor-profile\\sea_shell_party_center.jpg', NULL, 'Sea Shell Party Center', NULL, NULL, 'Hall', '60000', NULL, NULL, NULL, NULL, 'img\\feature-image\\sea_shell_party_center_f1.jpg', 'img\\feature-image\\sea_shell_party_center_f2.jpg', 'img\\feature-image\\sea_shell_party_center_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (40, 9, 'img\\vendor-profile\\new_chilling_part_center.jpg', NULL, 'New Chilling Party Center', NULL, NULL, 'Hall', '40000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (41, 15, 'img/vendor-profile/make_it_up_by_farzana_islam.jpg', 'img/vendor-logo/make_it_up_by_farzana_islam.jpg', 'Make It Up By Farzana Islam', '“Makeup” is a magic spell which will only enhance your own beauty and “Make It Up” can be a perfect spell factory for you!', NULL, 'Simple Make over', '8000', NULL, NULL, NULL, NULL, 'img/feature-image/make_it_up_by_farzana_islam_f1.jpg', 'img/feature-image/make_it_up_by_farzana_islam_f2.jpg', 'img/feature-image/make_it_up_by_farzana_islam_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (42, 11, 'img\\vendor-profile\\fazlur_rahman.jpg', 'img\\vendor-logo\\fazlur_rahman.jpg', 'Fazlur Rahman Catering', '\" A Traditional Caterer of Bangladesh \". More than 82 Year\'s ago we started our journey in food industry Since 1934.We are expert in all kinds of Catering.', NULL, 'Set Menu', '550', NULL, NULL, NULL, NULL, 'img\\feature-image\\fazlur_rahman_f1.jpg', 'img\\feature-image\\fazlur_rahman_f2.jpg', 'img\\feature-image\\fazlur_rahman_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (43, 13, 'img\\vendor-profile\\wahid_And_decorators.jpg', 'img\\vendor-profile\\wahid_And_decorators.jpg', 'Wahid And Decorators', NULL, NULL, 'Package 1', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (44, 13, 'img\\vendor-profile\\subasa_decorator.jpg', 'img\\vendor-profile\\subasa_decorator.jpg', 'Subasa Decorator', NULL, NULL, 'Package 1', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (45, 16, 'img\\vendor-profile\\cake_paradise.jpg', 'img\\vendor-logo\\cake_paradise.jpg', 'Cake Paradise', 'Welcome to the Promised Land of Cakes. We are Cake Paradise and we are here with the combination of ever admirable tasty Cakes within affordable cost and best quality.\r\n', NULL, 'Wedding/Anniversary', '899', 'Birthday', '899', 'Holud', '899', 'img\\feature-image\\cake_paradise_f1.jpg', 'img\\feature-image\\cake_paradise_f2.jpg', 'img\\feature-image\\cake_paradise_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (46, 17, 'img/vendor-profile/karuka_mehendi.jpg', NULL, 'Karuka Mehendi', 'It seems like a dream come true, when we finally decided to open up a page (Karuka Mehendi) at 1014 which can give our passion a name of business or some sorta earning source which is not only a work, but an excitement for each time we get to do henna on people. Each and every hand came up for doing henna seemed like a blank canvas full of dreams, and we get to color it. We, two people collaborated and work here from 8 years. But the designs grew inside a long time ago, when getting no canvas, no henna, it was just a blank paper where we kinda drew with a black pen. Then after getting the first henna to before opening our page time, we got to know each other passionately for henna the same and opened it to give the passion a name too. Our motto is to draw henna on dreamy girls, child, ladies and all sorta humans out there who would love to get henna on them to get them happy and make people know that one henna can do magic to human mind, every festival and it can get colors to a blank life.\r\n\r\nDear Concern, We have 8 years of working experience in this sector, we try to take sure the best quality while serving our clients. We usually work inside Dhaka and don\'t serve outside Dhaka as our family members don\'t allow us to do so. Our working hour is from 10 am-7 pm.\r\nWe take advance payment (Via Bkash) before taking any appointment as this is our business policy and we follow our business policy very strictly because we want to ensure best service, A client has to pay taka 500 (Booking Money) while doing any reservation.\r\n', NULL, 'Non-Bridal', '150', 'Semi-Bridal', '1500', 'Bridal', '2000', 'img/feature-image/karuka_mehendi_f1.jpg', 'img/feature-image/karuka_mehendi_f2.jpg', 'img/feature-image/karuka_mehendi_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (47, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Mawlana Shahabuddin', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (48, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Mohamad Al-amin', 'd', 'd', 'Minimum Charges', '1', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, '2019-04-15 16:23:08');
INSERT INTO `vendors` VALUES (49, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Mustakin Alim', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (50, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Mawlana Jamal Uddin', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (51, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Shahin Alam', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (52, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Aminul Ehsan', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (53, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Jashim', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (54, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Masbahul Alam', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (55, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Jakaria', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (56, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Wahab Uddin', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (57, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Hafiz Abu Mohammad Redwan', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (58, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Iqbal Hossain', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (59, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Mohammad Yakub Ali', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (60, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Mohammad Idris', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (61, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Ibrahim Khalil', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (62, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Mohammad Ashrafuzzaman', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (63, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Mohammad Abdullah', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (64, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Mohammad Sohel', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (65, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Mohamad Ruhul Amin', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (66, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Kazi Maowlana Mohammad Alamgir Hossain', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (67, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Abu Bakar Zakari', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (68, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Sayed Abdul Mannan', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (69, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Hafiz Abu Mohammad Redwan', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (70, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Moshiur Rahman', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (71, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Mohammad Ali', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (72, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Mohammad Hafizur Islam', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (73, 18, 'img\\vendor-profile\\default_kazi.jpg', 'img\\vendor-profile\\default_kazi.jpg', 'Mohammad Saidur Rahman', '', NULL, 'Minimum Charges', '1250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (74, 10, 'img\\vendor-profile\\dj_nirjhar.jpg', NULL, 'DJ Nirjhar', NULL, NULL, 'Per Event', '20000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dj_nirjhar_f1.jpg', 'img\\feature-image\\dj_nirjhar_f2.jpg', 'img\\feature-image\\dj_nirjhar_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (75, 10, 'img\\vendor-profile\\dj_jmn.jpg', NULL, 'DJ Jmn Jaman', NULL, NULL, 'Per Event', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dj_jmn_f1.jpg', 'img\\feature-image\\dj_jmn_f2.jpg', 'img\\feature-image\\dj_jmn_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (76, 10, 'img\\vendor-profile\\dj_rafat.jpg', NULL, 'DJ Rafat', NULL, NULL, 'Per Event', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dj_rafat_f1.jpg', 'img\\feature-image\\dj_rafat_f2.jpg', 'img\\feature-image\\dj_rafat_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (77, 10, 'img\\vendor-profile\\dj_shahriar.jpg', NULL, 'DJ Shahriar', NULL, NULL, 'Per Event', '8000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dj_shahriar_f1.jpg', 'img\\feature-image\\dj_shahriar_f2.jpg', 'img\\feature-image\\dj_shahriar_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (78, 10, 'img\\vendor-profile\\dj_niloy_ahasan.jpg', NULL, 'DJ Niloy Ahasan', NULL, NULL, 'Per Event', '20000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dj_niloy_ahasan_f1.jpg', 'img\\feature-image\\dj_niloy_ahasan_f2.jpg', 'img\\feature-image\\dj_niloy_ahasan_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (79, 10, 'img\\vendor-profile\\dj_kayser.jpg', NULL, 'DJ Kayser', NULL, NULL, 'Per Event', '12000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dj_kayser_f1.jpg', 'img\\feature-image\\dj_kayser_f2.jpg', 'img\\feature-image\\dj_kayser_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (80, 10, 'img\\vendor-profile\\dj_rubel.jpg', NULL, 'DJ Rubel (NAM)', NULL, NULL, 'Per Event', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dj_rubel_f1.jpg', 'img\\feature-image\\dj_rubel_f2.jpg', 'img\\feature-image\\dj_rubel_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (81, 10, 'img\\vendor-profile\\dj_shipon.jpg', NULL, 'DJ Shipon', NULL, NULL, 'Per Event', '7000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dj_shipon_f1.jpg', 'img\\feature-image\\dj_shipon_f2.jpg', 'img\\feature-image\\dj_shipon_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (82, 15, 'img\\vendor-profile\\dreams_hair_&_beauty_corner.jpg', 'img\\vendor-profile\\dreams_hair_&_beauty_corner.jpg', 'Dreams Hair & Beauty Corner', NULL, NULL, 'Bridal', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dreams_hair_&_beauty_corner_f1.jpg', 'img\\feature-image\\dreams_hair_&_beauty_corner_f2.jpg', 'img\\feature-image\\dreams_hair_&_beauty_corner_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (83, 11, 'img\\vendor-profile\\tf_catering.jpg', NULL, 'TF Catering', NULL, NULL, 'Menu', '680', 'Platter', '520', NULL, NULL, 'img\\feature-image\\tf_catering_f1.jpg', 'img\\feature-image\\tf_catering_f2.jpg', 'img\\feature-image\\tf_catering_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (84, 11, 'img\\vendor-profile\\nuruzzaman_catering_service.jpg', NULL, 'Nuruzzaman Catering Service', NULL, NULL, 'Menu', '520', NULL, NULL, NULL, NULL, 'img\\feature-image\\nuruzzaman_catering_service_f1.jpg', 'img\\feature-image\\nuruzzaman_catering_service_f2.jpg', 'img\\feature-image\\nuruzzaman_catering_service_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (85, 12, 'img\\vendor-profile\\wedd_life.jpg', 'img\\vendor-logo\\wedd_life.jpg', 'Wedd Life Photography', '.', 'tghdf', 'Combo', '20000', 'Bronze', '10000', 'Silver', '35000', 'img\\feature-image\\wedd_life_f1.jpg', 'img\\feature-image\\wedd_life_f2.jpg', 'img\\feature-image\\wedd_life_f3.jpg', NULL, 0, NULL, '2019-04-18 13:41:59');
INSERT INTO `vendors` VALUES (86, 12, 'img\\vendor-profile\\retro_focus.jpg', NULL, 'Retro Focus Photography', '\"Retro Focus Photography\" believes in Memories and so that works hard to capture your valuable moments with passion and love. We believe in farming memories and moments that can\'t be reproduced. Let us help you make the most of your upcoming event.\r\n', NULL, 'Photography', '12000', 'Combo', '9000', NULL, NULL, 'img\\feature-image\\retro_focus_f1.jpg', 'img\\feature-image\\retro_focus_f2.jpg', 'img\\feature-image\\retro_focus_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (87, 12, 'img\\vendor-profile\\wedding_diary.jpg', 'img\\vendor-logo\\wedding_diary.jpg', 'Wedding Diary', 'Wedding Diary is a team of experienced professional.. photographer, cinematographer, photo-book experts. \r\n\r\nThere isn\'t an event we won\'t or can\'t create for you. Wherever your imagination may take you we have resources and the know how to design & implement your event. Creating intimate, authentic stories of people\'s life are the heart of the Wedding Diary\'s dynamic photographers and cinematographers. They will capture the spirit, fun, joy and beauty of your day. Our Designers are not here to make decisions for you, but to guide and assist you in making informed decisions. We want you to host a beautiful and distinctive event with no worries.\r\nWedding Diary believes it comes down to trust. \'Trust is important in any relationship. You should feel completely comfortable with the photographer and designer and feel assured that he or she completely understands your needs,\' says Prito Reza the team leader of Wedding Diary. \"Your personalities should match. And then let your mind wander - shoot for the stars...\"\r\n\r\nWedding Diary has been serving as a reputed photography and cinematography, audio-visual production firm in Bangladesh for last ten years. Wedding Diary selected as one of the enlisted company at top two-community club in Dhaka city, BAF Shaheen Hall and Falcon Hall, regulated by Bangladesh Air Force. \r\n\r\nWEDDING DIARY is gearing up for the next phase of branding to have Bangladesh national cricket team’s captain Mushfiqur Rahim as Brand Ambassador with a focus on the youth - the future of Bangladesh. The brand has become synonymous with style, design, creation and trust by its experienced team of professional photographer, cinematographer experts.\r\n\r\nWedding Diary create intimate works of art--timeless and striking images-illustrating the special moments and details of an event. As events unfold, they capture the day using a variety of styles.\r\nTerms and Condition: Everyone wants to capture the wedding day as a story and Wedding Divine is here to make your dream come true. We provide custom wedding services for the bride and groom who are looking for something more artistic, more natural, and more original than the standard, traditional wedding photography.\r\n\r\n\r\n\r\nOur clients put high priority on preserving their wedding day memories in photographs in the form of a wedding story. We strive to provide a service and product which are unique and reasonably priced.\r\nTerms and Condition:\r\nOur packages are customarily designed keeping our client’s capability in mind but the price planning may vary due to event size, details and location.\r\n•	50% advance for booking and rest have to be given on soft copy delivery.\r\n•	Duration can be negotiated depending on special circumstances and availability.\r\n•	Additional hour rate for per photographer in an event is 2000 tk and for per videographer is 2000tk\r\n•	Need 30 working days for softcopy delivery.\r\n•	Xpress delivery allows you to get delivery within a week by paying by 20% extra of the selected package.\r\n•	Photo print-Token system\r\n•	Any re-edit issue has to notify within 10 days of soft copy delivery\r\n•	 If you want your RAW footage of videography then have to give device and after 7days of softcopy delivery all footage will be removed from office. If you are not able to collect it Wedding Diary authority will not responsible for this.\r\n•	20% refund for booking cancel, if they noted us Before 30days of the program.\r\n•	All packages are customized for Dhaka city only. For outside of Dhaka extra charges will be added and also have to arrange Transportation, Food etc.\r\n•	We can custom tailor a package to suit your budget.\r\n', NULL, 'Photography', '12000', 'Cinamatography', '12000', '', '', 'img\\feature-image\\wedding_diary_f1.jpg', 'img\\feature-image\\wedding_diary_f2.jpg', 'img\\feature-image\\wedding_diary_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (88, 12, 'img\\vendor-profile\\wed_mom_profile.jpg', 'img\\vendor-logo\\wed_mom_logo.jpg', 'Wedding Moments', 'In WeddingMoments™ we believe that photography is not just about taking pictures, it’s about painting with light. Thus, we try our best to paint the moments of your precious day so that you can cherish them forever!\r\n\r\n', NULL, 'Photography', '20000', 'Cinamatography', '20000', 'Exclusive Photography(Tanvir Ali)', '40000', 'img\\feature-image\\wedding_moments_f1.jpg', 'img\\feature-image\\wedding_moments_f2.jpg', 'img\\feature-image\\wedding_moments_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (89, 12, 'img\\vendor-profile\\rp_profile.jpg', 'img\\vendor-logo\\rp_logo.jpg', 'Reminiscence Photography', 'Reminiscence Photography is a boutique documentary wedding photography service with a pursuit of\r\ntrue emotional moments.\r\nWe have 10 years experience of wedding photography in Bangladesh, India, Sri Lanka & UK. ', NULL, 'Photography', '40000', '', '', '', '', 'img\\feature-image\\rem_ph_f1.jpg', 'img\\feature-image\\rem_ph_f2.jpg', 'img\\feature-image\\rem_ph_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (90, 12, 'img\\vendor-profile\\wd_logo.jpg', 'img\\vendor-logo\\wd_logo.jpg', 'Wedding Divine', 'Everyone wants to capture the wedding day as a story and Wedding Divine is here to make your dream come true. We provide custom wedding services for the bride and groom who are looking for something more artistic, more natural, and more original than the standard, traditional wedding photography. Our clients put high priority on preserving their wedding day memories in photographs in the form of a wedding story. We strive to provide a service and product which are unique and reasonably priced. <br/>\r\n* Terms and conditions: Please contact us for customized packages of multiply days.<br>\r\n- Rates are not negotiable \r\n</br>- All services are venue oriented. Photographer/s will work only in the venue and nowhere else\r\n</br>- Clients have to pick the soft copies and the prints from the photographer. soft copies and the prints from the photographer\r\n</br>- Ensure that there is adequate light where the bride, groom and guests will be sitting. (Lighting only the pillar/back of the stage and not having proper light on the face will result in light imbalance)\r\n</br>- It’s a must to come to our office for a detail discussion of the event for the best output.\r\n</br>- 50% of payment is required in advance (at least 30 days prior to your event/s) for booking and the rest 50% is payable on the day of Event.\r\n</br>- It may take around 04/06 weeks to deliver all the processed/edited photos and video. Delivery must be taken within one month after the event.\r\n</br>- Client has to select the photos, which will be printed.\r\n</br>- Both Wedding Divine and the client reserve the Copyright of all the images of the event.\r\n</br>- Wedding Divine has the right to use only selected few best photos of the event/s for online or any other promotional activities with the permission of the client.\r\n</br>- Booking money is non-refundable but may rescheduled under special circumstances and on availability.\r\n</br>- If the event is postponed, a prior notice is required within at least 60 days before the event otherwise 50% of the payment will not be refunded.\r\n</br>- For outside of Dhaka city corporation client must bear both transport and accommodation expenses.\r\n</br>-After 11PM client must provide transport to both photographers and cinematographers/videographers.\r\n\r\n', NULL, 'Photography', '10000', 'Combo', '31000', 'Pre/Post Wedding Photography', '10000', 'img\\feature-image\\wedding_devine_f1.jpg', 'img\\feature-image\\wedding_devine_f2.jpg', 'img\\feature-image\\wedding_devine_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (91, 15, 'img\\vendor-profile\\manami_profile.jpg', 'img\\vendor-logo\\manami_logo.jpg', 'Manami Elahi - Makeup Artistry', NULL, NULL, 'Bridal Makeup', '15000', 'Akth Makeup', '7000', 'Party Makeup', '3500', 'img\\feature-image\\manami_f8.jpg', 'img\\feature-image\\manami_f5.jpg', 'img\\feature-image\\manami_f10.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (92, 17, 'img\\vendor-profile\\mehendiByKhowab_profile.jpg', 'img\\vendor-logo\\mehendiByKhowab_logo.jpg', 'Mehendi by khowab ', 'I am Nahar Nabila, Professional Mehendi Artist,  Mehendi is my hobby.\r\n\r\nTerms and condition: home service charge 500 tk extra.', NULL, 'Bridal (Hand)', '2500', 'Bridal (Feet)', '500', 'Bridal Gorgeous (Hand & Feet)', '5000', 'img\\feature-image\\mehendiBykhowab_f1.jpg', 'img\\feature-image\\mehendiBykhowab_f2.jpg', 'img\\feature-image\\mehendiBykhowab_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (93, 13, 'img\\vendor-profile\\alpona_profile.jpg', 'img\\vendor-logo\\alpona_logo.jpg', 'Alpona Event Management', ' (#ডেকোরেশন)\r\n\r\nবিয়ে নিয়ে আপনার ভাবনাটা ঠিক কেমন? রুপকথার কোন গল্পের মত? স্বপ্নটা আকাশ ছোঁয়া হলেও সাধ্য টাও যে নাগালের মধ্যেই থাকা চাই। তাই আপনার কল্পনার সাথে একটুখানি আল্পনা মিশিয়ে মাত্র ১৫০০০ টাকা থেকে শুরু করে আমারা করে থাকি আপনার স্বপ্নের আয়োজন।\r\n\r\n- ছোটবেলার গল্পের বইয়ের সাদা ঘোড়ায় চড়ে রাজপুত্র আসা আর পালকিতে করে বউ নিয়ে যাওয়ার গল্পগুলো পড়তে পড়তে আপনার মনেও কি ঠিক তেমনই বিয়ের স্বপ্ন তৈরি হয়েছে? \r\nকোন অসুবিধা নেই। আল্পনা ইভেন্ট ম্যানেজমেন্ট আপনার সাথেই আছে।\r\n- অল্প বাজেটের প্রোগ্রাম হওয়াতে বাসার ছাদেই বিয়ের অনুষ্ঠান করতে চাচ্ছেন? ভাবছেন এত ছোট যায়গা কিভাবে সাজানো যায়?\r\nকোন চিন্তা নেই। আল্পনা আপনার বাসার ছাদের ছোট যায়গাটাকেই মহল বানিয়ে দিবে।\r\n- আপনার বিয়ের ভেন্যু অনেক বড় কোন প্লেসে? এত বড় জায়গা কিভাবে সাজানো যায় বুঝতে পারছেন না? \r\nকোন সমস্যা নাই। আল্পনার দক্ষ টিম আপনার সেই ভেন্যুকে প্রাসাদ বানিয়ে দিবে। \r\n- খোলা কোন জায়গায় আপনার বিয়ের আয়োজন করার ইচ্ছা কিন্তু কিভাবে করবেন বুঝতে পারছেন না?\r\nচিন্তার কোন কারণ নেই, আল্পনা আছে আপনাদের সাথে। ভেন্যু ঠিক করে আপনার ধারণার থেকেও সুন্দর করে সাজিয়ে দিবে। \r\n- বর কনে ঢুকার এন্ট্রি গেটটা একটু অন্য রকম করতে চান? কেউ হয়ত ফুল দিয়ে বা কেউ হয়ত লাইট দিয়ে সাজাতে চান। \r\nআপনি শুধু আপনার ইচ্ছাটা জানান আমাদেরকে। আমরা আমাদের মেধা দিয়ে সাজিয়ে দিব আপনার অনুষ্ঠান।\r\n- বিয়েতে একটা ফটো বুথ তো চাই ই চাই। সেই সাথে বর কনের খাবার টেবিলটাও হওয়া চাই স্পেশাল। সবথেকে ইউনিক ডিজাইনের ডেকোরেশনের জন্য আল্পনার জুড়ি মেলা ভার। \r\nআপনাদের এইরকম ছোট খাট, খুটি নাটি হাজারো চিন্তা বা ইচ্ছা আমাদের উপর নিশ্চিতে ছেড়ে দিতে পারেন। বিয়ের আয়োজনে বর্তমানে আমরাই লিডিং পজিশনে আছি। আপনাদের পছন্দের যেকোন ডিজাইন আমরা মেধা দিয়ে, শ্রম দিয়ে সাজিয়ে দিব সঠিক সময়ের মধ্যে। আল্পনা ইভেন্ট ম্যানেজমেন্টের যেকোন আয়োজন সম্পর্কে জানতে আমাদের সাথে যোগাযোগ করুন।\r\n#alponaeventmanagement\r\n#dreamwedding\r\n#urdreampartner\r\n#reliefweddingstress\r\n#onestopsolution', NULL, 'Regular Package', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\alpona_f1.jpg', 'img\\feature-image\\alpona_f2.jpg', 'img\\feature-image\\alpona_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (94, 12, 'img\\vendor-profile\\photoholic_profile.jpg', 'img\\vendor-logo\\photoholic_logo.jpg', 'PHOTOHOLLIC', 'PHOTOHOLIC is driven by the fact “client’s expectation and budget limitation is the first thing ”. Thats\r\nwhy our primary concern is to know how our clients want to see their event and what is the best creative\r\nthing we can provide within their limitations.', NULL, 'Regular Package', '8000', 'Photography with CEO', '17490', 'Photography with Cinematography', '19990', 'img\\feature-image\\photoholic_f1.jpg', 'img\\feature-image\\photoholic_f2.jpg', 'img\\feature-image\\photoholic_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (95, 12, 'img/vendor-profile/rifat_profile.jpg', 'img/vendor-logo/rifat_logo.jpg', 'RIFAT REZA', NULL, NULL, 'Package-1', '15000', '', '', '', '', 'img/feature-image/rifat_f1.jpg', 'img/feature-image/rifat_f2.jpg', 'img/feature-image/rifat_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (96, 13, 'img/vendor-profile/red_elegance_profile.jpg', 'img/vendor-logo/red_elegance_logo.jpg', 'Red Elegance Event Management', 'You imagine We create', NULL, 'Regular Package', '10000', '', '', '', '', 'img\\feature-image\\red_elegance_f1.jpg', 'img\\feature-image\\red_elegance_f2.jpg', 'img\\feature-image\\red_elegance_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (97, 13, 'img/vendor-profile/new_puspo_valley_profile.jpg', 'img/vendor-logo/new_puspo_valley_logo.jpg', 'New Puspo Valley', '', NULL, 'Regular Package', '10000', '', '', '', '', 'img\\feature-image\\new_puspo_valley_f1.jpg', 'img\\feature-image\\new_puspo_valley_f2.jpg', 'img\\feature-image\\new_puspo_valley_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (99, 11, 'img\\vendor-profile\\hasan-catering-service.jpg', 'img\\vendor-logo\\vendor_logo_default.jpg', 'Hasan Catering Service', NULL, NULL, 'Per Plate', '520', NULL, NULL, NULL, NULL, 'img\\feature-image\\hasan_catering_f1.jpg', 'img\\feature-image\\hasan_catering_f2.jpg', 'img\\feature-image\\hasan_catering_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (100, 13, 'img\\vendor-profile\\dazzling-decor-by-shabiha.jpg', 'img\\vendor-logo\\dazzling-decor-by-shabiha.jpg', 'Dazzling Decor By Shabiha', 'Dazzling Decor is a complete kit for any party. Our mission is \"Let\'s make it, happen together\". We will create your special day, more special with your thought/wish & our dedication plus hard work.\r\n', NULL, 'Regular Package', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\dazzling-decor-by-shabiha_f1.jpg', 'img\\feature-image\\dazzling-decor-by-shabiha_f2.jpg', 'img\\feature-image\\dazzling-decor-by-shabiha_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (101, 13, 'img\\vendor-profile\\elation.jpg', 'img\\vendor-logo\\elation_logo.jpg', 'Elation', 'Starting our journey from 1st January, 2015, we are continuously trying to improve more and more. We believe in \"Quality before Price\" and we also believe that Everybody should be able to get service from event planners. That is why we try to keep things reasonable but Quality Controlled. ^_ We get Compliments that we give more than expected. Compare with others and see what you can get from us.:D Get idea about us, read our reviews, check our albums. we look forward to provide service at our best, because your satisfaction comes first... :D', NULL, 'Birthday Package', '14000', 'Wedding Package', '20000', NULL, NULL, 'img\\feature-image\\elation_f1.jpg', 'img\\feature-image\\elation_f2.jpg', 'img\\feature-image\\elation_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (102, 13, 'img\\vendor-profile\\sygmaz.jpg', 'img\\vendor-logo\\sygmaz.jpg', 'Sygmaz', 'We design and execute decor for venues for any social event... we also have a store selling flowers and gift items, including wedding dalas and holud goinas.', NULL, 'Regular Package', '200000', NULL, NULL, NULL, NULL, 'img\\feature-image\\sygmaz_f1.jpg', 'img\\feature-image\\sygmaz_f2.jpg', 'img\\feature-image\\sygmaz_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (103, 13, 'img\\vendor-profile\\wedding_bees.jpg', 'img\\vendor-logo\\wedding_bees.jpg', 'Wedding Bees By Bitasta Ahmed', 'We are here to make your dreams real', NULL, 'Regular Package', '25000', NULL, NULL, NULL, NULL, 'img\\feature-image\\wedding_bees_f1.jpg', 'img\\feature-image\\wedding_bees_f2.jpg', 'img\\feature-image\\wedding_bees_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (104, 15, 'img\\vendor-profile\\smj_bridal_makeover.jpg', 'img\\vendor-logo\\smj_bridal_makeover.jpg', 'SMJ Bridal Makeover', NULL, NULL, 'Regular Package', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\smj_bridal_makeover_f1.jpg', 'img\\feature-image\\smj_bridal_makeover_f2.jpg', 'img\\feature-image\\smj_bridal_makeover_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (105, 15, 'img\\vendor-profile\\sakiron\'s_makeover_salon.jpg', 'img\\vendor-logo\\sakiron\'s_makeover_salon.jpg', 'Sakiron\'s Makeover Salon', NULL, NULL, 'Regular Makeover', '8000', 'Party Makeover', '2000', NULL, NULL, 'img\\feature-image\\sakiron\'s_makeover_salon_f1.jpg', 'img\\feature-image\\sakiron\'s_makeover_salon_f2.jpg', 'img\\feature-image\\sakiron\'s_makeover_salon_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (106, 15, 'img\\vendor-profile\\fabulous_glamour\'s_beauty_parlour.jpg', 'img\\vendor-logo\\fabulous_glamour\'s_beauty_parlour.jpg', 'Fabulous Glamour\'s Beauty Parlour', 'This is a full-service beauty salon dedicated to consistently providing high customer satisfaction by rendering excellence in service, providing quality.', NULL, 'Bridal Makeup', '7000', NULL, NULL, NULL, NULL, 'img\\feature-image\\fabulous_glamour\'s_beauty_parlour_f1.jpg', 'img\\feature-image\\fabulous_glamour\'s_beauty_parlour_f2.jpg', 'img\\feature-image\\fabulous_glamour\'s_beauty_parlour_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (107, 17, 'img\\vendor-profile\\alpona_mehedi.jpg', 'img\\vendor-logo\\alpona_mehedi.jpg', 'Alpona Mehedi', NULL, NULL, 'Regular Package', '2000', NULL, NULL, NULL, NULL, 'img\\feature-image\\alpona_mehedi_f1.jpg', 'img\\feature-image\\alpona_mehedi_f2.jpg', 'img\\feature-image\\alpona_mehedi_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (108, 12, 'img\\vendor-profile\\mat_profile.jpg', 'img\\vendor-logo\\mat_logo.jpg', 'MAT Photography', 'MAT Photography started its journey back in 2014 as a small firm of Wedding Photography. MAT Photography is named by the name of our chief photographer “M.A. Tonoy”. It’s just an abbreviation of the full name. \r\nLike most of the photographers, all over the world, M.A. Tonoy also started photography as a hobby, he was very much interested in “Conceptual” and “Dark Art Photography”. He also won a lot of prices in “Art Photography” from various prestigious organisations like “BPS”. He is also the President of “Online Photography School BD” one of the reputed online base photography school in Bangladesh and the first group who arranged mobile photography exhibition in Drik Gallery titled “I Shoot Manual with Mobiles”. \r\nThough M.A. Tonoy has more interest in Art Photography rather than wedding and portrait photography, he started wedding photography for financial reasons, then after he found wedding photography interesting and still working to take the wedding photography of Bangladesh to the next level. \r\nEvery photographer of “MAT Photography” like to play with lights, you can find the lighting dimensions in our photography which gives you the pleasure to your eyes. You can find the attachment of love between Bride and Groom at the same time keeping the quality lighting and Art. We see our individual clients as a new scope of discovering new people. We love to discover the emotions and bring their selves in their portraits. \r\nWe have covered more than 500 events already till March 2018 and still counting.\r\n', NULL, 'Combo Package', '12999', 'Single Photo', '7500', '', '', 'img\\feature-image\\mat_f1.jpg', 'img\\feature-image\\mat_f2.jpg', 'img\\feature-image\\mat_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (109, 12, 'img\\vendor-profile\\jolchap_profile.jpg', 'img\\vendor-logo\\jolchap_logo.jpg', 'জলছাপ', 'Chief Photographer: Dr. Nipun Hazra. \r\nWe provide all sorts of professional photography & cinematography at an affordable price that include wedding and engagement, family event, corporate event, food, interior and outdoor portrait.\r\n', NULL, 'Package 1', '16000', '', '', '', '', 'img\\feature-image\\jolchap_f1.jpg', 'img\\feature-image\\jolchap_f2.jpg', 'img\\feature-image\\jolchap_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (110, 12, 'img\\vendor-profile\\wm_by_an_profile.jpg', 'img\\vendor-logo\\wm_by_an_logo.jpg', 'Wedding Moments By Afzal Nazim', 'We started our journey at March 1st of 2011. Our goal was/is to give our client some precious moments captured, moments those are not made by any fake scene, the moments that are there in candid time. Be with us and let us give you the moments which will last with you forever', NULL, 'Cinematography', '6000', 'Photography', '10000', '', '', 'img\\feature-image\\wm_by_an_f1.jpg', 'img\\feature-image\\wm_by_an_f2.jpg', 'img\\feature-image\\wm_by_an_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (111, 13, 'img\\vendor-profile\\blitz.jpg', 'img\\vendor-profile\\blitz.jpg', 'Blitz', 'Blitz is a full-service custom event and wedding planning company which specializes in making your event stylish and memorable.', NULL, 'Starting Package', '50000', NULL, NULL, NULL, NULL, 'img\\feature-image\\blitz_f1.jpg', 'img\\feature-image\\blitz_f2.jpg', 'img\\feature-image\\blitz_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (113, 13, 'img\\vendor-profile\\elegant_es.jpg', 'img\\vendor-profile\\elegant_es.jpg', 'Elegant Event Solutions\r\n', 'Event Management Service.We are enlisted @Army Golf garden,Shenamaloncho & Trust Milonayotan.We create,you celebrate.\r\n', NULL, 'Regular Package', '25000', NULL, NULL, NULL, NULL, 'img\\feature-image\\elegant_es_f1.jpg', 'img\\feature-image\\elegant_es_f2.jpg', 'img\\feature-image\\elegant_es_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (114, 13, 'img\\vendor-profile\\exclusive.jpg', 'img\\vendor-profile\\exclusive.jpg', 'Exclusive Wedding Decor\r\n', 'If you need beautiful, different and creative ideas for your event than Contact with us..\r\n', NULL, 'Regular Package', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\exclusive_f1.jpg', 'img\\feature-image\\exclusive_f2.jpg', 'img\\feature-image\\exclusive_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (115, 13, 'img\\vendor-profile\\liedatan.jpg', 'img\\vendor-profile\\liedatan.jpg', 'IIEDATAN EVENTS\r\n', 'Iiedatan is an art agency. We love to do design events also expertise on wedding management and interior solutions.\r\n', NULL, 'Regular Package', '30000\r\n', NULL, NULL, NULL, NULL, 'img\\feature-image\\liedatan_f1.jpg', 'img\\feature-image\\liedatan_f2.jpg', 'img\\feature-image\\liedatan_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (116, 13, 'img\\vendor-profile\\sparkiling.jpg', 'img\\vendor-profile\\sparkiling.jpg', 'Sparkling Eventz\r\n', 'We’ve been privileged to be involved in the planning and design of wonderful events.\r\n', NULL, 'Regular Price', '50000\r\n', NULL, NULL, NULL, NULL, 'img\\feature-image\\sparkling_events_f1.jpg', 'img\\feature-image\\sparkling_events_f2.jpg', 'img\\feature-image\\sparkling_events_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (117, 13, 'img\\vendor-profile\\wedding_decor.jpg', 'img\\vendor-profile\\wedding_decor.jpg', 'Wedding Decor by Nushrat', 'We are a professional \"wedding planner\" to make your wedding a memorable and the most appreciable event.\r\n', NULL, 'Regular Price', '20000', NULL, NULL, NULL, NULL, 'img\\feature-image\\wedding_dn_f1.jpg', 'img\\feature-image\\wedding_dn_f2.jpg', 'img\\feature-image\\wedding_dn_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (118, 13, 'img\\vendor-profile\\ruhani.jpg', 'img\\vendor-profile\\ruhani.jpg', 'Ruhaani Wedding- Art Touches The Soul', NULL, NULL, 'Regular Package', '25000', NULL, NULL, NULL, NULL, 'img\\feature-image\\ruhani_f1.jpg', 'img\\feature-image\\ruhani_f2.jpg', 'img\\feature-image\\ruhani_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (119, 13, 'img\\vendor-profile\\classic_event.jpg', 'img\\vendor-profile\\classic_event.jpg', 'Classic Event\r\n', '\"An official facebook page of Classic Events\" To provide innovative and professional event management services with a focus on quality and detail\r\n', NULL, 'Regular Price', '30000', NULL, NULL, NULL, NULL, 'img\\feature-image\\classic_event_f1.jpg', 'img\\feature-image\\classic_event_f2.jpg', 'img\\feature-image\\classic_event_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (120, 13, 'img\\vendor-profile\\green_box.jpg', 'img\\vendor-profile\\green_box.jpg', 'Green Box', NULL, NULL, 'Regular Price', '25000', NULL, NULL, NULL, NULL, 'img\\feature-image\\green_box_f1.jpg', 'img\\feature-image\\green_box_f2.jpg', 'img\\feature-image\\green_box_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (121, 13, NULL, NULL, 'Dhaka Catering & Event Management\r\n', 'We arrange Gaye holud, Wedding, Birthday and Other Parties. We also arrange Annual General Meeting, Conference, Seminar & workshop.\r\n', NULL, 'Regular Price', '50000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (122, 17, NULL, NULL, 'Bridal Mehedi\r\n', 'This is a page from where you can enhance your beauty with exclusive henna decoration for any occasion bridal or non bridal ♥ :)\r\n', NULL, 'Regular Price', '1500', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (123, 17, NULL, NULL, 'Mehedi by Nuraat\r\n', NULL, NULL, 'Regular Price', '2500', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (124, 17, NULL, NULL, 'Mehendi Designs BY Eshita\r\n', 'Dear friends, this is a page from where you can fulfill your desire of being beautiful and enhance your beauty with exclusive henna decoration by eshita\r\n', NULL, 'Bridal', '700', 'Semi-Bridal', '200', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (125, 11, NULL, NULL, 'Aahaar Catering Service\r\n', 'AAHAAR\'s business is catering for weddings, walimas and mehendis, house catering for gatherings of family, AGM, corporate events, company picnics,\r\n', NULL, 'Regular', '480', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (126, 11, NULL, NULL, 'Dhaka Catering & Event Management\r\n', 'We arrange Gaye holud, Wedding, Birthday and Other Parties. We also arrange Annual General Meeting, Conference, Seminar & workshop.\r\n', NULL, 'Regular', '420', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (127, 12, NULL, NULL, 'Wedding Pages Bangladesh\r\n', 'Friends, this is official page of ~Wedding Pages Bangladesh~ Wedding/Event Photography, Cinematography & Event Management firm.We have done Thousands of weddings/events, successfully from last 8 years. 70% of clients are comes from reference because we maintained our services very smoothly & make relations with clients. We are using the latest technical setup & we have relevant education in events photography & cinematography. We care about your emotions & your big days. Our specialty is ~Bring out best results from minimum sources~. Yes, we believe, team ~Wedding Pages Bangladesh~ is most dedicated team in Bangladesh.\r\n', NULL, 'Magenta', '14000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (128, 12, NULL, NULL, 'Lorenzo Wedding\r\n', NULL, NULL, 'Single Event', '10000', 'Bundle Event', '60000', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (129, 12, NULL, NULL, 'Wedding Heritage\r\n', 'Wedding Heritage is a photography based company. Founded in April 2014 by Mehedi Hasan Arif, a Bangladeshi National, its main aim is to provide Wedding, Event Photography and cinematography services. Every Moments Beautifies Some Memories, Let Us Capture Yours...\r\n', NULL, 'Combo Bundle', '12500', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (130, 12, 'img\\vendor-profile\\metro_wedding.jpg', 'img\\vendor-logo\\metro_wedding.jpg', 'Metro Weddings\r\n', 'Metro Weddings is an agency that provides professional photography & cinematography services.\r\n', NULL, 'Twinkle', '20000', NULL, NULL, NULL, NULL, 'img\\feature-image\\metro_f1.jpg', 'img\\feature-image\\metro_f2.jpg', 'img\\feature-image\\metro_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (131, 12, 'img\\vendor-profile\\lfotto.jpg', 'img\\vendor-logo\\lfotto.jpg', 'L\'fotto\r\n', 'Full Fledge Photo & Video/Film Solutions\r\n', NULL, 'Cherish', '11000', NULL, NULL, NULL, NULL, 'img\\feature-image\\lfotto_f1.jpg', 'img\\feature-image\\lfotto_f2.jpg', 'img\\feature-image\\lfotto_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (132, 13, 'img\\vendor-profile\\colors_em.jpg', 'img\\vendor-profile\\colors_em.jpg', 'Colors Event Management', 'Colors Event Management is one of the best planner in Bangladesh. We offer you the best reliable services and outstanding unique events decoration ( wedding, engagement, birthday,corporate events) that are easily distinguished us from other events.', NULL, 'Regular Package', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\colors_em_f1.jpg', 'img\\feature-image\\colors_em_f2.jpg', 'img\\feature-image\\colors_em_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (133, 12, 'img\\vendor-profile\\wind_photography.jpg', 'img\\vendor-logo\\wind_photography.jpg', 'Wind Photography Bangladesh', 'Wind Photography & Wind Events has been a trusted name in wedding photography ,cinematography & Event Planning. With our team of experienced, enthusiastic professionals we are very.\r\nOur photographers & cinematographers  live in the moment of an event to capture all the precious little moments. Our cinematographers too thrive in the now, capturing all the details of the life of the party – the bride and the groom, the dancing, singing, and all the happiness.\r\nBridal Moment’s believes in growth through success. And success comes through good work. As such, we have always give it our very best to serve each and every one of our customers. Our clear communications and amicable behavior creates a wonderful understanding and mutual respect with out customers which puts their minds at ease.', '4/A DHANMONDI,DHAKA-1209.\r\nMYMENSINGH OFFICE – SHOPE NO-319, ALOKA NADI BANGLA COMPLEX,GANGINARPAR MYMENSINGH-2200.', 'Photography', '15000', 'Videography', '8000', 'Combo', '13000', 'img\\feature-image\\wind_photography_f1.jpg', 'img\\feature-image\\wind_photography_f2.jpg', 'img\\feature-image\\wind_photography_f3.jpg', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (134, 12, NULL, NULL, 'Dream Weddings', 'Premium class Photography & Cinematography Solution. We have Expert & Professional Team Members, Essential Equipment & Accessories to make sure as your taste & choice.', NULL, 'Photography', '7500', 'Cinematography', '7500', 'Combo', '11500', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, NULL, NULL);
INSERT INTO `vendors` VALUES (154, 9, 'img\\vendor-profile\\154.jpg', NULL, 'Hosaf Convention Centre', NULL, '6/9 Outer Circular Road', 'Hall 1', '125000', 'Hall 2', '70000', NULL, NULL, 'img\\feature-image\\154_f1.jpg', 'img\\feature-image\\154_f2.jpg', 'img\\feature-image\\154_f3.jpg', NULL, 0, '2018-11-20 12:06:20', '2018-11-20 12:06:20');
INSERT INTO `vendors` VALUES (155, 9, 'img\\vendor-profile\\155.jpg', 'img\\vendor-logo\\155.jpg', 'IVY Convention Center', NULL, '87 New Eskaton', 'Hall', '70000', NULL, NULL, NULL, NULL, 'img\\feature-image\\155_f1.jpg', 'img\\feature-image\\155_f2.jpg', 'img\\feature-image\\155_f3.jpg', NULL, 0, '2018-11-20 12:30:09', '2018-11-20 12:30:09');
INSERT INTO `vendors` VALUES (156, 9, 'img\\vendor-profile\\156.jpg', 'img\\vendor-logo\\156.jpg', 'Zam Zam Convention Center', NULL, 'Level-11, Commercial Plot - 23 & 25 Sonargoan Janapath Road, Sector-13', 'Level 12', '50000', 'Level 13', '75000', NULL, NULL, 'img\\feature-image\\156_f1.jpg', 'img\\feature-image\\156_f2.jpg', 'img\\feature-image\\156_f3.jpg', NULL, 0, '2018-11-20 13:01:00', '2018-11-20 13:01:00');
INSERT INTO `vendors` VALUES (157, 9, 'img\\vendor-profile\\157.jpg', 'img\\vendor-logo\\157.jpg', 'WaterFront Convention Hall', NULL, '464 DIT Road, Rampura, Hatirjheel, Dhaka', 'Hall', '135000', NULL, NULL, NULL, NULL, 'img\\feature-image\\157_f1.jpg', 'img\\feature-image\\157_f2.jpg', 'img\\feature-image\\157_f3.jpg', NULL, 0, '2018-11-20 13:44:53', '2018-11-20 13:44:53');
INSERT INTO `vendors` VALUES (158, 9, 'img\\vendor-profile\\158.jpg', 'img\\vendor-logo\\158.jpg', 'Waterfall Restaurant & Convention Hall', NULL, 'Rupayan Trade Centre. 2nd Floor. Banglamotor Circle. 114, Kazi Nazrul Islam Avenue', 'Hall', '77000', NULL, NULL, NULL, NULL, 'img\\feature-image\\158_f1.jpg', 'img\\feature-image\\158_f2.jpg', 'img\\feature-image\\158_f3.jpg', NULL, 0, '2018-11-20 14:58:29', '2018-11-20 14:58:29');
INSERT INTO `vendors` VALUES (159, 9, 'img\\vendor-profile\\159.jpg', 'img\\vendor-logo\\159.jpg', 'Neverland- The Urban Escape', NULL, '10/B, Goran Chotbari, Mirpur Beribadh, Dhaka', 'Friday & Saturday Half Resort', '40000', 'Half (Regular)', '20000', NULL, NULL, 'img\\feature-image\\159_f1.jpg', 'img\\feature-image\\159_f2.jpg', 'img\\feature-image\\159_f3.jpg', NULL, 0, '2018-11-20 15:34:32', '2018-11-20 15:34:32');
INSERT INTO `vendors` VALUES (160, 9, 'img\\vendor-profile\\160.jpg', NULL, 'Fakruddin Convention Center', NULL, 'Road-3, House-3, 3rd floor.. Dhanmondi Mirpur Road.', 'Hall', '40000', NULL, NULL, NULL, NULL, 'img\\feature-image\\160_f1.jpg', 'img\\feature-image\\160_f2.jpg', 'img\\feature-image\\160_f3.jpg', NULL, 0, '2018-11-20 19:57:42', '2018-11-20 19:57:42');
INSERT INTO `vendors` VALUES (161, 9, 'img\\vendor-profile\\161.jpg', 'img\\vendor-logo\\161.jpg', 'Paprika', NULL, 'Dhanmondi 4/A', 'Per Plate', '300+ Vat', NULL, NULL, NULL, NULL, 'img\\feature-image\\161_f1.jpg', 'img\\feature-image\\161_f2.jpg', 'img\\feature-image\\161_f3.jpg', NULL, 0, '2018-11-20 22:28:11', '2018-11-20 22:28:11');
INSERT INTO `vendors` VALUES (162, 11, 'img\\vendor-profile\\162.jpg', 'img\\vendor-logo\\162.jpg', 'Desh Catering', NULL, 'UCB Chattar', 'Per Plate', '450', NULL, NULL, NULL, NULL, 'img\\feature-image\\162_f1.jpg', 'img\\feature-image\\162_f2.jpg', 'img\\feature-image\\162_f3.jpg', NULL, 0, '2018-11-23 15:20:24', '2018-11-23 15:20:24');
INSERT INTO `vendors` VALUES (163, 9, 'img\\vendor-profile\\163.jpg', 'img\\vendor-logo\\163.jpg', 'Dawat-e মেজবান (Dhanmondi)', NULL, 'Bikalpa Tower, House 74, Level 3, Road 5A, Dhaka 1209', 'Hall', '20000', NULL, NULL, NULL, NULL, 'img\\feature-image\\163_f1.jpg', 'img\\feature-image\\163_f2.jpg', 'img\\feature-image\\163_f3.jpg', NULL, 0, '2018-11-23 19:20:10', '2018-11-23 19:20:10');
INSERT INTO `vendors` VALUES (164, 9, 'img\\vendor-profile\\164.jpg', NULL, ' Zinda Park', NULL, ' Zinda Park, Rupgong,Narayangonj', 'Package 1', '150000', 'Package 2', '400000', NULL, NULL, 'img\\feature-image\\164_f1.jpg', 'img\\feature-image\\164_f2.jpg', 'img\\feature-image\\164_f3.jpg', NULL, 0, '2018-11-25 10:55:37', '2018-11-25 10:55:37');
INSERT INTO `vendors` VALUES (172, 13, 'img\\vendor-profile\\172.jpg', NULL, 'Apon Events & wedding planner', 'We believe in the best output and the fantastic program & any event packages we offer.. Apon Events is a leading event management company in Feni, Bangladesh. We helps you in organizing your different events with affordable prices.', 'Mirpur', 'Starting Price', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\172_f1.jpg', 'img\\feature-image\\172_f2.jpg', 'img\\feature-image\\172_f3.jpg', NULL, 0, '2018-12-05 12:33:48', '2018-12-05 12:33:48');
INSERT INTO `vendors` VALUES (173, 13, 'img\\vendor-profile\\173.jpg', NULL, 'Wedding decorations by Golden Touch', NULL, 'Dhanmondi', 'Starting Price', '20000', NULL, NULL, NULL, NULL, 'img\\feature-image\\173_f1.jpg', 'img\\feature-image\\173_f2.jpg', 'img\\feature-image\\173_f3.jpg', NULL, 0, '2018-12-05 12:48:59', '2018-12-05 12:48:59');
INSERT INTO `vendors` VALUES (174, 13, 'img\\vendor-profile\\174.jpg', 'img\\vendor-logo\\174.jpg', 'Shadi Mubarak', NULL, 'Khilgaon', 'Starting Price', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\174_f1.jpg', 'img\\feature-image\\174_f2.jpg', 'img\\feature-image\\174_f3.jpg', NULL, 0, '2018-12-05 13:05:26', '2018-12-05 13:05:26');
INSERT INTO `vendors` VALUES (176, 9, 'img\\vendor-profile\\176.jpg', NULL, 'AGB Colony Community Center', NULL, 'AGB colony, Motijheel, Opposite of Motijheel Ideal school & college', 'Hall', '60000', NULL, NULL, NULL, NULL, 'img\\feature-image\\176_f1.jpg', 'img\\feature-image\\176_f2.jpg', 'img\\feature-image\\176_f3.jpg', NULL, 0, '2018-12-05 15:22:45', '2018-12-05 15:22:45');
INSERT INTO `vendors` VALUES (177, 16, 'img\\vendor-profile\\177.jpg', 'img\\vendor-logo\\177.jpg', 'Banee\'s Creation', NULL, 'Khilgaon(Behind Bhooter Adda), Dhaka, Bangladesh', 'Wedding/Anniversary', '1500', 'Holud', '1500', 'Birthday', '1000', 'img\\feature-image\\177_f1.jpg', 'img\\feature-image\\177_f2.jpg', 'img\\feature-image\\177_f3.jpg', NULL, 0, '2018-12-05 17:23:41', '2018-12-05 17:23:41');
INSERT INTO `vendors` VALUES (178, 16, 'img\\vendor-profile\\178.jpg', NULL, 'Cremoso', NULL, 'Mohammedpur', 'Wedding/Anniversary', '2000', 'Holud', '1500', 'Birthday', '1000', 'img\\feature-image\\178_f1.jpg', 'img\\feature-image\\178_f2.jpg', 'img\\feature-image\\178_f3.jpg', NULL, 0, '2018-12-05 17:41:29', '2018-12-05 17:41:29');
INSERT INTO `vendors` VALUES (179, 15, 'img\\vendor-profile\\179.jpg', 'img\\vendor-logo\\179.jpg', 'Amana Rahman - Bespoke Makeup Artistry', NULL, 'Gulshan', 'Bridal Makeover', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\179_f1.jpg', 'img\\feature-image\\179_f2.jpg', 'img\\feature-image\\179_f3.jpg', NULL, 0, '2018-12-10 14:43:30', '2018-12-10 14:43:30');
INSERT INTO `vendors` VALUES (180, 15, 'img\\vendor-profile\\180.jpg', NULL, 'Jesica makeover & beauty salon', NULL, '25/1 Larmini street, Wari', 'Bridal Makeover', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\180_f1.jpg', 'img\\feature-image\\180_f2.jpg', 'img\\feature-image\\180_f3.jpg', NULL, 0, '2018-12-11 01:30:24', '2018-12-11 01:30:24');
INSERT INTO `vendors` VALUES (181, 15, 'img\\vendor-profile\\181.jpg', NULL, 'The Beauty Bar Makeover Salon', NULL, 'House 44 (2nd floor), Avenue 5, Block A, Mirpur-6, Dhaka-1216', 'Bridal Makeover', '5000', 'Party Makeover', '800', 'Holud Makeover', '3000', 'img\\feature-image\\181_f1.jpg', 'img\\feature-image\\181_f2.jpg', 'img\\feature-image\\181_f3.jpg', NULL, 0, '2018-12-11 01:43:42', '2018-12-11 01:43:42');
INSERT INTO `vendors` VALUES (182, 15, 'img\\vendor-profile\\182.jpg', 'img\\vendor-logo\\182.jpg', 'Fariha\'s Beauty Salon', NULL, 'H-8(jhinuk), R-13(new) 5th floor Dhanmondi r/a\r\nDhaka', 'Bridal Makeover', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\182_f1.jpg', 'img\\feature-image\\182_f2.jpg', 'img\\feature-image\\182_f3.jpg', NULL, 0, '2018-12-11 01:56:02', '2018-12-11 01:56:02');
INSERT INTO `vendors` VALUES (183, 15, 'img\\vendor-profile\\183.jpg', NULL, 'Mareya Beautician & Make-up Artist', NULL, 'Ibrahimpur', 'Bridal Makeover', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\183_f1.jpg', 'img\\feature-image\\183_f2.jpg', 'img\\feature-image\\183_f3.jpg', NULL, 0, '2018-12-11 11:08:50', '2018-12-11 11:08:50');
INSERT INTO `vendors` VALUES (184, 15, 'img\\vendor-profile\\184.jpg', 'img\\vendor-logo\\184.jpg', 'Rendezvous - Makeup by Sumaya Khan', NULL, 'Banani', 'Bridal Makeover', '12000', NULL, NULL, NULL, NULL, 'img\\feature-image\\184_f1.jpg', 'img\\feature-image\\184_f2.jpg', 'img\\feature-image\\184_f3.jpg', NULL, 0, '2018-12-11 11:33:23', '2018-12-11 11:33:23');
INSERT INTO `vendors` VALUES (185, 15, 'img\\vendor-profile\\185.jpg', 'img\\vendor-logo\\185.jpg', 'DolleD up by Omitaa', NULL, 'Mirpur 1', 'Bridal Makeover', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\185_f1.jpg', 'img\\feature-image\\185_f2.jpg', 'img\\feature-image\\185_f3.jpg', NULL, 0, '2018-12-11 11:42:39', '2018-12-11 11:42:39');
INSERT INTO `vendors` VALUES (186, 15, 'img\\vendor-profile\\186.jpg', NULL, 'Wasib Ahamed\'s makeover', NULL, 'Uttara, sector : 12, Dhaka', 'Bridal Makeover', '12000', NULL, NULL, NULL, NULL, 'img\\feature-image\\186_f1.jpg', 'img\\feature-image\\186_f2.jpg', 'img\\feature-image\\186_f3.jpg', NULL, 0, '2018-12-11 12:15:01', '2018-12-11 12:15:01');
INSERT INTO `vendors` VALUES (187, 15, 'img\\vendor-profile\\187.jpg', 'img\\vendor-logo\\187.jpg', 'Noshin\'s Makeover And Hair Color', NULL, 'Lalmatia, mohammadpur, Dhaka-1207, Dhaka', 'Bridal Makeover', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\187_f1.jpg', 'img\\feature-image\\187_f2.jpg', 'img\\feature-image\\187_f3.jpg', NULL, 0, '2018-12-11 12:28:17', '2018-12-11 12:28:17');
INSERT INTO `vendors` VALUES (188, 15, 'img\\vendor-profile\\188.jpg', NULL, 'Luminoso Makeup Artistry by Lazina Elma', NULL, 'Dhanmondi', 'Bridal Makeover', '12000', NULL, NULL, NULL, NULL, 'img\\feature-image\\188_f1.jpg', 'img\\feature-image\\188_f2.jpg', 'img\\feature-image\\188_f3.jpg', NULL, 0, '2018-12-11 12:54:32', '2018-12-11 12:54:32');
INSERT INTO `vendors` VALUES (189, 15, 'img\\vendor-profile\\189.jpg', NULL, 'Woman\'s Glamour Beauty care', NULL, 'Azimpur Dhaka/ Comilla', 'Bridal Makeover', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\189_f1.jpg', 'img\\feature-image\\189_f2.jpg', 'img\\feature-image\\189_f3.jpg', NULL, 0, '2018-12-11 13:19:24', '2018-12-11 13:19:24');
INSERT INTO `vendors` VALUES (190, 15, 'img\\vendor-profile\\190.jpg', NULL, 'Makeover by Ayesha Muna', NULL, 'Banasree & Divine Beauty Lounge, banani.', 'Bridal Makeover', '12000', NULL, NULL, NULL, NULL, 'img\\feature-image\\190_f1.jpg', 'img\\feature-image\\190_f2.jpg', 'img\\feature-image\\190_f3.jpg', NULL, 0, '2018-12-11 13:41:53', '2018-12-11 13:41:53');
INSERT INTO `vendors` VALUES (191, 15, 'img\\vendor-profile\\191.jpg', NULL, 'Brushes & Bristles - Makeup by Sushmita Tahsin', NULL, 'Gulshan 2', 'Bridal Makeover', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\191_f1.jpg', 'img\\feature-image\\191_f2.jpg', 'img\\feature-image\\191_f3.jpg', NULL, 0, '2018-12-11 14:22:27', '2018-12-11 14:22:27');
INSERT INTO `vendors` VALUES (192, 15, 'img\\vendor-profile\\192.jpg', NULL, 'Piya\'s Artistry Makeover', NULL, '267/2-A Bonolota Abasik Area Road-3 , West Agargoan, 60 Feet Road , Near Bnp Bazaar, Sher-E-Bangla Nogor', 'Bridal Makeover', '7000', NULL, NULL, NULL, NULL, 'img\\feature-image\\192_f1.jpg', 'img\\feature-image\\192_f2.jpg', 'img\\feature-image\\192_f3.jpg', NULL, 0, '2018-12-11 14:34:13', '2018-12-11 14:55:24');
INSERT INTO `vendors` VALUES (193, 11, 'img\\vendor-profile\\193.jpg', NULL, 'Shahi Catering Service', NULL, 'Azimpur', 'Regular', '30000', NULL, NULL, NULL, NULL, 'img\\feature-image\\193_f1.jpg', 'img\\feature-image\\193_f2.jpg', 'img\\feature-image\\193_f3.jpg', NULL, 0, '2018-12-12 17:26:36', '2018-12-12 17:26:36');
INSERT INTO `vendors` VALUES (194, 11, 'img\\vendor-profile\\194.jpg', NULL, 'JK Catering Service', NULL, 'Chowk Bazar', 'Regular Price', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\194_f1.jpg', 'img\\feature-image\\194_f2.jpg', 'img\\feature-image\\194_f3.jpg', NULL, 0, '2018-12-12 18:48:19', '2018-12-12 18:48:19');
INSERT INTO `vendors` VALUES (195, 11, 'img\\vendor-profile\\195.jpg', 'img\\vendor-logo\\195.jpg', 'Alpha Catering', NULL, 'Cantonment', 'Plate', '550', NULL, NULL, NULL, NULL, 'img\\feature-image\\195_f1.jpg', 'img\\feature-image\\195_f2.jpg', 'img\\feature-image\\195_f3.jpg', NULL, 0, '2018-12-12 19:05:03', '2018-12-12 19:05:03');
INSERT INTO `vendors` VALUES (196, 17, 'img\\vendor-profile\\196.jpg', NULL, 'Mehedi arts by Jinia', NULL, 'Nikunja', 'Bridal', '1500', 'Semi Bridal', '1000', NULL, NULL, 'img\\feature-image\\196_f1.jpg', 'img\\feature-image\\196_f2.jpg', 'img\\feature-image\\196_f3.jpg', NULL, 0, '2018-12-16 19:54:43', '2018-12-16 19:54:43');
INSERT INTO `vendors` VALUES (197, 17, 'img\\vendor-profile\\197.jpg', 'img\\vendor-logo\\197.jpg', 'Mehendi Arts by Prantika', NULL, 'Dhanmondi', 'Bridal', '2500', NULL, NULL, NULL, NULL, 'img\\feature-image\\197_f1.jpg', 'img\\feature-image\\197_f2.jpg', 'img\\feature-image\\197_f3.jpg', NULL, 0, '2018-12-16 19:57:58', '2018-12-16 19:57:58');
INSERT INTO `vendors` VALUES (198, 17, 'img\\vendor-profile\\198.jpg', NULL, 'Mehendi Studio', NULL, 'Dhanmondi', 'Bridal', '1500', NULL, NULL, NULL, NULL, 'img\\feature-image\\198_f1.jpg', 'img\\feature-image\\198_f2.jpg', 'img\\feature-image\\198_f3.jpg', NULL, 0, '2018-12-16 20:00:42', '2018-12-16 20:00:42');
INSERT INTO `vendors` VALUES (199, 17, 'img\\vendor-profile\\199.jpg', NULL, 'Dhaka Mehendi Design', NULL, 'Mirpur', 'Bridal', '2000', NULL, NULL, NULL, NULL, 'img\\feature-image\\199_f1.jpg', 'img\\feature-image\\199_f2.jpg', 'img\\feature-image\\199_f3.jpg', NULL, 0, '2018-12-16 20:02:49', '2018-12-16 20:02:49');
INSERT INTO `vendors` VALUES (200, 17, 'img\\vendor-profile\\200.jpg', NULL, 'Kaniz\'s Mehendi', NULL, 'Mirpur', 'Bridal', '3500', 'Semi Bridal', '2500', NULL, NULL, 'img\\feature-image\\200_f1.jpg', 'img\\feature-image\\200_f2.jpg', 'img\\feature-image\\200_f3.jpg', NULL, 0, '2018-12-16 20:08:42', '2018-12-16 20:08:42');
INSERT INTO `vendors` VALUES (201, 17, 'img\\vendor-profile\\201.jpg', NULL, 'Tonny\'s mehendi', NULL, 'Khilgaon', 'Bridal', '1500', 'Semi Bridal', '2500', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-17 00:49:56', '2018-12-17 00:49:56');
INSERT INTO `vendors` VALUES (202, 17, 'img\\vendor-profile\\202.jpg', NULL, 'Innovative Touch', NULL, 'Mohammadpur', 'Bridal', '2500', NULL, NULL, NULL, NULL, 'img\\feature-image\\202_f1.jpg', 'img\\feature-image\\202_f2.jpg', 'img\\feature-image\\202_f3.jpg', NULL, 0, '2018-12-17 02:17:35', '2018-12-17 02:17:35');
INSERT INTO `vendors` VALUES (203, 17, 'img\\vendor-profile\\203.jpg', NULL, 'Mehzabin Mehendi House', NULL, 'Azimpur', 'Bridal', '2500', 'Semi Bridal', '1500', NULL, NULL, 'img\\feature-image\\203_f1.jpg', 'img\\feature-image\\203_f2.jpg', 'img\\feature-image\\203_f3.jpg', NULL, 0, '2018-12-17 02:20:12', '2018-12-17 02:20:12');
INSERT INTO `vendors` VALUES (204, 12, 'img\\vendor-profile\\204.jpg', NULL, 'The Camera Girl', NULL, 'Khilagon', 'Starting Price', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\204_f1.jpg', 'img\\feature-image\\204_f2.jpg', 'img\\feature-image\\204_f3.jpg', NULL, 0, '2018-12-17 02:36:00', '2018-12-17 02:36:00');
INSERT INTO `vendors` VALUES (205, 12, 'img\\vendor-profile\\205.jpg', NULL, 'Profile- Wedding & Event Photography', NULL, 'Nikunja', 'Combo Profile', '16500', 'Photo Profile', '12500', NULL, NULL, 'img\\feature-image\\205_f1.jpg', 'img\\feature-image\\205_f2.jpg', 'img\\feature-image\\205_f3.jpg', NULL, 0, '2018-12-17 11:37:46', '2018-12-17 11:37:46');
INSERT INTO `vendors` VALUES (206, 12, 'img\\vendor-profile\\206.jpg', NULL, 'Team Faisal Azim Production', NULL, 'Mirpur 1', 'Photography', '12000', 'Cinematography', '10000', NULL, NULL, 'img\\feature-image\\206_f1.jpg', 'img\\feature-image\\206_f2.jpg', 'img\\feature-image\\206_f3.jpg', NULL, 0, '2018-12-18 21:26:13', '2018-12-18 21:26:13');
INSERT INTO `vendors` VALUES (207, 12, 'img\\vendor-profile\\207.jpg', NULL, 'Inventive Arts', NULL, 'Nikunja', 'Photography', '20000', NULL, NULL, NULL, NULL, 'img\\feature-image\\207_f1.jpg', 'img\\feature-image\\207_f2.jpg', 'img\\feature-image\\207_f3.jpg', NULL, 0, '2018-12-18 22:40:01', '2018-12-18 22:40:01');
INSERT INTO `vendors` VALUES (208, 12, 'img\\vendor-profile\\208.jpg', NULL, 'NijolCreative Photography', NULL, 'Dhanmondi', 'Package', '13999', NULL, NULL, NULL, NULL, 'img\\feature-image\\208_f1.jpg', 'img\\feature-image\\208_f2.jpg', 'img\\feature-image\\208_f3.jpg', NULL, 0, '2018-12-18 23:09:34', '2019-01-10 17:57:39');
INSERT INTO `vendors` VALUES (209, 12, 'img\\vendor-profile\\209.jpg', NULL, 'M R rana Photography', NULL, 'Mohammadpur', 'Package', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\209_f1.jpg', 'img\\feature-image\\209_f2.jpg', 'img\\feature-image\\209_f3.jpg', NULL, 0, '2018-12-19 02:17:13', '2018-12-19 02:17:13');
INSERT INTO `vendors` VALUES (210, 12, 'img\\vendor-profile\\210.jpg', NULL, 'CMUD Events', NULL, 'Dhanmondi', 'Combo Basic', '15000', 'Photography (Standard)', '12000', 'Cinematography (Standard)', '10000', 'img\\feature-image\\210_f1.jpg', 'img\\feature-image\\210_f2.jpg', 'img\\feature-image\\210_f3.jpg', NULL, 0, '2018-12-19 02:32:16', '2018-12-19 02:32:16');
INSERT INTO `vendors` VALUES (211, 12, 'img\\vendor-profile\\211.jpg', NULL, 'Dream Art', NULL, 'Dhaka/Chittagong', 'Package', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 02:37:57', '2018-12-19 02:37:57');
INSERT INTO `vendors` VALUES (212, 12, 'img\\vendor-profile\\212.jpg', NULL, 'The Wedding Tales', NULL, 'Mohammadpur', 'Package', '12500', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 02:42:07', '2018-12-19 02:42:07');
INSERT INTO `vendors` VALUES (213, 12, 'img\\vendor-profile\\213.jpg', NULL, 'Salmi Kabir Photography', NULL, 'Mirpur', 'Photography', '10000', 'Combo', '16000', 'Pre-post wedding Photography', '10000', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 02:48:51', '2018-12-19 02:48:51');
INSERT INTO `vendors` VALUES (214, 12, 'img\\vendor-profile\\214.jpg', NULL, 'Wedding Story Bangladesh', NULL, 'Gulshan', 'Photography', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 11:20:47', '2018-12-19 11:20:47');
INSERT INTO `vendors` VALUES (215, 12, 'img\\vendor-profile\\215.jpg', NULL, 'Art Dream', NULL, 'Eskaton', 'Package 1', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 11:25:47', '2018-12-19 11:25:47');
INSERT INTO `vendors` VALUES (216, 12, 'img\\vendor-profile\\216.jpg', NULL, 'Wedding Café', NULL, 'House- 6, Road - Harunabad, Mipur DOHS', 'Standard', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 11:30:29', '2018-12-19 11:30:29');
INSERT INTO `vendors` VALUES (217, 12, 'img\\vendor-profile\\217.jpg', NULL, 'Artsy Photography', NULL, 'Mirpur', 'Essential Combo', '12000', 'Photography (ESSENTIAL)', '10500', 'Cinematography 2', '10000', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 11:40:50', '2018-12-19 11:40:50');
INSERT INTO `vendors` VALUES (218, 12, 'img\\vendor-profile\\218.jpg', NULL, 'KMA Taher Photography Cinematography', NULL, 'Mogbazar', 'Photography', '10000', 'Cinematography', '10000', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 11:47:24', '2018-12-19 11:47:24');
INSERT INTO `vendors` VALUES (219, 12, 'img\\vendor-profile\\219.jpg', NULL, 'Wedding Creation BD', NULL, 'Malibag', 'Comboo Package 1', '15000', 'Photography (Easy)', '10000', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 11:57:39', '2018-12-19 11:57:39');
INSERT INTO `vendors` VALUES (220, 12, 'img\\vendor-profile\\220.jpg', NULL, 'Moment\'s of Frame', NULL, 'Uttara', 'Silver Photography 2', '10500', 'Super Saver Combo', '11999', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 12:05:06', '2018-12-19 12:05:06');
INSERT INTO `vendors` VALUES (221, 12, 'img\\vendor-profile\\221.jpg', NULL, 'Click N Look Wedding Photography', NULL, 'Moghbazar', 'Photography', '13000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-19 19:47:47', '2018-12-19 19:47:47');
INSERT INTO `vendors` VALUES (222, 12, 'img\\vendor-profile\\222.jpg', NULL, 'Bridal Frame Photography', NULL, 'Dhaka/Mymensingh', 'Photography (Gold)', '10000', 'Cinematography (Gold)', '10000', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-22 20:35:55', '2018-12-22 20:35:55');
INSERT INTO `vendors` VALUES (223, 12, 'img\\vendor-profile\\223.jpg', NULL, 'Creative Motion BD', NULL, 'Mugda', 'Photography', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-22 20:39:31', '2018-12-22 20:39:31');
INSERT INTO `vendors` VALUES (224, 12, 'img\\vendor-profile\\224.jpg', NULL, 'Wedding Snaps by Rakib R Islam', NULL, 'Hatirpool', 'Photography (Basic)', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-23 01:00:29', '2018-12-23 01:00:29');
INSERT INTO `vendors` VALUES (225, 12, 'img\\vendor-profile\\225.jpg', NULL, 'The Bridal Gallery', NULL, 'Mirpur', 'Photography', '10000', 'Cinematography', '10000', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-23 01:04:38', '2018-12-23 01:04:38');
INSERT INTO `vendors` VALUES (226, 12, 'img\\vendor-profile\\226.jpg', NULL, 'Colorshot', NULL, 'House #03, Road #09, sector #11, Uttara\r\n1215', 'Super Saver 1', '10500', 'Cinematography', '10500', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-23 01:08:36', '2018-12-23 01:08:36');
INSERT INTO `vendors` VALUES (227, 12, 'img\\vendor-profile\\227.jpg', NULL, 'Dreamy Diary', NULL, 'House # 335, Road # 5, Avenue # 3, Mirpur DOHS', 'Combo 101', '18000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-23 01:13:43', '2019-01-10 17:58:38');
INSERT INTO `vendors` VALUES (228, 12, 'img\\vendor-profile\\228.jpg', NULL, 'N\'tanćhe', NULL, 'Bashundhara R/A', 'Photography', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-23 01:23:30', '2018-12-23 01:23:30');
INSERT INTO `vendors` VALUES (229, 12, 'img\\vendor-profile\\229.jpg', NULL, 'Wedding Chronicle', NULL, 'Elephant Road', 'Photography', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-23 01:30:09', '2018-12-23 01:30:09');
INSERT INTO `vendors` VALUES (230, 12, 'img\\vendor-profile\\230.jpg', 'img\\vendor-logo\\230.jpg', 'The Frame Work', NULL, 'Purana polton line', 'Starter Combo', '15000', NULL, NULL, NULL, NULL, 'img\\feature-image\\230_f1.jpg', 'img\\feature-image\\230_f2.jpg', 'img\\feature-image\\230_f3.jpg', NULL, 0, '2018-12-23 02:44:07', '2018-12-23 02:44:07');
INSERT INTO `vendors` VALUES (231, 12, 'img\\vendor-profile\\231.jpg', NULL, 'Memorio', NULL, 'House#317, Road#12, Block#C Basundhara R/A', 'Combo 01', '19000', 'Wedding Photography', '15000', NULL, NULL, 'img\\feature-image\\231_f1.jpg', 'img\\feature-image\\231_f2.jpg', 'img\\feature-image\\231_f3.jpg', NULL, 0, '2018-12-25 23:53:36', '2018-12-25 23:53:36');
INSERT INTO `vendors` VALUES (232, 12, 'img\\vendor-profile\\232.jpg', NULL, 'Photosnap Weddingshot', NULL, 'Dhaka/ Chittagong', 'Affordable Combo', '14000', 'Silver  Economy package', '12000', 'Cinematography (Exclusive )', '12000', 'img\\feature-image\\232_f1.jpg', 'img\\feature-image\\232_f2.jpg', 'img\\feature-image\\232_f3.jpg', NULL, 0, '2018-12-26 00:10:35', '2018-12-26 00:10:35');
INSERT INTO `vendors` VALUES (233, 12, 'img\\vendor-profile\\233.jpg', 'img\\vendor-logo\\233.jpg', 'Wedding Dream Story', NULL, 'Block - E, Road - 2, Banasre, Rampura', 'Bird of Paradise', '10000', 'Cinematography', '14000', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 00:20:34', '2018-12-26 00:20:34');
INSERT INTO `vendors` VALUES (234, 12, 'img\\vendor-profile\\234.jpg', NULL, 'S.Sabir Photography & Events', NULL, 'Mirpur DOHS', 'SILVER', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 00:26:49', '2018-12-26 00:26:49');
INSERT INTO `vendors` VALUES (235, 12, 'img\\vendor-profile\\235.jpg', NULL, 'Dreammates Bangladesh', NULL, 'Mirpur', 'Combo Package 1', '11500', 'Photography Package 2', '11999', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 11:00:40', '2018-12-26 11:00:40');
INSERT INTO `vendors` VALUES (236, 12, 'img\\vendor-profile\\236.jpg', NULL, 'Lovelife Memories', NULL, '12/KA/D/1, Road: 2, Shyamoli', 'Combo Packages 1', '11000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 11:12:16', '2018-12-26 11:12:16');
INSERT INTO `vendors` VALUES (237, 12, 'img\\vendor-profile\\237.jpg', NULL, 'Wedding Homes Bangladesh', NULL, 'Road 3 House 15 Back Side of Sha ali Plaza, Mirpur-10', 'Photography', '10000', 'Combo 1', '10500', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 11:16:25', '2018-12-26 11:16:25');
INSERT INTO `vendors` VALUES (238, 12, 'img\\vendor-profile\\238.jpg', NULL, 'Wedding Glows', NULL, 'Dhaka/Chittagong', 'Glows 7 (combo)', '18000', 'Glows 2 (Photography)', '10500', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 11:22:58', '2018-12-26 11:22:58');
INSERT INTO `vendors` VALUES (239, 12, 'img\\vendor-profile\\239.jpg', 'img\\vendor-logo\\239.jpg', 'Sharon Wedding', NULL, 'Niketan', 'Economy', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 11:32:15', '2018-12-26 11:32:15');
INSERT INTO `vendors` VALUES (240, 12, 'img\\vendor-profile\\240.jpg', 'img\\vendor-logo\\240.jpg', 'Finger\'s Story', NULL, '232/1B SouthGoran, Khilgaon', 'Photography', '12500', 'Cinematography', '5000', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 11:41:04', '2018-12-26 11:41:04');
INSERT INTO `vendors` VALUES (241, 12, 'img\\vendor-profile\\241.jpg', NULL, 'Studio ISP - I Shoot People', NULL, 'House # 929 (1st Floor), Road no # 13/A, Avenue #3, Mirpur DOHS, Dhaka', 'Package 1  (Economy)', '12000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 11:46:30', '2018-12-26 11:46:30');
INSERT INTO `vendors` VALUES (242, 11, 'img\\vendor-profile\\242.jpg', NULL, 'Niloy Catering Service', NULL, 'Paltan', 'Regular', '450', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 12:17:14', '2018-12-26 12:17:14');
INSERT INTO `vendors` VALUES (243, 11, NULL, NULL, 'Tareq\'s Catering & Event Management', NULL, 'Adabor', 'Regular', '550', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 12:24:01', '2018-12-26 12:24:01');
INSERT INTO `vendors` VALUES (244, 11, 'img\\vendor-profile\\244.jpg', NULL, 'Unique Catering Service', NULL, '248, East Vashantek, Dhaka Cantonment', 'Regular', '550', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 12:28:13', '2018-12-26 12:28:13');
INSERT INTO `vendors` VALUES (245, 11, 'img\\vendor-profile\\245.jpg', NULL, 'Mughal E Azam Catering', NULL, '300 Feet road, Khilkhet, Bashundhara, Dhaka', 'Regular', '500', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 12:35:01', '2018-12-26 12:35:01');
INSERT INTO `vendors` VALUES (246, 11, 'img\\vendor-profile\\246.jpg', 'img\\vendor-logo\\246.jpg', 'Jolpan Catering', NULL, 'Mohammadpur', 'Regular', '450', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 12:45:16', '2018-12-26 12:45:16');
INSERT INTO `vendors` VALUES (247, 11, 'img\\vendor-profile\\247.jpg', NULL, 'Dewan Catering', NULL, 'Dhanmondi', 'Regular', '450', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 12:55:18', '2018-12-26 12:55:18');
INSERT INTO `vendors` VALUES (248, 11, 'img\\vendor-profile\\248.jpg', NULL, 'MB Careting', NULL, 'Mirpur', 'Regular', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 13:06:19', '2018-12-26 13:06:19');
INSERT INTO `vendors` VALUES (249, 15, 'img\\vendor-profile\\249.jpg', NULL, 'Prive\' Salon & Spa Ltd by Nahila Hedayet', NULL, 'Gulshan 2', 'Bridal Makeover', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\249_f1.jpg', 'img\\feature-image\\249_f2.jpg', 'img\\feature-image\\249_f3.jpg', NULL, 0, '2018-12-26 13:39:59', '2018-12-26 13:39:59');
INSERT INTO `vendors` VALUES (250, 17, 'img\\vendor-profile\\250.jpg', NULL, 'Apurna Mehendi Design', NULL, 'Mohammadpur', 'Bridal', '2000', 'Semi Bridal', '1500', NULL, NULL, 'img\\feature-image\\250_f1.jpg', 'img\\feature-image\\250_f2.jpg', 'img\\feature-image\\250_f3.jpg', NULL, 0, '2018-12-26 13:58:21', '2018-12-26 13:58:21');
INSERT INTO `vendors` VALUES (251, 17, 'img\\vendor-profile\\251.jpg', NULL, 'Shahnaz Mehendi Design', NULL, 'Azimpur', 'Bridal', '2500', 'Semi Bridal', '1500', NULL, NULL, 'img\\feature-image\\251_f1.jpg', 'img\\feature-image\\251_f2.jpg', 'img\\feature-image\\251_f3.jpg', NULL, 0, '2018-12-26 14:08:09', '2018-12-26 14:08:09');
INSERT INTO `vendors` VALUES (252, 17, 'img\\vendor-profile\\252.jpg', NULL, 'Mehendi Design By Raba', NULL, 'Banasree', 'Bridal', '1500', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 14:13:08', '2018-12-26 14:13:08');
INSERT INTO `vendors` VALUES (253, 17, 'img\\vendor-profile\\253.jpg', NULL, 'Leelabali', NULL, 'Shaymoli', 'Bridal', '5000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 14:22:17', '2018-12-26 14:22:17');
INSERT INTO `vendors` VALUES (254, 17, 'img\\vendor-profile\\254.jpg', NULL, 'Satu & Sisters', NULL, 'Shantinagar', 'Bridal', '2000', 'Semi Bridal', '1500', 'Non Bridal', '150', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 14:40:30', '2018-12-27 11:36:33');
INSERT INTO `vendors` VALUES (255, 17, 'img\\vendor-profile\\255.png', 'img\\vendor-logo\\255.png', 'Dulhan Mehedi Arts', NULL, 'Banasre', 'Bridal', '2500', NULL, NULL, NULL, NULL, 'img\\feature-image\\255_f1.png', 'img\\feature-image\\255_f2.png', 'img\\feature-image\\255_f3.png', NULL, 1, '2018-12-26 14:49:50', '2018-12-26 15:38:45');
INSERT INTO `vendors` VALUES (258, 17, 'img\\vendor-profile\\258.jpg', NULL, 'Mehendi Moments', NULL, 'AGB Colony, Motijheel', 'Bridal', '2500', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 16:15:09', '2018-12-26 16:15:09');
INSERT INTO `vendors` VALUES (259, 17, 'img\\vendor-profile\\259.jpg', NULL, 'Mehendi Atelier', NULL, 'Wari', 'Bridal', '2500', NULL, NULL, NULL, NULL, 'img\\feature-image\\259_f1.jpg', 'img\\feature-image\\259_f2.jpg', 'img\\feature-image\\259_f3.jpg', NULL, 0, '2018-12-26 16:23:32', '2018-12-26 16:23:32');
INSERT INTO `vendors` VALUES (260, 13, 'img\\vendor-profile\\260.jpg', NULL, 'Lovious Event Management', NULL, ' 3/A, Dhanmondi, Satmasjid Road', 'Regular', '25000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 16:46:48', '2018-12-26 16:46:48');
INSERT INTO `vendors` VALUES (261, 12, 'img\\vendor-profile\\261.jpg', NULL, 'Life of Art Event Solution', NULL, 'khilgaon', 'Silver Package', '22000', NULL, NULL, NULL, NULL, 'img\\feature-image\\261_f1.jpg', 'img\\feature-image\\261_f2.jpg', 'img\\feature-image\\261_f3.jpg', NULL, 0, '2018-12-26 17:09:13', '2018-12-26 17:09:13');
INSERT INTO `vendors` VALUES (262, 13, 'img\\vendor-profile\\262.jpg', NULL, 'The Nakshi Event Management', NULL, 'North Bashaboo', 'Regular', '20000', NULL, NULL, NULL, NULL, 'img\\feature-image\\262_f1.jpg', 'img\\feature-image\\262_f2.jpg', 'img\\feature-image\\262_f3.jpg', NULL, 0, '2018-12-26 17:22:14', '2018-12-26 17:22:14');
INSERT INTO `vendors` VALUES (263, 13, 'img\\vendor-profile\\263.jpg', 'img\\vendor-logo\\263.jpg', 'Spotlight Event Management Ltd', NULL, 'Bashundhara R/A', 'Regular', '50000', NULL, NULL, NULL, NULL, 'img\\feature-image\\263_f1.jpg', 'img\\feature-image\\263_f2.jpg', 'img\\feature-image\\263_f3.jpg', NULL, 0, '2018-12-26 17:38:51', '2018-12-26 17:38:51');
INSERT INTO `vendors` VALUES (264, 13, 'img\\vendor-profile\\264.jpg', 'img\\vendor-logo\\264.jpg', 'Plan Event Management & Wedding Planner', NULL, '16/2, Din Nath Sen Road.Gandaria Dhaka', 'Regular', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 17:48:05', '2018-12-26 17:48:05');
INSERT INTO `vendors` VALUES (265, 13, 'img\\vendor-profile\\265.jpg', NULL, 'The Oasis Event Management', NULL, 'Savar/Dhaka', 'Regular', '15000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 17:53:11', '2018-12-26 17:53:11');
INSERT INTO `vendors` VALUES (266, 13, NULL, NULL, 'Marvelous Event Solutions', NULL, 'Lalbagh', 'Regular', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 17:55:35', '2018-12-26 17:55:35');
INSERT INTO `vendors` VALUES (267, 13, 'img\\vendor-profile\\267.jpg', 'img\\vendor-logo\\267.jpg', 'Torrongo Event Management', NULL, 'West Nakhal Para', 'Regular', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 18:01:47', '2018-12-26 18:01:47');
INSERT INTO `vendors` VALUES (268, 13, 'img\\vendor-profile\\268.jpg', 'img\\vendor-logo\\268.jpg', 'Passion Event Management', NULL, 'West Kafrul', 'Regular', '15000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 18:05:56', '2018-12-26 18:05:56');
INSERT INTO `vendors` VALUES (269, 13, 'img\\vendor-profile\\269.jpg', 'img\\vendor-logo\\269.jpg', 'Birthday Party Planner by Orin', NULL, 'Mohammadpur', 'Regular', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 18:11:13', '2018-12-26 18:11:13');
INSERT INTO `vendors` VALUES (270, 13, NULL, NULL, 'Touch Event Management', NULL, 'House#02, Road#05, Block#C, Banasree, Rampura', 'Regular', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 18:13:13', '2018-12-26 18:13:13');
INSERT INTO `vendors` VALUES (271, 13, 'img\\vendor-profile\\271.jpg', NULL, 'Easel Event Management', NULL, 'Rampura', 'Regular', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 18:17:26', '2018-12-26 18:17:26');
INSERT INTO `vendors` VALUES (272, 13, 'img\\vendor-profile\\272.jpg', NULL, 'Harmony Event Management Firm & Wedding Planners', NULL, 'Mohammadpur', 'Regular', '15000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 18:49:38', '2018-12-26 18:49:38');
INSERT INTO `vendors` VALUES (273, 13, 'img\\vendor-profile\\273.jpg', NULL, 'Shilpobilas Event Management', NULL, 'Eskaton', 'Regular', '20000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 18:54:02', '2018-12-26 18:54:02');
INSERT INTO `vendors` VALUES (274, 13, 'img\\vendor-profile\\274.jpg', 'img\\vendor-logo\\274.jpg', 'Bangla Event Management', NULL, 'ouse-453,Road-8(west),Baridhara DOHS', 'Regular', '15000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 18:57:50', '2018-12-26 18:57:50');
INSERT INTO `vendors` VALUES (275, 13, 'img\\vendor-profile\\275.jpg', NULL, 'Friendz Event Management', NULL, 'Old Dhaka', 'Regular', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:02:03', '2018-12-26 19:02:03');
INSERT INTO `vendors` VALUES (276, 13, 'img\\vendor-profile\\276.jpg', NULL, 'Look N Feel - Event Solutions', NULL, 'Mohammadpur', 'Regular', '25000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:06:43', '2018-12-26 19:06:43');
INSERT INTO `vendors` VALUES (277, 13, 'img\\vendor-profile\\277.jpg', NULL, 'Wedding Cafe', NULL, 'Mirpur', 'Regular', '15000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:14:41', '2018-12-26 19:14:41');
INSERT INTO `vendors` VALUES (278, 13, 'img\\vendor-profile\\278.jpg', 'img\\vendor-logo\\278.jpg', 'Plot Your Events - Wedding and Event Management', NULL, 'Uttara', 'Regular', '100000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:19:04', '2018-12-26 19:19:04');
INSERT INTO `vendors` VALUES (279, 13, 'img\\vendor-profile\\279.jpg', 'img\\vendor-logo\\279.jpg', 'Decor&Divine- Event Planner BD', NULL, 'Baridhara', 'Regular', '15000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:23:00', '2018-12-26 19:23:00');
INSERT INTO `vendors` VALUES (280, 13, 'img\\vendor-profile\\280.jpg', 'img\\vendor-logo\\280.jpg', 'Decoraze Wedding Planner & Event Management', NULL, 'Dhanmondi', 'Regular', '15000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:26:26', '2018-12-26 19:26:26');
INSERT INTO `vendors` VALUES (281, 13, 'img\\vendor-profile\\281.jpg', 'img\\vendor-logo\\281.jpg', 'Prozapoti Event Planner', NULL, 'Bansree', 'Regular', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:31:19', '2018-12-26 19:31:19');
INSERT INTO `vendors` VALUES (282, 13, 'img\\vendor-profile\\282.jpg', 'img\\vendor-logo\\282.jpg', 'Rongo Event Planner', NULL, 'Mugda', 'Regular', '30000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:35:24', '2018-12-26 19:35:24');
INSERT INTO `vendors` VALUES (283, 13, 'img\\vendor-profile\\283.jpg', NULL, 'Khan Event Planner', NULL, 'Badda', 'Regular', '20000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:39:49', '2018-12-26 19:39:49');
INSERT INTO `vendors` VALUES (284, 13, NULL, NULL, 'Wedlock', NULL, 'House 1 ; Road 5 ; Sector 1 Uttara', 'Regular', '15000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:42:39', '2018-12-26 19:42:39');
INSERT INTO `vendors` VALUES (285, 13, 'img\\vendor-profile\\285.jpg', NULL, 'Z Decor Events', NULL, 'Mohammadpur', 'Regular', '15000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:47:23', '2018-12-26 19:47:23');
INSERT INTO `vendors` VALUES (286, 13, 'img\\vendor-profile\\286.jpg', NULL, 'Wedding Elegance', NULL, 'Rampura', 'Regular', '20000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:50:33', '2018-12-26 19:50:33');
INSERT INTO `vendors` VALUES (287, 13, 'img\\vendor-profile\\287.jpg', 'img\\vendor-logo\\287.jpg', 'Royal Wedding Planner Ltd', NULL, 'Uttara', 'Regular', '20000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 19:54:29', '2018-12-26 19:54:29');
INSERT INTO `vendors` VALUES (288, 16, 'img\\vendor-profile\\288.jpg', NULL, 'Blissful Bites', NULL, 'Mohammedpur', 'Wedding/Anniversary', '1300', 'Holud', '1500', 'Birthday', '1300', 'img\\feature-image\\288_f1.jpg', 'img\\feature-image\\288_f2.jpg', 'img\\feature-image\\288_f3.jpg', NULL, 0, '2018-12-26 20:04:04', '2018-12-26 20:04:05');
INSERT INTO `vendors` VALUES (289, 16, 'img\\vendor-profile\\289.jpg', NULL, 'Butter Frost', NULL, 'Mohammadpur', 'Wedding/Anniversary', '1500', 'Holud', '1500', 'Birthday', '1000', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 20:10:14', '2018-12-26 20:10:14');
INSERT INTO `vendors` VALUES (290, 16, 'img\\vendor-profile\\290.jpg', 'img\\vendor-logo\\290.jpg', 'Dessertopia- ডিসার্টোপিয়া', NULL, 'Dhaka', 'Wedding/Anniversary', '1500', 'Holud', '1500', 'Birthday', '1000', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 20:20:15', '2018-12-26 20:20:15');
INSERT INTO `vendors` VALUES (291, 16, 'img\\vendor-profile\\291.jpg', 'img\\vendor-logo\\291.jpg', 'CakeSake', NULL, 'Mohakhali', 'Wedding/Anniversary', '2000', 'Holud', '1500', 'Birthday', '1000', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 20:27:27', '2018-12-26 20:27:27');
INSERT INTO `vendors` VALUES (292, 16, 'img\\vendor-profile\\292.jpg', 'img\\vendor-logo\\292.jpg', 'Golpo', NULL, 'Shaheed Tajuddin Ahmed Ave', 'Wedding/Anniversary', '1500', 'Holud', '1500', 'Birthday', '1000', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 20:32:53', '2018-12-26 20:32:53');
INSERT INTO `vendors` VALUES (293, 10, 'img\\vendor-profile\\293.jpg', NULL, 'DJ Sumi', NULL, 'Dhaka', 'Per Event', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-26 20:40:01', '2018-12-26 20:40:01');
INSERT INTO `vendors` VALUES (294, 9, NULL, NULL, 'Venus Convention Center', NULL, 'Progoti Sharani, Block-J, Road- 09, Baridhara', 'HALL', '90000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-27 17:10:55', '2018-12-27 17:10:55');
INSERT INTO `vendors` VALUES (295, 9, NULL, NULL, 'Red Chilli', NULL, 'Blook D, Banasree Dhaka', 'per plate', '350 taka', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-27 17:14:29', '2018-12-27 17:14:29');
INSERT INTO `vendors` VALUES (296, 9, NULL, NULL, 'Celebration Party Center', NULL, 'Outer Circular Rd,Eskaton', 'per plate', '30000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-27 17:21:52', '2018-12-27 17:21:52');
INSERT INTO `vendors` VALUES (297, 9, NULL, NULL, 'Ananda Community Center', NULL, '55 VIP Rd, Dhaka 1000, Bangladesh,Paltan-Motijheel.', 'Hall 1', '50000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-27 17:47:41', '2018-12-27 17:47:41');
INSERT INTO `vendors` VALUES (298, 9, 'img\\vendor-profile\\298.jpg', NULL, 'ROK Hall', NULL, 'House#21(Adjacent To Banani Masjid),Road#10,Banani', 'HALL', '20000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-29 15:52:47', '2018-12-29 15:52:47');
INSERT INTO `vendors` VALUES (299, 9, 'img\\vendor-profile\\299.jpg', NULL, 'Intraco Convention Hall', NULL, 'Progoti Sharani, Block-J, Road- 09, Baridhara', 'HALL', '90000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-29 16:00:18', '2018-12-29 16:00:18');
INSERT INTO `vendors` VALUES (300, 9, 'img\\vendor-profile\\300.jpg', 'img\\vendor-logo\\300.jpg', 'Dawat-e মেজবান (Motijheel)', NULL, 'Haque Chamber, 3 D.I.T Avenue Extension, Motijheel C/A', 'Per plate', '350 taka', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-30 14:15:18', '2018-12-30 14:15:18');
INSERT INTO `vendors` VALUES (301, 9, 'img\\vendor-profile\\301.jpg', 'img\\vendor-logo\\301.jpg', 'Meherjaan Dining', NULL, '25,Momota Plaza,2nd Floor 6/Kha, Senpara Mirpur-10', 'Per Plate', '250 Taka', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 00:16:41', '2018-12-31 00:16:41');
INSERT INTO `vendors` VALUES (302, 9, 'img\\vendor-profile\\302.jpg', NULL, 'Purnima Restaurant', NULL, 'Mirpur 2', 'Per Plate', '250 Taka', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 00:22:45', '2018-12-31 00:22:45');
INSERT INTO `vendors` VALUES (303, 9, 'img\\vendor-profile\\303.jpg', 'img\\vendor-logo\\303.jpg', 'Banolata Food Palace', NULL, 'Plot # 6, Main Road -3, Section -7, Mirpur ', 'Per Plate', '450', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 00:28:48', '2018-12-31 00:28:48');
INSERT INTO `vendors` VALUES (304, 9, NULL, NULL, 'Bay Leaf Restaurant', NULL, 'Pallabi, Mirpur', 'Per Plate', '450', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 00:31:49', '2018-12-31 00:31:49');
INSERT INTO `vendors` VALUES (305, 9, NULL, NULL, 'Kiyangshi Thai & Chinese Restaurant', NULL, 'Principal Abul Kashem Road, Mirpur 1, Dhaka', 'Per Plate', '350', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 00:35:15', '2018-12-31 00:35:15');
INSERT INTO `vendors` VALUES (306, 9, NULL, NULL, 'ATN Party House', NULL, '17, Darus salam road, mirpur-1, Dhaka 1216', 'Hall', '45000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 00:39:54', '2018-12-31 00:39:54');
INSERT INTO `vendors` VALUES (307, 9, 'img\\vendor-profile\\307.jpg', NULL, 'Mardi Gras Convention Hall', NULL, 'Begum Rokeya Avenue, Dhaka', 'Hall', '55000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 00:44:00', '2018-12-31 00:44:00');
INSERT INTO `vendors` VALUES (308, 9, NULL, NULL, 'Broccoli Restaurant', NULL, 'Satmasjid Road, Dhanmondi', 'Per Plate', '450', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 03:14:16', '2018-12-31 03:14:16');
INSERT INTO `vendors` VALUES (309, 9, 'img\\vendor-profile\\309.jpg', NULL, 'Santoor Restaurant', NULL, 'House No #2 Road No #32 (Old), Mirpur Road Dhanmondi', 'Per Plate', '350', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 03:17:04', '2018-12-31 03:17:04');
INSERT INTO `vendors` VALUES (310, 9, NULL, NULL, 'Olympia Palace Restaurant', NULL, 'Satmasjid Road, Dhanmondi,Dhaka', 'Per Plate', '570', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 03:19:58', '2018-12-31 03:19:58');
INSERT INTO `vendors` VALUES (311, 9, NULL, NULL, 'DEVIL\'S FACTORY', NULL, 'Rangs KB Square,8th floor,Satmashjid Road,9/A Dhanmondi Dhaka', 'Per Plate', '520', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 03:22:28', '2018-12-31 03:22:28');
INSERT INTO `vendors` VALUES (312, 9, NULL, NULL, 'MFL Convention Center', NULL, 'Dhanmondi-27, Dhaka', 'Hall', '0 (Depend On Discussion)', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2018-12-31 03:32:17', '2018-12-31 03:32:17');
INSERT INTO `vendors` VALUES (313, 9, NULL, NULL, 'Mim Community Center', NULL, 'Green Road, Dhanmondi', 'Hall', '45000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 10:37:03', '2019-01-01 10:37:03');
INSERT INTO `vendors` VALUES (314, 9, NULL, NULL, 'Fakruddin Convention Hall', NULL, 'Road no. 2, Dhanmondi, 1206 Dhaka', 'Hall', '30000 (30 Taka per person will be added)', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 10:42:28', '2019-01-01 10:42:28');
INSERT INTO `vendors` VALUES (315, 9, 'img\\vendor-profile\\315.jpg', 'img\\vendor-logo\\315.jpg', 'W Fine Dine Restaurant', NULL, 'Satmasjid Road, Dhanmondi', 'Per Plate', '450', NULL, NULL, NULL, NULL, 'img\\feature-image\\315_f1.jpg', 'img\\feature-image\\315_f2.jpg', 'img\\feature-image\\315_f3.jpg', NULL, 0, '2019-01-01 11:17:14', '2019-01-01 11:17:14');
INSERT INTO `vendors` VALUES (316, 9, 'img\\vendor-profile\\316.jpg', 'img\\vendor-logo\\316.jpg', 'Eat Station', NULL, 'House: 100/1, Road: 11/A, 11 Satmasjid Road, Dhanmondi', 'Per Plate', '250', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 11:24:56', '2019-01-01 11:24:56');
INSERT INTO `vendors` VALUES (317, 9, 'img\\vendor-profile\\317.jpg', 'img\\vendor-logo\\317.jpg', 'Kabooz Convention Center', NULL, 'Eastern Elite Center, Level 5, Road 15, Sat Masjid Road, Dhanmondi', 'Hall', '60000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 11:36:08', '2019-01-01 11:36:08');
INSERT INTO `vendors` VALUES (318, 9, 'img\\vendor-profile\\318.jpg', NULL, 'AMM Convention Center', NULL, ' 3/A, Dhanmondi, Satmasjid Road', 'Hall', '120000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 11:42:15', '2019-01-01 11:42:15');
INSERT INTO `vendors` VALUES (319, 9, 'img\\vendor-profile\\319.jpg', 'img\\vendor-logo\\319.jpg', 'Spicy Ramna', NULL, '54, 5th floor, 10/A Dhanmondi, Satmasjid Road', 'Per Plate', '750', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 11:50:29', '2019-01-01 11:50:29');
INSERT INTO `vendors` VALUES (320, 9, 'img\\vendor-profile\\320.jpg', NULL, 'Shagoon Community Center', NULL, 'Noor Fatha Lane, Lalbag, Dhaka-1212', 'Hall', '90000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 12:00:11', '2019-01-01 12:00:11');
INSERT INTO `vendors` VALUES (321, 9, 'img\\vendor-profile\\321.jpg', 'img\\vendor-logo\\321.jpg', 'New Dhaka Convertion Center', NULL, '103/1, Beside Azimpur Estern Bank Branch', 'Hall', '60000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 12:11:52', '2019-01-01 12:11:52');
INSERT INTO `vendors` VALUES (322, 9, NULL, NULL, 'The Flamenco Convention Center', NULL, '32 Bir Uttam Ziaur Rahman Road, Tejgoan,1215 Dhaka', 'Hall- 1', '90000', 'Hall-2', '120000', NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 12:27:03', '2019-01-01 12:27:03');
INSERT INTO `vendors` VALUES (323, 9, 'img\\vendor-profile\\323.jpg', NULL, 'Hungry Deals', NULL, 'West Monipuripara, Shangshad Avenue, Dhaka', 'Per Plate', '450', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 12:32:20', '2019-01-01 12:32:20');
INSERT INTO `vendors` VALUES (324, 9, 'img\\vendor-profile\\324.jpg', 'img\\vendor-logo\\324.jpg', 'Family World Grand Hall', NULL, '2/6 Asad Gate , MIrpur Road', 'Hall-1', '35000', 'Hall-2', '55000', 'Hall-3', '80000', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 13:05:47', '2019-01-01 13:05:47');
INSERT INTO `vendors` VALUES (325, 9, 'img\\vendor-profile\\325.jpg', NULL, 'Shah Marine Resort', NULL, 'Hemayetpur ', 'Full Resort', '100000 (Depend on Discussion)', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 13:18:13', '2019-01-01 13:18:13');
INSERT INTO `vendors` VALUES (326, 9, 'img\\vendor-profile\\326.jpg', 'img\\vendor-logo\\326.jpg', 'Disneydine', NULL, 'Noorani Tower (north-west of shia masjid),24/B Ring Road.', 'Per Plate', '350', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 13:27:55', '2019-01-01 13:27:55');
INSERT INTO `vendors` VALUES (327, 9, 'img\\vendor-profile\\327.jpg', NULL, 'Ananda Resort', NULL, 'Sinaboho Bazar, Taltoli, Shafipur, Gazipur', 'Full Resort', '100000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 14:01:35', '2019-01-01 14:01:35');
INSERT INTO `vendors` VALUES (328, 9, 'img\\vendor-profile\\328.jpg', NULL, 'Shaira Garden Resorts', NULL, 'Narayanganj', 'Resort', '100000 (Depend on Discussion)', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 14:10:45', '2019-01-01 14:10:45');
INSERT INTO `vendors` VALUES (329, 9, 'img\\vendor-profile\\329.jpg', NULL, 'Pubali Resort Club', NULL, 'Vadun (behind Vadun High School), Gazipur', 'Resort', '120000 (Depend on Discussion)', NULL, NULL, NULL, NULL, 'img\\feature-image\\329_f1.jpg', 'img\\feature-image\\329_f2.jpg', 'img\\feature-image\\329_f3.jpg', NULL, 0, '2019-01-01 14:26:33', '2019-01-01 14:26:33');
INSERT INTO `vendors` VALUES (330, 9, 'img\\vendor-profile\\330.jpg', NULL, 'Meghna Village Holiday Resort', NULL, 'Meghna Village Holiday Resort, Baluakandi, Munshiganj', 'Resort', '100000 (Depend on Discussion)', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 14:39:48', '2019-01-01 14:39:48');
INSERT INTO `vendors` VALUES (331, 9, 'img\\vendor-profile\\331.jpg', NULL, 'Green View Resort and Convention Center Ltd', NULL, 'Moinertek, Uttarkhan', 'Resort', '120000 (Depend on Discussion)', NULL, NULL, NULL, NULL, 'img\\feature-image\\331_f1.jpg', 'img\\feature-image\\331_f2.jpg', 'img\\feature-image\\331_f3.jpg', NULL, 0, '2019-01-01 14:57:58', '2019-01-01 14:57:58');
INSERT INTO `vendors` VALUES (332, 9, 'img\\vendor-profile\\332.jpg', 'img\\vendor-logo\\332.jpg', 'Jolpai Restaurant & Party Center', NULL, 'Nazrul Academy Rd, Dhaka 1000', 'Per Plate', '350', NULL, NULL, NULL, NULL, 'img\\feature-image\\332_f1.jpg', 'img\\feature-image\\332_f2.jpg', 'img\\feature-image\\332_f3.jpg', NULL, 0, '2019-01-01 15:13:10', '2019-01-01 15:13:10');
INSERT INTO `vendors` VALUES (333, 9, NULL, NULL, 'Nawabi Voj', NULL, 'Nurani Tower,plot #24/B,Block # c Ring Road,Mohammadpur,Dhaka', 'Per Plate', '350', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 15:27:37', '2019-01-01 15:27:37');
INSERT INTO `vendors` VALUES (334, 9, 'img\\vendor-profile\\334.jpg', NULL, 'Delhi Darbar', NULL, 'Mohammadpur', 'Per Plate', '350', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 15:34:20', '2019-01-01 15:34:20');
INSERT INTO `vendors` VALUES (335, 9, NULL, 'img\\vendor-logo\\335.jpg', 'Chilis', NULL, '40/41 Probal Housing Ring Road Adabor', 'Per Plate', '350', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 16:53:08', '2019-01-01 16:53:08');
INSERT INTO `vendors` VALUES (336, 9, 'img\\vendor-profile\\336.jpg', 'img\\vendor-logo\\336.jpg', 'Party Palace Restaurant Thai-Chinese & Party Center', NULL, '27/B/C , Dhakeshwari Road, Lalbagh', 'Per Plate', '300', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 17:05:42', '2019-01-01 17:05:42');
INSERT INTO `vendors` VALUES (337, 9, NULL, NULL, 'B7 restaurant & party center', NULL, 'Mohammadpur', 'Per Plate', '300', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 17:09:43', '2019-01-01 17:09:43');
INSERT INTO `vendors` VALUES (338, 9, 'img\\vendor-profile\\338.jpg', NULL, 'Hotel Shuktara Dhaka', NULL, '20/A Indira Road, Farmgate, Dhaka-1215', 'Per Plate', '300', NULL, NULL, NULL, NULL, 'img\\feature-image\\338_f1.jpg', 'img\\feature-image\\338_f2.jpg', 'img\\feature-image\\338_f3.jpg', NULL, 0, '2019-01-01 17:33:00', '2019-01-01 17:33:00');
INSERT INTO `vendors` VALUES (339, 9, 'img\\vendor-profile\\339.jpg', 'img\\vendor-logo\\339.jpg', 'Park View Restaurant', NULL, '0/A, Indira Road, sher-E-Bangla Nagor, Farmgate', 'Per Plate', '300', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 17:41:41', '2019-01-01 17:41:41');
INSERT INTO `vendors` VALUES (340, 9, 'img\\vendor-profile\\340.jpg', 'img\\vendor-logo\\340.jpg', 'Park Town Restaurant', NULL, 'Monipuripara', 'Per Plate', '450', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 18:07:42', '2019-01-01 18:07:42');
INSERT INTO `vendors` VALUES (341, 9, NULL, NULL, 'Yean Tun Chinese & Thai Restaurant', NULL, '50, Airport Road', 'Per Plate', '300', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 18:23:01', '2019-01-01 18:23:01');
INSERT INTO `vendors` VALUES (342, 9, 'img\\vendor-profile\\342.jpg', NULL, 'Taiking Thai-Chinese Restaurant & Party Center', NULL, 'Bir Uttam Rafiqul Islam Ave, Dhaka 1212', 'Per Plate', '500 (10000 taka service charge will be added)', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 19:00:02', '2019-01-01 19:00:02');
INSERT INTO `vendors` VALUES (343, 9, NULL, NULL, 'Blue Olive Restaurant Ltd.', NULL, 'H-15, Block-C, Main Road, Banasree, Dhaka\r\nDhaka, Bangladesh', 'Per Plate', '350', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 19:03:57', '2019-01-01 19:03:57');
INSERT INTO `vendors` VALUES (344, 9, NULL, NULL, 'Bagicha Restaurant and Party Centre', NULL, 'House#8, Block#C, Main Road', 'Per Plate', '400', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 19:08:53', '2019-01-01 19:08:53');
INSERT INTO `vendors` VALUES (345, 9, NULL, NULL, 'Raya Thai Chinese And Party Center', NULL, 'Banasree B block,Main road', 'Per Plate', '500', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-01 19:12:17', '2019-01-01 19:12:17');
INSERT INTO `vendors` VALUES (346, 9, 'img\\vendor-profile\\346.jpg', NULL, 'Tokyo Square Convention Center-TSCC', NULL, 'Ring Road, Mohammadpur', 'Hall-1', '120000', 'Hall-2', '140000', 'Hall-3', '60000', 'img\\feature-image\\346_f1.jpg', 'img\\feature-image\\346_f2.jpg', 'img\\feature-image\\346_f3.jpg', NULL, 0, '2019-01-02 11:59:34', '2019-01-02 11:59:34');
INSERT INTO `vendors` VALUES (347, 9, NULL, NULL, 'Farid Convention Hall', NULL, 'Chowdhury Para, Khilgaon', 'Hall', '25000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-02 12:55:12', '2019-01-02 12:55:12');
INSERT INTO `vendors` VALUES (348, 9, 'img\\vendor-profile\\348.jpg', 'img\\vendor-logo\\348.jpg', 'Siraj Convention Center', NULL, 'Plot No-39, Block-C, Aftab Nagar Main Rd, Badda', 'Hall-1', '100000', 'Hall-2', '100000', NULL, NULL, 'img\\feature-image\\348_f1.jpg', 'img\\feature-image\\348_f2.jpg', 'img\\feature-image\\348_f3.jpg', NULL, 0, '2019-01-02 13:12:32', '2019-01-02 13:12:32');
INSERT INTO `vendors` VALUES (349, 9, 'img\\vendor-profile\\349.jpg', 'img\\vendor-logo\\349.jpg', 'Big Apple Restaurant And Party Center', NULL, 'Shahid Baki Road, Khilgaon-Taltola, Rampura', 'Per Plate', '350', NULL, NULL, NULL, NULL, 'img\\feature-image\\349_f1.jpg', 'img\\feature-image\\349_f2.jpg', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-02 13:22:16', '2019-01-02 13:22:16');
INSERT INTO `vendors` VALUES (350, 10, NULL, NULL, 'Dj Bappy', NULL, 'Mirpur', 'Per Event', '4000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-02 13:28:08', '2019-01-02 13:28:08');
INSERT INTO `vendors` VALUES (351, 10, NULL, NULL, 'Dj Sachy', NULL, 'Naya Paltan', 'Per Event', '10000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-02 13:30:28', '2019-01-02 13:30:28');
INSERT INTO `vendors` VALUES (352, 10, 'img\\vendor-profile\\352.jpg', NULL, 'Dj Rokon', NULL, 'Dhaka', 'Per Event', '15000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-02 13:34:15', '2019-01-02 13:34:15');
INSERT INTO `vendors` VALUES (353, 10, NULL, NULL, 'DJ SHANTO', NULL, 'Dhaka', 'Per Event', '5000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-02 13:38:07', '2019-01-02 13:38:07');
INSERT INTO `vendors` VALUES (354, 10, NULL, NULL, 'DJ Tomal', NULL, 'Dhaka', 'Per Event', '20000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-02 13:41:23', '2019-01-02 13:41:23');
INSERT INTO `vendors` VALUES (355, 13, 'img\\vendor-profile\\355.jpg', NULL, 'SouL Art by Tanjin & Sajal', NULL, 'Mirpur 14', 'Regular Package', '10000', NULL, NULL, NULL, NULL, 'img\\feature-image\\355_f1.jpg', 'img\\feature-image\\355_f2.jpg', 'img\\feature-image\\355_f3.jpg', NULL, 0, '2019-01-02 13:56:00', '2019-01-02 13:56:00');
INSERT INTO `vendors` VALUES (356, 9, 'img\\vendor-profile\\356.jpg', 'img\\vendor-logo\\356.jpg', 'Bird\'s Eye Roof Top Restaurant', NULL, 'Baitul View Tower, 56/1 purana paltan (2.42 mi)\r\nDhaka', 'Hall', '60000', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-02 14:07:07', '2019-01-02 14:07:07');
INSERT INTO `vendors` VALUES (357, 9, NULL, NULL, 'Blue Moon Chinese Restaurant', NULL, 'Khilgaon, Dhaka', 'Per Plate', '300', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-02 14:11:39', '2019-01-02 14:11:39');
INSERT INTO `vendors` VALUES (358, 9, NULL, NULL, 'Raya Thai Chinese And Party Center', NULL, 'House 08, 1st Floor, Block B Banasree Main Rd', 'Per Plate', '350', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-02 14:15:59', '2019-01-02 14:15:59');
INSERT INTO `vendors` VALUES (359, 9, 'img\\vendor-profile\\359.png', 'img\\vendor-logo\\359.png', 'Mohakhali-Khilgaon', 'Mohakhali-Khilgaon', '2', '2', '2', NULL, NULL, NULL, NULL, 'img\\feature-image\\359_f1.png', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-01-30 18:22:14', '2019-01-30 18:22:14');
INSERT INTO `vendors` VALUES (360, 9, NULL, NULL, 'testo', NULL, 't', '2', '2', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-03-03 12:06:04', '2019-03-03 12:06:04');
INSERT INTO `vendors` VALUES (367, 24, 'img\\vendor-profile\\367.png', 'img\\vendor-logo\\367.png', 'f', '1', '1', '1', '1', '1', '1', '1', '1', 'img\\feature-image\\367_f1.png', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-03-20 11:26:52', '2019-03-20 11:26:53');
INSERT INTO `vendors` VALUES (368, 9, NULL, NULL, 'v', '1', '1', '1', '1', '1', '1', '1', '1', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-03-20 11:33:30', '2019-03-20 11:33:30');
INSERT INTO `vendors` VALUES (370, 23, 'img\\vendor-profile\\370.png', 'img\\vendor-logo\\370.png', 'bridal outfit', 'b', 'b', '2', '2', NULL, NULL, NULL, NULL, 'img\\feature-image\\370_f1.png', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-07 15:10:25', '2019-04-07 15:10:25');
INSERT INTO `vendors` VALUES (371, 24, 'img\\vendor-profile\\371.png', 'img\\vendor-logo\\371.png', 'j', '1', '1', '1', '1', NULL, NULL, NULL, NULL, 'img\\feature-image\\371_f1.png', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-07 16:37:09', '2019-04-07 16:37:09');
INSERT INTO `vendors` VALUES (372, 24, NULL, NULL, 'j', 'j', 'j', 'j', 'j', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-07 16:39:27', '2019-04-07 16:39:27');
INSERT INTO `vendors` VALUES (373, 24, NULL, NULL, 'j', 'j', 'j', 'j', 'j', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-07 16:41:10', '2019-04-07 16:41:10');
INSERT INTO `vendors` VALUES (374, 23, 'img\\vendor-profile\\374.jpg', 'img\\vendor-logo\\374.jpg', 'bridal', 'b', 'b', 'b', 'b', NULL, NULL, NULL, NULL, 'img\\feature-image\\374_f1.jpg', 'img\\feature-image\\374_f2.jpg', 'img\\feature-image\\374_f3.jpg', NULL, 0, '2019-04-10 13:10:26', '2019-04-10 13:10:26');
INSERT INTO `vendors` VALUES (375, 9, NULL, NULL, 'f', 'f', 'f', 'f', 'f', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 14:01:20', '2019-04-11 14:01:20');
INSERT INTO `vendors` VALUES (376, 9, NULL, NULL, 'gg', NULL, 'g', 'g', 'g', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:06:41', '2019-04-11 17:06:41');
INSERT INTO `vendors` VALUES (377, 9, 'img\\vendor-profile\\377.png', 'img\\vendor-logo\\377.png', '0 test venue', '0 test venue', '0 test venue', '0 test venue', '0 test venue', NULL, NULL, NULL, NULL, 'img\\feature-image\\377_f1.JPG', 'img\\feature-image\\377_f2.png', 'img\\feature-image\\377_f3.png', NULL, 0, '2019-04-11 17:10:55', '2019-04-11 17:10:55');
INSERT INTO `vendors` VALUES (378, 10, 'img\\vendor-profile\\378.png', NULL, '0 test DJ', '0 test DJ', '0 test DJ', '0 test DJ', '0 test DJ', NULL, NULL, NULL, NULL, 'img\\feature-image\\378_f1.png', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:11:52', '2019-04-11 17:11:52');
INSERT INTO `vendors` VALUES (379, 11, NULL, 'img\\vendor-logo\\379.png', '0 test catering', '0 test catering', '0 test catering', '0 test catering', '0 test catering', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:13:08', '2019-04-11 17:13:08');
INSERT INTO `vendors` VALUES (380, 12, NULL, NULL, '0 p', '0 p', '0 p', '0 p', '0 p', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:15:04', '2019-04-11 17:15:04');
INSERT INTO `vendors` VALUES (381, 13, NULL, NULL, '0 d', NULL, '0 d', '0 d', '0 d', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:15:30', '2019-04-11 17:15:30');
INSERT INTO `vendors` VALUES (382, 14, NULL, NULL, '0 i', NULL, '0 i', '0 i', '0 i', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:16:09', '2019-04-11 17:16:09');
INSERT INTO `vendors` VALUES (383, 15, NULL, NULL, '0 m', '0 m', '0 m', '0 m', '0 m', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:16:27', '2019-04-11 17:16:27');
INSERT INTO `vendors` VALUES (384, 16, NULL, NULL, '0 Ba', '0 Ba', '0 Ba', '0 Ba', '0 Ba', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:16:49', '2019-04-11 17:16:49');
INSERT INTO `vendors` VALUES (385, 17, NULL, NULL, '0 meh', '0 meh', '0 meh', '0 meh', '0 meh', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:17:10', '2019-04-11 17:17:10');
INSERT INTO `vendors` VALUES (386, 11, NULL, NULL, 'h', 'h', 'h', 'h', 'h', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:25:33', '2019-04-11 17:25:33');
INSERT INTO `vendors` VALUES (387, 11, NULL, NULL, 'g', 'g', 'g', 'g', 'g', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:26:15', '2019-04-11 17:26:15');
INSERT INTO `vendors` VALUES (388, 11, NULL, NULL, 'g', 'g', 'g', 'g', 'g', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-11 17:26:29', '2019-04-11 17:26:29');
INSERT INTO `vendors` VALUES (389, 9, NULL, NULL, 'v', 'v', 'v', 'v', 'v', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-15 11:38:08', '2019-04-15 11:38:08');
INSERT INTO `vendors` VALUES (394, 18, NULL, NULL, 'f', 'f', 'f', 'f', 'f', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-15 12:17:42', '2019-04-15 12:17:42');
INSERT INTO `vendors` VALUES (395, 18, NULL, NULL, 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-15 12:21:17', '2019-04-15 12:21:17');
INSERT INTO `vendors` VALUES (396, 23, NULL, NULL, 'd', 'd', 'd', 'd', 'e', '3', NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-15 17:54:20', '2019-04-18 12:21:12');
INSERT INTO `vendors` VALUES (397, 11, NULL, NULL, 'test', 't', 't', 't', 't', NULL, NULL, NULL, NULL, 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', 'http://via.placeholder.com/600x400', NULL, 0, '2019-04-28 20:13:11', '2019-04-28 20:13:11');

-- ----------------------------
-- Table structure for venue_feature
-- ----------------------------
DROP TABLE IF EXISTS `venue_feature`;
CREATE TABLE `venue_feature`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `feature_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_3` int(11) NOT NULL DEFAULT 0,
  `feature_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_6` int(11) NOT NULL DEFAULT 0,
  `feature_7` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `feature_8` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `low_price` int(11) NOT NULL DEFAULT 0,
  `area` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 130 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of venue_feature
-- ----------------------------
INSERT INTO `venue_feature` VALUES (1, 1, 'Banasree', 'Party Centre', 1250, 'Allowed', 'Allowed', 35, 'Booking Confirm money before 1 month and Full payment before 3 days. ', 'Day-Night', 35000, 'Badda-Banasree', 0, NULL, '2019-04-23 16:30:56');
INSERT INTO `venue_feature` VALUES (2, 2, 'House # 20, Road # 13/D, Dhaka 1230, Bangladesh', 'Community Centre', 4000, 'Allowed', 'Allowed', 45, 'Booking Confirm money before 1 month and Full payment before 3 days. ', 'Day-Night', 27500, 'uttara', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (3, 14, 'Segunbagicha', 'Open Space', 1200, 'Not Allowed', 'Not Allowed', 4, 'Booking Confirm money before 1 month and Full payment before 3 days. ', 'Day-Night', 60000, 'Paltan-Motijheel', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (4, 15, 'Dhanmondi', 'Community Center', 400, 'Allowed', 'Allowed', 50, '', '', 50000, 'Lalmatia-Dhanmondi', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (5, 16, 'Gulshan', 'Convention Hall', 400, 'Allowed', 'Allowed', 25, '', '', 60000, 'gulshan-banani', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (6, 17, 'Uttara', 'Resturant', 400, 'Allowed', 'Not Allowed', 20, '', '', 15000, 'uttara', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (7, 18, 'Uttara', 'Convention Center', 800, 'Allowed', 'Not Allowed', 200, '', '', 50000, 'uttara', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (8, 19, 'Gulshan', 'Convention Hall', 800, 'Allowed', 'Allowed', 35, 'Booking Confirm money 75000 before 1 month and Full payment before 3 days.', 'Day-Night', 15000, 'gulshan-banani', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (9, 20, 'Rampura', 'Convention Hall', 1200, 'Allowed', 'Allowed', 35, '', '', 65000, 'Rampura-Khilgaon', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (10, 21, 'Basabo', 'Community Center', 350, 'Not Allowed', 'Not Allowed', 0, '', '', 35000, 'Rampura-Khilgaon', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (11, 22, 'Rajarbag', 'Community Centre', 1000, 'Allowed', 'Allowed', 0, '', '', 30000, 'Rajarbag-Shantinagar', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (12, 23, 'Eskaton', 'Convention Hall', 1500, 'Not Allowed', 'Not Allowed', 25, '', '', 180750, 'Magbazar-Eskaton', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (13, 24, 'Paltan', 'Community Centre', 600, 'Allowed', 'Allowed', 20, '', '', 50000, 'Paltan-Motijheel', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (14, 25, 'Mirpur', 'Community Centre', 350, 'Not Allowed', 'Not Allowed', 25, '', '', 30000, 'mirpur-pallabi', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (15, 26, 'Mirpur', 'Community Centre', 600, 'Not Allowed', 'Not Allowed', 25, '', '', 30000, 'mirpur-pallabi', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (16, 27, 'Mirpur', 'Community Centre', 350, 'Allowed', 'Not Allowed', 9, '', '', 28000, 'mirpur-pallabi', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (17, 28, 'Mirpur', 'Convention Hall', 2000, 'Not Allowed', 'Not Allowed', 55, '', '', 50000, 'mirpur-pallabi', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (18, 29, 'Mirpur', 'Community Centre', 350, 'Not Allowed', 'Not Allowed', 0, '', '', 45000, 'mirpur-pallabi', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (19, 30, 'Shyamoli', 'Community Center', 300, 'Not Allowed', 'Not Allowed', 35, NULL, NULL, 20000, 'shamoli-mohammadpur', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (20, 31, 'Dhanmondi', 'Convention Hall', 1300, 'Allowed', 'Allowed', 25, NULL, NULL, 60000, 'Lalmatia-Dhanmondi', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (21, 33, 'Dhanmondi', 'Community Center', 500, 'Not Allowed', 'Not Allowed', 0, NULL, NULL, 40000, 'Lalmatia-Dhanmondi', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (22, 34, 'Dhanmondi', 'Convention Hall', 1500, 'Allowed', 'Allowed', 350, NULL, NULL, 30000, 'Lalmatia-Dhanmondi', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (23, 35, 'Dhanmondi', 'Convention Hall', 1200, 'Allowed', 'Allowed', 0, NULL, NULL, 90000, 'Lalmatia-Dhanmondi', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (24, 36, 'Azimpur', 'Convention Center', 1500, 'Allowed', 'Not Allowed', 0, NULL, NULL, 60000, 'Lalbag-Azimpur', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (25, 37, 'Uttara', 'Restaurant', 300, 'Allowed', 'Allowed', 12, NULL, NULL, 25000, 'uttara', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (26, 38, 'Uttara', 'Community Centre', 400, 'Not Allowed', 'Not Allowed', 25, NULL, NULL, 48000, 'uttara', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (27, 39, 'Uttara', 'Restaurant', 350, 'Allowed', 'Allowed', 25, NULL, NULL, 60000, 'uttara', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (28, 40, 'Uttara', 'Restaurant', 400, 'Not Allowed', 'Not Allowed', 25, NULL, NULL, 40000, 'uttara', 0, NULL, NULL);
INSERT INTO `venue_feature` VALUES (48, 154, 'Malibagh', 'Convention Center', 1600, 'Not Allowed', 'Not Allowed', 150, '20000 tk Advance', '11am-5pm/6pm-12am', 70000, NULL, 0, '2018-11-20 12:06:20', '2018-11-20 12:06:20');
INSERT INTO `venue_feature` VALUES (49, 155, 'Eskaton', 'Convention Center', 1000, 'Allowed', 'Allowed', 25, '5000 tk Advance', '12pm-5pm/ 6pm-12am', 70000, NULL, 0, '2018-11-20 12:30:09', '2018-11-20 12:30:09');
INSERT INTO `venue_feature` VALUES (50, 156, 'Uttara', 'Convention Center', 1200, 'Not Allowed', 'Not Allowed', 50, '30% Advance', '8am-4pm/5pm-12am', 50000, NULL, 0, '2018-11-20 13:01:00', '2018-11-20 13:01:00');
INSERT INTO `venue_feature` VALUES (51, 157, 'Rampura', 'Convention Hall', 700, 'Allowed', 'Not Allowed', 80, '50% Advance', '12pm-5pm/ 6pm-12am', 135000, NULL, 0, '2018-11-20 13:44:53', '2018-11-20 13:44:53');
INSERT INTO `venue_feature` VALUES (52, 158, 'Banglamotor Circle', 'Convention Center', 500, 'Allowed', 'Allowed', 5, '30% tk advance for booking but full payment have to done before 3days of event', '12pm-4:30pm/7pm-11pm', 77000, NULL, 0, '2018-11-20 14:58:29', '2018-11-20 14:58:29');
INSERT INTO `venue_feature` VALUES (53, 159, 'Mirpur', 'Open Space', 600, 'Not Allowed', 'Not Allowed', 50, '30% Advance', '10am-6pm/ 6pm-11pm', 20000, NULL, 0, '2018-11-20 15:34:32', '2018-11-20 15:34:32');
INSERT INTO `venue_feature` VALUES (54, 160, 'Dhanmondi', 'Convention Center', 400, 'Allowed', 'Not Allowed', 250, '20% Advance. Full payment have to be done before 2 days', '12pm-5pm/6pm-11pm', 40000, NULL, 0, '2018-11-20 19:57:42', '2018-11-20 19:57:42');
INSERT INTO `venue_feature` VALUES (55, 161, 'Dhanmondi', 'Restaurant', 70, 'Not Allowed', 'Allowed', 6, '40% Advance', '11am-12pm', 300, NULL, 0, '2018-11-20 22:28:11', '2018-11-20 22:28:11');
INSERT INTO `venue_feature` VALUES (56, 163, 'Dhanmondi', 'Restaurant', 170, 'Not Allowed', 'Allowed', 10, '40% Advance', 'Depend on Event', 20000, NULL, 0, '2018-11-23 19:20:10', '2018-11-23 19:20:10');
INSERT INTO `venue_feature` VALUES (57, 164, 'Narayangonj', 'Open Space', 600, 'Not Allowed', 'Not Allowed', 300, '50% Advance', '10am-5pm/6pm-11pm', 150000, NULL, 0, '2018-11-25 10:55:37', '2018-11-25 10:55:37');
INSERT INTO `venue_feature` VALUES (64, 176, 'Motijheel', 'Community Center', 300, 'Allowed', 'Allowed', 50, '60000', '12pm-5pm / 7pm-11pm', 60000, 'Paltan-Motijheel', 0, '2018-12-05 15:22:45', '2018-12-05 15:22:45');
INSERT INTO `venue_feature` VALUES (65, 294, 'Baridhara', 'Convention Hall', 120, 'Not Allowed', 'Allowed', 25, '25000 Advance', '12-5/6-11', 25000, 'gulshan-banani', 0, '2018-12-27 17:10:55', '2018-12-27 17:10:55');
INSERT INTO `venue_feature` VALUES (66, 295, 'Banasree', 'Restaurant', 70, 'Not Allowed', 'Allowed', 5, '20% Advance.', '10pm to 10am', 350, 'Badda-Banasree', 0, '2018-12-27 17:14:29', '2018-12-27 17:14:29');
INSERT INTO `venue_feature` VALUES (67, 296, 'Eskaton', 'Restaurant', 250, 'Not Allowed', 'Allowed', 10, '50% Advance', '10-5/6-11', 400, 'Magbazar - Eskaton', 0, '2018-12-27 17:21:52', '2018-12-27 17:21:52');
INSERT INTO `venue_feature` VALUES (68, 297, 'Paltan', 'Community Center', 300, 'Allowed', 'Decoration, Lighting Not Allowed', 20, '10000 taka Advance', '12-4:30/7-11', 50000, 'Paltan-Motijheel', 0, '2018-12-27 17:47:41', '2018-12-27 17:47:41');
INSERT INTO `venue_feature` VALUES (69, 298, 'Banani', 'Convention Hall', 250, 'Not Allowed', 'Allowed', 20, '50% Advance', '12-5/6-11', 20000, 'gulshan-banani', 0, '2018-12-29 15:52:47', '2018-12-29 15:52:47');
INSERT INTO `venue_feature` VALUES (70, 299, 'Baridhara', 'Convention Hall', 250, 'Not Allowed', 'Allowed', 25, '50% Advance', '12-5/6-11', 90000, 'gulshan-banani', 0, '2018-12-29 16:00:18', '2018-12-29 16:00:18');
INSERT INTO `venue_feature` VALUES (71, 300, 'Motijheel', 'Restaurant', 70, 'Not Allowed', 'Allowed', 20, '50% Advance', '10 am- 11 pm', 350, 'Paltan-Motijheel', 0, '2018-12-30 14:15:18', '2018-12-30 14:15:18');
INSERT INTO `venue_feature` VALUES (72, 301, 'Mirpur', 'Restaurant', 80, 'Not Available', 'Available', 5, '50% Advance', '10am - 10pm', 250, 'mirpur-pallabi', 0, '2018-12-31 00:16:41', '2018-12-31 00:16:41');
INSERT INTO `venue_feature` VALUES (73, 302, 'Mirpur', 'Restaurant', 80, 'Not Available', 'Available', 0, '50% Advance', '10am - 10pm', 250, 'mirpur-pallabi', 0, '2018-12-31 00:22:45', '2018-12-31 00:22:45');
INSERT INTO `venue_feature` VALUES (74, 303, 'Mirpur', 'Restaurant', 150, 'Available', 'Not Available', 5, '50% Advance', '10am - 10pm', 450, 'mirpur-pallabi', 0, '2018-12-31 00:28:48', '2018-12-31 00:28:48');
INSERT INTO `venue_feature` VALUES (75, 304, 'Mirpur', 'Restaurant', 300, 'Not Available', 'Available', 5, '50% Advance', '10am - 10pm', 450, 'mirpur-pallabi', 0, '2018-12-31 00:31:49', '2018-12-31 00:31:49');
INSERT INTO `venue_feature` VALUES (76, 305, 'Mirpur', 'Restaurant', 70, 'Not Available', 'Available', 5, '50% Advance', '10am - 10pm', 350, 'mirpur-pallabi', 0, '2018-12-31 00:35:15', '2018-12-31 00:35:15');
INSERT INTO `venue_feature` VALUES (77, 306, 'Mirpur', 'Community Center', 300, 'Available', 'Available', 5, '50% Advance', '12pm to 6pm / 6pm to 11pm', 45000, 'mirpur-pallabi', 0, '2018-12-31 00:39:54', '2018-12-31 00:39:54');
INSERT INTO `venue_feature` VALUES (78, 307, 'Mirpur', 'Convention Center', 800, 'Not Available', 'Available', 35, '55000 (100taka per person will be added)', '12-4:30/7-11', 55000, NULL, 0, '2018-12-31 00:44:00', '2018-12-31 00:44:00');
INSERT INTO `venue_feature` VALUES (79, 308, 'Dhanmondi', 'Restaurant', 100, 'Not Available', 'Available', 5, '50% Advance', '10am - 10pm', 450, 'Lalmatia-Dhanmondi', 0, '2018-12-31 03:14:16', '2018-12-31 03:14:16');
INSERT INTO `venue_feature` VALUES (80, 309, 'Dhanmondi', 'Restaurant', 80, 'Not Available', 'Available', 5, '50% Advance', '10am - 10pm', 350, 'Lalmatia-Dhanmondi', 0, '2018-12-31 03:17:04', '2018-12-31 03:17:04');
INSERT INTO `venue_feature` VALUES (81, 310, 'Dhanmondi', 'Restaurant', 100, 'Not Available', 'Available', 5, '50% Advance', '10am - 10pm', 570, 'Lalmatia-Dhanmondi', 0, '2018-12-31 03:19:58', '2018-12-31 03:19:58');
INSERT INTO `venue_feature` VALUES (82, 311, 'Dhanmondi', 'Restaurant', 70, 'Not Available', 'Available', 5, '50% Advance', '10am - 10pm', 520, NULL, 0, '2018-12-31 03:22:28', '2018-12-31 03:22:28');
INSERT INTO `venue_feature` VALUES (83, 312, 'Dhanmondi', 'Convention Center', 1300, 'Not Available', 'Available', 50, '50% Advance', '10am - 10pm', 0, NULL, 0, '2018-12-31 03:32:17', '2018-12-31 03:32:17');
INSERT INTO `venue_feature` VALUES (84, 313, 'Dhanmondi', 'Community Center', 300, 'Available', 'Available', 5, '50% Advance', '12-4:30/7-11', 45000, 'Lalmatia-Dhanmondi', 0, '2019-01-01 10:37:03', '2019-01-01 10:37:03');
INSERT INTO `venue_feature` VALUES (85, 314, 'Dhanmondi', 'Convention Hall', 400, 'Available', 'Not Available', 200, '20% Advance (Full Payment Have to be done before 2days ago)', '12-4:30/7-11', 30000, 'Lalmatia-Dhanmondi', 0, '2019-01-01 10:42:28', '2019-01-01 10:42:28');
INSERT INTO `venue_feature` VALUES (86, 315, 'Dhanmondi', 'Restaurant', 50, 'Not Available', 'Available', 5, '40% advance', '10pm to 10am', 450, 'Lalmatia-Dhanmondi', 0, '2019-01-01 11:17:14', '2019-01-01 11:17:14');
INSERT INTO `venue_feature` VALUES (87, 316, 'Dhanmondi', 'Restaurant', 40, 'Not Allowed', 'Allowed', 2, '50% advance', '10am to 11pm', 250, 'Lalmatia-Dhanmondi', 0, '2019-01-01 11:24:56', '2019-01-01 11:24:56');
INSERT INTO `venue_feature` VALUES (88, 317, 'Dhanmondi', 'Convention Hall', 600, 'Not Allowed', 'Allowed', 10, '40% Advance', '12-4:30/7-11', 60000, 'Lalmatia-Dhanmondi', 0, '2019-01-01 11:36:08', '2019-01-01 11:36:08');
INSERT INTO `venue_feature` VALUES (89, 318, 'Dhanmondi', 'Convention Center', 450, 'Not Allowed', 'Not Allowed', 30, '40% advance', '12-4:30/7-11', 120000, NULL, 0, '2019-01-01 11:42:15', '2019-01-01 11:42:15');
INSERT INTO `venue_feature` VALUES (90, 319, 'Dhanmondi', 'Restaurant', 250, 'Not Allowed', 'Allowed', 30, '50% advance', '10 am to 11pm', 750, 'Lalmatia-Dhanmondi', 0, '2019-01-01 11:50:29', '2019-01-01 11:50:29');
INSERT INTO `venue_feature` VALUES (91, 320, 'Dhanmondi', 'Community Center', 700, 'Not Allowed', 'Allowed', 7, '10000 Taka Advance', '10-5;6-11', 90000, 'Lalbag-Azimpur', 0, '2019-01-01 12:00:11', '2019-01-01 12:00:11');
INSERT INTO `venue_feature` VALUES (92, 321, 'Azimpur', 'Convention Hall', 1500, 'Not Allowed', 'Allowed', 15, '10000 Taka Advance', '12-4:30/7-11', 60000, 'Lalbag-Azimpur', 0, '2019-01-01 12:11:52', '2019-01-01 12:11:52');
INSERT INTO `venue_feature` VALUES (93, 322, 'Tejgoan', 'Convention Hall', 600, 'Not Allowed', 'Allowed', 30, '30% Advance', '12-4:30/7-11', 90000, 'gulshan-banani', 0, '2019-01-01 12:27:03', '2019-01-01 12:27:03');
INSERT INTO `venue_feature` VALUES (94, 323, 'Tejgaon', 'Restaurant', 120, 'Not Allowed', 'Allowed', 10, '50% advance', '10 am to 11pm', 450, 'gulshan-banani', 0, '2019-01-01 12:32:20', '2019-01-01 12:32:20');
INSERT INTO `venue_feature` VALUES (95, 324, 'Asad Gate', 'Convention Center', 1000, 'Not Allowed', 'Allowed', 20, '40% Advance', '12-4:30/7-11', 35000, 'shamoli-mohammadpur', 0, '2019-01-01 13:05:47', '2019-01-01 13:05:47');
INSERT INTO `venue_feature` VALUES (96, 325, 'Hemayetpur ', 'Resort', 400, 'Not Allowed', 'Allowed', 40, '40% Advance', '10pm to 11am', 100000, 'destination wedding', 0, '2019-01-01 13:18:13', '2019-01-01 13:18:13');
INSERT INTO `venue_feature` VALUES (97, 326, 'Mohammedpur', 'Restaurant', 70, 'Not Allowed', 'Allowed', 10, '50% Advance', '10am to 11pm', 350, 'shamoli-mohammadpur', 0, '2019-01-01 13:27:55', '2019-01-01 13:27:55');
INSERT INTO `venue_feature` VALUES (98, 327, 'Gazipur', 'Resort', 300, 'Not Allowed', 'Allowed', 50, '50% Advance', '24 Hours', 100000, 'destination wedding', 0, '2019-01-01 14:01:35', '2019-01-01 14:01:35');
INSERT INTO `venue_feature` VALUES (99, 328, 'Narayanganj', 'Resort', 700, 'Not Allowed', 'Allowed', 120, '50% Advance', '24 hours', 10000, 'destination wedding', 0, '2019-01-01 14:10:45', '2019-01-01 14:10:45');
INSERT INTO `venue_feature` VALUES (100, 329, 'Gazipur', 'Resort', 1000, 'Not Allowed', 'Allowed', 70, '50% Advance', '24 hours', 120000, NULL, 0, '2019-01-01 14:26:33', '2019-01-01 14:26:33');
INSERT INTO `venue_feature` VALUES (101, 330, 'Munshiganj', 'Resort', 500, 'Not Allowed', 'Allowed', 50, '50% advance', '24 Hours', 100000, 'destination wedding', 0, '2019-01-01 14:39:48', '2019-01-01 14:39:48');
INSERT INTO `venue_feature` VALUES (102, 331, 'Uttarkhan', 'Resort', 1200, 'Not Allowed', 'Allowed', 150, '50% advance', '24 Hours', 120000, 'destination wedding', 0, '2019-01-01 14:57:58', '2019-01-01 14:57:58');
INSERT INTO `venue_feature` VALUES (103, 332, 'Moghbazar', 'Restaurant', 70, 'Not Allowed', 'Allowed', 15, '50% Advance', '10 am to 11 pm', 350, 'destination wedding', 0, '2019-01-01 15:13:10', '2019-01-01 15:13:10');
INSERT INTO `venue_feature` VALUES (104, 333, 'Mohammadpur', 'Restaurant', 100, 'Not Allowed', 'Allowed', 10, '50% Advance', '10am to 11pm', 350, 'shamoli-mohammadpur', 0, '2019-01-01 15:27:37', '2019-01-01 15:27:37');
INSERT INTO `venue_feature` VALUES (105, 334, 'Mohammadpur', 'Restaurant', 120, 'Not Allowed', 'Allowed', 10, '50% Advance', '10 am to 11 pm', 350, 'shamoli-mohammadpur', 0, '2019-01-01 15:34:20', '2019-01-01 15:34:20');
INSERT INTO `venue_feature` VALUES (106, 335, 'Adabor', 'Restaurant', 350, 'Not Allowed', 'Allowed', 20, '50% Advance', '10 am to 11 pm', 350, 'shamoli-mohammadpur', 0, '2019-01-01 16:53:08', '2019-01-01 16:53:08');
INSERT INTO `venue_feature` VALUES (107, 336, 'Lalbagh', 'Restaurant', 100, 'Not Allowed', 'Allowed', 15, '50% Advance', '10 am to 11pm', 300, 'Lalbag-Azimpur', 0, '2019-01-01 17:05:42', '2019-01-01 17:05:42');
INSERT INTO `venue_feature` VALUES (108, 337, 'Mohammadpur', 'Restaurent', 70, 'Not Allowed', 'Allowed', 10, '50% Advance', '10 am to 11 pm', 300, NULL, 0, '2019-01-01 17:09:43', '2019-01-01 17:09:43');
INSERT INTO `venue_feature` VALUES (109, 338, 'Farmgate', 'Restaurant', 150, 'Not Allowed', 'Allowed', 10, '50% Advance', '10 am to 11 pm', 300, 'Mohakhali-Tejgaon', 0, '2019-01-01 17:33:00', '2019-01-01 17:33:00');
INSERT INTO `venue_feature` VALUES (110, 339, 'Farmgate', 'Restaurant', 80, 'Not Allowed', 'Allowed', 15, '50% Advance', '10 am to 11 pm', 300, 'Mohakhali-Tejgaon', 0, '2019-01-01 17:41:41', '2019-01-01 17:41:41');
INSERT INTO `venue_feature` VALUES (111, 340, 'Monipuri para', 'Restaurant', 120, 'Not Allowed', 'Allowed', 5, '50% Advance', '10 am to 11 pm', 450, 'Mohakhali-Tejgaon', 0, '2019-01-01 18:07:42', '2019-01-01 18:07:42');
INSERT INTO `venue_feature` VALUES (112, 341, 'Bijoy Shoroni', 'Restaurant', 100, 'Not Allowed', 'Allowed', 5, '50% Advance', '10 am to 11 pm', 300, 'Mohakhali-Tejgaon', 0, '2019-01-01 18:23:01', '2019-01-01 18:23:01');
INSERT INTO `venue_feature` VALUES (113, 342, 'Badda', 'Restaurant', 1000, 'Not Allowed', 'Allowed', 10, '50% Advance', '10 am to 11 pm', 500, 'Badda-Banasree', 0, '2019-01-01 19:00:02', '2019-01-01 19:00:02');
INSERT INTO `venue_feature` VALUES (114, 343, 'Banasree', 'Restaurant', 80, 'Not Allowed', 'Allowed', 5, '50% Advance', '10 am to 11 pm', 350, 'Badda-Banasree', 0, '2019-01-01 19:03:57', '2019-01-01 19:03:57');
INSERT INTO `venue_feature` VALUES (115, 344, 'Banasree', 'Restaurant', 200, 'Not Allowed', 'Allowed', 5, '50% Advance', '10 am to 11 pm', 400, 'Badda-Banasree', 0, '2019-01-01 19:08:53', '2019-01-01 19:08:53');
INSERT INTO `venue_feature` VALUES (116, 345, 'Banasree', 'Party Center', 450, 'Not Allowed', 'Allowed', 5, '50% Advance', '10 am to 11 pm', 500, 'Badda-Banasree', 0, '2019-01-01 19:12:17', '2019-01-01 19:12:47');
INSERT INTO `venue_feature` VALUES (117, 346, 'Mohammedpur', 'Convention Center', 4000, 'Not Allowed', 'Allowed', 100, '50% Advance', '12-4:30/7-11', 60000, 'shamoli-mohammadpur', 0, '2019-01-02 11:59:34', '2019-01-02 11:59:34');
INSERT INTO `venue_feature` VALUES (118, 347, 'Khilgaon', 'Convention Hall', 1000, 'Not Allowed', 'Allowed', 20, '10000 Taka Advance', '12-4:30/7-11', 25000, 'Rampura-Khilgaon', 0, '2019-01-02 12:55:12', '2019-01-02 12:55:12');
INSERT INTO `venue_feature` VALUES (119, 348, 'Badda', 'Convention Center', 2200, 'Not Allowed', 'Available', 25, '40% Advance', '12-4:30/7-11', 10000, 'Badda-Banasree', 0, '2019-01-02 13:12:32', '2019-01-02 13:12:32');
INSERT INTO `venue_feature` VALUES (120, 349, 'Rampura', 'Restaurant', 100, 'Not Allowed', 'Allowed', 5, '50% advance', '10 am to 11 pm', 350, 'Rampura-Khilgaon', 0, '2019-01-02 13:22:16', '2019-01-02 13:22:16');
INSERT INTO `venue_feature` VALUES (121, 356, 'Purana Paltan', 'Restaurantand Convention Hall', 600, 'Not Allowed', 'Allowed', 50, '50% Advance', '10 am to 11 pm', 60000, 'Paltan-Motijheel', 0, '2019-01-02 14:07:07', '2019-01-02 14:07:07');
INSERT INTO `venue_feature` VALUES (122, 357, 'Khilgaon', 'Restaurant', 60, 'Not Allowed', 'Allowed', 5, '50% Advance', '10 am to 11 pm', 300, NULL, 0, '2019-01-02 14:11:39', '2019-01-02 14:11:39');
INSERT INTO `venue_feature` VALUES (123, 358, 'Banasree', 'Party Center', 100, 'Not Allowed', 'Allowed', 7, '50% Advance', '10 am to 11 pm', 350, 'Badda-Banasree', 0, '2019-01-02 14:15:59', '2019-01-02 14:15:59');
INSERT INTO `venue_feature` VALUES (124, 359, '2', '2', 2, '2', '2', 2, '2', '2', 2, 'Mohakhali-Khilgaon', 0, '2019-01-30 18:22:14', '2019-01-30 18:22:14');
INSERT INTO `venue_feature` VALUES (125, 360, '2', '2', 2, '2', '2', 2, '2', '2', 2, 'uttara', 0, '2019-03-03 12:06:04', '2019-03-03 12:06:04');
INSERT INTO `venue_feature` VALUES (126, 375, 'f', 'f', 0, 'f', 'f', 0, 'f', 'f', 0, 'destination wedding', 0, '2019-04-11 14:01:21', '2019-04-11 14:01:21');
INSERT INTO `venue_feature` VALUES (127, 376, 'g', 'g', 0, 'g', 'g', 0, 'g', 'g', 0, 'uttara', 0, '2019-04-11 17:06:41', '2019-04-11 17:06:41');
INSERT INTO `venue_feature` VALUES (128, 377, 'g', 'g', 0, 'g', 'g', 0, 'g', 'g', 0, 'uttara', 0, '2019-04-11 17:10:55', '2019-04-11 17:10:55');
INSERT INTO `venue_feature` VALUES (129, 389, 'v', 'v', 0, 'v', 'v', 0, 'vv', 'v', 0, 'destination wedding', 0, '2019-04-15 11:38:08', '2019-04-15 11:38:08');

-- ----------------------------
-- Table structure for wishlist
-- ----------------------------
DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `catagory_id` int(11) NULL DEFAULT NULL,
  `vendors_id` int(11) NULL DEFAULT NULL,
  `products_id` int(11) NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
