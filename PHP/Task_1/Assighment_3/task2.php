<?php
$name = "elzero";
$$name = "Web";

echo $$name; #1
echo '<br>';
echo $elzero; #2
echo '<br>';
echo "${$name}"; #3
echo '<br>';
echo "$elzero"; #4
echo '<br>';
echo ${"elzero"}; #5