<?php
// Only run this code when the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Clean and prepare the form inputs
    $firstName = htmlspecialchars(trim($_POST["firstName"]));
    $lastName  = htmlspecialchars(trim($_POST["lastName"]));
    $email     = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message   = htmlspecialchars(trim($_POST["message"]));

    // Make sure all required fields are filled in
    if (empty($firstName) || empty($lastName) || empty($email) || empty($message)) {
        echo "<p>Error: All fields are required.</p>";
        exit;
    }

    // Validate the email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Error: Invalid email address.</p>";
        exit;
    }

    // Email details
    $to = "info@bakery.com";
    $subject = "New Contact Form Message";

    // Build the email message
    $body  = "Name: $firstName $lastName\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Set email header
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $body, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message Sent</title>
</head>
<body>

<!-- Confirmation message after successful submission -->
<h1>Thank You! 🎉</h1>
<p>Your message has been sent successfully.</p>

<!-- Display the submitted information -->
<p><strong>Name:</strong> <?= $firstName . " " . $lastName ?></p>
<p><strong>Email:</strong> <?= $email ?></p>
<p><strong>Message:</strong><br><?= nl2br($message) ?></p>

<!-- Link to return to the form -->
<a href="index.php">Send another message</a>

</body>
</html>
