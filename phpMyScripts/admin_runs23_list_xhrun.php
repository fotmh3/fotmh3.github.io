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

// List new Totals
$sql = "select hasher, runs, hared, x$xhrun from $dbtable1
              where x$xhrun = 'x' or x$xhrun = 'h'
or class='A0' or class='B0' or class='C0' or class='D0' order by class, runs DESC limit 0,200" ;

$dbq=mysql_query($sql,$dbc) or die ("Couldn't list updates.") ;

echo "<center>$size CURRENT UPDATES<p>" ;
echo "<table border=1 frame=box rules=all width=35%>" ;
echo "<tr>" ;
echo "<th width=55%>$size HASHER</th>" ;
echo "<th width=15%>$size RUNS</th>" ;
echo "<th width=15%>$size HARED</th>" ;
echo "<th width=15%>$size x$xhrun</th>" ;
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



