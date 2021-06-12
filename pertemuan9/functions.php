<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","phpnative");


function query($query) {
    global $conn; //begitu pakai global bukan brrti variabel baru tapi mengacu dengan variabel diatas
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;

    }
    return $rows;
}

?>