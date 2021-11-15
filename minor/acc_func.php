<?php


$db = mysqli_connect("localhost","root","","cybershop");

function getUser(){
        global $db;
        if (isset($_GET['u_id'])){
            $u_id=$_GET['u_id'];
            $get_userInfo="select * from users where u_id='$u_id'";
            $userInfo=mysqli_query($db,$get_userInfo);
            $row_product=mysqli_fetch_array($userInfo);
            $username=$row_product['username'];
            $email=$row_product['email']; 
            $f_name=$row_product['first_name'];
            $l_name=$row_product['last_name'];
            $contact=$row_product['phone'];
            $address=$row_product['address'];
            $pincode=$row_product['pincode'];
            
            

            echo " 
            <div class='account-section'>
            <div class='column left'>
            <img class='profile-pic' src='images\user-3.png' id='photo' />
            <input type='file' id='file' />
            <label for='file' id='uploadBtn'>Choose Photo</label>
            <br />
            <br />
            <h1><b>$username</b></h1>
            <h1><b>$f_name $l_name</b></h1>
            <h1><b>$contact</b></h1>
            </div>
            <div class='column right'>
            <form class='form' method='post' action='acc.php'>
            <br />
            <input value='$username'  name='username' readonly />
            <input value='$f_name' type='text' name='fname' required placeholder='First Name' />
            <input value='$l_name' type='text' name='lname' required placeholder='Last Name' />
            <br />
            <br />
            <input value='$email'  name='email'  readonly/>
            <br />
            <br />
            <input value='$contact' type='text' name='contact' required placeholder='Contact' />
            <br />
            <br />
            <input value='$pincode' type='text' name='pincode' required placeholder='Pin Code' />
            <input  type='text' name='address' required placeholder='Address' value='$address'/>
            <button type='submit' class='btn'>Update</button>
             </form>
          </div>
          </div>
          </div>
            ";
            


        }  
    }  
    
       
    


?>