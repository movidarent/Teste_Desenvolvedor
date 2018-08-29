<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_protecoes extends CI_Model {

	public function listaProtecoes($value='')
	{
		$protecoes[] = array(
			"Sigla" => "SUP",
			"PictureURL" => "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/protecao-SUP.png",
			"Detalhes" => "Super - Veículo + terceiros + ocupantes",
			"Valores" => array(
				"ValorUnitario" => "63.00",
				"Incluso" => false,
				"Moeda" => "BRL",
				"Recorencia" => "Diaria",
				"Desconto" => 0
			)
		);

		$protecoes[] = array(
			"Sigla" => "COM",
			"PictureURL" => "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/protecao-COM.png",
			"Detalhes" =>  "Completa - Veículo + terceiros",
			"Valores" => array(
				"ValorUnitario" => "43.00",
				"Incluso" => false,
				"Moeda" => "BRL",
				"Recorencia" => "Diaria",
				"Desconto" => 0,
			)
		);

		$protecoes[] = array(
			"Sigla" => "BAS",
			"PictureURL" => "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/protecao-BAS.png",
			"Detalhes" => "Básica - Veículo",
			"Valores" => array(
				"ValorUnitario" => "28.00",
				"Incluso" => true,
				"Moeda" => "BRL",
				"Recorencia" => "Diaria",
				"Desconto" => 0,
			)
		);

		return $protecoes;
	}

}

/* End of file Model_protecoes.php */
/* Location: ./application/models/Model_protecoes.php */