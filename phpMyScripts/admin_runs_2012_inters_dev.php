<html>
<head><title>Friends of the Mole Statistics.</title></head>
<font face="arial">
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">
<?

include 'config.php' ;
include 'config_admin.php' ;
include 'font_size.php' ;
$size = "<font size=2>" ;

     $colA = "1136" ; $dateA = "02-01-2012" ;
 
     $colB = "1187" ;  $dateB = "30-12-2012" ;

// List New Totals by Runs

$sql = "select hasher, runs, hared from inters_2012 where runs > 0 or class='A0' or class='B0' or class='C0' or class='D0'

  order by class, hared DESC, runs DESC, hasher ASC limit 0,300" ;

$dbq=mysql_query($sql,$dbc) or die ("Couldn't list inters.") ;

echo "<center>$size<bold>fotmh3 - ANNUAL RUNS STATISTICS FOR 2012.</br>" ;
echo "<center>$size<bold>RUN # $colA $dateA TO RUN # $colB $dateB.</br>" ;
echo "<font color='#079E07'>.</br><font color='black'>" ;

echo "<font color='#079E07'>.</br><font color='black'>" ;
echo "<table border=1 frame=box rules=all width=35%>" ;
echo "<tr>" ;
echo "<th width=60%>$size HASHER</th>" ;
echo "<th width=20%>$size RUNS</th>" ;
echo "<th width=20%>$size HARED</th>" ;
echo "</tr>" ;

while ($row=mysql_fetch_row($dbq)) {
echo "<tr>" ;
echo "<td>$size<font color='#079E07'>.<font color='black'>"                  .$row[0].  "</td>" ;
echo "<td>$size<center>"  .$row[1].  "</td>" ;
echo "<td>$size<center>"  .$row[2].  "</td>" ;
echo "</tr>" ; }

echo "</table>" ;

?>
</body>
</html>