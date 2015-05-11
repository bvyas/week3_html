<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Notes extends CI_Controller {		
	public function create()
	{
		//$this->load->model("Note");
		$this->Note->create_note($this->input->post());
		$this->load->model("Note");
		$array["notes"] = $this->Note->get_notes();
		$this->load->view('partials/notes',$array);
	}
	public function index()
	{
		$this->load->model("Note");
		$array["notes"] = $this->Note->get_notes();
		$this->load->view('index.php');
	}
	public function upate()
	{
		//$this->load->model("Note");
		$this->Note->update_note($this->input->post());
		$this->load->model("Note");
		$array["notes"] = $this->Note->get_notes();
		$this->load->view('partials/notes',$array);		
	}
	public function delete(){
		//$this->load->model("Note");
		$this->Note->delete_note($this->input->post());
		$this->load->model("Note");
		$array["notes"] = $this->Note->get_notes();
		$this->load->view('partials/notes',$array);		
	}
}
?>