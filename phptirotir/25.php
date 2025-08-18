<?php
// Check if file was uploaded
if (isset($_FILES['file'])) {
    // Save uploaded file in folder: uploads
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']);
    echo "File uploaded!";
}
?>