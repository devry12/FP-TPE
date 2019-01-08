<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('MenuModel');
}

	public function index()
	{
		$data['menu'] = $this->MenuModel->getAll('menu');
		$this->load->view('main',$data);
	}

	public function addtocart()
	{
		$data = array(
		        'id'      => $this->input->post('id'),
		        'qty'     =>  $this->input->post('qty'),
		        'price'   =>  $this->input->post('price'),
		        'name'    =>  $this->input->post('name'),
		);

		$this->cart->insert($data);
		redirect('/','refresh');
	}

	public function updateCart()
	{
		$data = array(
			'rowid' => $this->input->post('rowid'),
			'qty'   => $this->input->post('qty')
		);

$this->cart->update($data);
		redirect('/cart','refresh');
	}

	public function cart()
	{
		$this->load->view('cart');
	}
}
