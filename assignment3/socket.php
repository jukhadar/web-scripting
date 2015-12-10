<?php
    $host = getenv('IP');
    $user = 'jukhadar';
    $pass = "";
    $db = "cars";
    $port = 3306;

    // Create connection
    $connection = mysqli_connect($host, $user, $pass, $db, $port)
    or die(mysql_error());
    
    if (!$connection){
	die('Could not connect: '. mysql_error());
}
?>