<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		echo "Welcome to CodeIgniter. The default Controller is times.php";
	}
	public function hello()
	{
		echo "came here";
	}
	public function main()
	{
		$date = date('h:i:sa');
		$time("America/Los_Angeles");
		$mydate=array('mydate'=>$date);
		var_dump($date);
		//$this->load->view("view/times",);
		
	}
}

//end of times controller