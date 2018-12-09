<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {

	public function getAll($table)
	{
		$this->db->select('*');
    $this->db->from($table);
		$this->db->join('category', 'category.idCategory = menu.idCategory');
    $query = $this->db->get();
    return $query->result();
	}
}