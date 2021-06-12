<?php 

$mhs = [
    ["Shaquell Ewell", "0971513353", "Teknik Informatika", "shaquellewell@gmail.com"], [" Ewell", "0971513354", "Teknik Informatika", "ewell@gmail.com"], [" Irmawati", "0971513355", "Teknik Informatika", "1234@gmail.com"]
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
        <li><?= $m[0] ?></li>
        <li><?= $m[1] ?></li>
        <li><?= $m[2] ?></li>
        <li><?= $m[3] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>