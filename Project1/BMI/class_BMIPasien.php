<?php
    include_once 'class_pasien.php';

    class BMIPasien extends Pasien{
        public $tanggal;

        public function __construct($tanggal,$kode, $nama, $gender,$berat,$tinggi){
            $this->tanggal = $tanggal;
            $this->kode = $kode;
            $this->nama = $nama;
            $this->gender = $gender;
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }
    }

?>