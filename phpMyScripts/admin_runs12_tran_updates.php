<html>
<header><h1><center>Friends of the Mole Statistics - Admin</h1></header>
<font face="arial">
<body>
<?

include 'config.php' ;
include 'config_admin.php' ;
include 'font_size.php' ;

$run = $xhrun + 1 ;
$crun = "c$run" ;
$xrun = "x$run" ;
$run2 = $xhrun + 2 ;
$crun2 = "c$run2" ;

// echo "xhrun=$xhrun, run=$run, crun=$crun, xrun=$xrun, run2=$run2, crun2=$crun2" ; exit ;

// Check Updates Column is populated
$sql = "select sum(if (updates='h',1,0)) as H, sum(if (updates='x',1,0)) as X from updates" ;
$dbq=mysql_query($sql,$dbc)  or die ("Couldn't list Updates Table.") ;
while ($row=mysql_fetch_array($dbq)) {
if ($row[X]==0 and $row[H]==0){
echo "Updates Column in Updates Table is empty. Nothing to Transfer." ;
exit ; }}

// Transfer Updates to Current Table
$sql = "update $dbtable1, updates set $dbtable1.$crun = updates.updates where $dbtable1.hasher = updates.hasher" ;
$dbq=mysql_query($sql,$dbc) or die ("Couldn't update Current Table $dbtable1. Current Update Column $crun missing.") ;

// Set Updates Column to blank
$sql = "update updates set updates = ' ' " ;
$dbq=mysql_query($sql,$dbc) or die ("Couldn't update Updates Table.") ;

// List Updates in Current Table
$sql = "select hasher, runs, hared, $crun from $dbtable1
               where $crun = 'x' or $crun = 'h'
or class='A0' or class='B0' or class='C0' or class='D0' order by class, runs DESC limit 0,200" ;

$dbq=mysql_query($sql,$dbc) or die ("Couldn't list Updates.") ;

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
echo "<td>$size "                  .$row[0].  "</td>" ;
echo "<td>$size<center>"  .$row[1].  "</td>" ;
echo "<td>$size<center>"  .$row[2].  "</td>" ;
echo "<td>$size<center>"  .$row[3].  "</td>" ;
echo "</tr>" ; }

echo "</table><p>" ;

?>
</body>
</html>



