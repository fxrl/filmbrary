# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.38)
# Datenbank: filmbrary
# Erstellt am: 2018-12-07 12:11:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `file_name`, `type`)
VALUES
	(39,'karen-zhao-643916-unsplash.jpg','image/jpeg'),
	(40,'erik-witsoe-647316-unsplash.jpg','image/jpeg'),
	(41,'lan-deng-767446-unsplash.jpg','image/jpeg'),
	(42,'krists-luhaers-543526-unsplash.jpg','image/jpeg'),
	(43,'Bildschirmfoto 2018-09-25 um 10.45.00.png','image/png'),
	(44,'Aasgaardreien_peter_nicolai_arbo_mindre.jpg','image/jpeg');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle genre_movies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `genre_movies`;

CREATE TABLE `genre_movies` (
  `genreID` int(11) DEFAULT NULL,
  `movieID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `genre_movies` WRITE;
/*!40000 ALTER TABLE `genre_movies` DISABLE KEYS */;

INSERT INTO `genre_movies` (`genreID`, `movieID`)
VALUES
	(18,332562),
	(10402,332562),
	(10749,332562),
	(27,439079),
	(9648,439079),
	(53,439079),
	(878,335983),
	(28,335983),
	(53,345887),
	(28,345887),
	(80,345887),
	(18,338952),
	(10751,338952),
	(14,338952),
	(28,507569),
	(12,507569),
	(14,507569),
	(16,507569),
	(878,335983),
	(18,424694),
	(10402,424694),
	(28,507569),
	(12,507569),
	(14,507569),
	(16,507569),
	(28,353081),
	(53,353081),
	(878,335983),
	(18,338952),
	(10751,338952),
	(14,338952),
	(16,360920),
	(10751,360920),
	(35,360920),
	(14,360920),
	(53,345887),
	(28,345887),
	(80,345887),
	(28,7777);

/*!40000 ALTER TABLE `genre_movies` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle genres
# ------------------------------------------------------------

DROP TABLE IF EXISTS `genres`;

CREATE TABLE `genres` (
  `genre` varchar(255) NOT NULL DEFAULT '',
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;

INSERT INTO `genres` (`genre`, `id`)
VALUES
	('Action',28),
	('Adventure',12),
	('Animation',16),
	('Comedy',35),
	('Crime',80),
	('Documentary',99),
	('Drama',18),
	('Family',10751),
	('Fantasy',14),
	('History',36),
	('Horror',27),
	('Music',10402),
	('Mystery',9648),
	('Romance',10749),
	('Science Fiction',878),
	('TV Movie',10770),
	('Thriller',53),
	('War',10752),
	('Western',37);

/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle movies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `movies`;

CREATE TABLE `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `tmdb_id` varchar(255) NOT NULL DEFAULT '',
  `director` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL DEFAULT '',
  `production_company` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL DEFAULT '',
  `plot` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;

INSERT INTO `movies` (`id`, `title`, `tmdb_id`, `director`, `year`, `production_company`, `cover`, `plot`)
VALUES
	(31,'The Equalizer 2','345887','Eryne Prine','2018','Sony Pictures','/hkhkq5UlxNE57uRrdTz7yIwef2v.jpg','Robert McCall, who serves an unflinching justice for the exploited and oppressed, embarks on a relentless, globe-trotting quest for vengeance when a long-time girl friend is murdered.'),
	(42,'The Grinch','360920','Bonnie Wild','2018','Illumination Entertainment','/xhDSNTsMhGg0rZUdY8n96A2FTFi.jpg','The Grinch hatches a scheme to ruin Christmas when the residents of Whoville plan their annual holiday celebration.'),
	(43,'The Equalizer 2','345887','Eryne Prine','2018','Sony','/hkhkq5UlxNE57uRrdTz7yIwef2v.jpg','Robert McCall, who serves an unflinching justice for the exploited and oppressed, embarks on a relentless, globe-trotting quest for vengeance when a long-time girl friend is murdered.');

/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_type` varchar(255) NOT NULL DEFAULT '',
  `user_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `user_type`, `user_name`)
VALUES
	(5,'f.rossel@gmx.de','$2y$10$q6BuUAuOO7cofNW9jcu7je5JxM.CN45CglYQh7qT6wRGY2/m8zYfi','2018-11-08 11:29:07','admin','fxrl'),
	(19,'test@test.de','$2y$10$QLL.J7W1KW8hmdgT.4c15ulw/e.s.hYiDS0KmGUJ.2lLIpiVBgQ96','2018-11-15 18:14:40','browser','Browser');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
