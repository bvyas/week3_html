<?php 
class courses extends CI_Model {

	public function get_all()
	{
		$query = $this->db->query('SELECT * FROM course');
		return $query->result();
	}
 ?>