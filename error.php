<?php

//debug_backtrack function.

function first(){
    second();
} 

    function second(){
        third();
    }

    function third(){
        print_r(debug_backtrace());
    }

    first();

  //debug_print_backtrace();
    function a($name){
        b("Danel");
    }
    function b($name){
        c("John");
    }
    function c($name){
        debug_print_backtrace();
    }

    a("Ben");

    //////////////////
    //error_get_last() Function

    echo"$can";
    print_r(error_get_last());

    ////////////////////\\
/*
     error_log functin
     Send error message to the server log if error connecting to the database
     */
    $conn = mysqli_connect("localhost","bad_user","bad_password","my_db");
    if(!$conn){
        error_log("fail to connect to the database!", 0);
    }
        // Send email to administrator if we run out of foo

        error_log("Oh no! We are out of FOOs!", 1, "admin@example.com", ": Critical Error - FOOs Exhausted\r\n");



?>