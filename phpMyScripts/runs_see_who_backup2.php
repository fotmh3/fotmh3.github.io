<html>
<head><title>Friends of the Mole Statistics</title></head>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?

$run = $_POST["run"] ;

$servername='localhost'; $username='s127882qncw1raz7_fotmh3'; $password='Front^%Runner1378'; $dbname='s127882qncw1raz7_statistics';
$dbc = new mysqli( $servername, $username, $password, $dbname );
if ($dbc->connect_error) {die("Connection failed: " . $dbc->connect_error);}
$sql = "select xhrun from current_xhrun" ;
$result = mysqli_query($dbc, $sql) ; if ($result->num_rows > 0) { while ($row=$result->fetch_assoc()) {$xhrun=$row[xhrun];}} ;

if ($run == "") {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Run Blank. Invalid Run Number.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ($run < 1016) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Run $run. Invalid Run Number.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ($run > $xhrun) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Run $run. Invalid Run Number. Last updated Run $xhrun.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

$sql = "select dateX, venue from venues where run='$run' " ;
$dbq = mysqli_query($sql,$dbc) or die ("Invalid Run Number") ;
while ($row = mysql_fetch_array($dbq)) {
include "dateX.php" ;
if (strstr($row[venue],'At Home') or strstr($row[venue],'Joint Run'))
{ echo "<center><font face='Comic Sans MS' size=4>Run $run $dateX3 " .$row[venue]. "</font></centre><p>" ; }
else { echo "<center><font face='Comic Sans MS' size=4>Run $run $dateX3 from The " .$row[venue]. "</font></centre><p>" ; } }

$dbcol='x'.$run ;
$sql = "select hasher, $dbcol from $dbtable1 where class = 'A1' and ($dbcol = 'x' or $dbcol = 'h') order by hasher limit 0,200" ;
$dbq = mysql_query($sql,$dbc) or die ("Invalid Run Number") ;
echo "<table border=0 width=25%>" ;
echo "<tr><b><th width=100%>HASHERS</th></b></tr>" ;
while ($row = mysql_fetch_array($dbq)) {
 if ( $row[$dbcol] == 'h' )  { $row[hasher] = $row[hasher]." (Hare)" ; }
echo "<tr>" ;
echo "<td><center>".$row[hasher]."</td>" ;
echo "</tr>" ; }
echo "</table><p>" ;

$sql = "select hasher, $dbcol from $dbtable1 where class = 'B1' and ($dbcol = 'x' or $dbcol = 'h') order by hasher limit 0,200" ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=0 width=25%>" ;
echo "<tr><b><th width=100%>HARRIETTES</th></b></tr>" ;
while ($row = mysql_fetch_array($dbq)) {
 if ( $row[$dbcol] == 'h' )  { $row[hasher] = $row[hasher]." (Hare)" ; }
echo "<tr>" ;
echo "<td><center>".$row[hasher]."</td>" ;
echo "</tr>" ; }
echo "</table><p>" ;

$sql = "select hasher, $dbcol from $dbtable1 where class = 'C1' and ($dbcol = 'x' or $dbcol = 'h') order by hasher limit 0,200" ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=0 width=25%>" ;
echo "<tr><b><th width=100%>MINIMOLES</th></b></tr>" ;
while ($row = mysql_fetch_array($dbq)) {
 if ( $row[$dbcol] == 'h' )  { $row[hasher] = $row[hasher]." (Hare)" ; }
echo "<tr>" ;
echo "<td><center>".$row[hasher]."</td>" ;
echo "</tr>" ; }
echo "</table><p>" ;

$sql = "select hasher, $dbcol from $dbtable1 where class = 'D1' and ($dbcol = 'x' or $dbcol = 'h') order by hasher limit 0,200" ;
$dbq = mysql_query($sql,$dbc) ;
echo "<table border=0 width=25%>" ;
echo "<tr><b><th width=100%>HOUNDS</th></b></tr>" ;
while ($row = mysql_fetch_array($dbq)) {
 if ( $row[$dbcol] == 'h' )  { $row[hasher] = $row[hasher]." (Hare)" ; }
echo "<tr>" ;
echo "<td><center>".$row[hasher]."</td>" ;
echo "</tr>" ; }
echo "</table><p>" ;

?>

<p>
<form><input type=button value="On Back to Menu" onclick=window.history.back()></form>
</body>
</html>