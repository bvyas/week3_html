<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ninja extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		echo "Welcome to CodeIgniter. The default Controller is ninja.php";
	}
}

//end of main controller