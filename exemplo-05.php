<?php 

///// ****** PARÂMETROS POR VALOR (A VARIÁVEL NÃO SERÁ AFETADA FORA DO ESCOPO DA FUNÇÃO)

$a = 10;

function trocaValor($b){

	$b += 50;

	return $b;
}


echo trocaValor($a);  // quando a variável entra como argumento, ou seja, no escopo da função, aí sim ela será afetada.

echo "<br>";

echo $a;  //  a variável fora do escopo da função não é afetada apesar de ela ser passada como argumento

 ?>
