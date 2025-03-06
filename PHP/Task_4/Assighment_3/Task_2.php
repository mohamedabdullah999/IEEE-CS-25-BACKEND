<?php

$expireTime = time() + (2 * 30 * 24 * 60 * 60) + (5 * 24 * 60 * 60);

setcookie("site[color]", "blue", $expireTime, "/");
setcookie("site[font]", "Swat", $expireTime, "/");
setcookie("site[layout]", "boxed", $expireTime, "/");

if (isset($_COOKIE['site'])) {
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
