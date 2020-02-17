<?php
/* Database connection settings */
$host = 'localhost';
$user = 'hashichemnad';
$pass = 'a';
$db = 'microdegree';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$connect = mysqli_connect($host, $user, $pass, $db); #connect database


?>