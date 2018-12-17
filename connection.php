<?php

$host = "127.0.0.1";
$username = "root";
$password = ""; //no password
$database = "connect2you";


$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection){
  die('Not able to connect to the database');
}
