<?php
echo(abs(-6.7));  // returns absolute value of -6.7
echo ("<br>");

echo(sqrt(64));  // returns square root of 64
echo ("<br>");

echo(round(0.60));  // rounds 0.60 to nearest integer
echo ("<br>");

echo(round(0.49));  // rounds 0.49 to nearest integer
echo ("<br>");

echo(rand());  // generates random number
echo ("<br>");

echo(rand(10, 100));  // generates random number between 10 and 100
echo ("<br>");

echo "Today is " . date("Y/m/d") . "<br>";  // returns current date in Y/m/d format
echo "Today is " . date("Y.m.d") . "<br>";  // returns current date in Y.m.d format
echo "<br>";

echo(min(0, 150, 30, 20, -8, -200));  // returns minimum value from the list
echo ("<br>");

echo(max(0, 150, 30, 20, -8, -200));  // returns maximum value from the list
echo ("<br>");

echo(pow(2, 3));  // returns 2 raised to the power of 3 (2^3)
echo ("<br>");

echo(floor(4.9));  // rounds down to nearest integer
echo ("<br>");

echo(ceil(4.1));  // rounds up to nearest integer
echo ("<br>");
?>
