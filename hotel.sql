-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 08:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutinfo`
--

CREATE TABLE `aboutinfo` (
  `id` int(100) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutinfo`
--

INSERT INTO `aboutinfo` (`id`, `text`, `img`) VALUES
(1, '\"Our dedicated team of hospitality enthusiasts at Hotel is committed to ensuring your travel dreams come true. We\'re here to make your stay as memorable and enjoyable as possible, with top-notch service and a wide selection of accommodations.\"', 'about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `img`, `name`) VALUES
(1, 'hotel.svg', '100+ ROOMS'),
(2, 'customers.svg', '200+ CUSTOMERS'),
(3, 'rating.svg', '150+ REVIEWS'),
(4, 'staff.svg', '200+ STAFFS');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `checkin` varchar(100) NOT NULL,
  `checkout` varchar(100) NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`sr_no`, `name`, `email`, `checkin`, `checkout`, `adult`, `child`) VALUES
(1, 'ankit patel', 'ankitpatel@gmail.com', '2023-10-19', '2023-10-20', 1, 1),
(2, 'vaishali soni', 'vaishalisoni@gmail.com', '2023-10-22', '2023-10-23', 1, 2),
(3, 'jay prajapati', 'jayprajapati@gmail.com', '2023-10-24', '2023-10-25', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `map` varchar(1000) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pno1` varchar(20) NOT NULL,
  `pno2` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `map`, `address`, `pno1`, `pno2`, `email`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.29981334085!2d72.4145838617919!3d23.02015772567339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1689245125953!5m2!1sen!2sin', 'ㅤabc,ahemdabad,gujrat', 'ㅤ+917778889991', 'ㅤ+917778889991', 'ㅤask.abc@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`sr_no`, `name`, `email`, `subject`, `message`) VALUES
(1, 'ankit patel', 'ankitpatel@gmail.com', 'staff', 'staff behavior is very nice.'),
(2, 'vaishali soni', 'vaishalisoni@gmail.com', 'food', 'food is very good and tasty.'),
(3, 'priyanka', 'priyanka@gmail.com', 'room', 'room is very clean .');

-- --------------------------------------------------------

--
-- Table structure for table `fac`
--

CREATE TABLE `fac` (
  `id` int(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fac`
--

INSERT INTO `fac` (`id`, `img`, `name`, `text`) VALUES
(1, '1.jpg', 'Wifi', 'Stay Connected With Our reliable WiFi Network. Enjoy High-speed WiFi throughtout Your stay,Perfect For Business and Your needs.'),
(2, 'ac.svg', 'Air conditioner', 'Enjoy personalized comfort with individual air conditioning units in each room, allowing you to set the temperature according to your perference.'),
(3, 'television.svg', 'Television', 'enjoy a wide selection of channels on our flat-screen television, offering all types of entertainment option are available. our televison  include family-friendly channels .'),
(4, 'spa.svg', 'Spa', 'indulge in the ultimate relaxation experience at our on-site spa, designed to rejuvenate tour body and mind. '),
(5, 'room_heater.svg', 'Room Heater', 'stay warm and cozy during chilly weather with our room heater facilities, ensuring a comfortable and relaxing stay.'),
(6, 'geyser.svg', 'Geyser', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, nostrum quis culpa qui excepturi laborum commodi!');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `img`, `name`) VALUES
(1, '1.jpg', 'WIFI'),
(2, '2.svg', 'Television'),
(3, '3.svg', 'Ac'),
(4, '4.svg', 'Heater'),
(5, '5.svg', 'Geyser');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'ankitpatel@gmail.com', '12345'),
(2, 'jayprajapati@gmail.com', '123'),
(3, 'vaishalisoni@gmail.com', '123456'),
(4, 'jayprajapati@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `sr_no` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`sr_no`, `username`, `email`, `pno`, `pic`, `address`, `pincode`, `dob`, `password`) VALUES
(1, 'ankit', 'ankitpatel@gmail.com', '9426932023', '1.jpg', 'Madhav park society', '363001', '1998-05-21', '12345'),
(2, 'priyanka', 'priyanka@gmail.com', '9737132023', '', 'Satyam park society', '363035', '2001-11-08', '1234'),
(3, 'jay', 'jayprajapati@gmail.com', '9265632023', '2.jpg', 'navrang society', '363034', '1999-02-12', '123'),
(4, 'vaishali', 'vaishalisoni@gmail.com', '8238656140', '3.jpg', 'marutinandan park', '363035', '2000-05-25', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `img`, `name`, `review`) VALUES
(1, '1.jpg', 'Alohi', '\"The hotel room was clean, nice and spacious. Breakfast offered with a wide variety of food. The staff were friendly and helpful. The location is just perfect for a walk around the city centre.\"'),
(2, '2.jpg', 'Kylan Gentry', '\"Friendly and personal service The staff were all very friendly and helpful and no request for assistance was a problem for them. The hotel is well situated, being close to shopping, transport, and the tourist sites. We would definitely stay there again.\"'),
(3, '3.jpg', 'Ceri', '\"Lovely hotel and staff. Breakfast was enjoyable and had a good selection with attentive staff. Received good recommendations for food. Room was clean with the essentials. Hotel central, everything we needed for a short visit to Helsinki.\"');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `features` varchar(200) NOT NULL,
  `facilities` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `img`, `name`, `price`, `features`, `facilities`) VALUES
(1, '1.png', 'simple room', '₹1500 Per night', '1 Rooms ㅤ1 Bathroom ㅤ1 Balcony ㅤ1 Sofa', 'Wifiㅤ Television ㅤAc ㅤRoom-heater'),
(2, '2.png', 'Master Room', '₹2000 Per night', '1 Rooms ㅤ1 Bathroom ㅤ2 Balcony ㅤ1 Sofa', 'Wifi ㅤTelevision ㅤAc ㅤRoom-heater'),
(3, '3.png', 'Joint room', '₹4000 Per night', '2 Rooms ㅤ2 Bathroom ㅤ2 Balcony ㅤ3 Sofa', 'Wifi ㅤTelevisionㅤ Ac ㅤRoom-heater');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutinfo`
--
ALTER TABLE `aboutinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `fac`
--
ALTER TABLE `fac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutinfo`
--
ALTER TABLE `aboutinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fac`
--
ALTER TABLE `fac`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
