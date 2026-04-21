<html>
<header><h1><center>Friends of the Mole Statistics</h1></header>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?php

include 'phpMyScripts/config.php' ;
include 'phpMyScripts/runs_title.php' ;

// $servername = 'localhost' ;
// $username   = 's127882qncw1raz7_fotmh3' ;
// $password   = 'Front^%Runner1378' ;
// $dbname     = 's127882qncw1raz7_statistics' ;
// $dbc= new mysqli( $servername, $username, $password, $dbname ) ;
// if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error) ; } 

$sql = 'select hasher, runs, hared from current where class="A1" order by class, runs DESC limit 0,200' ;
$dbq = mysqli_query($sql,$dbc) ;

echo "<table border=1 frame=box rules=all width=50%>" ;
echo "<tr><b><th style='height:25px' width=50%>HASHERS</th><th width=20%>RUNS</th><th width=30%>HARED RUNS</th></b></tr>" ;

include 'phpMyScripts/runs_while_hue.php' ;

?>

<p>
<form><input type=button value="On Back to Menu" onclick=window.history.back()></form>
</body>
</html>