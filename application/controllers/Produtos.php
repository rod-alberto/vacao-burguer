<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	function __construct(){

	CI_Controller::__construct();


	}


	public function index()
	{

		$this->load->model('pedidos_model');
		$data['clientes'] = $this->pedidos_model->listar();
		$this->load->view('listas/pedidos',$data);
	}
	
	function listar(){

	$this->load->model('produtos_model');
		$data['produtos'] = $this->produtos_model->listar();
		$this->load->view('listas/produtos',$data);



	}

	function editar(){



	}
	function excluir(){


	}
}
