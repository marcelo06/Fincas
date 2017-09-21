<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Controlador inventarios
*/
class Dashboard extends CI_Controller{
	
	function __construct(){
		# code...
		parent::__construct();
		$this->load->model('mensajes_model');

		
	}

	function index(){

		
		if($this->session->userdata('login')){
			$data['receptor'] = $this->session->userdata('usuario');
			$data['mensajes'] = $this->mensajes_model->getMensajes($data);

			$this->load->view('templates/head');
			$this->load->view('dashboard/nav',$data);
			$this->load->view('home');

		}else{
			header("Location: ". base_url()."login");
		}
	
	}

	function logout(){
		$sesion = array(
				'usuario' => "", 
				'id' => 0,
				'login' => false);

			$this->session->set_userdata($sesion);
			$this->index();
	}
}















 ?>