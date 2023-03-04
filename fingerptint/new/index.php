<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="/favicons/favicon.ico">
</head>
<body>

<?php
$id = uniqid();
copy("favicon.ico","favicons/".$id.".ico");
$dir    = './favicons';
$files = array_diff(scandir($dir), array('.', '..'));
$imgs = "'".implode("','",$files)."'" ;
?>
<script>
window.onload = function(){
    var arr = [<?php echo $imgs; ?>];
    arr.forEach(element=>{
        const img = new Image(48,48);
        img.src = "/favicons/"+element+"?t="+(new Date().getTime());
        document.body.appendChild(img);
        var start = new Date().getTime();
        img.onload = function() {
            var end = new Date().getTime();
            var time = (end - start)
            console.log(element+" time: "+ time);
        }
    });
}
</script>
</body>
</html>
