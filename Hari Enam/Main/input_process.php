<?php
session_start();

// Include the database connection file
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul1"];
    $konten = $_POST["konten1"];
    $kategori = $_POST["kategori1"];
    $gambar = $_POST["gambar1"];

    // Hash the password (You should use more secure methods like password_hash)
    //$hashedPassword = md5($password);
    $sql = "INSERT INTO post (judul, content, category_id, image) VALUES ('$judul', '$konten', '$kategori', '$gambar')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboaradmin.php");
        exit();
    } else {
        echo "Error adding user: " . $conn->error;
    }
}

$conn->close();
?>