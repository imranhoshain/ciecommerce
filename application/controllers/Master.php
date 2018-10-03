<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['content'] = $this->load->view('frontend/home',$data,TRUE);
		$this->load->view('master',$data);
	}

	public function category()
	{
		$data = array();
		$data['content'] = $this->load->view('frontend/category',$data,TRUE);
		$this->load->view('master',$data);
	}
}
