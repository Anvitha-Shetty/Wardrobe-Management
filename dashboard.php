<?php
session_start();

// Connect to the MySQL database (replace with your own database credentials)
$mysqli = new mysqli('localhost', 'root', 'anvitha@2003', 'user_db');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}



if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Redirect to the login page if the user is not logged in
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <?php include('dashboard.html'); ?>
</body>
</html>
