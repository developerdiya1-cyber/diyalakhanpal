<?php
// Include the database connection
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form inputs
    $name = $conn->real_escape_string($_POST['contact-name']);
    $email = $conn->real_escape_string($_POST['contact-email']);
    $message = $conn->real_escape_string($_POST['contact-message']);

    // Insert the message into the database
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to thankyou.php with the name as a GET parameter
        $name_encoded = urlencode($name);
        header("Location: thankyou.php?name=$name_encoded");
        exit();
    } else {
        // Error message if something goes wrong
        echo "<div style='color:red; font-size:16px; padding:10px;'>
                Error: " . $conn->error . "
              </div>";
    }

    // Close the database connection
    $conn->close();
}
?>
