-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 07:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supply_chain`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `area_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `area_code`) VALUES
(1, 'Sarkhej', 'SRKJ'),
(2, 'Vastrapur', 'VSTR'),
(3, 'Maninagar', 'MNGR'),
(4, 'New Ranip', 'NRANIP'),
(5, 'Vejalpur', 'VJLP');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(25) NOT NULL,
  `cat_details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_details`) VALUES
(1, 'Fast Food', ''),
(2, 'Bread Buns', ''),
(3, 'Counter Cakes', ''),
(4, 'Deserts', ''),
(5, 'Pastry Rs - 55', ''),
(6, 'Pastry Rs - 60', ''),
(7, 'Pastry Rs - 65', ''),
(8, 'Pastry Rs - 70', ''),
(9, 'Add On Items', ''),
(10, 'Cakes', ''),
(11, 'Cheese Cake', '');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `dist_id` int(11) NOT NULL,
  `dist_name` varchar(25) NOT NULL,
  `dist_email` varchar(50) DEFAULT NULL,
  `dist_phone` varchar(10) NOT NULL,
  `dist_address` varchar(200) DEFAULT NULL,
  `dist_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`dist_id`, `dist_name`, `dist_email`, `dist_phone`, `dist_address`, `dist_photo`) VALUES
(1, 'Nishant Shah', 'nishant45@gmail.com', '8980769792', 'Alpha Mall, Vastrapur, Ahmedabad', 'avatar.png'),
(2, 'Rahul Pandey', 'rahul431@gmail.com', '9099432197', 'Gota, S.G. Highway, Ahmedabad', 'boy.png'),
(3, 'Pawan Panchal', 'pawan.rocks@gmail.com', '7878025437', 'Modhera Stadium, Ahmedabad', 'bussiness-man.png'),
(4, 'Pushpak Patel', 'pushpak@gmail.com', '9012376544', 'Navrangpura, Ahmedabad', 'gamer.png'),
(5, 'Haniket Patel', 'hanipatel@gmail.com', '8980745372', 'CTM, Ahmeda', 'man.png'),
(6, 'shajmil vj', 'v.jshejmil@gmail.com', '0964568545', 'vadakkethalkkal house\r\np.o perinjanam,thrissur,kerala,680686', 'man-avatar.png'),
(9, 'sandr', 'sandra@gmail.com', '8888888888', 'sandra at house', 'young-man.png'),
(10, 'hussain', 'v.jshejmil@gmail.com', '0964568545', 'vadakkethalkkal house\r\np.o perinjanam,thrissur,kerala,680686', 'IMG-20190905-WA0005 - Copy (2).jpg'),
(11, 'shajmil vj', 'v.jshejmil@gmail.com', '0964568545', 'vadakkethalkkal house\r\np.o perinjanam,thrissur,kerala,680686', ''),
(12, 'test', 'test@gmail.com', '0964568545', 'vadakkethalkkal house\r\np.o perinjanam,thrissur,kerala,680686', 'IMG-20190905-WA0005 - Copy (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `order_id` int(100) NOT NULL,
  `status` int(10) NOT NULL,
  `dist_id` int(10) DEFAULT NULL,
  `man_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `date`, `order_id`, `status`, `dist_id`, `man_id`) VALUES
(45, '2022-01-31', 42, 1, 6, 11),
(46, '2022-01-31', 44, 1, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `man_id` int(11) NOT NULL,
  `man_name` varchar(25) NOT NULL,
  `man_email` varchar(50) DEFAULT NULL,
  `man_phone` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `man_photo` varchar(200) DEFAULT NULL,
  `qstn` varchar(300) DEFAULT NULL,
  `ans` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`man_id`, `man_name`, `man_email`, `man_phone`, `username`, `password`, `man_photo`, `qstn`, `ans`) VALUES
(0, 'Krupal Joshi', 'krupal12@yahoo.co.in', '7634507610', 'krupal', '22af645d1859cb5ca6da0c484f1f37ea', NULL, NULL, NULL),
(2, 'Ankit Pandya', 'ankitp@gmail.com', '8980956231', 'ankit', 'ankit123', NULL, NULL, NULL),
(3, 'Paawan Shah', 'paawanshah@gmail.com', '9934672300', 'paawan', 'paawan123', NULL, NULL, NULL),
(4, 'Jainish Shah', 'jainishshah@gmail.com', '9807634905', 'jainish', 'jainish123', NULL, NULL, NULL),
(6, 'janobe sourcecode', 'janobe@gmail.com', '9876565421', 'janobe', 'janobe', NULL, NULL, NULL),
(7, 'ankit', 'v.jshejil@gmail.com', '0964568545', 'ccvv', 'ankit123', NULL, NULL, NULL),
(8, 'fayas', 'v.jhejmil@gmail.com', '0964568545', '1111', '1111', NULL, NULL, NULL),
(11, 'Suresh Kumar', 'suresh@gmail.com', '9890234511', 'suresh', '3e6a0966890c85a8ca932302ad6a2405', 'IMG_20220126_114957_289.webp', NULL, NULL),
(24, 'shajmil jamal', 'v.jshej@gmail.com', '0964568545', 'new', '22af645d1859cb5ca6da0c484f1f37ea', 'boy.png', NULL, NULL),
(26, 'Mohammad fazil', 'v.js@gmail.com', '070 2549 5', 'ankit', '77f383fa0653635a4e8b67a231448bdf', 'bee.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `retailer_id` int(11) NOT NULL,
  `man_id` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `invoice_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `date`, `retailer_id`, `man_id`, `status`, `total_amount`, `invoice_id`) VALUES
(42, '2022-01-31', 1, 11, 1, '2,040.00', 45),
(43, '2022-01-31', 1, 8, 0, '161.00', NULL),
(44, '2022-01-31', 4, 2, 1, '1,575.00', 46);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_items_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_items_id`, `order_id`, `pro_id`, `quantity`) VALUES
(93, 42, 11, 10),
(94, 42, 4, 20),
(95, 43, 16, 7),
(96, 44, 36, 45);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `man_id` int(11) NOT NULL,
  `pro_name` varchar(25) NOT NULL,
  `pro_desc` text DEFAULT NULL,
  `pro_price` decimal(10,3) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `pro_cat` int(11) NOT NULL,
  `quantity` int(6) DEFAULT NULL,
  `pro_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `man_id`, `pro_name`, `pro_desc`, `pro_price`, `unit_id`, `pro_cat`, `quantity`, `pro_photo`) VALUES
(1, 11, 'Butter Puff', NULL, '16.670', 2, 1, NULL, 'download (3).jpg'),
(2, 11, 'Corn Puff', '', '16.670', 2, 1, NULL, 'download (4).jpg'),
(3, 11, 'Garlic Cheese Roll', '', '39.570', 2, 1, NULL, 'download (14).jpg'),
(4, 11, 'Butter Stuffed Bun', '', '42.000', 2, 1, NULL, 'download (13).jpg'),
(5, 11, 'Paneer Tikka S. Bun', '', '52.500', 2, 1, NULL, 'download (6).jpg'),
(6, 11, 'Burger Bun 4 PCS', '', '42.000', 2, 2, NULL, 'download (5).jpg'),
(7, 11, 'Hot Dog Bun 4 PCS', '', '46.000', 2, 2, NULL, 'download (7).jpg'),
(8, 11, 'Garlic Lauf', '', '47.230', 2, 2, NULL, 'download (11).jpg'),
(9, 11, 'Dabeli Bun 12 PCS', '', '48.500', 2, 2, NULL, 'download (10).jpg'),
(10, 11, 'Pizza Base 4 PCS', '', '35.650', 2, 2, NULL, 'download (9).jpg'),
(11, 11, 'Pizza Sauce', '', '120.000', 1, 9, 90, 'homemadepizzasauce-1.jpg'),
(12, 11, 'Sweet Onion Sauce', '', '112.000', 1, 9, 100, 'download.jpg'),
(13, 11, 'Strawberry Cake 1 KG', 'hh', '381.670', 1, 3, NULL, 'Fresh-Strawberry-Cake-with-Strawberry-Frosting-3.jpg'),
(14, 11, 'Choco Chips Cake 1 KG', '', '480.000', 1, 3, NULL, 'download (1).jpg'),
(15, 11, 'Belgium Cake 1 KG', '', '395.670', 1, 3, NULL, 'download (2).jpg'),
(16, 8, 'soup 34', 'asd', '23.000', 2, 5, 1, 'download (15).jpg'),
(36, 2, 'bread', '', '35.000', 2, 2, 51, 'istockphoto-92206322-612x612.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `retail`
--

CREATE TABLE `retail` (
  `retail_id` int(11) NOT NULL,
  `retail_username` varchar(25) NOT NULL,
  `retail_password` varchar(250) NOT NULL,
  `retail_address` varchar(200) NOT NULL,
  `area_id` int(11) NOT NULL,
  `retail_phone` varchar(10) NOT NULL,
  `retail_email` varchar(50) DEFAULT NULL,
  `qstn` varchar(200) DEFAULT NULL,
  `ans` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retail`
--

INSERT INTO `retail` (`retail_id`, `retail_username`, `retail_password`, `retail_address`, `area_id`, `retail_phone`, `retail_email`, `qstn`, `ans`) VALUES
(1, 'altaf', 'altaf123', 'A4 Ali Abad Appt, Kajal Park Soci, Sarkhej Road, Ahmedabad', 1, '9978454323', 'altafneva@gmail.com', NULL, NULL),
(2, 'nayan', 'nayan123', 'Opp. Shivalik Complex, Vastrapur, Ahmedabad', 2, '9898906523', 'nayan@gmail.com', NULL, NULL),
(3, 'nishit', 'nishit123', 'B/H Kakariya Lake, Maninagar, Ahmedabad', 3, '8980941941', 'nishit@gmail.com', NULL, NULL),
(4, 'dharmil', 'dharmil123', 'Near Vejalpur Police Station, Vejalpur, Ahmedabad', 5, '7865340091', 'dharmil123@gmail.com', NULL, NULL),
(5, 'rajesh', 'rajesh123', 'C4-Pushpak Complex, New Ranip, Ahmedabad', 4, '7898902365', 'rajesh123@gmail.com', NULL, NULL),
(6, 'fayas', 'ankit123', 'vadakkethalkkal house\r\np.o perinjanam,thrissur,kerala,680686', 3, '0964568545', 'v.jshjmil@gmail.com', NULL, NULL),
(7, 'ankit', '082258af7a5608579eebcc7fe5dab82f', '    vadakkethalkkal house\r\np.o perinjanam,thrissur,kerala,680686', 2, '0964568545', 'v.jshejil@gmail.com', '    hlo', '45'),
(8, 'new', 'cbb4bfcfaf2342bf8706f144ce9bd5e9', ' vadakkethalkkal house\r\np.o perinjanam,thrissur,kerala,680686', 3, '070 2549 5', 'vjshejmil@gmail.com', 'hi', 'hi'),
(9, 'v.js@gma', '7f492d41029aca567f750c21ecb297cd', '  vadakkethalakkal House, p. o perinjanam,', 1, '0964568545', 'v.jshejmil@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(20) NOT NULL,
  `unit_details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_name`, `unit_details`) VALUES
(1, 'KG', 'Kilo Gram'),
(2, 'PCS', 'Pieces'),
(3, 'LTR', 'Litre');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`dist_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `dist_id` (`dist_id`),
  ADD KEY `man_id` (`man_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`man_id`),
  ADD UNIQUE KEY `man_email` (`man_email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `retailer_id` (`retailer_id`),
  ADD KEY `man_id` (`man_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_items_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `unit` (`unit_id`),
  ADD KEY `pro_cat` (`pro_cat`),
  ADD KEY `man_id` (`man_id`);

--
-- Indexes for table `retail`
--
ALTER TABLE `retail`
  ADD PRIMARY KEY (`retail_id`),
  ADD UNIQUE KEY `retail_email` (`retail_email`),
  ADD KEY `area_code` (`area_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `area_id_2` (`area_id`),
  ADD KEY `area_id_3` (`area_id`),
  ADD KEY `area_id_4` (`area_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `dist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `man_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `retail`
--
ALTER TABLE `retail`
  MODIFY `retail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`dist_id`) REFERENCES `distributor` (`dist_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`man_id`) REFERENCES `manufacturer` (`man_id`) ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`retailer_id`) REFERENCES `retail` (`retail_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`man_id`) REFERENCES `manufacturer` (`man_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`) ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `products` (`pro_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`man_id`) REFERENCES `manufacturer` (`man_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`pro_cat`) REFERENCES `categories` (`cat_id`) ON UPDATE CASCADE;

--
-- Constraints for table `retail`
--
ALTER TABLE `retail`
  ADD CONSTRAINT `retail_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
