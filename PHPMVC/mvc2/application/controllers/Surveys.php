<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view("form");		
	}

	public function process_form()
	{
		// echo "came here";
		// die();
		$newdata = array(
						'Yourname' => 'Kruti',
						 'Location' => 'Mountain View',
						 'Language' => 'PHP',
			 			);
		$this->session->set_userdata($newdata);
		//var_dump($this->session->all_userdata());
		redirect('/surveys/result');
	}

	public function result()
	{
		$data = $this->session->all_userdata();
		$this->load->view("result",$data);

	}
}