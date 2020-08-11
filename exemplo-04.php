
<?php 

function ola() {

	$argumentos = func_get_args();  // a função nativa do php "func_get_args()" retorna os argumentos informados a função principal em array

	return var_dump($argumentos);
}

ola("Mundo");  // retornará um argumento;

ola("Mundo", 10);   // retorna dois argummentos;


 ?>