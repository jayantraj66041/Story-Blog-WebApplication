-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 08:23 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `story`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_password` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_email`, `a_password`) VALUES
(1, 'admin', 'jayant');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `p_id` int(11) NOT NULL,
  `p_header` varchar(200) NOT NULL,
  `p_para1` varchar(250) NOT NULL,
  `p_para2` varchar(250) NOT NULL,
  `p_para3` varchar(250) NOT NULL,
  `p_para4` varchar(250) NOT NULL,
  `p_para5` varchar(250) NOT NULL,
  `p_para6` varchar(250) NOT NULL,
  `p_para7` varchar(250) NOT NULL,
  `p_para8` varchar(250) NOT NULL,
  `p_para9` varchar(250) NOT NULL,
  `p_para10` varchar(250) NOT NULL,
  `p_doc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `p_header`, `p_para1`, `p_para2`, `p_para3`, `p_para4`, `p_para5`, `p_para6`, `p_para7`, `p_para8`, `p_para9`, `p_para10`, `p_doc`) VALUES
(5, 'sample 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'vvvLorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehen', '', '', '', '', '', '2018-11-14 05:38:15'),
(6, 'sample 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', '', '', '', '', '', '2018-11-14 05:38:15'),
(7, 'sample 4 ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', '', '', '', '', '', '2018-11-14 05:38:15'),
(8, 'sample 5 ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', '', '', '', '', '', '2018-11-14 05:38:15'),
(9, 'sample 6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', '', '', '', '', '', '2018-11-14 05:38:15'),
(11, 'sample 8 ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', '', '', '', '', '', '2018-11-14 05:38:15'),
(12, 'sample 9', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum, error eveniet ducimus quidem nemo! Ab quaerat, minus tenetur! Corrupti nisi placeat eos debitis quo dolores commodi veritatis deserunt adipisci assumenda, sit. Reprehender', '', '', '', '', '', '2018-11-14 05:38:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
