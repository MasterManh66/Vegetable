-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 04:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vegetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catename`) VALUES
(1, 'Sản Phẩm Nổi Bật'),
(2, 'Củ Quả'),
(3, 'Rau Gia Vị');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `introduce` varchar(500) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `img` varchar(250) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pro_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_name`, `cate_id`, `introduce`, `detail`, `img`, `price`, `pro_create`) VALUES
(2, 'Quả Cà Chua', 1, 'Rất tốt cho sức khoẻ', 'Cà chua giúp người dùng bổ sung rất nhiều vitamin có lợi', './uploads/ca_chua.jpg', '10.000', '2023-07-07 10:15:19'),
(4, 'Trái Sầu Riêng', 1, 'Một loại quả rất phổ biến và tốt lành', 'Các bạn nên biết các lợi ích sau của trái sầu riêng', './uploads/sau_rieng.jpg', '120.000', '2023-07-07 10:16:37'),
(5, 'Trái Dưa Hấu', 1, 'Có thể ăn hoặc làm sinh tố rất bổ và mát', 'Mùa hè này chỉ cần có trái dưa hấu thôi là đã quá tuyệt vời', './uploads/Dua_hau.jpg', '15.000', '2023-07-07 10:18:10'),
(6, 'Quả vải', 1, 'Đặc sản Bắc Giang , thơm ngon nức vùng', 'Một loại quả nóng nhưng rất được ưa chuộng', './uploads/qua_vai.jpg', '60.000', '2023-07-07 10:20:17'),
(7, 'Quả chuối', 1, 'Rất nhiều chất cần thiết cho người dùng', 'Rất ít calo và bổ dưỡng , rất được ưa chuộng', './uploads/qua_chuoi.jpg', '20.000', '2023-07-07 10:21:28'),
(8, 'Húng Quế', 3, 'Gia vị thơm và tốt ', 'Có thể ăn sống cùng các loại rau khác', './uploads/hung_que.png', '10.000', '2023-07-07 10:22:55'),
(9, 'Rau Diếp Cá', 3, 'Rau sống có thể ăn ngay hoặc làm nước ', 'Rất ngon và bổ dưỡng tuy hơi khó ăn với người không quen', './uploads/rau_diep_ca.png', '10.000', '2023-07-07 10:24:04'),
(10, 'Rau Mùi', 3, 'Rất thơm và ngon', 'Luôn là loại rau sống không thể thiếu vì nó rất thơm', './uploads/rau_mui.jpg', '12.000', '2023-07-07 10:25:06'),
(11, 'Cải Thìa', 2, 'Rất Ngọt khi nấu rau', 'Một loại rau được ưa chuộng trong ăn uống đặc biệt ăn Lẩu', './uploads/cai_thia.jpg', '15.000', '2023-07-07 10:26:27'),
(12, 'Quả Ổi', 2, 'Giòn và Ngọt', 'Rất tốt cho sức khoẻ', './uploads/qua_oi.jpg', '20.000', '2023-07-07 10:27:45'),
(13, 'Quả Táo Đỏ', 2, 'Giòn và ngọt , nhiều nước', 'Loài quả được ưa chuộng rất nhiều ', './uploads/Qua_tao.jpg', '25.000', '2023-07-07 10:28:58'),
(14, 'Quả Mít', 2, 'Nặng và là mít thía siêu ngon và ngọt', 'Mít thái rất đặc biệt ở độ ngọt thanh ', './uploads/Qua_mit.jpg', '30.000', '2023-07-07 10:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'manh', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
