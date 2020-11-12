<?php


function findUniqueNumbers (array $numbers) : array
{
$arr = array();
array_push($arr,array_unique($numbers));
return array_unique($numbers);

}

print_r( findUniqueNumbers( [1, 2, 1, 3] ) ) ;
?> 

