-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 10:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `explore360`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `your_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `email`, `number`, `your_message`) VALUES
(229, 'ankit', 'anki@gmail.com', '4848484', 'hiii ankit '),
(230, 'ankit ', 'ankit1@jfbhsbf', '45445', 'gbsjnbs');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_login`
--

CREATE TABLE `dashboard_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `img`) VALUES
(3, 'Our Galary', 'g1.jpg'),
(4, 'Our Galary', 'g2.jpg'),
(5, 'Our Galary', 'f.jpg'),
(6, 'Our Galary', 'g2.jpg'),
(7, 'Our Galary', 'g4.jpg'),
(13, 'our gallery', 'g6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `letest_place`
--

CREATE TABLE `letest_place` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `country` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL,
  `dis` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letest_place`
--

INSERT INTO `letest_place` (`id`, `name`, `country`, `img`, `dis`, `status`) VALUES
(1, 'Goa', 'India', 'photo-1587922546307-776227941871.avif', 'Goa is an Indian state located in North India within the Konkan region, geographically separated from the Deccan highlands by the Western Ghats.', 1),
(2, 'Shimla', 'India', 'shimla.avif', 'Shimla is the capital and the largest city of the northern Indian state of Himachal Pradesh. In 1864, Shimla was declared as the summer capital of British India', 1),
(10, 'Kashmir ', 'india', 'kashmir1.jpg', 'The Kashmir conflict is a territorial conflict over the Kashmir region, primarily between India and Pakistan, and also between China and India in the northeastern portion of the region.', 1),
(11, 'Jaipur', 'india', 'jaipur1.avif', 'Jaipur is the capital and the largest city of the north-western Indian state of Rajasthan. As of 2011 , the city has a population of 3.1 million, making it the tenth most populous city in the country.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone_no` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `user_role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `name`, `phone_no`, `email`, `password`, `type`, `user_role`) VALUES
(14, 'Vishwas Pathak', '8349120568', 'vishwaspathak.108@gmail.com', 'vishwas08', 0, 0),
(15, 'kamal chouhan', '7987395075', 'kamalchouhan898@gmail.com', 'kamal123', 0, 1),
(16, 'Ankit', '07724821877', 'akikush@gmail.com', '123', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `member` int(11) NOT NULL,
  `date` date NOT NULL,
  `package_name` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `member`, `date`, `package_name`, `price`, `total`) VALUES
(15, 5, '0000-00-00', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 59995),
(21, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(22, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(23, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(24, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(25, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(26, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(27, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(28, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(29, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(30, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(31, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(32, 2, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(33, 10, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 119990),
(34, 10, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 119990),
(35, 10, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 119990),
(36, 10, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 119990),
(37, 10, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 119990),
(38, 10, '2024-05-17', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 119990),
(39, 2, '2024-05-30', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 23998),
(40, 1, '2024-06-01', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 11999, 11999);

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `package_details_id` int(11) NOT NULL,
  `tour_package_id` int(11) NOT NULL,
  `package_day` varchar(50) NOT NULL,
  `package_discription` varchar(500) NOT NULL,
  `brakfast` varchar(250) NOT NULL,
  `lunch` varchar(250) NOT NULL,
  `dinner` varchar(250) NOT NULL,
  `package_name` varchar(500) NOT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `img3` varchar(500) NOT NULL,
  `img4` varchar(500) NOT NULL,
  `img5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`package_details_id`, `tour_package_id`, `package_day`, `package_discription`, `brakfast`, `lunch`, `dinner`, `package_name`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(9, 0, '0', 'This 4 nights 5 days Himachal family package from Delhi takes you to scenic towns of Manali and Shimla. Enclosed by snow clad mountains, these towns enrich your family trip with visits to monasteries, gurudwaras, temples, and hot sulphur springs. With your family tour package for Himachal, you can also enjoy various snow sports as well as experience riding yak and horse.', '0', '0', '0', 'Pleasurable Himachal Family Package ', 'himachal-1.jpg', 'himachal-2.jpg', 'himachal-3.jpg', '0', '0'),
(10, 0, '0', 'Manali is one of the most visited hill stations in the North Indian state of Himachal Pradesh, and an ideal destination for all types of tourists. Mostly visited by honeymooners and adventure enthusiasts, Manali pampers its visitors with exceptional views of magnificent mountains, luscious pine and cedar forests and views of gorgeous meadows with far reaching carpets of flowers. Booking a Manali tour package from Chandigarh and other nearby major cities, beforehand would surely save your time an', 'no', 'no', 'no', 'Mesmerising Manali Trip Package From Chandigarh', 'Chandigarh-pck1.jpg', 'Chandigarh-pck2.jpg', 'Chandigarh-pck3.jpg', '0', '0'),
(12, 0, '0', 'This 9 Nights 10 Days Himachal Tour Package from Chandigarh takes you to some of the top tourist attractions of Himachal Pradesh along with Amritsar. Himachal tour itinerary of this package is crafted by destination experts so that your family holiday is full of fun. During your trip to Himachal and Amritsar, youâ€™ll visit Shimla, Manali, Dharamshala, Dalhousie and Amritsar.', 'no', 'no', 'yes', '3 Nights 4 Days Paradisiacal Himachal Family Package For A Peaceful Trip', 'himachal-4.jpg', 'himachal-5.jpg', 'himachal-6.jpg', 'cp.jpeg', 'python.jpeg'),
(13, 0, '0', 'Goa is like a travel magnet that attracts hordes of tourists round the year to its golden sand beaches, quaint cafes and unmatched vibes. From picture-postcard beaches for a leisurely break to innumerable partying options and delectable food options, Goa is a destination for all kinds of travelers. Our Goa family tour itinerary for 3 days allows you to explore the main attractions of North Goa and enough time to relax by the sea.', '0', '0', '0', 'A Rejuvenating Break by The Sea', 'goa-1.jpg', 'goa-2.jpg', 'goa-3.jpg', '0', '0'),
(14, 0, '0', 'Have a great time together with this customizable 3 nights and 4 days Goa family tour package. Catering to the needs of all family members, this Goa family tour itinerary covers a guided tour of all the top tourist attractions of Goa that can be visited with this 4 day Goa family trip.', '0', '0', '0', 'Lovely Goa Family Tour', 'goa-4.jpg', 'goa-5.jpg', 'goa-6.jpg', '0', '0'),
(15, 0, '0', 'This vacation visit Goa with your family and enjoy its white sand beaches, nightlife, places of worship and world heritage architecture. It has rich flora and fauna, owing to its location on the Western Ghats range, a biodiversity hotspot.', '0', '0', '0', 'A Family Vacation In Beautiful Goa', 'goa-7.jpg', 'goa-8.jpg', 'goa-9.jpg', '0', '0'),
(16, 0, '0', 'Mapping out a Rajasthan tour plan? With family or friends, plan your getaway to the largest state in India with the help of our well organized Rajasthan itinerary for 3 days. Our Rajasthan tour itinerary allows you to discover the exotic charm of Thar Desert and popular tourist attractions in Jaisalmer. Known as the Golden City, Jaisalmer is famous for ornate Jain temples, ancient Jaisalmer Fort, haunted villages, and several museums. Beyond magnificent forts and havelis, Rajasthan tourism is re', 'yes', '0', '0', 'Delightful Rajasthan Tour Package', 'rajeshthan-1.jpg', 'rajeshthan-2.jpg', 'rajeshthan-3.jpg', '0', '0'),
(17, 0, '0', 'A North Indian state bordering Pakistan, Rajasthan is endowed with natural beauty and a magnificent history which makes it one of the most visited tourist destination in India. A 1 night 2 days Royal Rajasthan Tour will serve to be the ideal weekend getaway as it takes you on a mind blowing journey across its mysticism, grandeur and rusticity.', '0', '0', '0', 'Exciting Rajasthan Tour Package', 'rajeshthan-4.jpg', 'rajeshthan-5.jpg', 'rajeshthan-6.jpg', '0', '0'),
(18, 0, '0', 'With this adventurous Rajasthan tourism package, one can easily experience the wildlife of the state in all its glory.', '0', 'yes', '0', 'Adventurous Rajasthan Tour Package', 'rajeshthan-7.jpg', 'rajeshthan-8.jpg', 'rajeshthan-9.jpg', '0', '0'),
(19, 0, '0', 'Escape to the hills with Premium Kashmir Family Package that picks you from Katra, after you complete your Vaishno Devi trip. From Katra, proceeding to Srinagar, Sonamarg, Gulmarg, and Pahalgam, this 5 nights 6 days Kashmir package is apt for families looking for a summer getaway in the beautiful hills and valleys of Kashmir. It also offers a one-night stay in Srinagar houseboat.', '0', '0', 'yes', 'Premium Kashmir Family Package', 'kashmir2.jpg', 'kashmir3.jpg', 'kashmir4.jpg', '0', '0'),
(20, 0, '0', 'If you have been planning a family vacation, a 4 nights 5 days Kashmir family package is just right to make it a memorable one. It is the best among top selling Kashmir family packages and covers the best of major cities of Srinagar, Sonamarg, Gulmarg, and Pahalgam.', 'yes', '0', 'yes', 'Best Selling Kashmir Family Package', 'kashmir5.jpg', 'kashmir6.jpg', 'kashmir7.jpg', '0', '0'),
(21, 0, '0', 'The simplicity of the paradise state is what attracts tourists from around the world. Located in the midst of the Himalayas and is rich in its culture. It has got 11 official languages! This Sikkim family package itinerary for 6 days, is going to cover all the amazing places to make sure your journey becomes soothing and you bring back home some sweet memories.', '0', '0', '0', 'Travelers Paradise: Sikkim', 'sikkim-1.jpg', 'sikkim-2.jpg', 'sikkim-3.jpg', '0', '0'),
(22, 0, '0', 'Sikkim is one of the most beautiful states in the country with a vast array of beautiful indulgences and panoramic views. If you are planning a family tour, then this Sikkim Family Tour Itinerary For 5 Days can be of ample help.', 'no', 'no', 'no', 'Indulge in the beauty of Sikkim', 'sikkim-4.jpg', 'sikkim-5.jpg', 'sikkim-6.jpg', '0', '0'),
(25, 0, '0', '	This Shimla trip plan also incorporates a visit to Naldehra, a village located in the district of Shimla, Himachal Pradesh. Much famed for its extravagant golf courses, Naldehra is also a popular movie shooting spot.', '0', '0', '0', 'Ecstatic Shimla 4 Night 5 Day Tour Package', 'simla-sileder.avif', 'simla-sileder2.avif', 'simla-sileder3.avif', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(250) NOT NULL,
  `place_discription` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `price` varchar(500) NOT NULL,
  `place_img` varchar(500) NOT NULL,
  `place_country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `place_name`, `place_discription`, `status`, `price`, `place_img`, `place_country`) VALUES
(2, 'Shimla', 'Popularly known as ï¿½Queen of Hill Stationsï¿½, Shimla is one of the most traveled destinations in India. Colonial attractions, natural beauty, and scenic views of the valley are highlights of Shimla tourism. The enchanting tourist places in Shimla such as The Mall road, Kufri, Green Valley, Christ Church, and the Ridge Shimla attract a large number of tourists to this hill station. Being one of the most popular hill stations in India, Shimla sees a huge footfall of tourists every year.', 1, '500', 'shimla.jpeg', 'India'),
(4, 'Manali', 'Often referred to as the ‘honeymoon capital of India’, Manali is nestled in the mountains of the Indian state of Himachal Pradesh near the northern end of the Kullu Valley. Situated at a height of 6726 feet above sea level in the Beas River Valley, this Himalayan resort town has a reputation as a backpacking center and honeymoon destination. Manali tourism will take you through the best time of your life. This beautiful town is surrounded by snow-clad mountains and woody forests making it one of', 1, '0', 'manali.jpg', 'India'),
(6, 'Rajasthan', 'Palaces, forts, wildlife, Thar Desert, lakes, hills, and a pink and a blue city give a glimpse of Rajasthan. This land of colors stands in northwest of India attracting tourists and enriching their trip with Rajasthan family tour package.', 1, '0', 'rajsthan.jpeg', 'India'),
(7, 'Kashmir', 'Kashmir - the Heaven on Earth - lies on the north most corner of the Indian subcontinent. The renowned beauty of the Vale of Kashmir, the pretty hills in the south, and the barren lands of Ladakh in the north have been a major tourist-puller.', 1, '0', 'kashmir.jpeg', 'India'),
(8, 'Sikkim', 'Stretching across the mighty summits of the Eastern Himalayas, Sikkim is a picture-postcard travel destination. A Sikkim trip offers a mesmerizing blend of breathtaking Himalayan landscapes and vibrant cultural experiences.', 1, '1', 'sikkim.jpeg', 'India'),
(14, 'GOA', 'Goa is an Indian state located in North India within the Konkan region, geographically separated from the Deccan highlands by the Western Ghats. ', 1, '', 'photo-1587922546307-776227941871.avif', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_package`
--

CREATE TABLE `purchase_package` (
  `purchase_id` int(11) NOT NULL,
  `tour_package_id` int(11) NOT NULL,
  `members` int(11) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(101) NOT NULL,
  `booking_amount` varchar(100) NOT NULL,
  `final_amount` varchar(100) NOT NULL,
  `pyment_type` varchar(100) NOT NULL,
  `confirm_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tour_package`
--

CREATE TABLE `tour_package` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(250) NOT NULL,
  `tour_days` varchar(50) NOT NULL,
  `tour_place` varchar(300) NOT NULL,
  `tour_tranport_type` varchar(500) NOT NULL,
  `tour_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_package`
--

INSERT INTO `tour_package` (`tour_id`, `tour_name`, `tour_days`, `tour_place`, `tour_tranport_type`, `tour_price`) VALUES
(2, 'Delightful Rajasthan Tour Package', '2 Nigtht/3 Days', 'Rajasthan', '0', '5999\r\n'),
(3, '	Explore The Royal Rajasthan', '4 Night/5days', 'Rajsthan', '0', '14999'),
(4, 'Premium Kashmir Family Package', '7 Night/ 8 Days', 'Kashmir', '0', '30999'),
(5, 'Exciting Rajasthan Tour Package', '1 Night/ 2 Days', 'Rajasthan', '0', '6999'),
(6, 'Charismatic Kochi Tour Package', '3 Night/4 Days', 'Kerala', 'Bus/Train', '13999'),
(7, 'Best 9 Nights 10 Days Himachal Family Tour Packages for a Thrilling Trip', '9 Night/ 10 Days', 'Himachal', 'Bus/Train', '36499'),
(8, 'Top Selling 6 Nights And 7 Days Himachal Tour From Delhi', '6 Night/ 7 Days', 'Himachal', '0', '30000'),
(9, 'Adventurous Rajasthan Tour Package', '4 Night/5days', 'Rajasthan', '0', '14999'),
(10, 'Best Selling Kashmir Family Package', '4 Night/5days', 'Kashmir', '0', '14999'),
(11, 'Travelers Paradise: Sikkim', '5 Night/6 Days', 'Sikkim', '0', '25999'),
(12, 'Indulge in the beauty of Sikkim', '4 Night/5days', 'Sikkim', '0', '13999'),
(14, 'Lovely Goa Family Tour', '3 Night/4 Days', 'Goa', '0', '11499'),
(15, 'A Family Vacation In Beautiful Goa', '2 Nigtht/3 Days', 'Goa', '0', '8399'),
(16, 'Mesmerising Manali Trip Package From Chandigarh', '2 Nigtht/3 Days', 'Manali', '0', '8499'),
(17, 'Pleasurable Himachal Family Package', '4 Night/5days', 'Manali', '0', '14999'),
(18, '3 Nights 4 Days Paradisiacal Himachal Family Package For A Peaceful Trip', '3 Night/4 Days', 'Manali', '0', '7999'),
(19, 'Ecstatic Shimla 4 Night 5 Day Tour Package', '4 Night/5days', 'Shimla', '0', '11999'),
(21, 'Lovely Goa Family Tour', '4 Night/5days', 'Manali', '0', '5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard_login`
--
ALTER TABLE `dashboard_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letest_place`
--
ALTER TABLE `letest_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`package_details_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `purchase_package`
--
ALTER TABLE `purchase_package`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `tour_package`
--
ALTER TABLE `tour_package`
  ADD PRIMARY KEY (`tour_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `dashboard_login`
--
ALTER TABLE `dashboard_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `letest_place`
--
ALTER TABLE `letest_place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `package_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase_package`
--
ALTER TABLE `purchase_package`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour_package`
--
ALTER TABLE `tour_package`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
