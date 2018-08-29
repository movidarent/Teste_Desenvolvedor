<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_produtos extends CI_Model {

	public function listaProdutos($value='')
	{
		$produtos[] = array(
			"Code" => "6",
			"Sigla" => "GPS",
			"Descricao" => "GPS",
			"Detalhes" => "Está à sua disposição o serviço de navegação por GPS, proporcionando comodidade e economia em suas viagens de negócios ou a lazer. Basta informar o endereço desejado que o navegador GPS irá traçar o melhor caminho para você chegar ao seu destino.",
			"PictureURL" => "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t1_GPS.jpg",
			"Valores" => array(
				"Total" => "20.00",
				"Moeda" => "BRL",
				"Desconto" => 0,
				"Incluso" => "false",
				"Calculo" => array(
					"ValorUnitario" => "20.00",
					"Recorencia" => "Diaria",
					"Qtd" => "1",
					"TaxTotal" => "20.00"
				)
			)
		);

		$produtos[] = array(
			"Code" => "9",
			"Sigla" => "CSS",
			"Descricao" => "Cadeira de Bebê",
			"Detalhes" => "Caso você precise transportar uma criança de até sete anos e meio de idade, é obrigatório o uso de dispositivo de retenção. Pensando nisso, a Movida possui cadeirinhas de bebê em suas locações.",
			"PictureURL" => "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t1_CSS.jpg",
			"Valores" => array(
				"Total" => "20.00",
				"Moeda" => "BRL",
				"Desconto" => 0,
				"Incluso" => "false",
				"Calculo" => array(
					"ValorUnitario" => "20.00",
					"Recorencia" => "Diaria",
					"Qtd" => "1",
					"TaxTotal" => "20.00"
				)
			)
		);

		$produtos[] = array(
			"Code" => "61",
			"Sigla" => "WIFI",
			"Descricao" => "Movida WiFi",
			"Detalhes" => "Com o Movida Wi-fi, um produto exclusivo da Movida, você contará com a comodidade do wi-fi 4G para até cinco aparelhos, além de acesso  ao Waze (GPS) e aplicativo da Movida. Conforto e mobilidade para você.",
			"PictureURL" => "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t1_WIFI.jpg",
			"Valores" => array(
				"Total" => "20.00",
				"Moeda" => "BRL",
				"Desconto" => 0,
				"Incluso" => "false",
				"Calculo" => array(
					"ValorUnitario" => "20.00",
					"Recorencia" => "Diaria",
					"Qtd" => "1",
					"TaxTotal" => "20.00"
				)
			)
		);

		$produtos[] = array(
			"Code" => "63",
			"Sigla" => "CSI",
			"Descricao" => "Bebê Conforto",
			"Detalhes" => "A Movida oferece o serviço de bebê-conforto, necessário para bebês recém-nascidos com até 9 kg em carros. Lembrando que crianças com menos de um ano de idade devem estar em um bebê conforto voltado para trás! Para ter a garantia deste serviço, é necessário que a solicitação seja feita no ato da reserva.",
			"PictureURL" => "https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t1_CSI.jpg",
			"Valores" => array(
				"Total" => "20.00",
				"Moeda" => "BRL",
				"Desconto" => 0,
				"Incluso" => "false",
				"Calculo" => array(
					"ValorUnitario" => "20.00",
					"Recorencia" => "Diaria",
					"Qtd" => "1",
					"TaxTotal" => "20.00"
				)
			)
		);

		return $produtos;
	}
}

/* End of file Model_produtos.php */
/* Location: ./application/models/Model_produtos.php */