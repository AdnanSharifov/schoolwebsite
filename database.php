<!-- database.php -->

<?php
// Database credentials
$hostname = 'localhost';
$username = 'root';
$password = 'Sabuhipinar1';
$database = 'school';

// Create a database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Function to fetch user by username
function getUserByUsername($username) {
    global $conn;

    $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return null;
    }
}
?>
