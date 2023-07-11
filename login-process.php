<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the login credentials from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the credentials (you would typically check against a database here)
    if ($username === "admin" && $password === "password") {
        // Redirect to the dashboard or home page
        header("Location: dashboard.php");
        exit;
    } else {
        // Show an error message
        echo "Invalid username or password. Please try again.";
    }
}
?>
