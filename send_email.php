<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $service = $_POST['service'];

    // Your email address where you want to receive the form data
    $to = "plrauser1111@gmail.com"; // Replace with your email
    $headers = "From: " . $email;
    $message = "Name: " . $name . "\nEmail: " . $email . "\nSubject: " . $subject . "\nService: " . $service;

    // Send the email
    if (mail($to, "New Contact Form Submission", $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message!";
    }
}
?>
