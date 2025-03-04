<?php

// $greet = function($someone){
//     return "Hello $someone <br>";
// }; => With Anoymous function

$greet = fn ($someone) => "Hello $someone <br>"; // with arrow function

echo $greet("Osama"); 