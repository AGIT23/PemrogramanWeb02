<?php
    //function php
    function lulus(){
        $nilai = 80;
        if($nilai >= 75){
            $ket = 'LULUS';
        }
        else{
            $ket = 'TIDAK LULUS';
        }
        return $ket;
    }
    //memanggil function
    echo lulus();



?>