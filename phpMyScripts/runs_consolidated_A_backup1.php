<html>
<header><h1><center>Friends of the Mole Statistics</h1></header>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?php
include 'config.php' ;
echo "<center><font face='Comic Sans MS' size=2>Active Moles from Run 1060 5-Jul 2010.</font></centre>" ;
include 'font_size.php' ;

$sql = "select dateX, venue from venues where run = '$xhrun' " ;
$dbq = mysql_query($sql,$dbc) or die ("Invalid Run Number") ;
while ($row = mysql_fetch_array($dbq)) {
include "dateX.php" ;
echo "<center><font face='Comic Sans MS' size=2>Totals up to and including Run $xhrun $dateX3</font></centre><p>" ; }

$sql = 'select hasher, name, runs, hared from current where class="A1" and status="A" order by class, runs DESC limit 0,200' ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=1 frame=box rules=all width=65%>" ;
echo "<tr><th width=35%> $size HASHERS</th><th width=35%> $size HANDLES</th><th width=15%> $size RUNS</th><th width=15%> $size HARED RUNS</th></tr>" ;
include ('runs_while.inc') ;

$sql = 'select hasher, name, runs, hared from current where class="B1" and status="A" order by class, runs DESC limit 0,200' ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=1 frame=box rules=all width=65%>" ;
echo "<tr><b><th width=35%> $size HARIETTES</th><th width=35%> $size HANDLES</th><th width=15%> $size RUNS</th><th width=15%> $size HARED RUNS</th> </b></tr>" ;
include ('runs_while.inc') ;

$sql = 'select hasher, name, runs, hared from current where class="C1" and status="A" order by class, runs DESC limit 0,200' ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=1 frame=box rules=all width=65%>" ;
echo "<tr><b><th width=35%> $size MINIMOLES</th><th width=35%> $size HANDLES</th><th width=15%> $size RUNS</th><th width=15%> $size HARED RUNS</th> </b></tr>" ;
include ('runs_while.inc') ;

$sql = 'select hasher, name, runs, hared from current where class="D1" and status="A" order by class, runs DESC limit 0,200' ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=1 frame=box rules=all width=65%>" ;
echo "<tr><b><th width=35%> $size HOUNDS</th><th width=35%> $size HANDLES</th><th width=15%> $size RUNS</th><th width=15%> $size HARED RUNS</th> </b></tr>" ;
include ('runs_while.inc') ;

?>

<p>
<form><input type=button value="On Back to Menu" onclick=window.history.back()></form>
</body>
</html>