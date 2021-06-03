-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 06:35 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(10) NOT NULL,
  `ADMIN_NAME` varchar(150) NOT NULL,
  `ADMIN_PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `ADMIN_NAME`, `ADMIN_PASSWORD`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customeraccount`
--

CREATE TABLE `customeraccount` (
  `CUST_ID` int(10) NOT NULL,
  `CUST_NAME` varchar(100) NOT NULL,
  `CUST_USERNAME` varchar(20) NOT NULL,
  `CUST_PASSWORD` varchar(20) NOT NULL,
  `CUST_GENDER` varchar(10) NOT NULL,
  `CUST_PHONE_NO` varchar(20) NOT NULL,
  `CUST_EMAIL` varchar(50) NOT NULL,
  `CUST_ADDRESS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customeraccount`
--

INSERT INTO `customeraccount` (`CUST_ID`, `CUST_NAME`, `CUST_USERNAME`, `CUST_PASSWORD`, `CUST_GENDER`, `CUST_PHONE_NO`, `CUST_EMAIL`, `CUST_ADDRESS`) VALUES
(1, 'tahir bukhari', 'tahir', 'tahir', 'Male', '0139707839', 'tahirbus@gmail.com', 'ketereh										\r\n									'),
(3, 'tahir bukhari', 'cust1', '12345', 'Male', '12', '12', '12'),
(4, 'cust2', 'cust2', '12345', 'Female', '1212', 'cust2', '1212'),
(5, 'cust3', 'cust3', '12345', 'Male', '1212', 'cust3', '1212'),
(6, 'cust4', 'cust4', '12345', 'Male', 'cust4', 'cust4', 'cust4');

-- --------------------------------------------------------

--
-- Table structure for table `customerpayment`
--

CREATE TABLE `customerpayment` (
  `PAY_ID` int(10) NOT NULL,
  `CUST_ID` int(10) NOT NULL,
  `CARD_ID` int(10) NOT NULL,
  `CART_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foodproduct`
--

CREATE TABLE `foodproduct` (
  `FD_PROID` int(10) NOT NULL,
  `SP_ID` int(10) NOT NULL,
  `FD_NAME` varchar(100) NOT NULL,
  `FD_TYPE` varchar(100) NOT NULL,
  `FD_BRAND` varchar(100) NOT NULL,
  `FD_PRICE` float NOT NULL,
  `FD_STOCK` varchar(20) NOT NULL,
  `FD_EXPIRY_DATE` date NOT NULL,
  `FD_CERTIFICATIONS` varchar(100) NOT NULL,
  `FD_SHIP_FEE` float NOT NULL,
  `FD_ORIGIN` varchar(100) NOT NULL,
  `FD_SHIPS_FROM` varchar(100) NOT NULL,
  `FD_IMAGE` varchar(255) NOT NULL,
  `FD_PUBLISH` varchar(20) NOT NULL,
  `FD_DESCRIPTIONS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodproduct`
--

INSERT INTO `foodproduct` (`FD_PROID`, `SP_ID`, `FD_NAME`, `FD_TYPE`, `FD_BRAND`, `FD_PRICE`, `FD_STOCK`, `FD_EXPIRY_DATE`, `FD_CERTIFICATIONS`, `FD_SHIP_FEE`, `FD_ORIGIN`, `FD_SHIPS_FROM`, `FD_IMAGE`, `FD_PUBLISH`, `FD_DESCRIPTIONS`) VALUES
(1, 2, 'Maggi Curry', 'Instant Noodle', 'Maggi', 4.00, 'Available', '2022-01-24', 'Halal Jakim', 4.00, 'Malaysia', 'Kuantan', 'megikari.jpg', '- ', 'MAGGI 2-MINN CURRY (79g x 5 Packs)'),
(2, 2, 'Maggi Tomyam Udang', 'Instant Noodle', 'Maggi', 4.50, 'Available', '2022-06-14', 'Halal Jakim', 4.00, 'Malaysia', 'Kuantan', 'megitomyam.jpg', '- ', 'Maggi Tom Yum (79g x 5 packs)'),
(4, 5, 'Maggi Mi Goreng Cili Kampung', 'Instant Noodle', 'Maggi', 5.25, 'Available', '2022-07-25', 'Halal Jakin', 4.00, 'Malaysia', 'Kuantan', 'maggi cili kampung.jpg', '-', 'Maggi Mi Goren Cili ala Kampung (78g x 5 Packs)');

-- --------------------------------------------------------

--
-- Table structure for table `goodproduct`
--

CREATE TABLE `goodproduct` (
  `GD_PROID` int(10) NOT NULL,
  `SP_ID` int(10) NOT NULL,
  `GD_NAME` varchar(100) NOT NULL,
  `GD_TYPE` varchar(100) NOT NULL,
  `GD_CATEGORY` varchar(100) NOT NULL,
  `GD_BRAND` varchar(100) NOT NULL,
  `GD_PRICE` float NOT NULL,
  `GD_STOCK` varchar(100) NOT NULL,
  `GD_SHIPS_FEE` float NOT NULL,
  `GD_ORIGIN` varchar(100) NOT NULL,
  `GD_SHIPS_FROM` varchar(100) NOT NULL,
  `GD_IMAGE` varchar(255) NOT NULL,
  `GD_PUBLISH` varchar(100) NOT NULL,
  `GD_DESCRIPTIONS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goodproduct`
--

INSERT INTO `goodproduct` (`GD_PROID`, `SP_ID`, `GD_NAME`, `GD_TYPE`, `GD_CATEGORY`, `GD_BRAND`, `GD_PRICE`, `GD_STOCK`, `GD_SHIPS_FEE`, `GD_ORIGIN`, `GD_SHIPS_FROM`, `GD_IMAGE`, `GD_PUBLISH`, `GD_DESCRIPTIONS`) VALUES
(1, 2, 'Electric Kettle', 'Utensils', 'cooking utensils', 'Emma', 30.55, 'Available', 5, 'China', 'Selangor', 'kettle.jpg', ' - ', 'color: white');

-- --------------------------------------------------------

--
-- Table structure for table `medicalproduct`
--

CREATE TABLE `medicalproduct` (
  `MD_PROID` int(10) NOT NULL,
  `SP_ID` int(10) NOT NULL,
  `MD_NAME` varchar(100) NOT NULL,
  `MD_TYPE` varchar(100) NOT NULL,
  `MD_FUNCTION` varchar(100) NOT NULL,
  `MD_SKIN_CONCERN` varchar(100) NOT NULL,
  `MD_SKIN_TYPE` varchar(100) NOT NULL,
  `MD_BRAND` varchar(100) NOT NULL,
  `MD_PRICE` float NOT NULL,
  `MD_STOCK` varchar(100) NOT NULL,
  `MD_EXPIRY_DATE` date NOT NULL,
  `MD_SHIP_FEE` float NOT NULL,
  `MD_ORIGIN` varchar(100) NOT NULL,
  `MD_SHIPS_FROM` varchar(100) NOT NULL,
  `MD_IMAGE` varchar(255) NOT NULL,
  `MD_PUBLISH` varchar(100) NOT NULL,
  `MD_DESCRIPTIONS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicalproduct`
--

INSERT INTO `medicalproduct` (`MD_PROID`, `SP_ID`, `MD_NAME`, `MD_TYPE`, `MD_FUNCTION`, `MD_SKIN_CONCERN`, `MD_SKIN_TYPE`, `MD_BRAND`, `MD_PRICE`, `MD_STOCK`, `MD_EXPIRY_DATE`, `MD_SHIP_FEE`, `MD_ORIGIN`, `MD_SHIPS_FROM`, `MD_IMAGE`, `MD_PUBLISH`, `MD_DESCRIPTIONS`) VALUES
(1, 2, 'Panadol Soluble', 'Medicine', 'Pain Relief', ' - ', ' - ', 'GSK PANADOL', 12.89, 'Available', '2021-09-23', 2.5, 'Malaysia', 'Pahang', 'panadolsoluble.jpg', ' - ', 'good to relief pain'),
(2, 5, 'panadol', 'panadol', 'pain killer', 'suitable', 'pain killer', 'panadol', 5, '3', '2020-07-24', 3, 'selangor', 'selangor', 'panadolsoluble.jpg', 'Yes', 'pain killer');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `ORDER_ID` int(10) NOT NULL,
  `RUN_ID` int(10) NOT NULL,
  `CUST_ID` int(10) NOT NULL,
  `ORDER_PRO_ID` int(10) NOT NULL,
  `ORDER_TYPE` varchar(100) NOT NULL,
  `ORDER_ADD` text NOT NULL,
  `ORDER_NAME` varchar(100) NOT NULL,
  `ORDER_PHONE_NO` varchar(20) NOT NULL,
  `ORDER_DATE` date NOT NULL,
  `ORDER_PROD_NAME` varchar(100) NOT NULL,
  `ORDER_PROD_PRICE` float NOT NULL,
  `deliveryStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`ORDER_ID`, `RUN_ID`, `CUST_ID`, `ORDER_PRO_ID`, `ORDER_TYPE`, `ORDER_ADD`, `ORDER_NAME`, `ORDER_PHONE_NO`, `ORDER_DATE`, `ORDER_PROD_NAME`, `ORDER_PROD_PRICE`, `deliveryStatus`) VALUES
(1, 1, 1, 0, '', 'Ketereh', 'tahir bukhari', '0139707839', '2020-07-21', 'Megi Kari', 4.5, 'waiting for runner'),
(3, 1, 3, 0, '', '666 bercham bercham bercham', 'hahahahaha', '0158563214', '2020-07-21', 'Megi Asam Laksa', 4.5, 'complete'),
(4, 1, 1, 0, '', 'Ketereh', 'tahir bukhari', '0139707839', '2020-07-21', 'Megi Tomyam', 4.5, 'pending'),
(6, 0, 4, 1, 'FOOD', '1212', 'cust2', '1212', '2020-07-22', 'Megi Kari', 4, ''),
(7, 0, 4, 1, 'FOOD', '1212', 'cust2', '1212', '2020-07-22', 'Megi Kari', 4, ''),
(8, 0, 4, 2, 'FOOD', '1212', 'cust2', '1212', '2020-07-22', 'Megi Tomyam Udang', 4.5, ''),
(9, 0, 5, 1, 'FOOD', '1212', 'cust3', '1212', '2020-07-22', 'Megi Kari', 4, ''),
(10, 0, 6, 1, 'FOOD', 'cust4', 'cust4', 'cust4', '2020-07-22', 'Megi Kari', 4, ''),
(11, 0, 4, 4, 'FOOD', '1212', 'cust2', '1212', '2020-07-22', 'food2', 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `paycard`
--

CREATE TABLE `paycard` (
  `CARD_ID` int(10) NOT NULL,
  `CARD_NAME` varchar(100) NOT NULL,
  `CARD_NO` varchar(100) NOT NULL,
  `CARD_CVC` varchar(100) NOT NULL,
  `CARD_EXP_DATE` varchar(20) NOT NULL,
  `CARD_BANK` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petproduct`
--

CREATE TABLE `petproduct` (
  `PET_PROID` int(10) NOT NULL,
  `SP_ID` int(10) NOT NULL,
  `PET_NAME` varchar(100) NOT NULL,
  `PET_TYPE` varchar(100) NOT NULL,
  `PET_FUNCTION` varchar(100) NOT NULL,
  `PET_BRAND` varchar(100) NOT NULL,
  `PET_LIFE_STAGE` varchar(100) NOT NULL,
  `PET_PRICE` float NOT NULL,
  `PET_STOCK` varchar(100) NOT NULL,
  `PET_EXPIRY_DATE` date NOT NULL,
  `PET_SHIP_FEE` float NOT NULL,
  `PET_ORIGIN` varchar(100) NOT NULL,
  `PET_SHIPS_FROM` varchar(100) NOT NULL,
  `PET_IMAGE` varchar(255) NOT NULL,
  `PET_PUBLISH` varchar(100) NOT NULL,
  `PET_DESCRIPTIONS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petproduct`
--

INSERT INTO `petproduct` (`PET_PROID`, `SP_ID`, `PET_NAME`, `PET_TYPE`, `PET_FUNCTION`, `PET_BRAND`, `PET_LIFE_STAGE`, `PET_PRICE`, `PET_STOCK`, `PET_EXPIRY_DATE`, `PET_SHIP_FEE`, `PET_ORIGIN`, `PET_SHIPS_FROM`, `PET_IMAGE`, `PET_PUBLISH`, `PET_DESCRIPTIONS`) VALUES
(1, 2, 'whiskes', 'makanan kucing', 'utk kenyang', 'whiskess', '3', 14, '5', '2020-07-25', 3, 'beijing', 'beijing', 'wiskas.jpg', 'Yes', 'makanan yang sedap'),
(2, 2, 'bekas anjing', 'bekas', 'bekas ', 'adidas', '2 tahun', 5, '5', '2020-07-30', 2, 'india', 'india', 'bekasanjing.jpg', 'No', 'bekas');

-- --------------------------------------------------------

--
-- Table structure for table `runneraccount`
--

CREATE TABLE `runneraccount` (
  `RUN_ID` int(10) NOT NULL,
  `RUN_USERNAME` varchar(20) NOT NULL,
  `RUN_NAME` varchar(100) NOT NULL,
  `RUN_ADDRESS` text NOT NULL,
  `RUN_EMAIL` varchar(50) NOT NULL,
  `RUN_PHONE_NO` varchar(20) NOT NULL,
  `RUN_GENDER` varchar(10) NOT NULL,
  `RUN_PASSWORD` varchar(20) NOT NULL,
  `RUN_IC` varchar(30) NOT NULL,
  `RUN_LICENSE` varchar(30) NOT NULL,
  `RUN_VERIFY` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `runneraccount`
--

INSERT INTO `runneraccount` (`RUN_ID`, `RUN_USERNAME`, `RUN_NAME`, `RUN_ADDRESS`, `RUN_EMAIL`, `RUN_PHONE_NO`, `RUN_GENDER`, `RUN_PASSWORD`, `RUN_IC`, `RUN_LICENSE`, `RUN_VERIFY`) VALUES
(1, 'tahir', 'tahir bukhari', '999 balai polis', 'tahirbukhari@gmail.com', '013-999', 'Male', 'tahir', '97000-00-0000', '97000-00-0000', 'Verified'),
(2, 'run1', 'run1', '1213', 'tahirbukhari@gmail.com', '013-999', 'Male', '12345', '121212', '121212', 'Pending'),
(3, 'run2', 'run2', '1212', 'run2', '0123', 'Male', '12345', '1212', '212', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `runnerincome`
--

CREATE TABLE `runnerincome` (
  `RUN_INID` int(10) NOT NULL,
  `RUN_ID` int(10) NOT NULL,
  `RUN_INDATE` date NOT NULL,
  `RUN_INCOME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `runnerincome`
--

INSERT INTO `runnerincome` (`RUN_INID`, `RUN_ID`, `RUN_INDATE`, `RUN_INCOME`) VALUES
(1, 1, '2020-07-21', '3.50');

-- --------------------------------------------------------

--
-- Table structure for table `spaccount`
--

CREATE TABLE `spaccount` (
  `SP_ID` int(10) NOT NULL,
  `SP_OWNNAME` varchar(100) NOT NULL,
  `SP_USERNAME` varchar(20) NOT NULL,
  `SP_PASSWORD` varchar(20) NOT NULL,
  `SP_BUSINESS_NAME` varchar(50) NOT NULL,
  `SP_COMPADDRESS` text NOT NULL,
  `SP_EMAIL` varchar(50) NOT NULL,
  `SP_PHONE_NO` varchar(20) NOT NULL,
  `SP_SSM` varchar(20) NOT NULL,
  `SP_VERIFY` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spaccount`
--

INSERT INTO `spaccount` (`SP_ID`, `SP_OWNNAME`, `SP_USERNAME`, `SP_PASSWORD`, `SP_BUSINESS_NAME`, `SP_COMPADDRESS`, `SP_EMAIL`, `SP_PHONE_NO`, `SP_SSM`, `SP_VERIFY`) VALUES
(2, 'tahir bustary', 'tahir', 'tahir', 'tahir enterprise', 'balai bomba', 'tahirbukhari@gmail.com', '013-999', '123B', 'Verified'),
(4, 'sp1', 'sp1', '12345', 'sp1 company', 'sp1', 'tahirbukhari@gmail.com', '013-999', '12334b', 'Pending'),
(5, 'sp3', 'sp3', '12345', 'sp3', '121', 'sp@gmail.com', '012', '123b', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `spincome`
--

CREATE TABLE `spincome` (
  `SP_INID` int(10) NOT NULL,
  `SP_ID` int(10) NOT NULL,
  `SP_INDATE` date NOT NULL,
  `SP_INCOME` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spincome`
--

INSERT INTO `spincome` (`SP_INID`, `SP_ID`, `SP_INDATE`, `SP_INCOME`) VALUES
(1, 2, '2020-07-20', 30),
(2, 2, '2020-07-19', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Indexes for table `customeraccount`
--
ALTER TABLE `customeraccount`
  ADD PRIMARY KEY (`CUST_ID`);

--
-- Indexes for table `customerpayment`
--
ALTER TABLE `customerpayment`
  ADD PRIMARY KEY (`PAY_ID`);

--
-- Indexes for table `foodproduct`
--
ALTER TABLE `foodproduct`
  ADD PRIMARY KEY (`FD_PROID`);

--
-- Indexes for table `goodproduct`
--
ALTER TABLE `goodproduct`
  ADD PRIMARY KEY (`GD_PROID`);

--
-- Indexes for table `medicalproduct`
--
ALTER TABLE `medicalproduct`
  ADD PRIMARY KEY (`MD_PROID`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`ORDER_ID`);

--
-- Indexes for table `paycard`
--
ALTER TABLE `paycard`
  ADD PRIMARY KEY (`CARD_ID`);

--
-- Indexes for table `petproduct`
--
ALTER TABLE `petproduct`
  ADD PRIMARY KEY (`PET_PROID`);

--
-- Indexes for table `runneraccount`
--
ALTER TABLE `runneraccount`
  ADD PRIMARY KEY (`RUN_ID`);

--
-- Indexes for table `runnerincome`
--
ALTER TABLE `runnerincome`
  ADD PRIMARY KEY (`RUN_INID`);

--
-- Indexes for table `spaccount`
--
ALTER TABLE `spaccount`
  ADD PRIMARY KEY (`SP_ID`);

--
-- Indexes for table `spincome`
--
ALTER TABLE `spincome`
  ADD PRIMARY KEY (`SP_INID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ADMIN_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customeraccount`
--
ALTER TABLE `customeraccount`
  MODIFY `CUST_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customerpayment`
--
ALTER TABLE `customerpayment`
  MODIFY `PAY_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foodproduct`
--
ALTER TABLE `foodproduct`
  MODIFY `FD_PROID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `goodproduct`
--
ALTER TABLE `goodproduct`
  MODIFY `GD_PROID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicalproduct`
--
ALTER TABLE `medicalproduct`
  MODIFY `MD_PROID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `ORDER_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `petproduct`
--
ALTER TABLE `petproduct`
  MODIFY `PET_PROID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `runneraccount`
--
ALTER TABLE `runneraccount`
  MODIFY `RUN_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spaccount`
--
ALTER TABLE `spaccount`
  MODIFY `SP_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
