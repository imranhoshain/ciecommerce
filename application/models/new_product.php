<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_Product extends CI_Model {

	public function view_data($table, $where, $asc, $desc)
	{
		$this->db->SELECT('*');
		$this->db->FROM($table);
		if($asc != ""){
			$this->db->order_by($asc, $desc);
		}
		return $this->db->get()->result();		
	}
}
