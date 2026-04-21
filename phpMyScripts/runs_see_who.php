<html>
<header><h1><center>Friends of the Mole Statistics</h1></header>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?

$run = $_POST["run"] ;

$servername='localhost'; $username='s127882qncw1raz7_fotmh3'; $password='Front^%Runner1378'; $dbname='s127882qncw1raz7_statistics';
$dbc = new mysqli( $servername, $username, $password, $dbname );
if ($dbc->connect_error) {die("Connection failed: " . $dbc->connect_error);}
$sql = "select xhrun from current_xhrun" ;
$result = mysqli_query($dbc, $sql) ; if ($result->num_rows > 0) { while ($row=$result->fetch_assoc()) {$xhrun=$row[xhrun];}} ;

$x = "<font size='4px'><font color='#079E07'>.<font size='3px'><font color='black'>" ;

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

//$sql = "select dateX, venue from venues where run='$run' " ;
//$dbq = mysqli_query($sql,$dbc) or die ("Invalid Run Number") ;
//while ($row = mysql_fetch_array($dbq)) {
//include "dateX.php" ;
//if (strstr($row[venue],'At Home') or strstr($row[venue],'Joint Run'))
//{ echo "<center><font face='Comic Sans MS' size=4>Run $run $dateX3 " .$row[venue]. "</font></centre><p>" ; }
//else { echo "<center><font face='Comic Sans MS' size=4>Run $run $dateX3 from The " .$row[venue]. "</font></centre><p>" ; } }

$dbcol='x'.$run ;
$sql = "select class, runs, hasher, $dbcol from current where $dbcol='x' or $dbcol='h' or class like '%0'
order by class, runs desc limit 0,200" ;


echo "<table align='center' border=1 bordercolor=black frame=box rules=all width=30%>" ;
echo "<tr><b><th width=100%>HASHERS on RUN $run</th></b></tr>" ;


$dbq = mysqli_query($dbc, $sql) ; if ($dbq->num_rows > 0)
{while ($row=$dbq->fetch_assoc())
{echo "<tr><td>$x<left>".$row[hasher]."</td></tr>" ; }} else { echo "0 results"; } $dbq->close() ;

?>

</table><p>
<p>
<form><center><input type=button value="On Back to Menu" onclick=window.history.back()></form>
</body>
</html>