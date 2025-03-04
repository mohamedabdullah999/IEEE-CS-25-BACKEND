<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$letters = 0;
$nums = 0;

foreach($mix as $value):
    if(gettype($value) !== "string") :
        echo $value . "<br>";
        $nums++;
    else: 
        $letters++;
    endif;    
endforeach;

echo "\"$nums Numbers Printed<br>";
echo "\"$letters Letters Ignored<br>";