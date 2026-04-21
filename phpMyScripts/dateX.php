<?php
// All records have a Year value.
// If Month is present then Day is too.

// $dateX1  Mon 14-Aug  -   Venues by Year
// $dateX2  Mon 14-Aug  -   Venues by Hareline
// $dateX3           14-Aug 2009, $-$$ 1991  -  Venues by Venue and Hare

$Y = substr($row[dateX],0,4) ;                      // Year
$dateX1='dateX1' ;
if ( strstr ( $row[dateX] , '-00-00' ) ) { $dateX1="" ; $dateX3 = "$-$$ $Y" ; }

else {
$dd = date('D', strtotime($row[dateX])) ;   // Day of Week
$Q = substr($row[dateX],8,1) ;
 if ( $Q == "0" ) { $dn = substr($row[dateX],9,1) ; }
else { $dn = substr($row[dateX],8,2) ; }    // Day of Month

$M = date ( 'M', strtotime( $row[dateX] )) ; // Month of Year

$dateX1 = "$dd $dn-$M" ;
// $dateX2 = "$dd $dn-$M" ;
$dateX3 = "$dn-$M $Y" ; }

?>