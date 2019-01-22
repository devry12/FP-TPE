<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MejaController extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('MenuModel');
  if (isset($_SESSION['idMeja'])) {
    redirect('/menu');
  }
}

	public function index()
	{
		$data['meja'] = $this->MenuModel->getMeja();
		$this->load->view('meja',$data);
	}

  public function selectMeja(){
  $data =  $this->MenuModel->selectMeja();
  $_SESSION['idMeja'] = $data[0]['nomerMeja'];
  echo "ok";
  }





}
