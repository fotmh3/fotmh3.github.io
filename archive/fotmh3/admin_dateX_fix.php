<html>
<head><title>Friends of the Mole Statistics - Admin</title></head>
<font face="arial">
<body>
<!!   table border=0 width=40%>

<?   include 'config.php' ;
$sql = "select run, date, year from venues_legacy" ;
$dbq=mysql_query($sql,$dbc)  or die ("Couldn't open venues_legacy Table.") ;


while ($row=mysql_fetch_array($dbq))   {

if ( $row[year] <> "" ) { $year = $row[year] ; }

if ( $row[date] <> "" ) {

       if (strstr($row[date],"/1/")) { $mm="01" ; }
elseif (strstr($row[date],"/2/")) { $mm="02" ; }
elseif (strstr($row[date],"/3/")) { $mm="03" ; }
elseif (strstr($row[date],"/4/")) { $mm="04" ; }
elseif (strstr($row[date],"/5/")) { $mm="05" ; }
elseif (strstr($row[date],"/6/")) { $mm="06" ; }
elseif (strstr($row[date],"/7/")) { $mm="07" ; }
elseif (strstr($row[date],"/8/")) { $mm="08" ; }
elseif (strstr($row[date],"/9/")) { $mm="09" ; }
elseif (strstr($row[date],"/10/")) { $mm="10" ; }
elseif (strstr($row[date],"/11/")) { $mm="11" ; }
elseif (strstr($row[date],"/12/")) { $mm="12" ; }

$n = strpos($row[date], '/') ;
$dd = substr($row[date],0,$n) ;
if ( strlen($dd)==1 ) { $dd="0$dd" ; }    }

else { $dd='00' ; $mm='00' ; }

$dateX = "$year-$mm-$dd" ;

if ($dd <> 0 ) { $day = date('D', strtotime($dateX)) ; }
else { $day='' ; }

//$dn = date('d', strtotime($dateX)) ;

//if (strstr($dn,"01")) { $dn="1" ; }
//if (strstr($dn,"02")) { $dn="2" ; }
//if (strstr($dn,"03")) { $dn="3" ; }
//if (strstr($dn,"04")) { $dn="4" ; }
//if (strstr($dn,"05")) { $dn="5" ; }
//if (strstr($dn,"06")) { $dn="6" ; }
//if (strstr($dn,"07")) { $dn="7" ; }
//if (strstr($dn,"08")) { $dn="8" ; }
//if (strstr($dn,"09")) { $dn="9" ; }

//$M = date('M', strtotime($dateX)) ;
//$Y  = date('Y', strtotime($dateX)) ;

//$X = "$dd $dn-$M $Y" ;

echo  $row[run]. ", $dateX<br>" ;

//echo "<tr>" ;
//echo "<td>" .$row[run].   "</td>" ;
//echo "<td>"  .$row[year].  "</td>" ;
//echo "<td>$year</td>" ;
//echo "<td>   $dateX           </td>" ;
//echo "<td>" .$row[date].  "</td>" ;
//echo "<td>$day</td>" ;
//echo "</tr>" ;

}

// echo "</table><p>" ;

?>
</body>
</html>



