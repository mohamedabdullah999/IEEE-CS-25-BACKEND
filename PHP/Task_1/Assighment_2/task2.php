<?php

echo gettype(100); # => method 1
echo '<br>';
var_dump((int)100); # => method 2
echo '<br>';
echo get_debug_type(100); # => method 3