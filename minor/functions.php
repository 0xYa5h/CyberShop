<?php

$db = mysqli_connect("localhost","root","","cybershop");
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