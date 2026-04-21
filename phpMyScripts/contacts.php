<html>
<head><title>Friends of the Mole Statistics</title></head>
<body bgcolor="#079E07" link="#079E07" alink="#079E07" vlink="#079E07"><font face="arial">

<?
$pw = $_POST["pw"] ;

if ( $pw =="" ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Invalid Password.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

elseif ( $pw <> 'chunnel' ) {
echo ".<br>" ;
echo "<font face='Comic Sans MS' size=4><center>Invalid Password.<p>" ;
echo "<form><center><size=4><input type=button value='On Back to Menu' onclick=window.history.back()></form><p>" ;
echo exit ; }

else {
echo "<font color='#079E07'>.<br>" ;
echo "<form method='post' action='contacts2.php'>" ;
echo "<font face='Comic Sans MS' size=4 color='black'><center>Enter Hash Name <input type='text' name='hasher' >" ;
echo "<input type='submit' value='Are You'><font face='Comic Sans MS' size=4> for Contact Details.<font color='#079E07'>.....</form><p>" ;
}  ?>

<form><center><input type=button value="On Back to Menu" onclick=window.history.back()></form>

</body>
</html>