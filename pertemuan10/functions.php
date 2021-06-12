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

function insert($data){
    global $conn;

    //ambil data dari tiap elemen form
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["user_name"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

     // query insert data
     $query = "INSERT INTO mahasiswa
     VALUES
        ('', '$nama', '$username', '$nim', '$email', '$jurusan', '$gambar')
    ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

return mysqli_affected_rows($conn);
}




?>