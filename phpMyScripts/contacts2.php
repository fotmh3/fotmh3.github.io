<html>
<head><title>Friends of the Mole Statistics</title></head>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?
$hasher = $_POST["hasher"] ;
$hasher2 = strtolower($hasher) ;

if ( $hasher =="" ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Blank. Invalid Hash Name.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ( strlen($hasher) < 5 ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Hash Name Query - <font color='gold'>$hasher<font color='black'> . Must be at least 5 characters long.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ( strrchr($hasher, '%' )) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>No matching Hasher for Query - <font color='gold'>$hasher<font color='black'> .<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

include 'config.php' ;

$query =  "select count(*) from contacts where lower(hasher) like '%$hasher2%' and ( class='A1' or class='B1' ) " ;
$result = mysql_query($query) or die('Sorry, we could not count the number of results: ' . mysql_error() );
$X = mysql_result($result, 0) ;
if ( $X == 0 ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>No matching Hasher for Query - <font color='gold'>$hasher<font color='black'> .<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

$sql = "select * from contacts where lower(hasher) like '%$hasher2%' and reg='x' " ;
//////   $sql = "select * from contacts where lower(hasher) like '%%' and reg='x' order by surname,othername" ;

$dbq = mysql_query($sql,$dbc) ;

echo "<table border='0' width=100%>" ;

while ($row = mysql_fetch_array($dbq)) {

$address = "" ;

if ( $row[address1] <> "" )  { $address = "$row[address1]" ; }
if ( $row[address2] <> "" )  { $address = "$address <br> $row[address2]" ; }
if ( $row[address3] <> "" )  { $address = "$address <br> $row[address3]" ; }
if ( $row[address4] <> "" )  { $address = "$address <br> $row[address4]" ; }
if ( $row[address5] <> "" )  { $address = "$address <br> $row[address5]" ; }

echo "<tr><td style='height:45px' width=38%></td><td width=62%></td></tr>" ;
echo "<tr><td style='height:30px' width=38%></td><td width=62%><font face='Comic Sans MS' size=4>Query <font color='orange'>$hasher<font color='black'> gives</td></tr>" ;
echo "<tr><td style='height:30px' width=38%></td><td width=62%><font face='Comic Sans MS' size=4>Contact details for <font color='orange'>" .$row[hasher]. "<font color='black'> .</td></tr>" ;
echo "<tr><td style='height:30px' width=38%></td><td width=62%>" .$row[othername]. "</td></tr>" ;

if ( $address <> "" and $row[F] <> "x" ) { echo "<tr><td style='height:30px' width=38%></td><td width=62%>$address</td></tr>" ; }

if ( $row[home]   <> "" )  { echo "<tr><td style='height:30px' width=38%></td><td width=62%>Home telephone - " .$row[home]. "</td></tr>" ; }
if ( $row[mobile] <> "" )  {echo "<tr><td style='height:30px' width=38%></td><td width=62%>Mobile - " .$row[mobile]. "</td></tr>" ; }
if ( $row[email1] <> "" )  {echo "<tr><td style='height:30px' width=38%></td><td width=62%>email - " .$row[email1]. "</td></tr>" ; }

}

echo "</table><p>" ;

?>

<font color="#079E07">.<br>
<form><center><input type=button value="On Back to Menu" onclick=window.history.back()></form>
</body>
</html>