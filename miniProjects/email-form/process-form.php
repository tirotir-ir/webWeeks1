<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $to = "recipient@example.com"; // Replace with the recipient's email address
    $subject = "Contact Form Submission";
    $message = "Name: $name\nEmail: $email";

    if (mail($to, $subject, $message)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
