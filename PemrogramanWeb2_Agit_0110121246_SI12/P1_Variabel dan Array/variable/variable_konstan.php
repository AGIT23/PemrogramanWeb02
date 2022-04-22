<?php
    // definisikan konstanta 
    define('PHI', 3.14);
    define('DENAME', 'inventori');
    define('DESERVER', 'localhost');

    $jari = 8 ;
    $luas = PHI * $jari * $jari;
    $kill = 2 * PHI * $jari;

    echo 'Luas Lingkaran dengan  jari-jari :'.$jari.' = '.$luas. 'cm2';
    echo '<br/>Kelilingnya : '.$kill;
?>