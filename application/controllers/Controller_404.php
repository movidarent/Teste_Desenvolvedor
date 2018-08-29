<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_404 extends CI_Controller {

	public function index()
	{
		$this->load->view('estrutura/header');
		$this->load->view('errors/404', '', FALSE);
		$this->load->view('estrutura/footer');
	}

}

/* End of file Controller_404.php */
/* Location: ./application/controllers/Controller_404.php */