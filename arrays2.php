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

<div id="rs" />

<script>



dias = [

	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',

];

for (d in dias)
	if (dias[d].indexOf('rs')>0)
		document.getElementById("rs")
		
</script>