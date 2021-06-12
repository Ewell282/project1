<?php 
require 'functions.php';

$id = $_GET["id"];

if (delete($id) > 0 ) {
    echo "
    <script>
        alert('Data Berhasil Di Delete!');
        document.location.href = 'index.php';
    </script>
    
    ";
} else {
    echo "
    <script>
        alert('Data Gagal Di Delete!');
        document.location.href = 'index.php';
    </script>
    
    ";
}



?>
