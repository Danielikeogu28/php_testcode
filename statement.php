<?php

//IF statement 

use function PHPSTORM_META\elementType;

$username = "Smith";

if ($username == "Smith"){
    echo "Login successful." ."\n";
}



/* IF ELSE STATEMENT */

$age = 40;
if ($age >= 18){
    echo "You are eligible to vote." ."\n";
} else{
    echo "You are not eligible to vote." ."\n";
}
   


/* An IF inside an IF: STATEMENT 

if (condition1) {
    // Code to be executed if condition1 is true
    if (condition2) {
        // Code to be executed if both condition1 and condition2 are true
    }
}
*/

$age = 20;
$hasID = true;

if ($age >= 18){
    if ($hasID == true){
        echo "You are allowed to enter." ."\n";
    }else{
        echo "You need an ID to enter." ."\n";
    } 

    } else{
        echo "You are not old enough to enter." ."\n";

    }


/////////////////////////////////////////////////////////////////////

/* SWITCH statement

switch (expression) {
    case value1:
        // Code to be executed if expression equals value1
        break;
    case value2:
        // Code to be executed if expression equals value2
        break;
    case value3:
        // Code to be executed if expression equals value3
        break;
    default:
        // Code to be executed if expression doesn't match any cases
}

*/

$car ="Ferrari SF10";
 switch($car){
    case "Aspark Owl ";
        echo "this a luxury car." ."\n";
        break;
    case "Ferrari SF10";
        echo "this car is quite expensive." ."\n";
        break;
    case "Revuelto";
        echo "wow it's a Lamborgihin Revuelto." ."\n";
        break; 
    case "Mercedes Mayback. ";
        echo " It's a Mayback." ."\n";
        break;
    default:
        echo "You probably own a car.\n";
 }


 ///////////////////////////////////////////////////////////

/* WHILE LOOP */
$number = 1;

while ($number < 5 ){
    echo "Number is: $number \n";
    $number++;
};

/* WHILE LOOP using a BREAK function */

$card = 10;
while ($card < 5){
    if($card == 3) break;
        echo $card ."\n";
        $card++;
    
};

/*WHILE LOOP using a CONTINUE FUNCTION*/ 
$i = 0;
while ($i < 6){
    $i++;
    if($i == 3) continue;
    echo $i ."\n";
}


 
///////////////////////////////////////////////////////////////

/* do-while loop   */

$i = 1;
do{
    echo "Number is: $i \n";
    $i++;
}while ($i <= 5);



///////////////////////////////////////////////////////////

/* for loop 
for (initialization; condition; increment/decrement) {
    // Code to be executed for each iteration
}
*/

for ($i = 1; $i <= 5; $i++){
    echo "Iteration: $i \n";
}


/////////////////////////////////////////////////////////////

/*foreach loop*/

$colour = array("blue ", "red" , "yellow ");
foreach ($colour as $x ){
    echo $x ."\n";
};



?>