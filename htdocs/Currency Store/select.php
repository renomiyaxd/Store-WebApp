<?php
$servername = "localhost";
$username = "_ikerin";
$password = "ikerin1031";
$dbname = "shopDB";

//Create Connection
$connect = mysqli_connect($servername,$username,$password,$dbname);
 $output = '';
 $sql = "SELECT * FROM products ORDER BY id DESC";
 $result = mysqli_query($connect, $sql);
 $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">
                <tr>
                     <th width="10%">Id</th>
                     <th width="20%">Product Name</th>
                     <th width="20%">Product Variant</th>
                     <th width="10%">Image File Name</th>
                     <th width="10%">Stock Quantity</th>
                     <th width="10%">Price</th>
                     <th width="10%">Delete</th>
                </tr>';
 if(mysqli_num_rows($result) > 0)
 {
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td>'.$row["id"].'</td>
                     <td class="productName" data-id1="'.$row["id"].'" contenteditable>'.$row["productName"].'</td>
                     <td class="productVariant" data-id2="'.$row["id"].'" contenteditable>'.$row["productVariant"].'</td>
                     <td class="image" data-id3="'.$row["id"].'" contenteditable>'.$row["image"].'</td>
                     <td class="quantity" data-id4="'.$row["id"].'" contenteditable>'.$row["quantity"].'</td>
                     <td class="price" data-id5="'.$row["id"].'" contenteditable>'.$row["price"].'</td>
                     <td><button type="button" name="delete_btn" data-id6="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>
                </tr>
           ';
      }
      $output .= '
           <tr>
                <td></td>
                <td id="productName" contenteditable></td>
                <td id="productVariant" contenteditable></td>
                <td id="image" contenteditable></td>
                <td id="quantity" contenteditable></td>
                <td id="price" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
           </tr>
      ';
 }
 else
 {
      $output .= '<tr>
                          <td colspan="4">Data not Found</td>
                     </tr>';
 }
 $output .= '</table>
      </div>';
 echo $output;
 ?>
