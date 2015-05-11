<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Books extends CI_Controller {
	

	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$data=array(
				'email'=>$this->input->post('email'),
				'is_logged_in' => 1
				);
			$this->session->set_userdata($data);
			$this->load->view('members');				
		}
		else
		{
			$this->load->view('index.php');		
		}
	}	
	public function signup_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name');
		$this->form_validation->set_rules('alias', 'Alias');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('cpassword', 'CPassword', 'required|matches[password]');

		$this->form_validation->set_message('is_unique',"That email already exists");

		if($this->form_validation->run()== FALSE) {
			$this->load->view('index.php');			
		}
		else{
			if($query=$this->user_info->create_user())
			{
				$this->members();
			}			
			else
			{
				$this->load->view('index.php');				
			}				
		}
	}	
	public function members()
	{
		if($this->session->userdata('is_logged_in')){
			$this->load->view('members');
		}
		else
		{
			redirect('books/restricted');
		}
	}
	public function restricted(){
		$this->load->view('restricted');
	}
	public function login_validation()
	{	
		$this->load->view('index');
	}
	public function validate_credentials()
	{
		$this->load->model('book');
		if($this->book->can_log_in()){
			
			return true;
		}
		else{
			$this->index->set_message('validate_credentials', 'Incorrect username/password.');
			return false;
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('view/index');
	}
	public function blog()
	{
		$this->load->helper('url');
		$this->load->helper('form');

		$data['title'] = "Harry Potter";
		$data['heading'] = "My Favourite book";
		$data['query']= $this->db_get('entries');

		$this->load->view('members', $data);
	}
	public function comment(){
		// $data['title'] = "Comment Harry Potter";
		// $data['heading'] = "Comment My Favourite book";
		$this->load->model('book');
		$data['query'] = $this->book->get_all();
		$this->load->view('comment', $data);
	}
	function comment_insert()
	{
		$this->db->insert('comments', $_POST);
		redirect('books/comments'.$_POST['entry_id']);
	}
}

//end of main controller