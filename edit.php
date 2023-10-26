<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Redirect back to the login page if not authenticated
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Welcome, Divya! You can edit your website here.</h2>

<!-- Your website editing content goes here -->

</body>
</html>
