<?php

function check_status($a, $b, $c) {
    $name= gettype($a) === "string" ? $a :(gettype($b) === "string" ? $b : $c); 
    $age = gettype($a)  === "integer" ? $a : (gettype($b)  === "integer"  ? $b : $c);
    $status = gettype($a)  === "boolean" ? $a :(gettype($b)  === "boolean" ? $b : $c);      
    $var1 = "Hello $name , Your Age IS $age , ";
    $var2 = ($status)? "You Are Available For Hire" : "You Are Not Available For Hire";
    return $var1 . $var2 . "<br>"  ;
}

echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"