<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos_model extends CI_Model {


	function index(){


	}

	function listar(){

	return $this->db->query("select * from produtos");

	}
}