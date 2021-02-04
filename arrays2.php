<?php

//arrays

$dias = [

	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',

];

foreach ($dias as $d)
	if (strstr($d, 'r'))
		echo $d;
?>
