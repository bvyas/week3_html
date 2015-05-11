<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product extends CI_Model {

	public function get_all()
	{
		$query=$this->db->query('SELECT * FROM products');
		return $query->result();
	}
	function get_product($id)
	{
		$query = $this->db->query('SELECT * FROM products WHERE ID = ?',
		array($id));
		return $query->row();	
	}
	

}

//end of main controller