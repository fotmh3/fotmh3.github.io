<html>
<body>
<?

include 'config.php' ;
include 'config_admin.php' ;

$servername='localhost'; $username='s127882qncw1raz7_fotmh3'; $password='Front^%Runner1378'; $dbname='s127882qncw1raz7_statistics';
$dbc = new mysqli( $servername, $username, $password, $dbname );
if ($dbc->connect_error) {die("Connection failed: " . $dbc->connect_error);}

     $inters = "inters_2024" ;
     $colA = "1016" ;

     $colB1 = "1504" ;
     $colB2 = "1620" ;

//   $colC = "1599" ;

// Drop Run columns

$i = $colA ;
while ( $i <= $colB1 )
{  $sql = "alter table $inters drop x$i " ;
if ($dbc->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $conn->error; }
// $dbq = mysql_query($sql,$dbc) ;
   $i++ ; }

$i = $colA ;
while ( $i <= $colB2 )
{  $sql = "alter table $inters drop x$i " ;
// $dbq = mysql_query($sql,$dbc) ;
if ($dbc->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $conn->error; }
   $i++ ; }

// $i = $colA ;
// while ( $i <= $colC )
// {  $sql = "alter table $inters drop c$i " ;
//    $dbq = mysql_query($sql,$dbc) ;
//    $i++ ; }

?>

You reached the end.
</body>
</html>