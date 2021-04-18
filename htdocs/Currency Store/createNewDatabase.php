<!DOCTYPE html>
<html>

<title>
Database
</title>

<body>

<?php

//Server. The username and password has to be your own
$servername = "localhost";
$username = "_ikerin";
$password = "ikerin1031";

// Create connection to database
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database for admin use
$sql = "CREATE DATABASE adminDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Create database for admin use
$sql = "CREATE DATABASE shopDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>

</body>

</html>
