<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Model {

	public function register()
	{
		$query = $this->db->query("SELECT * FROM register");
		return $query->result();
		
	}	
	function get_student_by_email($email)
	{
		return $this->db->query("SELECT * FROM register WHERE email = ?" , array($email))->row_array();	
	}			

}
