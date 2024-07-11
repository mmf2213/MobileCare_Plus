-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 06:19 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customercare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_cont` bigint(15) NOT NULL,
  `a_pass` varchar(255) NOT NULL,
  `a_flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_cont`, `a_pass`, `a_flag`) VALUES
(1, 'Mrunal', 9404837112, '01894d6f048493d2cacde3c579c315a3', 1),
(2, 'Ranjana', 9881360691, 'e10adc3949ba59abbe56e057f20f883e', 2),
(3, 'Vaishnavi', 7057339879, 'e10adc3949ba59abbe56e057f20f883e', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cont` bigint(15) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_problem` text NOT NULL,
  `date` date NOT NULL,
  `r_date` date NOT NULL,
  `p_photo` varchar(255) NOT NULL,
  `b_receipt` varchar(255) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `p_solution` text NOT NULL,
  `t_bill` bigint(15) NOT NULL,
  `flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `cont`, `mail`, `address`, `p_name`, `p_problem`, `date`, `r_date`, `p_photo`, `b_receipt`, `e_name`, `p_solution`, `t_bill`, `flag`) VALUES
(10, 'Snehal', 1234567890, 'sn@gmail.com', 'xyz', 'Samsung', 'PQR', '2022-01-21', '2022-01-29', '16430982542.jpg', '1643098254certificate.pdf', 'pooja', 'ABC', 1200, 0),
(11, 'Pragati', 5789641230, 'pr@gmail.com', 'ABC', 'Samsung', 'PQR', '2022-01-23', '2022-01-29', '164309906914.JPG', '1643099069certificate.pdf', 'vaishnavi', 'pqr', 1400, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(10) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `e_cont` bigint(15) NOT NULL,
  `e_pass` varchar(255) NOT NULL,
  `e_flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `e_mail`, `e_cont`, `e_pass`, `e_flag`) VALUES
(1, 'Vaishnavi', 'vaishu@gmail.com', 7057339879, 'e10adc3949ba59abbe56e057f20f883e', 0),
(4, 'Pooja', 'p@gmail.com', 1234567890, 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'pragati', 'pr@gmail.com', 5789641230, 'c4ca4238a0b923820dcc509a6f75849b', 0),
(6, 'Aboli', 'a@gmail.com', 1234567890, '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

CREATE TABLE `reception` (
  `r_id` int(10) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_cont` bigint(15) NOT NULL,
  `r_pass` varchar(255) NOT NULL,
  `r_flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`r_id`, `r_name`, `r_cont`, `r_pass`, `r_flag`) VALUES
(1, 'Ranjana', 9881360691, 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'Pragati', 5789641230, 'c4ca4238a0b923820dcc509a6f75849b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `reception`
--
ALTER TABLE `reception`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reception`
--
ALTER TABLE `reception`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
