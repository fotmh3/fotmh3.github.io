<html>
<head><title>Friends of the Mole Statistics - Admin</title></head>
<font face="arial">
<body>

<!! echo <table border=0 width=100%>


<?   include 'config.php' ;

$sql="select run, venue1, venue2 from venues_legacy where (venue1<>'' or venue2<>'') limit 0,1000" ;
$dbq=mysql_query($sql,$dbc)  or die ("Couldn't open venues_legacy Table.") ;

while ($row=mysql_fetch_array($dbq))   {

if ( $row[venue1] <> "" ) {
if (substr($row[venue1],0,3)=='The') {
$n=strlen($row[venue1]) - 4 ;
$venue1 = substr($row[venue1],4,$n) ; }
else { $venue1=$row[venue1] ;  } }

if ( $row[venue1] <> "" and $row[venue2] <> "" ) { $venue = "$venue1* " .$row[venue2] ; }
elseif ( $row[venue1] == "" and $row[venue2] <> "" ) { $venue = $row[venue2] ; }
elseif ( $row[venue1] <> "" and $row[venue2] == "" ) { $venue = "$venue1" ; }
else { $venue="" ; }

$venue2 = str_replace ( "," , "*" , $venue ) ;

// echo "<tr>" ;
// echo "<td>" .$row[run].   ";</td>" ;
// echo "<td>$venue</td>" ;
// echo "<td>" .$row[hares]. "</td>" ;
// echo "<td>" .$row[venue2]. "</td>" ;
// echo "</tr>" ;


echo $row[run]. ", $venue2<br>" ;

}

//echo "</table><p>" ;

?>
</body>
</html>



