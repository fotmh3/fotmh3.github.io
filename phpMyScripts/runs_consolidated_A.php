
<html>
<header><h1><center>Friends of the Mole Statistics</h1></header>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">
    
<?php

$servername = 'localhost' ;
$username   = 's127882qncw1raz7_fotmh3' ;
$password   = 'Front^%Runner1378' ;
$dbname     = 's127882qncw1raz7_statistics' ;

// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 

$x = "<font size='4px'><font color='#079E07'>.<font size='3px'><font color='black'>" ;

echo "<p><p>" ;

echo "<table align='center' border=1 bordercolor=black frame=box rules=all width=70%>" ;

// echo "<table style="border:1px solid black;margin-left:auto;margin-right:auto;"> ;


echo "<tr><th width=34%> $size ACTIVE MOLES</th>
          <th width=34%> $size HANDLES</th>
          <th width=14%> $size RUNS</th>
          <th width=14%> $size HARED RUNS</th></tr>" ;

$sql = 'select hasher, name, runs, hared from current
           where status="A" or class like "%0" order by class, runs DESC limit 0,200' ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo "<tr>" ;
echo "<td> $x $size         " .$row[hasher]. "</td>" ;
echo "<td> $x $size         " .$row[name].   "</td>" ;
echo "<td> $size <center>" .$row[runs].   "</td>" ;
echo "<td> $size <center>" .$row[hared].  "</td>" ;
echo "</tr>" ; }
} else { echo "0 results"; }
$conn->close() ;

?>

</table><p>
</body>
</html>
<p><p>
<form><center><input type=button value='On Back to Menu' align='left' onclick=window.history.back()></form>
<p><p>