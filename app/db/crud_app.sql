-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 10:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`) VALUES
(2, 'admin', 'admin', 'admin@admin.com', '1234567890'),
(3, 'user', 'user', 'user@user.com', '0987654321'),
(4, 'test', 'test', 'test@test.com', '123928320984'),
(5, 'new', 'test', 'new@test.com', '3243924032984'),
(6, 'ahmed', 'salah', 'ahmed@gmail.com', '92834328094328'),
(7, 'mohamed', 'salah', 'mohamed@gmail.com', '98327432'),
(8, 'ali', 'user', 'ali@user.com', '327493274'),
(9, 'walid', 'walid', 'walid@gmail.com', '324328497'),
(10, 'check', 'check', 'check@check.com', '398479327932'),
(11, 'akkizim', 'benim', 'akkizim@gmail.com', '328473284032'),
(12, 'newCheck', 'newCheck', 'newCheck@gmail.com', '932847032409832'),
(13, 'testtest', 'testtest', 'testtest@test.com', '9283432840932'),
(14, 'testtesttest', 'testtesttest', 'testtesttest@test.com', '9328409328'),
(15, 'wisam', 'salah', 'wisam@gmail.com', '3247938274'),
(16, 'adel', 'adel', 'adel@gmail.com', '480932840932'),
(17, 'fanta', 'fanta', 'fanta@gmail.com', '93843208320942'),
(18, 'john', 'john', 'john@gmail.com', '38294793274932'),
(19, 'citizen', 'x', 'x@yahoo.com', '32984392840932'),
(20, 'hey', 'u', 'hey@gmail.com', '32987493284'),
(21, 'joe', 'joe', 'joe@gmail.com', '32843092840329'),
(22, 'last', 'last', 'last@gmail.com', '932840329840'),
(23, 'last', 'lastlast', 'lastlast@last.com', '384709328409328'),
(24, 'usertest', 'test', 'usertest@gmail.com', '32984739284'),
(25, 'fatima', 'mohamed', 'fatima@gmail.com', '32498732984'),
(26, 'walid', 'walid', 'walidwalid@gmail.com', '32984320984');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
