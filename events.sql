-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 12:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `cart_id` int(12) NOT NULL,
  `cust_id` int(12) NOT NULL,
  `product_id` int(12) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`cart_id`, `cust_id`, `product_id`, `qty`, `total`) VALUES
(25, 1, 6, 2, 200),
(26, 1, 4, 3, 150),
(29, 1, 7, 5, 1000),
(35, 1, 2, 1, 800),
(54, 9, 19, 2, 100000),
(55, 2, 16, 3, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`email`, `password`) VALUES
('admin', 'admin'),
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categorytb`
--

CREATE TABLE `categorytb` (
  `cat_id` int(20) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorytb`
--

INSERT INTO `categorytb` (`cat_id`, `cat_name`, `image`) VALUES
(1, 'Wedding Event', 'wedding.jpg'),
(2, 'Birthday Event', 'birthday.jpg'),
(3, 'Glasses', 'glass0.jpg'),
(4, 'Gas Stoves', 'gas stove.jpg'),
(5, 'Floor Mats', 'grey mats.jpg'),
(6, 'Cutleries', 'spoons0.png'),
(7, 'Stage Event', 'stage concert.jpg'),
(8, 'Marquees', 'indian marqueee.jpg'),
(9, 'Plates', 'glass plates.jpg'),
(10, 'Cooking vessels', 'urelli.jpg'),
(11, 'Tables', 'foldable white table.jpg'),
(12, 'Lights', 'hanging lights.jpg'),
(13, 'Decoratives', 'Decorative_Star_Curtain_LED_Lights_6_1200x1200.jpg'),
(14, 'Chairs', 'bend wood white chair.jpg'),
(15, 'Haldi Event', 'decorations.webp'),
(16, 'Others', 'pink cover for table.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `fav_id` int(12) NOT NULL,
  `cust_id` int(12) NOT NULL,
  `product_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`fav_id`, `cust_id`, `product_id`) VALUES
(2, 3, 20),
(3, 3, 9),
(4, 3, 10),
(8, 1, 2),
(9, 1, 17),
(10, 1, 9),
(11, 1, 9),
(12, 2, 32),
(13, 2, 38);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktb`
--

CREATE TABLE `feedbacktb` (
  `msg_id` int(11) NOT NULL,
  `cust_id` int(12) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktb`
--

INSERT INTO `feedbacktb` (`msg_id`, `cust_id`, `fname`, `message`) VALUES
(2, 1, 'sharoon', 'Good services'),
(3, 1, 'sharoon', 'Good Products'),
(4, 5, 'Kevin ', 'Appreciate your works'),
(5, 4, 'Levin', 'Good Works'),
(6, 5, 'Kevin ', 'Appreciate your works'),
(7, 4, 'Levin', 'Good Works'),
(8, 5, 'Kevin ', 'Need more Stuff'),
(9, 4, 'Levin', 'Need Speed delivery'),
(10, 5, 'Kevin ', 'Need more Stuff'),
(11, 4, 'Levin', 'Need Speed delivery'),
(14, 3, 'amal', 'Great work');

-- --------------------------------------------------------

--
-- Table structure for table `itemtb`
--

CREATE TABLE `itemtb` (
  `product_id` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pro_desc` varchar(500) NOT NULL,
  `pro_qty` bigint(12) NOT NULL,
  `prod_price` decimal(20,0) NOT NULL,
  `prod_image` varchar(500) NOT NULL,
  `cat_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemtb`
--

INSERT INTO `itemtb` (`product_id`, `name`, `pro_desc`, `pro_qty`, `prod_price`, `prod_image`, `cat_id`) VALUES
(1, 'Birthday Stage', 'Decorated Birthday stage for Birthday programs', 5, '1000', 'Birrrthth.jpg', '2'),
(2, 'Birthday Stage', 'Decorated Birthday stage for Birthday programs', 5, '800', 'birthday stage.jpg', '2'),
(3, 'Birthday Stage', 'Decorated Birthday stage for Birthday programs', 5, '1000', 'birthdays stage.jpg', '2'),
(4, 'Cake Stand Small', 'Black Cake stand for small cake', 77, '50', 'cake stands black.jpg', '2'),
(5, 'Cake Stand', 'Medium size cake stand white', 70, '80', 'Cake stands.jpg', '2'),
(6, 'Cake stand Medium', 'Cake stand for medium sized cakes', 778, '100', 'cake stand.jpg', '2'),
(7, 'Round Table', 'Foldable Round table with black cover', 38, '200', 'round table cover.jpg', '2'),
(8, 'Table ', 'Rectangle Table with pink cover ', 97, '150', 'pink cover for table.jpg', '2'),
(9, 'Wedding Stage', 'Decorated wedding stage for Groom and Bride', 80, '10000', 'Bride and groom stage.jpg', '1'),
(10, 'Wedding Stage', 'Decorated wedding stage for Groom and Bride', 47, '10000', 'wedding stage with groomchairs and lights.jpg', '1'),
(11, 'Wedding Stage', 'Decorated wedding stage for Groom and Bride', 39, '10000', 'wedding stage.jpg', '1'),
(12, 'Wedding Stage', 'Decorated wedding stage for Groom and Bride', 9, '80000', 'white wedding-stage-decorations-500x500.webp', '1'),
(13, 'Cake stand Medium', 'Cake stand for large sized cakes', 40, '100', 'Cake stands.jpg', '1'),
(14, 'Golden Throne', 'Large Throne for Bride and groom', 80, '1000', 'bride and groom chair.jpg', '1'),
(15, 'Wedding Throne', 'single person throne', 69, '500', 'Gold Throne.jpg', '1'),
(16, 'Red Throne', 'single person throne red ', 10, '600', 'red throne.jpg', '1'),
(17, 'Chair', 'Bride and groom church chairs', 17, '50', 'church groom and bride chairs.jpg', '1'),
(18, 'Normal stage', 'stage for stage programs', 40, '10000', 'stage.jpg', '7'),
(19, 'Concert Stage', 'concert stage for stage programs', 40, '50000', 'stage concert.jpg', '7'),
(20, 'Mike & Speaker', 'used in Stage programs ', 4, '5000', 'mike set.jpg', '7'),
(21, 'Large Marquee', 'Temp-Shed For wedding', 4, '12000', 'pagoda.jpg', '1'),
(22, 'white plate', 'Used For serving', 67, '100', 'plastic wine glass.webp', '3'),
(23, 'Uralli', 'Used in Haldi Events', 10, '100', 'urelli.jpg', '15'),
(24, 'Decorated Haldi Stag', 'Decorated haldi stage  in yellow theme', 10, '5000', 'Low-Cost-Simple-Haldi-decoration-with-Earthen-Pots.jpg', '15'),
(25, 'Decorated Haldi Stag', 'Decorated haldi stage  in yellow theme colour', 4, '10000', 'haldi.jpg', '15'),
(26, 'Bend wood white chai', 'used to seat vistors', 500, '10', 'bend wood white chair.jpg', '14'),
(27, 'Black Bentwood chair', 'Black color chair made of bentwood', 500, '10', 'black bentwood chair.jpg', '14'),
(28, 'Black foldadble chai', 'Foldable chair for seating vistors', 1000, '15', 'black foldable chair.jpeg', '14'),
(29, 'Red chair', 'Red Plastic chair used for seating vistors', 5000, '6', 'red plastic chairs.jpg', '14'),
(30, 'Steel chivari chair', 'used to seat vistors', 500, '20', 'steel-chiavari-chair-500x500.webp', '14'),
(31, 'Floor Mat blue', 'used in floor of events', 50, '80', 'Blue rubber mats.jpg', '5'),
(32, 'Green Floor mats', 'used to cover floor', 50, '100', 'green mate.jpg', '5'),
(33, 'Wine Glass', 'Used For serving wine', 499, '2', 'tasting-wine-glasses-event-47.webp', '3'),
(34, 'Wine Glass small', 'Used For serving wine', 499, '2', 'glass wine glass.jpg', '3'),
(35, 'single burner stove', 'used for cooking purposes', 9, '500', 'gas stove.jpg', '4'),
(36, 'Double burner stove', 'used for cooking purposes', 5, '1000', 'double burner.jpg', '4'),
(37, 'Triple gas stove', 'used for cooking purposes', 10, '1200', 'three burner.jpg', '4'),
(38, 'pagoda small', 'used as temporory shed for small events', 10, '2000', 'pagoda.jpg', '8'),
(39, 'Big Marquee', 'used as temparory shed for  events', 5, '10000', 'indian marqueee.jpg', '8'),
(40, 'Fork', 'plastic fork', 499, '2', 'clear fork.jpg', '6'),
(41, 'Cutlery spoon and fo', 'plastic spoon and fork combo', 491, '6', 'cutlery set of spoon and fork.jpg', '6'),
(42, 'Black round bowl', 'used to serve food', 500, '8', 'serving bowl.jpg', '9'),
(43, 'Glass plate', 'Used For serving food', 500, '15', 'glass plates.jpg', '9'),
(44, 'Uralli', 'used for cooking dishes', 100, '200', 'urelli.jpg', '10'),
(45, 'Uralli small', 'used for cooking purposes', 48, '100', 'urelli small.jpg', '10'),
(46, 'Black table', 'black foldable table rectangle ', 499, '50', 'foldable black table rectangle.jpeg', '11'),
(47, 'Blue LED lights', 'used to light the event', 500, '100', 'blue led light.jpg', '12'),
(48, 'Led flood light', 'used for lighting purpose', 99, '200', 'led flood lights.jpg', '12'),
(49, 'blue chinese balls', 'used as an decoration in any event', 500, '50', 'blue chineese balls.jpg', '13'),
(50, 'Wine Glass', 'Used For serving', 5000, '100', 'Decorative_Star_Curtain_LED_Lights_6_1200x1200.jpg', '17'),
(51, 'Plastic Flower', 'Plastic flower for decorations', 500, '50', 'decorative plastic flower.jpg', '13'),
(52, 'Plastic Rose', 'Plastic Rose flower for decorations', 500, '50', 'plastic flower.jpg', '13'),
(53, 'Hanging Orchid', 'Plastic orchid flower for decorations', 500, '100', 'plastic orchid.jpg', '13'),
(54, 'Decor Stand', 'Used for decoration', 499, '100', 'decor stand.jpg', '13'),
(55, 'Large Flower stand', 'For Decoration', 500, '200', 'large flower stand.jpg', '13'),
(56, 'Hangings', 'Used for decoration', 500, '20', 'hangins.webp', '13'),
(57, 'Rose Chineese ball', 'Used for decoration', 500, '50', 'white chinees papper latern.jpg', '13'),
(58, 'Cake Stand', 'Used as cake stand', 500, '50', 'Cake stands.jpg', '16'),
(59, 'Rectangle table cove', 'Used as cover for table white', 500, '20', 'rectangle white cover.jpg', '16'),
(60, 'Chair Cover', 'Used as chair cover-white', 500, '50', 'white chair cover.jpg', '16'),
(61, 'Chair cover ', 'chair cover with blue band', 500, '10', '417rc67o5zL._SL1500_.jpg', '16'),
(62, 'Mic Set', 'Mike set with one mic and one speaker', 9, '500', 'mike set.jpg', '16'),
(63, 'Round table cover', 'cover for round table purple', 500, '10', 'round table purple cover.jpg', '16'),
(64, 'Round table cover', 'Table cover round type black', 500, '10', 'round table cover.jpg', '16'),
(65, 'Black Cake stand', 'Cake Stand black coloured', 10, '20', 'cake stands black.jpg', '16');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_det_id` int(12) NOT NULL,
  `order_id` int(12) NOT NULL,
  `product_id` int(12) NOT NULL,
  `prod_qty` int(12) NOT NULL,
  `total` int(100) NOT NULL,
  `cust_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_det_id`, `order_id`, `product_id`, `prod_qty`, `total`, `cust_id`) VALUES
(1, 26, 10, 1, 10000, 1),
(2, 26, 11, 1, 10000, 1),
(4, 27, 6, 1, 100, 1),
(5, 27, 4, 1, 50, 1),
(6, 27, 3, 1, 1000, 1),
(7, 27, 2, 2, 1600, 1),
(8, 27, 7, 2, 400, 1),
(11, 28, 6, 2, 200, 1),
(12, 28, 4, 1, 50, 1),
(13, 28, 7, 5, 1000, 1),
(14, 29, 5, 1, 80, 2),
(15, 29, 13, 1, 100, 2),
(17, 30, 5, 3, 240, 2),
(18, 30, 13, 2, 200, 2),
(20, 32, 5, 5, 400, 2),
(21, 32, 10, 1, 10000, 2),
(23, 33, 5, 2, 160, 2),
(24, 33, 10, 1, 10000, 2),
(26, 34, 5, 2, 160, 2),
(27, 34, 10, 1, 10000, 2),
(28, 34, 20, 1, 5000, 2),
(29, 35, 6, 2, 200, 1),
(30, 35, 4, 3, 150, 1),
(31, 35, 7, 5, 1000, 1),
(33, 36, 1, 1, 1000, 2),
(34, 36, 2, 1, 800, 2),
(35, 36, 3, 1, 1000, 2),
(36, 36, 1, 1, 1000, 2),
(37, 36, 2, 1, 800, 2),
(38, 36, 3, 1, 1000, 2),
(39, 36, 1, 1, 1000, 2),
(40, 36, 2, 1, 800, 2),
(41, 36, 3, 1, 1000, 2),
(42, 40, 1, 1, 1000, 2),
(43, 40, 2, 1, 800, 2),
(44, 40, 3, 1, 1000, 2),
(45, 36, 1, 1, 1000, 2),
(46, 36, 2, 1, 800, 2),
(47, 36, 3, 1, 1000, 2),
(48, 42, 1, 1, 1000, 2),
(49, 42, 2, 1, 800, 2),
(50, 42, 3, 1, 1000, 2),
(51, 40, 1, 1, 1000, 2),
(52, 40, 2, 1, 800, 2),
(53, 40, 3, 1, 1000, 2),
(54, 36, 1, 1, 1000, 2),
(55, 36, 2, 1, 800, 2),
(56, 36, 3, 1, 1000, 2),
(57, 36, 1, 1, 1000, 2),
(58, 36, 2, 1, 800, 2),
(59, 36, 3, 1, 1000, 2),
(60, 46, 1, 1, 1000, 2),
(61, 46, 2, 1, 800, 2),
(62, 46, 3, 1, 1000, 2),
(63, 36, 1, 1, 1000, 2),
(64, 36, 2, 1, 800, 2),
(65, 36, 3, 1, 1000, 2),
(66, 48, 1, 2, 2000, 2),
(67, 48, 2, 2, 1600, 2),
(68, 48, 3, 2, 2000, 2),
(69, 40, 1, 3, 3000, 2),
(70, 40, 2, 2, 1600, 2),
(71, 40, 3, 2, 2000, 2),
(72, 50, 1, 3, 3000, 2),
(73, 50, 2, 2, 1600, 2),
(74, 50, 3, 2, 2000, 2),
(75, 51, 1, 1, 1000, 2),
(76, 51, 2, 1, 800, 2),
(77, 51, 3, 1, 1000, 2),
(78, 50, 1, 1, 1000, 2),
(79, 50, 2, 1, 800, 2),
(80, 50, 3, 1, 1000, 2),
(81, 53, 1, 1, 1000, 2),
(82, 53, 2, 1, 800, 2),
(83, 53, 3, 1, 1000, 2),
(84, 54, 1, 1, 1000, 2),
(85, 54, 2, 1, 800, 2),
(86, 54, 3, 1, 1000, 2),
(87, 55, 1, 1, 1000, 2),
(88, 55, 2, 1, 800, 2),
(89, 55, 3, 1, 1000, 2),
(90, 56, 46, 1, 50, 2),
(91, 57, 35, 1, 500, 2),
(92, 58, 1, 1, 1000, 3),
(93, 59, 1, 1, 1000, 3),
(94, 59, 2, 1, 800, 3),
(96, 60, 45, 1, 100, 4),
(97, 60, 48, 1, 200, 4),
(98, 60, 12, 1, 80000, 4),
(99, 60, 8, 1, 150, 4),
(103, 61, 34, 1, 2, 4),
(104, 61, 33, 1, 2, 4),
(106, 62, 54, 1, 100, 4),
(107, 63, 41, 9, 54, 9),
(108, 64, 15, 1, 500, 9),
(109, 65, 62, 1, 500, 9),
(110, 65, 5, 1, 80, 9),
(112, 64, 25, 1, 10000, 9),
(113, 64, 40, 1, 2, 9),
(114, 68, 45, 1, 100, 9);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `order_id` int(12) NOT NULL,
  `cust_id` int(12) NOT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(500) NOT NULL,
  `total_price` decimal(12,2) NOT NULL,
  `from_date` date NOT NULL,
  `last_date` date NOT NULL,
  `status` varchar(12) NOT NULL,
  `phoneno` bigint(12) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pin` int(6) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `transaction_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`order_id`, `cust_id`, `order_date`, `address`, `total_price`, `from_date`, `last_date`, `status`, `phoneno`, `fname`, `lname`, `pin`, `city`, `email`, `transaction_id`) VALUES
(12, 1, '2023-06-05 09:25:25', 'Thayil House', '301250.00', '2023-06-03', '2023-06-08', 'declined', 7593943130, 'sharoon', 'joseph', 688523, 'Alappuzha', 'sharoonjoseph11@gmail.com', 5185544564),
(26, 1, '2023-06-05 09:25:39', 'Thayil House', '40000.00', '2023-06-01', '2023-06-03', 'declined', 7593943130, 'sharooon', 'joseph', 688523, 'Mararikulam', 'sharoonjoseph11@gmail.com', 2115544566),
(32, 2, '2023-06-07 09:23:39', 'Thayil House', '62400.00', '2023-06-05', '2023-06-11', 'confirmed', 7836456361, 'sharoon', 'joseph', 688452, 'Mararikulam', 'sharoonjoseph321@gmail.com', 6115544566),
(33, 2, '2023-06-07 09:23:14', 'cherayil house', '111760.00', '2023-06-23', '2023-07-04', 'confirmed', 7836456361, 'sharoon', 'joseph', 688452, 'asdad', 'sharoonjoseph321@gmail.com', 1155445664),
(34, 2, '2023-06-07 09:23:19', 'Thayil House', '45480.00', '2023-06-29', '2023-07-02', 'confirmed', 7836456361, 'sharoon', 'joseph', 688523, 'Alappuzha', 'sharoonjoseph321@gmail.com', 3659956555),
(53, 2, '2023-06-07 09:23:50', 'marari', '19600.00', '2023-06-04', '2023-06-11', 'confirmed', 7836456361, 'sharoon', 'joseph', 688523, 'Alappuzha', 'sharoonjoseph321@gmail.com', 1188444256),
(54, 2, '2023-06-07 09:23:30', 'Thayil House', '36400.00', '2023-06-10', '2023-06-23', 'confirmed', 7836456361, 'sharoon', 'joseph', 688523, 'Ernakulam', 'sharoonjoseph321@gmail.com', 7523929655),
(55, 2, '2023-06-05 09:23:10', 'Thayil House', '2800.00', '2023-06-03', '2023-06-04', 'declined', 7836456361, 'sharoon', 'joseph', 688523, 'Ernakulam', 'sharoonjoseph321@gmail.com', 2546535585),
(56, 2, '2023-06-05 09:23:01', 'Thayil House', '400.00', '2023-06-03', '2023-06-11', 'declined', 7836456361, 'sharoon', 'joseph', 688452, 'Alappuzha', 'sharoonjoseph321@gmail.com', 5052775255),
(57, 2, '2023-06-07 09:23:24', 'Thayil House', '6500.00', '2023-06-09', '2023-06-22', 'confirmed', 7836456361, 'sharoon', 'joseph', 688523, 'Alappuzha', 'sharoonjoseph321@gmail.com', 1234567890),
(58, 3, '2023-06-07 09:23:34', 'cherayil house', '2000.00', '2023-06-07', '2023-06-09', 'confirmed', 7596943830, 'amal', 'raju', 121512, 'Ernakulam', 'amalraju@gmail.com', 1234567890),
(59, 3, '2023-06-07 09:16:33', 'Thayil House', '3600.00', '2023-06-09', '2023-06-11', 'declined', 7596943830, 'amal', 'raju', 688523, 'Ernakulam', 'amalraju@gmail.com', 1234567890),
(60, 4, '2023-06-07 09:26:36', 'Thayil House', '160900.00', '2023-06-08', '2023-06-10', 'pending', 984445556, 'Levin', 'Manoj', 688523, 'Ernakulam', 'Manjo@gmail.com', 1234567890),
(61, 4, '2023-06-07 09:34:30', 'T House', '12.00', '2023-06-08', '2023-06-11', 'pending', 984445556, 'Levin', 'Manoj', 688452, 'Mararikulam', 'Manjo@gmail.com', 1545535656),
(62, 4, '2023-06-07 09:28:36', 'Thayil House', '900.00', '2023-06-09', '2023-06-18', 'pending', 984445556, 'Levin', 'Manoj', 688523, 'Ernakulam', 'Manjo@gmail.com', 152563452),
(63, 9, '2023-06-07 09:33:12', 'Thayil ', '486.00', '2023-06-09', '2023-06-18', 'pending', 7594943830, 'Arjun', 'joseph', 123501, 'Cherthala', 'arjunjoseph@gmail.com', 52541515),
(64, 9, '2023-06-07 09:38:15', 'cherayil house', '2.00', '2023-06-10', '2023-06-11', 'pending', 7594943830, 'Arjun', 'joseph', 688523, 'kochi', 'arjunjoseph@gmail.com', 52541515),
(65, 9, '2023-06-07 09:36:12', 'marari', '1160.00', '2023-06-08', '2023-06-10', 'pending', 7594943830, 'Arjun', 'joseph', 688523, 'Ernakulam', 'arjunjoseph@gmail.com', 1234567890),
(68, 9, '2023-06-07 09:39:27', 'Thayil House', '1000.00', '2023-06-09', '2023-06-19', 'pending', 7594943830, 'Arjun', 'joseph', 688452, 'Ernakulam', 'arjunjoseph@gmail.com', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `cust_id` int(12) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`cust_id`, `fname`, `lname`, `email`, `contact`, `pass`) VALUES
(2, 'sharoon', 'joseph', 'sharoonjoseph321@gmail.com', 7836456361, '123456'),
(3, 'amal', 'raju', 'amalraju@gmail.com', 7596943830, '123456'),
(4, 'Levin', 'Manoj', 'Manjo@gmail.com', 984445556, '123456'),
(5, 'amal', 'raju', 'amalraju@gmail.com', 7596943830, '123456'),
(6, 'Levin', 'Manoj', 'Manjo@gmail.com', 984445556, '123456'),
(7, 'Kevin ', 'Manoj', 'kvin@gmail.com', 759443830, '123456'),
(8, 'Kevin ', 'Manoj', 'kvin@gmail.com', 759443830, '123456'),
(9, 'Arjun', 'joseph', 'arjunjoseph@gmail.com', 7594943830, '123456'),
(10, 'Levin', 'joseph', 'ljoseph@gmail.com', 984854555, '123456'),
(11, 'Arjun', 'joseph', 'arjunjoseph@gmail.com', 7594943830, '123456'),
(12, 'Levin', 'joseph', 'ljoseph@gmail.com', 984854555, '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `total` (`total`);

--
-- Indexes for table `categorytb`
--
ALTER TABLE `categorytb`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_name` (`cat_name`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `feedbacktb`
--
ALTER TABLE `feedbacktb`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `itemtb`
--
ALTER TABLE `itemtb`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `prod_qty` (`pro_qty`),
  ADD KEY `cat_id_2` (`cat_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_det_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `total` (`total`),
  ADD KEY `order_det_id` (`order_det_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `total_price` (`total_price`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `firstname` (`fname`),
  ADD KEY `contact` (`contact`),
  ADD KEY `email` (`email`),
  ADD KEY `lastname` (`lname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `cart_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `categorytb`
--
ALTER TABLE `categorytb`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `fav_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `feedbacktb`
--
ALTER TABLE `feedbacktb`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `itemtb`
--
ALTER TABLE `itemtb`
  MODIFY `product_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_det_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `order_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `cust_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
