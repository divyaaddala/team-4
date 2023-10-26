<!DOCTYPE html>
<html>
<body>

<form action="authenticate.php" method="post">
  Email: <input type="text" name="email"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>

<?php
$valid_email = 'divya.addala07@gmail.com';
$valid_password = 'your_password'; // Replace with your actual password

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === $valid_email && $password === $valid_password) {
    // Set a session variable to mark the user as authenticated
    session_start();
    $_SESSION['authenticated'] = true;

    // Redirect to your website editing page
    header('Location: edit.php');
    exit();
} else {
    echo 'Invalid email or password. Please try again.';
}
?>
