<html>
<head><title>Friends of the Mole Statistics - Admin</title></head>
<font face="arial">
<body>
<?
include 'config.php' ;

$sql = "select run, date, year, dateX from venues_legacy" ;
$dbq=mysql_query($sql,$dbc)  or die ("Couldn't open venues_dev 1 Table.") ;

echo "<table border=0 width=40%>" ;

while ($row=mysql_fetch_array($dbq)) {
echo "<tr>" ;
echo "<td>" .$row[run].   "</td>" ;
echo "<td>"  .$row[dateX].   "</td>" ;
echo "<td>" .$row[date].  "</td>" ;
echo "<td>" .$row[year].  "</td>" ;
echo "</tr>" ;   }

echo "</table><p>" ;

?>
</body>
</html>



