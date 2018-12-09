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
}
