-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 01:40 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_project_dynamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_crud`
--

CREATE TABLE `tbl_crud` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `tbl_crud`
--

INSERT INTO `tbl_crud` (`id`, `name`, `department`, `age`) VALUES
(13, 'bakib', ' islam', '20'),
(14, 'mahamud', 'css', '100'),
(18, 'himel', 'fana', '20'),
(19, 'himelt', 'fana', '20'),
(20, 'Misba', 'Design', '10'),
(21, 'mahabubul', 'bangla', '20'),
(22, 'mahabubul', 'bangla', '20'),
(23, 'himelduzzaman', 'Bangla', '10'),
(24, 'Arafat', 'chemisty', '20'),
(25, 'Misb', 'Alam', '10'),
(26, 'mahabubul', 'islam', '20'),
(27, 'mahabubul', 'Design', '10'),
(28, 'Mahabubul  Alam', 'Design', '30'),
(29, 'Mahabubul  Alam', 'Design', '30'),
(30, 'Ripon', 'css', '50'),
(31, 'Niakot', 'Design', '20'),
(32, 'Niakot', 'printing', '30'),
(33, 'Misba', 'pysical', '20'),
(34, 'Arafat', 'Design', '10'),
(35, 'Misba', 'Design', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_crud`
--
ALTER TABLE `tbl_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_crud`
--
ALTER TABLE `tbl_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
