<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Book extends CI_Model{

	public function can_log_in($email){

		return $this->db->query("SELECT * FROM users WHERE email = ?", array($email)) ->row_array();
	}
	public function create_user($data){
			$query=$this->db->query("INSERT INTO users (name, alias, email, password, created_at, updated_at) VALUES (?,?,?,?,NOW(),NOW())", array($data['name'],$data['alias'],$data['email'],$data['password']));
			return $query;	
			
	}

	public function check($email, $password) {
		$query = $this->db->query('SELECT * FROM users');
		foreach ($query->result_array() as $user) {
			if ($user['email'] == $email && $user['password'] == $password) {
				$this->session->set_userdata('id', $user['id']);
				$this->session->set_userdata('email', $user['email']);
			}

		}
	}
	public function get_books()
	{
		return $this->db->query("SELECT * FROM entries")->result_array();
	}
	public function get_newbook()
	{
		return $this->db->query("SELECT * FROM entries")->result_array();
	}
	public function insert_book($book)
	{
		return $this->db->query('INSERT INTO  entries (title, body) VALUES (" '.$book['title']. '","'.$book['body'].'")');
	}
	public function get_comments()
	{
		return $this->db->query("SELECT comments.id, comments.body, comments.user_id, comments.entry_id, users.email, comments.created_at from comments LEFT JOIN users on users.id = comments.user_id")->result_array();
	}

	public function create_comment($comment) 
	{
		$this->db->query('INSERT INTO comments (body, entry_id, user_id, created_at) VALUES ("'.$comment['body'].'", '.$comment['book_id'].', '.$this->session->userdata('id').', NOW())');
	}

}