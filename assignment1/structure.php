<?php
    
    class structure
    {
        public function header()
        {
            $result = 
            "<!DOCTYPE html>
            <html>
            <head>
            <meta charst='UTF-8'>
            <title>Advanced</title>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
            <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' integrity='sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==' crossorigin='anonymous'>
            <link href='style.css' rel='stylesheet'>
            </head>
            <body>
            <p>This is coming from the header.</p>";
            
            return $result;
            
            
        }
        
        public function footer()
        {
            $result =
            "<p>This a footer</p>
            </body>
            </html>
            ";
            
            return $result;
        }
    }

?>

<!-- Classes will be in the quiz next week -->

<!--# start MySQL. Will create an empty database on first start-->
<!--$ mysql-ctl start-->
<!--# run the MySQL interactive shell-->
<!--$ mysql-ctl cli-->
<!--mysql> select @@hostname;-->
<!--SELECT * FROM jukhadar;-->
<!--# stop MySQL-->
<!--$ mysql-ctl stop-->


<!--CREATE DATABASE cars;-->
<!--SELECT * FROM cars;-->
<!--USE cars;-->

<!--CREATE TABLE `workroom`.`jukhadar` (-->
<!--`user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,-->
<!--`username` VARCHAR( 25 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,-->
<!--`password` VARCHAR( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,-->
<!--`first_name` VARCHAR( 25 ) CHARACTER SET ucs2 COLLATE ucs2_general_ci NOT NULL ,-->
<!--`last_name` VARCHAR( 25 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,-->
<!--`email_addr` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL-->
<!--) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;-->








