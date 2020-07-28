<?php
    namespace Navid\HelloWorld\Plugin;
    include_once ('Car.php');

    class Volvo extends Car {
        public $name;
        public function __construct()
        {
            $this->name =  $this->name ? $this->name : "Unknown Model Car";
        }

        public function intro() {
            return "Proud to be Swedish! I'm a Volvo . and the Model is : ".$this->name." And i'm extend from Car Abstract Class";
        }
    }
