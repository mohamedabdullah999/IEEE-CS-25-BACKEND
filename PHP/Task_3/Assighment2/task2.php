<?php

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

$result = array_combine(array_map("strtolower", $codes), $means);

print_r($result);

?>
