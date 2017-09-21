<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Modelo Login
*/
class Mensajes_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function getMensajes($data){
		$this->db->where('receptor', $data['receptor']);
		$query = $this->db->get('mensajes');

		if($query->num_rows() > 0) return $query;
		else return false;
	}
}