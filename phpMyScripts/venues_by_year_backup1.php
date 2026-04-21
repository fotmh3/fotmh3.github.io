<html>
<head><title>Friends of the Mole Statistics</title></head>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?php

$servername='localhost'; $username='s127882qncw1raz7_fotmh3'; $password='Front^%Runner1378'; $dbname='s127882qncw1raz7_statistics';
$dbc = new mysqli( $servername, $username, $password, $dbname );
if ($dbc->connect_error) {die("Connection failed: " . $dbc->connect_error);}

$year = $_POST["year"] ;

include 'config.php' ;

$sql = "select max(dateX) as X from venues limit 0,10000" ;
$dbq = mysql_query($sql,$dbc) ;
while ($row = mysql_fetch_array($dbq)) { $X = date('Y', strtotime($row[X])) ; }

if ( $year =="" ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Blank. Invalid year.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ( $year < 1991 ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>$year. Invalid year.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ( $year > $X ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>$year. Invalid year.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

$sql = "select * from venues where year(dateX)=$year and dateX<current_date() order by run limit 0,10000" ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=1 frame=box rules=all width=100%>" ;
echo "<tr><b><th width = 6%>RUN</th>
                             <th width = 11%>DATE</th>
                              <th width = 41%>VENUES FOR $year</th>
                                <th width = 42%>HARE(S)</th></b></tr>" ;
include ('venues_while.inc') ;

?>

<p>
<form><center><input type=button value="On Back to Menu" onclick=window.history.back()></form>
</body>
</html>