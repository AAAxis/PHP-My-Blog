-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 01, 2022 at 11:38 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `text` text NOT NULL,
  `categorie` varchar(11) NOT NULL,
  `pubdate` datetime NOT NULL,
  `views` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `text`, `categorie`, `pubdate`, `views`) VALUES
(1, 'IPHONE 14 PRO - FIRST LOOK', 'iphone.jpeg', 'New iPhone 14 Pro in Deep Purple. But what is really new in it besides the name? It has become a little heavier, a little thicker a little higher - and yes, the camera block has become even larger! And I remember there were times when smartphones became lighter and more compact. And if you dont look behind you, you can easily confuse it with the 13 Pro!', '4', '2022-09-01 11:00:00', '147'),
(2, 'NVIDIA INTRODUCED 40 SERIES FLAGSHIP VIDEO CARDS', 'nvidea.jpeg', 'NVIDIA and its graphics cards continue to push the technology world forward at an exponential rate. Amid the craze for cryptocurrency mining, graphics cards were becoming increasingly difficult to find at reasonable prices. Luckily for consumers, prices have since stabilized and NVIDIA is expanding its offerings with the introduction of the 40 series starting with the RTX 4090 and RTX 4080.\r\n    ', '7', '2022-09-14 12:31:28', '27'),
(3, 'The stunt girl reproduced all the moves of Johnny Cage from Mortal Kombat', 'girl.jpeg', 'A popular type of video on YouTube is that professional stuntmen replicate tricks from video games - fencing like witchers, jumping like assassins, and so on. Our attention was drawn to the work of the Danish stunt girl Sofia Stunts, who reproduced the moves of Johnny Cage from Mortal Kombat.', '7', '2022-09-13 14:41:39', '111'),
(4, 'Call of Duty: Modern Warfare II of the most popular series in history', 'cod.jpg', 'According to a report by Activision Blizzard and Infinity Ward, the new shooter performed well in terms of total players, number of matches played, and time spent in the game. At the same time, the mobile version of Call of Duty: Warzone reached 15 million pre-registrations on Google Play - faster than all other Activision Blizzard games.', '7', '2022-09-21 22:11:27', '44'),
(5, 'Google Pixel 7 on Amazon: prices and official video teaser', 'pixel.jpg', 'In the video, Google focuses on the massive metal camera block of the smartphone and its edges, but does not show the screen. Models were also shown in all three colors: white (Snow), black (Obsidian) and dark green (Hazel). The devices will be presented on October 6, and according to earlier rumors, the price of the minimum Pixel 7 configuration will be $599.', '4', '2022-09-07 22:22:14', '100'),
(6, 'The release date of the first Xiaomi electric car has become known', 'xiaomi.jpg', 'NotebookCheck insiders report that the company\'s first electric car will be a sedan similar to Tesla cars. However, the price will be lower: it is expected to cost less than $30,000, while the cheapest Tesla at the start of sales cost $35,000 (Model 3). It is also known that the novelty will be equipped with the Xiaomi Pilot autopilot, but there is no data on the power reserve and other characteristics. According to the CEO, the first cars will roll off the assembly line as early as 2024.', '1', '2022-09-16 22:28:54', '444'),
(7, 'Study: Apple car is doomed to success', 'applecar.jpg', 'The survey asked US new car owners to rank different car brands in the US market and beyond. Since Apple does not make cars, it was never on this list, but this year the company decided to add it to it. Perhaps this decision was influenced by numerous rumors about the release of the \"apple\" car. Be that as it may, almost a third of Americans are extremely interested in an Apple car.', '1', '2022-09-28 19:33:04', '45'),
(8, 'One developer nearly broke the internet. Why is the web so fragile?', 'developer.jpg', 'On January 8, 2022, Marak updated the libraries: they began to display the word LIBERTY and a meaningless set of unreadable characters in the console. Apparently, the author did it on purpose: back in November 2020, he wrote that he was no longer going to support Fortune 500 companies with his free labor. Now all the changes have been canceled - apparently, we managed to agree with the programmer.', '2', '2022-09-12 22:38:15', '345');

-- --------------------------------------------------------

--
-- Table structure for table `articles_categories`
--

DROP TABLE IF EXISTS `articles_categories`;
CREATE TABLE IF NOT EXISTS `articles_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `title`) VALUES
(1, 'Cars'),
(2, 'Programing'),
(4, 'Gadgets'),
(7, 'Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `text`) VALUES
(1, 'Marek Janik', 'pussydestroer11@gmail.com', 'Remember that one time Nvidia priced their new 4090 like Etherium was still proof of work? Lol, man good times.'),
(2, 'John Smith', 'moydomzona@yandex.com', 'Wow whoever did the design for the 4090 needs a pay raise, it looks completely different to last gen!'),
(3, 'Weep Zukerberg', 'dickinme@hotmail.com', 'I clicked on the link but it seems it\'s an old Kickstarter one from last year. I\'m interested in ordering this, but is this region B locked?  '),
(4, 'My Blog', 'polskoydm@gmail.com', 'DDDD'),
(5, 'Dima Polskoy', 'polskoydm@gmail.com', 'Cool'),
(6, 'LOX', 'polskoydm@gmail.com', 'hkneljnfev'),
(7, 'LOX', 'polskoydm@gmail.com', 'hkneljnfev');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
