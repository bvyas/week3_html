<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Controller {
	public function index()
	{
		$this->load->model('category');
	}
	public function add()
	{
		$this->load->model('product');
	}
	public function show()
	{
		$this->load->model('show');
		$product_details= array(
			"products"=>"description",
			"products"=>"images");

		$add_product=$this->product->add_product($product_details);
		if($add_product == TRUE)
			echo "Product is added";
	}
	public function oder()
	{
		$this->load->view('order');
	}
	public function edit()
	{
		$this->load->view('products');
	}
}

//end of main controller