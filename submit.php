<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it to avoid security issues
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // You can process the form data here (e.g., save to a database or send email)

    // For now, just display the submitted data as an example
    echo "<h2>Message Sent Successfully!</h2>";
    echo "<p><strong>Your Name:</strong> $name</p>";
    echo "<p><strong>Your Email:</strong> $email</p>";
    echo "<p><strong>Your Message:</strong> $message</p>";

    // Example: Sending an email (optional, just for demonstration)
    // If you want to send the message to your email address:
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Uncomment the line below to send an email (you'll need a working mail server)
    // mail($to, $subject, $body, $headers);
} else {
    echo "<p>Invalid request. Please submit the form properly.</p>";
}
?>
