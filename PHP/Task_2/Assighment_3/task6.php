<?php

function calculate($n1 , $n2 , $op = "+"){
    if($op === "+" || $op === "a" || $op === "add") :
        return $n1 + $n2 . "<br>";
    elseif($op === "s" || $op ===  "subtract") :
        return $n1 - $n2 . "<br>";
    else :
       return $n1 * $n2 . "<br>";
    endif;       
}

echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200