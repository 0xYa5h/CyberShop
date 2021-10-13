<?php
$to_email = "ctf.yash@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: kapoor003yash@gmail.om";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email send failed...".error_get_last();
}