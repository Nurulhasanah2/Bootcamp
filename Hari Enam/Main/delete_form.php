<?php
$conn = mysqli_connect("localhost", "root", "", "blog_db");
if ($conn === false) {
    die("Error Connection" . mysqli_connect_error());
}

$id = $_POST['id'];

$sql = "DELETE FROM post WHERE id = $id;";

if (mysqli_query($conn, $sql)) {
    header("Location:" . $_SERVER['HTTP_REFERER'] . "");
    // echo "masuk";
} else {
    echo "ERROR: Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>