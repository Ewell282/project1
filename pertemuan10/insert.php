<?php 

require 'functions.php'; 
//apakah submit sudah ditekan or belum

if(isset ($_POST["submit"]) ) {

    //cek apakah data berhasil di tambahkan or tidak

    if(insert($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>

        ";
    }else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Mahasiswa</title>
</head>
<body>

<h1>Insert Data Mahasiswa</h1>

<form action="" method="post">
   
    <ul>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="user_name">Username : </label>
            <input type="text" name="user_name" id="user_name">
        </li>
        <li>
            <label for="nim">NIM : </label>
            <input type="text" name="nim" id="nim">
        </li>
        <li>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Insert Data!</button>
        </li>
    </ul>

</form>
    
</body>
</html>