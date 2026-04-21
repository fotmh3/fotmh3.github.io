
<?

$dbtable1 = 'current' ;
$dbtable2 = "current_xhrun" ;

$sql = "select xhrun from $dbtable2 limit 0,1" ;
$dbq = mysql_query($sql,$dbc) ;
$row = mysql_fetch_array($dbq) ;
$xhrun = $row[xhrun] ;

?>

