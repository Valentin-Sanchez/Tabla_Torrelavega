<?php
if (!isset($_GET['d1'])) $_GET['d1']=10;
if (!isset($_GET['lado'])) $_GET['lado']=12;
?>
El lado de un rombo mide 10 cm y su diagonal menor 12 cm. Halla su área.
<div>
<form>
<input id="d1" name="d1" placeholder="diagonal1" onkeyup="calcular()" value= "<?= $_GET['d1']?>"/>
<input id="lado" name="lado" placeholder="lado" onkeyup="calcular()" value= "<?= $_GET['lado']?>"/>
<button onclick="calcular()"> Calcular </button>
</form>
</div>

<div id="area" style="
	padding:20px;
	background-color:yellow;
	">
</div>

<script>

console.log('area del rombo');

function calcular(){

d1=parseFloat(document.getElementById('d1').value);

lado=parseFloat(document.getElementById('lado').value);

i=Math.round(d1*(Math.sqrt(((d1/2)**2)*lado**2)));

document.getElementById('area').innerHTML=i+' cm2';
}
</script>
<?php

$d1 = $_GET['d1'];
$lado = $_GET['lado'];

$d1=sqrt($d1/2)**2;
$lado=($lado**2);

echo $d1*sqrt(($d1/2)**2)*$lado**2;
?>
<br> </br> <br> </br>



<?php
if (!isset($_GET['conjunto'])) $_GET['conjunto']=5;
if (!isset($_GET['fuente'])) $_GET['fuente']=4;
?>
Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. Si el metro cuadrado de césped cuesta 12 euros, ¿cuánto cuesta cubrir todo el jardín?
<div>
<form>
<input id="conjunto" name="conjunto" placeholder="conjunto" onkeyup="calcular()" value= "<?= $_GET['conjunto']?>"/>
<input id="fuente" name="fuente" placeholder="fuente" onkeyup="calcular()" value= "<?= $_GET['fuente']?>"/>
<button onclick="calcular()"> Calcular </button>

</form>
</div>

<div id="€/m2" style="
	padding:20px;
	background-color:yellow;
	">
</div>

<script>

console.log('precio del m2');

function calcular(){

conjunto=parseFloat(document.getElementById('conjunto').value);

fuente=parseFloat(document.getElementById('fuente').value);

i=Math.round(((Math.PI)*conjunto**2)-((Math.PI)*fuente**2))*12;

document.getElementById('€/m2').innerHTML=i+' €/m2';
}
</script>
<?php
$conjunto = $_GET['conjunto'];
$fuente = $_GET['fuente'];

echo (((M_PI)*$conjunto**2)-((M_PI)*$fuente**2))*12;
?>

<br> </br> <br> </br>

<?php
if (!isset($_GET['n'])) $_GET['n']=300;
if (!isset($_GET['fr'])) $_GET['fr']=0.3333;
if (!isset($_GET['fv'])) $_GET['fv']=0.4;
?>
Una editorial ha publicado la última novela ganadora de un certamen literario. 1/3 de los libros se han regalado como política de promoción, 2/5 se han vendido en las librerías y todavía quedan 300 ejemplares en el almacén. ¿Cuántos libros imprimió la editorial?
<div>
<form>
<input id="n" name="n" placeholder="n" onkeyup="calcular()" value= "<?= $_GET['n']?>"/>
<input id="fr" name="fr" placeholder="fr" onkeyup="calcular()" value= "<?= $_GET['fr']?>"/>
<input id="fv" name="fv" placeholder="fv" onkeyup="calcular()" value= "<?= $_GET['fv']?>"/>

<button onclick="calcular()"> Calcular </button>
</form>
</div>

<div id="totales" style="
	padding:20px;
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
$n = $_GET['n'];
$fr = $_GET['fr'];
$fv = $_GET['fv'];


echo ($n/(1-$fr-$fv));
?>