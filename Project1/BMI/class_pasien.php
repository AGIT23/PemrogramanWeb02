<?php
    include_once 'class_bmi.php';

    class Pasien extends BMI{
        public $kode;
        public $nama;
        public $gender;

        public function __construct($kode, $nama, $gender,$berat,$tinggi){
            $this->kode = $kode;
            $this->nama = $nama;
            $this->gender = $gender;
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }
    }
?>