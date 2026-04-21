<?

$fd = fopen ($filename , "r") or die ("Can't open $filename") ;
$fstring = fread ($fd , filesize ($filename)) ;
echo "Page Hits $fstring <align=left>" ;
fclose($fd) ;

$fd = fopen ($filename , "w") or die ("Can't open $filename") ;
$fcounted = $fstring + 1 ;
$fout= fwrite ($fd , $fcounted ) ;
fclose($fd) ;

?>

