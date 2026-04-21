<html>
<head><title>Friends of the Mole Statistics - Admin</title></head>
<font face="arial">
<body>
<?

include 'config.php' ;
include 'config_admin.php' ;
include 'font_size.php' ;
$size = "<font size=2>" ;

$servername='localhost'; $username='s127882qncw1raz7_fotmh3'; $password='Front^%Runner1378'; $dbname='s127882qncw1raz7_statistics';
$dbc = new mysqli( $servername, $username, $password, $dbname );
if ($dbc->connect_error) {die("Connection failed: " . $dbc->connect_error);}

     $inters = "inters_2023" ;
     $colA = "1593" ; $dateA = "08-01-2023" ;
     $colB = "1598" ; $dateB = "26-03-2023" ;
     
echo "You reached here." ;

// Model query     
// if ($dbc->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $conn->error; }

// Zero Totals
$sql = "update $inters set runs = 0  where class = 'A1' or class = 'B1' or class = 'C1' or class = 'D1' " ;
// $dbq=mysqli_query($dbc, $sql) ; if ($result->num_rows > 0) { while ($row=$result->fetch_assoc()) } ;
 if ($dbc->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $dbc->error; }

$sql = "update $inters set hared = 0 where class = 'A1' or class = 'B1' or class = 'C1' or class = 'D1' " ;
// $dbq=mysqli_query($dbc,$sql) ; if ($result->num_rows > 0) { while ($row=$result->fetch_assoc()) } ;
 if ($dbc->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $dbc->error; }

// Update New Totals
$i = $colA ;
while ( $i <= $colB )
{  $sql = "update $inters set runs = runs + 1 where x$i = 'x' or x$i = 'h' " ;
   $dbq = mysql_query($sql,$dbc) ;
   $i++ ; }
$i = $colA ;
while ( $i <= $colB )
{  $sql = "update $inters set hared = hared + 1 where x$i = 'h' " ;
   $dbq = mysql_query($sql,$dbc) ;
   $i++ ; }

// List New Totals by Runs

// (runs = 0 and (class='A1' or class='B1')) or
// (runs = 0 and class='C1') or
// runs > 0 and (class='A1' or class='B1' or class='C1' or class='A0' or class='B0' or class='C0')


$sql = "select hasher, name, runs, hared from $inters where ( runs > 0 or class='A0' or class='B0' or class='C0' or class='D0' )  and status <> 'L'

  order by class, runs DESC, hasher ASC limit 0,300" ;

$dbq=mysql_query($sql,$dbc) or die ("Couldn't list inters.") ;

echo "<center>$size<bold>fotmh3 - HASH STATISTICS FOR 2022.</br>" ;
echo "<font color='FFFFFF'>.</br><font color='black'>" ;
echo "<center>$size<bold>RUN TOTALS FROM RUN # $colA $dateA TO RUN # $colB $dateB.</br>" ;
// echo "<center>$size( HASHERS AND HARRIETTES > 20. MINIMOLES > 10. )</bold><p>" ;
echo "<font color='FFFFFF'>.</br><font color='black'>" ;

echo "<table border=1 frame=box rules=all width=65%>" ;
echo "<tr>" ;
echo "<th width=35%>$size HASHER</th>" ;
echo "<th width=35%>$size HANDLE</th>" ;
echo "<th width=15%>$size RUNS</th>" ;
echo "<th width=15%>$size HARED RUNS</th>" ;
echo "</tr>" ;

while ($row=mysql_fetch_row($dbq)) {
echo "<tr>" ;
echo "<td>$size "               .$row[0].  "</td>" ;
echo "<td>$size"                 .$row[1].  "</td>" ;
echo "<td>$size<center>"    .$row[2].  "</td>" ;
echo "<td>$size<center>"     .$row[3].  "</td>" ;
echo "</tr>" ; }

echo "</table>" ;

?>
</body>
</html>