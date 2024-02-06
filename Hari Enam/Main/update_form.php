<?php
$conn = mysqli_connect("localhost", "root", "", "blog_db");
if ($conn === false) {
    die("Error Connection" . mysqli_connect_error());
}

$id = $_POST['id'];
$judul = $_POST['judul'];
$kategori = $_POST['category_id'];
$konten = $_POST['content'];

$sql = "UPDATE post SET judul='$judul', kategori='$kategori', konten='$konten', images='$target_file' WHERE id_postingan='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location:" . $_SERVER['HTTP_REFERER'] . "");
    // echo "masuk";
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>