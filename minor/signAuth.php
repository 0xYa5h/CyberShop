<?php      
    include('conn.php');  
    $username = $_POST['uname1'];  
    $password = $_POST['psw1']; 
    $email = $_POST['email'];
    $cpassword = $_POST['cpsw1'];


    if($password == $cpassword){
        #$sql = "select * from users where username = '$username' and password = '$password'"; 
        $sql = "INSERT INTO `users`( `username`, `password`, `email`) 
                VALUES ('$username','$password','$email')"; 
        $result = mysqli_query($con, $sql);  
        $_SESSION['username'] = $username;
        echo "<script>alert('$username successfully created')</script>";
        echo "<script>window.open('login_registration')</script>";
    }
    else{
        echo "<script>alert('Registration failed!! Password does not match!!!')</script>";
        echo "<script>window.open('login_registration')</script>";
    }     
        
      
    
?>  