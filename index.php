<?php
// koneksi ke database
require 'functions.php'; //hanya memangil file functions.php

$mahasiswa = query("SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="insert.php">Insert Data Mahasiswa</a>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>Id</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
    </tr>

    <?php $i = 1; ?>

    <?php foreach($mahasiswa as $row ) : ?>
    <tr>
        <td><?= $i ; ?></td>
        <td>
            <a href="">Edit</a> |
            <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda Yakin?');">Delete</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["user_name"]; ?></td>
        <td><?= $row["email"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    
    </table>
</body>
</html>