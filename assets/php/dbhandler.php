<?php

$server_name = 'localhost';
$username = 'root';
$password = '';
$dbname = '0342518db';

$conn = new mysqli($server_name, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "<script> console.log('dbhandler encountered a fatal error')</script>";
    die('Connection failed: ' .  $conn->connect_error);
} else {
    echo "<script> console.log('PHP: dbhandler successfully connected')</script>";
}