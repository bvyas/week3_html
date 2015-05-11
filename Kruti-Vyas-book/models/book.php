<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Book extends CI_Model{

	public function can_log_in(){
		$this->db->get('email', $this->input->post('email'));
		$this->db->get('password', $this->input->post('password'));
		$query = $this->db->get('users');
		if($query->num_rows() == 1){
			return true;
		}
		else
		{
			return false;
		}

	}
	public function create_user(){
		$insert_user_in_database=array(
			'name' => $this->input->post('name'),
			 'email' => $this->input->post('email'),
			 'password' => $this->input->post('password'));
		$query=$this->db->insert('users',$insert_user_in_database);
			
	}

	public function get_all()
	{
		return $this->db->get('comments');
	}

}
