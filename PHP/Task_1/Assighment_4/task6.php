<?php
$a = "Elzero";
$b = "Web";
$c = "School";

$d = $a . " " . $b . " " . $c; #1
echo $d . "<br>";

$d = implode(" ", [$a, $b, $c]);#2
echo $d . "<br>";

$d = sprintf("%s %s %s", $a, $b, $c);#3
echo $d . "<br>";

$d = join(" ", [$a, $b, $c]);#4
echo $d . "<br>";



