<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friends extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
		$this->output->enable_profiler();     	
	}	
	public function process() {
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$email = $this->input->post('email');
    	$password = md5($this->input->post('password'));
    	$this->load->model("friend");
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$this->friend->check($email, $password);
			if ($this->session->userdata('email') != NULL) {
				redirect('/friends/home');	
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
     		 $this->load->model('friend');
     		 $this->friend->create_user($data);
     		 //echo $data;
    		 $success = "<p class='green'>Customer profile has been created!</p>";

    		 redirect('/');
		}
	}	
	public function home() {
		$this->load->model('friend');
		$array['friends'] = $this->friend->get_friends();
		$this->load->view('members', $array);	
	}
	public function no() {
		$this->load->model('friend');
	 	$notfriend = $this->friend->not_friend($id);
	 	$this->load->view('show', array('notfriend' => $notfriend));
			
	}
	public function show($id){
		$this->load->model('friend');
	 	$friend = $this->friend->get_friend($id);
	 	$this->load->view('show', array('friend' => $friend));
	 	//var_dump($friend);
	 	//die();	 	
	 }
	 public function destroy($id){
	 	$this->load->model('friend');
	 	$this->friend->destroy($id);
	 	//var_dump($friend);
	 	redirect('/');
	 }
	 public function add($id){
		$this->load->model('friend');
	 	$friend = $this->friend->add_friend($id);
	 	$this->load->view('show', array('friend' => $friend));
	 	//var_dump($friend);
	 	//die();	 	
	 }
	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}
}

//end of main controller