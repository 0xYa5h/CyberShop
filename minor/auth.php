<?php      
    include('conn.php');  
    $username = $_POST['uname'];  
    $password = $_POST['psw'];
      
        
      
        $sql = "select * from userinfo where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
         
        if($count >= 1){  
            $_SESSION['uname'] = $username;
            $_SESSION['success'] = "You have logged in!";
            header("location: index");            
             
        }  
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";            
        }     
?>  