<?php      
    include('conn.php'); 
        
    $username = $_POST['uname'];  
    $password = $_POST['psw'];
    $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
         
        if($count >= 1){  
            if($username=='admin'){
                echo "<script>alert('You have logged in as $username')</script>";
                echo "<script>window.open('insert_product','_self')</script>" ;
            }
            else{
                $_SESSION['uname'] = $username;
                echo "<script>alert('You have logged in as $username')</script>";
                echo "<script>window.open('account_page.php?usr=$username','_self')</script>" ; 
            }
                           
             
        }  
        else{
            echo "<script>alert('Login failed. Invalid username or password.')</script>";
            echo "<script>window.open('login_registration','_self')</script>" ;           
        }






        
    

?>  