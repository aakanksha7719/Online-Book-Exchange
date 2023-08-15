-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 06:17 AM
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
-- Database: `bookexchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `ID` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `requestedbook` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`ID`, `uname`, `bname`, `author`, `edition`, `type`, `language`, `requestedbook`) VALUES
(5, 'Rohan', 'Python', 'E.Balgurusamy', '2nd', 'Programming Book', 'English', 'Java'),
(6, 'Om', 'C language', 'Peter Van Der', '1st', 'Reference Book', 'English', 'PHP web development'),
(7, 'Akshay', 'c++', 'Herbert Schildt', '4th', 'Reference Book', 'English', 'c programmming'),
(8, 'Shradhha', 'c', 'Peter Van Der', '4th', 'Programming Book', 'English', 'Java'),
(9, 'Ravi Mane', 'Python', 'E.Balgurusamy', '2nd', 'Programming Book', 'English', 'PHP web development'),
(10, 'Nandini', 'Novel', 'Mark Lutz', '1st', 'Story Book', 'English', 'Panipat By vishwas Patil'),
(11, 'Ram', 'Shriman', 'Yashwant Kanetkar', '1st', 'Novel', 'Marathi', 'Mrityanjay'),
(12, 'Pranav', 'Shiv', 'Yashwant Kanetkar', '1st', 'Story Book', 'Marathi', 'Vardan'),
(13, 'Aakash', 'Maths', 'Yashwant Kanetkar', '1st', 'Text Book', 'Gujrati', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE `id` (
  `Name` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id`
--

INSERT INTO `id` (`Name`, `msg`, `id`) VALUES
('aakansha', 'Can you provide c programming book.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `msg`) VALUES
(2, 'Request', 'Can you provide java book'),
(6, 'Service', 'Good service...'),
(7, 'Request', 'Provide python book'),
(8, 'Appreciation', 'Good collection'),
(10, 'Book issue', 'Provide story books '),
(11, 'Request', 'Sir can you provide gate exam books'),
(12, 'Collection', 'Good collection books'),
(13, 'Story books', 'Story books are really good '),
(14, 'Programming books', 'Programming books are really helpful of IT students'),
(15, 'cxvx', '		xfgbn '),
(16, 'request', '	dtydtudtu	');

-- --------------------------------------------------------

--
-- Table structure for table `multiuserlogin`
--

CREATE TABLE `multiuserlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userinformation`
--

CREATE TABLE `userinformation` (
  `id1` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Profession` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `PhoneNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinformation`
--

INSERT INTO `userinformation` (`id1`, `Name`, `Profession`, `Address`, `EmailAddress`, `PhoneNumber`) VALUES
(7, 'Aakansha', 'student', 'Nandura', 'ask@gmail.com', 2147146778),
(12, 'Punam', 'Student', 'Fuli', 'punam@gmail.com', 2145612343),
(16, 'Sakshi', 'Student', 'Akola', 'sakshi@gmail.com', 2147483647),
(19, 'Akshay', 'Teacher', 'Pune', 'akshay@gmail.com', 2147483647),
(20, 'Shradhha', 'Student', 'khamgaon', 'shradhha@gmail.com', 2147483647),
(21, 'Ravi Mane', 'Student', 'Beed', 'ravi@gmail.com', 2147483647),
(25, 'Shamal', 'Teacher', 'Jalgaon', 'shamal@gmail.com', 2145566777),
(26, 'Tanvi', 'Other', 'Amravati', 'tanvi@gmail.com', 2147483647),
(27, 'Mohan', 'Teacher', 'Mumbai', 'mohan@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(0, 'admin', 'akanshakhedkar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-25 05:53:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinformation`
--
ALTER TABLE `userinformation`
  ADD PRIMARY KEY (`id1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `userinformation`
--
ALTER TABLE `userinformation`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
