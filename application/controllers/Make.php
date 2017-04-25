<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Make extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	} 

	public function Index()
	{
		
		//calculo do estoque espuma
		$sql = "Select estoque FROM materia_prima WHERE id_mp = 1";
		$data['espuma'] = $this->Crud_model->Query($sql);
		$espuma = $data['espuma'][0]->estoque;
		//calculo do estoque bojo vermelho
		$sql = "Select estoque FROM materia_prima WHERE id_mp = 2";
		$data['vermelho'] = $this->Crud_model->Query($sql);
		$bojoVer = $data['vermelho'][0]->estoque;
		//calculo do estoque bojo branco
		$sql = "Select estoque FROM materia_prima WHERE id_mp = 3";
		$data['branco'] = $this->Crud_model->Query($sql);
		$bojoBra = $data['branco'][0]->estoque;
		//calculo do estoque bojo preto
		$sql = "Select estoque FROM materia_prima WHERE id_mp = 4";
		$data['preto'] = $this->Crud_model->Query($sql);
		$bojoPre = $data['preto'][0]->estoque;
		
		//Pedidos
		$sql = "Select  p.id_pedido, c.nome FROM pedido p INNER JOIN cliente c ON (c.id_cliente = p.id_cliente)";
		$data['pedidos'] = $this->Crud_model->Query($sql);

		//algoritimo
		
		$header['page'] = "MRP - Gerenciador de Estoque";
		$this->load->view('header',$header);
		$this->load->view('home',$data);
	}
	

	public function Mp()
	{
		$header['page'] = "MRP - Matéria Prima";
		$this->load->view('header',$header);
		$this->load->view('partials/materia-prima',$header);
	}

	public function Pedido()
	{
		$header['page'] = "MRP - Pedido";
		$this->load->view('header',$header);
		$this->load->view('partials/pedido',$header);
	}

}
