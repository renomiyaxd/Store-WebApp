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

/*
// Create database
$sql = "CREATE DATABASE productDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/


//Create table
/*
$sql_create_table = "CREATE TABLE products(
								id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
								productName VARCHAR (30) NOT NULL,
								productVariant VARCHAR (30) NOT NULL,
								image text NOT NULL,
								quantity INT (4),
								price INT(3)
								)";

if(mysqli_query($conn,$sql_create_table))
{
	echo "Table for products created successfully";
}
else
{
	echo "Error creating table: ".mysqli_error($conn);
}
*/

// fill data

$sql_insert_data = "INSERT INTO products(productName,productVariant,image,quantity,price)
								VALUES ('Turbo','Type 2','img7.jpg',1000,600)";

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
