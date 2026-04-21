<?

$sql = "select dateX, venue from venues where run = '$xhrun' " ;
$dbq = mysqli_query($sql,$dbc) or die ("Invalid Run Number") ;
while ($row = mysql_fetch_array($dbq)) {
include "dateX.php" ;
echo "<center><font face='Comic Sans MS' size=4>Totals up to and including Run $xhrun $dateX3</font></centre><p>" ; }

?>