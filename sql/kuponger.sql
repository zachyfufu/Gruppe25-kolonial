-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20. Des, 2017 16:19 PM
-- Server-versjon: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolonial.no`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `kuponger`
--

DROP TABLE IF EXISTS `kuponger`;
CREATE TABLE IF NOT EXISTS `kuponger` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Navn` varchar(40) NOT NULL,
  `Bildet` varchar(200) NOT NULL,
  `Rabatt` int(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `kuponger`
--

INSERT INTO `kuponger` (`ID`, `Navn`, `Bildet`, `Rabatt`) VALUES
(1, 'Grillstad Peppersalami', 'https://kolonial.no/media/uploads/public/286/335/611535-962ca-product_detail.jpg', 10),
(2, 'Friele frokostkaffe', 'https://kolonial.no/media/uploads/public/279/372/645172-28cd3-product_detail.jpg', 20),
(3, 'Figurbakte pepperkaker', 'https://kolonial.no/media/uploads/public/350/243/636243-6b0d1-product_detail.jpg', 40),
(4, 'Corona', 'https://kolonial.no/media/uploads/public/0/141/2941-ecfe7-product_detail.jpg', 90),
(5, 'True feeling', 'https://kolonial.no/media/uploads/public/270/78/631678-8963d-product_detail.jpg', 10),
(6, 'Krone-is Jordbær', 'https://kolonial.no/media/uploads/public/128/385/428385-87261-product_detail.jpg', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
