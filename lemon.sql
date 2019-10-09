-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2019 at 07:38 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `birthday`, `mail`, `password`, `sexe`, `country`, `job`, `isAdmin`) VALUES
(14, 'des', 'henry', '2019-10-11', 'des.henry@hotmail.fr', '$2y$10$zu5c8XWLmVklvm.2Z3Ogi.pg8Lle9w4JZIa8eIrY7V5geRgP2YaMG', 'male', 'Fiji', 'Guide', 0),
(15, 'lala', 'toto', '2019-10-16', 'lala@toto.fr', '$2y$10$bGY/3IKnj5tdCXg2zjS0V.YRclGh6JVRIS4aEHodAeLUa09VMytU.', 'female', 'Egypt', 'Trader', 0),
(16, 'remi', 'bisson', '2019-10-07', 'remi.bisson@epitech.eu', '$2y$10$IGK5LlnJAih9v85cs4Kpm.90LME0Xtu4OdOO25BIycz9g7OJMff3.', 'male', 'France', 'Développeur', 0),
(17, 'teisseire', 'arthur', '1998-05-26', 'arthur.teisseire@epitech.eu', '$2y$10$z6z05yXpbjlHWtyGLFtR5OEbykzoWoJuPkMHZtIQh31sP1eVRDz8q', 'male', 'France', 'Développeur', 1),
(21, 'theo', 'la', '2019-10-02', 'theo@la.com', '$2y$10$01VCmDQ4NpiBKcWnPA4XeOKCTXg.UnYOOBuycSmSZir1PcwSaIAyi', 'male', 'Fiji', 'Barman', 0),
(22, 'toto', 'lala', '2019-10-09', 'toto@lala.com', '$2y$10$YD3tL0jt4MzlrqcEyvtDE.1hz6py228MIOmmzG4OqmaS.TJC8.qru', 'male', 'France', 'Barman', 0),
(24, 'gobet', 'baptiste', '2019-10-09', 'baptiste.gobet@epitech.eu', '$2y$10$a5djKwZ6WlmeXwuGxXGW7uA3Alr2peI0tpAg1SemHlG1dpMSQI0QO', 'male', 'France', 'Développeur', 0),
(25, 'gery', 'mathieu', '2019-10-09', 'mathieu.gery@epitech.eu', '$2y$10$WKwfCzz.j8znPC/2gXAugOdnrHak7QeKRFCAOOtr/4LaS5a.izwK6', 'male', 'Egypt', 'Admin Système', 0),
(26, 'fabre', 'adrien', '2019-10-17', 'adrien.fabre@epitech.eu', '$2y$10$bP4i4eD6qIk/sQ.J8RMZ9eqLvWQHWMrzG6V4znZWZOpc7U2rpp9LO', 'male', 'Fiji', 'Développeur', 0),
(27, 'Delteil', 'laurent', '2019-10-19', 'laurent.delteil@epitech.eu', '$2y$10$uKDU5l9hC2wKFwsmnT8Wo.Otv.sVcFkPdjXE0mZQ4QeqRTxeUuW9C', 'male', 'France', 'Développeur React', 0),
(28, 'andré', 'serge', '2019-10-10', 'serge.andre@epitech.eu', '$2y$10$n0YdobAgY6mBDGgy9m/CPuuUBL2jAwPYjepd7cyzt2dJ39fnsEWcO', 'male', 'Egypt', 'UX Designer', 0),
(29, 'caurette', 'mahe', '2019-10-10', 'mahe.caurette@epitech.eu', '$2y$10$Pg84xKIC3q/bUXJGyEvWZuvDMFyYicQDIFn0nYZuEMcAuyYaNtaCK', 'male', 'Egypt', 'Développeur', 0),
(30, 'lanfranchini', 'gregoire', '2019-10-02', 'gregoire.lanfranchini@epitech.eu', '$2y$10$AL8pLsN75E3FjQuXjzl0teB0/KPZvgphpGYw4pm.9FbEB7faEhryq', 'male', 'France', 'Chef de projet', 0),
(31, 'interactive', 'lemon', '2009-01-01', 'lemon@interactive.com', '$2y$10$nUP2KimkZJQ35dl4e97R.uT0WDzqrKmHQ8dgCVkSenUrOnNVskWsC', 'male', 'France', 'Agence Web', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
