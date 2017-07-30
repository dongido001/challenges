<?php

	$array = [2, 3, 3, 1, 5, 2];

	function firstDuplicate($array){
		
	$arr = array_filter(array_count_values($array), function( $val ){
		return ($val > 1);
	});

	if ( count($arr) < 1 ){
	   return -1;
	}

	$remain = array_filter( $array, function($val) use($arr){
	      return ( in_array($val, array_keys($arr)) );
	});

	//Now count the index and return the winner!
	$nice = []; $counter = 0;
	foreach($remain as $key => $each){
	   @$nice[$each] += $key;
	}

	$nice = array_keys($nice, min($nice)); 

	 return $nice[0];

}

echo getDuplicate($array);