-- --------------------------------------------------------
-- Хост:                         192.168.1.105
-- Версия сервера:               5.7.21-21 - Percona Server (GPL), Release 21, Revision 2a37e4e
-- Операционная система:         Linux
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных test_rubric
CREATE DATABASE IF NOT EXISTS `test_rubric` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `test_rubric`;

-- Дамп структуры для таблица test_rubric.Рубрики
CREATE TABLE IF NOT EXISTS `Рубрики` (
  `ID` int(6) NOT NULL AUTO_INCREMENT,
  `Код` int(25) DEFAULT NULL,
  `Название (1)` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Название (2)` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_Рубрики_Товар` (`Код`),
  CONSTRAINT `FK_Рубрики_Товар` FOREIGN KEY (`Код`) REFERENCES `Товар` (`Код`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы test_rubric.Рубрики: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `Рубрики` DISABLE KEYS */;
INSERT INTO `Рубрики` (`ID`, `Код`, `Название (1)`, `Название (2)`) VALUES
	(1, 201, 'Бумага', NULL),
	(2, 202, 'Бумага', NULL),
	(3, 302, 'Принтеры', 'МФУ'),
	(4, 305, 'Принтеры', 'МФУ');
/*!40000 ALTER TABLE `Рубрики` ENABLE KEYS */;

-- Дамп структуры для таблица test_rubric.Свойства товаров (бумага)
CREATE TABLE IF NOT EXISTS `Свойства товаров (бумага)` (
  `ID` int(6) NOT NULL AUTO_INCREMENT,
  `Товар` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Плотность` int(11) DEFAULT NULL,
  `Белизна ЕдИзм="%"` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы test_rubric.Свойства товаров (бумага): ~2 rows (приблизительно)
/*!40000 ALTER TABLE `Свойства товаров (бумага)` DISABLE KEYS */;
INSERT INTO `Свойства товаров (бумага)` (`ID`, `Товар`, `Плотность`, `Белизна ЕдИзм="%"`) VALUES
	(1, 'Бумага А4', 100, 150),
	(2, 'Бумага А3', 90, 100);
/*!40000 ALTER TABLE `Свойства товаров (бумага)` ENABLE KEYS */;

-- Дамп структуры для таблица test_rubric.Свойства товаров (принтер)
CREATE TABLE IF NOT EXISTS `Свойства товаров (принтер)` (
  `ID` int(6) NOT NULL AUTO_INCREMENT,
  `Товар` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Формат (1)` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Формат (2)` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Тип` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы test_rubric.Свойства товаров (принтер): ~2 rows (приблизительно)
/*!40000 ALTER TABLE `Свойства товаров (принтер)` DISABLE KEYS */;
INSERT INTO `Свойства товаров (принтер)` (`ID`, `Товар`, `Формат (1)`, `Формат (2)`, `Тип`) VALUES
	(1, 'Принтер Canon', 'A4', 'A3', 'Лазерный'),
	(2, 'Принтер HP', 'A3', NULL, 'Лазерный');
/*!40000 ALTER TABLE `Свойства товаров (принтер)` ENABLE KEYS */;

-- Дамп структуры для таблица test_rubric.Тип цены/цена
CREATE TABLE IF NOT EXISTS `Тип цены/цена` (
  `ID` int(6) NOT NULL AUTO_INCREMENT,
  `Товар` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Тип цены "Базовая"` float DEFAULT NULL,
  `Тип цены "Москва"` float DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Товар` (`Товар`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы test_rubric.Тип цены/цена: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `Тип цены/цена` DISABLE KEYS */;
INSERT INTO `Тип цены/цена` (`ID`, `Товар`, `Тип цены "Базовая"`, `Тип цены "Москва"`) VALUES
	(1, 'Бумага А4', 11.5, 12.5),
	(2, 'Бумага А3', 18.5, 22.5),
	(3, 'Принтер Canon', 3010, 3500),
	(4, 'Принтер HP', 3310, 2999);
/*!40000 ALTER TABLE `Тип цены/цена` ENABLE KEYS */;

-- Дамп структуры для таблица test_rubric.Товар
CREATE TABLE IF NOT EXISTS `Товар` (
  `ID` int(6) NOT NULL AUTO_INCREMENT,
  `Код` int(25) DEFAULT NULL,
  `Название товара` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Код` (`Код`),
  KEY `FK_Товар_Тип цены/цена` (`Название товара`),
  CONSTRAINT `FK_Товар_Тип цены/цена` FOREIGN KEY (`Название товара`) REFERENCES `Тип цены/цена` (`Товар`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы test_rubric.Товар: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `Товар` DISABLE KEYS */;
INSERT INTO `Товар` (`ID`, `Код`, `Название товара`) VALUES
	(1, 201, 'Бумага А4'),
	(2, 202, 'Бумага А3'),
	(3, 302, 'Принтер Canon'),
	(4, 305, 'Принтер HP');
/*!40000 ALTER TABLE `Товар` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
