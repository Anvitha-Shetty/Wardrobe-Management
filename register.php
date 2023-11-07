<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['register_username'];
    $password = $_POST['register_password'];

    // Connect to the MySQL database (replace with your own database credentials)
    $mysqli = new mysqli("localhost", "root", "anvitha@2003", "user_db");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Check if the username already exists
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $result = $mysqli->query($check_query);

    if ($result->num_rows > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        // Insert the user data into the database
        $insert_query = "INSERT INTO users (username, passwd) VALUES ('$username', '$password')";

        if ($mysqli->query($insert_query) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $insert_query . "<br>" . $mysqli->error;
        }
    }

    $mysqli->close();
}
?>
