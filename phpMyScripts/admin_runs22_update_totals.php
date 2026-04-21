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


// Check Update Column is populated
$sql = "select sum(if ($crun='h',1,0)) as H, sum(if ($crun='x',1,0)) as X from $dbtable1" ;
$dbq=mysql_query($sql,$dbc)  or die ("Couldn't list Current Table. Current Updates Column $crun missing.") ;
while ($row=mysql_fetch_array($dbq)) {
if ($row[X]==0 and $row[H]==0){
echo "Update Column in the Current Table is empty. Nothing to update." ;
exit ; }}

// Update Totals
$sql = "update $dbtable1 set runs = runs + 1 where $crun = 'x' or $crun = 'h' " ;
$dbq=mysql_query($sql,$dbc) or die ("Couldn't update Current Table. Current Updates Column missing.") ;
$sql = "update $dbtable1 set hared = hared + 1 where $crun = 'h' " ;
$dbq=mysql_query($sql,$dbc) ;

// Rename Update Column
$sql = "alter table $dbtable1 change $crun $xrun varchar(1)" ;
$dbq = mysql_query($sql,$dbc) or die ("Couldn't alter Current Table. Current column missing.") ;

// Add new, blank Update Column
$sql = "alter table $dbtable1 add $crun2 varchar(1) after hared" ;
$dbq = mysql_query($sql,$dbc) or die ("Couldn't alter Current Table. Current column missing.") ;
$sql = "update $dbtable1 set $crun2=' ' " ;
$dbq = mysql_query($sql,$dbc) or die ("Couldn't alter Current Table. Current column missing.") ;

// Update Last Updated Run Number
$sql = "update $dbtable2 set xhrun=$run" ;
$dbq=mysql_query($sql,$dbc) or die ("Couldn't update xhrun Table.") ;

// List new Totals
$sql = "select hasher, runs, hared, $xrun from $dbtable1
              where $xrun = 'x' or $xrun = 'h'
or class='A0' or class='B0' or class='C0' or class='D0' order by class, runs DESC limit 0,200" ;

$dbq=mysql_query($sql,$dbc) or die ("Couldn't list updates.") ;

echo "<center>$size CURRENT UPDATES<p>" ;
echo "<table border=1 frame=box rules=all width=40%>" ;
echo "<tr>" ;
echo "<th width=70%>$size HASHER</th>" ;
echo "<th width=10%>$size RUNS</th>" ;
echo "<th width=10%>$size HARED</th>" ;
echo "<th width=10%>$size $xrun</th>" ;
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



