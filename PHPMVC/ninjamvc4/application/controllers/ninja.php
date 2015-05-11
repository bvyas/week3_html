<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ninja extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view("process_money");
		
		
	}
	public function process_money()
	{
		if($this->input->post('building') && $this->input->post('building') == 'farm' )
			{
				$mynum= rand(10,20);
				$rand=array('mynum'=>$mynum);
				//var_dump($rand);
				$data=$this->session->all_userdata();
				$this->load->view("process_money", $rand);
			}
		if($this->input->post('building') && $this->input->post('building') == 'Cave' )
			{
				$mynum= rand(5,10);
				$rand=array('mynum'=>$mynum);
				//var_dump($rand);
				$data=$this->session->all_userdata();
				$this->load->view("process_money", $rand);
			}
		if($this->input->post('building') && $this->input->post('building') == 'House' )
			{
				$mynum= rand(2,5);
				$rand=array('mynum'=>$mynum);
				//var_dump($rand);
				$data=$this->session->all_userdata();
				$this->load->view("process_money", $rand);
			}
		if($this->input->post('building') && $this->input->post('building') == 'Casino' )
			{
				$mynum= rand(-10,50);
				$rand=array('mynum'=>$mynum);
				//var_dump($rand);
				$data=$this->session->all_userdata();
				$this->load->view("process_money", $rand);
			}
		//redirect('/ninja/result');
	}		
	
}