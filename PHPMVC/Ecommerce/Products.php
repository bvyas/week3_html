<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->model('product');
		$products = $this->product->get_all();
		$this->load->view('index', array('products' =>$products));
	}
	public function add()
	{
		$this->load->model('product');
		$quantity = $this->input->post('quantity');
		if($this->session->userdata('counter'))
		{
			$counter=$this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+$quantity);
		}
		else
		{
			$this->session->set_userdata('counter',$quantity);
		}
		redirect('/');
	}
	public function show()
	{
		$this->load->view('show');
		//$products = $this->product->get_all();
		//$this->load->view('show', array('products' =>$products)
		//	);
		//redirect('/');
		$this->input->post()

	}
}

//end of main controller