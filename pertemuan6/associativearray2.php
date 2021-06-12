<?php 

// $mhs = [
//     ["Shaquell Ewell", "0971513353", "Teknik Informatika", "shaquellewell@gmail.com"], [" Ewell", "0971513354", "Teknik Informatika", "ewell@gmail.com"], [" Irmawati", "0971513355", "Teknik Informatika", "1234@gmail.com"]
// ];

// array associative
// sama seperti array numeric, kecuali key-nya adl string yang kita buat sendiri

$mhs = [
    //aray numeric kotak luar
    // array associative aray index (Didalam array)
    [
        "nama" => "Shaquell Ewell",
        "nim" => "0971513353",
        "jurusan" => "Teknik Informatika",
        "email" => "shaquell.ewell@gmail.com",
        "gambar" => "profile.png"
    ],
    [   
        "nama" => "Ewell",
        "nim" => "0971513354",
        "jurusan" => "Teknik Informatika",
        "email" => "ewell@gmail.com",
        "gambar" => "foto2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mhs as $m) : ?>
    <ul>
        <li>
            <img src="img/<?= $m["gambar"]; ?> ">
        </li>
        <li>Nama : <?= $m["nama"] ?></li>
        <li>Nim : <?= $m["nim"] ?></li>
        <li>Jurusan : <?= $m["jurusan"] ?></li>
        <li>Email : <?= $m["email"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>