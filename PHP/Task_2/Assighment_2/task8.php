<?php

$nums = [1, 13, 12, 20, 51, 17, 30];

foreach($nums as $value):
    if($value % 2 == 0) echo $value / 2 . "<br>";
endforeach;