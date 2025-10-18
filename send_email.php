<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize user input
    $name = htmlspecialchars(trim($_POST['contact-name']));
    $email = htmlspecialchars(trim($_POST['contact-email']));
    $message = htmlspecialchars(trim($_POST['contact-message']));

    // Recipient email
    $to = "developerdiya1@mail.com"; // <-- Replace with your email
    $subject = "New Contact Form Message from $name";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p style='color:green;text-align:center;'>✅ Message sent successfully!</p>";
    } else {
        echo "<p style='color:red;text-align:center;'>❌ Something went wrong. Please try again.</p>";
    }

} else {
    echo "Invalid request.";
}
?>
