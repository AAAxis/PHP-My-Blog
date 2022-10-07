-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.ezyro.com
-- Generation Time: Oct 06, 2022 at 08:15 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezyro_32731389_test_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `text` text NOT NULL,
  `categorie` varchar(11) NOT NULL,
  `pubdate` datetime NOT NULL,
  `views` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `file`, `text`, `categorie`, `pubdate`, `views`) VALUES
(1, 'IPHONE 14 PRO - FIRST LOOK', 'iphone.jpeg', 'New iPhone 14 Pro in Deep Purple. But what is really new in it besides the name? It has become a little heavier, a little thicker a little higher - and yes, the camera block has become even larger! And I remember there were times when smartphones became lighter and more compact. And if you dont look behind you, you can easily confuse it with the 13 Pro!', '4', '2022-09-01 11:00:00', '148'),
(2, 'NVIDIA INTRODUCED 40 SERIES FLAGSHIP VIDEO CARDS', 'nvidea.jpeg', 'NVIDIA and its graphics cards continue to push the technology world forward at an exponential rate. Amid the craze for cryptocurrency mining, graphics cards were becoming increasingly difficult to find at reasonable prices. Luckily for consumers, prices have since stabilized and NVIDIA is expanding its offerings with the introduction of the 40 series starting with the RTX 4090 and RTX 4080.\r\n    ', '3', '2022-09-14 12:31:28', '45'),
(5, 'Google Pixel 7 on Amazon: prices and official video teaser', 'pixel.jpg', 'In the video, Google focuses on the massive metal camera block of the smartphone and its edges, but does not show the screen. Models were also shown in all three colors: white (Snow), black (Obsidian) and dark green (Hazel). The devices will be presented on October 6, and according to earlier rumors, the price of the minimum Pixel 7 configuration will be $599.', '4', '2022-09-07 22:22:14', '101'),
(6, 'The release date of the first Xiaomi electric car has become known', 'xiaomi.jpg', 'NotebookCheck insiders report that the company\'s first electric car will be a sedan similar to Tesla cars. However, the price will be lower: it is expected to cost less than $30,000, while the cheapest Tesla at the start of sales cost $35,000 (Model 3). It is also known that the novelty will be equipped with the Xiaomi Pilot autopilot, but there is no data on the power reserve and other characteristics. According to the CEO, the first cars will roll off the assembly line as early as 2024.', '1', '2022-09-16 22:28:54', '731'),
(8, 'One developer nearly broke the internet. Why is the web so fragile?', 'developer.jpg', 'On January 8, 2022, Marak updated the libraries: they began to display the word LIBERTY and a meaningless set of unreadable characters in the console. Apparently, the author did it on purpose: back in November 2020, he wrote that he was no longer going to support Fortune 500 companies with his free labor. Now all the changes have been canceled - apparently, we managed to agree with the programmer.', '2', '2022-09-12 22:38:15', '351');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Cars'),
(2, 'Programming'),
(4, 'Gadgets'),
(3, 'Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `text`) VALUES
(1, 'Marek Janik', 'pussydestroer11@gmail.com', 'Remember that one time Nvidia priced their new 4090 like Etherium'),
(2, 'John Smith', 'moydomzona@yandex.com', 'Wow whoever did the design for the 4090 needs a pay raise, it looks'),
(3, 'Weep Zukerberg', 'dickinme@hotmail.com', 'I clicked on the link but it seems it\'s an old Kickstarter one from last year. '),
(21, 'Johan Rowling', 'countrysidex@gmail.com', 'This seems to be something great!');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'polskoydm@gmail.com'),
(2, 'barexpressil@gmail.com'),
(3, 'jiliyahaifa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
