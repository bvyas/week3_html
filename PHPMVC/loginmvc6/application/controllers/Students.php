<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function index()
	{
		$this->load->model("Student");
		$register = $this->Student->get_all();
		$this->load->view('result', array('register' =>$register)
			);
		//$data->$this->session->all_userdata;
		$this->load->view('register');
	}
	public function register()
		{
		$this->load->model("Student");
		$register = $this->Student->get_all();
		$this->load->view('result', array('register' =>$register)
			);
		$data->$this->session->all_userdata;
		}
		public function login()
	{
		$email = $this->input->post('email');
		$password= md5($this->input->post('password'));
		$this->load->model('Student');
		$Student = $this->Student->get_student_by_email($email);
		//if($student && $student['password']) == '$password')
		
			$user = array(
				'student_email' =>$student['email'],
				'student_password' =>$student['password'],
				'is_logged_in' => true
				);
			$this->session->set_userdata($user);
		
		public function checkLogin()
		{
$this->form_validation->set_rules
		})
		//else
		//{
		//	$this->session->set_flashdata("login_error", "Invalid email or password");

		//}
		//}
}
	}	
//end of main controller