<?php
function greeting($name, $gender = "") {
    if ($gender === "Male") {
        return "Hello Mr $name<br>";
    } elseif ($gender === "Female") {
        return "Hello Miss $name<br>";
    } else {
        return "Hello $name<br>";
    }
}

echo greeting("Osama", "Male");   
echo greeting("Eman", "Female");
echo greeting("Sameh");          
?>
