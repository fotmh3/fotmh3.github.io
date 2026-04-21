<?php

   $dbhost = 'MySQL' ;
// $dbhost = 'turbify.com' ;
   
// $dbuser = 'fotmh3.com' ;
   $dbuser = 'fotmh3@yahoo.com'  ;
// $dbuser = 'turbify.com' ;
   
// $dbpass = 'Front^%Runner1378' ;
   $dbpass = 'Front^%Runner1399' ;

// $dbname = 'statistics' ;
   $dbname = 's127882qncw1raz7_statistics' ;
   
   
// $dbc = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to MySQL') ;


   $dbc = mysqli($dbhost, $dbuser, $dbpass);

// Check connection
if ($dbc->connect_error) {die("Connection failed: " . $conn->connect_error);} 
echo "Connected successfully";


mysql_select_db($dbname,$dbc) ;

$sql = 'select xhrun from current_xhrun limit 0,1' ;
$dbq = mysql_query($sql,$dbc) ;
$row = mysql_fetch_array($dbq) ;
$xhrun = $row[xhrun] ;

$dbtable1 = 'current' ;
$dbtable2 = "current_xhrun" ;
?>

<!-- embed src="http://www.open.ac.uk/Nature_Trail/BirdSong/SThrush.au" autostart="true" loop="true" hidden="true" volume=10></embed -->