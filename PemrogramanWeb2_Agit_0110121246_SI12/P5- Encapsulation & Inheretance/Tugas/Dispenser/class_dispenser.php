<?php
    class Dispenser{
        protected $volume;
        protected $hargaSegelas;
        private $volumeGelas;
        public $namaminuman;

        public function isi($vol){
            return $this->volume = $vol;
        }

        public function harga($segelas){
            return $this->harga=$segelas;
        }

        public function setvolume($gelas){
            return $this->Vgelas=$gelas;

        }

        public function setMinuman($minuman){
            return $this->minuman=$minuman;
        }
    }


    
?>