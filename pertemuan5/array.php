<?php
//array adalah (variabel yg dpt memiliki nilai)
// elemen pada array boleh memiliki tipe data yg berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0 
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];


// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada 1 array 
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>