<?php
//$_FILE;

function diverse_array($vector){
    $result = array();
    foreach($vector as $key1 => $value1) 
        foreach($value1 as $key2 => $value2) 
            $result[$key1][$key2] = $value2;
        return $result;
    
    }        


    /////////////////////
    function incoming_file(){
        $file = $_FILES;

        $file2 = [];
        foreach($file as $key => $infoArr){
            $fileByInput = [];

            foreach($infoArr as $input => $valueArr){
                if(is_array($valueArr)){
                    foreach($valueArr as $i => $value){
                        $fileByInput [$i] [$key] = $value;
                    }
                    
                }

                else {

                    $fileByInput[] = $infoArr;

                    break;
                }
            }

            $file2 = array_merge($file2,$fileByInput);
        }
        $file3 = [];
        foreach ($file2 as $file){
            if(!$file["error"]) $file3[] = $file;
        }
        return $file3;
    }

    $temfile = incoming_file();

/// $_SESSION
    session_start();

    $_SESSION['item'] = 42;
    $item = 30;

    echo  $_SESSION['item'];


// $_COOKIE
setcookie("user","Daniel", time() + 3600, "/");

if (isset($_COOKIE["user"])){
    echo "the user is" . $_COOKIE["user"];
} else {
    echo"user cookie not set";
}

?>