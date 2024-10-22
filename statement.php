<?php

//IF statement 

$username = "Smith";

if ($username == "Smith"){
    echo "Login successful. ";
}



/* IF ELSE STATEMENT */

$age = 40;
if ($age >= 18){
    echo "You are eligible to vote. ";
} else{
    echo "You are not eligible to vote. ";
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
        echo "You are allowed to enter. ";
    }else{
        echo "You need an ID to enter. ";
    } 

    } else{
        echo "You are not old enough to enter. ";

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
        echo "this a luxury car. ";
        break;
    case "Ferrari SF10";
        echo " the car is quite expensive. ";
        break;
    case "Revuelto";
        echo "wow it's a Lamborgihin Revuelto. ";
        break; 
    case "Mercedes Mayback. ";
        echo " It's a Mayback. ";
        break;
    default:
        echo "You probably own a car. ";
 }


 ///////////////////////////////////////////////////////////

/* WHILE LOOP */
$number = 1;

while ($number < 5 ){
    echo "Number is: $number <br>";
    $number++;
};

/* WHILE LOOP using a BREAK function */

$card = 10;
while ($card < 5){
    if($card == 3) break;
        echo $card;
        $card++;
    
}

 
///////////////////////////////////////////////////////////////

/* do-while loop   */

$i = 1;
do{
    echo "Number is: $i<br>";
    $i++;
}while ($i <= 5);



///////////////////////////////////////////////////////////

/* for loop 
for (initialization; condition; increment/decrement) {
    // Code to be executed for each iteration
}
*/

for ($i = 1; $i <= 5; $i++){
    echo "Iteration: $i   ";
}


/////////////////////////////////////////////////////////////

/*foreach loop*/

$colour = array("blue ", " red" , " yellow ");
foreach ($colour as $x ){
    echo $x;
}
?>