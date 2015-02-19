-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Feb 2015 um 19:12
-- Server Version: 5.6.20
-- PHP-Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `orgado-1602`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`comments_id` int(20) NOT NULL,
  `commentcontent` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `connectedtask` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Daten für Tabelle `comments`
--

INSERT INTO `comments` (`comments_id`, `commentcontent`, `author`, `connectedtask`, `created_at`) VALUES
(1, 'Hallo das ist ein Kommentar. Lalalalalala', 'Lukas Birringer', 'this is spartaaa', '2015-02-17'),
(11, 'Das ist ein neuer Kommentar der den einen Kommentar anlegen sollte, das heutige Datum übergeben sollte, den angemeldeten User übergeben sollte und den zugehörigen Namen des Task übergeben sollte. Schalalalala', 'Lukas Birringer', 'this is spartaaa', '2015-02-17'),
(13, 'Kommentar #2 on Task #2', 'Lukas Birringer', 'Tasks Numero 2', '2015-02-17'),
(14, 'Test der Insertinto funktion', 'Lukas Birringer', 'Tasks Numero 2', '2015-02-18'),
(17, 'Halli Hallo', 'Lukas Birringer', 'this is spartaaa', '2015-02-18');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`files_id` int(20) NOT NULL,
  `files_name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filetype` varchar(255) NOT NULL,
  `filesize` int(20) NOT NULL,
  `path` varchar(255) NOT NULL,
  `connectedtask` varchar(255) NOT NULL,
  `uploaded_at` date NOT NULL,
  `uploaded_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
`tasks_id` int(20) NOT NULL,
  `tasks_name` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `note` longtext NOT NULL,
  `users` varchar(255) NOT NULL,
  `labels` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `tasks`
--

INSERT INTO `tasks` (`tasks_id`, `tasks_name`, `created_at`, `created_by`, `note`, `users`, `labels`) VALUES
(1, 'this is spartaaa', '2015-02-16', 'Lukas Birringer', 'asdsadsad ing CAPTCHAs into digitizing text, annotating images, building machine learning datasets. This in turn heasdsadlps preserve books, improve maps, and solveqqqqqq hard AI problems.         ', 'Lukas Birringer', 'Web Design'),
(2, 'Tasks Numero 2', '2015-02-16', 'Lukas Birringer', 'asdsadasdsadsad qqqq 123', 'Lukas Birringer', 'dieminimalen');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `todolist`
--

CREATE TABLE IF NOT EXISTS `todolist` (
`todolist_id` int(20) NOT NULL,
  `todolist_name` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `todolist`
--

INSERT INTO `todolist` (`todolist_id`, `todolist_name`, `created_at`, `created_by`) VALUES
(1, 'meine erste todoliste', '2015-02-16', 'Lukas Birringer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`files_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
 ADD PRIMARY KEY (`tasks_id`);

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
 ADD PRIMARY KEY (`todolist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `comments_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `files_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
MODIFY `tasks_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
MODIFY `todolist_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
