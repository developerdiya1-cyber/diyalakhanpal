<?php
$host = "localhost";
$user = "root"; // Your DB username
$password = ""; // Your DB password
$dbname = "diya_portfolio";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
