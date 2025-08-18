<!-- Please remove this line or the signs at the beginning! -->
<form method="post" action="">
    Enter weight in kilograms: <input type="number" name="kg" step="0.01">
    <input type="submit" value="Convert to Grams">
</form>

<?php
// Function to convert kg to g
function kgToG($kg) {
    // 1 kg = 1000 grams
    return $kg * 1000;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the kg value from input
    $kg = $_POST['kg'];

    // Convert kg to grams
    echo $kg . " kg is equal to " . kgToG($kg) . " grams.";
}
?>