<html>
<body>
<?

include 'config.php' ;
include 'config_admin.php' ;

     $inters = "stats" ;
     $colA = "1016" ;

     $colB1 = "1504" ;
     $colB2 = "1603" ;

     $colC = "1557" ;

// Drop Run columns

$i = $colA ;
while ( $i <= $colB1 )
{  $sql = "alter table $inters drop x$i " ;
   $dbq = mysql_query($sql,$dbc) ;
   $i++ ; }

$i = $colA ;
while ( $i <= $colB2 )
{  $sql = "alter table $inters drop x$i " ;
   $dbq = mysql_query($sql,$dbc) ;
   $i++ ; }

$i = $colA ;
while ( $i <= $colC )
{  $sql = "alter table $inters drop c$i " ;
   $dbq = mysql_query($sql,$dbc) ;
   $i++ ; }

?>
</body>
</html>