<?php

/*
|--------------------------------------------------------------------------
| Helper Functions
|--------------------------------------------------------------------------
*/

function dateUsToBr($date){
	#2017-06-20 05:17:20
	$x     = explode(" ", $date);
	$date  = $x[0];
	$hours = $x[1];

	// FORMAT DATE TO PT-BR
	$date = substr($date, 8, 2).'/'.substr($date, 5, 2).'/'.substr($date, 0, 4);

	return $date.' '.$hours;
}