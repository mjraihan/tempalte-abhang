<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_admin extends CI_Model{
	function get_admin($where){
		return $this->db->get_where('tbl_admin', $where);
	}
}