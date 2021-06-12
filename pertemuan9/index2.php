<?php
// koneksi ke database

$conn = mysqli_connect("localhost","root","","phpnative");

// ambil data dari table mahasiswa/query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data dari object result (fetch)

// mysqli_fetch_row() mengembalikan array numeric yg indexnya angka
// mysqli_fetch_assoc() mengembalikan array associative yang dia kenali string jurusan
// mysqli_fetch_array() mengembalikan array data yang disajikan double or mengembalikan data keduanya
// mysqli_fetch_object() memakai variable -> nama

// while($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

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

    <?php while($row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i ; ?></td>
        <td>
            <a href="">Edit</a> |
            <a href="">Delete</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["user_name"]; ?></td>
        <td><?= $row["email"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
    
    </table>
</body>
</html>