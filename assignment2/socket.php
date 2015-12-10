<?php
    $servername = getenv('IP');
    $username = 'jukhadar';
    $password = '';
    $database = 'cars';
    $dbport = 3306;
    
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    
    if ($db->connect_error) {
        die("Unable to connect to MySQL Server:" .$db->connect_error);
    }
    ?>