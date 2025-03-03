<?php

$num1 = 11.5; 
$num2 = 9.4898; 
$num3 = -7.5; 

echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "\n"; 
echo round($num2, 1) . "\n"; 
echo round($num3, 0, PHP_ROUND_HALF_UP) . "\n"; 

?>
