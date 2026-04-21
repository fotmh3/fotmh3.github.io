<html>
<header><h1><center>Friends of the Mole Statistics</h1></header>
<font face="arial">
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?php

$servername='localhost'; $username='s127882qncw1raz7_fotmh3'; $password='Front^%Runner1378'; $dbname='s127882qncw1raz7_statistics';
$dbc = new mysqli( $servername, $username, $password, $dbname );
if ($dbc->connect_error) {die("Connection failed: " . $dbc->connect_error);}

$x = "<font size='4px'><font color='#079E07'>.<font size='3px'><font color='black'>" ;

include 'phpMyAdmin/config.php' ;
include 'phpMyAdmin/config_admin.php' ;
include 'font_size.php' ;
$size = "<font size=3>" ;

         $colA = "1085" ; $dateA = "02-01-2011" ;

//     $colB = "1126" ; $dateB = "17-10-2011" ;
//     $colB = "1127" ; $dateB = "24-10-2011" ;
//     $colB = "1128" ; $dateB = "31-10-2011" ;
//     $colB = "1129" ; $dateB = "07-11-2011" ;
//     $colB = "1130" ; $dateB = "14-11-2011" ;
//     $colB = "1131" ; $dateB = "20-11-2011" ;
//     $colB = "1132" ; $dateB = "27-11-2011" ;
//     $colB = "1133" ; $dateB = "05-12-2011" ;
//     $colB = "1134" ; $dateB = "12-12-2011" ;

        $colB = "1135" ; $dateB = "19-12-2011" ;

// List New Totals by Runs

$sql="select hasher, runs, hared from inters_2011 where runs > 0 or class like '%0'
           order by class, hared DESC, runs DESC, hasher ASC limit 0,500" ;

echo "<center>$size<bold>fotmh3 - ANNUAL RUNS STATISTICS FOR 2011.</br>" ;
echo "<center>$size<bold>RUN # $colA $dateA TO RUN # $colB $dateB.</br>" ;
echo "<font color='#079E07'>.</br><font color='black'>" ;

echo "<center>$size<bold>Grand Total in Attendance - 1287 including Moles, Mole Hounds, Hastings H3 and Jelly Legs</br>" ;
echo "<center>$size<bold>on 51 Runs set by 100 Hares - giving 25.23 Attendees per Run set by 1.96 Hares per Run.</br><p>" ;

// echo "<font color='#079E07'>.</br><font color='black'>" ;

echo "<table border=1 bordercolor=black frame=box rules=all width=35%>" ;
echo "<tr>" ;
echo "<th width=60%> $size HASHER</th>" ;
echo "<th width=20%> $size RUNS</th>" ;
echo "<th width=20%> $size HARED</th>" ;
echo "</tr>" ;

// $dbq = mysqli_query($dbc, $sql) ; if ($dbq->num_rows > 0)
// {while ($row=$dbq->fetch_assoc()){echo "<tr><td><left>".$row[hasher]."</td></tr>" ; }} else { echo "0 results"; } $dbq->close() ;

$dbq = mysqli_query($dbc, $sql) ; if ($dbq->num_rows > 0)
{while ($row=$dbq->fetch_assoc()){
echo "<tr>" ;
echo "<td>$size$x      " .$row[hasher]. "</td>" ;
echo "<td>$size<center>" .$row[runs].   "</td>" ;
echo "<td>$size<center>" .$row[hared].  "</td>" ;
echo "</tr>" ; }} else { echo "0 results"; } $dbq->close() ;

?>
</table>
</body>
</html>
<form><center><input type=button value='On Back to Menu' align='left' onclick=window.history.back()></form>