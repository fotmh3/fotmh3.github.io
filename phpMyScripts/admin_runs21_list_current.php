<html>
<header><h1><center>Friends of the Mole Statistics - Admin</h1></header>
<font face="arial">
<body>
<?

include 'config.php' ;
include 'config_admin.php' ;
include 'font_size.php' ;

$crun = $xhrun + 1 ;
$crun = "c$crun" ;

// echo "xhrun=$xhrun, crun=$crun<br>" ;

$sql = "select sum(if ($crun='h',1,0)) as H, sum(if ($crun='x',1,0)) as X from $dbtable1" ;
$dbq=mysql_query($sql,$dbc)  or die ("Couldn't list Current Table. Current Updates Column $crun missing.") ;
while ($row=mysql_fetch_array($dbq)) {
if ($row[X]==0 and $row[H]==0){
echo "Update Column in the Current Table is empty. Nothing to list." ;
exit ; }}

$sql = "select hasher, runs, hared, $crun from $dbtable1
              where $crun = 'x' or $crun = 'h'
or class='A0' or class='B0' or class='C0' or class='D0' order by class, runs DESC limit 0,200" ;

$dbq=mysql_query($sql,$dbc)  or die ("Couldn't list Current Table. Current Updates Column $crun missing.") ;

echo "<center>$size CURRENT UPDATES<p>" ;
echo "<table border=1 frame=box rules=all width=35%>" ;
echo "<tr>" ;
echo "<th width=70%>$size HASHER</th>" ;
echo "<th width=10%>$size RUNS</th>" ;
echo "<th width=10%>$size HARED</th>" ;
echo "<th width=10%>$size $crun</th>" ;
echo "</tr>" ;

while ($row=mysql_fetch_row($dbq)) {
echo "<tr>" ;
echo "<td>$size"                   .$row[0].  "</td>" ;
echo "<td>$size<center>"  .$row[1].  "</td>" ;
echo "<td>$size<center>"  .$row[2].  "</td>" ;
echo "<td>$size<center>"  .$row[3].  "</td>" ;
echo "</tr>" ; }

echo "</table><p>" ;

?>
</body>
</html>



