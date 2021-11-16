<?php

$db = mysqli_connect("localhost","root","","cybershop");


function cartDisplay(){

    global $db;
    $get_cartInfo="select * from cart";
    $cartInfo=mysqli_query($db,$get_cartInfo);
    
    while ($row_product=mysqli_fetch_array($cartInfo)){
        $p_id=$row_product['p_id'];
        $qty=$row_product['qty'];
        $c_id=$row_product['cart_id'];
        $price=givePrice();
        $p_image=giveimage();
        $tot=$qty * $price;
        $p_title=givetitle();
        $tax= 30;
        $total=$tax+$tot;

        echo "
        <div class='small-container cart-page'>
      <table class='table' style='width: 100%'>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class='cart-info'>
              <img src='product_images/$p_image' />
              <div>
                <p>$p_title</p>
                <small>Price:INR $price</small>
                <br />
              </div>
            </div>
          </td>
          <td><input value='$qty'  readonly/></td>

          <td>INR $tot</td>
        </tr>
      </table>

      
    </div>
    <form class='form' method='post' action='order.php?cart_id=$c_id'>
    <div class='total-price'>
        <table>
          <tr>
            <td>Subtotal</td>
            <td>INR $tot</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>INR $tax</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>INR $total</td>
          </tr>
          </table>
         <br>
         </div>   
          <button type='submit' class='btn' width='100px'>Place Order</button>   
             
       
      
      </form>
      
        ";


    }

}



function givePrice(){
    global $db;
    if(isset($_GET['pro_id'])){
        $pr_id=$_GET['pro_id'];
        $get_cartInfo="select * from products where pro_id=$pr_id";
        $cartInfo=mysqli_query($db,$get_cartInfo);    
        $row_product=mysqli_fetch_array($cartInfo);
        $p_price=$row_product['pro_price'];    
        return $p_price;
    } 
}
function giveimage(){
    global $db;
    if(isset($_GET['pro_id'])){
        $pr_id=$_GET['pro_id'];
        $get_cartInfo="select * from products where pro_id=$pr_id";
        $cartInfo=mysqli_query($db,$get_cartInfo);    
        $row_product=mysqli_fetch_array($cartInfo);
        $p_image=$row_product['pro_img'];    
        return $p_image;
    } 
  }
  function givetitle(){
    global $db;
    if(isset($_GET['pro_id'])){
        $pr_id=$_GET['pro_id'];
        $get_cartInfo="select * from products where pro_id=$pr_id";
        $cartInfo=mysqli_query($db,$get_cartInfo);    
        $row_product=mysqli_fetch_array($cartInfo);
        $p_title=$row_product['pro_title'];    
        return $p_title;
}
  }



?>



