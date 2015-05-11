<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Books extends CI_Controller {	
	public function index()
	{
		$this->load->view('index');
		$this->output->enable_profiler();     	
	}	
	public function process() {
		$this->output->enable_profiler();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$email = $this->input->post('email');
    	$password = md5($this->input->post('password'));
    	$this->load->model("book");
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$this->book->check($email, $password);
			if ($this->session->userdata('email') != NULL) {
				redirect('/books/home');	
			}
			else {
				$this->session->set_flashdata("login_error", "database Invalid email or password!");
				redirect('/');
			}
	    }
	    else
	    {
	    $this->session->set_flashdata("login_error", " form validation Invalid email or password!");
	      	redirect('/');
	    }
	}

	public function home() {
		
		$this->load->model('book');
				$array['books'] = $this->book->get_books();
				$array['comments'] = $this->book->get_comments();
				$this->load->view('members', $array);	
	}
	public function lib() {
				$this->load->model('book');
				$array['newbook'] = $this->book->get_newbook();
				redirect('/books/home');
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
		$this->form_validation->set_error_delimiters('<div class="errors">', '</div>');
		if($this->form_validation->run()== FALSE) {
			
			$errors = validation_errors();
      		$this->session->set_flashdata('errors', $errors);
      		$this->session->set_flashdata("Registration_error", " form validation Invalid email or password!");
	      	redirect('/');		
		}
		else{
			$data = array(
        		'name'=> $this->input->post('name'),
        		'alias' => $this->input->post('alias'),
        		'email'=> $this->input->post('email'),
        		'password'=> md5($this->input->post('password'))
      			 );
     		 $this->load->model('book');
     		 $this->book->create_user($data);
    		 $success = "<p class='green'>Customer profile has been created!</p>";
    		 redirect('books/home');
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
		redirect('/');
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
	 	$comment = $this->input->post();
	 	$this->load->model('book');
	 	$this->book->create_comment($comment);
		redirect('/books/home');
	 }

	 public function book(){
	 	$book= $this->input->post();
	 	$this->load->model('book');
	 	$this->book->insert_book($book);
	 	redirect('books/lib');
	 }
}

//end of main controller