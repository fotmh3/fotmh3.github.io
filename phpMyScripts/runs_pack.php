<html>
<header><h1><center>Friends of the Mole Statistics - Mole Pack</h1></header>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">
<form><input type=button value="On Back to Menu" align="left" onclick=window.history.back()></form>

<?php
// include 'phpMyScripts/config.php' ;
// include 'phpMyScripts/runs_title.php' ;

$servername = 'localhost' ;
$username   = 's127882qncw1raz7_fotmh3' ;
$password   = 'Front^%Runner1378' ;
$dbname     = 's127882qncw1raz7_statistics' ;

// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 

echo "<table border=1 frame=box rules=all width=70%>" ;
echo "<tr><th width=34%> $size HASHERS</th>
          <th width=34%> $size HANDLES</th>
          <th width=14%> $size RUNS</th>
          <th width=14%> $size HARED RUNS</th></tr>" ;

$sql = 'select hasher, name, runs, hared from current where class="A1" or class="B1" or class="C1" order by runs DESC limit 0,200' ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo "<tr>" ;
echo "<td> $size         " .$row[hasher]. "</td>" ;
echo "<td> $size         " .$row[name].   "</td>" ;
echo "<td> $size <center>" .$row[runs].   "</td>" ;
echo "<td> $size <center>" .$row[hared].  "</td>" ;
echo "</tr>" ; }
} else { echo "0 results"; }
$conn->close() ;

echo "</body>" ;
echo "</html>" ;
echo "<form><input type=button value='On Back to Menu' align='left' onclick=window.history.back()></form>" ;
?>