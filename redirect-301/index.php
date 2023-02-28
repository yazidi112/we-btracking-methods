<?php
/*
 * redirect tracking method proof of concept
 * @author: Elie Bursztein contact@elie.net
 * @see: https://elie.net/blog/security/tracking-users-that-block-cookies-with-a-http-redirect/ for an explanation
 * @disclamer: code provided "AS IS". use it at your own risks :)
 */
if (!isset ($_REQUEST["id"])) {
    $expires = 60*60*24*14;
    header("Pragma: public");
    header("Last-Modified: Mon, 26 Jul 2022 05:00:00 GMT\n");
    header("Cache-Control: maxage=".$expires);
    header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expires) . " GMT\n");
    $id = mt_rand(100, 10000);
    header("Location: http://localhost:8080/redirect-tracking.php?id=$id",TRUE, 301);
} else {
    $id = $_REQUEST["id"];
}
?>


<?php

echo "<h2>Tracking user using HTTP 302 Redirect</h2>";

echo "Hello visitor, your tracking id is <b>$id</b>\n<br>";
echo 'You can test that the tracking is working by going to the page 
<a href="redirect-tracking.php">page<br>';

?>