<?php
$dbhost							= "localhost";
$dbuser							= "root";
$dbpass							= "root";
$dbname							= "megts";

$connection = mysqli_connect($dbhost,$dbuser,$dbpass) or die ("Mysql connection error");
mysqli_select_db($connection,$dbname) or die ("Database Connection Error");
?>