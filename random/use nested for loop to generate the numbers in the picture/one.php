<?php
//second challenge

$parent_loop = 8;
$start = 1;

foreach( range(1, $parent_loop) as $lad ){

	printSpace( $parent_loop - $lad );
    $printer = 1;
    $save = [];  print ' ';
    foreach( range(1, round($start/2) ) as $lat ){
  	  print $printer . ' ' ;
  	  $save[]  = $printer;
      $printer = ($printer * 2);
    }

    foreach(array_slice( array_reverse($save), 1) as $ci){
  	  print $ci . ' ';
    }

    $start += 2;  print PHP_EOL . PHP_EOL;

}

//function just to print sapces...
function printSpace( $num ){
  for( $i = 0; $i < $num; $i++){
  	print "  ";
  }
}