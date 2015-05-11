<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Friend extends CI_Model{

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
				$this->session->set_userdata('alias', $user['alias']);
			}

		}
	}
	public function get_friends()
	{
		return $this->db->query("SELECT * FROM friends WHERE user_id = 1")->result_array();
	}
	public function get_notfriends()
	{
		$id = $this->session->userdata('user_id');
		return $this->db->query("SELECT users.id, users.name, users.alias,users.email FROM
			users LEFT JOIN friends on users.id = friends.user_id LEFT JOIN users AS follower ON 
			follower.id = friends.friend_id WHERE users.id NOT IN (SELECT friend_id FROM friends WHERE
				user_id = $id) AND users.id!= $id")->result();
	}
	public function get_friend($id)
	{
		$query = $this->db->query('SELECT * FROM friends WHERE id = ?', array($id));
		return $query->result_array();
	}
	public function nofriend($id)
	{
		$query = $this->db->query('SELECT * FROM notfriends');
	}
	public function destroy($id)
	{
		return $query = $this->db->query('DELETE FROM friends WHERE id ='.$id);
		//return $query;		
	}
	public function add_friend($id)
	{
		$user_id = $this->session->userdata('user_id');
		$this->db->query('INSER INTO friends (friend_id, user_id) VALUES ($id, $user_id)');

	}

}
	