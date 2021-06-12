<?php
//variable Scope / Lingkup Variabel

$x = 10;


function tampilx() {
    global $x;
    echo $x;
}

tampilx();

?>