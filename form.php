<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$massage =$_POST['message'];

$email_from = 'farahaiman548@gmail.com';

$email_subject = " New Form Submission";

$email_body = "User Name: $name.\n". 
                "User Email: $visitor_email.\n". 
                   "User Message: $massage.\n";


$to = "aiman432@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: contact-php.html");                
?>