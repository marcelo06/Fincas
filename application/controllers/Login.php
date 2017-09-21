<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Controlador inventarios
*/
class Login extends CI_Controller
{
	
	function __construct(){
		# code...
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('templates/head');
		$this->load->view('login/home');
	}

	function autenticar(){
		$data = array(
			'usuario' => $this->input->post('usuario'),
			'password' => $this->input->post('password'));

		$result = $this->login_model->consultarUsuario($data);
		if ($result != false ) {
			# code...
						
			$usuario = $result->row();
			$sesion = array(
				'usuario' => $usuario->usuario, 
				'id' => $usuario->id,
				'login' => TRUE);

			$this->session->set_userdata($sesion);

			header("Location: ". base_url());
			
		}else{

			$data['message'] ="No se encontro usuario";
			$data['heading'] ="Intente de nuevo";
			$this->load->view('templates/head');
			$this->load->view('errors/html/error_db',$data); 

		}
	}


}















 ?>