<?php

$a = rand(100,999);
$otp=$_POST['otp'];
if($a==$otp){
    echo "<script>window.open('password_reset_page','_self')</script>";
}
else{
    echo "<script>alert('Wrong OTP. Please Try Again!!')</script>";
    echo "<script>window.open('otp_page','_self')</script>";
}


?>