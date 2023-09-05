-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 11:03 PM
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
-- Database: `unidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `no_of_sports`
--

CREATE TABLE `no_of_sports` (
  `regNum` varchar(20) NOT NULL,
  `no_of_sport` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `no_of_sports`
--

INSERT INTO `no_of_sports` (`regNum`, `no_of_sport`) VALUES
('2018/ASP/26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sport` varchar(65) DEFAULT NULL,
  `fname` varchar(65) DEFAULT NULL,
  `lname` varchar(65) DEFAULT NULL,
  `regNum` varchar(20) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sport`, `fname`, `lname`, `regNum`, `email`) VALUES
('CRICKET', 'ISURU PRIYANKARA', 'KURUPPU', '2018/ASP/26', 'isuru@gmail.com'),
('TABLE TENNIS', 'ISURU ', 'KURUPPU', '2018/ASP/26', 'isuru@gmail.com');

--
-- Triggers `sports`
--
DELIMITER $$
CREATE TRIGGER `sports_insert_trigger` AFTER INSERT ON `sports` FOR EACH ROW BEGIN
    DECLARE regNumExists INT;
    SELECT COUNT(*) INTO regNumExists FROM no_of_sports WHERE regNum = NEW.regNum;
    IF regNumExists = 0 THEN
        INSERT INTO no_of_sports (regNum, no_of_sport) VALUES (NEW.regNum, 1);
    ELSE
        UPDATE no_of_sports SET no_of_sport = no_of_sport + 1 WHERE regNum = NEW.regNum;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `regNum` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`regNum`, `password`) VALUES
('2018/ASP/26', '$2y$10$KFa4GN7z77Q8MFlKm6OmSe0ZjlmabSeN0wuTlz4tW8tJG0l8ctZtW');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `regNum` varchar(20) NOT NULL,
  `fname` varchar(65) DEFAULT NULL,
  `lname` varchar(65) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`regNum`, `fname`, `lname`, `email`, `mobile`) VALUES
('2018/ASP/26', 'ISURU PRIYANKARA', 'KURUPPU', 'isurukuruppu@gmail.com', 719423401);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `no_of_sports`
--
ALTER TABLE `no_of_sports`
  ADD PRIMARY KEY (`regNum`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD KEY `regNum` (`regNum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`regNum`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`regNum`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `no_of_sports`
--
ALTER TABLE `no_of_sports`
  ADD CONSTRAINT `no_of_sports_ibfk_1` FOREIGN KEY (`regNum`) REFERENCES `user` (`regNum`);

--
-- Constraints for table `sports`
--
ALTER TABLE `sports`
  ADD CONSTRAINT `sports_ibfk_1` FOREIGN KEY (`regNum`) REFERENCES `user` (`regNum`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`regNum`) REFERENCES `user` (`regNum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
