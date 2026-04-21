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

     $inters = "inters_2024" ;
     $colA = "1613" ; $dateA = "21-01-2024" ;
     $colB = "1620" ; $dateB = "09-06-2024" ;
     
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
// Update runs
$i = $colA ;
while ( $i <= $colB )
{ $sql = "update $inters set runs = runs + 1 where x$i = 'x' or x$i = 'h' " ;
  if ($dbc->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $dbc->error; }
$i++ ; }

// Uopdate hared   
$i = $colA ;
while ( $i <= $colB )
{ $sql = "update $inters set hared = hared + 1 where x$i = 'h' " ;
  if ($dbc->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $dbc->error; }
$i++ ; }

// List New Totals by Runs

// (runs = 0 and (class='A1' or class='B1')) or
// (runs = 0 and class='C1') or
// runs > 0 and (class='A1' or class='B1' or class='C1' or class='A0' or class='B0' or class='C0')

?>

You reached the end.

</body>
</html>