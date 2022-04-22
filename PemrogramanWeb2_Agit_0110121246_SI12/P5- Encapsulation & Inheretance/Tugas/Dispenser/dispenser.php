<?php
    require_once 'class_dispenser.php';

    $drinks = new Dispenser();
    echo 'Nama minuman : '.$drinks->setMinuman(" Cola");
    echo '<hr/>';
    echo 'Volume Minuman  : '.$drinks->setvolume(5000).'ml';
    echo '<br/>';
    echo 'Harge per gelas : '."Rp".number_format($drinks->harga(8000), 0, ",", ".");
    echo '<hr/>';
    echo  'Danu mengambil segelas Cola dengan volume '.$drinks->isi(300).'ml';
    echo '<br/>';
    echo "Sisa volume Minuman Cola adalah ".$drinks->setvolume(5000-300).'ml';






?>