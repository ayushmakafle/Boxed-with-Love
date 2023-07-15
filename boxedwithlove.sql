-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 02:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxedwithlove`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'adminpro', 'admin@gmail.com', '$2y$10$3.dOOWeHtZtNnTg5Uqv7YO0/7vQyyMLMthbA0mlCsr8KdgUCWnCrm');

-- --------------------------------------------------------

--
-- Table structure for table `bestseller`
--

CREATE TABLE `bestseller` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `amount_due` int(11) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `amount_due`, `payment_status`) VALUES
(5, 150, ''),
(6, 470, ''),
(7, 320, '1'),
(8, 150, '1'),
(9, 150, '1'),
(10, 150, '1'),
(11, 150, ''),
(12, 150, '1'),
(13, 150, '1'),
(14, 150, '1'),
(15, 150, '1'),
(16, 150, ''),
(17, 150, '1'),
(18, 150, '1'),
(19, 150, '1'),
(20, 2100, ''),
(21, 150, '1'),
(22, 180, ''),
(23, 180, '1'),
(24, 80, ''),
(25, 150, '1'),
(26, 2449, ''),
(27, 200, '1'),
(28, 200, '1'),
(29, 549, '');

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `box_id` int(11) NOT NULL,
  `box_name` varchar(100) DEFAULT NULL,
  `box_description` varchar(100) DEFAULT NULL,
  `box_price` decimal(10,2) DEFAULT NULL,
  `box_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`box_id`, `box_name`, `box_description`, `box_price`, `box_image`) VALUES
(101, 'Pink Box', 'Pink box with pink ribbion', 30.00, 'pinkbox.jpg'),
(102, 'Red Box', 'Red Box with Red Ribbon', 30.00, 'redbox.jpg'),
(103, 'Black Box', 'Black Box with Black Ribbon', 30.00, 'blackbox.jpg'),
(104, 'Brown Paper Box', 'Brown paper box with ribbon made up of straw', 35.00, 'brownpaperbox.jpg'),
(105, 'Exclusive Blue Box', 'Exclusive Blue Box with Blue Ribbon', 35.00, 'box2.png'),
(106, 'Exclusive Pink Box', 'Exclusive pink box with patterns', 35.00, 'box1.png'),
(107, 'Gold Box', 'Gold coloured box with gold coloured ribbon', 35.00, 'goldenbox.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `card_name`, `card_image`) VALUES
(403, 'Plain White Card', 'plain-white-card-739586.jpg'),
(404, 'You Got This', 'you-got-this-419152.jpg'),
(405, 'Get Well Soon', '6 (1).jpg'),
(406, 'Thinking of you', 'thinking-of-you-752471.jpg'),
(407, 'Cheers', 'cheers-211309.jpg'),
(408, 'Happy Birthday', 'happy-birthday-609775.jpg'),
(409, 'Sending Warm Hugs', 'sending-warm-hugs-112674.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(5, 'Bath and Body'),
(6, 'Snacks and Treats'),
(7, 'Accessories'),
(8, 'Candles'),
(9, 'Stationary'),
(10, 'Apparel'),
(11, 'Happy Hour'),
(12, 'Books'),
(15, 'Coffee and Tea');

-- --------------------------------------------------------

--
-- Table structure for table `occasions`
--

CREATE TABLE `occasions` (
  `occasion_id` int(11) NOT NULL,
  `occasion_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `occasions`
--

INSERT INTO `occasions` (`occasion_id`, `occasion_title`) VALUES
(1, 'Birthday'),
(2, 'Get Well Soon'),
(3, 'Just Because'),
(4, 'Congratulations'),
(8, 'Mother\'s Day'),
(9, 'Father\'s Day'),
(10, 'Valentine\'s Day'),
(14, 'Wedding');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 4, 53632927, 2, 1, 'pending'),
(2, 4, 1116735172, 3, 1, 'pending'),
(3, 4, 235430935, 5, 1, 'pending'),
(4, 4, 773446166, 4, 1, 'pending'),
(5, 4, 1363198752, 1, 1, 'pending'),
(6, 4, 835289307, 2, 1, 'pending'),
(7, 4, 931694315, 406, 1, 'pending'),
(8, 4, 1726926222, 107, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_occasion` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image1` varchar(255) DEFAULT NULL,
  `product_image2` varchar(255) DEFAULT NULL,
  `product_image3` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `product_category`, `product_occasion`, `product_price`, `product_image1`, `product_image2`, `product_image3`, `date`, `status`) VALUES
(1, 'Calming Hand Cream', 'Lavender scent. Key ingredients: shea butter, organic sunflower oil and organic aloe vera.', 'hand cream', '5', '1', 320.00, 'Firefly calming hand cream lid Lavender scent Key ingredients shea butter organic sunflower oil a.jpg', 'Firefly calming hand cream Lavender scent Key ingredients shea butter organic sunflower oil and o.jpg', 'calminghandcream.png', '2023-06-19 12:21:51', 'true'),
(2, 'Harry Styles Candle', 'Fragrance Notes: rose, chardonnay, blood orange, grapefruit Wax Type: Soy Burn Time: 30-40 Hours Size: 4 oz Materials: Straight-sided glass jars with metal lid', 'Harry Styles. One Direction. Candle. Rose Fragrance', '8', '3', 200.00, 'il_794xN.4854783069_n1sj.jpg', 'il_794xN.4806512342_4q8k.jpg', 'il_794xN.4854776821_qu8p.jpg', '2023-06-19 12:22:03', 'true'),
(3, '90\'s Butterfly Clips', 'This listing is for 32 multi-color butterfly hair clips. Hair clips are about 0.75” x 0.5” x 0.5”. Each purchase comes with 4 of each color. ', 'hair accessories. clips. butterfly.', '7', '1', 150.00, 'il_794xN.4395315653_avdc.jpg', 'il_794xN.2571096982_tm8h.jpg', 'il_794xN.4031895992_4dgr.jpg', '2023-06-19 12:22:15', 'true'),
(4, 'Rose quartz facial roller', 'For the ultimate at-home spa experience, this authentic rose quartz roller helps calm the skin and ease puffiness. Not to mention, it feels amazing', 'Skin care. Self Care. Spa. Rose quartz facial roller. ', '5', '2', 2100.00, 'revolution-skincare-rose-quartz.jpg', 'face-roller-benefits.jpg', 'ROSE-QUARTZ-ROLLER-2.jpg', '2023-06-19 12:22:28', 'true'),
(5, 'Crooked Kingdom', 'Crooked Kingdom: Six of Crows, Book 2 (Paperback) By Leigh Bardugo', 'six of crows. crooked kingdom. book. fantasy. leigh bardugo. netflix.', '12', '3', 950.00, '22299763.jpg', '22299763.jpg', '22299763.jpg', '2023-06-20 12:44:09', 'true'),
(7, 'Cinnamoroll Keychain', 'Cute sanrio keychain - Cinnamoroll', 'cute, keychain, white, blue', '11', '3', 80.00, 'Keychain.jpg', 'Keychain2.jpg', 'key.jpg', '2023-07-14 16:24:39', 'true'),
(8, 'Folklore Cardigan ', 'Folklore cardigan from Taylor Swift cardigan music video', 'folklore, cardigan, white, crochet, taylor swift, pretty, taylor, swift, good, comfy', '10', '3', 199.00, 'Cozy-Cardigan-Star-Embroidered-F.jpg', 's-l1200.jpg', 'unnamed-1.jpg', '2023-07-14 16:28:43', 'true'),
(9, 'Lukes coffee mug', 'Lukes coffee mug from the TV show Gilmore Girls', 'coffee, mug, gilmore, girls, gilmore girls, nice, cup, good', '15', '2', 100.00, '41LMY0O22PL.jpg', 'shshs.jpg', 'papa.jpg', '2023-07-14 16:33:56', 'true'),
(10, 'A7 cute notebooks', 'Cute notebooks in A7 size', 'notebook, cute, copy, a7, stationary', '9', '1', 150.00, 'hehehehe.jpg', '61bNnShPQ8S._AC_UF894,1000_QL80_.jpg', '71vpuEUjk5L._AC_UF894,1000_QL80_.jpg', '2023-07-14 16:41:17', 'true'),
(11, 'Pocky Sticks', 'Strawberry Pocky sticks', 'snacks, strawberry, chocolate, yummy, pink, pocky, sticks', '6', '3', 120.00, 'GUEST_f7a26aef-5876-41e7-b887-d2f43765f363.jpg', '001767120-1.jpg', 'hi.jpg', '2023-07-14 16:43:40', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `bill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`, `payment_status`, `bill_id`) VALUES
(2, 4, 150, 1116735172, 1, '2023-06-24 12:51:01', 'complete', '', 0),
(6, 4, 2100, 773446166, 1, '2023-06-24 13:12:23', 'pending', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(17, 0, 0, 15000, 'Khalti', '2023-07-14 12:53:28'),
(20, 0, 0, 18000, 'Khalti', '2023-07-14 16:57:36'),
(22, 0, 0, 20000, 'Khalti', '2023-07-15 09:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_ip`, `user_address`, `user_mobile`) VALUES
(4, 'ramthapa', 'ramthapa@gmail.com', '$2y$10$NOqUG1/oz1QdoN3NVbBw8OizbCgsU.B3E1P99AeVAYpt0zZQc7jXG', '127.0.0.1', 'ramkoaddress', '9876543210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bestseller`
--
ALTER TABLE `bestseller`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `occasions`
--
ALTER TABLE `occasions`
  ADD PRIMARY KEY (`occasion_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bestseller`
--
ALTER TABLE `bestseller`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
  MODIFY `box_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `occasions`
--
ALTER TABLE `occasions`
  MODIFY `occasion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
