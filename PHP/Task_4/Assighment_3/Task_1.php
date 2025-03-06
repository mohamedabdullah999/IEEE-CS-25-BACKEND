<?php

$expireTime = time() + (2 * 30 * 24 * 60 * 60) + (5 * 24 * 60 * 60);

setcookie("site[layout]", "boxed", $expireTime, "/");
setcookie("site[font]", "swat", $expireTime, "/");
setcookie("site[color]", "blue", $expireTime, "/");

if(isset($_COOKIE['site'])) {
    echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; text-align: left;'>";
    echo "<tr>
            <th>Name</th>
            <th>Value</th>
            <th>Domain</th>
            <th>Path</th>
            <th>Expires/Max-Age</th>
          </tr>";

    foreach($_COOKIE['site'] as $key => $value) {
        echo "<tr>
                <td>site[$key]</td>
                <td>" . htmlspecialchars($value) . "</td>
                <td>localhost</td>
                <td>/</td>
                <td>" . date("Y-m-d\TH:i:s\Z", $expireTime) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Cookies are not set yet. Refresh the page.";
}
?>
