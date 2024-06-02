-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 10:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mathmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `mm_users`
--

CREATE TABLE `mm_users` (
  `user_id` int(9) UNSIGNED NOT NULL,
  `first_name` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `last_name` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `completed_tasks` mediumtext COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `mm_users`
--

INSERT INTO `mm_users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `completed_tasks`) VALUES
(1, 'David', 'Vrčković', 'dvrckovi1@tvz.hr', '$SHA#8365d0ace8a114d750b5cc8f78be5372f3183de7f407a3268e6294fe1d33cd5c', '2024-04-21 22:32:16', NULL),
(2, 'David', 'Vrčković', 'dvrckovi2@tvz.hr', '$SHA#8365d0ace8a114d750b5cc8f78be5372f3183de7f407a3268e6294fe1d33cd5c', '2024-04-30 22:29:36', NULL),
(3, 'David', 'Vrc', 'davy.navy.3@gmail.com', '$SHA#533cd865c088ee083940b3c9bf2d456244842fd80bbe5fed6beb331895721153', '2024-05-05 17:19:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mm_user_sessions`
--

CREATE TABLE `mm_user_sessions` (
  `session_id` int(9) UNSIGNED NOT NULL,
  `user_id` int(9) UNSIGNED NOT NULL,
  `session_token` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `session_created_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `session_expire_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mm_users`
--
ALTER TABLE `mm_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `mm_user_sessions`
--
ALTER TABLE `mm_user_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mm_users`
--
ALTER TABLE `mm_users`
  MODIFY `user_id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mm_user_sessions`
--
ALTER TABLE `mm_user_sessions`
  MODIFY `session_id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mm_user_sessions`
--
ALTER TABLE `mm_user_sessions`
  ADD CONSTRAINT `mm_user_sessions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mm_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
