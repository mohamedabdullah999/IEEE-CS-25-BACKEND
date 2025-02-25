<?php

echo '<pre>';
print_r([
    "FrontEnd" => [
        "0" => "HTML",
        "1" => "CSS",
        "JS" => [
            "Vuejs" => [
                "2" => "v2",
                "3" => "v3" 
            ],
            "0" => "Reactjs",
            "1" => "Svelte"
        ]
        ],
    "BackEnd" => [
        "PHP",
        "MySQL",
        "Security"
    ] ,
    "Git",
    "Githup",
    "Testing" => [
        "Unit Testing",
        "End To End",
        "Integration"
    ]
]);
echo '</pre>';