-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 06:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment_links`
--

CREATE TABLE `assessment_links` (
  `id` int(50) NOT NULL,
  `file_id` int(50) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `generated_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assessment_links`
--

INSERT INTO `assessment_links` (`id`, `file_id`, `file_type`, `file_name`, `publisher_name`, `generated_link`) VALUES
(5, 0, 'exam', 'HTML MIDTERM-EXAM', 'ARNIE SANTOS', 'https://docs.google.com/forms/d/e/1FAIpQLSfAksVHbZfHNz4c2g0U53KlMqeCogNW6S248S5uP6Y95ua1ig/viewform'),
(6, 0, 'quiz', 'HTML MIDTERM-EXAM', 'ARNIE SANTOS', 'https://docs.google.com/forms/d/e/1FAIpQLSfAksVHbZfHNz4c2g0U53KlMqeCogNW6S248S5uP6Y95ua1ig/viewform'),
(7, 0, 'exam', 'HTML MIDTERM-EXAM', 'ARNIE SANTOS', 'https://docs.google.com/forms/d/e/1FAIpQLSfAksVHbZfHNz4c2g0U53KlMqeCogNW6S248S5uP6Y95ua1ig/viewform'),
(8, 0, 'exam', 'HTML MIDTERM-EXAM', 'ARNIE SANTOS', 'https://docs.google.com/forms/d/e/1FAIpQLSfAksVHbZfHNz4c2g0U53KlMqeCogNW6S248S5uP6Y95ua1ig/viewform'),
(9, 0, 'quiz', 'HTML QUIZ 2', 'ARNIE SANTOS', 'https://docs.google.com/forms/d/1qkypuxc-Rtrrcu6kqeMXwRrcbsQbQcAQhNmUk2E8P44');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_number` char(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_number`, `student_id`, `student_name`, `username`, `email`, `password`, `usertype`) VALUES
('', 1, 'Arnie Santos', 'admin', 'asantos@gmail.com', '123', 'admin'),
('', 2, 'Jaryl Lumanog', 'Jaryl_Lumanog', 'jaril@gmail.com', '1234', 'student'),
('', 3, 'admindinako', 'adminako', 'adminako@gmail.com', '1234', 'admin'),
('', 4, 'stupidyante_ako ', 'stupidyante', '1231232@gmail.com', '12345', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `users_db`
--

CREATE TABLE `users_db` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_db`
--

INSERT INTO `users_db` (`id`, `username`, `email`, `usertype`, `password`) VALUES
(1, 'asd', 'asd@gmail.com', '', 'asd'),
(2, 'qwe', 'qwe@gmail.com', '', '123'),
(3, 'Ar_Santos', 'jirokim@gmail.com', '', '123'),
(4, 'admin', 'jirokim@gmail.com', '', '123'),
(5, 'aradmin', 'aradmin@gmail.com', 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment_links`
--
ALTER TABLE `assessment_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment_links`
--
ALTER TABLE `assessment_links`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_db`
--
ALTER TABLE `users_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
