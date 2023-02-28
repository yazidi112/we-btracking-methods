<?php
//header("HTTP/1.1 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
<iframe id="iframe2" width="1" height="1" src="/etag/etag.php" onload="get()"></iframe>
<h1>page 1</h1>
your id is : <span id="id"></span>
<div>
    <a href="/etag/index.php">Page 1</a>
    <a href="/etag/page2.php">Page 2</a>
</div>
<script>
    function get(){
        var iframe = document.getElementById("iframe2");
        var doc = iframe.contentDocument || iframe.contentWindow.document;
        var id = doc.getElementById("etag").innerHTML;
        document.getElementById("id").innerHTML = id;
    }
</script>
</body>
</html>

