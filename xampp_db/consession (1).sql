-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 11:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consession`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `cityname` varchar(20) NOT NULL,
  `hotel_price` int(255) NOT NULL,
  `hotel_name` varchar(20) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `image_search` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `cityname`, `hotel_price`, `hotel_name`, `pincode`, `image_search`) VALUES
(1, 'delhi', 2000, 'laxmi palace', '126102', 'images/room1.webp'),
(2, 'mumbai', 3000, 'tajpalace', '140401', 'images/room5.webp');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_id`, `Name`, `phone_no`, `Address`, `DOB`, `Email`) VALUES
(124, 'k miglani', '9415500021', 'jind', '1999-06-08', 'karanmiglani.in@gmail.com'),
(686785411, 'karan', '238472384', '2485', '1998-06-08', 'kashish@gmail.com'),
(686785412, 'kamal', '9987458246', 'himachal', '1998-10-12', 'kamakishore@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `Destination_Id` int(10) NOT NULL,
  `Destination_Name` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_Id` int(10) NOT NULL,
  `Hotel_Name` varchar(50) NOT NULL,
  `Owner_Name` varchar(50) NOT NULL,
  `Hotel_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `room_facility` varchar(255) NOT NULL,
  `rooms_able` varchar(255) NOT NULL,
  `Room_Price` int(50) NOT NULL,
  `Hotel_Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hotel_Id`, `Hotel_Name`, `Owner_Name`, `Hotel_address`, `city`, `room_facility`, `rooms_able`, `Room_Price`, `Hotel_Category`) VALUES
(1, 'hotel  stone', 'ram parsad', '3A/22 WEA Channa Market, Karol Bagh, Delhi,', 'delhi', 'deluxe rooms with air conditioning and free wifi', '7', 2100, 'basic'),
(2, 'trident point', 'rajesh', 'south  mumbai ', 'mumbai', 'premium with overlooking the beautiful Arabian Sea from Marine Drive.', '5', 5000, 'standard'),
(3, 'jw marriott hotel', 'mr . shankar', 'western suburbs', 'mumbai', 'ultra premium', '10', 8000, 'premium'),
(4, 'marino hotel', 'ganesh ', 'near red fort , new delhi', 'delhi', 'premium rooms with with outdoor pools ', '4', 3000, 'standard'),
(5, 'raj palace', 'dilbag singh', 'near taj mahal assandh road', 'agra ', 'ultra deluxe', '18', 5000, 'premium');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `cash` varchar(255) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardnumber` varchar(50) NOT NULL,
  `expmonth` varchar(50) NOT NULL,
  `expyear` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`firstname`, `email`, `address`, `city`, `state`, `zip`, `cash`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES
('karan', 'kmiglani11.in@gmail.com', 'ind ', 'rajpura', 'punjab', '126102', '30,000', 'KARANMIGLANI', '0000222233334444', '02', '23', '345');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `check_in` varchar(255) NOT NULL,
  `check_out` varchar(255) NOT NULL,
  `adults` varchar(255) NOT NULL,
  `children` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`first_name`, `last_name`, `phone_no`, `email`, `check_in`, `check_out`, `adults`, `children`) VALUES
('karan', 'miglani', '7015765546', 'karanmiglani.in@gmail.com', 'Mon Jun 08 2020', 'Tue Jun 30 2020', '12', '5'),
('k', 'mig', '9421439', 'km12@gmal.com', 'Tue Apr 14 2020', 'Sat Apr 18 2020', '2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_id`),
  ADD UNIQUE KEY `unique2` (`Email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`) USING BTREE;

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`Destination_Id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`cvv`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cardnumber` (`cardnumber`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=686785413;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
