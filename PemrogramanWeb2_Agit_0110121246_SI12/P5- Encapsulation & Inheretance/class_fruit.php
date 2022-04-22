<?php
    class Fruit{
        //public $name;
        //protected $color;
        //private $weigth;

        public $name;
        public $color;
        public $weigth;


        function set_name($n){
            $this -> name = $n;
        }

        protected function set_color($n){ 
            $this -> color = $n;
        }

        private function set_weigth($n){
            $this -> weigth = $n;
        }

    }
    
    //$mango = new Fruit();
    //$mango -> name      = 'Manggo';
    //$mango -> color     =  'Yellow';
    //$mango -> weigth    = '300';

    //$mango = new Fruit();
   // echo $mango->set_name('Manggo');
    //echo $mango ->set_color ('Yellow');
    //echo $mango -> set_weigth ('300');
?>