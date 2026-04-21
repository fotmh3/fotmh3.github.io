<html>
<head><title>Friends of the Mole Statistics.</title></head>
<font face="arial">
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">
<?

include 'config.php' ;
include 'config_admin.php' ;
include 'font_size.php' ;
$size = "<font size=2>" ;

         $colA = "1085" ; $dateA = "02-01-2011" ;

//     $colB = "1126" ; $dateB = "17-10-2011" ;
//     $colB = "1127" ; $dateB = "24-10-2011" ;
//     $colB = "1128" ; $dateB = "31-10-2011" ;
//     $colB = "1129" ; $dateB = "07-11-2011" ;
//     $colB = "1130" ; $dateB = "14-11-2011" ;
//     $colB = "1131" ; $dateB = "20-11-2011" ;
//     $colB = "1132" ; $dateB = "27-11-2011" ;
//     $colB = "1133" ; $dateB = "05-12-2011" ;
//     $colB = "1134" ; $dateB = "12-12-2011" ;

        $colB = "1135" ; $dateB = "19-12-2011" ;

// List New Totals by Runs

$sql = "select hasher, runs, hared from inters_2011 where runs > 0 or class='A0' or class='B0' or class='C0' or class='D0'

  order by class, hared DESC, runs DESC, hasher ASC limit 0,300" ;


$dbq=mysql_query($sql,$dbc) or die ("Couldn't list inters.") ;

echo "<center>$size<bold>fotmh3 - ANNUAL RUNS STATISTICS FOR 2011.</br>" ;
echo "<center>$size<bold>RUN # $colA $dateA TO RUN # $colB $dateB.</br>" ;
echo "<font color='#079E07'>.</br><font color='black'>" ;

echo "<center>$size<bold>Grand Total in Attendance - 1287 including Moles, Mole Hounds, Hastings H3 and Jelly Legs</br>" ;
echo "<center>$size<bold>on 51 Runs set by 100 Hares - giving 25.23 Attendees per Run set by 1.96 Hares per Run.</br>" ;

echo "<font color='#079E07'>.</br><font color='black'>" ;
echo "<table class=center border=1 frame=box rules=all width=35%>" ;
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