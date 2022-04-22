<?php
    require_once('class_lingkaran.php');

    $lingkaran1 = new Lingkaran(5);
    $lingkaran2 = new Lingkaran(8);

    echo "Luas Lingkaran 1 : ". $lingkaran1->getluas()."<br/>";
    echo "Luas Lingkaran 2 : ". $lingkaran2->getluas()."<br/>";

    echo "Keliling Lingkaran 1 : ". $lingkaran1->getkeliling()."<br/>";
    echo "Keliling Lingkaran 2 : ". $lingkaran2->getkeliling()."<br/>";

?>