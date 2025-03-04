<?php

$admins = ["Osama", "Ahmed", "Sayed"];

if($_SERVER["REQUEST_METHOD"] === "POST" && in_array($_POST['username'] , $admins)){
    echo " The Request is Post And Username IS " . $_POST['username'] . '<br>';
    echo "The username " . $_POST['username'] . "is Admin";
}
?>

<form action="" method="POST">
    <input type="text" name="username">
    <input type="submit" value="Send">
</form>