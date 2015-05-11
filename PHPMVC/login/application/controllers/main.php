<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function members()
	{
		$this->load->view('members');
	}
	public function login_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email' , 'Email', 'trim|required');'<br/>';
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() == FALSE)
		{
			echo "came here";	
			$this->load->view('login');		
		}
		else
		{
			echo "hi";
			$data=array(
				'email' =>$this->input->post('email'),
				'is_logged_in' =>1
				);
			$this->session->set_userdata($data);
			redirect('/main/members');
			$this->load->view('login');
		}
		//echo $this->input->post('email');
	}
	public function validate_credentials()
	{
		$this->load->model('model_usres');
		if($this->model_usres->can_log_in())
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('validate_credentials', 'Incorrect username/password.');
			return FALSE;
		}
	}
}

//end of main controller