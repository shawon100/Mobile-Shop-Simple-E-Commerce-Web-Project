-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 03:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pname`, `color`, `size`, `price`, `user`) VALUES
(1, 'Galaxy Note', 'Red', '16 GB', '$520.00', 'nahid'),
(2, 'Galaxy Note', 'Blue', '32 GB', '$520.00', 'shawon'),
(3, 'Galaxy Note', 'Pink', '16 GB', '$520.00', 'shawon'),
(4, 'Ipad Air', 'Blue', '16 GB', '$520.00', 'shawon'),
(5, 'Microsoft Lumia', '', '16 GB', '$220.00', 'shawon'),
(6, 'Ipad Air', 'Blue', '32 GB', '$520.00', 'shawon'),
(7, 'Sony', '', '16 GB', '$520.00', 'shawon'),
(8, 'Sony', 'Pink', '16 GB', '$520.00', 'shawon'),
(9, 'Microsoft Lumia', 'Blue', '16 GB', '$220.00', 'shawon'),
(10, 'Galaxy Note', 'Blue', '16 GB', '$520.00', 'shawon'),
(11, 'Galaxy Note', '', '16 GB', '$520.00', 'shawon'),
(12, 'Galaxy Note', 'Red', '16 GB', '$520.00', 'shawon'),
(13, 'Galaxy Note', 'Blue', '16 GB', '$520.00', 'shawon'),
(14, 'Microsoft Lumia', 'Red', '16 GB', '$220.00', 'shawon'),
(15, 'Galaxy Note', '', '16 GB', '$520.00', 'shawon'),
(16, 'Ipad Air', '', '16 GB', '$520.00', 'shawon'),
(17, 'Microsoft Lumia', '', '16 GB', '$220.00', 'shawon'),
(18, 'Galaxy Note', '', '16 GB', '$520.00', 'shawon'),
(19, 'Galaxy Note', '', '16 GB', '$520.00', 'shawon'),
(20, 'Ipad Air', '', '16 GB', '$520.00', 'shawon'),
(21, 'Ipad Air', 'Pink', '16 GB', '$520.00', 'shawon');

-- --------------------------------------------------------

--
-- Table structure for table `iot`
--

CREATE TABLE `iot` (
  `bill` float DEFAULT NULL,
  `unit` float DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iot`
--

INSERT INTO `iot` (`bill`, `unit`, `no`) VALUES
(40, 20, 1),
(40, 20, 2),
(20, 20, 3),
(30, 50, 4);

--
-- Triggers `iot`
--
DELIMITER $$
CREATE TRIGGER `trig` AFTER UPDATE ON `iot` FOR EACH ROW BEGIN
   DECLARE a float;
   DECLARE b float;
    
    SET a = OLD.bill+NEW.bill;
    SET b = OLD.unit+NEW.unit;
    INSERT INTO list
    VALUES('',a,b);
        
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trig2` AFTER INSERT ON `iot` FOR EACH ROW BEGIN
   DECLARE a float;
   DECLARE b float;
   DECLARE c float;
   DECLARE d float;
    
    SELECT bill into c from iot WHERE no=(SELECT MAX(no) from iot)-1;
    SELECT unit into d from iot WHERE no=(SELECT MAX(no) from iot)-1;
    
    
    SET a = c+NEW.bill;
    SET b = d+NEW.unit;
    INSERT INTO list
    VALUES('',a,b);
        
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `bills` float DEFAULT NULL,
  `units` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `bills`, `units`) VALUES
(1, 60, 80),
(2, 70, 70),
(3, NULL, NULL),
(4, 80, 20),
(5, 64, 6),
(6, 20, 20),
(7, 20, 40),
(8, 60, 60),
(9, 64, 6),
(10, 80, 20),
(11, 20, 20),
(12, 60, 60),
(13, 80, 20),
(14, 20, 40),
(15, 60, 60),
(16, 20, 40),
(17, 40, 60),
(18, NULL, NULL),
(19, NULL, NULL),
(20, NULL, NULL),
(21, 80, 40),
(22, 60, 40),
(23, 50, 70);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `ptitle` varchar(100) DEFAULT NULL,
  `pdescription` mediumtext,
  `user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `ptitle`, `pdescription`, `user`) VALUES
(1, 'Digits Of Factorial', 'Number Of Factorial Digits = log(n!)+1 . As n is very large for factorial  so we can write as below\r\n\r\nlog(5!)=log(5*4*3*2*1)=log1+log2+log3+log4+log5', 'shawon'),
(2, 'Digits Of Factorial', 'Number Of Factorial Digits = log(n!)+1 . As n is very large for factorial  so we can write as below\r\n\r\nlog(5!)=log(5*4*3*2*1)=log1+log2+log3+log4+log5', 'shawon'),
(3, 'Digits Of Factorial', 'Number Of Factorial Digits = log(n!)+1 . As n is very large for factorial  so we can write as below\r\n\r\nlog(5!)=log(5*4*3*2*1)=log1+log2+log3+log4+log5', 'shawon'),
(4, 'Digits Of Factorial', 'Number Of Factorial Digits = log(n!)+1 . As n is very large for factorial  so we can write as below\r\n\r\nlog(5!)=log(5*4*3*2*1)=log1+log2+log3+log4+log5', 'shawon'),
(5, 'IP Address', 'An IP address is a 32 bit address formatted in the following way\r\n\r\na.b.c.d\r\n\r\nwhere a, b, c, d are integers each ranging from 0 to 255', 'shawon'),
(6, 'Chessboard Problem', 'After that the code will select a random problem for you from my problems database based on your previously solved problems, your skills and your weaknesses. But while I was coding for implementing this great idea, I found that, all of my problems are scattered in 2 computers. So, I have to merge them before running my code.\r\n\r\nNow you are given the number of problems in each of the computers, you have to find the total number of problems. You can safely assume that no problem is stored in multiple computers. So, all the problems are distinct.', 'shawon'),
(7, 'IP Address', 'An IP address is a 32 bit address formatted in the following way a.b.c.d where a, b, c, d are integers each ranging from 0 to 255', 'Raihan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `email`, `phone`) VALUES
('shawon', '81dc9bdb52d04dc20036dbd8313ed055', 'shawonashadullah@gmail.com', '01757687942'),
('nahid', '81dc9bdb52d04dc20036dbd8313ed055', 'nahid@gmail.com', '01757896523'),
('Raihan', '81dc9bdb52d04dc20036dbd8313ed055', 'raihan@gmail.com', '0175755555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot`
--
ALTER TABLE `iot`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
