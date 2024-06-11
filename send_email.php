<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "kpandharikarcs@gmail.com"; // Change this to your email address
    $subject = "New Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?> -->
