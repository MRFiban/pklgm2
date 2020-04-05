-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 07:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pklgm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(100) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'IPAL', 'Mesin Pengolah Limbah Industri', 'Mechanic', '$ 17.000,00', 50, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_personal` varchar(16) NOT NULL,
  `contact_office` varchar(16) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `address`, `contact_personal`, `contact_office`, `role_id`, `is_active`, `date_created`) VALUES
(27, 'Kevin De Bruyne', 'kevindb@yahoo.com', 'default.png', '$2y$10$K.DP0o0958cLqQtNHLUu/ebTjKDxamHwBbivZYgyAk.HCjtqvb.MS', 'Rawsburg St. Blok A ~ Manchester ~ 4055', '+62 859-5167-123', '(023) 856-3123-2', 2, 1, 1584001417),
(28, 'Jaydane Khalid', 'jaydanekhalid@gmail.com', 'default.png', '$2y$10$LklnDEx93YoeBlt4NhFzcuPfCK6V1RoHC6g0HCEIsNwGaet1nd4BK', 'Jl.Sumbersari Rt.3/Rw.8 ~ Bandung ~ 100193', '+62 859-5167-588', '(022) 822-1234-5', 1, 1, 1584004908),
(31, 'Antonie Griezmann', 'antogrizi@gmail.com', 'default.png', '$2y$10$r5O/f7xVWm.Ef/WRTyBuzeT/bzLtp2/DHfQPq6uePPQPLYSaVCmG6', 'St. Etienne street ~ Paris ~ 173', '+83 821-9323-264', '(023) 856-3454-2', 2, 1, 1584431130),
(33, 'Nick Mc\'Samsing', 'nicknicenaughty10@gmail.com', 'default.png', '$2y$10$nVRuCWQ8CYjtTikJj3q5EOJoc1layALlHw/NUvS750Qfxums5YX6u', 'Roughneck Street Pavilion A-17 ~ Nevada ~ 60113', '+62 883-7436-981', '(061) 856-7156-9', 2, 1, 1585328587),
(34, 'Axel Mortdecai', 'mortdecaiaxel77@gmail.com', 'default.png', '$2y$10$.Xy.RF/IHhwrITJKYXgAduS/1HNt5RjNQOERyihJFqKHGrxTWJA9m', 'Spinoza Street M 16 ~ London ~ 7311', '+16 883-7436-684', '(111) 856-3123-2', 2, 1, 1585404781);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 4),
(7, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User\r\n'),
(4, 'Menu'),
(5, 'Home'),
(8, 'Product'),
(15, 'Babik');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'Supervisor'),
(4, 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt ', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 1, 'Product', 'admin\r\n', 'fas fa-fw fa-folder', 1),
(4, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(5, 4, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(6, 5, 'Home', 'home/index\r\n', '', 1),
(7, 5, 'Profile', 'home/profile', '', 1),
(8, 5, 'About', 'home/about', '', 1),
(9, 5, 'Gallery', 'home/gallery', '', 1),
(10, 5, 'Product', 'product\r\n', '', 0),
(11, 5, 'Login', 'auth/login', '', 1),
(12, 5, 'Electrical', 'product/electrical', '', 0),
(13, 4, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(14, 4, 'Inventory', 'menu/inventory', 'fas fa-fw fa-warehouse', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
