<?php

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

$start++;

for($i = $start; $i < sizeof($mix); $i++) :
    if(gettype($mix[$i]) !== "string") echo $mix[$i] . "<br>";
endfor;
