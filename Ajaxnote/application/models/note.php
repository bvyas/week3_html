<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model{	

	public function create_notes($post)
	{
		$this->db->query("INSERT INTO notes(title, description, created_at) VALUES(?, ?, now())" , array($post['title'] , $post['description']));
	}
	public function get_notes(){
		return $this->db->query("SELECT * FROM notes")->result_array();
	}
	public function update_notes($post){
		return $this->db->query("UPDATE notes SET description = ? WHERE id = ?", array($post['title'], $post['description'], $post['id']));
	}
	public function delete_notes($post){
		$this->db->query("DELETE FROM notes WHERE id = ?", array($post['id']));
	}
			
}
