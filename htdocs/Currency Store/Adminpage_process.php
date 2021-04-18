<!DOCTYPE html>

<html>

<body>

<?php

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

$productID = $_POST['id'];
$setProductName = $_POST['productname']
$setProductVariant=['productvar']
$setNewQuantity =$_POST['quantity'];
$setPricing =$_POST['price'];

$newuserid=$_POST['newusr'];
$newuserac=$_POST['newac'];
$newuserpwd=$_POST['newpwd'];
$newrole=$_POST['newrol'];

$sql_modify = "UPDATE products SET quantity='$setNewQuantity' WHERE id='$productID'";

$sql_insert_data = "INSERT INTO usernames(salesId,username,password,role)
								VALUES ('$newuserid','$newuserac','$newuserpwd','$newrole')";

if(mysqli_query($conn, $sql_modify))
{
echo "Record updated";
header("Location: Adminpage.php");
	 exit;
}
else
{
echo "Error";
}

mysqli_close($conn);


?>

</body>

</html>
