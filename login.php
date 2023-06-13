<!-- login.php -->

<?php
session_start();

// Include the database file
require_once 'database.php';

// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Fetch user from the database based on the provided username
$user = getUserByUsername($username);

if ($user && password_verify($password, $user['password'])) {
    // Set session variables
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $user['role'];

    // Redirect to dashboard
    header('Location: dashboard.php');
    exit();
} else {
    echo 'Invalid username or password. Please try again.';
}
?>
