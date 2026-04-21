<html>
<head><title>Friends of the Mole Statistics.</title></head>
<font face="arial">
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">
<?

include 'config.php' ;
include 'config_admin.php' ;
include 'font_size.php' ;
$size = "<font size=2>" ;

     $colA = "1548" ; $dateA = "11-01-2021" ;
     $colB = "1574" ; $dateB = "12-12-2021" ;

// List New Totals by Runs

// $sql = "select hasher, name, runs, hared from inters_2021 where runs > 0 or class='A0' or class='B0' or class='C0' or class='D0'   order by class, hared DESC, runs DESC, hasher ASC limit 0,300" ;

$sql = "select hasher, name, runs, hared from inters_2021 where runs > 0 or class='A0' or class='B0' or class='C0' or class='D0'   order by class, name ASC limit 0,300" ;


$dbq=mysql_query($sql,$dbc) or die ("Couldn't list inters.") ;

echo "<center>$size<bold>fotmh3 - ANNUAL RUNS STATISTICS FOR 2021.</br>" ;
echo "<center>$size<bold>RUN # $colA $dateA TO RUN # $colB $dateB.</br>" ;
echo "<font color='#079E07'>.</br><font color='black'>" ;
echo "<font color='#079E07'>.</br><font color='black'>" ;
echo "<table border=1 frame=box rules=all width=65%>" ;
echo "<tr>" ;
echo "<th width=35%>$size HASHER</th>" ;
echo "<th width=35%>$size HANDLE</th>" ;
echo "<th width=15%>$size RUNS</th>" ;
echo "<th width=15%>$size HARED</th>" ;
echo "</tr>" ;

while ($row=mysql_fetch_row($dbq)) {
echo "<tr>" ;
echo "<td>$size<font color='black'>"  .$row[0].  "</td>" ;
echo "<td>$size<font color='black'>"  .$row[1].  "</td>" ;
echo "<td>$size<center>"  .$row[2].  "</td>" ;
echo "<td>$size<center>"  .$row[3].  "</td>" ;
echo "</tr>" ; }

echo "</table>" ;

?>
</body>
</html>