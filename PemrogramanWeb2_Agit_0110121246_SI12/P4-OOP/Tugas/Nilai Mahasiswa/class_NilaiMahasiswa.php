<?php 
    class NilaiMahasiswa{
        var $matkul;
        var $nilai;
        var $nim;

        function __construct($matkul,$nilai,$nim){
            $this->matkul = $matkul;
            $this->nilai = $nilai;
            $this->nim = $nim;
        }

        function hasil($Nilai){
           if($Nilai >=56){
               return 'LULUS';
           }
           else{
               return 'TIDAK LULUS';
           }
        } 

        function grade ($Nilai){
            if($Nilai >= 0 && $Nilai <35){
                return 'E';
            }
            elseif($Nilai >= 36 && $Nilai <= 55){
                return 'D';
            }
            elseif($Nilai >= 56 && $Nilai <= 69){
                return 'C';
            }
            elseif($Nilai >= 70 && $Nilai <= 84){
                return 'B';
            }
            elseif($Nilai >= 85 && $Nilai <=100){
                return 'A';
            }
            else{
                return 'I';
            }
            
        }

    }

?>