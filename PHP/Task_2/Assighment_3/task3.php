<?php

function sum_all(...$nums) {
    $res = 0;
    foreach($nums as $value){
        if ($value === 10 ) :
             $res += 20;
        elseif($value <> 5) :
             $res += $value;
        endif;        
    }
    return $res . "<br>";
}

echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10);