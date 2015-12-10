CREATE TABLE `workroom`.`jukhadar` (
`user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`username` VARCHAR( 25 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`password` VARCHAR( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`first_name` VARCHAR( 25 ) CHARACTER SET ucs2 COLLATE ucs2_general_ci NOT NULL ,
`last_name` VARCHAR( 25 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`email_addr` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;



------------------------------------------------------------


SELECT jukhadar FROM workroom;


-----------


-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2015 at 11:58 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `workroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `jukhadar`
--

CREATE TABLE `jukhadar` (
  `user_id` int(10) unsigned NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(25) CHARACTER SET ucs2 NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_addr` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jukhadar`
--

INSERT INTO `jukhadar` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email_addr`) VALUES
(1, 'jukhadar', '1234', 'hassan', 'jukhadar', 'hassan.jokhdar@gmail.com'),
(2, 'hossam', '12345', 'hossam', 'ali', 'hossam.ali@gmail.com'),
(3, 'jukhadar', '1234', 'hassan', 'jukhadar', 'hassan.jokhdar@gmail.com'),
(4, 'hossam', '12345', 'hossam', 'ali', 'hossam.ali@gmail.com'),
(5, 'alhajjam', '123456', 'hatun', 'alhajjam', 'hatun.alhajjam@gmail.com'),
(6, 'faisal', '123456', 'faisal', 'jukhadar', 'faisal.ali@gmail.com'),
(7, 'alhajjam', '123456', 'hatun', 'alhajjam', 'hatun.alhajjam@gmail.com'),
(8, 'faisal', '123456', 'faisal', 'jukhadar', 'faisal.ali@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jukhadar`
--
ALTER TABLE `jukhadar`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jukhadar`
--
ALTER TABLE `jukhadar`
  MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
  
  
  
-- Link for database creation 
-- https://phpraxis.wordpress.com/2010/07/17/creating-a-new-database-with-phpmyadmin/


--INNER JOIN 
  
  ---
select * from make inner join model on model.id_make = make.id inner join engine on engine.make = make.id;


--
CREATE TABLE `salesleads` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` int(25) NOT NULL,
  `zip` int(25) NOT NULL,
  `bestWay` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;


--
DROP TABLE salesleads;