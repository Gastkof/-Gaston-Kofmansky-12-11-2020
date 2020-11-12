#unieq_names
For example: calling unique_names([‘Dan’,’Ron’,’Boris], [‘Boris’,’Dan’, Ruth’]) should return:

[‘Dan’,’Ron’,’Boris,’Ruth’] in any order.


<?php
function  unique_names(array $names1 ,array $names2){

$arr = array();
array_push($arr, array_unique(array_merge( $names1 , $names2 )));

return $arr;

}
print_r( unique_names(['Dan','Ron','Boris'], ['Boris','Dan', 'Ruth']));
?> 
