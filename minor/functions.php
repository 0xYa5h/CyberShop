<?php

$db = mysqli_connect("localhost","root","","cybershop");

  

//for getting user IP start
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
      echo "<script>window.open('product_details.php?pro_id=$p_id','_self')</script>";
    }
  }
}



function getPro(){
    global $db;
    $get_product="select * from products order by 1  LIMIT 0,3";
    $run_products=mysqli_query($db,$get_product);
    
    echo "<h2 class='title'>Latest Products</h2>";
    
    while ($row_product=mysqli_fetch_array($run_products)){
        $pro_id=$row_product['pro_id'];
        $pro_title=$row_product['pro_title'];
        $pro_price=$row_product['pro_price'];
        $pro_img=$row_product['pro_img'];
        $pro_desc=$row_product['pro_detail'];

        echo "<div class='small-container'>
        <div class='row'>
          <div class='col4'>
            <a href='product_details.php?pro_id=$pro_id'><img src='product_images/$pro_img' /></a>
            <a href='product_details.php?pro_id=$pro_id'><h4>$pro_title</h4></a>
            <div class='rating'>&#11088; &#11088; &#11088; &#11088;</div>
            <p>INR $pro_price</p>
          </div>       
          
        </div>
      </div>";
    }


}



?>