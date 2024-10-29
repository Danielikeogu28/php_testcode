<?php
$nameERR = $emailERR = "";
// Validating name
if ($_SERVER("REQUEST_METHOD") == "POST"){
    if(empty($_POST ["name"])){
        echo"Name is empty";
    } else{
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z-' ] *$/", $name)){
            $nameERR = "only letters and white space needed.";
        }
    }
    
};
?>