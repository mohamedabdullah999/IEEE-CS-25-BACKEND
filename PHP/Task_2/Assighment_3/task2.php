<?php
function get_arguments() {
    $all = implode(" ", func_get_args());
    return $all . "<br>";
}

echo get_arguments("Hello", "Elzero", "Web", "School"); 
echo get_arguments("I", "Love", "PHP");               
?>
