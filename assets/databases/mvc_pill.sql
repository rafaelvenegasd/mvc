-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2020 a las 14:19:18
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc_pill`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agents`
--

CREATE TABLE `agents` (
  `AGENT_CODE` varchar(6) NOT NULL DEFAULT '',
  `AGENT_NAME` varchar(40) DEFAULT NULL,
  `WORKING_AREA` varchar(35) DEFAULT NULL,
  `COMMISSION` decimal(10,2) DEFAULT NULL,
  `PHONE_NO` varchar(15) DEFAULT NULL,
  `COUNTRY` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agents`
--

INSERT INTO `agents` (`AGENT_CODE`, `AGENT_NAME`, `WORKING_AREA`, `COMMISSION`, `PHONE_NO`, `COUNTRY`) VALUES
('A007  ', 'Ramasundar                              ', 'Bangalore                          ', '0.15', '077-25814763   ', '\r'),
('A003  ', 'Alex                                    ', 'London                             ', '0.13', '075-12458969   ', '\r'),
('A008  ', 'Alford                                  ', 'New York                           ', '0.12', '044-25874365   ', '\r'),
('A011  ', 'Ravi Kumar                              ', 'Bangalore                          ', '0.15', '077-45625874   ', '\r'),
('A010  ', 'Santakumar                              ', 'Chennai                            ', '0.14', '007-22388644   ', '\r'),
('A012  ', 'Lucida                                  ', 'San Jose                           ', '0.12', '044-52981425   ', '\r'),
('A005  ', 'Anderson                                ', 'Brisban                            ', '0.13', '045-21447739   ', '\r'),
('A001  ', 'Subbarao                                ', 'Bangalore                          ', '0.14', '077-12346674   ', '\r'),
('A002  ', 'Mukesh                                  ', 'Mumbai                             ', '0.11', '029-12358964   ', '\r'),
('A006  ', 'McDen                                   ', 'London                             ', '0.15', '078-22255588   ', '\r'),
('A004  ', 'Ivan                                    ', 'Torento                            ', '0.15', '008-22544166   ', '\r'),
('A009  ', 'Benjamin                                ', 'Hampshair                          ', '0.11', '008-22536178   ', '\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE `customer` (
  `CUST_CODE` int(6) NOT NULL,
  `CUST_NAME` varchar(40) NOT NULL,
  `CUST_CITY` varchar(35) NOT NULL,
  `CUST_COUNTRY` varchar(20) NOT NULL,
  `AGENT_CODE` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`CUST_CODE`, `CUST_NAME`, `CUST_CITY`, `CUST_COUNTRY`, `AGENT_CODE`) VALUES
(1, 'Micheal', 'New York                           ', 'USA', 'A008  '),
(2, 'Bolt', 'New York                           ', 'USA', 'A008  '),
(5, 'Sasikant', 'Mumbai                             ', 'India', 'A002  '),
(7, 'Ramanathan', 'Chennai                            ', 'India', 'A010  '),
(4, 'Winston', 'Brisban                            ', 'Australia', 'A005  '),
(6, 'Shilton', 'Torento                            ', 'Canada', 'A004  '),
(10, 'Charles', 'Hampshair                          ', 'UK', 'A009  '),
(8, 'Karolina', 'Torento                            ', 'Canada', 'A004  '),
(3, 'Martin', 'Torento                            ', 'Canada', 'A004  '),
(9, 'Ramesh', 'Mumbai                             ', 'India', 'A002  '),
(11, 'Rafael', 'Barcelona', '', 'A005  '),
(12, 'Marcelo', 'Sao Paulo', '', 'A009  '),
(14, 'Pratt', 'Madrid', '', 'A004  ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`AGENT_CODE`);

--
-- Indices de la tabla `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUST_CODE`) USING BTREE,
  ADD UNIQUE KEY `CUST_CODE` (`CUST_CODE`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customer`
--
ALTER TABLE `customer`
  MODIFY `CUST_CODE` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
