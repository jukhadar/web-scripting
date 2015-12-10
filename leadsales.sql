--
CREATE TABLE `salesleads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25),
  `email` varchar(32),
  `phone` varchar(255),
  `zip` int(25),
  `bestWay` varchar(25),
  `make` varchar(25),
  `model` varchar(25),
  `engine` varchar(25),
  PRIMARY KEY (ID)
) 



--
DROP TABLE salesleads;

--
INSERT INTO `cars`.`salesleads` (`id`, `name`, `email`, `phone`, `zip`, `bestWay`, `make`, `model`, `engine`) VALUES ('', 'hossam', 'hossam.jokhdar@gmail.com', '5308828', '85024', 'email', 'Mazda', 'Tribute', 'V-8');

--
INSERT INTO `cars`.`salesleads` (`id`, `name`, `email`, `phone`, `zip`, `bestWay`, `make`, `model`, `engine`) VALUES ('Hassan', 'hassan.jokhdar@gmail.com', '5204403829', '85023', 'email', 'Mazda', 'Tribute', 'V-8');s