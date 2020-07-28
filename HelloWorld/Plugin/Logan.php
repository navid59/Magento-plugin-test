<?php
    namespace Navid\HelloWorld\Plugin;
    include_once ('Car.php');

    class Logan {
        public $name;
        public function __construct()
        {
        }

        public function intro() {
            return "Proud to be Romanian! I'm a Dacia Logan . and the name is : ".$this->name;
        }
    }
