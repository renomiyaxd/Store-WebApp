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
$dbname = "adminDB";

//Create Connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//Check Connection
if (!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}

echo "Connected Successfully";

$sql_insert_data = "INSERT INTO usernames(salesId,username,password)
								VALUES ('usr101','access1001','abcde123')";

if(mysqli_query($conn,$sql_insert_data))
{
	echo "Record Inserted";

mysqli_close($conn);

?>

</body>

</html>
