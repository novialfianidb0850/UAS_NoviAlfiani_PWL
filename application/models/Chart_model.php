<?php
if(!defined('BASEPATH'))die('tidak boleh diakses langsung');
/**
 * 
 */
class Chart_model extends CI_Model
{
  
  public function kecamatan()
  {
    $query = $this->db->query("select * from tbl_corona");
    $hasil = $query->result();
    $query->free_result();
    return $hasil;
  }

  public function getkecamatan()
  {
    $this->db->select('kecamatan, pp, odp, pdp, otg, positif');
    $query = $this->db->get('tbl_corona');
    $hasil = $query->result();
    $query->free_result();
    return $hasil;
  }

}