<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class times extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	
	public function index()
	{
		$date = date('l j  F Y h H:i:s A');
		//$time("America/Los_Angeles");
		$mydate=array('mydate'=>$date);
		//var_dump($mydate);
		$this->load->view("timer",$mydate);		
	}
}