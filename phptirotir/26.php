<?php
// Set a cookie
setcookie("user", "John", time() + (86400 * 30), "/");

// Check if the cookie is set before displaying it
if(isset($_COOKIE["user"])) {
    echo "User: " . $_COOKIE["user"];
} else {
    echo "Cookie 'user' is not set yet!";
}
?>