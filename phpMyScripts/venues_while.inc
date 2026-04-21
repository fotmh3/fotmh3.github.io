<?
while ($row = mysql_fetch_array($dbq)) {
include "dateX.php" ;
echo "<tr>" ;
echo "<td><center>".$row[run]."</td>" ;
echo "<td><font color='#079E07'>..<font color='black'>$dateX1</td>" ;
echo "<td><font color='#079E07'>..<font color='black'>".$row[venue]."</td>" ;
echo "<td><font color='#079E07'>..<font color='black'>".$row[hares]."</td>" ;
echo "</tr>" ; }
echo "</table><p>" ;
?>