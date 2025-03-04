<?php
function get_arguments(...$args){
    $all = "";
    foreach($args as $value):
        $all .= " " . $value;
    endforeach;
    $all .= "<br>";
    return $all;
}

echo get_arguments("Hello", "Elzero", "Web", "School"); 
echo get_arguments("I", "Love", "PHP"); 