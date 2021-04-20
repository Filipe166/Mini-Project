-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 12:46 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `artist_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bio` varchar(400) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`artist_id`, `name`, `bio`, `gender`, `date_of_birth`) VALUES
(0, 'Alison Sophia Willis', 'She grew up in a middle class neighbourhood. She was raised in a happy family home with two loving parents.', 'female', '1994-02-20'),
(1, 'Raymond Phil Sparrow', 'Raymond Phil Sparrow is a 18-year-old teenager who enjoys podcasting, vandalising bus stops and social media. He is stable and creative, but can also be very selfish and a bit evil.', 'female', '2003-02-22'),
(2, 'Diogo Nunes', 'Diogo Nunes is a 20-year-old artist who enjoys drone photography, jigsaw puzzles and social card games.', 'male', '2000-06-02'),
(3, 'Reginald Brad Humble', 'Reginald Brad Humble is a 19-year-old teenager who enjoys relaxing, painting and watching YouTube.', 'male', '2002-02-05'),
(4, 'Jenny Charlotte', 'She is an Australian Christian. She started studying food science at college but never finished.', 'female', '1980-02-02'),
(5, 'Christiana Hallah', 'Physically, Christiana is not in great shape. She needs to lose quite a lot of weight. She is also short.', 'female', '1990-02-02'),
(6, 'Ocean Beth Smith', 'Ocean Beth Smith is a 30-year-old former struggling artist who enjoys appearing in the background on TV, shopping and stealing candy from babies. She is gentle and giving, but can also be very stingy and a bit sadistic.', 'female', '1990-05-02'),
(7, 'Cuthbert Bob Khan', 'Physically, Cuthbert is slightly overweight but otherwise in good shape. He is very short with pale skin, white hair and black eyes. Unusually, he has a prosthetic leg; he lost his during a fight with a train.', 'male', '1975-02-01'),
(8, 'Mark Jeff Walker', 'He is a Portuguese Jedi who defines himself as straight. He started studying philosophy, politics and economics at college but never finished the course.', 'male', '1995-02-06'),
(9, 'Jenna Maureen Platt', 'She grew up in a working class neighbourhood. She was raised in a happy family home with two loving parents.', 'female', '1990-02-02'),
(10, 'Mark Garth Barlow', 'He is Australian. He didn\'t finish school.', 'male', '1998-02-09'),
(11, 'Albert Steven Humble', 'He grew up in a working class neighbourhood. After his father died when he was young, he was raised by his mother', 'male', '1985-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categ_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categ_id`, `title`) VALUES
(0, 'hiphop'),
(1, 'electronic'),
(2, 'jazz'),
(3, 'country'),
(4, 'blues'),
(5, 'latin'),
(6, 'pop'),
(7, 'rock'),
(8, 'rnb');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `playlist_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `creation_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `playlist_content`
--

CREATE TABLE `playlist_content` (
  `playlist_content_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `categ_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `title`, `release_date`, `categ_id`, `artist_id`) VALUES
(0, 'Love Of Me', '2006-02-01', 0, 2),
(1, 'Dead Of A Nightmare', '2010-02-01', 0, 3),
(2, 'House Of A Storm', '2000-02-01', 1, 0),
(3, 'Song For Another Night', '2010-02-01', 1, 6),
(4, 'Heat Of My Hero', '2012-02-01', 2, 7),
(5, 'New And Mind', '2016-02-01', 2, 5),
(6, 'Baby, I Love You So', '2011-02-01', 3, 11),
(7, 'Tune Of A Bad Romance', '2012-02-01', 4, 6),
(8, 'My Voice', '2019-02-01', 4, 6),
(9, 'Land Of Utopia', '2006-02-01', 5, 4),
(10, 'Open Your Right', '2016-02-01', 6, 6),
(11, 'Sunset Of A Promise', '2015-02-01', 7, 1),
(12, 'Creepy And Feelings', '2010-02-01', 7, 2),
(13, 'He Hates He\'s Family', '2015-02-01', 7, 2),
(14, 'New And Moment', '2014-02-01', 8, 5),
(15, 'Happy And Dance', '2017-02-01', 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Filipe', 'Campos', 'filipe.campos166@gmail.com', '$2y$10$6sf5htxUe4OYm1WOHvoUtu87bJFVo8CYEBia7DA1qukG64278iVuu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categ_id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlist_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `playlist_content`
--
ALTER TABLE `playlist_content`
  ADD PRIMARY KEY (`playlist_content_id`),
  ADD KEY `playlist_id` (`playlist_id`),
  ADD KEY `song_id` (`song_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `categ_id` (`categ_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `playlist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `playlist_content`
--
ALTER TABLE `playlist_content`
  MODIFY `playlist_content_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `playlist_content`
--
ALTER TABLE `playlist_content`
  ADD CONSTRAINT `playlist_id` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`playlist_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `song_id` FOREIGN KEY (`song_id`) REFERENCES `songs` (`song_id`) ON UPDATE CASCADE;

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `artist_id` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`artist_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `categ_id` FOREIGN KEY (`categ_id`) REFERENCES `categories` (`categ_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
