<!DOCTYPE html>
<html>

<title>
Database
</title>

<body>

<?php

// Login Setup


$servername = "localhost";
$username = "_ikerin";
$password = "ikerin1031";
$dbname = "shopDB";

//Create Connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//Check Connection
if (!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}

echo "Connected Successfully";

// Create database

/*
$sql = "CREATE DATABASE adminDB";
if ( mysqli_query($conn,$sql))
{
	echo "Database created successfully";
}

else
{
	echo "Error: ".mysqli_error($conn);
}
*/

//Create table
$sql_create_table = "CREATE TABLE usernames(
								regid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
								salesId VARCHAR (15) NOT NULL,
								username VARCHAR (15) NOT NULL,
								password VARCHAR (15) NOT NULL
								)";

if(mysqli_query($conn,$sql_create_table))
{
	echo "Table for salesId created successfully";
}
else
{
	echo "Enter creating table: ".mysqli_error($conn);
}


$sql_insert_data = "INSERT INTO usernames(salesId,username,password)
								VALUES ('usr003','access1003','abcde125')";

if(mysqli_query($conn,$sql_insert_data))
{
	echo "Record Inserted";
}
else
{
	echo "Error inserting data";
}

mysqli_close($conn);

?>

</body>

</html>
