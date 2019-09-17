-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2019 at 04:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgg`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher_table`
--

CREATE TABLE `teacher_table` (
  `T_ID` int(11) NOT NULL,
  `T_Code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `T_Pass` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `T_Fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `T_Lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Card` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `T_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher_table`
--

INSERT INTO `teacher_table` (`T_ID`, `T_Code`, `T_Pass`, `T_Fname`, `T_Lname`, `ID_Card`, `T_Email`) VALUES
(1, '55555', 'ef97b904eee80fd0233e0731d46778df', 'Monday', 'Friday', '1520100104758', 'screenanywhere@gmail.com'),
(2, '12345', '22dbf48aff1531f6f3cafe2789902657', 'aa', 'bb', '1529900975816', 'nanthawat.tae123@Gmail.com'),
(3, '5656', 'c9bd7cdf559d0a9004df545b8f7efc8f\r\n', 'khkh', 'khkh', '1234567895468', 'user12@localhost'),
(4, '66666', 'e62b7f8cabfa81b44b2390c106601343', 'KK', 'TT', '1234567891234', 'Tae.te@gmail.com'),
(5, '60123', '2ab15870f82abcc5b0085290d87fb154', 'NN', 'KTY', '1529900975817', 'nnkty@gmail.com'),
(6, '60124', '5b4ce53845f55a317b0be8089dc8c427', 'Nantahwat', 'KTY', '1529900975811', 'nk2512@gmail.com'),
(7, '60125', 'e36ef43d4d6813b7d2963754be13cd85', 'Teem', 'MT', '1235987859441', 'TeemMT@gmail.com'),
(8, '60126', '14b23783987ad159aa94dfa4ae713fc0', 'Tae', 'Teem', '1528794631254', 'tt@gmail.com'),
(9, '50000', '19e601591c06c3d258aeb41dbe57aa1c', 'Red', 'blue', '1234567891235', 'dsadad@gmail.com'),
(10, '55555', '86da6b38ed61fa93f88548f7548ae6a3', 'CMU', 'Trekking', '5555555555555', 'cmu@gmail.com'),
(11, '66666', 'f10a8eb5812971809c92beaf6bb908ac', 'Ice', 'nice', '5555555555555', 'ice3@gamil.com'),
(12, '70070', '275c949a70881a7f21eb9896f27a81ee', 'Yui', 'BB', '1234569871520', 'red@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher_table`
--
ALTER TABLE `teacher_table`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher_table`
--
ALTER TABLE `teacher_table`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
