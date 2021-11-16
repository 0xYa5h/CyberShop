<?php

$db = mysqli_connect("localhost","root","","cybershop");
function deleteCart(){
    global $db;
    if(isset($_GET['cart_id'])){
        $c_id=$_GET['cart_id'];
        $delete_pro = "delete from cart where cart_id='$c_id'";
        $run_check=mysqli_query($db,$delete_pro);
    }
}

?>