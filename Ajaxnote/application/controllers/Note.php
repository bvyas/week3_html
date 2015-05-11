<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Notes extends CI_Controller {
	public function index_html()
	{
		$this->load->model("note");
		$data["notes"]= $this->Note->all();
		$this->load->view("partials/notes", $data);
	}
	public function create()
	{
		$new_note = $this->input->post();
		$this->Note->create($new_note);
		$data["notes"]=$this->Note->all();
		$this->load->view("partials/notes", $data);
	}
	public function index()
	{
		$this->load->view('index');
	}
}