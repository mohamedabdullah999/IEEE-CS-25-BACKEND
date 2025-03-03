<?php

$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

$result = array_change_key_case(array_flip($friends), CASE_LOWER);
ksort($result);

print_r($result);

?>
