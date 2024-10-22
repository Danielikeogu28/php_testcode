<?php
    function Number()
    {
        static $x = 0;
        echo $x;
        $x++;
    }

    Number();
    echo"<br>";
    Number();
    echo"<br>";
    Number();

    /* var_dump */
    $x = 12345;
    $cars = array ("Ferrari","Lambo","BMW","Benz","Buggatti",);

    var_dump($x);
    var_dump($cars);





    function string(){
        static $y = 20;
        echo $y;
        $y--;
    }
    String();
    echo " <br> ";
    String();
    echo" <br> ";
    String();
?>