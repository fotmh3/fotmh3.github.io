<html>
<head><title>Friends of the Mole Statistics</title></head>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?php

$servername='localhost'; $username='s127882qncw1raz7_fotmh3'; $password='Front^%Runner1378'; $dbname='s127882qncw1raz7_statistics';
$dbc = new mysqli( $servername, $username, $password, $dbname );
if ($dbc->connect_error) {die("Connection failed: " . $dbc->connect_error);}

$hare = $_POST["hare"] ;

if ( $hare =="" ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Blank. Invalid Hash Name.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ( strlen($hare) < 5 ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Hash Name Query <font color='gold'>$hare<font color='black'> must be at least 5 characters long.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ( strrchr($hare, '%' )) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>No matching Hares for Query <font color='gold'>$hare<font color='black'> .<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }


include 'config.php' ;

$query =  "select count(*) from venues where hares like '%$hare%' order by run limit 0,200" ;
$result = mysql_query($query) or die('Sorry, we could not count the number of results: ' . mysql_error() );
$X = mysql_result($result, 0) ;
if ( $X == 0 ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>No matching Hares for Query - <font color='gold'>$hare<font color='black'> .<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

echo "<font face='Comic Sans MS' size=4><center>Venues selected for Query - <font color='gold'>$hare<font face='arial' color='black'> .<p>" ;


$sql = "select * from venues where hares like '%$hare%' and dateX<current_date order by run limit 0,200" ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=1 frame=box rules=all width=100%>" ;
echo "<tr><b><th width = 6%>RUN</th><th width = 12%>DATE</th><th width = 40%>VENUE</th><th width = 42%>HARE(S)</th></b></tr>" ;
include ('venues_while2.inc') ;

?>

<p>
<form><center><input type=button value="On Back to Menu" onclick=window.history.back()></form>
</body>
</html>