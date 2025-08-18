<!-- Please remove this line or the signs at the beginning! -->
<form method="post" action="">
    Enter your name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the name from input
    $name = htmlspecialchars($_POST['name']);

    // Greet the user
    echo "Hello, " . $name . "!";
}
?>
