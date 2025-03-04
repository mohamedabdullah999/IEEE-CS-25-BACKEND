<?php
function greeting($name , $gender = "custom"){
    echo "Hello ";
    if($gender === "Male"){
        echo "Mr ";
    }
    else if($gender === "Female"){
        echo "Miss ";
    }
    echo $name . "<br>";
}

echo greeting("Osama", "Male"); 
echo greeting("Eman", "Female");
echo greeting("Sameh"); 