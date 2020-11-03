-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 04:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-06-18 12:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
(1, 'test@gmail.com', 2, '22/06/2017', '25/06/2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 1, '2017-06-19 20:15:43'),
(2, 'test@gmail.com', 3, '30/06/2017', '02/07/2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 2, '2017-06-26 20:15:43'),
(3, 'test@gmail.com', 4, '02/07/2017', '07/07/2017', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ', 0, '2017-06-26 21:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Maruti', '2017-06-18 16:24:34', '2017-06-19 06:42:23'),
(2, 'BMW', '2017-06-18 16:24:50', NULL),
(3, 'Audi', '2017-06-18 16:25:03', NULL),
(4, 'Nissan', '2017-06-18 16:25:13', NULL),
(5, 'Toyota', '2017-06-18 16:25:24', NULL),
(6, 'Volkswagen ', '2017-06-19 06:22:13', NULL),
(7, 'KIA', '2020-10-30 20:42:03', NULL),
(8, 'Skoda', '2020-10-30 20:42:59', NULL),
(9, 'Volvo', '2020-10-30 20:43:25', NULL),
(10, 'Range Rover', '2020-10-31 11:49:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Test Demo test demo																									', 'test@test.com', '8585233222');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Harry Den', 'webhostingamigo@gmail.com', '2147483647', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-06-18 10:03:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(1, 'anuj.lpu1@gmail.com', '2017-06-22 16:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, 'Harry Den', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2147483647', NULL, NULL, NULL, NULL, '2017-06-17 19:59:27', '2017-06-26 21:02:58'),
(2, 'AK', 'anuj@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '8285703354', NULL, NULL, NULL, NULL, '2017-06-17 20:00:49', '2017-06-26 21:03:09'),
(3, 'Mark K', 'webhostingamigo@gmail.com', 'f09df7868d52e12bba658982dbd79821', '09999857868', '03/02/1990', 'PKL', 'PKL', 'PKL', '2017-06-17 20:01:43', '2017-06-17 21:07:41'),
(4, 'Tom K', 'test@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '9999857868', '', 'PKL', 'XYZ', 'XYZ', '2017-06-17 20:03:36', '2017-06-26 19:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(1, 'Z4', 2, 'The design of the BMW Z4 Roadster.\r\nViews of open-air driving pleasure, more breathtaking with every detail. The exterior shows the individual style of the BMW Z4 Roadster in its purest form: clear, modern and emotionally charged.', 450000, 'Petrol', 2019, 2, 'z4.jpg', 'z4-2.jpg', 'z4-3.jpg', 'z4-4.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, '2017-06-19 11:46:23', '2020-10-31 09:12:41'),
(2, '3 Series', 2, 'Barely on the road and the BMW 3 Series Sedan is already leaving everything behind it, including conventions and expectations. Once again the icon displays how to reinvent itself. After all, with the pioneering design language, it stands for the dawning of a new era. Propelling the ultimate sports saloon are even more powerful and efficient engines. And a new force – simply say “Hey BMW” and the BMW 3 Series recognises your voice and heeds your every word.', 599999, 'Petrol', 2018, 5, '3series-1.jpg', '3series-2.jpg', '3series-3.jpg', '3series-4.jpg', '', 4, 1, 1, 1, 1, 1, 3, 4, 1, 1, 2, 5, '2017-06-19 16:16:17', '2020-10-31 09:13:18'),
(3, 'X-Trail', 4, 'Nissan has revealed the updated third-generation X-Trail for the European market. The X-Trail facelift, which is also known as the Rogue in the USA, made its world premiere there in September last year. Though Nissan showcased the pre-facelift model at the 2016 Indian Auto Expo, in all probability, we’ll be getting the updated third-gen X-Trail hybrid in India. The X-Trail facelift has received several aesthetic changes inside-out, but mostly to its exterior. Mechanically, Nissan will only launch the hybrid version of the SUV in India. It is powered by a 2.0-litre naturally aspirated petrol engine coupled to an electric motor and the powertrain is mated to a CVT (continuously variable transmission) automatic. ', 59000, 'diesel', 2017, 5, 'xtrail-1.jpg', 'xtrail-2.jpg', 'xtrail-3.jpg', 'xtrail-4.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 2, '2017-06-19 16:18:20', '2020-11-01 07:51:50'),
(4, 'Celerio X', 1, '‘Bold and sporty’ is the look of the new age. And that’s what CelerioX wears - a mix of confidence and radiance. Its ‘X’ graphic makes for a bold entry while the sporty interiors feature an exciting blend of orange accents and black hues.', 30636, 'Diesel', 2015, 4, 'cele-1.png', 'cele-2.jpg', 'cele-3.jpg', 'cele-4.png', '', 2, 0, 0, 1, 1, 1, 1, 0, 1, 0, 0, 0, '2017-06-19 16:18:43', '2020-11-01 07:58:27'),
(5, 'Fortuner', 5, 'The Toyota Fortuner has 1 Diesel Engine and 1 Petrol Engine on offer. The Diesel engine is 2755 cc while the Petrol engine is 2694 cc. It is available with the Manual and Automatic transmission. Depending upon the variant and fuel type the Fortuner has a mileage of 10.01 to 15.04 kmpl. The Fortuner is a 7 seater SUV and has a length of 4795mm, width of 1855mm and a wheelbase of 2745.', 50345, 'Diesel', 2018, 7, 'for-1.jpg', 'for-2.jpg', 'for-3.jpg', 'for-4.jpg', NULL, 6, 4, 1, 1, 1, 1, 6, 4, 1, 1, 0, 0, '2017-06-20 17:57:09', '2020-11-01 08:04:40'),
(6, 'Sonet', 7, 'The Kia Sonet isn’t just all muscle. Powered by the latest evolution of UVO, it offers you 57 smart ways of staying connected, making it the brainiest of all SUVs. UVO’s advanced technology includes AI Voice Command, OTA map updates, making your driving experience safe, convenient, and enjoyable.', 60000, 'Petrol', 2020, 5, 'son-1.jpg', 'son-2.png', 'son-3.jpg', 'son-4.jpg', NULL, 4, 1, 1, 1, 1, 1, 2, 4, 1, 1, 0, 0, '2020-10-31 09:34:38', NULL),
(7, 'Ciaz', 1, 'Imagine a lounge. Gorgeous. Indulgent. Comfortable. Expansive. That’s the experience. The feeling of Ciaz with its luxurious interiors.', 50000, 'Petrol', 2017, 5, 'ciaz-1.jpg', NULL, NULL, NULL, NULL, 2, 4, 0, 1, 1, 1, 1, 4, 1, 1, 0, 0, '2020-10-31 10:01:23', NULL),
(8, 'Kicks', 4, 'When it comes to a power-packed performance, the new Nissan KICKS Turbo CVT will shift the balance in your favour. ', 29999, 'Petrol', 2015, 5, 'kick-1.png', NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 4, 1, 0, 0, 0, '2020-10-31 10:09:12', NULL),
(9, 'Polo GT', 6, 'The legendary Polo GT commands the kind of respect that doesn\'t come easy. Its revolutionary TSI engine strikes the perfect balance between power and consumption. While the 6-speed AT offers a seamlessly smooth gearshift, letting you blaze down the road at 110PS power and 175Nm torque. ', 55000, 'Petrol', 2017, 4, 'polo-1.jpg', NULL, NULL, NULL, NULL, 2, 0, 1, 1, 1, 1, 1, 4, 1, 1, 1, 0, '2020-10-31 10:36:05', NULL),
(10, 'Seltos', 7, 'Kia offers the Seltos with either a 6-speed manual or various automatic transmission options depending on the engine. ... A 10.25-inch touchscreen infotainment system with Kia\'s UVO connected car technology, smart air purifier, ambient lighting and an 8-inch head-up display are a few key features offered in this SUV.', 42000, 'Diesel', 2020, 5, 'sel-1.jpg', NULL, NULL, NULL, NULL, 4, 4, 1, 1, 1, 1, 1, 4, 1, 1, 0, 0, '2020-10-31 11:36:57', NULL),
(11, 'Inova Crysta', 5, 'The Innova Crysta is a 7 seater MPV and has a length of 4735mm, width of 1830mm and a wheelbase of 2750mm.', 50000, 'Diesel', 2015, 7, 'inov-1.jpg', NULL, NULL, NULL, NULL, 6, 4, 0, 1, 1, 1, 1, 4, 1, 1, 0, 0, '2020-10-31 11:42:46', NULL),
(12, 'Passat', 6, 'The Passat is Volkswagen\'s large sedan. It is bigger than models of the same price from luxury marques and offers the same, if not, higher levels of luxury too. There\'s only one engine-gearbox on offer in India – a 2.0 diesel with a dual-clutch automatic gearbox.', 60999, 'Diesel', 2016, 4, 'pasa-1.jpg', NULL, NULL, NULL, NULL, 2, 4, 1, 1, 1, 1, 1, 4, 1, 1, 0, 2, '2020-10-31 11:47:08', NULL),
(13, 'Superb', 8, 'Beautifully crafted, Luxurious Interiors, Elegant Design & Exceptional Performance. Powered by superior technology and beautifully crafted with premium interiors. Roadside Assistance. Accessories. Finance. Genuine Parts.', 82999, 'Petrol', 2019, 5, 'skoda-1.jpg', NULL, NULL, NULL, NULL, 2, 4, 1, 1, 1, 1, 3, 4, 1, 1, 1, 5, '2020-10-31 11:53:00', NULL),
(14, 'A6\r\n', 3, 'The Audi A6 is a very good luxury midsize car. It has a serene ride and a lavish interior full of high-end materials. ... Fuel economy is decent, which is impressive when you consider that this sedan comes standard with Audi\'s Quattro all-wheel-drive system.', 156888, 'Petrol', 2020, 5, 'a6-1.jpg', NULL, NULL, NULL, NULL, 2, 4, 1, 1, 1, 1, 3, 4, 1, 1, 1, 5, '2020-10-31 12:21:22', NULL),
(15, 'S90', 9, 'Luxury with a difference\r\nElegant, beautifully crafted and full of advanced technology. With a range of electrified powertrains and a uniquely Scandinavian approach to design and innovation, the S90 is an executive sedan like no other.', 359999, 'petrol', 2019, 5, 's90-1.jpg', NULL, NULL, NULL, NULL, 4, 1, 1, 1, 1, 1, 1, 4, 1, 1, 1, 5, '2020-10-31 13:14:33', NULL),
(16, 'Discovery', 10, 'Discovery is a decent luxury midsize SUV. It stands out in the class for its fantastic off-road prowess, and it offers a potent engine lineup and a spacious cabin.', 600000, 'Diesel', 2020, 7, 'disc-1.jpg', NULL, NULL, NULL, NULL, 6, 4, 1, 1, 1, 1, 6, 4, 2, 1, 1, 7, '2020-10-31 13:21:12', NULL),
(17, 'Octavia', 8, 'The Skoda Octavia is a pivotal car in the Czech manufacturer\'s line-up. Ever since it appeared as a hatchback in 1996 (there was also a 1950s saloon of the same name) it\'s been the brand\'s biggest-selling model worldwide, appealing to anybody with a keen eye on practicality who\'s looking for a good value family car.', 90955, 'Petrol', 2020, 5, 'oct-1.jpg', NULL, NULL, NULL, NULL, 2, 4, 1, 1, 1, 1, 3, 4, 1, 1, 0, 5, '2020-10-31 13:26:38', NULL),
(18, 'XC60', 9, 'The dynamic Swedish SUV\r\nThe XC60, our mid-size SUV, epitomises Scandinavian design and Swedish creativity. Beautifully crafted, packed with innovative technology, and with a chassis that balances comfort and control, this is the SUV designed around you.', 100955, 'Diesel', 2019, 5, 'xc60-1.jpg', NULL, NULL, NULL, NULL, 4, 4, 1, 1, 1, 1, 3, 4, 1, 1, 1, 5, '2020-10-31 14:29:21', NULL),
(19, 'Q2', 3, 'Audi Q2 Engine and Performance With all its power and the taut chassis, the Q2 conjures up plenty of thrills for the driver. A lot of this is down to its 190hp power output –strong enough for an SUV that tips the scales at just 1,430kg. The 2.0-litre engine is a familiar one.', 96955, 'Petrol', 2020, 5, 'q2-1.jpg', NULL, NULL, NULL, NULL, 2, 4, 1, 1, 1, 1, 3, 4, 1, 1, 1, 5, '2020-10-31 14:33:57', NULL),
(20, 'Evoque', 10, 'The 2020 Land Rover Range Rover Evoque is a pretty good luxury subcompact SUV. It has a high-end cabin with lots of high-tech safety features, standard all-wheel drive, and solid handling. ... Its base engine is underpowered for an SUV of its weight, and its transmission and steering could be more precise.', 189999, 'Diesel', 2020, 5, 'evo-1.jpg', NULL, NULL, NULL, NULL, 4, 4, 1, 1, 1, 1, 4, 4, 1, 1, 1, 0, '2020-10-31 14:38:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
