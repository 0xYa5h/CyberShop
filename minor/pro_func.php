<?php

$db = mysqli_connect("localhost","root","","cybershop");

function getUserIP(){
  switch (true) {
    case (!empty($_SERVER['HTTP_X_REAL_IP'])) : 
      return $_SERVER['HTTP_X_REAL_IP'];
    case (!empty($_SERVER['HTTP_CLIENT_IP'])) :
      return $_SERVER['HTTP_CLIENT_IP'];
    case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) :
      return $_SERVER['HTTP_X_FORWARDED_FOR'];
    default : return $_SERVER['REMOTE_ADDR'];
    
      
  }  
}


function addCart(){
  global $db;
  if(isset($_GET['add_cart'])){
    $ip_add=getUSerIP();
    $p_id=$_GET['add_cart'];
    $product_qty=$_POST['product_qty'];
    $check_pro = "select * from cart ip_add='$ip_add' AND p_id='$p_id'";
    $run_check=mysqli_query($db,$check_pro);
    if(mysqli_num_rows($run_check) >0){
      echo "<script>alert('This product is already added in cart')</script>";
      echo "<script>window.open('product_details.php?pro_id=$p_id','_self')</script>";

    }else{
      $query="insert into cart(p_id,ip_add,qty) values('$p_id','$ip_add','$product_qty')";
      $run_query=mysqli_query($db,$query);
      echo "<script>alert('Product Successfully Added')</script>";
      echo "<script>window.open('cart.php?pro_id=$p_id','_self')</script>";
    }
  }
}


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

        echo "<form action='product_details.php?add_cart=$pro_id' method='post'>
        <div class='small-container single-product'>
        <div class='row'>
          <div class='col2'>
            <img src='product_images/$pro_img' width='100%' id='productImg' />         
          </div>
          <div class='col2'>
            <h1>$pro_title</h1>
            <h4>INR $pro_price</h4>
            <select name='product_qty'>
              <option>Select Item</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <button type='submit' class='btn'>Add To Cart</button>
            <h3>Product Details</h3>
            <br />
            <p>
              $pro_desc
            </p>
          </div>
        </div>
      </div> 
      </form>";
    }


}

?>