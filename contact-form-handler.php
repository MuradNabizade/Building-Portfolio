<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message= $_POST['message'];

$email_from='mnabizade2001@gmail.com';
$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User suggestion: $message.\n".

$to="mnabizade2001@gmail.com";

$headers="From: $email_from \r\n";
$headers .="Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");

?>