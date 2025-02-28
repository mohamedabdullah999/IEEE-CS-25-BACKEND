<?php
$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];

    echo "The Request Method Is Post And Username Is $username<br>";

    if (in_array($username, $admins)) {
        echo "This Username $username Is Admin";
    }
}
?>

<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>
