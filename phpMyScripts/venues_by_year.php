<html>
<header><h1><center>Friends of the Mole Statistics</h1></header>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?php

$servername='localhost'; $username='s127882qncw1raz7_fotmh3'; $password='Front^%Runner1378'; $dbname='s127882qncw1raz7_statistics';
$dbc = new mysqli( $servername, $username, $password, $dbname );
if ($dbc->connect_error) {die("Connection failed: " . $dbc->connect_error);}

$x = "<font size='4px'><font color='#079E07'>.<font size='3px'><font color='black'>" ;

$year = $_POST["year"] ;

$sql = "select max(dateX) as X from venues limit 0,10000" ;

// $dbq = mysql_query($sql,$dbc) ;
// while ($row = mysql_fetch_array($dbq)) { $X = date('Y', strtotime($row[X])) ; }

// $result = mysqli_query($dbc, $sql) ; if ($result->num_rows > 0) { while ($row=$result->fetch_assoc()) {$xhrun=$row[xhrun];}} ;

$result = mysqli_query($dbc, $sql) ; if ($result->num_rows > 0) { while ($row=$result->fetch_assoc()) {$X = date('Y', strtotime($row[X])) ;}} ;


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

$sql = "select * from venues where year(dateX)=$year and dateX<current_date() or dateX=current_date order by run limit 0,10000" ;

echo "<table align='center' border=1 bordercolor=black frame=box rules=all width=80%>" ;
echo "<tr><b><th width = 6%>  RUN</th>
             <th width = 11%> DATE</th>
             <th width = 51%> VENUES FOR $year</th>
             <th width = 32%> HARE(S)</th></b></tr>" ;

$dbq = mysqli_query($dbc, $sql) ; if ($dbq->num_rows > 0) {while ($row=$dbq->fetch_assoc()) {

echo "<tr><td><center>".$row[run].  "</td>" ;
echo     "<td><center>".$row[dateX]."</td>" ;
echo     "<td><left> $x ".$row[venue]."</td>" ;
echo     "<td><left> $x ".$row[hares]. "</td></tr>" ; }}

else { echo "0 results"; } $dbq->close() ;

?>

</table>
<p>
<form><center><input type=button value="On Back to Menu" onclick=window.history.back()></form>
</body>
</html>