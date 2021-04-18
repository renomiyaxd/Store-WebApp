<?php
$servername = "localhost";
$username = "_ikerin";
$password = "ikerin1031";
$dbname = "shopDB";

//Create Connection
$connect = mysqli_connect($servername,$username,$password,$dbname);
 $id = $_POST["id"];
 $text = $_POST["text"];
 $column_name = $_POST["column_name"];
 $sql = "UPDATE products SET ".$column_name."='".$text."' WHERE id='".$id."'";
 if(mysqli_query($connect, $sql))
 {
      echo 'Data Updated';
 }
 ?>
