<?php
$dbHost = 'localhost';
$dbUsername = '_ikerin';
$dbPassword = 'ikerin1031';
$dbName = 'shopDB';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
?>
