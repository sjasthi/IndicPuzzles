-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 07:55 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indicpuzzles_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `name` varchar(4000) NOT NULL,
  `puzzleCreatorDescription` varchar(5000) DEFAULT NULL,
  `notes` varchar(1000) DEFAULT NULL,
  `inputFromDB` tinyint(1) NOT NULL,
  `inputFromUI` tinyint(1) NOT NULL,
  `outputToDB` tinyint(1) NOT NULL,
  `outputToUI` tinyint(1) NOT NULL,
  `developer` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `playable` tinyint(1) NOT NULL,
  `icon` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `name`, `puzzleCreatorDescription`, `notes`, `inputFromDB`, `inputFromUI`, `outputToDB`, `outputToUI`, `developer`, `status`, `token`, `playable`, `icon`) VALUES
(1, 'Dabble (Pyramids)', 'Pyramids Dabble Puzzle', 'This is Dabble game.', 0, 0, 0, 0, 'Babatunde', 1, 'Dabble/index.php', 1, 'images/icons/dabble.png'),
(2, 'Scrambler', 'Scrambler Puzzle', 'This is Scrambler game', 0, 0, 0, 0, 'Babatunde', 1, 'Scrambler/index.php', 1, 'images/icons/scrambler.jpeg'),
(3, 'Rebus', 'Rebus Puzzle', 'This is Rebus game', 0, 0, 0, 0, 'Babatunde', 1, 'Rebus/index.php', 1, 'images/icons/rebus.png'),
(4, 'Word Find', 'Word Find', 'This is Word_Find game', 0, 0, 0, 0, 'Siva', 1, 'WordFind/index.html', 1, 'images/icons/wordFind.png'),
(5, 'Wordoku', 'Wordoku Puzzle', 'This is Wordoku game', 0, 0, 0, 0, 'Stephen', 1, 'Wordoku/index.php', 1, 'images/icons/wordoku.png'),
(6, 'CrossWord (Fill-in)', 'Crossword Fill-in', 'This is CrossWord Fill-in game', 0, 0, 0, 0, 'Stephen', 1, 'Crossword/index.php', 1, 'images/icons/join.jpeg'),
(7, 'CrossWord (Classic)', 'Crossword Classic', 'This is CrossWord Classic game', 0, 0, 0, 0, 'Babatunde', 1, 'Crossword/index.php', 1, 'images/icons/join.jpeg'),
(8, 'CrossWord (Skeleton)', 'Crossword Skeleton', 'This is CrossWord Skeleton game', 0, 0, 0, 0, 'Babatunde', 1, 'Crossword/index.php', 1, 'images/icons/join.jpeg'),
(9, 'Scrambled Shapes', 'Scrambled Shapes', 'This is Scrambled Shapes game', 0, 0, 0, 0, 'Siva', 1, 'ScrambledShapes/indexshapes.html', 1, 'images/icons/ScrambledShapes.png'),
(10, 'Bingo', 'Bingo Puzzle', 'This is Bingo game', 0, 0, 0, 0, 'Siva', 1, 'bingo/Bingo.php', 1, 'images/icons/bingo.png'),
(11, 'Word Match', 'Word Match', 'This is Word Match game', 0, 0, 0, 0, 'Siva', 1, 'Word_Match/index.html', 1, 'images/icons/wordMatch.png'),
(12, '4Pics1Word', '4 Pics 1 Word', 'This is 4 Pics 1 Word game', 0, 0, 0, 0, 'Siva', 1, 'Rebus/index.php', 1, 'images/icons/4pic1word.png'),
(13, 'Whats the Name', 'What is the Name', 'This is Name in Synonyms game', 0, 0, 0, 0, 'Siva', 1, 'Whats/index.php', 1, 'images/icons/whats.png'),
(14, 'Quote Scrambler', 'Quote Scrambler', 'This is Quote Scrambler game', 0, 0, 0, 0, 'Siva', 1, 'QSFL/Index.php', 1, 'images/icons/FindTheWords.GIF'),
(15, 'Text Analyzer', 'Text Analyzer', 'This is Text Analyzer game', 0, 0, 0, 0, 'Siva', 1, 'IndicTextAnalyzer/index.html', 1, 'images/icons/IndicTextAnalyzer.png'),
(16, 'Is it a Pair', 'Is it a Pair', 'This is Is it a Pair game', 0, 0, 0, 0, 'Siva', 1, 'TestingLanguages1/Index.html', 1, 'images/icons/Test.png'),
(17, 'Drop Quote', 'Drop Quote', 'This is Drop Quote game', 0, 0, 0, 0, 'Siva', 1, 'QSFL/Index.php', 1, 'images/icons/FindTheWords.GIF'),
(18, '7 little words', '7 little words', 'This is 7 Little Words game', 0, 0, 0, 0, 'Alieu', 1, 'Wordoku/index.php', 1, 'images/icons/7littlewords.png'),
(19, 'FillIn', 'Fill In', 'This is FillIn game', 0, 0, 0, 0, 'Alieu', 1, 'ScrambledShapes/indexshapes.html', 1, 'images/icons/fillIn.png'),
(20, 'Jumble', 'Jumble', 'This is Jumble game', 0, 0, 0, 0, 'Babatunde', 1, 'Wordoku/index.php', 1, 'images/icons/jumble.png'),
(21, 'Pick n Assemble (PAW)', 'Pick n Assemble', 'This is Pick and Assemble game', 0, 0, 0, 0, 'Siva', 1, 'Crossword/index.php', 1, 'images/icons/picknassemble.png'),
(22, 'Word Ladder', 'Word Ladder', 'This is Word Ladder game', 0, 0, 0, 0, 'Babatunde', 1, 'WordFind/index.html', 1, 'images/icons/wordLadder.png'),
(23, 'Quiz Master', 'Quiz Master', 'This is Quiz Master game', 0, 0, 0, 0, 'Alieu', 1, 'Crossword/index.php', 1, 'images/icons/quiz.jpeg'),
(24, 'Text Twist', 'Text Twist', 'This is Text Twist game', 0, 0, 0, 0, 'Babatunde', 1, 'ScrambledShapes/indexshapes.html', 1, 'images/icons/textTwist.png'),
(25, 'Rank By X', 'Rank By X', 'This is Rank By X game', 0, 0, 0, 0, 'Alieu', 1, 'bingo/Bingo.php', 1, 'images/icons/RankByX.png'),
(26, 'Dabble Old', 'Old Dabble', 'This is Old Dabble game', 0, 0, 0, 0, 'Babatunde', 1, 'Dabble/index.php', 1, 'images/icons/dabble.png');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(50) NOT NULL,
  `book_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `author_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `image_name` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author_name`, `image_name`) VALUES
(3, 'English Vowel Changes', 'Siva', ''),
(4, 'Easy Cross Words  V.1', 'Siva', ''),
(5, 'wordfind_book', 'Jasthi', '');

-- --------------------------------------------------------

--
-- Table structure for table `gpuzzles`
--

CREATE TABLE `gpuzzles` (
  `id` int(6) NOT NULL COMMENT 'primary key',
  `puzzle_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'name of the generated puzzle  (eg: word_search_1, cross_word_98)',
  `creator_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'Manual' COMMENT 'Application used to generate the puzzle',
  `author_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'who created this puzzle',
  `book_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'what is the name of the compilation or book in which this puzzle is going in?',
  `puzzle_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'we will carry only the image name in DB',
  `solution_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'we will carry only the image name in DB',
  `notes` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'to capture any misc. notes',
  `keywords` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'for keywords'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gpuzzles`
--

INSERT INTO `gpuzzles` (`id`, `puzzle_name`, `creator_name`, `author_name`, `book_name`, `puzzle_image`, `solution_image`, `notes`, `keywords`) VALUES
(1, 'vowel_changes_1', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (1).JPG', 'vowel_changes_sol (1).JPG', 'puzzles with the images 1', NULL),
(2, 'vowel_changes_2', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (2).JPG', 'vowel_changes_sol (2).JPG', '', NULL),
(3, 'vowel_changes_3', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (3).JPG', 'vowel_changes_sol (3).JPG', '', NULL),
(4, 'vowel_changes_4', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (4).JPG', 'vowel_changes_sol (4).JPG', '', NULL),
(5, 'vowel_changes_5', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (5).JPG', 'vowel_changes_sol (5).JPG', '', NULL),
(6, 'vowel_changes_6', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (6).JPG', 'vowel_changes_sol (6).JPG', '', NULL),
(7, 'vowel_changes_7', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (7).JPG', 'vowel_changes_sol (7).JPG', '', NULL),
(8, 'vowel_changes_8', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (8).JPG', 'vowel_changes_sol (8).JPG', '', NULL),
(9, 'vowel_changes_9', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (9).JPG', 'vowel_changes_sol (9).JPG', '', NULL),
(10, 'vowel_changes_10', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (10).JPG', 'vowel_changes_sol (10).JPG', '', NULL),
(11, 'vowel_changes_11', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (11).JPG', 'vowel_changes_sol (11).JPG', '', NULL),
(12, 'vowel_changes_12', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (12).JPG', 'vowel_changes_sol (12).JPG', '', NULL),
(13, 'vowel_changes_13', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (13).JPG', 'vowel_changes_sol (13).JPG', '', NULL),
(14, 'vowel_changes_14', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (14).JPG', 'vowel_changes_sol (14).JPG', '', NULL),
(15, 'vowel_changes_15', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (15).JPG', 'vowel_changes_sol (15).JPG', '', NULL),
(16, 'vowel_changes_16', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (16).JPG', 'vowel_changes_sol (16).JPG', '', NULL),
(17, 'vowel_changes_17', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (17).JPG', 'vowel_changes_sol (17).JPG', '', NULL),
(18, 'vowel_changes_18', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (18).JPG', 'vowel_changes_sol (18).JPG', '', NULL),
(19, 'vowel_changes_19', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (19).JPG', 'vowel_changes_sol (19).JPG', '', NULL),
(20, 'vowel_changes_20', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (20).JPG', 'vowel_changes_sol (20).JPG', '', NULL),
(21, 'vowel_changes_21', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (21).JPG', 'vowel_changes_sol (21).JPG', '', NULL),
(22, 'vowel_changes_22', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (22).JPG', 'vowel_changes_sol (22).JPG', '', NULL),
(23, 'vowel_changes_23', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (23).JPG', 'vowel_changes_sol (23).JPG', '', NULL),
(24, 'vowel_changes_24', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (24).JPG', 'vowel_changes_sol (24).JPG', '', NULL),
(25, 'vowel_changes_25', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (25).JPG', 'vowel_changes_sol (25).JPG', '', NULL),
(26, 'vowel_changes_26', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (26).JPG', 'vowel_changes_sol (26).JPG', '', NULL),
(27, 'vowel_changes_27', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (27).JPG', 'vowel_changes_sol (27).JPG', '', NULL),
(28, 'vowel_changes_28', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (28).JPG', 'vowel_changes_sol (28).JPG', '', NULL),
(29, 'vowel_changes_29', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (29).JPG', 'vowel_changes_sol (29).JPG', '', NULL),
(30, 'vowel_changes_30', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (30).JPG', 'vowel_changes_sol (30).JPG', '', NULL),
(31, 'vowel_changes_31', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (31).JPG', 'vowel_changes_sol (31).JPG', '', NULL),
(32, 'vowel_changes_32', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (32).JPG', 'vowel_changes_sol (32).JPG', '', NULL),
(33, 'vowel_changes_33', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (33).JPG', 'vowel_changes_sol (33).JPG', '', NULL),
(34, 'vowel_changes_34', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (34).JPG', 'vowel_changes_sol (34).JPG', '', NULL),
(35, 'vowel_changes_35', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (35).JPG', 'vowel_changes_sol (35).JPG', '', NULL),
(36, 'vowel_changes_36', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (36).JPG', 'vowel_changes_sol (36).JPG', '', NULL),
(37, 'vowel_changes_37', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (37).JPG', 'vowel_changes_sol (37).JPG', '', NULL),
(38, 'vowel_changes_38', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (38).JPG', 'vowel_changes_sol (38).JPG', '', NULL),
(39, 'vowel_changes_39', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (39).JPG', 'vowel_changes_sol (39).JPG', '', NULL),
(40, 'vowel_changes_40', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (40).JPG', 'vowel_changes_sol (40).JPG', '', NULL),
(41, 'vowel_changes_41', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (41).JPG', 'vowel_changes_sol (41).JPG', '', NULL),
(42, 'vowel_changes_42', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (42).JPG', 'vowel_changes_sol (42).JPG', '', NULL),
(43, 'vowel_changes_43', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (43).JPG', 'vowel_changes_sol (43).JPG', '', NULL),
(44, 'vowel_changes_44', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (44).JPG', 'vowel_changes_sol (44).JPG', '', NULL),
(45, 'vowel_changes_45', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (45).JPG', 'vowel_changes_sol (45).JPG', '', NULL),
(46, 'vowel_changes_46', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (46).JPG', 'vowel_changes_sol (46).JPG', '', NULL),
(47, 'vowel_changes_47', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (47).JPG', 'vowel_changes_sol (47).JPG', '', NULL),
(48, 'vowel_changes_48', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (48).JPG', 'vowel_changes_sol (48).JPG', '', NULL),
(49, 'vowel_changes_49', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (49).JPG', 'vowel_changes_sol (49).JPG', '', NULL),
(50, 'vowel_changes_50', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (50).JPG', 'vowel_changes_sol (50).JPG', '', NULL),
(51, 'vowel_changes_51', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (51).JPG', 'vowel_changes_sol (51).JPG', '', NULL),
(52, 'vowel_changes_52', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (52).JPG', 'vowel_changes_sol (52).JPG', '', NULL),
(53, 'vowel_changes_53', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (53).JPG', 'vowel_changes_sol (53).JPG', '', NULL),
(54, 'vowel_changes_54', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (54).JPG', 'vowel_changes_sol (54).JPG', '', NULL),
(55, 'vowel_changes_55', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (55).JPG', 'vowel_changes_sol (55).JPG', '', NULL),
(56, 'vowel_changes_56', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (56).JPG', 'vowel_changes_sol (56).JPG', '', NULL),
(57, 'vowel_changes_57', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (57).JPG', 'vowel_changes_sol (57).JPG', '', NULL),
(58, 'vowel_changes_58', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (58).JPG', 'vowel_changes_sol (58).JPG', '', NULL),
(59, 'vowel_changes_59', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (59).JPG', 'vowel_changes_sol (59).JPG', '', NULL),
(60, 'vowel_changes_60', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (60).JPG', 'vowel_changes_sol (60).JPG', '', NULL),
(61, 'vowel_changes_61', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (61).JPG', 'vowel_changes_sol (61).JPG', '', NULL),
(62, 'vowel_changes_62', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (62).JPG', 'vowel_changes_sol (62).JPG', '', NULL),
(63, 'vowel_changes_63', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (63).JPG', 'vowel_changes_sol (63).JPG', '', NULL),
(64, 'vowel_changes_64', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (64).JPG', 'vowel_changes_sol (64).JPG', '', NULL),
(65, 'vowel_changes_65', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (65).JPG', 'vowel_changes_sol (65).JPG', '', NULL),
(66, 'vowel_changes_66', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (66).JPG', 'vowel_changes_sol (66).JPG', '', NULL),
(67, 'vowel_changes_67', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (67).JPG', 'vowel_changes_sol (67).JPG', '', NULL),
(68, 'vowel_changes_68', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (68).JPG', 'vowel_changes_sol (68).JPG', '', NULL),
(69, 'vowel_changes_69', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (69).JPG', 'vowel_changes_sol (69).JPG', '', NULL),
(70, 'vowel_changes_70', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (70).JPG', 'vowel_changes_sol (70).JPG', '', NULL),
(71, 'vowel_changes_71', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (71).JPG', 'vowel_changes_sol (71).JPG', '', NULL),
(72, 'vowel_changes_72', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (72).JPG', 'vowel_changes_sol (72).JPG', '', NULL),
(73, 'vowel_changes_73', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (73).JPG', 'vowel_changes_sol (73).JPG', '', NULL),
(74, 'vowel_changes_74', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (74).JPG', 'vowel_changes_sol (74).JPG', '', NULL),
(75, 'vowel_changes_75', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (75).JPG', 'vowel_changes_sol (75).JPG', '', NULL),
(76, 'vowel_changes_76', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (76).JPG', 'vowel_changes_sol (76).JPG', '', NULL),
(77, 'vowel_changes_77', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (77).JPG', 'vowel_changes_sol (77).JPG', '', NULL),
(78, 'vowel_changes_78', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (78).JPG', 'vowel_changes_sol (78).JPG', '', NULL),
(79, 'vowel_changes_79', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (79).JPG', 'vowel_changes_sol (79).JPG', '', NULL),
(80, 'vowel_changes_80', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (80).JPG', 'vowel_changes_sol (80).JPG', '', NULL),
(81, 'vowel_changes_81', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (81).JPG', 'vowel_changes_sol (81).JPG', '', NULL),
(82, 'vowel_changes_82', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (82).JPG', 'vowel_changes_sol (82).JPG', '', NULL),
(83, 'vowel_changes_83', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (83).JPG', 'vowel_changes_sol (83).JPG', '', NULL),
(84, 'vowel_changes_84', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (84).JPG', 'vowel_changes_sol (84).JPG', '', NULL),
(85, 'vowel_changes_85', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (85).JPG', 'vowel_changes_sol (85).JPG', '', NULL),
(86, 'vowel_changes_86', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (86).JPG', 'vowel_changes_sol (86).JPG', '', NULL),
(87, 'vowel_changes_87', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (87).JPG', 'vowel_changes_sol (87).JPG', '', NULL),
(88, 'vowel_changes_88', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (88).JPG', 'vowel_changes_sol (88).JPG', '', NULL),
(89, 'vowel_changes_89', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (89).JPG', 'vowel_changes_sol (89).JPG', '', NULL),
(90, 'vowel_changes_90', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (90).JPG', 'vowel_changes_sol (90).JPG', '', NULL),
(91, 'vowel_changes_91', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (91).JPG', 'vowel_changes_sol (91).JPG', '', NULL),
(92, 'vowel_changes_92', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (92).JPG', 'vowel_changes_sol (92).JPG', '', NULL),
(93, 'vowel_changes_93', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (93).JPG', 'vowel_changes_sol (93).JPG', '', NULL),
(94, 'vowel_changes_94', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (94).JPG', 'vowel_changes_sol (94).JPG', '', NULL),
(95, 'vowel_changes_95', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (95).JPG', 'vowel_changes_sol (95).JPG', '', NULL),
(96, 'vowel_changes_96', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (96).JPG', 'vowel_changes_sol (96).JPG', '', NULL),
(97, 'vowel_changes_97', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (97).JPG', 'vowel_changes_sol (97).JPG', '', NULL),
(98, 'vowel_changes_98', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (98).JPG', 'vowel_changes_sol (98).JPG', '', NULL),
(99, 'vowel_changes_99', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (99).JPG', 'vowel_changes_sol (99).JPG', '', NULL),
(100, 'vowel_changes_100', 'Vowel Changer', 'Siva Jasthi', 'English Vowel Changes', 'vowel_changes (100).JPG', 'vowel_changes_sol (100).JPG', '', NULL),
(101, 'word_search_1', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_1.jpg', 'word_search_1_sol.jpg', 'this is the first puzzle', NULL),
(102, 'word_search_2', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_2.jpg', 'word_search_2_sol.jpg', '', NULL),
(103, 'word_search_3', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_3.jpg', 'word_search_3_sol.jpg', '', NULL),
(104, 'word_search_4', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_4.jpg', 'word_search_4_sol.jpg', '', NULL),
(105, 'word_search_5', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_5.jpg', 'word_search_5_sol.jpg', '', NULL),
(106, 'word_search_6', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_6.jpg', 'word_search_6_sol.jpg', '', NULL),
(107, 'word_search_7', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_7.jpg', 'word_search_7_sol.jpg', '', NULL),
(108, 'word_search_8', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_8.jpg', 'word_search_8_sol.jpg', '', NULL),
(109, 'word_search_9', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_9.jpg', 'word_search_9_sol.jpg', '', NULL),
(110, 'word_search_10', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_10.jpg', 'word_search_10_sol.jpg', '', NULL),
(111, 'word_search_11', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_11.jpg', 'word_search_11_sol.jpg', '', NULL),
(112, 'word_search_12', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_12.jpg', 'word_search_12_sol.jpg', '', NULL),
(113, 'word_search_13', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_13.jpg', 'word_search_13_sol.jpg', '', NULL),
(114, 'word_search_14', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_14.jpg', 'word_search_14_sol.jpg', '', NULL),
(115, 'word_search_15', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_15.jpg', 'word_search_15_sol.jpg', '', NULL),
(116, 'word_search_16', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_16.jpg', 'word_search_16_sol.jpg', '', NULL),
(117, 'word_search_17', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_17.jpg', 'word_search_17_sol.jpg', '', NULL),
(118, 'word_search_18', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_18.jpg', 'word_search_18_sol.jpg', '', NULL),
(119, 'word_search_19', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_19.jpg', 'word_search_19_sol.jpg', '', NULL),
(120, 'word_search_20', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_20.jpg', 'word_search_20_sol.jpg', '', NULL),
(121, 'word_search_21', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_21.jpg', 'word_search_21_sol.jpg', '', NULL),
(122, 'word_search_22', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_22.jpg', 'word_search_22_sol.jpg', '', NULL),
(123, 'word_search_23', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_23.jpg', 'word_search_23_sol.jpg', '', NULL),
(124, 'word_search_24', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_24.jpg', 'word_search_24_sol.jpg', '', NULL),
(125, 'word_search_25', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_25.jpg', 'word_search_25_sol.jpg', '', NULL),
(126, 'word_search_26', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_26.jpg', 'word_search_26_sol.jpg', '', NULL),
(127, 'word_search_27', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_27.jpg', 'word_search_27_sol.jpg', '', NULL),
(128, 'word_search_28', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_28.jpg', 'word_search_28_sol.jpg', '', NULL),
(129, 'word_search_29', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_29.jpg', 'word_search_29_sol.jpg', '', NULL),
(130, 'word_search_30', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_30.jpg', 'word_search_30_sol.jpg', '', NULL),
(131, 'word_search_31', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_31.jpg', 'word_search_31_sol.jpg', '', NULL),
(132, 'word_search_32', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_32.jpg', 'word_search_32_sol.jpg', '', NULL),
(133, 'word_search_33', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_33.jpg', 'word_search_33_sol.jpg', '', NULL),
(134, 'word_search_34', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_34.jpg', 'word_search_34_sol.jpg', '', NULL),
(135, 'word_search_35', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_35.jpg', 'word_search_35_sol.jpg', '', NULL),
(136, 'word_search_36', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_36.jpg', 'word_search_36_sol.jpg', '', NULL),
(137, 'word_search_37', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_37.jpg', 'word_search_37_sol.jpg', '', NULL),
(138, 'word_search_38', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_38.jpg', 'word_search_38_sol.jpg', '', NULL),
(139, 'word_search_39', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_39.jpg', 'word_search_39_sol.jpg', '', NULL),
(140, 'word_search_40', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_40.jpg', 'word_search_40_sol.jpg', '', NULL),
(141, 'word_search_41', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_41.jpg', 'word_search_41_sol.jpg', '', NULL),
(142, 'word_search_42', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_42.jpg', 'word_search_42_sol.jpg', '', NULL),
(143, 'word_search_43', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_43.jpg', 'word_search_43_sol.jpg', '', NULL),
(144, 'word_search_44', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_44.jpg', 'word_search_44_sol.jpg', '', NULL),
(145, 'word_search_45', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_45.jpg', 'word_search_45_sol.jpg', '', NULL),
(146, 'word_search_46', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_46.jpg', 'word_search_46_sol.jpg', '', NULL),
(147, 'word_search_47', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_47.jpg', 'word_search_47_sol.jpg', '', NULL),
(148, 'word_search_48', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_48.jpg', 'word_search_48_sol.jpg', '', NULL),
(149, 'word_search_49', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_49.jpg', 'word_search_49_sol.jpg', '', NULL),
(150, 'word_search_50', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_50.jpg', 'word_search_50_sol.jpg', '', NULL),
(151, 'word_search_51', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_51.jpg', 'word_search_51_sol.jpg', '', NULL),
(152, 'word_search_52', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_52.jpg', 'word_search_52_sol.jpg', '', NULL),
(153, 'word_search_53', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_53.jpg', 'word_search_53_sol.jpg', '', NULL),
(154, 'word_search_54', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_54.jpg', 'word_search_54_sol.jpg', '', NULL),
(155, 'word_search_55', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_55.jpg', 'word_search_55_sol.jpg', '', NULL),
(156, 'word_search_56', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_56.jpg', 'word_search_56_sol.jpg', '', NULL),
(157, 'word_search_57', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_57.jpg', 'word_search_57_sol.jpg', '', NULL),
(158, 'word_search_58', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_58.jpg', 'word_search_58_sol.jpg', '', NULL),
(159, 'word_search_59', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_59.jpg', 'word_search_59_sol.jpg', '', NULL),
(160, 'word_search_60', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_60.jpg', 'word_search_60_sol.jpg', '', NULL),
(161, 'word_search_61', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_61.jpg', 'word_search_61_sol.jpg', '', NULL),
(162, 'word_search_62', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_62.jpg', 'word_search_62_sol.jpg', '', NULL),
(163, 'word_search_63', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_63.jpg', 'word_search_63_sol.jpg', '', NULL),
(164, 'word_search_64', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_64.jpg', 'word_search_64_sol.jpg', '', NULL),
(165, 'word_search_65', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_65.jpg', 'word_search_65_sol.jpg', '', NULL),
(166, 'word_search_66', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_66.jpg', 'word_search_66_sol.jpg', '', NULL),
(167, 'word_search_67', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_67.jpg', 'word_search_67_sol.jpg', '', NULL),
(168, 'word_search_68', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_68.jpg', 'word_search_68_sol.jpg', '', NULL),
(169, 'word_search_69', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_69.jpg', 'word_search_69_sol.jpg', '', NULL),
(170, 'word_search_70', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_70.jpg', 'word_search_70_sol.jpg', '', NULL),
(171, 'word_search_71', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_71.jpg', 'word_search_71_sol.jpg', '', NULL),
(172, 'word_search_72', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_72.jpg', 'word_search_72_sol.jpg', '', NULL),
(173, 'word_search_73', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_73.jpg', 'word_search_73_sol.jpg', '', NULL),
(174, 'word_search_74', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_74.jpg', 'word_search_74_sol.jpg', '', NULL),
(175, 'word_search_75', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_75.jpg', 'word_search_75_sol.jpg', '', NULL),
(176, 'word_search_76', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_76.jpg', 'word_search_76_sol.jpg', '', NULL),
(177, 'word_search_77', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_77.jpg', 'word_search_77_sol.jpg', '', NULL),
(178, 'word_search_78', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_78.jpg', 'word_search_78_sol.jpg', '', NULL),
(179, 'word_search_79', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_79.jpg', 'word_search_79_sol.jpg', '', NULL),
(180, 'word_search_80', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_80.jpg', 'word_search_80_sol.jpg', '', NULL),
(181, 'word_search_81', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_81.jpg', 'word_search_81_sol.jpg', '', NULL),
(182, 'word_search_82', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_82.jpg', 'word_search_82_sol.jpg', '', NULL),
(183, 'word_search_83', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_83.jpg', 'word_search_83_sol.jpg', '', NULL),
(184, 'word_search_84', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_84.jpg', 'word_search_84_sol.jpg', '', NULL),
(185, 'word_search_85', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_85.jpg', 'word_search_85_sol.jpg', '', NULL),
(186, 'word_search_86', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_86.jpg', 'word_search_86_sol.jpg', '', NULL),
(187, 'word_search_87', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_87.jpg', 'word_search_87_sol.jpg', '', NULL),
(188, 'word_search_88', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_88.jpg', 'word_search_88_sol.jpg', '', NULL),
(189, 'word_search_89', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_89.jpg', 'word_search_89_sol.jpg', '', NULL),
(190, 'word_search_90', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_90.jpg', 'word_search_90_sol.jpg', '', NULL),
(191, 'word_search_91', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_91.jpg', 'word_search_91_sol.jpg', '', NULL),
(192, 'word_search_92', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_92.jpg', 'word_search_92_sol.jpg', '', NULL),
(193, 'word_search_93', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_93.jpg', 'word_search_93_sol.jpg', '', NULL),
(194, 'word_search_94', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_94.jpg', 'word_search_94_sol.jpg', '', NULL),
(195, 'word_search_95', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_95.jpg', 'word_search_95_sol.jpg', '', NULL),
(196, 'word_search_96', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_96.jpg', 'word_search_96_sol.jpg', '', NULL),
(197, 'word_search_97', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_97.jpg', 'word_search_97_sol.jpg', '', NULL),
(198, 'word_search_98', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_98.jpg', 'word_search_98_sol.jpg', '', NULL),
(199, 'word_search_99', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_99.jpg', 'word_search_99_sol.jpg', '', NULL),
(200, 'word_search_100', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'word_search_100.jpg', 'word_search_100_sol.jpg', 'this is the 100th puzzle', NULL),
(201, 'cross_word_1', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_1.jpg', 'cross_word_1_sol.jpg', 'this is the first puzzle', NULL),
(202, 'cross_word_2', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_2.jpg', 'cross_word_2_sol.jpg', '', NULL),
(203, 'cross_word_3', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_3.jpg', 'cross_word_3_sol.jpg', '', NULL),
(204, 'cross_word_4', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_4.jpg', 'cross_word_4_sol.jpg', '', NULL),
(205, 'cross_word_5', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_5.jpg', 'cross_word_5_sol.jpg', '', NULL),
(206, 'cross_word_6', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_6.jpg', 'cross_word_6_sol.jpg', '', NULL),
(207, 'cross_word_7', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_7.jpg', 'cross_word_7_sol.jpg', '', NULL),
(208, 'cross_word_8', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_8.jpg', 'cross_word_8_sol.jpg', '', NULL),
(209, 'cross_word_9', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_9.jpg', 'cross_word_9_sol.jpg', '', NULL),
(210, 'cross_word_10', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_10.jpg', 'cross_word_10_sol.jpg', '', NULL),
(211, 'cross_word_11', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_11.jpg', 'cross_word_11_sol.jpg', '', NULL),
(212, 'cross_word_12', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_12.jpg', 'cross_word_12_sol.jpg', '', NULL),
(213, 'cross_word_13', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_13.jpg', 'cross_word_13_sol.jpg', '', NULL),
(214, 'cross_word_14', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_14.jpg', 'cross_word_14_sol.jpg', '', NULL),
(215, 'cross_word_15', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_15.jpg', 'cross_word_15_sol.jpg', '', NULL),
(216, 'cross_word_16', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_16.jpg', 'cross_word_16_sol.jpg', '', NULL),
(217, 'cross_word_17', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_17.jpg', 'cross_word_17_sol.jpg', '', NULL),
(218, 'cross_word_18', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_18.jpg', 'cross_word_18_sol.jpg', '', NULL),
(219, 'cross_word_19', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_19.jpg', 'cross_word_19_sol.jpg', '', NULL),
(220, 'cross_word_20', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_20.jpg', 'cross_word_20_sol.jpg', '', NULL),
(221, 'cross_word_21', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_21.jpg', 'cross_word_21_sol.jpg', '', NULL),
(222, 'cross_word_22', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_22.jpg', 'cross_word_22_sol.jpg', '', NULL),
(223, 'cross_word_23', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_23.jpg', 'cross_word_23_sol.jpg', '', NULL),
(224, 'cross_word_24', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_24.jpg', 'cross_word_24_sol.jpg', '', NULL),
(225, 'cross_word_25', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_25.jpg', 'cross_word_25_sol.jpg', '', NULL),
(226, 'cross_word_26', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_26.jpg', 'cross_word_26_sol.jpg', '', NULL),
(227, 'cross_word_27', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_27.jpg', 'cross_word_27_sol.jpg', '', NULL),
(228, 'cross_word_28', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_28.jpg', 'cross_word_28_sol.jpg', '', NULL),
(229, 'cross_word_29', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_29.jpg', 'cross_word_29_sol.jpg', '', NULL),
(230, 'cross_word_30', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_30.jpg', 'cross_word_30_sol.jpg', '', NULL),
(231, 'cross_word_31', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_31.jpg', 'cross_word_31_sol.jpg', '', NULL),
(232, 'cross_word_32', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_32.jpg', 'cross_word_32_sol.jpg', '', NULL),
(233, 'cross_word_33', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_33.jpg', 'cross_word_33_sol.jpg', '', NULL),
(234, 'cross_word_34', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_34.jpg', 'cross_word_34_sol.jpg', '', NULL),
(235, 'cross_word_35', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_35.jpg', 'cross_word_35_sol.jpg', '', NULL),
(236, 'cross_word_36', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_36.jpg', 'cross_word_36_sol.jpg', '', NULL),
(237, 'cross_word_37', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_37.jpg', 'cross_word_37_sol.jpg', '', NULL),
(238, 'cross_word_38', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_38.jpg', 'cross_word_38_sol.jpg', '', NULL),
(239, 'cross_word_39', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_39.jpg', 'cross_word_39_sol.jpg', '', NULL),
(240, 'cross_word_40', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_40.jpg', 'cross_word_40_sol.jpg', '', NULL),
(241, 'cross_word_41', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_41.jpg', 'cross_word_41_sol.jpg', '', NULL),
(242, 'cross_word_42', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_42.jpg', 'cross_word_42_sol.jpg', '', NULL),
(243, 'cross_word_43', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_43.jpg', 'cross_word_43_sol.jpg', '', NULL),
(244, 'cross_word_44', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_44.jpg', 'cross_word_44_sol.jpg', '', NULL),
(245, 'cross_word_45', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_45.jpg', 'cross_word_45_sol.jpg', '', NULL),
(246, 'cross_word_46', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_46.jpg', 'cross_word_46_sol.jpg', '', NULL),
(247, 'cross_word_47', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_47.jpg', 'cross_word_47_sol.jpg', '', NULL),
(248, 'cross_word_48', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_48.jpg', 'cross_word_48_sol.jpg', '', NULL),
(249, 'cross_word_49', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_49.jpg', 'cross_word_49_sol.jpg', '', NULL),
(250, 'cross_word_50', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_50.jpg', 'cross_word_50_sol.jpg', '', NULL),
(251, 'cross_word_51', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_51.jpg', 'cross_word_51_sol.jpg', '', NULL),
(252, 'cross_word_52', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_52.jpg', 'cross_word_52_sol.jpg', '', NULL),
(253, 'cross_word_53', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_53.jpg', 'cross_word_53_sol.jpg', '', NULL),
(254, 'cross_word_54', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_54.jpg', 'cross_word_54_sol.jpg', '', NULL),
(255, 'cross_word_55', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_55.jpg', 'cross_word_55_sol.jpg', '', NULL),
(256, 'cross_word_56', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_56.jpg', 'cross_word_56_sol.jpg', '', NULL),
(257, 'cross_word_57', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_57.jpg', 'cross_word_57_sol.jpg', '', NULL),
(258, 'cross_word_58', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_58.jpg', 'cross_word_58_sol.jpg', '', NULL),
(259, 'cross_word_59', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_59.jpg', 'cross_word_59_sol.jpg', '', NULL),
(260, 'cross_word_60', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_60.jpg', 'cross_word_60_sol.jpg', '', NULL),
(261, 'cross_word_61', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_61.jpg', 'cross_word_61_sol.jpg', '', NULL),
(262, 'cross_word_62', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_62.jpg', 'cross_word_62_sol.jpg', '', NULL),
(263, 'cross_word_63', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_63.jpg', 'cross_word_63_sol.jpg', '', NULL),
(264, 'cross_word_64', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_64.jpg', 'cross_word_64_sol.jpg', '', NULL),
(265, 'cross_word_65', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_65.jpg', 'cross_word_65_sol.jpg', '', NULL),
(266, 'cross_word_66', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_66.jpg', 'cross_word_66_sol.jpg', '', NULL),
(267, 'cross_word_67', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_67.jpg', 'cross_word_67_sol.jpg', '', NULL),
(268, 'cross_word_68', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_68.jpg', 'cross_word_68_sol.jpg', '', NULL),
(269, 'cross_word_69', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_69.jpg', 'cross_word_69_sol.jpg', '', NULL),
(270, 'cross_word_70', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_70.jpg', 'cross_word_70_sol.jpg', '', NULL),
(271, 'cross_word_71', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_71.jpg', 'cross_word_71_sol.jpg', '', NULL),
(272, 'cross_word_72', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_72.jpg', 'cross_word_72_sol.jpg', '', NULL),
(273, 'cross_word_73', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_73.jpg', 'cross_word_73_sol.jpg', '', NULL),
(274, 'cross_word_74', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_74.jpg', 'cross_word_74_sol.jpg', '', NULL),
(275, 'cross_word_75', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_75.jpg', 'cross_word_75_sol.jpg', '', NULL),
(276, 'cross_word_76', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_76.jpg', 'cross_word_76_sol.jpg', '', NULL),
(277, 'cross_word_77', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_77.jpg', 'cross_word_77_sol.jpg', '', NULL),
(278, 'cross_word_78', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_78.jpg', 'cross_word_78_sol.jpg', '', NULL),
(279, 'cross_word_79', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_79.jpg', 'cross_word_79_sol.jpg', '', NULL),
(280, 'cross_word_80', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_80.jpg', 'cross_word_80_sol.jpg', '', NULL),
(281, 'cross_word_81', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_81.jpg', 'cross_word_81_sol.jpg', '', NULL),
(282, 'cross_word_82', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_82.jpg', 'cross_word_82_sol.jpg', '', NULL),
(283, 'cross_word_83', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_83.jpg', 'cross_word_83_sol.jpg', '', NULL),
(284, 'cross_word_84', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_84.jpg', 'cross_word_84_sol.jpg', '', NULL),
(285, 'cross_word_85', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_85.jpg', 'cross_word_85_sol.jpg', '', NULL),
(286, 'cross_word_86', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_86.jpg', 'cross_word_86_sol.jpg', '', NULL),
(287, 'cross_word_87', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_87.jpg', 'cross_word_87_sol.jpg', '', NULL),
(288, 'cross_word_88', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_88.jpg', 'cross_word_88_sol.jpg', '', NULL),
(289, 'cross_word_89', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_89.jpg', 'cross_word_89_sol.jpg', '', NULL),
(290, 'cross_word_90', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_90.jpg', 'cross_word_90_sol.jpg', '', NULL),
(291, 'cross_word_91', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_91.jpg', 'cross_word_91_sol.jpg', '', NULL),
(292, 'cross_word_92', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_92.jpg', 'cross_word_92_sol.jpg', '', NULL),
(293, 'cross_word_93', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_93.jpg', 'cross_word_93_sol.jpg', '', NULL),
(294, 'cross_word_94', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_94.jpg', 'cross_word_94_sol.jpg', '', NULL),
(295, 'cross_word_95', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_95.jpg', 'cross_word_95_sol.jpg', '', NULL),
(296, 'cross_word_96', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_96.jpg', 'cross_word_96_sol.jpg', '', NULL),
(297, 'cross_word_97', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_97.jpg', 'cross_word_97_sol.jpg', '', NULL),
(298, 'cross_word_98', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_98.jpg', 'cross_word_98_sol.jpg', '', NULL),
(299, 'cross_word_99', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_99.jpg', 'cross_word_99_sol.jpg', '', NULL),
(300, 'cross_word_100', 'Cross Word', 'Siva Jasthi', 'Easy Cross Words  V.1', 'cross_word_100.jpg', 'cross_word_100_sol.jpg', 'this is the 100th puzzle', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `value` int(11) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`id`, `name`, `value`, `comments`) VALUES
(1, 'NO_OF_PUZZLES_PER_ROW', 10, 'This is the number of topics, per row, on home page'),
(2, 'NO_OF_PUZZLES_TO_SHOW', 99, 'The number of Question per quiz');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `hash` varchar(200) NOT NULL,
  `active` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `modified_time` date NOT NULL,
  `created_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `hash`, `active`, `role`, `modified_time`, `created_time`) VALUES
(1, 'Siva', 'Jasthi', 'siva@silcmn.com', '$2y$10$zFAG5GBNtf.5BpowMqZSputSLeG8OzfKACpjAMsePjZhu.TnvU/Bu', 'yes', 'admin', '0000-00-00', '0000-00-00'),
(3, 'SILC', 'Tester', 'test@silcmn.com', '$2y$10$zFAG5GBNtf.5BpowMqZSputSLeG8OzfKACpjAMsePjZhu.TnvU/Bu', 'yes', 'admin', '0000-00-00', '0000-00-00'),
(4, 'SILC', 'CS320', 'cs320@silcmn.com', '$2y$10$zFAG5GBNtf.5BpowMqZSputSLeG8OzfKACpjAMsePjZhu.TnvU/Bu', 'yes', 'admin', '0000-00-00', '0000-00-00'),
(5, 'ICS', '499', 'ics499@metrostate.edu', '$2y$10$zFAG5GBNtf.5BpowMqZSputSLeG8OzfKACpjAMsePjZhu.TnvU/Bu', 'yes', 'admin', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpuzzles`
--
ALTER TABLE `gpuzzles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gpuzzles`
--
ALTER TABLE `gpuzzles`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=301;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
