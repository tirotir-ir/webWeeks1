<?php
// Check if form data is sent using GET method
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name'])) {
    // Get the name from the GET input and sanitize it
    $name = htmlspecialchars($_GET['name']);

    // Display a greeting message
    echo "Hello, " . $name . "!";
} else {
    echo "No data submitted.";
}
?>
