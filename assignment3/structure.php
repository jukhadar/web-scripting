<?php

    class Structure {
        
        function header($title)
        {
            $result =
                "<!DOCTYPE html>
                    <html>
                        <head>
                            <meta charset='UTF-8'>
                            <title>".$title."</title>
                            <link rel='stylesheet' type='text/css' href='styles.css'>
                        </head>
                        <body>";
                        
            return $result;
        }
        
        function footer()
        {
            $result =
                    '</body>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                    <script src="scripts.js"></script>
                </html>';
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