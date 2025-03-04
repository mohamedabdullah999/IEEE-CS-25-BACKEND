<?php

$num = 2;
$num2 = 1;
while ($num < 520) {
    echo $num2 . "<br>";
    $num2 *= 2;
    $num2 += 2;
    $num = $num2;
}
