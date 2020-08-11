<?php 

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			// inicio diretor comercial
			array(
				'nome_cargo' => "Diretor Comercial",
				'subordinados' => array(
					// inicio do gerente de vendas
					array(
						'nome_cargo' => 'Gerente de Vendas',
					)
					// termino do gerente de vendas
				)

			),
			//termino do diretor comercial
			//inicio do diretor financeiro
			array(
				'nome_cargo' => "Diretor Finaceiro",
				'subordinados' => array(
					// inicio do gerente de contas
					array(
						'nome_cargo' => 'Gerente de Contas',
						'subordinados' => array(
							// inicio do supervisor de contas
							array(
								'nome_cargo' => 'Supervisor de Contas',
								'subordinados' => array(
									//inicio de tecnico de administracao
									array(
										'nome_cargo' => "Técnico em Administração"
									)
								)
								// termino de tecnico de administracao
							)
							// termino do supervisor de contas
						)
					),
					// termino do gerente de contas
					// inicio do gerente de compras
					array(
						'nome_cargo' => 'Gerente de Comras',
						'subordinados' => array(
							// inicio do supervisor de compras
							array(
								'nome_cargo' => 'Supervisor de Compras'
							)
							// termino do supervisor de compras
						)
					)
					// termino do gerente de compras
				)
			),
			// termino do diretor finaceiro
			// inicio do diretor de produção
			array(
				'nome_cargo' => "Diretor de Produção",
				'subordinados' => array(
					// inicio do gerente de produção
					array(
						'nome_cargo' => 'Gerente de Produção',
						'subordinados' => array(
							// inicio do supervisor de produção
							array(
								'nome_cargo' => 'Supervisor de Produção')
							// termino do supervisor de produção
						)
					)
					// termino do gerente de produção
				)
			)
			// termino do diretor de produção
		)

	)
);






function exibe($cargos){

	$html = '<ul class="ul" style="color: red; font-size: 40px; font-weigth: bold;">';

	foreach ($cargos as $cargo) {

		$html .= '<li>';

		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			
			$html .= exibe($cargo['subordinados']);
		}

		$html .= '</li>';
	}

	$html .= '</ul>';

	return $html;
}

echo exibe($hierarquia);  

 ?>