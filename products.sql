-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 12, 2021 at 03:07 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `libreria`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `link` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `model`, `type`, `color`, `link`) VALUES
(1, 'Ed Hardy', 'Scale Runner', 'Sneakers Basse', 'black', 'https://img01.ztat.net/article/spp-media-p1/0b21f3c075ca3dd7a90c30943ea804e7/6fd293e5294a43d38704c079d46660d2.jpg?imwidth=606&filter=packshot'),
(2, 'British Knights', NULL, 'Sneakers Basse', 'black/white', 'https://img01.ztat.net/article/spp-media-p1/06571d827be732cb9602ba3690170064/e906985e758541b2be31a6df7eb8637a.jpg?imwidth=606&filter=packshot'),
(3, 'British Knights', NULL, 'Sneakers Basse', 'white/black', 'https://img01.ztat.net/article/spp-media-p1/caeff444ea8632ec9240d443563bfd55/a4367a6b212642119c9c610f665812b2.jpg?imwidth=606&filter=packshot'),
(4, 'Nike', 'Crater Impact', 'Sneakers Basse', 'light bone/black/stone', 'https://img01.ztat.net/article/spp-media-p1/d1fc91bb566b435eb8149ce5ae8f6c53/e3d836f9620b49ec93c12f1ff19dd257.jpg?imwidth=606&filter=packshot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
