<img src="http://session:ID@website/">
or

Firefox or Internet Explorer
<script>
    function forceBasic Authentication() {
    var req = null;
    var req = new XMLHttpRequest();
    if (!req) { req = new ActiveXObject("Msxml2.XMLHTTP"); }
    if (!req) { req = new ActiveXObject("Microsoft.XMLHTTP");}
    req.open('GET', 'http://website/', false, 'Session', 'ID');
    req.send(null);
    }
</script>

<?php
print_r($_SERVER);