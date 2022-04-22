<?php
    require_once 'class_account.php';

    class AccountBank extends Account{
       public $customer;

       function __construct($nomor,$saldo,$customer){
           parent::__construct($nomor,$saldo,$customer);
           $this->customer = $customer;
       }

       public function transfer($ac_tujuan,$uang){
           $ac_tujuan -> deposit($uang);
           $this -> witdraw($uang);
       }

       public function cetak(){
           parent::cetak();
           $this -> customer;
       }
       
       public function getsaldo(){
           return $this ->saldo;
       }
    }
