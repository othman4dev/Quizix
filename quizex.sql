-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 03:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizex`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `phoneNumber` varchar(250) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`adminId`, `adminName`, `email`, `password`, `dateOfBirth`, `phoneNumber`, `nationality`) VALUES
(1, 'admin', 'admin@gmail.com', '41564695847', '2023-12-13', '0612345678', 'maroc');

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `courId` int(11) NOT NULL,
  `courName` varchar(255) DEFAULT NULL,
  `courDescription` text DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `startTime` varchar(255) DEFAULT NULL,
  `adminId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`courId`, `courName`, `courDescription`, `category`, `startTime`, `adminId`) VALUES
(1, 'Barrett Nichols', NULL, 'Dolores eum obcaecat', '2023-12-10 01:09:23', 1),
(2, 'Cassady Saunders', NULL, 'Amet quibusdam amet', '2023-12-10 02:03:49', 1),
(3, 'Melyssa Hale', NULL, 'In cumque quod ducim', '2023-12-10 02:04:55', 1),
(4, 'Acton Perkins', NULL, 'Quidem eius veniam ', '2023-12-10 12:24:06', 1),
(5, 'Ruth Rice', NULL, 'Anim est qui do rati', '2023-12-10 12:27:10', 1),
(6, 'Brandon Dorsey', NULL, 'Tempora odit qui pla', '2023-12-10 13:21:51', 1),
(7, 'Kameko Lott00000', NULL, 'Molestiae assumenda ', '2023-12-10 14:12:58', 1),
(8, 'Chapter Cours', NULL, 'Natus eos eos ullamc', '2023-12-10 14:31:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cour_chapters`
--

CREATE TABLE `cour_chapters` (
  `id` int(11) NOT NULL,
  `heading` varchar(250) DEFAULT NULL,
  `subtitle` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `cour_id` int(11) DEFAULT NULL,
  `passed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cour_chapters`
--

INSERT INTO `cour_chapters` (`id`, `heading`, `subtitle`, `description`, `cour_id`, `passed`) VALUES
(1, 'Assumenda beatae odi', 'Elit dolore fugiat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It h', 1, 1),
(2, 'Saepe et ullam molli', 'Laborum dolore dolor', 'Quia dolorum et cons', 2, 1),
(3, 'Quis esse aut in su', 'Quo eu sit veniam ', 'Officia esse in sunt', 3, 1),
(4, 'Accusantium ratione ', 'Ex in tempor sunt h', 'Laboris asperiores d', 3, 0),
(5, 'Iure libero non null', 'Iste incidunt dolor', 'Commodi sit vel quod', 4, 0),
(6, 'Maxime dolorem repre', 'Iure aspernatur est ', 'Dolore dicta invento', 4, 0),
(7, 'Nulla similique omni', 'Ipsum modi qui magna', 'Duis animi eos mole', 5, 0),
(8, 'Maxime quam dolor od', 'Et ullam minim debit', 'Mollit aut aperiam a', 6, 0),
(9, 'Inventore repudianda', 'Velit blanditiis la', 'Commodo voluptatem ', 6, 0),
(10, 'Quia impedit iusto ', 'Dolorem culpa neque ', 'Sunt nobis mollit e', 7, 1),
(11, 'Explicabo Accusamus', 'Quos qui elit expli', 'Sit pariatur Nostr', 7, 1),
(12, 'Et ratione ratione l', 'Exercitation excepte', 'Aut officiis perspic', 7, 1),
(13, 'Sunt hic non volupta', 'Nihil dolor repellen', 'Consequat Fugiat v', 7, 1),
(14, 'Non in molestias quo', 'Quaerat earum iusto ', 'Asperiores non ea co', 7, 1),
(15, 'Nisi eum deserunt si', 'Dolor aspernatur vol', 'Dolor eaque exercita', 7, 1),
(16, 'Officiis sunt qui ve', 'Tempora quam quia ut', 'Sint accusamus exerc', 8, 1),
(17, 'Quos aut voluptates ', 'Unde suscipit laudan', 'A nihil laborum Eve', 8, 1),
(18, 'Eveniet cum labore ', 'Consequatur Magna v', 'Adipisci totam dolor', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `passedcours`
--

CREATE TABLE `passedcours` (
  `passedcourId` int(11) NOT NULL,
  `courProgress` int(11) DEFAULT NULL,
  `courId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passedquiz`
--

CREATE TABLE `passedquiz` (
  `passedquizId` int(11) NOT NULL,
  `quizresult` int(11) DEFAULT NULL,
  `quizId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionsId` int(11) NOT NULL,
  `questionContent` varchar(255) DEFAULT NULL,
  `quizId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizId` int(11) NOT NULL,
  `quizName` varchar(250) NOT NULL,
  `courId` int(11) DEFAULT NULL,
  `adminId` int(11) DEFAULT NULL,
  `creation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizId`, `quizName`, `courId`, `adminId`, `creation`) VALUES
(1, 'Karly Coffey', 1, 1, '2023'),
(2, 'Sylvester Herrera', 1, NULL, '2023'),
(3, 'Wynne Kim', 2, NULL, '2023'),
(4, 'Keefe Spears', 3, NULL, '2023'),
(5, 'Geraldine Marquez', 3, NULL, '2023'),
(6, 'Nomlanga Mason', 7, NULL, '2023'),
(7, 'Cameron Beach', 8, NULL, '2023');

-- --------------------------------------------------------

--
-- Table structure for table `reponses`
--

CREATE TABLE `reponses` (
  `reponseId` int(11) NOT NULL,
  `reponseContent` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `quizId` int(11) DEFAULT NULL,
  `questionsId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resultat`
--

CREATE TABLE `resultat` (
  `resultatId` int(11) NOT NULL,
  `quizResult` int(11) DEFAULT NULL,
  `quizId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `phoneNumber` varchar(250) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `gender` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`userId`, `userName`, `email`, `password`, `dateOfBirth`, `phoneNumber`, `nationality`, `gender`) VALUES
(1, 'lecica', 'hivyrydu@mailinator.com', '$2y$10$uJQoFHaHm29wmq8AiZ8/Ie9YG/gW4xN9uJ4Zzw4RP55O8oZuqCbSS', '0000-00-00', '+1 (789) 691-8049', 'Kaseem Mckee', 0),
(2, 'basylahana', 'libowoqylo@mailinator.com', '$2y$10$4a4h0ANJyknruHPzgvQnWOsw6w7uWQe2GCyesWAkDDTldSWewmQVe', '0000-00-00', '+1 (505) 624-2305', 'Maris Fuentes', 0),
(3, 'vewiti', 'kopunyla@mailinator.com', '$2y$10$CXHedKl3Y0QbsC59SmbiZeDcAjKm5JXkuw6vIPmc6v9giFA9NEm6W', '0000-00-00', '+1 (667) 667-6093', 'Jasmine Knight', 0),
(4, 'fytyve', 'tyqariqa@mailinator.com', '$2y$10$5tXw.RbLNRuvwvDuJcDY9eJqk0Hqf8p/FFm/vA6TYkDGvZ8yjt2Am', '0000-00-00', '+1 (344) 632-5639', 'Salvador Emerson', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`courId`),
  ADD KEY `adminId` (`adminId`);

--
-- Indexes for table `cour_chapters`
--
ALTER TABLE `cour_chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cour_id` (`cour_id`);

--
-- Indexes for table `passedcours`
--
ALTER TABLE `passedcours`
  ADD PRIMARY KEY (`passedcourId`),
  ADD KEY `courId` (`courId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `passedquiz`
--
ALTER TABLE `passedquiz`
  ADD PRIMARY KEY (`passedquizId`),
  ADD KEY `quizId` (`quizId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionsId`),
  ADD KEY `quizId` (`quizId`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizId`),
  ADD KEY `courId` (`courId`),
  ADD KEY `adminId` (`adminId`);

--
-- Indexes for table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`reponseId`),
  ADD KEY `quizId` (`quizId`),
  ADD KEY `questionsId` (`questionsId`);

--
-- Indexes for table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`resultatId`),
  ADD KEY `quizId` (`quizId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `courId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cour_chapters`
--
ALTER TABLE `cour_chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `passedcours`
--
ALTER TABLE `passedcours`
  MODIFY `passedcourId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passedquiz`
--
ALTER TABLE `passedquiz`
  MODIFY `passedquizId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionsId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `reponseId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `resultatId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`adminId`) REFERENCES `administrateur` (`adminId`);

--
-- Constraints for table `cour_chapters`
--
ALTER TABLE `cour_chapters`
  ADD CONSTRAINT `cour_chapters_ibfk_1` FOREIGN KEY (`cour_id`) REFERENCES `cours` (`courId`);

--
-- Constraints for table `passedcours`
--
ALTER TABLE `passedcours`
  ADD CONSTRAINT `passedcours_ibfk_1` FOREIGN KEY (`courId`) REFERENCES `cours` (`courId`),
  ADD CONSTRAINT `passedcours_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `utilisateur` (`userId`);

--
-- Constraints for table `passedquiz`
--
ALTER TABLE `passedquiz`
  ADD CONSTRAINT `passedquiz_ibfk_1` FOREIGN KEY (`quizId`) REFERENCES `quiz` (`quizId`),
  ADD CONSTRAINT `passedquiz_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `utilisateur` (`userId`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`quizId`) REFERENCES `quiz` (`quizId`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `adminId` FOREIGN KEY (`adminId`) REFERENCES `administrateur` (`adminId`),
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`courId`) REFERENCES `cours` (`courId`);

--
-- Constraints for table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `reponses_ibfk_1` FOREIGN KEY (`quizId`) REFERENCES `quiz` (`quizId`),
  ADD CONSTRAINT `reponses_ibfk_2` FOREIGN KEY (`questionsId`) REFERENCES `questions` (`questionsId`);

--
-- Constraints for table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `resultat_ibfk_1` FOREIGN KEY (`quizId`) REFERENCES `quiz` (`quizId`),
  ADD CONSTRAINT `resultat_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `utilisateur` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
