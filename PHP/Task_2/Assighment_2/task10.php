<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

for($i = 0 , $e = $help_num; $i < $help_num + 1; $i++ , $e--){
    echo $nums[$i] . ' + ' . $nums[$e] . ' = ' . $nums[$i] +  $nums[$e] . "<br>";
}