<?php
/* using implode function 
to print out each element */

$car = array ("BMW", "Benz","Lambo", "Toyota");


    echo implode ( ", ", $car ) ."\n";

//////////////////////////////////////////////////////////

/* using foreach loop 
to print out each element*/ 

$age = array(" adult", "teenager", "child");
foreach ( $age as $human ) {
    echo "$human" ."\n" ;
}
   

////////////////////////////////////////////


$userInfo = array (" username "," email "," dob "," password "," country ");
foreach ( $userInfo as $userID ){
    print_r ( $userID ) ."\n";
    
} 
 ///////////////////////////////////////
 /*array_push(array, value1, value2, ...); 
 adding new item to the array */

$fruit = array ("bannana ", " apple "," Orange "," mango ",);
array_push ( $fruit,"pawpaw", "grape");
    print_r ( $fruit ) ."\n";




$number = [1 , 2 , 3 , 4];

$newcount = array_push ( $number, 4 , 5 , 6 );

echo"this array has the new $newcount count" . "\n";

print_r ( $number )."\n";




///////////////////////////////////////////
/*associative array */


$students = [
   [ "name" => "David", "age" => 25] ,
   [ "name" => "Joy",    "age" => 22] ,
   [ "name" => " Able",  "age" => 18] ,


];
foreach ( $students as $student ) {
   echo "Name: " . $student["name"].  ", Age: " . $student["age"] ."\n";
}


////////////////////////////////////////////////////////
/*array_splice() array key function*/

$fruits = ["Apple", "Banana", "Cherry", "Date"];
array_splice ( $fruits,1,2,["Orange", "Money"] );

print_r ( $fruits ) ."\n";

/////////////////////////////////
// Insertion of Elements
$fruits = ["Apple", "Banana", "Cherry", "Date"];
array_splice ( $fruits,1,0,["a","b"] );
print_r ( $fruits ) ."\n";


////////////////////////////////
//Replacement of Elements
$arr = [1,2,3,6, 7];
array_splice ( $arr,3,0,["a", "b", 4, 5]);
print_r ( $arr ) ."\n";


//////////////////////////////////////
//removing All Elements from an Offset

$arr = [1,2,3,4,5,6,7];
array_splice ( $arr, -3);
print_r ( $arr ) ."\n";

/////////////////////////////////
// Negative Length

$arr = [1,2,3,4,5,6,7];
array_splice ( $arr, 2, -2);
print_r ( $arr ) ."\n";


////////////////////////////
/*array_pop();
removes the last element from an array and returns it*/

$raw = ["a" => 1, "b" =>2, "c" => 3];
array_pop ( $raw );
print_r ( $raw );

////////////////////////
/*array_shift()
emoves the first element from an array */

$raw = [1,2,3,4,5,];
array_shift ( $raw );
print_r ( $raw ) ."\n";


$matrix =[
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
];
print_r ( $matrix );

////////////////////////////////////

$arr = [1,2,3,4,5];

for ($i = 0; $i < count ( $arr ); $i ++) {
     $arr[ $i ] *= 2;
} print_r ( $i ) ."\n";

//////////////////////////
/*Loop for Associative Array (Indexed by Keys)*/

$rah = ["a" => 1, "b" => 3, "c" => 4];
$keys = array_keys($rah);

for ($i = 0; $i < count($keys); $i++) {
    $currentKey = $keys[$i];  
    echo "Key: $currentKey, Value: " . $rah[$currentKey] . "\n";
}


//An array that represents a possible record set returned from a database
//array_colunm function
$a = array (
    array(

        "id"=> 4759,
        "firstName"=> "Smith",
        "lastName"=> "John",
    ),
    array(
        "id"=> 6488535,
        "firstName" => "Mellon",
        "lastName"=> "james",
    ),
    array(
        array(
            "id"=> 856390,
            "firstName"=> "Jellum",
            "lastName"=> "Smith",
        )
    )
        );
$lastName = array_column ($a, "firstName");
print_r ( $lastName );



////////////////////////////////

///array_combine

$name = array("Daniel", "Emma","Joel");

$age = array(23,45,47);

array_push($name, "Anna");


$age[] = 89;

$c = array_combine ($name, $age);


print_r ( $c );

$carmodle = array(
    array("Benz", 18, 28),
    array("volvo", 45, 83),
    array("toyota", 30, 67)
);

echo$carmodle[0] [0].": in stock: ".$carmodle[0] [1].", price: $".$carmodle[0] [2] ."\n";
echo$carmodle[1] [0].": in stock: ".$carmodle[1] [1].", price: $".$carmodle[1] [2] ."\n";
echo$carmodle[2] [0].": in stock: ".$carmodle[2] [1].", price: $".$carmodle[2] [2] ."\n";



function mysort($a, $b){
    if ($a == $b) return 0;
    return $a[0] < $b[0] ?-1:1;

} 
$lab = array("a"=>2, "b"=>3, "c"=> 4, "d"=>5);

uasort($lab, "mysort");
foreach ($lab as $k => $keys){
    echo"[" . $k . "] => " . $keys;
}


?>