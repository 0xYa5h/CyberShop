<?php
$db = mysqli_connect("localhost","root","","cybershop");
            
            


        $username=$_POST['username'];
        $f_name=$_POST['fname'];
        $l_name=$_POST['lname'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $pincode=$_POST['pincode'];
        $get_userInfo="select * from users where username='$username'";
        $userInfo=mysqli_query($db,$get_userInfo);
        $row_product=mysqli_fetch_array($userInfo);
        $u_id=$row_product['u_id'];

        $sql = "UPDATE users SET  first_name='$f_name', last_name='$l_name' , address='$address', phone='$contact',pincode='$pincode' WHERE username='$username'";
        $result = mysqli_query($db, $sql); 
        echo "<script>alert('Information Upated!!!')</script>";

        echo "<script>window.open('account_page.php?=u_id=$u_id','_self')</script>"

    

?>