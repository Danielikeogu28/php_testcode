<?php
/*REGULAR EXPRESSION */

//preg_match

$phoneNumber = "(+234) 90185-88193";
$cleanNum = preg_replace("/[^0-9]/", "", $phoneNumber);
echo $cleanNum;

///////////////////
//preg_match_all

$str = "the rain on SPAIN fails mainly on the plain";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);

///// 
$nameERR = $emailERR = $genderERR = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        echo"Name is required";
    } else{
        $name = $test_input ($_POST["name"]);
        if(!preg_match("/^[a-zA-Z-' ] *$/", $name)){
            $nameERR = "Only letters and white space required";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["email"])){
        echo "your email is required for verification";
    } else{
        $email = $test_input ($_POST["email"]);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailERR = "invalid email";
        }
}
}

if (empty($_POST["gender"])){
    $genderERR = "your gender";
} else {
    $gender = $test_input ($_POST["gender"]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
  }

  function familyName($name, $year){
    echo "$name Ikeogu. was Born in $year. \n";
  }
  familyName("Childera",  "1997");
  familyName("Miracle","1990");
  familyName("Daniel","2001");
  familyName("Ruth","2003");
  
?>