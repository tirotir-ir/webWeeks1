<?php
// Create connection to MySQL server
$conn = new mysqli("localhost", "root", "");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create a database
$dbname = "my_database";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db($dbname);

// SQL query to create a table
$table_sql = "
CREATE TABLE IF NOT EXISTS phonebook (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

// Execute the query
if ($conn->query($table_sql) === TRUE) {
    echo "Table 'phonebook' created successfully or already exists.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
