<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function index()
	{
		$this->load->view('index');
		//$course = $this->course->get_all();
		$this->load->view('course/index', array());
	}
	
	
		//$this->output->enable_profiler(TRUE	});
		
			//$this->session->userdata('add');
			//$this->session->set_userdata('add',$add+1);
			//var_dump($add);
			//$this->load->view("course");
		
		public function Remove()
		{
			echo "came here";
		}

}

//end of main controller
