<?php
function multiply(...$nums){
    $res = 1;
    foreach($nums as $value) :
        if(gettype($value) !== "string"){
            $res *= (int)($value);
        }
    endforeach;
    return $res . "<br>";
}

echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000