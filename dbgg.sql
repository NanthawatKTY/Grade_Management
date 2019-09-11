-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 11:06 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

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
(1, '55555', '???#>1?gx?', 'Monday', 'Friday', '1520100104758', 'screenanywhere@gmail.com'),
(2, '12345', 'de2048953e6ad22859ade59eb0413c70', 'aa', 'bb', '1529900975816', 'nanthawat.tae123@Gmail.com'),
(3, '5656', 'ǣe?GI??h!H???P', 'khkh', 'khkh', '1234567895468', 'user12@localhost');

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
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
