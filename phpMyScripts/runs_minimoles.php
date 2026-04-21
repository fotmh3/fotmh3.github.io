<html>
<header><h1><center>Friends of the Mole Statistics</h1></header>
<body bgcolor="#079E07" link="black" alink="#079E07" vlink="#079E07"><font face="arial">

<?php
include 'config.php' ;
include "runs_title.php" ;

$sql = 'select hasher, runs, hared from current where class="C1" order by class, runs DESC limit 0,200' ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=1 frame=box rules=all width=50%>" ;
echo "<tr><b><th style='height:25px' width=50%>MINIMOLES</th><th width=20%>RUNS</th><th width=30%>HARED RUNS</th></b></tr>" ;
include 'runs_while_hue.php' ;
?>

<p>
<form><input type=button value="On Back to Menu" onclick=window.history.back()></form>
</body>
</html>