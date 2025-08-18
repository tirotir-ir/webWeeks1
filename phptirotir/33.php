<!DOCTYPE html>
<html>
<head>
    <title>Phonebook Entries</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Phonebook Entries</h1>
    <?php
    // Create connection to MySQL server
    $conn = new mysqli("localhost", "root", "", "my_database");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch data from the phonebook table
    $sql = "SELECT id, name, phone_number, email, reg_date FROM phonebook";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in a table
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Phone Number</th><th>Email</th><th>Registration Date</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["phone_number"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["reg_date"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found.";
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
