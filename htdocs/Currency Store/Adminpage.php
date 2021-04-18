<html>
      <head>
           <title>Admin's Page</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      </head>
      <body>

        <a align="left">Login as Admin</a>
        <a align="right" href="logout.php">Logout</a>

           <div class="container">
                <br />
                <br />
                <br />
                <div class="table-responsive">
                     <h3 align="center">Product Management System</h3><br />
                     <div id="live_data"></div>
                </div>
           </div>
      </body>
 </html>
 <script>
 $(document).ready(function(){
      function fetch_data()
      {
           $.ajax({
                url:"select.php",
                method:"POST",
                success:function(data){
                     $('#live_data').html(data);
                }
           });
      }
      fetch_data();
      $(document).on('click', '#btn_add', function(){
          var productName = $('#productName').text();
           var productVariant = $('#productVariant').text();
           var image = $('#image').text();
           var quantity = $('#quantity').text();
           var price = $('#price').text();
           if(productName == '')
           {
                alert("Enter Product Name");
                return false;
           }
           if(productVariant == '')
           {
                alert("Enter Product Variant");
                return false;
           }
           if(image == '')
           {
                alert("Enter image file name");
                return false;
           }
           if(quantity == '')
           {
                alert("Enter stock quantity");
                return false;
           }
           if(price == '')
           {
                alert("Enter product Price");
                return false;
           }
           $.ajax({
                url:"insert.php",
                method:"POST",
                data:{productName:productName, productVariant:productVariant, image:image, quantity:quantity, price:price},
                dataType:"text",
                success:function(data)
                {
                     alert(data);
                     fetch_data();
                }
           })
      });
      function edit_data(id, text, column_name)
      {
           $.ajax({
                url:"edit.php",
                method:"POST",
                data:{id:id, text:text, column_name:column_name},
                dataType:"text",
                success:function(data){
                     alert(data);
                }
           });
      }

      //Edit productName ID
      $(document).on('blur', '.productName', function(){
           var id = $(this).data("id1");
           var productName = $(this).text();
           edit_data(id, productName, "productName");
      });

      //Edit productVariant ID
      $(document).on('blur', '.productVariant', function(){
           var id = $(this).data("id2");
           var productVariant = $(this).text();
           edit_data(id, productVariant, "productVariant");
      });

      //Edit image ID
      $(document).on('blur', '.image', function(){
           var id = $(this).data("id3");
           var image = $(this).text();
           edit_data(id,image, "image");
      });

      //Edit quantity ID
      $(document).on('blur', '.quantity', function(){
           var id = $(this).data("id4");
           var quantity = $(this).text();
           edit_data(id,quantity, "quantity");
      });

      //Edit price ID
      $(document).on('blur', '.price', function(){
           var id = $(this).data("id5");
           var price = $(this).text();
           edit_data(id,price, "price");
      });

      //Delete button ID
      $(document).on('click', '.btn_delete', function(){
           var id=$(this).data("id6");
           if(confirm("Are you sure you want to delete this?"))
           {
                $.ajax({
                     url:"delete.php",
                     method:"POST",
                     data:{id:id},
                     dataType:"text",
                     success:function(data){
                          alert(data);
                          fetch_data();
                     }
                });
           }
      });
 });
 </script>
