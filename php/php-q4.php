 <?php

function prependSum (array &$array) : int {
 $sum = array_sum( $array );
echo array_sum($sum);
array_unshift ($array, $sum);
 return $sum;
 }
 $array = array (1 , 2, 3 ) ; prependSum($array) ;
 echo($sum.PHP_EOL);
 print_r( array_values ( $array ) ) ;
?>
