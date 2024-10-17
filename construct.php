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
?>