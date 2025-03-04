<?php

$index = 0;

// for($i = $index; $i <= 20; $i += 2){
//     if($i > 0 && $i % 2 == 0) echo $i . "<br>";
// }

// while($index <= 20){
//     if($index != 0 && $index % 2 == 0) echo $index . "<br>";
//     $index += 2;
// }

do{
    if($index != 0 && $index % 2 == 0) echo $index . "<br>";
    $index += 2;
}while($index <= 20);