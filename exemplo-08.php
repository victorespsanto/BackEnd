<?php 

function soma(int ...$valores):string {  // essa função permite somar todos valores do tipo indicado no argumento mas os retorna como string

	return array_sum($valores);
}

var_dump(soma(2, 3));  // dois argumentos tipo integer, somará os dois mas retorna como string
echo "<br>";
echo soma(3, 3, 3);  // tr~es argumentos tipo integer, somará os três...
echo "<br>";
echo soma(2.9, 3.5);  // dois argumentos tipo float, só somará a parte inteira...
echo "<br>";

 ?>