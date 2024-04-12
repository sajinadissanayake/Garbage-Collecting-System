-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 01:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `username`, `password`) VALUES
(1, 'Jos', 'Buttler', 'JB@gmail.com', 'admin1', '111'),
(4, 'Ben ', 'Stokes', 'BS100@gmail.com', 'admin2', '222'),
(5, 'Devon', 'Conway', 'DC100@gmail.com', 'admin3', '333');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_title` varchar(100) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `image_title`, `image_text`) VALUES
(17, 'Bulldozer-sanitary-landfill-waste-garbage.webp', 'waste disposal', 'the gathering, handling, recycling, or disposal of human society\'s waste items. The source and composition of waste are categorized. Waste materials can generally be categorized as either liquid or solid, and its constituent parts can either be dangerous or inert in terms of how they affect human health and the environment. Solid waste, sewage, hazardous waste, and electronic trash are all commonly referred to as waste.'),
(18, 'Garbagehope-768x503.jpg', 'Putting Garbage to Good Use with Waste-to-Energy', 'According to a recent UNEP assessment, human people have increased their use of the planet\'s natural resources by three times over the past 40 years. And according to the World Resources Institute, \"one half to three quarters of annual resource inputs to industrial economies is returned to the environment as wastes within just one year.\"'),
(19, 'solid-waste-management-min.jpg', 'The Future Of Solid Waste Disposal And Management', 'The future of solid waste management depends on each and every one of us, and garbage is one of the largest problems the world is currently facing. A fundamental shift in thinking at the individual level is required now more than ever, despite the fact that government authorities, leaders of nations, towns, and local communities are working hard to manage the enormous quantity of garbage produced every day. \r\n\r\nThe world has been significantly influenced by inefficient waste management and disposal, which includes public littering, a lack of waste segregation, uncontrolled collection and disposal, and subpar waste treatment procedures. 2.01 billion tons of municipal solid garbage are produced annually around the world, of which it is thought that 33% is inadequately managed, according to a World Bank analysis.');

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE `incidents` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `flag` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`id`, `name`, `email`, `latitude`, `longitude`, `Image`, `area`, `Status`, `flag`, `type`) VALUES
(75, 'David Warner', 'DW@gmail.com', '6.4028672', '80.7993344', 'uploadImage/5.jpg', 'Colombo 04', 'This garbage has caused inconvenience to the environment as well as traffic', '', 'approved'),
(76, 'Harry Brook', 'HB@gmail.com', '6.4028672', '80.7993344', 'uploadImage/6.jpg', 'Colombo 05', 'This garbage has caused inconvenience to the environment as well as traffic', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `usertype`, `username`, `password`) VALUES
(13, 'Tom ', 'Curran', 'TC@gmail.com', 'Captain', '10020030', 'tom1'),
(14, 'Michael', 'Clarke', 'MC@gmail.com', 'Staff', '10020040', 'michael1'),
(16, 'David', 'Warner', 'DW@gmail.com', 'Member', '10020050', 'david1'),
(17, 'Harry', 'Brook', 'HB@gmail.com', 'Member', '10030060', 'harry1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `incidents`
--
ALTER TABLE `incidents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
