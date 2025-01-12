<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the input data
    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['subject']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check if all fields are filled
    if (empty($name) || empty($subject) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Email configuration
    $to = "your-email@example.com";  // Replace with your email
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Prepare the email content
    $email_subject = "New Contact Form Submission: " . $subject;
    $email_body = "<html><body>";
    $email_body .= "<h2>New Message</h2>";
    $email_body .= "<p><strong>Name:</strong> " . $name . "</p>";
    $email_body .= "<p><strong>Email:</strong> " . $email . "</p>";
    $email_body .= "<p><strong>Subject:</strong> " . $subject . "</p>";
    $email_body .= "<p><strong>Message:</strong></p>";
    $email_body .= "<p>" . nl2br($message) . "</p>";
    $email_body .= "</body></html>";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you for contacting us. We will get back to you shortly!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>