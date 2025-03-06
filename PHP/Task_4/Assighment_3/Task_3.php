<?php

setcookie("site[color]", "blue", 0, "/"); 
setcookie("site[font]", "Swat", 0, "/"); 


setcookie("site[layout]", "", time() - 3600, "/"); 


if (isset($_COOKIE['site'])) {

    unset($_COOKIE['site']['layout']);

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";


    $color = $_COOKIE['site']['color'] ?? "undefined";
    $font = $_COOKIE['site']['font'] ?? "undefined";
    echo "\"Your Color Is $color And Your Font Is $font\"";
} else {
    echo "Cookies are not set yet. Refresh the page.";
}
?>
