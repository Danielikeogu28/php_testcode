<?php
/* using implode function 
to print out each element */

$car = array ("BMW", "Benz","Lambo", "Toyota   ");

    echo implode ( ", ", $car );

//////////////////////////////////////////////////////////

/* using foreach loop 
to print out each element*/ 

$age = array(" adult", "teenager", "child");
foreach ( $age as $human ) {
    echo "$human  ";
}
   

////////////////////////////////////////////

$userInfo = array (" username "," email "," dob "," password "," country ");
foreach ( $userInfo as $userID ){
    print_r ( $userID );
    
} 

?>