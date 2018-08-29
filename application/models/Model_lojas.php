<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lojas extends CI_Model {

	public function listaLojas()
	{
		$lojas[] = array(
			"Aeroporto" => true,
			"Sigla" => "CRJ",
			"Name" => "PARAUAPEBAS AEROPORTO",
			"Endereco" => array(
				"Logradouro" => "Raimundo Mascarenhas, Km 15, 0 - Parauapebas - Pará",
				"Cidade" => "Parauapebas",
				"CEP" => "68516-000",
				"Estado" => array(
					"Descricao" => "Pará",
					"Sigla" => "PA"
				),
				"GeoLocalizacao" => array(
					"Longitude" => "-50.001018",
					"Latitude" => "-6.114447"
				)
			),
			"Telefone" => array(
				"DDD" => "94",
				"Numero" => "33460068"
			),
			"InformacoesAdicionais" => array(
				"Inicio" => "11:00:00",
				"Fim" => "17:00:00",
				"Dias" => array(
					"Segunda" => "true",
					"Terca" => "true",
					"Quarta" => "true",
					"Quinta" => "true",
					"Sexta" => "true",
					"Sabado" => "true",
					"Dominfo" => "true"
				)
			)
		);

		return $lojas;
	}

}

/* End of file Model_lojas.php */
/* Location: ./application/models/Model_lojas.php */