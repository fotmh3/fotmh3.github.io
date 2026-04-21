<html>
<head><title>Friends of the Mole Statistics</title></head>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">
<?php
include 'phpMyScripts/config.php' ;
include 'phpMyScripts/runs_title.php' ;
$sql = 'select hasher, name, runs, hared from current where class="A1" or class="B1" or class="C1" order by runs DESC limit 0,200' ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=1 frame=box rules=all width=65%>" ;
echo "<tr><th width=35%> $size HASHERS</th><th width=35%> $size HANDLES</th><th width=15%> $size RUNS</th><th width=15%> $size HARED RUNS</th></tr>" ;
include ('phpMyScripts/runs_while.inc') ;
?>
<p>
<form><input type=button value="On Back to Menu" align="right" onclick=window.history.back()></form>
</body>
</html>