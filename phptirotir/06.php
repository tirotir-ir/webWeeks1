<form method="post" action="">
    Enter a number (1-7) for the day of the week: <input type="number" name="day">
    <input type="submit" value="Submit">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the day number from input
    $day = $_POST['day'];

    // Switch case to determine the day of the week
    switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid day number";
    }
}
?>
