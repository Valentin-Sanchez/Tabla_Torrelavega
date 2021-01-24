<?php
if (!isset($_GET['n'])) $_GET['n']=300;
if (!isset($_GET['fr'])) $_GET['fr']=0.3333;
if (!isset($_GET['fv'])) $_GET['fv']=0.4;
?>
Una editorial ha publicado la última novela ganadora de un certamen literario. 1/3 de los libros se han regalado como política de promoción, 2/5 se han vendido en las librerías y todavía quedan 300 ejemplares en el almacén. ¿Cuántos libros imprimió la editorial?
<div>
<form>
<input id="n" name="n" placeholder="n" onkeyup="calcular()"/>
<input id="fr" name="fr" placeholder="fr" onkeyup="calcular()"/>
<input id="fv" name="fv" placeholder="fv" onkeyup="calcular()"/>

<button onclick="calcular()"> Calcular </button>
</form>
</div>

<div id="totales" style="
	padding:30px;
	background-color:yellow;
	">
</div>

<script>

console.log('libros vendidos en total');

function calcular(){

n=parseFloat(document.getElementById('n').value);

fr=parseFloat(document.getElementById('fr').value);

fv=parseFloat(document.getElementById('fv').value);

i=Math.round(n/(1-fr-fv));

document.getElementById('totales').innerHTML=i+' totales';
}
</script>
<?php
print_r($_GET);

$n = $_GET['n'];
$fr = $_GET['fr'];
$fv = $_GET['fv'];


echo ($n/(1-$fr-$fv));
?>