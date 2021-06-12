<?php

    // Date untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    //Time
    //UNIX Timestamp / EPOCH time
    // detik yg sudah berlalu sejak 1 Januari 1970
    // echo time();

    // echo date("l", time()-60*60*24*99);

    //mktime
    //membuat sendiri detik
    //mktime(0,0,0,0,0,0)
    //jam, menit, detik, bulan, tanggal, tahun

    // echo date("l", mktime(0,0,0,12,06,1990));

    //strtotime

    echo date("l", strtotime("06 December 1990"));
?>