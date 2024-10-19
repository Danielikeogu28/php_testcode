<?php
    class Own{
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function sayHello()
        {
            echo "Hello" .$this->name;
        }
    }


    $object = new Own('John');
    $object->sayHello();





    $cars = array("SF10", "BMW", "Lambo",);
        echo $cars [1] .",   " . $cars[0] ." , " . $cars[2] ;
        echo $cars[1] . ", " . $cars[0] . ", " . $cars[2];
    
?>