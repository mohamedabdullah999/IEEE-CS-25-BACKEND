<?php

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

foreach($nums as $value):
    if($value - $help_num == 1 || $value - $help_num == 2) echo $names[$value - $help_num] . "<br>";
endforeach;    