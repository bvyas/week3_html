<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product extends CI_Model {
	public function add_product($product)
	{
		$query = "INSERT INTO Products(description, image) VALUES (?,?);"
		//$values = array($product['description'],$product['image']);
		return $this->db->query($query, $values);
	}
}
