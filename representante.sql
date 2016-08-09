-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2013 a las 02:55:15
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inscripcion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE IF NOT EXISTS `representante` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Apellidos_repre` varchar(25) NOT NULL,
  `Nombres` varchar(20) NOT NULL,
  `Cedula` varchar(20) NOT NULL,
  `Sexo` enum('Masculino','Femenino') NOT NULL,
  `Nacionalidad` enum('Venezolana','Extranjero') NOT NULL,
  `Lugar_nacimiento` varchar(50) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Edad` enum('18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','87','88','89','90','91','92','93','94','95','96','97','98','99','100') NOT NULL,
  `Parentesco` enum('Madre','Padre','Abuelo(a) paterno','Abuelo(a) materno','Tio(a) paterno','Tio(a) materno','Padrino','Madrina') NOT NULL,
  `Profesion_U_oficio` varchar(35) NOT NULL,
  `Codigo_Telefono_Celular` enum('0261','0262','0263','0264','0265','0266','0267','0271','0275') NOT NULL,
  `Numero_Celular` varchar(10) NOT NULL,
  `Codigo_Telefono_local` enum('0416','0426','0414','0424','0412') NOT NULL,
  `Numero_Local` varchar(10) NOT NULL,
  `Direccion_del_hogar` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
