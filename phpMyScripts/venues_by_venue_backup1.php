<html>
<head><title>Friends of the Mole Statistics</title></head>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?php

$servername='localhost'; $username='s127882qncw1raz7_fotmh3'; $password='Front^%Runner1378'; $dbname='s127882qncw1raz7_statistics';
$dbc = new mysqli( $servername, $username, $password, $dbname );
if ($dbc->connect_error) {die("Connection failed: " . $dbc->connect_error);}

$venue = $_POST["venue"] ;

if ( $venue == "" ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Blank. Invalid Venue.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ( strlen($venue) < 5 ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Venue Query <font color='gold'>$venue<font color='black'> must be at least 5 characters long.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ( strrchr($venue, '%' )) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>No matching Venues for Query <font color='gold'>$venue<font color='black'> .<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }


include 'config.php' ;

$query =  "select count(*) from venues where venue like '%$venue%' order by run limit 0,10000" ;
$result = mysql_query($query) or die('Sorry, we could not count the number of results: ' . mysql_error() );
$X = mysql_result($result, 0) ;
if ( $X == 0 ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>No matching Venues for Query - <font color='gold'>$venue<font color='black'> .<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

echo "<font face='Comic Sans MS' size=4><center>Venues selected for Query - <font color='gold'>$venue<font face='arial' color='black'> .<p>" ;

$sql = "select * from venues where venue like '%$venue%' and dateX<current_date order by run limit 0,10000" ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=1 frame=box rules=all width=100%>" ;
echo "<tr><b><th width = 6%>RUN</th><th width = 12%>DATE</th><th width = 40%>VENUE</th><th width = 42%>HARE(S)</th></b></tr>" ;
include ('venues_while2.inc') ;

?>

<p>
<form><center><input type=button value="On Back to Menu" onclick=window.history.back()></form>
</body>
</html>