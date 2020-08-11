<?php 

///// ****** PARÂMETROS POR REFERÊNCIA (A VARIÁVEL SERÁ AFETADA FORA DO ESCOPO DA FUNÇÃO)

$a = 10;

function trocaValor(&$b){  // & (E comercial) antes do argumento indica que o parâmetro será passado por referência, ou seja, a mudança de valor se dá no espaço de memória fora do escopo da função.

	$b+= 50;

	return $b;
}

echo trocaValor($a);  // quando a variável entra como argumento, ou seja, no escopo da função, ela será afetada.

echo "<br>";

echo $a;  //  a variável fora do escopo da função passa a ser afetada apesar de ela ser passada como argumento

 ?>
