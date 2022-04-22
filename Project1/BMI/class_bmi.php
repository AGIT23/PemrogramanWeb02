<?php
    class BMI{
        public $berat;
        public $tinggi;
        public $nilaiBMI;

        public function __construct($berat,$tinggi){
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }

        function nilaiBMI(){
            $nilaiBMI = $this->berat / (($this->tinggi**2)/10000);
            return $this->nilaiBMI = number_format($nilaiBMI, 1, '.', '');
        }

        function statusBMI(){
            if($this->nilaiBMI < 18.5){
                return "Kekurangan Berat Badan";
            }
            elseif($this->nilaiBMI >= 18.5 && $this->nilaiBMI <= 24.9){
                return "Normal (Ideal)";
            }
            elseif($this->nilaiBMI >= 24.9 && $this->nilaiBMI <=29.9){
                return "Kelebihan Berar Badan";
            }
            else{
                return "Kegemukan (Obesitas)";
            }

        }
    }

?>