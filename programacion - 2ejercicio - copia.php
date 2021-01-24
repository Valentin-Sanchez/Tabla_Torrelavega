<?php
if (!isset($_GET['conjunto'])) $_GET['conjunto']=5;
if (!isset($_GET['fuente'])) $_GET['fuente']=4;
?>
Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. Si el metro cuadrado de césped cuesta 12 euros, ¿cuánto cuesta cubrir todo el jardín?
<div>
<form>
<input id="conjunto" name="conjunto" placeholder="conjunto" onkeyup="calcular()" value= "<?= $_GET['conjunto']?>" />
<input id="fuente" name="fuente" placeholder="fuente" onkeyup="calcular()" value= "<?= $_GET['fuente']?>" />
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