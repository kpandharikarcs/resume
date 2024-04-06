<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Your email address where you want to receive the message
    $to = "kpandharikar@crimson.ua.edu";
    
    // Subject of the email
    $subject = "New Message from Contact Form";
    
    // Compose the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";
    
    // Send the email
    mail($to, $subject, $body);
    
    // Redirect back to the contact form with a success message
    header("Location: contact.html?status=success");
    exit;
} else {
    // Redirect back to the contact form with an error message
    header("Location: contact.html?status=error");
    exit;
}
?>
