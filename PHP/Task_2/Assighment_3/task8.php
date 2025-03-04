<?php

$message = "Hello";

$$message = function ($someone) use($message){
    return "$message $someone";
};


echo $Hello("Osama"); 