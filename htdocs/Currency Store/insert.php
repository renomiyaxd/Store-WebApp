<?php

$servername = "localhost";
$username = "_ikerin";
$password = "ikerin1031";
$dbname = "shopDB";

//Create Connection
$connect = mysqli_connect($servername,$username,$password,$dbname);
 $sql = "INSERT INTO products(productName, productVariant, image, quantity, price) VALUES('".$_POST["productName"]."', '".$_POST["productVariant"]."', '".$_POST["image"]."', '".$_POST["quantity"]."', '".$_POST["price"]."')";
 if(mysqli_query($connect, $sql))
 {
      echo 'Data Inserted';
 }
 ?>
