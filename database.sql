-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 11:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_whisperer`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `idCourse` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fee` int(5) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`idCourse`, `name`, `fee`, `time`) VALUES
(1, 'Baking Basics', 100, '00:00:00'),
(2, 'Bread Baking', 150, '00:00:00'),
(3, 'Cake Decorations', 250, '00:00:00'),
(4, 'Cookies Baking', 125, '00:00:00'),
(5, 'Pastry Baking', 170, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `regcourse`
--

CREATE TABLE `regcourse` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idCourse` int(5) NOT NULL,
  `duration` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regcourse`
--

INSERT INTO `regcourse` (`id`, `email`, `idCourse`, `duration`) VALUES
(1, 'liaukaize', 5, 2),
(2, 'liaukaize', 2, 4),
(3, 'liaukaize', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `noPhone` varchar(12) NOT NULL,
  `class` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `password`, `noPhone`, `class`) VALUES
('admin', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '000000000', 1),
('liaukaize', 'barbie', '84d9c4b849506b6d8f8075a9000e7e0a254be71060ea889fad3c88395988f4fc', '999', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idCourse`);

--
-- Indexes for table `regcourse`
--
ALTER TABLE `regcourse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `idCourse` (`idCourse`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `idCourse` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regcourse`
--
ALTER TABLE `regcourse`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `regcourse`
--
ALTER TABLE `regcourse`
  ADD CONSTRAINT `regcourse_ibfk_1` FOREIGN KEY (`idCourse`) REFERENCES `course` (`idCourse`),
  ADD CONSTRAINT `regcourse_ibfk_2` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
