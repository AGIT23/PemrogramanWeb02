<?php
      function grade($nilai_akhir){ 
        if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
            return "E";
        } elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
            return 'D';
        } elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
            return 'C';
        } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
            return 'B';
        } elseif ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
            return  'A';
        } else {
            return 'I';
        }
      }

      
      function predikat($grade){
        switch ($grade) {
          case "E":
            return "SANGAT KURANG";
            break;
          case "D":
            return "KURANG";
            break;
          case "C":
            return "CUKUP";
            break;
          case "B":
            return "MEMUASKAN";
            break;
          case "A":
            return "SANGAT MEMUASKAN";
            break;
          case "I":
            return "TIDAK ADA";
            break;
          default:
            "";
        }
      }
      
    function kelulusan($nilai_akhir){
      if ($nilai_akhir > 55) {
          return "LULUS";
      } else {
          return "TIDAK LULUS";
      }
     
    }
   
