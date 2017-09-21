<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Modelo Login
*/
class Fincas_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function getFincas(){
		
		$query = $this->db->get('fincas');

		if($query->num_rows() > 0) return $query;
		else return false;
	}
}





















 ?>