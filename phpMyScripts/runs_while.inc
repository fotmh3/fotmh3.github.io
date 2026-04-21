<?
while ($row = mysql_fetch_array($dbq)) {
echo "<tr>" ;
echo "<td> $size ".$row[hasher]."</td>" ;
echo "<td> $size ".$row[name]."  </td>" ;
echo "<td> $size <center>".$row[runs]."  </td>" ;
echo "<td> $size <center>".$row[hared]."</td>" ;
echo "</tr>" ; }
echo "</table><p>" ;
?>