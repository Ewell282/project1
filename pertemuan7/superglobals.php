<?php
//SUPERGLOBALS
//Variable global milik php merupakan Array Associative

//$_GET adalah metode pengiriman data melalui url dan data tersebut bisa diambil atau di tangkap oleh variable superglobals get

// $_GET["nama"] = "Dimas Prasetyo";
// $_GET["nim"] = "0971513353";

$mhs = [
[
    "nama" => "Shaquell Ewell",
    "nim" => "0971513353",
    "jurusan" => "Teknik Informatika",
    "email" => "shaquell.ewell@gmail.com",
    "gambar" => "img/profile.png"
],
[   
    "nama" => "Ewell Syazani",
    "nim" => "0971513354",
    "jurusan" => "Ilmu Komunikasi",
    "email" => "ewell@gmail.com",
    "gambar" => "img/foto2.jpg"
]
];

//$_POST menggunakan metode form
//$_REQUEST
//$_SESSION
//$_COOKIE
//$_SERVER
//$_ENV


// echo $_SERVER["SERVER_NAME"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mhs as $m) : ?>
    <ul>
        <li>
            <a href="latihan2.php?nama=<?= $m["nama"]; ?>&nim=<?= $m["nim"]; ?>&jurusan=<?= $m["jurusan"]; ?>&email=<?= $m["email"]; ?>&gambar=<?= $m["gambar"]; ?>"> <?= $m["nama"]; ?> </a>
        </li>
    </ul>
        <?php endforeach; ?>

</body>
</html>