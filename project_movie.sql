-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 07:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`) VALUES
('anand@gmail.com', '2001');

-- --------------------------------------------------------

--
-- Table structure for table `movie_booking`
--

CREATE TABLE `movie_booking` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `format` varchar(200) NOT NULL,
  `language` varchar(200) NOT NULL,
  `seat` int(20) NOT NULL,
  `cost` int(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_booking`
--

INSERT INTO `movie_booking` (`user_id`, `name`, `location`, `date`, `time`, `format`, `language`, `seat`, `cost`, `email`) VALUES
(34, 'KGF', 'Cinepolis Acropolis Mall', '2022-05-12', '11:30:00', '2d', 'hindi', 2, 370, 'anand@gmail.com'),
(35, 'Heropanti 2', 'Inox: City Center,Salt Lake', '2022-06-18', '11:30:00', '2d', 'hindi', 4, 350, 'anand@gmail.com'),
(36, 'Jersey', 'Inox: City Center,Salt Lake', '2022-06-12', '02:00:00', '2d', 'hindi', 4, 350, 'anand@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `movie_new`
--

CREATE TABLE `movie_new` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_new`
--

INSERT INTO `movie_new` (`user_id`, `name`, `images`) VALUES
(1, 'KGF', 'MV5BMjMwMDgyOGQtMWZjNC00MDUwLTllZDYtZWM3NDBmN2YzNGZmXkEyXkFqcGdeQXVyMTQzNjkzMzEw._V1_.jpg'),
(2, 'RRR', 'FFWsXd4VUAAwYxr.jpeg'),
(3, 'Doctor Strange MoM', 'MV5BNWM0ZGJlMzMtZmYwMi00NzI3LTgzMzMtNjMzNjliNDRmZmFlXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UX1000_.jpg'),
(4, 'Jersey', 'Jersey_2022_poster.jpg'),
(5, 'Runway 34', 'runway-34-poster.webp'),
(6, 'Heropanti 2', 'FAThSHtVEAQOuQu.jpg'),
(7, 'Kishmish', 'Kishmish-Movie-Cast-and-Crew-Wiki-Review-Release-Date-Trailer-Budget-Box-Office-Real-Name-Watch-Online-OTT.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_registration`
--

CREATE TABLE `movie_registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_registration`
--

INSERT INTO `movie_registration` (`user_id`, `name`, `email`, `password`) VALUES
(4, 'Anand', 'anand@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `movie_upcoming`
--

CREATE TABLE `movie_upcoming` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_upcoming`
--

INSERT INTO `movie_upcoming` (`user_id`, `name`, `images`) VALUES
(1, 'Bhool Bhuliyaa 2', 'bhool.jpg'),
(2, 'Thor Love & Thunder', 'thor.jpg'),
(3, 'Iron Mask', 'mystery.jpg'),
(4, 'Prithviraj', 'prithvi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `user_id` int(11) NOT NULL,
  `cardnum` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `month` int(20) NOT NULL,
  `year` int(20) NOT NULL,
  `cvv` int(20) NOT NULL,
  `totalpay` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`user_id`, `cardnum`, `name`, `month`, `year`, `cvv`, `totalpay`) VALUES
(12, 2147483647, 'anand raj keshari', 6, 2026, 890, 740),
(13, 2147483647, 'ark', 8, 2025, 890, 740);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie_booking`
--
ALTER TABLE `movie_booking`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `movie_new`
--
ALTER TABLE `movie_new`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `movie_registration`
--
ALTER TABLE `movie_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `movie_upcoming`
--
ALTER TABLE `movie_upcoming`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie_booking`
--
ALTER TABLE `movie_booking`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `movie_new`
--
ALTER TABLE `movie_new`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `movie_registration`
--
ALTER TABLE `movie_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `movie_upcoming`
--
ALTER TABLE `movie_upcoming`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
