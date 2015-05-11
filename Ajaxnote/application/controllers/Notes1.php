<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {
	
	public function index_html()
	{
		echo 'hello';
		$this->load->model("note");
		$data["notes"] = $this->Note->all();
		$this->load->view("partials/notes", $data);
	}
	public function create()
	{
		// $note = "test";
		$new_note = $this->input->post();
		var_dump($this->input->post());
		//die();
		$this->Note->create($new_note);
		$data["notes"]=$this->Note->all();
		$this->load->view("partials/notes", $data);
	}
	public function index()
	{
		$this->load->view('index');
	}
}

//end of notes controller
?>