<?php
// Initialize variables
$name = $subject = $email = $message = "";
$formSubmitted = false;

// Process the form when it's submitted via AJAX
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['subject'], $_POST['email'], $_POST['message'])) {
    // Sanitize and collect form data
    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['subject']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    $to = "psyalchemy22@gmail.com"; 
    $headers = "From: $email";
    $body = "Name: $name\nSubject: $subject\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        // Return success response
        echo json_encode(['status' => 'success', 'message' => 'Thank you for contacting us!']);
    } else {
        // Return failure response
        echo json_encode(['status' => 'error', 'message' => 'Oops! Something went wrong. Please try again later.']);
    }
    exit();
}
?>