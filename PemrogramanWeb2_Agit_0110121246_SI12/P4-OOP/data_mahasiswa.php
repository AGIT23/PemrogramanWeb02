<?php
    require_once('class_mahasiswa.php');
    $mahasiswa = new Mahasiswa (0110121246, "Agit",3.95);
    
    echo "Nama :".$mahasiswa->nama."<br/>";
    echo "NIM :".$mahasiswa->nim."<br/>";
    echo "IPK :".$mahasiswa->ipk."<br/>";
    echo "Predikat :".$mahasiswa->predikat_ipk();

?>