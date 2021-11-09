<?php
include("conn.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert Product</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/
bootstrap.min.css"
    />

    <script
      src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"
      referrerpolicy="origin"
    ></script>
    <script>
      tinymce.init({ selector: "textarea" });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
"
      rel="stylesheet"
      integrity="
sha384-wvfXpqpZzVQGK6TAH5PVIGO FQNHSOD2xbE+QkPXCAFINEEVOEH31esibVCOQVnN"
      crossorigin="
anonymous"
    />
  </head>
  <body>
    <div class="row">
      <!-- breadcrumb row start -->
      <div class="col-lg-12">
        <div class="breadcrumb">
          <li class="active">
            <img
              src="https://img.icons8.com/ios-glyphs/30/000000/dashboard.png"
            />
            Dashboard / Insert Product
          </li>
        </div>
      </div>
    </div>
    <!-- breadcrumb row end-->

    <!-- pannel row start -->
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="pannel pannel-default">
          <div class="pannel-heading">
            <!-- pannel heading start -->
            <h3 class="pannel-title"><i> </i> Insert Product</h3>
          </div>
          <!-- pannel heading end-->
          <div class="pannel-body">
            <form
              class="form-horizontal"
              method="post"
              action=""
              ,
              enctype="multipart/form-data"
            >
              <div class="form-group">
                <label class="col md-3 control-label"> Product Title </label>
                <input
                  type="text"
                  name="product_title"
                  class="form-control"
                  required=""
                />
              </div>
                           
              <div class="form-group">
                <label class="col md-3 control-label"> Product Image  </label>
                <input
                  type="file"
                  name="product_img"
                  class="form-control"
                  required=""
                />
              
              <div class="form-group">
                <label class="col md-3 control-label"> Product Price </label>
                <input
                  type="text"
                  name="product_price"
                  class="form-control"
                  required=""
                />
              </div>
             
              <div class="form-group">
                <label class="col md-3 control-label">
                  Product Description
                </label>
                <textarea
                  name="product_desc"
                  class="form-control"
                  rows="6"
                  cols="19"
                ></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Insert Product" 
                 class = "btn btn-primary form-control">
              </div>  
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>

    <!-- breadcrumb row end-->
  </body>
</html>

<?php

if (isset($_POST['submit'])){
  $product_title=$_POST['product_title'];
  $product_price=$_POST['product_price'];
  $product_desc=$_POST['product_desc'];

  $product_img=$_FILES['product_img']['name'];
  $tmp_name=$_FILES['product_img']['tmp_name'];

  move_uploaded_file($tmp_name,"product_images/$product_img");

  $insrt_product="insert into products(date,pro_title,pro_img,pro_price,pro_detail) values( NOW() ,'$product_title','$product_img','$product_price','$product_desc')";

  $run_product=mysqli_query($con,$insrt_product);
  if($run_product){
    echo " <script>alert('Product Inserted Successfully')</script>";
    echo "<script>window.open('insert_product.php')</script>";
  }
  else{
    echo "<script>alert('error')</script>";
  }

}

?>
