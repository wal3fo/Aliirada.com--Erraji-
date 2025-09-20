/*
 Navicat Premium Dump SQL

 Source Server         : Orange Nexa LLC
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : aliirada

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 29/08/2025 15:48:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nexa_categories
-- ----------------------------
DROP TABLE IF EXISTS `nexa_categories`;
CREATE TABLE `nexa_categories`  (
  `Id` int NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `About` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Landing` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Locked` tinyint(1) NOT NULL DEFAULT 0,
  `TimeOf` datetime NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nexa_categories
-- ----------------------------
INSERT INTO `nexa_categories` VALUES (1, 'Tunics', 'None', 'tunics.jpg', 0, '2025-06-02 21:52:41');
INSERT INTO `nexa_categories` VALUES (2, 'Dresses', 'None', 'dresses.jpg', 0, '2025-06-02 21:52:41');
INSERT INTO `nexa_categories` VALUES (3, 'Skirts', 'None', 'skirts.jpg', 0, '2025-06-02 21:52:41');
INSERT INTO `nexa_categories` VALUES (4, 'Hijabs', 'None', 'hijabs.jpg', 0, '2025-06-02 21:52:41');
INSERT INTO `nexa_categories` VALUES (5, 'Abayas', 'None', 'abayas.jpg', 0, '2025-06-02 21:52:41');
INSERT INTO `nexa_categories` VALUES (6, 'Sets', 'None', 'sets.jpg', 0, '2025-06-02 21:52:41');

-- ----------------------------
-- Table structure for nexa_newsletter
-- ----------------------------
DROP TABLE IF EXISTS `nexa_newsletter`;
CREATE TABLE `nexa_newsletter`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Locked` tinyint(1) NOT NULL DEFAULT 0,
  `TimeOf` datetime NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nexa_newsletter
-- ----------------------------

-- ----------------------------
-- Table structure for nexa_pictures
-- ----------------------------
DROP TABLE IF EXISTS `nexa_pictures`;
CREATE TABLE `nexa_pictures`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ProductId` int NOT NULL,
  `TimeOf` datetime NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 66 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nexa_pictures
-- ----------------------------
INSERT INTO `nexa_pictures` VALUES (47, '1751621296_neutral-animal-wool-blend-trucker- (1).webp', 50, '2025-07-04 09:28:16');
INSERT INTO `nexa_pictures` VALUES (48, '1751621296_neutral-animal-wool-blend-trucker- (2).webp', 50, '2025-07-04 09:28:16');
INSERT INTO `nexa_pictures` VALUES (49, '1751621296_neutral-animal-wool-blend-trucker-.webp', 50, '2025-07-04 09:28:16');
INSERT INTO `nexa_pictures` VALUES (50, '1752526462_jersey_print_detail_oversized_t-shirt_1812-000945-0001_2_social.jpg', 51, '2025-07-14 20:54:22');
INSERT INTO `nexa_pictures` VALUES (51, '1752526462_jersey_print_detail_oversized_t-shirt-1812-000945-0001_0017.jpg', 51, '2025-07-14 20:54:22');
INSERT INTO `nexa_pictures` VALUES (52, '1752526462_jersey_print_detail_oversized_t-shirt-1812-000945-0001_0018.jpg', 51, '2025-07-14 20:54:22');
INSERT INTO `nexa_pictures` VALUES (53, '1752526462_jersey_print_detail_oversized_t-shirt-1812-000945-0001_0019.jpg', 51, '2025-07-14 20:54:22');
INSERT INTO `nexa_pictures` VALUES (54, '1752526462_jersey_print_detail_oversized_t-shirt-1812-000945-0001_0020_studio.jpg', 51, '2025-07-14 20:54:22');
INSERT INTO `nexa_pictures` VALUES (55, '1752528060_jersey_print_detail_oversized_t-shirt_1812-000945-0001_2_social.jpg', 52, '2025-07-14 21:21:00');
INSERT INTO `nexa_pictures` VALUES (56, '1752528060_jersey_print_detail_oversized_t-shirt-1812-000945-0001_0017.jpg', 52, '2025-07-14 21:21:00');
INSERT INTO `nexa_pictures` VALUES (57, '1752528060_jersey_print_detail_oversized_t-shirt-1812-000945-0001_0018.jpg', 52, '2025-07-14 21:21:00');
INSERT INTO `nexa_pictures` VALUES (58, '1752528060_jersey_print_detail_oversized_t-shirt-1812-000945-0001_0019.jpg', 52, '2025-07-14 21:21:00');
INSERT INTO `nexa_pictures` VALUES (59, '1752528060_jersey_print_detail_oversized_t-shirt-1812-000945-0001_0020_studio.jpg', 52, '2025-07-14 21:21:00');
INSERT INTO `nexa_pictures` VALUES (60, '1752529726_flowy_maxi_dress_1812-001004-0169_1_campaign.jpg', 53, '2025-07-14 21:48:46');
INSERT INTO `nexa_pictures` VALUES (61, '1752529726_flowy_maxi_dress_1812-001004-0169_3_campaign.jpg', 53, '2025-07-14 21:48:46');
INSERT INTO `nexa_pictures` VALUES (62, '1752529726_flowy_maxi_dress_1812-001004-0169_5_campaign.jpg', 53, '2025-07-14 21:48:46');
INSERT INTO `nexa_pictures` VALUES (63, '1752529726_flowy_maxi_dress_1812-001004-0169_6_campaign.jpg', 53, '2025-07-14 21:48:46');
INSERT INTO `nexa_pictures` VALUES (64, '1752529726_flowy_skirt_maxi_dress_1812-001004-0169_0007_flatlayf.jpg', 53, '2025-07-14 21:48:46');
INSERT INTO `nexa_pictures` VALUES (65, '1752529726_flowy_skirt_maxi_dress_1812-001004-0169_0008_flatlayb.jpg', 53, '2025-07-14 21:48:46');

-- ----------------------------
-- Table structure for nexa_products
-- ----------------------------
DROP TABLE IF EXISTS `nexa_products`;
CREATE TABLE `nexa_products`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Category` int NOT NULL,
  `Quantity` int NOT NULL,
  `PriceOf` decimal(10, 2) NOT NULL,
  `Landing` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Popularity` int NOT NULL DEFAULT 0,
  `Locked` tinyint(1) NOT NULL DEFAULT 1,
  `TimeOf` datetime NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 54 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nexa_products
-- ----------------------------
INSERT INTO `nexa_products` VALUES (50, 'Animal Wool Blend Trucker', 'Hear her roar. Feel fierce in this trucker, made from a high quality wool blend material with an animal print design, single breasted detail and zip up and Button fastening. Take a walk on the wild side in this. Style with wide leg pants, a white tee and fresh sneakers for a look that can\'t be tamed.<br />\n<br />\nAnimal Wool Blend Trucker<br />\nHigh Quality Material<br />\nAnimal Print Design<br />\nZip Up and Button Fastening<br />\n100% Polyester excluding trims<br />\n<br />\nSKU: #BGG23593<br />\n*Pricing Policy<br />\nOur percentage off promotions, discounts, or sale markdowns are customarily based on our own opinion of the value of this product, which is not intended to reflect a former price at which this product has sold in the recent past. This amount represents our opinion of the full retail value of this product today based on our own assessment after considering a number of factors. That’s why before checking out with your new Nasty, it’s important to acknowledge that you understand this.', 1, 100, 1299.00, '1751621296_female-neutral-animal-wool-blend-trucker-.webp', 0, 0, '2025-07-04 09:28:16');
INSERT INTO `nexa_products` VALUES (52, 'Jersey Print Detail Oversized T-shirt', 'rtrvtrvttrvrrtvtr<br />\n<br />\nvrtvtrvrtvtr<br />\nvrtvt<br />\n<br />\nvrtvrtr', 2, 100, 999.00, '1752528060_jersey_print_detail_oversized_t-shirt_1812-000945-0001_1_campaign.jpg', 0, 0, '2025-07-14 21:21:00');
INSERT INTO `nexa_products` VALUES (53, 'Smock Detail Anglaise Maxi Dress', 'This maxi dress features a stretchy smocking. It has a flowy skirt with embroidery with a floral print and a lining. This maxi dress comes in light-blue.', 3, 50, 850.00, '1752529726_flowy_maxi_dress_1812-001004-0169_2_campaign-copy.jpg', 0, 0, '2025-07-14 21:48:46');

-- ----------------------------
-- Table structure for nexa_shippings
-- ----------------------------
DROP TABLE IF EXISTS `nexa_shippings`;
CREATE TABLE `nexa_shippings`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `City` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Cost` decimal(10, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 514 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nexa_shippings
-- ----------------------------
INSERT INTO `nexa_shippings` VALUES (1, 'Marrakech', 19.00);
INSERT INTO `nexa_shippings` VALUES (2, 'Meknes', 40.00);
INSERT INTO `nexa_shippings` VALUES (3, 'Mhaya', 45.00);
INSERT INTO `nexa_shippings` VALUES (4, 'Ain Taoujdate', 45.00);
INSERT INTO `nexa_shippings` VALUES (5, 'Sabaa Aiyoun', 45.00);
INSERT INTO `nexa_shippings` VALUES (6, 'Boufakrane', 45.00);
INSERT INTO `nexa_shippings` VALUES (7, 'El Hajeb', 45.00);
INSERT INTO `nexa_shippings` VALUES (8, 'Bouderbala', 45.00);
INSERT INTO `nexa_shippings` VALUES (10, 'Boujdour', 45.00);
INSERT INTO `nexa_shippings` VALUES (11, 'Tetouan', 40.00);
INSERT INTO `nexa_shippings` VALUES (12, 'Martil', 45.00);
INSERT INTO `nexa_shippings` VALUES (13, 'M Diq', 45.00);
INSERT INTO `nexa_shippings` VALUES (14, 'Fnideq', 45.00);
INSERT INTO `nexa_shippings` VALUES (15, 'Errachidia', 45.00);
INSERT INTO `nexa_shippings` VALUES (16, 'Oujda', 45.00);
INSERT INTO `nexa_shippings` VALUES (17, 'Nador', 45.00);
INSERT INTO `nexa_shippings` VALUES (18, 'Selouane', 45.00);
INSERT INTO `nexa_shippings` VALUES (20, 'Al Aaroui', 45.00);
INSERT INTO `nexa_shippings` VALUES (21, 'Zaio', 45.00);
INSERT INTO `nexa_shippings` VALUES (22, 'Driouch', 45.00);
INSERT INTO `nexa_shippings` VALUES (23, 'Khouribga', 35.00);
INSERT INTO `nexa_shippings` VALUES (24, 'Oued Zem', 45.00);
INSERT INTO `nexa_shippings` VALUES (25, 'Boulanouar', 45.00);
INSERT INTO `nexa_shippings` VALUES (26, 'Boujniba', 45.00);
INSERT INTO `nexa_shippings` VALUES (27, 'Bir Mezoui', 45.00);
INSERT INTO `nexa_shippings` VALUES (28, 'Khemisset', 45.00);
INSERT INTO `nexa_shippings` VALUES (29, 'Tiflet', 45.00);
INSERT INTO `nexa_shippings` VALUES (30, 'Mohammedia', 40.00);
INSERT INTO `nexa_shippings` VALUES (31, 'Ain Harrouda', 40.00);
INSERT INTO `nexa_shippings` VALUES (32, 'Dakhla', 45.00);
INSERT INTO `nexa_shippings` VALUES (33, 'Kenitra', 35.00);
INSERT INTO `nexa_shippings` VALUES (34, 'Sidi Taibi', 45.00);
INSERT INTO `nexa_shippings` VALUES (35, 'Sidi Yahya El Gharb', 45.00);
INSERT INTO `nexa_shippings` VALUES (37, 'Mechra Bel Ksiri', 45.00);
INSERT INTO `nexa_shippings` VALUES (38, 'Sidi Sliman (reg kacem)', 45.00);
INSERT INTO `nexa_shippings` VALUES (39, 'Sidi Kacem', 45.00);
INSERT INTO `nexa_shippings` VALUES (40, 'Mehdya', 45.00);
INSERT INTO `nexa_shippings` VALUES (41, 'Tan Tan', 45.00);
INSERT INTO `nexa_shippings` VALUES (42, 'Guelmim', 45.00);
INSERT INTO `nexa_shippings` VALUES (43, 'Bouizakarne', 45.00);
INSERT INTO `nexa_shippings` VALUES (47, 'Timoulay', 45.00);
INSERT INTO `nexa_shippings` VALUES (48, 'Sidi Ifni', 45.00);
INSERT INTO `nexa_shippings` VALUES (49, 'Rabat', 35.00);
INSERT INTO `nexa_shippings` VALUES (50, 'Sale', 35.00);
INSERT INTO `nexa_shippings` VALUES (51, 'Sale Al Jadida-سلا', 40.00);
INSERT INTO `nexa_shippings` VALUES (52, 'Temara', 40.00);
INSERT INTO `nexa_shippings` VALUES (53, 'Tamesna', 45.00);
INSERT INTO `nexa_shippings` VALUES (54, 'Skhirat', 45.00);
INSERT INTO `nexa_shippings` VALUES (55, 'Ouarzazat', 45.00);
INSERT INTO `nexa_shippings` VALUES (56, 'Ait Zineb', 45.00);
INSERT INTO `nexa_shippings` VALUES (57, 'Tabounte', 45.00);
INSERT INTO `nexa_shippings` VALUES (58, 'Tajda', 45.00);
INSERT INTO `nexa_shippings` VALUES (59, 'Timdline', 45.00);
INSERT INTO `nexa_shippings` VALUES (60, 'Tifoultoute', 45.00);
INSERT INTO `nexa_shippings` VALUES (61, 'Ifran', 45.00);
INSERT INTO `nexa_shippings` VALUES (62, 'Azrou(reg meknes)', 45.00);
INSERT INTO `nexa_shippings` VALUES (63, 'Agadir', 35.00);
INSERT INTO `nexa_shippings` VALUES (64, 'Inzegane', 40.00);
INSERT INTO `nexa_shippings` VALUES (65, 'Dcheira', 40.00);
INSERT INTO `nexa_shippings` VALUES (66, 'Ait Meloul', 40.00);
INSERT INTO `nexa_shippings` VALUES (67, 'Sidi Bibi - Agadir', 45.00);
INSERT INTO `nexa_shippings` VALUES (68, 'Taghazoute', 45.00);
INSERT INTO `nexa_shippings` VALUES (69, 'Fes', 40.00);
INSERT INTO `nexa_shippings` VALUES (70, 'Ain Bida', 45.00);
INSERT INTO `nexa_shippings` VALUES (71, 'Oulad Ettayeb', 45.00);
INSERT INTO `nexa_shippings` VALUES (72, 'Ain Allah', 45.00);
INSERT INTO `nexa_shippings` VALUES (73, 'Sidi Harazem', 45.00);
INSERT INTO `nexa_shippings` VALUES (74, 'Essmara', 45.00);
INSERT INTO `nexa_shippings` VALUES (75, 'Berrchid', 35.00);
INSERT INTO `nexa_shippings` VALUES (76, 'Settat', 35.00);
INSERT INTO `nexa_shippings` VALUES (77, 'Deroua', 45.00);
INSERT INTO `nexa_shippings` VALUES (78, 'Nouaceur', 45.00);
INSERT INTO `nexa_shippings` VALUES (79, 'Had Soualem', 45.00);
INSERT INTO `nexa_shippings` VALUES (80, 'Al Hoceima', 45.00);
INSERT INTO `nexa_shippings` VALUES (81, 'Ajdir (Région Hociema)', 45.00);
INSERT INTO `nexa_shippings` VALUES (82, 'Boukidaren', 45.00);
INSERT INTO `nexa_shippings` VALUES (83, 'Ait Kamra', 45.00);
INSERT INTO `nexa_shippings` VALUES (84, 'Imzouren', 45.00);
INSERT INTO `nexa_shippings` VALUES (85, 'Youssoufia', 45.00);
INSERT INTO `nexa_shippings` VALUES (86, 'Essaouira', 35.00);
INSERT INTO `nexa_shippings` VALUES (87, 'Ounagha', 45.00);
INSERT INTO `nexa_shippings` VALUES (88, 'Taftecht', 45.00);
INSERT INTO `nexa_shippings` VALUES (89, 'Had Draa', 45.00);
INSERT INTO `nexa_shippings` VALUES (90, 'Mejji', 45.00);
INSERT INTO `nexa_shippings` VALUES (91, 'Talmest', 45.00);
INSERT INTO `nexa_shippings` VALUES (92, 'Akermoud', 45.00);
INSERT INTO `nexa_shippings` VALUES (93, 'Zaouiet Bouzarktoune', 45.00);
INSERT INTO `nexa_shippings` VALUES (94, 'Ghazoua', 45.00);
INSERT INTO `nexa_shippings` VALUES (95, 'Smimou', 45.00);
INSERT INTO `nexa_shippings` VALUES (96, 'Tamanar', 45.00);
INSERT INTO `nexa_shippings` VALUES (97, 'Sidi Kaouki', 45.00);
INSERT INTO `nexa_shippings` VALUES (98, 'Tanger', 40.00);
INSERT INTO `nexa_shippings` VALUES (99, 'Mrirt', 45.00);
INSERT INTO `nexa_shippings` VALUES (100, 'Khenifra', 45.00);
INSERT INTO `nexa_shippings` VALUES (101, 'Ben Guerir', 35.00);
INSERT INTO `nexa_shippings` VALUES (102, 'Taroudannt', 45.00);
INSERT INTO `nexa_shippings` VALUES (103, 'Oulad Teima', 45.00);
INSERT INTO `nexa_shippings` VALUES (104, 'Ait Laaza', 45.00);
INSERT INTO `nexa_shippings` VALUES (105, 'Aoulouz', 45.00);
INSERT INTO `nexa_shippings` VALUES (107, 'Taliouine', 45.00);
INSERT INTO `nexa_shippings` VALUES (108, 'Sebt El Guerdane', 45.00);
INSERT INTO `nexa_shippings` VALUES (109, 'Berkane', 45.00);
INSERT INTO `nexa_shippings` VALUES (110, 'Saidia', 45.00);
INSERT INTO `nexa_shippings` VALUES (111, 'Ras El Ma (REG NADOR)', 45.00);
INSERT INTO `nexa_shippings` VALUES (112, 'Bni Drar', 45.00);
INSERT INTO `nexa_shippings` VALUES (113, 'Ahfir', 45.00);
INSERT INTO `nexa_shippings` VALUES (114, 'Aklim', 45.00);
INSERT INTO `nexa_shippings` VALUES (115, 'Zeghanghane', 45.00);
INSERT INTO `nexa_shippings` VALUES (116, 'Farkhana', 45.00);
INSERT INTO `nexa_shippings` VALUES (117, 'Taza', 45.00);
INSERT INTO `nexa_shippings` VALUES (118, 'Guercif', 45.00);
INSERT INTO `nexa_shippings` VALUES (119, 'Tiznit', 45.00);
INSERT INTO `nexa_shippings` VALUES (120, 'Safi', 35.00);
INSERT INTO `nexa_shippings` VALUES (121, 'Had Hrara', 45.00);
INSERT INTO `nexa_shippings` VALUES (122, 'Sebt Gzoula', 45.00);
INSERT INTO `nexa_shippings` VALUES (125, 'Larache', 40.00);
INSERT INTO `nexa_shippings` VALUES (126, 'Ksar El Kebir', 45.00);
INSERT INTO `nexa_shippings` VALUES (127, 'Chefchaouen', 45.00);
INSERT INTO `nexa_shippings` VALUES (128, 'Sidi Bernoussi', 40.00);
INSERT INTO `nexa_shippings` VALUES (129, 'Casablanca', 35.00);
INSERT INTO `nexa_shippings` VALUES (130, 'Sidi Messaoud', 40.00);
INSERT INTO `nexa_shippings` VALUES (131, 'Bouskoura', 40.00);
INSERT INTO `nexa_shippings` VALUES (132, 'Dar Bouaza', 40.00);
INSERT INTO `nexa_shippings` VALUES (133, 'Mediouna', 45.00);
INSERT INTO `nexa_shippings` VALUES (134, 'Tit Melil', 40.00);
INSERT INTO `nexa_shippings` VALUES (135, 'El Kelaa Des Sraghna', 35.00);
INSERT INTO `nexa_shippings` VALUES (136, 'El Jadida', 35.00);
INSERT INTO `nexa_shippings` VALUES (138, 'Sidi Bouzid', 40.00);
INSERT INTO `nexa_shippings` VALUES (140, 'Oualidia', 45.00);
INSERT INTO `nexa_shippings` VALUES (141, 'Sidi Bennour', 45.00);
INSERT INTO `nexa_shippings` VALUES (142, 'Beni Ansar', 45.00);
INSERT INTO `nexa_shippings` VALUES (143, 'Izemmouren', 45.00);
INSERT INTO `nexa_shippings` VALUES (144, 'Laayoune', 45.00);
INSERT INTO `nexa_shippings` VALUES (145, 'El Marsa', 45.00);
INSERT INTO `nexa_shippings` VALUES (146, 'Beni Mellal', 35.00);
INSERT INTO `nexa_shippings` VALUES (147, 'Fquih Ben Salah', 45.00);
INSERT INTO `nexa_shippings` VALUES (148, 'Sebt Oulad Nemma', 45.00);
INSERT INTO `nexa_shippings` VALUES (149, 'Afourer', 45.00);
INSERT INTO `nexa_shippings` VALUES (150, 'Ouled Yaiche', 45.00);
INSERT INTO `nexa_shippings` VALUES (151, 'El Ksiba', 45.00);
INSERT INTO `nexa_shippings` VALUES (152, 'Ain Aouda', 45.00);
INSERT INTO `nexa_shippings` VALUES (153, 'Tamansourt', 35.00);
INSERT INTO `nexa_shippings` VALUES (154, 'Benslimane ( reg mohamedia)', 40.00);
INSERT INTO `nexa_shippings` VALUES (156, 'Kasbah Tadla', 45.00);
INSERT INTO `nexa_shippings` VALUES (157, 'Chemaia', 45.00);
INSERT INTO `nexa_shippings` VALUES (160, 'Ourika', 45.00);
INSERT INTO `nexa_shippings` VALUES (161, 'Tahannaout', 40.00);
INSERT INTO `nexa_shippings` VALUES (162, 'Ait Ourir', 45.00);
INSERT INTO `nexa_shippings` VALUES (163, 'Touama', 45.00);
INSERT INTO `nexa_shippings` VALUES (164, 'Oudaya', 40.00);
INSERT INTO `nexa_shippings` VALUES (165, 'Chichaoua', 40.00);
INSERT INTO `nexa_shippings` VALUES (166, 'Assilah', 45.00);
INSERT INTO `nexa_shippings` VALUES (167, 'Bouznika', 45.00);
INSERT INTO `nexa_shippings` VALUES (168, 'Sefrou', 45.00);
INSERT INTO `nexa_shippings` VALUES (169, 'Taourirt', 45.00);
INSERT INTO `nexa_shippings` VALUES (170, 'Chouiter', 45.00);
INSERT INTO `nexa_shippings` VALUES (171, 'Sidi Allal el Bahraoui', 45.00);
INSERT INTO `nexa_shippings` VALUES (172, 'Romani', 45.00);
INSERT INTO `nexa_shippings` VALUES (173, 'Oulmas', 45.00);
INSERT INTO `nexa_shippings` VALUES (174, 'Ouazzane', 45.00);
INSERT INTO `nexa_shippings` VALUES (175, 'Ain Dorij', 45.00);
INSERT INTO `nexa_shippings` VALUES (177, 'Sidi Redouane', 45.00);
INSERT INTO `nexa_shippings` VALUES (179, 'Moqrisset', 45.00);
INSERT INTO `nexa_shippings` VALUES (180, 'Zoumi', 45.00);
INSERT INTO `nexa_shippings` VALUES (181, 'Harhoura', 40.00);
INSERT INTO `nexa_shippings` VALUES (182, 'Laattaouia', 45.00);
INSERT INTO `nexa_shippings` VALUES (183, 'Rissani', 45.00);
INSERT INTO `nexa_shippings` VALUES (184, 'Arfoud', 45.00);
INSERT INTO `nexa_shippings` VALUES (185, 'Merzouga', 45.00);
INSERT INTO `nexa_shippings` VALUES (186, 'Taddart - TAZA -', 45.00);
INSERT INTO `nexa_shippings` VALUES (187, 'Bni Bouayach', 45.00);
INSERT INTO `nexa_shippings` VALUES (188, 'Azilal', 45.00);
INSERT INTO `nexa_shippings` VALUES (189, 'Ouaouizeght', 45.00);
INSERT INTO `nexa_shippings` VALUES (190, 'Bejaad', 45.00);
INSERT INTO `nexa_shippings` VALUES (191, 'Tinghir', 45.00);
INSERT INTO `nexa_shippings` VALUES (192, 'Boumalne Dades', 45.00);
INSERT INTO `nexa_shippings` VALUES (193, 'Kalaat MGouna', 45.00);
INSERT INTO `nexa_shippings` VALUES (194, 'Alnif', 45.00);
INSERT INTO `nexa_shippings` VALUES (195, 'Bou Adel', 45.00);
INSERT INTO `nexa_shippings` VALUES (196, 'Zrizer', 45.00);
INSERT INTO `nexa_shippings` VALUES (199, 'Ain Aicha', 45.00);
INSERT INTO `nexa_shippings` VALUES (200, 'Taounate', 45.00);
INSERT INTO `nexa_shippings` VALUES (201, 'Awrir', 45.00);
INSERT INTO `nexa_shippings` VALUES (202, 'Ait amira', 45.00);
INSERT INTO `nexa_shippings` VALUES (203, 'Belfaa', 45.00);
INSERT INTO `nexa_shippings` VALUES (204, 'Anza', 45.00);
INSERT INTO `nexa_shippings` VALUES (205, 'DERDARA', 45.00);
INSERT INTO `nexa_shippings` VALUES (206, 'Bab Taza', 45.00);
INSERT INTO `nexa_shippings` VALUES (207, 'AKCHOUR', 45.00);
INSERT INTO `nexa_shippings` VALUES (208, 'Bab berred', 45.00);
INSERT INTO `nexa_shippings` VALUES (209, 'El Jebeha', 45.00);
INSERT INTO `nexa_shippings` VALUES (210, 'Midelt', 45.00);
INSERT INTO `nexa_shippings` VALUES (211, 'Jerada', 45.00);
INSERT INTO `nexa_shippings` VALUES (212, 'Bouarfa', 45.00);
INSERT INTO `nexa_shippings` VALUES (213, 'Laayoun Cherqia', 45.00);
INSERT INTO `nexa_shippings` VALUES (214, 'Zagora', 45.00);
INSERT INTO `nexa_shippings` VALUES (215, 'Tamegroute', 45.00);
INSERT INTO `nexa_shippings` VALUES (216, 'Tagomite', 45.00);
INSERT INTO `nexa_shippings` VALUES (217, 'Mhamid Lghezlane', 45.00);
INSERT INTO `nexa_shippings` VALUES (218, 'Agdz', 45.00);
INSERT INTO `nexa_shippings` VALUES (219, 'Nkob', 45.00);
INSERT INTO `nexa_shippings` VALUES (220, 'Tazzarine', 45.00);
INSERT INTO `nexa_shippings` VALUES (222, 'Errich', 45.00);
INSERT INTO `nexa_shippings` VALUES (223, 'Missour', 45.00);
INSERT INTO `nexa_shippings` VALUES (224, 'Boumia', 45.00);
INSERT INTO `nexa_shippings` VALUES (225, 'Tinjdad', 45.00);
INSERT INTO `nexa_shippings` VALUES (226, 'Gulmima - errachidia', 45.00);
INSERT INTO `nexa_shippings` VALUES (227, 'Sidi Bouknadel', 40.00);
INSERT INTO `nexa_shippings` VALUES (228, 'Imintanoute', 45.00);
INSERT INTO `nexa_shippings` VALUES (229, 'Demnate', 40.00);
INSERT INTO `nexa_shippings` VALUES (230, 'Ouad Laou', 45.00);
INSERT INTO `nexa_shippings` VALUES (231, 'Cabo Negro', 45.00);
INSERT INTO `nexa_shippings` VALUES (232, 'Khmiss Zemamera', 45.00);
INSERT INTO `nexa_shippings` VALUES (234, 'Sidi Smail', 45.00);
INSERT INTO `nexa_shippings` VALUES (235, 'Oulad Fraj', 45.00);
INSERT INTO `nexa_shippings` VALUES (236, 'Mellalyène', 45.00);
INSERT INTO `nexa_shippings` VALUES (237, 'Sidi Rehal-casa', 45.00);
INSERT INTO `nexa_shippings` VALUES (238, 'Assa', 45.00);
INSERT INTO `nexa_shippings` VALUES (239, 'Assa', 45.00);
INSERT INTO `nexa_shippings` VALUES (240, 'Rehamna', 45.00);
INSERT INTO `nexa_shippings` VALUES (241, 'Lakhssas', 45.00);
INSERT INTO `nexa_shippings` VALUES (242, 'Aoufous', 45.00);
INSERT INTO `nexa_shippings` VALUES (243, 'Boudnib', 45.00);
INSERT INTO `nexa_shippings` VALUES (244, 'Ben Ahmed - BERRCHID -', 45.00);
INSERT INTO `nexa_shippings` VALUES (245, 'Sidi Bou Othmane', 45.00);
INSERT INTO `nexa_shippings` VALUES (246, 'Asni', 45.00);
INSERT INTO `nexa_shippings` VALUES (247, 'Souk Elarbaa Du Gharb', 45.00);
INSERT INTO `nexa_shippings` VALUES (248, 'Ajdir (Région Taza)', 45.00);
INSERT INTO `nexa_shippings` VALUES (250, 'Amzmiz', 40.00);
INSERT INTO `nexa_shippings` VALUES (251, 'Drarga', 40.00);
INSERT INTO `nexa_shippings` VALUES (253, 'Anza - Taddart', 40.00);
INSERT INTO `nexa_shippings` VALUES (254, 'Zayda', 45.00);
INSERT INTO `nexa_shippings` VALUES (255, 'Outat El Haj', 45.00);
INSERT INTO `nexa_shippings` VALUES (256, 'Tahla', 45.00);
INSERT INTO `nexa_shippings` VALUES (257, 'Oued Amlil', 45.00);
INSERT INTO `nexa_shippings` VALUES (258, 'Imouzzer Kandar', 45.00);
INSERT INTO `nexa_shippings` VALUES (260, 'Biogra', 45.00);
INSERT INTO `nexa_shippings` VALUES (261, 'Terfaya', 45.00);
INSERT INTO `nexa_shippings` VALUES (262, 'Tazenakht', 45.00);
INSERT INTO `nexa_shippings` VALUES (263, 'Figuig', 45.00);
INSERT INTO `nexa_shippings` VALUES (264, 'Tendrara', 45.00);
INSERT INTO `nexa_shippings` VALUES (266, 'Beni Tajjite', 45.00);
INSERT INTO `nexa_shippings` VALUES (267, 'Bouanane', 45.00);
INSERT INTO `nexa_shippings` VALUES (268, 'Tata', 45.00);
INSERT INTO `nexa_shippings` VALUES (270, 'Mzoudia', 40.00);
INSERT INTO `nexa_shippings` VALUES (271, 'Ksar Sghir', 45.00);
INSERT INTO `nexa_shippings` VALUES (272, 'Tamelelt', 45.00);
INSERT INTO `nexa_shippings` VALUES (273, 'El Gara', 40.00);
INSERT INTO `nexa_shippings` VALUES (274, 'Mirleft', 45.00);
INSERT INTO `nexa_shippings` VALUES (275, 'lqliaa', 45.00);
INSERT INTO `nexa_shippings` VALUES (276, 'oulad berhil', 45.00);
INSERT INTO `nexa_shippings` VALUES (277, 'zaida', 45.00);
INSERT INTO `nexa_shippings` VALUES (279, 'targuist', 45.00);
INSERT INTO `nexa_shippings` VALUES (280, 'issaguen', 45.00);
INSERT INTO `nexa_shippings` VALUES (281, 'tala youssef', 45.00);
INSERT INTO `nexa_shippings` VALUES (282, 'Jaadar', 45.00);
INSERT INTO `nexa_shippings` VALUES (283, 'Midar', 45.00);
INSERT INTO `nexa_shippings` VALUES (284, 'Ben Taieb', 45.00);
INSERT INTO `nexa_shippings` VALUES (286, 'Tafersit', 45.00);
INSERT INTO `nexa_shippings` VALUES (287, 'Dar El Kebdani', 45.00);
INSERT INTO `nexa_shippings` VALUES (288, 'Oulad Settout', 45.00);
INSERT INTO `nexa_shippings` VALUES (289, 'Bouarg', 45.00);
INSERT INTO `nexa_shippings` VALUES (290, 'Arekmane', 45.00);
INSERT INTO `nexa_shippings` VALUES (291, 'Krona', 45.00);
INSERT INTO `nexa_shippings` VALUES (294, 'Annual', 45.00);
INSERT INTO `nexa_shippings` VALUES (295, 'Amezzaourou', 45.00);
INSERT INTO `nexa_shippings` VALUES (296, 'BENI CHIKER', 45.00);
INSERT INTO `nexa_shippings` VALUES (297, 'Mariouari', 45.00);
INSERT INTO `nexa_shippings` VALUES (298, 'Tiztoutine', 45.00);
INSERT INTO `nexa_shippings` VALUES (299, 'Tamaris', 40.00);
INSERT INTO `nexa_shippings` VALUES (300, 'Karia Be Mohammed', 45.00);
INSERT INTO `nexa_shippings` VALUES (301, 'Taddart - Charaf - AGADIR', 35.00);
INSERT INTO `nexa_shippings` VALUES (302, 'Ben Ahmed - CHEFCHAOUEN -', 45.00);
INSERT INTO `nexa_shippings` VALUES (303, 'Tnine Chtouka (el jadida)', 45.00);
INSERT INTO `nexa_shippings` VALUES (304, 'AIN CHGAG', 45.00);
INSERT INTO `nexa_shippings` VALUES (305, 'Tafraoute', 45.00);
INSERT INTO `nexa_shippings` VALUES (306, 'Houara', 45.00);
INSERT INTO `nexa_shippings` VALUES (307, 'ERRAHMA VILLE', 40.00);
INSERT INTO `nexa_shippings` VALUES (308, 'azrou ait melloul', 45.00);
INSERT INTO `nexa_shippings` VALUES (309, 'Ben Yakhlef', 45.00);
INSERT INTO `nexa_shippings` VALUES (310, 'El Mansouria', 45.00);
INSERT INTO `nexa_shippings` VALUES (312, 'cap beddouza', 45.00);
INSERT INTO `nexa_shippings` VALUES (313, 'Jemâa-Shaim', 45.00);
INSERT INTO `nexa_shippings` VALUES (314, 'El Borouj', 45.00);
INSERT INTO `nexa_shippings` VALUES (315, 'oulad said settat', 45.00);
INSERT INTO `nexa_shippings` VALUES (316, 'sidi hajjaj (settat)', 45.00);
INSERT INTO `nexa_shippings` VALUES (317, 'Ras El Ain (settat)', 45.00);
INSERT INTO `nexa_shippings` VALUES (318, 'Guisser (settat)', 45.00);
INSERT INTO `nexa_shippings` VALUES (319, 'dar chaffai(settat)', 45.00);
INSERT INTO `nexa_shippings` VALUES (320, 'Lakhyayeta', 45.00);
INSERT INTO `nexa_shippings` VALUES (321, 'Nzalat Laadam', 45.00);
INSERT INTO `nexa_shippings` VALUES (322, 'Oulad Zidoh', 45.00);
INSERT INTO `nexa_shippings` VALUES (323, 'souiria Guedima (REG SAFI)', 45.00);
INSERT INTO `nexa_shippings` VALUES (324, 'Jorf El Melha', 45.00);
INSERT INTO `nexa_shippings` VALUES (325, 'Ain Beida', 45.00);
INSERT INTO `nexa_shippings` VALUES (326, 'Mokrisset', 45.00);
INSERT INTO `nexa_shippings` VALUES (327, 'Oulad Ayad', 45.00);
INSERT INTO `nexa_shippings` VALUES (329, 'AIN ATIQ', 45.00);
INSERT INTO `nexa_shippings` VALUES (330, 'Moulay Bousselham', 45.00);
INSERT INTO `nexa_shippings` VALUES (331, 'Khenichet', 45.00);
INSERT INTO `nexa_shippings` VALUES (332, 'Zoumi-Ouazzane', 45.00);
INSERT INTO `nexa_shippings` VALUES (333, 'Teroual - Ouazzane', 45.00);
INSERT INTO `nexa_shippings` VALUES (334, 'Ain Dfali-Ouazzane', 45.00);
INSERT INTO `nexa_shippings` VALUES (335, 'Masmouda - Ouazzane', 45.00);
INSERT INTO `nexa_shippings` VALUES (336, 'Stehat-Chefchaouen', 45.00);
INSERT INTO `nexa_shippings` VALUES (337, 'Temsia-agadir', 45.00);
INSERT INTO `nexa_shippings` VALUES (338, 'Tamraght', 45.00);
INSERT INTO `nexa_shippings` VALUES (339, 'Had bouhssoussen', 45.00);
INSERT INTO `nexa_shippings` VALUES (340, 'Moulay bouazza khenifra', 45.00);
INSERT INTO `nexa_shippings` VALUES (341, 'Tagzert', 45.00);
INSERT INTO `nexa_shippings` VALUES (342, 'Oulad M barek-Beni Mellal', 45.00);
INSERT INTO `nexa_shippings` VALUES (343, 'Tanougha-Beni Mellal', 45.00);
INSERT INTO `nexa_shippings` VALUES (344, 'Foum Oudi', 45.00);
INSERT INTO `nexa_shippings` VALUES (345, 'Ikhourbane', 45.00);
INSERT INTO `nexa_shippings` VALUES (346, 'Zag-VILLE', 45.00);
INSERT INTO `nexa_shippings` VALUES (347, 'El Ouatia', 45.00);
INSERT INTO `nexa_shippings` VALUES (348, 'Port of Tan-Tan', 45.00);
INSERT INTO `nexa_shippings` VALUES (349, 'oulad oujih', 45.00);
INSERT INTO `nexa_shippings` VALUES (350, 'Lalla Mimouna', 45.00);
INSERT INTO `nexa_shippings` VALUES (351, 'Dlalha', 45.00);
INSERT INTO `nexa_shippings` VALUES (352, 'Mers El Kheir', 45.00);
INSERT INTO `nexa_shippings` VALUES (353, 'Sidi Yahya Zaer', 45.00);
INSERT INTO `nexa_shippings` VALUES (354, 'Skhour Rehamna', 45.00);
INSERT INTO `nexa_shippings` VALUES (355, 'Amizmiz', 45.00);
INSERT INTO `nexa_shippings` VALUES (356, 'El Hanchane', 45.00);
INSERT INTO `nexa_shippings` VALUES (357, 'Akka-tata', 45.00);
INSERT INTO `nexa_shippings` VALUES (358, 'Tagmout-tata', 45.00);
INSERT INTO `nexa_shippings` VALUES (359, 'Issafen-tata', 45.00);
INSERT INTO `nexa_shippings` VALUES (360, 'Fam El Hisn-tata', 45.00);
INSERT INTO `nexa_shippings` VALUES (362, 'MASSA', 45.00);
INSERT INTO `nexa_shippings` VALUES (363, 'Kariat Arkman‎-Nador', 45.00);
INSERT INTO `nexa_shippings` VALUES (364, 'Had Hrara-SAFI', 45.00);
INSERT INTO `nexa_shippings` VALUES (365, 'Sidi Zouine', 45.00);
INSERT INTO `nexa_shippings` VALUES (366, 'Skoura-Ouarzazate', 45.00);
INSERT INTO `nexa_shippings` VALUES (367, 'Bni hdifa - Region Al hoceima', 45.00);
INSERT INTO `nexa_shippings` VALUES (368, 'Bab Marzouka-Taza', 45.00);
INSERT INTO `nexa_shippings` VALUES (369, 'Aknoul-taza', 45.00);
INSERT INTO `nexa_shippings` VALUES (370, 'Hattane-Khouribga', 45.00);
INSERT INTO `nexa_shippings` VALUES (371, 'sidi allal tazi', 45.00);
INSERT INTO `nexa_shippings` VALUES (372, 'Tiddas', 45.00);
INSERT INTO `nexa_shippings` VALUES (373, 'Ain Johra', 45.00);
INSERT INTO `nexa_shippings` VALUES (374, 'Maâziz', 45.00);
INSERT INTO `nexa_shippings` VALUES (376, 'Tīdās-Khemisset', 45.00);
INSERT INTO `nexa_shippings` VALUES (377, 'Laouamra- ksar el kebir', 45.00);
INSERT INTO `nexa_shippings` VALUES (378, 'Khemis Sahel', 45.00);
INSERT INTO `nexa_shippings` VALUES (379, 'Krimda', 40.00);
INSERT INTO `nexa_shippings` VALUES (380, 'Sidi Aissa-Beni-Mellal', 45.00);
INSERT INTO `nexa_shippings` VALUES (381, 'Ouled Moussa-Beni Mellal', 45.00);
INSERT INTO `nexa_shippings` VALUES (382, 'Oulad Said-Beni Mellal', 45.00);
INSERT INTO `nexa_shippings` VALUES (383, 'ighram laalam-beni mellal', 45.00);
INSERT INTO `nexa_shippings` VALUES (384, 'Tanougha-Beni Mellal', 45.00);
INSERT INTO `nexa_shippings` VALUES (385, 'Zaouiat Cheikh', 45.00);
INSERT INTO `nexa_shippings` VALUES (386, 'Ait Ali', 45.00);
INSERT INTO `nexa_shippings` VALUES (387, 'Lehri-KHENIFRA', 45.00);
INSERT INTO `nexa_shippings` VALUES (388, 'El Kebab-KHENIFRA', 45.00);
INSERT INTO `nexa_shippings` VALUES (389, 'El Borj-KHENIFRA', 45.00);
INSERT INTO `nexa_shippings` VALUES (391, 'Ouaoumana', 45.00);
INSERT INTO `nexa_shippings` VALUES (392, 'Ait ishaq', 45.00);
INSERT INTO `nexa_shippings` VALUES (393, 'Ait ishaK', 45.00);
INSERT INTO `nexa_shippings` VALUES (394, 'Tighassaline ville', 45.00);
INSERT INTO `nexa_shippings` VALUES (395, 'Aguelmous', 45.00);
INSERT INTO `nexa_shippings` VALUES (396, 'Tachrafat', 45.00);
INSERT INTO `nexa_shippings` VALUES (397, 'Bounouar', 45.00);
INSERT INTO `nexa_shippings` VALUES (398, 'HATTANE', 45.00);
INSERT INTO `nexa_shippings` VALUES (399, 'Boujniba', 45.00);
INSERT INTO `nexa_shippings` VALUES (400, 'Ouaouizeght', 45.00);
INSERT INTO `nexa_shippings` VALUES (401, 'Adouz', 45.00);
INSERT INTO `nexa_shippings` VALUES (402, 'Foum El Anceur', 45.00);
INSERT INTO `nexa_shippings` VALUES (403, 'FERYATA', 45.00);
INSERT INTO `nexa_shippings` VALUES (404, 'Foum Zaouia', 45.00);
INSERT INTO `nexa_shippings` VALUES (405, 'Tanougha-Beni Mellal', 45.00);
INSERT INTO `nexa_shippings` VALUES (406, 'Al kamoun-ksba tadla', 45.00);
INSERT INTO `nexa_shippings` VALUES (407, 'Jerf El Melha', 45.00);
INSERT INTO `nexa_shippings` VALUES (408, 'Zemamra', 45.00);
INSERT INTO `nexa_shippings` VALUES (410, 'Sidi Smail', 45.00);
INSERT INTO `nexa_shippings` VALUES (411, 'Azemmour', 45.00);
INSERT INTO `nexa_shippings` VALUES (412, 'Bir Jdid', 45.00);
INSERT INTO `nexa_shippings` VALUES (413, 'El Jorf Lasfar', 45.00);
INSERT INTO `nexa_shippings` VALUES (414, 'Moulay Abdallah Amghar', 45.00);
INSERT INTO `nexa_shippings` VALUES (415, 'El Aouamra', 45.00);
INSERT INTO `nexa_shippings` VALUES (416, 'Laarache', 40.00);
INSERT INTO `nexa_shippings` VALUES (417, 'Oulad Bourahma', 40.00);
INSERT INTO `nexa_shippings` VALUES (418, 'Zone Franche (kenitra)', 40.00);
INSERT INTO `nexa_shippings` VALUES (420, 'Ghafsai', 45.00);
INSERT INTO `nexa_shippings` VALUES (421, 'sidi aadi', 45.00);
INSERT INTO `nexa_shippings` VALUES (422, 'Mejjat-chichaoua', 45.00);
INSERT INTO `nexa_shippings` VALUES (423, 'Ain Tekki', 45.00);
INSERT INTO `nexa_shippings` VALUES (426, 'OULAD ABBOU', 45.00);
INSERT INTO `nexa_shippings` VALUES (427, 'OUED LAOU', 45.00);
INSERT INTO `nexa_shippings` VALUES (428, 'AIN LEUH', 45.00);
INSERT INTO `nexa_shippings` VALUES (429, 'Souihla', 45.00);
INSERT INTO `nexa_shippings` VALUES (430, 'El Haj Kaddour', 45.00);
INSERT INTO `nexa_shippings` VALUES (431, 'Boulemane', 45.00);
INSERT INTO `nexa_shippings` VALUES (432, 'Tin Mansour', 45.00);
INSERT INTO `nexa_shippings` VALUES (433, 'Arba Aounate', 45.00);
INSERT INTO `nexa_shippings` VALUES (434, 'AIN BNI MATHAR', 45.00);
INSERT INTO `nexa_shippings` VALUES (435, 'Tikiouine', 40.00);
INSERT INTO `nexa_shippings` VALUES (437, 'Chellalat Mohammedia', 45.00);
INSERT INTO `nexa_shippings` VALUES (438, 'Zouada', 45.00);
INSERT INTO `nexa_shippings` VALUES (439, 'Arbaoua', 45.00);
INSERT INTO `nexa_shippings` VALUES (440, 'Sidi el Aidi', 45.00);
INSERT INTO `nexa_shippings` VALUES (443, 'DAR GUEDDARI', 45.00);
INSERT INTO `nexa_shippings` VALUES (444, 'Sidi Al Kamel', 45.00);
INSERT INTO `nexa_shippings` VALUES (445, 'Tagadirt-Agadir', 45.00);
INSERT INTO `nexa_shippings` VALUES (446, 'Tadouaret-Agadir', 45.00);
INSERT INTO `nexa_shippings` VALUES (447, 'Leqliaa - Taddart', 45.00);
INSERT INTO `nexa_shippings` VALUES (448, 'ain mediouna - taounate', 45.00);
INSERT INTO `nexa_shippings` VALUES (449, 'ain aicha - taounate', 45.00);
INSERT INTO `nexa_shippings` VALUES (450, 'zrizer - taounate', 45.00);
INSERT INTO `nexa_shippings` VALUES (451, 'Ain Sbit', 45.00);
INSERT INTO `nexa_shippings` VALUES (452, 'MERCHOUCH', 45.00);
INSERT INTO `nexa_shippings` VALUES (453, 'TANANTE-AZILAL', 45.00);
INSERT INTO `nexa_shippings` VALUES (454, 'Birkouate', 45.00);
INSERT INTO `nexa_shippings` VALUES (455, 'Moulay Yaâcoub', 45.00);
INSERT INTO `nexa_shippings` VALUES (456, 'sidi boujida', 45.00);
INSERT INTO `nexa_shippings` VALUES (457, 'Oulad Tayeb', 45.00);
INSERT INTO `nexa_shippings` VALUES (458, 'Ain Chkef', 45.00);
INSERT INTO `nexa_shippings` VALUES (459, 'Ouled Khlifa', 45.00);
INSERT INTO `nexa_shippings` VALUES (460, 'LOUDAYA', 45.00);
INSERT INTO `nexa_shippings` VALUES (461, 'Tassoultante', 45.00);
INSERT INTO `nexa_shippings` VALUES (462, 'Tamesluht', 45.00);
INSERT INTO `nexa_shippings` VALUES (463, 'Tameslouht', 45.00);
INSERT INTO `nexa_shippings` VALUES (464, 'Sidi Moussa-OURIKA', 45.00);
INSERT INTO `nexa_shippings` VALUES (465, 'Gueznaia-tanger', 40.00);
INSERT INTO `nexa_shippings` VALUES (466, 'TANGER-bougdour', 40.00);
INSERT INTO `nexa_shippings` VALUES (468, 'TANGER-chraka', 40.00);
INSERT INTO `nexa_shippings` VALUES (469, 'TANGER-chaouia', 40.00);
INSERT INTO `nexa_shippings` VALUES (470, 'TANGER-malabata', 40.00);
INSERT INTO `nexa_shippings` VALUES (471, 'tamchat', 45.00);
INSERT INTO `nexa_shippings` VALUES (472, 'TAGANTE', 45.00);
INSERT INTO `nexa_shippings` VALUES (473, 'Moulay Idriss Zerhoun', 45.00);
INSERT INTO `nexa_shippings` VALUES (474, 'TANGER-Mesnana', 40.00);
INSERT INTO `nexa_shippings` VALUES (476, 'BOUYAFAR', 45.00);
INSERT INTO `nexa_shippings` VALUES (477, 'Sidi Bousberr', 45.00);
INSERT INTO `nexa_shippings` VALUES (478, 'LAMJAARA-ouazzane', 45.00);
INSERT INTO `nexa_shippings` VALUES (480, 'BRIKCHA-ouazzane', 45.00);
INSERT INTO `nexa_shippings` VALUES (481, 'Beni Quolla-ouazzane', 45.00);
INSERT INTO `nexa_shippings` VALUES (482, 'Mzefroune-ouazzane', 45.00);
INSERT INTO `nexa_shippings` VALUES (484, 'Sidi Elmoukhtar - Chichaoua', 45.00);
INSERT INTO `nexa_shippings` VALUES (485, 'Ouled El Ghadbane', 45.00);
INSERT INTO `nexa_shippings` VALUES (486, 'Segangan', 45.00);
INSERT INTO `nexa_shippings` VALUES (487, 'Had kourt', 45.00);
INSERT INTO `nexa_shippings` VALUES (488, 'Madagh-berkan', 45.00);
INSERT INTO `nexa_shippings` VALUES (489, 'Laatamna', 45.00);
INSERT INTO `nexa_shippings` VALUES (490, 'Sebt ben sassi', 30.00);
INSERT INTO `nexa_shippings` VALUES (491, 'AIT BAHA', 45.00);
INSERT INTO `nexa_shippings` VALUES (492, 'Touama-ait ourir', 40.00);
INSERT INTO `nexa_shippings` VALUES (493, 'Ribate El Kheir-sefrou', 45.00);
INSERT INTO `nexa_shippings` VALUES (494, 'El Menzale-sefrou', 45.00);
INSERT INTO `nexa_shippings` VALUES (495, 'Tizi Ouasli', 45.00);
INSERT INTO `nexa_shippings` VALUES (496, 'MSOUN taza', 45.00);
INSERT INTO `nexa_shippings` VALUES (497, 'SAKA', 45.00);
INSERT INTO `nexa_shippings` VALUES (499, 'Akhfennir', 45.00);
INSERT INTO `nexa_shippings` VALUES (500, 'Gfifat-taroudant', 45.00);
INSERT INTO `nexa_shippings` VALUES (501, 'Oulad Dahou-taroudant', 45.00);
INSERT INTO `nexa_shippings` VALUES (502, 'TIMAHDITE-AZROU', 45.00);
INSERT INTO `nexa_shippings` VALUES (503, 'AGOURAY', 45.00);
INSERT INTO `nexa_shippings` VALUES (504, 'SIDI AADI', 45.00);
INSERT INTO `nexa_shippings` VALUES (505, 'Lalla Takerkoust', 45.00);
INSERT INTO `nexa_shippings` VALUES (506, 'Oulad yahya-Marrakech', 45.00);
INSERT INTO `nexa_shippings` VALUES (507, 'Chrifia-Marrakech', 35.00);
INSERT INTO `nexa_shippings` VALUES (508, 'Sidi Abdellah Ghiat', 35.00);
INSERT INTO `nexa_shippings` VALUES (509, 'Ait Ben Haddou', 45.00);
INSERT INTO `nexa_shippings` VALUES (510, 'TALSINNT', 45.00);
INSERT INTO `nexa_shippings` VALUES (511, 'Aouama-Tanger', 40.00);
INSERT INTO `nexa_shippings` VALUES (512, 'Ras El Ain Rehamena- tamelelt', 45.00);
INSERT INTO `nexa_shippings` VALUES (513, 'TLAUH-Tamelelt', 45.00);

-- ----------------------------
-- Table structure for nexa_users
-- ----------------------------
DROP TABLE IF EXISTS `nexa_users`;
CREATE TABLE `nexa_users`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Job` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Operator` int NOT NULL,
  `Registration` datetime NOT NULL,
  `TimeOf` datetime NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nexa_users
-- ----------------------------
INSERT INTO `nexa_users` VALUES (1, 'HOUSSAM JABER', 'dhoucam@outlook.com', '7db3ed8a3f82c6b1e4db03b0354029ee', 'Administrator', -1, '2025-06-13 16:30:02', '2025-06-13 16:30:05');

-- ----------------------------
-- Table structure for nexa_variants
-- ----------------------------
DROP TABLE IF EXISTS `nexa_variants`;
CREATE TABLE `nexa_variants`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ProductId` int NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 38 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nexa_variants
-- ----------------------------
INSERT INTO `nexa_variants` VALUES (24, 'S', 'Size', 50);
INSERT INTO `nexa_variants` VALUES (25, 'M', 'Size', 50);
INSERT INTO `nexa_variants` VALUES (26, 'L', 'Size', 50);
INSERT INTO `nexa_variants` VALUES (27, 'M', 'Size', 51);
INSERT INTO `nexa_variants` VALUES (28, 'L', 'Size', 51);
INSERT INTO `nexa_variants` VALUES (29, 'XL', 'Size', 51);
INSERT INTO `nexa_variants` VALUES (30, 'XXL', 'Size', 51);
INSERT INTO `nexa_variants` VALUES (31, 'M', 'Size', 52);
INSERT INTO `nexa_variants` VALUES (32, 'L', 'Size', 52);
INSERT INTO `nexa_variants` VALUES (33, 'XL', 'Size', 52);
INSERT INTO `nexa_variants` VALUES (34, 'XXL', 'Size', 52);
INSERT INTO `nexa_variants` VALUES (35, 'S', 'Size', 53);
INSERT INTO `nexa_variants` VALUES (36, 'M', 'Size', 53);
INSERT INTO `nexa_variants` VALUES (37, 'L', 'Size', 53);

SET FOREIGN_KEY_CHECKS = 1;
