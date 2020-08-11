<?php 

function soma(int ...$valores) {  // essa função permite somar todos valores do tipo indicado no argumento

	return array_sum($valores);
}

echo soma(2, 3);  // dois argumentos tipo integer, somará os dois...
echo "<br>";
echo soma(3, 3, 3);  // tr~es argumentos tipo integer, somará os três...
echo "<br>";
echo soma(2.9, 3.5);  // dois argumentos tipo float, só somará a parte inteira...
echo "<br>";

 ?>