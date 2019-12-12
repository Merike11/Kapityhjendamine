-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: d82654.mysql.zonevs.eu
-- Loomise aeg: Dets 12, 2019 kell 04:26 PL
-- Serveri versioon: 10.3.20-MariaDB-log
-- PHP versioon: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `d82654_kapp`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `added` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `feedback`
--

INSERT INTO `feedback` (`id`, `subject`, `body`, `added`) VALUES
(1, 'oubhc', 'aosuddrivb', '2019-11-14 16:27:58'),
(2, 'oubhc', 'aosuddrivb', '2019-11-14 16:28:43'),
(3, 'v', 'v', '2019-12-12 11:20:41'),
(4, 'v', 'v', '2019-12-12 11:21:07'),
(5, 'd', 'j', '2019-12-12 11:21:14');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `ingredients`
--

CREATE TABLE `ingredients` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit` varchar(45) NOT NULL,
  `Photo` text DEFAULT NULL,
  `added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `ingredients`
--

INSERT INTO `ingredients` (`ID`, `name`, `unit`, `Photo`, `added`) VALUES
(3, 'kommid', '15', NULL, '2019-12-12 11:20:44'),
(4, 'Vahuvein', 'Vahuvein', NULL, '2019-12-12 11:20:44'),
(5, 'Vahuvein', 'Vahuvein', NULL, '2019-12-12 11:20:44'),
(6, 'majonees', '1', NULL, '2019-12-12 11:20:44'),
(7, 'pasteet', '2', NULL, '2019-12-12 11:20:44'),
(8, 'sepik', 'sepik', NULL, '2019-12-12 11:20:44'),
(9, 'loorber', 'loorber', NULL, '2019-12-12 11:20:44'),
(11, 'sai', 'sai', NULL, '2019-12-12 11:20:44'),
(12, 'vorst', 'vorst', NULL, '2019-12-12 11:20:44'),
(13, 'muna', 'muna', NULL, '2019-12-12 11:20:44'),
(14, 'muna', 'muna', NULL, '2019-12-12 11:20:44'),
(15, 'muna', 'muna', NULL, '2019-12-12 11:20:44'),
(18, 'zxdfsdf', 'zxdfsdf', NULL, '2019-12-12 11:20:44'),
(19, 'asdasd', 'asdasd', NULL, '2019-12-12 11:20:44'),
(20, 'Kool', 'muna', NULL, '2019-12-12 11:20:44'),
(21, 'Kool', 'muna', NULL, '2019-12-12 11:20:44'),
(22, 'sass', 'kiomoimoim', NULL, '2019-12-12 11:20:44'),
(24, 'piim', 'l', NULL, '2019-12-12 11:20:44'),
(25, 'Test', '', NULL, '2019-12-12 11:20:44'),
(26, 'test', '', NULL, '2019-12-12 11:20:44'),
(27, 'supp', '', NULL, '2019-12-12 11:20:44'),
(28, 'test', 'test', NULL, '2019-12-12 11:20:44'),
(29, 'ei ole fantoom', '', NULL, '2019-12-12 11:22:16'),
(31, 'fantoom', '', NULL, '2019-12-12 11:23:37'),
(33, 'mi', '', NULL, '2019-12-12 11:26:58'),
(36, 'vÃ¼rts', '', NULL, '2019-12-12 13:41:32'),
(37, 'piparmÃ¼nt', '', NULL, '2019-12-12 13:46:49'),
(38, 'limonaad', '', NULL, '2019-12-12 14:37:31'),
(39, 'kapp', 'tk', NULL, '2019-12-12 16:26:37');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `recipe`
--

CREATE TABLE `recipe` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Date_added` datetime NOT NULL,
  `Date_modified` datetime DEFAULT NULL,
  `Cooking_Time` int(11) DEFAULT NULL,
  `Photo` text DEFAULT NULL,
  `Instructions` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `recipe_has_ingrediente`
--

CREATE TABLE `recipe_has_ingrediente` (
  `id` int(11) NOT NULL,
  `Ingredient_amount` float NOT NULL,
  `Recipe_ID` int(11) NOT NULL,
  `Ingrediente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `user`
--

CREATE TABLE `user` (
  `ID_User` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `user_has_recipe`
--

CREATE TABLE `user_has_recipe` (
  `id` int(11) NOT NULL,
  `Recipe_ID` int(11) NOT NULL,
  `User_ID_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksid tabelile `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksid tabelile `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksid tabelile `recipe_has_ingrediente`
--
ALTER TABLE `recipe_has_ingrediente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Recipe_has_Ingrediente_Recipe1_idx` (`Recipe_ID`),
  ADD KEY `fk_Recipe_has_Ingrediente_Ingrediente1_idx` (`Ingrediente_id`);

--
-- Indeksid tabelile `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- Indeksid tabelile `user_has_recipe`
--
ALTER TABLE `user_has_recipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_User_has_Recipe_Recipe_idx` (`Recipe_ID`),
  ADD KEY `fk_User_has_Recipe_User1_idx` (`User_ID_User`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT tabelile `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT tabelile `recipe`
--
ALTER TABLE `recipe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabelile `recipe_has_ingrediente`
--
ALTER TABLE `recipe_has_ingrediente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabelile `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabelile `user_has_recipe`
--
ALTER TABLE `user_has_recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tõmmistatud tabelite piirangud
--

--
-- Piirangud tabelile `recipe_has_ingrediente`
--
ALTER TABLE `recipe_has_ingrediente`
  ADD CONSTRAINT `fk_Recipe_has_Ingrediente_Ingrediente1` FOREIGN KEY (`Ingrediente_id`) REFERENCES `ingredients` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Recipe_has_Ingrediente_Recipe1` FOREIGN KEY (`Recipe_ID`) REFERENCES `recipe` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Piirangud tabelile `user_has_recipe`
--
ALTER TABLE `user_has_recipe`
  ADD CONSTRAINT `fk_User_has_Recipe_Recipe` FOREIGN KEY (`Recipe_ID`) REFERENCES `recipe` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_User_has_Recipe_User1` FOREIGN KEY (`User_ID_User`) REFERENCES `user` (`ID_User`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
