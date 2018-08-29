<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_veiculos extends CI_Model {

	public function listaVeiculos()
	{
		$veiculos[] = array(
			"Status" => "Available",
			"DescricaoGrupo" => "Econômico/1.0/4 Portas  - AC e DH/Vid. e Trav. Elét./CD ou USB/5 PAX - 2 Malas/Freios ABS/ Air Bag",
			"Descricao" => "GRUPO AX - MOVIDA ON",
			"Arcondicionado" => "true",
			"Sigla" => "ECMM",
			"QtdLugares" => "5",
			"QtdMala" => "2",
			"Cambio" => "Manual",
			"QtdPortas" => "4",
			"Nome" => "Mobi Like ou similar",
			"ValorUnitario" => "62.89",
			"Imagem" => "https://prdmovida.blob.core.windows.net/public/imagens/cars/t3_grupo_AX.jpg"
		);

		return $veiculos;
	}
}

/* End of file Model_veiculos.php */
/* Location: ./application/models/Model_veiculos.php */