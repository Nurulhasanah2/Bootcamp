<?php
function determineGrade($score) {
    if ($score >= 85 && $score <= 100) {
        return 'A';
    } else if ($score >= 75 && $score < 85) {
        return 'B';
    } else if ($score >= 60 && $score < 75) {
        return 'C';
    } else if ($score >= 50 && $score < 60) {
        return 'D';
    } else if ($score >= 0 && $score < 50) {
        return 'E';
    } else {
        return 'Nilai tidak valid';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nilai = filter_input(INPUT_POST, 'nilai', FILTER_VALIDATE_FLOAT);

    if ($nilai !== false) {
        $peringkatHuruf = determineGrade($nilai);
        echo "Nilai Anda: $nilai<br>Peringkat Huruf: $peringkatHuruf";
    } else {
        echo "Input tidak valid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peringkat Huruf</title>
</head>

<body>
    <h1>Masukkan Nilai Anda</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nilai">Nilai:</label>
        <input type="text" name="nilai" id="nilai" required>
        <button type="submit">Cek Peringkat Huruf</button>
    </form>
</body>

</html>
