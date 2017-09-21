<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Modelo Login
*/
class Login_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function consultarUsuario($data){
		$this->db->where('usuario', $data['usuario']);
		$query = $this->db->get('usuarios');

		if($query->num_rows() > 0) return $query;
		else return false;
	}
}





















 ?>