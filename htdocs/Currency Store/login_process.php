<!DOCTYPE html>
<html>
<body>
<h2>

<?php

// Login Setup

$number_1 = $_REQUEST['number_1'];
//$number_1 = "access1003";
//$number_2 = "abcde125";
$number_2 = $_REQUEST['number_2'];
include "db.php";

// Use an If Conditional with boolean AND operator

$sql_check= "SELECT * FROM usernames WHERE username='$number_1'";
$result= mysqli_query($db,$sql_check);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if ($number_2==$row['password']){
        echo "Login Accepted";
        if($row['role']=="admin"){
          header("Location: Adminpage.php");
                                 }
        elseif($row['role']=="cashier") {
          header("Location: Cashierpage.php");
                                        }
                                      }
      else {
            echo "Access Denied";
            }




                                            }
                                  }
else {
    echo "0 results";
}

/*
if($number_1 == "usr1001"
    && $number_2 == "jinako12345")
 { echo "Login Accepted as Cashier";}
elseif ($number_1=="adm1001" && $number_2 =="bbchan12345")
{ echo "Login accepted as Admin";
  header("Location: Adminpage.php");
     exit;}
else {echo "Access Denied!"; }
*/

?>
</h2>
</body>

</html>
