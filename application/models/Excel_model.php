<?php
if(!defined('BASEPATH')) die('No Access');
/**
 * 
 */
class Excel_model extends CI_Model
{
	
	public function readCorona()
	{
		$query = $this->db->get('tbl_corona');
		$data=$query->result_array();
		$query->free_result();

		return $data;
	}
}