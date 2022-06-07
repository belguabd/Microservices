-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project
DROP DATABASE IF EXISTS `project`;
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `project`;

-- Dumping structure for table project.cars
DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(3) NOT NULL,
  `car_name` varchar(30) NOT NULL,
  `brand_id` int(3) NOT NULL,
  `type_id` int(3) NOT NULL,
  `color` varchar(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table project.cars: ~4 rows (approximately)
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` (`id`, `car_name`, `brand_id`, `type_id`, `color`, `model`, `description`) VALUES
	(1, 'Porsche Boxster', 6, 4, 'Red', '2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent venenatis in odio quis cursus. Pel'),
	(2, 'Audi A5', 1, 4, 'Red', '2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent venenatis in odio quis cursus. Pel'),
	(3, 'Mercedes-Benz CLS', 4, 4, 'Blue', '2019', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent venenatis in odio quis cursus. Pel'),
	(4, 'Audi A7', 1, 6, 'Blue', '2019', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent venenatis in odio quis cursus. Pel');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;

-- Dumping structure for table project.car_brands
DROP TABLE IF EXISTS `car_brands`;
CREATE TABLE IF NOT EXISTS `car_brands` (
  `brand_id` int(3) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table project.car_brands: ~7 rows (approximately)
/*!40000 ALTER TABLE `car_brands` DISABLE KEYS */;
INSERT INTO `car_brands` (`brand_id`, `brand_name`, `brand_image`) VALUES
	(1, 'Audi', 'Audi-A4-Avant-1.jpg'),
	(2, 'BMW', 'bmw-3-series-sedan.jpg'),
	(3, 'Lexus', '2016-Lexus-RX-350-BM-01.jpg'),
	(4, 'Mercedes Benz', 'Mercedes-C-Class-Estate-1.jpg'),
	(5, 'MINI', '2016-MINI-Cooper-S-Clubman-ALL4.jpg'),
	(6, 'Porsche', 'P14_0596_a4_rgb-1.jpg'),
	(10, 'jkljkllkj;', '15182_memory-game-screenshot.PNG');
/*!40000 ALTER TABLE `car_brands` ENABLE KEYS */;

-- Dumping structure for table project.car_types
DROP TABLE IF EXISTS `car_types`;
CREATE TABLE IF NOT EXISTS `car_types` (
  `type_id` int(3) NOT NULL,
  `type_label` varchar(50) NOT NULL,
  `type_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table project.car_types: ~3 rows (approximately)
/*!40000 ALTER TABLE `car_types` DISABLE KEYS */;
INSERT INTO `car_types` (`type_id`, `type_label`, `type_description`) VALUES
	(1, 'Sedan', 'A sedan has four doors and a traditional trunk.'),
	(4, 'Coupe', 'A coupe has historically been considered a two-door car with a trunk and a solid roof.'),
	(6, 'HATCHBACK', 'Traditionally, the term "hatchback" has meant a compact or subcompact sedan with a squared-off roof and a rear flip-up hatch door that provides access to the vehicle\'s cargo area instead of a conventional trunk.');
/*!40000 ALTER TABLE `car_types` ENABLE KEYS */;

-- Dumping structure for table project.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categories` int(11) NOT NULL,
  `nom` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Dumping data for table project.categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table project.clients
DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(10) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table project.clients: ~4 rows (approximately)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`client_id`, `full_name`, `client_email`, `client_phone`) VALUES
	(1, 'Idriss Jairi', 'driss52717jiri@gmail.com', '06345344232'),
	(2, 'Ahmed Oumenssour', 'ahmed_oum@gmail.com', '064534343'),
	(3, 'Chris', 'asdas@asfds.sdf', '18508232544'),
	(4, 'Bart', 'sdfsd@sfs.gh', '18508232533');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Dumping structure for table project.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id_produit` int(11) NOT NULL,
  `Nome` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Description` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Price` float NOT NULL,
  `categories_id` int(11) NOT NULL,
  `Image` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `reference` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `libelle` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `PrixU` float NOT NULL,
  `Achat` int(11) NOT NULL,
  `Vente` int(11) NOT NULL,
  `Qte` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Dumping data for table project.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table project.profile
DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `id_Profile` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `prenom` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Adresse` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ville_id` int(11) NOT NULL,
  `tele` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Profile`),
  KEY `FK__villes` (`ville_id`),
  KEY `FK__users` (`user_id`),
  CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK__villes` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id_villes`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Dumping data for table project.profile: ~0 rows (approximately)
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` (`id_Profile`, `nom`, `prenom`, `Adresse`, `ville_id`, `tele`, `user_id`) VALUES
	(1, 'br', 'el', 'ff', 1, 'ddd', 1);
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;

-- Dumping structure for table project.reservations
DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `car_id` int(3) NOT NULL,
  `pickup_date` date NOT NULL,
  `return_date` date NOT NULL,
  `pickup_location` varchar(50) NOT NULL,
  `return_location` varchar(50) NOT NULL,
  `canceled` tinyint(1) NOT NULL DEFAULT '0',
  `cancellation_reason` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table project.reservations: ~4 rows (approximately)
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` (`reservation_id`, `client_id`, `car_id`, `pickup_date`, `return_date`, `pickup_location`, `return_location`, `canceled`, `cancellation_reason`) VALUES
	(1, 1, 1, '2021-05-11', '2021-05-17', 'Agadir', 'Agadir', 0, NULL),
	(2, 2, 3, '2021-04-30', '2021-05-06', 'Agadir', 'Agadir', 0, NULL),
	(3, 3, 4, '2021-04-30', '2021-05-06', 'Agadir', 'Agadir', 1, 'Changed my mind! Sorry'),
	(4, 4, 4, '2021-04-29', '2021-05-02', 'Casablanca', 'Agadir', 0, NULL);
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;

-- Dumping structure for table project.sizes
DROP TABLE IF EXISTS `sizes`;
CREATE TABLE IF NOT EXISTS `sizes` (
  `id_sizer` int(11) NOT NULL,
  `nom` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_sizer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Dumping data for table project.sizes: ~0 rows (approximately)
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;

-- Dumping structure for table project.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `role` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Dumping data for table project.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_users`, `username`, `password`, `Email`, `role`) VALUES
	(1, 'brahim', '123', 'eklhu', 'dev');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table project.villes
DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id_villes` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_villes`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Dumping data for table project.villes: ~2 rows (approximately)
/*!40000 ALTER TABLE `villes` DISABLE KEYS */;
INSERT INTO `villes` (`id_villes`, `nom`) VALUES
	(1, 'safi'),
	(2, 'eljadida');
/*!40000 ALTER TABLE `villes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
