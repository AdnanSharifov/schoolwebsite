<!-- dashboard.php -->

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>School Portal - Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <p>You are logged in as <?php echo $_SESSION['role']; ?></p>

    <a href="logout.php">Log Out</a>
</body>
</html>
