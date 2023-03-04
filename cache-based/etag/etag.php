<?php

if(!isset($_SERVER['HTTP_IF_NONE_MATCH'])){
    $etag = rand(1,1000);
    $max_age= 60*60*24; // 60*60*24 == 1 day
    header('Cache-Control: public, max-age='.$max_age);
    header("Etag: $etag");
    echo"<div id='etag'>". $etag."</div>";
}else{
    header('HTTP/1.1 304 Not Modified');
    exit();
}
?>

