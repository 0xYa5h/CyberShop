<?php      
    include('conn.php');  
    $username = $_POST['uname'];  
    $password = $_POST['psw'];  
      
        
      
        $sql = "select * from userinfo where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
         
        if($count >= 1){  
            header("location: http://localhost/CyberShop/CyberShop/minor/index.html");
             
        }  
        else{ 
            echo "<h2> ". $count  ; 
            echo "<h1> Login failed. Invalid username or password.</h1>";
            
        }     
?>  