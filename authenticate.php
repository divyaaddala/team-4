<?php
// Replace these with your actual credentials
$valid_username = 'user123';
$valid_password = 'password123';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Validate the credentials
    if ($entered_username === $valid_username && $entered_password === $valid_password) {
        // Authentication successful
        // Redirect to the dashboard or any other page
        header('Location: dashboard.html');
        exit();
    } else {
        // Authentication failed
        echo 'Invalid username or password. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

<h2>Login</h2>
<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
</form>

</body>
</html>
