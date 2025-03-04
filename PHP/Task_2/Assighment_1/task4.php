<?php

$a = 30;
$b = 20;
$c = 10;

$res = ($a + $b === $c) 
    ? "A + B = C" 
    : (($a + $c === $b) 
        ? "A + C = B" 
        : (($b + $c === $a) 
            ? "B + C = A" 
            : "The End"));

echo $res;

?>
