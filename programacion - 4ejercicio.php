
Se quiere construir un depósito abierto de base cuadrada y paredes verticales con capacidad para 13.5 m3. Para ello se dispone de una chapa de acero de grosor uniforme. Calcula las dimensiones del depósito para que el gasto en chapa sea el mínimo posible<div>
<form>
<input id="lado1" name="lado1" placeholder="lado1" onkeyup="calcular()"/>
<input id="lado2" name="lado2" placeholder="lado2" onkeyup="calcular()"/>
<input id="altura" name="altura" placeholder="altura" onkeyup="calcular()"/>
<button onclick="calcular()"> Calcular </button>
</form>
</div>

<div id="area" style="
	padding:20px;
	background-color:yellow;
	">
</div>

<script>

console.log('area del prisma');

function calcular(){

lado1=parseFloat(document.getElementById('lado1').value);

lado2=parseFloat(document.getElementById('lado2').value);

altura=parseFloat(document.getElementById('altura').value);

i=Math.round((lado1 * lado2) *altura);

document.getElementById('area').innerHTML=i+' m2';
}
</script>
<?php
print_r($_GET);

$lado1 = $_GET['lado1'];
$lado2 = $_GET['lado2'];
$altura = $_GET['altura'];

echo (($lado1 * $lado2) *$altura)

?>