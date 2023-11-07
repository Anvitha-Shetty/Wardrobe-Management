<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html"); // Redirect to the login page if the user is not logged in
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
