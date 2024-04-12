<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cmc_db";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

 
?>
