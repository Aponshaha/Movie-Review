-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 05:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
`movie_id` int(11) NOT NULL,
`name` varchar(255) NOT NULL,
`category` varchar(255) NOT NULL,
`created_at` datetime NOT NULL,
`updated_at` datetime NOT NULL,
`deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moviedetails`
--

CREATE TABLE `moviedetails` (
`movie_id` int(20) NOT NULL,
`moviepic` text NOT NULL,
`moviename` varchar(255) NOT NULL,
`description` varchar(255) NOT NULL,
`avgrate` double NOT NULL,
`created_at` datetime NOT NULL,
`updated_at` datetime NOT NULL,
`deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviedetails`
--

INSERT INTO `moviedetails` (`movie_id`, `moviepic`, `moviename`, `description`, `avgrate`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'a.jpg', 'Up', 'Up is a 2009 American 3D computer-animated comedy-adventure film[3] produced by Pixar Animation Studios and released by Walt Disney Pictures. Directed by Pete Docter, the film centers on an elderly widower named Carl Fredricksen (Ed Asner) and an earnest ', 9.2, '2017-11-28 10:23:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'd.jpg', 'The Devil', 'Ramirez (Jacob Vargas) speaks in a voice-over about stories that his mother told him about the devil sometimes actively seeking out individuals who have sinned while they are still alive on Earth. While taking human form, he traps them in a confined place', 7.6, '2017-11-28 10:27:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 't.jpg', 'Twilight', 'Twilight is a 2008 American romantic fantasy film based on Stephenie Meyer''s popular novel of the same name. Directed by Catherine Hardwicke, the film stars Kristen Stewart and Robert Pattinson. It is the first film in The Twilight Saga film series. ', 9.1, '2017-11-28 11:02:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'new.jpg', 'Conjuring', 'In 1971, Roger and Carolyn Perron move into a dilapidated farmhouse in Harrisville, Rhode Island with their five daughters Andrea, Nancy, Christine, Cindy, and April. Their dog Sadie refuses to enter the house and one of the children, while playing a game', 9.5, '2017-11-29 08:14:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'pirat.jpg', 'Pirates of the Caribbean', 'Directors of the series include Gore Verbinski . Rob Marshall  and Joachim RÃ¸nning and Espen Sandberg . The series is primarily written by Ted Elliott and Terry Rossio other writers include Stuart Beattie , Jay Wolper.', 7.6, '2017-11-30 07:58:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'home.jpg', 'Home', 'Home is a 2015 American 3D computer-animated science fiction comedy-adventure film[4] produced by DreamWorks Animation and distributed by 20th Century Fox. It is loosely based on Adam Rex''s 2007 children''s book The True Meaning of Smekday and starring the', 6.7, '2017-11-30 09:28:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registerrs`
--

CREATE TABLE `registerrs` (
`id` int(11) NOT NULL,
`firstname` varchar(255) NOT NULL,
`lastname` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
`user_type` varchar(255) NOT NULL,
`created_at` datetime NOT NULL,
`updated_at` datetime NOT NULL,
`deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerrs`
--

INSERT INTO `registerrs` (`id`, `firstname`, `lastname`, `email`, `password`, `user_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ana', 'nasrin', 'anasharin', '123456', 'user', '2017-11-05 09:33:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Shahrin', 'Nasrin', 'aba@gmail.com', '852852', 'user', '2017-11-05 10:08:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Riba', 'mun', 'raba@biba.com', '123852', 'user', '2017-11-12 05:41:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'meem ', 'zeba', 'zeba@mail.com', '123456', 'user', '2017-11-13 07:27:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'jhv', 'jjhfj', 'fjfuj@hjk.com', 'asdfgh', 'user', '2017-11-21 07:07:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'tipa', 'ana', 'tipa@gmail.com', 'asdfghy', 'admin', '2017-11-21 08:34:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Rulia', 'Islam', 'rulila12@yahoo.com', 'rimutimu', 'user', '2017-12-01 07:37:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `moviedetails`
--
ALTER TABLE `moviedetails`
ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `registerrs`
--
ALTER TABLE `registerrs`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `moviedetails`
--
ALTER TABLE `moviedetails`
MODIFY `movie_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `registerrs`
--
ALTER TABLE `registerrs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
