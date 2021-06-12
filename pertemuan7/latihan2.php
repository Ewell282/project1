<?php
// cek apakah tidak ada data di $_GET

if ( !isset($_GET["nama"]) || 
     !isset($_GET["nim"]) ||
     !isset($_GET["jurusan"]) ||
     !isset($_GET["email"]) ||
     !isset($_GET["gambar"])) {
    // redirect

    header("Location: superglobals.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

<ul>
    <li><img src="<?= $_GET["gambar"] ?>"></li>
    <li><?= $_GET["nama"] ?></li>
    <li><?= $_GET["nim"] ?></li>
    <li><?= $_GET["jurusan"] ?></li>
    <li><?= $_GET["email"] ?></li>
</ul>

<a href="superglobals.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>