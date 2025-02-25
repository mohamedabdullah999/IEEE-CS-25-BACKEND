<?php

echo "Hello PHP";
echo '<br>';
echo "Hello PHP";
#solution
echo '<br>';
echo (int)((bool)"Hello PHP");
echo '<br>';
echo gettype((int)((bool)"Hello PHP"));