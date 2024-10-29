<?php
    function Number()
    {
        static $x = 0;
        echo $x;
        $x++;
    }

    Number()."\n";
    Number()."\n";
    Number()."\n";

    /* var_dump */
    $x = 12345;
    $cars = array ("Ferrari","Lambo","BMW","Benz","Buggatti",);

    var_dump($x);
    var_dump($cars);





    function string(){
        static $y = 0;
        echo $y ."\n";
        $y--;
    }
    String()."\n";
    String()."\n";
    String()."\n";

///////////////////////////////////////////////////

$auth = "userName";
switch ($auth) {
    case "userID";
    echo"userID is required "."\n";
    break;

    case "userName";
    echo "input userName"."\n";
    break;

    case "email";
    echo "check your email to verify your account "."\n";
    break;

    case "password";
    echo"password required"."\n";
    break;
    default:
    echo "something went wrong"."\n";
}
//////////////////
//$argc function 

if ($argc > 1){

    echo "Number of arguments: $argc\n";

    echo "Argument passed: \n";

    for ($i = 0; $i < $argc; $i++) 
    {
        echo "Argument $i: " . $argv[$i] . "\n";
    }
} else {
    echo "No additional argument was passed. \n";
}

////////////////////////////////////
//$argv
if ($argc > 1)
{
    echo "Number of time called: $argc \n";
    foreach($argv as $index => $arg){
        echo "Argument $index: " . $arg . "\n";

    }

} else {
    echo "No additional argument was passed";
}
?>
