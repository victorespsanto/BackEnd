<?php 

function ola($texto = "Mundo", $periodo = "Bom dia") {   // argumentos com valores padrão que podem ser substituídos quando a função for chamada

	return "Olá $texto! $periodo!<br/>";

}


 echo ola();   // sem passar argumentos para a função, ela retorna os argumentos padrões..

 echo ola("Victor", "Boa tarde");  // passando argumentos para a função, ela retornará com os argumentos informados.

 echo ola("", "Boa tarde"); // argumento "" significa sem argumento´passado para a função.

 echo ola("");   // se passar argumento com apenas uma dupla de aspas, só retornará o segundo argumento padrão

 echo ola("", "");  // se passar os dois argumentos como aspas, nenhum argumento retornará, nem os argumentos padrões.

/* echo (, "");  // retornará erro. Sempre o primeiro parâmetro (argumento) deve ser informado.
*/


 ?>