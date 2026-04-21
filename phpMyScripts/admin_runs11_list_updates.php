<html>
<header><h1><center>Friends of the Mole Statistics - Admin</h1></header>
<font face="arial">
<body>
<?

include 'config.php' ;
include 'config_admin.php' ;
include 'font_size.php' ;

$crun = $xhrun + 1 ;
// $crun = "c$crun" ;

// echo "xhrun=$xhrun, crun=$crun<br>" ;

$sql = "select sum(if (updates='h',1,0)) as H, sum(if (updates='x',1,0)) as X from updates" ;
$dbq=mysql_query($sql,$dbc)  or die ("Couldn't list Updates Table at 1.") ;
while ($row=mysql_fetch_array($dbq)) {
if ($row[X]==0 and $row[H]==0){
echo "Updates Column in Updates Table is empty. Nothing to list." ;
exit ; }}

$sql = "select updates.hasher, $dbtable1.runs, $dbtable1.hared, updates.updates from updates, $dbtable1
              where (updates.updates = 'x' or updates.updates = 'h'
                             or updates.class='A0' or updates.class='B0' or updates.class='C0' or updates.class='D0')
                                and updates.hasher = $dbtable1.hasher
              order by updates.class, $dbtable1.runs DESC limit 0,200" ;

$dbq=mysql_query($sql,$dbc)  or die ("Couldn't list Updates Table at 2.") ;

echo "<center>$size UPDATES RUN $crun<p>" ;
echo "<table border=1 frame=box rules=all width=40%>" ;
echo "<tr>" ;
echo "<th width=70%>$size HASHER</th>" ;
echo "<th width=10%>$size RUNS</th>" ;
echo "<th width=10%>$size HARED</th>" ;
echo "<th width=10%>$size UPDATES</th>" ;
echo "</tr>" ;

$dbq = mysqli_query($dbc, $sql) ; if ($dbq->num_rows > 0)

// {while ($row=$dbq->fetch_assoc()){echo "<tr><td><left>".$row[hasher]."</td></tr>" ; }} else { echo "0 results"; } $dbq->close() ;

{while ($row=mysql_fetch_row($dbq)) {
echo "<tr>" ;
echo "<td>$size"                 .$row[0].  "</td>" ;
echo "<td>$size<center>"  .$row[1].  "</td>" ;
echo "<td>$size<center>"  .$row[2].  "</td>" ;
echo "<td>$size<center>"  .$row[3].  "</td>" ;
echo "</tr>" ; }}  else { echo "0 results"; } $dbq->close() ;

echo "</table><p>" ;

?>
</body>
</html>



