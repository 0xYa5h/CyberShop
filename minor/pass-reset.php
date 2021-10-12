<?php
if($_POST['email'])
{
    include "conn.php";
    $emailId = $_POST['email'];
    $sql = "select * from userinfo where email = '$emailId'";
    $result = mysqli_query($con, $sql); 
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($row)
    {
        $otp = rand(100,999);
        require_once('phpmail/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
        $mailIsSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = "ctf.yash@gmail.com";
        $mail->Password = "Rishu@123";
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "465";
        $mail->From='ctf.yash@gmail.com';
        $mail->FromName='Admin CyberShop';
        $mail->AddAddress('reciever_email_id', 'reciever_name');
        $mail->Subject  =  'Reset Password';
        $mail->IsHTML(true);
        $mail->Body = "OTP for password reseting".$otp.'';
        if($mail->Send())
        {
            echo "Check your Email for otp";
        }
        else{
            echo "Mail Error - >".$mail->ErrorInfo;
        }
        
    }
    else{
        echo "Invalid Email Address";
    }


}
?>