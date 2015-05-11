<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function index_json()
	{
		$this->load->model("Post");
		$data["posts"] = $this->Post->all();
		echo json_encode($data);
	}
	public function index()
	{
		$this->load->view('index');
	}
}

//end of main controller