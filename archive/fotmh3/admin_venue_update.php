<html>
<head><title>Friends of the Mole Statistics - Admin</title></head>
<font face="arial">
<body>

<!! echo <table border=0 width=100%>


<?   include 'config.php' ;

$sql="update venue_legacy set venue = replace( venue, '*' , ',' )  " ;
$dbq=mysql_query($sql,$dbc)  or die ("Couldn't open venues_legacy Table.") ;

while ($row=mysql_fetch_array($dbq))   { }

?>
</body>
</html>



