<?php
$servername = "localhost";
$username = "_ikerin";
$password = "ikerin1031";
$dbname = "shopDB";

//Create Connection
$connect = mysqli_connect($servername,$username,$password,$dbname);
 $sql = "DELETE FROM products WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $sql))
 {
      echo 'Data Deleted';
 }
 ?>
