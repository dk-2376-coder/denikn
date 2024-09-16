<?php
$to = "denisngugi2376@gmail.com";  
$subject = "Test Email from Laragon";
$message = "This is a test email sent from Laragon.";
$headers = "From: denisngugi2376@gmail.com";  

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
?>
