<?php
// include database configuration file
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store Shopping Cart</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 50px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
</head>
<body>
  <a align="left">Login as cashier</a>
  <a align="right" href="logout.php">Logout</a>
<div class="container">
    <h1>Currency for Sale</h1>
    <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">
        <?php
        //get rows query
        include "db.php";

        $query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <p class="list-group-item-text"><?php echo '<img width="150px" height="150px" src="'.$row["image"].'">'; ?></p>
                    <p class="list-group-item-text"><?php echo 'ID: '.$row["id"]; ?></p>
                    <h4 class="list-group-item-heading"><?php echo $row["productName"]; ?></h4>
                    <p class="list-group-item-text"><?php echo 'Variant: '. $row["productVariant"]; ?></p>
                    <p class="list-group-item-text"><?php echo $row["quantity"].' units available'; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo 'RM'.$row["price"]; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cashier_process.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>

</body>
</html>
