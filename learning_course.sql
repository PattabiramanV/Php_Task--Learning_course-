-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2024 at 11:12 PM
-- Server version: 10.6.16-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning_course`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `shedule` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `address`, `dob`, `course_name`, `shedule`, `password`) VALUES
(1, 'Rhoda Howard', 'pattabirammanveera@gmail.com', 9361120513, 'Qui est quo nulla re', '1998-03-18', 'course2', 'afternoon', '$2y$10$usgPX7mn2ULMhqsVwwa0Fe1M.WmCDPc8ip/67AUGh3PTvKzY.IOC.'),
(2, 'Kellie Booker', 'joniqugo@mailinator.com', 9, 'Consequatur quaerat', '1996-06-10', 'course2', 'afternoon', '$2y$10$56bnytAu2ukm272ln6HgquxiyKN2pIiRUa17UBatGnYfhvuizZrua'),
(3, 'Yoshi Chambers', 'kahij@mailinator.com', 9, 'Aut quod dolorem seq', '1976-04-22', 'course1', 'afternoon', '$2y$10$o1UWS1M6zWqb4saDNg.7V.R71LEUHIcJEqJdGOsDvfxAs7p.FLQQG'),
(4, 'Charlotte Villarreal', 'kimaxyqo@mailinator.com', 7, 'Facilis molestiae ve', '1972-01-11', 'course1', 'evening', '$2y$10$RHElsUiZ9Sc7OxagBCkbCOUDYkZakLmE6KBephzkycj9fqvN2cE2i'),
(5, 'Elijah Kemp', 'mowah@mailinator.com', 6, 'Eligendi vitae error', '1989-01-05', 'course2', 'morning', '$2y$10$vA590QAsw/PB3VgRnDmTNeFof6AVErRl5ClfGSEpfPtJfSxb51/3m'),
(6, 'Coby Schneider', 'xokim@mailinator.com', 8, 'Anim assumenda facil', '1988-04-05', 'course3', 'afternoon', '$2y$10$1OO7imyRJ39GO2lj9OXtTOS9b42FsRtK9iEjznRmx86z7XSI4nt2u'),
(7, 'Kaden Walton', 'vyhelipo@mailinator.com', 7, 'Omnis itaque totam a', '2019-02-25', 'course2', 'morning', '$2y$10$9KxM1a3fAUHt2cinzCyhQ.umBi7VfRDqvGZRhhqX9XYMObxI203Zm'),
(8, 'Amity Knapp', 'xihykir@mailinator.com', 888, 'Illum dolores ab di', '1983-10-17', 'course2', 'morning', '$2y$10$FW4zFeXGMCag2In7aDKJrOivyRuQhilPyMxZSVb4ryWCRR2JjTAiu'),
(9, 'Xandra Foley', 'samysylij@mailinator.com', 4, 'Voluptas culpa ex do', '2005-01-16', 'course1', 'evening', '$2y$10$zvM8hQsh67eF62mD7toOaeYhJWHEIDkrLHI1c.OPgf29cjjZWpy3C'),
(10, 'Bernard Rodgers', 'zitumewaq@mailinator.com', 7, 'Nam cupiditate tempo', '2000-05-01', 'course1', 'evening', '$2y$10$qDFAU5Swr0T6aypeNfQF2eDoMk1XY5fV1DLVV5a3uZs8BWNDguuly'),
(11, 'Lunea Bryant', 'qyqaredo@mailinator.com', 34, 'Non est possimus es', '1991-03-28', 'course2', 'morning', '$2y$10$LHeYWpF5tJsVPgXVu4QFBeL866XCmMBOsCEiru2kVX0f99PTSS7QC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
