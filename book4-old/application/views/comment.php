<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Book extends CI_Model{
public function get_comments()
	{
		return $this->db->query("SELECT comments.id, comments.body, comments.user_id, comments.entry_id, users.email, comments.created_at from comments LEFT JOIN users on users.id = comments.user_id")->result_array();
	}

	public function create_comment($comment) 
	{
		$this->db->query('INSERT INTO comments (body, entry_id, user_id, created_at) VALUES ("'.$comment['body'].'", '.$comment['book_id'].', '.$this->session->userdata('id').', NOW())');
	}
