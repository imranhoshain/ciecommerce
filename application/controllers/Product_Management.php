<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_management extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['title'] ='Product Management | Shopper';
		$this->load->model('New_Product', 'prod', TRUE);
		$data['allunit'] = $this->prod->view_data('unit', '', 'name', 'asc');		
		$data['allcat'] = $this->prod->view_data('category', '', 'name', 'asc');		
		$data['sallcat'] = $this->prod->view_data('subcategory', '', 'name', 'asc');		
		$data['content'] = $this->load->view('backend/new-product',$data,TRUE);		
		$this->load->view('master',$data);
	}

	
}
