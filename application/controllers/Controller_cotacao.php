<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_cotacao extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_lojas');
		$this->load->model('model_veiculos');
		$this->load->model('model_protecoes');
		$this->load->model('model_produtos');
		$this->load->model('model_taxas');
	}

	public function index()
	{
		$this->load->view('estrutura/header');

		$data['produtos'] = $this->model_produtos->listaProdutos();
		$this->load->view('cotacao/view_inicio', $data, FALSE);

		$this->load->view('estrutura/footer');
	}

	public function inicia_cotacao()
	{
		$busca = $this->input->post('lojaretirada');

		$lojas = $this->model_lojas->listaLojas();

		$data['lojaretirada'] = $lojas[0];
		$data['lojadevolucao'] = $lojas[0];

		$dataretirada = $this->input->post('dataretirada');

		$datadevolucao = $this->input->post('datadevolucao');

		$data['dataretirada'] = $dataretirada;
		$data['horaretirada'] = $this->input->post('horaretirada');

		$data['datadevolucao'] = $datadevolucao;
		$data['horadevolucao'] = $this->input->post('horadevolucao');

		$dataretirada = explode('/', $dataretirada);

		$datadevolucao = explode('/', $datadevolucao);

		$data1 = date_create($dataretirada[2].'-'.$dataretirada[1].'-'.$dataretirada[0]);

		$data2 = date_create($datadevolucao[2].'-'.$datadevolucao[1].'-'.$datadevolucao[0]);

		$diarias = date_diff($data1, $data2);

		$data['diarias'] = $diarias->format('%a');

		$data['veiculos'] = $this->model_veiculos->listaVeiculos();

		$data['produtos'] = $this->model_produtos->listaProdutos();

		$data['protecoes'] = $this->model_protecoes->listaProtecoes();

		$this->load->view('estrutura/header');

		$this->load->view('cotacao/view_veiculos', $data, FALSE);

		$this->load->view('estrutura/footer');
	}

	public function finaliza_cotacao()
	{
		$siglalojaretirada = $this->input->post('lojaretirada_');
		$siglalojadevolucao = $this->input->post('lojadevolucao_');

		$dataretirada = $this->input->post('dataretirada_');
		$datadevolucao = $this->input->post('datadevolucao_');

		$diarias = $this->input->post('diarias_');

		$siglaveiculo = $this->input->post('veiculo');

		$siglaprotecao = $this->input->post('protecao');

		$codeprodutos = $this->input->post('produtos');

		$lojas = $this->model_lojas->listaLojas();

		$lojaretiradaselecionada = array();
		$lojadevolucaoselecionada = array();

		foreach ($lojas as $key => $loja) {
			if ($siglalojaretirada == $loja['Sigla']) {
				$lojaretiradaselecionada = $loja;
			}
		}

		foreach ($lojas as $key => $loja) {
			if ($siglalojadevolucao == $loja['Sigla']) {
				$lojadevolucaoselecionada = $loja;
			}
		}

		$veiculoselecionado = array();

		$veiculos = $this->model_veiculos->listaVeiculos();

		foreach ($veiculos as $key => $veiculo) {
			if ($siglaveiculo == $veiculo['Sigla']) {
				$veiculoselecionado = $veiculo;
			} else {
				die($siglaveiculo);
			}
		}

		$protecaoselecionada = array();

		$protecoes = $this->model_protecoes->listaProtecoes();

		foreach ($protecoes as $key => $protecao) {
			if ($siglaprotecao == $protecao['Sigla']) {
				$protecaoselecionada = $protecao;
			}
		}

		$produtosselecionados = array();

		$produtos = $this->model_produtos->listaProdutos();

		if (!is_null($codeprodutos)) {
			foreach ($produtos as $key => $produto) {
				$i = 0;
				foreach ($codeprodutos as $key2 => $code) {
					if ($produto['Code'] == $code) {
						$i++;
					}
				}
				if ($i == 0) {
					unset($produtos[$key]);
				}
			}
		} else {
			$produtos = array();
		}

		$totalveiculo = $veiculoselecionado['ValorUnitario'] * $diarias;

		$totalprotecao = $protecaoselecionada['Valores']['ValorUnitario'] * $diarias;

		$totalprodutos = 0;

		foreach ($produtos as $key => $produto) {
			$totalprodutos += $produto['Valores']['Total'] * $diarias;
		}

		// $totalgeral = 

		$totais = array(
			"Tarifa" => "Teste001",
			"TotalGeral" => $totalveiculo + $totalprotecao + $totalprodutos,
			"TotalProtecoes" => $totalprotecao,
			"TotalAdicionais" => 0,
			"TotalComTaxa" => $totalveiculo + $totalprotecao + $totalprodutos,
			"Moeda" => "BRL",
			"ValorCaucao" => "700.00",
			"TaxaAdmFilial" => "12",
			"QuantidadeParcelamento" => 10,
			"ValorCaucaoSemProtecao" => array(
				"Valor" => "12000.00",
				"Descricao" => "Em caso de não contratação da proteção do veiculo a pré-autorização será de R$ 12000.00."
			),
			"PrePagamento" => array(
				"TotalComDesconto" => "172.69",
				"PercDesconto" => 5
			),

		);

		$resposta = array(
			'success' => true,
			'Cotacao' => array(
				'Informacoes' => array(
					'DataRetirada' => $dataretirada,
					'DataDevolucao' => $datadevolucao,
					'LojaRetirada' => $lojaretiradaselecionada,
					'LojaDevolucao' => $lojadevolucaoselecionada
				),
				'VeiculosDisponiveis' => $veiculoselecionado,
				'Protecoes' => $protecaoselecionada,
				'Produtos' => $produtos
			),
			'Totais' => $totais
		);

		header("Content-type: application/json;");
		echo json_encode($resposta);
	}
}

/* End of file Controller_cotacao.php */
/* Location: ./application/controllers/Controller_cotacao.php */