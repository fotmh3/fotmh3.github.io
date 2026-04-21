<html>
<header><h1><center>Friends of the Mole Statistics</h1></header>
<font face="arial">
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?php

$servername='localhost'; $username='s127882qncw1raz7_fotmh3'; $password='Front^%Runner1378'; $dbname='s127882qncw1raz7_statistics';
$dbc = new mysqli( $servername, $username, $password, $dbname );
if ($dbc->connect_error) {die("Connection failed: " . $dbc->connect_error);}

$x = "<font size='4px'><font color='#079E07'>.<font size='3px'><font color='black'>" ;

include 'config.php' ;
include 'config_admin.php' ;
include 'font_size.php' ;
$size = "<font size=3>" ;

     $colA = "1613" ; $dateA = "21-01-2024" ;
     $colB = "1620" ; $dateB = "09-06-2024" ;

// List New Totals by Runs

$sql = "select hasher, name, runs, hared from inters_2024 where runs > 0 or class='A0' or class='B0' or class='C0' or class='D0'

  order by class, hared DESC, runs DESC, hasher ASC limit 0,300" ;

// $dbq=mysql_query($sql,$dbc) or die ("Couldn't list inters.") ;

echo "<center>$size<bold>fotmh3 - ANNUAL RUNS STATISTICS FOR 2024.</br>" ;
echo "<center>$size<bold>RUN # $colA $dateA TO RUN # $colB $dateB.</br>" ;
echo "<font color='#079E07'>.</br><font color='black'>" ;
echo "<font color='#079E07'>.</br><font color='black'>" ;
echo "<table border=1 bordercolor=black frame=box rules=all width=65%>" ;
echo "<tr>" ;
echo "<th width=35%>$size HASHER</th>" ;
echo "<th width=35%>$size HANDLE</th>" ;
echo "<th width=15%>$size RUNS</th>" ;
echo "<th width=15%>$size HARED</th>" ;
echo "</tr>" ;

$dbq = mysqli_query($dbc, $sql) ; if ($dbq->num_rows > 0)
{while ($row=$dbq->fetch_assoc()){
echo "<tr>" ;
echo "<td>$size$x        " .$row[hasher]. "</td>" ;
echo "<td>$size$x        " .$row[name]. "</td>" ;
echo "<td>$size<center>" .$row[runs].   "</td>" ;
echo "<td>$size<center>" .$row[hared].  "</td>" ;
echo "</tr>" ; }} else { echo "0 results"; } $dbq->close() ;

?>
</table>
</body>
</html><p></p>
<form><center><input type=button value='On Back to Menu' align='left' onclick=window.history.back()></form>