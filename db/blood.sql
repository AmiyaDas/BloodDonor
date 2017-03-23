-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 01:16 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `bankid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(5) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `state_id` int(2) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`, `state`) VALUES
(1, 'Port Blair', 1, 'Andaman and Nicobar Islands'),
(6, 'Anantapur', 2, 'Andhra Pradesh'),
(20, 'Eluru', 2, 'Andhra Pradesh'),
(27, 'Guntur', 2, 'Andhra Pradesh'),
(29, 'Hyderabad', 2, 'Andhra Pradesh'),
(33, 'Kakinada', 2, 'Andhra Pradesh'),
(37, 'Karimnagar', 2, 'Andhra Pradesh'),
(38, 'Karnul', 2, 'Andhra Pradesh'),
(40, 'Khammam', 2, 'Andhra Pradesh'),
(47, 'Machilipatnam', 2, 'Andhra Pradesh'),
(48, 'Mahbubnagar', 2, 'Andhra Pradesh'),
(56, 'Nandyal', 2, 'Andhra Pradesh'),
(59, 'Nellur', 2, 'Andhra Pradesh'),
(61, 'Nizamabad', 2, 'Andhra Pradesh'),
(63, 'Ongole', 2, 'Andhra Pradesh'),
(70, 'Proddatur', 2, 'Andhra Pradesh'),
(72, 'Rajamahendri', 2, 'Andhra Pradesh'),
(84, 'Sikandarabad', 2, 'Andhra Pradesh'),
(95, 'Tirupati', 2, 'Andhra Pradesh'),
(98, 'Vijayawada', 2, 'Andhra Pradesh'),
(100, 'Visakhapatnam', 2, 'Andhra Pradesh'),
(101, 'Vizianagaram', 2, 'Andhra Pradesh'),
(104, 'Warangal', 2, 'Andhra Pradesh'),
(106, 'Itanagar', 3, 'Arunachal Pradesh'),
(108, 'Bongaigaon', 4, 'Assam'),
(110, 'Dibrugarh', 4, 'Assam'),
(112, 'Guwahati', 4, 'Assam'),
(113, 'Jorhat', 4, 'Assam'),
(117, 'Nagaon', 4, 'Assam'),
(119, 'Silchar', 4, 'Assam'),
(124, 'Asansol', 5, 'West Bengal'),
(126, 'Baharampur', 5, 'West Bengal'),
(137, 'Barddhaman', 5, 'West Bengal'),
(155, 'Durgapur', 5, 'West Bengal'),
(159, 'Ghatal', 5, 'West Bengal'),
(160, 'Gopalpur', 5, 'West Bengal'),
(179, 'Kharagpur', 5, 'West Bengal'),
(200, 'Puruliya', 5, 'West Bengal'),
(201, 'Raiganj', 5, 'West Bengal'),
(204, 'Ranaghat', 5, 'West Bengal'),
(208, 'Shiliguri', 5, 'West Bengal'),
(214, 'UttarparaKotrung', 5, 'West Bengal'),
(216, 'Arrah', 6, 'Bihar'),
(217, 'Aurangabad', 6, 'Bihar'),
(219, 'Begusarai', 6, 'Bihar'),
(220, 'Bettiah', 6, 'Bihar'),
(221, 'Bhabua', 6, 'Bihar'),
(222, 'Bhagalpur', 6, 'Bihar'),
(224, 'Buxar', 6, 'Bihar'),
(225, 'Chhapra', 6, 'Bihar'),
(226, 'Darbhanga', 6, 'Bihar'),
(227, 'Dehri', 6, 'Bihar'),
(231, 'Gaya', 6, 'Bihar'),
(234, 'Hajipur', 6, 'Bihar'),
(236, 'Jamalpur', 6, 'Bihar'),
(238, 'Katihar', 6, 'Bihar'),
(241, 'Kishanganj', 6, 'Bihar'),
(244, 'Madhubani', 6, 'Bihar'),
(247, 'Motihari', 6, 'Bihar'),
(248, 'Munger', 6, 'Bihar'),
(249, 'Muzaffarpur', 6, 'Bihar'),
(250, 'Nawada', 6, 'Bihar'),
(251, 'Patna', 6, 'Bihar'),
(252, 'Phulwari', 6, 'Bihar'),
(253, 'Purnia', 6, 'Bihar'),
(255, 'Saharsa', 6, 'Bihar'),
(256, 'Samastipur', 6, 'Bihar'),
(257, 'Sasaram', 6, 'Bihar'),
(258, 'Sitamarhi', 6, 'Bihar'),
(259, 'Siwan', 6, 'Bihar'),
(261, 'Chandigarh', 7, 'Chandigarh'),
(262, 'Ambikapur', 8, 'Chhattisgarh'),
(263, 'Bhilai', 8, 'Chhattisgarh'),
(264, 'Bilaspur', 8, 'Chhattisgarh'),
(266, 'Chirmiri', 8, 'Chhattisgarh'),
(267, 'Dhamtari', 8, 'Chhattisgarh'),
(268, 'Durg', 8, 'Chhattisgarh'),
(269, 'Jagdalpur', 8, 'Chhattisgarh'),
(270, 'Korba', 8, 'Chhattisgarh'),
(271, 'Raigarh', 8, 'Chhattisgarh'),
(272, 'Raipur', 8, 'Chhattisgarh'),
(273, 'Rajnandgaon', 8, 'Chhattisgarh'),
(278, 'Delhi', 9, 'Delhi'),
(294, 'Ni Dilli', 9, 'Delhi'),
(303, 'Madgaon', 10, 'Goa'),
(304, 'Mormugao', 10, 'Goa'),
(305, 'Panaji', 10, 'Goa'),
(306, 'Ahmadabad', 11, 'Gujarat'),
(308, 'Anand', 11, 'Gujarat'),
(312, 'Bhavnagar', 11, 'Gujarat'),
(330, 'Jamnagar', 11, 'Gujarat'),
(333, 'Junagadh', 11, 'Gujarat'),
(341, 'Morvi', 11, 'Gujarat'),
(344, 'Navsari', 11, 'Gujarat'),
(347, 'Porbandar', 11, 'Gujarat'),
(349, 'Rajkot', 11, 'Gujarat'),
(354, 'Surat', 11, 'Gujarat'),
(360, 'Vadodara', 11, 'Gujarat'),
(369, 'Ambala', 12, 'Haryana'),
(371, 'Ambala Sadar', 12, 'Haryana'),
(373, 'Bhiwani', 12, 'Haryana'),
(376, 'Faridabad', 12, 'Haryana'),
(378, 'Hisar', 12, 'Haryana'),
(382, 'Karnal', 12, 'Haryana'),
(386, 'Panchkula', 12, 'Haryana'),
(387, 'Panipat', 12, 'Haryana'),
(389, 'Rohtak', 12, 'Haryana'),
(390, 'Sirsa', 12, 'Haryana'),
(391, 'Sonipat', 12, 'Haryana'),
(394, 'Yamunanagar', 12, 'Haryana'),
(395, 'Shimla', 13, 'Himachal Pradesh'),
(399, 'Jammu', 14, 'Jammu and Kashmir'),
(402, 'Srinagar', 14, 'Jammu and Kashmir'),
(403, 'Udhampur', 14, 'Jammu and Kashmir'),
(407, 'Bokaro', 15, 'Jharkhand'),
(408, 'Chaibasa', 15, 'Jharkhand'),
(410, 'Daltenganj', 15, 'Jharkhand'),
(411, 'Devghar', 15, 'Jharkhand'),
(412, 'Dhanbad', 15, 'Jharkhand'),
(413, 'Hazaribag', 15, 'Jharkhand'),
(414, 'Jamshedpur', 15, 'Jharkhand'),
(416, 'Jhumri Tilaiya', 15, 'Jharkhand'),
(419, 'Lohardaga', 15, 'Jharkhand'),
(421, 'Phusro', 15, 'Jharkhand'),
(422, 'Ramgarh', 15, 'Jharkhand'),
(423, 'Ranchi', 15, 'Jharkhand'),
(424, 'Sahibganj', 15, 'Jharkhand'),
(425, 'Saunda', 15, 'Jharkhand'),
(426, 'Sindari', 15, 'Jharkhand'),
(428, 'Bangalore', 16, 'Karnataka'),
(430, 'Belgaum', 16, 'Karnataka'),
(431, 'Bellary', 16, 'Karnataka'),
(434, 'Bijapur', 16, 'Karnataka'),
(445, 'Davanagere', 16, 'Karnataka'),
(450, 'Gulbarga', 16, 'Karnataka'),
(457, 'Hubli', 16, 'Karnataka'),
(469, 'Mangaluru', 16, 'Karnataka'),
(474, 'Raichur', 16, 'Karnataka'),
(475, 'Ramanagaram', 16, 'Karnataka'),
(481, 'Shimoga', 16, 'Karnataka'),
(492, 'Alappuzha', 17, 'Kerala'),
(502, 'Kochi', 17, 'Kerala'),
(503, 'Kollam', 17, 'Kerala'),
(506, 'Kozhikkod', 17, 'Kerala'),
(508, 'Malappuram', 17, 'Kerala'),
(509, 'Manjeri', 17, 'Kerala'),
(512, 'Palakkad', 17, 'Kerala'),
(515, 'Ponnani', 17, 'Kerala'),
(517, 'Thalassery', 17, 'Kerala'),
(518, 'Thiruvananthapuram', 17, 'Kerala'),
(520, 'Thrissur', 17, 'Kerala'),
(529, 'Bhopal', 18, 'Madhya Pradesh'),
(537, 'Dewas', 18, 'Madhya Pradesh'),
(541, 'Gwalior', 18, 'Madhya Pradesh'),
(544, 'Indore', 18, 'Madhya Pradesh'),
(546, 'Jabalpur', 18, 'Madhya Pradesh'),
(555, 'Murwara', 18, 'Madhya Pradesh'),
(560, 'Ratlam', 18, 'Madhya Pradesh'),
(561, 'Rewa', 18, 'Madhya Pradesh'),
(562, 'Sagar', 18, 'Madhya Pradesh'),
(564, 'Satna', 18, 'Madhya Pradesh'),
(575, 'Ujjain', 18, 'Madhya Pradesh'),
(583, 'Amravati', 19, 'Maharashtra'),
(585, 'Aurangabad', 19, 'Maharashtra'),
(586, 'Badlapur', 19, 'Maharashtra'),
(593, 'Bhiwandi', 19, 'Maharashtra'),
(596, 'Mumbai', 19, 'Maharashtra'),
(613, 'Jalgaon', 19, 'Maharashtra'),
(621, 'Kolhapur', 19, 'Maharashtra'),
(625, 'Malegaon', 19, 'Maharashtra'),
(629, 'Nagpur', 19, 'Maharashtra'),
(633, 'Nashik', 19, 'Maharashtra'),
(635, 'Navi Mumbai', 19, 'Maharashtra'),
(643, 'Pune', 19, 'Maharashtra'),
(647, 'SangliMiraj', 19, 'Maharashtra'),
(652, 'Sholapur', 19, 'Maharashtra'),
(655, 'Thana', 19, 'Maharashtra'),
(659, 'Vasai', 19, 'Maharashtra'),
(660, 'Virar', 19, 'Maharashtra'),
(667, 'Imphal', 20, 'Manipur'),
(668, 'Shillong', 21, 'Meghalaya'),
(669, 'Tura', 21, 'Meghalaya'),
(670, 'Aizawl', 22, 'Mizoram'),
(671, 'Lunglei', 22, 'Mizoram'),
(672, 'Dimapur', 23, 'Nagaland'),
(673, 'Kohima', 23, 'Nagaland'),
(674, 'Wokha', 23, 'Nagaland'),
(675, 'Balangir', 24, 'Orissa'),
(676, 'Baleshwar', 24, 'Orissa'),
(679, 'Baripada', 24, 'Orissa'),
(680, 'Bhadrak', 24, 'Orissa'),
(682, 'Bhubaneswar', 24, 'Orissa'),
(683, 'Brahmapur', 24, 'Orissa'),
(686, 'Jaypur', 24, 'Orissa'),
(687, 'Jharsuguda', 24, 'Orissa'),
(688, 'Cuttak', 24, 'Orissa'),
(691, 'Puri', 24, 'Orissa'),
(692, 'Raurkela', 24, 'Orissa'),
(694, 'Rayagada', 24, 'Orissa'),
(695, 'Sambalpur', 24, 'Orissa'),
(699, 'Pondicherry', 25, 'Pondicherry'),
(701, 'Amritsar', 26, 'Punjab'),
(703, 'Batala', 26, 'Punjab'),
(704, 'Bathinda', 26, 'Punjab'),
(705, 'Dhuri', 26, 'Punjab'),
(712, 'Hoshiarpur', 26, 'Punjab'),
(714, 'Jalandhar', 26, 'Punjab'),
(718, 'Ludhiana', 26, 'Punjab'),
(722, 'Moga', 26, 'Punjab'),
(724, 'Pathankot', 26, 'Punjab'),
(725, 'Patiala', 26, 'Punjab'),
(734, 'Ajmer', 27, 'Rajasthan'),
(735, 'Alwar', 27, 'Rajasthan'),
(742, 'Bharatpur', 27, 'Rajasthan'),
(743, 'Bhilwara', 27, 'Rajasthan'),
(745, 'Bikaner', 27, 'Rajasthan'),
(753, 'Fatehpur', 27, 'Rajasthan'),
(754, 'Ganganagar', 27, 'Rajasthan'),
(758, 'Jaipur', 27, 'Rajasthan'),
(759, 'Jaisalmer', 27, 'Rajasthan'),
(763, 'Jodhpur', 27, 'Rajasthan'),
(766, 'Kota', 27, 'Rajasthan'),
(774, 'Pali', 27, 'Rajasthan'),
(779, 'Sikar', 27, 'Rajasthan'),
(783, 'Udaipur', 27, 'Rajasthan'),
(797, 'Dindigul', 28, 'Tamil Nadu'),
(798, 'Erode', 28, 'Tamil Nadu'),
(806, 'Kanchipuram', 28, 'Tamil Nadu'),
(807, 'Karur', 28, 'Tamil Nadu'),
(810, 'Koyampattur', 28, 'Tamil Nadu'),
(817, 'Chennai', 28, 'Tamil Nadu'),
(826, 'Namakkal', 28, 'Tamil Nadu'),
(828, 'Neyveli', 28, 'Tamil Nadu'),
(840, 'Salem', 28, 'Tamil Nadu'),
(846, 'Thanjavur', 28, 'Tamil Nadu'),
(854, 'Tirunelveli', 28, 'Tamil Nadu'),
(856, 'Tiruppur', 28, 'Tamil Nadu'),
(864, 'Velluru', 28, 'Tamil Nadu'),
(869, 'Agartala', 29, 'Tripura'),
(870, 'Agartala MCl', 29, 'Tripura'),
(871, 'Badharghat', 29, 'Tripura'),
(872, 'Agra', 30, 'Uttar Pradesh'),
(873, 'Aligarh', 30, 'Uttar Pradesh'),
(874, 'Allahabad', 30, 'Uttar Pradesh'),
(878, 'Ayodhya', 30, 'Uttar Pradesh'),
(886, 'Bareli', 30, 'Uttar Pradesh'),
(908, 'Fatehpur', 30, 'Uttar Pradesh'),
(909, 'Firozabad', 30, 'Uttar Pradesh'),
(913, 'Ghaziabad', 30, 'Uttar Pradesh'),
(917, 'Gorakhpur', 30, 'Uttar Pradesh'),
(925, 'Jhansi', 30, 'Uttar Pradesh'),
(929, 'Kanpur', 30, 'Uttar Pradesh'),
(939, 'Lucknow', 30, 'Uttar Pradesh'),
(945, 'Mathura', 30, 'Uttar Pradesh'),
(949, 'Mirat', 30, 'Uttar Pradesh'),
(953, 'Moradabad', 30, 'Uttar Pradesh'),
(957, 'Muzaffarnagar', 30, 'Uttar Pradesh'),
(961, 'Noida', 30, 'Uttar Pradesh'),
(971, 'Saharanpur', 30, 'Uttar Pradesh'),
(989, 'Varanasi', 30, 'Uttar Pradesh'),
(991, 'Dehra Dun', 31, 'Uttarakhand'),
(994, 'Haldwani', 31, 'Uttarakhand'),
(995, 'Haridwar', 31, 'Uttarakhand'),
(996, 'Kashipur', 31, 'Uttarakhand'),
(997, 'Pithoragarh', 31, 'Uttarakhand'),
(998, 'Rishikesh', 31, 'Uttarakhand'),
(999, 'Rudrapur', 31, 'Uttarakhand'),
(1000, 'Rurki', 31, 'Uttarakhand'),
(167, 'Jalpaiguri', 5, 'West Bengal'),
(145, 'Kolkata', 5, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `uid` int(5) NOT NULL,
  `bgroup` varchar(4) NOT NULL,
  `lastdonated` date DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `msgid` int(6) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `msgtxt` varchar(1000) DEFAULT NULL,
  `msgdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `uid` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `donor` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`uid`, `email`, `name`, `sex`, `phone`, `donor`) VALUES
(0, 'abc@xyz.com', 'AMIYA', 'M', '12345', 'D'),
(0, 'asd', 'AMIYA', 'M', '', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`) VALUES
(1, 'abc@xyz.com', '12345'),
(2, 'asd', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`bankid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospid`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
