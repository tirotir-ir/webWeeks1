<?php
// Create connection to MySQL server
$conn = new mysqli("localhost", "root", "", "my_database");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$name = htmlspecialchars($_POST['name']);
$phone_number = htmlspecialchars($_POST['phone_number']);
$email = htmlspecialchars($_POST['email']);

// SQL query to insert data into the phonebook table
$sql = "INSERT INTO phonebook (name, phone_number, email) VALUES (?, ?, ?)";

// Prepare and bind
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $phone_number, $email);

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
