<?php
session_start();

// Include the database connection file
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username1"];
    $password = $_POST["password1"];

    // Hash the password (You should use more secure methods like password_hash)
    //$hashedPassword = md5($password);

    // Check the database for user credentials
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
        $_SESSION['username'] = $username;
        header("Location: dashboaradmin.php");
        exit();
    } else {
        // Login failed
        echo "Invalid username or password";
        echo $username;
        echo $password;
    }
}

$conn->close();
?>
