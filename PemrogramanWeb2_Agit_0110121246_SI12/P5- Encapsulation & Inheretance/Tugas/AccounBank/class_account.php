<?php   
    class Account{
        public $nomore;
        public $saldo;

        function __construct($nomor,$saldo){
            $this->nomor = $nomor;
            $this->saldo = $saldo;
        }


        
        public function deposit($uang){
            $this->saldo = $this->saldo + $uang;
        }

        public function witdraw($uang){
            $this->saldo = $this->saldo - $uang;
        }

        public function cetak(){
            $this->nomor;
            $this->saldo;
        }
    }
?>