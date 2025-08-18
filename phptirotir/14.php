<!-- Please remove this line or the signs at the beginning! -->
<form method="post" action="">
    Enter first number: <input type="number" name="num1" step="0.01"><br>
    Enter second number: <input type="number" name="num2" step="0.01"><br>
    <input type="submit" value="Calculate">
</form>

<?php
// Function to calculate the sum of two numbers
function calculate($num1, $num2) {
    return $num1 + $num2; // You can change this to any other operation: -, *, /, etc.
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the two numbers from input
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Perform the calculation and display the result
    echo "The sum of " . $num1 . " and " . $num2 . " is: " . calculate($num1, $num2);
}
?>