<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class random extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		if($this->session->userdata('counter'))
			{
				$counter=$this->session->userdata('counter');
				$this->session->set_userdata('counter', $counter+1);
			}
			else
			{
				$this->session->set_userdata('counter',1);
			}
			$this->load->view('num',array("counter" =>$this->session->userdata('counter')));
	}
	
	public function num()
	{
		$rand = array
					("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");				
		$randstring = ' ';
		for($i=0; $i<14; $i++)
		{
			$num = rand(0,34);
			$random_keys = $rand[$num];
			$randstring.=$random_keys;		
		}
		//echo $randstring;		
		$mynum=array('mynum'=>$randstring);
		$this->session->set_userdata($mynum);

		redirect('/random/result');
		}
	public function result()
	{
		$data = $this->session->all_userdata();
		$this->load->view("result",$data);
	}


}

//end of main controller