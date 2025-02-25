<?php
$a = "10";
echo +$a;
echo '<br>';
echo gettype(+$a); #1
echo '<br>';

echo (int)($a);
echo '<br>';
echo gettype((int)($a));#2
echo '<br>';

echo $a + 0;
echo '<br>';
echo gettype($a + 0);
echo '<br>';