<?php

session_start();

//$host = "localhost";
//$user = "root";
//$password = "";
//$dbname = "foremost";

$host = "sql6.freemysqlhosting.net";
$user = "sql6450823";
$password = "bq5uI3Pkbc";
$dbname = "sql6450823";


$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

?>