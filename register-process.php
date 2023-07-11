<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the registration data from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Validate and store the data (you would typically save it to a database here)

    // Redirect to the login page after successful registration
    header("Location: login.php");
    exit;
}
?>
