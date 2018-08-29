<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_taxas extends CI_Model {

	public function listaTaxas()
	{
		$taxas = array(
			"Code" => "83",
			"Sigla" => "TAD",
			"Descricao" => "TAXA ADMINISTRATIVA",
			"Total" => "0.00",
			"Moeda" => "BRL",
			"TaxInclusive" => false,
			"PercTaxa" => 12,
			"Incluso" => false,
			"Calculo" => array(
				"ValorUnitario" => "0.00",
				"Recorencia" => "RentalPeriod"
			)
		);

		return $taxas;
	}

}

/* End of file Model_taxas.php */
/* Location: ./application/models/Model_taxas.php */