<?php
$index = 0;
while ($index <= 20) {
    if ($index % 2 == 0 && $index != 0) {
        echo $index . "<br>";
    }
    $index++;
}
?>

<?php

for ($index = 2; $index <= 20; $index += 2) {
    echo $index . "<br>";
}
?>

<?php

$index = 2;
do {
    echo $index . "<br>";
    $index += 2;
} while ($index <= 20);
?>

?>

