<?php
    class Own{
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function sayHello()
        {
            echo "Hello " .$this->name ."\n";
        }
    }


    $object = new Own('John');
    $object->sayHello();





    $cars = array("SF10", "BMW", "Lambo",) ;
        echo $cars [1] .",   " . $cars[0] ." , " . $cars[2] ."\n";
    



        $fruit = array("apple", "Orange", "Mango");
        unset($fruit[1]);
        echo $cars [0] ."". $fruit[2] ."\n";
?>