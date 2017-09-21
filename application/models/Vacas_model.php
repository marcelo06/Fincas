<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Modelo Login
*/
class Vacas_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function getVacas(){
		$q = "SELECT `chapeta`,`raza`,`edad`,`cant_act_leche`, f.nombre FROM `vacas` as v ,`fincas` as f WHERE v.ubicacion = f.id_finca";
		$query = $this->db->query($q);

		if($query->num_rows() > 0) return $query;
		else return false;
	}

	function insert($post = NULL){
		
		if ($post != NULL) {
			$nombre = $post['nombre'];
			$file_name = $post['file_name'];
		}

		return true;
	}
}





















 ?>