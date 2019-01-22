<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {

	public function getMeja()
	{
		$this->db->select('*');
    $this->db->from("meja");
    $query = $this->db->get();
    return $query->result_array();
	}

	public function getAll($table)
	{
		$this->db->select('*');
    $this->db->from($table);
		$this->db->join('category', 'category.idCategory = menu.idCategory');
    $query = $this->db->get();
    return $query->result();
	}
	public function selectMeja()
	{
		$this->db->select('*');
		$this->db->from("meja");
		$this->db->where('idMeja',$this->input->post('noMeja'));
		$query = $this->db->get();
		return $query->result_array();
	}
	public function pesan($totalharga)
	{
		$order = [
					'idMeja' => $_SESSION['idMeja'],
					'totalbayar' => $totalharga,
			];

			$this->db->insert('order',$order);
		$last = 	$this->db->select('idOrder')->order_by('idOrder',"desc")->limit(1)->get('order')->row();
		die(print_r($last));
		}

}
