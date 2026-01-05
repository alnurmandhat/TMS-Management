-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2025 at 06:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `UserName`, `Password`, `profile_photo`) VALUES
(1, 'Admin', 'Alnur123@', 'WhatsApp Image 2023-03-05 at 6.57.02 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `agency_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` char(10) NOT NULL,
  `pro_photo` varchar(250) NOT NULL,
  `regdate` date NOT NULL DEFAULT current_timestamp(),
  `status` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `username`, `agency_name`, `email`, `password`, `mobile`, `pro_photo`, `regdate`, `status`) VALUES
(1, 'disha patel', 'Shilpa travels', 'dmakati596@rku.ac.in', 'Noor123@', '6325712599', 'WhatsApp Image 2023-03-05 at 6.50.52 AM.jpeg', '2023-04-15', 'Active'),
(3, 'parul khimsuriya', 'Parul travels', 'khimsuriyakinjal10@gmail.com', 'Kinjal12@', '9265741941', 'IMG_20210509_184556 (2).jpg', '2023-04-21', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `texts` varchar(455) NOT NULL,
  `admindate` date NOT NULL,
  `status` char(100) DEFAULT 'by admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `photo`, `slogan`, `texts`, `admindate`, `status`) VALUES
(1, 'blog-1.jpg', 'Life is a journey, not a destination', 'stop caring about what other people think, they are not thinking about you nearly as you as much as you think they are!....123', '0000-00-00', 'by admin'),
(2, 'blog-2.jpg', 'A More Rewarding Way To Travel', 'A more rewarding way to travel.#travelgram#travelphotography#traveling', '0000-00-00', 'by admin'),
(3, 'blog-3.jpg', 'New Sky , A New Life', 'Welcome To Your New Life And After Enjoying Tour You Start Your New Day With New Startup And Ideas!......', '0000-00-00', 'by admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Package` varchar(111) DEFAULT NULL,
  `agency_name` varchar(200) NOT NULL,
  `packageType` varchar(100) DEFAULT NULL,
  `Member` int(50) DEFAULT NULL,
  `arrivals` date DEFAULT NULL,
  `leaving` date DEFAULT NULL,
  `Class` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `Email`, `Package`, `agency_name`, `packageType`, `Member`, `arrivals`, `leaving`, `Class`, `RegDate`, `status`) VALUES
(1, 'dmakati596@rku.ac.in', 'Ahemdabad', 'tour-travel', 'Singale traveler', 2, '2023-04-15', '2023-04-16', 'Business Class', '2023-04-13 18:25:03', 'cancel'),
(2, 'dmakati596@rku.ac.in', 'rajkot', 'Shilpa travels', 'group package', 6, '2023-05-08', '2023-05-11', ' ', '2023-04-16 11:31:31', 'cancel'),
(429297, 'dmakati596@rku.ac.in', 'Taj-Mahal', 'tour-travel', 'singal traveler', 1, '2023-04-27', '2023-04-30', 'Premium Economy', '2023-04-16 12:20:33', 'Active'),
(503428, 'khimsuriyakinjal10@gmail.com', 'Jaipur', 'tour-travel', 'honeymoon package', 2, '2023-05-05', '2023-05-08', ' ', '2023-04-18 18:47:22', 'cancel'),
(551294, 'dmakati596@rku.ac.in', 'surat', 'Shilpa travels', 'singal traveler', 1, '2023-04-29', '2023-04-30', 'Business Class', '2023-04-24 10:01:51', 'Active'),
(816306, 'khimsuriyakinjal10@gmail.com', 'amritsar', 'Shilpa travels', 'family package', 10, '2023-05-08', '2023-05-15', ' ', '2023-04-18 18:46:18', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phoneno`, `email`, `status`) VALUES
(1, 'disha : +91 98765 1234', 'dmakati596@rku.ac.in', 'Active'),
(2, 'alnoor : +91 98752 1111', 'alnoormandhat@gmail.com', 'Active'),
(3, 'kinjal : +91 98753 40158', 'kinjalkhimsuriya@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contact_add`
--

CREATE TABLE `contact_add` (
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_add`
--

INSERT INTO `contact_add` (`address`) VALUES
('Kalavad road, Rajkot, Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `status`) VALUES
(1, 'disha makati', 'disah@gmail.com', '6325175288', 'for activation', 'i dont recive any activation link', '2023-04-05 08:36:09', 'Active'),
(26, 'parul khimsuriya', 'khimsuriyakinjal10@gmail.com', '6325712599', 'for activation', 'k,uwagbd', '2023-04-22 12:20:01', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `name_img` char(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `images`, `name_img`, `status`) VALUES
(1, 'g-1.jpg', 'Punjabi Nation', 'Active'),
(2, 'g-2.jpg', 'Morning seen', 'Active'),
(3, 'g-3.jpeg', 'Sunrise in Desert', 'Active'),
(4, 'g-4.jpg', 'Rajasthani', 'Active'),
(5, 'g-5.jpg', 'Fort seen', 'Active'),
(6, 'g-6.webp', 'Delhi Night View', 'Active'),
(7, 'g-7.jpg', 'Rath Yatra', 'Active'),
(8, 'g-8.jpg', 'Jaipur Weather', 'Active'),
(9, 'g-9.jpg', 'mountain View', 'Active'),
(10, 'Snapchat-1716756402 (2).jpg', 'kinjalk', 'Active'),
(11, 'WhatsApp Image 2023-03-05 at 6.57.02 AM.jpeg', 'dmakati', 'Inactive'),
(12, 'blog-3.jpg', 'blog', 'Active'),
(13, 'IMG_20210509_184556 (2).jpg', 'hje', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT 'Pending',
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `UserEmail`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`, `status`) VALUES
(1, 'dmakati596@rku.ac.in', 'Booking', 'please', '0000-00-00 00:00:00', 'View By Admin', '2023-04-24 02:54:34', 'Inactive'),
(2, 'dmakati596@rku.ac.in', 'Booking', 'please', '2023-04-22 12:27:06', 'Pending', '2023-04-24 02:54:34', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `PackageId` int(11) NOT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `rate` int(5) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `travel_name` varchar(255) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`PackageId`, `PackageImage`, `PackageName`, `PackageDetails`, `rate`, `PackagePrice`, `travel_name`, `Creationdate`, `UpdationDate`, `status`) VALUES
(1, 'p-1.jpg', 'Goldan Temple', 'With over 27 million inhabitants, Punjab is the 16th-largest Indian state by population, comprising 23 districts.123', 4, 7154, 'tour-travel', '0000-00-00 00:00:00', '2023-04-20 12:06:52', 'Active'),
(2, 'p-2.jpg', 'Taj-Mahal', 'The Taj Mahal Is Located On The Right Bank Of The Yamuna River In The Agra District In Uttar Pradesh.', 5, 7154, 'tour-travel', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active'),
(3, 'p-3.jpg', 'Red-Fort', 'The Red Fort Complex Was Built As The Palace Fort Of Shahjahanabad.Mughal Emperor Of India, Shah Jahan.', 4, 7154, 'tour-travel', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active'),
(4, 'p-4.jpg', 'Rajasthan', 'Rajasthan Is Also Called \"Land Of Kings\". It Has Many Tourist Attractions And Good Facilities For Tourists.', 5, 7154, 'tour-travel', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active'),
(5, 'p-5.jpg', 'Jaipur', 'Jaipur Formerly Jeypore, Is The Capital And Largest City Of The Indian State Of Rajasthan. Popularly Called The Pink City', 3, 7154, 'tour-travel', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active'),
(6, 'p-6.jpg', 'Ahemdabad', 'Ahmedabad Is The Most Populous City In The Indian State Of Gujarat. It Is The Administrative Headquarters123', 5, 7154, 'tour-travel', '0000-00-00 00:00:00', '2023-04-15 04:39:48', 'Active'),
(9, 'blog-3.jpg', 'rajkot', 'you will enjoy this trip please register', 3, 550, 'Shilpa travels', '2023-04-15 19:17:27', '2023-04-16 12:03:45', 'Active'),
(10, 'g-1.jpg', 'amritsar', 'full of enjoy and happiness put your life for this expirence click here.....', 4, 990, 'Shilpa travels', '2023-04-16 16:47:04', '0000-00-00 00:00:00', 'Active'),
(11, 'IMG_20210509_184556 (2).jpg', 'surat', 'ijhkjsadkge', 3, 500, 'Shilpa travels', '2023-04-24 09:59:23', '0000-00-00 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `rate` int(5) DEFAULT NULL,
  `Message` varchar(355) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `FullName`, `rate`, `Message`, `profile_photo`, `RegDate`, `UpdationDate`, `status`) VALUES
(1, 'Yashvi Makavana', 4, 'rajasthan ( India) we imagine lots of sand , folk music and unique culture . but in cities its very difficult to find it naturally . but this is the place where u can find it very easily very decent people , pure Rajasthani culture , cool folk music and more over lots of sand spreads in miles.', 'pic1.jpg', '0000-00-00 00:00:00', '2023-04-03 22:27:10', 'Active'),
(2, 'Kunjal Thakkar', 3, 'For tourists there are lot of places like Red Fort, India Gate, Qutub Minar, Ashardham are few in the list.There are big markets in New Delhi where you will get the goods very in all over the India.. some of them are Sarojini Market, Karol Bagh, Chandini Chowk, INA etc', 'pic3.jpg', '0000-00-00 00:00:00', '2023-04-03 22:27:25', 'Active'),
(3, 'Dhruvisha kelariya', 5, 'The Taj Mahal is one of India’s best known attractions, which can mean visitors from around Agra is a vibrant, colorful city on the banks of the Yamuna River, famous for its Mughal.Make the most out of limited time at the Taj Mahal by avoiding the notoriously long', 'pic2.jpg', '0000-00-00 00:00:00', '2023-04-03 22:27:39', 'Active'),
(4, 'Makati Disha', 4, 'Ahmedabad is located in gujarat and act as a business capital in gujarat.it is a best place for shopping and touring and traveling but if you hate summer i advise to come in winter or monsoon.but very nice placeI enjoyed the journey of Ahmedabad, when i am on tour to watch all ipl matches', 'pic4.jpg', '0000-00-00 00:00:00', '2023-04-03 22:27:52', 'Active'),
(5, 'Kinjal khimsuriya', 5, 'i really like this website', 'resume_photo.jpeg', '0000-00-00 00:00:00', '2023-04-20 12:16:46', 'Deleted'),
(6, 'Kinjal khimsuriya', 5, 'i really like this website', 'resume_photo.jpeg', '0000-00-00 00:00:00', '2023-04-20 12:16:49', 'Deleted'),
(7, 'Kinjal', 4, 'jvjfnvjnfvjkncvncmnvkjvn', 'IMG_20210509_184556 (2).jpg', '2023-04-24 10:04:10', '0000-00-00 00:00:00', 'Active'),
(8, 'Kinjal', 4, 'jvjfnvjnfvjkncvncmnvkjvn', 'IMG_20210509_184556 (2).jpg', '2023-04-24 10:05:08', '0000-00-00 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icones` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `Message` varchar(555) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icones`, `name`, `Message`, `status`) VALUES
(1, 'fas fa-hotel', 'affordable hotels', 'hotel customer services refers to the assistence provided to customer or guests before,during and after their stay at your hotel. guests can need help selecting rooms, making online reservation,canceling their booking or making other arrangements during their visit.', 'Active'),
(2, 'fas fa-utensils', 'Food And Drinks', 'Customer Visit Foodservice Outlet For A Number Of Reason, Such As The Added Convenices ,To Sample New Tastes And Flavours, To Celebrete And To Socialise. Foodservice Covers A Wide Range Of Eating Occasions.67678', 'Active'),
(3, 'fas fa-bullhorn', 'Safty Guide', '1.Keep Your Friend And Family Updated.<br>\r\n2.Make Copies Of Important Documents.<br>\r\n3.Safegurad Your Hotel Room.<br>\r\n4.Be Wary Of Public Wi-Fi.', 'Active'),
(4, 'fas fa-globe-asia', 'Around The World', 'hotel customer services refers to the assistence provided to customer or guests before,during and after their stay at your hotel. guests can need help selecting rooms, making online reservation,canceling their booking or making other arrangements during their visit.', 'Active'),
(5, 'fas fa-plane', 'Fastest Travel', 'Fuxing Trains Can Carry 1200 Passengers At Speeds Of 350 Kph. As Well As Boasting The Logest Network Of High-Speed Lines In The World. Now Has The Fastest Scheduled Trains On The Planet.', 'Active'),
(6, 'fas fa-hiking', 'Adventures', 'An Adventure Is An Exciting Experienece Or Undertaking That Is Typically Bold, Sometimes Risky.Adventures May Be Activities With Danger Such As Treaveling, Exploring,Skydiving,Mountain Climbing, Scuba Diving, River Rafting, Or Other Extreme Sports.', 'Active'),
(7, '3q.png', 'disha', 'hjkl,msac fjkgszekjrx nkjrseg', 'Inactive'),
(8, '3out.png', 'kinjal', 'hszhkf k,lsrgfxd kjxg dck sxkjgr', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sent_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(256) NOT NULL,
  `otp` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Profile` varchar(255) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `EmailId`, `Password`, `MobileNumber`, `Profile`, `RegDate`, `UpdationDate`, `status`) VALUES
(15, 'kinjal', 'khimsuriyakinjal10@gmail.com', 'Kinjal123@', '2587413692', 'IMG_20210509_184556 (2).jpg', '0000-00-00 00:00:00', '2023-04-21 03:31:02', 'Active'),
(16, 'disha', 'dmakati596@rku.ac.in', 'Disha1234@', '6555412638', 'Snapchat-1716756402 (2).jpg', '0000-00-00 00:00:00', '2023-04-22 06:25:24', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=816307;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
