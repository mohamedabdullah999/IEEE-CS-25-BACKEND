<?php

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach($money as $key => $value):
    echo "The Name IS ". $key. "And I Need " . $value . " Pound From Him<br>";
endforeach;
