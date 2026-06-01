-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 03:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task28`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`) VALUES
(1, 'LET’S\r\nINTRODUCE ABOUT\r\nMYSELF\r\n', 'A Web Developer with one year of experience, specializing in HTML5, JavaScript, PHP, MySQL, database design, and front-end development. Adept at collaborating with dynamic teams to build high quality websites and identify opportunities to enhance the user experience.');

-- --------------------------------------------------------

--
-- Table structure for table `footer_socailmedia`
--

CREATE TABLE `footer_socailmedia` (
  `id` int(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_socailmedia`
--

INSERT INTO `footer_socailmedia` (`id`, `facebook`, `instagram`, `twitter`, `linkedin`) VALUES
(1, '#', '#', '#', 'https://www.linkedin.com/in/hadeel-alrousan-b14751262/');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(100) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `image`) VALUES
(2, '	logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `major`) VALUES
(1, 'Hadeel Khaled', 'Full stack developer ');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `title`) VALUES
(1, 'p1.jpg', 'Blog Website'),
(2, 'p2.jpg', 'GYM Website'),
(3, 'p3.jpg', 'Modern Design'),
(4, 'p4.jpg', 'Ristorante Website'),
(5, 'p5.jpg', 'Shop Website'),
(6, 'p6.jpg', 'Vegetable store');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `description`) VALUES
(1, 's1.png', 'WP DEVELOPING', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Magnam, nam.'),
(2, 's2.png', 'UI/UX DESIGN', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Magnam, nam.'),
(3, 's3.png', 'WEB DESIGN', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Magnam, nam.'),
(4, 's4.png', 'SEO OPTIMIZE', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.Magnam, nam.');

-- --------------------------------------------------------

--
-- Table structure for table `under_about`
--

CREATE TABLE `under_about` (
  `id` int(100) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `under_about`
--

INSERT INTO `under_about` (`id`, `image`) VALUES
(1, 'logo1.png'),
(2, 'logo2.png'),
(3, 'logo3.png'),
(4, 'logo4.png'),
(5, 'logo5.png'),
(6, 'logo6.png'),
(7, 'logo7.png'),
(8, 'logo8.png'),
(9, 'logo9.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_socailmedia`
--
ALTER TABLE `footer_socailmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `under_about`
--
ALTER TABLE `under_about`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_socailmedia`
--
ALTER TABLE `footer_socailmedia`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `under_about`
--
ALTER TABLE `under_about`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
