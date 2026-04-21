<?
while ($row = mysql_fetch_array($dbq))  {

$X = $row[runs] ;
$hue = 'black' ;
if        ( $X >=    50 and $X <= 99 )  { $hue = '#FFFFFF' ; }
elseif ( $X >= 100 and $X <= 199 )  { $hue = '#00FFFF' ; }
elseif ( $X >= 200 and $X <= 299 )  { $hue = '#00FF00' ; }
elseif ( $X >= 300 and $X <= 399 )  { $hue = '#FF00FF' ; }
elseif ( $X >= 400 and $X <= 499 )  { $hue = '#0000A0' ; }
elseif ( $X >= 500 and $X <= 599 )  { $hue = '#FF0080' ; }
elseif ( $X >= 600 )  { $hue = '#800080' ; }

echo "<tr>" ;
echo "<td style='height:25px'><font color='#079E07'>..<font color=$hue>" .$row[hasher]. "</td>" ;
echo "<td style='height:25px'><font color=$hue><center>" .$row[runs]. "</td>" ;
echo "<td style='height:25px'><font color=$hue><center>" .$row[hared]. "</td>" ;
echo "</tr>" ;  }

echo "</table><p>" ;
?>