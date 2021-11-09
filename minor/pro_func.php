<?php

$db = mysqli_connect("localhost","root","","cybershop");
function getPro(){
    global $db;
    if (isset($_GET['pro_id'])){
        $pro_id=$_GET['pro_id'];
        $get_product="select * from products where pro_id='$pro_id'";
        $run_products=mysqli_query($db,$get_product);
        $row_product=mysqli_fetch_array($run_products);
        $pro_title=$row_product['pro_title'];
        $pro_price=$row_product['pro_price'];
        $pro_img=$row_product['pro_img'];
        $pro_desc=$row_product['pro_detail'];

        echo "<div class='small-container single-product'>
        <div class='row'>
          <div class='col2'>
            <img src='product_images/$pro_img' width='100%' id='productImg' />         
          </div>
          <div class='col2'>
            <h1>$pro_title</h1>
            <h4>INR $pro_price</h4>
            <select>
              <option>Select Item</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <input type='number' value='1' />
            <a href='cart.html' class='btn'>Add To Cart</a>
            <h3>Product Details</h3>
            <br />
            <p>
              $pro_desc
            </p>
          </div>
        </div>
      </div> ";
    }


}

?>