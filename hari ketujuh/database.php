<?php
session_start();

// Include the database connection file
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    $nama = $_POST["nama1"];
    $email = $_POST["email1"];
    $nohp = $_POST["nohp1"];

    // Hash the password (You should use more secure methods like password_hash)
    //$hashedPassword = md5($password);

    // Check the database for user credentials
    $sql = "INSERT INTO kontak (nama, email, no_telepon) VALUES ('$nama', '$email', '$nohp')";

    if (mysqli_query($conn, $sql)) {
        header("Location:" . $_SERVER['HTTP_REFERER'] . "");
        // echo "masuk";
    } else {
        echo "ERROR: Sorry $sql. "
            . mysqli_error($conn);
    }

$conn->close();
?>