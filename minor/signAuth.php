<?php      
    include('conn.php');  
    $username = $_POST['uname1'];  
    $password = $_POST['psw1']; 
    $email = $_POST['email'];
    $cpassword = $_POST['cpsw1'];


    if($password == $cpassword){
        $sql = "select * from userinfo where username = '$username' and password = '$password'"; 
        $sql = "INSERT INTO `userinfo` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email')"; 
        $result = mysqli_query($con, $sql);  
        $_SESSION['username'] = $username;
  	    $_SESSION['success'] = "You are now Sign in";
        header("location: http://localhost/CyberShop/CyberShop/minor/index.html");
    }
    else{
        echo "<h2> Registration failed!! Password does not match!!!</h2>";
        header("location: http://localhost/CyberShop/CyberShop/minor/login_registration.html");
    }     
        
      
    
?>  