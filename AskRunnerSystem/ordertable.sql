	-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 04:07 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `askrunnersystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `ORDER_ID` int(10) NOT NULL,
  `RUN_ID` int(10) NOT NULL,
  `CUST_ID` int(10) NOT NULL,
  `ORDER_ADD` text NOT NULL,
  `ORDER_NAME` varchar(100) NOT NULL,
  `ORDER_PHONE_NO` varchar(20) NOT NULL,
  `ORDER_DATE` date NOT NULL,
  `ORDER_PROD_NAME` varchar(100) NOT NULL,
  `ORDER_PROD_PRICE` varchar(100) NOT NULL,
  `ORDER_FINAL_PRICE` float NOT NULL,
  `deliveryStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`ORDER_ID`, `RUN_ID`, `CUST_ID`, `ORDER_ADD`, `ORDER_NAME`, `ORDER_PHONE_NO`, `ORDER_DATE`, `ORDER_PROD_NAME`, `ORDER_PROD_PRICE`, `ORDER_FINAL_PRICE`, `deliveryStatus`) VALUES
(1, 1, 1, '999 balai balai', 'ng ng ng', '0103850621', '2020-07-21', 'Megi Kari' , 4.50 ,30.3, 'waiting for runner'),
(2, 1, 2, '888 huihuihui', 'yayayayaya', '0115362489', '2020-07-21','Megi Tomyam' , 4.50 , 50.3, 'pending'),
(3, 1, 3, '666 bercham bercham bercham', 'hahahahaha', '0158563214', '2020-07-21','Megi Asam Laksa' , 4.50 , 20.2, 'complete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`ORDER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `ORDER_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
