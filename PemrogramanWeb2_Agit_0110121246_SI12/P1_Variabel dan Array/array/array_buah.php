<?php
    //mendeklarasikan array 
    $buah =['Pisang', 'Apel', 'Jeruk', 'Mangga'];


    //menampilkan isi array
    echo 'Buah indeks ke-0'.$buah[0].'<br>';
    echo 'Buah indeks ke-1'.$buah[1].'<br>';
    echo 'Buah indeks ke-2'.$buah[2].'<br>';
    echo 'Buah indeks ke-3'.$buah[3].'<br>';
    //echo 'Buah indeks ke-4'.$buah[4].'<br>';

    

    //menampilkan jumlah array
    echo '<br>Jumlah array : '.count($buah);
    echo'<hr>';

    //menampilkan isi array
    echo'<lo>';
    foreach($buah as $b){
        echo '<li>'.$b.'</li>';
    }
    echo'</lo>';

    echo'<hr>';
    //menampilkan isi array dengan foreach
    echo '<ul>';
    foreach($buah as $b => $value) {
        echo '<li>'.$b. '=>'. $value.'</li>';
    }



?>