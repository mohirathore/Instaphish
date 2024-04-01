<?php
$to = "rathoremohi17@gmail.com";
$subject = "read this message";
$message = "I Love You Mohi";
$sender_email = "shivangishweta16@gmail.com";
$sender_name = "Shivangi";

$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_name <$sender_email>\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>

